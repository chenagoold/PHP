<?php

// запрет прямого обращения
define('ISHOP', TRUE);

session_start();







// подключение файла конфигурации
require_once '../config.php';

//подклюяение файла функции пользовательскай части
require_once '../functions/functions.php';

//подключение файла функции административной части
require_once 'functions/functions.php';

if($_GET['do'] == "logout"){
    unset($_SESSION['auth']);
}

if(!$_SESSION['auth']['admin']){
    // подключение авторизации
    include $_SERVER['DOCUMENT_ROOT'].'/admin/auth/index.php';
}

$count_new_orders = count_new_orders();



//ajaxUpload загрузка
if($_POST['id']){
    $id = (int)$_POST['id'];
    upload_gallery_img($id);

}

//удаление картинок
if($_POST['img']){
    $res = del_img();
    exit($res);
}


$cat = catalog();

// получение динамичной части шаблона #content
$view = empty($_GET['view']) ? 'pages' : $_GET['view'];



switch($view){
    case('pages'):
        // страницы
        $pages = pages();
    break;
    
    case('informers'):
        // информеры
        $informers = informer();
    break;

    case('edit_page'):
        //редактирование страницы
        $page_id = (int)$_GET['page_id'];
        $get_page = get_page($page_id);

        if($_POST){
            if(edit_page($page_id)) redirect('?view=pages');
            else redirect();
        }
        break;

    case('add_page'):
        //добовление страниц
        if($_POST){
            if(add_page()) redirect('?view=pages');
            else redirect();
        }
        break;

    case('del_page'):
        //удаление страницы
        $page_id = (int)$_GET['page_id'];
        del_page($page_id);
        redirect ();
        break;

    case('news'):
        //все новости
        //параметры для навигации
        $perpage = 2; // кол-во товаров на страницу
        if(isset($_GET['page'])){
            $page = (int)$_GET['page'];
            if($page < 1) $page = 1;
        }else{
            $page = 1;
        }
        $count_rows = count_news(); // общее кол-во новостей
        $pages_count = ceil($count_rows / $perpage); // кол-во страниц
        if(!$pages_count) $pages_count = 1; // минимум 1 страница
        if($page > $pages_count) $page = $pages_count; // если запрошенная страница больше максимума
        $start_pos = ($page - 1) * $perpage; // начальная позиция для запроса

        $all_news = get_all_news($start_pos, $perpage);
        break;

    case('add_news'):
        if($_POST){
            if(add_news()) redirect('?view=news');
              else redirect();
        }

        break;
    
    case('edit_news'):
        //редактирование новости
        $news_id = (int)$_GET['news_id'];
        $get_news = get_news($news_id);

        if($_POST){
            if(edit_news($news_id)) redirect('?view=news');
                else redirect();
        }
        break;
    case('del_news'):
        $news_id = (int)$_GET['news_id'];
        del_news($news_id);
        redirect();
        
        break;

    case('add_link'):
        $informer_id = (int)$_GET['informer_id'];
        $informers = get_informers(); //список информеров
        
        if($_POST){
            if(add_link()) redirect('?view=informers');
            else redirect();
        }
        

        break;

    case('edit_link'):
        $link_id = (int)$_GET['link_id'];
        $informers = get_informers(); // список информеров
        $get_link = get_link($link_id);
        if($_POST){
            if(edit_link($link_id)) redirect('?view=informers');
            else redirect();
        }
        
        break;
    case('del_link'):
        $link_id =  (int)$_GET['link_id'];
        del_link($link_id);
        redirect();
        
        break;
    
    case('add_informer'):
           $informer_id = (int)$_GET['informer_id'];
           if($_POST){
               if(add_informer($informer_name)) redirect('?view=informers');
                 else redirect();
           }
        break;
    
    case('del_informer'):
        $informer_id = (int)$_GET['informer_id'];
        del_informer($informer_id);
        redirect();
        
        break;
    case('edit_informer'):
        $informer_id = (int)$_GET['informer_id'];
        $get_informer = get_informer($informer_id);

        if($_POST){
            if(edit_informer($informer_id)) redirect('?view=informers');
            else redirect();
        }
        break;

    case('brands'):

        break;

    case('add_brand'):
        if($_POST){
            if(add_brand()) redirect('?view=brands');
            else redirect();
        }
        break;
    case('edit_brand'):
        $brand_id = (int)$_GET['brand_id'];
        $parent_id = (int)$_GET['parent_id'];
        //$cat_name = $cat[$brand_id][0];

        if($parent_id == $brand_id OR !$parent_id){
            $cat_name = $cat[$brand_id][0];
        }else{
            //если дочерняя категория
            $cat_name = $cat[$parent_id]['sub'][$brand_id];
        }

        if($_POST){
           if($parent_id AND edit_brand($brand_id)){
              redirect("?view=cat&category=$brand_id");
           }elseif (edit_brand($brand_id)){
               redirect('?view=brands');
           }else{
               redirect();
           }
        }


        break;
    case('del_brand'):
        $brand_id = (int)$_GET['brand_id'];
        del_brand($brand_id);
        redirect();
        break;

    case('cat'):

        $category = (int)$_GET['category'];

        /*==pagination==*/
        //параметры для навигации
        $perpage = 6; //количество товаров на строницу
        if(isset($_GET['page'])){
            $page = (int)$_GET['page'];
            if($page < 1) $page = 1;
        }else{
            $page = 1;
        }
        $count_rows = count_rows($category); // общее кол-во товаров
        $pages_count = ceil($count_rows / $perpage); // кол-во страниц
        if(!$pages_count) $pages_count = 1; // минимум 1 страница
        if($page > $pages_count) $page = $pages_count; //если запрошенная страница больше
        $start_pos = ($page - 1 ) * $perpage; //начальная позиция для запроса
         /*==pagination==*/

        $brand_name = brand_name($category); // хлебные крохи
        $products = products($category, $start_pos, $perpage); // получаем массив из модели


        break;

    case('add_product'):
        $brand_id = (int)$_GET['brand_id'];

        if($_POST){
            if(add_product()) redirect("?view=cat&category=$brand_id");
              else redirect();
        }

        break;

    case('edit_product'):
        $goods_id = (int)$_GET['goods_id'];
        $get_product = get_product($goods_id);
        $brand_id = $get_product['goods_brandid'];
         //если есть базовая картинка
        if($get_product['img'] != "no_image.jpg"){
            $baseimg = '<img class="delimg" rel="0" width="48" src="'.PRODUCTIMG.$get_product['img'].'" alt="'.$get_product['img'].'">';
        }else{
            $baseimg ='<input type="file" name="baseimg" />';
        }
        //если есть картинки галереи
        $imgslide = "";
        if($get_product['img_slide']){
            $images = explode("|", $get_product['img_slide']);
            foreach ($images as $img){
                $imgslide .= "<img class='delimg'  rel='1' alt='{$img}' src='".GALLERYIMG."thumbs/{$img}'>";
            }
        }
        if($_POST) {
            if (edit_product($goods_id)) redirect('?view=cat&category=$brand_id');
            else redirect();
        }
        break;
    
    case('orders'):
        if(isset($_GET['confirm'])){
            $order_id = (int)$_GET['confirm'];
              if(confirm_order($order_id)){
                  $_SESSION['answer'] = "<div class='success'>Статус заказа №{$order_id} успешно изменен.</div>";
                  redirect("?view=orders&status=0");
              }else{
                  $_SESSION['answer'] = "<div class='error'>Статус заказа №{$order_id} не удалось изменить. Возможно, заказа с таким номером нет или он уже подтвержден.";
                  redirect("?view=orders&status=0");
              }
        }

        if($_GET['status'] === '0'){
            $status = " WHERE orders.status = '0' ";
        }

        $orders = orders($status);

        break;
    
    case('show_order'):
        $order_id = (int)$_GET['order_id'];
        $show_order = show_order($order_id);
        if($show_order[0]['status']){
            $state = "обработан";
        }else{
            $state = "не обработан";
        }
        break;

    
    default:
    // если из адресной строки получено имя несуществующего вида
    $view = 'pages';
        $pages = pages();
}


// HEADER
include ADMIN_TEMPLATE.'header.php';

// LEFTBAR
include ADMIN_TEMPLATE.'leftbar.php';

// CONTENT
include ADMIN_TEMPLATE.$view.'.php';

?>