import * as React from "react";

export type ReportButtonProperties = {};

type ReportButtonVariables = {
};

export class ReportButton extends React.Component<ReportButtonProperties, ReportButtonVariables>{

	constructor(props:any){
		super(props);
	}


	render(){
		return <div className="report-container">
				<strong>Report Selected Posts</strong><br/>
				<label>Reason: <input name="reason" type="text"/></label><br/>
				<input type="submit" name="report" value="Report" / >
			</div>
	}
}

