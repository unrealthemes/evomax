<?php

/**
 * reviews Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'reviews-' . $block['id'];
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

$title = get_field('title_rw');
$blocks = get_field('blocks_rw');
$main_txt_link = get_field('main_txt_link_rw');
$main_link = get_field('main_link_rw');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/reviews.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">  

            <?php if ( $title ) : ?>
                <h3><?php echo nl2br($title); ?></h3>
            <?php endif; ?>
                
            <?php if ( $blocks ) : ?>
                <div class="block_slider_reviews owl-carousel">

                    <?php foreach ( $blocks as $block ) : ?>
                        <div class="item"> 
                            <div class="di_popelar_item">

                                <?php if ( $block['gallery_blocks_rw'] ) : ?>
                                    <div class="nested-carousel owl-carousel">

                                        <?php 
                                        foreach ( $block['gallery_blocks_rw'] as $img_id ) : 
                                            if (!$img_id) continue;
                                            $img_url = wp_get_attachment_url( $img_id, 'full' );
                                        ?>
                                            <div class="item">
                                                <img src="<?php echo esc_attr($img_url); ?>" alt="Slider">
                                            </div> 
                                        <?php endforeach; ?>
                                        
                                    </div>
                                <?php endif; ?>
                                    
                                <div class="di_popelar_item_content">

                                    <?php if ( $block['full_name_blocks_rw'] ) : ?>
                                        <div class="di_popelar_name">
                                            <?php echo esc_html($block['full_name_blocks_rw']); ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="di_popelar_row">

                                        <?php if ( $block['price_blocks_rw'] ) : ?>
                                            <div class="di_popelar_icon">
                                                <img src="<?php echo THEME_URI; ?>/img/money.svg" alt="Money">
                                                <div class="price">
                                                    <span>Стоимость</span>
                                                    <strong><?php echo esc_html($block['price_blocks_rw']); ?></strong>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <?php if ( $block['date_blocks_rw'] ) : ?>
                                            <div class="di_popelar_icon">
                                                <img src="<?php echo THEME_URI; ?>/img/clock.svg" alt="Clock">
                                                <div class="price">
                                                    <span>Сроки</span>
                                                    <strong><?php echo esc_html($block['date_blocks_rw']); ?></strong>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                    
                                    <?php if ( $block['txt_blocks_rw'] ) : ?>
                                        <div class="di_popelar_item_content_p">
                                            <p><?php echo nl2br($block['txt_blocks_rw']); ?></p>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php if ( $block['txt_link_blocks_rw'] && $block['link_blocks_rw'] ) : ?>
                                        <a href="<?php echo esc_url($block['txt_link_blocks_rw']); ?>" class="btn_transparent">
                                            <?php echo esc_html($block['txt_link_blocks_rw']); ?>
                                        </a>
                                    <?php endif; ?>

                                </div>
                            </div> 
                        </div>
                    <?php endforeach; ?>

                </div> 
            <?php endif; ?>
            
            <?php if ( $main_txt_link && $main_link ) : ?>
                <div class="block_btn_center">
                    <a href="<?php echo esc_url($main_link); ?>" class="btn_transparent">
                        <?php echo esc_html($main_txt_link); ?>
                    </a>
                </div>
            <?php endif; ?>
            
        </div>
    </div>

<?php endif; ?>