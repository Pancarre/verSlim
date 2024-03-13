<?php

  

    class Rilevatore implements JsonSerializable{

        private $identificativo;
        private $misurazioni = array();
        private $unitaDiMisura;
        private $codiceSeriale;
    
        function __construct($identificativo,$codiceSeriale,$unitaDiMisura){
            
            $this->identificativo = $identificativo;
            $this->codiceSeriale = $codiceSeriale;
            $this->unitaDiMisura = $unitaDiMisura;

            $this->addMisurazioni(strtotime("now"),123);
  
        }

        function setIdentificativo($str){

            $this->identificativo = $str;


        }
        
        function getIdentificativo(){

            return $this->identificativo;

        }

        function setCodiceSeriale($str){

            $this->codiceSeriale = $str;


        }

        function addMisurazioni($data, $valore){

            $this->misurazioni["$data"] = $valore;

        }

        function jsonSerialize(){

            $a = [
                "nome"=>$this->identificativo,
                "misurazioni"=>$this->misurazioni,
                "codiceSeriale"=>$this->codiceSeriale,
            ];

            return $a;

        }

        function toString(){

            $test = "identificativo: " . $this->identificativo . " unitaDiMisura: " . $this->unitaDiMisura . " codiceSeriale: " . $this->codiceSeriale . "<br>";
            if($this->misurazioni){

                foreach($this->misurazioni as $data => $valore){

                    $test .= "data: " . $data . " valore: " . $valore. "<br>";
    
                }


            }
            return $test;

        }


    }


?>