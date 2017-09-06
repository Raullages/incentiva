<?php 
$servidor = 'incentiva.database.windows.net';
$usuario = 'raullages31';
$senha = 'Eminem31';
$banco = 'incentiva construtora';
    
$conexao = mysql_connect($servidor,$usuario,$senha,$banco);
$selecao = mysql_select_db($conexao,$banco);


if(!$conexao){
    echo "Erro ao Conectar com o Banco Teste";
}else{
	echo 'Conexao efetuada';
}

?>
