<?php
	$age = (date('m') >= 4 && date('d') >= 7) ? (int) date('Y') - 1992 : (int) date('Y') - 1992 - 1 ;
	$language = 'fr_FR.utf8';
	putenv("LANG=$language"); 
	setlocale(LC_ALL, $language);
	// Set the text domain as 'messages'
	$domain = 'messages';
	bindtextdomain($domain, "./locale"); 
textdomain($domain);
?>

<!DOCTYPE html>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>Olivier CHURLAUD</title>
        <meta name="description" content="Page personnelle d'Olivier CHURLAUD : cv, competences, projets..." />
        <meta name="keywords" content="olivier churlaud, olivier, churlaud, cv, resume, curriculum, vitae, projets" />
        <meta name="robots" content="index, follow" />
	<link rel="shortcut icon" type="image/png" href="favicon.png" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
    </head>
    <body>
	<?php require_once('includes/menu.php');?>
	<?php require_once('includes/bandeau.php');?>

	<div id="content" class="container well">
	
