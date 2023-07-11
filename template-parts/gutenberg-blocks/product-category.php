<?php

/**
 * product-category Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'product-category-' . $block['id'];
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

$title = get_field('title_prc');
$short_desc = get_field('short_desc_prc');
$term = get_field('term_prc');
$count = get_field('count_prc');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/product-category.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">
            <div class="popular_block_item">
                <div class="block_title">
                    <h3><?php echo esc_html($title); ?></h3>
                    <p><?php echo nl2br($short_desc); ?></p>
                </div>

                <?php 
                if ( $term ) : 

                    $args = [
                        'post_type' => 'product',
                        'post_status' => 'publish',
                        'posts_per_page' => $count,
                        'tax_query' => [
                            'relation' => 'AND',
                            [
                                'taxonomy' => $term->taxonomy,
                                'field' => 'slug',
                                'terms' => $term->slug,
                            ],
                        ],
                    ];
                    $loop = new WP_Query( $args );

                    if ( $loop->have_posts() ) : 
                    ?>

                        <div class="block_prod">
                            <div class="block_item owl-carousel owl-theme">
                                
                                <?php 
                                while ( $loop->have_posts() ) : 
                                    $loop->the_post(); 
                                
                                    /**
                                     * Hook: woocommerce_shop_loop.
                                     */
                                    do_action( 'woocommerce_shop_loop' );

                                    wc_get_template_part( 'content', 'product' );
                                
                                endwhile; 
                                ?> 
                                
                            </div>
                            
                            <div class="block_btn_center">
                                <a href="<?php echo get_term_link($term->slug, $term->taxonomy); ?>" class="btn_transparent">
                                    смотреть все септики
                                </a>
                            </div>
                            
                        </div>

                    <?php 
                    endif; 
                    wp_reset_postdata(); 
                    ?>

                <?php endif; ?>

            </div>
        </div>
    </div>

<?php endif; ?>