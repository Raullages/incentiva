    <!DOCTYPE html>
    <?php require_once("../conexao/conexao.php");

    ?>
    <html lang="pt-BR">
    <head>
    	<meta charset="UTF-8">
        <title>Cadastrar Cliente</title>
        <link rel="stylesheet" href="../css/estilo_cadastro.css">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <script>
        function focus(){
            $('.nome-proj').focus();
        }
    </script>
<body onload="focus()">

<div class="row-fluid cabecalho">
    <h2>Cadastrar Clientes</h2>
               <!-- Informações do Serviço-->
    <div class="container servico">
        <h3>INFORMAÇÕES DO SERVIÇO</h3><br>

        <form action="cadastro_cliente_projeto.php" name='form' method="POST">
                    <div class="info-prop">
                        <div class="col-md-5">
                        <p for="Nome Projeto">Nome Projeto *</p>
                        <input type="text" name="nome-proj" class="nome-proj form-control" required>
                        </div>

                        <div class="col-md-4">
                            <p for="">Responsável *</p>
                            <input type="text" name="nome-resp" class="form-control" required>
                        </div>

                        <div class="col-md-3">
                        <p for="">Telefone *</p>
                        <input type="text" name="telefone" maxlength="14" value="(31) "  class="form-control" required>
                        </div>
                    </div>
                    <br>

                    <div class="info-prop1">
                        <div class="col-md-3">
                            <p for="">Tipo de Projeto*</p>

                                <select type="button" name="tipo" class="form-control" required>Tipo de Projeto
                                <option value="">--</option>
                                <option value="Aprovacão Inicial">Aprovação Inicial</option>
                                <option value="Regularizacao">Regularização</option>
                                <option value="Imagens 3D">Imagens 3D</option>
                                <option value="Videos 3D">Videos 3D</option>
                                <option value="Outros">Outros</option>

                                </select>

                        </div>
                        <div class="info-prop2">
                            <div class="col-md-2">
                                    <p for="">Inicio *</p>
                                    <input type="date" name="dt_inicio" class="form-control" required>
                            </div>
                            <div class="col-md-2">
                                    <p for="">Término *</p>
                                    <input type="date" name="previsao" class="form-control" required>
                            </div>

                            <div class="col-md-2">
                                    <p for="">Status</p>
                                    <select type="button" name="status" placeholder="Status" class="form-control" required>
                                    <option value="">--</option>
                                    <option value="Concluido">Concluido</option>
                                    <option value="Pendente">Pendente</option>
                                    </select>
                            </div>
                            <div class="col-md-3">
                                    <p for="">Protocolo</p>
                                    <input type="text" name="protocolo" placeholder="Protocolo" class="form-control" >
                            </div>

                    </div>
                    </div>
                    <br>

                    <div class="info-prop3">
                        <div class="col-md-12">

                                <p for="">Descrição do Serviços:</p>
                                <textarea name="observacao" class="form-control" ></textarea>

                        </div>
                        <div class="col-md-2">
                        <input type="submit" id="gravar" name="gravar" class="btn form-control" value="Gravar">
                        </div>

                        <div class="col-md-2">
                        <a href="" onclick="window.close();"><button type="button" class="btn cancelar form-control">Cancelar</button></a>
                         </div>
                    </div>
         </form>
    </div>
  <hr>
</div>

    <!-- Informações do Lote-->  <!--
    <form action="cadastro_cliente_lote.php" method="POST">
     <div class="container lote">
    <h3>INFORMAÇÕES DO LOTE</h3><br>
    <div class="bairro">
        <div class="col-md-2">
                <p for="">IPTU*</p>
                <input type="text" name="iptu" maxlength="13" class="form-control" >
        </div>
            <div class="col-md-1">
                <p for="">Lote*</p>
                <input type="text" name="lote" class="form-control" >
        </div>
        <div class="col-md-1">
                <p for="">Quadra*</p>
                <input type="text" name="quadra" class="form-control" >
        </div>
        <div class="col-md-2">
                <p for="">Zoneamento*</p>
                <select type="button" name="zoneamento" class="form-control" >
                    <option value="">ZP-1</option>
                    <option value="">ZAR-1</option>
                    <option value="">ZAR-2</option>
                    <option value="">ZUR</option>

                </select>
        </div>
            <div class="col-md-3">
                <p for="">Logradouro</p>
                <input type="text" name="logradouro" class="form-control" >
        </div>
        <div class="col-md-1">
                <p for="">Nº</p>
                <input type="text" name="numero" class="form-control" >
        </div>
        <div class="col-md-2">
                <p for="">Bairro*</p>
                <input type="text" name="bairro" class="form-control" >
        </div>
        <div class="col-md-2">
                    <p for="">Cep*</p>
                    <input type="text" name="cep" maxlength="8" class="form-control" >
        </div>
        </div>
    </div> fim da classe lote

            <div class="container botoes">
                <div class="col-md-2 ">
                <button type="submit" class="btn salvar" >Salvar</button>
                </div>

                <div class="col-md-2">
                <a href="" onclick="window.close();"><button type="button" class="btn cancelar form-control">Cancelar</button></a>
                </div>

            </div>
    </form> -->





<script src="../js/efeitos.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/jquery-3.2.0.min.js"></script>


    </body>
    </html>
