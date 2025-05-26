<?php 

include_once('../../Config/conexion.php');

    $id = $_POST['Id'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $cedula = $_POST['Cedula'];
    $direccion = $_POST['Direccion'];
    $telefono = $_POST['Telefono'];

    $sql = "UPDATE veterinario SET nombre='$nombre', apellido='$apellido',cedula='$cedula', direccion='$direccion',telefono='$telefono' 
    WHERE id_veterinario = '$id'";

    $query = mysqli_query($conexion,$sql);

    if ($query) {
        header("Location: ../../Views/Veterinario/GestionVeterinarios.php");
    }


?>