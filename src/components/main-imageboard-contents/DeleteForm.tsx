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
	page: number,

	doneEventCallBack:()=>void
};

type DeleteFormVariables = {
	display_user_moderation_tools:boolean;
};

export class DeleteForm extends React.Component<DeleteFormProperties, DeleteFormVariables>{
	
	paged_rebuild_ref: React.RefObject<Page>;
	thread_rebuild_ref: React.RefObject<Thread>;

	constructor(props:any){
		super(props);

		this.state = ({display_user_moderation_tools: false})

		this.threadQuickReply = this.threadQuickReply.bind(this);
		
		this.paged_rebuild_ref = React.createRef();
		this.thread_rebuild_ref = React.createRef();
	}
	
	threadQuickReply(thread_id:number, post_id:number){
	   console.log(thread_id);
	   console.log(post_id);
		// keep passing up to top
	}

	// ref function
	triggerRebuild(){
		if(this.props.paged){
			this.paged_rebuild_ref.current.setPageThreads();
		}
		else{
			this.thread_rebuild_ref.current.setThreadPostsFetched();
		}
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
		    finishedCallBackFunction: this.props.doneEventCallBack
		}

		var page_options:PageProperties = {
		    board: this.props.board,
		    page: this.props.page,

		    finishedCallBackFunction: this.props.doneEventCallBack
		}

		// decide which type of thread display to use. 
		// some modifications will be made to this when the post form is integrated
		// qr sould not be here nor should navigation items, but for now they are.
		// it also should contains delete info
		return (<form id="thread_form" name="postcontrols" action="/post.php" method="post">
			<input type="hidden" name="board" value={ this.props.board } />
			{!this.props.paged && <Thread {...thread_options} ref={this.thread_rebuild_ref} />}
			{this.props.paged && <Page {...page_options} ref={this.paged_rebuild_ref} />}
			<a style={{cursor:"pointer", float:"right"}} onClick={() => this.setState({display_user_moderation_tools: !this.state.display_user_moderation_tools})}>Toggle Moderation</a> <br/>
			<div className="user-mod-container">
				{this.state.display_user_moderation_tools &&
					<div>
						<DeleteButton /><br/>
						<ReportButton />
					</div>
				}
			</div>
		</form>)
	}
}
