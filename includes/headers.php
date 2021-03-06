<?php
    session_start();

    $age = (date('m') > 4 || (date('m') == 4  && date('d') >= 7))
                ? (int) date('Y') - 1992
                : (int) date('Y') - 1992 - 1;
    require_once('includes/languages.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8" />
        <meta name="description" content="<?php echo _("meta_description");?>" />
        <meta name="keywords" content="olivier churlaud, olivier, churlaud, cv, resume, curriculum, vitae, projets" />
        <meta name="robots" content="index, follow" />
        <title>Olivier CHURLAUD</title>
        <link rel="shortcut icon" type="image/png" href="favicon.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </head>
    <body>
        <?php require_once('includes/menu.php');?>
        <?php require_once('includes/bandeau.php');?>

        <div id="content" class="container well">
