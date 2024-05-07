<?php
    require_once "conexion.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM registro WHERE id = '$id'";
    $query = mysqli_query($conectar, $sql);
    $fila = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGITRO | SISI 2024</title>
    <link rel="shortcut icon" href="img/itm logo.png" type="image/x-icon">
    <!--Normalize-->
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <!--CSS-->
    <link rel="preload" href="css/styles.css" as="style">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php
        include "head.php";
    ?>

    <section class="margenindex">
        <h1>INFORMACION</h1>
        <!-- MANDAR UN REGISTRO EN LA BD -->
        <form action="update.php" method="POST">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre completo: </label>
                <input type="text" class="form-control" placeholder="Escriba su nombre" id="nombre" name="nombre" value="<?php echo $fila['nombre'] ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Matrícula: </label>
                <input type="text" class="form-control" placeholder="Ejemplo: E12345678" id="matricula" name="matricula" value="<?php echo $fila['matricula'] ?>"required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Contraseña: </label>
                <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="contrasena" name="contrasena" value="<?php echo $fila['contrasena'] ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Correo institucional: </label>
                <input type="email" class="form-control" placeholder="ejemplo@merida.tecnm.mx" id="correo" name="correo" value="<?php echo $fila['correo'] ?>"required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Celular: </label>
                <input type="tel" class="form-control" placeholder="Ejemplo: 9991234567" id="celular" name="celular" value="<?php echo $fila['celular'] ?>"required>
            </div>
            <!-- INICIO: VER PORQUE NO ME LO RECONOCE -->
            <div class="form-group">
                <label for="exampleFormControlSelect1">Semestre: </label>
                <select class="form-control" id="semestre" name="semestre">
                <option value="">Seleccione una opcion</option>
                <option value="1" <?php if($fila['semestre'] == 1) echo 'selected'; ?>>Primer semestre</option>
                <option value="2" <?php if($fila['semestre'] == 2) echo 'selected'; ?>>Segundo semestre</option>
                <option value="3" <?php if($fila['semestre'] == 3) echo 'selected'; ?>>Tercer semestre</option>
                <option value="4" <?php if($fila['semestre'] == 4) echo 'selected'; ?>>Cuarto semestre</option>
                <option value="5" <?php if($fila['semestre'] == 5) echo 'selected'; ?>>Quinto semestre</option>
                <option value="6" <?php if($fila['semestre'] == 6) echo 'selected'; ?>>Sexto semestre</option>
                <option value="7" <?php if($fila['semestre'] == 7) echo 'selected'; ?>>Septimo semestre</option>
                <option value="8" <?php if($fila['semestre'] == 8) echo 'selected'; ?>>Octavo semestre</option>
                <option value="9" <?php if($fila['semestre'] == 9) echo 'selected'; ?>>Noveno semestre</option>
                <option value="10" <?php if($fila['semestre'] == 10) echo 'selected'; ?>>Decimo semestre</option>
                <option value="11" <?php if($fila['semestre'] == 11) echo 'selected'; ?>>Onceavo semestre</option>
                <option value="12" <?php if($fila['semestre'] == 12) echo 'selected'; ?>>Doceavo semestre</option>
                <option value="13" <?php if($fila['semestre'] == 13) echo 'selected'; ?>>Treceavo semestre</option>
                </select>
            </div>
            <!-- FINAL: VER PORQUE NO ME LO RECONOCE -->
            <div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="crud.php" class="a_login">Cerrar</a>
            </div>
        </form>
    </section>

    <?php
        include "tail.php";
    ?>

</body>
</html>