<?php

/**
 * steps Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'steps-' . $block['id'];
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

$title = get_field('title_steps');
$steps = get_field('_steps');

$title_t = get_field('title_t_steps');
$txt_t = get_field('txt_t_steps');
$table_t = get_field('table_t_steps');
$txt_btn_t = get_field('txt_btn_t_steps');
$form_t = get_field('form_t_steps');

$title_l = get_field('title_l_steps');
$list_l = get_field('list_l_steps');

$icon_id_v = get_field('icon_v_steps');
$icon_url = wp_get_attachment_url( $icon_id_v, 'full' );
$title_v = get_field('title_v_steps');
$txt_v = get_field('txt_v_steps');
$txt_btn_v = get_field('txt_btn_v_steps');
$form_v = get_field('form_v_steps');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/steps.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">
            <div class="block_content">

                <?php if ( $title ) : ?>
                    <h3><?php echo esc_html($title); ?></h3>
                <?php endif; ?>
    
                <div class="block_steep3">
                    <div class="block_steep3_l">

                        <?php if ( $steps ) : ?>
                            <ol>

                                <?php foreach ( $steps as $step ) : ?>
                                    <li>
                                        <div>

                                            <?php if ( $step['title_steps'] ) : ?>
                                                <strong><?php echo esc_html($step['title_steps']); ?></strong> 
                                            <?php endif; ?>

                                            <?php echo nl2br($step['txt_steps']); ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                                
                            </ol>
                        <?php endif; ?>
                        
                        <div class="table2 block_100">
                            <div class="title_table">
                                
                                <?php if ( $title_t ) : ?>
                                    <h3><?php echo esc_html($title_t); ?></h3>
                                <?php endif; ?>

                                <?php echo nl2br($txt_t); ?>
                            </div>
                            
                            <?php echo $table_t; ?>

                            <?php if ( $txt_btn_t ) : ?>
                                <button type="button" class="btn open_popup" data-popup-id="_t_<?php echo $id; ?>" onclick="return false">
                                    <?php echo esc_html($txt_btn_t); ?>
                                </button>
                            <?php endif; ?>

                        </div> 
                        <div class="block_100">

                            <?php if ( $title_l ) : ?>
                                <h3><?php echo esc_html($title_l); ?></h3>
                            <?php endif; ?>

                            <?php if ( $list_l ) : ?>
                                <div class="ul">
                                    <?php echo $list_l; ?>
                                </div> 
                            <?php endif; ?>

                        </div> 
                    </div>       
                    <div class="block_qestions white">
                        <div class="block_qestions_vn fon_gradient">    

                            <?php 
                            if ( get_post_mime_type($icon_id_v) == 'image/svg+xml' ) :
                                echo file_get_contents( $icon_url );
                            else :
                                echo '<img src="' . $icon_url . '" alt="Icon">';
                            endif;
                            ?>

                            <strong><?php echo esc_html($title_v); ?></strong>

                            <p><?php echo nl2br($txt_v); ?></p>

                            <?php if ( $txt_btn_v ) : ?>
                                <button type="button" class="btn_white open_popup" data-popup-id="_v_<?php echo $id; ?>" onclick="return false">
                                    <?php echo esc_html($txt_btn_v); ?>
                                </button>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <?php if ( $form_t ) : ?>
        <?php get_template_part('template-parts/modals/request-call', null, ['id' => '_t_' . $id, 'form' => $form_t]); ?>
    <?php endif; ?>
   
    <?php if ( $form_v ) : ?>
        <?php get_template_part('template-parts/modals/request-call', null, ['id' => '_v_' . $id, 'form' => $form_v]); ?>
    <?php endif; ?>

<?php endif; ?>