	</div>
	<div id="footer">
		<div class="container center-block">
			Olivier CHURLAUD - <?php echo strftime('%d %B %Y',exec('git log -1 --format="%ct"'));?>
			<span style="color:#555;   font-style:italic;"> (<?php echo exec('git log -1 --format="%h"') .': ' . exec('git log -1 --format="%s"') . ')';?></span>
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

