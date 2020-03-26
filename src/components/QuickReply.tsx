// For now quick reply is a throwaway that will simply copy fields from the post form and reuse them through standard javascript querry selectors
// in future it should reference against the solid post form component

import * as React from "react";
import Draggable, {DraggableCore} from 'react-draggable'; // Both at the same time

export type QuickReplyProperties = {
    thread:number,
    cite:number
}
type QuickReplyVariables = {
   
}

export class QuickReply extends React.Component<QuickReplyProperties, QuickReplyVariables>{
	constructor(props:any){
		super(props);
	}	

	render(){
		return (<Draggable><div className="qr-form">Test Div</div></Draggable>)
	}
	
}
