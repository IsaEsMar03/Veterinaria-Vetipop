<?php
      include_once('../../Config/conexion.php');

    $Id = $_REQUEST['Id'];

    $sql = "DELETE FROM servicio WHERE id_servicio = '$Id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header("Location: ../../Views/Servicio/GestionServicios.php");
    }
    
?>