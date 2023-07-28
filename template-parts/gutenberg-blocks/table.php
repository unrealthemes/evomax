<?php

/**
 * table Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'table-' . $block['id'];
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

$title = get_field('title_table');
$desc = get_field('desc_table');
$table = get_field('table_table');
$info = get_field('info_table');
$txt_btn = get_field('txt_btn_table');
$form = get_field('form_table');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/table.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">
            <div class="block_content"> 
                <div class="table3 block_80"> 

                    <?php if ( $title || $desc ) : ?>
                        <div class="di_table">
                            <div class="title_table">

                                <?php if ( $title ) : ?>
                                    <h3><?php echo esc_html($title); ?></h3>
                                <?php endif; ?>

                                <?php echo nl2br($desc); ?>
                            </div>

                        </div>
                    <?php endif; ?>

                    <?php echo $table; ?>

                    <?php if ( $info ) : ?>
                        <div class="info">
                            <?php echo nl2br($info); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( $txt_btn && $form ) : ?>
                        <br>
                        <button type="button" class="btn open_popup" data-popup-id="_<?php echo $id; ?>" onclick="return false">
                            <?php echo esc_html($txt_btn); ?>
                        </button>
                        <?php get_template_part('template-parts/modals/request', 'call', ['id' => '_' . $id, 'form' => $form]); ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

<?php endif; ?>