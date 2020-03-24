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
	name:string,
	time:number,
	sticky:number,
	locked:number,
	cyclical:number,
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
	parsePostBodyIntoSafeJSX(){
		return (<span></span>);
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
	render(){
		return (<div className={"post " + this.props.hierarchy_class}>
			{this.props.fsize &&
			   <div className="file">
				<p className="fileinfo">
				  File: <a href={this.props.time + ".jpg"}>
					  <span className="postfilename" title={this.props.filename + this.props.ext}>{this.shortenFileName(this.props.filename) + this.props.ext}</span>
					</a>&nbsp;
					<span className="unimportant">({ this.formatFileSize(this.props.fsize) }{"," + this.props.h}{"x"+this.props.w})</span>&nbsp;
					<a className="sauce" target="_blank" href="https://www.google.com/searchbyimage?image_url=&safe=off">Google</a>
					<a href={"/" + this.props.board + "/src/" + this.props.tim + this.props.ext} target="_blank">
						<img className="post-image" src={"/" + this.props.board + "/thumb/" + this.props.tim + ".png"} style={{width:this.props.w, height:this.props.h}} alt={"Image failed to load"} />
					</a>
				</p>
			   </div>
			}
			   <p className="intro">
				<input type="checkbox" className="delete" name={"delete_" + this.props.id} id={"delete_" + this.props.id} />&nbsp;
				<a className="post_no" id={"post_no_" + this.props.id} onClick={(event: React.MouseEvent<HTMLAnchorElement, MouseEvent>) => {return this.highlightReply(event,this.props.id)}} href={"/qa/res/" + this.props.op_id + "#" + this.props.id}>No.</a>
			        <a className="post_no" onClick={(event: React.MouseEvent<HTMLAnchorElement, MouseEvent>) => {return this.citeReply(event,this.props.id)}} href={"/qa/res/" + this.props.op_id + "#" + this.props.id}>{this.props.id}</a>	
			   </p>
			   <div className="body">
				{this.parsePostBodyIntoSafeJSX()}
			   </div>
			  {this.props.hierarchy_class == "op" && this.props.paged &&
				<span className="omited"></span>
			  }
			</div>)
	}
}
