<?php

/**
 * col2 Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'col2-' . $block['id'];
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

$title_1 = get_field('title_1_col2');
$desc_1 = get_field('desc_1_col2');
$table_1 = get_field('table_1_col2');

$title_2 = get_field('title_2_col2');
$desc_2 = get_field('desc_2_col2');
$blocks_2 = get_field('blocks_2_col2');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/col2.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="row">
            <div class="simple_page">
                <div class="col_row dostavka">

                    <div class="col_2 dostavka_l"> 
                        <div class="col_2_vn">

                            <?php if ( $title_1 ) : ?>
                                <h3><?php echo esc_html($title_1); ?></h3>
                            <?php endif; ?>

                            <?php if ( $desc_1 ) : ?>
                                <p><?php echo nl2br($desc_1); ?></p>
                            <?php endif; ?>

                        </div>

                        <?php if ( $table_1 ) : ?>
                            <div class="table">
                                <?php echo $table_1; ?>
                            </div>
                        <?php endif; ?>

                    </div>

                    <div class="col_2 dostavka_r">
                        <div class="col_2_vn">
                            
                            <?php if ( $title_2 ) : ?>
                                <h3><?php echo esc_html($title_2); ?></h3>
                            <?php endif; ?>

                            <?php if ( $desc_2 ) : ?>
                                <p><?php echo nl2br($desc_2); ?></p>
                            <?php endif; ?>

                            <?php if ( $blocks_2 ) : ?>
                                <div class="col_2_row">

                                    <?php foreach ( $blocks_2 as $block_2 ) : ?>
                                        <div class="col_2">

                                            <?php if ( $block_2['title_blocks_2_col2'] ) : ?>
                                                <div class="dostavka_title">
                                                    <?php echo $block_2['title_blocks_2_col2']; ?>
                                                </div>
                                            <?php endif; ?>

                                            <?php echo $block_2['desc_blocks_2_col2']; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            <?php endif; ?>

                        </div> 
                    </div>

                </div> 
            </div> 
        </div> 
    </div> 

<?php endif; ?>