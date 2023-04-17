-- MySQL Workbench Forward Engineering
-- DROP SCHEMA helpdb;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema helpDB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema helpDB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `helpDB` DEFAULT CHARACTER SET utf8 ;
USE `helpDB` ;

-- -----------------------------------------------------
-- Table `helpDB`.`usuario`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `helpDB`.`img` (
	id_img INT UNSIGNED NOT NULL AUTO_INCREMENT,
    address VARCHAR(20),
    PRIMARY KEY (id_img)
  )ENGINE = InnoDB;
  
/* INSERT INTO img (address) VALUES 
  ("img/user.png"),
  ("img/img_2.png");*/
  
CREATE TABLE IF NOT EXISTS `helpDB`.`usuario` (
  `idusuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_img` INT UNSIGNED NOT NULL,
  `nome` VARCHAR(80) NOT NULL,
  `matricula` VARCHAR(16) NOT NULL UNIQUE,
  `email` VARCHAR(60) NOT NULL,
  `descri` VARCHAR(200),
  `login` VARCHAR(10) NOT NULL,
  `senha` VARCHAR(10) NOT NULL,
  `tipous` INT NOT NULL,
  `curso` VARCHAR(45) NULL NOT NULL,
  PRIMARY KEY (`idusuario`),
  FOREIGN KEY(`id_img`) REFERENCES `helpdb`.`img`(`id_img`),
  UNIQUE INDEX `idusuario_UNIQUE` (`idusuario` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `helpDB`.`pergunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `helpDB`.`pergunta` (
  `idpergunta` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `idusuario` INT UNSIGNED NOT NULL,
  `catper` VARCHAR(60) NOT NULL,
  `descper` VARCHAR(350) NOT NULL,
  `likeper` INT NOT NULL,
  `dataper` DATETIME NOT NULL,
  `editper` TINYINT(1) NULL,
  `blockper` TINYINT(1) NULL,
  PRIMARY KEY (`idpergunta`, `idusuario`),
  UNIQUE INDEX `idperguntas_UNIQUE` (`idpergunta` ASC) ,
  INDEX `fk_perguntas_usuario_idx` (`idusuario` ASC) ,
  CONSTRAINT `fk_perguntas_usuario`
    FOREIGN KEY (`idusuario`)
    REFERENCES `helpDB`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `helpDB`.`resposta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `helpDB`.`resposta` (
  `idresposta` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `idpergunta` INT UNSIGNED NOT NULL,
  `idusuario` INT UNSIGNED NOT NULL,
  `descres` VARCHAR(350) NOT NULL,
  `likeres` INT NOT NULL,
  `datares` DATETIME NOT NULL,
  `editres` TINYINT(1) NULL,
  `blockres` TINYINT(1) NULL,
  PRIMARY KEY (`idresposta`, `idpergunta`, `idusuario`),
  UNIQUE INDEX `idrespostas_UNIQUE` (`idresposta` ASC) ,
  INDEX `fk_respostas_perguntas1_idx` (`idpergunta` ASC) ,
  INDEX `fk_respostas_usuario1_idx` (`idusuario` ASC) ,
  CONSTRAINT `fk_respostas_perguntas1`
    FOREIGN KEY (`idpergunta`)
    REFERENCES `helpDB`.`pergunta` (`idpergunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_respostas_usuario1`
    FOREIGN KEY (`idusuario`)
    REFERENCES `helpDB`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('1', 'avatar/user.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('2', 'avatar/avatar_1.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('3', 'avatar/avatar_2.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('4', 'avatar/avatar_3.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('5', 'avatar/avatar_4.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('6', 'avatar/avatar_5.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('7', 'avatar/avatar_6.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('8', 'avatar/avatar_7.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('9', 'avatar/avatar_8.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('10', 'avatar/avatar_9.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('11', 'avatar/avatar_10.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('12', 'avatar/avatar_11.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('13', 'avatar/avatar_12.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('14', 'avatar/avatar_13.png');
INSERT INTO `helpdb`.`img` (`id_img`, `address`) VALUES ('15', 'avatar/avatar_14.png');

SELECT * FROM usuario;
SELECT * FROM pergunta;
SELECT * FROM usuario;
SELECT * FROM img;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
