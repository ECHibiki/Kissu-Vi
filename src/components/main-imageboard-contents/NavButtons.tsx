
import * as React from "react";


export type NavButtonProperties = {}

type NavButtonVariables = {}

// FIX: expansion doesn't updates the paged property when new treads have been added.
export class NavButtons extends React.Component<NavButtonProperties, NavButtonVariables>{
	
	render(){
		return <span className="nav-links">
			  <a href="">[Refresh]</a>&nbsp;
			  <a href="catalog">[Catalog]</a>&nbsp;
			  <a href="archive">[Archive]</a>&nbsp;</span>
	}

}
