<?php

/**
 * about Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'about-' . $block['id'];
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

$img_id = get_field('img_id_about');
$img_url = wp_get_attachment_url( $img_id, 'full' );
$title = get_field('title_about');
$full_name = get_field('full_name_about');
$position = get_field('position_about');
$txt_btn = get_field('txt_btn_about');
$form = get_field('form_about');
$txt = get_field('txt_about');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/about.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">   
            <div class="o_nas_block">
                <div class="o_nas_block_l">

                    <?php if ( $title ) : ?>
                        <h3>
                            <?php echo $title; ?>
                        </h3>
                    <?php endif; ?>

                    <div class="col_2_mobile"> 

                        <?php if ( $img_url ) : ?>
                            <div class="o_nas_block_l_img">
                                <img src="<?php echo nl2br($img_url); ?>" alt="Image">
                            </div>
                        <?php endif; ?>

                        <div>

                            <?php if ( $full_name ) : ?>
                                <div class="o_nas_block_l_name">
                                    <?php echo nl2br($full_name); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ( $position ) : ?>
                                <span>
                                    <?php echo $position; ?>
                                </span>
                            <?php endif; ?>

                            <?php if ( $txt_btn && $form ) : ?>
                                <button type="button" class="btn_transparent" data-popup-id="<?php echo $id; ?>" onclick="return false">
                                    <?php echo $txt_btn; ?>
                                </a>
                                <?php get_template_part('template-parts/modals/request', 'call', ['id' => $id, 'form' => $form]); ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                
                <?php if ( $txt ) : ?>
                    <div class="o_nas_block_r">
                        <?php echo $txt; ?>
                    </div>
                <?php endif; ?>

            </div>    
            
                
        </div>
    </div>

<?php endif; ?>