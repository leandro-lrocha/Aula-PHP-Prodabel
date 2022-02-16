<?php
 require 'conexaobanco.php';
 

 $usuariocliente =  $_POST["usuariocliente"];
 $senhacliente =  $_POST["senhacliente"];


  //Criando a conexão
  $conexao = new mysqli($servidor, $usuario, $senha, $bancodados);


  //Testando a conexão
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }


  // Verificar se login é valido:


  $sql = "select usuario, senha, email, telefone, nome
	from login
	where (
			usuario = '" . $usuariocliente . "'
	        or email = '" . $usuariocliente . "'
	        or telefone = '" . $usuariocliente . "'
	        )
		and senha = '". md5($senhacliente) ."';";


  $resultado = $conexao->query($sql);
  if ($resultado->num_rows > 0) {

  	$linha = $resultado -> fetch_assoc();
    
      echo"Você esta logado, ". $linha["nome"]. ". Seja Bem Vindo!";

      session_start();
      $_SESSION["user"] = $usuariocliente;
      $_SESSION["nome"] = $linha["nome"];

      echo ' <a href="http://turma1920.com.br:8013/index.php">Voltar para o site.</a></li>';

  } else {
    echo "Usuario ou senha inválidos.";
  }


 $conexao->close();

?>