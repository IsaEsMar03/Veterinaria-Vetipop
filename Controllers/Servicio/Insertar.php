<?php

include_once('../../Config/conexion.php');

$nombreServicio = $_POST['NombreServicio'];
$descripcion = $_POST['Descripcion'];
$valorServicio = $_POST['ValorServicio'];
$id_veterinario = $_POST['Veterinario'];

$sql = "INSERT INTO servicio(nombre_servicio,descripcion,valor_servicio,id_veterinario) VALUES ('$nombreServicio','$descripcion','$valorServicio','$id_veterinario')";

$query = mysqli_query($conexion,$sql);

if ($query === TRUE) {
    header("Location: ../../Views/Servicio/GestionServicios.php");
}
