import * as React from "react";
import {Post, PostProperties} from "./Post";

export type ThreadProperties = {
    board:string,
    id: string,
    paged: boolean
}

type ThreadVariables = {
	spaced_posts:JSX.Element[],
	error:string;
}

// TODO: Construct a thread from an AJAX json request
export class Thread extends React.Component<ThreadProperties, ThreadVariables>{

	constructor(props:any){
	  super(props);

	  this.setThreadPosts = this.setThreadPosts.bind(this);
	  this.getThreadJSONData = this.getThreadJSONData.bind(this);
	  this.returnPostJSXObject = this.returnPostJSXObject.bind(this);
	  this.defineStatePostsArray = this.defineStatePostsArray.bind(this);

	  this.state = {spaced_posts:[], error:null};
	}

	componentDidMount(){
		this.setThreadPosts();
	}

	async setThreadPosts(){
		this.getThreadJSONData(this.props.board, this.props.id)
		   .then((recieved:string) => {
			console.log(recieved);
			var thread_json = JSON.parse(recieved);
			var posts_arr:JSX.Element[] = [];
			thread_json["posts"].forEach((index:number, post_obj:any)=>{
				posts_arr.push(this.returnPostJSXObject(index, post_obj));		
			});
			this.defineStatePostsArray(posts_arr);
		   })
 		   .catch((err)=>{
			console.log(console.log(err))
		       this.setState({error: err + "\nJSON fetch error"});
		 });
	}

	getThreadJSONData(board:string, id:string){
		return new Promise((resolve, reject) => {	
			var thread_req = new XMLHttpRequest();
			thread_req.addEventListener("load", function(re:ProgressEvent<XMLHttpRequestEventTarget>){
				if(this.status >= 400){
					reject(this.status);
				}
				else if (this.status >= 300){
					reject(this.status);
				}
				else{
					console.log(this.response);
					resolve(this.response);
				}
			});
			thread_req.addEventListener("error", function(err:ProgressEvent<XMLHttpRequestEventTarget>){
				reject(this.status);
			})
			thread_req.open("GET", `/${board}/res/${id}.json`);	
			thread_req.send();
		});
	}

	returnPostJSXObject(post_obj:any, key:number):JSX.Element{
		var post_details:PostProperties = {
			hierarchy_class: (post_obj['resto'] == 0 ? "op" : "reply"),
			paged: this.props.paged,
			board: this.props.board,
			id: post_obj['no'],
			op_id:post_obj['resto'],
			key: key * 2 - 1,
			sub: post_obj['sub'],
			com: post_obj['com'],
			email: post_obj['email'],
			name:post_obj['name'],
			time:post_obj['time'],
			sticky: post_obj['sticky'],
			locked: post_obj['locked'],
			cyclical: post_obj['cyclical'],
			sage: post_obj['sage'],
			last_modified: post_obj['last_modified'],	
			tn_h:post_obj['tn_h'],
			tn_w:post_obj['tn_w'],
			h:post_obj['h'],
			w:post_obj['w'],
			fsize:post_obj['fsize'],
			filename:post_obj['filename'],
			ext:post_obj['ext'],
			tim:post_obj['tim'],
			embed:post_obj['embed'],
			md5:post_obj['md5'],
			bumplimit:post_obj['bumplimit'],
			imagelimit:post_obj['imagelimit']	
		};
console.log(post_details);
		return <Post {...post_details}/>;
	}

	defineStatePostsArray(posts:JSX.Element[]){
		for(var post_ind = 0 ; post_ind < posts.length ; post_ind++){
		  this.setState({spaced_posts: [...this.state.spaced_posts, posts[post_ind]]});
		  this.setState({spaced_posts: [...this.state.spaced_posts, <br key={post_ind * 2}/>]});
		}
	}
	
	render(){
		if(this.state.error)
			return (<p>{this.state.error}</p>)
		return (
			<div id={"thread" + this.props.id} className="thread" data-board={this.props.board} data-full-i-d={this.props.board + "." + this.props.id}>
	  		<input type="hidden" name="board" value={this.props.board} />
	  		{this.state.spaced_posts} 
			</div>);// quantity of rendered posts should vary on configuration
	}
}
