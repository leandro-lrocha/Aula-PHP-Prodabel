<?php

 
 require 'conexaobanco.php';

  //Criando a tabela
  $sql = "CREATE TABLE usuarios (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      nome VARCHAR(30) NOT NULL,
      sobrenome VARCHAR(30) NOT NULL,
      email VARCHAR(50)
     )";
  if ($conexao->query($sql) === TRUE) {
      echo "Tabela Usuários criada com sucesso";
  } else {
      echo "Erro ao criar a tabela: " . $conexao->error;
  }
 $conexao->close();

?>