<?php

/**
 * blocks-6 Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blocks-6-' . $block['id'];
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

$title = get_field('m_title_blocks_6');
$blocks = get_field('blocks_6');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/blocks-6.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>  

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">  

            <?php if ( $title ) : ?>
                <h3><?php echo nl2br($title); ?></h3> 
            <?php endif; ?>

            <?php if ( $blocks ) : ?>
                <div class="vid">

                    <?php 
                    foreach ( $blocks as $block ) : 
                        $img_url = wp_get_attachment_url( $block['img_blocks_6'], 'full' );
                    ?>
                        <div class="vid_item">

                            <?php if ( $img_url ) : ?>
                                <div class="vid_item_img">
                                    <a href="<?php echo esc_url($block['url_blocks_6']); ?>"><img src="<?php echo esc_url($img_url); ?>" alt="" /></a>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ( $block['title_blocks_6'] ) : ?>
                                <div class="vid_item_img_name">
                                    <a href="<?php echo esc_url($block['url_blocks_6']); ?>">
                                        <?php echo nl2br($block['title_blocks_6']); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ( $block['list_blocks_6'] ) : ?>
                                <div class="vid_list">
                                    <ul>
                                        <?php foreach ( $block['list_blocks_6'] as $item ) : ?>

                                            <li>

                                                <?php if ( $item['icon_list_blocks_6'] == 2 ) : ?>
                                                    <span class="no"></span> 
                                                <?php else : ?>
                                                    <span class="yes"></span> 
                                                <?php endif; ?>

                                                <span><?php echo esc_html($item['txt_list_blocks_6']); ?>​</span>
                                            </li>
                                        
                                        <?php endforeach; ?>

                                    </ul>
                                </div>
                            <?php endif; ?>
                            
                        </div>
                    <?php endforeach; ?>
                    
                </div> 
            <?php endif; ?>

        </div>
    </div>

<?php endif; ?>