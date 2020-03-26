import * as React from "react";

export type PostProperties = {
// properties
	hierarchy_class:string,
	paged:boolean, // a check for if you're in a thread page or not
	expanded: boolean, // a check for if thread has been expanded in page mode or not, default false if in thread
	board:string,
	id:number,
	op_id:number,
	key:number,
	highlighted:boolean,

// callbacks
	threadReconstruct:()=>void,
	threadHighlighting:(event: React.MouseEvent<HTMLAnchorElement, MouseEvent>, id:number)=>void,
	threadQuickReply:(id:number)=>void,

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
	imagelimit:number,

	omitted_posts:number,
}

type PostDetails = {
	// options
	filename_cutoff:number,
	file_details_hidden:boolean;
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
		this.state = ({filename_cutoff:20, file_details_hidden:true})
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
	triggerThreadRebuild(){
		this.props.threadReconstruct();
	}
	
	highlightReply(e:React.MouseEvent<HTMLAnchorElement, MouseEvent>, id:number){
		this.props.threadHighlighting(e, id);
	}
	citeReply(id:number){
		this.props.threadQuickReply(id);	

/* The Following is a messy copy past from main.js */
// JQUERY types local has been added but should be removed
	var textarea:any;
	var with_link = undefined;
	if(document.getElementById('index-body') != undefined)
		textarea = document.getElementById('index-body');
	else
        	textarea = document.getElementById('body');
	if (!textarea){
		 return false;
	}
	if ((document as any).selection) {
		// IE
		textarea.focus();
		var sel = (document as any).selection.createRange();
		sel.text = '>>' + id + '\n';
	} else if (textarea.selectionStart || textarea.selectionStart == 0) {
		var start = textarea.selectionStart;
		var end = textarea.selectionEnd;
		textarea.value = textarea.value.substring(0, start) + '>>' + id + '\n' + textarea.value.substring(end, textarea.value.length);
		
		textarea.selectionStart += ('>>' + id).length + 1;
		textarea.selectionEnd = textarea.selectionStart;
	} else {
		// ???
		textarea.value += '>>' + id + '\n';
	}
	if (typeof $ != 'undefined') {
		var select = document.getSelection().toString();
		if (select) {
			var body = $('#reply_' + id + ', #op_' + id).find('div.body');  // TODO: support for OPs
			var index = body.text().indexOf(select.replace('\n', ''));  // for some reason this only works like this
			if (index > -1) {
				textarea.value += '>' + select + '\n';
			}
		}

		$(window).trigger('cite', [id, with_link]);
		$(textarea).change();
	}
	return false;
	// END MESS
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
			return (<a className={classes} title={classes} href={classes} onClick={(e:React.MouseEvent<HTMLAnchorElement>)=> {e.preventDefault();}}>
				   <span className="name">{name}</span>
				</a>);
		}
	}
	readableTime(time:number){
		var ms_time = new Date(time * 1000);
		return  (ms_time.getHours()+ "").padStart(2,'0') + ":" + (ms_time.getMinutes() + "").padStart(2,'0') + ":" + (ms_time.getSeconds()+ "").padStart(2,'0');
	}
	detailsExpander(is_file:boolean){
		return  (is_file ? <a className="details-expander" style={{cursor: "pointer"}} target="_blank" onClick={(e: React.MouseEvent<HTMLAnchorElement, MouseEvent>) => {
							 this.setState({file_details_hidden: !this.state.file_details_hidden});
                                                         e.preventDefault();
                                                   }
					}	>{this.state.file_details_hidden ? "⬎↥⬐" : "↲↧↳"}</a> : " ");
	}
	readableDate(time:number){
		var ms_time = new Date(time * 1000);
		return  "" + (ms_time.getDate() + "").padStart(2,'0') + "/" + (ms_time.getMonth() + "").padStart(2,'0') + "/" + (ms_time.getFullYear()+"").substr(2) 
	}

	createImageSearchLink(search_engine_name:string, search_engine_pattern:string){
		var source = window.location.protocol + "//" + window.location.hostname + "/" + this.props.board + "/src/" + this.props.tim + this.props.ext;
		var search_url = search_engine_pattern.replace("%s", source);
		return <a className="sauce" target="_blank" href={search_url}>{search_engine_name}</a>
	}
	render(){
// FIX: state expantion is hard to follow and depends on multiple conditions. 
// NOTE: data-op is a temporary messure to maintain compatibility with legacy JS
		var detail_display_prop:React.CSSProperties = {display: (this.state.file_details_hidden ? "none" : "block")};
		return (<div data-op={this.props.op_id} id={this.props.hierarchy_class + "_" + this.props.id} className={"post " + this.props.hierarchy_class + " " + (this.props.highlighted || window.location.hash == "#" + this.props.id ? "highlighted" : "")}>
		 {this.props.filename &&
			     <div className="image-container">
			    	<a href={"/" + this.props.board + "/src/" + this.props.tim + this.props.ext} target="_blank">
					<img className="post-image" src={"/" + this.props.board + "/thumb/" + this.props.tim + ".png"} style={{width:this.props.tn_w, height:this.props.tn_h}} alt={"Image failed to load"} />
				</a>
                             </div>
 			   }

			<div className="post-contents">
			   <div className="intro">
				<div className="user">
				  <label htmlFor={"delete_" + this.props.id}>&nbsp;
				    <input type="checkbox" className="delete" name={"delete_" + this.props.id} id={"delete_" + this.props.id} />
				    {this.props.sub &&
					<span className="subject">&nbsp;{this.props.sub}</span>
				    }
				    {this.parseEmailField(this.props.email,this.props.name)}&nbsp;
				    <time data-utc={this.props.time}>{ this.readableDate(this.props.time) } { this.detailsExpander(!!this.props.filename) } { this.readableTime(this.props.time) }</time>
				  </label>&nbsp;
			  	  <a className="post_no" id={"post_no_" + this.props.id} onClick={(event: React.MouseEvent<HTMLAnchorElement, MouseEvent>) => {
							this.highlightReply(event,this.props.id);
						}
				   } href={ "/" + this.props.board + "/res/" + this.props.op_id + "#" + this.props.id}>No.</a>
			          <a className="post_no" style={{cursor: "pointer"}} onClick={(event: React.MouseEvent<HTMLAnchorElement, MouseEvent>) => {
						this.citeReply(this.props.id);
						event.preventDefault();
					    }
					}
				  >{this.props.id}</a>
				{this.props.sticky == 1   && <i className="fa fa-thumb-tack" title="Sticky"></i>}
				{this.props.locked == 1   && <i className="fa fa-lock" title="Locked"></i>}
				{this.props.cyclical == 1 && <i className="fa fa-refresh" title="Cycle"></i>}
				{this.props.sage == 1     && <i className="fa fa-anchor" title="Sink"></i>}
				{this.props.hierarchy_class == "op" && this.props.paged && <span className="reply-anchor">&emsp;<a href={ "/" + this.props.board + "/res/" + this.props.id }>[Open Thread]</a></span>}

			      </div>
				{this.props.filename &&
				   <div className="image-search" style={detail_display_prop}>&ensp;&nbsp;
					{this.createImageSearchLink("Google", "https://www.google.com/searchbyimage?image_url=%s&safe=off")} &nbsp;
					{this.createImageSearchLink("Yandex", "https://yandex.com/images/search?rpt=imageview&url=%s")} &nbsp;
					{this.createImageSearchLink("iqdb", "https://iqdb.org/?url=%s")} &nbsp;
					{this.createImageSearchLink("Trace", "trace.moe/?auto&url=%s")} &nbsp;
				   </div>
				}

				{this.props.filename &&
				   <div className="file" style={detail_display_prop}>
					<span className="fileinfo">
					 <a href={"/" + this.props.board + "/src/" + this.props.tim + this.props.ext}>
						<span className="postfilename" title={this.props.filename + this.props.ext}>{this.shortenFileName(this.props.filename) + this.props.ext}</span>
						</a>&nbsp;
						<span className="unimportant">({ this.formatFileSize(this.props.fsize) }{"," + this.props.h}{"x"+this.props.w})</span>&nbsp;
					</span>
				   </div>
				}
			   </div>
				<div className="body">
				   {this.parsePostBodyIntoSafeJSX(this.props.com)}
				</div>
			   </div>
			   {(this.props.hierarchy_class == "op" && (this.props.omitted_posts > 0 || (this.props.expanded && this.props.paged))) && 
				<div className="omitted">
					{this.props.omitted_posts > 0 && this.props.omitted_posts + " Replies Hidden "}
					<a style={{cursor: "pointer"}} onClick={
						(e:React.MouseEvent<HTMLAnchorElement>)=> {
							this.triggerThreadRebuild();
							e.preventDefault();
						  }
						}>{this.props.omitted_posts > 0 ? "[Expand Replies]" : "[Condense Replies]"}</a>
										
				</div>
		          } 
		    </div>)
	}
}
