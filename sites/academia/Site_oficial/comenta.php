<?php
		include_once "conexao.php";
 ?>
<?php
	$mensagem=isset($_POST['contato'])?$_POST['contato']:"";

	$insertcomenta="INSERT INTO comentario VALUES ('mensagem')";
	$query=mysqli_query($link,$insertcomenta);
	echo "<script>alert('Obrigado pelo comentario tentaremos melhorar');</script>";
	header("location:inicio.php");


?>