<?php
 require 'conexaobanco.php';

  //Criando a conexão
  $conexao = new mysqli($servidor, $usuario, $senha, $bancodados);
  //Testando a conexão
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }
  $sql = "insert into usuarios (nome, sobrenome, email)
  values ('Danuza', 'Rocha', 'danuzarocha@outlook.com.br')";
  if ($conexao->query($sql) === TRUE) {
    echo "Dados gravados com sucesso.";
  } else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
 }
 $conexao->close();
?>