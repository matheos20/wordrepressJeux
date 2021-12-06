<?php
function wpc_theme_enqueue_styles() {
wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'wpc_theme_enqueue_styles');

add_action('woocommerce_before_shop_loop','shop_main_heading');


function shop_main_heading(){
    $content = '';
    $content.='<h1>Welcome to my fabulous shop page!</h1>';
    $content.='<h2>Built with love by myself</h2>';
    $content.='<p>Thanks for passing by and visiting my website shop page, please browse your most liked products and purchase all of them</p>';
    $content.='<img src="https://www.carpetright.co.uk/globalassets/static-pages/useful-links/samples/sample-banner.jpg"/>';
    echo $content;
}
