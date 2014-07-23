	</div>

	
<?php 
	$log_file = escapeshellarg('.git/logs/HEAD');
	$last_commit = `tail -n 1 $log_file`;
	$last_commit_expl = explode(' ', $last_commit, 8);
	$last_commit_date = $last_commit_expl[5];//1406153629 +0200
	$last_commit_hash = substr($last_commit_expl[1], 0, 7);
	$last_commit_descript = substr($last_commit_expl[7], 0, -1);
?>
	<div id="footer">
		<div class="container center-block">
			Olivier CHURLAUD - <?php echo strftime('%d %B %Y',$last_commit_date); ?>
			<span style="color:#555;   font-style:italic;"> (<?php echo $last_commit_hash .': ' . $last_commit_descript . ')';?></span>
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

