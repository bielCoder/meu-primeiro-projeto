







<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<style>
p.produto {
    margin: -10px;
    position: relative;
    top: 201px;
    left: 625px;
    z-index: 9999;
    color: #ffffff;
}
	</style>
</head>

<body>
		<?php 


			

		

			if(!isset($_SESSION['login'])){









				if(isset($_POST['acao'])){
					$login = 'admin';
					$senha = 'admin';

					$loginform = $_POST['login'];
					$senhaform = $_POST['senha'];
				}
				


				if($login == $loginform && $senha == $senhaform){
				
					//Logado com Sucesso.

					$_SESSION['login'] = true;
					header('location:painel.php');
				}


				//Algum erro.
				else{
					
					echo"<p class='produto'>Dados Inválidos</p>";
				}

				




				include('login.php');
			


			

				}



			else{
				if(isset($_GET['logout'])){
					unset($_SESSION['login']);
					session_destroy();
					header('Location:login.php');

				}


				include('painel.php');
			}





		?>
</body>




</html>