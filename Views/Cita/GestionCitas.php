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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
 
    <div class="container bg-light p-3 border border-dark rounded">
       
    <a href="./AgregarCita.php" class="btn btn-danger">Agendar Cita</a>
        <a href="../index.php" class="btn btn-dark">Regresar</a>
        <br>
        <br>
        <h1>Lista de Veterinarios</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Fecha cita</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Veterinario</th>
                    <th scope="col">Mascota</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
        include ("../../Config/conexion.php");

        $sql = "SELECT c.id_cita,c.fecha_cita,concat(cl.nombre,' ',cl.apellido) AS cliente,concat(v.nombre,' ',v.apellido) AS veterinario, m.nombre_mascota, s.nombre_servicio  
        FROM cita c 
        LEFT JOIN cliente cl ON c.id_cliente=cl.id_cliente 
        LEFT JOIN veterinario v ON c.id_veterinario=v.id_veterinario 
        LEFT JOIN mascota m ON c.id_mascota=m.id_mascota 
        LEFT JOIN servicio s ON c.id_servicio=s.id_servicio";
      
        $query = mysqli_query($conexion , $sql);

        while ($fila = mysqli_fetch_array($query)) {
           ?>
                <tr>
                    <th scope="row"><?php echo $fila['id_cita']?></th>
                    <th scope="row"><?php echo $fila['fecha_cita']?></th>
                    <th scope="row"><?php echo $fila['cliente']?></th>
                    <th scope="row"><?php echo $fila['veterinario']?></th>
                    <th scope="row"><?php echo $fila['nombre_mascota']?></th>
                    <th scope="row"><?php echo $fila['nombre_servicio']?></th>
                    <th scope="row">
                        <a href="./EditarCita.php?Id=<?php echo $fila['id_cita']?>"
                            class="btn btn-warning">Editar</a>
                        <a href="../../Controllers/Cita/Eliminar.php?Id=<?php echo $fila['id_cita']?>"
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