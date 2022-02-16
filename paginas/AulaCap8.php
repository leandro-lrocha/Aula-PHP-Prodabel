<?php


  function escreverNome() {

     echo "Aula de hoje, funções em PHP. ";
  

  }
 
  escreverNome(); //chamando a função





echo 'Function';
echo"</br>";
echo"</br>";

$quantidade = 10;
$valorunitario = 10;
$aliquota = 10;

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





   //'O valor liquido é: ' +  calculatributo(quantidade, valorunitario, aliquota);
   echo '<b>Calculo Produto 1</b>';
   echo"</br>";
   echo 'O valor liquido do produto 1 é: ' . calculatributo($quantidade, $valorunitario, $aliquota) . '<br>';
    echo '<br>';

    echo '<b>Calculo Produto 2</b>';
    echo"</br>";
   echo 'O valor liquido do produto 2 é: ' . calculatributo(20,25);
   
   echo"</br>";
   echo"</br>";
   /*
   echo 'fora da função: '.$quantidade;
*/



function addNumbers(float $a, float $b)  {
  return ($a + $b);
}
echo addNumbers(1.2, 5.2);



?>