<?php

echo '<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Site Turma 20 - Login</title>
        
        <link href="../css/bootstrap.css" rel="stylesheet" >
        <link rel="stylesheet" href="../css/estilos.css">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


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

    ';

	$passaro = 'Canario';
	$valor1 = 1;
	$valor2 = 1.1;
	$valor3 = $valor1 + $valor2;
	/*Estou estudando PHP*/
	echo('<i>Estudo PHP.</i><br>'); 
	echo("<i>Estudo PHP 2.</i>");
	echo "<br>";
	echo "<br>";
	echo "O valor da variável passaro é: " . $passaro;
	echo "<br>";
	//var_dump($passaro);
	echo "<br>";
	echo "O valor da variável valor1 é: " . $valor1;
	echo "<br>";
	//var_dump($valor1);
	echo "<br>";
	echo "O valor da variável valor2 é: " . $valor2;
	echo "<br>";
	//var_dump($valor2);
	echo "<br>";

	print("Texto via print.");

	echo "<br>";
	echo "<br>";
	echo 'A soma dos valores é: '. $valor3;	


	echo "<br>";
	echo "<br>";

	$carrinho = array("Arroz","Feijão","Macarrão","Massa de Tomate", 'pão','leite','ovo','celular','tv','pneu',);

	echo "O valor do array carrinho na posição 0 é: </br>";
	echo $carrinho[0];


	$indice = 0;	
	$tamanhoarray = count($carrinho);

	echo '<br>';
	echo '<br>'; 	
	echo '### Percorrendo o Array Carrinho com Whille';
	echo '<br>';
	echo '<br>';


	 while($indice < $tamanhoarray) {
	   echo 'O conteudo na posição '.$indice.' é ' . $carrinho[$indice];
	   echo '<br>';
	   $indice++;
	}

	echo"<br>";
	echo"<br>";



echo "<br>";
echo "------- Array -------";
echo "<br>";

$passaros  = array(
		'Viuvinha (Colonia colonus)'
	);


//	var_dump($passaros);

$indice = 0;	
$tamanhoarray = count($passaros);

echo '<br>';
echo '<br>'; 	
echo '### Percorrendo o Array com Whille';
echo '<br>';
echo '<br>';


 while($indice < $tamanhoarray) {
   echo 'O conteudo na posição '.$indice.' é ' . $passaros[$indice];
   echo '<br>';
   $indice++;
}

echo"<br>";
echo"<br>";




echo "<body></html>";


?>