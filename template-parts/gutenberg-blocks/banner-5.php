<?php

/**
 * banner-5 Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'banner-5-' . $block['id'];
$className = 'top_head top_head4';

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

$img_id = get_field('bg_img_b5');
$img_url = wp_get_attachment_url( $img_id, 'full' );
$title = get_field('title_b5');
$txt = get_field('txt_b5');
$txt_btn = get_field('txt_btn_b5');
$form = get_field('form_b5');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/banner-5.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">
            
            <?php do_action( 'echo_kama_breadcrumbs' ); ?>
        
            <?php if ( $title ) : ?>
                <h1><?php echo nl2br($title); ?></h1> 
            <?php endif; ?>

            <?php if ( $txt ) : ?>
                <div class="style-list">
                    <p><?php echo $txt; ?></p>
                </div> 
            <?php endif; ?>

            <?php if ( $txt_btn && $form ) : ?>
                <div class="top_header_btn">
                    <button type="button" class="btn open_popup" data-popup-id="_<?php echo $id; ?>" onclick="return false">
                        <?php echo esc_html($txt_btn); ?>
                    </button>
                </div> 
            <?php endif; ?>

            <?php if ( $img_url ) : ?>
                <div class="top_head_img">
                    <img src="<?php echo esc_attr($img_url); ?>" alt="Image">
                </div> 
            <?php endif; ?>

        </div>
    </div>

    <?php if ( $form ) : ?>
        <?php get_template_part('template-parts/modals/request', 'call', ['id' => '_' . $id, 'form' => $form]); ?>
    <?php endif; ?>

<?php endif; ?>