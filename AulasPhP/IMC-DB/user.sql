create database cadastro;
use cadastro;

create table usuarios(
 id_pessoa int not null auto_increment primary key,
 email varchar(80) not null,
 senha varchar(80) not null,
 nome varchar(80) not null,
 idade int not null,
 sexo varchar(20) not null,
 peso float(5.2) not null,
 altura float(3.2) not null
);

insert into usuarios value(0,"lucas",20,"pedro","masculino",61.80,1.60,18.12);
insert into usuarios(email,peso,altura) values('pedrosolucas17452gmail.com',85,1.93);
drop database cadastro;