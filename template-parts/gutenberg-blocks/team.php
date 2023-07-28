<?php

/**
 * team Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'team-' . $block['id'];
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

$title = get_field('title_team');
$items = get_field('item_team');
$txt_btn = get_field('txt_btn_team');
$form = get_field('form_team');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/team.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">
            <div class="popular_block_item">

                <?php if ( $title ) : ?>
                    <div class="block_title">
                        <h3><?php echo $title; ?></h3> 
                    </div>
                <?php endif; ?>
    
                <div class="block_prod">

                    <?php if ( $items ) : ?>
                        
                        <div class="team owl-carousel owl-theme"> 
                        
                            <?php 
                            foreach ( $items as $key => $item ) : 
                                $img_url = wp_get_attachment_url( $item['img_id_item_team'], 'full' );
                            ?>

                                <div class="item">  
                                    <div class="team_vn">

                                        <?php if ( $img_url ) : ?>
                                            <img src="<?php echo esc_attr($img_url); ?>" alt="<?php echo esc_html($item['full_name_item_team']); ?>">
                                        <?php endif; ?>

                                        <?php if ( $item['full_name_item_team'] ) : ?>
                                            <div class="team_vn_name">
                                                <?php echo esc_html($item['full_name_item_team']); ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ( $item['position_item_team'] ) : ?>
                                            <div class="team_vn_desk">
                                                <?php echo esc_html($item['position_item_team']); ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>   

                            <?php endforeach; ?>

                        </div>

                    <?php endif; ?>
                    
                    <?php if ( $txt_btn ) : ?>
                        <div class="block_btn_center">
                            <button type="button" class="btn_transparent open_popup" data-popup-id="_<?php echo $id; ?>" onclick="return false">
                                <?php echo $txt_btn; ?>
                            </button>
                        </div>
                    <?php endif; ?> 
                    
                </div>
    
            </div>
        </div>
    </div>

    <?php if ( $form ) : ?>
        <?php get_template_part('template-parts/modals/request', 'call', ['id' => '_' . $id, 'form' => $form]); ?>
    <?php endif; ?>

<?php endif; ?>