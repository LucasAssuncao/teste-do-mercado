<?php

$servidor = "mysql03.lucasassuncao1.hospedagemdesites.ws";
$usuario = "lucasassuncao13";
$senha = "valemobi123";
$bd = "lucasassuncao13";

$conn = @mysqli_connect($servidor,$usuario,$senha,$bd) or die ("Falha ao estabelecer conexão com o Banco de Dados" . mysqli_connect_error());

// conecta-se ao banco de dados
//$db = @mysql_select_db($bd,$conn) 
//	or die ("Falha ao estabelecer conexão com o Banco de Dados2");
	
?>