<?php


	$nomealuno = 'Caroline';


	echo'<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>' . $nomealuno. ' - Seja Bem Vinda!</title>
        <link rel="icon" href="https://img.icons8.com/color/48/000000/group-of-fruits.png" sizes="16x16" type="image/png">
                
       <link href="../css/bootstrap.css" rel="stylesheet" >
       <link href="../css/estilos.css" rel="stylesheet" >
       
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


    </head>
    <body>

        <img src="..\img/logo.png" style="width:394px;height:150px;">
        <br>

        <div class="menus">
            <ul>
                <li><a href="..\index.php">Página Inicial</a></li>
                <li><a href="..\paginas\produtos.html">Produtos</a></li>
                <li><a href="..\paginas\login.html">Login</a></li>
                <li><a href="..\paginas\contato.html">Fale Conosco</a></li>
                <li><a href="..\paginas\trabalheconosco.html">Trabalhe Conosco</a></li>
                <li><a href="..\paginas\acessoaluno.html">'.$nomealuno.'</a></li>
            </ul>
        </div>

        <p>Você esta na <a href="..\paginas\produtos.html">PRODUTOS</a></p>
        
        <p class="paragrafoprincipal">Paragrafo 1</p>
        <p>Paragrafo 2</p>
        <p>Paragrafo 3</p>

        <br>
        <br>
        <h3>Produtos</h3>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>Imagem
                </th>
                <th>Descrição
                </th>

            </tr>
            <tr>
                <th>    
                    <img src="..\img/kiwi.jpg" style="width:100px;height:100px;">
                </th>
                <th>
                    <p> <font size="5">Kiwi ou groselha chinesa é a baga comestível de várias espécies de videiras lenhosas do gênero Actinidia. O grupo de cultivares mais comum de kiwis é oval, com o tamanho aproximado de um ovo de galinha grande: 5–8 centímetros de comprimento e 4,5–5,5 cm de diâmetro. Wikipedia (inglês)</font></p>
                </th>
            </tr>

        </table>

        <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>


        <footer>
          <p>© 2021 Autor Leandro Rocha - Todos os direitos reservados.</p>
        </footer>
    </body>
</html>


'




?>