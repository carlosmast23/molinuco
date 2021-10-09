/*Tabla para crear los usuarios de acceso al sistema*/
CREATE TABLE `usuario`
(
	`id` bigint(20) NOT NULL AUTO_INCREMENT,
	`nick` varchar(300) DEFAULT NULL,
	`clave` varchar(300) DEFAULT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `transporte`
(
	`id` bigint(20) NOT NULL AUTO_INCREMENT,
	`placa` varchar(32) DEFAULT NULL,
	`capacidad` int DEFAULT NULL,
	`nombre_chofer` varchar(256) DEFAULT NULL,
	`descripcion` varchar(1024) DEFAULT NULL,
	PRIMARY KEY (`id`)
);