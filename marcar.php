<?php 
	
	include_once ("conexao.php");

	$nome = isset($_POST['nome'])?$_POST['nome']: "";
	$especialidade = isset($_POST['especialidade'])? $_POST['especialidade']: "";
	$email = isset($_POST['email'])?$_POST['email']:"";
	$cpf = isset($_POST['cpf'])?$_POST['cpf']:"";

	$sql = "INSERT INTO consultas(nome,consulta,email,cpf) VALUES ('$nome','$especialidade','$email','$cpf')";
	$acao = mysqli_query($conexao, $sql);

	$linhas = mysqli_num_rows($acao);
	if ($linhas==0) {
		header("Location: Pagina_inicial.php");	
	}else{
		echo("<script>alert('Cliente cadastrado com sucesso')");
	}


?>