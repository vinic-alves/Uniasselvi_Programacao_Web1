<html>
	<head>
		<title>Condicionais</title>
	</head>
	<body>
		<!-- Exemplo com IFs -->
		<?php
			/* Demonstração de if em PHP
			* De acordo com o valor da variável
			$saldoBancario
			* o resultado do programa pode variar.
			*/
			$saldoBancario = 42389.50;
			if ($saldoBancario >= 42390){
				echo "Vou comprar um carro 0km :-D";
			} else { // o else é opcional
				echo "Vou comprar um carro usado :-|";
			}
		?>
		
		
		<!-- Exemplo com Switch -->
		<?php
			/* Demonstração de switch em PHP
			* Mensagem de erro/sucesso para validação de formulários.
			* O algoritmo monta a mensagem de erro de acordo com
			* a quantidade de erros encontrada.
			*/
			$quantidadeErros = 3; // tem que ser maior ou igual a 0
			switch ($quantidadeErros){
				case 0:
					$mensagemDeErro = "Nenhum";
				break;
				case 1:
					$mensagemDeErro = "Um";
				break;
				case 2:
					$mensagemDeErro = "Dois";
				break;
				default:
					$mensagemDeErro = "Mais de dois";
			}
			$mensagemDeErro .= " erro(s) encontrado(s)";
			echo $mensagemDeErro;
		?>

	</body>
</html>