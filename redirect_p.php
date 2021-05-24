<?php
	require_once "database.php";
	$result = 0;

 	if(isset($_GET['user'])) {
 		$result = update_user($link, $_GET['user'], $_GET['o_pass'], $_GET['n_pass']);
      	setcookie('user', $_GET['user'], time() + 8640000);
  	}

  	if ($result == 0) {

  	header('Location: index.php');

  }
  else {
  	echo "<script>alert('wrong pass')</script>";
  }

?>  