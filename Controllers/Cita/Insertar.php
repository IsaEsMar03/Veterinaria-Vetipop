<?php

include_once('../../Config/conexion.php');

$fecha = $_POST['FechaCita'];
$id_cliente = $_POST['Cliente'];
$id_veterinario = $_POST['Veterinario'];
$id_mascota = $_POST['Mascota'];
$id_servicio = $_POST['Servicio'];

$sql = "INSERT INTO cita(fecha_cita,id_cliente,id_veterinario,id_mascota,id_servicio) VALUES ('$fecha','$id_cliente','$id_veterinario','$id_mascota','$id_servicio')";

$query = mysqli_query($conexion,$sql);

if ($query === TRUE) {
    header("Location: ../../Views/Cita/GestionCitas.php");
}
