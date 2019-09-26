// Options tab for explaining kissu's markup
	$(document).ready(function(){		
		// add the tab for viewing the format settings
		if (window.Options && !Options.get_tab('formatting')) {
			Options.add_tab('view_formatting', 'angle-right', _('View Formatting'));
			Options.extend_tab('view_formatting', '\
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
			However, they only work with one line of text.<br/>\
			So if you want your whole post to be bold, you need to <br/>\
			[b] use [/b]<br/>\
			[b] the tags [/b]<br/>\
			[b] separately [/b]<br/>\
			[b] on every line. [/b]<br/>\
			\
			');	
		}		
});