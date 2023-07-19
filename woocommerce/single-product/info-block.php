<?php 
$text = $args['info'];
$form = $args['form'];
$contact_form = WPCF7_ContactForm::get_instance( $form->ID );
?>

<div class="block_info_text">
    <?php echo $text; ?>  

    <?php if ( $args['txt_btn'] && $form ) : ?>

        <button type="button" class="btn_transparent open_popup" data-popup-id="info_block" onclick="return false">
            <?php echo esc_html($args['txt_btn']); ?>
        </button>

        <?php 
        get_template_part(
            'template-parts/modals/request', 
            'call', 
            [
                'id' => 'info_block', 
                'form' => $contact_form
            ]
        ); 
        ?>

    <?php endif; ?>

</div>