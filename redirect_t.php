<?php

  if(isset($_GET['user'])) {
      setcookie('user', $_GET['user'], time() + 8640000);
    }
  else {
    setcookie('user', $_GET['user'], time() - 1);
    }
  header('Location: https://victoriouspleasanttrial.lekasnet.repl.co/index.php');

?>  