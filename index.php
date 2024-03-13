<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/controllers/SiteController.php';
require __DIR__ . '/controllers/RilevatoreController.php';


$app = AppFactory::create();

$app->get('/inpianto', 'SiteController:home');
$app->get('/rilevatori_di_umidita', 'RilevatoreController:showUmidita');
$app->get('/rilevatori_di_umidita/{identificativo}', 'RilevatoreController:showUmiditaSpecifico');
$app->get('/rilevatori_di_temperatura', 'RilevatoreController:showTemperatura');

$app->run();
