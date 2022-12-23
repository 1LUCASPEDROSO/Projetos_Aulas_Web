create database DB_salao;
use DB_salao;

create table servicos(
 id_servico int not null auto_increment primary key,
 nome varchar(80) not null,
 telefone int(14) not null,
 email varchar(80) not null,
 data_servico date not null,
 hora time not null,
 empregado int not null,
 foreign key (empregado) references empregados (id_empregado)
);

create table empregados(
 id_empregado int not null auto_increment primary key,
 nome varchar(80),
 email varchar(80) not null,
 telefone int(14) not null,
 senha varchar(10)
);
insert into empregados values (null,"daniela","danielasantos@gmail.com",51996052142,'1234');
insert into empregados values (null,"lucas","pedrosolucas@gmail.com",51996052142,'1234');
insert into empregados values (null,"Luigi","luigi@gmail.com",51996052142,'1234');
insert into empregados values (null,"camila","camila@gmail.com",51996052142,'1234');
insert into empregados values (null,"fernanda","fernanda@gmail.com",51996052142,'1234');

select email,senha from empregados where email='pedrosolucas@gmail.com' and senha='1234';
drop database DB_salao;
select id_servico,nome,telefone,email,data_servico, hora from servicos where empregado = 2;
select  id_servico,nome,telefone,email,data_servico,hora from servicos  where empregado =2;