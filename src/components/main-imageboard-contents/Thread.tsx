import * as React from "react";
import {Post, PostProperties} from "./Post";
import {ThreadUpdater, ThreadUpdaterProperties} from "./ThreadUpdater";

export type ThreadProperties = {
    board:string,
    thread_id: any, // typescript bizzarely not letting me set this as number
    paged: any,

    threadQuickReply: (thread_id:number, post_id:number)=>void,
    finishedCallBackFunction: ()=>void
}

type ThreadVariables = {
	spaced_posts:JSX.Element[],

	error:string,
	expanded:boolean // stores past directive on thread expantion
}

// FIX: expansion doesn't updates the paged property when new treads have been added.
export class Thread extends React.Component<ThreadProperties, ThreadVariables>{
	
	stored_title:string = "";
	total_posts_in_thread:number = 0;
	total_posts_mounted:number = 0;


	constructor(props:any){
	  super(props);

	  this.stored_title = document.title;

	  this.setThreadPostsFetched = this.setThreadPostsFetched.bind(this);
	  this.setThreadPostsPreFetched = this.setThreadPostsPreFetched.bind(this);
	  this.rebuildThreadOnBool = this.rebuildThreadOnBool.bind(this);
	  this.maintainCountOfAllPostsMounted = this.maintainCountOfAllPostsMounted.bind(this);
	  this.highlightThreadPost = this.highlightThreadPost.bind(this);
 	  this.threadQuickReply = this.threadQuickReply.bind(this);

	  this.getThreadJSONData = this.getThreadJSONData.bind(this);
	  this.returnPostJSXObject = this.returnPostJSXObject.bind(this);
	  this.defineStatePostsArray = this.defineStatePostsArray.bind(this);

	  this.state = {spaced_posts:[], error:null, expanded: false};
	}

	highlightThreadPost(e:React.MouseEvent<HTMLAnchorElement, MouseEvent>, id:number){
		var copy_ele:JSX.Element[] = [];
		for (var post of this.state.spaced_posts){
			if(post.props.thread_id){
				if(id == post.props.id){
					e.preventDefault();
					copy_ele.push(React.cloneElement(post, {highlighted:!post.props.highlighted}));
					history.pushState("", document.title, window.location.pathname + window.location.search);
				}
				else{
					copy_ele.push(React.cloneElement(post, {highlighted:false}));
				}
			}
			else{
				copy_ele.push(post);
			}
		}
		this.setState({spaced_posts: copy_ele});
	}

	componentDidMount(){
		if(!this.props.paged){
			this.setThreadPostsFetched();
		}
		else{
			this.setThreadPostsPreFetched(this.props.paged);	
		}
	}

	maintainCountOfAllPostsMounted(){
		this.total_posts_mounted++;
		if(this.total_posts_mounted == this.total_posts_in_thread){
			this.props.finishedCallBackFunction();
		}
	}

	rebuildThreadOnBool(){
		this.setState({expanded: !this.state.expanded});
		if(! this.state.expanded){ // naming is a bit confusing
			this.setThreadPostsFetched();
		}
		else{
			this.setThreadPostsPreFetched(this.props.paged);
		}
	}
		
	threadQuickReply(id:number){
		this.props.threadQuickReply(this.props.thread_id, id);	
	}	

	setThreadPostsPreFetched(thread_json:any){
		var posts_arr:JSX.Element[] = [];
		thread_json.forEach((post_obj:any, index:number)=>{
			posts_arr.push(this.returnPostJSXObject(post_obj, index));		
		});
		this.total_posts_in_thread = posts_arr.length;
		this.total_posts_mounted = 0;
		this.defineStatePostsArray(posts_arr);
	}

	async setThreadPostsFetched(display_notification_event:boolean = false){
		this.getThreadJSONData(this.props.board, this.props.thread_id)
		   .then((recieved:string) => {
			var thread_json = JSON.parse(recieved);
			var posts_arr:JSX.Element[] = [];
			var max_ind = 0;
			thread_json["posts"].forEach((post_obj:any, index:number)=>{
				max_ind = index;
				posts_arr.push(this.returnPostJSXObject(post_obj, index));		
			});

			this.total_posts_in_thread = posts_arr.length;
			this.total_posts_mounted = 0;

			if(display_notification_event){
				var new_posts = (thread_json['posts'].length - this.state.spaced_posts.length / 2);	
				if(new_posts != 0)
					document.title = "(" + new_posts + ") " + this.stored_title;
			}
			this.defineStatePostsArray(posts_arr);
		   })
 		   .catch((err)=>{
			console.log(err)
		       this.setState({error: err + "\nJSON fetch error"});
		 });
	}

	getThreadJSONData(board:string, id:string){
		return new Promise((resolve, reject) => {	
			var thread_req = new XMLHttpRequest();
			thread_req.addEventListener("load", function(re:ProgressEvent<XMLHttpRequestEventTarget>){
				if(this.status >= 300){
					reject(this.status);
				}
				else{
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
			paged: typeof this.props.paged != 'boolean',
			expanded: this.state.expanded,
			highlighted:false,
			threadReconstruct:this.rebuildThreadOnBool,
			threadHighlighting:this.highlightThreadPost,
			threadQuickReply:this.threadQuickReply,
			finishedCallBackFunction:this.maintainCountOfAllPostsMounted,
		
			board: this.props.board,
			id: post_obj['no'],
			op_id:(post_obj['resto'] == false ? post_obj['no'] : post_obj['resto']) ,
			key: key * 2,
			sub: post_obj['sub'],
			com: post_obj['com'],
			email: post_obj['email'],
			name:post_obj['name'],
			capcode:post_obj['capcode'],
			time:post_obj['time'],
			sticky: post_obj['sticky'],
			locked: post_obj['locked'],
			cyclical: post_obj['cyclical'],
			spoiler: post_obj['spoiler'],
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
			imagelimit:post_obj['imagelimit'],
			cites: post_obj['cites'],
			omitted_posts:post_obj['omitted_posts']
		};
		return <Post {...post_details}/>;
	}

	defineStatePostsArray(posts:JSX.Element[]){
		var spaced_list:JSX.Element[] = [];
		for(var post_ind = 0 ; post_ind < posts.length ; post_ind++){
		  spaced_list = [...spaced_list, posts[post_ind]]
		  spaced_list = [...spaced_list, <br key={(post_ind+1) * 2 - 1}/>]
		}
		this.setState({spaced_posts: spaced_list});
	}
	
	render(){
		if(this.state.error)
			return (<p>{this.state.error}</p>)
		
		var thread_updater_props:ThreadUpdaterProperties =
			 {board: this.props.board, 
			  thread_id:this.props.thread_id, 
			   threadListUpdateSignal:this.setThreadPostsFetched}
		
		return (
			<div id={"thread_" + this.props.thread_id} className="thread" data-board={this.props.board} data-full-i-d={this.props.board + "." + this.props.thread_id}>
	  		   { this.state.spaced_posts } 
			   {!this.props.paged && localStorage['auto-up'] == "true" && <div className="bottom-page-modifiers"><hr/><ThreadUpdater {...thread_updater_props} /></div>}
			</div>);// quantity of paged and rendered posts should vary on configuration
	}
}
