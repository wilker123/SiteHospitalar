<?php 
	
	include("conexao.php");
?>

<?php 
//cadastro de usuario
		
	session_start();	
	if (isset($_POST['cadastrar'])) {
		
	$erros[] = array();
	$nome = isset($_POST['nome'])?$_POST['nome']:"";
	$email = isset($_POST['email'])?$_POST['email']:"teste";
	$carteirinha = isset($_POST['carteirinha'])?$_POST['carteirinha']:"";
	$nascimento = isset($_POST['nascimento'])?$_POST['nascimento']:"";
	$cpf = isset($_POST['cpf'])?$_POST['cpf']:"";

	if (empty($nome) or empty($email) or empty($carteirinha) or empty($nascimento) or empty($cpf)) {
		$erros[] = "<php <h4 style='color:blue;text-align:center;'>Preencha todos os campos</h4>?>";
	}else{

	$sql = "INSERT INTO plano_cliente(nome,email,carteira,dataNascimento,cpf) VALUES ('$nome','$email','$carteirinha','$nascimento','$cpf')";
	$acao = mysqli_query($conexao, $sql);

	$linhas = mysqli_num_rows($acao);
	if ($linhas==0) {
		
		header("Location: Pagina_inicial.php");
	}else{
		echo("<script>alert('Cliente cadastrado com sucesso')");
	}
	}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastrar Plano</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="utf-8">
	<style type="text/css">
		
		body{
			background-image: url(images/ro.png);

		}
		#te{
			margin-left: 110px;
			width: 10%;
			height: 40px;
			position: relative;
			top: -100px;
			color: white;
			background-color: #1E90ff;
			border-radius:10px;
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
			top: -100px;
			color:	 white;
			background-color: #1E90ff;
			border-radius:10px;
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
		#entra{
			background-color: #1E90ff;
			opacity: .7;
			width: 30%;
			margin: auto+800px;
			border-radius:16px;
			height: 510px
		}

	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark " style="padding: 10px;background: linear-gradient(to right top, #0fbcf9, #4bcffa);">
  <a class="navbar-brand" href="#" style="font-size: 40px;position: relative;top: -10px;font-family: merlim;margin-left: 20px">Vitae</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav" style="margin-left: 50px;font-size: 20px">
      <a class="nav-item nav-link active" href="Pagina_inicial.php" style="position: relative;top: -10px;">Página Inicial <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="quem_somos.php"style="position: relative;top: -10px;">Quem Somos</a>
      <a class="nav-item nav-link active" href="MarcarConsulta.php" style="position: relative;top: -10px;">Marcar Consulta</a>
      <a class="nav-item nav-link active" href="CadastrarPlano.php"style="position: relative;top: -10px;">Fazer Plano</a>
      <a class="nav-item nav-link active" href="Logout.php" style="position: relative;top: -10px;">Logout</a>
    </div><br><br><br>
  </div>
</nav>
<div id="el" style="position: relative;top: 100px;">
	<form method="post" action="PlanoAct.php">
				<legend style="color: white;font-size: 40px;margin-left: 30px;position: relative;top: 20px">Cadastrar o Plano</legend>
				<br>

				<?php 
							if (!empty($erros)) {
								foreach ($erros as $erro) {
									echo $erro;
								}
							}
						 ?>	

				<h6 class="text">Nome completo:</h6><br>
				<input class="cadastro" type="text" name="nome" placeholder="Digite seu nome completo" style="position: relative;top: -20px">

				<br>
				<h6 class="text" style="position: relative;top: -10px;">Email:</h6><br>
				<input class="cadastro" type="text" name="email" placeholder="Digite sua email" style="position: relative;top: -35px;">
				<br>
				<h6 class="text" style="position: relative;top: -25px">Carteirinha:</h6><br>
				<input class="cadastro" type="text" name="Carteirinha" placeholder="Digite sua senha" style="position: relative;top: -50px;">
				<br>
				<br>
				
				<h6 class="text" style="position: relative;top: -55px">Data de nascimento:</h6>
				<h6 class="text" style="margin-left: 200px;position: relative;top: -81px">CPF:</h6><br>

				<input class="cadastro" type="text" name="nascimento" placeholder="0000/00/00" style="position: relative;top: -105px;width: 150px">
				<input class="cadastro" type="text" name="cpf" placeholder="000.000.000.00" style="position: relative;top: -105px;width: 170px;margin-left: -0px">		

					<input id="logar" style="width: 130px;font-size: 20px;border: 3px solid white;margin: auto+120px;position: relative;top: -70px" type="submit" name="cadastrar" value="Cadastrar">

			</form>	
</div>

</body>
</html>