<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "rebeca";
	$bd = "vitae";

	$conexao = mysqli_connect($host,$usuario,$senha,$bd);

	if (!$conexao) {
		die("Erro de conexao" .mysqli_connect_error());
	}


?>