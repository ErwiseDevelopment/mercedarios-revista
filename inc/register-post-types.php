<?php

//Função para criar post type:
 function erwise_create_post_type() { 
	if( function_exists('acf_add_options_page') ) {	
		acf_add_options_page( 
			array( 
				'page_title' => 'Informativos', 
				'menu_title' => 'Informativos', 
				'menu_slug'  => 'Informativos', 
				'capability' => 'edit_posts', 
				//'position'   => '20,3', 
				'redirect'   => false, 
				'icon_url'   => 'dashicons-excerpt-view' 
		));
	}
	
	}
	
 add_action( 'init', 'erwise_create_post_type' );


