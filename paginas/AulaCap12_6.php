<?php
 require 'conexaobanco.php';
 
  //Criando a conexão
  $conexao = new mysqli($servidor, $usuario, $senha, $bancodados);

  //Testando a conexão
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }

  $sql = "SELECT id, nome, sobrenome, email FROM usuarios where nome like 'J%'";
  $resultado = $conexao->query($sql);
  if ($resultado->num_rows > 0) {
    //Saída de cada linha
    while($linha = $resultado->fetch_assoc()) {
      echo "id: " . $linha["id"]. " - Nome: " . $linha["nome"]. " " . $linha["sobrenome"]. " " . $linha["email"] . "<br>";
    }
  } else {
    echo "Sem registros";
  }
  $conexao->close();
?>