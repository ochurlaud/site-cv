<?php require_once('includes/headers.php');?>

	<h1 class="page-header"><?php echo _("Projets");?></h1> 

	<div class="container-fluid col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">

		<div class="row projet">
			<h3><?php echo _("projet_TB_titre");?> <small><?php echo _("Mai") . '-' . _("Août");?> 2014</small></h3>

			<h4><?php echo _("Présentation");?></h4>
			<?php echo _("projet_TB_presentation");?>

			<h4><?php echo _("Liens");?></h4>
			<ul class="list-unstyled liens">
				<?php echo _("projet_TB_liens");?>
			</ul>
		</div>

		<div class="row projet">
			<h3><?php echo _("projet_par_titre");?> <small>2013-2014</small></h3>

			<h4><?php echo _("Présentation");?></h4>
			<?php echo _("projet_par_presentation");?>

			<h4><?php echo _("Liens");?></h4>
			<ul class="list-unstyled liens">
				<?php echo _("projet_par_liens");?>
			</ul>
		</div>

		<div class="row projet">
			<h3><?php echo _("projet_pe_titre");?> <small>2012-2013</small></h3>

			<h4><?php echo _("Présentation");?></h4>
			<?php echo _("projet_pe_presentation");?>
			<h4><?php echo _("Responsabilités");?></h4>
			<?php echo _("projet_pe_responsabilites");?>

			<h4><?php echo _("Liens");?></h4>
			<ul class="list-unstyled liens">
				<?php echo _("projet_pe_liens");?>
			</ul>
		</div>

		<div class="row projet">
			<h3><?php echo _("projet_univers_titre");?> <small>2009-2010</small></h3>

			<h4><?php echo _("Présentation");?></h4>
			<?php echo _("projet_univers_presentation");?>

			<h4><?php echo _("Responsabilités");?></h4>
			<?php echo _("projet_univers_responsabilites");?>
			
			<h4><?php echo _("Liens");?></h4>
			<ul class="list-unstyled liens">
				<?php echo _("projet_univers_liens");?>				
			</ul>
		</div>
		
		<div class="row projet">
			<h3><?php echo _("projet_ouvroir_titre");?> <small>2008-2009</small></h3>

			<h4><?php echo _("Présentation");?></h4>
			<?php echo _("projet_ouvroir_presentation");?>

			<h4><?php echo _("Responsabilités");?></h4>
			<?php echo _("projet_ouvroir_responsabilites");?>
			<h4><?php echo _("Liens");?></h4>
			<ul class="list-unstyled liens">
				<?php echo _("projet_ouvroir_liens");?>
			</ul>
		</div>
	</div>

<?php require_once('includes/footer.php'); ?>