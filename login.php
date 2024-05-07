<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | SISI 2024</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/itm logo.png" type="image/x-icon">
</head>

<body>

    <?php
        include "head.php";
    ?>

    <section class="marginLogin">
        <div class="banner">
            <img src="img/itm logo.png" class="imagen1" alt="Banner SISI 2024">
        </div>

        <h1>Inicio de sesión</h1>

        <form action="autentifico.php" method="POST">
            <div>
                <label for="exampleFormControlInput1">Usuario: </label>
                <input type="text" class="form-control margen" placeholder="Matrícula" id="matricula" name="matricula" required>
            </div>
            <div>
                <label for="exampleFormControlInput1">Contraseña: </label>
                <input type="password" class="form-control margen" placeholder="Ingrese su contraseña" id="contrasena" name="contrasena" required>
            </div>
            <div class="btn_center">
                <button type="submit" class="btn-primary">Entrar</button>
            </div>
            <!-- INICIO: Alerta De Autentificacion -->
            <?php
                $errorusuario = isset($_GET["errorusuario"]);
                if($errorusuario == "SI") {
                    echo '<p id="alerta">usuario y/o contraseña incorrecta</p>';
                }
            ?>
            <!-- FINAL: Alerta De Autentificacion -->
            <div>
                <p>¿Aún no tienes una cuenta? <a href="index.php" class="regis">Regístrate</a></p>
            </div>
        </form>
    </section>

    <?php
        include "tail.php";
    ?>

</body>
</html>





