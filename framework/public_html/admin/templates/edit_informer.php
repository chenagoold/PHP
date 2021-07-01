<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">

    <h2>Добавление информера</h2>
    <?php
    if(isset($_SESSION['edit_informer']['res'])){
        echo $_SESSION['edit_informer']['res'];
        unset($_SESSION['edit_informer']['res']);
    }
    ?>
    <?php print_arr($get_informer);?>

    <form action="" method="post">

        <table class="add_edit_page" cellspacing="0" cellpadding="0">
            <tr>
                <td class="add-edit-txt">Название информера:</td>
                <td><input class="head-text" type="text" name="informer_name" value="<?=htmlspecialchars($get_informer['informer_name'])?>" /></td>
            </tr>
            <tr>
                <td>Позиция информера:</td>
                <td><input class="num-text" type="text" name="informer_position" value="<?=$get_informer['informer_position']?>" /></td>
            </tr>
        </table>

        <input type="image" src="<?=ADMIN_TEMPLATE?>images/save_btn.jpg" />

    </form>
    <?php unset($_SESSION['edit_informer']); ?>
</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>