<?php
function tmr_custom_menu() {
    add_menu_page( 
        'Tamar Menu',
        'Tamar',
        'manage_options',
        'tamar_menus',
        'page_content',
        'dashicons-screenoptions',
        '100' );
        
       add_submenu_page('tamar_menus', 'Tamar Menu', 'Dashboard', 'manage_options', 'tamar_menus','page_content');
       add_submenu_page('tamar_menus', 'Accommodation', 'Accommodation', 'manage_options', 'accommodations','goto_accomodations');
       add_submenu_page('tamar_menus', 'Swiss Village', 'Swiss Village', 'manage_options', 'swissvillage','goto_swiss_village');
       add_submenu_page('tamar_menus', 'Facilities', 'Facilities', 'manage_options', 'facilities','goto_facilities');
       add_submenu_page('tamar_menus', 'Rooms', 'Rooms', 'manage_options', 'room','goto_rooms');
       add_submenu_page('tamar_menus', 'Ceremony', 'Ceremony', 'manage_options', 'ceremony','goto_ceremony');
       add_submenu_page('tamar_menus', 'Reception', 'Reception', 'manage_options', 'reception','goto_reception');
       add_submenu_page('tamar_menus', 'Conference', 'Conference', 'manage_options', 'conference','goto_conference');
       add_submenu_page('tamar_menus', 'Spaces', 'Spaces', 'manage_options', 'spaces','goto_spaces');
       add_submenu_page('tamar_menus', 'Event', 'Event', 'manage_options', 'event','goto_event');
       add_submenu_page('tamar_menus', 'Play', 'Play', 'manage_options', 'play','goto_play');
       add_submenu_page('tamar_menus', 'Activity', 'Activity', 'manage_options', 'activity','goto_activity');
       add_submenu_page('tamar_menus', 'Food', 'Food', 'manage_options', 'food','goto_food');
  

     
    }
add_action('admin_menu', 'tmr_custom_menu');




function page_content() {
    echo "<h1>Tamar Dashboard</h1>
        <div class='dashboard__wrapper'>
            <div class='dashboard__item'>
                <div>
                    <i class='fab fa-facebook'></i>
                    <h2>Accomodation</h2>
                    <p>Manage accommodation list</p>
                    <a href='http://localhost/tamarv2/wp-admin/edit.php?post_type=accommodations'>View</a>
                </div>
            </div>

            <div class='dashboard__item'>
                <div>
                    <h2>Swiss Village</h2>
                    <p>Manage Swiss Village list</p>
                    <a href='http://localhost/tamarv2/wp-admin/edit.php?post_type=swissvillage'>View</a>
                </div>
            </div>

            <div class='dashboard__item'>
                <div>
                    <h2>Facilities</h2>
                    <p>Manage facilities list</p>
                    <a href='http://localhost/tamarv2/wp-admin/edit.php?post_type=facilities'>View</a>
                </div>
            </div>

            <div class='dashboard__item'>
                <div>
                    <h2>Room</h2>
                    <p>Manage Room list</p>
                    <a href='http://localhost/tamarv2/wp-admin/edit.php?post_type=room'>View</a>
                </div>
            </div>

            <div class='dashboard__item'>
                <div>
                    <h2>Ceremony</h2>
                    <p>Manage Ceremony list</p>
                    <a href='http://localhost/tamarv2/wp-admin/edit.php?post_type=ceremony'>View</a>
                </div>
            </div>

            <div class='dashboard__item'>
                <div>
                    <h2>Reception</h2>
                    <p>Manage Reception list</p>
                    <a href='http://localhost/tamarv2/wp-admin/edit.php?post_type=reception'>View</a>
                </div>
            </div>

            <div class='dashboard__item'>
            <div>
                <h2>Conference</h2>
                <p>Manage Conference list</p>
                <a href='http://localhost/tamarv2/wp-admin/edit.php?post_type=conference'>View</a>
            </div>
        </div>
        <div class='dashboard__item'>
            <div>
                <h2>Spaces</h2>
                <p>Manage Spaces list</p>
                <a href='http://localhost/tamarv2/wp-admin/edit.php?post_type=spaces'>View</a>
            </div>
        </div>
        <div class='dashboard__item'>
            <div>
                <h2>Events</h2>
                <p>Manage Events list</p>
                <a href='http://localhost/tamarv2/wp-admin/edit.php?post_type=event'>View</a>
            </div>
        </div>

        <div class='dashboard__item'>
            <div>
                <h2>Play</h2>
                <p>Manage Play list</p>
                <a href='http://localhost/tamarv2/wp-admin/edit.php?post_type=play'>View</a>
            </div>
        </div>
        <div class='dashboard__item'>
            <div>
                <h2>Activity</h2>
                <p>Manage Activity list</p>
                <a href='http://localhost/tamarv2/wp-admin/edit.php?post_type=activity'>View</a>
            </div>
        </div>

        <div class='dashboard__item'>
        <div>
            <h2>Food</h2>
            <p>Manage Food list</p>
            <a href='http://localhost/tamarv2/wp-admin/edit.php?post_type=food'>View</a>
        </div>
    </div>


        </div>
    ";
}

function goto_accomodations(){   
    wp_redirect(admin_url().'edit.php?post_type=accommodations');
    exit;
}

function goto_swiss_village(){   
    wp_redirect(admin_url().'edit.php?post_type=swissvillage');
    exit;
}

function goto_facilities(){   
    wp_redirect(admin_url().'edit.php?post_type=facilities');
    exit;
}

function goto_rooms(){   
    wp_redirect(admin_url().'edit.php?post_type=room');
    exit;
}
function goto_ceremony(){   
    wp_redirect(admin_url().'edit.php?post_type=ceremony');
    exit;
}

function goto_reception(){   
    wp_redirect(admin_url().'edit.php?post_type=reception');
    exit;
}

function goto_conference(){   
    wp_redirect(admin_url().'edit.php?post_type=conference');
    exit;
}
function goto_spaces(){   
    wp_redirect(admin_url().'edit.php?post_type=spaces');
    exit;
}

function goto_event(){   
    wp_redirect(admin_url().'edit.php?post_type=event');
    exit;
}
function goto_play(){   
    wp_redirect(admin_url().'edit.php?post_type=play');
    exit;
}
function goto_activity(){   
    wp_redirect(admin_url().'edit.php?post_type=activity');
    exit;
}
function goto_food(){   
    wp_redirect(admin_url().'edit.php?post_type=food');
    exit;
}

function add_ob_start(){
    if(is_admin()){
     ob_start();
    }
 }
 add_action('admin_init', 'add_ob_start');