<!-- this is header file -->
<?php
/**
 * Header template for Astra Child Theme
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="custom_header" class="site-header">
        <!-- <?php get_template_part( 'template-parts/header/nav' ); ?> -->

        <!-- =============================== -->
        <div id="header_main" class="header_main">
            <div class="logo">
                <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
            </div>
            <div class="menu">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary-menu',
                        'container'      => 'nav',
                        'container_class'=> 'main-navigation',
                        'menu_class'     => 'menu',
                        'fallback_cb'    => false
                    ) );
                ?>
            </div>
            <div class="nav_action"></div>
        </div>
        <!-- =============================== -->
    </header>