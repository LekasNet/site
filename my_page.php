<html>
<head>
  <title>Моя страница</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
 
  <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
   <link rel="stylesheet" href="css/login_style.css">


</head>



<body>
  <div class="header">
    <div class="btn-group">
      <a class="button1" id="" href="/index.php">Матчинг</a>
      <a class="button1" id="" href="/friends.php">Друзья</a>
      <a class="button1" id="" href="/messages.php">Мессенджер</a>
      <a class="button1" id="is_active" href="#">Моя страница</a>
    </div>

    <?php

      if (isset($_COOKIE['user'])) echo "<p class='wtext'>Здравствуйте, <a class='wetext' href='#'>".$_COOKIE['user']."</a>! готовы поиграть? <a class='button' href='/redirect_t.php'>Выйти</a></p>";
      else header('Location: https://victoriouspleasanttrial.lekasnet.repl.co/index.php');

    ?>
    
  </div>

<div id="wrapper">
  <form id="signin" method="GET" action="/redirect_p.php" autocomplete="off">
    <input type="text" id="nickname" name="user" placeholder="nickname" />
    <input type="password" id="pass" name="o_pass" placeholder="old password" />
    <input type="password" id="pass" name="n_pass" placeholder="new password" />
    <button type="submit">&#xf0da;</button>
  </form>
  <span>
    <h1>   </h1>
    <h1>Для изменения аватарки:</h1>
    <form name="upload" action="download_img.php" method="POST" ENCTYPE="multipart/form-data"> 
    Выберите файл для загрузки: 
    <input type="file" name="userfile" id="userfile">
    <input type="submit" name="upload" id="upload" value="Загрузить"> 
    </form>
</div>

</body>
</html>