<?php

/**
 * banner-8 Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'banner-8-' . $block['id'];
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

$title = get_field('m_title_blocks_8');
$blocks = get_field('blocks_8');

?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/banner-8.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">
            <div class="block_content">
                
                <?php if ( $title ) : ?>
                    <h1><?php echo nl2br($title); ?></h1> 
                <?php endif; ?>
    
                <?php if ( $blocks ) : ?>
                    <div class="di_item_list">

                        <?php 
                        foreach ( $blocks as $block ) : 
                            $img_url = wp_get_attachment_url( $block['img_blocks_8'], 'full' );
                        ?>

                            <div class="di_block_item">

                                <?php if ( $block['title_blocks_8'] ) : ?>
                                    <div class="di_block_item_title">
                                        <?php echo nl2br($block['title_blocks_8']); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $img_url ) : ?>
                                    <div class="di_block_item_img">
                                        <img src="<?php echo esc_url($img_url); ?>" alt="Image">
                                    </div>
                                <?php endif; ?>

                                <?php if ( $block['txt_blocks_8'] ) : ?>
                                    <div class="di_block_item_name">
                                        <?php echo nl2br($block['txt_blocks_8']); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $block['inscription_blocks_8'] ) : ?>
                                    <strong>
                                        <?php echo esc_html($block['inscription_blocks_8']); ?>
                                    </strong>
                                <?php endif; ?>

                                <?php if ( $block['price_blocks_8'] ) : ?>
                                    <div class="price2">
                                        <?php echo esc_html($block['price_blocks_8']); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $block['form_blocks_8'] ) : ?>
                                    <button type="button" class="btn open_popup" data-popup-id="<?php echo $key . '_' . $id; ?>" onclick="return false">
                                        рассчитать стоимость
                                    </button>
                                    <?php get_template_part('template-parts/modals/request', 'call', ['id' => $key . '_' . $id, 'form' => $block['form_blocks_8']]); ?>
                                <?php endif; ?>

                            </div>
                            
                        <?php endforeach; ?>

                    </div>
                <?php endif; ?>
                
            </div>
        </div>
    </div>

<?php endif; ?>