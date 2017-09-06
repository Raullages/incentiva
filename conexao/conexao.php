<?php 
$servidor = "incentiva.database.windows.net";
$conect_opcao = array(
	"database" => "incentiva construtora",
	"Uid" => "raullages31",
	"PWD" => "Eminem31"
	);
	
	$conexao = sqlsrv_connect($servidor,$conect_opcao);

	if($conexao){
		echo 'Sucesso';
	}else{
		echo 'Erro ao conectar';
	}

?>
