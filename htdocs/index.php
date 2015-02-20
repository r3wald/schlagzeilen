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
        $html = '<html><head></head><body>';
        $html .= '<a href="/new">Neue Schlagzeile erzeugen</a><br>';
        $html .= '<a href="/list">Alle Schlagzeilen anzeigen</a><br>';
        $html .= '</body></html>';
        return $html;
    }
);

$app->get('/new',
    function () {
        $g = new \Application\Generator(__DIR__ . '/../data/');
        $headline = $g->generate();
        $s = new \Application\Storage(__DIR__ . '/../storage/');
        $s->save($headline);

        $html = '<html><head></head><body>';
        $html .= $headline;
        $html .= '</body></html>';
        return $html;
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
