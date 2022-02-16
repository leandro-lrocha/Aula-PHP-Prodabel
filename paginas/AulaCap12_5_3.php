<?php
 require 'conexaobanco.php';

  //Criando a conexão
  $conexao = new mysqli($servidor, $usuario, $senha, $bancodados);
  //Testando a conexão
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }
  $sql = "delete from usuarios where nome like 'j%'";
  if ($conexao->query($sql) === TRUE) {
    echo "Dados excluidos com sucesso.";
  } else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
 }
 $conexao->close();
?>