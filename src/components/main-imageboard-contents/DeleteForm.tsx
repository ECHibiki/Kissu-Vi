import * as React from "react";

// A composite of posts
import {Thread, ThreadProperties} from "./Thread";
// A composite of threads
import {Page, PageProperties} from "./Page";

export type DeleteFormProperties = {
	paged:boolean,
	board:string,

	// on condition of not paged
	thread_id:number,
	// on condition of is paged
	page: number

};

type DeleteFormVariables = {
};

export class DeleteForm extends React.Component<DeleteFormProperties, DeleteFormVariables>{
	constructor(props:any){
		super(props);
		this.threadQuickReply = this.threadQuickReply.bind(this);
	}
	
	threadQuickReply(thread_id:number, post_id:number){
	   console.log(thread_id);
	   console.log(post_id);
		// keep passing up to top
	}

	render(){
		var thread_options:ThreadProperties = {
		    board: this.props.board,
		    thread_id: this.props.thread_id,
		    paged: false,
		    threadQuickReply: this.threadQuickReply
		}

		var page_options:PageProperties = {
		    board: this.props.board,
		    page: this.props.page,
		}

		// decide which type of thread display to use. 
		// some modifications will be made to this when the post form is integrated
		// qr sould not be here nor should navigation items, but for now they are.
		// it also should contains delete info
		return (<form id="thread_form" name="postcontrols" action="/post.php" method="post">
			{!this.props.paged && <Thread {...thread_options} />}
			{this.props.paged && <Page {...page_options} />}
		</form>)
	}
}
