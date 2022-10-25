<section class="pt-5">

    <div class="container">

        <div class="row">
                        <?php 
                         $id = $book->ID; 
                        $args = array(
                                'posts_per_page' => 1,
                                'post_type' => '3d-flip-book',
                                'order' => 'DESC' ,
                                // 'tax_query'      => array(
                                //     array(
                                //         'taxonomy' => '3d-flip-book-category',
                                //         'field'    => 'slug',
                                //         'terms'    => 'destaque'
                                //     )
                                // )
                            ); 
                            $book = new WP_Query($args);
                                if ($book->have_posts()) : 
                                    while($book->have_posts())  : $book->the_post(); 
                                                    
                        ?>
            <a 
            class="col-12 text-decoration-none"
            href="<?php echo the_permalink()?>">

                <div class="row">

                    <div class="col-lg-6">
                        <img
                        class="img-fluid w-100"
                        src="<?php echo get_field('capa_destaque'); ?>"
                        alt="Single Temas">
                    </div>

                    <div class="col-lg-6 pt-4">

                        <h3 class="u-font-size-42 lg:u-font-size-52 xxl:u-font-size-68 u-font-weight-bold u-font-family-cinzel-decorative u-color-folk-dark-golden">
                            última <br>
                            edição                            
                        </h3>

                        <div class="u-bg-folk-dark-marron my-3" style="width:100px;height:5px"></div>

                        <h5 class="u-font-size-28 lg:u-font-size-32 xxl:u-font-size-38 u-font-weight-black u-font-family-lato u-color-folk-dark-marron">
                            <?php echo the_title()?>
                        </h5>

                        <p class="px:u-line-height-34 u-font-size-16 lg:u-font-size-18 xxl:u-font-size-24 u-font-weight-semibold u-font-family-lato u-color-folk-dark-gray">
                            <?php echo get_field('descricao') ?>
                        </p>

                        <p class="u-font-size-16 lg:u-font-size-18 xxl:u-font-size-24 u-font-weight-black u-font-family-lato u-color-folk-dark-golden mb-2">
                            Edição <?php echo get_field('edicao') ;?>
                        </p>

                        <p class="u-font-size-16 lg:u-font-size-18 xxl:u-font-size-24 u-font-weight-black u-font-family-lato u-color-folk-dark-golden my-2">
                            Ano  <?php echo get_field('ano') ?>
                        </p>

                        <p class="u-font-size-16 lg:u-font-size-18 xxl:u-font-size-24 u-font-weight-black u-font-family-lato u-color-folk-dark-golden">
                            <?php echo get_field('mes')?> /  <?php echo get_field('ano') ?>
                        </p>

                        <div class="row">

                            <div class="col-4 mt-5">
                                <p class="w-100 u-font-size-12 xxl:u-font-size-15 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-bold-marron hover:u-bg-folk-dark-golden py-2">
                                    Ler mais
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <?php endwhile; endif;?>
        </div>
    </div>
</section>
<section class="l-magazine py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">
               <!-- swiper -->
                
                    <!-- slide -->
                        
                        <div class="swiper-container js-swiper-magazine">
                        <?php $args = array(
                            'posts_per_page' => -1,
                            'post_type' => '3d-flip-book',
                            'order' =>'DESC' ,
                            'post__not_in' => array($id),
                        ); 
                          $book = new WP_Query($args);
                             if ($book->have_posts()) : 
                                while($book->have_posts())  : $book->the_post();                   
                        ?>          
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
                            <?php endwhile; endif; ?>
                        </div>
                    
                
                
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