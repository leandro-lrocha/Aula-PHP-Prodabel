<?php
 require 'conexaobanco.php';

 $nomecliente = $_POST["firstname"];
 $sobrenomecliente = $_POST["lastname"];
 $usuariocliente = $_POST["usuariocliente"];
 $emailcliente = $_POST["reg_email"];
 $telefone = $_POST['telefone'];
 $password = $_POST["password"];


  //Criando a conexão
  $conexao = new mysqli($servidor, $usuario, $senha, $bancodados);
  //Testando a conexão
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }
  $sql = "insert into login (nome, sobrenome, usuario, email, telefone, senha)
  values ('" . $nomecliente ."', '" .  $sobrenomecliente . "', '" . $usuariocliente . "', '" . $emailcliente . "', '" . $telefone ."', '" . MD5($password)  . "')";
  
  if ($conexao->query($sql) === TRUE) {
    echo "Dados gravados com sucesso.";
    echo '<br><br><li><a href="..\paginas\login.html">Voltar para a tela inicial</a></li>';
  } else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
 }



 $conexao->close();

 
?>