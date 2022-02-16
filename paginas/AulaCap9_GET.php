<?php

$quantidade = $_GET["qtproduto"];
$valorunitario = $_GET["vlproduto"];
$aliquota = $_GET["vlaliquota"];



echo "Quantidade de produto: " . $quantidade;
echo"</br>";
echo "Valor Unitário: " . $valorunitario;
echo"</br>";
echo "Aliquota: " . $aliquota. '%';
echo"</br>";
echo"</br>";


function calculatributo ($quantidade, $valorunitario, $aliquota = 3){

          $valorbruto = $quantidade * $valorunitario;

          echo 'Valor Bruto: ' . $valorbruto;
          echo"</br>";

          $aliquotaperc = ($aliquota / 100);

          echo 'Aliquota em percentual: ' . $aliquotaperc ;
          echo"</br>";

          $valoricms = $valorbruto * $aliquotaperc ;

          echo 'Valor do ICMS: ' . $valoricms ;
          echo"</br>";

          $valorliquido = $valorbruto + $valoricms;

          echo"</br>";
          echo 'Valor Liquido: ' . $valorliquido;
          echo"</br>"; 
      
          return ($quantidade * $valorunitario) + ( ($quantidade * $valorunitario ) * ($aliquota / 100));


         /* $quantidade = 75;
          echo"</br>";
          echo 'Dentro da função: '. $quantidade;*/
      }

    echo '<b>Calculo Produto - Formulário HTML </b>';
    echo"</br>";
    echo 'O valor liquido do produto informado é: ' . calculatributo($quantidade, $valorunitario, $aliquota) . '<br>';
    echo '<br>';

?>