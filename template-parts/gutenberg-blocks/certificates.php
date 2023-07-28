<?php

/**
 * certificates Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'certificates-' . $block['id'];
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

$title = get_field('title_certificates');
$img_ids = get_field('gallery_certificates');
$txt_btn = get_field('txt_btn_certificates');
$form = get_field('form_certificates');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/certificates.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">
            <div class="popular_block_item">

                <?php if ( $title ) : ?>
                    <div class="block_title">
                        <h3><?php echo $title; ?></h3> 
                    </div>
                <?php endif; ?>
    
                <div class="block_prod">

                    <?php if ( $img_ids ) : ?>
                        <div class="certificate owl-carousel owl-theme"> 
                           
                            <?php 
                            foreach ( $img_ids as $img_id ) : 
                                $img_url = wp_get_attachment_url( $img_id, 'full' );
                                if (!$img_url) continue;
                            ?>
                                <div class="item"> 
                                    <img src="<?php echo esc_attr($img_url); ?>" alt="Certificate">
                                </div>   
                            <?php endforeach; ?>

                        </div>
                    <?php endif; ?>
                    
                    <?php if ( $txt_btn && $form ) : ?>
                        <div class="block_btn_center">
                            <button type="button" class="btn_transparent open_popup" data-popup-id="<?php echo 'abt_' . $id; ?>" onclick="return false">
                                <?php echo $txt_btn; ?>
                            </button>
                        </div>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>

    <?php if ( $form ) : ?>
        <?php get_template_part('template-parts/modals/request', 'call', ['id' => 'abt_' . $id, 'form' => $form]); ?>
    <?php endif; ?>

<?php endif; ?>