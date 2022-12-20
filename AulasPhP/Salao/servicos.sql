create database DB_salao;
use DB_salao;

create table servicos(
 id_servico int not null auto_increment primary key,
 nome varchar(80) not null,
 telefone int(14) not null,
 email varchar(80) not null,
 data_servico date not null,
 hora time not null,
 empregado varchar(80) not null

);