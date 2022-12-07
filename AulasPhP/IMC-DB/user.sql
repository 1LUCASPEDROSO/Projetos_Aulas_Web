create database cadastro;
use cadastro;

create table usuarios(
 id_pessoa int not null auto_increment primary key,
 nome varchar(80) not null,
 idade int not null,
 senha varchar(80) not null,
 sexo varchar(20) not null,
 peso float(5.2) not null,
 altura float(3.2) not null,
 resultado float(4.2)not null
);

insert into usuarios value(0,"lucas",20,"pedro","masculino",61.80,1.60,18.12);
drop database cadastro;