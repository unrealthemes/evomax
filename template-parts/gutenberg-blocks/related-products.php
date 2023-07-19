<?php

/**
 * related-products Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'related-products-' . $block['id'];
$className = 'block_100';

if ( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
if ( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if ( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$url_arr = explode('/', $_SERVER['REQUEST_URI']);

if ( ! isset($url_arr[2]) ) {
    return false;
}

$current_page = get_page_by_path($url_arr[2], OBJECT, 'product');

$title = get_field('title_relpr');
$count = get_field('count_relpr');
$args = [
    'posts_per_page' => $count,
    'orderby' => 'rand',
    'order' => 'desc',
];
$related_products = array_filter( array_map( 'wc_get_product', wc_get_related_products( $current_page->ID, $args['posts_per_page'], null ) ), 'wc_products_array_filter_visible' );
$related_products = wc_products_array_orderby( $related_products, $args['orderby'], $args['order'] );
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/related-products.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">
            <div class="popular_block_item">
                <div class="block_title">
                    <h3><?php echo esc_html($title); ?></h3>
                </div>

                <?php if ( $related_products ) : ?>

                        <div class="block_prod">
                            <div class="block_item owl-carousel owl-theme">
                                
                                <?php 
                                foreach ( $related_products as $related_product ) : 
                                    $post_object = get_post( $related_product->get_id() );
                                    setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
            
                                    /**
                                     * Hook: woocommerce_shop_loop.
                                     */
                                    do_action( 'woocommerce_shop_loop' );

                                    wc_get_template_part( 'content', 'product' );
                                
                                endforeach; 
                                ?> 
                                
                            </div>
                        </div>

                    <?php 
                    wp_reset_postdata(); 
                    ?>

                <?php endif; ?>

            </div>
        </div>
    </div>

<?php endif; ?>