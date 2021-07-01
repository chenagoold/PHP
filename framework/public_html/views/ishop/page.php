<?php defined('ISHOP') or die('Access denied'); ?>

<div class="kroshka">
    <a href="<?=PATH?>">Главная</a>  / <span><?=$get_page['title']?></span>
</div>

<div class="content-txt">
    <?php if($get_page): ?>
        <h1><?=$get_page['title']?></h1>
        <?=$get_page['text']?>
    <?php else: ?>
        <p>Такой страницы нет!</p>
    <?php endif; ?>
</div> <!-- .content-txt -->