<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
	<?php 
		$c=10;
		while ($c>=1) {
			echo "<br>";
			echo $c;
			$c=$c-2;
		}

	 ?>

</head>
<body>

	<form method="post">
		<?php 
		$n=1;
			while ($n<= 5) {
				echo "<input type='text' name='te'>)" ;
				$n++;
			}
		
		 ?>

		
	</form>

</body>
</html>