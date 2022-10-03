<section class="u-bg-folk-dark-marron">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-3 d-flex justify-content-center align-items-center">
                        <a href="<?php echo get_home_url( null, '/' ) ?>">
                            <img
                            class="img-fluid"
                            src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/mercedarios-org.png"
                            alt="Mercedários Org">
                        </a>
                    </div>

                    <div class="col-9">

                        <div class="row">

                            <!-- loop -->
                            <?php for( $i = 0; $i < 8; $i++ ) { ?>
                                <div class="col-3 px-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 u-font-weight-medium u-font-family-lato text-center text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden mb-1 py-2"
                                    style="background-color: #A10F0F"
                                    href="#">
                                        Institucional
                                    </a>
                                </div>
                            <?php } ?>
                            <!-- end loop -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>