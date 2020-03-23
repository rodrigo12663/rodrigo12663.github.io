<?php
		include "../conexao.php";

		$nome=isset($_POST['nome-cadastro'])?$_POST['nome-cadastro']:"";
		$email=isset($_POST['email-cadastro'])?$_POST['email-cadastro']:"";
		$senha=isset($_POST['senha-cadastro'])?$_POST['senha-cadastro']:"";
		$ConfirmSenha=isset($_POST['confirm-senha'])?$_POST['confirm-senha']:"";


		
	

		$sqlSelect ="SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
		$querySelect=mysqli_query($link,$sqlSelect);
		
		$linhas=mysqli_num_rows($querySelect);


if($linhas>0){
	echo "email já cadastrado";
	header("Location:../login.php");
	$_SESSION['msg']="<p>Não Cadastrou</p>";
}
else{
	if ($senha==$ConfirmSenha) {
		echo "deu bom";

		$sql="INSERT INTO usuarios(nome,email,senha) VALUES('$nome','$email','$senha')";
		$queryInsert=mysqli_query($link,$sql);
		session_start();
		$_SESSION['cliente']=$email;
		$_SESSION['msg']="<p>Cadastro com sucesso</p>";
		header("location:../login.php");
		


	}

}

		

?>
	
