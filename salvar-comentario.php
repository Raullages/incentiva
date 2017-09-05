

<?php
	include("conexao/conexao.php");
	$identificador = $_POST['identificador'];
	$comentario = $_POST['comentario_post'];
	$operador = $_POST['rt'];
	$data = date('d-m-Y H:i:s');
	sleep(2);

	$cadastra = $conexao->query("INSERT INTO historico (id, id_proj, responsavel, descricao ) VALUES ('$identificador','','$operador','$comentario') ");

	if($cadastra){ ?>
		
	<?php }else{
		echo "Comentario nao enviado!";
	}

?>

<script src="js/comentarios1.js" type="text/javascript"></script>
<script src="js/jquery-3.2.1.min.js"></script>
