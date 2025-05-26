<?php 

include_once('../../Config/conexion.php');

    $id = $_POST['Id'];
    $nombreMedicamento = $_POST['NombreMedicamento'];
    $descripcion = $_POST['Descripcion'];
    $categoria = $_POST['Categoria'];
    $proveedor = $_POST['Proveedor'];
    $fechaMedicamento = $_POST['FechaMedicamento'];
    $fechaVencimiento = $_POST['FechaVencimiento'];

    $sql = "UPDATE medicamento SET nombre_medicamento='$nombreMedicamento', descripcion='$descripcion',categoria='$categoria', proveedor='$proveedor', fecha_medicamento='$fechaMedicamento',fecha_vencimiento='$fechaVencimiento' 
    WHERE id_medicamento = '$id'";

    $query = mysqli_query($conexion,$sql);

    if ($query) {
        header("Location: ../../Views/Medicamento/GestionMedicamentos.php");
    }


?>