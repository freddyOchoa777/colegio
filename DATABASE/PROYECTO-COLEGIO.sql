-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema San-Jose-Cafasso
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema San-Jose-Cafasso
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `San-Jose-Cafasso` DEFAULT CHARACTER SET utf8 ;
USE `San-Jose-Cafasso` ;

-- -----------------------------------------------------
-- Table `San-Jose-Cafasso`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `San-Jose-Cafasso`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Apellido` VARCHAR(45) NOT NULL,
  `Documento` VARCHAR(45) NOT NULL,
  `idAcudiente` INT NOT NULL,
  PRIMARY KEY (`idUsuario`),
  INDEX `idAcudiente_idx` (`idAcudiente` ASC) VISIBLE,
  CONSTRAINT `idAcudiente`
    FOREIGN KEY (`idAcudiente`)
    REFERENCES `San-Jose-Cafasso`.`Acudiente` (`idAcudiente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `San-Jose-Cafasso`.`Materia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `San-Jose-Cafasso`.`Materia` (
  `idMateria` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Calificación` VARCHAR(45) NOT NULL,
  `idProfesor` INT NOT NULL,
  PRIMARY KEY (`idMateria`),
  INDEX `idProfesor_idx` (`idProfesor` ASC) VISIBLE,
  CONSTRAINT `idProfesor`
    FOREIGN KEY (`idProfesor`)
    REFERENCES `San-Jose-Cafasso`.`Profesor` (`idProfesor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `San-Jose-Cafasso`.`Profesor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `San-Jose-Cafasso`.`Profesor` (
  `idProfesor` INT NOT NULL AUTO_INCREMENT,
  `Nombres` VARCHAR(45) NOT NULL,
  `Apellidos` VARCHAR(45) NOT NULL,
  `Dirección` LONGTEXT NULL,
  `Telefono` VARCHAR(45) NULL,
  `idMateria` INT NOT NULL,
  `idUsuario` INT NOT NULL,
  PRIMARY KEY (`idProfesor`),
  INDEX `idUsuario_idx` (`idUsuario` ASC) VISIBLE,
  CONSTRAINT `idUsuario`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `San-Jose-Cafasso`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `San-Jose-Cafasso`.`Matricula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `San-Jose-Cafasso`.`Matricula` (
  `idMatricula` INT NOT NULL AUTO_INCREMENT,
  `Fecha` DATE NOT NULL,
  PRIMARY KEY (`idMatricula`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `San-Jose-Cafasso`.`Estudiante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `San-Jose-Cafasso`.`Estudiante` (
  `idEstudiante` INT NOT NULL AUTO_INCREMENT,
  `Nombres` VARCHAR(45) NOT NULL,
  `Apellidos` VARCHAR(45) NOT NULL,
  `Fecha_Nacimiento` VARCHAR(45) NOT NULL,
  `Dirección` LONGTEXT NULL,
  `idMateria` INT NOT NULL,
  `idMatricula` INT NOT NULL,
  `idAcudiente` INT NOT NULL,
  PRIMARY KEY (`idEstudiante`),
  INDEX `idMateria_idx` (`idMateria` ASC) VISIBLE,
  INDEX `idMatricula_idx` (`idMatricula` ASC) VISIBLE,
  INDEX `idAcudiente_idx` (`idAcudiente` ASC) VISIBLE,
  CONSTRAINT `idMateria`
    FOREIGN KEY (`idMateria`)
    REFERENCES `San-Jose-Cafasso`.`Materia` (`idMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idMatricula`
    FOREIGN KEY (`idMatricula`)
    REFERENCES `San-Jose-Cafasso`.`Matricula` (`idMatricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idAcudiente`
    FOREIGN KEY (`idAcudiente`)
    REFERENCES `San-Jose-Cafasso`.`Acudiente` (`idAcudiente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `San-Jose-Cafasso`.`Curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `San-Jose-Cafasso`.`Curso` (
  `idCurso` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `idEstudiante` INT NOT NULL,
  PRIMARY KEY (`idCurso`),
  INDEX `idEstudiante_idx` (`idEstudiante` ASC) VISIBLE,
  CONSTRAINT `idEstudiante`
    FOREIGN KEY (`idEstudiante`)
    REFERENCES `San-Jose-Cafasso`.`Estudiante` (`idEstudiante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `San-Jose-Cafasso`.`Acudiente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `San-Jose-Cafasso`.`Acudiente` (
  `idAcudiente` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Apellido` VARCHAR(45) NOT NULL,
  `Documento` VARCHAR(45) NOT NULL,
  `idEstudiante` INT NOT NULL,
  PRIMARY KEY (`idAcudiente`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;





-- INSERT de la tabla usuario
INSERT INTO usuario(Nombre,Apellido,Documento) VALUES ("Martin Elias","Ramirez Arteaga","1088569875");
INSERT INTO usuario(Nombre,Apellido,Documento) VALUES("Lina","Jimenez","1088956444");
INSERT INTO usuario(Nombre,Apellido,Documento) VALUES("Monica","Solarte","1088812235");


-- INSERT de la tabla materia
INSERT INTO materia(Nombre,Calificación) VALUES("Ingles","1");
INSERT INTO materia(Nombre,Calificación) VALUES("Matematicas","2");
INSERT INTO materia(Nombre,Calificación) VALUES("Religión","3");
INSERT INTO materia(Nombre,Calificación) VALUES("Etica","4");
INSERT INTO materia(Nombre,Calificación) VALUES("Sociales","5");


-- INSERT de la tabla profesor
INSERT INTO Profesor(Nombres,Apellidos,Dirección,Telefono,idMateria, idusuario) VALUES("Luisa Fernanda","Arias Valencia","Barrio Perla del Sur calle 40","3215789454",1,1);
INSERT INTO Profesor(Nombres,Apellidos,Dirección,Telefono,idMateria, idusuario) VALUES("Luis Fernando","Arias Loaiza","Barrio Cuba calle 10","3215788822",1,2);
INSERT INTO Profesor(Nombres,Apellidos,Dirección,Telefono,idMateria, idusuario) VALUES("Luz Stella","Ortiz Ruiz","Barrio San Judas calle 12","3202587496",1,2);




-- INSERT de la tabla matricula
INSERT INTO matricula(fecha) VALUES("2022/02/01");
INSERT INTO matricula(fecha) VALUES("2022/02/01");
INSERT INTO matricula(fecha) VALUES("2022/02/01");



-- INSERT de la tabla estudiante
INSERT INTO Estudiante(Nombres,Apellidos,Fecha_Nacimiento,Dirección,idMateria) VALUES("Laura Ximena","Arias Berrios","06/12/2009","Barrio Perla del Sur calle 40",1);
INSERT INTO Estudiante(Nombres,Apellidos,Fecha_Nacimiento,Dirección,idMateria) VALUES("James Fernando","Orrego Medina","02/05/2011","Barrio San Fernando calle 08",1);
INSERT INTO Estudiante(Nombres,Apellidos,Fecha_Nacimiento,Dirección,idMateria) VALUES("Jose Elias","Mejía Mejía","10/01/2015","Barrio el Bosque calle 11",1);
INSERT INTO Estudiante(Nombres,Apellidos,Fecha_Nacimiento,Dirección,idMateria) VALUES("Jhoantan Andrés","Jaramillo Trujillo","02/05/2016","Barrio Villa Santana calle 15",1);


-- INSERT de la tabla curso
INSERT INTO curso(Nombre, idEstudiante) VALUES("Pre-Jardín",1);
INSERT INTO curso(Nombre, idEstudiante) VALUES("Jardín",2);
INSERT INTO curso(Nombre, idEstudiante) VALUES("Transición",3);
INSERT INTO curso(Nombre, idEstudiante) VALUES("Primero",4);
INSERT INTO curso(Nombre, idEstudiante) VALUES("Segundo",5);
INSERT INTO curso(Nombre, idEstudiante) VALUES("Tercero",6);


-- INSERT de la tabla acudiente 
INSERT INTO acudiente(Nombre,Apellido,Documento, idEstudiante) VALUES("Lina","Grajales","1088956235", 1);
INSERT INTO acudiente(Nombre,Apellido,Documento, idEstudiante) VALUES("Laura","Jimenez","1088789423",2);
INSERT INTO acudiente(Nombre,Apellido,Documento, idEstudiante) VALUES("Luisa","Martinez","1085789123",3);
INSERT INTO acudiente(Nombre,Apellido,Documento, idEstudiante) VALUES("Maria","Galindo","1055469823",4);
