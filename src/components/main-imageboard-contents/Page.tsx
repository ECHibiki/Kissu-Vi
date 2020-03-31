import * as React from "react";
import {Thread, ThreadProperties} from "./Thread";

export type PageProperties = {
    board:string,
    page:number,

    finishedCallBackFunction: ()=>void
}
type PageVariables = {
    spaced_threads:JSX.Element[],
    error:string
}

// TODO: Use threads.json to retrieve a list of all threads and have individual threads carry their own json data
export class Page extends React.Component<PageProperties, PageVariables>{

	count_of_all_threads_on_page:number = 0;
	count_of_all_threads_mounted:number = 0;

	constructor(props:any){
	  super(props);
	  this.setPageThreads = this.setPageThreads.bind(this);
	  this.getPagedJSONData = this.getPagedJSONData.bind(this);
	  this.returnThreadJSXObject = this.returnThreadJSXObject.bind(this);
	  this.defineStateThreadsArray = this.defineStateThreadsArray.bind(this);
	  this.maintainCountOfAllThreads = this.maintainCountOfAllThreads.bind(this);
	  this.state = {spaced_threads:[], error:null};
	}

	componentDidMount(){
		this.setPageThreads();
	}

	maintainCountOfAllThreads(){
		this.count_of_all_threads_mounted++;
		if(this.count_of_all_threads_mounted == this.count_of_all_threads_on_page){
			this.props.finishedCallBackFunction();
		}
		
	}

	setPageThreads(){
		var json_arr = this.getPagedJSONData(this.props.board, this.props.page)
		    .then((recieved:string) => {
			var paged_json = JSON.parse(recieved)["threads"];
			if(paged_json.length >= this.props.page-1){
				var threads_arr:JSX.Element[] = [];
				paged_json.forEach((thread_obj:any, index:number)=>{
					threads_arr.push(this.returnThreadJSXObject(thread_obj["posts"], index));		
				});

				this.count_of_all_threads_on_page = threads_arr.length;
				this.count_of_all_threads_mounted = 0;

				//unset if set
				this.setState({spaced_threads: []});

				this.defineStateThreadsArray(threads_arr);
			}
			else{
			   this.setState({error: "Page out of bounds"});
			}
		   })
 		   .catch((err:any)=>{
			console.log(err);
		       this.setState({error: err + "\nJSON fetch error"});
		 });
	}

	threadQuickReply(thread_id:number, reply_id:number){
}	

	returnThreadJSXObject(thread_obj:any, key:number):JSX.Element{
		var thread_details:ThreadProperties = {
			board: this.props.board as string,
			thread_id: thread_obj[0]["no"] as number,
			paged: thread_obj,

			threadQuickReply: this.threadQuickReply,
			finishedCallBackFunction: this.maintainCountOfAllThreads
		};
		return <Thread {...thread_details} key={key * 3}/>;
	}

	defineStateThreadsArray(threads:JSX.Element[]){
		for(var thread_ind = 0 ; thread_ind < threads.length ; thread_ind++){
		  this.setState({spaced_threads: [...this.state.spaced_threads, threads[thread_ind]]});
		  this.setState({spaced_threads: [...this.state.spaced_threads, <br className="clear" key={thread_ind * 3 - 1} />]});
		  this.setState({spaced_threads: [...this.state.spaced_threads, <hr key={thread_ind * 3 - 2} />]});
		}
	}


	getPagedJSONData(board:string, page:number){
		return new Promise((resolve, reject) => {	
			var threads_req = new XMLHttpRequest();
			threads_req.addEventListener("load", function(re:ProgressEvent<XMLHttpRequestEventTarget>){
				if(this.status >= 400){
					reject(this.status);
				}
				else if (this.status >= 300){
					reject(this.status);
				}
				else{
					resolve(this.response);
				}
			});
			threads_req.addEventListener("error", function(err:ProgressEvent<XMLHttpRequestEventTarget>){
				reject(this.status);
			})
			threads_req.open("GET", `/${board}/${page-1}.json`);	
			threads_req.send();
		});

	}

	render(){
	   if(this.state.error)
		return (<p>{this.state.error}</p>)	 
	   return (<div id={"page-" + this.props.page + "-container"} className="page-container">
		     {this.state.spaced_threads}
		</div>);
	}
}
