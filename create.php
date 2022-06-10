
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<title>Page Title</title>
</head>
<body>

		<?php
			
		
		

						$id_nome = isset($_POST['id_nome'])?$_POST['id_nome']:"Não informado";
						$nome = isset($_POST['nome'])?$_POST['nome']:"Não informado";
						$email = isset($_POST['email'])?$_POST['email']:"Não informado";
						$telefone = isset($_POST['telefone'])?$_POST['telefone']:"Não informado";
						$endereco = isset($_POST['endereco'])?$_POST['endereco']:"Não informado";
						$complemento = isset($_POST['complemento'])?$_POST['complemento']:"Não informado";
						$numero = isset($_POST['numero'])?$_POST['numero']:"Não informado";
						$servicos = isset($_POST['servicos'])?$_POST['servicos']:"Não informado";	




									

			include_once('config.php');
			

			$result = mysqli_query($conexao,"INSERT INTO clientes(nome,email,telefone,endereco,complemento,numero,servicos)VALUES('$nome','$email','$telefone','$endereco','$complemento','$numero','$servicos')");

				

	
	




		?>



</body>
</html>







