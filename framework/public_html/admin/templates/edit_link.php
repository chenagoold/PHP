<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
    <h2>Редактирование страницы информера</h2>
    <?php
    if(isset($_SESSION['edit_link']['res'])){
        echo $_SESSION['edit_link']['res'];
        unset($_SESSION['edit_link']['res']);
    }
    ?>
    <form action="" method="post">

        <table class="add_edit_page" cellspacing="0" cellpadding="0">
            <tr>
                <td class="add-edit-txt">Название страницы:</td>
                <td><input class="head-text" type="text" name="link_name" value="<?=htmlspecialchars($get_link['link_name'])?>" /></td>
            </tr>
            <tr>
                <td>Ключевые слова:</td>
                <td><input class="head-text" type="text" name="keywords" value="<?=htmlspecialchars($get_link['keywords'])?>" /></td>
            </tr>
            <tr>
                <td>Описание:</td>
                <td><input class="head-text" type="text" name="description" value="<?=htmlspecialchars($get_link['description'])?>" /></td>
            </tr>
            <tr>
                <td>Информер:</td>
                <td><select class="select-inf" name="parent_informer">
                        <?php foreach($informers as $item): ?>
                            <option <?php if($item['informer_id'] == $get_link['parent_informer']) echo "selected" ?> value="<?=$item['informer_id']?>"><?=$item['informer_name']?></option>
                        <?php endforeach; ?>
                    </select></td>
            </tr>
            <tr>
                <td>Позиция страницы:</td>
                <td><input class="num-text" type="text" name="links_position" value="<?=$get_link['links_position']?>" /></td>
            </tr>
            <tr>
                <td>Содержание страницы:</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea id="editor1" class="full-text" name="text"><?=$get_link['text']?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace( 'editor1' );
                    </script>
                </td>
            </tr>
        </table>

        <input type="image" src="<?=ADMIN_TEMPLATE?>images/save_btn.jpg" />

    </form>

</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>