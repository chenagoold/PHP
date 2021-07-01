<?php defined('ISHOP') or die('Access denied'); ?>

<div class="kroshka">
    <a href="<?=PATH?>">Главная</a> / <span><?=$text_informer['informer_name']?></span> / <span><?=$text_informer['link_name']?></span>
</div>

<div class="content-txt">
    <?php if($text_informer): ?>
        <h1><?=$text_informer['link_name']?></h1>
        <?=$text_informer['text']?>
    <?php else: ?>
        <p>Такой страницы нет!</p>
    <?php endif; ?>
</div> <!-- .content-txt -->