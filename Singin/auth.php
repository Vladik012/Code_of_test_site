<?php
  $login = filter_var(trim($_POST ['login']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST ['pass']),
  FILTER_SANITIZE_STRING);
  $gmail = filter_var(trim($_POST ['gmail']),
  FILTER_SANITIZE_STRING);


  $pass = md5($pass."cfvsvrsvgdtg5463183");

  $mysql = new mysqli('gz401372.mysql.tools', 'gz401372_users', '_uD36dD7*y', 'gz401372_users');

  $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' AND `gmail` = '$gmail'");
  $user = $result->fetch_assoc();
  if(count($user) == 0) {
    echo "Данного пользователя не существует";
    exit();
  }

  setcookie('user', $user['name'], time() + 3600 * 24, "/");

  $mysql->close();

  header('Location: /');
 ?>
