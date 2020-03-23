<?php
		include "../conexao.php";
		$nome=isset($_POST['nome-login'])?$_POST['nome-login']:"";
		$email=isset($_POST['email-login'])?$_POST['email-login']:"";
		$senha=isset($_POST['senha-login'])?$_POST['senha-login']:"";

		$sql="SELECT * FROM usuarios ";
		$query=mysqli_query($link,$sql);
		while ($ln=mysqli_fetch_assoc($query)) {
			$emailBanco=$ln['email'];
			$senhaBanco=$ln['senha'];




		if($email==$emailBanco && $senha==$senhaBanco){
			session_start();
			$_SESSION['cliente']=$email;
			header("location:../inicio.php");
		}
		else {
				header("location:../inicio.php");
			
		}


}

		


?>
	
