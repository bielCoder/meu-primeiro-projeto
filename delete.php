<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<title>Page Title</title>
</head>
<body>

	

		<?php


			
		include_once('config.php');

				$telefone = $_GET['telefone'];
				
				

			 



				if($result = mysqli_query($conexao,"DELETE FROM clientes WHERE telefone= '$telefone'"))




				{
					header('location:painel.php');

				
					echo $nome."&nbsp; foi removido com Sucesso!";

				}
				else{
					echo"erro";
				}






					


		




				

		?>






</body>
</html>
