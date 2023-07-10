<?php

/**
 * blocks-1 Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blocks-1-' . $block['id'];
$className = 'hime_item_block';

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

$blocks = get_field('blocks_1');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/blocks-1.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <?php if ( $blocks ) : ?>

        <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
            <div class="container">
                <div class="hime_item">
                
                    <?php 
                    foreach ( $blocks as $block ) : 
                        $img_url = wp_get_attachment_url( $block['img_blocks_1'], 'full' );
                    ?>
                        
                        <div class="hime_item_item">

                            <?php if ($img_url) : ?>
                                <div class="svg">
                                    <?php 
                                    if ( get_post_mime_type($block['img_blocks_1']) == 'image/svg+xml' ) :
                                        echo file_get_contents( $img_url );
                                    else :
                                        echo '<img src="' . $img_url . '" alt="Image">';
                                    endif;
									?>
                                </div>
                            <?php endif; ?>
                            
                            <div class="hime_item_content">

                                <?php if ( $block['title_blocks_1'] ) : ?>
                                    <div class="hime_item_name"><?php echo esc_html($block['title_blocks_1']); ?></div>
                                <?php endif; ?>

                                <?php if ( $block['txt_blocks_1'] ) : ?>
                                    <p><?php echo nl2br($block['txt_blocks_1']); ?></p>
                                <?php endif; ?>

                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>

    <?php endif; ?>

<?php endif; ?>