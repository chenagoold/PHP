<?php defined('ISHOP') or die('Access denied');
?>


<div class="footer">
    <div class="flogo">
        <a href="/"><img src="<?=TEMPLATE?>imge/footer-logo.png" alt="Интернет магазин сотовых телефонов" /></a>
        <p>Сopyright © 2012</p>
    </div>
    <div class="fphone">
        <h2>Телефон:</h2>
        <h1>8 (800) 700-00-01</h1>

        <h2>Режим работы:</h2>
        <p>Будние дни: с 9:00 до 18:00<br />
            Суббота, Воскресенье - выходные </p>
    </div>
    <div class="fmenu">
        <p>Меню:</p>
        <ul>
            <li><a href="<?=PATH?>">Главная</a></li>
            <?php if($pages): ?>
                <?php foreach ($pages as $item): ?>
                    <li><a href="?view=page&amp;page_id=<?=$item['page_id']?>"><?=$item['title']?></a> </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>