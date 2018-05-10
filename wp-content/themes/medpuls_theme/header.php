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
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">

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
<body id="home">
<!-- Navbar !-->
<div class="navbar-fixed">
    <nav class="#b2dfdb teal lighten-4">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><?php bloginfo('name');?></a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'my-custom-menu',
                        'container_class' => 'custom-menu-class' ) );
                    ?>
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

