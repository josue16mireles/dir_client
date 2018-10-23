<?php
//datos de conexion
    function conectarse(){
        $enlace = mysqli_connect("localhost", "josue", "123456789");
        if(!($enlace)){
            echo "Error al conectar a la base de datos.";
            exit();
        }
        if(!mysqli_select_db($enlace, "clientes")){
            echo"Error al seleccionar la base de datos.";
            exit();
        }
        return $enlace;
    }
?>