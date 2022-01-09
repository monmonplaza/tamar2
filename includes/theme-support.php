<?php
function tmr_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'text_domain' ),
        'mobile_menu' => __( 'Mobile Menu', 'text_domain' ),
        'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
    ) );

    add_theme_support( 'title-tag' );
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    //CUSTOM IMAGE SIZES
    add_image_size( 'post-list-img', 730, 490, true ); 
    add_image_size( 'base-single', 557, 529, true ); 
    add_image_size( 'about-img', 512, 450, true ); 
    add_image_size( 'history-img', 600, 600, true ); 
    add_image_size( 'card-img', 600, 600, true ); 
    add_image_size( 'activity-img', 850, 550, true ); 
    
    
}
add_action( 'after_setup_theme', 'tmr_register_nav_menu', 0 );


