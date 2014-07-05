<?php require_once('includes/headers.php');
$language = 'fr_FR.utf8';
putenv("LANG=$language"); 
setlocale(LC_ALL, $language);
// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, "./locale"); 
textdomain($domain);
?>
	<div class="container-fluid col-lg-10 col-lg-offset-1">

		<h1 class="page-header">&Eacute;tudes</h1> 

		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">2012 - 2016</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_etudes_centrale");?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">2010 - 2012</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_etudes_prepa");?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">2007 - 2012</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_etudes_lycee");?>
			</div>
		</div>
		
		<h1 class="page-header">Expériences</h1>
			<h3>Direction de projets</h3>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">2013 - 2014</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_exp_par"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">2012 - 2013</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_exp_eclair"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2"></div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_exp_pe"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">2009 - 2010</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_exp_acf_univers"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">2008 - 2009</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_exp_acf_ouvroir"); ?>
			</div>
		</div>
		
			<h3>Expériences professionnelles</h3>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">2014</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_exp_pro_application"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">2013</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_exp_pro_execution"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">2010 et 2011</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_exp_pro_demenagement"); ?>
			</div>
		</div>
		
		<h1 class="page-header">Compétences</h1>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">Management</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_comp_management"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">Sciences</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_comp_sciences"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">Informatique</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_comp_informatique"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">Langues</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_comp_anglais"); ?><br />
				<?php echo _("cv_comp_allemand"); ?>
			</div>
		</div>
		
		<h1 class="page-header">Centres d’intérêt</h1>
			<h3>Culturel</h3>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">Littérature</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_interet_litterature"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">Cinéma</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_interet_cinema"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">Musique</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_interet_musique"); ?>
			</div>
		</div>

		<h3>Sport</h3>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2">Sports de montagne</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_interet_sport"); ?>
			</div>
		</div>
	</div>
<?php require_once('includes/footer.php'); ?>