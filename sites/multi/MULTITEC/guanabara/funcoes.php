<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>funções aritméticas</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$v1 = $_GET["v1"];
		$v2 = $_GET["v2"];
		echo "<br>a raiz quadrada de $v1 é" . sqrt($v1); 
		echo "<br>o valor arrendodado de $v1 é" . round($v1); 
		echo "<br>o valor absoluto de $v2 é" . abs($v2);
		echo "<br>a parte inteira de $v2 é". intval($v2);
		echo "<br> o  valor de $v1 em moeda é R$".number_format($v1,2);


	?>

</body>
</html>