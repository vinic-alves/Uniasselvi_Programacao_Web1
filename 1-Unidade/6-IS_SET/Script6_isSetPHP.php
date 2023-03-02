<html>
	<head>
		<title>Função IsSet</title>
	</head>
	<body>
		<h1>A variável não está declarada:</h1>
		<?php
			// Declara uma variável porém deixa-a nula:
			$variavel;
			if (isset($variavel)){
				echo "A variável está declarada!";
			} else {
				echo "A variável não está declarada!"; //
				//aqui :-);
			}
		?>
		<h1>A variável está declarada:</h1>
		<?
			// Declara uma variável e a inicializa:
			$variavel = "variável";
			if (isset($variavel)){
				echo "A variável está declarada!"; // aqui
				//:-)
			} else {
				echo "A variável não está declarada!";
			}
		?>
	</body>
</html>