<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | SISI 2024</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles_test.css">
    <link rel="shortcut icon" href="../img/itm logo.png" type="image/x-icon">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/4abe0801d5.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
        include "reut/head.php";
    ?>
    <div>

        <section class="formulario bg-white col-10 col-md-6 mx-auto text-center">
            <div class="banner">
                <img src="../img/itm logo.png" class="img-fluid header-img" alt="Banner SISI 2024">
            </div>

            <h1>ログイン</h1>

            <form action="autentifico.php" method="POST" class="col-9 mx-auto">
                <div class="form-group">
                    <label for="exampleFormControlInput1">ユーザー：</label>
                    <input type="text" class="form-control margen" placeholder="学費" id="matricula" name="matricula" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">パスワード： </label>
                    <input type="password" class="form-control margen" placeholder="パスワードを入力してください" id="contrasena" name="contrasena" required>
                </div>
                <div class="btn_center">
                    <button type="submit" class="btn btn-danger">ログイン</button>
                </div>
                <br>
                <div>
                    <img src="../img/google.png" alt="logo_google" class="google-logo">
                    <?php require ('../autentifico_google.php'); ?>
                    <a href="<?php echo $client->createAuthUrl() ?>" class="btn btn-primary">Googleを使用する</a>
                </div>
            
                <!-- INICIO: Alerta De Autentificacion -->
                <?php
                    $errorusuario = isset($_GET["errorusuario"]);
                    if($errorusuario == "SI") {
                        echo '<p id="alerta">ユーザー名やパスワードが間違っています</p>';
                    }
                ?>
                <!-- FINAL: Alerta De Autentificacion -->
                <div>
                    <p>まだアカウントをお持ちではありませんか? <a href="index.php" class="regis">サインアップ</a></p>
                </div>
            </form>
        </section>

        <?php
            include "maps/maps.php";
        ?>
    </div>
    

    <?php
        include "reut/tail.php";
    ?>
    
    <script src="../app_2.js"></script>
</body>
</html>





