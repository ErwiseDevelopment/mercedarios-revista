<section class="pt-5">

    <div class="container">

        <div class="row">
                        <?php $args = array(
                                'posts_per_page' => 1,
                                'post_type' => '3d-flip-book',
                                'order' => 'DESC' ,
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => '3d-flip-book-category',
                                        'field'    => 'slug',
                                        'terms'    => 'destaque'
                                    )
                                )
                            ); 
                            $book = new WP_Query($args);
                                if ($book->have_posts()) : 
                                    while($book->have_posts())  : $book->the_post(); 
                        $id = $book->the_id()                  
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
                            <?php var_dump($book)?>
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