<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>10 por cento a mais no produto</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$preco = $_GET["preco"];
		echo " o produto custa R$ $preco";
		 $preco += ($preco*10/100);
		echo "<br>$preco";
	 ?>

</body>
</html>