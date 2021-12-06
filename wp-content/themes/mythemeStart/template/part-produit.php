
<div class="tab_content mt-5">
    <div>
        <?php
        $current_woo_id = get_post_meta($post->ID, "woocommerce_integration_id", true);
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => - 1
        );
        $loop = get_posts( $args );
        if ( ! empty( $loop ) ) {
            echo "<select name='woocommerce_integration_id' class='chosen-dropdown' style='width: 300px;'>";
            echo "<option value=''>" . __( "No product association", "listings" ) . "</option>";
            foreach ( $loop as $product ) {
                $current_id = $product->ID;
                echo "<option value='" . $current_id . "'" . selected( $current_id, $current_woo_id, false ) . ">" . $product->post_title . "</option>";
            }
            echo "</select>";
        } else {
            echo __( 'No products found', 'listings' );
        }
        wp_reset_query();


        $search = get_query_var('search', null);
        $the_query = new WP_Query(is_null($search) ? [] : [$search => 'keyword']);

        // The Loop
        if ($the_query->have_posts()) {
            echo '<ul>';
            while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<li>' . get_the_title() . '</li>';
            }
            echo '</ul>';
        } else {
// no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();


        ?>
    </div>
</div>




<?php
function __search_by_title_only( $search, &$wp_query ) {
    global $wpdb;
    if($_GET['post_type'] = 'product' )
        return $search;
    $q = $wp_query->query_vars;
    $n = ! empty( $q['exact'] ) ? '' : '%';
    $search =
    $searchand = '';
    foreach ( (array) $q['search_terms'] as $term ) {
        $term = esc_sql( like_escape( $term ) );
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
    if ( ! empty( $search ) ) {
        $search = " AND ({$search}) ";
        if ( ! is_user_logged_in() )
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}
add_filter( 'posts_search', '__search_by_title_only', 500, 2 );
?>

