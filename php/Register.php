<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/puss_but.css">
    <link rel="stylesheet" href="../js/password_s.js">
  </head>
  <body>
    <script src="app.js"></script>
    <div class="container mt-4">
      <?php
        if($_COOKIE['user'] == ''):
      ?>
      <div class="row">
        <div class="col">
          <h1>Регистрация</h1>
          <form action="../Singin/chack.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="email" class="form-control" name="gmail" id="gmail" placeholder="Введите почту"><br>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
            <input type="password" class="form-control" name="pass" id="password" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Зарегистрироватся</button>
          </form>
        </div>
        <div class="container signin">
    <br><p>Есть аккаунт? <a href="../php/singin.php">Войти</a>.</p>
  </div>
    <?php else: ?>
      <p>Здравствуйте <?=$_COOKIE['user']?>. Вы уже вошли в акккаунт. Чтобы выйти нажмите <a href="../php/exit.php">здесь</a></p>
    <?php endif; ?>
    </div>
  </body>

</html>
