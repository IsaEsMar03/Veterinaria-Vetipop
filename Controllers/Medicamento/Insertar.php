<?php

include_once('../../Config/conexion.php');

$nombreMedicamento = $_POST['NombreMedicamento'];
$descripcion = $_POST['Descripcion'];
$categoria = $_POST['Categoria'];
$proveedor = $_POST['Proveedor'];
$fechaMedicamento = $_POST['FechaMedicamento'];
$fechaVencimiento = $_POST['FechaVencimiento'];

$sql = "INSERT INTO medicamento(nombre_medicamento,descripcion,categoria,proveedor,fecha_medicamento,fecha_vencimiento) 
VALUES ('$nombreMedicamento','$descripcion','$categoria','$proveedor','$fechaMedicamento','$fechaVencimiento')";

$query = mysqli_query($conexion,$sql);

if ($query === TRUE) {
    header("Location: ../../Views/Medicamento/GestionMedicamentos.php");
}
