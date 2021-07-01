<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
    <h2>Список категорий</h2>
    <?php
    if(isset($_SESSION['answer'])){
        echo $_SESSION['answer'];
        unset($_SESSION['answer']);
    }
    ?>
    <a href="?view=add_brand"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_kategory.jpg" alt="добавить категорию" /></a>
    <table class="tabl" cellspacing="1">
        <tr>
            <th class="number">№</th>
            <th class="str_name">Название страницы</th>
            <th class="str_action">Действие</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($cat as $key => $value): ?>
            <tr>
                <td><?=$i?></td>
                <td class="name_page"><?=$value[0]?></td>
                <td><a href="?view=edit_brand&amp;brand_id=<?=$key?>" class="edit">изменить</a>&nbsp; | &nbsp;<a href="?view=del_brand&amp;brand_id=<?=$key?>" class="del">удалить</a></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <a href="?view=add_brand"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_kategory.jpg" alt="добавить категорию" /></a>

</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>