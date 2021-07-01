<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
	<?php //print_arr($pages);?>
			<h2>Список страниц</h2>
	<?php
	if(isset($_SESSION['answer'])){
		echo $_SESSION['answer'];
		unset($_SESSION['answer']);
	}
	?>
			<a href="?view=add_page"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_page.jpg" alt="добавить страницу" /></a>
			<table class="tabl" cellspacing="1">
			  <tr>
				<th class="number">№</th>
				<th class="str_name">Название страницы</th>
				<th class="str_sort">Сортировка</th>
				<th class="str_action">Действие</th>
			  </tr>
			  <?php $i = 1;?>
				<?php foreach($pages as $item):?>
				<tr>
					<td><?=$i?></td>
					<td class="name_page"><?=$item['title']?></td>
					<td><?=$item['position']?></td>
					<td><a href="?view=edit_page&amp;page_id=<?=$item['page_id']?>" class="edit">изменить</a>&nbsp; | &nbsp;<a href="?view=del_page&amp;page_id=<?=$item['page_id']?>" class="del">удалить</a> </td>
				</tr>
					<?php $i++ ?>
				<?php endforeach; ?>

			</table>
			<a href="?view=add_page"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_page.jpg" alt="добавить страницу" /></a>

		</div> <!-- .content -->
	</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>