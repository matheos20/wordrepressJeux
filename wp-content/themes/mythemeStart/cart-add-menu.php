<?php  // <~ don't add me in

add_filter( 'wp_nav_menu_top-menu_items', 'woo_cart_but_icon', 10, 2 ); // Change menu to suit - example uses 'top-menu'

/**
 * Add WooCommerce Cart Menu Item Shortcode to particular menu
 */
function woo_cart_but_icon ( $items, $args ) {
    $items .=  '[woo_cart_but]'; // Adding the created Icon via the shortcode already created

    return $items;
}