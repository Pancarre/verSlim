<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
require_once("./Inpianto.php");

class RilevatoreController{

    function showUmidita(Request $request, Response $response, $args) {

        $inpianto = new Inpianto();

        $response->getBody()->write($inpianto->getRilevatore("RilevatoreDiUmidita"));
        return $response;
        
    }

    function showUmiditaSpecifico(Request $request, Response $response, $args) {

        $inpianto = new Inpianto();

        $response->getBody()->write($inpianto->getRilevatoreSpecifico("RilevatoreDiUmidita",$args['identificativo']));
        return $response;
        
    }


    function showTemperatura(Request $request, Response $response, $args) {

        $inpianto = new Inpianto();

        $response->getBody()->write($inpianto->getRilevatore("RilevatoreDiTemperatura"));
        return $response;
        
    }

    function showTemperaturaSpecifico(Request $request, Response $response, $args) {

        $inpianto = new Inpianto();

        $response->getBody()->write($inpianto->getRilevatoreSpecifico("RilevatoreDiTemperatura",$args['identificativo']));
        return $response;
        
    }

}