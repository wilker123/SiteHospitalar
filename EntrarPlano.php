<?php 
	include_once("conexao.php");
 include('navbar.php'); 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Plano Vitae</title>
	<style type="text/css">
		
		body{
			background-image: url(images/htt.png);
			background-repeat: no-repeat;
			background-size: 100%;
			/*margin-bottom: 50px;*/

		}
		#entra{
			background-color: #0080FF;
			opacity: .5;
			width: 30%;
			margin: auto+800px;
			border-radius:10px;
			height: 510px
		}
		.cadastro{
			border: 1px solid #0080FF;
			border-radius: 10px;
			margin-left: 34px;
			width: 300px;
		}
		.text{
			color: white;
			margin-left: 34px;
		}
		#logar{
			margin-left: 30px;
			width: 10%;
			height: 40px;
			position: relative;
			top: -100px;
			color:	 white;
			background-color: #0080FF;
			border-radius:16px;
			outline: none;
			opacity: 0.9;
		}
		#logar:hover{
			color: #0080FF;
			background-color: white;
			opacity: 0.7;
		}
		
		.navbar-brand{
			margin-left: -0.5em;
			padding-top: 1em;
		}

	</style>
</head>
<body>

		<a href="CadastrarPlano.php"><h1 style="position: relative;top: 250px;margin-left:50px;color: #0080FF;font-size: 65px;">Faça já seu plano Vitae<br>Sua saúde é o nosso foco </h1><br></a>



		<div id="entra" style="position: relative;top: -10px; width: 350px; height: 400px;margin-left: 900px">

				<form action="loginPlano.php" method="post"> 
					
					<legend class="text" style="font-size: 40px;position: relative;top: 20px;">Entrar</legend>


					
					<h6 class="text" style="position: relative;top: 30px; ">Nome:</h6>
					<input class="cadastro" type="text" name="nome" placeholder="Digite seu nome" style="position: relative;top: 26px">
					<h6 class="text" style="position: relative;top: 30px; ">Email:</h6>
					<input class="cadastro" type="text" name="email" placeholder="Digite seu email" style="position: relative;top: 26px">

					<h6 class="text" style="position: relative;top: 30px; ">Carteirinha:</h6>
					<input class="cadastro" type="text" name="carteira" placeholder="Digite o número de sua carteira" style="position: relative;top: 26px">

				<input id="logar" style="width: 130px;font-size: 20px;border: 3px solid white;margin: auto+120px;position: relative;top: 50px" type="submit" name="entrar" value="Entrar">
				</form>
		
			</div>



</body>
</html>