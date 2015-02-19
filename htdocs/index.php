<?php

$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Silex\Application();
$app['debug'] = true;

$app->get('/',
    function () {
        $g = new \Application\Generator(__DIR__ . '/../data/');
        return $g->generate();
    }
);
$app->run();
