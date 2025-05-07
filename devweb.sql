-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 07-Maio-2025 às 18:34
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `devweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.online`
--

CREATE TABLE `tb_admin.online` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `ultima_acao` datetime NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.online`
--

INSERT INTO `tb_admin.online` (`id`, `ip`, `ultima_acao`, `token`) VALUES
(1, '::1', '2025-05-06 11:10:29', '6819faf895234'),
(2, '::1', '2025-05-06 11:36:05', '681a18558114c'),
(3, '::1', '2025-05-06 13:53:25', '681a1e5541f0d'),
(4, '::1', '2025-05-06 14:35:29', '681a3e865f80d'),
(5, '::1', '2025-05-06 17:01:26', '681a4861d719e'),
(6, '::1', '2025-05-06 17:36:02', '681a6a96a567b'),
(7, '::1', '2025-05-06 18:24:55', '681a72b25da6e'),
(8, '::1', '2025-05-06 18:33:40', '681a7e2843167'),
(9, '::1', '2025-05-06 20:52:07', '681a8034b2a2c'),
(10, '::1', '2025-05-06 19:53:21', '681a90e6ad6a0'),
(11, '::1', '2025-05-06 19:53:22', '681a92e24ed16'),
(12, '::1', '2025-05-07 08:45:15', '681aa0a7d0bd2'),
(13, '::1', '2025-05-07 09:58:22', '681b47cb35ffb'),
(14, '::1', '2025-05-07 10:20:01', '681b58ef62e64'),
(15, '::1', '2025-05-07 10:21:57', '681b5e01590a4'),
(16, '::1', '2025-05-07 11:23:25', '681b5e75323f9'),
(17, '::1', '2025-05-07 10:23:01', '681b5eb5931cf'),
(18, '::1', '2025-05-07 13:11:14', '681b6cdd5963a'),
(19, '::1', '2025-05-07 13:13:02', '681b862278d3c'),
(20, '::1', '2025-05-07 13:13:39', '681b868e2bfb5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.visitas`
--

CREATE TABLE `tb_admin.visitas` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.visitas`
--

INSERT INTO `tb_admin.visitas` (`id`, `ip`, `dia`) VALUES
(1, '::1', '2025-05-06'),
(2, '::1', '2025-05-06'),
(3, '::1', '2025-05-07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.feed`
--

CREATE TABLE `tb_site.feed` (
  `id` int(11) NOT NULL,
  `membro_id` int(11) NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.feed`
--

INSERT INTO `tb_site.feed` (`id`, `membro_id`, `post`) VALUES
(1, 3, 'Iacobus, Jakobus, James, Iacóvos, Thiago'),
(2, 1, 'Sprechen Sie Deutsche? Schreiben Sie bitte alles hier oben auf.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.membros`
--

CREATE TABLE `tb_site.membros` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.membros`
--

INSERT INTO `tb_site.membros` (`id`, `nome`, `email`, `senha`, `imagem`) VALUES
(1, 'Alice Margatroid', 'alicemargatroid@magic.com', '123123', '681a0be92c3f4.png'),
(2, 'Rin Kaenbyou', 'rinkaeb@orin.com', '1234456', '681a3e9ec9a24.png'),
(3, 'Karium S. Margatroid', 'kariummarg@gmail.com', '890123', '681a3ebbef71d.png'),
(4, 'Nitori Kawashiro', 'nitorikawa@nitori.com', '789123', '681a3ee1298f8.PNG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.solicitacoes`
--

CREATE TABLE `tb_site.solicitacoes` (
  `id` int(11) NOT NULL,
  `id_from` int(11) NOT NULL,
  `id_to` int(11) NOT NULL,
  `statusA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.solicitacoes`
--

INSERT INTO `tb_site.solicitacoes` (`id`, `id_from`, `id_to`, `statusA`) VALUES
(1, 1, 3, 1),
(2, 1, 2, 1),
(4, 4, 3, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.feed`
--
ALTER TABLE `tb_site.feed`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.membros`
--
ALTER TABLE `tb_site.membros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.solicitacoes`
--
ALTER TABLE `tb_site.solicitacoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_site.feed`
--
ALTER TABLE `tb_site.feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_site.membros`
--
ALTER TABLE `tb_site.membros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_site.solicitacoes`
--
ALTER TABLE `tb_site.solicitacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
