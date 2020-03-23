<?php
	
	$bd='pedido';
	$servidor="localhost";
	$usuario="root";
	$senha='';
	$link=mysqli_connect($servidor,$usuario,$senha);
	mysqli_select_db($link,$bd); 
	if($link==true){
		//echo "conectou";
	}
	else{
		echo "não conectou";
	}
 ?>