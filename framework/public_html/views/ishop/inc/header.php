<?php defined('ISHOP') or die('Access denied');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE?>style.css" />
    <script type="text/javascript" src="<?=TEMPLATE?>js/functions.js"></script>
    <script type="text/javascript" src="<?=TEMPLATE?>js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?=TEMPLATE?>js/jquery-ui-1.8.22.custom.min.js"></script>
    <script type="text/javascript" src="<?=TEMPLATE?>js/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?=TEMPLATE?>js/workscripts.js"></script>
    <script type="text/javascript">var query = '<?=$_SERVER['QUERY_STRING']?>';</script>



    <title>Untitled Document</title>
</head>

<body>

<div class="main">
    <div class="header">
        <a href="/"><img class="logo" src="<?=TEMPLATE?>imge/logo.jpg" alt="Интернет магазин сотовых телефонов" /></a>
        <img class="slogo" src="<?=TEMPLATE?>imge/slogo.jpg" alt="Интернет магазин сотовых телефонов" />
        <div class="head-contact">
            <p>Телефон:<br/> 8(800)700-00-01</p>
            <p>Режим работы:<br/>
                Будние дни: c 9:00 до 18:00 <br/>
                Суббота,Воскресенье - выходные </p>
        </div>
        <form method="get" >
            <ul class="search-head">
                <input type="hidden" name="view" value="search" />
                <li>
                    <input type="text" name="search" id="quickquery" placeholder="Что вы хотите купить? " />

                    <script type="text/javascript">
                        //<![CDATA[
                        placeholderSetup('quickquery');
                        //]]
                    </script>
                </li>
                <li><input type="image" class="search-btn" src="<?=TEMPLATE?>imge/searc-btn.jpg" />
                </li>
            </ul>
        </form>
    </div>
    <ul class="menu">
        <li><a href="<?=PATH?>">Главная</a>
        <?php if($pages): ?>
          <?php foreach ($pages as $item): ?>
          <li><a href="?view=page&amp;page_id=<?=$item['page_id']?>"><?=$item['title']?></a> </li>
        <?php endforeach; ?>
        <?php endif; ?>
    </ul>