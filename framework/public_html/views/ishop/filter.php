<?php defined('ISHOP') or die('Access denied'); ?>
<div class="catalog-index">
    <h1>Результаты подбора по параметрам</h1>
    <?php if($products['notfound']): // если ничего не найдено ?>
        <?php echo $products['notfound'] ?>
    <?php else: // если есть результаты поиска ?>
        <!-- Табличный вид продуктов -->
        <?php foreach($products as $product): ?>
            <div class="product-table">
                <h2><a href="?view=product&amp;goods_id=<?=$product['goods_id']?>"><?=$product['name']?></a></h2>
                <div class="product-table-img">
                    <a href="?view=product&amp;goods_id=<?=$product['goods_id']?>"><img src="<?=PRODUCTIMG?><?=$product['img']?>" alt="" width="64" /></a>
                    <div> <!-- Иконки -->
                        <?php if($product['hits']) echo '<img src="' .TEMPLATE. 'imge/ico-cat-lider.png" alt="лидеры продаж" />'; ?>
                        <?php if($product['new']) echo '<img src="' .TEMPLATE. 'imge/ico-cat-new.png" alt="новинка" />'; ?>
                        <?php if($product['sale']) echo '<img src="' .TEMPLATE. 'imge/ico-cat-sale.png" alt="распродажа" />'; ?>
                    </div> <!-- Иконки -->
                </div>
                <p class="cat-table-more"><a href="?view=product&amp;goods_id=<?=$product['goods_id']?>">подробнее...</a></p>
                <p>Цена :  <span><?=$product['price']?></span></p>
                <a href="?view=addtocart&amp;goods_id=<?=$product['goods_id']?>"><img class="addtocard-index" src="<?=TEMPLATE?>imge/addcard-table.jpg" alt="Добавить в корзину" /></a>
            </div> <!-- .product-table -->
            <!-- Табличный вид продуктов -->
        <?php endforeach; ?>
    <?php endif; ?>
</div> <!-- .catalog-index -->