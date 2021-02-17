<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Para os logos das Redes Sociais (F do facebook)  -->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="design.css"/>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	
	<title>Mostrar Equipamentos</title>
</head>
<body>

	<div class="header">
		<a href="index.php">
		<div class="logo">
			<img src="PER_NucleoFundao_Azul.png" alt="Logo Pais-em-Rede do Fundão" width="500" height="150"></a>
		</div>
	</div>

	<div class="navbar" id="myTopnav">
		<a href="index.php">Página Inicial</a>
		<a href="QuemSomos.php">Quem Somos</a>
		<a href="#">Descobrir</a>
		<a href="SerVoluntario.php">Junte-se a Nós</a>
  	
  		<div class="dropdown">
    		<button class="dropbtn">Banco de Empréstimos 
      			<i class="fa fa-caret-down"></i>
    		</button>
    		<div class="dropdown-content">
      			<a href="MostrarEquipamento.php">Ver Equipamentos</a>
				<a href="InserirEquipamento.php">Inserir Equipmento</a>
   		 	</div>
  		</div> 
	
		<div class="menu_top-right">
			<a class="fa fa-facebook" target="_blank" href="https://www.facebook.com/groups/paisemredefundao/"></a>
			<a class="fa fa-youtube" target="_blank" href="https://www.youtube.com/c/PaisemRedeN%C3%BAcleodoFund%C3%A3o"></a> 
			<a class="fa fa-google" target="_blank" href="https://plus.google.com/u/0/+PaisemRedeN%C3%BAcleodoFund%C3%A3o"></a>
		</div>
<!-- RESPONSIVO -->
		<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;
		</a>
<!-- RESPONSIVO -->
	</div>
<!-- RESPONSIVO -->
	<script>
	function myFunction() {
	    var x = document.getElementById("myTopnav");
	    if (x.className === "navbar") {
	        x.className += " responsive";
	    } else {
	        x.className = "navbar";
	    }
	}
	</script>
<!-- RESPONSIVO -->

	<br>
	<br>
	<br>
	<hr color = '#013E7D' >

	<form action="show.php" method="get">

		<h2 class="h2-equi">
			Banco de empréstimos de recursos para apoio às Pessoas com Necessidades Especiais e seus cuidadores
		</h2>

		<br/>

		<label id = cat for="f-categoria">Escolha a categoria dos equipamentos que pretende ver:</label> 
		<br>
		<select name = "categoria" name="Categoria">
			<!-- <option value="">Selecione</option> -->
			<option value="todas">Todas as Categorias</option>
			<option value="1">Camas</option>
			<option value="2">Cadeiras</option>
			<option value="3">Bengalas</option>
		</select> 

		<br/>

		<input type="submit" name="ver" value="Mostrar Equipamentos">
	</form>
	<p>* Para solicitar o empréstimo de um equipamento por favor envie um email para: perfundao@gmail.com *</p>

</body>
</html>