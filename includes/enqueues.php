<?php

function tmr__assets() {
    wp_enqueue_style('tamar_style', get_template_directory_uri() . '/css/main.css', microtime());
    wp_enqueue_style('tamar_icon', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css',   microtime());
    
    wp_enqueue_style('tamar_slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(),  microtime());
    wp_enqueue_style('tamar_slicktheme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', array(),  microtime());

    wp_enqueue_script('tamar_jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', NULL,  true);
    wp_enqueue_script('tamar_slickjs', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', NULL,  true);
    wp_enqueue_script('tamar_sliderjs', get_template_directory_uri() . '/js/responsive.js', NULL,  true);
   
    wp_enqueue_script('tamar_script', get_template_directory_uri() . '/js/script.js', NULL, microtime(), true);
   
}

add_action('wp_enqueue_scripts', 'tmr__assets');





function wpdocs_enqueue_custom_admin_style() {
    wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0' );
    wp_register_style( 'custom_wp_admin_icon', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css');
    wp_enqueue_style( 'custom_wp_admin_icon');
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );