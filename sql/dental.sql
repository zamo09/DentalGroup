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
	PRIMARY KEY (id_paciente)
);

CREATE TABLE HistoriaMedica(
	id_historia INT NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
	id_paciente INT NOT NULL COMMENT 'Llave foranea a paciente',
	estado VARCHAR(2) NOT NULL COMMENT 'Estado de salud del paciente',
	tratamiento VARCHAR(2) NOT NULL COMMENT 'Se encuntra bajo tratamiento medico',
	coagulacion VARCHAR(2) NOT NULL COMMENT 'Padece problemas de coagulacion',
	tomamedicamento VARCHAR(2) NOT NULL COMMENT 'Toma algun medicamento',
	cualmeditoma VARCHAR(100) NOT NULL COMMENT 'Cual medicamento toma',
	alergicomedi VARCHAR(2) NOT NULL COMMENT 'Alergico a algun medicamento',
	cualalergico VARCHAR(100) NOT NULL COMMENT 'Cual medicamento es alergico',
	transtorno VARCHAR(2) NOT NULL COMMENT 'Padece transtornos psicologico',
	enfermedad VARCHAR(2) NOT NULL COMMENT 'Alguna enfermedad como Asma',
	desmayo VARCHAR(2) NOT NULL COMMENT 'Se ha desmayado alguna vez',
	anestesia VARCHAR(2) NOT NULL COMMENT 'Aplicacion de anestesia local',
	experiencia VARCHAR(2) NOT NULL COMMENT 'Experiencia desagradables con medicos',
	PRIMARY KEY (id_historia),
	FOREIGN KEY (id_paciente) REFERENCES Pacientes (id_paciente)
);

/** Conulta que trae los nombres de los pacientes que les falta historia medica */
SELECT P.nombre, P.id_paciente FROM Pacientes P, historiamedica H WHERE NOT P.id_paciente = H.id_paciente;