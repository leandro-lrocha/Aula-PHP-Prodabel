<?php


echo "## Estudo IF";
echo '<br>';

$hora = 3;

 if ($hora <= 6) {
    echo "Boa madrugada!";
  } elseif ($hora <= 12) {
    echo "Bom dia!";
  } elseif ($hora <= 18) {
    echo "Boa tarde!";
  }
  else {
    echo "Boa noite!";
}

/*
  Exemplo de diferenças de concatenação nas linguagens

  select 'VALOR: ' || $calculo from dual; -> oracle
  select concat('VALOR: ', $calculo); -> mysql
  select 'VALOR: ' + convert(varchar(50),$calculo) -> MS SQL Server
  select concat('VALOR: ', $calculo) -> MS SQL Server
  echo  "VALOR: ". $calculo; -> PHP
*/

echo '<br>';echo '<br>';
echo "## Estudo switch";
echo '<br>';

echo 'CALCULADORA';
echo '<br>';
echo '<br>';

$valor1 = 0;
$valor2 = 15;
$resultado = 0;
$operador = '+';

echo 'Valor 1: '.$valor1;
echo '<br>';
echo 'Valor 2: '.$valor2;
echo '<br>';
echo 'Operação: '.$operador;
echo '<br>';
switch ($operador) {

    case '+':
        $resultado =  $valor1 + $valor2
                        ;
        echo 'O resultado da soma é: ' . $resultado;
        break;

    case '-':
        $resultado = $valor1 - $valor2;
        echo 'O resultado da subtração é: ' . $resultado;
        break;

    case '*':
        $resultado = $valor1 * $valor2;
        echo 'O resultado da multiplicação é: '. $resultado;
        break;

    case '/':

        if ($valor2 == 0) {
            echo "Erro, divisão por zero.";

        }
        else {

        $resultado = $valor1 / $valor2;
        echo 'O resultado da divisão é: ' . $resultado;
      }
        break;

    default:
        echo 'A operação solicitada é invalida.';
       
}

?>


