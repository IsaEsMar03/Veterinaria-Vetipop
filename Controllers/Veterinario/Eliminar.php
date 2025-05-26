<?php
      include_once('../../Config/conexion.php');

    $Id = $_REQUEST['Id'];

    $sql = "DELETE FROM veterinario WHERE id_veterinario = '$Id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header("Location: ../../Views/Veterinario/GestionVeterinarios.php");
    }
    
?>