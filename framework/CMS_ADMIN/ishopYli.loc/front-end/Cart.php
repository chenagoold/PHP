<?php


namespace app\models;


use ishop\App;

class Cart extends AppModel
{

    public function addToCart($product, $qty = 1, $mod = null)
    {
        /*if(!isset($_SESSION['cart.currency'])){
            $_SESSION['cart.currency'] = App::$app->getProperty('currency');
        }*/
        debug($mod);
        if ($mod) {
            $ID = "{$product->id}-{$mod->id}";
            /*$title = "{$product->title} ({$mod->title})";
            $price = $mod->price;
        }else{
            $ID = $product->id;
            $title = $product->title;
            $price = $product->price;
        }
        debug($_SESSION);
        debug($ID);
        debug($title);
        debug($price);*/
        }
    }
}