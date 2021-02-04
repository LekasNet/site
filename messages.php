<html>
<head>
  <title>Сообщения</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />


</head>



<body>
  <div class="header">
    <div class="btn-group">
      <a class="button1" id="" href="/index.php">Матчинг</a>
      <a class="button1" id="" href="/friends.php">Друзья</a>
      <a class="button1" id="is_active" href="#">Мессенджер</a>
      <a class="button1" id="" href="/my_page.php">Моя страница</a>
    </div>

    <?php

      if (isset($_COOKIE['user'])) echo "<p class='wtext'>Здравствуйте, <a class='wetext' href='#'>".$_COOKIE['user']."</a>! готовы поиграть? <a class='button' href='/redirect_t.php'>Выйти</a></p>";
      else header('Location: https://victoriouspleasanttrial.lekasnet.repl.co/index.php');

    ?>
    
  </div>

  <?php
  
  if (!isset($_COOKIE['user'])) echo '<div class="guest">
    <p class="mtext">Добро пожаловать в нашу уютную компанию!<p>
    </div>
    <div class="guest">
    <a class="button2" id="button2" href="/login.php">Войдите</a>
  </div>';
  else '<audio controls autoplay loop preload>
  <source src="audio/doom.mp3">
  <source src="audio/doom.ogg">
  (здесь должна быть музяка, но ты видимо из каменного века и сидишь на експлорере)
  </audio>'
  
  ?>

</body>
</html>