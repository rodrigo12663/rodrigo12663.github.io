<!DOCTYPE html>
<html>
<head>
	<title>Shop Academy Life</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_incio.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript">
	</script>
	<link rel="stylesheet" type="text/css" href="adicionar/suahistoria.css">
	<link rel="stylesheet" type="text/css" href="../css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/css/bootstrap.min.js">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
	<style type="text/css">
		html{
			scroll-behavior: smooth;
		}
	</style>
</head>
<?php
	session_start();
?>
<body>
	<div  id="home" class="div-pai-fundo">
		<nav>
			<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#historia">Historia</a></li>
					<li><a href="#contato">Contato</a></li>
					<li><a href="produtos.php">Produtos</a></li>
				
			</ul>
		</nav>	
		<div id="sair" class="dropdown">

		  <a id="sa" style="margin-left: 139px; " class="dropdown-toggle " aria-haspopup="true" aria-expanded="false" href="#" data-toggle="dropdown"  >
				
		  </a>

		  <div style="margin-top: 16px;" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
		  	<img style=" margin-left: 2px;" src="imagens/cont.png">

		  	<a class="btn btn-default btn-rounded my-3 "   href="login.php">Registrar/Entrar</a>
		  	
		    <a   style="margin-left: 60px; width: 90px; outline: none; text-decoration: none;  margin-top: -25px;"  class="dropdown-item" href="sair.php">Sair</a>
		  </div>
		</div>

			<p style="color: white ; margin-left: 1229px; font-size: 12px; margin-top: -4px;"><?php if (@$_SESSION['cliente']) {
				echo  $_SESSION['cliente'] ;
			}else{
				
			 ?>
			 <p style="color: white ; margin-left: 1259px; font-size: 12px; margin-top: -26px;"> <?php 

			 	echo "Seja bem vindo,<br> cadastre-se";
			 }
			 ?></p>

			<img  style="margin-left:1198px;margin-top:-132px;border-radius: 50px;width:37px;height: 35px; background-color: white;" src="imagens/cont.png">		
	</div>
	             </form>
	  <!-- sua historia -->
<?php
	include_once "adicionar/suahistoria.html";
?>
	
<!-- Contato -->
<form method="post" action="comenta.php">
	<!-- fazer o banco do comentario -->
		<div id="contato" class="section">
			  <div class="top-border left"></div>
			  <div class="top-border right"></div>
			  <h1>CONTACT US</h1>
			  <p style="font-family: 'lato', sans-serif;">Desistir nunca! Você é muito mais forte do que imagina<br>Entre em contato com a nossa loja (76)6655-5555</p>
			  <div class="form-group">
			  <label style="font-family: 'lato', sans-serif;" for="exampleFormControlTextarea1">Seu comentário:</label>
			  <textarea name="contato" style="width: 630px;margin-left: 380px; height: 200px;" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
			  </div>
		 
		    <a style="background-color:#00008B; font-family: 'lato' ,sans-serif;" href="comenta.php">Enviar feedback</a>
		</div>
		<div>
			<a href="#home">^</a>
		</div>
</form>
</body>
</html>