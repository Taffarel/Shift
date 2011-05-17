-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Mai 12, 2011 as 12:09 AM
-- Versão do Servidor: 5.1.49
-- Versão do PHP: 5.3.3-1ubuntu9.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `shift`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `campeonatos`
--

DROP TABLE IF EXISTS `campeonatos`;
CREATE TABLE IF NOT EXISTS `campeonatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `horarioInicio` time NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `campeonatos`
--

INSERT INTO `campeonatos` (`id`, `game_id`, `tipo_id`, `horarioInicio`, `valor`, `status`, `created`, `modified`) VALUES
(7, 1, 1, '15:00:00', 1.00, 1, '2011-05-10 23:39:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `campeonatos_jogadore`
--

DROP TABLE IF EXISTS `campeonatos_jogadore`;
CREATE TABLE IF NOT EXISTS `campeonatos_jogadore` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campeonato_id` int(11) NOT NULL,
  `jogadore_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `campeonatos_jogadore`
--

INSERT INTO `campeonatos_jogadore` (`id`, `campeonato_id`, `jogadore_id`) VALUES
(1, 7, 1),
(2, 7, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `dataInicio` date NOT NULL,
  `andar` varchar(25) NOT NULL,
  `numeroSala` varchar(25) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `dataFim` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `nome`, `dataInicio`, `andar`, `numeroSala`, `endereco`, `dataFim`, `status`, `created`, `modified`) VALUES
(1, 'AnimABC', '2011-05-14', '', '', '', '2011-05-15', 1, '2011-05-09 21:58:56', '0000-00-00 00:00:00'),
(2, 'Anime Friend', '2011-07-09', '', '', '', '2011-07-16', 1, '2011-05-09 22:20:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `games`
--

INSERT INTO `games` (`id`, `nome`, `imagem`, `descricao`, `status`, `created`, `modified`) VALUES
(1, 'Guitar Hero 3', 'guitarhero_icon.png', 'Crank Up the Volume and prepare to rock around the globe with Guitar Hero® III: Legends of Rock. Battle against some of the greatest legends to ever shred on a guitar and become one yourself! Take your skills online against other Guitar Hero® players from around the world.', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

DROP TABLE IF EXISTS `jogadores`;
CREATE TABLE IF NOT EXISTS `jogadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ddd` int(2) NOT NULL,
  `celular` int(8) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `idade` int(2) NOT NULL,
  `sexo` tinyint(2) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `jogadores`
--

INSERT INTO `jogadores` (`id`, `nome`, `email`, `ddd`, `celular`, `apelido`, `idade`, `sexo`, `status`, `created`, `modified`) VALUES
(1, 'Taffarel de Lima', 'taffarelo3@gmail.com', 11, 0, 'Taffarelo3', 21, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Geddy Lee', 'geddylee@rush.com', 0, 0, 'Bass-Boy', 55, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Neil Peirt', 'Neil.Peirt.rush@rush.com', 11, 0, 'DRUM Boy', 54, 1, 1, '2010-12-11 23:31:36', '2010-12-11 23:31:36'),
(4, 'Alex Lifeson', 'alex.guitar@rush.com', 11, 0, 'AlexKID', 50, 1, 1, '2010-12-11 23:34:52', '2010-12-11 23:34:52'),
(5, 'Cris Martin', 'cris@coldplay.com', 11, 0, 'TheScients', 30, 1, 1, '2010-12-11 23:35:55', '2010-12-11 23:35:55'),
(6, 'Thiago Da Silva', 'thiago_naruto@hotmail.com', 11, 0, 'NarutoSennin', 14, 1, 1, '2010-12-11 23:42:48', '2010-12-11 23:42:48'),
(7, 'Monkey D. Luffy', 'monkey-chan@onepiece.com', 11, 0, 'Chapéu de Palha', 20, 1, 1, '2010-12-11 23:50:56', '2010-12-11 23:50:56'),
(8, 'Sanji', 'lover@onepiece.com', 11, 0, 'Sanji O Perna Negra', 21, 1, 1, '2010-12-11 23:54:15', '2010-12-11 23:54:15'),
(9, 'Nami', 'beri@onepiece.com', 11, 0, 'Nami A Gata Ladra', 19, 2, 1, '2010-12-11 23:56:42', '2010-12-11 23:56:42'),
(10, 'Usopp', 'mentiroso.soge@onepiece.com', 11, 0, 'Sogeking', 20, 1, 1, '2010-12-11 23:58:20', '2010-12-11 23:58:20'),
(11, 'Tony Tony Chopper', 'drChoper@onepiece.com', 11, 0, 'docChopper', 16, 1, 1, '2010-12-12 00:00:35', '2010-12-12 00:00:35'),
(12, 'Roronoa Zoro', 'marimo@onepiece.com.br', 11, 0, 'Marimo', 21, 1, 1, '2010-12-12 00:07:55', '2010-12-12 00:07:55'),
(13, 'Nico Robin', 'nico@onepiece.com', 11, 0, 'Robin', 28, 2, 1, '2010-12-12 00:11:45', '2010-12-12 00:11:45'),
(14, 'Nizuma Eiji', 'crow@jump.com', 11, 0, 'Crow', 18, 1, 1, '2010-12-26 02:45:16', '2010-12-26 02:45:16'),
(15, 'Azuki Miho', 'mihoseyu@bakuman.com', 11, 0, 'miho', 18, 2, 1, '2010-12-26 02:46:31', '2010-12-26 02:46:31'),
(16, 'Kurosaki Ichico', 'ichinisan@bleach.com', 11, 0, 'Zangtsu', 16, 1, 1, '2010-12-26 02:49:53', '2010-12-26 02:49:53'),
(17, 'Uhara Kisuke', 'kisuke@bleach.com', 11, 0, 'Kisuke', 26, 1, 1, '2010-12-26 02:52:30', '2010-12-26 02:52:30'),
(18, 'Bruce Dickson', 'bruce@ironmaiden.com', 11, 0, 'bruce', 50, 1, 1, '2010-12-26 03:11:11', '2010-12-26 03:11:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

DROP TABLE IF EXISTS `tipos`;
CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `quantidadeCompetidores` int(2) NOT NULL,
  `tabela` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tipos`
--

INSERT INTO `tipos` (`id`, `nome`, `quantidadeCompetidores`, `tabela`, `status`, `created`, `modified`) VALUES
(1, '12 Vagas', 12, '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '16 Vagas', 16, '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`, `email`, `admin`, `status`, `created`, `modified`) VALUES
(6, 'Rafael da Silva', 'sonnyBoy', '58b1216b06850385d9a4eadbedc806c4', 'rafael.sonnyboy@gmail.com', 0, 0, '2010-11-21 00:13:08', '2010-11-21 18:31:41'),
(5, 'Taffarel de Lima Oliveira', 'taffarelo3', 'a5298fd835aa48c8efde89118d01c6c9', 'taffarelo3@hotmail.com', 1, 1, '2010-11-20 19:35:02', '2010-11-20 19:35:02');
