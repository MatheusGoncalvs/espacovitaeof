-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 20-Jun-2019 às 14:58
-- Versão do servidor: 10.3.14-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9479042_vitae_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_consulta`
--

CREATE TABLE `cadastro_consulta` (
  `id_consulta` int(11) NOT NULL,
  `data` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `hora` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_servico` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `especialista` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `queixas` text COLLATE utf8_unicode_ci NOT NULL,
  `pne` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `pessoa_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cadastro_consulta`
--

INSERT INTO `cadastro_consulta` (`id_consulta`, `data`, `hora`, `tipo_servico`, `especialista`, `queixas`, `pne`, `pessoa_id_fk`) VALUES
(12, '2019-06-20', '09:00', 'Serviço 2', 'Dario', 'Dor de barriga; Corrissa; Corrimento; Tremedeira; Quebradeira;', 'n', 13),
(13, '2019-06-10', '08:00', 'Serviço 2', 'Dario', 'Dor de barriga; Corrissa; Corrimento; Tremedeira; Quebradeira;', 'n', 15),
(14, '2019-06-10', '08:00', 'Serviço 2', 'Dario', 'Dor de barriga; Corrissa; Corrimento; Tremedeira; Quebradeira;', 'n', 13),
(15, '2019-06-17', '08:00', 'Serviço 2', 'Dario', 'Queixa', 'n', 12),
(16, '2019-06-03', '08:00', 'Vasectomia', 'Rafael Zvasck', 'Dor de barriga; Corrissa; Corrimento; Tremedeira; Quebradeira;', 'n', 14),
(17, '2019-06-13', '09:43', 'tipo1', 'Maria', 'Dor de barriga; Corrissa; Corrimento; Tremedeira; Quebradeira;', 'n', 13),
(18, '2019-06-17', '04:09', 'Serviço 2', 'Maria', 'Dor de barriga; Corrissa; Corrimento; Tremedeira; Quebradeira;', 'n', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_pessoa`
--

CREATE TABLE `cadastro_pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `observacoes` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cadastro_pessoa`
--

INSERT INTO `cadastro_pessoa` (`id_pessoa`, `nome`, `rg`, `cpf`, `celular`, `data_nascimento`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `sexo`, `observacoes`) VALUES
(12, 'Matheus Goncalves', '16291780233', '710.583.653-98', '74991108892', '1992-06-17', 'Rua Novaes', 15, 'Paraiso', 'Feira de Santana', 'BA', 'M', '                    Cadastro para testes do software.        '),
(13, 'Mario Sergio', '12558965896535', '614.266.573-31', '89991112525', '1984-06-19', 'Rua avenida', 45, 'Rocinha', 'Feira de Santana', 'BA', 'O', 'Usuário sem problemas.'),
(14, 'Ricardo Souza Gentili', '83901723802038', '069.543.867-07', '75998239999', '1920-05-17', 'Pororo da pororoca', 200, 'Pocomã', 'Feira de Santana', 'BA', 'M', '                    Observations                                '),
(15, 'Alan Passos', '7361826816263', '482.596.187-88', '75998239999', '1702-05-29', 'Rua Sabão Sabonete', 0, 'Cidade Nova', 'Feira de Santana', 'BA', 'M', '                                                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution         48259618788               '),
(16, 'Djairson', '9999999999', '063.299.625-02', '75983715625', '2019-06-18', 'rua da amargura', 666, 'brasilia', 'Feira de Santana', 'BA', 'M', '                    vou levar meu cachorro .        ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `senha`) VALUES
(1, 'teste@gmail.com', '123'),
(2, 'admin@admin.com', 'admin123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_consulta`
--
ALTER TABLE `cadastro_consulta`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indexes for table `cadastro_pessoa`
--
ALTER TABLE `cadastro_pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_consulta`
--
ALTER TABLE `cadastro_consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cadastro_pessoa`
--
ALTER TABLE `cadastro_pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
