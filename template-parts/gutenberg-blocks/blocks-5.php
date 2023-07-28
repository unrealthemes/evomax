<?php

/**
 * blocks-5 Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blocks-5-' . $block['id'];
$className = 'container di_content';

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

$title = get_field('m_title_blocks_5');
$blocks = get_field('blocks_5');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/blocks-5.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>  

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="row">
            <div class="simple_page">
                <div class="sposob">

                    <?php if ( $title ) : ?>
                        <h3><?php echo nl2br($title); ?></h3>
                    <?php endif; ?>

                    <?php if ( $blocks ) : ?>

                        <div class="row_sposob">
                        
                            <?php 
                            foreach ( $blocks as $block ) : 
                                $img_url = wp_get_attachment_url( $block['img_blocks_5'], 'full' );
                            ?>

                                <div class="row_sposob_col icon">

                                    <?php if ( $img_url ) : ?>
                                        <div class="svg">
                                            <img src="<?php echo esc_url($img_url); ?>" alt="Image">
                                        </div>
                                    <?php endif; ?>

                                    <div class="sposob_desk">

                                        <?php if ( $block['title_blocks_5'] ) : ?>
                                            <strong>
                                                <?php echo nl2br($block['title_blocks_5']); ?>
                                            </strong>
                                        <?php endif; ?>

                                        <?php if ( $block['txt_blocks_5'] ) : ?>
                                            <?php echo nl2br($block['txt_blocks_5']); ?>
                                        <?php endif; ?>

                                    </div>
                                    
                                </div> 
                            
                            <?php endforeach; ?>
                            
                        </div>

                    <?php endif; ?>
                
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>