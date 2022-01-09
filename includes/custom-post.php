<?php
function tmr_custom_post_type(){
    $offering_label  = array (
        'name'          => __('Offerings', 'textdomain'),
        'singular_name' => __('Offering', 'textdomain'),
        'add_new'       => __('Add Offering', 'textdomain'),
        'add_new_item'  => __('Add New Offering', 'textdomain'),
        'edit_item'     => __('Edit Offering', 'textdomain'),
        'all_items'     => __('Offering', 'textdomain')
    );


    $offering_args = array(  
            'labels'              => $offering_label,
            'public'              => true,
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor',  'thumbnail' )
    );
    register_post_type( 'offering', $offering_args );



    $testimonial_label  = array (
        'name'          => __('Testimonials', 'textdomain'),
        'singular_name' => __('Testimonial', 'textdomain'),
        'add_new'       => __('Add Testimonial', 'textdomain'),
        'add_new_item'  => __('Add New Testimonial', 'textdomain'),
        'edit_item'     => __('Edit Testimonial', 'textdomain'),
        'all_items'     => __('Testimonial', 'textdomain')
    );

    $testimonial_args = array(  
            'labels'              => $testimonial_label,
            'public'              => true,
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title' )
    );
    register_post_type( 'testimonials', $testimonial_args );

    $employment_label  = array (
        'name'          => __('Employments', 'textdomain'),
        'singular_name' => __('Employment', 'textdomain'),
        'add_new'       => __('Add Employment', 'textdomain'),
        'add_new_item'  => __('Add New Employment', 'textdomain'),
        'edit_item'     => __('Edit Employment', 'textdomain'),
        'all_items'     => __('Employment', 'textdomain')
    );

    $employment_args = array(  
            'labels'              => $employment_label,
            'public'              => true,
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor' )
    );
    register_post_type( 'employments', $employment_args );


    // CUSTOM MENU START HERE
    $accommodation_label  = array (
        'name'          => __('Accommodation', 'textdomain'),
        'singular_name' => __('Accommodation', 'textdomain'),
        'add_new'       => __('Add Accommodation', 'textdomain'),
        'add_new_item'  => __('Add New Accommodation', 'textdomain'),
        'edit_item'     => __('Edit Accommodation', 'textdomain'),
        'all_items'     => __('Accommodations', 'textdomain')
    );
  

    $accommodation_args = array(  
            'labels'              => $accommodation_label,
            'public'              => true,
            'show_in_menu'        => 'edit.php?post_type=accommodations',
            'capability_type'     => 'post',
            'query_var'           => true,
            'hierarchical'        => true,
            'has_archive'         => true,  
            'supports'            => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'accommodations', $accommodation_args );

    $swiss_label  = array (
        'name'          => __('Swiss Village', 'textdomain'),
        'singular_name' => __('Swiss Village', 'textdomain'),
        'add_new'       => __('Add Swiss Village', 'textdomain'),
        'add_new_item'  => __('Add New Swiss Village', 'textdomain'),
        'edit_item'     => __('Edit Swiss Village', 'textdomain'),
        'all_items'     => __('Swiss Village', 'textdomain')
    );


    $swiss_args = array(  
            'labels'              => $swiss_label,
            'public'              => true,
            'show_in_menu'        => 'edit.php?post_type=swissvillage',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor',  'thumbnail' )
    );

    register_post_type( 'swissvillage', $swiss_args );

    $facilities_label  = array (
        'name'          => __('Facilities', 'textdomain'),
        'singular_name' => __('Facility', 'textdomain'),
        'add_new'       => __('Add Facility', 'textdomain'),
        'add_new_item'  => __('Add New Facility', 'textdomain'),
        'edit_item'     => __('Edit Facility', 'textdomain'),
        'all_items'     => __('Facilities', 'textdomain')
    );


    $facilities_args = array(  
            'labels'              => $facilities_label,
            'public'              => true,
            'show_in_menu'        => 'edit.php?post_type=facilities',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor',  'thumbnail' )
    );

    register_post_type( 'facilities', $facilities_args );




    $room_label  = array (
        'name'          => __('Rooms', 'textdomain'),
        'singular_name' => __('Room', 'textdomain'),
        'add_new'       => __('Add Room', 'textdomain'),
        'add_new_item'  => __('Add New Room', 'textdomain'),
        'edit_item'     => __('Edit Room', 'textdomain'),
        'all_items'     => __('Rooms', 'textdomain')
    );


    $room_args = array(  
            'labels'              => $room_label,
            'public'              => true,
            'show_in_menu'        => 'edit.php?post_type=room',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor',  'thumbnail' )
    );

    register_post_type( 'room', $room_args );


    
    $ceremony_label  = array (
        'name'          => __('Ceremony', 'textdomain'),
        'singular_name' => __('Ceremony', 'textdomain'),
        'add_new'       => __('Add Ceremony', 'textdomain'),
        'add_new_item'  => __('Add New Ceremony', 'textdomain'),
        'edit_item'     => __('Edit Ceremony', 'textdomain'),
        'all_items'     => __('Ceremony', 'textdomain')
    );
    $ceremony_args = array(  
            'labels'              => $ceremony_label,
            'public'              => true,
            'show_in_menu'        => 'edit.php?post_type=ceremony',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor',  'thumbnail' )
    );
    register_post_type( 'ceremony', $ceremony_args );

    $reception_label  = array (
        'name'          => __('Reception', 'textdomain'),
        'singular_name' => __('Reception', 'textdomain'),
        'add_new'       => __('Add Reception', 'textdomain'),
        'add_new_item'  => __('Add New Reception', 'textdomain'),
        'edit_item'     => __('Edit Reception', 'textdomain'),
        'all_items'     => __('Reception', 'textdomain')
    );
    $reception_args = array(  
            'labels'              => $reception_label,
            'public'              => true,
            'show_in_menu'        => 'edit.php?post_type=reception',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor',  'thumbnail' )
    );
    register_post_type( 'reception', $reception_args );



    $conference_label  = array (
        'name'          => __('Conference', 'textdomain'),
        'singular_name' => __('Conference', 'textdomain'),
        'add_new'       => __('Add Conference', 'textdomain'),
        'add_new_item'  => __('Add New Conference', 'textdomain'),
        'edit_item'     => __('Edit Conference', 'textdomain'),
        'all_items'     => __('Conference', 'textdomain')
    );
    $conference_args = array(  
            'labels'              => $conference_label,
            'public'              => true,
            'show_in_menu'        => 'edit.php?post_type=conference',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor',  'thumbnail' )
    );
    register_post_type( 'conference', $conference_args );

    $spaces_label  = array (
        'name'          => __('Spaces', 'textdomain'),
        'singular_name' => __('Space', 'textdomain'),
        'add_new'       => __('Add Space', 'textdomain'),
        'add_new_item'  => __('Add New Space', 'textdomain'),
        'edit_item'     => __('Edit Space', 'textdomain'),
        'all_items'     => __('Spaces', 'textdomain')
    );
    $spaces_args = array(  
            'labels'              => $spaces_label,
            'public'              => true,
            'show_in_menu'        => 'edit.php?post_type=space',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor',  'thumbnail' )
    );
    register_post_type( 'Spaces', $spaces_args );

    $event_label  = array (
        'name'          => __('Events', 'textdomain'),
        'singular_name' => __('Event', 'textdomain'),
        'add_new'       => __('Add Event', 'textdomain'),
        'add_new_item'  => __('Add New Event', 'textdomain'),
        'edit_item'     => __('Edit Event', 'textdomain'),
        'all_items'     => __('Events', 'textdomain')
    );
    $event_args = array(  
            'labels'              => $event_label,
            'public'              => true,
            'show_in_menu'        => 'edit.php?post_type=event',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'event', $event_args );

    $play_label  = array (
        'name'          => __('Play', 'textdomain'),
        'singular_name' => __('Play', 'textdomain'),
        'add_new'       => __('Add Play', 'textdomain'),
        'add_new_item'  => __('Add New Play', 'textdomain'),
        'edit_item'     => __('Edit Play', 'textdomain'),
        'all_items'     => __('Play', 'textdomain')
    );
    $play_args = array(  
            'labels'              => $play_label,
            'public'              => true,
            'show_in_menu'        => 'edit.php?post_type=play',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'play', $play_args );

    $deal_label  = array (
        'name'          => __('Deals', 'textdomain'),
        'singular_name' => __('Deal', 'textdomain'),
        'add_new'       => __('Add Deal', 'textdomain'),
        'add_new_item'  => __('Add New PDeallay', 'textdomain'),
        'edit_item'     => __('Edit Deal', 'textdomain'),
        'all_items'     => __('Deals', 'textdomain')
    );
    $deal_args = array(  
            'labels'              => $deal_label,
            'public'              => true,

            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'deal', $deal_args );



    $activity_label  = array (
        'name'          => __('Activities', 'textdomain'),
        'singular_name' => __('Activity', 'textdomain'),
        'add_new'       => __('Add Activity', 'textdomain'),
        'add_new_item'  => __('Add New Activity', 'textdomain'),
        'edit_item'     => __('Edit Activity', 'textdomain'),
        'all_items'     => __('Activity', 'textdomain')
    );
    $activity_args = array(  
            'labels'              => $activity_label,
            'public'              => true,
            'show_in_menu'        => 'edit.php?post_type=activity',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'activity', $activity_args );

    $food_label  = array (
        'name'          => __('Foods', 'textdomain'),
        'singular_name' => __('Food', 'textdomain'),
        'add_new'       => __('Add Food', 'textdomain'),
        'add_new_item'  => __('Add New Food', 'textdomain'),
        'edit_item'     => __('Edit Food', 'textdomain'),
        'all_items'     => __('Foods', 'textdomain')
    );
    $food_args = array(  
            'labels'              => $food_label,
            'public'              => true,
           
            'capability_type'     => 'post',
            'show_ui'             => true,
            'supports'            => array( 'title' )
    );
    register_post_type( 'food', $food_args );
}

add_action( 'init', 'tmr_custom_post_type');