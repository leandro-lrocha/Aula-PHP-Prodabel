<?php

	$servidor = "127.0.0.1:3308";
	$usuario = "site";
	$senha= "Site@123";
	$bancodados = "SiteTurma1920";

	//Criando a conexão
	$conexao = new mysqli($servidor, $usuario, $senha, $bancodados);

	//Testando a conexão
	if ($conexao -> connect_error) {
		die("Conexão falhou: " . $conexao->connect_error);
	}

?>