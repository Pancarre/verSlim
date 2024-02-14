<?php

require_once("./Alunno.php");

class Classe{

    private $sezione;
    private $listaAlunni = array();

    function __construct($sezione) {
        $this->sezione = $sezione;
        $a1 = new Alunno("davide", "Xie", 20);
        $a2 = new Alunno("filippo", "Marinai", 13);
        $a3 = new Alunno("giovanni", "Brussi", 18);
        $this->listaAlunni = array($a1, $a2, $a3);
    }


    function getAlunno($name){
        $string = $name;
        $text = "";

        foreach ($this->listaAlunni as $a) {
            if($a->get_nome() == $name){
                $text = $text . $a->toString();
            }
        }

        if($text == "")
            return "Alunno non trovato";

        return $text;
    }

    function set_sezione($nome) {
        $this->sezione = $nome;
    }

    function get_sezione() {
        return $this->sezione;
    }

    function toString() {

        $text = "";

        foreach ($this->listaAlunni as $a) {
            $text = $text . $a->toString();
        }

        return $text;
    }

}

?>