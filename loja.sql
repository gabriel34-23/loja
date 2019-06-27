-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 25-Jun-2019 às 20:50
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Funcionario`
--

CREATE TABLE `Funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `salario` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `Funcionario`
--

INSERT INTO `Funcionario` (`idFuncionario`, `nome`, `cpf`, `telefone`, `email`, `salario`) VALUES
(3, 'Gabriel', '84858488488', '(89)99999-9999', 'gabriel@gmail.com', 953),
(4, 'Irineu', '15978546332', '(95)59529-9895', 'vcnaosabenemeu@outlook.com', 482);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Produto`
--

CREATE TABLE `Produto` (
  `idProduto` int(11) NOT NULL,
  `codigo` varchar(25) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` double NOT NULL,
  `estoque` int(11) NOT NULL,
  `tamanho` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `Produto`
--

INSERT INTO `Produto` (`idProduto`, `codigo`, `nome`, `valor`, `estoque`, `tamanho`) VALUES
(7, '342', 'Camisa Naruto', 34.5, 45, 'g'),
(9, '21', 'Meias', 10, 15, 'p'),
(10, '18', 'Camisa Barcelona', 256, 52, 'm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Venda`
--

CREATE TABLE `Venda` (
  `IdVenda` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data_venda` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `Venda`
--

INSERT INTO `Venda` (`IdVenda`, `produto_id`, `quantidade`, `data_venda`) VALUES
(1, 7, 1, '2019-06-25 18:27:00'),
(3, 10, 5, '2019-06-25 20:00:43'),
(4, 10, 4, '2019-06-25 20:01:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Funcionario`
--
ALTER TABLE `Funcionario`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- Indexes for table `Produto`
--
ALTER TABLE `Produto`
  ADD PRIMARY KEY (`idProduto`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indexes for table `Venda`
--
ALTER TABLE `Venda`
  ADD PRIMARY KEY (`IdVenda`),
  ADD KEY `fk_venda_produto` (`produto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Funcionario`
--
ALTER TABLE `Funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Produto`
--
ALTER TABLE `Produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Venda`
--
ALTER TABLE `Venda`
  MODIFY `IdVenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `Venda`
--
ALTER TABLE `Venda`
  ADD CONSTRAINT `fk_venda_produto` FOREIGN KEY (`produto_id`) REFERENCES `Produto` (`idProduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
