<?php
 require 'conexaobanco.php';

 $nomecliente = $_POST["Nome"];
 $sobrenomecliente = $_POST["Sobrenome"];
 $emailcliente = $_POST["Email"];

  //Criando a conexão
  $conexao = new mysqli($servidor, $usuario, $senha, $bancodados);
  //Testando a conexão
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }
  $sql = "insert into usuarios (nome, sobrenome, email)
  values ('" . $nomecliente ."', '" .  $sobrenomecliente . "', '" . $emailcliente . "')";
  
  if ($conexao->query($sql) === TRUE) {
    echo "Dados gravados com sucesso.";
  } else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
 }

/*echo $sql;*/

 $conexao->close();
?>