{% if config.ban_block %}
{% include 'checkban.php' %}
{% endif %}
<!doctype html>
<html>
<head>
	{% if config.preload_banner %}
		<script>
		var fetch = new XMLHttpRequest();
		fetch.open("GET", "{{ config.banner_src }}api/banner");
		fetch.addEventListener("load", function(){
			var info = JSON.parse(this.responseText)[0];
			
			window.ban_url = document.createElement("A");
			window.ban_url.setAttribute('href', info['url']);
			ban_url.setAttribute('style', 'display:contents');	
			
			var ban_img = document.createElement("IMG");
			ban_img.setAttribute('src', "{{ config.banner_src }}" + info['uri']);
			ban_img.setAttribute('style', 'margin:auto;display:block;max-width:100%;border:none;');
		
			window.ban_url.appendChild(ban_img);
			if(document.getElementById("banner-container") != undefined)
				document.getElementById("banner-container").appendChild(window.ban_url);
		});
		fetch.send();
		</script>
	{% endif %}
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script type='text/javascript'>
		var active_page = "catalog"
		  , board_name = "{{ board.uri }}";
	</script>
	{% include 'header.html' %}
	<title>{{ board.uri }}&nbsp;-&nbsp;Catalog</title>
</head>
<body class="8chan vichan {% if mod %}is-moderator{% else %}is-not-moderator{% endif %} theme-catalog active-catalog" data-stylesheet="{% if config.default_stylesheet.1 != '' %}{{ config.default_stylesheet.1 }}{% else %}default{% endif %}">
<div id="uppercontents">
	<div id="subuppercontents">
		{{ boardlist.top }}
	<a name="top"></a>
	{% if pm %}<div class="top_notice">You have <a href="?/PM/{{ pm.id }}">an unread PM</a>{% if pm.waiting > 0 %}, plus {{ pm.waiting }} more waiting{% endif %}.</div><hr />{% endif %}
		{% if config.url_banner_list %}<img id="bannerimg" class="board_image" src="{{ random(config.url_banner_list|split(',')) }}" {% if config.banner_width or config.banner_height %}style="{% if config.banner_width %}width:{{ config.banner_width }}px{% endif %};{% if config.banner_width %}height:{{ config.banner_height }}px{% endif %}" {% endif %}alt="" />

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
	{% else %}
		{% include 'boardlist.html' %}
	{% endif %}
	</div>
{% if config.banner_ads %}
        {% if config.iframe_banner %}
                {% include 'banner.template' %}
        {% elseif config.preload_banner %}
                <div id='banner-container'></div>
				<script>
				if(window.ban_url != undefined)
					document.getElementById("banner-container").appendChild(window.ban_url);
				</script>
        {% endif %}
{% endif %}
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
	{% if mod %}<form name="postcontrols" action="{{ config.post_url }}" method="post">
	<input type="hidden" name="board" value="{{ board.uri }}" />
	<input type="hidden" name="mod" value="1" />
	{{ body }}
	</form>{% endif %}
	
	<span id="thread-links-top">
		<a id="thread-return-top" href="{{ return }}">[{% trans %}Refresh{% endtrans %}]</a>
		<a id="thread-bottom" href="#bottom">[{% trans %}Bottom{% endtrans %}]</a>
				{% if config.catalog_link %}
			<a id="thread-catalog-top" href="{{ config.root }}{{ board.dir }}">[{% trans %}Index{% endtrans %}]</a>
				{% endif %}
{% if config.archive.threads %}
&nbsp;<a id="archive-link-top" href="{{ config.root }}{{ board.dir }}archive/">[Archive]</a>
{% endif %}
	</span>
	<br/><hr/>
	<div id='catalog_options'>
        <span>{% trans 'Sort by' %}: </span>
        <select id="sort_by" style="display: inline-block">
                <option selected value="bump:desc">{% trans 'Bump order' %}</option>
                <option value="time:desc">{% trans 'Creation date' %}</option>
                <option value="reply:desc">{% trans 'Reply count' %}</option>
                <!--<option value="random:desc">{% trans 'Random' %}</option>-->
        </select>
 
        <span>{% trans 'Image size' %}: </span>
        <select id="image_size" style="display: inline-block">
                <option value="vsmall">{% trans 'Very small' %}</option>
                <option value="small" selected>{% trans 'Small' %}</option>
                <option value="large">{% trans 'Large' %}</option>
        </select>
		</div>
		<br/>
        <div class="threads">
                <div id="Grid">
                {% for post in recent_posts %}
                        <div class="mix"
				data-reply="{{ post.reply_count }}"
				 data-bump="{{ post.bump }}"
				 data-time="{{ post.time }}"
				 data-id="{{ post.id }}"
				 data-sticky="{% if post.sticky %}true{% else %}false{% endif %}"
				 data-locked="{% if post.locked %}true{% else %}false{% endif %}"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="{{post.link}}">  
						{% if post.youtube %}
							<img src="//img.youtube.com/vi/{{ post.youtube }}/0.jpg" 
						{% else %}
							<img src="{{post.file}}" 
						{% endif %}
                                                 id="img-{{ post.id }}" data-subject="{% if post.subject %}{{ post.subject|e }}{% endif %}" data-name="{{ post.name|e }}" data-muhdifference="{{ post.muhdifference }}" class="{{post.board}} thread-image" title="{{post.bump|date('%b %d %H:%M')}}">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: {{ post.reply_count }} / I: {{ post.image_count }}{% if post.sticky %} (sticky){% endif %}</strong>
                                                        {% if post.subject %}
								<p class="intro">
									<span class="subject">
										{{ post.subject|e }}
									</span>
								</p>
							{% else %}
								<br />
							{% endif %}

								{{ post.body }}
                                                </div>
                                </div>
                        </div>
                {% endfor %}
                </div>
        </div>
	<hr/>
	
	<span id="thread-links">
		<a id="thread-return" href="{{ return }}">[{% trans %}Refresh{% endtrans %}]</a>
		<a id="thread-top" href="#top">[{% trans %}Top{% endtrans %}]</a>
				{% if config.catalog_link %}
			<a id="thread-catalog" href="{{ config.root }}{{ board.dir }}">[{% trans %}Index{% endtrans %}]</a>
				{% endif %}
{% if config.archive.threads %}				
<a id="archive-link-bottom" href="{{ config.root }}{{ board.dir }}archive/">[Archive]</a>
	{% endif %}
	</span>
	<br/><hr/>
	<a name='bottom'></a>
	{% include 'footer.template' %}	
<!-- <script type="text/javascript">{% raw %} -->
		<!-- var styles = { -->
			<!-- {% endraw %} -->
			<!-- {% for name, uri in config.stylesheets %}{% raw %}'{% endraw %}{{ name|addslashes }}{% raw %}' : '{% endraw %}/stylesheets/{{ uri|addslashes }}{% raw %}', -->
			<!-- {% endraw %}{% endfor %}{% raw %} -->
		<!-- };  -->
		<!-- if(is_style_select == false){ -->
			<!-- onready(init); -->
		<!-- } -->
	<!-- {% endraw %}</script> -->
	
	<script type="text/javascript">{% raw %}
		ready();
	{% endraw %}</script>
</div>
</body>
</html>
{% if config.ban_block %}
{% include 'checkban.php' %}
{% endif %}
