<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Para os logos das Redes Sociais (F do facebook)  -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="design.css"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

	<title>Ser Voluntário</title>

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

	<form action="insertVol.php" method="post" enctype="multipart/form-data">

    <div class="form-vol">
        
		<label class="l-vol" for="f-nome">
			Nome:<sup>*</sup>
		</label>

        <input class="i-vol" type="text" placeholder="Nome" name="nome" required="required">

		<br/>

		<label class="l-vol" for="f-morada">
            Morada:<sup>*</sup>
        </label>
        <input class="i-vol" type="text" placeholder="Morada" name="morada" required="required">

		<br/>
		
		<label class="l-vol" for="f-zip">
			Código postal:<sup>*</sup>
		</label>
        <input class="i-vol" type="text" pattern="\d{4}-\d{3}" title="O código postal que inseriu não é válido." placeholder="0000-000" name="zip">

        <br/>

        <label class="l-vol" for="f-local">
        	Localidade:<sup>*</sup>
        </label>
        <input placeholder="Localidade" class="i-vol" type="text" name="local">

        <br/>

        <label class="l-vol" for="f-cc">
        	B.I./CC:<sup>*</sup>
        </label>
        <input class="i-vol" name="cc" type="number" title="O número de identificação que inseriu não é válido" required="required" placeholder="12345678">
       
        <br/>

        <label class="l-vol" for="f-nif">
        	NIF:
        </label>
        <input class="i-vol" name="nif" type="number" title="O NIF que inseriu não é válido" placeholder="123456789"> 

        <br/>

        <label class="l-vol" for="f-nasc">
            Data de Nascimento:<sup>*</sup>
        </label>
        <input class="i-vol" name="nascimento" type="date" required="required"> <!-- type date -->

        <br/>

        <label class="l-vol" for="sex">Sexo</label>
        <select class="selectpicker" name="sex">
            <option value="f">Feminino</option>
            <option value="m">Maculino</option>
            <option value="i">Indefinido</option>
        </select>

        <br/>

        <label class="l-vol" for="f-email">
        	Email:<sup>*</sup>
        </label>
        <input class="i-vol" name="email" type="email" required="required" title="O email que inseriu não é válido." placeholder="exemplo@exemplo.pt">  <!-- type email -->

        <br/>
		
        <label class="l-vol" for="f-telefone">
        	Telefone:<sup>*</sup>
        </label>
        <input class="i-vol" name="telefone" type="number" required="required" pattern="[0-9]{9}" title="O telefone que inseriu não é válido."placeholder="941234567"> <!-- type number -->

        <br/>
<!-- 
        <label class="l-vol" for="f-chek" id="l-termos">
            Li e aceito os Termos
        </label>
        <!-- <input class="i-vol" type="checkbox" name="termos" value="Termos"> -->

        <br/>
        <br/>
        <br/>

        <input type="submit" name="inserir" value="Inserir">

            </br>
            </br>
            </br>

        <p>* Elementos de preenchimento obrigatório.</p>

    </div>
    </form>

</body>
</html>


<!--

https://www.w3schools.com/tags/att_pattern.asp
https://www.w3schools.com/html/html_form_attributes.asp
https://www.w3schools.com/tags/att_input_max.asp


-->