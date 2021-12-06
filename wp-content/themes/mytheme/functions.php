<?php 

function mytheme_support(){
    add_theme_support('title_tag');
    add_theme_support('menus');
    register_nav_menu('header', 'en tete du menu');
    register_nav_menu('footer', 'pied de page');
    add_theme_support("woocommerce", array(
        "thumbnail_image_width" =>150,
        "single_image_width" => 200,
        "product_grid" => array(
            "default_columns" => 10,
            "min_columns" => 2,
            "max_columns" => 3
        )
    ));
}

function mytheme_register_assets(){
   wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',[]);
   wp_register_script('bootstrap','cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js',['popper'],['jquery'], false, true);
   wp_register_script('popper','cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js',[], false, true);
   wp_deregister_script('jquery');
   wp_register_script('jquery','cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',[], false, true);
   wp_enqueue_style('bootstrap');
   wp_enqueue_script('bootstrap');
}


function mytheme_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;

}


function mytheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

function mytheme_image_size($sizes)
{
    unset($sizes['menu-36x36']);
    $sizes['menu-50x50'] = array(50,50);
    return $sizes;
}

add_action('after_setup_theme','mytheme_support');
add_action('wp_enqueue_scripts','mytheme_register_assets');
add_filter('nav_menu_css_class','mytheme_menu_class');
add_filter('nav_menu_link_attributes','mytheme_menu_link_class');
add_filter('menu_image_default_sizes','mytheme_image_size');

include_once 'include/wc-modifications.php';

function awsome_widget_setup(){
    register_sidebar(
        array (
            'name' => 'Sidebar',
            'id' => 'sidebar1',
            'description' => 'Custom Sidebar to display widgets',
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action('widgets_init','awsome_widget_setup');
