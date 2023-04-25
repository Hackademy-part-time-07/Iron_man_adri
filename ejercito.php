<?php
require_once "ironman.php";

class Ejercito extends SuperHeroe{
    public $name;
    public $members;

    public function __construct($name, $color, $members){
        parent::__construct($name , $color);
        $this->name= $name;
        $this->color= $color;
        $this->members= $members;
        parent::contar();
    }

    public function matar(){
        return "Jhon Wick te ha matado";
    }
}

$soldado= new Ejercito("Jhon Wick", "negro", 2);




echo $soldado->getNumero()."\n";






?>