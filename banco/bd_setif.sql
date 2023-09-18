-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/09/2023 às 22:29
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

--
-- Despejando dados para a tabela `tb_institucional`
--

INSERT INTO `tb_institucional` (`id_institucional`, `texto_sobre`, `programacao`, `localizacao`, `email`, `telefone`, `data_atualizacao`, `ano`) VALUES
(1, ' <h2 class=\"pb-5 text-center\">\r\n                A Semana da Tecnologia da Informação do IFPR Campus Paranavaí (SETIF)\r\n                é um evento que acontece todos os anos na cidade de Paranavaí-PR. Além\r\n                da mostra de trabalhos, este evento conta com minicursos, palestras e\r\n                competições. Em 2022, a SETIF ocorrerá de 7 a 11 de novembro. Além das\r\n                atividades relacionadas à tecnologia da informação, dentro da\r\n                programação da SETIF ainda está previsto o IFTECH e o Show de\r\n                Talentos.\r\n            </h2>\r\n            <h2 id=\"insc\" class=\"font-weight-bold text-center pb-5 mt-5 mb-0\">\r\n                As inscrições para as palestras e mini-cursos deverão ser realizadas\r\n                por meio do Even3:\r\n                <a class=\"fw-lighter text-white text-decoration-none pb-5 mt-7\"\r\n                    href=\"https://www.even3.com.br/setif-2022/\">https://www.even3.com.br/setif-2022/</a>\r\n            </h2>', ' <div class=\"d-flex flex-column justify-content-center\">\r\n                    <div id=\"even3-widget-session\">\r\n                        <iframe class=\"rounded-3\"\r\n                            src=\"https://www.even3.com.br/widget/index?evento=setif-2022&amp;type=session&amp;lang=pt\"\r\n                            id=\"even3_session\" frameborder=\"0\" allowfullscreen>\r\n                        </iframe>\r\n                    </div>\r\n                </div>', '   <div class=\"mapa d-flex flex-row justify-content-center mb-5\">\r\n                <iframe class=\"rounded-3\" style=\"height: 650px;\"\r\n                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.1691110062343!2d-52.45651458503157!3d-23.054260884937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949296a233a74981%3A0x8aed8519780a4c71!2sIFPR%20-%20Instituto%20Federal%20do%20Paran%C3%A1%20-%20Campus%20Paranava%C3%AD!5e0!3m2!1spt-PT!2sbr!4v1685555475394!5m2!1spt-PT!2sbr\"\r\n                    frameborder=\"0\" allowfullscreen loading=\"lazy\" width=\"90%\"\r\n                    referrerpolicy=\"no-referrer-when-downgrade\"></iframe>\r\n            </div>', 'es.paranavai@ifpr.edu.br', '(44) 3482-0110', '2023-09-14', 2023);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_institucional`
--
ALTER TABLE `tb_institucional`
  ADD PRIMARY KEY (`id_institucional`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_institucional`
--
ALTER TABLE `tb_institucional`
  MODIFY `id_institucional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
