// index-updater.js
// Free use script from kissu.moe
// Polls threads.json every 30 seconds for updates

//used for communication with index noko in ajax.js
var index_post_no = {post_no:undefined, index_noko: false};

$(window).ready(function() {
	
	var previous_index_no = 0;
	function checkUpdates(){
		//don't do in threads
	  if(!(/^\/[a-zA-Z0-9]+\/res/.test(window.location.pathname)) || window.location.pathname == "/"){
		var response = $.ajax({
			type: 'GET',
			url: window.location.origin + window.location.pathname.substring(0,window.location.pathname.lastIndexOf("/")+1)
			  + "posts.json",
			dataType:"json",
			success: function(json_data){
				if(index_post_no.post_no == undefined){
					index_post_no.post_no = json_data.recent_post - json_data.sage_count;
					previous_index_no = json_data.recent_post - index_post_no.post_no - json_data.sage_count;
				}
				var index_no = json_data.recent_post - index_post_no.post_no - json_data.sage_count;
				if(index_no != previous_index_no){
					var title = document.title.replace(`(${previous_index_no})`, "");
					document.title = `(${index_no}) ` + title;
					previous_index_no = index_no
				}

			},
			fail:function(a,b,error){
			  console.log(error);
			}
		  });
		}
	}

	setTimeout(checkUpdates, 5000);
	setInterval(checkUpdates, 10000);
});
