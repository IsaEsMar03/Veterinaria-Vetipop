<?php

include_once('../../Config/conexion.php');

$nombreMascota = $_POST['NombreMascota'];
$edad = $_POST['Edad'];
$fechaNacimiento = $_POST['FechaNacimiento'];
$raza = $_POST['Raza'];

$sql = "INSERT INTO mascota(nombre_mascota,edad,fecha_nacimiento,raza) VALUES ('$nombreMascota','$edad','$fechaNacimiento','$raza')";

$query = mysqli_query($conexion,$sql);

if ($query === TRUE) {
    header("Location: ../../Views/Mascota/GestionMascotas.php");
}
