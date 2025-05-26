<?php
      include_once('../../Config/conexion.php');

    $Id = $_REQUEST['Id'];

    $sql = "DELETE FROM cliente WHERE id_cliente = '$Id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header("Location: ../../Views/Cliente/GestionClientes.php");
    }
    
?>