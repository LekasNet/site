<?php
	require_once "database.php";

 	if(isset($_GET['user'])) {
      	setcookie('user', $_GET['user'], time() + 8640000);
      	add_user($link, $_GET['user'], rand(0, 5), $_GET['pass']);
  	}
  	else {
    	setcookie('user', $_GET['user'], time() - 1);
  	}
  	header('Location: index.php');

?>  