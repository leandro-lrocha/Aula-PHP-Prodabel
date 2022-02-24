<?php

include 'Turma18_conexao.php';

  //Criando a conexão
  $conexao = new mysqli($servidor, $usuario, $senha, $database);

  //Testando a conexão
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }


    


  if ($conexao->query($sql) === TRUE) {
    echo "Tabela Usuários criada com sucesso";
  } else {
    echo "Erro ao criar a tabela: " . $conexao->error;
  }
  

 $conexao->close();