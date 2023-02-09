create database db_pousada;
use db_pousada;

create table pousada1
( id_pousada1 int not null primary key  auto_increment,
  nome_cliente varchar(80) not null,
  telefone_cliente varchar(80) not null,
  email_cliente varchar(50) not null,
  data_entrada date not null,
  data_saida date not null,
  total_pessoas varchar(50) not null,
  quartos varchar(50) not null
);

create table pousada2
( id_pousada2 int not null primary key auto_increment,
  nome_cliente varchar(80) not null,
  telefone_cliente varchar(50) not null,
  email_cliente varchar(50) not null,
  data_entrada  date,
  data_saida date,
  total_pessoas varchar(50) not null,
  quartos varchar(50) not null
);

create table administracao(
 id_adm int not null primary key auto_increment,
 email varchar(50) not null,
 senha varchar(50) not null
);

insert into pousada1 values(null,'lucas','454948','pedrosolucas1745@gmail.com','2023-27-10','2023-02-15','1','1');
insert into administracao values (null,'pedrosolucas1745@gmail.com','razerviper');
select * from administracao;
select email,senha from administracao where email = 'pedrosolucas1745@gmail.com' and senha = 'razerviper';
select * from pousada1;
select data_entrada from pousada1 where data_entrada = '2023-27-10';
select data_entrada
from pousada1 
where data_entrada;
drop database db_pousada;