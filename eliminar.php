<?php
    include("conexion.php");
    $enlace = conectarse();

    //si presiona el boton eliminar
    if(@$_POST['btnEliminar']){
        foreach($_POST['IdCliente'] as $id){
            mysqli_query($enlace, 'DELETE FROM directorio WHERE id = '. $id);
        }
        header('Location: directorio.php');
    }
?>