<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript">
		var active_page = "page";
	</script>
	{% include 'header.html' %}
	<title>{{ title }}</title>
</head>
<body class="8chan vichan {% if mod %}is-moderator{% else %}is-not-moderator{% endif %} active-page" data-stylesheet="{% if config.default_stylesheet.1 != '' %}{{ config.default_stylesheet.1 }}{% else %}default{% endif %}">
        {{ boardlist.top }}

	{% if pm %}<div class="top_notice">You have <a href="?/PM/{{ pm.id }}">an unread PM</a>{% if pm.waiting > 0 %}, plus {{ pm.waiting }} more waiting{% endif %}.</div><hr>{% endif %}
	<header>
		<h1>{{ title }}</h1>
		<div class="subtitle">
			{% if subtitle %}
				{{ subtitle }}
			{% endif %}
			{% if mod and not hide_dashboard_link %}<p><a href="?/">{% trans %}Return to dashboard{% endtrans %}</a></p>{% endif %}
		</div>
	</header>
	{{ body }}
	<hr>
	{% include 'footer.template' %}
</body>
</html>
