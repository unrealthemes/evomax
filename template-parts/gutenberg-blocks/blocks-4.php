<?php

/**
 * blocks-4 Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blocks-4-' . $block['id'];
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

$title = get_field('m_title_blocks_4');
$blocks = get_field('blocks_4');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/blocks-4.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>  

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">
            <div class="block_content">

                <?php if ( $title ) : ?>
                    <h3><?php echo nl2br($title); ?></h3>
                <?php endif; ?>

                <?php if ( $blocks ) : ?>

                    <div class="block_steep2">
                    
                        <?php 
                        foreach ( $blocks as $block ) : 
                            $img_url = wp_get_attachment_url( $block['img_blocks_4'], 'full' );
                        ?>

                            <div class="block_steep2_item">

                                <?php if ( $img_url ) : ?>
                                    <div class="block_steep2_svg">
                                        <img src="<?php echo esc_url($img_url); ?>" alt="Image">
                                    </div>
                                <?php endif; ?>

                                <div class="block_steep2_title">

                                    <?php if ( $block['title_blocks_4'] ) : ?>
                                        <span>
                                            <?php echo nl2br($block['title_blocks_4']); ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if ( $block['txt_blocks_4'] ) : ?>
                                        <p>
                                            <?php echo nl2br($block['txt_blocks_4']); ?>
                                        </p>
                                    <?php endif; ?>

                                </div>
                                
                            </div> 
                        
                        <?php endforeach; ?>
                        
                    </div>

                <?php endif; ?>
                
            </div>
        </div>
    </div>

<?php endif; ?>