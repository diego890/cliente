DROP DATABASE if exists BaseCliente;

CREATE DATABASE `BaseCliente` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `BaseCliente`;

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comentario` varchar(50) NOT NULL,  
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

INSERT INTO `persona` (`id_persona`, `nombre`, `dni`, `email`, `comentario`) VALUES
(1, ' Patrick Valderrama Carbajal', ' 45678925', ' patrickvcarb@hotmail.com', ' Profesor de quimica'),
(2, ' Carlos Mendoza Cruz', ' 57877782',' carlomend@hotmail.com', ' Profesor de matematica'),
(3, ' Paul Cortijo Mendoza', ' 42349874', ' cortijom@hotmail.com', ' Profesor de fisica'),
(4, ' Rosita Carranza de la Cruz', ' 33490239','carranzarc@hotmail.com', ' Profesor de comunicacion'),
(5, ' Alex Vargas Sanchez', ' 47349873',' alexvarsan@gmail.com', ' Profesor de computacion'),
(6, ' Jorge Castro Rodriguez', ' 44634521',' jorgecas@hotmail.com', ' Profesor de logica'),
(7, 'Cesar Ulloa Perez', ' 55532789', 'ulloacesar20@hotmail.com', ' Profesor de Raz. Matematico'),
(8, 'Kevin Cueva Jara', ' 32345678', ' kevin2015@hotmail.com', 'Profesor de Ciencias Sociales');

CREATE TABLE IF NOT EXISTS `equipos` (
  `id_equipo` varchar(40) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `descripcion` varchar(40) NOT NULL,
  PRIMARY KEY (`id_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `equipos` (`id_equipo`, `nombre`, `descripcion`) VALUES
(1, ' Laptop HP', ' Pantalla 17", CORE i5'),
(2, ' Parlantes', ' Marca: Sony, bass'),
(3, ' Proyector', ' .....'),
(4, ' Equipo de sonido', ' Marca: Sony, sonido estereo');


CREATE TABLE autorizados(
id_autorizado int NOT NULL AUTO_INCREMENT primary key,
id_persona int(11) NOT NULL,
fecha date,
hora_en time,
hora_sa time,
FOREIGN KEY(id_persona) REFERENCES persona (id_persona)
);


CREATE TABLE tipo_operacion(
codigo char(1) primary key,
description varchar(20)
);


CREATE TABLE ingreso(
`usuario` varchar(40) NOT NULL,
id_equipo varchar(40) NOT NULL,
PRIMARY KEY  (`usuario`),
  KEY id_equipo (id_equipo),
hora_operacion datetime,
codigo char(1),
FOREIGN KEY(usuario) REFERENCES usuario (usuario),
FOREIGN KEY(id_equipo) REFERENCES equipos (id_equipo),
FOREIGN KEY(codigo) REFERENCES tipo_operacion (codigo)
);


CREATE TABLE retirado(
`usuario` varchar(40) NOT NULL,
id_equipo varchar(40) NOT NULL,
PRIMARY KEY  (`usuario`),
  KEY id_equipo (id_equipo),
hora_operacion datetime,
codigo char(1),
FOREIGN KEY(usuario) REFERENCES usuario (usuario),
FOREIGN KEY(id_equipo) REFERENCES equipos (id_equipo),
FOREIGN KEY(codigo) REFERENCES tipo_operacion (codigo)
)