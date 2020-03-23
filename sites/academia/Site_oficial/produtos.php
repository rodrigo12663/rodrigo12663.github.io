<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"/>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript">
	</script>

	<link rel="stylesheet" type="text/css" href="../css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/css/bootstrap.min.js">
	<style type="text/css">
		html{
			scroll-behavior: smooth;
		}
		.card{
			display: inline-block;
			position: relative;
			left: 50px;
		}


	.suplem{
	-webkit-text-stroke-width: 2px;
	-webkit-text-stroke-color: #00008B;
	font-size: 3em; color: #fffdd9;
	text-align: center;
	}
	nav{
		margin-top: -30px;
		margin-left: 460px;
	}
	ul li{
	display: inline-block;
	margin-top: -610px;

	}
	li{
		margin-left: 60px;

	}
	#teste{
		margin-top: 240px;
	}
	ul li a{
		color: black;
		text-decoration: none;
		font-size: 20px;
	}

	ul li a:hover{
		color: #003399;
		text-decoration: none;

		
}


#home:hover{
	background-color:blue;
	color: white;
	list-style: none;

}
	</style>
</head>
<?php session_start();  ?>
<body style="background-color: #f5f6fa">
	

		<div id="sair" style="margin-top: 30px;" class="dropdown">

		  <a id="sa" style="margin-left: 1239px; " class="dropdown-toggle " aria-haspopup="true" aria-expanded="false" href="#" data-toggle="dropdown"  >
				
		  </a>

		  <div style="margin-top: 33px;" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
		  	<img style=" margin-left: 22px;" src="imagens/cont.png">
		  	<a class="btn btn-default btn-rounded my-3 "   href="inicio.php">Home</a><br>
		  	<a style="margin-left: 65px; margin-top: 40px; " class="btn btn-default btn-rounded my-2 "   href="login.php">Registrar/Logar</a><br>
		  	
		    <a   style="margin-left: 135px; width: 90px; outline: none; text-decoration: none;  margin-top: -25px;"  class="dropdown-item btn btn-default btn-rounded my-4" href="sair.php">Sair</a>
		  </div>
		</div>

			<p style="color: #273c75 ; margin-left: 1229px; font-size: 12px; margin-top: -4px;"><?php if (@$_SESSION['cliente']) {
				echo  $_SESSION['cliente'] ;


			}else{
				
			 ?>
			 <p style="color: #40739e ; margin-left: 1259px; font-size: 12px; margin-top: -23px;"> <?php 

			 	echo "Seja bem vindo,<br>cadastre-se";


			 }
			 ?></p>

			<img  style="margin-left:1198px;margin-top:-132px;border-radius: 50px;width:37px;height: 35px; background-color:#40739e ;" src="imagens/cont.png">
			<a style="cursor: pointer;" href="carinho.php"><img  style="margin-left:1248px;margin-top:-208px;border-radius: 50px;width:37px;height: 35px;" src="imagens/carrinho.png"></a>	
				
			
	</div>
	<img style="width: 300px; margin-top: -160px; margin-left: 30px; bac" src="imagens/logo.png">


		</ul>
		</nav>
		<br><br><br><br>

		<h3 class="suplem">PRODUTOS</h3>
	 <?php
		include_once "conexao_pe.php";
		$sql="SELECT * from produto where id=1";
		$query=mysqli_query($link,$sql);
			while ( $n=mysqli_fetch_assoc($query)) {
				
				
	  ?>


	  <div class="card" style="width: 15rem; margin: 5px;">
	  <img class="card-img-top" src="imagens/suplemento 4.png" height="190px" alt="Imagem de capa do card">
	  <div class="card-body">
	   	
	    <h3 style="font-size: 15px;" class="card-text"><?php echo "Nome: ".$n['nome']; ?></h3>
	    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>

	    <p class="card-text"><?php echo "Valor: ".$n['preco'];  ?></p>
	   	 <?php echo '<a style ="color:white; background-color:#00008B ;" class="btn btn" href="carinho.php?acao=add&id='.$n['id'].'">Comprar</a>';?>
	  </div>
	</div>
	



   <?php } ?> 

</div>

   <?php
		include_once "conexao_pe.php";
		$sql="SELECT * from produto where id=2";
		$query=mysqli_query($link,$sql);
			while ( $n=mysqli_fetch_assoc($query)) {
				
				
	  ?>

	  <div class="card" style="width: 15rem; margin: 5px;">
	  <img class="card-img-top" src="imagens/suplemento 3.png" height="190px" alt="Imagem de capa do card">
	  <div class="card-body">
	   	 
	    <h3 style="font-size: 15px;" class="card-text"><?php echo "Nome: ".$n['nome']; ?></h3>
	    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>

	    <p class="card-text"><?php echo "Valor: ".$n['preco'];  ?></p>
	   	 	 <?php echo '<a style ="color:white; background-color:#00008B ;" class="btn btn" href="carinho.php?acao=add&id='.$n['id'].'">Comprar</a>';?>
	  </div>
	</div>
	



   <?php } ?> 



   <?php
		include_once "conexao_pe.php";
		$sql="SELECT * from produto where id=3";
		$query=mysqli_query($link,$sql);
			while ( $n=mysqli_fetch_assoc($query)) {
				
				
	  ?>

		<div class="card" style="width: 15rem; margin: 5px;">
	  <img class="card-img-top" src="imagens/suplemento 1.png" height="150px" alt="Imagem de capa do card">
	  <div class="card-body">
	   	 
	    <h3 style="font-size: 15px;" class="card-text"><?php echo "Nome: ".$n['nome']; ?></h3>
	    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>

	    <p class="card-text"><?php echo "Valor: ".$n['preco'];  ?></p>
	   	 	 <?php echo '<a style ="color:white; background-color:#00008B ;" class="btn btn" href="carinho.php?acao=add&id='.$n['id'].'">Comprar</a>';?>
	  </div>
	</div>
	
	



   <?php } ?> 


   	<?php
		include_once "conexao_pe.php";
		$sql="SELECT * from produto where id=4";
		$query=mysqli_query($link,$sql);
			while ( $n=mysqli_fetch_assoc($query)) {
				
				
	  ?>


	<div class="card" style="width: 15rem; margin: 5px;">
	  <img class="card-img-top" src="imagens/suplemento 5.jpg" height="190px" alt="Imagem de capa do card">
	  <div class="card-body">
	   	 
	    <h3 style="font-size: 15px;" class="card-text"><?php echo "Nome: ".$n['nome']; ?></h3>
	    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>

	    <p class="card-text"><?php echo "Valor: ".$n['preco'];  ?></p>
	   		 <?php echo '<a style ="color:white; background-color:#00008B ;" class="btn btn" href="carinho.php?acao=add&id='.$n['id'].'">Comprar</a>';?>
	  </div>
	</div>
	
	



   <?php } ?> 




   	<?php
		include_once "conexao_pe.php";
		$sql="SELECT * from produto where id=5";
		$query=mysqli_query($link,$sql);
			while ( $n=mysqli_fetch_assoc($query)) {
				
				
	  ?>
	<div class="card" style="width: 15rem; margin: 5px;">
	  <img class="card-img-top" src="imagens/luva.jpg" height="190px" alt="Imagem de capa do card">
	  <div class="card-body">
	   	 
	    <h3 style="font-size: 15px;" class="card-text"><?php echo "Nome: ".$n['nome']; ?></h3>
	    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>

	    <p class="card-text"><?php echo "Valor: ".$n['preco'];  ?></p>
			 <?php echo '<a style ="color:white; background-color:#00008B ;" class="btn btn" href="carinho.php?acao=add&id='.$n['id'].'">Comprar</a>';?>
	  </div>
	</div>
	
	



   <?php } ?>



   	<?php
		include_once "conexao_pe.php";
		$sql="SELECT * from produto where id=6";
		$query=mysqli_query($link,$sql);
			while ( $n=mysqli_fetch_assoc($query)) {
				
				
	  ?>


	<div class="card" style="width: 15rem; margin-top: 30px; margin: 5px;">
	  <img  class="card-img-top" src="imagens/tenis.jpg" alt="Imagem de capa do card">
	  <div class="card-body">
	   
	    <h3 style="font-size: 15px;" class="card-text"><?php echo "Nome: ".$n['nome']; ?></h3>
	    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
	    <p><?php echo"Valor: " .$n['preco'];  ?></p>
	     	 <?php echo '<a style ="color:white; background-color:#00008B ;" class="btn btn" href="carinho.php?acao=add&id='.$n['id'].'">Comprar</a>';?>
	  </div>
	</div>
   <?php } ?>
   	<?php
		include_once "conexao_pe.php";
		$sql="SELECT * from produto where id=7";
		$query=mysqli_query($link,$sql);
			while ( $n=mysqli_fetch_assoc($query)) {
				
				
	  ?>


	<div class="card" style="width: 15rem; margin-top: 30px; margin: 5px;">
	  <img  class="card-img-top" src="imagens/garaf.jpg" alt="Imagem de capa do card">
	  <div class="card-body">
	   
	    <h3 style="font-size: 15px;" class="card-text"><?php echo "Nome: ".$n['nome']; ?></h3>
	    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
	    <p><?php echo"Valor: " .$n['preco'];  ?></p>
	    	 <?php echo '<a style ="color:white; background-color:#00008B ;" class="btn btn" href="carinho.php?acao=add&id='.$n['id'].'">Comprar</a>';?>
	  </div>
	</div>
	
   <?php } ?> 
   	<?php
		include_once "conexao_pe.php";
		$sql="SELECT * from produto where id=8";
		$query=mysqli_query($link,$sql);
			while ( $n=mysqli_fetch_assoc($query)) {
				
				
	  ?>


	<div class="card" style="width: 15rem; margin-top: 30px; margin: 5px;">
	  <img  class="card-img-top" src="imagens/cam.jpg" alt="Imagem de capa do card">
	  <div class="card-body">
	   
	    <h3 style="font-size: 15px;" class="card-text"><?php echo "Nome: ".$n['nome']; ?></h3>
	    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
	    <p><?php echo"Valor: " .$n['preco'];  ?></p>
	    	 <?php echo '<a style ="color:white; background-color:#00008B ;" class="btn btn" href="carinho.php?acao=add&id='.$n['id'].'">Comprar</a>';?>
	  </div>
	</div>
	



   <?php } ?>  



   	<?php
		include_once "conexao_pe.php";
		$sql="SELECT * from produto where id=9";
		$query=mysqli_query($link,$sql);
			while ( $n=mysqli_fetch_assoc($query)) {
				
				
	  ?>


   <div class="card" style="width: 15rem; margin: 5px;">
	  <img style="height: 240px;" class="card-img-top" src="imagens/prot.jpg" height="190px" alt="Imagem de capa do card">
	  <div class="card-body">
	     <h3 style="font-size: 15px;" class="card-text"><?php echo "Nome: ".$n['nome']; ?></h3>
	    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
	    <p><?php echo"Valor: " .$n['preco'];  ?></p>
			 <?php echo '<a style ="color:white; background-color:#00008B ;" class="btn btn" href="carinho.php?acao=add&id='.$n['id'].'">Comprar</a>';?>	    
	  </div>
	</div>
 <?php } ?> 


 	<?php
		include_once "conexao_pe.php";
		$sql="SELECT * from produto where id=10";
		$query=mysqli_query($link,$sql);
			while ( $n=mysqli_fetch_assoc($query)) {
				
				
	  ?>


   <div class="card" style="width: 15rem; margin: 5px;">
	  <img style="height: 240px;" class="card-img-top" src="imagens/rd.jpg" height="190px" alt="Imagem de capa do card">
	  <div class="card-body">
	     <h3 style="font-size: 15px;" class="card-text"><?php echo "Nome: ".$n['nome']; ?></h3>
	    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
	    <p><?php echo"Valor: " .$n['preco'];  ?></p>
	     	 <?php echo '<a style ="color:white; background-color:#00008B ;" class="btn btn" href="carinho.php?acao=add&id='.$n['id'].'">Comprar</a>';?>
	    
	  </div>
	</div>


</div>
 <?php } ?> 


</body>
</html>