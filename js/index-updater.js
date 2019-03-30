// Free use script from kissu.moe

function checkUpdates(){
  if(!(/^\/[a-zA-Z0-9]+\/res/.test(window.location.pathname))){
    var response = $.ajax({
        type: 'GET',
        url: window.location.origin + window.location.pathname.substring(0,window.location.pathname.lastIndexOf("/")+1)
          + "threads.json",
        dataType:"json",
        success: function(json_data){
          console.log(json_data);
          json_data.forEach(function(data){
            console.log(data);
            $.each(data.threads, function(index, thread){
              console.log(thread.last_modified + " > " + previous_time);
              if(thread.last_modified > previous_time){
                console.log("new");
                new_posts++;
                document.title = `(${new_posts}) ` + title
                previous_time = Math.floor(Date.now() / 1000);
              }
            });
          });
        },
        fail:function(a,b,error){
          console.log(error);
        }
      });
    }
    console.log(window.location.origin + window.location.pathname.substring(0,window.location.pathname.lastIndexOf("/")+1)
      + "threads.json")
}
var title = document.title
var new_posts = 0;
var previous_time = Math.floor(Date.now() / 1000);
setInterval(checkUpdates, 30000);
