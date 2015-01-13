<?php

require '../lib/PDOConnectionFactory.php';


echo "####################### Executando Fixture ###################################";

echo "\n\n\n";

$pdo = new PDOConnectionFactory();
$conn = $pdo->getConnection();



echo  "################## Excluindo e criando um  novo banco. #######################";

echo "\n";

$conn->query("SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `Agenda` ;

CREATE SCHEMA IF NOT EXISTS `Agenda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;

USE `Agenda`;");

echo " \n OK \n\n";


echo "################## Estrutura da tabela amigos, ########################################";
echo " \n ####################### criando tabela amigos! #######################";

$conn->query("
CREATE TABLE IF NOT EXISTS `amigos` (
  `idamigos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `telefone_fixo` varchar(45) DEFAULT NULL,
  `telefone_celular` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idamigos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;
");

echo " \n\n OK \n\n";

echo "################## Extraindo dados da tabela amigos. #######################";

$conn->query("INSERT INTO `amigos` (`idamigos`, `nome`, `telefone_fixo`, `telefone_celular`, `email`, `endereco`) VALUES
(3, 'Sword Art ', '3322-3432', '92041351', 'wagner30023@hotmail.com', 'Q 900 CONJUNTO 12 CAS 03'),
(7, 'Luciana Moraes ', 'lluciana@gmail.com', '3333-9089', '9288-9088', 'Q 200 CONJUNTO 06 casa 03'),
(8, 'Eduardo Pereira de Morais', 'edu.05@hotmail.com', '3333-9089', '9288-9088', 'QI 12 conjunto 23C casa 31'),
(9, 'Sandra da Costa', 'sandrak5@hotmail.com', '3333-9089', '9288-9088', 'QI 12 conjunto 23C casa 90 Riacho Fundo II'),
(10, 'Alburqueque', 'alquerq@hotmail.com', '39089333-', '9288-9088', 'QI 12 conjunto 23C casa 90 Riacho Fundo II'),
(11, 'Ludimila GalvÃ£o ', 'lu@hotmail.com', '39089333', '9288-9088', 'QI 12 conjunto 23C casa 90 Recanto das Emas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION ;");

  echo " \n\n OK \n\n";
  
  echo " \n\n";
  echo  "################## Fixture finalizada. #######################";
  echo " \n\n";
  