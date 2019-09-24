/*
 * show-backlinks.js
 * https://github.com/savetheinternet/Tinyboard/blob/master/js/show-backlinks.js
 *
 * Released under the MIT license
 * Copyright (c) 2012 Michael Save <savetheinternet@tinyboard.org>
 * Copyright (c) 2013-2014 Marcin Łabanowski <marcin@6irc.net> 
 *
 * Usage:
 *   $config['additional_javascript'][] = 'js/jquery.min.js';
 *   // $config['additional_javascript'][] = 'js/post-hover'; (optional; must come first)
 *   $config['additional_javascript'][] = 'js/show-backlinks.js';
 *
 */

onready(function(){
	if($('body').hasClass('active-ukko')) return;
        var unmatched_backlinks = new Object();
	var showBackLinks = function() {
		var reply_id = $(this).attr('id').replace(/(^reply_)|(^op_)/, '');
               if(unmatched_backlinks[reply_id] != undefined){
                    $.each(unmatched_backlinks[reply_id], function(index,id){
			$post = $('#reply_' + reply_id);
                        if($post.length == 0){
                                $post = $('#op_' + reply_id);
                                if($post.length == 0)
                                        return;
                        }
                
                        $mentioned = $post.find('p.intro span.mentioned');
                        if($mentioned.length == 0)
                                $mentioned = $('<span class="mentioned unimportant"></span>').appendTo($post.find('p.intro'));
                        
                        if ($mentioned.find('a.mentioned-' + id).length != 0)
                                return;

                        var $link = $('<a class="mentioned-' + id + '" onclick="highlightReply(\'' + id + '\');" href="#' + id + '">&gt;&gt;' +
                                id + '</a>');
                        $link.appendTo($mentioned)
                        
                        if (window.init_hover) {
                                $link.each(init_hover);
                        }

		});
               }

		$(this).find('div.body a:not([rel="nofollow"])').each(function() {
			var id, post, $mentioned;
		
			if(id = $(this).text().match(/^>>(\d+)$/))
				id = id[1];
			else
				return;
		
			$post = $('#reply_' + id);
			if($post.length == 0){
				$post = $('#op_' + id);
				if($post.length == 0){
					if(unmatched_backlinks[id] == undefined)
						unmatched_backlinks[id] = Array();
					unmatched_backlinks[id].push(reply_id);
					return;
				}
			}
		
			$mentioned = $post.find('p.intro span.mentioned');
			if($mentioned.length == 0)
				$mentioned = $('<span class="mentioned unimportant"></span>').appendTo($post.find('p.intro'));
			
			if ($mentioned.find('a.mentioned-' + reply_id).length != 0)
				return;

			var $link = $('<a class="mentioned-' + reply_id + '" onclick="highlightReply(\'' + reply_id + '\');" href="#' + reply_id + '">&gt;&gt;' +
				reply_id + '</a>');


			sorted_backlinks  = $mentioned.children().sort(function(a, b){
				return parseInt(a.className.replace("mentioned-", ""), 10) - parseInt(b.className.replace("mentioned-", ""), 10); 
			});
			inserted = false;
			sorted_backlinks.each(function(ind, val){
				if(parseInt(val.className.replace("mentioned-", ""), 10) > reply_id){
					$mentioned.before($link);	
        				inserted = true;
					return false;
				}
			});
			if(!inserted){
				$link.appendTo($mentioned)
			}			
			if (window.init_hover) {
				$link.each(init_hover);
			}
		});
	};
	
	$('div.post.reply').each(showBackLinks);
	$('div.post.op').each(showBackLinks);

        $(document).on('new_post', function(e, post) {
		showBackLinks.call(post);
		if ($(post).hasClass("op")) {
			$(post).find('div.post.reply').each(showBackLinks);
		}
	});
});
