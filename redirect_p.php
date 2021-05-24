<?php
	require_once "database.php";
	$result = 0;

 	if(isset($_GET['user'])) {
 		$result = update_user($link, $_GET['user'], $_GET['o_pass'], $_GET['n_pass']);
 		if ($_COOKIE['user'] != $_GET['user']) {}
      		setcookie('user', $_COOKIE['user'], time() + 8640000);
  		}
  		else {
  			setcookie('user', $_GET['user'], time() + 8640000);
  		}
      	echo $result;
  	}

  	if ($result == 0) {

  	header('Location: index.php');

  }
  else {
  	echo "<script>alert('wrong pass')</script>";
  }

?>  