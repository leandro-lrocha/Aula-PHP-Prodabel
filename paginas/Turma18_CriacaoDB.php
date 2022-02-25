<?php

  include 'Turma18_conexao.php';
  
  //Criando a conexão

  $conexao = new mysqli($servidor, $usuario, $senha);

  //Testando a conexão

  if ($conexao -> connect_error) {

  die("Conexão falhou: " . $conexao->connect_error);
}

  //Criando o Banco de dados

  $sql = "CREATE DATABASE SiteTurma18";
  
  if ($conexao->query($sql) === TRUE) {
   echo "Banco de dados Criado com sucesso";
  } else {
   echo "Erro ao criar o Banco de dados: " . $conexao->error;
}
  $conexao->close();
?>