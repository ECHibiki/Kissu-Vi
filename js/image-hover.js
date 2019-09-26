/* image-hover.js 
 * This script is copied almost verbatim from https://github.com/Pashe/8chanX/blob/2-0/8chan-x.user.js
 * All I did was remove the sprintf dependency and integrate it into 8chan's Options as opposed to Pashe's.
 * I also changed initHover() to also bind on new_post.
 * Thanks Pashe for using WTFPL.
 */
 
if (active_page === "catalog" || active_page === "thread" || active_page === "index") {
$(document).on('ready', function(){

if (window.Options && Options.get_tab('general')) {
	Options.extend_tab("general", 
	"<fieldset><legend>Image hover</legend>"
	+ ("<label class='image-hover' id='imageHover'><input type='checkbox' /> "+_('Image hover')+"</label>")
	+ ("<label class='image-hover' id='catalogImageHover'><input type='checkbox' /> "+_('Image hover on catalog')+"</label>")
	+ ("<label class='image-hover' id='imageHoverFollowCursor'><input type='checkbox' /> "+_('Image hover should follow cursor')+"</label>")
	+ "</fieldset>");
}

$('.image-hover').on('change', function(){
	var setting = $(this).attr('id');

	localStorage[setting] = $(this).children('input').is(':checked');
});

if (!localStorage.imageHover || !localStorage.catalogImageHover || !localStorage.imageHoverFollowCursor) {
	localStorage.imageHover = 'true';
	localStorage.catalogImageHover = 'false';
	localStorage.imageHoverFollowCursor = 'true';
}

if (getSetting('imageHover')) $('#imageHover>input').prop('checked', 'checked');
if (getSetting('catalogImageHover')) $('#catalogImageHover>input').prop('checked', 'checked');
if (getSetting('imageHoverFollowCursor')) $('#imageHoverFollowCursor>input').prop('checked', 'checked');

function getFileExtension(filename) { //Pashe, WTFPL
	if (filename.match(/\.([a-z0-9]+)(&loop.*)?$/i) !== null) {
		return filename.match(/\.([a-z0-9]+)(&loop.*)?$/i)[1];
	} else if (filename.match(/https?:\/\/(www\.)?youtube.com/)) {
		return 'Youtube';
	} else {
		return "unknown: " + filename;
	}
}

function isImage(fileExtension) { //Pashe, WTFPL
	return ($.inArray(fileExtension, ["jpg", "jpeg", "gif", "png"]) !== -1);
}

function isVideo(fileExtension) { //Pashe, WTFPL
	return ($.inArray(fileExtension, ["webm", "mp4"]) !== -1);
}

function isOnCatalog() {
	return window.active_page === "catalog";
}

function isOnThread() {
	return window.active_page === "thread";
}

function getSetting(key) {
	return (localStorage[key] == 'true');
}

function initImageHover() { //Pashe, influenced by tux, et al, WTFPL
	if (!getSetting("imageHover") && !getSetting("catalogImageHover")) {return;}
	
	var selectors = [];
	
	if (getSetting("imageHover")) {selectors.push("img.post-image", "canvas.post-image");}
	if (getSetting("catalogImageHover") && isOnCatalog()) {
		selectors.push(".thread-image");
		$(".theme-catalog div.thread").css("position", "inherit");

		cat_thread_imgs = $(".thread-image");
		
		const BOARD = "/" + window.location.pathname.substring(1,window.location.pathname.lastIndexOf("/")) + "/";
		console.log(BOARD);
		
		//from API give each an indicator of origin file source
		var catalog_json = jQuery.parseJSON($.ajax({
				type: "GET",
				url: "https://kissu.moe" + BOARD + "catalog.json",
				async: false
		}).responseText);
		//start from max, go down
		var thread_no = 0;
		cat_thread_imgs.each(function(){
			if(catalog_json[Math.floor(thread_no / 10)] != undefined){
				thread_json = catalog_json[Math.floor(thread_no / 10)].threads[thread_no % 10];
				cat_thread_imgs.get(thread_no).setAttribute('origin_source', "https://kissu.moe" + BOARD + "src/" + thread_json.tim + thread_json.ext);
				cat_thread_imgs.get(thread_no).setAttribute('h', thread_json.h);
				cat_thread_imgs.get(thread_no).setAttribute('w', thread_json.w);
			}
			thread_no++;
		});
	}
	
	function bindEvents(el) {
		$(el).find(selectors.join(", ")).each(function () {
			if ($(this).parent().data("expanded")) {return;}
			
			var $this = $(this);
			
			$this.on("mousemove", imageHoverStart);
			$this.on("mouseout",  imageHoverEnd);
			$this.on("click",     imageHoverEnd);
		});
	}

	bindEvents(document.body);
	$(document).on('new_post', function(e, post) {
		bindEvents(post);
	});
}

function imageHoverStart(e) { //Pashe, anonish, WTFPL
	var hoverImage = $("#chx_hoverImage");

	if (hoverImage.length) {
		if (getSetting("imageHoverFollowCursor")) {
			var scrollTop = $(window).scrollTop();
			var imgY = e.pageY;
			var imgTop = imgY;
			var windowWidth = $(window).width();
			var imgWidth = hoverImage.width() + e.pageX;
			
			if (imgY < scrollTop + 15) {
				imgTop = scrollTop;
			} else if (imgY > scrollTop + $(window).height() - hoverImage.height() - 15) {
				imgTop = scrollTop + $(window).height() - hoverImage.height() - 15;
			}
			
			if (imgWidth > windowWidth) {
				hoverImage.css({
					'left': (e.pageX + (windowWidth - imgWidth)),
					'top' : imgTop,
				});
			} else {
				hoverImage.css({
					'left': e.pageX,
					'top' : imgTop,
				});
			}
			
			hoverImage.appendTo($("body"));
		}
		
		return;
	}
	
	var $this = $(this);
	
	var fullUrl;
	if(!isOnCatalog()){
		if ($this.parent().attr("href").match("src")) {
			fullUrl = $this.parent().attr("href");
		} else if (isOnCatalog() && $this.parent().attr("href").match("src")) {
			fullUrl = $this.attr("data-fullimage");
			if (!isImage(getFileExtension(fullUrl))) {fullUrl = $this.attr("src");}
		}
		if (fullUrl == undefined || isVideo(getFileExtension(fullUrl))) {return;}
	}
	else{
		fullUrl = $this.attr("origin_source");
	}
	hoverImage = $('<img id="chx_hoverImage" src="'+fullUrl+'" />');

	if (getSetting("imageHoverFollowCursor")) {
		var size, scale;
		if(!isOnCatalog()){
			size = $this.parents('.file').find('.unimportant').text().match(/\b(\d+)x(\d+)\b/),
				maxWidth = $(window).width(),
				maxHeight = $(window).height();

			scale = Math.min(1, maxWidth / size[1], maxHeight / size[2]);
		}
		else{
			size = ["", $this.attr("w"),$this.attr("h")],
				maxWidth = $(window).width(),
				maxHeight = $(window).height();

			scale = Math.min(1, maxWidth / size[1], maxHeight / size[2]);
		}
		hoverImage.css({
			"position"      : "absolute",
			"z-index"       : 101,
			"pointer-events": "none",
			"width"         : size[1] + "px",
			"height"        : size[2] + "px",
			"max-width"     : (size[1] * scale) + "px",
			"max-height"    : (size[2] * scale) + "px",
			'left'          : e.pageX,
			'top'           : imgTop,
		});
	} 
	else {
		hoverImage.css({
			"position"      : "fixed",
			"top"           : 0,
			"right"         : 0,
			"z-index"       : 101,
			"pointer-events": "none",
			"max-width"     : "100%",
			"max-height"    : "100%",
		});
	}
	hoverImage.appendTo($("body"));
	if (isOnThread()) {$this.css("cursor", "none");}
}

function imageHoverEnd() { //Pashe, WTFPL
	$("#chx_hoverImage").remove();
}

initImageHover();
});
}

