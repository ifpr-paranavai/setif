-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Set-2023 às 22:53
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

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
-- Estrutura da tabela `tb_artigo`
--

CREATE TABLE `tb_artigo` (
  `id_artigo` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `link` text NOT NULL,
  `autores` varchar(255) NOT NULL,
  `ano` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `tb_artigo`
--

INSERT INTO `tb_artigo` (`id_artigo`, `titulo`, `link`, `autores`, `ano`, `tipo`) VALUES
(37, 'Uso de aplicativos como instrumento para Gestão do Conhecimento nas organizações escolares: o caso do Centro de Educação Infantil Primeiro Tempo da cidade de Maringá/PR', 'https://drive.google.com/file/d/1-p8AkU01NUE_S4rUkhNoIDwQPLEU-hfj/view', 'Tania Corredato Periotto (UNICESUMAR) e Sandra Aparecida Ortiz Larrosa (UNICESUMAR)\r\n\r\n', 2017, 'Artigo'),
(38, 'Molecular Networking: uma importante ferramenta computacional para o processo de identificação metabólica a partir de dados de Espectrometria de Massas de alta resolução', 'https://drive.google.com/file/d/17kQEO_FJHQnR2QVsvXx3sgjOWOXq5xaN/view', 'Alexandre Avincola (IFPR), Ana Carolina Bialetzki (IFPR) e Tatyane Fernandes (IFPR)\r\n\r\n', 2018, 'Artigo'),
(39, 'Caça ao elemento químico: o uso de QR codes como ferramenta para trabalhar conceitos da tabela periódica', 'https://drive.google.com/file/d/1LB1kcWn0pX2fsZ3fSuliyWNJzm07vCM9/view', 'Tatyane Fernandes (IFPR), Alexandre Avincola (IFPR) e Ana Carolina Bialetzki (IFPR)\r\n\r\n', 2018, 'Artigo'),
(40, 'Avaliação de Software Educacional sobre Balanceamento Químico', 'https://drive.google.com/file/d/1JcyYlnavHiTtLzVaLxts10rzlsjBGK8a/view', 'Ana Carolina Bialetzki (IFPR), Alexandre Avincola (IFPR), Tatyane Fernandes (IFPR) e Vanessa Da Silva (IFPR)', 2018, 'Artigo'),
(41, 'Ferramentas tecnológicas disponibilizadas pela computação cognitiva e sua relação com a gestão do conhecimento', 'https://drive.google.com/file/d/1vIjf0bZ-QK-GtgvWJ9PRSTcD-2pLXwqG/view', 'Alan Secundo (UNICESUMAR), Iara Almeida (UNICESUMAR) e Flavio Bortolozzi (UNICESUMAR)', 2018, 'Artigo'),
(42, 'Identificação e Remoção de Dívidas Técnicas Congênitas', 'https://drive.google.com/file/d/1lhT-Vb6XSbNHGPEtAtnTrF1o8wkJPt94/view', 'Aleson Teruji Makino (IFPR), Helio Toshio Kamakawa (IFPR) e Willian Nalepa Oizumi (IFPR)', 2018, 'Artigo'),
(43, 'Desenvolvimento web para a divulgação de organizações da sociedade civil de ParanavaÃ­-PR', 'https://drive.google.com/file/d/1_pG_okeIiL_G4DBegs9kciO5xC9-wGes/view', 'Eduardo Augusto Da Cruz Junior (IFPR), Gabriela GonÃ§alves Barbosa (IFPR), Arielle Andressa Alves (IFPR), Frank William Cardoso de Oliveira (IFPR), AndrÃ© Ricardo Zavan (IFPR), Rafael Henrique Dalegra', 2018, 'Artigo'),
(44, 'Evaluation of a Mechanism to Reduce Cache Pollution', 'https://drive.google.com/file/d/1HXdCXi5XKKlF8BDA2Th8SNFBOlo6l43I/view', 'Arthur Krause (UFRGS), Eduardo Henrique Cruz (IFPR), Francis Moreira (UFRGS) e Philippe Navaux (UFRGS', 2018, 'Artigo'),
(45, 'Bateria Eletrônica com Materiais Reaproveitados e Arduino', 'https://drive.google.com/file/d/1M2ZMv-VI0dAw3C5x3C1raneCSbjCWuUv/view', 'Mauricio Bruning (IFPR) e Daniela Flor (IFPR)', 2018, 'Artigo'),
(46, 'Conversão de um carrinho de controle remoto, para ser controlado remotamente utilizando o Raspberry', 'https://drive.google.com/file/d/1GCGP30jwc2yEW39DDp0-OpgHQ61xudim/view', 'Rafael Santos (IFPR) e Daniela Flor (IFPR)', 2018, 'Artigo'),
(47, 'Utilização do KNN em Tarefas de Reconhecimento Facial', 'https://drive.google.com/file/d/19UHejiM6B5Z2LConYQK8VW3HEwHH2zpJ/view', 'Stany Helberth de Souza Gomes da Silva (IFPR), Rafael Henrique Dalegrave Zottesso (IFPR)', 2018, 'Resumo'),
(48, 'Sistema Mobile para Gestão de Microempresas (MobiMei)', 'https://drive.google.com/file/d/1_EI0SGRG9wkb_GkNNZFhvgJrCQG_mLUP/view', 'Elton Bruno Mendonça dos Anjos (IFPR), Eduardo Henrique Molina da Cruz (IFPR)', 2018, 'Resumo'),
(49, 'Impacto de Aglomeração de Anomalias de Código em Projetos .Net', 'https://drive.google.com/file/d/1yUPBvPbmSsKf-59vctkyqpypdzN1pelF/view', 'André Hideki Eposhi (IFPR), Willian Nalepa Oizumi (IFPR)', 2018, 'Resumo'),
(50, 'Scrum Hero Headquarter: uma ferramenta para gerenciamento de projetos com Scrum gamificado', 'https://drive.google.com/file/d/1f9qdVyrMU6quTV-9kpYxNn_jrVN0z9xD/view', 'Jamila Peripolli Souza (IFPR), André Ricardo Zavan (IFPR)', 2018, 'Resumo'),
(51, 'Paradigmas de Programação Causadores de Falhas de Segurança em Aplicações Web', 'https://drive.google.com/file/d/1SP2hiEaSeXzyGBCFIx-74pdyZSZ_wjy9/view', 'Willian C. De S. De Oliveira (IFPR), André R. Zavan (IFPR)', 2018, 'Resumo'),
(52, 'Sistema de Gestão de Gastos Financeiros Pessoais (GPFinanças)', 'https://drive.google.com/file/d/1NnUUJJjxlgGs-_gHqzZatIYa7H15BXrQ/view', 'Jhonatan Wilson Aparecido Garbo (IFPR), Hélio Toshio Kamakawa (IFPR)', 2018, 'Resumo'),
(53, 'Jogos Lúdicos no ensino de Lí­ngua Portuguesa para alunos surdos: desenvolvimento e utilização de um protótipo', 'https://drive.google.com/file/d/1CKqbkQbCaiFlvGDYIuvw0rcKQFrApXu2/view', 'Giovana da Silva Gouvêa (IFPR), Rosângela Jovino Alves (IFPR), Késsia Rita Da Costa Marchi (IFPR)\r\n\r\n', 2018, 'Resumo'),
(54, 'Aplicativo de Conversão Alimentar, com Relação ao Volume Total de Ração Consumido por Lote de Frango', 'https://drive.google.com/file/d/1rBruOooeNfu1bw8GLp5Iv-G6XTOKkgNw/view', 'Fábio Eduardo do Vale (IFPR), Késsia Rita da Costa Marchi (IFPR)\r\n\r\n', 2018, 'Resumo'),
(55, 'Software para Cálculos de Massa e Volume de Substâncias Quí­micas no Âmbito do Preparo de Soluções Aquosas', 'https://drive.google.com/file/d/1ogNZtPMNJH5Qba-InNzVTd5Mn7DQlz9u/view', 'Marcos Henrique Ramos da Silva (IFPR), Frank Willian Cardoso de Oliveira (IFPR), Geovane Aparecido Ramos da Silva (IFPR)', 2018, 'Resumo'),
(56, 'O Uso de um Recurso Tecnológico que Visa Auxiliar o Processo de Ensino e Aprendizagem de Citologia', 'https://drive.google.com/file/d/1_5OO_LKKCGrQh3coMhpASVf1EEjVG1V6/view', 'Italo Gavassi dos Santos (IFPR), Késsia Rita da Costa Marchi (IFPR), Rafael Petermann (IFPR)', 2018, 'Resumo'),
(57, 'SIRBO – Sistema de Registro de Boletins de Ocorrência', 'https://drive.google.com/file/d/1VZWdKPjphhAquqbU-ITdRio1c6-612_l/view', 'Giovani Siqueira (IFPR), Lucas Dias Correia (IFPR), Willian Nalepa Oizumi (IFPR), Junior Oliveira (IFPR), Tomás dos Santos (IFPR)\r\n\r\n', 2018, 'Resumo'),
(58, ' Interpretação do SCRUM para eventos gastronômicos', 'https://drive.google.com/file/d/1Ht0d6DZY3o3nUdJfacNAlk__VE9-M4of/view', 'Adler Mateus Cachuba (IFPR), André Ricardo Zavan (IFPR)', 2018, 'Resumo'),
(59, 'SICON -Sistema de Gerenciamento De Serviços Para Escritório Contábil', 'https://drive.google.com/file/d/1zJv_qVYbgnNHUCrF-uKVw_U_laxBIEV7/view', 'Luis Guilherme de Jesus Gomes (IFPR), Adriel Carlos Dias (IFPR), Frank Willian Cardoso de Oliveira (IFPR)', 2018, 'Resumo'),
(60, 'O impacto da internet das coisas na educação', 'https://drive.google.com/file/d/1qCrqQtx8_fTND1xttWNiHEqWIVKP-Krn/view', 'Christian Garcia de Oliveira (IFPR), Luiz Gustavo Francisco (IFPR), Rafael Henrique Dalegrave Zottesso (IFPR)', 2018, 'Resumo'),
(61, 'Sistema RFID de controle de acesso integrado com a linguagem Python', 'https://drive.google.com/file/d/1DCRTjuZuM1IdDY1fIsL1AE7-n3xV3Y8y/view', 'Lucas Umeoka (IFPR), Lucas Ferreira de Souza (IFPR)', 2018, 'Resumo'),
(62, 'Consulta de Aparelhos Celulares: Aplicativo Mobile para a consulta de IMEI de aparelhos celulares roubados/furtados', 'https://drive.google.com/file/d/16f0qaH1FiwI5jx-8nkB9jUBadOk3pRSZ/view', 'Rubens Vianna (IFPR), Eduardo H. M. Cruz (IFPR)', 2018, 'Resumo'),
(63, 'LABFEC – Sistema para análise de qualidade da fécula de mandioca', 'https://drive.google.com/file/d/169vB9jBVfN8OvuJjUISECtwGwo8vHhvo/view', 'Fabio Fernandes da Silva, Hélio Toshio Kamakawa', 2018, 'Resumo'),
(64, 'Chatbot como ferramenta para os negócios empresariais', 'https://drive.google.com/file/d/1uvM1WM2gQMi0PD1T3lapDlcFlnUOEmFj/view', 'Maycon Willian Alves da Silva (IFPR), Gabriel Moya Nascimento (IFPR), Rafael Henrique Dalegrave Zottesso (IFPR)', 2018, 'Resumo'),
(65, 'SCVE – Software de Controle de Venda Externa', 'https://drive.google.com/file/d/1rHhJ7sPlhku9fRWrOFiWfFvvTQLOfNgQ/view', 'Diego Willian Valério (IFPR), Rafael H. D. Zottesso (IFPR)', 2018, 'Resumo'),
(66, 'Desenvolvimento de Aplicação Comercial Web/Mobile', 'https://drive.google.com/file/d/1hfrGENZHDUHBL0frdsTl22Vkvnf7Ewdc/view', 'Rodolfo Augusto Arroteia Cassorillo (IFPR), Frank Willian Cardoso de Oliveira (IFPR)', 2018, 'Resumo'),
(67, 'Sistema de Mensagem Institucional', 'https://drive.google.com/file/d/1S_muvI5V9aozvgUfuHG27kPoUpZvbh2C/view', 'Sergio Henrique Torres Gonçalves (IFPR), André Ricardo Zavan (IFPR)', 2018, 'Resumo'),
(68, ' SisOS – Sistema De Controle De Ordens De Serviço', 'https://drive.google.com/file/d/19IqUiGfp_7xq_As7jWQDk0OGMeo7RSdm/view', 'Tomás dos Santos (IFPR), Hélio Toshio Kamakawa (IFPR), Junior de Oliveira Araújo (IFPR)', 2018, 'Resumo'),
(69, 'Realidade Aumentada na Matemática: Desenvolvendo ferramentas de apoio para o processo de ensino e aprendizagem de trigonometria', 'https://drive.google.com/file/d/1rc3M6mb8Z1s2dWxxF7drX8ilKr3T2KJ9/view', 'Herikson Francisco Coutinho de Souza (IFPR), Willian Cligor de Souza de Oliveira (IFPR), Ângela Fontana Marques (IFPR), Késsia Rita da Costa Marchi (IFPR)', 2018, 'Resumo'),
(70, 'Gamificação na Educação Básica: Uma Revisão da Literatura', 'https://drive.google.com/file/d/1S--eKkLGMmtdURB8MMZL8SXeDq7WJLnH/view', 'Rafaella Alves (UEG), Roberto Oliveira (UEG), Eduardo Fernandes (PUC-Rio), Danyllo Albuquerque (UniNassau)', 2018, 'Resumo'),
(71, 'Sistema de Gestão de Incidentes (SGI)', 'https://drive.google.com/file/d/1KHA3XeOBFYzdp8JV9gHjeYo7nPg-15jf/view', 'Danilo Marques Bolqui (IFPR), Willian Nalepa Oizumi (IFPR)', 2018, 'Resumo'),
(72, 'Buscas de Heurísticas para a Resolução de Problemas Arquiteturais em Projetos Arquiteturais Baseados em Busca', 'https://drive.google.com/file/d/1-lcEl5irQLTuGdVoUrz0gnHJ39zx_Prt/view', 'Erik Seyti Johansson (IFPR), Willian Nalepa Oizumi (IFPR)', 2018, 'Resumo'),
(73, 'Utilizando software livre para implementar serviços de IPS (Intrusion Prevention System) e IDS (Intrusion Detection System) em um cenário virtualizado', 'https://drive.google.com/file/d/1K7J_8Rlf9-LhBY-ZlT8SoHBTCxRBs-pl/view', 'João Paulo de Barros (IFPR), André Ricardo Zavan (IFPR), Eduardo Henrique Molina Cruz (IFPR)', 2018, 'Resumo'),
(74, 'Dez Anos de Pesquisa sobre Software Inclusivo na Educação Básica: Uma Revisão de Literatura', 'https://drive.google.com/file/d/1nic07I5beelHl9W2xDmPxyhLiKZnLrHu/view', 'Cristiane Xavier (UEG), Roberto Oliveira (UEG), Eduardo Fernandes (PUC-Rio), Willian Oizumi (IFPR), Bernardo Estácio (Pesquisador Independente), Danyllo Albuquerque (UniNassau)', 2018, 'Resumo'),
(75, 'Sistema CrowdSourcing para Procura e Disponibilidade de Prestação de Serviços', 'https://drive.google.com/file/d/1dMqZpgv4fe2DKvjuw9wUCh7bNDdWSd8f/view', 'Lucas Dias Correia (IFPR), Giovani Siqueira (IFPR), Késsia Rita da Costa Marchi (IFPR), Rafael Henrique Dalegrave Zottesso (IFPR)', 2018, 'Resumo'),
(76, 'O Desenvolvimento de Aplicativo para o Ensino da Matemática: Dominó Matemático', 'https://drive.google.com/file/d/1QaRbNdWXUZHWdwnec8MgZZW7s8YDSgGg/view', 'Raquel dos Santos de Oliveira (IFPR), Ângela Fontana Marques (IFPR), Késsia Rita da Costa Marchi (IFPR)', 2018, 'Resumo'),
(77, 'A tecnologia mobile a favor da segurança de crianças e adolescentes: o processo de desenvolvimento de um aplicativo de geolocalização e rastreamento', 'https://drive.google.com/file/d/1FJsbSKySbubrrTwzkB50-U5OJjkc3CLu/view', 'Ederson dos S. C. de Oliveira (IFPR), Eduardo H. M. Cruz (IFPR)', 2018, 'Resumo'),
(78, 'Avaliação de Software no Ensino de Química', 'https://drive.google.com/file/d/10XJhLprv_FHo_ZTaN5Dnkr8GP1SwXfYs/view', 'Tamires dos Santos de Lima (IFPR), Débora de Castro Garrido (IFPR), Ana Carolina Arenhardt Tomaz Bialetzki (IFPR), Vanessa Masteguim da Silva (IFPR)', 2018, 'Resumo'),
(80, 'SGC - Sistema para Gestão Comercial de Micro Empresa Utilizando Java para Web e Primefaces', 'https://drive.google.com/file/d/1ufh_HE6Bcx_DEGp8VlI_uyuZezp-5YbU/view', 'Lucas Gontijo dos Santos (IFPR), Rafael Henrique Dalegrave Zotteso (IFPR)', 2018, 'Resumo'),
(81, 'SIGRE - Sistema Para Gerenciamento de Restaurantes', 'https://drive.google.com/file/d/1qqt5MnosUpi2s0dWNqIGsFjgRV2QFRbD/view', 'Junior de Oliveira Araujo (IFPR), Tomas dos Santos (IFPR), Giovani Siqueira (IFPR), Lucas Dias Correia (IFPR), Willian Nalepa Oizumi (IFPR)', 2018, 'Resumo'),
(82, 'Desenvolvimento de aplicativo para Auxiliar o ensino de trigonometria: Aplicado à triângulos quaisquer e seus ângulos', 'https://drive.google.com/file/d/1n1mOakHnM_-3-3Gbqe_rXF65FVikbcCw/view', 'Matheus Gabriel Fugisaki Maciel (IFPR), Angela Fontana Marques (IFPR), Késsia Rita da Costa Marchi (IFPR)', 2018, 'Resumo'),
(83, 'Sistema de Gestão Comercial Web para Automatização dos Processos Empresariais', 'https://drive.google.com/file/d/1T97-Y8xQjyy9a9P8wqY8P30505VTzGqL/view', 'Leandro Gontijo dos Santos (IFPR), Frank Willian Cardoso de Oliveira (IFPR)', 2018, 'Resumo'),
(84, 'Sistema de Gerenciamento De Inventário De Bens Móveis', 'https://drive.google.com/file/d/1FQIQacOJYl4CXwPaoYe3f1NvlUbXeBZN/view', 'Adriel Carlos Dias (IFPR), André Ricardo Zavan (IFPR), Frank Willian Cardoso de Oliveira (IFPR), Luis Guilherme de Jesus Gomes (IFPR)', 2018, 'Resumo'),
(85, 'Prevenindo Pragas-de-Solo no Nordeste Goiano: Um Sistema de Baixo-Custo para Monitorar Temperatura e Umidade do Solo', 'https://drive.google.com/file/d/1xxn910G0D531dIHvi6PCwctECqh9BQuH/view', 'Lorrany Oliveira (UEG), Eduardo Filho (FSP), Roberto Oliveira (UEG), Eduardo Fernandes (PUC-Rio), Danyllo Albuquerque (UniNassau), Nilton Bellizzi (UEG), Elves e Silva (FSP) e Mateus Lima (FSP)', 2018, 'Resumo'),
(86, 'Sistema de Gestão para Eventos Culturais e Submissão de Artigos', 'https://drive.google.com/file/d/1nOhNVie5P3Jh5ePFD8jY7uzByEtN7kMG/view', 'Douglas Domingos de Souza (IFPR), Késsia Rita da Costa Marchi (IFPR)', 2018, 'Resumo'),
(87, 'Ferramenta de auxílio à  organização de atividades escolares', 'https://drive.google.com/file/d/17jb-YgjqYLym4zBF0ir6yOMxwjzP-rLu/view', 'Cristhian da Silveira Maia (IFPR), Rafael H. D. Zottesso (IFPR)', 2019, 'Artigo'),
(88, ' Sobre o Perfil e as Motivações de Voluntários do StackOverflow em Português', 'https://drive.google.com/file/d/1BaOjdccTxjxh1tRfUmEKc3k6jWe-LLxB/view', 'Angélica Sayuri Mizutani (IFPR), Flavio Lucas Fernandes (IFPR), Willian Nalepa Oizumi (IFPR), Frank Willian Cardoso de Oliveira (IFPR), André Ricardo Zavan (IFPR)', 2019, 'Artigo'),
(89, ' Desenvolvimento de uma biblioteca de Ícones para a programação Web', 'https://drive.google.com/file/d/1cGRG6lriVYLr2MRAzxhVZg7MZaW-9gY0/view', 'Michel Robaskiewicz Ferreira da Silva (IFPR), Rafael Henrique Dalegrave Zottesso (IFPR)', 2019, 'Artigo'),
(90, 'Proposta de um Modelo de Procedimento de Ensino como Estratégia Auxiliadora no Processo de Ensino e Aprendizagem de Informática para Idosos', 'https://drive.google.com/file/d/1lYwcRnAYsjoOg8gP08zuArggKXNpoTpH/view', 'Gabriela Gonçalves Barbosa (IFPR), André Ricardo Zavan (IFPR)', 2019, 'Artigo'),
(91, 'Protótipo de Automação de uma Estação para Tratamento de Água da Chuva', 'https://drive.google.com/file/d/18P-y_JoWa7tC0RztVO5uBOMg6HR9xVcr/view', 'Diego N. S. da Silva (IFPR), Ricardo D. Marques (IFPR), Alexandre da S. Avincola (IFPR), Daniela E. Flôr (IFPR), Eduardo H. M. da Cruz (IFPR)', 2019, 'Artigo'),
(92, 'O uso e impacto da tecnologia na terceira idade', 'https://drive.google.com/file/d/1cXIdhMXCU6gBFObxhFkugsf-V_waJ4m1/view', 'Dianna Aparecida Faust (IFPR), André Ricardo Zavan (IFPR)', 2019, 'Artigo'),
(93, 'Do SCRUM a Gastronomia: Um framework adaptado para eventos gastronÃ´micos', 'https://drive.google.com/file/d/1b11OY9ZmyXB1Gz-uM_OOguAVYbtomFI5/view', 'Adler Mateus Cachuba (IFPR), Elisariane Barbosa Santos (IFPR), André Ricardo Zavan (IFPR)', 2019, 'Resumo'),
(94, 'SCRUM para trabalhos individuais: Aplicando o framework em projetos TCC direcionado ao desenvolvimento de software', 'https://drive.google.com/file/d/1KwvOTCWggxdrG8tuJ0VtlEqh0RMy0G4W/view', 'Adler Mateus Cachuba (IFPR), Elisariane Barbosa Santos (IFPR), André Ricardo Zavan (IFPR)', 2019, 'Resumo'),
(95, 'Realidade Aumentada no Processo Educacional', 'https://drive.google.com/file/d/1p1UYd4UHEmvVFh_ezN8RoK2gkd5pdNZM/view', 'Maycon Willian Alves da Silva (IFPR), Gabriel Moya Nascimento (IFPR), Fabiano Utiyama (IFPR)', 2019, 'Resumo'),
(96, ' O uso de TIC’s nos processos de Ensino e Aprendizagem e o Desenvolvimento de um Ambiente Colaborativo de Aprendizagem aplicados no IFPR – Campus Paranavaí', 'https://drive.google.com/file/d/1XIDBCvZAHMsKzmbB5RysAzGYpzzLVUzh/view', 'Henrique Silva (IFPR), Herika Coutinho (IFPR), Késsia Marchi (IFPR)', 2019, 'Resumo'),
(97, 'Sororidade: um aplicativo de combate ao Feminicídio', 'https://drive.google.com/file/d/10_gBH1URKHow9Jf3bo6SpzuwnqT-qgTd/view', 'Dianna Faust (IFPR), Herika Coutinho (IFPR), Hélio Kamakawa (IFPR), Sérgio Alexandre dos Santos (IFPR)', 2019, 'Resumo'),
(98, 'VendeVest: Solução Mobile para Gestão de Vendas para Microempreendedores', 'https://drive.google.com/file/d/1lEQuiEc5llf7GBhqAr5IPjK5dBtlKIGD/view', 'Eduardo A. Cruz Junior (IFPR), Frank Willian Cardoso de Oliveira (IFPR)', 2019, 'Resumo'),
(99, 'SISMEAQ - Sistema Mobile para Ensino e Aprendizagem de Química', 'https://drive.google.com/file/d/19LNSmhUxNZIcaKbuDhgGslpjtD1hypsn/view', 'Arielle Andressa Alves (IFPR), Rodolfo Ricken do Nascimento (IFPR), André Ricardo Zavan (IFPR)', 2019, 'Resumo'),
(100, 'Segurança dos Dados nas Cidades do Futuro', 'https://drive.google.com/file/d/1mREVTkk9WP00kfvmFJFow5CUopPY6Krh/view', 'Ana Cassia Moura (IFPR), Willian Nalepa Oizumi (IFPR)', 2019, 'Resumo'),
(101, 'Blank: protótipo para escaneamento de quadros brancos', 'https://drive.google.com/file/d/1E1UcdgdRhFx7mhTtpLdCARPgng1jcPJb/view', 'Ian Luca Martins de Camargo (IFPR), Késsia Rita Costa Marchi (IFPR)', 2019, 'Resumo'),
(102, 'Franx: Um Protótipo para o Ensino de Frações', 'https://drive.google.com/file/d/11K1SaIeFyOhN9qeQcrNUTAJwJZV3UyMj/view', 'André Luiz Gonçalves Larrosa (IFPR), Késsia Rita da Costa Marchi (IFPR)', 2019, 'Resumo'),
(103, 'Comparando ferramentas de virtualização Oracle VM Virtualbox,VMware e QEMU', 'https://drive.google.com/file/d/1TuUKwm2mKynl00LftJbmTmir5q8R6_zq/view', 'Yuri Whinnycios Apolinario (IFPR), André Ricardo Zavan (IFPR)', 2019, 'Resumo'),
(104, ' Etnografia para identificação de requisitos de um aplicativo móvel de controle aviário', 'https://drive.google.com/file/d/12iWj9w1bzZmDai3VgNtLFZy-Wr_CkbP-/view', 'Felipe Batista Giovanini (IFPR), Guilherme Azevedo Santos (IFPR), Leandro Mazute (IFPR), Hélio Toshio Kamakawa (IFPR), Willian Nalepa Oizumi (IFPR)', 2019, 'Resumo'),
(105, 'Game Engine Löve: um levantamento do Ambiente Integrado de Desenvolvimento existentes', 'https://drive.google.com/file/d/1qawMTu_NMjGYYjYfbpB3V8J3_yWj84XJ/view', 'Guilherme Azevedo Santos (IFPR), Felipe Batista Giovanini (IFPR), Leandro Mazute (IFPR), Hélio Toshio Kamakawa (IFPR), Willian Nalepa Oizumi (IFPR)', 2019, 'Resumo'),
(106, 'Tecnologia da Informação para a Melhoria do Processo de Gestão de Entregas', 'https://drive.google.com/file/d/10-leWTfoSPQFYAqxiIXZMM-_oQ4hJqt_/view', 'Leandro Mazute (IFPR), Felipe Batista Giovanini (IFPR), Guilherme Azevedo Santos (IFPR), Hélio Toshio Kamakawa (IFPR), Willian Nalepa Oizumi (IFPR)', 2019, 'Resumo'),
(107, 'Criação literária no ciberespaço: fanfictions', 'https://drive.google.com/file/d/1K4PR5COaKNw5o1R5hoI3Y772n-LDjRtM/view', 'Christie Szwako-Bellini (IFPR), Jéssica de Cássia Pereira (IFPR), Gabriela Fujimori da Silva (IFPR)', 2019, 'Resumo'),
(108, 'A utilização de metodologias, práticas e métricas Ágeis no processo de desenvolvimento de software na região sul do Brasil: Uma revisão sistemática', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=paper_2.pdf', 'Ana Paula Fabrini; André Ricardo Zavan;', 2017, 'Artigo'),
(109, 'Um estudo sobre a personalização do ensino com a colaboração de recursos audiovisuais e ambientes interativos para a aprendizagem da disciplina de história - resultados preliminares', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=paper_3.pdf', 'Alexandre Amaury de Mello Neto; Lucas de Melo Andrade; Késsia Rita da Costa Marchi;', 2017, 'Artigo'),
(110, 'RP-G2 - Uma Aventura na Educação', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=paper_8.pdf', 'Diego dos S. Rodrigues;  André Ricardo Zavan;', 2017, 'Artigo'),
(112, 'Sistemas Operacionais Open Source Usados na Computação Forense', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=paper_10.pdf', 'Renan Beck Oliveira; André Ricardo Zavan;', 2017, 'Artigo'),
(113, 'Kloss: Ferramenta Gráfica Para o Ensino de Algoritmos de Ordenação', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=paper_19.pdf', 'Karina Mayumi Johansson; Daniela Eloise Flôr;', 2017, 'Artigo'),
(114, 'Dispensador de Medicamentos Automatizado', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=paper_11.pdf', 'Jamilson Gomes Moreira Junior; Daniela Eloise Flôr;', 2017, 'Artigo'),
(115, 'Alternativa para Aferir Medidor de Energia Eletrica', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=paper_12.pdf', 'Raphael Correa Vicentino; Daniela Eloise Flôr;', 2017, 'Artigo'),
(116, 'Desenvolvimento de Sistema Web e Desktop para Controle de Presença Utilizando a Biometria', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=paper_18.pdf', 'Igor Rafael Lourenço Martins; Frank Willian Cardoso de Oliveira;', 2017, 'Artigo'),
(117, 'A Tecnologia da Informação e Comunicação na Química - Análise Centesimal', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=paper_21.pdf', 'Arielle A. Alves; Rodolfo R. do Nascimento; Eduardo A. da C. Junior; Vanessa G. A. Olher; Frank W. C. de Oliveira; Angela F. Marques; Késsia R. da C. Marchi;', 2017, 'Artigo'),
(118, 'Recursos de tecnologia da informação como apoio ao processo de ensino e aprendizagem de citologia', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=paper_23.pdf', 'Larissa Paschoalin; Luana Polido; Luiz H. Alves; Pedro A. Passos; Thiago de Freitas; Rafael H. D. Zottesso; Angela F. Marques; Michele B. Santos; Márcia R. Royer; Kessia R. Da C. Marchi;', 2017, 'Artigo'),
(119, 'Modelagem de processo de software: uma visão prática', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=SETIF_2017_paper_1.pdf', 'Ana Paula Fabrini; André Ricardo Zavan; Erik Seyti Johansson; Jamilson Gomes Moreira Junior; Maria Carolina Silva Vanuchi;', 2017, 'Resumo'),
(120, ' GRH-web – Sistema De Gestão De Folha De Pagamento Para Micro Empregador Individual', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=SETIF_2017_paper_4.pdf', 'Juliano Zagati; Hélio Toshio Kamakawa;', 2017, 'Resumo'),
(121, 'Elevando a Qualidade Estrutural do Software a Partir da Melhoria das Habilidades e Aptidões de Desenvolvedores de Sistemas de Software', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=SETIF_2017_paper_5.pdf', 'Paulo Brandão; Roberto Oliveira; José Júnior; Danyllo Albuquerque; Cíntia Souza;', 2017, 'Resumo'),
(122, 'Uma Investigação Sobre a Adoção de Sistemas de Software Inclusivos Nas Escolas do Nordeste Goiano', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=SETIF_2017_paper_6.pdf', 'Cristiane Xavier; Cí­ntia Souza; José Júnior; Roberto Oliveira; Eduardo Fernandes;', 2017, 'Resumo'),
(123, 'Análise de Desempenho de Scanners de Vulnerabilidades', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=SETIF_2017_paper_7.pdf', 'Willian Cligor de Souza de Oliveira; André Ricardo Zavan;', 2017, 'Resumo'),
(124, 'Alimentador automático para animais domésticos', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=SETIF_2017_paper_9.pdf', 'Adson Cavalcante Cândido; Rafael Henrique Dalegrave Zottesso;', 2017, 'Resumo'),
(125, 'Sistema de Pedido de Diárias e Passagens - SPDP', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=SETIF_2017_paper_15.pdf', 'Bruno Silva Perini; Frank W. C. de Oliveira;', 2017, 'Resumo'),
(126, 'Solução Computacional Para Gestão de Pequenas Propriedades Leiteiras', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=SETIF_2017_paper_16.pdf', 'Mauricio de Assis; Frank Willian Cardoso de Oliveira;', 2017, 'Resumo'),
(127, 'Energia solar com sistema off-grid para uso residencial', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=SETIF_2017_paper_17.pdf', 'Leonardo de Sousa Cardozo; Daniela Eloise Flôr;', 2017, 'Resumo'),
(128, 'Uma Oportunidade de Aprendizagem por meio da Tecnologia da Informação e Comunicação no Ensino de Matemática para o Conteúdo de Sistemas Lineares e Matrizes – SISTEMATRIZ', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=SETIF_2017_paper_20.pdf', 'Ítalo Gavassi dos Santos; Gabriel Frotté Goldin; Késsia Rita Da Costa Marchi; Angela Fontana Marques;', 2017, 'Resumo'),
(129, 'Ensino de Frações: uma proposta interdisciplinar entre a disciplina de matemática e as disciplinas técnicas do curso de informática', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=SETIF_2017_paper_22.pdf', 'André Luiz Gonçalves Larrosa; Lucas Soares Vieira; Késsia Rita Da Costa Marchi; Ângela Fontana Marques;', 2017, 'Resumo'),
(130, 'O Desenvolvimento Web Impulsionando Histórias', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=SETIF_2017_paper_24.pdf', 'Eduardo Augusto da Cruz Junior , Gabriela Gonçalves Barbosa , Arielle Andressa Alves , Késsia R. C. Marchi , Frank W. C. O , André R. Z, Rafael H. D. Zotesso, Rafael Petermann', 2017, 'Resumo'),
(131, 'Aplicação Mobile Pertencente ao Dispensador de Medicamentos', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=Maria-Fatima.pdf', 'Maria de Fátima Ferreira; Késsia Rita da Costa Marchi.', 2016, 'Artigo'),
(132, 'Avaliação de Projetos Arquiteturais Baseados em Busca', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=Erik.pdf', 'Erik Seyti Johansson; Willian Nalepa Oizumi.', 2016, 'Artigo'),
(133, 'Desenvolvimento de um Aplicativo para Aprendizagem Móvel', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=Rafael.pdf', 'Rafael Zanco Dadalto; Daniela Eloise Flôr; Frank Willian Cardoso de Oliveira.', 2016, 'Artigo'),
(134, ' Dispensador de Medicamentos: Comunicação entre a Plataforma Android e Arduino', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=Rubens.pdf', 'Rubens Vianna; André Ricardo Zavan.', 2016, 'Artigo'),
(135, ' Ferramentas Computacionais Aplicadas ao Ensino da Matemática na Educação Básica', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=Claudio.pdf', 'Claudio Anderson Denadai; Daniela Eloise Flôr; Ângela Fontana Marques.', 2016, 'Artigo'),
(136, 'Implementação de Módulos Web e Web Service Aplicados no Processo de Ensino-Aprendizagem', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=Fernando.pdf', 'Fernando Moreira Borges Júnior; Daniela Eloise Flôr; Frank Willian Cardoso de Oliveira.', 2016, 'Artigo'),
(137, 'Scrum Hero: Gamificando o Framework Scrum', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=Jamila.pdf', 'Jamila Peripolli Souza; André Ricardo Zavan;  Daniela Eloise Flôrr.', 2016, 'Artigo'),
(138, ' SIGPRÉ-NATAL: Aprimorando a Gestão Pré-Natal em Unidades Básicas de Saúde', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=Eduardo.pdf', 'Eduardo Henrique Ferreira Lima; Hélio Toshio Kamakawa; Frank Willian Cardoso de Oliveira;', 2016, 'Artigo'),
(139, 'Software para Gerenciamento de Atividades Complementares', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=Maria-Carolina.pdf', 'Maria Carolina Silva Vanuchi; Frank Willian Cardoso de Oliveira; Daniela Eloise Flôr; Késsia Rita da Costa Marchi.', 2016, 'Artigo'),
(140, 'Utilizando Software Livre para Implementar uma Política de Segurança em uma Instituição Acadêmica', 'https://www.dropbox.com/sh/c6lyiec5eiv9l9u/AAB0qzJ0eA3BCn--vTAKggp6a?dl=0&preview=Jo%C3%A3o-Paulo.pdf', 'João Paulo De Barros;  André Ricardo Zavan.', 2016, 'Artigo'),
(141, 'Sistemas de Software Inclusivos: Estudo preliminar de uma  realidade primordial nas escolas do campo', 'https://drive.google.com/file/d/1sonC5avjLYijISx8nSHs3M_0vfSVeS-e/view?usp=sharing', 'Isabela Silva, Cristiane Xavier, Givanilde Oliveira, Roberto Oliveira', 2020, 'Resumo'),
(142, 'Aplicabilidade da Inteligencia de Negócios na Gestão Empresarial', 'https://drive.google.com/file/d/1M7emWqcIHRKu8Jb-N5G2aiqmc_c8Kt3d/view?usp=sharing', 'Lucas de Marmo Souza, André Ricardo Zavan', 2020, 'Resumo'),
(143, 'Sistema de Controle de Endemias para o Município de  Marilena-PR', 'https://drive.google.com/file/d/1C8pTAWFggiBJYXi8upL4pvK_lmt8jwgJ/view?usp=sharing', 'Luiz Gustavo Francisco, Frank Willian Cardoso de Oliveira', 2020, 'Resumo'),
(144, 'Molina Store: Plataforma E-Commerce para Supermercado', 'https://drive.google.com/file/d/1gxao28VQIWxqZvwJDGr2RSWTshZmo5UB/view?usp=sharing', 'Santiago Molina, Willian Nalepa Oizumi', 2020, 'Resumo'),
(145, 'Karen Candy’s: Sistema de Gerenciamento para Docerias', 'https://drive.google.com/file/d/19qO5eGbIRmFLaEX4mpdXpbQKKSacWkjT/view?usp=sharing', 'Karen Cristina Violim, Frank Willian Cardoso de Oliveira', 2020, 'Resumo'),
(146, 'Relato de experiência sobre a realização de competição de programação online durante a pandemia de COVID-19', 'https://drive.google.com/file/d/1F3F_0pcZFBQaNkdy7ahqW6xfhGJ-u3gP/view?usp=sharing', 'Matheus J. Cardoso, Pedro A. Valério  ,  Matheus H. M. Santos, Marcelo F. Terenciani', 2020, 'Resumo'),
(147, 'Modelo de Procedimentos para Elaboração de TCC com ênfase em Desenvolvimento de Software', 'https://drive.google.com/file/d/1TUXEPUJCt1uJAgzsWPhQS7-qb5VhykZW/view?usp=sharing', 'Elisariane Barbosa Santos, André Ricardo Zavan', 2020, 'Resumo'),
(148, 'Sistema Automatizado de Baixo Custo com o Propósito de Controlar  Variáveis Climáticas na Produção Avícola', 'https://drive.google.com/file/d/1-SnbxFVUDfsYo3Aahc0vP9WYjxjwcmBL/view?usp=sharing', 'Dayana Gonçalves dos Santos, Roberto Oliveira, Givanilde Oliveira,  Carla Hanau, Cleiton Silva', 2020, 'Resumo'),
(149, 'Sistema computacional para apoiar o gerenciamento de um grupo de  pesquisa geograficamente distribuído', 'https://drive.google.com/file/d/1ZSt9plxwSBL8yij0Y-5mXYBmOuBcFa5P/view?usp=sharing', 'Vinicius Pereira de Melo, Roberto Oliveira, Givanilde Oliveira', 2020, 'Resumo'),
(150, 'Comparação entre uma dieta vegetariana e uma dieta onívora otimizadas com o auxílio da programação linear e da linguagem de programação Julia', 'https://drive.google.com/file/d/1QLnniVuZfBd95ACe7GcpzH3M3LCHGJ3l/view?usp=sharing', 'Cecília Osteti Furtado, Luciana Yoshie Tsuchiya', 2020, 'Resumo'),
(151, 'Dados Abertos e Conectados: Uma breve descrição', 'https://drive.google.com/file/d/13VK_atEp4_pSsHeAtojPZkTQ_PArg9uL/view?usp=sharing', 'André Luiz G. Larrosa, Rafael S. Silva, Késsia Rita da Costa Marchi', 2020, 'Resumo'),
(152, 'Aplicativo de orientação e mobilidade para pessoas cegas', 'https://drive.google.com/file/d/11_wo5sql8pnkAB713gIL5A8MGkBqCxGJ/view?usp=sharing', 'Lucas N. Lins, Marcelo F. Terenciani', 2020, 'Resumo'),
(153, 'Otimização da distância mínima entre mesas e pessoas em  estabelecimentos do ramo da alimentação', 'https://drive.google.com/file/d/1KArxqsR8vjMBh9USy5qRU8ydJab-7wHR/view?usp=sharing', 'Luciana Y. Tsuchiya, Emerson V. Castelani, Francisco N. Calmon Sobral', 2020, 'Artigo'),
(154, 'Melhorando o Acesso a Informação Semafórica da Cidade de Paranavaí Utilizando  a Geolocalização', 'https://drive.google.com/file/d/14A0azTd_2gKEcya72HOueKQ_spujRYCH/view?usp=sharing', 'Maurício De Assis, Frank Willian Cardoso de Oliveira', 2020, 'Artigo'),
(155, 'Sistema WEB para Gestão de Vendas e Aplicativo Android para a Realização de Pedidos em uma Fábrica de Cerveja Artesanal', 'https://drive.google.com/file/d/1UkJNppN2UjlSqVWfZBZa1b288A0uRjiy/view?usp=sharing', 'Diogo Tuler Forlani, Rafael Henrique Dalegrave Zottesso', 2020, 'Artigo'),
(156, 'Interface para automação residencial utilizando controle por gestos', 'https://drive.google.com/file/d/1i9ogksD0drZbZkuCsIY4kFCVlPRnGhbm/view?usp=sharing', 'Andre Garcia Alves, Eduardo Henrique Molina da Cruz', 2020, 'Artigo'),
(157, 'RASPCAR – Carro Robótico Guiado Remotamente', 'https://drive.google.com/file/d/1V4tO-uTJbh-kPq9JMZkTPLcK8SMCTWAR/view?usp=sharing', 'Gustavo de O. Guidetti, Arthur V. M. Sabatino, Daniela Eloise Flôr, Eduardo H. M. Cruz', 2020, 'Artigo'),
(158, 'MARVIN – Protótipo de Carro Autônomo para Ambiente Industrial', 'https://drive.google.com/file/d/1PurxMdm2bwhbMo2PobZKUdDVO7EwDrmA/view?usp=sharing', 'Arthur V. M. Sabatino, Gustavo de Oliveira Guidetti, Daniela Eloise Flôr, Eduardo H. M. Cruz', 2020, 'Artigo'),
(159, 'Projeto Impulso: Extensão e Educação por meio de Tecnologias da Informação e Comunicação', 'https://drive.google.com/file/d/1VlBAtFJU-3g8lZiUBCkGr7oHcIksLBij/view?usp=sharing', 'Vitor T. Oliveira, Leonardo R. Fernandes, Matheus G. S. Souza,  Rafael S. Silva, André R. Zavan, Ayslan T. Possebom,  Frank W. C. Oliveira, Késsia R. da C. Marchi', 2020, 'Artigo'),
(160, 'Desenvolvimento de um Protótipo de Semáforo Inclusivo', 'https://drive.google.com/file/d/1UOdxL30qtLNAVDuAo1-50158gC3w5e-F/view?usp=sharing', 'Jaguanhara Gomes de Oliveira Neto, Eduardo H. M. Cruz', 2020, 'Artigo'),
(161, 'A ciência da informação e a ciência da computação desenvolvendo a recuperação da informação ', 'https://drive.google.com/file/d/1Mqa9TVX-vmX5Jy3OAc9cmWU3r7rYZO_W/view?usp=sharing', 'Késsia R. da C. Marchi , Ayslan T. Possebom', 2020, 'Artigo'),
(162, 'GeladaSystem: Uma gestão informatizada para sorveterias', 'https://drive.google.com/file/d/1UgfA5Rx1tFPHsZwq2jXs3HWWIomCdHrB/view?usp=sharing', 'Lucas A. S. Florentino, Gabriela F. Silva, Ayslan T. Possebom', 2020, 'Artigo'),
(163, 'Sistema para Controle de Veículos e Visitantes', 'https://drive.google.com/file/d/1m6WwmVF5pCE_LumMkjONMXgl6qgUHppz/view?usp=sharing', 'Maycon Willian Alves da Silva, Ayslan Trevizan Possebom', 2020, 'Artigo'),
(164, 'Metodologias Contemporâneas em Educação a Distância', 'https://drive.google.com/file/d/16aa_upqVUEAKQHit1l0VA60vTz9JdTdU/view?usp=sharing', 'Elisangela A. G. Possebom, Ayslan T. Possebom', 2020, 'Artigo'),
(165, 'Incentivo para Meninas e Mulheres nas Áreas de Exatas e Engenharias pelo Projeto MannaAcademy', 'https://drive.google.com/file/d/1wR6sVv3zRRYU5O-VNlxyZgSJjJTfzp23/view?usp=sharing', 'Ana Paula Vieira Guimarães, Daniela Eloise Flôr, Giovanna Ayane Iriguchi, Lahra  Camylle de Carvalho Silva, Linnyer Beatrys Ruiz Aylon', 2021, 'Resumo'),
(166, 'Relato de Experiência Parcial do Desenvolvimento de um Sistema Computacional para a Gestão da Propriedade  Intelectual do IFPR', 'https://drive.google.com/file/d/1DmnEIIwWB7bHZWGHe240Y-YuHfOLSxS1/view?usp=sharing', 'Cristian Ceccon, Matheus G. S. de Souza, Natani G. B. Cavalcante, Rafael S. Silva,  Frank W. C. de Oliveira', 2021, 'Resumo'),
(167, 'IFunções: um aplicativo para o ensino/aprendizagem de matemática com base nas diferentes representações semióticas das funções', 'https://drive.google.com/file/d/1p-HAW_72BKelOBMfAAztTfOBJqm6xEYc/view?usp=sharing', 'Azuaite A. Schneider, Lara G. Roque, Lucas F. G. Ferreira, Viviane M. S. Fuly', 2021, 'Resumo'),
(168, 'Software BioMais (versão 2.0) e sua ressignificação para o ensino  e aprendizagem de Biologia', 'https://drive.google.com/file/d/16t5It3afF_jH1C1NPHDt8oo_OBoIrWD4/view?usp=sharing', 'Gabriel da Silva de Oliveira, João Pedro Ferreira de Souza, Gustavo Orelio, Caroline  Oenning de Oliveira, Frank Willian Cardoso de Oliveira, Daniela Eloíse Flôr', 2021, 'Resumo'),
(169, 'O Uso do Web Scraping', 'https://drive.google.com/file/d/1xHbXYUetEO6v5IkjmMf1JFStK8Gg4v5O/view?usp=sharing', 'Vitor T. Oliveira, Ayslan T. Possebom', 2021, 'Resumo'),
(170, 'Uso de Data Science para o auxiliar no desenvolvimento de um Observatório da Covid-19 no município de Paranavaí-PR', 'https://drive.google.com/file/d/1Z7WSUhPMGJl8qXqGzH_726sTSxCPkW6h/view?usp=sharing', 'Henrique G. Oliveira, Angélica S. Mizutani, Flavio L. Fernandes, Daniela E. Flor, Frank W. C. Oliveira, Camila L. Clozato, João M. B. S. Maciel, Eduardo H. M. Cruz, Linnyer B. R. Aylon', 2021, 'Resumo'),
(171, 'MoniCare: uma solução em IoT para o aux?lio no monitoramento de pacientes com COVID-19 em atendimento  domiciliar', 'https://drive.google.com/file/d/15Lt7ducBFO7pAemZIYL_1yHcyqSitFM-/view?usp=sharing', 'Flavio L. Fernandes, Angélica S. Mizutani, Henrique G. Oliveira, Daniela E. Flor, Frank W. C. Oliveira, Camila L. Clozato, João M. B. S. Maciel, Eduardo H. M. Cruz, Linnyer B. R. Aylon', 2021, 'Resumo'),
(172, 'Programação com Internet das Coisas: um relato de experiência sobre a realização de um curso de extensão  ofertado pelo IFPR Campus Paranavaí', 'https://drive.google.com/file/d/1Zd4JUsvWdkg6g1j2Z5mfQgFzn7LVCmBI/view?usp=sharing', 'Carla S. Oliveira, Ayslan T. Possebom, Daniela E. Flôr, Eduardo H. M. Cruz', 2021, 'Resumo'),
(173, 'Análise e Desenvolvimento de um Sistema para Gestão de Associações: uma aplicação pratica da Engenharia de Software', 'https://drive.google.com/file/d/1oCatyZLOJg7JIEHvzd4OAPoR2UirZkev/view?usp=sharing', 'Raquel S. Oliveira, Rafaela C. Silva, Frank W. Cardoso, Marcelo F. Terenciani', 2021, 'Artigo'),
(174, 'Relato a Respeito da Análise e Projeto de um Sistema para Gestão de Comunicados', 'https://drive.google.com/file/d/1lARD6GVqBSWFMVx2tXBVpu6XGFddw-Yk/view?usp=sharing', 'Franciel R. F. Santos, Mateus B. Garcia, Matheus J. Cardoso, Hélio T. Kamakawa, Marcelo F. Terenciani', 2021, 'Artigo'),
(175, 'Aplicabilidade da Inteligência de Negócios na Gestão Empresarial', 'https://drive.google.com/file/d/13Gn_Yl7RZ_RHtE9zk4WG9Ph58izswCje/view?usp=sharing', 'Lucas de Marmo Souza, André Ricardo Zavan', 2021, 'Artigo'),
(177, 'Sobre o Desenvolvimento de um Projeto de Software:  Experiências e Resultados', 'https://drive.google.com/file/d/1EIE0nOYE8Qco8JVGJUcZ38Lb6XvKfr95/view?usp=sharing', 'Cristian Ceccon, João Gabriel de Lima, Rafael Matheus Bicario, Marcelo  Figueiredo Terenciani, Hélio Toshio Kamakawa, Willian Nalepa Oizumi', 2021, 'Artigo'),
(178, 'Será que Roda? Experiências de jogabilidade em diferentes sistemas computacionais', 'https://drive.google.com/file/d/15IRDnJSkKxxJA1n22FNJykHDfp5qYk9d', 'João Lucas P. Oliveira, Ariel M. Rodrigues, Rafael H. D. Zottesso, Ayslan T. Possebom', 2022, 'Artigo'),
(180, 'Implementação de jogos com PyGames: Proposta de Desenvolvimento de Jogo da Serpente', 'https://drive.google.com/file/d/19ElwjRR_49ITv1mYl2yfiC-GQcGBN7Ul', 'Luis Ricardo De Souza, Ayslan Trevizan Possebom', 2022, 'Artigo'),
(181, 'Uma análise comparativa de três estruturas de dados primordiais: vetor, lista e tabela hash', 'https://drive.google.com/file/d/1S46S-sp5Ygqs2zGdK5KVGOT6QBsHw7Lw', 'Flavio L. Fernandes, Eduardo H. M. da Cruz', 2022, 'Artigo'),
(182, 'Algoritmo Genético ou Pessoas: quem consegue terminar a fase primeiro?', 'https://drive.google.com/file/d/1GH1ckZafCPutgVQAEEHwbOaif7m5ImAE', 'Rafael Monteiro Zancanaro, Ayslan Trevizan Possebom', 2022, 'Artigo'),
(183, 'O uso do RPG como um exercício de sociabilidade e criatividade', 'https://drive.google.com/file/d/1fnwBC5PqbFcNI7Q72OKS1tFScKORsS8W', 'Iago Gonçalves de Meira, Taynara Cerigueli Dutra', 2022, 'Resumo'),
(184, 'FYTNEZ - Aplicativo Multiplataforma para gerenciamento de rotina fitness', 'https://drive.google.com/file/d/10d1BzjHCGqUlQNO1nfvz372y3PpK-wJ3', 'Gustavo de O. Guidetti, Jonatas da S. de Oliveira, Santyero M. B. dos Santos, Frank W. C. de Oliveira, Helio T. Kamakawa', 2022, 'Resumo'),
(185, 'Sistema financeiro de gerência de compra e venda de criptomoedas: CryptoWallet', 'https://drive.google.com/file/d/1uB_xFtflsOHOmJbmHqxG31e4BkJIWHBK', 'Gabriel Moya Nascimento, André Luiz Gonçalves Larrosa, Matheus Henrique de Oliveira, Frank William Cardoso, Taynara Cerigueli Dutra', 2022, 'Resumo'),
(186, 'Farma System', 'https://drive.google.com/file/d/1-emGhaf5apLxgBbtFmIM8wY-zQB-N3Il', 'Carlos Eduardo Mariano Garcia Pereira, Hélio Toshio Kamakawa', 2022, 'Resumo'),
(187, 'MoniCare – Uma solução IoT para monitoramento domiciliar de pacientes e combate à COVID-19', 'https://drive.google.com/file/d/1KxsgKNV-CqQIMfgVMm8F5gVyvv4J64LR', 'Flavio L. Fernandes, Henrique G. Oliveira, Angélica S. Mizutani, Daniela E. Flor, Frank W. C. Oliveira, Camila L. Clozato, João M. B. S. Maciel, Linnyer B. R. Aylon, Eduarda S. B. Silva, Laiza G. Silva, Luis F. Brasil, Eduardo H. M. Cruz', 2022, 'Artigo'),
(188, 'MoniCare Web – Monitorando pacientes com COVID-19', 'https://drive.google.com/file/d/1sEtStN4bGvL5TkJ9MUO18I4bXsMMQyNB', 'Henrique G. Oliveira, Flavio L. Fernandes, Angélica S. Mizutani, Daniela E. Flor, Frank W. C. Oliveira, Camila L. Clozato, João M. B. S. Maciel, Linnyer B. R. Aylon, Eduarda S. B. Silva, Laiza G. Silva, Luis F. Brasil, Eduardo H. M. Cruz', 2022, 'Artigo'),
(189, 'Uma análise comparativa entre os principais algoritmos de ordenação', 'https://drive.google.com/file/d/1dYS69lGQnjvIScEtMp-WqJeE-EtQXaGr', 'Henrique G. Oliveira, Eduardo H. M. Cruz', 2022, 'Artigo'),
(190, 'Criptografia: Certificados Digitais', 'https://drive.google.com/file/d/1xJVc0P-UzXE_OPxE_2bgyab1BmkYjdjf', 'Carla Santos de Oliveira, Rafael Sanches Silva, Renato Augusto Platz Guimarães Neto, Vitor Tavares de Oliveira, Taynara Cerigueli Dutra', 2022, 'Resumo'),
(191, 'Uma breve análise do Privacy by Design', 'https://drive.google.com/file/d/1xR5Z_VlIufw5_7KC40aZqRgJa2vVeppM', 'Aline Yuka Noguti, Eduardo Albuquerque Ribeiro,Taynara Cerigueli Dutra', 2022, 'Resumo'),
(192, 'Um sistema para Gerenciamento Escolar de Ensino Médio e Superior - GEMS', 'https://drive.google.com/file/d/13EKUiG_xrk_K6q4p9JCKNcB6VuSQPokB', 'Gustavo Oreli, Frank W. C. de Oliveira, Taynara C. Dutra', 2022, 'Resumo'),
(193, 'Sobre o desenvolvimento de um Projeto de Banco de Dados voltado à um escritório de advocacia', 'https://drive.google.com/file/d/1e2CNa4VVa0SI9N4wZb64BBOaNVWUTCdL', 'Eduardo Albuquerque Ribeiro, Hélio Toshio Kamakawa', 2022, 'Resumo'),
(194, 'Projetos de Extensão na Graduação: uma experiência profissional na Engenharia de Software', 'https://drive.google.com/file/d/16iXMDgezkWQ8C1emgn0-vD-62jZtYRXm ', 'Ayslan Trevizan Possebom, Frank Willian Cardoso de Oliveira', 2022, 'Resumo'),
(195, 'Desenvolvimento de um Sistema para Clínicas de Terapias Alternativas: Clinisys', 'https://drive.google.com/file/d/17SqINMBI3gwcExfW1lTHJlonVQ8tf4Cd', 'Igor Luigi de Oliveira, Fabiano Utiyama', 2022, 'Resumo'),
(196, 'LoveboxWeb - Sistema de gerência web de medicamentos', 'https://drive.google.com/file/d/1cAD0G32lCe7Bp03gTXL1F487fOuDXG4h', 'Angélica S. Mizutani, Eduarda S. B. Silva, Laiza G. Silva, Carlos D. S. Nunes, Luis F. Brasil, Vitor F. Uemura,\r\nRafael H. D. Zottesso, Eduardo H. M. Cruz, Daniela E. Flôr, Linnyer B. R. Aylon\r\n', 2022, 'Artigo'),
(197, 'Tecnologia Aliada à Coleta Seletiva do “e-lixo”', 'https://drive.google.com/file/d/1f0J9WeP6YqFUcLNcA8tgW48TsMDMB2Cy', 'Cintia C. de Andrade, Franciel R. F. Santos', 2022, 'Artigo'),
(198, 'Stop motion como ferramenta de ensino: criação de animações para compreensão do nível atômico/molecular das reações químicas', 'https://drive.google.com/file/d/1yq-eFxokJy_2k_XMwJF5zVZPMDE-laTP', 'Tatyane Caruso Fernandes', 2022, 'Artigo'),
(199, 'SCRUM e a GASTRONOMIA - A cultura ágil fora do cenário de desenvolvimento de software', 'https://drive.google.com/file/d/1abVGnSYKWDMOIznH8g7ufJMZHpIknsqY', 'Adler Mateus Cachuba, André Ricardo Zavan', 2022, 'Artigo'),
(200, 'Lovebox: um dispensador de medicamentos inteligente para apoio à pacientes polimedicados', 'https://drive.google.com/file/d/1mrdobsjc8a5iJ_Qpyb8Kpu1KzroFyBPM', 'Angélica S. Mizutani, Eduarda S. B. Silva, Laiza G. Silva, Carlos D. S. Nunes, Luis F. Brasil, Rafael H. D. Zottesso, Eduardo H. M. Cruz, Daniela E. Flôr, Linnyer B. R. Aylon', 2022, 'Resumo'),
(201, 'Relato de experiência sobre a realização de um curso de ferramentas tecnológicas de apoio ao ensino básico', 'https://drive.google.com/file/d/1Req-h3mZWab2bljvN0F573tyeZJLTQEf', 'Luana Gabrieli Ribas e Marcelo Figueiredo Terenciani', 2022, 'Resumo'),
(202, 'Tecnologia de Impressão 3D: uma análise de suas aplicações e impactos futuros', 'https://drive.google.com/file/d/1NqlCMAX3SlmEJ6ohc47-5ffKoqja84Hs', 'Carla S. de Oliveira, Vitor Tavares, Daniela E. Flôr, Linnyer B. R. Aylon', 2022, 'Resumo'),
(203, 'IF Connection: Uma Proposta de Ferramenta para Gestão da Comunicação no IFPR - Campus Paranavaí', 'https://drive.google.com/file/d/1jK7sCF4K8aKHYObvn3oe0iw5Lb0ApOXT', 'Raquel dos Santos de Oliveira, Marcelo Figueiredo Terenciani', 2022, 'Resumo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_institucional`
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
-- Extraindo dados da tabela `tb_institucional`
--

INSERT INTO `tb_institucional` (`id_institucional`, `texto_sobre`, `programacao`, `localizacao`, `email`, `telefone`, `data_atualizacao`, `ano`) VALUES
(1, ' <h2 class=\"pb-5 text-center\">\r\n                A Semana da Tecnologia da Informação do IFPR Campus Paranavaí (SETIF)\r\n                é um evento que acontece todos os anos na cidade de Paranavaí-PR. Além\r\n                da mostra de trabalhos, este evento conta com minicursos, palestras e\r\n                competições. Em 2022, a SETIF ocorrerá de 7 a 11 de novembro. Além das\r\n                atividades relacionadas à tecnologia da informação, dentro da\r\n                programação da SETIF ainda está previsto o IFTECH e o Show de\r\n                Talentos.\r\n            </h2>\r\n            <h2 id=\"insc\" class=\"font-weight-bold text-center pb-5 mt-5 mb-0\">\r\n                As inscrições para as palestras e mini-cursos deverão ser realizadas\r\n                por meio do Even3:\r\n                <a class=\"fw-lighter text-white text-decoration-none pb-5 mt-7\"\r\n                    href=\"https://www.even3.com.br/setif-2022/\">https://www.even3.com.br/setif-2022/</a>\r\n            </h2>', ' <div class=\"d-flex flex-column justify-content-center\">\r\n                    <div id=\"even3-widget-session\">\r\n                        <iframe class=\"rounded-3\"\r\n                            src=\"https://www.even3.com.br/widget/index?evento=setif-2022&amp;type=session&amp;lang=pt\"\r\n                            id=\"even3_session\" frameborder=\"0\" allowfullscreen>\r\n                        </iframe>\r\n                    </div>\r\n                </div>', '   <div class=\"mapa d-flex flex-row justify-content-center mb-5\">\r\n                <iframe class=\"rounded-3\" style=\"height: 650px;\"\r\n                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.1691110062343!2d-52.45651458503157!3d-23.054260884937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949296a233a74981%3A0x8aed8519780a4c71!2sIFPR%20-%20Instituto%20Federal%20do%20Paran%C3%A1%20-%20Campus%20Paranava%C3%AD!5e0!3m2!1spt-PT!2sbr!4v1685555475394!5m2!1spt-PT!2sbr\"\r\n                    frameborder=\"0\" allowfullscreen loading=\"lazy\" width=\"90%\"\r\n                    referrerpolicy=\"no-referrer-when-downgrade\"></iframe>\r\n            </div>', 'es.paranavai@ifpr.edu.br', '(44) 3482-0110', '2023-09-14', 2023);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_midia`
--

CREATE TABLE `tb_midia` (
  `id_midia` int(11) NOT NULL,
  `link` text NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_midia`
--

INSERT INTO `tb_midia` (`id_midia`, `link`, `titulo`, `ano`) VALUES
(1, 'https://tecnoif.com.br/setif/admin/uploads/bb06f0a38d4f0d65a69295365ddc12f4a7c68ca8.jpg', 'setif 2018', '2016-11-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_normas_publicacao`
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

--
-- Extraindo dados da tabela `tb_normas_publicacao`
--

INSERT INTO `tb_normas_publicacao` (`id_normas_publicacao`, `data_limite`, `data_notificacao_autor`, `data_versao_final`, `data_inicio_evento`, `data_final_evento`, `data_mostra_trabalho`, `tempo_apresentacao_resumo`, `tempo_apresentacao_artigo`, `ano`) VALUES
(1, '2023-10-10', '2023-10-24', '2023-10-31', '2023-11-07', '2023-11-11', '2023-11-09', 5, 10, 2023),
(2, '2023-10-10', '2023-10-24', '2023-10-31', '2023-11-07', '2023-11-11', '2023-11-09', 5, 10, 2023);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_topico_de_interesse`
--

CREATE TABLE `tb_topico_de_interesse` (
  `id_topico_de_interesse` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `link_imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_topico_de_interesse`
--

INSERT INTO `tb_topico_de_interesse` (`id_topico_de_interesse`, `nome`, `link_imagem`) VALUES
(1, 'Arquitetura de Computadores', './imagens/Eng.Computadores.png'),
(2, 'Arquitetura de Computadores', './imagens/Eng.Computadores.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_artigo`
--
ALTER TABLE `tb_artigo`
  ADD PRIMARY KEY (`id_artigo`);

--
-- Índices para tabela `tb_institucional`
--
ALTER TABLE `tb_institucional`
  ADD PRIMARY KEY (`id_institucional`);

--
-- Índices para tabela `tb_midia`
--
ALTER TABLE `tb_midia`
  ADD PRIMARY KEY (`id_midia`);

--
-- Índices para tabela `tb_normas_publicacao`
--
ALTER TABLE `tb_normas_publicacao`
  ADD PRIMARY KEY (`id_normas_publicacao`);

--
-- Índices para tabela `tb_topico_de_interesse`
--
ALTER TABLE `tb_topico_de_interesse`
  ADD PRIMARY KEY (`id_topico_de_interesse`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_artigo`
--
ALTER TABLE `tb_artigo`
  MODIFY `id_artigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT de tabela `tb_institucional`
--
ALTER TABLE `tb_institucional`
  MODIFY `id_institucional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_midia`
--
ALTER TABLE `tb_midia`
  MODIFY `id_midia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_normas_publicacao`
--
ALTER TABLE `tb_normas_publicacao`
  MODIFY `id_normas_publicacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_topico_de_interesse`
--
ALTER TABLE `tb_topico_de_interesse`
  MODIFY `id_topico_de_interesse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
