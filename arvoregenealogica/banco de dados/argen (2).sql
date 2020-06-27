-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/06/2020 às 02:22
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `argen`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_parent`
--

CREATE TABLE `cad_parent` (
  `id_parent` int(11) NOT NULL,
  `grau_parent` text DEFAULT NULL,
  `nome_parent` text DEFAULT NULL,
  `sobrenome_parent` text DEFAULT NULL,
  `data_nas` date DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `cidade` text DEFAULT NULL,
  `uf` text DEFAULT NULL,
  `rua` text DEFAULT NULL,
  `bairro` text DEFAULT NULL,
  `falecido` text DEFAULT NULL,
  `data_obt` date DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_user`
--

CREATE TABLE `cad_user` (
  `id_user` int(110) NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `nome` text NOT NULL,
  `sobrenome` text NOT NULL,
  `data_nas` date DEFAULT NULL,
  `cep` int(8) NOT NULL,
  `cidade` text NOT NULL,
  `uf` text NOT NULL,
  `rua` text NOT NULL,
  `bairro` text NOT NULL,
  `nome_imagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cad_user`
--

INSERT INTO `cad_user` (`id_user`, `email`, `senha`, `nome`, `sobrenome`, `data_nas`, `cep`, `cidade`, `uf`, `rua`, `bairro`, `nome_imagem`) VALUES
(13, 'jane.mariani@hotmail.com', '32debea49bedb07033eec0266fa11e03', 'Jane', 'Mariani  pinto', '1967-10-14', 31255610, 'Belo Horizonte', 'MG', 'Rua Munhoz', 'Santa Rosa', 'MARA1.png'),
(14, 'rafael@mariani', '3f9a98bb3e026f484b05d0e904552998', 'rafael', 'Mariani pnto Guimaraes', '1994-05-18', 31255610, 'Belo Horizonte', 'MG', 'Rua Munhoz', 'Santa Rosa', 'foto_perfil.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dadosperfil`
--

CREATE TABLE `dadosperfil` (
  `sobrevc` varchar(300) DEFAULT NULL,
  `sobrefa` varchar(300) DEFAULT NULL,
  `ondnas` varchar(200) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `post`
--

CREATE TABLE `post` (
  `postagem` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cad_parent`
--
ALTER TABLE `cad_parent`
  ADD PRIMARY KEY (`id_parent`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices de tabela `cad_user`
--
ALTER TABLE `cad_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Índices de tabela `dadosperfil`
--
ALTER TABLE `dadosperfil`
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cad_parent`
--
ALTER TABLE `cad_parent`
  MODIFY `id_parent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_user`
--
ALTER TABLE `cad_user`
  MODIFY `id_user` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `cad_parent`
--
ALTER TABLE `cad_parent`
  ADD CONSTRAINT `cad_parent_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `cad_user` (`id_user`);

--
-- Restrições para tabelas `dadosperfil`
--
ALTER TABLE `dadosperfil`
  ADD CONSTRAINT `dadosperfil_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `cad_parent` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
