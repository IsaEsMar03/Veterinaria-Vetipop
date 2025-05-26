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
   <div id="formulario">  
    <div id="cliente">
        <div>
        <img src="../../static/images/imagenMedicamento.jpg" style="width:100%" >
        <h2 style="color: #001e46; font-size: 30px; text-align: center;">Formulario de Registro Medicamento</h2>
        <div class="container">
        <form action="../../Controllers/Medicamento/Insertar.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nombre medicamento" name="NombreMedicamento">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Descripcion" name="Descripcion">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Categoria" name="Categoria">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Proveedor" name="Proveedor">
            </div>
            <div class="mb-3">
            <label class="form-label">Fecha medicamento</label>
                <input type="date" class="form-control" placeholder="Fecha medicamento" name="FechaMedicamento">
            </div>
            <div class="mb-3">
            <label class="form-label">Fecha vencimiento</label>
                <input type="date" class="form-control" placeholder="Fecha vencimiento" name="FechaVencimiento">
            </div>
            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Agregar Medicamento</button>
                <a href="./GestionMedicamentos.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
    </div>
   
 </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>