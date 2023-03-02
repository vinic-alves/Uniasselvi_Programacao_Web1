<html>
	<head>
		<title>Laços de Repetição</title>
	</head>
	<body>
		<!-- Exemplo com While -->
		<H1>While</h1>
		<? Php
			/* Demonstração de while em PHP
			* O while recebe como parâmetro (entre parênteses)
			* um valor booleano e permanece em looping até quanto
			* a condição for verdadeira.
			*/
			$contador = 0;
			While ($contador++ < 10) {
				Echo $contador."<br />";
			}
		?>		
		
		<!-- Exemplo com For -->
		<h1>For</h1>
		<?
			/* Demonstração de for em PHP
			* O for recebe três parâmetros (entre parênteses
			*, separados por ponto e vírgula (;))
			* O primeiro é a inicialização do contador
			* O segundo é um booleano que define até quando o 	looping será executado
			* O terceiro é um incremento para o contador
			*/
			For ($contador = 1; $contador <= 10; $contador++){
				Eco $contador."<br />";
			}
		?>
	</body>
</html>