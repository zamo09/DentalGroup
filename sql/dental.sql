CREATE DATABASE dentalgroup;
	use dentalgroup;

CREATE TABLE Usuarios(
	id_usuario INT NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
	nombre VARCHAR(255) COMMENT 'Nombre del usuario',
	usuario VARCHAR(255) COMMENT 'Usuario para logear',
	contrasena VARCHAR(255) COMMENT 'Contraseña del usuario',
	activo BOOLEAN COMMENT 'Estado de la categoria',
	tipo VARCHAR(100) COMMENT 'Tipo de usuario que es',
	PRIMARY KEY (id_categoria)
);

Insert into Usuarios (nombre,usuario,contrasena,activo,tipo) values ('Samuel','zamo','123',1,'admin');

CREATE TABLE Pacientes(
	id_paciente INT NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
	nombre VARCHAR(255) NOT NULL COMMENT 'Nombre del Paciente',
	edad INTEGER NOT NULL COMMENT 'Edad del paciente',
	domicilio VARCHAR(255) NOT NULL COMMENT 'Domicilio del paciente',
	correo VARCHAR(255) NOT NULL COMMENT 'Correo del paciente',
	telefono INTEGER NOT NULL COMMENT 'Telefono del paciente',
	ocupacion VARCHAR(255) NOT NULL COMMENT 'Ocupacion del paciente',
	medicoreferido VARCHAR(255) NOT NULL COMMENT 'Medico que lo recomendo',
	  activo BOOLEAN COMMENT 'Estado del Paciente',
	PRIMARY KEY (id_usuario)
);