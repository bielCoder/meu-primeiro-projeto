<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<title>Estofados Sul</title>
<link rel="stylesheet" href="css/select.css">
</head>
<body>










<?php


include_once('config.php');







$sql = mysqli_query($conexao,"SELECT * FROM clientes where nome like '%$_POST[nome]%' order by nome");


while($vetor = mysqli_fetch_array($sql)){
	$id_nome = $vetor['id_nome'];
	$nome = $vetor['nome'];
	$email = $vetor['email'];
	$telefone = $vetor['telefone'];
	$endereco = $vetor['endereco'];
	$complemento = $vetor['complemento'];
	$numero = $vetor['numero'];
	$servicos = $vetor['servicos'];

echo"<table>";
							
				
		
		
		

		echo "<th class = 'nome'>Nome</th><div class='nome'><p class = 'nome'>$nome</p></div><br/>";


	
		echo"<a href='delete.php?telefone=$telefone' class='icone' onclick='pergunta()'  name='deletar' target='_self'>
				<img name='icon'  class = 'icon' src='img/iconedel.png'>
				</a>";
		

		echo"<a href='contatoedit.php?id_nome=$id_nome&&nome=$nome&&email=$email&&telefone=$telefone&&endereco=$endereco&&complemento=$complemento&&numero=$numero&&servicos=$servicos' name='editar target='janela' class='icone2'>
			<img name='icon2' class='icon2' src='img/iconedit.png'>

			</a>";	
	
		



		

			



	

		echo "<div class='fundo-icon'>";
		echo"</div>";

		echo "<th class = 'email'>Email</th><div class='email'><p class = 'email'>$email</p></div><br/>";
	
		echo "<th class = 'telefone'>Telefone</th><div class='telefone'><p class = 'telefone'>$telefone</p></div><br/>";
		
		echo "<th class = 'endereco'>Endereço</th><div class='endereco'><p class = 'endereco'>$endereco</p></div><br/>";
		
		echo "<th class = 'complemento'>Complemento</th><div class='complemento'><p class='complemento'>$complemento</p></div><br/>";
	
		echo "<th class = 'numero'>Numero</th><div class='numero'><p class='numero'>$numero</p></div><br/>";
	
		echo "<th class = 'servicos'>Serviço</th><div class='servicos'><p class='servicos'>$servicos</p></div><br/>";

		echo "<th class ='acoes'>Ações</th>";}
				


echo"</table>";


?>







</body>
</html>



