	</div>
	<div id="footer">
		<div class="container center-block">
			Olivier CHURLAUD - 2014
		</div>
	</div>

	<script>
		var page = location.pathname.substring(location.pathname.lastIndexOf("/") + 1)
		var page = page.split('.');
		nom_page = page[0];
		if($('li.'+nom_page).length) {
			$('li.'+nom_page).addClass('active');
		}
	</script>

	</body>
</html>

