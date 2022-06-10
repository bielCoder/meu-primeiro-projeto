<?php
include_once('config.php');



$id_nome =isset($_POST['id_nome'])?$_POST['id_nome']:0;
$nome =	isset($_POST['nome'])?$_POST['nome']:0;
$email = isset($_POST['email'])?$_POST['email']:0;
$telefone = isset($_POST['telefone'])?$_POST['telefone']:0;
$endereco = isset($_POST['endereco'])?$_POST['endereco']:0;
$complemento = isset($_POST['complemento'])?$_POST['complemento']:0;
$numero = isset($_POST['numero'])?$_POST['numero']:0;
$servicos = isset($_POST['servicos'])?$_POST['servicos']:0;


		if(mysqli_query($conexao,"UPDATE clientes SET id_nome = '$id_nome' ,nome = '$nome' , email = '$email', telefone = '$telefone' ,endereco =  '$endereco' , complemento =  '$complemento' ,numero =  '$numero' ,servicos = '$servicos'"))

		{
			echo"Alterado";
		}
		else{
			echo "erro";
		}



		if($_POST['acao']){
			header('location:painel.php');
		}




?>