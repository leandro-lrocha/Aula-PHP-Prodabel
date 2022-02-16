<?php
 require 'conexaobanco.php';
 

 $antigoemail =  $_POST["Emailold"];
 $novoemail =  $_POST["Emailnew"];


  //Criando a conexão
  $conexao = new mysqli($servidor, $usuario, $senha, $bancodados);


  //Testando a conexão
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }

  // Query de Atualização

  // Verificar se o antigo email existe:


  $sql = "SELECT id, nome, sobrenome, email FROM usuarios where email = '".$antigoemail."'";
  $resultado = $conexao->query($sql);
  if ($resultado->num_rows > 0) {


      $sql = "update usuarios set email = '". $novoemail ."' where email = '".$antigoemail."'";
        if ($conexao->query($sql) === TRUE) {
          echo "Dados alterados com sucesso.";
        } else {
          echo "Error: " . $sql . "<br>" . $conexao->error;
       }


  } else {
    echo "Não existe o email " . $antigoemail . ' na base de dados.';
  }

 $conexao->close();
?>