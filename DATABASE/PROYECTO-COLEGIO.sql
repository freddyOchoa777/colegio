DROP TABLE IF exists `acudiente`;
DROP database IF exists `san-jose-cafasso`;
CREATE database if not exists `San-Jose-Cafasso`;
USE `San-Jose-Cafasso`;

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
  CREATE TABLE IF NOT EXISTS `Profesor` (
  `idProfesor` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Apellidos` VARCHAR(45) NOT NULL,
  `Dirección` LONGTEXT NULL,
  `Telefono` VARCHAR(45) NULL,
  `idUsuario` INT NOT NULL,
  PRIMARY KEY (`idProfesor`)
  );
ALTER TABLE Profesor ADD FOREIGN KEY(idUsuario) REFERENCES Usuario (idUsuario);

CREATE TABLE IF NOT EXISTS `ProfesorMateria` (
  `idProfesorMateria` INT NOT NULL AUTO_INCREMENT,
  `idProfesor` INT NOT NULL,
  `idMateria` INT NOT NULL,
  PRIMARY KEY (`idProfesorMateria`)
  );
ALTER TABLE ProfesorMateria ADD FOREIGN KEY(idProfesor) REFERENCES Profesor (idProfesor);
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
  `Nombres` VARCHAR(45) NOT NULL,
  `Apellidos` VARCHAR(45) NOT NULL,
  `Fecha_Nacimiento` VARCHAR(45) NOT NULL,
  `Dirección` LONGTEXT NULL,
  `idCurso` INT NOT NULL,
  `idMatricula` INT NOT NULL,
  `idAcudiente` INT NOT NULL,
  PRIMARY KEY (`idEstudiante`));
ALTER TABLE Estudiante ADD FOREIGN KEY(idCurso) REFERENCES Curso (idCurso);
ALTER TABLE Estudiante ADD FOREIGN KEY(idAcudiente) REFERENCES Acudiente (idAcudiente);
ALTER TABLE Estudiante ADD FOREIGN KEY(idMatricula) REFERENCES Matricula (idMatricula);

  CREATE TABLE IF NOT EXISTS `Acudiente` (
  `idAcudiente` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Apellidos` VARCHAR(45) NOT NULL,
  `Telefono` VARCHAR(45) NOT NULL,
  `idUsuario` INT NOT NULL,
  PRIMARY KEY (`idAcudiente`)
  );
ALTER TABLE Acudiente ADD FOREIGN KEY(idUsuario) REFERENCES Usuario (idUsuario);