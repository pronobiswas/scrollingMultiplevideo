<?php
/**
 * Template Name: Galary Page
 * Description: Custom galary page template
 */

get_header(); ?>

<div id="galarypage-content">
    <main id="primary" class="site-main">
        <h1 class="galarypageTitle">Galary Page</h1>
        <!-- ======galary section start====== -->
        <section id="galarySection">
            <div class="galaryWrapper">
                <div class="galaryItem">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/galary1.webp" alt="Galary Image 1">
                </div>
                <div class="galaryItem">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/galary2.webp" alt="Galary Image 2">
                </div>
            </div>
        </section>
    </main>
</div>


<?php get_footer(); ?>