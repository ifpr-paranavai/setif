-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/09/2023 às 14:20
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_setif`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_midia`
--

CREATE TABLE `tb_midia` (
  `id_midia` int(11) NOT NULL,
  `link` text NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `ano` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_midia`
--

INSERT INTO `tb_midia` (`id_midia`, `link`, `titulo`, `ano`) VALUES
(1, 'https://tecnoif.com.br/setif/admin/uploads/bb06f0a38d4f0d65a69295365ddc12f4a7c68ca8.jpg', 'setif 2018', '2016-11-02');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_midia`
--
ALTER TABLE `tb_midia`
  ADD PRIMARY KEY (`id_midia`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_midia`
--
ALTER TABLE `tb_midia`
  MODIFY `id_midia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
