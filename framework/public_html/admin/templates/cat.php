<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
    <h2>Каталог</h2>
    <?php
    if(isset($_SESSION['answer'])){
        echo $_SESSION['answer'];
        unset($_SESSION['answer']);
    }
    //print_arr($cat)
    ?>

    <a href="?view=add_brand"><img class="add_kategory" src="<?=ADMIN_TEMPLATE?>images/add_kategory.jpg" alt="добавить категорию" /></a>
    <div class="crosh">
        <?php if(count($brand_name) > 1): //если подкатегория ?>
        <p class="crosh-left"><a href="?view=brands">Мобильные телефоны</a> / <a href="?view=cat&amp;category=<?=$brand_name[0]['brand_id']?>"><?=$brand_name[0]['brand_name']?></a> / <?=$brand_name[1]['brand_name']?></p>
        <?php elseif(count($brand_name) == 1): //если не дочерняя категория  ?>
            <p class="crosh-left"><a href="?view=brands">Мобильные телефоны</a> / <?=$brand_name[0]['brand_name']?> </p>
        <?php endif; ?>
        <p class="crosh-right"><a href="?view=edit_brand&amp;brand_id=<?=$category?>&amp;parent_id=<?=$brand_name[0]['brand_id']?>" class="edit">изменить категорию</a>&nbsp; | &nbsp;<a href="?view=del_brand&amp;brand_id=<?=$category?>" class="del">удалить категорию</a></p>

    </div>

    <a href="?view=add_product"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_product.jpg" alt="добавить продукт" /></a>

    <?php if($products): // если есть товары?>
        <?php
        $col = 3; // количество ячеек в строке
        $row = ceil((count($products)/$col)); // количество рядов
        $start = 0;
        ?>
        <table class="tabl-kat" cellspacing="1">
            <?php for($i = 0; $i < $row; $i++): // цикл вывода рядов ?>
                <tr>
                    <?php for($k = 0; $k < $col; $k++): // цикл вывода ячеек ?>
                        <td>
                            <?php if($products[$start]): // если есть товар ?>
                                <h2><?=$products[$start]['name']?></h2>
                                <img src="<?=PRODUCTIMG.$products[$start]['img']?>" alt="" />
                                <p><a href="?view=edit_product&amp;goods_id=<?=$products[$start]['goods_id']?>" class="edit">изменить</a>&nbsp; | &nbsp;<a href="?view=del_product&amp;goods_id=<?=$products[$start]['goods_id']?>" class="del">удалить</a></p>
                            <?php else: // если нет товара ?>
                                &nbsp;
                            <?php endif; // перенос внутрь ячейки ?>
                            <?php $start++; ?>
                        </td>
                    <?php endfor; // конец цикла вывода ячеек ?>
                </tr>
            <?php endfor; // конец цикла вывода рядов ?>
        </table>
    <?php else: // если нет товаров ?>
        <p>Здесь товаров пока нет</p>
    <?php endif; // конец условия: если есть товары ?>
    <a href="#"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_product.jpg" alt="добавить продукт" /></a>
    <?php if($pages_count > 1) pagination($page, $pages_count); ?>
</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>