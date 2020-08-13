<div>
<center>

<?php
	include('Include/conexao.php');

	$Login = $_POST['Login'];
	$Senha = $_POST['senha'];
	

$sql = "INSERT INTO tblogin (usuario, senha) VALUES ('$Login', '$Senha')";


	$inserir = mysqli_query($conexao, $sql);
	

	if($inserir){

		echo "<br> Cadastro realizado com sucesso! <br> <br>";
	}
	else {
		echo "<br> erro ao cadastrar";
	}

	mysqli_close($conexao);

	 echo " <button> <a href='Index.php'> Login </a> </button>"; 

?>
 </center>
</div>
