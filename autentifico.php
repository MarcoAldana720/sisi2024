<?php
    require_once 'conexion.php';

    session_start();
    error_reporting(0);

    $matricula = addslashes($_POST['matricula']);
    $contrasena = addslashes($_POST['contrasena']);

    $_SESSION['reg_mat'] = $matricula;

    $sql = "SELECT * FROM registro WHERE matricula = '$matricula' AND contrasena = '$contrasena'";
    
    $resultado = mysqli_query($conectar, $sql);

    if(mysqli_num_rows($resultado) > 0) {
        session_start();
        $_SESSION["autentificado"] = "SI";
        header("location: bienvenida.php");
    } else {
        echo "
            <script>
                location.href = 'login.php?errorusuario=SI';
            </script>
        ";
    }

    mysqli_free_result($resultado);
    mysqli_close($conectar);

?>