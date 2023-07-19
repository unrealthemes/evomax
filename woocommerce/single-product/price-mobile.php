<?php 
global $product;

$turnkey_installation = get_post_meta( $product->get_id(), '_turnkey_installation', true );
?>

<div class="form_block visible_xs">
    <div class="price_row">
        
        <?php if ( $product->get_sale_price() ) : ?>
            <div class="price"><?php echo wc_price($product->get_sale_price()); ?></div>
            <div class="price_sale"><?php echo wc_price($product->get_regular_price()); ?></div>
        <?php else : ?>
            <div class="price"><?php echo wc_price($product->get_regular_price()); ?></div>
        <?php endif; ?>

    </div>
    
    <div class="price_row2">

        <?php if ( $turnkey_installation ) : ?>
            <div class="price_green">от <?php echo wc_price($turnkey_installation); ?></div>
        <?php endif; ?>

        <div class="price_text">
            <span>Монтаж под ключ</span>
            <div class="vopros"> 
                <div class="voproshover">
                    Стоимость монтажа зависит от типа грунта, ландшафта, удаленности септика от дома, уровня грунтовых вод и других факторов. Точную стоимость уточняйте у менеджера
                </div>
            </div>
        </div>
    </div>
    
    <a href="#" class="btn open_popup" data-popup-id="product_order" onclick="return false">
        заказать
    </a>
    
    <div class="dostavka_info block_icon">
        <img src="<?php echo THEME_URI; ?>/img/dostavka_info.svg" width="40px" alt="" />
        <div>
            Доставим и установим ориентировочно <span>5 июня</span>
        </div>
    </div> 
    
    <a href="#" class="found_cheaper open_popup" data-popup-id="found_cheaper" onclick="return false">
        Нашли дешевле?
    </a> 

</div>