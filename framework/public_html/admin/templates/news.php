<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
    <h2>Список новостей</h2>
    <?php
    if(isset($_SESSION['answer'])){
        echo $_SESSION['answer'];
        unset($_SESSION['answer']);
    }
    ?>
    <a href="?view=add_news"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_news.jpg" alt="добавить страницу" /></a>
    <table class="tabl" cellspacing="1">
        <tr>
            <th class="number">№</th>
            <th class="str_name">Название страницы</th>
            <th class="str_sort">Дата</th>
            <th class="str_action">Действие</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($all_news as $item): ?>
            <tr>
                <td><?=$i?></td>
                <td class="name_page"><?=$item['title']?></td>
                <td><?=$item['date']?></td>
                <td><a href="?view=edit_news&amp;news_id=<?=$item['news_id']?>" class="edit">изменить</a>&nbsp; | &nbsp;<a href="?view=del_news&amp;news_id=<?=$item['news_id']?>" class="del">удалить</a></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <a href="?view=add_news"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_news.jpg" alt="добавить страницу" /></a>
    <?php if($pages_count > 1) pagination($page, $pages_count); ?>
</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>