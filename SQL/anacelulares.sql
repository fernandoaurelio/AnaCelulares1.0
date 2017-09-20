-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Set-2017 às 17:10
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anacelulares`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `cliente_nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `cliente_telefone` varchar(20) COLLATE utf8_bin NOT NULL,
  `cliente_email` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `escalas`
--

CREATE TABLE `escalas` (
  `escala_is` int(11) NOT NULL,
  `escala_funcId` int(11) NOT NULL,
  `semanaum` date NOT NULL,
  `semanadois` date NOT NULL,
  `semanatres` date NOT NULL,
  `semanaquatro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `funcionario_id` int(11) NOT NULL,
  `funcionario_nome` varchar(200) COLLATE utf8_bin NOT NULL,
  `funcionario_email` varchar(200) COLLATE utf8_bin NOT NULL,
  `funcionario_telefone` varchar(15) COLLATE utf8_bin NOT NULL,
  `funcionario_login` varchar(100) COLLATE utf8_bin NOT NULL,
  `funcionario_senha` varchar(32) COLLATE utf8_bin NOT NULL,
  `setor` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`funcionario_id`, `funcionario_nome`, `funcionario_email`, `funcionario_telefone`, `funcionario_login`, `funcionario_senha`, `setor`) VALUES
(30, 'Renata Caroline SebastiÃ£o', 'renata_carols@outlook.com', '473644637', 'RENATACAROLS', '9f0e33d5b6c4f299665474a30d5512cb', 'CEO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordemdeservico`
--

CREATE TABLE `ordemdeservico` (
  `ordem_id` int(11) NOT NULL,
  `ordem_marca` varchar(100) COLLATE utf8_bin NOT NULL,
  `ordem_modelo` varchar(100) COLLATE utf8_bin NOT NULL,
  `acessorios` varchar(100) COLLATE utf8_bin NOT NULL,
  `ordem_defeito` varchar(300) COLLATE utf8_bin NOT NULL,
  `orderm_orcamento` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `ordem_total` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `ordem_estadoAparelho` varchar(100) COLLATE utf8_bin NOT NULL,
  `ordem_status` varchar(100) COLLATE utf8_bin NOT NULL,
  `ordem_clienteId` int(11) NOT NULL,
  `ordem_FuncId` int(11) NOT NULL,
  `entrada` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `saida` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indexes for table `escalas`
--
ALTER TABLE `escalas`
  ADD PRIMARY KEY (`escala_is`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`funcionario_id`);

--
-- Indexes for table `ordemdeservico`
--
ALTER TABLE `ordemdeservico`
  ADD PRIMARY KEY (`ordem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `escalas`
--
ALTER TABLE `escalas`
  MODIFY `escala_is` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `funcionario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `ordemdeservico`
--
ALTER TABLE `ordemdeservico`
  MODIFY `ordem_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
