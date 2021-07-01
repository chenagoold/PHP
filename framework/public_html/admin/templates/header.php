<?php defined('ISHOP') or die('Access denied'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?=ADMIN_TEMPLATE?>style.css" />
	<script type="text/javascript" src="<?=ADMIN_TEMPLATE;?>js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?=ADMIN_TEMPLATE;?>js/jquery-ui-1.9.2.custom.min.js"></script>
	<script type="text/javascript" src="<?=ADMIN_TEMPLATE;?>js/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?=ADMIN_TEMPLATE;?>js/workscripts.js"></script>
	<script type="text/javascript" src="<?=ADMIN_TEMPLATE;?>js/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?=ADMIN_TEMPLATE;?>js/ajaxupload.js"></script>

	
<title>Список страниц</title>
</head>

<body>
<div class="karkas">
	<div class="head">
		<a href="<?=PATH?>/admin"><img src="<?=ADMIN_TEMPLATE?>images/logoAdm.jpg" /></a>
		<p><a href="#">Admin</a> |<a href="<?=PATH?>">На сайт</a>| <a href="?do=logout"><strong>Выйти</strong></a></p>
	</div> <!-- .head -->