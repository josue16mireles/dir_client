<?php
    actualizar_cliente($_POST['c_id'],$_POST['c_nombre'], $_POST['c_direccion'], $_POST['c_telefono'], $_POST['c_celular'], $_POST['c_email'], $_POST['c_email2'], $_POST['c_relacionado'], $_POST['c_compania']);

    function actualizar_cliente($c_id, $c_nom, $c_dir, $c_tel, $c_cel, $c_em, $c_em2, $c_rel, $c_com){
        include("conexion.php");
        $enlace = conectarse();

        $editar_c = mysqli_query ($enlace, "UPDATE directorio SET nombre='".$c_nom."', direccion='".$c_dir."', telefono='".$c_tel."', celular='".$c_cel."', email='".$c_em."', email2='".$c_em2."', relacionado='".$c_rel."', compania='".$c_com."' WHERE id='".$c_id."' ") or die ("Error al actualizar los datos".mysqli_error($enlace));

    }
?>
<script type="text/javascript">
    alert("Datos actualizados exitosamente!");
    window.location.href="directorio.php";
</script>