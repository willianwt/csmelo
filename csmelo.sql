-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2018 às 06:22
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
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id_mensagem` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `nome_cliente` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `mensagem` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id_mensagem`, `id_produto`, `nome_cliente`, `email`, `telefone`, `mensagem`) VALUES
  (3, 26, 'WILLIAN TAIGUARA BALIZA MOURA', 'WILLIANWT@GMAIL.COM', '2147483647', 'asdqeqw'),
  (4, 22, 'WILLIAN TAIGUARA BALIZA MOURA', 'WILLIANWT@GMAIL.COM', '2147483647', 'asdqweqweqw'),
  (5, 22, 'WILLIAN TAIGUARA BALIZA MOURA', 'WILLIANWT@GMAIL.COM', '2147483647', 'qweqwdasdqw'),
  (6, 22, 'WILLIAN TAIGUARA BALIZA MOURA', 'WILLIANWT@GMAIL.COM', '2147483647', 'asqewqe1231231'),
  (7, 26, 'WILLIAN TAIGUARA BALIZA MOURA', 'WILLIANWT@GMAIL.COM', '61983133640', 'qweqweqwe'),
  (9, 26, 'a', 'a@a.comm', 'a', 'asdqweq'),
  (10, 22, 'asdq', 'asd@asd.com', 'asdqwe', 'Por outro lado, a competitividade nas transações comerciais deve passar por modificações independentemente das direções preferenciais no sentido do progresso.\r\nPor outro lado, a competitividade nas transações comerciais deve passar por modificações independentemente das direções preferenciais no sentido do progresso.\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
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

INSERT INTO `produto` (`id`, `nome_produto`, `tamanho_total`, `material_lamina`, `comprimento_lamina`, `largura_lamina`, `material_cabo`, `comprimento_cabo`, `dorso`, `cor`, `inserido_por`, `galeria1`, `galeria2`, `galeria3`) VALUES
  (22, 'Machadinha básica', '18cm', 'aço galvanizado', '10cm', '3cm', 'chifre de boi', '5cm', '2cm', 'parda', 'csmelo', '15427355935bf446e99c61d.jpg', '15427355935bf446e99d1d4.jpg', '15427355935bf446e99dd8b.jpg'),
  (26, 'Faca de caça', '18cm', 'aço galvanizado', '10cm', '3cm', 'chifre de boi', '5cm', '2cm', 'cinza', 'csmelo', '35efb9f28e3afbfc4789327b81b265bc.jpg', '09f1ef4103c6b0279691500d9e44fe27.jpg', '972dfae351c13ed9556188673b3de99e.jpg'),
  (28, 'faca de peixe', '8', 'aço', '5', '3', 'osso de carneiro', '5', '2', 'preta', 'csmelo', 'e227041c6d205d5cd651fca71948bb0c.jpg', '3b270b9242fd75715b53c2efba480187.jpg', 'e1072ccd70dae3facdf48284e365f1e3.jpg'),
  (29, 'faca caseira', '18', 'aço galvanizado', '10cm', '3cm', 'chifre de boi', '5cm', '2cm', 'parda', 'csmelo', '9f2a339118763634eb1c44250397c9c6.jpg', '7520573929d28246f4f7bc232ff4e0da.jpg', '31f30c84efed78694161892a3ec66000.jpg'),
  (30, 'faca de caça', '18cm', 'aço galvanizado', '10cm', '3cm', 'chifre de boi', '5cm', '2cm', 'parda', 'csmelo', '1373ace09014ceaf6591806807683637.jpg', '2944a8ab4d1f9136e1bb4af34e3133ff.jpg', '6850ae56031b4febee22bf225139f22a.jpg'),
  (31, 'faca de combate', '18cm', 'aço galvanizado', '10cm', '3cm', 'chifre de boi', '5cm', '2cm', 'parda', 'csmelo', '5ff9b291ecbad1bff8adb7dc89e2dc87.jpg', 'fba1e5f5f659f032348b78ce53e7d0e8.jpg', 'f929a3dad0f833044cbf73f09be4f897.jpg');

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
  ('csmelo', '014cb5156a1260b8a0a5bfd761265b66160e7a32', 'Cleber Melo', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id_mensagem`),
  ADD KEY `produto` (`id_produto`);

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
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD CONSTRAINT `produto` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `inserido_por` FOREIGN KEY (`inserido_por`) REFERENCES `usuarios` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
