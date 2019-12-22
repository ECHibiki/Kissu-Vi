// index-updater.js
// Free use script from kissu.moe
// Polls threads.json every 30 seconds for updates

//used for communication with index noko in ajax.js
var index_post_no = {post_no:0 , index_noko: false};

$(window).ready(function() {
	function checkUpdates(){
		//don't do in threads
	  if(!(/^\/[a-zA-Z0-9]+\/res/.test(window.location.pathname)) || window.location.pathname == "/"){
		var response = $.ajax({
			type: 'GET',
			url: window.location.origin + window.location.pathname.substring(0,window.location.pathname.lastIndexOf("/")+1)
			  + "posts.json",
			dataType:"json",
			success: function(json_data){
				console.log(json_data);
				index_post_no.post_no = json_data.post_count - index_post_no.post_no - json_data.sage_count;
				var title = document.title.replace(`(${index_post_no.post_no})`, "");
				document.title = `(${index_post_no.post_no}) ` + title;

			},
			fail:function(a,b,error){
			  console.log(error);
			}
		  });
		}
	}
	setInterval(checkUpdates, 30000);
});
