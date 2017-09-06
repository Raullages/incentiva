<?php 
/*$servidor = 'incentiva.database.windows.net';
$usuario = 'raullages31';
$senha = 'Eminem31';
$banco = 'incentiva construtora';
    
$conexao = mysql_connect($servidor,$usuario,$senha,$banco);
$selecao = mysql_select_db($conexao,$banco);


if(!$conexao){
    echo "Erro ao Conectar com o Banco Teste";
}else{
	echo 'Conexao efetuada';
}*/

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