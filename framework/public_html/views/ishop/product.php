<?php defined('ISHOP') or die('Access denied'); ?>

<?php if($goods): // если есть запрошенный товар ?>

    <div class="kroshka">
        <?php if(count($brand_name) > 1): // если подкатегория (слайдер, моноблок...) ?>
            <a href="<?=PATH?>">Мобильные телефоны</a> / <a href="?view=cat&amp;category=<?=$brand_name[0]['brand_id']?>"><?=$brand_name[0]['brand_name']?></a> / <a href="?view=cat&amp;category=<?=$brand_name[1]['brand_id']?>"><?=$brand_name[1]['brand_name']?></a> / <span><?=$goods['name']?></span>
        <?php elseif(count($brand_name) == 1): // если не дочерняя категория ?>
            <a href="<?=PATH?>">Мобильные телефоны</a> / <a href="?view=cat&amp;category=<?=$brand_name[0]['brand_id']?>"><?=$brand_name[0]['brand_name']?></a> / <span><?=$goods['name']?></span>
        <?php endif; ?>
    </div> <!-- .kroshka -->

    <div class="catalog-detail">
        <h1><?=$goods['name']?></h1>

        <?php if($goods['img_slide']): // если есть картинки галереи ?>
            <div class="item_gallery">
                <div class="item_img">
                    <img src="" />
                </div> <!-- .item_img -->
                <div class="item_thumbs">
                    <?php foreach($goods['img_slide'] as $item): ?>
                        <a href="<?=GALLERYIMG?>photos/<?=$item?>"><img src="<?=GALLERYIMG?>thumbs/<?=$item?>" /></a>
                    <?php endforeach; ?>
                </div> <!-- .item_thumbs -->
            </div> <!-- .item_gallery -->
        <?php endif; ?>

        <img src="<?=PRODUCTIMG?><?=$goods['img']?>" style="float: left;" />

        <div class="short-opais">
            <?=$goods['anons']?>
            <p class="price-detail">Цена :  <span><?=$goods['price']?></span></p>
            <a href="?view=addtocart&amp;goods_id=<?=$goods['goods_id']?>"><img class="addtocard-index" src="<?=TEMPLATE?>imge/addcard-detail.jpg" alt="Добавить в корзину" /></a>
        </div> <!-- .short-opais -->

        <div class="clr"></div>

        <div class="long-opais">
            <?=$goods['content']?>
        </div> <!-- .long-opais -->

    </div> <!-- .catalog-detail -->

<?php else: ?>
    <div class="error">Такого товара нет</div>
<?php endif; ?>