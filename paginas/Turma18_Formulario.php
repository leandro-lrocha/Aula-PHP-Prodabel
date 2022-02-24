<?php

	function calculotributo ($quantidade, $valorunitario, $aliquota) 
	{
		$valorbruto = $quantidade * $valorunitario;
		$aliquotapercentual = $aliquota / 100;
		$valortributo = $valorbruto * $aliquotapercentual;

		/*echo "Valor Bruto = " . $valorbruto . "<br>";
		echo "Aliquota = ".$aliquotapercentual . "<br>";
		echo "Valor do <b>Tributo</b> = ".$valortributo . "<br>"; */

		return $valortributo;

	};

	$quantidade = $_POST["quantidade"];
	$valorunitario = $_POST["preco"];
	$aliquota = $_POST["aliquota"];

	echo "Quantidade : ".$quantidade ."<br>";
	echo "Valor Unitario : ".$valorunitario ."<br>";
	echo "Aliquota : ".$aliquota ."<br><br>";

	echo "O valor do tributo é: " . calculotributo($quantidade, $valorunitario, $aliquota);




?>