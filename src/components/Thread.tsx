import * as React from "react";
import {Post, PostProperties} from "./Post";

type ThreadProperties = {
    board:string,
    id: string
}

type ThreadVariables = {
	spaced_posts:JSX.Element[]
}

// TODO: Construct a thread from an AJAX json request
export class Thread extends React.Component<ThreadProperties, ThreadVariables>{
	static thread_json_arr:string;
	
	constructor(props:any){
	  super(props);
	}

	componentDidMount(){
		this.setThreadPosts();
	}

	setThreadPosts(){
		var json_arr = this.getThreadJSONData(this.props.board, this.props.id);
		var posts_arr:JSX.Element[] = [];
		// for each reply/op in json_arr
		  posts_arr.push(this.returnPostJSXObject());
		this.defineStatePostsArray(posts_arr);
	}

	getThreadJSONData(board:string, id:string){
		return "parsed JSON dictionary data";
	}

	returnPostJSXObject():JSX.Element{
		var post_details:PostProperties;
		return <Post {...post_details}/>;
	}

	defineStatePostsArray(posts:JSX.Element[]){
		for(var post_ind = 0 ; post_ind < posts.length ; post_ind++){
		  this.setState({spaced_posts: [...this.state.spaced_posts, posts[post_ind]]});
		  this.setState({spaced_posts: [...this.state.spaced_posts, <br/>]});
		}
	}
	
	render(){
		return (
	<div>
	  <input type="hidden" name="board" value={this.props.board} />
	  {this.state.spaced_posts} // set by componentDidMount+setThreadPosts, modified by setThreadConfig assuming config exists
	</div>);
	}
}
