-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2018 às 21:21
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

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

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `cpf` char(14) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(150) DEFAULT NULL,
  `estado` char(2) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `telefone` char(14) NOT NULL,
  `celular` char(15) DEFAULT NULL,
  `whatsapp` char(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Usuário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(90) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `id_perfil` int(11) NOT NULL,
  `dt_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `foto`, `login`, `senha`, `id_perfil`, `dt_cadastro`) VALUES
(2, 'joao', NULL, 'admin', '202cb962ac59075b964b07152d234b70', 1, '2018-10-01'),
(3, 'João Pedro', NULL, 'teste', '202cb962ac59075b964b07152d234b70', 2, '2018-11-01'),
(5, 'Teste', NULL, 'abc', '202cb962ac59075b964b07152d234b70', 2, '2018-10-31'),
(6, 'Teste', NULL, 'teste3', '202cb962ac59075b964b07152d234b70', 2, '2018-10-31'),
(7, 'aaa', NULL, 'bbb', '202cb962ac59075b964b07152d234b70', 1, '2018-11-01'),
(8, 'João Pedro Batista de Oliveira', 'calopsita_3.png', 'asdf', '202cb962ac59075b964b07152d234b70', 1, '2018-11-01'),
(10, 'Pedro henrique ', '3.jpg', '111', '202cb962ac59075b964b07152d234b70', 2, '2018-11-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_perfil` (`id_perfil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `bd-mvc`.`perfil` (`id_perfil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
