DROP database IF exists `san-jose-cafasso`;
CREATE database if not exists `San-Jose-Cafasso`;
USE `San-Jose-Cafasso`;

CREATE TABLE IF NOT EXISTS `Rol` (
  `idRol` INT NOT NULL AUTO_INCREMENT,
  `nombreRol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idRol`)
);

CREATE TABLE IF NOT EXISTS `inscripciones` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `nombre_completo` VARCHAR(100) NOT NULL,
    `numero_identificacion` INTEGER(20) NOT NULL,
    `fecha_nacimiento` DATE NOT NULL,
    `genero` ENUM('Masculino', 'Femenino', 'Otro') NOT NULL,
    `direccion` VARCHAR(255) NOT NULL,
    `telefono_contacto` VARCHAR(15) NOT NULL,
    `correo_electronico` VARCHAR(100),
    `tipo_representante` ENUM('Padre', 'Madre', 'Tutor') NOT NULL,
    `nombre_representante` VARCHAR(15) NOT NULL,
    `telefono_representante` VARCHAR(15) NOT NULL,
    `correo_representante` VARCHAR(100),
    `profesion_representante` VARCHAR(50),
    `asistencia_colegio_anterior` BOOLEAN NOT NULL, -- 1 para Sí, 0 para No
    `colegio_anterior` VARCHAR(100), -- Solo si ha asistido previamente
    `grado_inscrito` VARCHAR(50) NOT NULL,
    `tiene_necesidad_educativa` BOOLEAN NOT NULL, -- 1 para Sí, 0 para No
    `descripcion_necesidad` VARCHAR(255) -- Solo si tiene alguna necesidad educativa
);

CREATE TABLE registro_academico (
    periodo VARCHAR(50),
    fecha DATE,
    jornada VARCHAR(20),
    primer_nombre VARCHAR(50),
    segundo_nombre VARCHAR(50),
    primer_apellido VARCHAR(50),
    segundo_apellido VARCHAR(50),
    fecha_nacimiento DATE,
    documento_estudiante INT,
    sexo VARCHAR(10),
    ciudad_residencia VARCHAR(50),
    direccion VARCHAR(100),
    barrio VARCHAR(50),
    grado_aspirado VARCHAR(20),
    colegio_procedencia VARCHAR(100),
    tipo_documento VARCHAR(20),
    edad_actual INT,
    eps VARCHAR(50),
    grupo_sanguineo CHAR(2),
    rh VARCHAR(10),
    quien_vive VARCHAR(20),
    estrato INT,
    hermanos_institucion INT,
    enfermedades_actuales TEXT,
    medicamento_permanente TEXT,
    padre_nombres VARCHAR(100),
    padre_apellidos VARCHAR(100),
    padre_direccion VARCHAR(100),
    padre_email VARCHAR(100),
    padre_celular VARCHAR(20),
    padre_telefono_fijo VARCHAR(20),
    padre_profesion VARCHAR(50),
    padre_empresa VARCHAR(100),
    padre_cargo VARCHAR(50),
    padre_telefono_empresa VARCHAR(20),
    padre_direccion_empresa VARCHAR(100),
    padre_estado_civil VARCHAR(20),
    madre_nombres VARCHAR(100),
    madre_apellidos VARCHAR(100),
    madre_direccion VARCHAR(100),
    madre_email VARCHAR(100),
    madre_celular VARCHAR(20),
    madre_telefono_fijo VARCHAR(20),
    madre_profesion VARCHAR(50),
    madre_empresa VARCHAR(100),
    madre_cargo VARCHAR(50),
    madre_telefono_empresa VARCHAR(20),
    madre_direccion_empresa VARCHAR(100),
    madre_estado_civil VARCHAR(20),
    acudiente VARCHAR(20),
    responsable_economico VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS `Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `correo` VARCHAR(45) NOT NULL,
  `contrasena` VARCHAR(45) NOT NULL,
  `documento` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUsuario`)
);
CREATE TABLE IF NOT EXISTS `Materia` (
  `idMateria` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Calificación` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idMateria`)
  );
  CREATE TABLE IF NOT EXISTS `Persona` (
  `idPersona` INT NOT NULL AUTO_INCREMENT,
  `Nombres` VARCHAR(45) NOT NULL,
  `Apellidos` VARCHAR(45) NOT NULL,
  `Direccion` LONGTEXT NULL,
  `Telefono` VARCHAR(45) NULL,
  `Fecha_Nacimiento` DATE,
  `idRol` INT NOT NULL,
  `idUsuario` INT NOT NULL,
  PRIMARY KEY (`idPersona`)
  );
  
ALTER TABLE Persona ADD FOREIGN KEY(idRol) REFERENCES Rol (idRol);
ALTER TABLE Persona ADD FOREIGN KEY(idUsuario) REFERENCES Usuario (idUsuario);

CREATE TABLE IF NOT EXISTS `ProfesorMateria` (
  `idProfesorMateria` INT NOT NULL AUTO_INCREMENT,
  `idProfesor` INT NOT NULL,
  `idMateria` INT NOT NULL,
  PRIMARY KEY (`idProfesorMateria`)
  );
ALTER TABLE ProfesorMateria ADD FOREIGN KEY(idProfesor) REFERENCES Persona (idPersona);
ALTER TABLE ProfesorMateria ADD FOREIGN KEY(idMateria) REFERENCES Materia (idMateria);

CREATE TABLE IF NOT EXISTS `Matricula` (
  `idMatricula` INT NOT NULL AUTO_INCREMENT,
  `Fecha` DATE NOT NULL,
  PRIMARY KEY (`idMatricula`)
  );
CREATE TABLE IF NOT EXISTS `Curso` (
  `idCurso` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCurso`)
);

CREATE TABLE IF NOT EXISTS `CursoMateria` (
  `idCursoMateria` INT NOT NULL AUTO_INCREMENT,
  `idCurso`  INT NOT NULL,
  `idMateria`  INT NOT NULL,
  PRIMARY KEY (`idCursoMateria`)
);
ALTER TABLE CursoMateria ADD FOREIGN KEY(idCurso) REFERENCES Curso (idCurso);
ALTER TABLE CursoMateria ADD FOREIGN KEY(idMateria) REFERENCES Materia (idMateria);

  CREATE TABLE IF NOT EXISTS `Estudiante` (
  `idEstudiante` INT NOT NULL AUTO_INCREMENT ,
  `idPersona` INT NOT NULL,
  `idCurso` INT NOT NULL,
  `idMatricula` INT NOT NULL,
  `idAcudiente` INT NOT NULL,
  PRIMARY KEY (`idEstudiante`));
ALTER TABLE Estudiante ADD FOREIGN KEY(idPersona) REFERENCES Persona (idPersona);
ALTER TABLE Estudiante ADD FOREIGN KEY(idCurso) REFERENCES Curso (idCurso);
ALTER TABLE Estudiante ADD FOREIGN KEY(idAcudiente) REFERENCES Persona (idPersona);
ALTER TABLE Estudiante ADD FOREIGN KEY(idMatricula) REFERENCES Matricula (idMatricula);

INSERT INTO `curso`(`idCurso`, `Nombre`) VALUES (1, 'Matemáticas');
INSERT INTO `curso`(`idCurso`, `Nombre`) VALUES (2, 'Ciencias');
INSERT INTO `curso`(`idCurso`, `Nombre`) VALUES (3, 'Historia');

INSERT INTO `matricula`(`idMatricula`, `Fecha`) VALUES (101, '2023-01-01');
INSERT INTO `matricula`(`idMatricula`, `Fecha`) VALUES (102, '2023-01-02');
INSERT INTO `matricula`(`idMatricula`, `Fecha`) VALUES (103, '2023-01-03');

INSERT INTO `rol`(`idRol`, `nombreRol`) VALUES (1, 'Profesor');
INSERT INTO `rol`(`idRol`, `nombreRol`) VALUES (2, 'Acudiente');
INSERT INTO `rol`(`idRol`, `nombreRol`) VALUES (3, 'Estudiante');
INSERT INTO `rol`(`idRol`, `nombreRol`) VALUES (4, 'Invitado');