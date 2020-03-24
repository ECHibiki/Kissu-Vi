import * as React from "react";
import {Thread, ThreadProperties} from "./Thread";

type PageProperties = {
    board:string,
    page:string
}
type PageVariables = {
    threads:JSX.Element[]
}

// TODO: Use threads.json to retrieve a list of all threads and have individual threads carry their own json data
export class Page extends React.Component<PageProperties, PageVariables>{
	constructor(props:any){
		super(props);
	}


	componentDidMount(){
		this.setPageThreads();
	}

	setPageThreads(){
		var json_arr = this.getPagedJSONData(this.props.board, this.props.page);
		var threads_arr:JSX.Element[] = [];
		// for each reply/op in json_arr
		  var thread_details:ThreadProperties;
		  this.setState({threads: [...this.state.threads, <Thread {...thread_details} />]});
	}

	getPagedJSONData(board:string, page:string){
	}

	render(){
	  return (<div>
		   <input type="hidden" name="board" value={this.props.board} />
		   {this.state.threads}
		</div>);
	}
}
