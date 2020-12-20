<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <?php wp_head() ?>
    </head>
    <body>
        <header>
            <div class="container">
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?php bloginfo('template_directory');?>/images/logo.jpg">
                </a>
            </div>
            <div id="slideshow"></div>
            <nav id="header-main-navbar" class="navbar navbar-expand-lg navbar-white">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php wp_nav_menu([
                                'theme_location' => 'header',
                                'container' => false,
                                'menu_class' => 'navbar-nav mr-auto',
                        ]); ?>
                    </div>
                </div>
            </nav>
            <nav id="header-sub-navbar"></nav>
        </header>
        <div class="container">
