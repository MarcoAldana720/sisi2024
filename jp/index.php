<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | SISI 2024</title>
    <link rel="shortcut icon" href="../img/itm logo.png" type="image/x-icon">
    <!--CSS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preload" href="../css/styles_test.css" as="style">
    <link rel="stylesheet" href="../css/styles_test.css">

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
        <h1>SISI 2024 への登録</h1>
        
        <!-- MANDAR UN REGISTRO EN LA BD -->
        <form action="registrar.php" method="POST">
              <div class="form-group">
                <label for="exampleFormControlInput1">フルネーム：</label>
                <input type="text" class="form-control" placeholder="お名前を書いてください" id="reg_nom" name="reg_nom" required>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlInput1">学費:</label>
                  <input type="text" class="form-control" placeholder="例: E12345678" id="reg_mat" name="reg_mat" required>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlInput1">パスワード：</label>
                  <input type="password" class="form-control" placeholder="パスワードを入力してください" id="reg_con" name="reg_con" required>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlInput1">機関のメールアドレス: </label>
                  <input type="email" class="form-control" placeholder="example@merida.tecnm.mx" id="reg_cor" name="reg_cor" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">携帯電話：</label>
                  <input type="tel" class="form-control" placeholder="例: 9991234567" id="reg_cel" name="reg_cel" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">学期：</label>
                  <select class="form-control" id="reg_sem" name="reg_sem">
                    <option value="" selected disabled>選択肢一つを選択してください</option>
                    <option value="1">前期</option>
                    <option value="2">二学期</option>
                    <option value="3">３学期</option>
                    <option value="4">4学期</option>
                    <option value="5">５学期</option>
                    <option value="6">6学期</option>
                    <option value="7">7学期</option>
                    <option value="8">8学期</option>
                    <option value="9">9学期</option>
                    <option value="10">10学期</option>
                    <option value="11">11学期</option>
                    <option value="12">第12学期</option>
                    <option value="13">13学期</option>
                  </select>
                </div>
                <div class="btn_center">
                  <button type="submit" class="btn btn-danger">チェックイン</button>
                  <a href="login.php" class="a_login">ログイン</a>
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