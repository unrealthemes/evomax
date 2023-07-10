<?php

/**
 * banner-2 Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'banner-2-' . $block['id'];
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

$bg_img_id = get_field('bg_img_b2');
$bg_url = wp_get_attachment_url( $bg_img_id, 'full' );
$title = get_field('title_b2');
$subtitle = get_field('subtitle_b2');
$title_l = get_field('title_l_b2');
$list = get_field('l_b2');
$txt_btn = get_field('txt_btn_b2');
$form = get_field('form_b2');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/banner-2.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">   
            
            <div class="top_head top_head2">
                <div class="container">
                    <div class="max_wight">
                        
                        <?php if ( $title ) : ?>
                            <h3><?php echo nl2br($title); ?></h3> 
                        <?php endif; ?>

                        <?php if ( $subtitle ) : ?>
                            <p><?php echo nl2br($subtitle); ?></p>
                        <?php endif; ?>
                        
                        <?php if ( $bg_url ) : ?>
                            <div class="mobile_img visible_xs">
                                <img src="<?php echo esc_attr($bg_url); ?>" alt="Image">
                            </div> 
                        <?php endif; ?>
                        
                        <?php if ( $title_l ) : ?>
                            <strong><?php echo nl2br($title_l); ?></strong>
                        <?php endif; ?>

                        <?php if ( $list ) : ?>
                            <div class="top_head_li">
                                <?php echo $list; ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( $txt_btn && $form ) : ?>
                            <div class="top_header_btn">
                                <button type="button" class="btn" data-popup-id="<?php echo $id; ?>" onclick="return false">
                                    <?php echo esc_html($txt_btn); ?>
                                </button>
                            </div> 
                            <?php get_template_part('template-parts/modals/request', 'call', ['id' => $id, 'form' => $form]); ?>
                        <?php endif; ?>

                    </div>

                    <?php if ( $bg_url ) : ?>
                        <div class="top_head_img visible_ps">
                            <img src="<?php echo esc_attr($bg_url); ?>" alt="Image">
                        </div> 
                    <?php endif; ?>

                </div>
            </div>
                
        </div>
    </div>

<?php endif; ?>