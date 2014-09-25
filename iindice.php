<html>
    <head> <h2> Agregar un Nuevo Usuario</h2> </head>

<body>

    
    <?php

    function nuevoUsuario($usuarioNuevo) {
        $mysql = mysqli_connect("localhost", "admin", "admin", "todolist");
        $res2 = mysqli_query($mysql, "INSERT INTO `usuarios`(nombre) VALUES ('$usuarioNuevo')");

        echo 'Se agrego el usuario' . $res2['nombre'];
        if (!$res2) {
            echo mysqli_error($res2);
        }
    }

    function insertar($tareaNueva) {
        $mysql = mysqli_connect("localhost", "admin", "admin", "todolist");
        $res3 = mysqli_query($mysql, "INSERT INTO `tareas`(`nomTarea`, `estado`, `usuarioID`) VALUES ($nomTarea,$estado,$usuarioID)");
        $row = mysqli_fetch_assoc($res);
        if (!$res3) {
            echo 'La cagaste';
        }
    }

    nuevoUsuario('dario')
    ?>


</body>
</html>