<?php
 $a = "Olá Pessoal! ";
 $b = '2';
 $c = 2;
 var_dump($b);

 //echo $a;
 //echo $b;

  echo "<br>";
  echo "<br>";
  echo $b ** $c;
  echo "<br>";
  echo "<br>";


 echo "<br>";
 echo $a . "Sejam bem vindos." . $b;
 echo "<br>";
 echo "Olá Pessoal! ";
 echo "Estamos falando sobre Strings.";

$num1 = 32.01;
$num2 = 64;
$calculo = $num1 + $num2;
echo "<br>";
echo "--------------";
echo "<br>";
echo  "VALOR: ". $calculo;

echo "<br>";
echo "------- IF - ELSE -------";
echo "<br>";

$noite = false;
$chuva = false;

if ($noite != true )
    echo "Dia";
    else echo "Noite";

echo " - ";


if ($chuva == true) {
    echo "Está chovendo";
}
    else {
        echo "Não está chovendo";
    }



echo "<br>";
echo '<b>Teste 2: </b>';
if ($noite == true || $chuva == true)
    echo "Noite de Chuva";
    else echo 'Outra Situação';

echo "<br>";
echo "------- Array -------";
echo "<br>";

$lista  = array("Arroz","Feijão","Macarrão","Maionese","Catchup", "Biscoito");
$carros = array("Fiat Uno","Gol","Fiesta");

//var_dump($lista);

/*
echo $lista[0];
echo "<br>";
echo $lista[1];
echo "<br>";
echo $lista[2];
echo "<br>";
echo $lista[3];
echo "<br>";
echo $lista[4];
*/

echo "<br>";
echo "------- Array com FOR -------";
echo "<br>";

//unset($lista[2]);

echo 'Quantidade de itens no meu array: ' . count($lista);
echo "<br>";
echo "<br>";


echo "<b>For - Crescente</b>";
echo "<br>";

for($indice = 0 ; $indice < count($lista) ; $indice++ )
    {
        echo "O valor do meu indice é: " . $indice;
        echo " - Valor do array: " . $lista[$indice];
        //echo $lista[$indice];
        echo "<br>";
    }

echo "<b>For - Descrescente</b>";
echo "<br>";

for($indice = count($lista) - 1 ; $indice >= 0 ; $indice-- )
    {
        echo "O valor do meu indice é: " . $indice;
        echo " - Valor do array: " . $lista[$indice];
        //echo $lista[$indice];
        echo "<br>";
    }

echo "<br>";
echo "------- Atribuição -------";
echo "<br>";

$valor1 = 10;
$valor2 = 15;

echo 'Valor 1: '.$valor1;
echo "<br>";
echo 'Valor 2: '.$valor2;
echo "<br>";

//$valor2 = $valor1 + $valor2;

$valor2 += $valor1;

echo 'Valor atualizado: '.$valor2;

?>