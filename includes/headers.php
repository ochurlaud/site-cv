<?php $age = (date('m') >= 4 && date('d') >= 7) ? (int) date('Y') - 1992 : (int) date('Y') - 1992 - 1 ;?>

<!DOCTYPE html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>Olivier CHURLAUD</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    </head>
    <body>
	<?php require_once('includes/menu.php');?>
	<?php require_once('includes/bandeau.php');?>
	<div id="content" class="container well">
	
