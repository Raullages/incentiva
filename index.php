<?php
session_start(); 
include("conexao/conexao.php"); 
	
 ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="pragma" content="no-cache">
	<title>Login</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="js/ajaxjquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
	
<style>
	body{
		margin: 0;
		background-color: #aadddd;
		
	}
	h3{
	    text-align: center;
	    margin-top: -10px;
	    /*margin-left: -50px;*/
	    margin-bottom: 20px;
	    padding: 5px;
	    width: 100%;
	    background-color: #397ab7;
	    color: #fff;
	    box-shadow: 0px 1px 2px black;
	    border-radius: 5px;
	    
	}
	.box{
		border-radius: 5px;
		background-color: #fff;
		position: absolute;
		box-shadow: 0px 3px 13px black;
		padding: 50px;
		width: 600px;
		height: 400px;
		color: black;
		top: 50%;
		margin-top: -200px;
		left: 50%;
		margin-left: -300px;
		
		
	}
	.box h4{
		color: black;
		text-align: center;

		
	}
	
	.box input{

		background-color: #fff;
	}
	#enviar button{

		text-align: left;
		margin-top: 20px;
		
	}
	#enviar span{
		margin-left: 80%;
	}
	#cadastrar{
		width: 100%;
		/*position: absolute;*/
		margin-top: 20px;
		margin-bottom: 20px;
		text-decoration: none;
		text-align: left;
		background-color: #ddd;
	}
	#cadastrar:hover{
		background-color: #ccc;
	}
	
</style>

</head>
<body onload="focus();">


<script>
	function validacao(){
		if(login.nome.value == ""){
			alert("Insira seu nome!");
			login.nome.focus();
			return false;
		}else if(login.senha.value==""){
			alert("Insira sua senha!");
			login.senha.focus();
			
		}else{
			login.submit();
		}
	}
	function focus(){
		login.nome.focus();	
	}


</script>
		<div class="container-fluid" >
			
				<div class="row-fluid">
					<div class="box">
					<h3>Login</h3>
						<form action="validacao.php" name="login" method="POST">
							<p>Nome: </p>
							<input type="text" name="nome" class="form-control" minlength="8">
							<br>
							<p>Senha: </p>
							<input type="password" class="form-control" name="senha" maxlength="8" minlength="6">
							
							<div id="enviar">
								<button type="button" class="btn btn-primary form-control" value="Entrar" onclick="validacao();">Entrar  <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button>

							</div>
							<a href="login/cadastrar_rt.php" id="cadastrar" class="btn btn">Cadastrar RT</a>
						</form>
				
					</div>
				</div>
		</div>
	
	<script src="js/efeitos.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	
</body>
</html>
