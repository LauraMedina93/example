<!DOCTYPE html>
<html>
<?php session_start()?>
<head>

  <meta charset="UTF-8">

  <title>Inicio de Sesión</title>

  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
    
<?php if (!isset($_SESSION['name']) || !isset($_SESSION['pass'])):?>
<div id="logmsk" style="display: block;">
    <div id="userbox">
        <?php if (isset($_GET['error'])):?>
        <p style="margin: 10px; color: red; text-align: center;"> Usuario o Password incorrecta  </p>
        <?php endif?>
        <h1 id="signup" style=" background-color: rgb(112, 120, 119); background-position: initial initial; background-repeat: initial initial;">☺ Iniciar Sesión ☺</h1>
        <form action="login.php" method="POST" id="form-login">
            <input id="name" name="name" placeholder="Usuario" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">
            <input id="pass" name="password" type="password" placeholder="Password" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">
            <input type="submit" id="signupb" style="cursor: default; text-align: center" value="Ingresar"/>
        </form>
        <a id="login_botton" href="register.php" class="signup">Sign Up</a>
    </div>
    <script src="js/index.js"></script>
</div>
<?php else: ?>
<?php Header('Location: todo.php');?>
<?php endif; ?>
    
</body>

</html>
