<?php
    include("conexion.php"); //incluyes el archivo de conexión para tener acceso a la db 
    $enlace = conectarse(); //llamas la función de conexión
    //consulta que pide todos los datos de la tabla y los ordena de manera alfabetica en la columna nombre
    $sql_dir = mysqli_query($enlace, "SELECT * from directorio ORDER BY directorio . nombre ASC");
?>

<!doctype html>
<html>
  <head>	
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="utf-8">
    <title>Directorio de clientes</title>
    <!--enlace al archivo de CSS-->
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <!--link href="css/bootstrap.css" rel="stylesheet" type="text/css"-->
    <!--enlace online para iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
      <header>
        <div class="wrapper">
          <div class="logo">Seguros Mireles</div>
            <nav>
              <a href="registro.html">Agregar Cliente</a>
              <a ref="#">Buscar</a>
            </nav>
        </div>
      </header>

      <main>
        <div class="table-responsive-sm">
          <table class="table table-bordered" width="200"><!--indicamos la creación de una tabla-->
            <form action="eliminar.php" method="post"><!--creamos un formulario que hará lo que esta en eliminar.php a donde mandara datos por POST-->
              <thead>
                <th scope="col">NOMBRE</th>
                <th scope="col">DIRECCION</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">CELULAR</th>
                <th scope="col">EMAIL</th>
                <th scope="col">EMAIL</th>
                <th scope="col">RELACIONADO</th>
                <th scope="col">COMPAÑIA</th>
                <!--th><input type="submit" name="btnEliminar" value="Eliminar"/></th-->
                <th><button type="submit" name="btnEliminar"><i class="fa fa-trash"></i></button></th>
              </thead>
                <tbody style="cursor:pointer">    
                  <?php
                  //el array contiene los datos que solicitamos en la consulta, los pone en la variable para poder imprimirlos en pantalla
                  while($clientes = mysqli_fetch_array($sql_dir)){?>
                  <tr><!--onclick="seleccionar(this)" Esto va junto con el script para hacer la seleccion colorida--> 
                    <td><?php echo $clientes['nombre'] ?></td>
                    <td><?php echo $clientes['direccion'] ?></td>
                    <td><?php echo $clientes['telefono'] ?></td>
                    <td><?php echo $clientes['celular'] ?></td>
                    <td><?php echo $clientes['email'] ?></td>
                    <td><?php echo $clientes['email2'] ?></td>
                    <td><?php echo $clientes['relacionado'] ?></td>
                    <td><?php echo $clientes['compania'] ?></td>
                    <td><input type="checkbox" name="IdCliente[]" value="<?php echo $clientes['id']?>"/></td><!--checkbox permite seleccionar registros para eliminar-->
                    <!--td><a href="editar.php?idE='.$clientes['id'].'"><button type="button">Editar</button></a></td>
                    <td><a href='editar.php?idE=".$clientes['id']."'><button type='button'>Editar</button></a></td-->
                    <?php //echo"<td><a href='editar.php?idE=".$clientes['id']."'><button type='button'>Editar</button></a></td>"?>
                    <!--boton con enlace para editar el registro-->
                    <?php echo"<td><a href='editar.php?idE=".$clientes['id']."'><button type='button'><i class='fa fa-edit'></i></button></a></td>"?>
                  </tr>
                  <?php } mysqli_close($enlace);?>
                </tbody>
                <!--script>
                  function seleccionar(tr, value){
                    $(function(){
                      if($("#chk"+value).attr("checked") == "checked"){
                        $("#chk"+value).removeAttr("checked");
                        $(tr).css("background-color","FFFFFF");
                      } else {
                        $("#chk"+value).attr("checked","true");
                        $("#chk"+value).prop("checked","true");
                        $(tr).css("background-color","#BEDAE8");
                      }
                    })
                  }
                </script-->
            </form>
          </table>
        </div>
      </main>
  </body>
</html>