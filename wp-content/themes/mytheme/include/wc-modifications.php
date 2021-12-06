<?php

//add container & row class
add_action("woocommerce_before_main_content","open_container_row_div_class", 5);
function open_container_row_div_class(){

    echo "<div class='container' <div class='row'>";

}
add_action("woocommerce_after_main_content","close_container_row_div_class", 5);
function close_container_row_div_class(){

    echo "</div></div>";

}

add_action("template_redirect","load_templeate_layout");
function load_templeate_layout(){
    if (is_shop()){
        add_action("woocommerce_before_main_content","open_sidebar_column_grid", 6);

        function open_sidebar_column_grid(){

            echo "<div class='col-ms-4'>";
        }

        function close_sidebar_column_grid(){
            echo "</div>";
        }

        add_action("woocommerce_before_main_content","open_product_column_grid", 9);
        function open_product_column_grid(){
            echo "<div class='col-ms-8'>";
        }
        add_action("woocommerce_before_main_content","close_product_column_grid",10);
        function close_product_column_grid(){
            echo "</div>";
        }
    }

}


add_action('after_setup_theme','mytheme_support');
add_action('wp_enqueue_scripts','mytheme_register_assets');
add_filter('nav_menu_css_class','mytheme_menu_class');
add_filter('nav_menu_link_attributes','mytheme_menu_link_class');
add_filter('menu_image_default_sizes','mytheme_image_size');

add_action("woocommerce_before_main_content","woocommerce_get_sidebar", 7);
add_action("woocommerce_before_main_content","woocommerce_get_sidebar", 7);

remove_action("woocommerce_sidebar","close_sidebar_column_grid",8);

add_action("woocommerce_show_page_title","toogle_page_title");
function toogle_page_title($val){
    $val = false;
    return $val;

}
add_action("woocommerce after shop loop item title","the_excerpt");

remove_action("woocommerce_before_main_content","woocommerce_breadcrumb",20);
remove_action("woocommerce_before_shop_loop","woocommerce_result_count",20);
remove_action("woocommerce_before_shop_loop","woocommerce_catalog_ordering",30);
