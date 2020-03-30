import * as React from "react";

// A composite of posts
import {Thread, ThreadProperties} from "./Thread";
// A composite of threads
import {Page, PageProperties} from "./Page";
import {DeleteButton, DeleteButtonProperties} from "./DeleteButton";
import {ReportButton, ReportButtonProperties} from "./ReportButton";


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

	sendDoneEvents(){
		var mounted_event = new CustomEvent('mounted', {detail: "mounted"});
		var estimated_done_event = new CustomEvent('likely-rendered', {detail:"likely-rendered"});

		//tester
		document.body.addEventListener('mounted', function(r:CustomEvent){console.log(r)});
		document.body.addEventListener('likely-rendered', function(r:CustomEvent){console.log(r)});	

		window.setTimeout(()=>{
			document.body.dispatchEvent(estimated_done_event);
		}, 60);
		document.body.dispatchEvent(mounted_event);
		document.body.style.cursor="default";	
	}

	componentDidMount(){
		document.body.style.cursor="wait";
	}

	render(){
		var thread_options:ThreadProperties = {
		    board: this.props.board,
		    thread_id: this.props.thread_id,
		    paged: false,
		    threadQuickReply: this.threadQuickReply,
		    finishedCallBackFunction: this.sendDoneEvents
		}

		var page_options:PageProperties = {
		    board: this.props.board,
		    page: this.props.page,
		    finishedCallBackFunction: this.sendDoneEvents
		}

		// decide which type of thread display to use. 
		// some modifications will be made to this when the post form is integrated
		// qr sould not be here nor should navigation items, but for now they are.
		// it also should contains delete info
		return (<form id="thread_form" name="postcontrols" action="/post.php" method="post">
			<input type="hidden" name="board" value={ this.props.board } />
			{!this.props.paged && <Thread {...thread_options} />}
			{this.props.paged && <Page {...page_options} />}
			<div className="user-mod-container">
				<DeleteButton /><br/>
				<ReportButton />
			</div>
		</form>)
	}
}
