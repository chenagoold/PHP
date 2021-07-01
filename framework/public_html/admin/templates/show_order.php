<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
    <h2>Заказ № <?=$order_id?> (<?=$state?>)</h2>

    <?php if($show_order): ?>

        <p>
            <?php if($show_order[0]['status'] == 0): ?>
                <a class="edit" href="?view=orders&amp;confirm=<?=$order_id?>">Подтвердить заказ</a> |
            <?php endif; ?>
            <a class="del" href="">Удалить заказ</a>
        </p>

        <br />
        <table class="tabl" cellspacing="1">
            <tr>
                <th class="number">№</th>
                <th class="str_name" style="width:280px;">Название товара</th>
                <th class="str_sort">Цена</th>
                <th class="str_action">Количество</th>
            </tr>
            <?php $i = 1; $total_sum = 0; ?>
            <?php foreach($show_order as $item): ?>
                <tr>
                    <td><?=$i?></td>
                    <td class="name_page"><?=$item['name']?></td>
                    <td><?=$item['price']?></td>
                    <td><?=$item['quantity']?></td>
                </tr>
                <?php $i++; $total_sum += $item['price'] * $item['quantity']; ?>
            <?php endforeach; ?>
        </table>

        <h2>Общая цена заказа: <span style="color:#e35a0f;"><?=$total_sum?></span></h2>
        <h2>Дата заказа: <span style="color:#e35a0f;"><?=$item['date']?></span></h2>
        <h2>Способ доставки: <span style="color:#e35a0f;"><?=$item['sposob']?></span></h2>

        <h2>Данные покупателя:</h2>

        <table class="tabl" cellspacing="1">
            <tr>
                <th class="number" style="width:140px;">ФИО</th>
                <th class="str_name" style="width:200px;">Адрес</th>
                <th class="str_sort">Для связи</th>
                <th class="str_action">Примечание</th>
            </tr>
            <tr>
                <td><?=$item['customer']?></td>
                <td class="name_page"><?=$item['address']?></td>
                <td>Email: <?=$item['email']?><br />Телефон: <?=$item['phone']?></td>
                <td style="text-align:left;"><?=$item['prim']?></td>
            </tr>
        </table>

        <p>
            <?php if($show_order[0]['status'] == 0): ?>
                <a class="edit" href="?view=orders&amp;confirm=<?=$order_id?>">Подтвердить заказ</a> |
            <?php endif; ?>
            <a class="del" href="">Удалить заказ</a>
        </p>

    <?php else: ?>
        <div class="error">Заказа с таким номером нет</div>
    <?php endif; ?>
</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>