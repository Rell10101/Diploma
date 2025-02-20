<?php
	$host = 'localhost'; // имя хоста
	$username = 'root';      // имя пользователя
	$password = 'mysql';          // пароль
	$db_name = 'diploma';      // имя базы данных
	
	$link = mysqli_connect($host, $username, $password, $db_name);
    mysqli_query($link, "SET NAMES 'utf8'");

	session_start();
?>

