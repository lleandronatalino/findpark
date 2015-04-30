SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE `findpark` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `findpark`;

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `estacionamento` (
  `IdEstacionamento` int(11) NOT NULL AUTO_INCREMENT,
  `NomeFantasia` varchar(250) NOT NULL,
  `DsRazaoSocial` varchar(1000) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `Rua` varchar(100) NOT NULL,
  `Numero` int(6) NOT NULL,
  `Bairro` varchar(100) NOT NULL,
  `Cidade` varchar(100) NOT NULL,
  `UF` varchar(3) NOT NULL,
  `Complemento` varchar(250) DEFAULT NULL,
  `Telefone` varchar(15) NOT NULL,
  `Imagem` varchar(250) DEFAULT NULL,
  `FlgAtivo` tinyint(4) NOT NULL,
  `Latitude` varchar(150) NOT NULL,
  `Longitude` varchar(150) NOT NULL,
  PRIMARY KEY (`IdEstacionamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `Rua` varchar(100) NOT NULL,
  `Numero` int(6) NOT NULL,
  `Bairro` varchar(100) NOT NULL,
  `Cidade` varchar(100) NOT NULL,
  `UF` varchar(3) NOT NULL,
  `Complemento` varchar(250) DEFAULT NULL,
  `Telefone` varchar(15) DEFAULT NULL,
  `cep` varchar(10) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Login` varchar(25) DEFAULT NULL,
  `Senha` varchar(32) NOT NULL,
  `FlgAtivo` tinyint(4) NOT NULL,
  `CodigoEmail` varchar(6) NOT NULL,
  `FlgValido` tinyint(4) NOT NULL,
  PRIMARY KEY (`IdUsuario`),
  UNIQUE KEY `login` (`Login`),
  UNIQUE KEY `email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

CREATE TABLE IF NOT EXISTS `usuario_estacionamento` (
  `IdEstacionamento` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `DtCriacao` date NOT NULL,
  `FlgProprietario` tinyint(4) NOT NULL,
  FOREIGN KEY (IdEstacionamento) REFERENCES estacionamento(IdEstacionamento),
  FOREIGN KEY (IdUsuario) REFERENCES usuario(IdUsuario)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `findpark`.`preco` (
  `IdEstacionamento` INT NOT NULL,
  `descricao` VARCHAR(100) NULL,
   preco DECIMAL(5,2) NOT NULL,
   FOREIGN KEY (IdEstacionamento) REFERENCES estacionamento(IdEstacionamento))
ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `findpark`.`servicos` (
  `IdServico` INT NOT NULL AUTO_INCREMENT,
  `IdEstacionamento` INT NOT NULL,
  `descricao` VARCHAR(100) NULL,
  `preco` DECIMAL(5,2) NOT NULL,
  PRIMARY KEY (`IdServico`),
  FOREIGN KEY (IdEstacionamento) REFERENCES estacionamento(IdEstacionamento))
ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `findpark`.`vagas` (
  `IdEstacionamento` INT NOT NULL,
  `qtdVagas` INT(5) NOT NULL,
   qtdVagasDisponiveis INT(11) NOT NULL,
   FOREIGN KEY (IdEstacionamento) REFERENCES estacionamento(IdEstacionamento))
ENGINE = InnoDB DEFAULT CHARSET=utf8;


USE `findpark`;
INSERT INTO `usuario` (`IdUsuario`, `Nome`, `cpf`, `Rua`, `Numero`, `Bairro`, `Cidade`, `UF`, `Complemento`, `Telefone`, `cep`, `Email`, `Login`, `Senha`, `FlgAtivo`, `CodigoEmail`, `FlgValido`) VALUES
(1, 'ADMIN', '11432712399', 'Rua alvares cabral', 93, 'Botafogo (Justinópolis)', 'Ribeirão das Neves', 'MG', '', '', '33900872', 'lucasvp29@hotmail.com', 'ADMIN', 'ef818d0d90a5c8add0ea386db333c94e', 0, 'vg7rjb', 0);

INSERT INTO `estacionamento` (`IdEstacionamento`, `NomeFantasia`, `DsRazaoSocial`, `cnpj`, `cep`, `Rua`, `Numero`, `Bairro`, `Cidade`, `UF`, `Complemento`, `Telefone`, `Imagem`, `FlgAtivo`, `Latitude`, `Longitude`) VALUES
(1, 'Estaciona Fácil LTDA', 'Estacionamento Fácil Limitada de Belo Horizonte', '17.155.730/0001-64', '30.170-120', 'Rua Curitiba', 561, 'Centro', 'Belo Horizonte', 'MG', '', '', NULL, 0, '-19.9176794', '-43.9408332');

INSERT INTO `usuario_estacionamento` (`IdEstacionamento`, `IdUsuario`, `DtCriacao`, `FlgProprietario`) VALUES
(1, 1, '2015-04-29', 1);
