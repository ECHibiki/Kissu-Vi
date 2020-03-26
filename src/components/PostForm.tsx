import * as React from "react";

// A composite of posts
import {Thread, ThreadProperties} from "./Thread";
// A composite of threads
import {Page, PageProperties} from "./Page";
// QR form
import {QuickReply, QuickReplyProperties} from "./QuickReply";

type PostFormProperties = {
	paged:boolean,
	board:string,

	// on condition of not paged
	thread_id:number,
	// on condition of is paged
	page: number

};

type PostFormVariables = {
	quick_reply_form:JSX.Element
};

export class PostForm extends React.Component<PostFormProperties, PostFormVariables>{
	constructor(props:any){
		super(props);
		this.threadQuickReply = this.threadQuickReply.bind(this);
		this.state = {quick_reply_form: null}
	}
	
	threadQuickReply(thread_id:number, post_id:number){
	   console.log(thread_id);
	   console.log(post_id);
		var quick_reply_properties = {
			thread: thread_id,
			cite: post_id
		}
		this.setState({quick_reply_form: <QuickReply {...quick_reply_properties} />});
	}

	render(){
		var thread_options:ThreadProperties = {
		    board: this.props.board,
		    id: this.props.thread_id,
		    paged: false,
		    threadQuickReply: this.threadQuickReply
		}
	console.log(this.props.thread_id);

		var page_options:PageProperties = {
		    board: this.props.board,
		    page: this.props.page,
		}

		// decide which type of thread display to use. 
		// some modifications will be made to this when the post form is integrated
		// it also should contains delete info
		return (<div>
			{!this.props.paged && <Thread {...thread_options} />}
			{this.props.paged && <Page {...page_options} />}
		</div>)
	}
}
