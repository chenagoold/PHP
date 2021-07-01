<?php

defined('ISHOP') or die('Access denied');

 
//домен
define('PATH','http://test.sity/');

//модель
define('MODEL','model/model.php');

//контроллер
define('CONTROLLER','controller/controller.php');

//вид
define('VIEW','views/');

//активный шаблон
define('TEMPLATE', VIEW.'ishop/');

//папка с картинками контента
define('PRODUCTIMG', PATH.'userfiles/product_img/baseimg/');

//папка с галерея 
define('GALLERYIMG', PATH.'userfiles/product_img/');

// максимально допустимый вес загружаемых картинок - 1 Мб
define('SIZE', 1048576);

//сервер
define('HOST', 'localhost');

//пользователь
define('USER','dima');


//пароль
define('PASS','123');

//БД

define('DB', 'ishop');

//admin
define('ADMIN_TEMPLATE', 'templates/');


//название магазина

define('TITLE', 'Интернет магазин сотовых телефонов');

//email администратора
define('ADMIN_EMAIL', 'dimobix@gmail.com'); 

$connection = @mysqli_connect(HOST, USER, PASS, DB) or die("Нет соединения с БД");
mysqli_set_charset($connection, "utf8") or die("Не установлена кодировка соединения");

