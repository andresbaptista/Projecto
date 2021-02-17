<?php
	require 'conexao.php';
	include 'InserirEquipamento.php';

	$nome = $_POST['nome'];
	$idCategoria = $_POST['formCategoria'];
	$designacao = $_POST['designacao'];
	$fabricante = $_POST['fabricante'];
	$proprietario = $_POST['proprietario'];
	$telemovel = $_POST['telemovel'];
	$imagem = $_POST['imagem'];


	$sql = "INSERT INTO Equipamento (nome, idCategoria, designacao, fabricante, proprietario, telemovel) VALUES ('$nome', '$idCategoria', '$designacao', '$fabricante', '$proprietario', '$telemovel')";

	$nomeImagem = '/home/andrebaptista/Desktop/ImagensProjecto' . uniqid();
    file_put_contents($nomeImagem, $imagem);

	if(!mysqli_query($connection, $sql))
	{
		echo 'Não inserido';
	}

	else
	{
		echo 'Inserido';
	}

	header("Refresh:2; url=InserirEquipamento.php");
?>