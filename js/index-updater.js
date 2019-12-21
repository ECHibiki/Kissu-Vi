// index-updater.js
// Free use script from kissu.moe
// Polls threads.json every 30 seconds for updates

$(window).ready(function() {
	var new_posts = 0;
	var previous_time = Math.floor(Date.now() / 1000);
	function checkUpdates(){
		//doesn't do in threads
	  if(!(/^\/[a-zA-Z0-9]+\/res/.test(window.location.pathname))){
		var response = $.ajax({
			type: 'GET',
			url: window.location.origin + window.location.pathname.substring(0,window.location.pathname.lastIndexOf("/")+1)
			  + "threads.json",
			dataType:"json",
			success: function(json_data){
				var new_time = -1;
				json_data.forEach(function(data){
				$.each(data.threads, function(index, thread){
				  if(thread.last_modified > previous_time){
					var title = document.title.replace(`(${new_posts})`, "");
					new_posts++;
					document.title = `(${new_posts}) ` + title
					if(thread.last_modified > new_time) 
						new_time = thread.last_modified
				  }
				});
			  });
			  if(new_time != -1)
				previous_time = new_time;
			},
			fail:function(a,b,error){
			  console.log(error);
			}
		  });
		}
	}
	setInterval(checkUpdates, 30000);
});