<?php
	require 'conexao.php';
	include 'SerVoluntario.php';

	$nome = $_POST['nome'];
	$morada = $_POST['morada'];
	$zip = $_POST['zip'];
	$local = $_POST['local'];
	$cc = $_POST['cc'];
	$nif = $_POST['nif'];
	$nascimento = $_POST['nascimento'];

	#$sex ------

	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	#$verifica = $_POST['verifica'];

	$sql = "INSERT INTO Voluntario (nome, morada, zip, local, cc, nif, nascimento, email, telefone) VALUES ('$nome', '$morada', '$zip', '$local', '$cc', '$nif', '$nascimento', '$email', '$telefone')";

	if(!mysqli_query($connection, $sql))
	{
		echo 'Não inserido';
	}

	else
	{
		echo 'Inserido';
	}

	header("Refresh:2; url=SerVoluntario.php");
?>