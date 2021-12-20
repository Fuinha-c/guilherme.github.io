use portfolio;
SELECT * FROM cursos;
drop table usuarios;

CREATE TABLE `cursos` (
  `id_curso` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `carga_horaria` int(3) unsigned NOT NULL,
  `instituicao` varchar(50) NOT NULL,
  PRIMARY KEY (`id_curso`)
); 

SELECT * FROM cursos;

create table `usuarios` (
 `id` int unsigned ZEROFILL NOT NULL AUTO_INCREMENT,
`login` varchar(25) NOT NULL,
`senha` varchar(20) NOT NULL,
PRIMARY KEY (`id`)
);

SELECT * FROM usuarios;

INSERT INTO usuarios (login, senha) VALUES ('gui', '123');

