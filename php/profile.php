<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/prof.css" type="text/css">
    <link rel="stylesheet" href="css/exit.css" type="text/css">
    <title>Профиль</title>
  </head>
  <body>
    <?php
      if($_COOKIE['user'] == ''):
    ?>
    <h1>Вы решили обойти системму? Но у вас ничего не выйдет!</h1>
    <h3>А если нет то просто перейдите <a href="../php/Register.php">сюда</a>! И зарегистрируйтесь. Потом войдите в аккаунт</h3>
  <?php else: ?>
    <h3>Приветствую <?=$_COOKIE['user']?>!</h3>
    <div class="exit">
      <h4><a href="../php/exit.php">Выйти</a></h4>
    </div>
  <?php endif; ?>
  </body>
</html>
