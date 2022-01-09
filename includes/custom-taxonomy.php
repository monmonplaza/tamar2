<?php 

function tmr_custom_taxonomy()
{
    $offering_label = array(
    'name'              => _x('Offering Type', 'taxonomy general name'),
    'singular_name'     => _x('Offering Type', 'taxonomy singular name'),
    'all_items'         => __('All Offering Type'),
    'add_new_item'      => __('Add New Offering Type'),
    'new_item_name'     => __('New Offering type'),
    'menu_name'         => __('Offering Type'),
    );
    $offering_args = array(
    'hierarchical'      => true, 
    'labels'            => $offering_label,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'offering-type', 'with_front' => false, 'hierarchical' => true]
    );
register_taxonomy('offering-type',['offering'], $offering_args);


$accommodation_label = array(
    'name'              => _x('Accommodation Type', 'taxonomy general name'),
    'singular_name'     => _x('Accommodation Type', 'taxonomy singular name'),
    'all_items'         => __('All Accommodation Type'),
    'add_new_item'      => __('Add New Accommodation Type'),
    'new_item_name'     => __('New Accommodation type'),
    'menu_name'         => __('Accommodation Type'),
    );
    $accommodation_args = array(
    'hierarchical'      => true, 
    'labels'            => $accommodation_label,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'accommodation-type', 'with_front' => false, 'hierarchical' => true]
    );
register_taxonomy('accommodation-type',['room'], $accommodation_args);



$food_label = array(
    'name'              => _x('Food Category', 'taxonomy general name'),
    'singular_name'     => _x('Food Category', 'taxonomy singular name'),
    'all_items'         => __('All Food Category'),
    'add_new_item'      => __('Add New Food Category'),
    'new_item_name'     => __('New Food Category'),
    'menu_name'         => __('Food Category'),
    );
    $food_args = array(
    'hierarchical'      => true, 
    'labels'            => $food_label,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'food-category', 'with_front' => false, 'hierarchical' => true]
    );
register_taxonomy('food-category',['food'], $food_args);


}
add_action('init', 'tmr_custom_taxonomy', 0);
