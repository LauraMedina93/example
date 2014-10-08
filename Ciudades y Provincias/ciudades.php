<?php

class Ciudades {

    protected $nombre;
  

    public function __construct() {
        $this->nombre = '';       
    }


    public function setCiudad($nomCiudad) {
        $this->nombre = $nomCiudad;
    }

    public function getCiudades(){
        return $this->nombre;
    }
}

class Provincias {

    protected $nomProv;
    protected $listaProv;

    public function __construct() {
        $this->nomProv = '';
        $this->listaProv = array();
    }

    public function getList() {
        echo 'Las ciudades que pertenecen a la provincia de '.'<strong>'.$this->nomProv.'</strong>'.' son:'.'<br>';
    }

    public function setProv($nomProvincia) {
        $this->nomProv = $nomProvincia;
        return $this;
    }
    public function belongTo(Ciudades $prov) {
        $this->listaProv[] = $prov;
        return $prov;
        
    }
}



//---

$city1 = new Ciudades();
$city1->setCiudad('Resistencia');
$city1->setCiudad('Bqeras');
$city1->getCiudades();
$prov1= new Provincias();
$prov1->setProv('Chaco');
$prov1->belongTo($city1);
$prov1->getList();
?>
