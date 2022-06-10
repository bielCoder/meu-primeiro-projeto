 <?php

include_once('create.php');




?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet"  href="css/contato.css">
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
			<aside>
			<div id="foco">



				<div id="banner">
					<p class="principal">Preencha&nbsp;nosso&nbsp;formulário&nbsp;que&nbsp;um&nbsp;de&nbsp;nossos&nbsp; &nbsp;representantes&nbsp;entrará&nbsp;em&nbsp;contato.<p class = "para2" ><a id="cor" href="contato.php" target="_self">Solicite já o seu orçamento!</a></p>
					</p> 
				</div>
					<img class="logo3" src="img/logo3.png" width="100" height="50">
					<img class="logo4" src="img/logo3.png" width="100" height="50">

					
						<form method="post" action="contato.php">					

							

						<fieldset id="formu"><legend class="titu">DADOS&nbsp;PARA&nbsp;ATENDIMENTO</legend>


						<label for="nome"><p class="nome">Nome</p></label><input type="text" maxlength="11" name="nome" id="nome" placeholder="Ex:Maria" required/>


						<label for="email"><p class="email">E&nbsp;mail</p></label><input type="email" name="email" id="email" placeholder="Ex:mariajose@gmail.com" required/>

						<label for="telefone"><p class="telefone">Telefone</p></label><input type="number"  name="telefone" id="telefone" placeholder="Ex:(61)99999-9999" required/>

						<label for="endereco"><p class="endereco">Endereço</p></label><input type="address" name="endereco" id="endereco" placeholder="Rua,Aven,Trave" required/>


						<label for="complemento"><p class="complemento">Complemento</p></label><input type="text" name="complemento" id="complemento" placeholder="Casa,Apart,Prédio" required/>

						<label for="numero"><p class="numero">Número</p></label><input type="number" name="numero" id="numero" placeholder="Nº" required/>

					<p class="select">Servico Desejado</p><select class="servicos" name="servicos" >
							<option>Comprar</option>
							<option>Reformar</option>
							<option>Impermeabilizar</option>
						

						</select>	


						<input class="botao" type="submit" value="Enviar" onclick="alerta()">


						</fieldset>

						
						<div class="fundo-form">
						</div>
						<div class="fundo-form2">
						</div>



						<div class="img"></div>

					</form>

	

					<div id="banner2"><p class="principal3">Venha nos visitar!</div>
						

						

						
				<img class="local" src="img/frente.jpeg"/>

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.037194319565!2d-48.11425548592155!3d-15.801992689046534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935bcd1d687d7685%3A0x1fd4e251defa9157!2sLoj%C3%A3o%20Estofados%20do%20Sul!5e0!3m2!1spt-BR!2sbr!4v1638291317337!5m2!1spt-BR!2sbr" width="447" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

				</div>

		</aside>

					



	<header>				

	<div id="logo">
		<h1 class="titulo">Lojão Estofados do Sul</h1>
		<h2 class="sub">Fábricação sob Medida</h2>
		
	</div>		


		<img id="sofa" src="img/logo2.png" alt="Sofá Retrátil">

		<nav id="menu">
            <ul>
               <a href="index.html">
                  <li>Home</li>
               </a>
               <a href="quemsomos.html">
                  <li>Quem Somos</li>
               </a>
               <a href="vejanossotrabalho.html">
                  <li>Veja nosso Trabalho</li>
               </a>
              <li >Catálogo
                        <ul class="cat">
                           <a href="catalogo.html"><li class="sofa">Sofá</li></a>
                           <a href="catalogo2.html"><li class="pol">Poltrona</li></a>

                        </ul>

               </li>
               <a href="contato.php">
                  <li>Contato</li>
               </a>
            </ul>
         </nav>

         <div class="navbar">
               
         </div>

         <div class="navbar2">
               
         </div>

      </header>



		
				
				<footer>

		<div id="rodape">

			<h2 class="fim">&copy;2021 Lojão Estofados do Sul</h2>
			</div>
		</div>
		</div>	
	</div>	
</footer>
</body>
</html>