<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="style.css" class="">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce-child'); ?></a>

        <header id="masthead" class="site-header">
          
            <div class="button_container" id="toggle">
                
                <div class="menuCross">
                    <span class="top"></span><span class="middle"></span><span class="bottom"></span>
                </div>
        </div>
            <div class="overlay" id="overlay">
                <div class="menuBackground">
                <div class="menuTitle">
                    <div class="textMenuTitle">
                        Fleus d'oranger et chat errants
                    </div>
                    <div class="imgbackgroundMenu">
                        <img class="catVioletMenu"  src="<?php echo get_stylesheet_directory_uri() . '/assets/images/menu/catMenu1.png' ; ?>" alt="logo-koukaki-menu">
                        <img class="catGreyMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/menu/catMenu2png.png' ; ?>" alt="logo-koukaki-menu">
                        <img class="catOrangeMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/menu/catMenu3.png' ; ?>" alt="logo-koukaki-menu">
                        <img class="fleurWhiteMenu"  src="<?php echo get_stylesheet_directory_uri() . '/assets/images/menu/fleurMenu1.png' ; ?>" alt="logo-koukaki-menu">
                        <img class="fleurVioletMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/menu/fleurMenu2png.png' ; ?>" alt="logo-koukaki-menu">
                        <img class="fleurOrangeMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/menu/fleurMenu3.png' ; ?>" alt="logo-koukaki-menu">
                        <img class="fleurPinkMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/menu/fleurMenu4.png' ; ?>" alt="logo-koukaki-menu">
                        <img class="fleurbigOrangeMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/menu/fleurMenu5.png' ; ?>" alt="logo-koukaki-menu">
                    </div>
                </div>
                <div class="logoMenu">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/menu/Image-menu-small.png' ; ?>" alt="logo-koukaki-menu">
                </div>
                <nav>
                    <ul>
                        <li><a href="#story">Histoires</a></li>
                        <li><a href="#characters">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                </nav>
                <div class="menuFooter">
                    STUDIO KOUKAKI
                </div>
            </div>
        </header><!-- #masthead -->