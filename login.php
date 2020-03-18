
<?php 
	include_once("conexao.php");
?>

<?php 

session_start();

	if (isset($_POST['entrar'])) {
		$erros = array();
		$email = mysqli_escape_string($conexao, $_POST['email']);
		$senha = mysqli_escape_string($conexao, $_POST['senha']);

		if (empty($email) or empty($senha)) {
			$erros[] = "<h4 style='text-align:center;color:red;position:relative;top:20px'>Preencha os campos</h4>";
		}else{
			$sql = "SELECT email FROM cliente WHERE email = '$email'";
			$resultado = mysqli_query($conexao, $sql);

			if (mysqli_num_rows($resultado) > 0) {
				$sql = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
				$resultado = mysqli_query($conexao, $sql);

						if (mysqli_num_rows($resultado) == 1) {
							$dados = mysqli_fetch_array($resultado);
							$_SESSION['logado'] = true;
							$_SESSION['id_usuario'] = $dados['id'];
							header("Location: Pagina_inicial.php");
						}else{
							$erros[] = "<h4>Usuário/senha não conferem</h4>";
						}
			}else{
				$erros[] = "<h4 style='text-align:center;color:red;position:relative;top:20px'>Usuário inexistente</h4>";
			}
		}
	
}
		
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="js.jquery.min">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script
>

	<script type="text/javascript">
		
		function Mudarestado(el) {
  				var display = document.getElementById('el').style.display;
  				if (display == "none"){
    				document.getElementById('el').style.display = 'block';
  				}else{
    				document.getElementById('el').style.display = 'none';
				}
			}
		function Mudarestado2(entra) {
  				var display = document.getElementById('entra').style.display;
  				if (display == "none"){
    				document.getElementById('entra').style.display = 'block';
  				}else{
    				document.getElementById('entra').style.display = 'none';
				}
			}

			$(document).ready(function(){
     		$('#cpf').mask("999.999.999.99");
     		$('#telefone').mask("(99) 99999 9999");
     		$("#data").mask("9999/99/99	");
		});

	</script>

	<style type="text/css">

		body{
			background-image: url(images/entrar.jpg);
			background-repeat: no-repeat;
			background-size: 100%;
		}

		#te{
			margin-left: 110px;
			width: 10%;
			height: 40px;
			position: relative;
			top: -99px;
			color: white;
			background-color: #1E90ff;
			border-radius:16px;
			outline: none;
			opacity: 0.9;
		}
		#te:hover{
			color: #0080FF;
			background-color: white;
			opacity: 0.7;
		}		
		#logar{
			margin-left: 30px;
			width: 10%;
			height: 40px;
			position: relative;
			top: -99px;
			color:	white;
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
		#entra{
			background-color: #1E90ff;
			opacity: .7;
			width: 30%;
			margin: auto+800px;
			border-radius:16px;
			height: 510px;
		}
	</style>

</head>
<body>

	<div>

		<img style="width: 40%" src="images/logo2.png">
		<h2  style="color: white;position: relative;top: -160px;;margin-left: 110px">Sua saúde em primeiro plano</h2>

		<input id="te" type="button" value="Cadastrar" onclick="Mudarestado()">

		<input id="logar" type="button" value="Entrar" onclick="Mudarestado2()">
		<h5 style="position: relative;top: -155px;font-size: 9px;margin-left: 120px;color: white">Não possui uma conta?</h5>
		<h5 style="position: relative;top: -173px;font-size: 9px;margin-left: 290px;color: white">Já possui uma conta?</h5>

		<div id="el" style="display:none;position: relative;top: -600px;">



			<form method="post" action="cadastro.php">
				<legend style="color: white;font-size: 40px;margin-left: 30px">Registro</legend>
				<br>
				<h6 class="text">Nome completo:</h6><br>
				<input class="cadastro" type="text" required="" name="nome" placeholder="Digite seu nome completo" style="position: relative;top: -20px">

				<br>
				<h6 class="text" style="position: relative;top: -10px;">Email:</h6><br>
				<input class="cadastro" type="text" name="email" required="" placeholder="Digite sua email" style="position: relative;top: -35px;">
				<br>
				<h6 class="text" style="position: relative;top: -25px">Senha:</h6><br>
				<input class="cadastro" type="password" required="" name="senha" placeholder="Digite sua senha" style="position: relative;top: -50px;">

				<br>
				<h6 class="text" style="position: relative;top: -40px">Telefone:</h6><br>
				<input class="cadastro" type="text" required="" name="telefone" id="telefone" placeholder="Digite seu telefone" style="position: relative;top: -65px;">
				<br>
				<h6 class="text" style="position: relative;top: -55px">Data de nascimento:</h6>
				<h6 class="text" style="margin-left: 200px;position: relative;top: -81px">CPF:</h6><br>

				<input class="cadastro" type="text" name="nascimento" id="data" required="" placeholder="0000/00/00" style="position: relative;top: -105px;width: 150px">

				<input class="cadastro" type="text" maxlength="15" name="cpf" id="cpf" style="position: relative;top:-105px;width: 170px;margin-left: -0px">		

					<input id="logar" style="width: 130px;font-size: 20px;border: 3px solid white;margin: auto+120px;position: relative;top: -100px" type="submit" name="cadastrar" value="Cadastrar">

			</form>	

			
		</div>

			<div id="entra" style="display: none;position: relative;top: -550px; width: 350px; height: 400px">


				<form action="login.php" method="post"> 

					
					<legend class="text" style="font-size: 40px;position: relative;top: 20px;">Entrar</legend>

						<?php 
							if (!empty($erros)) {
								foreach ($erros as $erro) {
									echo $erro;
								}
							}
						 ?>	

					<h6 class="text" style="position: relative;top: 30px; ">Email:</h6>
					<input class="cadastro" type="text" name="email" placeholder="Digite seu email" style="position: relative;top: 26px">

					<h6 class="text" style="position: relative;top: 30px; ">Senha:</h6>
					<input class="cadastro" type="password" name="senha" placeholder="Digite seu email" style="position: relative;top: 26px">


				<input id="logar" style="width: 130px;font-size: 20px;border: 3px solid white;margin: auto+120px;position: relative;top: 50px" type="submit" name="entrar" value="Entrar">

				</form>
		
			</div>

	</div>



</body>
</html>