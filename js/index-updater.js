// index-updater.js
// Free use script from kissu.moe
// Polls threads.json every 30 seconds for updates

var new_posts = 0;
var previous_time = Math.floor(Date.now() / 1000);
function checkUpdates(){
  if(!(/^\/[a-zA-Z0-9]+\/res/.test(window.location.pathname))){
    var response = $.ajax({
        type: 'GET',
        url: window.location.origin + window.location.pathname.substring(0,window.location.pathname.lastIndexOf("/")+1)
          + "threads.json",
        dataType:"json",
        success: function(json_data){
          json_data.forEach(function(data){
            $.each(data.threads, function(index, thread){
              if(thread.last_modified > previous_time){
				var title = document.title.replace(`(${new_posts})`, "");
				new_posts++;
                document.title = `(${new_posts}) ` + title
              }
            });
          });
		  previous_time = Math.floor(Date.now() / 1000);
        },
        fail:function(a,b,error){
          console.log(error);
        }
      });
    }
}
setInterval(checkUpdates, 30000);
