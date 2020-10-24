<!DOCTYPE html>
<html lang=ru dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
	  <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="css/reg.css" type="text/css">
    <link rel="stylesheet" href="css/prof.css" type="text/css">
    <link rel="stylesheet" href="css/glav.css" type="text/css">
    <link rel="stylesheet" href="css/shtorka.css" type="text/css">
    <link rel="stylesheet" href="css/load.css" type="text/css">
    <title>Главная</title>
  </head>
  <body>
  <style>
   body {
    background: url("../img/Gradient_2-min.jpg") ;
    color: #98baba;
   }
   }
   </style>
	  <head>
		  <script data-ad-client="ca-pub-6349961967021607" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	  </head>
    </body>
    <html>
    <head>
    <body>
      <div class="preloader">
        <div class="preloader__row">
          <div class="preloader__item"></div>
          <div class="preloader__item"></div>
        </div>
      </div>
      <script>
        window.onload = function () {
          document.body.classList.add('loaded_hiding');
          window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
          }, 500);
        }
      </script>
      <?php
        if($_COOKIE['user'] == ''):
      ?>
      <div class="btn_reg">
        <a href="../php/Register.php">Зарегистрироватся</a>
      </div>
      <div class="content">
        <h3>Данный сайт создан для помощи игрокам!</h3>
        <h4>Если вам нравися этот сайт то пожалуйста поддержте его</h4>
        <h4>Я же для вас стараюсь</h4>
        <h4>Вы мне можете помочь тем что отключите блокировщик рекламмы</h4>
        <h4>Но если вы хотите помочь по максимуму то пишите на почту vk206340@gmail.com</h4>
        <h4>Если есть идеи для сайта то тоже пишите на почту</h4>
        <h4>Зарегистируйтесь чтобы видеть больше</h4>
      </div>
      <?php else: ?>
        <div class="prifile">
          <a href="../php/profile.php">Профиль</a>
        </div>
      <?php endif; ?>
    </body>
    </head>
    </html>
