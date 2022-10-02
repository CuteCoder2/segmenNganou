SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `Mon MCD` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Mon MCD` ;

-- -----------------------------------------------------
-- Table `Mon MCD`.`type_compte`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Mon MCD`.`type_compte` (
  `id_type` VARCHAR(10) NOT NULL ,
  `libele` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`id_type`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Mon MCD`.`compte`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Mon MCD`.`compte` (
  `id_compte` VARCHAR(10) NOT NULL ,
  `email` VARCHAR(20) NOT NULL ,
  `mot_de_pass` VARCHAR(20) NOT NULL ,
  `id_type` VARCHAR(10) NOT NULL ,
  `type_compte_id_type` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`id_compte`) ,
  INDEX `fk_compte_type_compte1_idx` (`type_compte_id_type` ASC) ,
  CONSTRAINT `fk_compte_type_compte1`
    FOREIGN KEY (`type_compte_id_type` )
    REFERENCES `Mon MCD`.`type_compte` (`id_type` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Mon MCD`.`membre`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Mon MCD`.`membre` (
  `id_membre` VARCHAR(10) NOT NULL ,
  `nom_membre` VARCHAR(20) NOT NULL ,
  `prenom_membre` VARCHAR(20) NOT NULL ,
  `email` VARCHAR(20) NOT NULL ,
  `id_type` VARCHAR(10) NOT NULL ,
  `compte_id_compte` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`id_membre`) ,
  INDEX `fk_membre_compte_idx` (`compte_id_compte` ASC) ,
  CONSTRAINT `fk_membre_compte`
    FOREIGN KEY (`compte_id_compte` )
    REFERENCES `Mon MCD`.`compte` (`id_compte` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Mon MCD`.`article`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Mon MCD`.`article` (
  `id_article` VARCHAR(10) NOT NULL ,
  `titre_article` VARCHAR(20) NOT NULL ,
  `description_article` VARCHAR(100) NULL ,
  `date_pub` DATE NULL ,
  `id_membre` VARCHAR(20) NOT NULL ,
  `id_compte` VARCHAR(20) NOT NULL ,
  `membre_id_membre` VARCHAR(10) NOT NULL ,
  `compte_id_compte` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`id_article`) ,
  INDEX `fk_article_membre1_idx` (`membre_id_membre` ASC) ,
  INDEX `fk_article_compte1_idx` (`compte_id_compte` ASC) ,
  CONSTRAINT `fk_article_membre1`
    FOREIGN KEY (`membre_id_membre` )
    REFERENCES `Mon MCD`.`membre` (`id_membre` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_article_compte1`
    FOREIGN KEY (`compte_id_compte` )
    REFERENCES `Mon MCD`.`compte` (`id_compte` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `Mon MCD` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
