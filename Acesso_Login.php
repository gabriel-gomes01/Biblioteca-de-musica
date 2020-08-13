<div>
<title> Aviso </title>
<?php
	include('Include/conexao.php');

	$Login = $_POST['user'];
	$Senha = $_POST['senha'];
	$entrar = $_POST['Entrar'];
	


	if (isset($entrar)) {
           
        $sql = "SELECT * FROM tblogin WHERE usuario = '$Login' AND senha = '$Senha'";

    	$verifica = mysqli_query($conexao, $sql) or die("erro ao selecionar");

    	if (mysqli_num_rows($verifica)<=0){

	        echo"<script language='javascript' type='text/javascript'>
	        alert('Login e/ou senha incorretos');window.location
	        .href='Index.php';</script>";
	        die();

      	}else{

	        echo"<script language='javascript' type='text/javascript'>
		        	 window.location.href='Intranet.php';
		        </script>";
	        die();

      	}
	}
?>

</div>