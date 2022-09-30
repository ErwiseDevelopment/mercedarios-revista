<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy 
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary">
<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<?php echo get_template_part( 'template-parts/content', 'home-banner' ) ?>
<!-- end banner -->

<!-- edition -->
<?php echo get_template_part( 'template-parts/content', 'home-edition' ) ?>
<!-- end edition -->

<!-- magazine -->
<?php echo get_template_part( 'template-parts/content', 'home-magazine' ) ?>
<!-- end magazine -->

<!-- contact-us -->
<?php echo get_template_part( 'template-parts/content', 'home-contact-us' ) ?>
<!-- end contact-us -->

<?php endwhile; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
