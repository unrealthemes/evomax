<?php

/**
 * banner Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'banner-' . $block['id'];
$className = '';

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

$bg_img_id = get_field('bg_img_b');
$bg_url = wp_get_attachment_url( $bg_img_id, 'full' );
$title = get_field('title_b');
$desc = get_field('desc_b');
$txt_btn = get_field('txt_btn_b');
$form = get_field('form_b');
$title_b = get_field('title_b_b');
$brands_b = get_field('brands_b_b');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/banner.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="top_head">
            <div class="container">

                <?php if ( $title ) : ?>
                    <h1><?php echo nl2br($title); ?></h1> 
                <?php endif; ?>

                <?php if ( $desc ) : ?>
                    <div class="top_head_li">
                        <?php echo $desc; ?>
                    </div>
                <?php endif; ?>

                <?php if ( $txt_btn && $form ) : ?>
                    <div class="top_header_btn">
                        <button type="button" class="btn open_popup" data-popup-id="<?php echo $id; ?>" onclick="return false">
                            <?php echo esc_html($txt_btn); ?>
                        </button>
                    </div> 
                    <?php get_template_part('template-parts/modals/request-call', null, ['id' => $id, 'form' => $form]); ?>
                <?php endif; ?>

                <?php if ( $bg_url ) : ?>
                    <div class="top_head_img">
                        <img src="<?php echo esc_attr($bg_url); ?>" alt="Image">
                    </div>
                <?php endif; ?>
                
            </div>
        </div>
        <div class="block_slider">
            <div class="container">

                <?php if ( $title_b ) : ?>
                    <h5><?php echo esc_html($title_b); ?></h5> 
                <?php endif; ?>

                <?php if ( $brands_b ) : ?>
                    <div class="block_slider_tag owl-carousel owl-theme">

                        <?php foreach ( $brands_b as $brand ) : ?>
                            <div class="item">
                                <a href="<?php echo esc_url( get_term_link($brand->slug, $brand->taxonomy) ); ?>">
                                    <?php echo $brand->name; ?> 
                                    <span>(<?php echo $brand->count; ?>)</span>
                                </a>
                            </div> 
                        <?php endforeach; ?>

                    </div> 
                <?php endif; ?>

            </div>
        </div>
    </div>

<?php endif; ?>