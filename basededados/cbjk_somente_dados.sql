-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Dez-2018 às 19:55
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbjk`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

/*CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `cpf` char(14) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(150) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `estado` char(2) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `telefone` char(14) DEFAULT NULL,
  `celular` char(15) NOT NULL,
  `whatsapp` char(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;*/

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `cpf`, `endereco`, `numero`, `complemento`, `bairro`, `estado`, `cidade`, `telefone`, `celular`, `whatsapp`, `id_usuario`) VALUES
(9, 'Pedro Henrique', '10020030040', 'Quadra 16 Lote 29 Cidade do Entorno', '29', 'apartamento', '', 'go', 'Águas Lindas de Goiás', '36136336', '36188118', 's', 2),
(10, 'João Pedro Batista', '96696326235', 'Quadra 16 Lote 29 Cidade do Entorno', '16', 'casa', 'entorno', 'GO', 'Águas Lindas de Goiás', '6192462916', '6192462916', 's', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

/*CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;*/

--
-- Extraindo dados da tabela `perfil`
--

/*INSERT INTO `perfil` (`id_perfil`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Usuário');*/

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

/*CREATE TABLE `produto` (
  `id_produto` int(5) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `preco` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;*/

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `quantidade`, `preco`) VALUES
(10, 'Feijão Kicaldo 1K', 1, '5.00'),
(11, 'Óleo de soja soya 1L', 1, '3.50'),
(12, 'Goiabada', 1, '3.00'),
(13, 'Farinha de mandioca', 1, '4.00'),
(15, 'Sabão em Pó Omo', 1, '5.00'),
(18, 'Arroz', 1, '10.25'),
(19, 'Sal de Cozinha Iodado ', 1, '2.30'),
(20, 'Bolacha Água e Sal', 2, '3.60'),
(21, 'Café do sítio 500g', 2, '8.40'),
(22, 'Margarina Delícia 500g', 1, '4.00'),
(23, 'Milharina Flocão', 1, '3.00'),
(24, 'Achocolatado Nescau', 1, '4.00'),
(25, 'Macarrão', 1, '5.00'),
(26, 'Açucar cristal 5 kilos', 1, '7.00'),
(28, 'Farinha de trigo', 1, '5.00'),
(29, 'Massa P/ bolo sabor chocolate', 1, '4.00'),
(30, 'Extrato de tomate quero', 1, '1.85'),
(31, 'Suco del vale', 1, '3.00'),
(32, 'Creme dental sorriso', 1, '2.99'),
(33, 'Fubá ', 1, '2.65'),
(34, 'Sardinha ao molho', 2, '8.20'),
(35, 'Polvilho doce', 1, '2.20'),
(36, 'Milho enlatado', 1, '1.88');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

/*CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(90) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `id_perfil` int(11) NOT NULL,
  `dt_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;*/

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `foto`, `login`, `senha`, `id_perfil`, `dt_cadastro`) VALUES
('Joao ', '47681362_1276532852501600_7568223432047853568_n_2.jpg', 'admin', '202cb962ac59075b964b07152d234b70', 1, '2018-10-01'),
('Pedro Henrique', '000012.jpg', 'pedro123', '202cb962ac59075b964b07152d234b70', 1, '2018-11-14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

/*CREATE TABLE `venda` (
  `id_venda` int(40) NOT NULL,
  `id_cliente` int(40) NOT NULL,
  `nome_cliente` varchar(200) NOT NULL,
  `id_produto` int(40) NOT NULL,
  `nome_produto` varchar(300) NOT NULL,
  `quantidade` int(150) NOT NULL,
  `valor_total` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `hora` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;*/

