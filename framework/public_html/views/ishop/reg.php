<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content-txt">	
    <h2>Регистрация</h2>

    <form method="post" action="#">
        <table class="zakaz-data" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="zakaz-txt">*Логин</td>
                <td class="zakaz-inpt"><input type="text" name="login" value="<?=$_SESSION['reg']['login']?>" /></td>
                <td class="zakaz-prim"></td>
            </tr>
            <tr>
                <td class="zakaz-txt">*Пароль</td>
                <td class="zakaz-inpt"><input type="password" name="pass" /></td>
                <td class="zakaz-prim"></td>
            </tr>
            <tr>
                <td class="zakaz-txt">*ФИО</td>
                <td class="zakaz-inpt"><input type="text" name="name" value="<?=$_SESSION['reg']['name']?>" /></td>
                <td class="zakaz-prim">Пример: Иванов Сергей Александрович</td>
            </tr>
            <tr>
                <td class="zakaz-txt">*Е-маил</td>
                <td class="zakaz-inpt"><input type="text" name="email" value="<?=$_SESSION['reg']['email']?>" /></td>
                <td class="zakaz-prim">Пример: test@mail.ru</td>
            </tr>
            <tr>
                <td class="zakaz-txt">*Телефон</td>
                <td class="zakaz-inpt"><input type="text" name="phone" value="<?=$_SESSION['reg']['phone']?>" /></td>
                <td class="zakaz-prim">Пример: 8 937 999 99 99</td>
            </tr>
            <tr>
                <td class="zakaz-txt">*Адрес доставки</td>
                <td class="zakaz-inpt"><input type="text" name="address" value="<?=$_SESSION['reg']['address']?>" /></td>
                <td class="zakaz-prim">Пример: г. Дулино, пр. Мира, ул. Виктора Великого д.19, кв 51.</td>
            </tr>                
		</table>
        <input type="submit" name="reg" value="Зарегистрироваться" />
    </form>	
    
    <?php
    
    if(isset($_SESSION['reg']['res'])){
        echo  $_SESSION['reg']['res'];
        unset($_SESSION['reg']);
    }
    
    ?>
    	
</div> <!-- .content-txt -->