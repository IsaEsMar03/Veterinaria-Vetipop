<?php
      include_once('../../Config/conexion.php');

    $Id = $_REQUEST['Id'];

    $sql = "DELETE FROM medicamento WHERE id_medicamento = '$Id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header("Location: ../../Views/Medicamento/GestionMedicamentos.php");
    }
    
?>