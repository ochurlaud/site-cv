<?php require_once('includes/headers.php');?>
<?php
$language = 'fr_FR.utf8';
putenv("LANG=$language"); 
setlocale(LC_ALL, $language);
// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, "./locale"); 
textdomain($domain);
?>

<div class="index container-fluid">
	<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
		
		<?php echo _("Accueil"); ?>
		
		<p class="pull-right"><em>Olivier CHURLAUD</em></p>
	</div>
</div>

