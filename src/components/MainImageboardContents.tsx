// This file contains information components such as the post form, page navigation, catalog, threads, posts, delete form and images. At current time it probably does not include everything listed, but these are the plans

import * as React from "react";


// Where threads and delete fields are placed
import {DeleteForm, DeleteFormProperties} from "./main-imageboard-contents/DeleteForm";
// QR form
import {QuickReply, QuickReplyProperties} from "./main-imageboard-contents/QuickReply";
// Options menu
import {OptionMenu, OptionMenuProperties} from "./main-imageboard-contents/OptionMenu";
// Update and local navigation
import {NavButtons, NavButtonProperties} from "./main-imageboard-contents/NavButtons";

export type MainImageboardContentsProperties = {
	board:string,
	thread_id:any,
	page: number,
	paged: any
}

// TODO: this component should retrieve properties for nav and passdown
export class MainImageboardContents extends React.Component<MainImageboardContentsProperties, {}>{

	constructor(props:any){
		super(props)	
	}	

	createQuickReply(thread_id:number, post_id:number){}

	createOptionsMenu(){}

	render(){
		var delete_form_properties:DeleteFormProperties = {
			board: this.props.board, 
			thread_id:this.props.thread_id,
			page:this.props.page,
			paged: this.props.paged
		}

		return (<div id="main-imageboard-contents">
			   <hr />
				<NavButtons /> <OptionMenu />
 			   <br/><hr />
				<DeleteForm {...delete_form_properties} />
			    	<NavButtons />
			</div>)	
	}
} 
