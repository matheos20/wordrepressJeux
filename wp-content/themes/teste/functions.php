<? php

define('LGMAC_VERSION','1.0.5');

function lgmac_scripts() {
    wp_enqueue_style( 'lgmac_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(),
    LGMAC_VERSION , 'all' );
    wp_enqueue_style( 'lgmac_custom', get_template_directory_uri() . '/style.css', array(), 
    LGMAC_VERSION , 'all');

   # wp_enqueue_style( 'custom_style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
    #wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js' );
}

add_action('wp_enqueue_scripts','lgmac_scripts');
