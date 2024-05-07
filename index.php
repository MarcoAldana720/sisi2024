<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | SISI 2024</title>
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

    <section class="marginLogin">
      <h1>Registro al SISI 2024</h1>
      <!-- MANDAR UN REGISTRO EN LA BD -->
      <form action="registrar.php" method="POST">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nombre completo: </label>
              <input type="text" class="form-control" placeholder="Escriba su nombre" id="reg_nom" name="reg_nom" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Matrícula: </label>
                <input type="text" class="form-control" placeholder="Ejemplo: E12345678" id="reg_mat" name="reg_mat" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Contraseña: </label>
                <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="reg_con" name="reg_con" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Correo institucional: </label>
                <input type="email" class="form-control" placeholder="ejemplo@merida.tecnm.mx" id="reg_cor" name="reg_cor" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Celular: </label>
                <input type="tel" class="form-control" placeholder="Ejemplo: 9991234567" id="reg_cel" name="reg_cel" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Semestre: </label>
                <select class="form-control" id="reg_sem" name="reg_sem">
                  <option value="" selected disabled>Seleccione una opcion</option>
                  <option value="1">Primer semestre</option>
                  <option value="2">Segundo semestre</option>
                  <option value="3">Tercer semestre</option>
                  <option value="4">Cuarto semestre</option>
                  <option value="5">Quinto semestre</option>
                  <option value="6">Sexto semestre</option>
                  <option value="7">Septimo semestre</option>
                  <option value="8">Octavo semestre</option>
                  <option value="9">Noveno semestre</option>
                  <option value="10">Decimo semestre</option>
                  <option value="11">Onceavo semestre</option>
                  <option value="12">Doceavo semestre</option>
                  <option value="13">Treceavo semestre</option>
                </select>
              </div>
              <div class="btn_center">
                <button type="submit" class="btn-primary">Registrarse</button>
                <a href="login.php" class="a_login">Iniciar sesión</a>
              </div>
        </form>
    </section>

    <?php
        include "tail.php";
    ?>

</body>
</html>