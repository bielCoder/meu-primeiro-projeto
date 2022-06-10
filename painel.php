

<?php 

session_start();
if(!isset($_SESSION['login'])){
	header('location:login.php');
}


?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet"  href="css/painel.css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
	
	
	
	<title>Estofados Sul</title>
		<style>
			

			@font-face {
				font-family: 'fontlogo';
					src: url(css/fonts/DancingScript-Regular.ttf);
			}

			body{
			background-color: rgb(249, 249, 249);
			}

			/*Aqui comeca conteudo*/

			
		div.img {
    background-image: url(img/icone-contato.png);
    padding: 100px;
    position: absolute;
    left: 458px;
    top: 430px;
}

		
		</style>

		<script>
			
			function alerta(){
					alert("Seus dados foram Enviados com Sucesso,aguarde o contato do responsável");
			}

		</script>


</head>
<body>
			<div id="posicao" >
			

			<!--Aqui é o corpo-->
			<div id="foco">



			
					<img class="logo3" src="img/logo3.png" width="100" height="50">
					<img class="logo4" src="img/logo3.png" width="100" height="50">

					<form method="post" action="painel.php">


						<?php



						
						
						if(isset($_POST['nome'])){


						include_once('select.php');
						

							
					
								}


							if(isset($_POST['deletar'])){


						include_once('select.php');
						include_once('delete.php');

							}
						


						


?>


					<a href='index.php?logout' name='logout' class="logout">Sair</a>

					<input type="text" name="nome" class="nome" placeholder="Search Name"/>
					<input class="mostrar" type="submit" name="mostraTabela" value="Buscar"/>

					<?php?>



					

					


					
						

						


				</div>


					



				

	<div id="logo">
		<center><h1 class="titulo">Lojão Estofados do Sul</h1></center>
		<center><h2 class="sub">Painel de Controle</h2></center>
		
	</div>		


		


       



		
				
				

		<div id="rodape">

			<h2 class="fim">&copy;2021 Lojão Estofados do Sul</h2>
			</div>
		</div>
		</div>	
	</div>	
</body>
</html>