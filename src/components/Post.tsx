import * as React from "react";

type PostProperties = {
	hierarchy:string,
	paged:boolean,
	board:string,
	id:number,
	op_id:number
}

type PostDetails = {
	no:number,
	sub:string,
	com:string,
	name:string,
	time:number,
	omitted_posts:number,
	ommited_images:number,
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
	md5:string,
	bumplimit:number,
	imagelimit:number,
	resto:number,

	filename_cuttoff:number
}

// TODO: When this is used in Threads.tsx states will have to move to properties where applicable
// TODO: Ommited field


// TODO: Class should make use of conditionals on every state and render given information iff user permits it or is default based on localstore values.
// TODO: Retrieve JSON Data
// TODO: Use JSON Data
// TODO: Add in default sauce
// TODO: User creation of sauce sources
// TODO: Replicate default intro click functions
// TODO: Replicate/Integrate 4chanX functions
export class Post extends React.Component<PostProperties, PostDetails>{	
	post_json:string;	

	constructor(props:any){
		super(props);
	}

	componentDidMount(){
	}

	// taking the json data for body field, parse string and create JSX elements for safe tags such as <a>, <br>
	// the raw json should already be safe from the server, however can never be too sure
	parsePostBodyIntoSafeJSX(){
		return (<span></span>);
	}

	shortenFileName(fname:string){
	}

	render(){
		return (<div className={"post " + this.props.hierarchy}>
			   <div className="file">
				<p className="fileinfo">
				  File: <a href={this.state.time + ".jpg"}>
					  <span className="postfilename" title={this.shortenFileName(this.state.filename) + this.state.ext}></span>
					</a>&nbsp;
					<span className="unimportant">({this.state.fsize}{"," + this.state.h}{"x"+this.state.w})</span>&nbsp;
					<a className="sauce" target="_blank" href="https://www.google.com/searchbyimage?image_url=&safe=off">Google</a>
					<a href={"/" + this.props.board + "/src/" + this.state.tim + ".jpg"} target="_blank">
						<img className="post-image" src={"/" + this.props.board + "/thumb/" + this.state.tim + this.state.ext} style={{width:this.state.w, height:this.state.h}} alt={"Image: /" + this.props.board + "/thumb/" + this.state.tim + this.state.ext + "failed to load"} />
					</a>
				</p>
			   </div>
			   <p className="intro">
				<input type="checkbox" className="delete" name={"delete_" + this.props.id} id={"delete_" + this.props.id} />&nbsp;
				<a className="post_no" id={"post_no_" + this.props.id} onClick={return highlightReply(this.props.id, event)} href={"/qa/res/" + this.props.op_id + "#" + this.props.id}>No.</a>
			        <a className="post_no" onClick={return citeReply(this.props.id, event)} href={"/qa/res/" + this.props.op_id + "#" + this.props.id}>{this.props.id}</a>
			        <a className="menu-button" href="javascript:;"><i className="fa fa-angle-down"></i></a>
			   </p>
			   <div className="body">
				{this.parsePostBodyIntoSafeJSX()}
			   </div>
			  {this.props.hierarchy == "op" && this.props.paged &&
				<span className="ommited"></span>
			  }
			</div>)
	}
}
