<?php

function guess($date)
{
  $today = date_create('now');
  $date1 = date_create($date);
  $today = date_timestamp_get($today); //$today to seconds
  $date1 = date_timestamp_get($date1); // $date1 to seconds
  $interval = ($today - $date1) / 60;
  return $interval;
}
//usage
 echo guess('10/09/2014 20:30');

 //Lo que se hace esta funcion en pasar por parametros una fecha,
 //luego crea una variable donde crea la fecha del mismo instante ($today).
 //Despues se crea ($date1), donde la fecha qe se crea es la que se pasa por parametro.
 //Despues se calcula el tiempo de $today en segundos y lo mismo para $date1.
 //Despues se calcula el intervalo del tiempo mediante la resta y division por segundos, 
 //por lo que retorna la fecha en minutos.
 
?>
