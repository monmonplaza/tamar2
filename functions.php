<?php

require get_template_directory() . '/includes/enqueues.php';
require get_template_directory() . '/includes/theme-support.php';
require get_template_directory() . '/includes/class.php';

require get_template_directory() . '/includes/custom-menu.php';
require get_template_directory() . '/includes/custom-post.php';
require get_template_directory() . '/includes/custom-taxonomy.php';



add_action('wp_footer', 'show_template');
function show_template() {
    global $template;
    echo '<div class"template-name" style="position:fixed; left: 30px; bottom: 30px; padding:2px; background: coral; color:#fff; font-size: 13px;">'.basename($template).'</div>';
}