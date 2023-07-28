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

$i = 1;
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
    
                <div class="block_steep3">

                    <!-- LAYOUTS -->

                    <?php if ( have_rows('blocks_layout') ) : ?>

                        <div class="block_steep3_l">

                            <?php while ( have_rows('blocks_layout') ) : the_row(); ?>

                                <?php
                                if ( get_row_layout() == 'list' ) : 
                                    $title_l = get_sub_field('title_l_steps');
                                    $list_l = get_sub_field('list_l_steps');
                                ?>

                                    <div class="<?php echo ( ($i>1) ? 'block_100' : '' ); ?>">

                                        <?php if ( $title_l ) : ?>
                                            <h3><?php echo esc_html($title_l); ?></h3>
                                        <?php endif; ?>

                                        <?php if ( $list_l ) : ?>
                                            <div class="ul">
                                                <?php echo $list_l; ?>
                                            </div> 
                                        <?php endif; ?>

                                    </div> 

                                <?php 
                                elseif ( get_row_layout() == 'table' ) : 
                                    $title_t = get_sub_field('title_t_steps');
                                    $txt_t = get_sub_field('txt_t_steps');
                                    $table_t = get_sub_field('table_t_steps');
                                    $txt_btn_t = get_sub_field('txt_btn_t_steps');
                                    $form_t = get_sub_field('form_t_steps');
                                ?>

                                    <?php if ( $table_t ) : ?>
                                        <div class="table2 <?php echo ( ($i>1) ? 'block_100' : '' ); ?>">
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
                                    <?php endif; ?>

                                    <?php if ( $form_t ) : ?>
                                        <?php get_template_part('template-parts/modals/request-call', null, ['id' => '_t_' . $id, 'form' => $form_t]); ?>
                                    <?php endif; ?>

                                <?php 
                                elseif ( get_row_layout() == 'steps' ) : 
                                    $title = get_sub_field('title_steps');
                                    $steps = get_sub_field('_steps');
                                    ?>

                                    <div class="<?php echo ( ($i>1) ? 'block_100' : '' ); ?>">

                                        <?php if ( $title ) : ?>
                                            <h3><?php echo esc_html($title); ?></h3>
                                        <?php endif; ?>

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

                                    </div> 

                                <?php 
                                elseif ( get_row_layout() == 'question_answer' ) : 
                                    $title_faqs = get_sub_field('title_faqs_v_steps');
                                    $faqs = get_sub_field('faqs_v_steps');
                                ?>

                                    <div class="<?php echo ( ($i>1) ? 'block_100' : '' ); ?>">

                                        <?php if ( $title_faqs ) : ?>
                                            <h3><?php echo esc_html($title_faqs); ?></h3>
                                        <?php endif; ?>

                                        <?php if ($faqs) : ?>
                                            <div class="faq_vn">  
                                                <div id="accordion-js">

                                                    <?php foreach ($faqs as $faq) : ?>

                                                        <div class="item">
                                                            <div class="heading">
                                                                <?php echo nl2br($faq['question_faqs_v_steps']); ?>
                                                            </div>
                                                            <div class="content">
                                                                <?php echo nl2br($faq['answer_faqs_v_steps']); ?>
                                                            </div>
                                                        </div>

                                                    <?php endforeach; ?>

                                                </div> 
                                            </div> 
                                        <?php endif; ?>

                                    </div> 

                                <?php endif; ?>

                            <?php 
                                $i++;
                            endwhile; 
                            ?>

                        </div>    

                    <?php endif; ?>
                    
                    <!-- WIDGET -->
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
    
    <?php if ( $form_v ) : ?>
        <?php get_template_part('template-parts/modals/request-call', null, ['id' => '_v_' . $id, 'form' => $form_v]); ?>
    <?php endif; ?>

<?php endif; ?>