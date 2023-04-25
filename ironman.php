<?php
class SuperHeroe {
    public $name;
    public $color;
    Public $powers;

    public static $contador= 0;

    Public function __construct($name, $color){
        $this->name= $name;
        $this->color= $color;
        self::contar();
        echo "Construyo a $name\n";
    }

    public function lanzarLaser(){
        return "$this->name te ha lanzado lasers";
    }


    public static function contar(){
        self::$contador++;
    }

    public function getNumero(){
        return self::$contador;
    }

    public function volar(){
        return "$this->name se ha ido volando";
    }

    public function __destruct(){
        echo "Destruyo a $this->name\n";
        self::$contador--;
    }


}

$IronMan = new SuperHeroe("Iron Man", "rojo");
// $IronMan->name= "Iron man";
// $IronMan->color= "Rojo";
// $IronMan->powers= "volar, lanzar laser, inteligencia"





?>