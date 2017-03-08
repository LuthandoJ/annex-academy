<?php
	$connect = @new mysqli("localhost", "root", "Sit@0923", "bingo");

	if(!$connect->connect_error) {
	}
	else {
		die("Connection Failed : " . $connect->connect_error);
	}
?>