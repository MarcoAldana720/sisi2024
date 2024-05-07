<?php
    require_once 'conexion.php'; // Conexion De La Base De Datos

    session_start();
    error_reporting(0);

    $matricula = $_POST['reg_mat'];
    $contrasena = $_POST['reg_con'];

    $_SESSION['matricula'] = $matricula;

    $sql = "SELECT * FROM registro WHERE reg_mat = '$matricula' AND reg_con = '$contrasena'";
    $resultado = mysqli_query($conectar, $sql);

    if(mysqli_num_rows($resultado) > 0) {
        $_SESSION["autentificado"] = "SI";
        $filas = mysqli_fetch_array($resultado);
        // AQUI MODIFICARLO A SU ESTILO DE LAS TABLAS PARA RELACIONARLO
        if ($filas['rol'] == 1) {
            header("location: admin/index.php"); // Vista Principal Del Administrador/Profesor
        } elseif ($filas['rol'] == 2) {
            header("location: client/index.php"); // Vista Principal Del Usuario/Estudiante
        }

        mysqli_free_result($resultado);
        mysqli_close($conectar);
    } else {
        echo "
            <script>
                location.href = 'login.php?errorusuario=SI';
            </script>
        ";
    }

?>