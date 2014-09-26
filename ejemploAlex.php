<?php
class Abuelo
{
    function __construct($name, $lastname) {
        $this->name= $name;
        $this->lastname = $lastname;
    }
    public $name;
    public $lastname;
    function obtName(){
}
}

class Padre extends Abuelo
{
    public $age;
}

class Hijo extends Padre
{
    public $cantDientes;
}

//--------------------------------------------------
//objeto->mostramela
$hola = "hola";
$abuelito2 = new Abuelo("pablo", "Romanin");

var_dump($abuelito2)
?>
