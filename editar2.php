<?php
    //nombre_funcion(parametros) datos recibidos desde editar c_id, c_nombre, etc es lo que esta en el tag name="" en el form de editar.php
    actualizar_cliente($_POST['c_id'],$_POST['c_nombre'], $_POST['c_direccion'], $_POST['c_telefono'], $_POST['c_celular'], $_POST['c_email'], $_POST['c_email2'], $_POST['c_relacionado'], $_POST['c_compania']);
    //las variables $c_id, $c_nom, etc contienen los datos respectivos↑↑↑
    function actualizar_cliente($c_id, $c_nom, $c_dir, $c_tel, $c_cel, $c_em, $c_em2, $c_rel, $c_com){
        include("conexion.php");
        $enlace = conectarse();
        //consulta que realiza la actualización, el campo nombre llevara los datos de la variable $c_nom, etc, todo esto según $c_id 
        $editar_c = mysqli_query ($enlace, "UPDATE directorio SET nombre='".$c_nom."', direccion='".$c_dir."', telefono='".$c_tel."', celular='".$c_cel."', email='".$c_em."', email2='".$c_em2."', relacionado='".$c_rel."', compania='".$c_com."' WHERE id='".$c_id."' ") or die ("Error al actualizar los datos".mysqli_error($enlace));
    }
?>
<script type="text/javascript">
    alert("Datos actualizados exitosamente!");//nos da un mensaje de js que nos confirma la actualización de datos
    window.location.href="directorio.php";//nos redirige a directorio.php
</script>