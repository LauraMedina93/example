<?php
session_start();
require_once 'lib_sql.php';

if(!isset($_SESSION['cantIntento'])){
    $_SESSION['cantIntento']= 0;
} 
if ($_SESSION['cantIntento'] <= 3){

    if(isset($_POST['name']) && isset($_POST['password']) && (!empty($_POST['name']) && !empty($_POST['password']))) {
    $user = getUser($_POST['name']);
        if(!is_null($user)&& $user['password'] == md5($_POST['password'])){
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['pass'] = $_POST['password'];
            Header('Location: todo.php');
            }else{
                $_SESSION['cantIntento'] +=1;
                header('Location: index.php?error=password or user wrong');
        }
    }else {
        Header('Location: index.php?error=name or password incorrect');
    }     
}  else {
    header('Location: index.php?error=Demasiados_Intentos');
}   
  
?>