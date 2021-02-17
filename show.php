<?php
	
	require 'conexao.php';
	include 'MostrarEquipamento.php';

	$categoria = $_GET['categoria'];

	if ($categoria == 'todas') {
		// Mostra todos os equipamentos:
	
		$sql = "SELECT nome, designacao, fabricante, proprietario FROM Equipamento";
		$resultado = $connection->query($sql);

		echo "<h1>Todas as categorias</h1>";
	
		if ($resultado->num_rows > 0) {
	
			while($row = $resultado->fetch_assoc()) {
				echo "<br> Nome: ". $row["nome"] . 
					 "<br> Designacao: " . $row["designacao"] .
					 //"<br> Proprietario: " . $row["proprietario"] .
					 "<br> Fabricante: " . $row["fabricante"] .
					 "<br>";
			}
		}
		else {
			echo "Não há equipamentos a mostrar.";
		}
	}
	elseif ($categoria != 'todas')
	{
		// Mostra só os equipamentos da categoria escolhida no mostrar.php


		$sql_3 = "SELECT Categoria.nomeCategoria WHERE Equipamento.idCategoria = Categoria.idCategoria";
		$sql_2 = "SELECT nome, designacao, fabricante, proprietario FROM Equipamento WHERE idCategoria = $categoria";
		// $sql_4 = "SELECT ";
		$resultado_2 = $connection->query($sql_2);
		$resultado_3 = $connection->query($sql_3);

		echo($resultado_3);

		echo "<h1>Categoria </h1>" . $resultado_3;

		if ($resultado_2->num_rows > 0) {
		
			while($row_2 = $resultado_2->fetch_assoc()) {
				echo "<br> Nome: ". $row_2["nome"] . 
					 "<br> Designacao: " . $row_2["designacao"] .
					 //"<br> Proprietario: " . $row_2["proprietario"] .
					 "<br> Fabricante: " . $row_2["fabricante"] .
					 "<br>";
			}
		}
		else {
			echo "Não há equipamentos a mostrar.";
		}
	}
	$connection->close();  
?>