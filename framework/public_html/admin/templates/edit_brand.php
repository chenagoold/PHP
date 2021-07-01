<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">

    <h2>Редактирование  категории</h2>
    <?php
    if(isset($_SESSION['edit_brand']['res'])){
        echo $_SESSION['edit_brand']['res'];
        unset($_SESSION['edit_brand']);
    }
    ?>

    <form action="" method="post">

        <table class="add_edit_page" cellspacing="0" cellpadding="0">
            <tr>
                <td class="add-edit-txt">Название категории:</td>
                <td><input class="head-text" type="text" name="brand_name" value="<?=$cat_name?>"/></td>
            </tr>
            <tr>
                <td>Родительская категория:</td>
                <?php if(!$cat['brand_id']['sub']): //если нет подкатегорий ?>
                <td><select class="select-inf" name="parent_id">
                        <option value="0">Самостоятельная категория</option>
                        <?php foreach($cat as $key => $value): ?>
                            <?php if($value[0] == $cat_name) continue; ?>
                            <option value="<?=$key?>"><?=$value[0]?></option>
                        <?php endforeach; ?>
                    </select></td>
            <?php else: ?>
                <td>Данная категория содержит подкатегории</td>
            <?php endif; ?>
            </tr>
        </table>

        <input type="image" src="<?=ADMIN_TEMPLATE?>images/save_btn.jpg" />



    </form>

</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>