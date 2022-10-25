<section class="u-bg-folk-dark-marron">

    <div class="container">

        <div class="row">

            <?php
                $link_pattern = get_field( 'link_padrao', 'option' );
                $menu_post_link = $link_pattern . get_field( 'link_menu_editorias', 'option');
                $request_posts = wp_remote_get( $menu_post_link );
                 
                if(!is_wp_error( $request_posts )) :
                    $body = wp_remote_retrieve_body( $request_posts );
                    $data = json_decode( $body );

                    if(!is_wp_error( $data )) :
                        foreach( $data as $rest_post ) :
            //var_dump($rest_post);

            ?>


                            <div class="col-12">

                                <div class="row">

                                    <div class="col-lg-3 d-flex justify-content-center align-items-center my-4 my-lg-0">
                                        <a href="<?php echo get_home_url( null, '/' ) ?>">
                                            <img
                                            class="img-fluid"
                                            src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/mercedarios-org.png"
                                            alt="Mercedários Org">
                                        </a>
                                    </div>

                                    <div class="col-lg-9 mb-2 mb-lg-0">

                                        <div class="row">

                                        
                                                <div class="col-6 col-lg-3 px-1">
                                                    <a
                                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-medium u-font-family-lato text-center text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden mb-1 py-2"
                                                    style="background-color: #A10F0F"
                                                    href="<?php echo $rest_post->editoria_institucional;?>">
                                                        Institucional
                                                    </a>
                                               </div>
                                                
                                               <div class="col-6 col-lg-3 px-1">
                                                    <a
                                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-medium u-font-family-lato text-center text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden mb-1 py-2"
                                                    style="background-color: #A10F0F"
                                                    href="<?php echo $rest_post->editoria_vocacional;?>">
                                                        Vocacional
                                                    </a>
                                                </div>
                                                
                                                <div class="col-6 col-lg-3 px-1">
                                                    <a
                                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-medium u-font-family-lato text-center text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden mb-1 py-2"
                                                    style="background-color: #A10F0F"
                                                    href="<?php echo $rest_post->editoria_educacao;?>">
                                                    educação
                                                    </a>
                                                </div>
                                                
                                                <div class="col-6 col-lg-3 px-1">
                                                    <a
                                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-medium u-font-family-lato text-center text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden mb-1 py-2"
                                                    style="background-color: #A10F0F"
                                                    href="<?php echo $rest_post->editoria_paroquias;?>">
                                                        paróquias
                                                    </a>
                                                </div>
                                                
                                                <div class="col-6 col-lg-3 px-1">
                                                    <a
                                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-medium u-font-family-lato text-center text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden mb-1 py-2"
                                                    style="background-color: #A10F0F"
                                                    href="<?php echo $rest_post->editoria_caridade;?>">
                                                        caridade
                                                    </a>
                                                </div>
                                                
                                                <div class="col-6 col-lg-3 px-1">
                                                    <a
                                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-medium u-font-family-lato text-center text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden mb-1 py-2"
                                                    style="background-color: #A10F0F"
                                                    href="<?php echo $rest_post->editoria_dominocencio;?>">
                                                        dom inocêncio
                                                    </a>
                                                </div>
                                                
                                                <div class="col-6 col-lg-3 px-1">
                                                    <a
                                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-medium u-font-family-lato text-center text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden mb-1 py-2"
                                                    style="background-color: #A10F0F"
                                                    href="<?php echo $rest_post->editoria_revistamerce;?>">
                                                        revista mercê
                                                    </a>
                                                </div>
                                                
                                                <div class="col-6 col-lg-3 px-1">
                                                    <a
                                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-medium u-font-family-lato text-center text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden mb-1 py-2"
                                                    style="background-color: #A10F0F"
                                                    href="<?php echo $rest_post->editoria_empreendedor;?>">
                                                     pastoral do empreendedor
                                                    </a>
                                                </div>
                                                <div class="col-lg-2 py-1 px-0 px-lg-3">
                                                    <a
                                                    class="w-100 h-100 d-flex justify-content-center align-items-center u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-font-family-cinzel text-center text-uppercase text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden py-2"
                                                    style="background-color:#640000"
                                                    href="<?php echo $rest_post->editoria_acervo;?>">
                                                        Acervo virtual <br>
                                                        (NOssa história)
                                                    </a>
                                                </div>
                                                
                                            <!-- end loop -->
                                        </div>
                                    </div>
                                </div>
                            </div>
            <?php       endforeach;
                    endif; 
                endif; 
            ?>
        </div>
    </div>
</section>