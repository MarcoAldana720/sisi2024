<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participantes | SISI 2024</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles_test.css">
    <link rel="shortcut icon" href="../img/itm logo.png" type="image/x-icon">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4abe0801d5.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php
        include "reut/head.php";
    ?>

    <?php
        require "../conexion.php";
        $todos_datos = "SELECT * FROM registro ORDER BY id ASC";
        $resultado = mysqli_query($conectar, $todos_datos);
    ?>

    <section class="formulario bg-white col-10 col-md-6 mx-auto text-center">
        <div class="table-responsive">
            <table class ="table table-striped">
                <thead>
                    <tr>
                        <th>学費</th>
                        <th>名前</th>
                        <th>郵便</th>
                        <th>携帯電話</th>
                        <th>学期</th>
                        <th>アクション</th>
                    </tr>
                </thead>
                <?php
                    while($fila = mysqli_fetch_assoc($resultado)) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $fila["matricula"]?></td>
                        <td><?php echo $fila["nombre"]?></td>
                        <td><?php echo $fila["correo"]?></td>
                        <td><?php echo $fila["celular"]?></td>
                        <td class="icons"><?php echo $fila["semestre"]?></td>
                        <td class="icons">
                            <a href="ver.php?id=<?php echo $fila['id'] ?>" class= "btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="eliminar.php?id=<?php echo $fila['id'] ?>" class= "btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
                <?php
                    }
                    mysqli_free_result($resultado);
                ?>
            </table>
        </div>
        

        <div class="text-center">
            <a href="login.php" class="btn btn-secondary">トップに戻る</a>
        </div>
    </section>
    
    <?php
        include "reut/tail.php";
    ?>

    <script src="../app_2.js"></script>
</body>
</html>