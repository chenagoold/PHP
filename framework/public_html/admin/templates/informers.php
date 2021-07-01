<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content">
	<h2>Информеры</h2>
	<?php if(isset ($_SESSION['answer'])){
	          echo $_SESSION['answer'];
	         unset($_SESSION['answer']); }?>
	<a href="?view=add_informer"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_inf.jpg" alt="добавить информер" /></a>
	<?php foreach($informers as $informer): ?>
		<div class="inf-down">
			<p class="toggle"></p>
			<h3><?=$informer[0]?></h3>
			<p class="inf-link"><a href="?view=edit_informer&amp;informer_id=<?=$informer['informer_id']?>" class="edit">изменить</a>&nbsp; | &nbsp;<a href="?view=del_informer&amp;informer_id=<?=$informer['informer_id']?>" class="del">удалить</a></p>
		</div> <!-- .inf-down -->
		<div class="inf-page">
			<table class="inf-tabl" cellspacing="1">
				<tr>
					<th class="number">№</th>
					<th class="str_name">Название страницы</th>
					<th class="str_sort">Сортировка</th>
					<th class="str_action">Действие</th>
				</tr>
				<?php if($informer['sub']): ?>
					<?php $i = 1; ?>
					<?php foreach($informer['sub'] as $key => $value): ?>
						<tr>
							<td><?=$i?></td>
							<td class="name_page"><?=$value;?></td>
							<td><?=$i?></td>
							<td><a href="?view=edit_link&amp;link_id=<?=$key?>" class="edit">изменить</a>&nbsp; | &nbsp;<a href="?view=del_link&amp;link_id=<?=$key?>" class="del">удалить</a></td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				<?php else: ?>
					<tr>
						<td colspan="4"><h3>В этом информере страниц нет</h3></td>
					</tr>
				<?php endif; ?>
			</table>
			<a href="?view=add_link&amp;informer_id=<?=$informer['informer_id']?>"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_page_inf.jpg" alt="добавить страницу" /></a>
		</div> <!-- .inf-page -->
	<?php endforeach; ?>
	<a href="?view=add_informer"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_inf.jpg" alt="добавить информер" /></a>

</div> <!-- .content -->
</div> <!-- .content-main -->
</div> <!-- .karkas -->
</body>
</html>