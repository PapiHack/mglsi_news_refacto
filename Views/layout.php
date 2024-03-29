<?php require_once('../Utilities/helpers.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?= $title ?> </title>

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?= asset('style.css') ?>">
</head>
<body>

    <?php require_once('_partials/header.php'); ?>
    
    <?= $content ?>

    <?php require_once('_partials/menu.php'); ?>
</body>
</html>