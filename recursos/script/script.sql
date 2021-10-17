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

CREATE TABLE `hospedaje`
(
	`id` bigint(20) NOT NULL AUTO_INCREMENT,
	`nombre` varchar(1024) DEFAULT NULL,
	`capacidad` int DEFAULT NULL,
	`direccion` varchar(1024) DEFAULT NULL,	
	PRIMARY KEY (`id`)
);

CREATE TABLE `paquete_turistico`
(
	`id` bigint(20) NOT NULL AUTO_INCREMENT,
	`id_transporte` bigint(20) NOT NULL,
	`id_hospedaje` bigint(20) NOT NULL,
	`nombre` varchar(1024) DEFAULT NULL,
	`precio` decimal(16,4) DEFAULT NULL,		
	`estado` varchar(1) DEFAULT NULL,

	PRIMARY KEY (`id`)	,
	FOREIGN KEY (id_transporte) REFERENCES transporte(id),
	FOREIGN KEY (id_hospedaje) REFERENCES hospedaje(id)

);