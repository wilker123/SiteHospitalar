<?php 
	include_once("conexao.php");

	$nome = isset($_POST['nome'])?$_POST['nome']:"teste";
	$email = isset($_POST['email'])?$_POST['email']:"";
	$carteira = isset($_POST['carteira'])?$_POST['carteira']:"";
		
		$sql = "SELECT *FROM plano_cliente WHERE nome = '$nome'";
		$acao = mysqli_query($conexao, $sql);

		while($array = mysqli_fetch_array($acao)){
			$emailBanco = $array['email'];
		}

		$linhas = mysqli_num_rows($acao);
		if ($nome=="teste") {
			echo "";
		}else{
		if ($linhas==0) {
			header("Location: EntrarPlano.php");
		}else{
			if ($email!=$emailBanco) {
				header("Location: EntrarPlano.php");
		}else{

			header("Location: MarcarConsulta.php");

		}
	}

}


		

?>