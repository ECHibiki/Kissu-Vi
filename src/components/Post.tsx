import * as React from "react";

export type PostProperties = {
// properties
	hierarchy_class:string,
	paged:boolean,
	board:string,
	id:number,
	op_id:number,
	key:number,

// json - no & resto already defined
	sub:string,
	com:string,
	email:string,
	name:string,
	time:number,
	sticky:number,
	locked:number,
	cyclical:number,
	sage:number,
	last_modified:number,
	tn_h:number,
	tn_w:number,
	h:number,
	w:number,
	fsize:number,
	filename:string,
	ext:string,
	tim:string,
	embed:string,
	md5:string,
	bumplimit:number,
	imagelimit:number


}

type PostDetails = {
	// options
	filename_cutoff:number
}



// TODO: Class should make use of conditionals on every state and render given information iff user permits it or is default based on localstore values.
// TODO: Retrieve JSON Data
// TODO: Use JSON Data
// TODO: Add in default sauce
// TODO: User creation of sauce sources
// TODO: Replicate default intro click functions
// TODO: Replicate/Integrate 4chanX functions
	// - Dropdown Hide+Filter
	// - Thread hiding button

// TODO: When this is used in Threads.tsx states will have to move to properties where applicable
// TODO: Ommited field be set by options

export class Post extends React.Component<PostProperties, PostDetails>{	
	post_json:string;	

	constructor(props:any){
		super(props);
		this.state = ({filename_cutoff:20})
	}

	componentDidMount(){
	}

	// taking the json data for body field, parse string and create JSX elements for safe tags such as <a>, <br>
	// the raw json should already be safe from the server, however can never be too sure and makes for crearer render insertion
	// current method prevents localstore and cookie being called from inline scripting
	parsePostBodyIntoSafeJSX(unsafe_body:string){
		unsafe_body = unsafe_body.replace(/cookie/g, "c&#111;&#111;kie");
		var safe_body = unsafe_body.replace(/localStorage/g, "l&#111;calSt&#111;rage");
		var xss_protect_cookie_and_localStorage = {__html: safe_body};
		return (<div dangerouslySetInnerHTML={xss_protect_cookie_and_localStorage}></div>);
	}

	shortenFileName(fname:string){
		if(fname.length > this.state.filename_cutoff)
			return fname.substr(0,this.state.filename_cutoff) + "..";
		else
			return fname;
	}

	highlightReply(e:React.MouseEvent<HTMLAnchorElement, MouseEvent>, id:number){
	}
	citeReply(e: React.MouseEvent<HTMLAnchorElement, MouseEvent>, id:number){
	}
	formatFileSize(fsize:number){
		if(fsize / (1024 * 1024) > 1){ // MB size check
			return (fsize / (1024*1024)).toFixed(2) + "MB";
		}
		else if(fsize / 1024 > 1){ // KB size check
			return (fsize / (1024)).toFixed(2) + "KB";
		}
		else{ // Byte Default
			return (fsize) + "B";
		}
	}
	// also does name
	parseEmailField(email:string, name:string){
		if(email == "" || !email)
			return (<span className="name">{this.props.name}</span>);
		else {
			var parsed_email = email.split('%20');
			var classes = "";	
			for (let item of parsed_email){
				classes += item + " ";
			}
			return (<a className={classes} title={classes} href={classes} onClick={(e:React.MouseEvent<HTMLAnchorElement>)=> {e.preventDefault();return false;}}>
				   <span className="name">{name}</span>
				</a>);
		}
	}
	readableTime(time:number){
		var ms_time = new Date(time * 1000);
		return  "" + (ms_time.getDate() + "").padStart(2,'0') + "/" + (ms_time.getMonth() + "").padStart(2,'0') + "/" + (ms_time.getFullYear()+"").substr(2)  + "|" + (ms_time.getHours()+ "").padStart(2,'0') + ":" + (ms_time.getMinutes() + "").padStart(2,'0') + ":" + (ms_time.getSeconds()+ "").padStart(2,'0');
	}
	render(){
		return (<div className={"post " + this.props.hierarchy_class}>
			   <div className="intro">
				<div className="user">
				  <label htmlFor={"delete_" + this.props.id}>&nbsp;
				    <input type="checkbox" className="delete" name={"delete_" + this.props.id} id={"delete_" + this.props.id} />&nbsp;

				    {this.props.sub &&
					<span className="subject">&nbsp;{this.props.sub}</span>
				    }
				    {this.parseEmailField(this.props.email,this.props.name)}&nbsp;
				    <time data-utc={this.props.time}>{ this.readableTime(this.props.time) }</time>
				  </label>&nbsp;
			  	  <a className="post_no" id={"post_no_" + this.props.id} onClick={(event: React.MouseEvent<HTMLAnchorElement, MouseEvent>) => {return this.highlightReply(event,this.props.id)}} href={"/qa/res/" + this.props.op_id + "#" + this.props.id}>No.</a>
			          <a className="post_no" onClick={(event: React.MouseEvent<HTMLAnchorElement, MouseEvent>) => {return this.citeReply(event,this.props.id)}} href={"/qa/res/" + this.props.op_id + "#" + this.props.id}>{this.props.id}</a>
				{this.props.sticky == 1 &&   <i className="fa fa-thumb-tack" title="Sticky"></i>}
				{this.props.locked == 1&&    <i className="fa fa-lock" title="Locked"></i>}
				{this.props.cyclical == 1 && <i className="fa fa-refresh" title="Cycle"></i>}
				{this.props.sage == 1&&      <i className="fa fa-anchor" title="Sink"></i>}

			      </div>
				{this.props.filename &&
				   <div className="file">
					<span className="fileinfo">
					 <a href={"/" + this.props.board + "/src/" + this.props.tim + this.props.ext}>
						<span className="postfilename" title={this.props.filename + this.props.ext}>{this.shortenFileName(this.props.filename) + this.props.ext}</span>
						</a>⬎&nbsp;
						<span className="unimportant">({ this.formatFileSize(this.props.fsize) }{"," + this.props.h}{"x"+this.props.w})</span>&nbsp;
						<a className="sauce" target="_blank" href="https://www.google.com/searchbyimage?image_url=&safe=off">Google</a>
					</span>
				   </div>
				}
			   {this.props.filename &&
			     <div>
			    	<a href={"/" + this.props.board + "/src/" + this.props.tim + this.props.ext} target="_blank">
					<img className="post-image" src={"/" + this.props.board + "/thumb/" + this.props.tim + ".png"} style={{width:this.props.tn_w, height:this.props.tn_h}} alt={"Image failed to load"} />
				</a>
                             </div>
 			   }
			   </div>
			   <div className="body">
				{this.parsePostBodyIntoSafeJSX(this.props.com)}
			   </div>
			  {this.props.hierarchy_class == "op" && this.props.paged &&
				<span className="omited"></span>
			  }
			</div>)
	}
}
