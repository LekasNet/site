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
      <a class="button1" id="is_active" href="#">Матчинг</a>
      <a class="button1" id="" href="/friends.php">Друзья</a>
      <a class="button1" id="" href="/messages.php">Мессенджер</a>
      <a class="button1" id="" href="/my_page.php">Моя страница</a>
      </div>';

    ?>

    <?php

      if (isset($_COOKIE['user'])) echo "<p class='wtext'>Здравствуйте, <a class='wetext' href='#'>".$_COOKIE['user']."</a>! готовы поиграть? <a class='button' href='/redirect_t.php'>Выйти</a></p>";
      else echo "<a class='button' id='button' href='/login.php'>Войдите</a>";

    ?>
    
  </div>

<!--
<nav role='friend-nav'>
  <div id="friend-list">
  <input type="checkbox" />
  <span></span>
  <span></span>
  <span></span>
  <ul id="friends">
  <div class="ad-menu">
    <nav class="nav" tabindex='1'>
      <a href="#">F1</a>
      <a href="#">F2</a>
      <a href="#">F3</a>
      <a href="#">F4</a>
    </nav>
  </div>
  </ul>
  </div>
</nav>
-->

  <div class="content">
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

<div class="main">
<div class="bumper"></div>
  <div class="container">

    <div class="row">
      <div class="col-1-3">  
        <div class="card bg-dark text-white" id="card" onClick="window.location.href='/waiting.php'">
          <div class="card-img-overlay">
            <h5 class="card-title" id="title">Overwatch</h5>
            <p class="card-text" id="description">🟢14734 online</p>
          </div>
          <img class="card-img" id="card_image" src="img/overwatch.jpg" alt="Card image" >
        </div>
        </div>

    <div class="col-2-3">  
      <div class="card bg-dark text-white" id="card" onClick="window.location.href='/waiting.php'">
            <div class="card-img-overlay">
        <h5 class="card-title" id="title">Counter-strike: GO</h5>
        <p class="card-text" id="description">🟢20473 online</p>
      </div>
      <img class="card-img" id="card_image" src="img/csgo.jpg" alt="Card image" >
    </div></div>
    </div>

    <div class="row">
          <div class="col1-2-3">  
      <div class="card bg-dark text-white" id="card" onClick="window.location.href='/waiting.php'">
            <div class="card-img-overlay">
              <h5 class="card-title" id="title">DOTA 2</h5>
        <p class="card-text" id="description">🟢212 online</p>
      </div>
      <img class="card-img" id="card_image" src="img/dota.jpeg" alt="Card image" >
    </div></div>
                <div class="col1-1-3">  
        <div class="card bg-dark text-white" id="card" onClick="window.location.href='/waiting.php'">
                  <div class="card-img-overlay">
            <h5 class="card-title" id="title">Rainbow 6</h5>
            <p class="card-text" id="description">🟢673 online</p>
          </div>
          <img class="card-img" id="card_image" src="img/siedge.jpeg" alt="Card image" >

        </div>
        </div>
    </div>

    </div>
</body>
</html>