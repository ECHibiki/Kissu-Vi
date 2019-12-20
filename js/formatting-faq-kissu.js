// Options tab for explaining kissu's markup
	$(document).ready(function(){		
		// add the tab for viewing the format settings
		if (window.Options && !Options.get_tab('formatting')) {
			Options.add_tab('view_formatting', 'angle-right', _('View Formatting'));
			Options.extend_tab('view_formatting', '\
			watch for slash directions!<br/>\
			[code]printf("%s","code");[/code]<br/>\
			The Following is an expansion on <a href="https://kakashi-nenpo.com/faq.php#q08">https://kakashi-nenpo.com/faq.php#q08</a><hr/>\
			[b] bold [/b]<br/>\
			\'\'\' bold \'\'\'<br/>\
			~~ strikethrough ~~ <br/>\
			[i] italics [/i]<br/>\
			\'\' italics \'\'<br/>\
			[u] underline [/u]<br/>\
			[header] header [/header]<br/>\
			== header ==<br/>\
			[pink] pink [/pink]<br/>\
			[blue] blue [/blue]<br/>\
			[gold] gold [/gold]<br/>\
			[spoiler] spoiler [/spoiler]<br/>\
			[spoilers] spoiler [/spoilers] <br/>\
			** spoiler ** <br/>\
			<br/>\
			All of these will match on new lines.<br/>\
			\
			');	
		}		
});