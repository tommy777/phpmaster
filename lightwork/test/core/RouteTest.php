<?php

require 'core/Route.php';
use lightwork\core\Router;

$definitions = array(
    '/:controller'
        => array('action' => 'index'),
    '/item/:action'
        => array('controller' => 'item'),
);

$router = new Router($definitions);
var_dump($router);