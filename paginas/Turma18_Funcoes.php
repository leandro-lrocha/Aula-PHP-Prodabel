<?php

	echo "<h1>Estudo de funções</h1>";

	
	function calculotributo ($quantidade, $valorunitario, $aliquota) 
	{
		$valorbruto = $quantidade * $valorunitario;
		$aliquotapercentual = $aliquota / 100;
		$valortributo = $valorbruto * $aliquotapercentual;

		echo "Valor Bruto = " . $valorbruto . "<br>";
		echo "Aliquota = ".$aliquotapercentual . "<br>";
		echo "Valor do <b>Tributo</b> = ".$valortributo . "<br>";

	};

	$quantidade = 4;
	$valorunitario = 1200;

	echo "<h3>ICMS</h3><br>";

	$aliquota = 20; // Percentual do ICMS

	echo calculotributo($quantidade, $valorunitario, $aliquota);

	echo "<h3>IPI</h3><br>";
	$aliquota = 5; // Percentual do IPI
	echo calculotributo($quantidade, $valorunitario, $aliquota);

	echo "<h3>COFINS</h3><br>";
	$aliquota = 3; // Percentual do Cofins
	echo calculotributo($quantidade, $valorunitario, $aliquota);
?>