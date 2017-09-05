<?php 
	include("conexao/conexao.php");

	$codigo = $_GET['codigo'];

	$excluir = $conexao->query("DELETE FROM projeto where id = '$codigo'")or die(mysqli_error());


	echo "<script>window.close(); </script>";

	return true;

?>