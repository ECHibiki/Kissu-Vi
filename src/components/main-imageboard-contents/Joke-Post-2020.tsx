import * as React from "react";
import Cookies from 'js-cookie'

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
	finishedCallBackFunction:()=>void,

// json - no & resto already defined
	sub:string,
	com:string,
	email:string,
	name:string,
	capcode:string,
	time:number,
	sticky:number,
	locked:number,
	cyclical:number,
	spoiler:number,
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
// conditional
	cites:any[],
	omitted_posts:number,
}

type PostDetails = {
	// options
	filename_cutoff:number,
	file_details_hidden:boolean;
	show_full_image:boolean,
	show_full_audio:boolean,
	show_full_video:boolean,
	show_full_embed:boolean,

	media_opacity:number
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
	v:string = "vermin";
	r:number;

	constructor(props:any){
		super(props);

		this.r = Math.floor(Math.random() * Math.floor(2));	


		this.generateProperMedia = this.generateProperMedia.bind(this);
		this.generateStagedEmbeding = this.generateStagedEmbeding.bind(this);
		this.onClickExpandImage = this.onClickExpandImage.bind(this);
		this.onClickExpandAudio = this.onClickExpandAudio.bind(this);
		this.onClickExpandVideo = this.onClickExpandVideo.bind(this);
		this.onClickExpandEmbed = this.onClickExpandEmbed.bind(this);
		this.onMediaLoad = this.onMediaLoad.bind(this);
		this.state = ({filename_cutoff:20, file_details_hidden:localStorage['file-info'] == "false", show_full_image: false, show_full_audio:false, show_full_video:false, 
				show_full_embed:false,  media_opacity:1.0})
	}
	
	//this post better be done
	componentDidMount(){
		this.props.finishedCallBackFunction();
	}

	onClickExpandImage(e:React.MouseEvent<HTMLImageElement, MouseEvent>){
		e.preventDefault();
		this.setState({media_opacity:0.8});
		this.setState({show_full_image: !this.state.show_full_image});
	}
	onClickExpandAudio(e:React.MouseEvent<HTMLImageElement, MouseEvent>){
		e.preventDefault();
		this.setState({media_opacity:0.8});
		this.setState({show_full_audio: !this.state.show_full_audio});
	}
	onClickExpandVideo(e:React.MouseEvent<HTMLImageElement, MouseEvent>){
		e.preventDefault();
		this.setState({media_opacity:0.8});
		this.setState({show_full_video: !this.state.show_full_video});
	}
	onClickExpandEmbed(e:React.MouseEvent<HTMLImageElement, MouseEvent>){
		e.preventDefault();
		this.setState({media_opacity:0.8});
		this.setState({show_full_embed: !this.state.show_full_embed});
	}

	onMediaLoad(){
		this.setState({media_opacity:1.0});
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

	createCapCode(name:string, cap_type:string):JSX.Element{
		switch(cap_type){
			case "Admin": return <span className="admin">
						<span className="admin-name">{name}</span>
					        <span className="admin-position">&nbsp;##&nbsp;{cap_type}&nbsp;</span>
						<i className="fas fa-kiss-wink-heart fa-lg"></i>
					     </span>; break;
			case "Mod": return <span className="mod">
						<span className="mod-name">{name}</span>
					        <span className="mod-position">&nbsp;##&nbsp;{cap_type}&nbsp;</span>
						<i className="far fa-kiss fa-lg"></i>
					     </span>; break;
		}
	}
	// also does name
	parseEmailNameField(email:string, name:string, capcode:string):JSX.Element{
		if(capcode){
			return this.createCapCode(name, capcode)
		}
		else if(email == "" || !email)
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
	detailsExpander(is_file:boolean, is_embed:boolean):JSX.Element|string{
		return  (is_file || is_embed ? <a className="details-expander" style={{cursor: "pointer", textDecoration:"none"}} target="_blank" onClick={(e: React.MouseEvent<HTMLAnchorElement, MouseEvent>) => {
							 this.setState({file_details_hidden: !this.state.file_details_hidden});
                                                         e.preventDefault();
                                                   }
					}	>{this.state.file_details_hidden ? "▼▼" : "▲▲"}</a> : " ");
}
	readableDate(time:number){
		var ms_time = new Date(time * 1000);
		return  "" + (ms_time.getDate() + "").padStart(2,'0') + "/" + (ms_time.getMonth() + "").padStart(2,'0') + "/" + (ms_time.getFullYear()+"").substr(2) 
	}

	createImageSearchLink(search_engine_name:string, search_engine_pattern:string):JSX.Element{
		var source = window.location.protocol + "//" + window.location.hostname + "/" + this.props.board + "/src/" + this.props.tim + this.props.ext;
		var search_url = search_engine_pattern.replace("%s", source);
		return <a className="sauce" target="_blank" href={search_url}>{search_engine_name}</a>
	}

	createCitesList(cite_arr:any[]):JSX.Element[]{
		var return_jsx:JSX.Element[] = [];
		var i = 0;
		for(var cite of cite_arr){
			if(cite['board'] ==  this.props.board){
				return_jsx.push(<span key={i++}>&nbsp;
						  <a href={window.location.protocol + "//" + window.location.host + "/" + this.props.board + "/res/" + cite['host'] + "#" + cite['post'] }>{ ">>"  + cite['post']}</a>
						</span>)
			}
			else{
				return_jsx.push(<span key={i++}>&nbsp;<a href={window.location.protocol + "//" + window.location.host + "/" + cite['board'] + "/res/" + cite['host'] + "#" + cite['post'] } >{ ">>>/" + cite['board'] + "/" + cite['post']}</a></span>)	
			}
			
		}
		return return_jsx;
 }

	generateProperMedia():JSX.Element{
		var is_image = false;
		var is_video = false;
		var is_audio = false;
		switch(this.props.ext){
		   case ".jpg": is_image = true; break;
		   case ".png": is_image = true; break;
		   case ".gif": is_image = true; break;
		   case ".mp4": is_video = true; break;
		   case ".webm": is_video = true; break;
		   case ".mp3": is_audio = true; break;
		}

		if(is_image){
			if(!this.state.show_full_image){
				
				var image_thumb_src = "";
				if(this.props.spoiler){
					image_thumb_src = "/static/kissu-spoiler.png";
				}
				else{
					image_thumb_src = "/" + this.props.board + "/thumb/" + this.props.tim + ".png";
				}
				return <div className="image-container-thumb">
				   <a href={"/" + this.props.board + "/src/" + this.props.tim + this.props.ext} target="_blank">
				       <img onClick={this.onClickExpandImage} onLoad={this.onMediaLoad} className="post-image" src={"/static/gags/" + this.v + "-" + this.r + ".png"} style={{opacity:this.state.media_opacity}} />
				   </a>
				</div>
			}
			else{
			        return <div className="image-container">
				  <a href={"/" + this.props.board + "/src/" + this.props.tim + this.props.ext} target="_blank">
				       <img onClick={this.onClickExpandImage} onLoad={this.onMediaLoad} className="full-image" src={"/" + this.props.board + "/src/" + this.props.tim + this.props.ext} style={{opacity:this.state.media_opacity}} />
				   </a>
				</div>
			}
		}
		else if(is_video){
			if(!this.state.show_full_video){
				return <div className="video-container-thumb">
				   <a href={"/player.php?v=/" + this.props.board + "/src/" + this.props.tim + this.props.ext + "&t=" + this.props.filename + this.props.ext + "&loop=0"} target="_blank">
				       <img onClick={this.onClickExpandVideo} onLoad={this.onMediaLoad} className="post-image" src={"/static/gags/" + this.v + "-" + this.r + ".png"} style={{opacity:this.state.media_opacity}}/>
				   </a>
				</div>
			}
			else{
				return <div style={{paddingLeft: "15px", display: "block", position: "static"}} className="video-container">
				 <img onClick={this.onClickExpandVideo} onLoad={this.onMediaLoad} src="/static/collapse.gif" alt="[ - ]" title="Collapse video" style={{marginLeft: "-15px", float: "left", display: "inline"}} />
				   <a href={"/player.php?v=/" + this.props.board + "/src/" + this.props.tim + this.props.ext + "&t=" + this.props.filename + this.props.ext + "&loop=0"} target="_blank">
					<video src={"/" + this.props.board + "/src/" + this.props.tim + this.props.ext} 
							loop={false} style={{position: "static", pointerEvents: "inherit", display: "inline", "maxWidth": "100%", maxHeight: "913px", opacity:this.state.media_opacity}} 
							controls={true} autoPlay={true}>Your browser does not support HTML5 video.
					</video>				   
				   </a>
				</div>
			}
		}
		else if(is_audio){
			if(!this.state.show_full_audio){	
				return <div className="audio-container-thumb">
				   <a href={"/" + this.props.board + "/src/" + this.props.tim + this.props.ext} target="_blank">
				       <img onClick={this.onClickExpandAudio} onLoad={this.onMediaLoad} className="post-image" src={"/static/gags/" + this.v + "-" + this.r + ".png"} style={{opacity:this.state.media_opacity}}/>
				   </a>
				</div>
			}
			else{
				return <div style={{paddingLeft: "15px", display: "block", position: "static"}} className='audio-container'>
				 <img onClick={this.onClickExpandAudio}  onLoad={this.onMediaLoad} src="/static/collapse.gif" alt="[ - ]" title="Collapse Audio" style={{marginLeft: "-15px", float: "left", display: "inline"}} />
				   <a href={"/" + this.props.board + "/src/" + this.props.tim + this.props.ext} target="_blank">
					<audio src={"/" + this.props.board + "/src/" + this.props.tim + this.props.ext} loop={false} style={{position: "static", pointerEvents: "inherit", display: "inline", "maxWidth": "100%", maxHeight: "913px", opacity:this.state.media_opacity}} controls={true} autoPlay={true}>Your browser does not support HTML5 Audio</audio>				   
				   </a>
				</div>
			}

		}
	}

	// If it were possible to XSS this then it should also be possible on vichan.
	// Still a saftey check would be nice
	generateStagedEmbeding():JSX.Element{
		

		if(!this.state.show_full_embed && localStorage['fast-embed'] == "true"){
		    if(localStorage['embed-specific'] == "thumb"){
			return <div className="embed-container-thumb">
				<a target="_blank">
			      <img onClick={this.onClickExpandEmbed} className="post-image" src={"/static/gags/" + this.v + "-" + this.r + ".png"} style={{opacity:this.state.media_opacity}} />
			   </a>
			</div>
		   }
		   else{
		      return <div className="embed-container-thumb">
				<img onClick={this.onClickExpandEmbed} 
					src={"/static/gags/" + this.v + "-" + this.r + ".png"} style={{opacity:this.state.media_opacity}}
					className="post-image" 
					alt={""} />
			     </div> 
                   }
		}
		else{
			var dangerous_html = {__html: this.props.embed};
			return <div className="embed-container" >
				 <img onClick={this.onClickExpandEmbed} src="/static/collapse.gif" alt="[ - ]" title="Collapse Media" style={{marginLeft: "-15px", float: "left", display: "inline"}} />
				 <div dangerouslySetInnerHTML={dangerous_html}></div>
				</div>
		}

	}
	
	// from pure url return image link
	getEmbedThumb(url:string){
		let code_match:RegExpMatchArray;
		if((code_match = /(youtu\.be\/|youtube.com\/)([a-z0-9\-]{11})/gi.exec(url))){
			return "https://img.youtube.com/vi/" + code_match[2] + "/mqdefault.jpg";
		}
		else if((code_match = /(nicovideo\.jp\/watch\/sm)([0-9]{8})/gi.exec(url))){
			return "https://nicovideo.cdn.nimg.jp/thumbnails/" + code_match[2] + "/" + code_match[2] + ".L";

		}
		else{
			return "https://static.libsyn.com/p/assets/6/c/a/3/6ca38c2fefa1e989/WTF_-_new_larger_cover.jpg"
		}
	}

	getSRCFromIframe(embed_string:string){
		var embed_match = embed_string.match(/src=\".*?\"/gi);
		if(embed_match.length == 1){
			let processed_match = embed_match[0]
				.replace("src=\"", "")
				.replace("\"", "")
				.replace("embed/", "")
				.replace("embed.", ""); 			
			return processed_match;
		}
		else
			return "URL not found";
	}


	triggerThreadRebuild(){
		this.props.threadReconstruct();
	}

	render(){
// FIX: state expantion is hard to follow and depends on multiple conditions. 
// NOTE: data-op is a temporary messure to maintain compatibility with legacy JS
		var detail_display_prop:React.CSSProperties = {display: (this.state.file_details_hidden ? "none" : "block")};
		return (<div data-op={this.props.op_id} id={this.props.hierarchy_class + "_" + this.props.id} className={"post " + this.props.hierarchy_class + " " + (this.props.highlighted || window.location.hash == "#" + this.props.id ? "highlighted" : "")}>

			{this.props.filename && localStorage['no-img'] == "false" && this.generateProperMedia()}
			{this.props.embed && localStorage['no-img'] == "false" && this.generateStagedEmbeding()}		
	
			<div className="post-contents">
			   <div className="intro">
				<div className="user">
				  <label htmlFor={"delete_" + this.props.id}>&nbsp;
				    <input type="checkbox" className="delete" name={"delete_" + this.props.id} id={"delete_" + this.props.id} />
				    {this.props.sub &&
					<span className="subject">&nbsp;{this.props.sub}</span>
				    }
				    {this.parseEmailNameField(this.props.email,this.props.name, this.props.capcode)}&nbsp;
				    <time data-utc={this.props.time}>{ this.readableDate(this.props.time) } { this.detailsExpander(!!this.props.filename, !!this.props.embed) } { this.readableTime(this.props.time) }</time>
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
				  >{this.props.id}</a>&nbsp;
				{this.props.sticky == 1   && <i className="fas fa-thumbtack fa-lg" title="Sticky">&nbsp;</i>}
				{this.props.locked == 1   && <i className="fas fa-lock fa-lg" title="Locked">&nbsp;</i>}
				{this.props.cyclical == 1 && <i className="fas fa-sync-alt fa-lg" title="Cycle">&nbsp;</i>}
				{this.props.sage == 1     && <i className="fas fa-anchor fa-lg" title="Sink">&nbsp;</i>}
				{this.props.hierarchy_class == "op" && this.props.paged && <span className="reply-anchor">&emsp;<a href={ "/" + this.props.board + "/res/" + this.props.id }>[Open]</a></span>}
				{this.props.cites && this.createCitesList(this.props.cites)}

			      </div>
			        <div className="optional-file-info" style={detail_display_prop}>
				 {this.props.filename && localStorage['rev-img'] == "true" &&
				   <div className="image-search">&ensp;&nbsp;
					{this.createImageSearchLink("Google", "https://www.google.com/searchbyimage?image_url=%s&safe=off")} &nbsp;
					{this.createImageSearchLink("Yandex", "https://yandex.com/images/search?rpt=imageview&url=%s")} &nbsp;
					{this.createImageSearchLink("iqdb", "https://iqdb.org/?url=%s")} &nbsp;
					{this.createImageSearchLink("Trace", "trace.moe/?auto&url=%s")} &nbsp;
				   </div>
			  	 }

				 {this.props.filename &&
				   <div className="file" >
					<span className="fileinfo">
					 <a href={"/" + this.props.board + "/src/" + this.props.tim + this.props.ext}>
						<span className="postfilename" title={this.props.filename + this.props.ext}>{this.shortenFileName(this.props.filename) + this.props.ext}</span>
						</a>&nbsp;
						<span className="unimportant">({ this.formatFileSize(this.props.fsize) }{"," + this.props.h}{"x"+this.props.w})</span>&nbsp;
					</span>
				   </div>
				 }
				 {this.props.embed &&
				   <div className="embed-src" >
					<span className="embedinfo">
					  <a href={this.getSRCFromIframe(this.props.embed)} target="_blank">
						{this.getSRCFromIframe(this.props.embed)}
					  </a>&nbsp;
					</span>
				   </div>
				 }

			    </div>
			   </div>
				<div className="body">
				   {this.props.com && this.parsePostBodyIntoSafeJSX(this.props.com)}
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
						}>{this.props.omitted_posts > 0 ? "[Expand]" : "[Condense]"}</a>
										
				</div>
		          } 
		    </div>)
	}
}
