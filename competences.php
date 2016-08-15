<?php require_once('includes/headers.php');?>

<h1 class="page-header"><?php echo _("Compétences");?></h1>

<div id="competences">
    <div class="row">
        <div class="col-md-3">
            <div class="thumbnail">
                <h1 class="text-center"><b class="glyphicon glyphicon-road"></b></h1>
                <div class="caption">
                    <h4><?php echo _("comp_management_titre");?></h4>
                    <ul>
                        <?php echo _("comp_management");?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="thumbnail">
                <h1 class="text-center"><b class="glyphicon glyphicon-random"></b></h1>
                <div class="caption">
                    <h4><?php echo _("comp_sciences_titre");?></h4>
                    <ul>
                        <?php echo _("comp_sciences");?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <h1 class="text-center"><b class="glyphicon glyphicon-comment"></b></h1>
                <div class="caption">
                    <h4><?php echo _("comp_developpement_titre");?></h4>
                    <ul>
                        <?php echo _("comp_developpement");?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-5 col-md-offset-1">
            <div class="thumbnail">
                <h1 class="text-center"><b class="glyphicon glyphicon-hdd"></b></h1>
                <div class="caption">
                    <h4><?php echo _("comp_informatique_titre");?></h4>
                    <ul>
                        <?php echo _("comp_informatique");?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="thumbnail">
                <h1 class="text-center"><b class="glyphicon glyphicon-globe"></b></h1>
                <div class="caption">
                    <h4><?php echo _("comp_langues_titre");?></h4>
                    <ul>
                        <?php echo _("comp_langues");?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
<?php require_once('includes/footer.php'); ?>
