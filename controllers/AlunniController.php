<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
require_once("./Classe.php");

class AlunniController{

    function index(Request $request, Response $response, $args) {
        $classe = new Classe("5cia");
        $response->getBody()->write($classe->toString());
        return $response;
    }

    function show(Request $request, Response $response, $args) {
        $classe = new Classe("5cia");
        $response->getBody()->write($classe->getApiAlunno($args["name"]));
        return $response;
    }


}