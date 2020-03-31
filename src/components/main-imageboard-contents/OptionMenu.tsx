// Use dragable to create a post option selector
// place things in localstorage
// also hooks and refs to relevant things

import * as React from "react";
import Draggable, {DraggableCore} from 'react-draggable';

export type OptionMenuProperties = {optionSetCallBack:()=>void}

type OptionMenuVariables = {
	show_menu:boolean,
	grab_pointer:string,

	toggle_options:boolean
}

export class OptionMenu extends React.Component<OptionMenuProperties, OptionMenuVariables>{
	
	constructor(props:any){
		super(props);
		this.state=({show_menu: false, grab_pointer:"grab", toggle_options:false});
		
		this.toggleShowMenu = this.toggleShowMenu.bind(this);	
		this.setOptionLocalStore = this.setOptionLocalStore.bind(this);		

		if(localStorage['fast-embed'] == undefined) localStorage['fast-embed'] = "true";
		if(localStorage['embed-specific'] == undefined) localStorage['embed-specific'] = "source";
		if(localStorage['file-info'] == undefined) localStorage['file-info'] = "false";
		if(localStorage['rev-img'] == undefined) localStorage['rev-img'] = "true";
		if(localStorage['no-img'] == undefined) localStorage['no-img'] = "false";
		if(localStorage['auto-up'] == undefined) localStorage['auto-up'] = "true";

 	}

	toggleShowMenu(){
		this.setState({show_menu: !this.state.show_menu});
	}


	setOptionLocalStore(e:React.MouseEvent<HTMLInputElement, MouseEvent>){
		switch((e.target as HTMLInputElement).name){
			case "fast-embed": localStorage.setItem("fast-embed", "" + (e.target as HTMLInputElement).checked); break;
			case "embed-specific": localStorage.setItem("embed-specific", (e.target as HTMLInputElement).value);break;

			case "file-info": localStorage.setItem("file-info", "" + (e.target as HTMLInputElement).checked); break;
			case "rev-img": localStorage.setItem("rev-img", "" + (e.target as HTMLInputElement).checked);break;
			case "no-img": localStorage.setItem("no-img", "" + (e.target as HTMLInputElement).checked); break;

			case "auto-up": localStorage.setItem("auto-up", "" + (e.target as HTMLInputElement).checked); break;
		}

		this.setState({toggle_options: !this.state.toggle_options});
		this.props.optionSetCallBack();
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
						<div id="option-input-container">										
						   <strong>Embedding</strong> <br/>
						   &emsp;<label><input type="checkbox"  name="fast-embed" onClick={this.setOptionLocalStore} defaultChecked={localStorage['fast-embed'] == "true"}  />Fast Video Embedding</label><br/>
						   &emsp;&emsp;<label><input type="radio" name="embed-specific" value="source" onClick={this.setOptionLocalStore} defaultChecked={localStorage['embed-specific'] == "source"} disabled={localStorage['fast-embed'] == "false"}/>Source Thumbnails</label><br/>
						   &emsp;&emsp;<label><input type="radio" name="embed-specific" value="thumb" onClick={this.setOptionLocalStore} defaultChecked={localStorage['embed-specific'] == "thumb"} disabled={localStorage['fast-embed'] == "false"}/>Kissu Thumbnails</label><br/>
						   <hr/>

						   <strong>File Options</strong> <br/>
						   &emsp;<label><input name="file-info" type="checkbox" onClick={this.setOptionLocalStore} defaultChecked={localStorage['file-info'] == "true"} />Show file info by default</label><br/>
						   &emsp;<label><input name="rev-img" type="checkbox" onClick={this.setOptionLocalStore} defaultChecked={localStorage['rev-img'] == "true"} />Show reverse image search</label><br/>
						   &emsp;<label><input name="no-img" type="checkbox" onClick={this.setOptionLocalStore} defaultChecked={localStorage['no-img'] == "true"} />Remove images from page load</label><br/>
						   <hr/>

						   <strong>Auto Updater Options</strong> <br/>		
						   &emsp;<label><input name="auto-up" type="checkbox" onClick={this.setOptionLocalStore} defaultChecked={localStorage['auto-up'] == "true"}/>Enable thread auto-updates</label><br/>
						   <hr/>
						   <hr/>
					 </div>
					</div>
				</Draggable>
			}
		      </span>
	}

}
