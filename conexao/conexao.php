<?php 
$servidor = 'tcp:incentiva.database.windows.net,1433';
$usuario = 'raullages31';
$senha = 'Eminem31';
$banco = 'incentiva construtora';
    
$conexao = mysql_connect($servidor,$usuario,$senha,$banco);
$selecao = mysql_select_db($conexao,$banco);


if(!$conexao){
    echo "Erro ao Conectar com o Banco Teste";
}
// PHP Data Objects(PDO) Sample Code:
/*try {
    $conexao = new PDO("sqlsrv:server = tcp:incentiva.database.windows.net,1433; Database = incentiva construtora", "raullages31", "Eminem31");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$selecao = array("UID" => "raullages31@incentiva", "pwd" => "{your_password_here}", "Database" => "incentiva construtora", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$servidor = "tcp:incentiva.database.windows.net,1433";
$conexao = sqlsrv_connect($serverName, $connectionInfo);*/
	
?>