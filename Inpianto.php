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

            $a1 = new RilevatoreDiTemperatura("123","23","43ygf");
            $a2 = new RilevatoreDiUmidita("25545thdf","432","t53tr");
            $a3 = new RilevatoreDiUmidita("25545t5uytjhfrhdf","2534","4232");
            $a4 = new RilevatoreDiTemperatura("rget216usd","214","tuy8h");

            $this->rilevatori = array($a1,$a2,$a3,$a4);

        }


        function getRilevatore($str){
            $array = array();
            foreach($this->rilevatori as $r){

                if(is_a($r,$str)){
                    $array[] = $r;
                }

            }
            $string="";

            foreach($array as $a){

                $string = $string . $a->toString();
            }
            return $string;
        }

        function getRilevatoreSpecifico($str,$id){
            $array = array();
            foreach($this->rilevatori as $r){

                if(is_a($r,$str)){
                    $array[] = $r;
                }

            }
            foreach($array as $a){

                if($a->getIdentificativo == $id){

                    return $a->toString();

                }

                else{

                    return "nessuno trovato";

                }
            }
            
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