<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
    <h2>Заказы <span class="small">(необработанные заказы подсвечены)</span></h2>
    <?php
    if(isset($_SESSION['answer'])){
        echo $_SESSION['answer'];
        unset($_SESSION['answer']);
    }
    ?>
    <?php if($orders): ?>
        <table class="tabl" cellspacing="1">
            <tr>
                <th class="number">№ заказа</th>
                <th class="str_name" style="width:280px;">Покупатель</th>
                <th class="str_sort">Дата</th>
                <th class="str_action">Просмотр</th>
            </tr>
            <?php foreach($orders as $item): ?>
                <tr <?php if($item['status'] == 0) echo "class='highlight'"; ?> >
                    <td><?=$item['order_id']?></td>
                    <td class="name_page"><?=$item['name']?></td>
                    <td><?=$item['date']?></td>
                    <td><a href="?view=show_order&amp;order_id=<?=$item['order_id']?>" class="edit">Просмотреть</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <div class="error">Нет необработанных заказов</div>
    <?php endif; ?>

</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>