-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 19-Maio-2015 às 21:44
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `TicketSell`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Leilao`
--

CREATE TABLE IF NOT EXISTS `Leilao` (
  `id_leilao` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `preco_base` int(11) NOT NULL,
  `preco_final` int(11) DEFAULT NULL,
  `nr_licitacoes` int(11) DEFAULT NULL,
  `extra` int(11) NOT NULL,
  `tempo` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  `vencedor` int(11) DEFAULT NULL,
  `fk_id_local` int(11) NOT NULL,
  `fk_id_movies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Local`
--

CREATE TABLE IF NOT EXISTS `Local` (
  `id_local` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Movies`
--

CREATE TABLE IF NOT EXISTS `Movies` (
  `id_movie` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `cod_postal` int(255) NOT NULL,
  `telefone` int(9) NOT NULL,
  `cartao_cidadao` int(12) NOT NULL,
  `nif` int(12) NOT NULL,
  `saldo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_leilao`
--

CREATE TABLE IF NOT EXISTS `users_leilao` (
  `id` int(11) NOT NULL,
  `fk_id_user` int(11) NOT NULL,
  `fk_id_leilao` int(11) NOT NULL,
  `nr_licitacoes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Leilao`
--
ALTER TABLE `Leilao`
  ADD PRIMARY KEY (`id_leilao`);

--
-- Indexes for table `Local`
--
ALTER TABLE `Local`
  ADD PRIMARY KEY (`id_local`);

--
-- Indexes for table `Movies`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`id_movie`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `users_leilao`
--
ALTER TABLE `users_leilao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Leilao`
--
ALTER TABLE `Leilao`
  MODIFY `id_leilao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Local`
--
ALTER TABLE `Local`
  MODIFY `id_local` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Movies`
--
ALTER TABLE `Movies`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_leilao`
--
ALTER TABLE `users_leilao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
