<?php
//conexão com banco de dados.
$servername = "localhost";
$username = "gabriel";
$password = "123456";
$db_name = "crud";

// CREATE
$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()):
	echo "Erro na conexão".mysqli_connect_error();
endif;


