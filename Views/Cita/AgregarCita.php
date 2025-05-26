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
   <div id="formulario">  
    <div id="cliente">
    <div>
        <img src="../../static/images/imagenCita.jpg" style="width:100%" >
        <h2 style="color: #001e46; font-size: 30px; text-align: center;">Agendamiento Citas</h2>
        <div class="container">
  
        <form action="../../Controllers/Cita/Insertar.php" method="POST">
            <div class="mb-3">
            <label class="form-check-label">Fecha cita</label>
                <input type="date" class="form-control" placeholder="Fecha cita" name="FechaCita">
            </div>
            <div class="mb-3">
            <label class="form-check-label">Seleccionar cliente</label>
                <input type="text" class="form-control" placeholder="Cliente" name="Cliente">
            </div>
            <div class="mb-3">
            <label class="form-check-label">Asignar veterinario</label>
                <input type="text" class="form-control" placeholder="Veterinario" name="Veterinario">
            </div>
            <div class="mb-3">
            <label class="form-check-label">Seleccionar mascota</label>
                <input type="text" class="form-control" placeholder="Mascota" name="Mascota">
            </div>
            <div class="mb-3">
            <label class="form-check-label">Seleccionar servicio</label>
                <input type="text" class="form-control" placeholder="Servicio" name="Servicio">
            </div>
            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Agregar Cita</button>
                <a href="./GestionCitas.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
   
 </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>