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

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<section 
class="l-template-content__banner d-flex justify-content-center align-items-center u-bg-cover u-bg-no-repeat"
style="background-image: url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/template-content-banner.png)">

    <div class="container">

        <div class="row">

            <div class="col-12 px-0">
                <h1 class="l-template-content__banner__title position-relative u-font-weight-bold u-font-family-cinzel-decorative text-center u-color-folk-white pb-4">
                    <?php the_title() ?>
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<section class="py-5">

    <div class="container">

        <div class="row">
        <?php 
                
        ?>                     
            <div class="col-12">
   
                <div class="row">

                <?php $args = array(
                            'posts_per_page' => -1,
                            'post_type' => '3d-flip-book',
                            'order' =>'DESC' ,
                            'tax_query'      => array(
                                    array(
                                        'taxonomy' => '3d-flip-book-category',
                                        'field'    => 'slug',
                                        'terms'    => 'recanto'
                                    )
                                )
                            
                        ); 
                          $book = new WP_Query($args);
                             if ($book->have_posts()) : 
                                while($book->have_posts())  : $book->the_post();                   
                        ?>
                                <div class="col-md-4 mb-5">
                            <div class="swiper-wrapper">
                                <a 
                                    class="swiper-slide"
                                    href="<?php the_permalink();?>">
                                    <div>
                                        <img
                                        class="img-fluid"
                                        src="<?php echo get_field('capa_destaque');?>"
                                        alt="Revista 1">

                                        <p class="l-magazine__edition u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-font-family-lato text-center u-color-folk-white u-bg-folk-bold-marron mb-0 py-2 px-4">
                                            Edição <?php echo get_field('edicao') ;?> 
                                        </p>
                                    </div>
                                </a>
                                </div>
                                </div>
                    <?php 
                            endwhile;
                        endif;
                        
                        wp_reset_query(); 
                    ?>
                </div>
            </div> 
        </div>
    </div>
    
</section><?php endwhile; ?>

</div><!-- #main -->


</section><!-- #primary --><?php

get_footer();


