<?php 
$servidor = 'incentiva.database.windows.net';
$usuario = 'raullages';
$senha = 'Eminem31';
$banco = 'incentiva construtora';
    
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
$selecao = mysqli_select_db($conexao,$banco);

if(!$conexao){
    echo "Erro ao Conectar com o Banco";
}
	
?>