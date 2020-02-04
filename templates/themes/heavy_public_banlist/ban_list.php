

{% include 'themes/heavy_public_banlist/jsoncreate.php' %}


<script src='main.js'></script>
<script src='js/jquery-3.4.1.min.js'></script>
<script src='js/mobile-style.js'></script>
<script src='js/strftime.min.js'></script>
<script src='js/longtable/longtable.js'></script>
<script src='js/heavy-ban-list.js'></script>
<link rel='stylesheet' href='stylesheets/longtable/longtable.css'>
<link rel='stylesheet' href='stylesheets/mod/ban-list.css'>

	<form {% if mod %} action="?/bans" method="post" {% endif %} class="banform">
		{% if token %}
			<input type="hidden" name="token" value="{{ token }}">
		{% endif %}
		<div class='banlist-opts'>
			<div class='checkboxes'>
				{% if mod and mod.boards[0] != '*' %}
				<label><input type="checkbox" id="only_mine"> {% trans %}Show only bans from boards I moderate{% endtrans %}</label>
				{% endif %}
				<label><input type="checkbox" id="only_not_expired"> {% trans %}Show only active bans{% endtrans %}</label>
			</div>
			<div class='buttons'>
				<input type="text" id="search" placeholder="{% trans %}Search{% endtrans %}">
				{% if mod %}
				<input type="submit" name="unban" id="unban" value="{% trans 'Unban selected' %}">
				{% endif %}
			</div>

			<br class='clear'>
		</div>

		<table class="mod" style="width:100%" id="banlist">
			<tbody>
			</tbody>
		</table>


		
	</form>
{% if token_json %}
	<script>$(function(){ banlist_init("{{ token_json }}", {{ boards }}); });</script>
{% else %}
	<script>$(function(){ banlist_init("{{ uri_json }}", {{ boards }}, true); });</script>
{% endif %}
