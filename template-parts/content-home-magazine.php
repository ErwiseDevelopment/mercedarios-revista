<section class="l-magazine py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">
            <?php $args = array(
                            'post_type' => '3d-flip-book',
                            'post_per_page' => -1,
                            'order' =>'DSC' ,
                            'post__not__in' => $id,
                        ); 
                          $book = new WP_Query($args);
                             if ($book->have_posts()) : 
                                while($book->have_posts())  : $book->the_post();                   
                        ?>

                <!-- swiper -->
                <div class="swiper-container js-swiper-magazine">

                    <div class="swiper-wrappe">

                        <!-- slide -->
                        
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
                       
                        <!-- end slide -->
                    </div>
                </div>
                <?php endwhile; endif;?>
                <div class="swiper-button-prev swiper-button-prev-magazine js-swiper-button-prev-magazine">
                    <img
                    class="img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/arrow-left.png"
                    alt="Seta Esquerdo">
                </div>

                <div class="swiper-button-next swiper-button-next-magazine js-swiper-button-next-magazine">
                    <img
                    class="img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/arrow-right.png"
                    alt="Seta Direito">
                </div>
                <!-- end swiper -->
            </div>

            <div class="col-12 mt-5 pt-3">

                <div class="row justify-content-center">

                    <div class="col-10 col-lg-4 mt-5 px-4">
                        <a
                        class="w-100 d-block u-font-size-22 xxl:u-font-size-26 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-golden hover:u-bg-folk-dark-marron py-2"
                        href="#">
                            Todas as revistas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>