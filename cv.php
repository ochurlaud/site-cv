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

		<h1 class="page-header"><?php echo _("cv_h1_etudes");?></h1> 

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
		
		<h1 class="page-header"><?php echo _("cv_h1_exp");?></h1>
			<h3><?php echo _("cv_exp_titre");?></h3>
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
		
			<h3><?php echo _("cv_exp_pro_titre");?></h3>
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
			<div class="topic-header col-sm-3 col-md-2">2010 <?php echo _("et"); ?> 2011</div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_exp_pro_demenagement"); ?>
			</div>
		</div>
		
		<h1 class="page-header"><?php echo _("cv_h1_competences");?></h1>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2"><?php echo _("cv_comp_management_header"); ?></div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_comp_management"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2"><?php echo _("cv_comp_sciences_header"); ?></div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_comp_sciences"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2"><?php echo _("cv_comp_informatique_header"); ?></div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_comp_informatique"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2"><?php echo _("cv_comp_langues_header"); ?></div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_comp_anglais"); ?><br />
				<?php echo _("cv_comp_allemand"); ?>
			</div>
		</div>
		
		<h1 class="page-header">Centres d’intérêt</h1>
			<h3><?php echo _("cv_interet_titre"); ?></h3>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2"><?php echo _("cv_interet_litterature_header"); ?></div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_interet_litterature"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2"><?php echo _("cv_interet_cinema_header"); ?></div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_interet_cinema"); ?>
			</div>
		</div>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2"><?php echo _("cv_interet_musique_header"); ?></div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_interet_musique"); ?>
			</div>
		</div>

		<h3><?php echo _("cv_interet_sport_titre"); ?></h3>
		<div class="topic row">
			<div class="topic-header col-sm-3 col-md-2"><?php echo _("cv_interet_sport_header"); ?></div>
			<div class="topic-content col-sm-9 col-md-10">
				<?php echo _("cv_interet_sport"); ?>
			</div>
		</div>
	</div>
<?php require_once('includes/footer.php'); ?>