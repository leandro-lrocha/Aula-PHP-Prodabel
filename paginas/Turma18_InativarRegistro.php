<?php

include 'Turma18_conexao.php';

$IdInativacao = $_POST['IdInativacao'];

  //Criando a conexão
  $conexao = new mysqli($servidor, $usuario, $senha, $database);

  //Testando a conexão
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }


  $sql = "update contatos set status = 1 where id = ". $IdInativacao . ";"; 

   
  if ($conexao->query($sql) === TRUE) {
    echo "Registro Inativado Com Sucesso";
  } else {
    echo "Erro ao Inativar o Registro.: " . $conexao->error;
  }
  

 $conexao->close();