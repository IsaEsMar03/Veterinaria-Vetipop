<?php 

include_once('../../Config/conexion.php');

    $id = $_POST['Id'];
    $nombreMascota = $_POST['NombreMascota'];
    $edad = $_POST['Edad'];
    $fechaNacimiento = $_POST['FechaNacimiento'];
    $raza = $_POST['Raza'];

    $sql = "UPDATE mascota SET nombre_mascota='$nombreMascota', edad='$edad',fecha_nacimiento='$fechaNacimiento', raza='$raza' 
    WHERE id_mascota = '$id'";

    $query = mysqli_query($conexion,$sql);

    if ($query) {
        header("Location: ../../Views/Mascota/GestionMascotas.php");
    }


?>