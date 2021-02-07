<?php


namespace app\controllers;




use ishop\App;
use ishop\Cache;

class MainController extends AppController
{

    public function indexAction(){
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id=?', [2]);
        debug($post);
        $this->setMeta('главная страница', 'Описание...', 'Ключевики');
        $name = 'Jon';
        $age = 40;
        $names=['Andrey','nam','Disa'];
        $cache = Cache::instance();
        //$cache->set('test', $names);
        //$cache->delete('test');
        $data = $cache->get('test');
        if(!$data){
            $cache->set('test', $names);
        }
        debug($data);


        $this->set(compact('name', 'age',  'names', 'posts'));



        //$this->layout='test';
        //debug($this->route);
        //echo __METHOD__;


    }

}