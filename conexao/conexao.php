<?php 
$servidor = 'incentiva.database.windows.net';
$usuario = 'raullages31';
$senha = 'Eminem31';
$banco = 'incentiva construtora';
    
$conexao = mssql_connect($servidor,$usuario,$senha,$banco);
$selecao = mssql_select_db($conexao,$banco);

if(!$conexao){
    echo "Erro ao Conectar com o Banco";
}

?>
