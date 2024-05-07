<?php
    require "conexion.php";

    $id = $_GET['id'];

    $sql ="DELETE FROM registro WHERE id='$id'";
    $resultado = mysqli_query($conectar, $sql);

    if($resultado) {
        header("location: crud.php");
    } else {
        echo "No se pudo eliminar los datos";
    }
?>