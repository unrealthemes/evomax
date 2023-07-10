<?php

/**
 * blocks-3 Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blocks-3-' . $block['id'];
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

$title = get_field('m_title_blocks_3');
$blocks = get_field('blocks_3');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/blocks-3.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>  

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">
            <div class="block_content">
                
                <?php if ( $title ) : ?>
                    <h3><?php echo nl2br($title); ?></h3>
                <?php endif; ?>

                <?php if ( $blocks ) : ?>

                    <div class="block_steep">
                    
                        <?php 
                        foreach ( $blocks as $key => $block ) : 
                            $img_url = wp_get_attachment_url( $block['img_blocks_3'], 'full' );
                        ?>
                            <div class="block_steep_item">

                                <?php if ($img_url) : ?>
                                    <div class="block_steep_svg">
                                        <img src="<?php echo esc_attr($img_url); ?>" alt="Image">
                                    </div>
                                <?php endif; ?>

                                <?php if ( $block['title_blocks_3'] ) : ?>
                                    <div class="block_steep_title">
                                        <?php echo nl2br($block['title_blocks_3']); ?>
                                    </div>
                                <?php endif; ?>

                                <span><?php echo $key + 1; ?></span>
                            </div> 

                        <?php endforeach; ?>
                            
                    </div>
                
                <?php endif; ?>

            </div>
        </div>
    </div>

<?php endif; ?>