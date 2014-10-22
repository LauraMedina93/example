<?php

require_once '..\bootstrap_1.php';

use citiesyprovinces\City;
use citiesyprovinces\Province;

$Provinces = array();
$Provinces = new Province('Chaco');
$Provinces = new Province('Corrientes');

$ctes = new Province('Corrientes');
$ctes->setName(new City('Corrientes', 3400));
$ctes->setName(new City('Mercedes', 3500));
$ctes->setName(new City('Paso de la Patria', 3600));
$ctes->setName(new City('Empedrado', 3450));
$ctes->setName(new City('Curuzú Cuatia', 3490));



$chaco = new Province('Chaco');
$chaco->setName(new City('Resistencia', 3500));
$chaco->setName(new City('Saenz Peña', 3503));
$chaco->setName(new City('Avia Terai', 3503));
$chaco->setName(new City('Las Palmas', 3400));
$chaco->setName(new City('Castelli', 3508));

$output = array();
    if (isset($_GET['province']) == 'Chaco'){
        foreach ($chaco->getCities() as $city){
        $output[] = $city->getName();}
    }elseif (isset($_GET['province']) == 'Corrientes') {
        foreach ($ctes->getCities() as $Ccity){
            $output[] = $Ccity->getName();
        }
    }
    
header('content-type: application/json');
print json_encode($output);
?>