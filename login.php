<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | SISI 2024</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles_test.css">
    <link rel="shortcut icon" href="img/itm logo.png" type="image/x-icon">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/4abe0801d5.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        include "reut/head.php";
    ?>    
    <section class="formulario bg-white col-10 col-md-6 mx-auto text-center">
        <div class="banner">
            <img src="img/itm logo.png" class="img-fluid header-img" alt="Banner SISI 2024">
        </div>

        <h1>Inicio de sesión</h1>

        <form action="autentifico.php" method="POST" class="col-9 mx-auto">
            <div class="form-group">
                <label for="exampleFormControlInput1">Usuario: </label>
                <input type="text" class="form-control margen" placeholder="Matrícula" id="matricula" name="matricula" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Contraseña: </label>
                <input type="password" class="form-control margen" placeholder="Ingrese su contraseña" id="contrasena" name="contrasena" required>
            </div>
            <div>
                <button type="submit" class="btn btn-danger">INICIAR SESION</button>
            </div>
            <div>
                <img src="img/google.png" alt="logo_google">
                <?php require ('autentifico_google.php'); ?>
                <a href="<?php echo $client->createAuthUrl() ?>" class="btn btn-primary">USAR GOOGLE</a>
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
        include "maps/maps.php";
    ?>

    <?php
        include "reut/tail.php";
    ?>
    
    
    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- LLAMA EL ARCHIVO DE TRADUCTOR -->
    <script src="app_2.js"></script>
</body>
</html>





