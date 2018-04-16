-- MySQL Script generated by MySQL Workbench
-- Tue Apr  3 22:47:46 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema dbworldmystery
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dbworldmystery
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbworldmystery` DEFAULT CHARACTER SET utf8 ;
USE `dbworldmystery` ;

-- -----------------------------------------------------
-- Table `dbworldmystery`.`Nivel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbworldmystery`.`Nivel` (
  `idNivel` INT NOT NULL,
  `NombreNivel` VARCHAR(45) NULL,
  `Dificultad` INT NULL,
  PRIMARY KEY (`idNivel`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbworldmystery`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbworldmystery`.`Usuario` (
  `IdNickname` INT NOT NULL AUTO_INCREMENT,
  `Nickname` VARCHAR(18) NULL,
  `Avatar` VARCHAR(100) NULL,
  `Nombre` VARCHAR(45) NULL,
  `Apellido` VARCHAR(45) NULL,
  `Pais` VARCHAR(45) NULL,
  `Contraseña` VARCHAR(16) NULL,
  `Nivel_idNivel` INT NOT NULL,
  PRIMARY KEY (`IdNickname`),
  INDEX `fk_Usuario_Nivel1_idx` (`Nivel_idNivel` ASC),
  CONSTRAINT `fk_Usuario_Nivel1`
    FOREIGN KEY (`Nivel_idNivel`)
    REFERENCES `dbworldmystery`.`Nivel` (`idNivel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbworldmystery`.`Personaje`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbworldmystery`.`Personaje` (
  `idPersonaje` INT NOT NULL,
  `Nombre_Personaje` VARCHAR(45) NULL,
  `Usuario_IdNickname` INT NOT NULL,
  PRIMARY KEY (`idPersonaje`),
  INDEX `fk_Personaje_Usuario_idx` (`Usuario_IdNickname` ASC),
  CONSTRAINT `fk_Personaje_Usuario`
    FOREIGN KEY (`Usuario_IdNickname`)
    REFERENCES `dbworldmystery`.`Usuario` (`IdNickname`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbworldmystery`.`Mensajes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbworldmystery`.`Mensajes` (
  `idMensajes` INT NOT NULL,
  `Asunto` VARCHAR(45) NULL,
  `Descripcion` VARCHAR(45) NULL,
  `Fecha` DATE NULL,
  `Usuario_IdNickname` INT NOT NULL,
  PRIMARY KEY (`idMensajes`),
  INDEX `fk_Mensajes_Usuario1_idx` (`Usuario_IdNickname` ASC),
  CONSTRAINT `fk_Mensajes_Usuario1`
    FOREIGN KEY (`Usuario_IdNickname`)
    REFERENCES `dbworldmystery`.`Usuario` (`IdNickname`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbworldmystery`.`Habilidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbworldmystery`.`Habilidad` (
  `idHabilidad` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `Valor` INT NULL,
  `Personaje_idPersonaje` INT NOT NULL,
  PRIMARY KEY (`idHabilidad`),
  INDEX `fk_Habilidad_Personaje1_idx` (`Personaje_idPersonaje` ASC),
  CONSTRAINT `fk_Habilidad_Personaje1`
    FOREIGN KEY (`Personaje_idPersonaje`)
    REFERENCES `dbworldmystery`.`Personaje` (`idPersonaje`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbworldmystery`.`Ranking`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbworldmystery`.`Ranking` (
  `idRanking` INT NOT NULL,
  `Puntaje` INT NULL,
  `Muertes` INT NULL,
  PRIMARY KEY (`idRanking`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbworldmystery`.`Usuario_has_Ranking`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbworldmystery`.`Usuario_has_Ranking` (
  `Usuario_IdNickname` INT NOT NULL,
  `Ranking_idRanking` INT NOT NULL,
  `FechaRanking` DATE NULL,
  PRIMARY KEY (`Usuario_IdNickname`, `Ranking_idRanking`),
  INDEX `fk_Usuario_has_Ranking_Ranking1_idx` (`Ranking_idRanking` ASC),
  INDEX `fk_Usuario_has_Ranking_Usuario1_idx` (`Usuario_IdNickname` ASC),
  CONSTRAINT `fk_Usuario_has_Ranking_Usuario1`
    FOREIGN KEY (`Usuario_IdNickname`)
    REFERENCES `dbworldmystery`.`Usuario` (`IdNickname`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Ranking_Ranking1`
    FOREIGN KEY (`Ranking_idRanking`)
    REFERENCES `dbworldmystery`.`Ranking` (`idRanking`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
