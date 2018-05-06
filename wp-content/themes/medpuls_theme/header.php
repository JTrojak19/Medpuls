<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!--Let browser know website is optimized for mobile-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description'): wp_title(); ?>
    </title>
    <style>
        #map{
            height: 400px;
            width: 100%;
        }
    </style>
    <?php wp_head();?>
</head>
<body id="home" class="scrollspy">
<!-- Navbar !-->
<div class="navbar-fixed">
    <nav class="black">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><?php bloginfo('name');?></a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#uslugi">Usługi</a>
                    </li>
                    <li>
                        <a href="#kontakt">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<ul class="sidenav" id="mobile-nav">
    <li>
        <a href="#home">Home</a>
    </li>
    <li>
        <a href="#uslugi">Usługi</a>
    </li>
    <li>
        <a href="#kontakt">Kontakt</a>
    </li>
</ul>
<section class="slider">
    <ul class="slides">
        <li>
            <img src="<?php bloginfo('template_url'); ?>/image1.jpg"> <!-- random image -->
            <div class="caption center-align">
                <h3 class="black-text">Medpuls</h3>
                <h5 class="light grey-text text-lighten-3">Niepubliczny Zakład Opieki Zdrowotnej "Medpuls"</h5>
            </div>
        </li>
        <li>
            <img src="<?php bloginfo('template_url'); ?>/image6.jpg">
            <div class="caption center-align">
                <h3 class="black text"></h3>
                <h5 class="light grey-text text-lighten-3"></h5>
        </li>
        <li>
            <img src="<?php bloginfo('template_url'); ?>/image7.jpg">
            <div class="caption center-align">
                <h3 class="black text"></h3>
                <h5 class="light grey-text text-lighten-3"></h5>
        </li>
    </ul>
</section>