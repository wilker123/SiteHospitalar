<?php
	include_once("conexao.php");
	include('navbar.php'); 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Marcar Consulta</title>
	<meta charset="utf-8">
	<style type="text/css">
		
		body{
			background-image: url(images/for.png);
			background-repeat: no-repeat;
			background-size: 100%;
		}
		#logar{
			margin-left: 30px;
			width: 10%;
			height: 40px;
			position: relative;
			top: -100px;
			color:	 white;
			background-color: #1E90ff;
			border-radius:16px;
			outline: none;
			opacity: 0.9;
		}
		#logar:hover{
			color: #0080FF;
			background-color: white;
			opacity: 0.7;
		}
		#el{
			background-color: #1E90ff;
			opacity: .7;
			width: 30%;
			margin: auto+800px;
			border-radius:16px;
			height: 510px
		}
		.cadastro{
			border: 1px solid #0080FF;
			border-radius: 20px;
			margin-left: 34px;
			width: 300px;
		}
		.text{
			color: white;
			margin-left: 34px;
		}

	</style>
</head>
<body>

	
	<div id="el" style="position: relative;top: 70px;margin-left: 850px">

		<form method="post" action="marcar.php">
				<legend style="color: white;font-size: 40px;margin-left: 30px;position: relative;top: 20px">Marcar Consulta</legend>
				<hr style="width: 70%; border: 5px solid #0080FF;position: relative;top: 0px;margin-left: 30px">
				<br>
				<h6 class="text">Nome completo:</h6><br>
				<input class="cadastro" type="text" name="nome" placeholder="Digite seu nome completo" style="position: relative;top: -20px">

				<br>
				<h6 class="text" style="position: relative;top: -10px;">Especialidade:</h6><br>
				<input class="cadastro" type="text" name="especialidade" placeholder="Que tipo de consulta deseja" style="position: relative;top: -35px;">
				<br>

				<br>
				<h6 class="text" style="position: relative;top: -40px">Email:</h6><br>
				<input class="cadastro" type="text" name="email" placeholder="Digite seu endereco" style="position: relative;top: -65px;">
				<br>
				<h6 class="text" style="position: relative;top: -50px">Cpf:</h6><br>
				
				<input class="cadastro" type="text" name="cpf" placeholder="000.000.000.00" style="position: relative;top: -73px;width: 170px;margin-left: 30px">		

					<input id="logar" style="width: 130px;font-size: 20px;border: 3px solid white;margin: auto+230px;position: relative;top: -110px" type="submit" name="marcar" value="Marcar">

			</form>	
		</div>
		


</body>
</html>