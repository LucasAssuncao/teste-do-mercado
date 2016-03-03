<?php
include "connection.php";

// Recebe o Código passado por parâmatro na URL
$codigo = $_GET['codigo'];
$sql = ("DELETE FROM tbl_mercadoria WHERE cod_mercadoria = '".$codigo."'");


// Deleta o Registro
$consulta = mysqli_query($conn, $sql);

// Verifica se o usuário foi excluído
if($consulta) {
	$msg = urlencode("Usuário excluido com sucesso!");
	header("Location: listarMercadoria.php?msg=$msg");
	exit;
} else {
	$erro = urlencode("Não foi possivel excluir o contato!");
	header("Location: listarMercadoria.php?erro=$erro");
	exit;
}
?>