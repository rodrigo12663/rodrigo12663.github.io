<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">

</head>
<body>
	<?php
		$n1= $_GET["a"];
		$n2= $_GET["b"];
		$tipo= $_GET["op"];
		echo "os valores foram $n1 e $n2<br>;";
		$r= ($tipo<6)?"reprovado":"aprovado";
		echo "o resultado sera $r";
	  ?>
	

</body>
</html>