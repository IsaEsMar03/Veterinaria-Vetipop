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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
 
    <div class="container bg-light p-3 border border-dark rounded">
       
    <a href="./AgregarMascota.php" class="btn btn-danger">Agregar Mascota</a>
        <a href="../index.php" class="btn btn-dark">Regresar</a>
        <br>
        <br>
    <h1>Lista de Mascotas</h1>
    <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre mascota</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Fecha nacimiento</th>
                    <th scope="col">Raza</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
        include ("../../Config/conexion.php");

        $sql = "SELECT * FROM mascota";
        $query = mysqli_query($conexion , $sql);

        while ($fila = mysqli_fetch_array($query)) {
           ?>
                <tr>
                    <th scope="row"><?php echo $fila['id_mascota']?></th>
                    <th scope="row"><?php echo $fila['nombre_mascota']?></th>
                    <th scope="row"><?php echo $fila['edad']?></th>
                    <th scope="row"><?php echo $fila['fecha_nacimiento']?></th>
                    <th scope="row"><?php echo $fila['raza']?></th>
                    <th scope="row">
                        <a href="./EditarMascota.php?Id=<?php echo $fila['id_mascota']?>"
                            class="btn btn-warning">Editar</a>
                        <a href="../../Controllers/Mascota/Eliminar.php?Id=<?php echo $fila['id_mascota']?>"
                            class="btn btn-danger">Eliminar</a>
                    </th>
                </tr>
                <?php   
        }
    ?>

            </tbody>
        </table>


    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>