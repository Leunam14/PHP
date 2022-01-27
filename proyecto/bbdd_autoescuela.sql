DROP DATABASE IF EXISTS proyecto_autoescuela;
CREATE DATABASE IF NOT EXISTS proyecto_autoescuela;
USE proyecto_autoescuela;

CREATE TABLE `usuarios` (
  `cod` int(10) NOT NULL auto_increment,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(4) NOT NULL,
  CONSTRAINT pk_cod PRIMARY KEY (cod)
) ENGINE=InnoDB;

INSERT INTO `usuarios` (`cod`, `usuario`, `clave`) VALUES
(1, 'alberto', '1234'),
(2, 'juan', '4321');

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

CREATE TABLE `coches` (
	`marca` varchar(20) NOT NULL,
    `modelo` varchar(20) NOT NULL,
    `matricula` varchar(7) NOT NULL,
    CONSTRAINT pk_matricula PRIMARY KEY (matricula)
)ENGINE=InnoDB;

INSERT INTO `coches` (`marca`, `modelo`, `matricula`) VALUES
('Renault', 'Clio', 'LPM4712'),
('Ford', 'Focus', 'CYC8712'),
('Hyundai', 'Sonata', 'DCD4785');

CREATE TABLE `alumnos` (
	`nombre` varchar(20) NOT NULL,
    `apellidos` varchar(20) NOT NULL,
    `dni_alum` varchar(8) NOT NULL,
    `dni_prof` varchar(8) NOT NULL,
    `matricula` varchar(7) NOT NULL,
    CONSTRAINT pk_dni_alum PRIMARY KEY (dni_alum),
    CONSTRAINT fk_dni_profesor FOREIGN KEY (dni_prof) REFERENCES profesores (dni_prof) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_matricula FOREIGN KEY (matricula) REFERENCES coches (matricula) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

INSERT INTO `alumnos` (`nombre`, `apellidos`, `dni_alum`, `dni_prof`, `matricula`) VALUES 
('Laura', 'Valverde Martínez', 28474578, 87425975, 'LPM4712'),
('Raúl', 'Lozano Palazón', 12785934, 48657195, 'CYC8712'),
('David', 'Sánchez Quevedo', 87434189, 65754982, 'DCD4785');