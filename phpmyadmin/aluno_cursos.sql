-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jul-2021 às 12:59
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aluno_cursos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id_aluno` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `nome`, `data_nascimento`, `endereco`, `cidade`, `estado`, `cpf`) VALUES
(1, 'Roger Felix', '1993-08-27', 'R Antonio Quintiliano 99', 'Sao Paulo', 'SP', '41526374859'),
(2, 'Felipe Santos', '1993-08-27', 'R Alberto Lonhoff 460', 'Rio de Janeiro', 'RJ', '41526374858'),
(3, 'Maria Aparecida', '1993-08-27', 'R Osasco 12', 'Osasco', 'SP', '41526374857'),
(4, 'Jose Fagundes', '1993-08-27', 'R Bahia 44', 'Salvador', 'BA', '41526374856'),
(5, 'Marcio Franco', '1993-08-27', 'R Horizonte 21', 'Belo Horizonte', 'MG', '41526374855'),
(6, 'Lazaro Barbosa', '1993-08-27', 'R Lagos 15', 'Alagoas', 'AL', '41526374854'),
(7, 'Stive Flakes', '1993-08-27', 'R Parana 100', 'Paraná', 'PR', '41526374853'),
(8, 'Marcos Antonio', '1993-08-27', 'R riacho grande 10', 'Rio Grande do Sul', 'RS', '41526374852'),
(9, 'Billy Harry', '1993-08-27', 'R indio patachó 160', 'Amazonas', 'AM', '41526374851'),
(10, 'Mariano Floriano', '1993-08-27', 'R Acre 89', 'Acre', 'AC', '41526374850'),
(11, 'Renan Monteiro', '1993-08-27', 'Av Corruptos 100', 'Distrito Federal', 'DF', '41526374800'),
(12, 'Ryan Miguel ', '0000-00-00', 'Rua Lacerda Marques 99', 'São Paulo', 'SP', '48756544585');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_cursos`
--

CREATE TABLE `alunos_cursos` (
  `id_alunos_cursos` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos_cursos`
--

INSERT INTO `alunos_cursos` (`id_alunos_cursos`, `id_aluno`, `id_curso`) VALUES
(1, 7, 1),
(2, 8, 2),
(3, 9, 3),
(4, 10, 4),
(5, 11, 5),
(6, 12, 6),
(7, 13, 7),
(8, 14, 3),
(9, 15, 4),
(10, 16, 5),
(11, 17, 6),
(12, 7, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nome_curso` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nome_curso`) VALUES
(1, 'PHP'),
(2, 'Laravel'),
(3, 'Google Cloud'),
(4, 'Java Script'),
(5, 'codeigniter'),
(6, 'Python'),
(7, 'MySQL'),
(8, 'React Native'),
(9, 'React JS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `descricao_atividade` varchar(90) NOT NULL,
  `vlr_nota` decimal(5,2) NOT NULL,
  `id_aluno_cursos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nota`
--

INSERT INTO `nota` (`id_nota`, `descricao_atividade`, `vlr_nota`, `id_aluno_cursos`) VALUES
(1, 'Prova 1', '9.00', 1),
(2, 'Prova 1', '10.00', 2),
(3, 'Prova 1', '5.00', 3),
(4, 'exercicio 2', '5.00', 4),
(5, 'exercicio 2', '5.00', 5),
(6, 'Prova 2', '6.00', 6),
(7, 'Prova 3', '6.00', 7),
(8, 'Prova 3', '7.00', 8),
(9, 'Prova 4', '7.00', 9),
(10, 'exercicio 1', '8.00', 10),
(11, 'exercicio 1', '8.00', 11);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Índices para tabela `alunos_cursos`
--
ALTER TABLE `alunos_cursos`
  ADD PRIMARY KEY (`id_alunos_cursos`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Índices para tabela `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `alunos_cursos`
--
ALTER TABLE `alunos_cursos`
  MODIFY `id_alunos_cursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
