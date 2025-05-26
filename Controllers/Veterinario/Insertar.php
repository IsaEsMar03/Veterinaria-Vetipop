<?php

include_once('../../Config/conexion.php');

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$cedula = $_POST['Cedula'];
$direccion = $_POST['Direccion'];
$telefono = $_POST['Telefono'];

$sql = "INSERT INTO veterinario(nombre,apellido,cedula,direccion,telefono) VALUES ('$nombre','$apellido','$cedula','$direccion','$telefono')";

$query = mysqli_query($conexion,$sql);

if ($query === TRUE) {
    header("Location: ../../Views/Veterinario/GestionVeterinarios.php");
}
