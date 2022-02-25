<?php

  include 'Turma18_conexao.php';


  echo '<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Site Turma 20 - Produtos</title>
        <link rel="icon" href="https://img.icons8.com/color/48/000000/group-of-fruits.png" sizes="16x16" type="image/png">
                
       <link href="../css/bootstrap.css" rel="stylesheet" >
       <link href="../css/estilos.css" rel="stylesheet" >
       
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


    </head>
    <body>

        <img class="imglogosuperior" src="..\img/logo.png" style="width:394px;height:150px;">
        <br>

        <div class="menus">
            <ul>
                <li><a href="..\index.php">Página Inicial</a></li>
                <li><a href="..\paginas\produtos.html">Produtos</a></li>
                <li><a href="..\paginas\login.html">Login</a></li>
                <li><a href="..\paginas\contato.html">Fale Conosco</a></li>
                <li><a href="..\paginas\trabalheconosco.html">Trabalhe Conosco</a></li>
                <li><a href="..\paginas\calculotributo.html">Calculo Tributo</a></li>
                <li><a href="..\paginas\Turma18_CadastroNewsletter.html">Cadastre em Nossa Newsletter</a></li>
                <li><a href="..\paginas\Turma18_ListagemNewsletter.php">Listagem Newsletter</a></li>
            </ul>
        </div>

        <p>Você esta na <a href="..\paginas\produtos.html">Listagem Newsletter</a></p>
     ';


 
  //Criando a conexão
  $conexao = new mysqli($servidor, $usuario, $senha, $database);


  //Testando a conexão
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }

  $sql = "SELECT id, nomecompleto, email, telefone FROM contatos where status = 0 order by nomecompleto";
  
  $resultado = $conexao->query($sql);

  if ($resultado->num_rows > 0) {

    //Saída de cada linha
  /*  while($linha = $resultado->fetch_assoc()) {

      echo "id: " . $linha["id"]. " - Nome Completo: " . $linha["nomecompleto"]. " - E-mail " . $linha["email"]. ". Telefone: " . $linha["telefone"] . "<br>";

    } */


    echo '<table class="table">';

    echo "<tr>
          <td>Id</td>
          <td>Nome Completo</td>
          <td>Email</td>
          <td>Telefone</td>
        </tr>";

    while($linha1 = $resultado->fetch_assoc()) {

      echo "<tr>
              <td>".$linha1["id"]."</td>
              <td>".$linha1["nomecompleto"]."</td>
              <td>".$linha1["email"]."</td>
              <td>".$linha1["telefone"]."</td>
            </tr>";
    }

    echo "</table>";


  } else {
    echo "Sem registros";
  }

  echo '<a href="..\paginas\Turma18_ExcluirRegistroNewsletter.html">ExcluirRegistro</a><br>
  <a href="..\paginas\Turma18_InativarRegistroNewsletter.html">Inativar Registro</a>
    <br><br>
      <footer>
                <p>© 2021 Autor Leandro Rocha - Todos os direitos reservados.</p>
              </footer>
          </body>
      </html>
      ';


  $conexao->close();
  
?>