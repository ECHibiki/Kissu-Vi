/* 
	Designed on kissu.moe for easily customizable css of the post reply bg 
	Just copy it who cares......
*/
$(document).ready(function(){

var unset_spread = false;
var default_spread = "";
     var generateBannerOptionData = function (){	
		// add the tab for viewing the format settings
		if (window.Options && !Options.get_tab('Styling & Mascots')) {
			Options.add_tab('custom_styling', '500px', _('Styling & Mascots'));
			Options.extend_tab('custom_styling', '\
				Post Reply BG URL: <input type=text id="spreadbg-input">\
				 <button onclick="" id="spreadbg-button">Set BG</button><br/>\
				A decent sample idea https://kissu.moe/static/spreads/7e31-.png <br/>\
Leave blank if unwanted and to disable\
			');	
			$("#spreadbg-button").click(function(){
				localStorage.SpreadBG= $("#spreadbg-input").val();
				modifyBackgroundFromStorage();
			}); //add click handling to store data and follow up with modifyBackgroundFromStorage();
			if(typeof localStorage.SpreadBG == 'undefined' || localStorage.SpreadBG == 'undefined'){
				localStorage.SpreadBG = default_spread;
				unset_spread = true;
			}
			$("#spreadbg-input").val(localStorage.SpreadBG) // fill with local store contents if exists otherwise use a default
		}		
     }

     var modifyBackgroundFromStorage = function (){
	if(unset_spread)
		$("#uppercontents").css("background-image", "url(" + default_spread + ")");
	else
		$("#uppercontents").css("background-image", "url(" + localStorage.SpreadBG+ ")");
	unset_spread = false;
     }

    		generateBannerOptionData();
    		modifyBackgroundFromStorage();
});

