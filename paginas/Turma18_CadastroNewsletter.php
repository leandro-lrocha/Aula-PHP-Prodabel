<?php

include 'Turma18_conexao.php';

$nomecliente = $_POST["NomeCompleto"];
$emailcliente = $_POST["Email"];
$telefonecliente = $_POST["Telefone"];


  //Criando a conexão
  $conexao = new mysqli($servidor, $usuario, $senha, $database);

  //Testando a conexão
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }

/*
$sql = "insert into contatos (nomecompleto, email, telefone)
values ('Leandro Rocha 2', 'leandrorocha@outlook.com.br', '(31) 98888-8888')";
  */

$sql = "insert into contatos (nomecompleto, email, telefone)
values ('" . $nomecliente . "', '" . $emailcliente . "', '" . $telefonecliente . "')";



  if ($conexao->query($sql) === TRUE) {
    echo "Usuario inserido com sucesso";
  } else {
    echo "Erro ao inserir usuario: <br>" . $conexao->error;
  }

 $conexao->close();