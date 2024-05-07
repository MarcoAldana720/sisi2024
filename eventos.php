<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos | SISI 2024</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/itm logo.png" type="image/x-icon">
</head>

<body>
  
<?php
      include "head.php";
?>
  <section class="marginLogin">
    <h1>Registro a eventos del SISI 2024</h1>
      <form>
          <!-- Bloque de selección de tipo de evento -->
          <div class="form-group">
            <label for="tipos_eventos">Tipo de evento:</label>
            <select id="tipos_eventos" name="tipos_eventos">
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

          <!-- Bloque de selección de eventos de ese tipo -->
          <div class="form-group">
            <label for="evento">Evento a seleccionar:</label>
            <select id="evento" name="evento">
            <option value="evento1">Evento algo</option>
            <option value="evento2">Evento algo</option>

            </select>
          </div>

          <!-- Bloque de selección de información del evento -->
          <div class="form-group">
            <label for="evento">Información del evento</label>

            <textarea id="infoEvento" name="comentario" placeholder="Información del evento..." readonly></textarea>

            <label for="horario">Horario:</label>
            <table>
              <tr>
                <th>Aula</th>
                <th>Hora</th>
                <th>Fecha</th>
              </tr>
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
            </table>
          </div>
          
          <div clas="btn_center">
              <button type="button" class="btn-primary">Registrarse al evento</button>
          </div>
      </form>    
    </section>

    <?php
        include "tail.php";
    ?>

</body>
</html>




