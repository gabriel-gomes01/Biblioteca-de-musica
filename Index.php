<html>
<head>

	<title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" type="text/css" href="Include/estilo.css">

	<style type="text/css">
		body{
			
    		background-color: #2d2d2d;
			background-size: cover;
		}

	</style>
</head>

<body>
	<div id="meio">
	 <fieldset>	
		
		<p><?php require("Include/Logo.php"); ?><br></p>

		<center>


			<h4>Digite Usuário e Senha para Acesso</h4>
			
			<form action="Acesso_Login" method="POST" name="formulario">		

		    	<p>
		    		<font class="font1">Usuário:
		    		<input type="text" name="user" class="formulario" > <br><br>
		    		
		    		<font class="font1">Senha:</font><br>
		        	<input type="password" name="senha">

		       	 	<br>		
		       	 	<input type="submit" value="Entrar" name="Entrar" style="margin-top: 20px;">
					<br><br>
		       	 	 <button><a href="Nova Conta.html">	 Criar Nova Conta  </a></button>
		       	 	</font>
		        </p>

	  	</center>

	 </fieldset>
	</div>
</body>
</html>