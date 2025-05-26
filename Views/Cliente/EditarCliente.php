<?php

    include_once('../../Config/conexion.php');

    $id = $_REQUEST['Id'];

    $sql = "SELECT * FROM cliente WHERE id_cliente = '$id'";
    $query = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>CLIENTE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../static/css/cliente.css">
    <script src="https://kit.fontawesome.com/5b817a8a49.js" crossorigin="anonymous"></script>
   

  </head>
  <body>
   <div id="formulario">  
    <div id="cliente">
        <div>
        <img src="../../static/images/imagenDueño.jpg" style="width:100%" >
        <h2 style="color: #001e46; font-size: 30px; text-align: center;">Formulario de Registro Clientes</h2>
        <div class="container">
        <form action="../../Controllers/Cliente/Editar.php" method="POST">
            <input type="hidden" name="Id" value="<?php echo $fila['id_cliente']?>">
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre" name="Nombre" value="<?php echo  
                $fila['nombre']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido</label>
                <input type="text" class="form-control" placeholder="Apellido" name="Apellido" value="<?php echo  
                $fila['apellido']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Cedula</label>
                <input type="number" class="form-control" placeholder="Cedula" name="Cedula" value="<?php echo  
                $fila['cedula']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Dirección</label>
                <input type="text" class="form-control" placeholder="Direccion" name="Direccion" value="<?php echo  
                $fila['direccion']?>">
            </div>
            <div class="mb-3">
                <label class="form-check-label">Telefono</label>
                <input type="number" class="form-control" placeholder="Telefono" name="Telefono" value="<?php echo  
                $fila['telefono']?>">
            </div>
            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Editar Cliente</button>
                <a href="../Cliente/GestionCliente.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
   
 </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>