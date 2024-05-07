<?php
    require_once 'conexion.php'; // Conexion De La Base De Datos

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $matricula =  $_POST['matricula'];
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $semestre = $_POST['semestre'];

    $sql = "UPDATE registro SET matricula='$matricula', contrasena='$contrasena', nombre='$nombre', correo='$correo', celular='$celular', semestre='$semestre' WHERE id='$id'";

    $query = mysqli_query($conectar, $sql);
    if ($query) {
        header("Location: crud.php");
    }
?>