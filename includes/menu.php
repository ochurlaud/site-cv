<!-- Menu -->
<div id="topmenu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand active" href="index.php">Olivier CHURLAUD</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="cv"><a href="cv.php"><b class="glyphicon glyphicon-file"></b> <?php echo _("CV");?></a></li>
                <li class="competences"><a href="competences.php"><b class="glyphicon glyphicon-wrench"></b>  <?php echo _("Compétences");?></a></li>
                <li class="projets"><a href="projets.php"><b class="glyphicon glyphicon-check"></b> <?php echo _("Projets");?></a></li>
                <li><form>&nbsp; <a class="btn btn-info btn-xs navbar-btn" href="download/<?php echo _("file_cv");?>" target="_blank"><b class="glyphicon glyphicon-download-alt"></b> <?php echo _("CV");?></a></form></li>
            </ul>

            <form class="navbar-form navbar-right lang-form" method="POST"><input name="lang" type="hidden" value="en"><button type="submit" title="language: en" class="btn btn-xs <?php echo $btn_en;?>">en</button></form>
            <form class="navbar-form navbar-right lang-form" method="POST"><input name="lang" type="hidden" value="fr"><button type="submit" title="language: fr" class="btn btn-xs <?php echo $btn_fr;?>">fr</button></form>
        </div>
    </div>
</div>
<!-- End Menu -->
