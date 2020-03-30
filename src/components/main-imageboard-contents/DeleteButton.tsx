import * as React from "react";

export type DeleteButtonProperties = {};

type DeleteButtonVariables = {
};

export class DeleteButton extends React.Component<DeleteButtonProperties, DeleteButtonVariables>{

	constructor(props:any){
		super(props);
	}


	render(){
		return <div className="delete-container">
				<strong>Delete Selected Posts</strong><br/>
				<label>Password: <input name="pswrd" type="password" value={localStorage['pswrd']}/></label><br/>
				<label>Delete Media Only: <input type="checkbox" name="file"/></label><br/>
				<input type="submit" name="delete" value="delete" / >
			</div>
	}
}

