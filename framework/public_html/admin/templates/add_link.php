<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">



    <h2>Добавление страницы информера</h2>
    <?php print_arr($informers);?>
    <?php
    if(isset($_SESSION['add_link']['res'])){
        echo $_SESSION['add_link']['res'];
        unset($_SESSION['add_link']['res']);
    }
    ?>
    <form action="" method="post">

        <table class="add_edit_page" cellspacing="0" cellpadding="0">
            <tr>
                <td class="add-edit-txt">Название страницы:</td>
                <td><input class="head-text" type="text" name="link_name"  /></td>
            </tr>

            <tr>
                <td>Ключевые слова:</td>
                <td><input class="head-text" type="text" name="keywords" value="<?=htmlspecialchars($_SESSION['add_link']['keywords'])?>" /></td>
            </tr>
            <tr>
                <td>Описание:</td>
                <td><input class="head-text" type="text" name="description" value="<?=htmlspecialchars($_SESSION['add_link']['description'])?>" /></td>
            </tr>
            <tr>
                <td>Информер:</td>
                 <td>
                     <select class="select-inf" name="parent_informer">
                         <?php foreach($informers as $item): ?>
                         <option <?php if($item['informer_id'] == $informer_id) echo "selected" ?> value="<?=$item['informer_id']?>">
                             <?= $item['informer_name'] ?>
                         </option>
                         <?php endforeach; ?>
                     </select>
                 </td>
            </tr>
            <tr>
                <td>Позиция страницы:</td>
                <td><input class="num-text" type="text" name="links_position" value="<?=$_SESSION['add_link']['links_position']?>" /></td>
            </tr>
            <tr>
            <tr>
                <td>Содержание страницы:</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea id="editor1" class="full-text" name="text"><?=$_SESSION['add_link']['text']?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace( 'editor1' );
                    </script>
                </td>
            </tr>
        </table>

        <input type="image" src="<?=ADMIN_TEMPLATE?>images/save_btn.jpg" />

    </form>
    <?php unset($_SESSION['add_link']); ?>
</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>