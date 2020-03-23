<?php

	$bd="cadastro";
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,$bd);
	if($link==true){
		//echo "conectou";
	}
	else{
		echo "não conectou";
	}



  ?>