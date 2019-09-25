{% include 'checkban.php' %}
<!doctype html>
<html>
<head>
	<meta charset="utf-8">

        <script type="text/javascript">
	  var
          {% if not no_post_form %}
              active_page = "index"
            , board_name = "{{ board.uri }}";
	  {% else %}
              active_page = "ukko";
          {% endif %}
        </script>

	{% include 'header.html' %}
	<title>{{ board.url }} - {{ board.title|e }}</title>
</head>
<body class="8chan vichan {% if mod %}is-moderator{% else %}is-not-moderator{% endif %} active-{% if not no_post_form %}index{% else %}ukko{% endif %}" data-stylesheet="{% if config.default_stylesheet.1 != '' %}{{ config.default_stylesheet.1 }}{% else %}default{% endif %}">
	<div id="uppercontents">
	<div id="subuppercontents">
		{{ boardlist.top }}
	<a name="top"></a>
	{% if pm %}<div class="top_notice">You have <a href="?/PM/{{ pm.id }}">an unread PM</a>{% if pm.waiting > 0 %}, plus {{ pm.waiting }} more waiting{% endif %}.</div><hr />{% endif %}
		{% if config.url_banner_list %}<img id="bannerimg" class="board_image" src="{{ random(config.url_banner_list|split(',')) }}" {% if config.banner_width or config.banner_height %}style="{% if config.banner_width %}width:{{ config.banner_width }}px{% endif %};{% if config.banner_width %}height:{{ config.banner_height }}px{% endif %}" {% endif %}alt="" />
<script>
document.getElementById("bannerimg").onclick = function(){
	alert(
	"<h1>Welcome to kissu.moe!</h1><br/>\
        <h2>Message Of the Day</h2>\
	<p><strong>Bored and Gay...</strong></p>\
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
</script>

{% endif %}

	<header>
	<h1 style="padding-top:10px;">{{ board.url }} - {{ board.title|e }}</h1>
	<div class="subtitle">
		{% if board.subtitle %}
			{% if config.allow_subtitle_html %}
				{{ board.subtitle }}
			{% else %}
				{{ board.subtitle|e }}
			{% endif %}
		{% endif %}
		{% if mod %}<p><a href="?/">{% trans %}Return to dashboard{% endtrans %}</a></p>{% endif %}
	</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	{% include 'attention_bar.html' %}

	{{ config.ad.top }}

	<div>
	{% if not no_post_form %}
                {% if config.advanced_post_form  %}
                        {% include 'post_form_advanced.html' %}
                {% else %}
                        {% include 'post_form.html' %}
                {% endif %}

	{% endif %}
	</div>
	</div>
	</div>
	</div>
	{% if config.page_nav_top %}
		<div class="pages top">
			{% for page in pages %}
			 [<a {% if page.selected %}class="selected"{% endif %}{% if not page.selected %}href="{{ page.link }}"{% endif %}>{{ page.num }}</a>]{% if loop.last %} {% endif %}
			{% endfor %}
			{{ btn.next }}
		</div>
	{% endif %}
	<div id="lowercontents">
	{% if config.global_message %}<hr /><div class="blotter">{{ config.global_message }}</div>{% endif %}
	<hr />
	{% if config.board_search %}
	<!-- Start Search Form -->
        	<form style="display:inline" action="/search.php">
                	<p style="margin: 10px;">
                    		<input type="text" name="search" placeholder="{{ board.uri }} search">
                    		<input type="hidden" name="board" value="{{ board.uri }}">
                    		<input type="submit" value="Search">
                	</p>
        	</form>
    	<!-- End Search Form -->
    	{% endif %}
		
	<span id="thread-links-top">
		<a id="thread-return-top" href="{{ return }}">[{% trans %}Refresh{% endtrans %}]</a>
		<a id="thread-bottom" href="#bottom">[{% trans %}Bottom{% endtrans %}]</a>
				{% if config.catalog_link %}
			<a id="thread-catalog-top" href="{{ config.root }}{{ board.dir }}{{ config.catalog_link }}">[{% trans %}Catalog{% endtrans %}]</a>
				{% endif %}
	</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="{{ config.post_url }}" method="post">
	<input type="hidden" name="board" value="{{ board.uri }}" />
	{% if mod %}<input type="hidden" name="mod" value="1" />{% endif %}
	{{ body }}
	{% include 'report_delete.html' %}
	
	
			<span id="thread-links">
				<a id="thread-return" href="{{ return }}">[{% trans %}Refresh{% endtrans %}]</a>
				<a id="thread-top" href="#top">[{% trans %}Top{% endtrans %}]</a>
                		{% if config.catalog_link %}
					<a id="thread-catalog" href="{{ config.root }}{{ board.dir }}{{ config.catalog_link }}">[{% trans %}Catalog{% endtrans %}]</a>
		                {% endif %}
			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[{% trans %}Post a Reply{% endtrans %}]</a>
			</span>
	</form>
	<a name="bottom"></a>
	{{ boardlist.bottom }}
	<div class="pages">
		{{ btn.prev }} {% for page in pages %}
		 [<a {% if page.selected %}class="selected"{% endif %}{% if not page.selected %}href="{{ page.link }}"{% endif %}>{{ page.num }}</a>]{% if loop.last %} {% endif %}
		{% endfor %} {{ btn.next }}
		{% if config.catalog_link %}
			 | <a href="{{ config.root }}{{ board.dir }}{{ config.catalog_link }}">{% trans %}Catalog{% endtrans %}</a>
		{% endif %}
	</div>
	

	{{ config.ad.bottom }}

	<footer>
		<p class="unimportant" style="margin-top:20px;text-align:center;">- Tinyboard + 
			<a href="https://engine.vichan.net/">vichan</a> {{ config.version }} -
		<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group
		<br><a href="https://engine.vichan.net/">vichan</a> Copyright &copy; 2012-2018 vichan-devel</p>

		{% for footer in config.footer %}<p class="unimportant" style="text-align:center;">{{ footer }}</p>{% endfor %}
	</footer>
	<script type="text/javascript">{% raw %}
		ready();
	{% endraw %}</script>
	</div>
</body>
</html>
{% include 'checkban.php' %}
