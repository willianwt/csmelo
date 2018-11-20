-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2018 às 20:22
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csmelo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `favoritos`
--

CREATE TABLE `favoritos` (
  `id_favoritos` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tamanho_total` varchar(100) NOT NULL,
  `material_lamina` varchar(100) DEFAULT NULL,
  `comprimento_lamina` varchar(100) DEFAULT NULL,
  `largura_lamina` varchar(100) DEFAULT NULL,
  `material_cabo` varchar(100) DEFAULT NULL,
  `comprimento_cabo` varchar(100) DEFAULT NULL,
  `dorso` varchar(100) DEFAULT NULL,
  `cor` varchar(50) DEFAULT NULL,
  `inserido_por` varchar(200) NOT NULL,
  `galeria1` varchar(300) DEFAULT NULL,
  `galeria2` varchar(300) DEFAULT NULL,
  `galeria3` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `tamanho_total`, `material_lamina`, `comprimento_lamina`, `largura_lamina`, `material_cabo`, `comprimento_cabo`, `dorso`, `cor`, `inserido_por`, `galeria1`, `galeria2`, `galeria3`) VALUES
  (22, '123', '18cm', 'aço galvanizado', '10cm', '3cm', 'chifre de boi', '5cm', '2cm', 'parda', 'csmelo', '15427355935bf446e99c61d.jpg', '15427355935bf446e99d1d4.jpg', '15427355935bf446e99dd8b.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(200) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`email`, `senha`, `nome`, `admin`) VALUES
  ('csmelo', '014cb5156a1260b8a0a5bfd761265b66160e7a32', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favoritos`
--
ALTER TABLE `favoritos`
  ADD KEY `produto` (`id_produto`),
  ADD KEY `usuario` (`usuario`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inserido_por` (`inserido_por`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `produto` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `inserido_por` FOREIGN KEY (`inserido_por`) REFERENCES `usuarios` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
