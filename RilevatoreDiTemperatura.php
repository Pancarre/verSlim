<?php


    require_once("./Rilevatore.php");

    class RilevatoreDiTemperatura Extends Rilevatore implements JsonSerializable{

        private $posizione;


        function __construct($codiceSeriale,$posizione){
            
            parent::__construct("temperatura", $codiceSeriale);
            $this->posizione = $posizione;

        }

        function jsonSerialize(){

            $a = [
                "nome"=>$this->identificativo,
                "misurazioni"=>$this->misurazioni,
                "codiceSeriale"=>$this->codiceSeriale,
                "posizione"=>$this->posizione
            ];


            return $a;


        }

        function toString(){    
            parent::toString();

            $test = "identificativo: " . $this->identificativo . " unitaDiMisura: " . $this->unitaDiMisura . " codiceSeriale: " . $this->codiceSeriale . " posizione: " . $this->posizione . "<br>";
            if($this->misurazioni){

                foreach($this->misurazioni as $data => $valore){

                    $test = "data: " . $data . " $valore: " . $valore. "<br>";
    
                }


            }
            
            return $test;


        }




    }


?>