<?php

  

    class Rilevatore implements JsonSerializable{

        private $identificativo;
        private $misurazioni = array();
        private $unitaDiMisura;
        private $codiceSeriale;
    
        function __construct($identificativo,$codiceSeriale){
            
            $this->identificativo = $identificativo;
            $this->codiceSeriale = $codiceSeriale;

            if($identificativo == "umidità"){

                $this->unitaDiMisura = "%";

            }

            if($identificativo == "temperatura"){

                $this->unitaDiMisura = "°C";

            }

            $this->addMisurazioni(strtotime("now"),123);
  
        }

        function setIdentificativo($str){

            $this->identificativo = $str;


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

                    $test = "data: " . $data . " valore: " . $valore. "<br>";
    
                }


            }
            return $test;

        }


    }


?>