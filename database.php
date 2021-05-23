<?php

function get_players_cs($link) {
	$sql = "SELECT * FROM players WHERE is_active = 001";
	$result = mysqli_query($link, $sql);
	var_dump($result);
}

function add_user($link) {

	$sql = "INSERT INTO Players (nick, photo, password) VALUES ('Testing', 'Testing@tesing.com', '123')";
	mysqli_query($link, $sql);

}


?>