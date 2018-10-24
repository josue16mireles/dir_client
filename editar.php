<?php
    //función para el llenado de los input al presionar el botón de editar
    $cons_edit = Con_client($_GET['idE']);//idE es la variable traida desde directorio la cual contiene el id del registro en la tabla de la DB

    function Con_client($idE_client){
        include("conexion.php");
        $enlace = conectarse();
        //consulta que selecciona todos los datos que contiene el id
        $sql_con_client = mysqli_query($enlace, 'SELECT * FROM directorio WHERE id = '. $idE_client);
        //el array contiene los datos de la consulta, aquí no se usa en un while porque solo se inspecciona un registro y no toda la tabla
        $row = mysqli_fetch_assoc($sql_con_client);
        return[
            $row['id'],
            $row['nombre'],
            $row['direccion'],
            $row['telefono'],
            $row['celular'],
            $row['email'],
            $row['email2'],
            $row['relacionado'],
            $row['compania']
        ];
    }
?>

<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8">
        <title>Editar datos de cliente</title>
        <link href="css/estilos.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header>
            <div class="wrapper">
                <div class="logo">Seguros Mireles</div>
                <nav>
                    <a href="main.html">Polizas</a>
                    <a href="directorio.php">Directorio</a>
                </nav>
            </div>
        </header>

        <form action="editar2.php" method="post">
            <div>
                <!--este input lleva el id a editar2.php al hacer clic de esta manera al realizar el update solo se afecta al registro con ese id-->
                <input type="hidden" name="c_id" value="<?php echo $cons_edit[0]?>"/>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <!--la variable cons_edit llama a la función entre [] se pone la posición que queremos llamar del arreglo-->
                <input type="text"class="form-control" id="nombre" name="c_nombre" value="<?php echo $cons_edit[1]?>"/>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="c_direccion" value="<?php echo $cons_edit[2]?>"/>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="c_telefono" value="<?php echo $cons_edit[3]?>"/>
            </div>
            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" name="c_celular" value="<?php echo $cons_edit[4]?>"/>
            </div>
            <div class="form-group">
                <label for="mail">E-mail:</label>
                <input type="text" class="form-control" id="mail" name="c_email" value="<?php echo $cons_edit[5]?>"/>
            </div>
            <div class="form-group">
                <label for="email2">E-mail:</label>
                <input type="text" class="form-control" id="email2" name="c_email2" value="<?php echo $cons_edit[6]?>"/>
            </div>
            <div class="form-group">
                <label for="relacionado">Relacionado:</label>
                <input type="text" class="form-control" id="relacionado" name="c_relacionado" value="<?php echo $cons_edit[7]?>"/>
            </div>
            <div class="form-group">
                <label for="relacionado">Compañia:</label>
                <input type="text" class="form-control" id="compania" name="c_compania" value="<?php echo $cons_edit[8]?>"/>
            </div>
            <div>
                <button type="submit" class="btn">Editar</button>
                <button class="btn"><a href="directorio.php">Cancelar</a></button>
            </div>
        </form>
    </body>
</html>