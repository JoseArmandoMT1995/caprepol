SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS caprepol;

USE caprepol;

DROP TABLE IF EXISTS convenio;

CREATE TABLE `convenio` (
  `idConvenio` varchar(100) NOT NULL,
  `NombreEscuela` varchar(100) NOT NULL,
  `Carreras` varchar(100) NOT NULL,
  `Vigencia` date NOT NULL,
  PRIMARY KEY (`idConvenio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO convenio VALUES("1312","itgam","tics","2019-09-09");
INSERT INTO convenio VALUES("1520","INSURGENTES","derecho","2020-03-03");
INSERT INTO convenio VALUES("656","ftdrtd","tftft","2018-01-01");



DROP TABLE IF EXISTS personal;

CREATE TABLE `personal` (
  `idPrestador` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idPrestador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO personal VALUES("277","hggh","vhbjh","565864.jpg");
INSERT INTO personal VALUES("1965","virginias","gonzalez perez","314010.jpg");
INSERT INTO personal VALUES("1978","maribel","cabrera alba","308248.jpg");
INSERT INTO personal VALUES("1979","Pedro","Lopez Hernandez","449251.jpg");
INSERT INTO personal VALUES("1985","Elias","Romero Gonzalez","637722.jpg");
INSERT INTO personal VALUES("1991","Elisa","Gonzalez Romero","36060.jpg");
INSERT INTO personal VALUES("1995","armando","moreno","563029.png");
INSERT INTO personal VALUES("12345","pedro","duran martinez","955184.jpg");
INSERT INTO personal VALUES("12547","Carlos","rrrrrrrrrrr","587998.jpg");
INSERT INTO personal VALUES("123456","fernando","ramirez ramirez","782048.png");
INSERT INTO personal VALUES("13113041","rodman1","romero hernandez","982196.jpg");
INSERT INTO personal VALUES("14587787","pablo","galeana","284072.jpg");



DROP TABLE IF EXISTS prestador;

CREATE TABLE `prestador` (
  `idPrestador` varchar(100) NOT NULL,
  `idConvenio` varchar(100) NOT NULL,
  `NombreAlumno` varchar(100) NOT NULL,
  `Inicio` date NOT NULL,
  `Termino` date NOT NULL,
  `Proyecto` varchar(100) NOT NULL,
  `Carrera` varchar(100) NOT NULL,
  `Escuela` varchar(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Ubicacion` varchar(100) NOT NULL,
  `Piso` int(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Observaciones` varchar(100) NOT NULL,
  PRIMARY KEY (`idPrestador`),
  KEY `idConvenio` (`idConvenio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO prestador VALUES("123455555","123","rrrr","2019-09-09","2019-09-09","RRRR","RRRRR","RRRRR","RRRRR","RRRR","0","RRRRR","RR");
INSERT INTO prestador VALUES("131130411","123","Elisa Romero Gonzalez xD","2019-09-09","2019-03-09","Administracion de conmutador","tics","itgam","Soporte tecnico","Pedro moreno","3","servicio social","Este prestador esta activo ");
INSERT INTO prestador VALUES("676","gghf","ghjhj","2018-01-01","2018-01-01","7987","87678","67","6789","uyuyy","0","887","uyiuy");



DROP TABLE IF EXISTS privilegios;

CREATE TABLE `privilegios` (
  `id_usuario` int(11) NOT NULL,
  `modulo_administrador` varchar(2) NOT NULL,
  `modulo_checador` varchar(2) NOT NULL,
  `adm_conv` varchar(2) NOT NULL,
  `adm_conv_nuevo_convenio` varchar(2) NOT NULL,
  `adm_conv_buscar_convenio` varchar(2) NOT NULL,
  `adm_conv_descargar_reporte` varchar(2) NOT NULL,
  `adm_pre` varchar(2) NOT NULL,
  `adm_pre_nuevo_prestador` varchar(2) NOT NULL,
  `adm_pre_buscar_prestador` varchar(2) NOT NULL,
  `adm_pre_descargar_reporte` varchar(2) NOT NULL,
  `chec_dar_alta` varchar(2) NOT NULL,
  `chec_buscar_registro` varchar(2) NOT NULL,
  `chec_buscar_registro_general` varchar(2) NOT NULL,
  `chec_monitoreo` varchar(2) NOT NULL,
  KEY `usuario` (`id_usuario`),
  CONSTRAINT `usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO privilegios VALUES("2","si","si","si","si","si","si","si","si","si","si","si","si","si","si");



DROP TABLE IF EXISTS registros;

CREATE TABLE `registros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPrestador` int(11) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO registros VALUES("207","1979","2018-09-05 11:14:04","Entrada","2018-09-05");
INSERT INTO registros VALUES("208","1979","2018-09-05 11:29:57","Salida","2018-09-05");
INSERT INTO registros VALUES("209","1991","2018-09-11 11:39:50","Entrada","2018-09-11");
INSERT INTO registros VALUES("210","1991","2018-09-13 12:57:37","Salida","2018-09-13");
INSERT INTO registros VALUES("211","1991","2018-09-13 12:57:41","Entrada","2018-09-13");
INSERT INTO registros VALUES("212","1991","2018-10-03 11:46:17","Salida","2018-10-03");
INSERT INTO registros VALUES("213","1991","2018-10-03 11:46:28","Entrada","2018-10-03");
INSERT INTO registros VALUES("214","14587787","2018-10-04 10:42:41","Entrada","2018-10-04");
INSERT INTO registros VALUES("215","1965","2018-10-19 18:49:51","Entrada","2018-10-19");
INSERT INTO registros VALUES("216","1965","2018-10-19 19:29:01","Salida","2018-10-19");
INSERT INTO registros VALUES("217","1979","2018-10-19 19:30:00","Entrada","2018-10-19");
INSERT INTO registros VALUES("218","1965","2018-10-20 19:49:58","Entrada","2018-10-20");
INSERT INTO registros VALUES("219","1965","2018-10-23 16:51:25","Salida","2018-10-23");
INSERT INTO registros VALUES("220","1991","2018-11-08 15:46:48","Salida","2018-11-08");
INSERT INTO registros VALUES("221","1991","2018-11-08 15:47:02","Entrada","2018-11-08");
INSERT INTO registros VALUES("222","1991","2018-11-14 21:08:03","\n po","2018-11-14");
INSERT INTO registros VALUES("223","1991","2018-11-14 21:08:09","Entrada","2018-11-14");
INSERT INTO registros VALUES("224","1991","2018-11-14 21:08:21","\n po","2018-11-14");
INSERT INTO registros VALUES("225","1991","2018-11-14 21:08:44","Entrada","2018-11-14");
INSERT INTO registros VALUES("226","1991","2018-11-14 21:09:17","\n po","2018-11-14");
INSERT INTO registros VALUES("227","1991","2018-11-14 21:10:52","Entrada","2018-11-14");
INSERT INTO registros VALUES("228","1991","2018-11-14 21:11:05","Salida","2018-11-14");
INSERT INTO registros VALUES("229","1991","2018-11-14 21:11:56","Entrada","2018-11-14");
INSERT INTO registros VALUES("230","1965","2018-11-14 21:12:12","Entrada","2018-11-14");
INSERT INTO registros VALUES("231","1991","2018-11-16 01:46:47","Salida","2018-11-16");
INSERT INTO registros VALUES("232","1991","2018-11-17 20:23:05","Entrada","2018-11-17");
INSERT INTO registros VALUES("233","1991","2018-11-19 19:24:26","Salida","2018-11-19");
INSERT INTO registros VALUES("234","1991","2018-11-19 19:24:40","Entrada","2018-11-19");
INSERT INTO registros VALUES("235","1991","2018-11-22 17:21:53","Salida","2018-11-22");
INSERT INTO registros VALUES("236","1991","2018-11-22 17:22:23","Entrada","2018-11-22");
INSERT INTO registros VALUES("237","1991","2018-11-22 17:23:29","Salida","2018-11-22");
INSERT INTO registros VALUES("238","1991","2018-11-22 17:24:36","Entrada","2018-11-22");
INSERT INTO registros VALUES("239","1991","2018-11-22 17:25:37","Salida","2018-11-22");



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO usuario VALUES("2","elisa","1234","AA");
INSERT INTO usuario VALUES("3","ochoa","1234","AB");



SET FOREIGN_KEY_CHECKS=1;