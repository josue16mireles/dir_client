<?php
    include("conexion.php");
    $enlace = conectarse();

    //varables, nombre de los input
    $c_nombre = $_POST ['c_nombre'];
    $c_direccion = $_POST ['c_direccion'];
    $c_telefono = $_POST ['c_telefono'];
    $c_celular = $_POST ['c_celular'];
    $c_email = $_POST ['c_email'];
    $c_email2 = $_POST ['c_email2'];
    $c_relacionado = $_POST ['c_relacionado'];
    $c_compania = $_POST ['c_compania'];

    
    //consulta para evitar registros duplicados
    $reg_not_duplicate = "SELECT * from directorio WHERE nombre = '$c_nombre'";
    $result = mysqli_query($enlace, $reg_not_duplicate);
    if(mysqli_num_rows($result)>0){
        //si el resultado es mayor a cero imprimimos que el usuario ya existe con js
        echo '<script type="text/javascript" >
        alert("El cliente ya fue registrado"); //te mostrara el mensaje que quieras
        window.location="registro.html"; //te redireccionara a la pagina que deseas
    </script> ';
    } else {
        //si no hay resultados ingresamos el cliente a la base de datos con el sig. query en rojo los campos de la tabla en azul las variables
        $registrar_c = "INSERT INTO directorio (nombre, direccion, telefono, celular, email, email2, relacionado, compania) VALUES ('$c_nombre', '$c_direccion', '$c_telefono', '$c_celular', '$c_email', '$c_email2', '$c_relacionado','$c_compania')";
        if(mysqli_query($enlace, $registrar_c)){
            //header("Location: registro.html");
            echo '<script type="text/javascript">
            window.location="registro.html";
            alert("Cliente registrado con exito");
            </script>';
        } else {
            echo "Error al registrar el cliente: " . $registrar_c . "" . mysqli_error($enlace);
        }
    }
    $enlace->close();   
?>