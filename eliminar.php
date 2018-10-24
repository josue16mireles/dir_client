<?php
    include("conexion.php");
    $enlace = conectarse();

    //al marcar el checkbox toma el id del registro de la DB lo pone en IdCliente y al presionar eliminar ejecuta el query
    if(@$_POST['btnEliminar']){
        foreach($_POST['IdCliente'] as $id){
            mysqli_query($enlace, 'DELETE FROM directorio WHERE id = '. $id);
        }
        header('Location: directorio.php');
    }
?>