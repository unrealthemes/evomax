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

?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/table.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">    
            <div class="di_table">
                <div class="title_table">

                    <?php if ( $title ) : ?>
                        <h3><?php echo esc_html($title); ?></h3>
                    <?php endif; ?>

                    <?php echo nl2br($desc); ?>
                </div>
                
                <?php echo $table; ?>

            </div>
                
        </div>
    </div> 

<?php endif; ?>