 
<div>
	<center>
		<title> Cadastros Feitos </title>
		<link rel="stylesheet" type="text/css" href="Include/estilo.css">
		<div> <?php require("Include/Cima.php"); ?> </div> 
		<div> <?php require("Include/menu_cima.php"); ?> </div> 
		<br>

    	<fieldset style="margin-top: 50px;">
      		<legend> Musicas Cadastradas</legend> <br>
		<center>
				<?php

				include('Include/conexao.php');
			

			echo "<table border='1' cellpadding='5' cellspacing=0 style=border-collapse: collapse >";
					
					$sql = "SELECT * FROM tbmusicas";

					$consulta = mysqli_query($conexao, $sql);


				 while ($registro = mysqli_fetch_array($consulta)) {

				
				 	$idmusica = $registro['idmusica'];
					$Cantor = $registro['cantor'];
					$Musica = $registro['musica'];
					$Album = $registro['album'];
					$Qualidade = $registro['qualidade'];
					$Nota = $registro['nota'];
					
					

					echo "<tr>";
					echo " <td> <br> Faixa: $idmusica ";


					echo "</td> <td> <br> Nome do Cantor: $Cantor ";
					echo " <br> Nome da Musica: $Musica ";
					echo " <br> Album da Musica: $Album ";	
					echo " <br> Qualidade do Audio: $Qualidade ";	
					echo " <br> Nota da Musica: $Nota <br><br>";

					echo "<a href='Deletar_Musica.php?idmusica=$idmusica'> <img src='imagens/delete.gif'> </a> </td>"; 
					}


					echo"</tr>";
			echo "</table>";


			?>
		</center>
 		</fieldset>

 		<form action="" method="POST"></form>

 		<br>
 		<button> <a href="Intranet.php"  title="Página Principal"> Página Principal </a> </button> 
		<button> <a href="Cadastra_Musica.php"  title=" Novo Cadastro"> Novo Cadastro </a> </button>
		<br>
 	</center>

</div>


<style type="text/css">
	
	table{
		text-align: center;
	}
</style>