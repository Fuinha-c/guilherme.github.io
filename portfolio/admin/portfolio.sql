show databases;

create database portfolio;

use portfolio;

create table cursos (
	id_curso int unsigned not null auto_increment primary key,
    nome varchar(50) not null,
    carga_horaria int(3) unsigned not null

 );
 
 insert into cursos (nome, carga_horaria) values ('HTML, CSS e JS', 40);
 insert into cursos (nome, carga_horaria) values ('Lógica de Programação', 20);
 insert into cursos (nome, carga_horaria) values ('Introdução ao SQL', 20);
 
 select * from cursos;