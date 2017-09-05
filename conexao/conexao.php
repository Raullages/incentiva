<?php 
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'cadastro';
    
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
$selecao = mysqli_select_db($conexao,$banco);

if(!$conexao){
    echo "Erro ao Conectar com o Banco";
}
	
?>