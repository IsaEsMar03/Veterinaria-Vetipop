<?php

    include_once('../../Config/conexion.php');

    $id = $_REQUEST['Id'];

    $sql = "SELECT * FROM medicamento WHERE id_medicamento = '$id'";
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
    <link rel="stylesheet" href="../../static/css/medicamentos.css">
    <script src="https://kit.fontawesome.com/5b817a8a49.js" crossorigin="anonymous"></script>
   

  </head>
  <body>
  <h1 class="bg-warning p-2 text-white text-center">Editar Medicamento!</h1>
    <br>
   <div id="formulario">  
    <div id="cliente">
        <div>
        <img src="../../static/images/imagenVeterinario.jpg" style="width:100%" >
        <h2 style="color: #001e46; font-size: 30px; text-align: center;">Formulario de Registro Veterinario</h2>
        
        <div class="container">
        <form action="../../Controllers/Medicamento/Editar.php" method="POST">
            <input type="hidden" name="Id" value="<?php echo $fila['id_medicamento']?>">
            <div class="mb-3">
                <label class="form-label">Nombre medicamento</label>
                <input type="text" class="form-control" placeholder="Nombre medicamento" name="NombreMedicamento" value="<?php echo  
                $fila['nombre_medicamento']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control" placeholder="Descripcion" name="Descripcion" value="<?php echo  
                $fila['descripcion']?>">
            </div>
            <div class="mb-3">
                <label class="form-check-label">Categoria</label>
                <input type="text" class="form-control" placeholder="Categoria" name="Categoria" value="<?php echo  
                $fila['categoria']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Proveedor</label>
                <input type="text" class="form-control" placeholder="Proveedor" name="Proveedor" value="<?php echo  
                $fila['proveedor']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha medicamento</label>
                <input type="date" class="form-control" placeholder="Fecha medicamento" name="FechaMedicamento" value="<?php echo  
                $fila['fecha_medicamento']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha vencimiento</label>
                <input type="date" class="form-control" placeholder="Fecha vencimiento" name="FechaVencimiento" value="<?php echo  
                $fila['fecha_vencimiento']?>">
            </div>
            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Editar Medicamento</button>
                <a href="../Medicamento/GestionMedicamentos.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
   
 </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>