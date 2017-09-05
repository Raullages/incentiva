<?php 
$servidor = 'tcp:incentiva.database.windows.net,1433';
$usuario = 'raullages31';
$senha = 'Eminem31';
$banco = 'incentiva construtora';
    
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
$selecao = mysqli_select_db($conexao,$banco);


if(!$conexao){
    echo "Erro ao Conectar com o Banco";
}

?>
