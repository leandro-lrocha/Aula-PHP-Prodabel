<!DOCTYPE html>
<html lang="pt-BR">

<!-- Teste atualização git -->

    <head>
        <meta charset="UTF-8">
        <title>Site Turma 20 Prodabel - Página Inicial</title>
        <link rel="icon" href="https://img.icons8.com/fluency/48/000000/farmer-female.png" sizes="16x16" type="image/png">
        

        <link href="css/bootstrap.css" rel="stylesheet" >
        <link rel="stylesheet" href="css/estilos.css">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </head>



    <body>
        <!--
        <img src="img/logo.png"        width="394" height="150" >

         <img alt="Imagem da Logo" src="img/logo.png" style="width:394px;height:150px;" >

         <img alt="Imagem da Logo" src="img/logo.png" style="width:100%;height:100%;" >

    --> 
        <img class="imglogosuperior" alt="Imagem da Logo" src="img/logo.png" style="width:394px;height:150px;" >
        
        <br>
        <div class="menus">
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="paginas\produtos.html">Produtos</a></li>
                <li><a href="paginas\login.html">Login</a></li>
                <li><a href="paginas\contato.html">Fale Conosco</a></li>
                <li><a href="paginas\trabalheconosco.html">Trabalhe Conosco</a></li>
                <li><a href="paginas\Turma18_CadastroNewsletter.html">Cadastre em Nossa Newsletter</a></li>
                <li><a href="paginas\Turma18_ListagemNewsletter.php">Listagem Newsletter</a></li>
                <li><a href="paginas\calculotributo.html">Calculo Tributo</a></li>
            </ul>
        </div>

        <h1><div>Seja bem vindo 
            
        <?php
            //session_start();
            //echo $_SESSION["nome"];

            echo "Turma 18"

            /*echo (file_exists(session_save_path().'/sess_'.$_SESSION["user"]) ? $_SESSION["user"] : "");*/

        ?>
        </div></h1>
        <p>Você esta na PÁGINA INICIAL</p>

        <p class="paragrafoprincipal">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. <span>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</span> Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

        </p>

        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>




        <footer>
          © 2021 Autor Leandro Rocha - Todos os direitos reservados.
        </footer>

    </body>
</html>