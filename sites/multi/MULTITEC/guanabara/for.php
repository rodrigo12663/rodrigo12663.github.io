<!DOCTYPE html>
<html>
<head>
	<title>PARA você bb</title>
	<?php 
		$num = isset($_POST['nume'])?$_POST['nume']:"";
		for ($c=0; $c<=10; $c++) { 
			$re= $num * $c;
			echo "<br>$num * $c = $re" ;
			
		}
	  ?>
	
</head>
<body>
	<form method="post">
		<select name="nume">
			<?php 
				for ($i=0; $i<=10 ; $i++) { 
					echo "<option>$i</option>";
				}
			 ?>
		</select>
		<input type="submit" value="tabuada">
	</form>
	
	
</body>
</html>