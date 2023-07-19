<?php 
$characteristics = $args['characteristics'];

if ( ! $characteristics ) :
    return false;
endif;
?>

<div class="prod_atribut">
    <div class="object_desc"> 
        <ul class="object_ul">

            <?php foreach ( $characteristics as $characteristic ) : ?>

                <li class="object_li">
                    <div class="object_li_title">

                        <?php echo esc_html($characteristic['txt_characteristics_prstt']); ?>

                        <?php if ( $characteristic['tooltip_characteristics_prstt'] ) : ?>
                            <div class="vopros"> 
                                <div class="voproshover">
                                    <?php echo nl2br($characteristic['tooltip_characteristics_prstt']); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                    <span><?php echo esc_html($characteristic['val_characteristics_prstt']); ?></span>
                </li> 

            <?php endforeach; ?>

        </ul>
    </div>  
</div>