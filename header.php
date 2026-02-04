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
         <nav>
            <div class="logo">
                <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
            </div>
            <div class="menu"></div>
            <div class="nav_action"></div>
         </nav>
        <!-- =============================== -->
    </header>