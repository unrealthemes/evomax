<?php

/**
 * info Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'info-' . $block['id'];
$className = 'container';

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

$txt_l = get_field('txt_l_infobl');
$txt_r = get_field('txt_r_infobl');
$txt_btn = get_field('txt_btn_infobl');
$form = get_field('form_infobl');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/info.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>  

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="block_content">
            <div class="bur">


                <div class="bur_l">
                    <?php echo $txt_l; ?>

                    <?php if ( $txt_btn && $form ) : ?>
                        <button type="button" class="btn open_popup" data-popup-id="<?php echo '_' . $id; ?>" onclick="return false">
                            <?php echo esc_html($txt_btn); ?>
                        </button>
                        <?php get_template_part('template-parts/modals/request', 'call', ['id' => '_' . $id, 'form' => $form]); ?>
                    <?php endif; ?>

                </div>

                <div class="bur_r">
                    <?php echo $txt_r; ?>
                </div>

            </div> 
        </div>
    </div>

<?php endif; ?>