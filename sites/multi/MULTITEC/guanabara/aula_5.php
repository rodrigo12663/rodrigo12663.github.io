<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body >
<div class="et">
		<?php
			$n1  = $_GET["n1"];
			$n2  = $_GET["n2"];
			$s = $n1 + $n2;
			$med = ($n1 + $n2)/2;
			printf("a sua média é $med");
			echo "<br>";
			printf("a soma vale $s");
			$sub = $n1 - $n2;
			echo "<br>";
			printf("a subtração vale $sub");
			$div = $n1/$n2;
			echo "<br>";
			printf(" a divisão vale $div");
			$mult = $n1 * $n2;
			echo "<br>";
			printf("a multiplicação vale $mult");


	  	?>
</div>
	


</body>
</html>