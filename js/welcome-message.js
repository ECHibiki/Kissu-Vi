
onready(function(){
	var request = new XMLHttpRequest(); 
	var motd = "";
	request.open("GET", '/motd.txt');
		request.onreadystatechange = function() { 
		if (this.readyState === 4 && this.status === 200) {
			motd = this.responseText;
			var request = new XMLHttpRequest(); 
			if(typeof localStorage.firstLoad == "undefined" || localStorage.firstLoad != 3){
			localStorage.firstLoad = 3;
			alert(
			"<h1>Welcome to kissu.moe!</h1><br/>\
       			 <h2>Message Of the Day</h2>\
			<p><strong>" + motd + "</strong></p>\
			<h2>Boards</h2>\
			<ul style='text-align: left;'><li>/qa/ - Random content(NSFW spoilered)</li><li>/b/ - Site Developement</li><li>/megu/ - NSFW content</li></ul>\
			<h2>Select Default Theme</h2>\
			Other options are selectable later in options<br/><br/>\
			<label>Default Theme: <select onchange='$(\"#style-select-\" + $(this).val()).click();'><option value='1'>Light</option><option selected='selected' value='2'>Dark</option><option value='3'>Special</option></select></label><br/>\
			<h2>Rules</h2>\
			<p>Don't post obnoxious stuff. Bans are only reserved for the worst cases of people. A deletion does not mean it's personal</p><hr/>\
			<br/>Contact Vermin for issues, site bugs and feedback</p>\
			"
			);

			}
		};
		
	}
	request.send();

});

