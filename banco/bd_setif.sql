-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01/10/2023 às 20:25
-- Versão do servidor: 10.6.12-MariaDB-cll-lve
-- Versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u523427154_Setif`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ano`
--

CREATE TABLE `ano` (
  `idAno` int(11) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `img`
--

CREATE TABLE `img` (
  `idImg` int(11) NOT NULL,
  `caminho` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_artigo`
--

CREATE TABLE `tb_artigo` (
  `idTrab` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `link` text NOT NULL,
  `autores` varchar(255) NOT NULL,
  `ano` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_corpo_editorial`
--

CREATE TABLE `tb_corpo_editorial` (
  `id_corpo_editorial` int(11) NOT NULL,
  `nome` text NOT NULL,
  `funcao` text NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_institucional`
--

CREATE TABLE `tb_institucional` (
  `id_institucional` int(11) NOT NULL,
  `texto_sobre` text NOT NULL,
  `programacao` text NOT NULL,
  `localizacao` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `data_atualizacao` date NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_midia`
--

CREATE TABLE `tb_midia` (
  `id_midia` int(11) NOT NULL,
  `link` text NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `ano` int(11) NOT NULL,
  `tipo` varchar(10) NOT NULL DEFAULT 'foto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_normas_publicacao`
--

CREATE TABLE `tb_normas_publicacao` (
  `id_normas_publicacao` int(11) NOT NULL,
  `data_limite` date NOT NULL,
  `data_notificacao_autor` date NOT NULL,
  `data_versao_final` date NOT NULL,
  `data_inicio_evento` date NOT NULL,
  `data_final_evento` date NOT NULL,
  `data_mostra_trabalho` date NOT NULL,
  `tempo_apresentacao_resumo` int(11) NOT NULL,
  `tempo_apresentacao_artigo` int(11) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_topico_de_interesse`
--

CREATE TABLE `tb_topico_de_interesse` (
  `id_topico_de_interesse` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `link_imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUser` int(11) NOT NULL,
  `nameUser` varchar(200) NOT NULL,
  `emailUser` varchar(200) NOT NULL,
  `senhaUser` varchar(40) NOT NULL,
  `nivelUser` int(2) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `ano`
--
ALTER TABLE `ano`
  ADD PRIMARY KEY (`idAno`);

--
-- Índices de tabela `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`idImg`);

--
-- Índices de tabela `tb_artigo`
--
ALTER TABLE `tb_artigo`
  ADD PRIMARY KEY (`idTrab`);

--
-- Índices de tabela `tb_corpo_editorial`
--
ALTER TABLE `tb_corpo_editorial`
  ADD PRIMARY KEY (`id_corpo_editorial`);

--
-- Índices de tabela `tb_institucional`
--
ALTER TABLE `tb_institucional`
  ADD PRIMARY KEY (`id_institucional`);

--
-- Índices de tabela `tb_midia`
--
ALTER TABLE `tb_midia`
  ADD PRIMARY KEY (`id_midia`);

--
-- Índices de tabela `tb_normas_publicacao`
--
ALTER TABLE `tb_normas_publicacao`
  ADD PRIMARY KEY (`id_normas_publicacao`);

--
-- Índices de tabela `tb_topico_de_interesse`
--
ALTER TABLE `tb_topico_de_interesse`
  ADD PRIMARY KEY (`id_topico_de_interesse`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ano`
--
ALTER TABLE `ano`
  MODIFY `idAno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `img`
--
ALTER TABLE `img`
  MODIFY `idImg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_artigo`
--
ALTER TABLE `tb_artigo`
  MODIFY `idTrab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_corpo_editorial`
--
ALTER TABLE `tb_corpo_editorial`
  MODIFY `id_corpo_editorial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_institucional`
--
ALTER TABLE `tb_institucional`
  MODIFY `id_institucional` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_midia`
--
ALTER TABLE `tb_midia`
  MODIFY `id_midia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_normas_publicacao`
--
ALTER TABLE `tb_normas_publicacao`
  MODIFY `id_normas_publicacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_topico_de_interesse`
--
ALTER TABLE `tb_topico_de_interesse`
  MODIFY `id_topico_de_interesse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
