<?php
require_once dirname(__DIR__).'/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';


new \ishop\App();

//debug(\ishop\App::$app->getProperties());

//throw new Exception('Страница не найдена', 404);

//debug(\ishop\Router::getRoutes());



