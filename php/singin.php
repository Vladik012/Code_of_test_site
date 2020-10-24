<!DOCTYPE html>
<html lang=ru dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="pass.js">
  </head>
  <body>
    <div class="container mt-4">
      <div class="row">
        <div class="col">
          <h1>Авторизация</h1>
          <form action="../Singin/auth.php" method="post">
            <input type="email" class="form-control" name="gmail" id="gmail" placeholder="Введите почту"><br>
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="password" class="form-control" name="pass" id="password" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Авторизироватся</button>
          </form>
        </div>
      </div>
  </body>
</html>
</div>
