<?php


	$valor1 = 1;
	$valor2 = 2;


	echo 'Resultado do valor 1: ' . $valor1;
	echo '<br>';
	//var_dump($valor1);
	echo 'Resultado do valor 2: ' . $valor2;
	echo '<br>';

	$valor3 = $valor1 + $valor2;

	echo 'Soma dos valores: ' . $valor3;


	echo '<br>';
	echo '<br>';

	echo 'Estudo Array';

	$carrinho = array("Arroz","Feijão","Macarrão","Massa de Tomate", 'pão','leite','ovo','celular','tv','pneu');

 	//var_dump($carrinho);

 	echo '<br>';
	echo '<br>';

 	echo $carrinho[4]; 

 	echo '<br>';
	echo '<br>';

	echo '<br>';
	echo '<br>';

 	echo 'Estudo While';

 	echo '<br>';
	echo '<br>';

	$tamanhorArray = count($carrinho);
	$indice = 0;

	$ordem = 1;

 	while($indice < $tamanhorArray ) {
 		echo "A informação do meu array na posição " . $indice . " é " . $carrinho[$indice];

 		//echo "Item " . $ordem . " - Produto " . $carrinho[$indice];
 		echo '<br>';

 		$indice++;
 		$ordem++;

 	}

 	echo '<br>';
	echo '<br>';

 	echo 'Estudo While - decremento';

 	echo '<br>';
	echo '<br>';

 	$indice = $tamanhorArray - 1;

	$ordem = 1;

 	while($indice >= 0 ) {
 		echo "A informação do meu array na posição " . $indice . " é " . $carrinho[$indice];

 		//echo "Item " . $ordem . " - Produto " . $carrinho[$indice];
 		echo '<br>';

 		$indice--;
 		$ordem++;

 	}

 	echo '<br>';
	echo '<br>';

	echo 'Estudo IF';

	echo '<br>';
	echo '<br>';

	$noite = '1';

	if ( $noite !== 1 )
		{
			echo "É noite - caiu no if";
		}
		else {
			echo "É dia - caiu no else";
		}

	echo '<br>';
	echo '<br>';







?>