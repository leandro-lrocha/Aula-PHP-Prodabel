<!DOCTYPE html>
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

        <img src="..\img/logo.png" style="width:394px;height:150px;">
        <br>

        <div class="menus">
            <ul>
                <li><a href="..\index.php">Página Inicial</a></li>
                <li><a href="..\paginas\produtos.html">Produtos</a></li>
                <li><a href="..\paginas\login.html">Login</a></li>
                <li><a href="..\paginas\contato.html">Fale Conosco</a></li>
                <li><a href="..\paginas\trabalheconosco.html">Trabalhe Conosco</a></li>
            </ul>
        </div>

         <form method="post" action="/paginas/cadastrodb.php">

                <p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first">
            <label for="firstname">Nome<span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="firstname" id="firstname" value="" required="">
        <div class="invalid-feedback">This field is required</div></p>

        <p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
            <label for="lastname">Sobrenome <span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="lastname" id="lastname" value="" required="">
        <div class="invalid-feedback">This field is required</div></p>
        

        <p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
            <label for="usuariocliente">Usuario <span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="usuariocliente" id="usuariocliente" value="" required="">
        <div class="invalid-feedback">This field is required</div></p>
        
        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="reg_email">Email<span class="required">*</span></label>
            <input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="reg_email" id="reg_email" value="" required="">
        <div class="invalid-feedback">This field is required</div></p>

        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="telefone">Telefone<span class="required">*</span></label>
            <input type="tel" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="telefone" id="telefone" value="" required="">
        <div class="invalid-feedback">This field is required</div></p>

        
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                <label for="password">Senha <span class="required">*</span></label>
                <input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="password" id="password" required="">
            <div class="invalid-feedback">This field is required</div></p>

        
        <div class="col-12">
                <button class="btn btn-primary" type="submit">Criar</button>
            </div>

        


        
    </form>


        <footer>
          <p>© 2021 Autor Leandro Rocha - Todos os direitos reservados.</p>
        </footer>
    </body>
</html>







       

      
        



