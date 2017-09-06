
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<!--
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" charset="ISO-8859-1"> -->
	<meta name="" content="" charset="iso-8859-1">

	<style>

		.obs, .info{
			margin: 10px;
		}
		.obs p{
			text-transform: inherit;
			font-size: 12px;
			padding: 10px 20px 0 20px;
			background-color: #eee;
			border-radius: 5px;
		}
		.info p{
			padding: 0px 20px 0 20px;

		}

		h5{
			text-transform: uppercase;
			background-color: #eee;
			padding: 5px;
			font-weight: bold;
			border-radius: 5px;

		}
		i{
			font-size: 12px;
			color: #777;
			text-transform: none;
		}

		textarea{
			width: 100%;
			border: 1px solid #aaa;
			border-radius: 5px;
			resize: none;
		}
		.identificacao{
			width: 100%;
			top:10px;
			padding: 0;

		}
		.identificacao select{
			margin: 10px 0 10px 0;
			width: 100%;
		}
		.identificacao input{
			margin: 10px 0 10px 0;
			width: 100%;
			background-color: #4bc140;
			color: #fff;
		}
		.identificacao input:hover{
			
			background-color: #4ad140;
			color: #fff;
		}
		.identificacao a{
			margin: 10px 0 10px 0;
			width: 100%;
			background-color: #397efa;
			color: #fff;
		}
		.identificacao a:hover{
			background-color: #397ab7;
			color: #fff;
		}
		
	</style>
</head>
<body>
	<?php

		include("conexao/conexao.php") ;
		session_start();
		$codigo = $_GET['codigo'];

		if (isset($codigo)) {
		}else{
			echo "nao existe";
		}

		$resultado_projeto = $conexao->query("SELECT * FROM projeto WHERE id = $codigo");
		while($row = $resultado_projeto->fetch_array()){
			$id = $row['id'];
			$nome_proj = $row['nome_proj'];
			$nome_resp = $row['nome_resp'];
			$telefone = $row['telefone'];
			$status = $row['info_status'];
			$operador = $row['operador'];
			$obsercao1 = $row['observacao'];

		 	?>
			<div class="info">
			<h5>Nome Projeto:</h5>
			<p><?php echo $nome_proj." - <strong>Responsavel: </strong>".$nome_resp." - ".$telefone." " ?></p>

		</div> <?php } ?>




				<?php


				$resultado = $conexao->query("SELECT * FROM historico h INNER JOIN projeto p ON h.id = p.id WHERE h.id = $codigo ORDER BY data DESC");
				$comentario = sqlsrv_num_rows($resultado);
				?>
					<div class="obs"><h5>OBSERVACAO:</h5>
							<div class="coment-obs">
								<p>
								<?php
									if(!$comentario == 0){

										while($linha = $resultado->fetch_array()){

											$observacao = $linha['descricao'];
											$operador = $linha['responsavel'];
											$hora = $linha['data'];

											echo "<strong>".$operador." - ".date('d-m-Y H:i',strtotime($hora))."</strong><br>".$observacao."<br><br>";

										}
									}else{
											echo "Nenhum Comentário Postado";
										}

								?></p>
							</div>
					</div>





<!--  Enviar comentário-->
<div class="container-fluid" style="height:300px; background: #fff" >
	<form action="" class="row-fluid" method="post">
		<div class="identificacao col-lg-5 col-xs-12">
			<p>Adicionar Comentário</p>

			<input type="text" name="" id="id" style="display: none;" class="form-control" value="<?php echo $id ?>" disabled>
		  	
		  	<textarea name="texto-comentario" id="texto_coment" rows="4" cols="50" required></textarea><br>

			<div class="col-xs-8 col-xs-offset-2">
				<select type="text" name="" class="form-control" id="resp-tecnico" disabled>RT
					<option value="<?php echo $_SESSION['nome_usuario']?>"><?php echo $_SESSION['nome_usuario']?></option>
				</select>
			</div>

			<div class="col-xs-8 col-xs-offset-2">
				<input type="button" name=""  class="btn btn form-control" value="Salvar Comentário" id="salvar">
			</div>

			<div class="col-xs-8 col-xs-offset-2">
			<a target="_blank" href="imprime.php?codigo=<?php echo $id ?>" type="button" name="imprimir" id="imprimir" class="btn btn form-control" value="Imprimir">Salvar PDF</a>
			</div>
		</div>
	</form>
</div>

<script src="js/comentarios1.js" type="text/javascript"></script>
<script src="js/jquery-3.2.1.min.js"></script>

</script>
</body>
</html>
