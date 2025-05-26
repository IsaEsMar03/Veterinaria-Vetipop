<?php
      include_once('../../Config/conexion.php');

    $Id = $_REQUEST['Id'];

    $sql = "DELETE FROM mascota WHERE id_mascota = '$Id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header("Location: ../../Views/Mascota/GestionMascotas.php");
    }
    
?>