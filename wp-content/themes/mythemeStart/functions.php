<?php
function mythemeStart_load_scripts(){

// fichier css

    wp_enqueue_style("bootstrap", get_template_directory_uri()."https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css
    ", array(), "1.0","all");
    wp_enqueue_style("stylecss", get_template_directory_uri()."/assets/css/styles.css
    ", array(), "1.0","all");
    wp_enqueue_style("styles",get_stylesheet_uri(),array(), "all");

//fichier js
    wp_enqueue_script("scripte",get_template_directory_uri()."https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js
    ",array("jquery"), "1.0","true");
    wp_enqueue_script("scripte",get_template_directory_uri()."/assets/js/scripts.js
    ",array("jquery"), "1.0","true");

}
add_action("wp_enqueue_scripts","mythemeStart_load_scripts");

//enregistration nav menu
function mythemeStart_nav_config(){
    register_nav_menus(array(
        "ms_primary_menu_id" => "MS Primary Menu(Top menu)",
        "ms_secondary_menu_id" => "MS Sidbar",
    ));

    //enregistration theme support
    add_theme_support("post_thumbnails");
    add_theme_support("woocommerce", array(
        "thumbnail_image_width" => 150,
        "single_image_width" => 200,
        "product_grid" => array(
            "default_columns" => 10,
            "min_columns" => 2,
            "max_columns" => 3
        )
    ));

}
add_action("after_setup_theme","mythemeStart_nav_config");

//ajouter classe li
function mythemeStart_add_li_class($classes, $item, $args){
    $classes[] = "nav-item ms-theme";
    return $classes;

}
add_filter("nav_menu_css_class","mythemeStart_add_li_class", 1, 3);

//ajouter class link
function mythemeStart_add_anchor_links($classes, $item, $args){
    $classes['class'] = "nav-link ms-link-class";
    return $classes;

}
add_filter("nav_menu_link_attributes","mythemeStart_add_anchor_links", 1, 3);


