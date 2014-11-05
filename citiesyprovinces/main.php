<?php
require_once '..\bootstrap_1.php';


use citiesyprovinces\City;
use citiesyprovinces\Province;

$ctes = new Province('Corrientes');
$chaco = new Province('Chaco');

$chaco->setName(new City('Resistencia', 3500));
$chaco->setName(new City('Saenz Peña', 3503));
$chaco->setName(new City('Avia Terai', 3503));
$chaco->setName(new City('Las Palmas', 3400));
$chaco->setName(new City('Castelli', 3508));

$salida= array();

if ($_GET['province'] == 'Chaco'){
    foreach ($chaco->getCities() as $cha) {
        $salida[] = $cha->getName();
} 
} 
header('content-type: application/json');
print json_encode($salida);
?>