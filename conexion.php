<?php
//datos de conexion
    function conectarse(){
        $enlace = mysqli_connect("localhost", "josue", "123456789");//servidor, user, password
        if(!($enlace)){
            echo "Error al conectar al servidor.";
            exit();
        }
        if(!mysqli_select_db($enlace, "clientes")){//seleccionas la base de datos
            echo"Error al seleccionar la base de datos.";
            exit();
        }
        return $enlace;
    }
?>