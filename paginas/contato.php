<!DOCTYPE html>
<html>
	<head>
		


	</head>
	<body>

		

		<h2>Titulo dentro da tag h2 - Em HTML</h2>
		<!-- Comentario em html -->


		

		<?php

			$logo = "img/novalogo.jpg";

			echo '<img alt="Imagem da Logo" src="../' . $logo . '" style="width:394px;height:150px;" >';

			$variavel1 = 'Curso de PHP - Prodabel - PBH';

			


			echo "<h2 style >Titulo dentro do Echo - Em PHP<h2>";

			echo "<h3>" . $variavel1 . "</h3>";

			print "<p>Leandro Rocha</p>";

			// Estou inciando meu curso de php, este é um comentário inicial de linha. 

			/*
				Comentario linha 1
				Comentario linha 2
				Comentario linha 3
				Comentario linha 4
				Comentario linha 5
				Comentario linha 6
				Comentario linha 7
				Comentario linha 8
			*/

		?>

		<table border="2">

			<?php

				echo '<tr><td>' . $variavel1 . '</td></tr>'

			?>



		</table>


	

	</body>

</html>