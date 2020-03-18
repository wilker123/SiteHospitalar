<?php 
	include_once("conexao.php");



	session_start();

	$nome = isset($_POST['nome'])?$_POST['nome']:"";
	$email = isset($_POST['email'])?$_POST['email']:"teste";
	$senha = isset($_POST['senha'])?$_POST['senha']:"";
	$telefone = isset($_POST['telefone'])?$_POST['telefone']:"";
	$nascimento = isset($_POST['nascimento'])?$_POST['nascimento']:"";
	$cpf = isset($_POST['cpf'])?$_POST['cpf']:"";

	$sql = "INSERT INTO cliente(nome,email,senha,telefone,dataNascimento,cpf) VALUES ('$nome','$email','$senha','$telefone','$nascimento','$cpf')";
	$acao = mysqli_query($conexao, $sql);

	$linhas = mysqli_num_rows($acao);
	if ($linhas==0) {
		$dados = mysqli_fetch_array($acao);
		$_SESSION['logado'] = true;
		$_SESSION['id_usuario'] = $dados['id'];
		header("Location: Pagina_inicial.php");
		
	}else{
		echo("<script>alert('Cliente cadastrado com sucesso')");
	}

?>