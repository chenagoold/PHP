<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
    <?php //print_arr($get_page) ?>

    <h2>Редактирование страницы</h2>
    <?php
    if(isset($_SESSION['add_page']['res'])){
        echo $_SESSION['add_page']['res'];
        unset($_SESSION['add_page']['res']);
    }
    ?>
    <form action="" method="post">

        <table class="add_edit_page" cellspacing="0" cellpadding="0">
            <tr>
                <td class="add-edit-txt">Название страницы:</td>
                <td><input class="head-text" type="text" name="title"  /></td>
            </tr>
            <tr>
                <td>Ключевые слова:</td>
                <td><input class="head-text" type="text" name="keywords" value="<?=htmlspecialchars($_SESSION['add_page']['keywords'])?>" /></td>
            </tr>
            <tr>
                <td>Описание:</td>
                <td><input class="head-text" type="text" name="description" value="<?=htmlspecialchars($_SESSION['add_page']['description'])?>" /></td>
            </tr>
            <tr>
                <td>Позиция страницы:</td>
                <td><input class="num-text" type="text" name="position" value="<?=$_SESSION['add_page']['position']?>" /></td>
            </tr>
            <tr>
                <td>Содержание страницы:</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea id="editor1" class="full-text" name="text"><?=$_SESSION['add_page']['text']?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace( 'editor1' );
                    </script>
                </td>
            </tr>
        </table>

        <input type="image" src="<?=ADMIN_TEMPLATE?>images/save_btn.jpg" />

    </form>
    <?php unset($_SESSION['add_page']); ?>
</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>