
<?php
function themerealise_register_widget(){

    register_sidebar(array(
        'name'  => __( 'Primary Sidebar', 'theme_name' ),
        ) );
};

// enregistrement de la sidebar grace au hook widgets_init
add_action('widgets_init', 'themerealise_register_widget');