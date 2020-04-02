
import * as React from "react";


export type NavButtonProperties = {
	paged:boolean, 
	board:string,
	confirmUpdateClick: (time_since_last_update:string, max_time:number)=>void,
	time_string:string
}

type NavButtonVariables = {}

// FIX: expansion doesn't updates the paged property when new treads have been added.
export class NavButtons extends React.Component<NavButtonProperties, NavButtonVariables>{
	
	constructor(props:any){
		super(props);
		this.state=({paged:false, board:""});

		this.checkThreadUpdates = this.checkThreadUpdates.bind(this);
		this.fetchThreadTimeJSON = this.fetchThreadTimeJSON.bind(this);
	}


	componentDidMount(){
		this.checkThreadUpdates();
	}

// return a time to parent to pass down to child
/* 
   Time save by only scanning first page for greatest time. 
   Hides issue with useless position based sorting of threads.json.
   Unlikley any board will have a page of stickies.
*/
	async checkThreadUpdates(){
		this.fetchThreadTimeJSON(this.props.board)
			.then((recieved:string)=>{
				let thread_json = JSON.parse(recieved);
				let max_time = 0;			
				thread_json[0]["threads"].forEach(function(json_el:any){
					if(json_el['last_modified'] > max_time){
						max_time = json_el['last_modified'];
					}	
				});
				let time_string = "";
console.log(((Date.now()/1000 - max_time) / (60*60*24)));console.log(((Date.now()/1000 - max_time)));
				if(((Date.now()/1000 - max_time) / (60*60*24*30*12)) > 1 ){
					time_string = Math.floor((Date.now()/1000 - max_time / (60*60*24*30*12))) + " year";			
				}
				else if(((Date.now()/1000 - max_time) / (60*60*24*30)) > 1 ){
					time_string = Math.floor(((Date.now()/1000 - max_time) / (60*60*24*30))) + " month";			
				}
				else if(((Date.now()/1000 - max_time) / (60*60*24)) > 1 ){
					time_string = Math.floor(((Date.now()/1000 - max_time) / (60*60*24))) + " day";			
				}
				else if(((Date.now()/1000 - max_time) / (60*60)) > 1 ){
					time_string = Math.floor(((Date.now()/1000 - max_time) / (60*60))) + " hour";			
				}
				else if(((Date.now()/1000 - max_time) / (60)) > 1 ){
					time_string = Math.floor(((Date.now()/1000 - max_time) / (60))) + " minute";			
				}
				else{
					time_string =  Math.floor(Date.now()/1000 - max_time) + " second";	
				}
				if(time_string.substring(0, time_string.indexOf(" ")).length > 1 || parseInt(time_string[0]) > 1){
					time_string += "s"
				}
				console.log(time_string);
				this.props.confirmUpdateClick(time_string, max_time);
			})
			.catch((err)=>{
				console.log(err);
				//this.setState({error: err + "\nJSON fetchError"});
			});
	}
	
	fetchThreadTimeJSON(board:string){
console.log('f');
		return new Promise((resolve, reject) => {
			var xhr_thread_details = new XMLHttpRequest();
			xhr_thread_details.addEventListener("load", function(re:ProgressEvent<XMLHttpRequestEventTarget>){
				if(this.status >= 300) 
					reject(this.status);
				else
					resolve(this.response);
			});
			xhr_thread_details.addEventListener("error", function(err:ProgressEvent<XMLHttpRequestEventTarget>){
				reject(this.status);
			});
			xhr_thread_details.open("GET", `/${board}/threads.json`);
			xhr_thread_details.send();
		});
	}

	render(){
		return <span className="nav-links">
			  {!this.props.paged && <a href={"/" + this.props.board +"/"} className="return">[Return]</a> }&nbsp;
			  {this.props.paged && <a title= "Click to Update" style={{cursor:"pointer", textDecoration: "none"}} className="index-updater" onClick={this.checkThreadUpdates}>[{this.props.time_string}]</a> }&nbsp;
			  <a href={"/" + this.props.board + "/catalog"}>[Catalog]</a>&nbsp;
			  <a href="archive">[Archive]</a>&nbsp;
		     </span>
	}

}

