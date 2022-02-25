<?php

include 'Turma18_conexao.php';

$IdExclusao = $_POST['IdExclusao'];

  //Criando a conexão
  $conexao = new mysqli($servidor, $usuario, $senha, $database);

  //Testando a conexão
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }


  $sql = "delete from contatos where id = ". $IdExclusao . ";"; 

   
  if ($conexao->query($sql) === TRUE) {
    echo "Registro Excluido Com Sucesso";
  } else {
    echo "Erro ao Excluir o Registro.: " . $conexao->error;
  }
  

 $conexao->close();