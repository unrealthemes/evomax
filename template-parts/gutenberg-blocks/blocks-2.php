<?php

/**
 * blocks-2 Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blocks-2-' . $block['id'];
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

$title = get_field('m_title_blocks_2');
$blocks = get_field('blocks_2');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/blocks-2.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>  

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">
            <div class="block_content">

                <?php if ( $title ) : ?>
                    <h3><?php echo nl2br($title); ?></h3>
                <?php endif; ?>

                <?php if ( $blocks ) : ?>

                    <div class="block_baner">

                        <?php 
                        foreach ( $blocks as $key => $block ) : 
                            $img_url = wp_get_attachment_url( $block['img_blocks_2'], 'full' );
                            $bg_img_url = ($img_url) ? 'background-image: url(' . $img_url . ');' : '';
                        ?>
                            <div class="block_baner_item">
                                <div class="block_baner_item_l">

                                    <?php if ( $block['title_blocks_2'] ) : ?>
                                        <div class="block_baner_title"><?php echo esc_html($block['title_blocks_2']); ?></div>
                                    <?php endif; ?>

                                
                                    <?php if ( $block['txt_blocks_2'] ) : ?>
                                        <p><?php echo nl2br($block['txt_blocks_2']); ?></p>
                                    <?php endif; ?>

                                    <?php if ( $block['txt_btn_blocks_2'] && $block['form_blocks_2'] ) : ?>
                                        <button type="button" class="btn_white open_popup" data-popup-id="<?php echo $key . '_' . $id; ?>" onclick="return false">
                                            <?php echo esc_html($block['txt_btn_blocks_2']); ?>
                                        </button>
                                        <?php get_template_part('template-parts/modals/request', 'call', ['id' => $key . '_' . $id, 'form' => $block['form_blocks_2']]); ?>
                                    <?php endif; ?>

                                </div>
                                <div class="block_baner_item_r" style="<?php echo esc_attr($bg_img_url); ?>"></div> 
                            </div> 

                        <?php endforeach; ?>

                    </div>

                <?php endif; ?>
                
            </div>
        </div>
    </div>

<?php endif; ?>