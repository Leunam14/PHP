DROP DATABASE IF EXISTS tol2;
CREATE DATABASE IF NOT EXISTS tol2;
USE tol2;

CREATE TABLE `usuarios` (
  `cod` int(10) NOT NULL auto_increment,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  CONSTRAINT pk_cod PRIMARY KEY (cod)
) ENGINE=InnoDB;

INSERT INTO `usuarios` (`cod`, `usuario`, `clave`, `tipo`) VALUES
(1, 'admin', '1234', 'admin'),
(2, 'alberto', '4567', 'prof'),
(3, 'juan', '4321', 'tutor'),
(4, 'federico', '9999', 'prof');

CREATE TABLE `alumnos` (
	`nombre` varchar(20) NOT NULL,
    `apellidos` varchar(20) NOT NULL,
    `dni_alum` varchar(8) NOT NULL,
    CONSTRAINT pk_dni_alum PRIMARY KEY (dni_alum)
) ENGINE=InnoDB;

INSERT INTO `alumnos` (`nombre`, `apellidos`, `dni_alum`) VALUES 
('Laura', 'Valverde Martínez', 28474578),
('Raúl', 'Lozano Palazón', 12785934),
('David', 'Sánchez Quevedo', 87434189);

CREATE TABLE `profesores` (
	`nombre` varchar(20) NOT NULL,
    `apellidos` varchar(20) NOT NULL,
    `dni_prof` varchar(8) NOT NULL,
    CONSTRAINT pk_dni_prof PRIMARY KEY (dni_prof)
) ENGINE=InnoDB;

INSERT INTO `profesores` (`nombre`, `apellidos`, `dni_prof`) VALUES 
('María del Carmen', 'Pozo Sagrado', 87425975),
('Lucía', 'Fernández Alarcón', 48657195),
('Antonio', 'Ruíz Ruíz', 65754982);

CREATE TABLE `modulos` (
	`cod_modulo` int(10) not null auto_increment,
	`descripcion` varchar(60),
	`dni_prof` varchar(8),
    CONSTRAINT pk_cod_modulo PRIMARY KEY (cod_modulo),
    CONSTRAINT fk_dni_prof FOREIGN KEY (dni_prof) REFERENCES profesores(dni_prof) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

INSERT INTO `modulos` (`cod_modulo`, `descripcion`, `dni_prof`) VALUES

(1, 'Desarrollo web entorno cliente', 87425975),
(2, 'Desarrollo web entorno servidor', 48657195),
(3, 'Despliegue de aplicaciones web', 65754982);

CREATE TABLE `matriculas` (
	`cod_matricula` int(10) NOT NULL auto_increment,
    `dni_alum` varchar(8),
    `cod_modulo` int(10),
    CONSTRAINT pk_cod_matricula PRIMARY KEY (cod_matricula),
    CONSTRAINT fk_dni_alum FOREIGN KEY (dni_alum) REFERENCES alumnos (dni_alum)  ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_cod_modulo FOREIGN KEY (cod_modulo) REFERENCES modulos (cod_modulo)  ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

INSERT INTO `matriculas` (`cod_matricula`, `dni_alum`, `cod_modulo`) VALUES

(1, 28474578, 1),
(2, 12785934, 2),
(3, 87434189, 3);

CREATE TABLE `asistencia` (
	`cod_asistencia` int(10) NOT NULL auto_increment,
    `fecha` DATE NOT NULL,
    `cod_modulo` int(10),
    `dni_alum` varchar(10),
    CONSTRAINT pk_cod_asistencia PRIMARY KEY (cod_asistencia),
    CONSTRAINT fk_cod_mod FOREIGN KEY (cod_modulo) REFERENCES modulos (cod_modulo)  ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_dni_al FOREIGN KEY (dni_alum) REFERENCES alumnos (dni_alum)  ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

INSERT INTO `asistencia` (`cod_asistencia`, `fecha`, `cod_modulo`, `dni_alum`) VALUES

(1, '2021-05-10', 1, 28474578),
(2, '2021-06-11', 2, 12785934),
(3, '2021-07-10', 3, 87434189);