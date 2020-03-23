<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$n1 = $_GET["n1"];
		$n2 = $_GET["n2"];
		$m= ($n1+$n2)/2;
		echo "minha média é $m";
		$situa=($m<6)?"reprovado":"aprovado";
		printf("o aluno foi $situa");

	 ?>

</body>
</html>