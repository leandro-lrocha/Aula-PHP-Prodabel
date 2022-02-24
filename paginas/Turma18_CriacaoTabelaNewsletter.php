<?php
 
  include 'Turma18_conexao.php';

  //Criando a conexão
  $conexao = new mysqli($servidor, $usuario, $senha, $database);

  //Testando a conexão
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }


  //Criando a tabela
  $sql = "CREATE TABLE contatos (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nomecompleto VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  telefone varchar(20)
 )";

  


  if ($conexao->query($sql) === TRUE) {
    echo "Tabela Contato criada com sucesso";
  } else {
    echo "Erro ao criar a tabela: " . $conexao->error;
  }
  

 $conexao->close();
?>