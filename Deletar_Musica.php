<?php

	include('Include/conexao.php');

	$idDeletado = $_GET['idmusica'];
	

	$sql = "DELETE  FROM  tbmusicas WHERE idmusica = $idDeletado";


	if ($conexao->query($sql) === TRUE) {

		echo "<center> ";

	echo "Deletado com Sucesso <br>";

	echo "<button> <a href='Intranet.php'  title='Página Principal'> Página Principal </a> </button> "; 		
	echo "<button> <a href='Cadastra_Musica.php'  title='' Novo Cadastro'> Novo Cadastro </a> </button>";		

	echo "</center>";
	}
	else{
		echo "erro <br>" .mysqli_error($conexao);

	}


?>