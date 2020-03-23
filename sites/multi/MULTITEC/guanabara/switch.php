<!DOCTYPE html>
<html>
<head>
	<title>switch</title>
	<?php 
		$opq=isset($_POST['op'])?$_POST['op']:"S";
		switch ($opq) {
			case '1':
				echo "rodrigocalando é lindo";
				break;
			case '2':
				echo "rodrigocolo é lindo";
				break;
			case '3':
				echo "rodrigosdddsddd é lindo";
				break;		
		}

	 ?>
</head>
<body>
	<form method="post">

		<label><br>Digite uma opção:<br></label>
		<input type="text" name="op">
	</form>

</body>
</html>