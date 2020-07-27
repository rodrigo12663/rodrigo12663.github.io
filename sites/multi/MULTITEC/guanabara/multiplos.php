<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
		$d = isset($_POST['ds'])?$_POST['ds']:"digite 1 á 8";
		switch ($d) {
			case 1:
			case 2:
			case 3:
			case 4:
			case 5:
			case 6:
				echo "levanta e vai estudar";
				break;
			case 7:
			case 8:
				echo "descanse pequeno gafanhoto";
				break;
				// defaut:
				
		}

	 ?>
</head>
<body>
	<form method="post">
		Dia da semana : <input type="number" name="ds">
		<input type="submit" value="analisar" min="2" max="8">
		<a href="javascript:history.go(-1)"> <button>voltar</button></a>
	</form>
</body>
</html>