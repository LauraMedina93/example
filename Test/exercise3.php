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

 
 
?>
