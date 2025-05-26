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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
 
    <div class="container bg-light p-3 border border-dark rounded">
       
    <a href="./AgregarMedicamento.php" class="btn btn-danger">Agregar Medicamento</a>
        <a href="../index.php" class="btn btn-dark">Regresar</a>
        <br>
        <br>
    <h1>Lista de Medicamentos</h1>
    <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre medicamento</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Fecha medicamento</th>
                    <th scope="col">Fecha vencimiento</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
        include ("../../Config/conexion.php");

        $sql = "SELECT * FROM medicamento";
      // $sql = "SELECT s.nombre_servicio, v.nombre FROM servicio s LEFT JOIN veterinario v ON s.id_veterinario=v.id_veterinario";
       // $sql = "SELECT s.id_servicio,s.nombre_servicio,s.descripcion,s.valor_servicio, concat(v.nombre,' ',v.apellido) AS veterinario FROM servicio s LEFT JOIN veterinario v ON s.id_veterinario=v.id_veterinario";
        $query = mysqli_query($conexion , $sql);

        while ($fila = mysqli_fetch_array($query)) {
           ?>
                <tr>
                    <th scope="row"><?php echo $fila['id_medicamento']?></th>
                    <th scope="row"><?php echo $fila['nombre_medicamento']?></th>
                    <th scope="row"><?php echo $fila['descripcion']?></th>
                    <th scope="row"><?php echo $fila['categoria']?></th>
                    <th scope="row"><?php echo $fila['proveedor']?></th>
                    <th scope="row"><?php echo $fila['fecha_medicamento']?></th>
                    <th scope="row"><?php echo $fila['fecha_vencimiento']?></th>
                    <th scope="row">
                        <a href="./EditarMedicamento.php?Id=<?php echo $fila['id_medicamento']?>"
                            class="btn btn-warning">Editar</a>
                        <a href="../../Controllers/Medicamento/Eliminar.php?Id=<?php echo $fila['id_medicamento']?>"
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