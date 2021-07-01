<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
    <?php //print_arr($get_page) ?>

    <h2>Добавление информеров</h2>
    <?php
    if(isset($_SESSION['add_informer']['res'])){
        echo $_SESSION['add_informer']['res'];
        unset($_SESSION['add_informer']['res']);
    }
    ?>
    <form action="" method="post">

        <table class="add_edit_page" cellspacing="0" cellpadding="0">
            <tr>
                <td class="add-edit-txt">Название информера:</td>
                <td><input class="head-text" type="text" name="informer_name"  /></td>
            </tr>
            <tr>
                <td>Позиция информера:</td>
                <td><input class="num-text" type="text" name="informer_position" /></td>
            </tr>

        </table>

        <input type="image" src="<?=ADMIN_TEMPLATE?>images/save_btn.jpg" />

    </form>
    <?php unset($_SESSION['add_informer']); ?>
</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>