<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos | SISI 2024</title>
    <!--CSS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles_test.css">
    <link rel="shortcut icon" href="img/itm logo.png" type="image/x-icon">
</head>

<body>
  
<?php
      include "reut/head.php";
?>
  <section class="formulario bg-white col-10 col-md-6 mx-auto text-center">
    <div class="banner">
      <img src="img/itm logo.png" class="img-fluid header-img" alt="Banner SISI 2024">
    </div>
    <h1>Registro a eventos del SISI 2024</h1>
      <form>
          <!-- Bloque de selección de tipo de evento -->
          <div class="form-group">
            <label for="tipos_eventos" class="col-sm-3 col-form-label">Tipo de evento:</label>
            <div class="col-sm-9">
              <select id="tipos_eventos" name="tipos_eventos" class="form-control">
                <?php
                /*
                  // Iterar a través de los resultados de la consulta y mostrar las opciones
                  while ($row = $result->fetch_assoc()) {
                      echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                  }
                  */
                ?>
                <option value="tipos_evento1">Conferencia</option>
                <option value="tipos_evento2">Taller</option>
                <option value="tipos_evento3">Torneo</option>
                <option value="tipos_evento4">Demo</option>
              </select>
            </div>
          </div>

          <!-- Bloque de selección de eventos de ese tipo -->
          <div class="form-group row">
            <label for="evento" class="col-sm-3 col-form-label">Evento a seleccionar:</label>
            <div class="col-sm-9">
              <select id="evento" name="evento" class="form-control">
                <option value="evento1">Evento algo</option>
                <option value="evento2">Evento algo</option>
              </select>
            </div>
          </div>

         <!-- Bloque de selección de información del evento -->
        <div class="form-group">
          <label for="evento" class="col-form-label">Información del evento</label>
          <textarea id="infoEvento" name="comentario" class="form-control" placeholder="Información del evento..." readonly></textarea>
          <label for="horario" class="col-form-label">Horario:</label>
          <table class="table">
            <thead>
              <tr>
                <th>Aula</th>
                <th>Hora</th>
                <th>Fecha</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>H1</td>
                <td>11:00 - 12:59</td>
                <td>28/02/2024</td>
              </tr>
              <tr>
                <td>H2</td>
                <td>X</td>
                <td>X</td>
              </tr>
              <tr>
                <td>H2</td>
                <td>X</td>
                <td>X</td>
              </tr>
            </tbody>
          </table>
        </div>
          
        <div class="form-group row">
          <div class="col-sm-12 text-center">
            <button type="button" class="btn btn-primary">Registrarse al evento</button>
          </div>
        </div>
        
      </form>    
    </section>
    
    <?php
        include "maps/maps.php";
    ?>

    <?php
        include "reut/tail.php";
    ?>
    
    <!-- LLAMA EL ARCHIVO DE TRADUCTOR -->
    <script src="app_2.js"></script>
</body>
</html>