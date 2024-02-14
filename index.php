<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require_once("./Classe.php");

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/alunni', function (Request $request, Response $response, $args) {
    $classe = new Classe("5cia");
    $testo = $classe->toString();
    $response->getBody()->write($testo);
    return $response;
});

$app->get('/alunni/{name}', function (Request $request, Response $response, $args) {
    $classe = new Classe("5cia");
    $testo = $classe->getAlunno($args["name"]);
    $response->getBody()->write($testo);
    return $response;
});

$app->run();
