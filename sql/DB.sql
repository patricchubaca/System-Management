--
-- Database: `SystemManagment`
--
CREATE DATABASE IF NOT EXISTS `SystemManagment`;

USE `SystemManagment`;

-- Table: Clientes
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cliente` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `uasg` int,
  `cnpj` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `isentoIE` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `inscricaoEstadual` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `observacoes` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `rua` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `bairro` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cidade` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cep` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `numero` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contato1` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `telefone1` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email1` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cargoSetor1` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contato2` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `telefone2` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email2` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cargoSetor2` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE = MyISAM AUTO_INCREMENT = 0 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- Table: Fornecedores
DROP TABLE IF EXISTS `fornecedores`;
CREATE TABLE IF NOT EXISTS `fornecedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fornecedor` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cnpj` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `isento` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `inscricaoEstadual` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `observacoes` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cidade` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cep` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `rua` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `numero` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `bairro` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contato1` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `telefone1` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email1` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cargoSetor1` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contato2` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `telefone2` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email2` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cargoSetor2` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE = MyISAM AUTO_INCREMENT = 0 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- Table: Portal
DROP TABLE IF EXISTS `portais`;
CREATE TABLE IF NOT EXISTS `portais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `portal` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `site` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `login` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `senha` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 0 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- Table: Empresas
DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razaoSocial` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `inscricaoEstadual` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cnpj` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `rua` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `bairro` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cidade` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cep` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `telefone` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `numero` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 0 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- Table: Produtos
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `marca` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 0 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;


-- Table: Marcas
DROP TABLE IF EXISTS `marcas`;
CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `marca` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 0 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- Table: Users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `password` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `profile` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 0 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- Tables: Cotacao
DROP TABLE IF EXISTS `cotacao`;
CREATE TABLE IF NOT EXISTS `cotacao` (
  `pasta` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cliente` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `uasg` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `inscricaoEstadual` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `observacoes` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `isentoIE` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cep` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `rua` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `numero` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `bairro` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contato1` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `telefone1` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email1` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cargoSetor1` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contato2` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `telefone2` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email2` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cargoSetor2` varchar (220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`pasta`)
) ENGINE = MyISAM AUTO_INCREMENT = 4000 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

   

