
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"/>
	<title></title>
	<style type="text/css">
		html{
			scroll-behavior: smooth;
		}
		#img{
			width:45%;
			height: 45%;
			

		}
		.card-group{
			margin-left: 220px;
			width: 1420px;
			margin-top: 80px;
		}
		a{
			cursor: pointer;
			list-style: none;
			color: black;
		}
	</style>
	
	<?php
	include_once "../conexao.php";
	session_start();
	if(!isset($_SESSION['carinho'])){
		$_SESSION['carinho']=array();
			
	}
	print_r($_SESSION['carinho']);
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
</head>
<body>
	<?php
		include_once "conexao.php";
		$sql="SELECT * from produto where id=1";
		$query=mysqli_query($link,$sql);
			while ( $n=mysqli_fetch_assoc($query)) {
				
				
	  ?>
<div class="card-group">
	
  <div class="card">
    <img id="img" src="imagens/bd.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo "Nome: ".$n['nome']; ?></h5>
       <p class="card-text"><?php echo "Nome: ".$n['preco'];  ?></p>
      <?php echo '<a href="teste.php?acao=add&id='.$n['id'].'">Comprar</a>';?>
      <?php } ?>
 </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
 <!-- segundo card -->
  <?php
		include_once "conexao.php";
		$sql="SELECT * from produto where id=2";
		$query=mysqli_query($link,$sql);
			while ( $n=mysqli_fetch_assoc($query)) {			
	?>
  <div class="card">
    <img id="img" src="imagens/rd.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo "Nome: ".$n['nome'];   ?></h5>
     <p><?php  echo "R$: ".$n['preco'] ; ?></p>
      <?php echo '<a href="teste.php?acao=add&id='.$n['id'].'">Comprar</a>';  ?>
    </div>
		<?php } ?>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <!-- terceiro card -->
  <?php
		include_once "conexao.php";
		$sql="SELECT * from produto where id=3";
		$query=mysqli_query($link,$sql);
			while ( $n=mysqli_fetch_assoc($query)) {
							
	?>
	
  <div class="card">
    <img id="img" src="imagens/bd.jpg" class="card-img-top" alt="...">
     <div class="card-body">
      <h5 class="card-title"><?php echo "Nome: ".$n['nome'];   ?></h5>
     <p><?php  echo "R$: ".$n['preco'] ; ?></p>
      <?php echo '<a href="teste.php?acao=add&id='.$n['id'].'">Comprar</a>';  ?>
    </div>
		<?php } ?>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

</div>
<?php include_once "carinho.php" ; ?>

	
</body>
</html>
	


