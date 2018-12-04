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
	telefono VARCHAR NOT NULL COMMENT 'Telefono del paciente',
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

CREATE TABLE HistoriaEstomatologica(
	id_estomatologica INT NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
	id_paciente INT NOT NULL COMMENT 'Llave foranea a paciente',
	accidente VARCHAR(2) NOT NULL COMMENT 'Ha tenido algun accidente',	
	queaccidente VARCHAR(100) NOT NULL COMMENT 'Cual accidente',	
	encias VARCHAR(2) NOT NULL COMMENT 'Le sangran las encias',	
	dientes VARCHAR(2) NOT NULL COMMENT 'se cepilla los dientes',	
	cuantasveces VARCHAR(2) NOT NULL COMMENT 'cuantas veces al dia',	
	queutiliza VARCHAR(100) NOT NULL COMMENT 'que utiliza',	
	ultimavisita VARCHAR(100) NOT NULL COMMENT 'su ultima visita al dentista',	
	PRIMARY KEY (id_estomatologica),
	FOREIGN KEY (id_paciente) REFERENCES Pacientes (id_paciente)
);

CREATE TABLE HistoriaDolor(
	id_dolor INT NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
	id_paciente INT NOT NULL COMMENT 'Llave foranea a paciente',
	localizacion VARCHAR(100) NOT NULL COMMENT 'Localizacion del dolor',
	inicio VARCHAR(100) NOT NULL COMMENT 'Donde inicio el dolor',
	intensidad VARCHAR(100) NOT NULL COMMENT 'Intensidad del dolor',
	estimulo VARCHAR(100) NOT NULL COMMENT 'Que lo proboca',
	cual VARCHAR(100) NOT NULL COMMENT 'cual estimulo',
	percusion VARCHAR(100) NOT NULL COMMENT 'Se puede tocar',
	fisura VARCHAR(100) NOT NULL COMMENT 'Presenta fisura',
	rx VARCHAR(100) NOT NULL COMMENT 'Rayos X',
	diagnostico VARCHAR(100) NOT NULL COMMENT 'Diagnostico para el dolor',
	plan VARCHAR(100) NOT NULL COMMENT 'Que se puede hacer',
	pronostico VARCHAR(100) NOT NULL COMMENT 'si es bueno o malo',
	PRIMARY KEY (id_dolor),
	FOREIGN KEY (id_paciente) REFERENCES Pacientes (id_paciente)
);

CREATE TABLE ListaMateriales(
	id_lista INT NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
	id_usuario INT NOT NULL COMMENT 'Que usuario creo la lista',
	fecha DATE NOT NULL COMMENT 'Fecha en la que se creo la lista',
	activo BOOLEAN COMMENT 'Si esta activa o no la lista',
	PRIMARY KEY (id_lista),
	FOREIGN KEY (id_usuario) REFERENCES Usuarios (id_usuario)
);

CREATE TABLE Tratamiento(
	id_tratamiento INT NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
	nombre VARCHAR(100) NOT NULL COMMENT 'Nombre que se le da al tratamiento',
	precio DECIMAL(6,2) NOT NULL COMMENT 'Precio del tratamiento',
	activo BOOLEAN COMMENT 'Estado del tratamiento',
	id_lista INT NOT NULL COMMENT 'Llave foranea a la lista de materiales',
	PRIMARY KEY (id_tratamiento),
	FOREIGN KEY (id_lista) REFERENCES ListaMateriales (id_lista)
);

CREATE TABLE Productos(
	id_producto INT NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
	nombre VARCHAR(100) NOT NULL COMMENT 'Nombre del producto',
	cantidadmin INT NOT NULL COMMENT 'Cantidad minima perimitida para el producto'.
	cantidad INT NOT NULL COMMENT 'Cantidad real en el almacen',
	activo BOOLEAN NOT NULL COMMENT 'Estado del producto',
	id_usuario INT NOT NULL COMMENT 'Que usuario creo la lista',
	PRIMARY KEY (id_producto),
	FOREIGN KEY (id_usuario) REFERENCES Usuarios (id_usuario)
);

CREATE TABLE Materiales(
	id_materiales INT NOT NULL AUTO_INCREMENT COMMENT 'Llave Primaria',
	id_lista INT NOT NULL COMMENT 'Referencia a la lista de materiales',
	id_producto INT NOT NULL COMMENT 'Referencia al producto utilizado',
	cantidad INT NOT NULL COMMENT 'Cantidad utilizada en la lista',
	PRIMARY KEY (id_materiales),
	FOREIGN KEY (id_lista) REFERENCES ListaMateriales (id_lista),
	FOREIGN KEY (id_producto) REFERENCES Productos (id_producto)
);