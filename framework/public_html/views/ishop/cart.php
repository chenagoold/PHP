<?php defined('ISHOP') or die('Access denied'); ?>
<div id="content-zakaz">
    <h2>Оформление заказа</h2>
    <?php print_arr($_SESSION);
    ?>
    <?php
    if(isset($_SESSION['order']['res'])){
        echo $_SESSION['order']['res'];
    }
    ?>
    <?php if($_SESSION['cart']): // проверка корзины, если в корзине есть товары ?>
        <table class="zakaz-maiin-table" border="0" cellspacing="0" cellpadding="0">
            <form method="post" action="">
                <tr>
                    <td class="z_top">&nbsp;&nbsp;&nbsp;&nbsp;наименование</td>
                    <td class="z_top" align="center">количество</td>
                    <td class="z_top" align="center">стоимость</td>
                    <td class="z_top" align="center">&nbsp;</td>
                </tr>
                <?php foreach($_SESSION['cart'] as $key => $item): ?>
                    <tr>
                        <td class="z_name">
                            <a href="?view=product&goods_id=<?=$key?>"><img src="<?=PRODUCTIMG?><?=$item['img']?>" width="32" title="" /></a>
                            <a href="?view=product&goods_id=<?=$key?>"><?=$item['name']?></a>
                        </td>
                        <td class="z_kol"><input id="id<?=$key?>" class="kolvo" type="text" value="<?=$item['qty']?>" name="" /></td>
                        <td class="z_price"><?=$item['price']?></td>
                        <td class="z_del"><a href="?view=cart&delete=<?=$key?>"><img src="<?=TEMPLATE?>imge/delete.jpg" title="удалить товар из заказа" /></a></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td class="z_bot">&nbsp;&nbsp;&nbsp;&nbsp;Итого:</td>
                    <td class="z_bot" colspan="3" align="right"><?=$_SESSION['total_quantity']?> шт &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$_SESSION['total_sum']?> руб.</td>
                </tr>

        </table>

        <div class="sposob-dostavki">
            <h4>Способы доставки:</h4>
            <?php foreach($dostavka as $item): ?>
                <p><input type="radio" name="dostavka" value="<?=$item['dostavka_id']?>" /><?=$item['name']?></p>
            <?php endforeach; ?>
        </div>


        <h3>Информация для доставки:</h3>
        <?php if(!$_SESSION['auth']['user']): // проверка авторизации ?>
            <table class="zakaz-data" border="0" cellspacing="0" cellpadding="0">
                <tr class="notauth">
                    <td class="zakaz-txt">*ФИО</td>
                    <td class="zakaz-inpt"><input type="text" name="name" value="<?=$_SESSION['order']['name']?>" /></td>
                    <td class="zakaz-prim">Пример: Иванов Сергей Александрович</td>
                </tr>
                <tr class="notauth">
                    <td class="zakaz-txt">*Е-маил</td>
                    <td class="zakaz-inpt"><input type="text" name="email" value="<?=$_SESSION['order']['email']?>" /></td>
                    <td class="zakaz-prim">Пример: test@mail.ru</td>
                </tr>
                <tr class="notauth">
                    <td class="zakaz-txt">*Телефон</td>
                    <td class="zakaz-inpt"><input type="text" name="phone" value="<?=$_SESSION['order']['phone']?>" /></td>
                    <td class="zakaz-prim">Пример: 8 937 999 99 99</td>
                </tr>
                <tr class="notauth">
                    <td class="zakaz-txt">*Адрес доставки</td>
                    <td class="zakaz-inpt"><input type="text" name="address" value="<?=$_SESSION['order']['addres']?>" /></td>
                    <td class="zakaz-prim">Пример: г. Москва, пр. Мира, ул. Петра Великого д.19, кв 51.</td>
                </tr>
                <tr>
                    <td class="zakaz-txt" style="vertical-align:top;">Примечание </td>
                    <td class="zakaz-txtarea"><textarea name="prim"><?=$_SESSION['order']['prim']?></textarea></td>
                    <td class="zakaz-prim" style="vertical-align:top;">Пример: Позвоните пожалуйста после 10 вечера,
                        до этого времени я на работе </td>
                </tr>
            </table>
        <?php else: // если пользователь авторизован ?>
            <table class="zakaz-data" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td class="zakaz-txt" style="vertical-align:top;">Примечание </td>
                    <td class="zakaz-txtarea"><textarea name="prim"></textarea></td>
                    <td class="zakaz-prim" style="vertical-align:top;">Пример: Позвоните пожалуйста после 10 вечера,
                        до этого времени я на работе </td>
                </tr>
            </table>
        <?php endif; // конец условия проверки авторизации ?>
        <input type="image" name="order" src="<?=TEMPLATE?>imge/zakazat.jpg" />

        <br /><br /><br /><br />

        </form>
    <?php else: // если товаров нет ?>
        Корзина пуста
    <?php endif; // конец условия проверки корзины ?>
    <?php
    unset($_SESSION['order']);
    ?>
</div> <!-- .content-zakaz -->