<?php

    require_once("./Rilevatore.php");
    require_once("./RilevatoreDiTemperatura.php");
    require_once("./RilevatoreDiUmidita.php");

    class Inpianto{

        private $nome;
        private $latitudine;
        private $longitudine;
        private $rilevatori = array();

        function __construct(){

            $this->nome = "1";
            $this->latitudine = "123";
            $this->longitudine = "456";

            $a1 = new RilevatoreDiTemperatura("215543dasd","terra");
            $a2 = new RilevatoreDiUmidita("25545thdf","acqua");
            $a3 = new RilevatoreDiTemperatura("rget216usd","aria");

            $this->rilevatori = array($a1,$a2,$a3);

        }

        function toString() {

            $text = "nome: " . $this->nome . "latitudine: " . $this->latitudine . "longitudine: " . $this->longitudine . "<br>";
    
            foreach ($this->rilevatori as $a) {
                $text = $text . $a->toString() . "<br>";
            }
    
            return $text;
        }



    }


?>