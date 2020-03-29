
import * as React from "react";


export type NavButtonProperties = {paged:boolean, board:string}

type NavButtonVariables = {}

// FIX: expansion doesn't updates the paged property when new treads have been added.
export class NavButtons extends React.Component<NavButtonProperties, NavButtonVariables>{
	
	constructor(props:any){
		super(props);
		this.state=({paged:false, board:""});
	}

	render(){
		return <span className="nav-links">
			  {!this.props.paged && <a href={"/" + this.props.board +"/"} >[Index]</a> }&nbsp;
			  <a href="">[Refresh]</a>&nbsp;
			  <a href="catalog">[Catalog]</a>&nbsp;
			  <a href="archive">[Archive]</a>&nbsp;
		     </span>
	}

}
