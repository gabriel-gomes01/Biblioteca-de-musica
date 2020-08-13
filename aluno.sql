create database Sistema;
use Sistema;

create table tblogin(
	idusuario int not null auto_increment, primary key(idusuario),
	usuario varchar(20),
	senha varchar(25)
);
 
 create table tbmusicas(
 	idmusica int not null auto_increment, primary key(idmusica),
 	cantor varchar(55) not null,
 	musica varchar(55) not null,
 	album varchar(55) not null,
 	qualidade varchar(255) not null,
 	nota decimal(2,1) not null

 );


select * from tblogin;
select * from tbmusicas;