<?php

    include_once('../../Config/conexion.php');

    $id = $_REQUEST['Id'];

    $sql = "SELECT * FROM servicio WHERE id_servicio = '$id'";
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
    <link rel="stylesheet" href="../../static/css/servicios.css">
    <script src="https://kit.fontawesome.com/5b817a8a49.js" crossorigin="anonymous"></script>
   

  </head>
  <body>
   <div id="formulario">  
    <div id="cliente">
        <div>
        <img src="../../static/images/imagenServicio.jpeg" style="width:100%" >
        <h2 style="color: #001e46; font-size: 30px; text-align: center;">Formulario de Registro Servicio</h2>
        <div class="container">
        <form action="../../Controllers/Servicio/Editar.php" method="POST">
            <input type="hidden" name="Id" value="<?php echo $fila['id_servicio']?>">
            <div class="mb-3">
                <label class="form-label">Nombre servicio</label>
                <input type="text" class="form-control" placeholder="Nombre servicio" name="NombreServicio" value="<?php echo  
                $fila['nombre_servicio']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control" placeholder="Descripcion" name="Descripcion" value="<?php echo  
                $fila['descripcion']?>">
            </div>
            <div class="mb-3">
                <label class="form-check-label">Valor servicio</label>
                <input type="number" class="form-control" placeholder="Valor servicio" name="ValorServicio" value="<?php echo  
                $fila['valor_servicio']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Veterinario</label>
                <input type="number" class="form-control" placeholder="Veterinario" name="Veterinario" value="<?php echo  
                $fila['id_veterinario']?>">
            </div>
            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Editar Servicio</button>
                <a href="../Servicio/GestionServicios.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
   
 </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>