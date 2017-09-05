<?php include "conexao/conexao.php";

	require_once("validando_sessao.php");
	if(isset($_GET['sair'])){
		session_destroy();
		header("Location: index.php");
	}
?>
<!DOCTYPE html>

<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title src="img/Logo.png">Incentiva Construtora</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/ajaxjquery.js"></script>

<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/ESTILO-MENU1.css">
<link rel="stylesheet" href="css/smartphones.css">

</head>
<body>

<div class="container-fluid sair">
	<a href="?sair"><span class="glyphicon glyphicon-log-out" aria-hidden="true" title="Sair"></span></a> <texto><?php echo $_SESSION['nome_usuario'] ?></texto>
	
</div>

<header>
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
	           			<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
            </button>
			<a href="index1.php" class="navbar-brand">Sistema de Controle Projetos<br> Incentiva Construtora </a>
		</div>

		<div class="collapse navbar-collapse" id="navbar1" >
			<ul class="nav nav-pills pull-right">
				<li class="active"><a href="#">HOME</a></li>
				<li><a href="#prefeitura">PREFEITURA</a></li>
				<li><a href="#servicos">SERVIÇOS</a></li>
				<li><a href="#">CONTATO</a></li>
			</ul>
		</div>
	</div>
</header>

<div class="container-fluid">
	<div class="row" id="botoes">
		<div class="col-xs-12">
		<a  target="_blank" onclick="window.open(this.href,'Editar','width=1024px, height=520px'); return false;" href="cadastro/cadastro.php" class="btn cadastrar" data-toggle="tooltip" data-placement="bottom" title="Cadastrar um novo projeto"></a>
		</div>
		<div class="col-xs-12">
		<a href="javascript:;" class="btn concluidos"></a>
		</div>
		
	</div>
</div>

<section class="bg-tabela-informacoes">
<div class="container-fluid">
<div class="row-fluid ">
	<div class="col-lg-7 col-sm-12 col-md-7 col-xs-12 tabela table-responsive">
		<table class="table table-hover">
			<tr>

				<th>Projeto</th>
				<th>Responsavel</th>
				<th>Telefone</th>
				<th>Status</th>
				<th>Protocolo</th>
				<th><span class="glyphicon glyphicon-pencil" aria-hidden="true" title="Editar"></span></th>

			</tr>
			<?php
				$result = $conexao->query("SELECT * FROM projeto ORDER BY data_inicio DESC ");

				while($linha = $result->fetch_array()){
			?>
			<tr class="teste" id="<?php echo $linha['id'] ?>">
				<td ><?php echo $linha['nome_proj'] ?></td>
				<td ><?php echo $linha['nome_resp'] ?></td>
				<td ><?php echo $linha['telefone'] ?></td>
				<td ><?php echo $linha['info_status'] ?></td>
				<td ><?php echo $linha['protocolo'] ?></td>
				<td>
					<a target='_blank'
					onclick="window.open(this.href,'Editar','width=1024px, height=640px'); return false;"
					href="./tabela/editar.php?codigo=<?php echo $linha['id'] ?>">
					<span class="glyphicon glyphicon-pencil editar" aria-hidden="true" title="Editar"></span>
					</a>
				</td>
			</tr>



		<?php } ?>
	</table>

	</div>
		<!-- Quadro de informações sobre o projeto especifico -->
		<div class="row box">
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
				<h4>INFORMAÇÕES</h4>
		
				<div class="box1 "></div>
			</div>
		</div>
</div>
</div>
</section>



	<!-- Links Relacionados -->
	<div class="acesso" id="prefeitura">
		<div class="row painel">

				<h2 class="">PREFEITURAS</h2>

				<div class="col-xs-12 col-md-2">
					<h3>RIBEIRÃO DAS NEVES</h3>

					<p><a target="_blank" href="http://www.ribeiraodasneves.mg.gov.br/"  title="Site Ribeirão das Neves">Site Rib. Neves</a> </p>
					<p><a target="_blank" href="http://www.ribeiraodasneves.mg.gov.br/index.php/secretarias/planejamento-e-gestao" >Planejamento e Gestão</a> </p>
					<p><a target="_blank" href="http://www.ereceita.net.br/portal/index.php?uri=DcrBCcAgDADAXYIDJKmoQRzGtnkIosVI52_vfc7UrM4CFBlDQo58EAVP_plr105eUjySCKEI_wURsrt607G1wGqntlXnXW3oqwb5Aw%3D%3D">IPTU on-line</a> </p>

				</div>

				<div class="col-xs-12 col-md-2">
					<h3>BH</h3>
					<p><a target="_blank" href="http://portaldeservicos.pbh.gov.br/portalservicos/view/paginas/home.jsf"  title="Site PBH">Site PBH</a> </p>
					<p><a target="_blank" href="https://urbano.pbh.gov.br/edificacoes/#/rt/login"  title="Portal do Responsável Técnico" >Portal do RT</a> </p>
					<p><a target="_blank" href="http://www.siasp-ru.pbh.gov.br/protocoloNovo.php"  title="Consulta de protocolos" >Siasp RU</a> </p>
					<p><a target="_blank" href="http://portalpbh.pbh.gov.br/pbh/ecp/comunidade.do?app=prodabel" >Prodabel</a> </p>
					<p><a target="_blank" href="http://portaldeservicos.pbh.gov.br/portalservicos/view/paginas/apresentaServico.jsf" >Aprovação Ínicial</a> </p>
					<p><a target="_blank" href="http://portalpbh.pbh.gov.br/pbh/ecp/comunidade.do?evento=portlet&pIdPlc=ecpTaxonomiaMenuPortal&app=regulacaourbana&tax=27371&lang=pt_BR&pg=5570&taxp=0&">Regulação Urbana</a> </p>
					<p><a target="_blank" href="http://iptuonline.siatu.pbh.gov.br/IptuOnline/index.xhtml">IPTU on-line</a> </p>
					<p><a target="_blank" href="http://siurbe.pbh.gov.br/docsiurbe_internet">Informação Básica</a> </p>
					<p><a target="_blank" href="http://guias.siatu.pbh.gov.br/siatu-urbano-guias-publico/f/t/egprojetoedificacaoman">Emissão de Taxas</a> </p>
					<p><a target="_blank" href="http://agendamentoeletronico.pbh.gov.br/senhafacil/">Agendamento on-line</a> </p>
				</div>
				<div class=" container prefeitura-ct col-xs-12 col-md-2">
					<h3>CONTAGEM</h3>

					<p><a target="_blank" href="http://www.contagem.mg.gov.br/" >Site Contagem</a> </p>



				</div>
				<div class=" container prefeitura-ct col-xs-12 col-md-2">
					<h3>RIO DE JANEIRO</h3>

					<p><a target="_blank" href="http://www.rio.rj.gov.br/" >Site Rio de Janeiro</a> </p>


				</div>
				<div class=" container prefeitura-ct col-xs-12 col-md-2">
					<h3>BETIM</h3>

					<p><a target="_blank" href="www.betim.mg.gov.br/" >Site Betim</a> </p>

				</div>
				<div class=" container prefeitura-rio col-xs-12 col-md-2">
					<h3>SETE LAGOAS</h3>

					<p><a target="_blank" href="https://www.setelagoas.mg.gov.br/" >Site Sete Lagoas</a> </p>


				</div>


		</div>
		<div class="bg-img"></div>

		<!-- Cadastro -->

		<!-- email -->
		<div class="emails">
				<img src="img/email.jpg" alt="" width="100%">
		</div>


		<div class="container-fluid rodape">

			<div class="emails" ></div>
			<h2 id="servicos">SERVIÇOS ÚTEIS</h2>
				<div class="col-md-2" >
					<h3>TELEFONES</h3>
						<span>Prefeitura BH - 156</span><br>
						<span>GELED PBH - 3246-0609</span><br>
						<span>GEGED - 3246-0570</span><br>
						<span>GECOAR - 3246-0629</span><br>
						<span>GDON - 3246-0566</span><br>
						<span>GETT - 3246-1028</span><br>


				</div>
				<div class="col-md-2" >
					<h3>EMAILS</h3>

					<span id="email"><a href="javascript:;">Emails da PBH</a></span><br>
					<span id=""><a target="_blank" href="https://outlook.live.com/owa/" title="Secretaria de Meio Ambiente">smaru@pbh.gov.br</a></span><br>
					<span>gedon@pbh.gov.br (GEDON)</span><br>

				</div>


		</div>
	</div>


	<!-- Rodapé -->


	<div class="container box1_rodape">
		<p>Incentiva Construtora Ltda - ME <br> Ribeirao Das Neves, MG - CNPJ : 23.042.937/0001-25</p>
		<p>Escritório Rua Domingos Costa Rezende - 31.370-295 - Braunas - Belo Horizonte - MG</p>
		<small>versão 1.0v</small>
	</div>

	<script src="js/efeitos.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/jquery-3.2.0.min.js"></script>
</body>
</html>
