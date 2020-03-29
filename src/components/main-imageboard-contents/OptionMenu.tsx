// Use dragable to create a post option selector
// place things in localstorage
// also hooks and refs to relevant things

import * as React from "react";
import Draggable, {DraggableCore} from 'react-draggable';

export type OptionMenuProperties = {}

type OptionMenuVariables = {
	show_menu:boolean
}

export class OptionMenu extends React.Component<OptionMenuProperties, OptionMenuVariables>{
	
	constructor(props:any){
		super(props);
		this.state=({show_menu: false});

		this.toggleShowMenu = this.toggleShowMenu.bind(this);	
	}

	toggleShowMenu(){
		this.setState({show_menu: !this.state.show_menu});
	}

	render(){
		return <span className="options-container">
			<a onClick={this.toggleShowMenu} style={{cursor:"pointer"}}>[ Options ]</a>
			{ this.state.show_menu &&
				<Draggable 
					handle=".handle">
					<div id="options-menu">
						<div className="handle"></div>
					</div>
				</Draggable>
			}
		      </span>
	}

}
