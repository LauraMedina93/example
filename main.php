<?php
require_once 'oop/bootstrap.php';

use Graphics\Figure;
use Graphics\Circle;
use Graphics\Rectangle;
Figure::createCanvas(500,500);

$figures = array ();
$figures[] = new Circle();
$figures[] = new Rectangle();

foreach ($figures as $fig){
    $fig->draw();
}
header('Content-type: image/png');
Figure::renderCanvas();
?>
