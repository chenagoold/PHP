<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
    <?php //print_arr($get_page) ?>

    <h2>Добавление новости</h2>
    <?php
    if(isset($_SESSION['add_news']['res'])){
        echo $_SESSION['add_news']['res'];
        unset($_SESSION['add_news']['res']);
    }
    ?>
    <form action="" method="post">

        <table class="add_edit_page" cellspacing="0" cellpadding="0">
            <tr>
                <td class="add-edit-txt">Название новости:</td>
                <td><input class="head-text" type="text" name="title" /></td>
            </tr>
            <tr>
                <td>Ключевые слова:</td>
                <td><input class="head-text" type="text" name="keywords" value="<?=htmlspecialchars($_SESSION['add_news']['keywords'])?>" /></td>
            </tr>
            <tr>
                <td>Описание:</td>
                <td><input class="head-text" type="text" name="description" value="<?=htmlspecialchars($_SESSION['add_news']['description'])?>" /></td>
            </tr>
            <tr>
                <td>Анонс новости:</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea id="editor1" class="full-text" name="anons"><?=$_SESSION['add_news']['anons']?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace( 'editor1' );
                    </script>
                </td>
            </tr>
            <tr>
                <td>Текст новости:</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea id="editor2" class="full-text" name="text"><?=$_SESSION['add_news']['text']?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace( 'editor2' );
                    </script>
                </td>
            </tr>
        </table>

        <input type="image" src="<?=ADMIN_TEMPLATE?>images/save_btn.jpg" />

    </form>
    <?php unset($_SESSION['add_news']); ?>

</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>