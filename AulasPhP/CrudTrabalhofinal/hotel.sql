create database db_pousada;
use db_pousada;

create table pousada1
( id_pousada1 int not null primary key  auto_increment,
  nome_cliente varchar(80) not null,
  telefone_cliente int not null,
  email_cliente varchar(50) not null,
  data_entrada date,
  data_saida date,
  total_pessoas int not null,
  quartos int not null
);

create table pousada2
( id_pousada2 int not null primary key auto_increment,
  nome_cliente varchar(80) not null,
  telefone_cliente int not null,
  email_cliente varchar(50) not null,
  data_entrada date,
  data_saida date,
  total_pessoas int not null,
  quartos int not null
);

create table administracao(
 id_adm int not null primary key auto_increment,
 email varchar(50) not null,
 senha varchar(10) not null
);

insert into administracao values (null,'pedrosolucas1745@gmail.com','razerviper1');
select * from administracao;

select * from pousada1, pousada2;