<section class="l-magazine py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-magazine">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php for( $i = 0; $i < 6; $i++ ) { ?>
                                <a 
                            class="swiper-slide"
                            href="#">
                                <div>
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/magazine-1.png"
                                    alt="Single Temas">

                                    <p class="l-magazine__edition u-font-size-18 u-font-weight-bold u-font-family-lato text-center u-color-folk-white u-bg-folk-bold-marron mb-0 py-2 px-4">
                                        Edição 54
                                    </p>
                                </div>
                            </a>
                        <?php } ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>

            <div class="col-12">

                <div class="row justify-content-center">

                    <div class="col-4 mt-5 px-4">
                        <a
                        class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-golden hover:u-bg-folk-dark-marron py-2"
                        href="#">
                            Todas as revistas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>