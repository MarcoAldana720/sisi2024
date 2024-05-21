<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos | SISI 2024</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles_test.css">
    <link rel="shortcut icon" href="../img/itm logo.png" type="image/x-icon">
</head>

<body>
  
<?php
      include "reut/head.php";
?>
  <section class="formulario bg-white col-10 col-md-6 mx-auto text-center">
    <div class="banner">
      <img src="../img/itm logo.png" class="img-fluid header-img" alt="Banner SISI 2024">
    </div>
    <h1>SISI 2024 イベントへの登録</h1>
      <form>
          <!-- Bloque de selección de tipo de evento -->
          <div class="form-group">
            <label for="tipos_eventos" class="col-sm-3 col-form-label">イベントタイプ：</label>
            <div class="col-sm-9">
              <select id="tipos_eventos" name="tipos_eventos" class="form-control">
                <option value="tipos_evento1">会議</option>
                <option value="tipos_evento2">ワークショップ</option>
                <option value="tipos_evento3">トーナメント</option>
                <option value="tipos_evento4">デモ</option>
              </select>
            </div>
          </div>

          <!-- Bloque de selección de eventos de ese tipo -->
          <div class="form-group row">
            <label for="evento" class="col-sm-3 col-form-label">選択するイベント:</label>
            <div class="col-sm-9">
              <select id="evento" name="evento" class="form-control">
                <option value="evento1">何かのイベント</option>
                <option value="evento2">何かのイベント</option>
              </select>
            </div>
          </div>

          <!-- Bloque de selección de información del evento -->
          <div class="form-group">
            <label for="evento" class="col-form-label">イベント情報</label>
            <textarea id="infoEvento" name="comentario" clas="form-control" placeholder="イベント情報…" readonly></textarea>
            <label for="horario" class="col-form-label">スケジュール：</label>
            <table class="table">
              <thead>
                <tr>
                  <th>教室</th>
                  <th>時間</th>
                  <th>日付</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>H1</td>
                  <td>11:00～12:59</td>
                  <td>2024 年 2 月 28 日</td>
                </tr>
                <tr>
                  <td>H2</td>
                  <td>バツ</td>
                  <td>バツ</td>
                </tr>
                <tr>
                  <td>H2</td>
                  <td>バツ</td>
                  <td>バツ</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="form-group row">
            <div class="col-sm-12 text-center">
              <button type="button" class="btn btn-primary">イベントに登録する</button>
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
    
    <script src="../app_2.js"></script>
</body>
</html>