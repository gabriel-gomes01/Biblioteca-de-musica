<div>
<center>

<?php
	include('Include/conexao.php');

	$Cantor = $_POST['Cantor'];
	$Musica = $_POST['Musica'];
	$Album = $_POST['Album'];
	$Qualidade = $_POST['Qualidade'];
	$Nota = $_POST['Nota'];
	

$sql = "INSERT INTO tbmusicas (cantor, musica, album, qualidade, nota) VALUES ('$Cantor', '$Musica','$Album', '$Qualidade','$Nota')";


	$inserir = mysqli_query($conexao, $sql);
	

	if($inserir){

     echo"<script language='javascript' type='text/javascript'>
	        alert('Cadastrado com sucesso');window.location
	        .href='Intranet.php';</script>";
	        die();

	}
	else {
		echo "<br> erro ao cadastrar";
	}

	mysqli_close($conexao);

	 echo " <button> <a href='Intranet.php'> Página Principal </a> </button>"; 

?>
</div>
</center>