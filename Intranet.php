
<html>

<head>
  <meta charset="utf-8">
  <title> Página Principal </title>
  <link rel="stylesheet" type="text/css" href="Include/estilo.css">

</head>

  <body>

  <div> <?php require("Include/Cima.php"); ?> </div> 
  <div> <?php require("Include/menu_cima.php"); ?> </div> 
  <br>

    <div id="geral" style="padding-top: 75;">   

        <div align="center"> 
            
                           <div id="opcao">
                          
                        <fieldset> 

                          <legend> &nbsp; Escolha uma opção &nbsp; </legend>
                            
                          <a href="Cadastra_Musica.php"> <button > Cadastrar Musica </button> </a>

                          <label> &nbsp;&nbsp;&nbsp;&nbsp;</label>
                            
                          <a href="Mostrar_Cadastros.php">  <button> Listas De Musicas </button> </a>

                        </fieldset>
                      </div>
        
        </div>

    </div>

  </body>
</html>  

<style type="text/css">
  
  table{
    text-align: center;
  }
</style>