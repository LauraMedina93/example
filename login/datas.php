<?php
if(!isset($_SESSION)){
   session_start(); 
}
require 'lib_sql.php';

$tareas = array();
if ($_SESSION['name']){
    $tareas = getTasks($_SESSION['name']);
}
?>
