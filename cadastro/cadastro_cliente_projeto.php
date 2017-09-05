<?php
	require_once('../conexao/conexao.php');
	session_start();

	
	$nome = $_POST['nome-proj'];
	$nome_resp = $_POST['nome-resp'];
	$telefone = $_POST['telefone'];
	/*$lote = $_POST['lote'];
	$quadra = $_POST['quadra'];
	$logradouro = $_POST['logradouro'];
	$bairro = $_POST['bairro'];*/
	$tipo = $_POST['tipo'];
	$dt_inicio = $_POST['dt_inicio'];
	$dt_termino = $_POST['previsao'];
	$status = $_POST['status'];
	$protocolo = $_POST['protocolo'];
	$observacao = $_POST['observacao'];
	$operador = $_SESSION['nome_usuario'];

	$cadastrar = $conexao->query("
		INSERT INTO projeto ( nome_proj,nome_resp,telefone,tipo,data_inicio,data_fim,info_status,protocolo,observacao,operador) 

		VALUES 
		('$nome', '$nome_resp','$telefone', '$tipo','$dt_inicio','$dt_termino','$status','$protocolo','$observacao','$operador')
		");


	if($cadastrar){
		echo "<script>
		alert('Registro cadastrado com sucesso!');
		window.close();
		</script>";
	}else{
		echo mysqli_error($conexao);
	}


?>