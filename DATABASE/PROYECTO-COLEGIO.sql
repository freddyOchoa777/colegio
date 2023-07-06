DROP database IF exists `san-jose-cafasso`;
CREATE database if not exists `San-Jose-Cafasso`;
USE `San-Jose-Cafasso`;

CREATE TABLE IF NOT EXISTS `Rol` (
  `idRol` INT NOT NULL AUTO_INCREMENT,
  `nombreRol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idRol`)
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