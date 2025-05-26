<?php 

include_once('../../Config/conexion.php');

    $id = $_POST['Id'];
    $nombreServicio = $_POST['NombreServicio'];
    $descripcion = $_POST['Descripcion'];
    $valorServicio = $_POST['ValorServicio'];
   $id_veterinario = $_POST['Veterinario'];

    $sql = "UPDATE servicio SET nombre_servicio='$nombreServicio', descripcion='$descripcion',valor_servicio='$valorServicio', id_veterinario='$id_veterinario' 
    WHERE id_servicio = '$id'";

    $query = mysqli_query($conexion,$sql);

    if ($query) {
        header("Location: ../../Views/Servicio/GestionServicios.php");
    }


?>