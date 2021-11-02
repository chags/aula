-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Nov-2021 às 00:34
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aula`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario_nome` varchar(150) DEFAULT NULL,
  `usuario_email` varchar(150) DEFAULT NULL,
  `usuario_senha` varchar(150) DEFAULT NULL,
  `usuario_endereco` varchar(200) DEFAULT NULL,
  `usuario_cidade` varchar(100) DEFAULT NULL,
  `usuario_estado` varchar(100) DEFAULT NULL,
  `usuario_cep` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario_nome`, `usuario_email`, `usuario_senha`, `usuario_endereco`, `usuario_cidade`, `usuario_estado`, `usuario_cep`) VALUES
(1, 'cristiano', 'cristiano@admin.com', '9407c826d8e3c07ad37cb2d13d1cb641', NULL, NULL, NULL, NULL),
(2, 'junior', 'junior@admin.com', '9407c826d8e3c07ad37cb2d13d1cb641', NULL, NULL, NULL, NULL),
(5, 'Valter Junior', 'admin@admin.com', '123456', 'rua colina 110', 'caucaia', 'CE', '60541245'),
(6, 'Lorena', 'lorena@admin.com', '555555', 'rua colina 110', 'fortaleza', 'CE', '6054548'),
(7, 'cristine', 'cris@admin.com.br', '46f227e9cf17e2e1e88b14e679047bd9', 'colina 112', 'caucaia', 'CE', '6165250');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
