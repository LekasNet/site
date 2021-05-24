<?php

$link = mysqli_connect('127.0.0.1:3306', 'root', 'root', 'matchmaking');

function get_players_cs($link) {
	$sql = "SELECT * FROM players WHERE is_active = 1";
	$result = mysqli_query($link, $sql);
}

function add_user($link, $nick, $photo, $password) {

	$sql = "INSERT INTO players (nick, photo, password) VALUES ('".$nick."', '".$photo."', '".$password."')";
	$result = mysqli_query($link, $sql);

}

function update_picture($link, $nick, $photo){

	$sql = "UPDATE players SET photo = '".$photo."' WHERE nick = '".$nick."'";
	$result = mysqli_query($link, $sql);

}

function update_user($link, $nick, $o_pass, $n_pass) {
		
	$sql = "SELECT * FROM players WHERE nick = '".$_COOKIE['user']."'";
	$result = mysqli_query($link, $sql);
	$user = mysqli_fetch_assoc($result);

	if ($o_pass != $n_pass) {

		if ($user['password'] == $o_pass) {

			$sql = "UPDATE players SET password = '".$n_pass."' WHERE nick = '".$_COOKIE['user']."'";
			$result = mysqli_query($link, $sql);
			return 0;

		}
		else {
			return 1;
		}
	}

	if ($user['nick'] != $nick) {

		$sql = "UPDATE players SET nick = '".$nick."' WHERE nick = '".$_COOKIE['user']."'";
		$result = mysqli_query($link, $sql);

	}
	else {
	}
	return 0;
}

?>