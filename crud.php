<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participantes | SISI 2024</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/itm logo.png" type="image/x-icon">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4abe0801d5.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php
        include "head.php";
    ?>

    <?php
        require "conexion.php";
        $todos_datos = "SELECT * FROM registro ORDER BY id ASC";
        $resultado = mysqli_query($conectar, $todos_datos);
    ?>

    <section class="margincrud">

        <table>
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    <th>Semestre</th>
                    <th>Accion</th>
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
                        <a href="ver.php?id=<?php echo $fila['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="eliminar.php?id=<?php echo $fila['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            <?php
                }
                mysqli_free_result($resultado);
            ?>
        </table>

        <div class=btn_center>
            <a href="login.php" class="a_regresar">Regresar al inicio</a>
        </div>
    </section>
    
    <?php
        include "tail.php";
    ?>

</body>

</html>
