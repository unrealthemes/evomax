<?php

/**
 * banner-3 Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'banner-3-' . $block['id'];
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

$img_id = get_field('bg_img_b3');
$img_url = wp_get_attachment_url( $img_id, 'full' );
$full_name = get_field('full_name_b3');
$position = get_field('position_b3');
$title = get_field('title_b3');
$txt = get_field('txt_b3');
$blocks = get_field('blocks_b3');
$txt_btn = get_field('txt_btn_b3');
$form = get_field('form_b3');
$txt_phone = get_field('txt_phone_b3');
$phone = get_field('phone_b3');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/banner-3.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">   
            <div class="top_head top_head3">
                <div class="container">

                    <?php if ( $title ) : ?>
                        <h3><?php echo nl2br($title); ?></h3> 
                    <?php endif; ?>

                    <div class="max_wight"> 

                        <?php if ( $txt ) : ?>
                            <p><?php echo nl2br($txt); ?></p>
                        <?php endif; ?>

                        <?php if ( $blocks ) : ?>
                            <div class="top_head_tag">
                                <?php foreach ( $blocks as $block ) : ?>
                                    <a href="<?php echo esc_url($block['link_blocks_b3']); ?>">
                                        <?php echo esc_html($block['name_blocks_b3']); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <div class="btn_block">

                            <?php if ( $txt_btn && $form ) : ?>
                                <div class="top_header_btn">
                                    <button type="button" class="btn block_icon open_popup" data-popup-id="_<?php echo $id; ?>" onclick="return false">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 0.499773C4.493 0.499773 4.889 0.895777 4.889 1.38878C4.889 2.49578 5.067 3.56678 5.396 4.56178C5.493 4.86878 5.422 5.21978 5.178 5.46378L3.222 7.42978C4.502 9.94479 6.56 12.0028 9.08 13.2828L11.036 11.3228C11.28 11.0788 11.631 11.0078 11.938 11.1048C12.933 11.4348 14.004 11.6118 15.111 11.6118C15.604 11.6118 16 12.0078 16 12.5008V15.6118C16 16.1048 15.604 16.5008 15.111 16.5008C6.764 16.4998 0 9.73579 0 1.38878C0 0.895777 0.4 0.499773 0.889 0.499773H4ZM12.493 0.0927734L16.089 3.56578L8.734 7.58378L12.493 0.0927734Z" fill="white"/>
                                        </svg> 
                                        <span><?php echo esc_html($txt_btn); ?></span>
                                    </button>
                                </div> 
                            <?php endif; ?>

                            <div class="btn_text">

                                <?php if ( $txt_phone ) : ?>
                                    <div class="btn_text_title">
                                        <?php echo esc_html($txt_phone); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $phone ) : ?>
                                    <div class="btn_texttel">
                                        <a href="tel:<?php echo esc_attr($phone); ?>" class="block_icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_40_908)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.111 11.111C14.004 11.111 12.933 10.933 11.938 10.604C11.631 10.507 11.28 10.578 11.036 10.822L9.08 12.782C6.56 11.502 4.502 9.444 3.222 6.929L5.178 4.964C5.422 4.72 5.493 4.369 5.396 4.062C5.066 3.067 4.889 1.996 4.889 0.889C4.889 0.396 4.493 0 4 0H0.889C0.4 0 0 0.396 0 0.889C0 9.236 6.764 16 15.111 16C15.604 16 16 15.604 16 15.111V12C16 11.507 15.604 11.111 15.111 11.111Z" fill="url(#paint0_linear_40_908)"/>
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear_40_908" x1="-1.30426e-08" y1="16" x2="16.0864" y2="15.9843" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#74B427"/>
                                                        <stop offset="1" stop-color="#345D02"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_40_908">
                                                        <rect width="16" height="16" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg> 
                                            <span><?php echo esc_html($phone); ?></span>
                                        </a>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                    <?php if ( $img_url ) : ?>
                        <div class="top_head_img">
                            <img src="<?php echo esc_attr($img_url); ?>" alt="Phone image">
                        </div> 
                    <?php endif; ?>

                    <?php if ( $full_name || $position ) : ?>
                        <div class="top_head20_block">
                            <strong><?php echo esc_html($full_name); ?></strong>
                            <?php echo esc_html($position); ?>
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