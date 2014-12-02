<?php

        function nuevoUsuario($usuarioNuevo) {
            $mysql = mysqli_connect("localhost", "admin", "admin", "todolist");
            $res2 = mysqli_query($mysql, "INSERT INTO `usuarios`(nombre) VALUES ('$usuarioNuevo')");
              
            echo 'Se agrego el usuario'.$res2['nombre'];
            if (!$res2){
            echo mysqli_error($mysql);
            }
        }
       
        function insertar($nomTarea,$estado,$usuarioID) {
            $mysql = mysqli_connect("localhost", "admin", "admin", "todolist");
            $res3 = mysqli_query($mysql, "INSERT INTO `tareas`(`nomTarea`, `estado`, `usuarioID`) VALUES ('$nomTarea','$estado',$usuarioID)");
           
            if (!$res3){
                echo mysqli_error($mysql);
;
            }
            
        }
        
  
        nuevoUsuario('laura');
        insertar('Crear funcion','en proceso',2)
?>
