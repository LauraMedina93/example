<?php
session_start();

if(isset ($_SESSION ['counter'])){
    $_SESSION ['counter'] += 1 ;
} else {
        $_SESSION['counter'] = 0;
    }
    echo 'El valor del contador es: '.$_SESSION['counter'];
?>
