<?php
	
	$dbhost = 'localhost';
	$dbUsername = 'root';
	$dbpassword ='';
	$dbName = 'usuario';

	$conexao = new mysqli($dbhost,$dbUsername,$dbpassword,$dbName);

	
/*
	if($conexao ->connect_errno){
		echo "Erro";
	}

	else{
		echo "Conexão efetuada com sucesso!";
	}

*/



?>