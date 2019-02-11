SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS caprepol;

USE caprepol;

DROP TABLE IF EXISTS alumnos;

CREATE TABLE `alumnos` (
  `idAlumno` varchar(100) NOT NULL,
  `idPrestador` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idAlumno`),
  KEY `idPrestador` (`idPrestador`),
  CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`idPrestador`) REFERENCES `prestador` (`idPrestador`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS convenio;

CREATE TABLE `convenio` (
  `idConvenio` varchar(100) NOT NULL,
  `NombreEscuela` varchar(100) NOT NULL,
  `Carreras` varchar(100) NOT NULL,
  `Vigencia` date NOT NULL,
  PRIMARY KEY (`idConvenio`),
  CONSTRAINT `convenio_ibfk_1` FOREIGN KEY (`idConvenio`) REFERENCES `prestador` (`idConvenio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS prestador;

CREATE TABLE `prestador` (
  `idPrestador` varchar(100) NOT NULL,
  `idConvenio` varchar(50) NOT NULL,
  `NombreAlumno` varchar(100) NOT NULL,
  `Inicio` date NOT NULL,
  `Termino` date NOT NULL,
  `Proyecto` varchar(100) NOT NULL,
  `Carrera` varchar(100) NOT NULL,
  `Escuela` varchar(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Ubicacion` varchar(100) NOT NULL,
  `Piso` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Observaciones` varchar(100) NOT NULL,
  PRIMARY KEY (`idPrestador`),
  KEY `idConvenio` (`idConvenio`) USING BTREE,
  CONSTRAINT `prestador_ibfk_1` FOREIGN KEY (`idPrestador`) REFERENCES `alumnos` (`idPrestador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `prestador_ibfk_2` FOREIGN KEY (`idConvenio`) REFERENCES `convenio` (`idConvenio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS registros;

CREATE TABLE `registros` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idAlumno` varchar(100) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idAlumno` (`idAlumno`),
  CONSTRAINT `registros_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `alumnos` (`idAlumno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




SET FOREIGN_KEY_CHECKS=1;