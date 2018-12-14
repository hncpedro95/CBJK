/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  User
 * Created: 29/11/2018
 */
-- INSERINDO COLUNA DE "BAIRRO" NA TABELA CLIENTE 29/11
ALTER TABLE `cliente` ADD `bairro` VARCHAR(50) NOT NULL AFTER `complemento`;

--ALTERANDO ANULAÇÕES DAS COLUNAS NO CLIENTE 29/11
ALTER TABLE `cliente` CHANGE `celular` `celular` CHAR(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `cliente` CHANGE `telefone` `telefone` CHAR(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;

--Criando Tabela Produto 29/11/2018
CREATE TABLE `cbjk`.`produto` ( `id_produto` INT(5) NOT NULL AUTO_INCREMENT , `nome` VARCHAR(150) NOT NULL , `quantidade` INT(5) NOT NULL , `preco` DECIMAL(10) NOT NULL , PRIMARY KEY (`id_produto`)) ENGINE = InnoDB;

--Criando a tabela de venda e alterando as chaves 11/12/2018
CREATE TABLE `cbjk`.`venda` ( `id_venda` INT(40) NOT NULL , `id_cliente` INT(40) NOT NULL , `nome_cliente` VARCHAR(200) NOT NULL , `id_produto` INT(40) NOT NULL , `nome_produto` VARCHAR(300) NOT NULL , `quantidade` INT(150) NOT NULL , `valor_total` VARCHAR(200) NOT NULL , `data` DATE NOT NULL , `hora` TIME(6) NOT NULL ) ENGINE = InnoDB;
ALTER TABLE `venda` ADD PRIMARY KEY(`id_venda`);
ALTER TABLE `venda` CHANGE `id_venda` `id_venda` INT(40) NOT NULL AUTO_INCREMENT;

--11/12
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema cbjk
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cbjk
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cbjk` DEFAULT CHARACTER SET utf8mb4 ;
-- -----------------------------------------------------
-- Schema bd-mvc
-- -----------------------------------------------------
USE `cbjk` ;

-- -----------------------------------------------------
-- Table `cbjk`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cbjk`.`cliente` (
  `id_cliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(90) NOT NULL,
  `cpf` CHAR(14) NOT NULL,
  `endereco` VARCHAR(150) NOT NULL,
  `numero` VARCHAR(5) NOT NULL,
  `complemento` VARCHAR(150) NULL DEFAULT NULL,
  `bairro` VARCHAR(50) NOT NULL,
  `estado` CHAR(2) NOT NULL,
  `cidade` VARCHAR(50) NOT NULL,
  `telefone` CHAR(14) NULL DEFAULT NULL,
  `celular` CHAR(15) NOT NULL,
  `whatsapp` CHAR(1) NOT NULL,
  `id_usuario` INT(11) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  INDEX `id_usuario` (`id_usuario` ASC) VISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cbjk`.`perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cbjk`.`perfil` (
  `id_perfil` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_perfil`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cbjk`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cbjk`.`produto` (
  `id_produto` INT(5) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(150) NOT NULL,
  `quantidade` INT(5) NOT NULL,
  `preco` DECIMAL(10,0) NOT NULL,
  PRIMARY KEY (`id_produto`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `cbjk`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cbjk`.`usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(90) NULL DEFAULT NULL,
  `foto` VARCHAR(150) NULL DEFAULT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(255) NULL DEFAULT NULL,
  `id_perfil` INT(11) NOT NULL,
  `dt_cadastro` DATE NOT NULL,
  PRIMARY KEY (`id_usuario`),
  INDEX `id_perfil` (`id_perfil` ASC) VISIBLE,
  CONSTRAINT `usuario_ibfk_1`
    FOREIGN KEY (`id_perfil`)
    REFERENCES `bd-mvc`.`perfil` (`id_perfil`))
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cbjk`.`venda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cbjk`.`venda` (
  `id_venda` INT(40) NOT NULL AUTO_INCREMENT,
  `valor_total` VARCHAR(200) NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `usuario_id_usuario` INT(11) NOT NULL,
  `cliente_id_cliente` INT(11) NOT NULL,
  PRIMARY KEY (`id_venda`),
  INDEX `fk_venda_usuario1_idx` (`usuario_id_usuario` ASC) VISIBLE,
  INDEX `fk_venda_cliente1_idx` (`cliente_id_cliente` ASC) VISIBLE,
  CONSTRAINT `fk_venda_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `cbjk`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_venda_cliente1`
    FOREIGN KEY (`cliente_id_cliente`)
    REFERENCES `cbjk`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `cbjk`.`produto_has_venda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cbjk`.`produto_has_venda` (
  `produto_id_produto` INT(5) NOT NULL,
  `venda_id_venda` INT(40) NOT NULL,
  `quantidade` INT NULL,
  PRIMARY KEY (`produto_id_produto`, `venda_id_venda`),
  INDEX `fk_produto_has_venda_venda1_idx` (`venda_id_venda` ASC) VISIBLE,
  INDEX `fk_produto_has_venda_produto1_idx` (`produto_id_produto` ASC) VISIBLE,
  CONSTRAINT `fk_produto_has_venda_produto1`
    FOREIGN KEY (`produto_id_produto`)
    REFERENCES `cbjk`.`produto` (`id_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_has_venda_venda1`
    FOREIGN KEY (`venda_id_venda`)
    REFERENCES `cbjk`.`venda` (`id_venda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


-- Tabela produto coluna preco de decimal para varchar 14/12
ALTER TABLE `produto` CHANGE `preco` `preco` VARCHAR(10) NOT NULL;
ALTER TABLE `produto` CHANGE `preco` `preco` VARCHAR(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;