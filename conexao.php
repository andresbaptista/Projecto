<?php
	$servername = "localhost:3306";
	$username = "projecto";
	$password = "letmein";
	$dbname = "ProjectoLicenciatura";
	//Create
	$connection = new mysqli($servername, $username, $password, $dbname);
	//Check
	if ($connection->connect_error) {
		die("Falhou a conexão: " . $connection->connect_error);
	}

?>
