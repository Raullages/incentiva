<?php 
$servidor = 'incentiva.database.windows.net';
$usuario = 'raullages31';
$senha = 'Eminem31';
$banco = 'incentiva construtora';

$connectio_info = array("UID"=>$usuario, "PWD"=>$senha, "Database"=>$banco);

$conexao = sqlsrv_connect($servidor,$connectio_info);
$selecao = mssql_select_db($conexao,$banco);

if(!$conexao){
    echo "Erro ao Conectar com o Banco";
}

?>
