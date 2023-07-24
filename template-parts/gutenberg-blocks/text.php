<?php

/**
 * text Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'text-' . $block['id'];
$className = 'container text-wrapper';

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

$text = get_field('text_p');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/text.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <?php if ( $text ) : ?>
        <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
            <div class="page_text">
                <?php echo $text; ?>
            </div>
        </div>
    <?php endif; ?>

<?php endif; ?>