
<?php 

require('config.php');

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet"  href="css/contatoedit.css">
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

			
			div.imagem{
				background-image: url(img/venda11.png);}

			div.imagem2{
				background-image: url(img/venda12.png);}	
			div.imagem3{
				background-image: url(img/venda13.png);}
		
			div.imagem33{
				background-image: url(img/venda13.png);}
		
			div.imagem4{
				background-image: url(img/venda14.png);}

	div.img {
    background-image: url(img/icone-contato.png);
    padding: 100px;
    position: absolute;
    left: 458px;
    top: 274px;
}

		
		</style>

		<script>
			
			function alerta(){
					alert("Os dados foram atualizados,recarregue a página do painel!");
			}

		</script>


</head>
<body>
			<div id="posicao" >
			

			<!--Aqui é o corpo-->
			<div id="foco">



				
					<img class="logo3" src="img/logo3.png" width="100" height="50">
					<img class="logo4" src="img/logo3.png" width="100" height="50">

					
						<form method="post" action="update.php">					

							<div class="posicao">

						<fieldset id="formu"><legend class="titu">EDITOR&nbsp;DE&nbsp;DADOS</legend>


						<label for="nome"><p class="nome">Nome</p></label><input type="text" maxlength="11" name="nome" id="nome" placeholder="Ex:Maria" value="<?php echo"$_GET[nome]";?>" required/>


						<label for="email"><p class="email">E&nbsp;mail</p></label><input type="email" name="email" id="email" placeholder="Ex:mariajose@gmail.com" value="<?php echo"$_GET[email]";?>" required/>

						<label for="telefone"><p class="telefone">Telefone</p></label><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="telefone" id="telefone" placeholder="Ex:(61)99999-9999"  value="<?php echo"$_GET[telefone]";?>" required/>

						<label for="endereco"><p class="endereco">Endereço</p></label><input type="address" name="endereco" id="endereco" placeholder="Rua,Aven,Trave"  value="<?php echo"$_GET[endereco]";?>" required/>


						<label for="complemento"><p class="complemento">Complemento</p></label><input type="text" name="complemento" id="complemento" placeholder="Casa,Apart,Prédio"  value="<?php echo"$_GET[complemento]";?>"required/>

						<label for="numero"><p class="numero">Número</p></label><input type="number" name="numero" id="numero" placeholder="Nº"  value="<?php echo"$_GET[numero]";?>" required/>

					<p class="select">Servico&nbsp;Desejado</p><select class="servicos" name="servicos" value="<?php echo"$_GET[servicos]";?>" >
							
							<option >Comprar</option>
							<option >Reformar</option>
							<option >Impermeabilizar</option>
						

						</select>	


						<input class="botao" type="submit" value="Enviar" name="acao" onclick="alerta()">


						</fieldset>
					</div>

						
						<div class="fundo-form">
						</div>
						<div class="fundo-form2">
						</div>



						<div class="img"></div>

					</form>

	

				
						

						

						
				

			

				</div>


					



				

	<div id="logo">
		<h1 class="titulo">Lojão Estofados do Sul</h1>
		<h2 class="sub">Painel de Controle</h2>
		
	</div>		


		

		

         <div class="navbar">
               
         </div>

         <div class="navbar2">
               
         </div>





		
				
				

		<div id="rodape">

			<h2 class="fim">&copy;2021 Lojão Estofados do Sul</h2>
			</div>
		</div>
		</div>	
	</div>	
</body>
</html>