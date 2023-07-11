<?php

/**
 * popular-product Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'popular-product-' . $block['id'];
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

$title = get_field('title_pp');
$short_desc = get_field('short_desc_pp');
$terms = get_field('terms_pp');
$products = get_field('products_pp');
$txt_link = get_field('txt_link_pp');
$link = get_field('link_pp');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/popular-product.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div class="block_100">
            <div class="container">
                <div class="popular_block_item">

                    <h3><?php echo esc_html($title); ?></h3>
                    <p><?php echo nl2br($short_desc); ?></p>
   
                    <?php if ( $terms ) : ?>
                        <div class="block_slider_tag block_slider_tag2 owl-carousel owl-theme">
                            <?php foreach ( $terms as $term ) : ?>

                                <div class="item">
                                    <a href="<?php echo get_term_link($term->slug, $term->taxonomy); ?>">
                                        <?php echo $term->name; ?>
                                    </a>
                                </div>

                            <?php endforeach; ?>
                        </div> 
                    <?php endif; ?>
                    
                    <div class="block_prod">

                        <?php if ( $products ) : ?>
                            <div class="block_item owl-carousel owl-theme">

                                <?php 
                                foreach ( $products as $_product ) : 
                                    $post = $_product;
                                    setup_postdata($post);
                                    /**
                                     * Hook: woocommerce_shop_loop.
                                     */
                                    do_action( 'woocommerce_shop_loop' );

                                    wc_get_template_part( 'content', 'product' );
                                
                                endforeach; 
                                ?> 
                                
                            </div>
                        <?php endif; ?>
                        
                        <?php if ( $txt_link && $link ) : ?>
                            <div class="block_btn_center">
                                <a href="<?php echo esc_url($link); ?>" class="btn_transparent">
                                    <?php echo esc_html($txt_link); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                    </div>
   
                </div>
            </div>
        </div>

<?php endif; ?>