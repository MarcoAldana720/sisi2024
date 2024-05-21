<?php
    require "conexion.php";

    $matricula = $_POST["reg_mat"];
    $contrasena = $_POST["reg_con"];
    $nombre = $_POST["reg_nom"];
    $correo = $_POST["reg_cor"];
    $celular = $_POST["reg_cel"];
    $semestre = $_POST["reg_sem"];

    $insertar = "INSERT INTO registro (reg_mat, reg_con, reg_nom, reg_cor, reg_cel, reg_sem) VALUES ('$matricula', '$contrasena', '$nombre', '$correo', '$celular', '$semestre')";

    $query = mysqli_query($conectar, $insertar);

    if($query) {
        echo '
            <script>
                alert("SE GUARDO CORRECTAMENTE");
                location.href="crud.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("FALLO NO SE GUARDO LOS DATOS");
                location.href="index.php";
            </script>
        ';
    }
?>