<html>
<head>
  <title>Матчинг игр</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- <link href="css/menu_style.css" rel="stylesheet" type="text/css" media="screen" /> -->


</head>



<body>
  <div class="header">

    <?php 
    
      if (isset($_COOKIE['user'])) echo '    <div class="btn-group">
      <a class="button1" id="" href="index.php">Матчинг</a>

      </div>';

    ?>

    <?php

      if (isset($_COOKIE['user'])) echo "<p class='wtext'>Здравствуйте, <a class='wetext' href='#'>".$_COOKIE['user']."</a>! готовы поиграть? <a class='button' href='/redirect_t.php'>Выйти</a></p>";
      else echo "<a class='button' id='button' href='/login.php'>Войдите</a>";

    ?>
    
  </div>

  <div class="content">
  <?php
  
  if (!isset($_COOKIE['user'])) echo '<div class="guest">
    <p class="mtext">Для начала нужно войти<p>
    </div>
    <div class="guest">
    <a class="button2" id="button2" href="/login.php">Войдите</a>
  </div>';

  ?>

<div class="main">

    </div>
</body>
</html>