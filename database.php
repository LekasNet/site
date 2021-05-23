<?php

function get_players_cs($link) {
	$sql = "SELECT * FROM players WHERE is_active = 001";
	$result = mysqli_query($link, $sql);
	var_dump($result);
}

function add_user($link, $user_info) {

	$sql = "INSERT INTO Players (id, nick, photo, password) VALUES ($user_info['id'], $user_info['nick'], $user_info['photo'], $user_info['password'])";
	mysqli_query($link, $sql);

}


?>