<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login Painel</title>
	<link rel="stylesheet" href="css/login.css">
	<style>


div.fundo-form2 {
    background-image: url(img/img-painel.png);
    padding: 0px 50px 29px 50px;
    width: 279px;
    position: relative;
    left: 467px;
    top: 107px;
    border-radius: 15px 15px 0px 0px;
}

	body{
		background-color: #d9decb;
	}	

	img.icone {
    position: relative;
    left: 86px;
    width: 50px;
    height: 35px;
}

	</style>
</head>

<body>

	<div class="fundo-form3"></div>
	<div class="fundo-form2"></div>
		<div class="fundo-form">	
			<img class="icone" src="img/icone-cadeado.png">
			<form method="post" action="index.php">
				<input type="text" class="login" name="login" placeholder="Usuário"/>
				<input type="password" class="senha" name="senha" placeholder="Senha"/>
				<input type="submit" class="entrar" name="acao" value="Entrar">

			</form>	
		</div>




</body>




</html>