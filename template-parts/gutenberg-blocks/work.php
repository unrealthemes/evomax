<?php

/**
 * work Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'work-' . $review['id'];
$className = 'container di_content';

if ( !empty($review['anchor']) ) {
    $id = $review['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
if ( !empty($review['className']) ) {
    $className .= ' ' . $review['className'];
}

if ( !empty($review['align']) ) {
    $className .= ' align' . $review['align'];
}

// $bg_url = wp_get_attachment_url( $bg_img_id, 'full' );
$reviews = get_field('blocks_tb');
$gallery = get_field('gallery_tb');
$videos = get_field('video_tb');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/work.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="row">
        
            <!-- <div class="breadcrumbs">
                <ul>
                <li><a href="#">Главная</a></li>
                <li>Наши работы и отзывы</li>
                </ul>
            </div>
            
            <h1>Наши работы и отзывы</h1>     -->
                
            
            <div class="tabs">
                <ul> 

                    <?php if ( $reviews ) : ?>
                        <li>Отзывы</li>
                    <?php endif; ?>

                    <?php if ( $gallery ) : ?>
                        <li>Довольные клиенты</li>
                    <?php endif; ?>

                    <?php if ( $videos ) : ?>
                        <li>Видео-отзывы</li>
                    <?php endif; ?>

                </ul>
                <div class="tabs_content">
                    
                    <div>
                        
                        <?php if ( $reviews ) : ?>
                            <div class="review_list2">

                                <?php foreach ( $reviews as $review ) : ?>

                                    <div class="item"> 
                                        <div class="di_popelar_item">

                                            <?php if ( $review['gallery_blocks_tb'] ) : ?>
                                                <div class="nested-carousel owl-carousel">

                                                    <?php 
                                                    foreach ( $review['gallery_blocks_tb'] as $img_id ) : 
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

                                                <?php if ( $review['full_name_blocks_tb'] ) : ?>
                                                    <div class="di_popelar_name">
                                                        <?php echo esc_html($review['full_name_blocks_tb']); ?>
                                                    </div>
                                                <?php endif; ?>

                                                <div class="di_popelar_row">

                                                    <?php if ( $review['price_blocks_tb'] ) : ?>
                                                        <div class="di_popelar_icon">
                                                            <img src="<?php echo THEME_URI; ?>/img/money.svg" alt="Money">
                                                            <div class="price">
                                                                <span>Стоимость</span>
                                                                <strong><?php echo esc_html($review['price_blocks_tb']); ?></strong>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    
                                                    <?php if ( $review['date_blocks_tb'] ) : ?>
                                                        <div class="di_popelar_icon">
                                                            <img src="<?php echo THEME_URI; ?>/img/clock.svg" alt="Clock">
                                                            <div class="price">
                                                                <span>Сроки</span>
                                                                <strong><?php echo esc_html($review['date_blocks_tb']); ?></strong>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>

                                                </div>
                                                
                                                <?php if ( $review['txt_blocks_tb'] ) : ?>
                                                    <div class="di_popelar_item_content_p">
                                                        <p><?php echo nl2br($review['txt_blocks_tb']); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                                
                                                <?php if ( $review['txt_link_blocks_tb'] && $review['link_blocks_tb'] ) : ?>
                                                    <a href="<?php echo esc_url($review['txt_link_blocks_tb']); ?>" class="btn_transparent">
                                                        <?php echo esc_html($review['txt_link_blocks_tb']); ?>
                                                    </a>
                                                <?php endif; ?>

                                            </div>
                                        </div> 
                                    </div>
                            
                                <?php endforeach; ?>

                            </div> 
                        <?php endif; ?>
                            
                    </div> 
                    
                    <div>
                        
                        <?php if ( $gallery ) : ?>
                            <div class="item_galery2">

                                <?php 
                                foreach ( $gallery as $img__id ) : 
                                    if (!$img__id) continue;
                                    $img__url = wp_get_attachment_url( $img__id, 'full' );
                                ?>

                                    <img src="<?php echo esc_attr($img__url); ?>" alt="Gallery">

                                <?php endforeach; ?>

                            </div>
                        <?php endif; ?>
                        
                    </div>
                    
                    <div>
                        
                        <?php if ( $videos ) : ?>
                            <div class="video_list">

                                <?php 
                                foreach ( $videos as $video ) : 
                                    if (!$video['item_video_tb']) continue;
                                    
                                ?>

                                    <div class="video_list-item">
                                        <?php echo $video['item_video_tb']; ?>
                                    </div>

                                <?php endforeach; ?>

                            </div>
                        <?php endif; ?>

                    </div> 
                    
                </div>       
            </div>  
        </div>
    </div>

<?php endif; ?>