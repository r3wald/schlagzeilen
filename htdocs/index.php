<?php

// das hier ist nur für den in PHP eingebauten Werserver notwendig
$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

// Autoloader starten
require_once __DIR__ . '/../vendor/autoload.php';


$app = new \Silex\Application();
$app['debug'] = true;

$app->get('/',
    function () {
        $g = new \Application\Generator(__DIR__ . '/../data/');
        $headline = $g->generate();
        $s = new \Application\Storage(__DIR__ . '/../storage/');
        $s->save($headline);
        return $headline;
    }
);

$app->get('/list',
    function () {
        $s = new \Application\Storage(__DIR__ . '/../storage/');
        $headlines = $s->getList();
        $html = '<html><head></head><body><ul>';
        foreach ($headlines as $headline)
        $html .= '<li>' . $headline . '</li>';
        $html .= '</ul></body></html>';
        return $html;
    }
);
$app->run();
