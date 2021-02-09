<?php


namespace app\controllers;




use ishop\App;
use ishop\Cache;

class MainController extends AppController
{

    public function indexAction(){

        $brands = \R::find('brand', 'LIMIT 3');
        $this->setMeta('главная страница', 'Описание...', 'Ключевики');
        $this->set(compact('brands'));


        }












}