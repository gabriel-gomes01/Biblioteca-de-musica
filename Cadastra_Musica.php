<htnl>

<head>

    <link rel="stylesheet" type="text/css" href="Include/estilo.css">
    <meta charset="utf-8">
    <title> Cadastrar Musica </title>

</head>


<body>
    <?php require("Include/Cima.php"); ?> 

    <div> <?php require("Include/menu_cima.php"); ?> </div> 
    <br>

<div id="geral" style="margin-top: 50px;">
    <form method="POST" action="Musica_Cadastrada.php">

      <fieldset>
        <legend>Preencha o formulário abaixo</legend> <br>
        
        <label>Cantor*: </label>
        <input type="text" name="Cantor" required placeholder="Nome do Cantor"> <br><br>
        
        <label>Musica*: </label>
        <input type="text" name="Musica" required placeholder="Nome da Musica"> <br><br>

         <label> Álbum: </label>
        <input type="text" name="Album" placeholder="Nome do Álbum">  <BR>  <BR>
       

        <label> Qualidade*: </label>
        
        <input type="radio" name="Qualidade" required value="Ruim"> Ruim
        <input type="radio" name="Qualidade" required value="Bom"> Bom
        <input type="radio" name="Qualidade" required value="Exelente"> Exelente <br> <br>

        <label>Dê uma nota a Musica*: </label>
        <input type="text" name="Nota" > <br>

      <p align="center">
        <button type="submit"> Fazer Cadastro </button>
      </p>
  </fieldset>
    </form>
 </div> 
<body>

</html>

<style type="text/css">
    
    table{
        text-align: center;
    }
    div{
        text-align: center;
    }
</style>