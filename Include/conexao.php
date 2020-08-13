<?php

$conexao = new mysqli("localhost","root","","Sistema");

if ($conexao -> connect_errno) {
  echo "Falha ao Conectar-se ao Banco de Dados: " . $conexao -> connect_error;
  exit();}
  else{

  	;
  }

?>