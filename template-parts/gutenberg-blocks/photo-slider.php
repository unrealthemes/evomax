<?php

/**
 * photo-slider Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'photo-slider-' . $block['id'];
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

$title = get_field('title_phs');
$txt = get_field('txt_phs');
$gallery = get_field('gallery_phs');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/photo-slider.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">
            <div class="popular_block_item">
                <div class="block_title block_title_too">

                    <?php if ($title) : ?>
                        <h3><?php echo nl2br($title); ?></h3>
                    <?php endif; ?>

                    <?php if ($txt) : ?>
                        <p><?php echo nl2br($txt); ?></p>
                    <?php endif; ?>

                </div>

                <?php if ($gallery) : ?>
                    <div class="block_prod">
                        <div class="photo_slider owl-carousel owl-theme">
                            
                            <?php 
                            foreach  ($gallery as $img_id) : 
                                $img_url = wp_get_attachment_url( $img_id, 'full' );
                            ?>

                                <?php if ($img_url) : ?>
                                    <div class="item photo_slider_item"> 
                                        <img src="<?php echo esc_attr($img_url); ?>" alt="Gallery">
                                    </div>
                                <?php endif; ?>

                            <?php endforeach; ?>
                       
                        </div>  
                    </div> 
                <?php endif; ?>

            </div>
        </div>
    </div>

<?php endif; ?>