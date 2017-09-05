create table projeto(
	id int(100) not null auto_increment,
    nome_proj varchar(50) not null,
    nome_resp varchar(50) not null,
    telefone varchar(50) not null,
    lote int (3) not null,
    quadra int(3) not null,
    bairro varchar(50) not null,
    logradouro varchar(50) not null,
    info_status varchar(50) not null,
    protocolo int(30) not null);