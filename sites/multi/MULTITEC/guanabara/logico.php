<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>bugu</title>
	<?php 
		$nome = isset($_POST['nome'])?$_POST['nome']:"";
		$email = isset ($_POST['email'])?$_POST['email']:"";
	 ?>
</head>
<body>
	<form method="post" id="formulário">
		<input type="text" name="nome">
		<input type="text" name="email">

		<input type="submit" name="enviar">

		<input type="text" value="<?php echo($nome);?>">
		<input type="text"value="<?php echo($email);?>" >
	</form>
	
		
	
</body>
</html>