<?php 

include_once('../../Config/conexion.php');

    $id_cita = $_POST['Id'];
    $fecha_cita = $_POST['FechaCita'];
    $cliente = $_POST['Cliente'];
    $veterinario = $_POST['Veterinario'];
    $mascota = $_POST['Mascota'];
    $servicio = $_POST['Servicio'];

    $sql = "UPDATE cita SET fecha_cita='$fecha_cita', id_cliente='$cliente',id_veterinario='$veterinario', id_mascota='$mascota', id_servicio='$servicio' 
    WHERE id_cita = '$id_cita'";

    $query = mysqli_query($conexion,$sql);

    if ($query) {
        header("Location: ../../Views/Cita/GestionCitas.php");
    }


?>