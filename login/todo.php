<!DOCTYPE html>
<html>
<?php session_start();?>
<?php require 'datas.php'?>
<head>

  <meta charset="UTF-8">

  <title>Tareas</title>

  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
    
<?php if (isset($_SESSION['name']) && isset($_SESSION['pass'])):?>
<div id="logmsk" style="display: block;">
    
    <div id="userbox">
        <h1 accesskey="index.php" id="signup" style="background-color: rgb(118, 171, 219); background-position: initial initial; background-repeat: initial initial;">Lista de Tareas ♦ <?php echo '<strong>'.$_SESSION['name'].'</strong>';?> ♦</h1>
        <form action="addTask.php" method="POST" id="form-login">
            <div class="form-group">
              <input id="task" class="inline-input" name="task" placeholder="Nueva Tarea" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">
               <button class="inline-button">Agregar Tarea</button>
            </div>
        </form>
        <form action="logout.php" method="POST" id="salir">
            <button class="salida">Salir</button>
        </form>
        <ul>
            <?php foreach ($tareas as $tarea ):?>
            <li> <?php echo $tarea['nomTarea']?> </li>
            <?php endforeach?>
                   
       </ul>
    </div>
</div>
<?php else: ?>
<?php Header('Location: index.php')?>
<?php endif; ?>
</body>

</html>
