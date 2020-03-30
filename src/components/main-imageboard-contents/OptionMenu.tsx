// Use dragable to create a post option selector
// place things in localstorage
// also hooks and refs to relevant things

import * as React from "react";
import Draggable, {DraggableCore} from 'react-draggable';

export type OptionMenuProperties = {}

type OptionMenuVariables = {
	show_menu:boolean
	grab_pointer:string;
}

export class OptionMenu extends React.Component<OptionMenuProperties, OptionMenuVariables>{
	
	constructor(props:any){
		super(props);
		this.state=({show_menu: false, grab_pointer:"grab"});

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
						<div className="handle" onMouseDown={(e)=>this.setState({grab_pointer: "grabbing"})} 
								onMouseUp={(e)=>this.setState({grab_pointer: "grab"})}
								style={{cursor: this.state.grab_pointer}}>
							<strong unselectable="on"  >Page Options</strong>
							<a className="close-options" onClick={this.toggleShowMenu}>X</a><hr/>
						</div>
										
						   <strong>Embedding</strong> <br/>
						   &emsp;<label><input type="checkbox" defaultChecked={true}/>Fast Video Embedding</label><br/>
						   &emsp;&emsp;<label><input type="radio" name="embed_specific" defaultChecked={true}/>Source Thumbnails</label><br/>
						   &emsp;&emsp;<label><input type="radio" name="embed_specific" defaultChecked={false}/>Kissu Thumbnails</label><br/>
						   <hr/>

						   <strong>File Options</strong> <br/>
						   &emsp;<label><input type="checkbox" defaultChecked={true}/>Show file info by default</label><br/>
						   &emsp;<label><input type="checkbox" defaultChecked={false}/>Show reverse image search</label><br/>
						   &emsp;<label><input type="checkbox" defaultChecked={false}/>Remove images from page load</label><br/>
						   <hr/>

						   <strong>Auto Updater Options</strong> <br/>		
						   &emsp;<label><input type="radio" name="embed_specific" defaultChecked={true}/>Source Thumbnails</label><br/>
						   &emsp;<label><input type="radio" name="embed_specific" defaultChecked={false}/>Kissu Thumbnails</label><br/>
						   <hr/>

						   <strong>Userscript Options</strong> <br/>
						   &emsp;<label><input type="radio" name="embed_specific" defaultChecked={true}/>Source Thumbnails</label><br/>
						   &emsp;<label><input type="radio" name="embed_specific" defaultChecked={false}/>Kissu Thumbnails</label><br/>
						   <hr/>
					</div>
				</Draggable>
			}
		      </span>
	}

}
