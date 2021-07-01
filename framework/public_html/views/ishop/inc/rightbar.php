<?php defined('ISHOP') or die('Access denied');
?>

<div id="right-bar">
    <div class="right-bar-cont">
        <div class="enter">
            <h2><span>Авторизация</span></h2>
            <div class="authform">
                <?php if(!$_SESSION['auth']['user']): ?>
                <form method="post" action="#">
                    <label for="login">Логин:</label><br />
                    <input type="text" name="login" id="login" /><br/>
                    <label for="pass">Пароль:</label><br />
                    <input type="password" name="pass" id="pass" /><br/>
                    <input type="submit" name="auth" id="auth" value="Войти" />
                    <p class="link"><a href="?view=reg">Регистрация</a></p>

                </form>
                    <?php
                    if(isset($_SESSION['auth']['error'])){
                        echo '<div class="error">'.$_SESSION['auth']['error'].'</div>';
                        unset($_SESSION['auth']);
                    }
                    ?>
                <?php else: ?>
                    <p>Добро пожаловать, <?=htmlspecialchars($_SESSION['auth']['user'])?></p>
                    <a href="?do=logout">Выход</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="basket">
            <h2><span>Корзина</span></h2>
            <div>
                 <p>
                     <?php if($_SESSION['total_quantity'] ): ?>
                       Товаров в корзине:<br />
                         <span><?=($_SESSION['total_quantity'] )?></span>на сумму<span><?=($_SESSION['total_sum'] )?></span>руб</p>
                          <a href="?view=cart"><img src="<?=TEMPLATE?>imge/oformit.jpg" alt="" /></a>
                <?php else: ?>
                    Корзина пуста
                     <?php endif; ?>
                 </p>

            </div>
        </div>
        <div class="share-search">
            <h2><span>Выбор по параметрам</span></h2>
            <div>
                <form method="get" >
                    <input type="hidden" name="view" value="filter" />
                    <p>Стоимость:</p>
                    от<input class="podbor-price" type="text" name="startprice" value="<?=$startprice?>" />
                    до<input class="podbor-price" type="text" name="endprice"  value="<?=$endprice?>" />
                    руб.
                    <br />
                    <br />
                    <p>Производители</p>
                    <?php foreach($cat as $key => $item): ?>
                    <?php if($item[0]): ?>
                    <input type="checkbox" name="brand[]" value="<?=$key?>" id="<?=$key?>"
                           <?php if($key == $brand[$key]) echo "checked" ?> />
                    <label for="<?=$key?>"><?=$item[0]?></label><br />
                    <?php endif; ?>
                    <?php endforeach; ?>
                    <input class="podbor" type="image" src="<?=TEMPLATE?>imge/podbor.jpg" />
                </form>

            </div>
        </div>
    </div>
</div>