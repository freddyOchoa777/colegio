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

CREATE TABLE IF NOT EXISTS `Acudiente` (
  `idAcudiente` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Apellidos` VARCHAR(45) NOT NULL,
  `Telefono` VARCHAR(45) NOT NULL,
  `idUsuario` INT NOT NULL,
  PRIMARY KEY (`idAcudiente`)
  );
ALTER TABLE Acudiente ADD FOREIGN KEY(idUsuario) REFERENCES Usuario (idUsuario);

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

INSERT INTO `curso`(`idCurso`, `Nombre`) VALUES (1, 'Matemáticas');
INSERT INTO `curso`(`idCurso`, `Nombre`) VALUES (2, 'Ciencias');
INSERT INTO `curso`(`idCurso`, `Nombre`) VALUES (3, 'Historia');

INSERT INTO `matricula`(`idMatricula`, `Fecha`) VALUES (101, '2023-01-01');
INSERT INTO `matricula`(`idMatricula`, `Fecha`) VALUES (102, '2023-01-02');
INSERT INTO `matricula`(`idMatricula`, `Fecha`) VALUES (103, '2023-01-03');

INSERT INTO `usuario`(`idUsuario`, `correo`, `contrasena`, `documento`) VALUES (301, 'pedro@example.com', 'password123', '1234567890');
INSERT INTO `usuario`(`idUsuario`, `correo`, `contrasena`, `documento`) VALUES (302, 'maria@example.com', 'password456', '0987654321');
INSERT INTO `usuario`(`idUsuario`, `correo`, `contrasena`, `documento`) VALUES (303, 'juan@example.com', 'password789', '9876543210');


INSERT INTO `acudiente`(`idAcudiente`, `Nombre`, `Apellidos`, `Telefono`, `idUsuario`) VALUES (201, 'Pedro', 'González', '123456789', 301);
INSERT INTO `acudiente`(`idAcudiente`, `Nombre`, `Apellidos`, `Telefono`, `idUsuario`) VALUES (202, 'María', 'López', '987654321', 302);
INSERT INTO `acudiente`(`idAcudiente`, `Nombre`, `Apellidos`, `Telefono`, `idUsuario`) VALUES (203, 'Juan', 'Pérez', '456789123', 303);

INSERT INTO `usuario`(`idUsuario`, `correo`, `contrasena`, `documento`) VALUES (304, 'usuario1@example.com', 'contraseña1', '1234567890');
INSERT INTO `usuario`(`idUsuario`, `correo`, `contrasena`, `documento`) VALUES (305, 'usuario2@example.com', 'contraseña2', '0987654321');
INSERT INTO `usuario`(`idUsuario`, `correo`, `contrasena`, `documento`) VALUES (306, 'usuario3@example.com', 'contraseña3', '9876543210');

INSERT INTO `profesor`(`idProfesor`, `Nombre`, `Apellidos`, `Dirección`, `Telefono`, `idUsuario`) VALUES (401, 'Juan', 'Pérez', 'Calle 123', '123456789', 304);
INSERT INTO `profesor`(`idProfesor`, `Nombre`, `Apellidos`, `Dirección`, `Telefono`, `idUsuario`) VALUES (402, 'María', 'López', 'Avenida 456', '987654321', 305);
INSERT INTO `profesor`(`idProfesor`, `Nombre`, `Apellidos`, `Dirección`, `Telefono`, `idUsuario`) VALUES (403, 'Carlos', 'González', 'Calle Principal', '456789123', 306);
