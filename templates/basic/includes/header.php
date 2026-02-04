<!DOCTYPE html>

<html>

<head>



<link href="<?=$ccsite->root . $ccsite->ccroot ?>defaultstyles.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="<?=$ccsite->root?>favicon.ico" type="image/x-icon" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="<?=$ccsite->root?>favicon.ico" type="image/x-icon">

<link rel="icon" href="<?=$ccsite->root?>favicon.ico" type="image/x-icon">

<link rel="apple-touch-icon" href="<?=$ccsite->root?>apple-touch-icon.png">

<link rel="SHORTCUT ICON" href="<?=$ccsite->root?>apple-touch-icon.png">

<link href="<?=$ccsite->root?>templates/basic/styles.css" type="text/css" rel="stylesheet" />





<title><?=$ccsite->sitetitle?> - <?php $ccpage->displayTitle();  ?></title>

<script src="<?=$ccsite->jquery?>"></script>

<script src="<?=$ccsite->hammerjs?>"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php $ccpage->displayMeta(); ?>





</head>

<body>

    <div id="wrapper">

        <artifice id="artifice">

        </artifice>

        <header id="header">

            <a href="<?=$ccsite->root?>" class="site-title"><img src="https://www.dimestore.fun/images/logo_rainbow_crop.png" alt="<?=$ccsite->sitetitle?>" class="site-title"></a>

        </header>

        <menu id="menu">

            <a href="<?=$ccsite->root?>">Home</a>

            <a href="<?=$ccsite->root?>gallery">Gallery</a>

            <a href="/comic/rss">RSS</a>

        </menu>

        <main id="content">