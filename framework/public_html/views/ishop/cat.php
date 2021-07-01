<?php defined('ISHOP') or die('Access denied'); ?>
<div class="catalog-index">
    <div class="kroshka">
        <?php if(count($brand_name) > 1): // если подкатегория (слайдер, моноблок...) ?>
            <a href="<?=PATH?>">Мобильные телефоны</a> / <a href="?view=cat&amp;category=<?=$brand_name[0]['brand_id']?>"><?=$brand_name[0]['brand_name']?></a> / <span><?=$brand_name[1]['brand_name']?></span>
        <?php elseif(count($brand_name) == 1): // если не дочерняя категория ?>
            <a href="<?=PATH?>">Мобильные телефоны</a> / <span><?=$brand_name[0]['brand_name']?></span>
        <?php endif; ?>
    </div> <!-- .kroshka -->

<div class="vid-sort">
    Вид
    <a href="#" id="grid" class="grid_list"><img src="<?=TEMPLATE?>imge/vid-tabl.gif"  alt="табличный вид" /></a>
    <a href="#" id="list" class="grid_list"><img src="<?=TEMPLATE?>imge/vid-line.gif" alt="линейный вид" /></a>

    Сортировать по:&nbsp;
    <a id="param_order" class="sort-top"><?=$order?></a>
    <div class="sort-wrap">
        <?php foreach ($order_p as $key => $value):?>
          <?php if($value[0] == $order) continue; ?>
            <a href="?view=cat&amp;category=<?=$category?>&amp;order=<?=$key?>&amp;page=<?=$page?>" class="sort-bot"><?=$value[0]?></a>
        <?php endforeach; ?>
    </div>
</div>


    <?php if($products): //если получены товары категории ?>
        <?php foreach($products as $product): ?>
    <?php  if (!isset($_COOKIE['display']) OR $_COOKIE['display'] == 'grid') : // если вид сетка ?>

            <!--Табличный вид продуктов -->
<div class="product-table">
    <h2><a href="?view=product&goods_id=<?=$product['goods_id']?>"><?=$product['name']?></a></h2>

        <div class="product-table-img">
            <a href="?view=product&goods_id=<?=$product['goods_id']?>"><img src="<?=PRODUCTIMG?><?=$product['img']?>" alt="" width="64"/></a>
            <div><!--Иконки-->
                <?php if ($product['hits']) echo '<img src="' .TEMPLATE. 'imge/ico-cat-lider.png" alt="лидеры продаж" />'; ?>
                <?php if ($product['hits']) echo '<img src="' .TEMPLATE. 'imge/ico-cat-new.png" alt="новинка"/>'; ?>
                <?php if($product['hits']) echo '<img src="' .TEMPLATE. 'imge/ico-cat-sale.png" alt="лидеры продаж" />'; ?>

            </div><!--Иконки-->
        </div>

    <p class="cat-table-more"><a href="?view=product&goods_id=<?=$product['goods_id']?>">подробнее...</a></p>
    <p>Цена: <span><?=$product['price']?></span></p>
    <a href="?view=addtocart&goods_id=<?=$product['goods_id']?>"><img class="addtocard-index" src="<?=TEMPLATE?>imge/addcard-table.jpg" alt="Добавить в карзину"/></a>
</div><!-- .product-table-->
            <!--Табличный вид продуктов -->
    <?php else: //если линейный вид   ?>
            <!--Линейный вид продуктов -->
    <div class="product-line">
        <div class="product-line-img">
            <a href="?view=product&goods_id=<?=$product['goods_id']?>"><img src="<?=PRODUCTIMG?><?=$product['img']?>" width="48" alt="" /></a>
        </div>
        <div class="product-line-price">
            <p>Цена: <span><?=$product['price']?></span></p>
            <a href="?view=addtocart&goods_id=<?=$product['goods_id']?>"><img class="addtocard-index" src="<?=TEMPLATE?>imge/addcard-table.jpg" alt="Добавить в корзину" /></a>
            <div><!--Иконки-->
                <?php if ($product['hits']) echo '<img src="' .TEMPLATE. 'imge/ico-line-lider.jpg" alt="лидеры продаж" />'; ?>
                <?php if ($product['hits']) echo '<img src="' .TEMPLATE. 'imge/ico-line-new.jpg" alt="новинка"/>'; ?>
                <?php if($product['hits']) echo '<img src="' .TEMPLATE. 'imge/ico-line-sale.jpg" alt="лидеры продаж" />'; ?>

            </div><!--Иконки-->
            <p class="cat-line-more"><a href="?view=product&goods_id=<?=$product['goods_id']?>">подробное...</a></p>
        </div>
        <div class="product-line-opis">
            <h2><a href="?view=product&goods_id=<?=$product['goods_id']?>"><?=$product['name']?></a></h2>
            <p> <?=$product['anons']?></p>
        </div>
    </div>
            <!--Линейный вид продуктов -->
            <?php endif; //конец условия переключателя видов ?>
            <?php endforeach; ?>
        <div class="clr"></div>
        <?php if($pages_count > 1) pagination($page, $pages_count);?>

        <?php else: ?>
        <p>Здесь товаров пока нет!</p>
    <?php endif; ?>
    </div><!--product-index-->
