<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | SISI 2024</title>
    <link rel="shortcut icon" href="img/itm logo.png" type="image/x-icon">
    <!--CSS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles_test.css">

</head>
<body>
  <?php
      include "reut/head.php";
  ?>  
    <div>
      <section class="formulario bg-white col-10 col-md-6 mx-auto text-center">
        <div class="banner">
          <img src="img/itm logo.png" class="img-fluid header-img" alt="Banner SISI 2024">
        </div>
        <h1>Registro al SISI 2024</h1>
        <!-- MANDAR UN REGISTRO EN LA BD -->
        <form action="registrar.php" method="POST" class="col-9 mx-auto">
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
                  <button type="submit" class="btn btn-danger">Registrarse</button>
                  <a href="login.php" class="a_login">Iniciar sesión</a>
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

  <!-- LLAMA EL ARCHIVO DE TRADUCTOR -->
  <script src="app_2.js"></script>
</body>
</html>