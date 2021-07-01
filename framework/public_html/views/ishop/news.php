<?php defined('ISHOP') or die('Access denied'); ?>

<div class="kroshka">
    <a href="<?=PATH?>">Главная</a> / <a href="<?=PATH?>?view=archive">Все новости</a>/ <span><?=$news_text['title']?></span>
</div>

<div class="content-txt">
    <?php if($news_text): ?>
        <h1><?=$news_text['title']?></h1>
        <span class="news_date"><?=$news_text['date']?></span>
        <br /><br />
        <?=$news_text['text']?>
    <?php else: ?>
        <p>Такой новости нет!</p>
    <?php endif; ?>
</div> <!-- .content-txt -->