<?php
session_start();
require_once 'lib_sql.php';

if(isset($_POST['task']) && !empty($_POST['task'])){
    addTask($_SESSION['name'],$_POST['task']);
    header('Location: todo.php');
}
 else {
    header('Location: todo.php?error="invalid task name"');
}
?>
