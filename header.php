<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Portfolio of Photographer: Kotryna Juskaite">
    <meta name="keywords" content="Kotryna, Juskaite, Portfolio, Photographer, Stockholm">
    <meta property="og:image" content="https://mitty.se/Resources/favicon.png">
    <title>Kotryna Juskaite Photography</title>
    <?php wp_head(); ?>
    <?php load_css(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 
</head>
<body <?php body_class(); ?>>

<div class="header-outer">
        <header>
            <img src="<?php bloginfo('template_directory'); ?>/icons/hamburger.png" class="hamburger">
            <div class="header-container">
                <a href="http://kotrynajuskaite.com">
                    <h1>KOTRYNA JUSKAITE</h1>
                </a>
            </div>
            <div class="nav-outer">
                <nav>
                    <?php wp_nav_menu(
                        array(
                            'theme-location' => 'side-menu',
                        )
                    );?>
                </nav>
            </div>
            <div class="header-container">
                <div class="social-container">
                    <a href="https://www.facebook.com/kotrynajuskaite1/" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/icons/facebook.png">
                    </a>
                    <a href="https://www.instagram.com/kotrynajuskaite/" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/icons/instagram.png">
                    </a>
                    <a href="https://www.behance.net/kotrynajuskaite" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/icons/behance.png">
                    </a>
                    <a href="https://www.linkedin.com/in/kotryna-juskaite-b7b348b8/" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/icons/linkedin.png">
                    </a>
                    <a href="mailto:kotryna.juskaite@gmail.com" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/icons/mail.png">
                    </a>
                </div>
            </div>
            <div id="copyright">
                © Kotryna Juskaite 2020
            </div>
        </header>
    </div>