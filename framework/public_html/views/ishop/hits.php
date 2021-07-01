<?php defined('ISHOP') or die('Access denied'); ?>
<div class="catalog-index">
    <h1><img src="<?=TEMPLATE?>imge/lider-sale.jpg" alt="Лидер продаж"></h1>

    <?php if($eyestoppers): ?>
        <?php foreach ($eyestoppers as $eyestopper): ?>
            <div class="product-index">
                <h2><a href="?view=product&goods_id=<?=$eyestopper['goods_id']?>"><?=$eyestopper['name']?></a></h2>
                <a href="?view=product&goods_id=<?=$eyestopper['goods_id']?>"><img src="<?=PRODUCTIMG?><?=$eyestopper['img']?>" alt=""/></a>
                <p> Цена : <span><?= $eyestopper['price'] ?>.</span></p>
                <a href="?view=addtocart&goods_id=<?=$eyestopper['goods_id']?>"><img class="addtocard-index" src="<?=TEMPLATE?>imge/addcard-index.jpg" alt="Добавить в карзину" /></a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Здесь товаров пока нет!</p>
    <?php endif; ?>

   <!-- <div class="product-index">
        <h2><a href="#">Sony Xperia S 32gb (черный)</a></h2>
        <a href="#"><img src="<?=TEMPLATE?>imge/phone-index.jpg" alt=""/></a>
        <p> Цена : <span>24 990.</span></p>
        <a href="#"><img class="addtocard-index" src="<?=TEMPLATE?>imge/addcard-index.jpg" alt="Добавить в карзину" /></a>
    </div> -->

</div>