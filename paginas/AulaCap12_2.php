<?php

require 'conexaobanco.php';
	

	//Criando o Banco de dados

	$sql = "CREATE DATABASE SiteTurma1920";

	if ($conexao->query($sql) === TRUE) {
		echo "Banco de dados Criado com sucesso";
	} else {
		echo "Erro ao criar o Banco de dados: " . $conexao->error;
	}
	
	$conexao->close();



?>