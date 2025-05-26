<?php

    include_once('../../Config/conexion.php');

    $id = $_REQUEST['Id'];

    $sql = "SELECT * FROM mascota WHERE id_mascota = '$id'";
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
    <link rel="stylesheet" href="../../static/css/mascota.css">
    <script src="https://kit.fontawesome.com/5b817a8a49.js" crossorigin="anonymous"></script>
   

  </head>
  <body>
   <div id="formulario">  
    <div id="cliente">
        <div>
        <img src="../../static/images/imagenMascota.jpg" style="width:100%" >
        <h2 style="color: #001e46; font-size: 30px; text-align: center;">Formulario de Registro Mascotas</h2>
        <div class="container">
        <form action="../../Controllers/Mascota/Editar.php" method="POST">
            <input type="hidden" name="Id" value="<?php echo $fila['id_mascota']?>">
            <div class="mb-3">
                <label class="form-label">Nombre Mascota</label>
                <input type="text" class="form-control" placeholder="Nombre mascota" name="NombreMascota" value="<?php echo  
                $fila['nombre_mascota']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Edad</label>
                <input type="text" class="form-control" placeholder="Edad" name="Edad" value="<?php echo  
                $fila['edad']?>">
            </div>
            <div class="mb-3">
                <label class="form-check-label">Fecha nacimiento</label>
                <input type="date" class="form-control" placeholder="Fecha nacimiento" name="FechaNacimiento" value="<?php echo  
                $fila['fecha_nacimiento']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Raza</label>
                <input type="text" class="form-control" placeholder="Raza" name="Raza" value="<?php echo  
                $fila['raza']?>">
            </div>
            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Editar Mascota</button>
                <a href="../Mascota/GestionMascotas.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
        </form>
    </div>
   
 </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>