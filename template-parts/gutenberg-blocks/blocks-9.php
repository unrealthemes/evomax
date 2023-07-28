<?php

/**
 * blocks-9 Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blocks-9-' . $block['id'];
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

$title = get_field('title_blocks_9');
$blocks = get_field('blocks_9');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/blocks-9.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>  

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">
            <div class="block_content">

                <?php if ( $title ) : ?>
                    <h3><?php echo nl2br($title); ?></h3>
                <?php endif; ?>

                <?php if ( $blocks ) : ?>
                    <div class="bur2">

                        <?php 
                        foreach ( $blocks as $key => $block ) : 
                            $img_url = wp_get_attachment_url( $block['img_blocks_9'], 'full' );
                        ?>

                            <div class="bur2_l">

                                <?php if ( $block['title_blocks_9'] ) : ?>
                                    <h3>
                                        <?php echo nl2br($block['title_blocks_9']); ?>
                                    </h3>
                                <?php endif; ?>
                                
                                <?php if ( $img_url ) : ?>
                                    <div class="bur2_l_img">
                                        <img src="<?php echo esc_url($img_url); ?>" alt="Image">
                                    </div>
                                <?php endif; ?>

                                <?php if ( $block['txt_blocks_9'] ) : ?>
                                    <p>
                                        <?php echo nl2br($block['txt_blocks_9']); ?>
                                    </p>
                                <?php endif; ?>
                                
                                <div class="bur2_atribut">

                                    <?php if ( $block['depth_blocks_9'] ) : ?>
                                        <div>
                                            <span>Глубина: </span>
                                            <strong><?php echo esc_html($block['depth_blocks_9']); ?></strong>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ( $block['debit_blocks_9'] ) : ?>
                                        <div>
                                            <span>Дебит: </span>
                                            <strong><?php echo esc_html($block['debit_blocks_9']); ?></strong>
                                        </div>
                                    <?php endif; ?>

                                </div>

                                <?php if ( $block['advantages_blocks_9'] ) : ?>
                                    <div class="vid_list">
                                        <strong>Преимущества:</strong>
                                        <ul>
                                            <?php foreach ( $block['advantages_blocks_9'] as $advantage ) : ?>
                                                <li>
                                                    <span class="yes"></span> 
                                                    <span><?php echo esc_html($advantage['txt_advantages_blocks_9']); ?></span>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ( $block['flaws_blocks_9'] ) : ?>
                                    <div class="vid_list">
                                        <strong>Недостатки:</strong>
                                        <ul> 
                                            <?php foreach ( $block['flaws_blocks_9'] as $flaw ) : ?>
                                                <li>
                                                    <span class="no"></span> 
                                                    <span><?php echo esc_html($flaw['txt_flaws_blocks_9']); ?></span>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ( $block['price_blocks_9'] ) : ?>
                                    <div class="bur2_l_price">
                                        <?php echo esc_html($flaw['price_blocks_9']); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $block['txt_btn_blocks_9'] && $block['form_blocks_9'] ) : ?>
                                    <button type="button" class="btn open_popup" data-popup-id="<?php echo $key . '_' . $id; ?>" onclick="return false">
                                        <?php echo esc_html($block['txt_btn_blocks_9']); ?>
                                    </button>
                                    <?php get_template_part('template-parts/modals/request', 'call', ['id' => $key . '_' . $id, 'form' => $block['form_blocks_9']]); ?>
                                <?php endif; ?>

                            </div>

                        <?php endforeach; ?>
                        
                    </div> 
                <?php endif; ?>

            </div>
        </div>
    </div>  

<?php endif; ?>