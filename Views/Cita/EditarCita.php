<?php

    include_once('../../Config/conexion.php');

    $id = $_REQUEST['Id'];

    $sql = "SELECT * FROM cita WHERE id_cita = '$id'";
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
    <link rel="stylesheet" href="../../static/css/Citas.css">
    <script src="https://kit.fontawesome.com/5b817a8a49.js" crossorigin="anonymous"></script>
   

  </head>
  <body>
  <h1 class="bg-warning p-2 text-white text-center">Re-Agendamiento de Citas</h1>
    <br>
   <div id="formulario">  
    <div id="cliente">
        <div>
        <img src="../../static/images/imagenCita.jpg" style="width:100%" >
        <h2 style="color: #001e46; font-size: 30px; text-align: center;">Formulario de Registro Veterinario</h2>
        
        <div class="container">
        <form action="../../Controllers/Cita/Editar.php" method="POST">
            <input type="hidden" name="Id" value="<?php echo $fila['id_cita']?>">
            <div class="mb-3">
                <label class="form-label">Fecha cita</label>
                <input type="text" class="form-control" placeholder="Fecha cita" name="FechaCita" value="<?php echo  
                $fila['fecha_cita']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Cliente</label>
                <input type="text" class="form-control" placeholder="Cliente" name="Cliente" value="<?php echo  
                $fila['id_cliente']?>">
            </div>
            <div class="mb-3">
                <label class="form-check-label">Veterinario</label>
                <input type="number" class="form-control" placeholder="Veterinario" name="Veterinario" value="<?php echo  
                $fila['id_veterinario']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Mascota</label>
                <input type="number" class="form-control" placeholder="Mascota" name="Mascota" value="<?php echo  
                $fila['id_mascota']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Servicio</label>
                <input type="number" class="form-control" placeholder="Servicio" name="Servicio" value="<?php echo  
                $fila['id_servicio']?>">
            </div>
            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Editar Servicio</button>
                <a href="../Cita/GestionCitas.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
   
 </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>