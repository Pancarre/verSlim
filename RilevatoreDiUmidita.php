<?php

    require_once("./Rilevatore.php");


    class RilevatoreDiUmidita Extends Rilevatore{

        private $tipologia;


        function __construct($identificativo,$codiceSeriale,$tipologia){
            
            parent::__construct($identificativo, $codiceSeriale,"%");
            $this->tipologia = $tipologia;

        }

        function jsonSerialize(){

            $a = [
                "nome"=>$this->identificativo,
                "misurazioni"=>$this->misurazioni,
                "codiceSeriale"=>$this->codiceSeriale,
                "tipologia"=>$this->tipologia
            ];


            return $a;


        }

        function toString(){    
            parent::toString();

            $test = "identificativo: " . $this->identificativo . " unitaDiMisura: " . $this->unitaDiMisura . " codiceSeriale: " . $this->codiceSeriale . " tipologia: " . $this->tipologia . "<br>";
            if($this->misurazioni){

                foreach($this->misurazioni as $data => $valore){

                    $test .="data: " . $data . " $valore: " . $valore. "<br>";
    
                }


            }
            return $test;


        }

    }


?>