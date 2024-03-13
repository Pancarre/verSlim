<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once("./Inpianto.php");


class SiteController{

    function home(Request $request, Response $response, $args) {
        $inpianto = new Inpianto();

        $response->getBody()->write($inpianto->toString());
        return $response;
    }

}