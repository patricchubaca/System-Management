--
-- Database: `ManagementSystem`
--
CREATE DATABASE IF NOT EXISTS `ManagementSystem` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `ManagementSystem`;

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uasg` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `isento` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `inscricaoEstadual` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacaoes` varchar COLLATE utf8mb4_unicode_ci NOT NULL, 
  `endereco` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar COLLATE utf8mb4_unicode_ci NOT NULL, 
  `contato1` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone1` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `email1` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargoSetor1` varchar COLLATE utf8mb4_unicode_ci NOT NULL
  `contato2` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone2` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `email2` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargoSetor2` varchar COLLATE utf8mb4_unicode_ci NOT NULL   
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `provider`;
CREATE TABLE IF NOT EXISTS `provider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razaoSocial` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `isento` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `inscricaoEstadual` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar COLLATE utf8mb4_unicode_ci NOT NULL, 
  `pedidoMinimo` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacoes` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar COLLATE utf8mb4_unicode_ci NOT NULL, 
  `contato1` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone1` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `email1` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargoSetor1` varchar COLLATE utf8mb4_unicode_ci NOT NULL
  `contato2` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone2` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `email2` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargoSetor2` varchar COLLATE utf8mb4_unicode_ci NOT NULL   
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `portal`;
CREATE TABLE IF NOT EXISTS `portal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `portal` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar COLLATE utf8mb4_unicode_ci NOT NULL,
  `disco` varchar COLLATE utf8mb4_unicode_ci NOT NULL

  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;





