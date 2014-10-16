<?php

require_once '..\bootstrap.php';

use citiesyprovinces\City;
use citiesyprovinces\Province;

$Provinces = array();
$Provinces = new Province('Chaco');
$Provinces = new Province('Corrientes');

$ctes = new Province('Corrientes');
$ctes->addCity(new City('Corrientes', 3400));
$ctes->addCity(new City('Goya', 3400));
$ctes->addCity(new City('Paso de la Patria', 3400));
$ctes->addCity(new City('Empedrado', 3400));
$ctes->addCity(new City('Mercedes', 3400));

$chaco = new Province('Chaco');
$chaco->addCity(new City('Resistencia', 3500));
$chaco->addCity(new City('Barranqueras', 3500));
$chaco->addCity(new City('Villa Angela', 3500));
$chaco->addCity(new City('San Martin', 3500));
$chaco->addCity(new City('Castelli', 3500));

$output = array();
if ($_GET['province'] == 'Chaco'){
    foreach ($chaco->getCities() as $city){
        
    }
}

?>