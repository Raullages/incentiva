<?php
	include("conexao/conexao.php");
	session_start();


	$valida_nome = $_POST['nome'];
	$valida_senha = md5($_POST['senha']);

	$resultado = $conexao->query("SELECT * FROM dbo.usuario WHERE nome = '".$valida_nome."'");
	$row = sqlsrv_num_rows($resultado);

	if($row){
		$row = sqlsrv_fetch_array($resultado);
		
		if(!strcmp($valida_senha, $row['senha'])){
			$_SESSION['nome_usuario'] = $row['nome'];
			$_SESSION['ultimoAcesso'] = date('d-m-Y H:i');

			header("Location: index1.php");

		}else{
			echo "<script>alert('Senha Invalida')
			location.href = 'index.php';
			</script>";
			exit;
		}
	}else{
		echo "<script>alert('Usuário não existe')
			location.href = 'index.php';
			</script>";
		exit;
	}


?>