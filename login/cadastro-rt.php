<?php 
	include("../conexao/conexao.php");

	//$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$select = $conexao->query("SELECT * FROM dbo.usuario");
	$row = sqlsrv_num_rows($select);

	if($row){
		$row = $select->fetch_array();

			if(strcmp($nome, $row['nome'])){
				$conexao->query("INSERT INTO usuario VALUES ('','$nome','$email','$senha')") or die(sqlsrv_error());
				echo "<script>alert('Cadastro Realizado com sucesso!');
				location.href= '../index.php';
				
				</script>";
			}else{
				echo "<script>alert('Usuario ja existe');
				location.href= 'cadastrar_rt.php';
				</script>";
				
				
				

			}
		}

	
	


?>