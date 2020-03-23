<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"/>
	<style type="text/css"> 
		*,html{
			scroll-behavior: smooth;
			margin: 0;
			padding: 0;
		}
		#teste{
			width: 600px;
			margin-left: 60px;
			margin-top: -256px;

		}
		form{
			margin-top: -10px;
		}
		#priform{
			margin-left: 790px;

			
		}
		#alterinput{
				
			outline: none;
			width: 560px;
			height: 30px;
		}
		h1{
			font-size: 25px;
			margin-top: 120px;
			margin-left: 787px;
		}
		#pedido{

			border-radius: 18px;
			width: 310px;
			height: 40PX;
			color:white;
			font-size: 19px;
			background-color:#00008B;
			cursor: pointer;
			margin-left: 170px;
		}







	}</style>
</head>

	<?php
	include_once "conexao_pe.php";
	session_start();
	if(!isset($_SESSION['carinho'])){
		$_SESSION['carinho']=array();
			
	}

	if(isset($_GET['acao'] )){

 		//adicina produto ao carrinho
		if ($_GET['acao']=='add') {
			$id=intval($_GET['id']);
			if(!isset($_SESSION['carinho'] [$id])){
				$_SESSION['carinho'] [$id]=1;
			}
			else{
				$_SESSION['carinho'] [$id]+=1;
			}
		}
	}
	
	


	//excluir um produto
	if(@$_GET['acao']=='del') {
		$id=intval($_GET['id']);
		if(isset($_SESSION['carinho'] [$id])){

			unset($_SESSION['carinho'] [$id]);

	}}
	//alterar a quantidade dos produtos
  ?>
<body style="background-color:#f5f6fa ;">

	<form action="inicio.php">
			<button  style="cursor: pointer; margin-top: 20px; margin-left: 1278px; 
			color: white; background-color:#00008B; list-style: none; " class="btn btn-blue  my-3">Home</button>
		</form>

	<img style="width: 300px; margin-top: -90px; margin-left: 30px;" src="imagens/logo.png">
		
		<nav> <ul>
		<?php

		if (isset($_SESSION['cliente'])) {
			
			
	?>
		<h1 style="margin-top: -10px; margin-left: 30px;">Seja bem vindo <?php echo $_SESSION['cliente'];  ?></h1>


<?php } 
else{



?>

<a style="text-decoration: none; list-style: none;" href="login.php"><h5 style="margin-top: -10px; margin-left: 30px;"><?php echo "Faça o login para efetuar a compra";  ?></h5></a>


<?php } ?>
	<div  style="margin-top: 20px; margin-left:26%;" id="form-pedido">
	
	

	

	<div style="margin-top: -25px;" id="teste" class="container">
		<div class="card mt-5">
			 <div class="card-body">
	    		<h4 class="card-title">Carrinho</h4>
	    		<a href="teste.php">Lista de Produtos</a>
	    	</div>
		</div>

			<form action="produtos.php?acao=up" method="post">
				<a style="margin-top: 10px; background-color: #00008B ;color:white;" class="btn btn" href="produtos.php">Continuar Comprando</a>
				<button style="margin-top: 10px; cursor: pointer;background-color: #00008B;color:white;" class="btn btn" type="submit">Atualizar Carrinho</button>
		
			<table class="table table-strip">
				<thead>
					<tr>
						<th>Produto</th>
						<th>Quantidade</th>
						<th>Preço</th>
						<th>Subtotal</th>
						<th>Ação</th>
					</tr>				
				</thead>

			<tbody>
					<?php
					
					if (count($_SESSION['carinho']) == 0){
									echo "não há produto";
					}
					else{
							$total=0;
							foreach ($_SESSION['carinho'] as $id => $qtd):
							$sql="SELECT * from produto WHERE id=$id";

							$query=mysqli_query($link,$sql);
							$res=mysqli_fetch_assoc($query);


								echo "<tr>";
									echo "<td>".$res['nome'];
									echo '<td><input type="text" size="3" name="prod[id]" value='.$qtd.'></td>';	
									echo "<td>".$res['quantidade'].$res['preco'];
									$sub=$res['preco']*$qtd;
									$total+=$res['preco'] * $qtd;

								
									                 				
									echo "<td>".$sub;
									echo "<td>";
									echo '<a href="carinho.php?acao=del&id='.$res['id'].'"> Delete</a>';
									echo "<tr>";
			
								echo "</tr>";
								endforeach;
								echo "<br>";
							echo "<td>". "Preço total";
							echo "<td>"."=".$total;
							}
							
								
								if (isset($_SESSION['cliente'])) {
								
								
									if (isset($_GET['enviar'])) {
											include_once "conexao_pe.php";
											@$insertVenda="INSERT INTO venda (valor) VALUES ('$total')";
											$que=mysqli_query($link,$insertVenda);
											header("location:teste.php");


									}

								}

								if (isset($_GET['enviar'])) {
									if (!isset($_SESSION['cliente'])){
										echo"<br>". "pode ver os produtos";
											header("location:login.php");	
											
								}}
			
							
							
					
				
					 ?>

			</tbody>

			</form>
		
	</div>
	<form style="margin-left: 200px; margin-top: 20px;" id="priform" action="carinho.php?enviar" method="post">
		<br>
		<label>Nome</label>
		<br>
		<input id="alterinput" type="text" name="nome">
		<br>
		<label>Sobrenome</label>
		<br>
		<input id="alterinput" type="text" name="sobrenome">
		

		<br><br>
		<button  id="pedido" style="margin-left:130px; margin-top: -5px; cursor: pointer;background-color: #00008B;color:white; " class="btn btn" type="submit">Etapa de Compra</button>
	</form>


 





</div>
</body>
</html>