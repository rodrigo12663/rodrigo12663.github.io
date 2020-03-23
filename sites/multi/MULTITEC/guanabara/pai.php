<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>bugu</title>
	<meta charset="utf-8">
	<?php 
		@$pai = $_POST['pai'];
		@$maei = $_POST['maei'];
		$familia = array('pai' =>$pai,'maei'=>$maei);
	 ?>
</head>
<body>
	<form method="post" id="formulário">
		<input type="text" name="pai" placeholder="nome do pai">
		<input type="text" name="maei" placeholder="nome da mãe">
		<input type="submit" name="enviar">
	</form>
		<?php echo " nome do pai " .$familia['pai'];?>
		<?php echo "<br> nome da mãe " . $familia['maei'];?>
	
		
	
</body>
</html>