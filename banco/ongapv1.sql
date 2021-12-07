-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 30-Nov-2021 às 05:45
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ongapv1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_doacao`
--

CREATE TABLE `tb_doacao` (
  `id_doacao` int(3) NOT NULL,
  `dt_doacao` varchar(10) NOT NULL,
  `id_doadorFK` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_doacao`
--

INSERT INTO `tb_doacao` (`id_doacao`, `dt_doacao`, `id_doadorFK`) VALUES
(4, '2021-11-29', 30),
(5, '2021-11-29', 30),
(6, '2021-11-29', 30),
(7, '2021-11-29', 30),
(8, '2021-11-29', 30),
(9, '2021-11-29', 30),
(10, '2021-11-29', 30),
(11, '2021-11-29', 30),
(12, '2021-11-29', 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_doadores`
--

CREATE TABLE `tb_doadores` (
  `id_doador` int(3) NOT NULL,
  `nm_doador` varchar(60) DEFAULT NULL,
  `tel_doador` varchar(15) NOT NULL,
  `email_doador` varchar(60) DEFAULT NULL,
  `cpf_doador` char(14) DEFAULT NULL,
  `dt_nasc_doador` varchar(10) DEFAULT NULL,
  `senha_doador` varchar(60) DEFAULT NULL,
  `anonimo_doador` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_doadores`
--

INSERT INTO `tb_doadores` (`id_doador`, `nm_doador`, `tel_doador`, `email_doador`, `cpf_doador`, `dt_nasc_doador`, `senha_doador`, `anonimo_doador`) VALUES
(1, 'Jose Victor Oliveira Santana', '(11) 98989-2324', 'victorsantana123@gmail.com', '458.569.598-98', '07/09/1965', '$2y$08$lW9O9XR8pWEzu3mfoh4osuHOZXEWnFB5jcIHYOXdhShvENtMcO1ie', b'1'),
(2, 'Manuella Oliveira', '', 'manuellaoliveira123@teste.com', '510.568.789-98', '02/11/2004', '$2y$08$AMShHawc3.BICQJFhuUg0eSv2cg1QamnoqHmHH48DOy25/v30GlM.', b'0'),
(3, 'Victor Hugo', '', 'victorhugo123@teste.com', '513.568.985-89', '05/08/1971', '$2y$08$y.Nad.sOXA7ScPUEeQunnetYjFCWUGfVe8NMAHN0FdKawJpVcnDQ2', b'0'),
(4, 'Maria dos Santos', '(11) 95989-0000', 'mariasantos123@teste.com', '510.659.985-89', '04/08/1973', '$2y$08$olxGfGZmNzIUBl7L.oVl5.p6Nosl.C6cHw3d5eWxao83yEurRaSiS', b'0'),
(5, 'Maria dos Santos', '(11) 95989-0000', 'mariasantos123@teste.com', '510.659.985-89', '04/08/1973', '$2y$08$j.lff8KruQczVpxeDRVbee8QSwUpJJCw5AhHCArKH0tIaTfq.eenG', b'0'),
(6, 'Guilherme Siqueira Bueno dos Santos', '(11) 95689-1234', 'guilhermesantos123@gmail.com', '512.123.569-89', '02/01/1955', '$2y$08$gTQKVlqH8U6ILiEeHOIJf.oX1cL4giODgmizFU40/ZDGHzf694MZS', b'1'),
(7, 'Vanessa dos Santos Araújo', '(11) 95689-0000', 'vanessa_araujo123@outlook.com', '569.365.000-89', '31/04/1989', '$2y$08$v3Oo0PDU2a/BtwFTVhE72eKEPzWK58tm/itvvDQ1Y1Lr0AVpdrNge', b'1'),
(25, 'VIctor dos Sanros', '(11) 95989-0000', 'victorsantos123@teste.com', '132.569.569-32', '02/11/2001', '$2y$08$mn5oqlcR0JoePR6lsYjNi.BAaYeLDC6M7nmFo56lsFr4OAT4T4CNi', b'0'),
(26, 'weerw', '1564', 'werrewe@jhab.com', '15141458', '02/10/2000', '$2y$08$GZFtE1ZSgo5g2jDH6B4tru8w0fb.JedgEu.HI1g4h3EXyCEAvLlSS', b'0'),
(27, 'Gustavo coimbra', '11991353257', 'gustavimReidelas003@gmail.com', '30606', '02/20/3000', '$2y$08$akurjjkRcP8nsm.tmcAgmu6GIlYyz2m0RQQy8Gl2vWgaKYjiwBXWG', b'0'),
(28, 'Gustavo coimbra', '11991353257', 'gustavimReidelas003@gmail.com', '30606', '02/20/3000', '$2y$08$Lry9SZuIzXADoYnfKRiQm.BJ4ZGyM8KqXCAM7jpbt4I8H053HXGxy', b'0'),
(30, 'Rodrigo Tarcis Bueno Elias', '(11) 97789-5633', 'rodrigo.tarcis@yahoo.com.br', '465.998.165-45', '01/10/2003', '$2y$08$V0gYGDGoJD2e8.jCLxxKbODM55YHkI4KcbApnQXPJu6B1UAKiYooy', b'0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_emp_parceiras`
--

CREATE TABLE `tb_emp_parceiras` (
  `id_emp` int(3) NOT NULL,
  `tp_logra_emp` varchar(30) NOT NULL,
  `nm_logra_emp` varchar(60) NOT NULL,
  `num_logra_emp` varchar(5) NOT NULL,
  `bairro_emp` varchar(60) NOT NULL,
  `cidade_emp` varchar(60) NOT NULL,
  `cep_emp` char(9) NOT NULL,
  `cnpj_emp` char(18) NOT NULL,
  `email_emp` varchar(60) NOT NULL,
  `nm_rz_social_emp` varchar(60) NOT NULL,
  `nm_fantasia_emp` varchar(60) NOT NULL,
  `tel_emp_parceria` varchar(15) NOT NULL,
  `site_emp` varchar(60) DEFAULT NULL,
  `senha_emp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_emp_parceiras`
--

INSERT INTO `tb_emp_parceiras` (`id_emp`, `tp_logra_emp`, `nm_logra_emp`, `num_logra_emp`, `bairro_emp`, `cidade_emp`, `cep_emp`, `cnpj_emp`, `email_emp`, `nm_rz_social_emp`, `nm_fantasia_emp`, `tel_emp_parceria`, `site_emp`, `senha_emp`) VALUES
(1, 'Rua', 'João Gonçalves ', '1244', 'Jardim Munhoz', 'Santo André', '01254-895', '75.782.000/0175-00', 'empresateste321@gmail.com', 'FL Brasil Industria e Comercios', 'Bauducco', '(11) 95689-1245', 'empresateste.uol.com.br', '$2y$08$6aC4dKhWivXrjMIiUavHp.twXDvPutHLVajRQzKbdD/AJqEj3YoNG'),
(2, 'Avenida', 'Av. Sete de Setembro', '98', 'Itapevi', 'Bertioga', '0215-895', '12.154.569/1234-00', 'atlas_transporte132@uol.com', 'Atlas Transportes', 'Atlas', '', 'atlastransporte.uol.com.br', '$2y$08$uYJ4ZczzAzI5n8JsjSxheeMc8bVbKVUIh0rHC8d1KA4/2S/CnrqIO'),
(3, 'Avenida', 'Av. Capitão Gabriel', '89', 'Dom Pedro II', 'Bertioga', '04589-895', '15.569.021/7894-23', 'molas_aco123@gmail.com', 'Molas Aço Industria e Comercios', 'Femsa', '', 'www.molasacobrasil.com.br', '$2y$08$08E1ZZpwcXNQjp96h3Fmn.1zDwp4LUkMpHqwvom259dLpVd6Li61W'),
(4, 'Avenida', 'Av. Capitão Gabriel', '89', 'Dom Pedro II', 'Bertioga', '04589-895', '15.569.021/7894-23', 'molas_aco123@gmail.com', 'Molas Aço Industria e Comercios', 'Femsa', '', 'www.molasacobrasil.com.br', '$2y$08$YYu5e76SGR6kc6UYcvvZ8eU9lmUMW8YbooRXAu3zE9KKZojE9EfjG'),
(5, 'Rua', 'Rua Sebastião Morais Vieras', '104', 'Jardim Santa Lídia', 'Ubatuba', '01245-456', '23.569.659/7841-00', 'gressite_ceramicas23@gmail.com', 'Gressit Revestimento Ceramica Ltda', 'Gaill', '(11) 98900-0000', 'www.gressitceramicas.uol.com.br', '$2y$08$OBnJMCPPNxFh/YSKHqDG7eMt62Vwh.3sCfb7dxwe6kAQdecLG2gfm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_grupos_vulneraveis`
--

CREATE TABLE `tb_grupos_vulneraveis` (
  `id_grupo` int(3) NOT NULL,
  `local_grupo` varchar(100) NOT NULL,
  `apelido_grupo` varchar(50) NOT NULL,
  `desc_grupo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_grupos_vulneraveis`
--

INSERT INTO `tb_grupos_vulneraveis` (`id_grupo`, `local_grupo`, `apelido_grupo`, `desc_grupo`) VALUES
(1, 'Quarteto de adolescentes ', 'Próximo a distribuidora Dia Industrias e Comercios', 'Grupo de 4 pessoas, todos adolescentes'),
(2, 'Grupo das meninas', 'Próximas da empresa metalúrgica Cindumel, em Guaru', '3 meninas, idade entre 10 a 16 anos, altura entre 1.50 a 1.7'),
(3, 'Trio dos menó', 'Próximo a Metalúrgica Cindumel, bairro Itapegica, ', '3 meninos negros, altura entre 1.60 a 1.80, todos descalços.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_item_doacao`
--

CREATE TABLE `tb_item_doacao` (
  `id_item_doacao` int(4) NOT NULL,
  `id_doacaoFK` int(3) NOT NULL,
  `nm_item` varchar(60) NOT NULL,
  `qtde_item` int(10) NOT NULL,
  `id_tp_doacaoFK` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_item_doacao`
--

INSERT INTO `tb_item_doacao` (`id_item_doacao`, `id_doacaoFK`, `nm_item`, `qtde_item`, `id_tp_doacaoFK`) VALUES
(9, 4, 'Arroz', 5, 1),
(10, 5, 'Pacote de Absorvente Feminino', 30, 5),
(12, 7, 'Arroz', 5, 1),
(13, 8, 'Camiseta', 15, 2),
(14, 9, 'Feijão', 8, 1),
(17, 12, 'Carne Bovina', 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_parcerias`
--

CREATE TABLE `tb_parcerias` (
  `id_parc` int(3) NOT NULL,
  `nm_parc` varchar(60) NOT NULL,
  `tel_parceria` varchar(15) NOT NULL,
  `tp_logra_parc` varchar(30) NOT NULL,
  `nm_logra_parc` varchar(60) NOT NULL,
  `num_logra_parc` varchar(5) NOT NULL,
  `bairro_parc` varchar(60) NOT NULL,
  `cidade_parc` varchar(60) NOT NULL,
  `cep_parc` char(9) NOT NULL,
  `email_parc` varchar(60) NOT NULL,
  `site_parc` varchar(60) DEFAULT NULL,
  `senha_parc` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_parcerias`
--

INSERT INTO `tb_parcerias` (`id_parc`, `nm_parc`, `tel_parceria`, `tp_logra_parc`, `nm_logra_parc`, `num_logra_parc`, `bairro_parc`, `cidade_parc`, `cep_parc`, `email_parc`, `site_parc`, `senha_parc`) VALUES
(1, 'Nossa Senhora de Fátima Bernardes', '(11) 98956-2365', 'Avenida', 'Tarcis Bueno Elias', '569', 'Jardim Santa Lídia de Pádua', 'Guarulhos Zona Leste', '01256-895', 'senhorafatima000@teste.com', 'www.nossasenhora.com.br', '$2y$08$O4CWNdbHzdqULyhFc2pDg.01UY4e6U72i2Owyfy3ZuKTXu2kJsyYW');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tel_doador`
--

CREATE TABLE `tb_tel_doador` (
  `id_tel_doador` int(3) NOT NULL,
  `id_doadorFK` int(3) NOT NULL,
  `tel_doador` varchar(15) NOT NULL,
  `tp_tel_doador` enum('Residencial','Celular','Comercial','Recado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tel_emp`
--

CREATE TABLE `tb_tel_emp` (
  `id_tel_emp` int(3) NOT NULL,
  `id_empFK` int(3) NOT NULL,
  `tel_emp` varchar(15) NOT NULL,
  `tp_tel_emp` enum('Celular','Comercial') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tel_parc`
--

CREATE TABLE `tb_tel_parc` (
  `id_tel_parc` int(3) NOT NULL,
  `id_parcFK` int(3) NOT NULL,
  `tel_parc` varchar(15) NOT NULL,
  `tp_tel_parc` enum('Residencial','Celular','Comercial','Recado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tel_vol`
--

CREATE TABLE `tb_tel_vol` (
  `id_tel_vol` int(3) NOT NULL,
  `id_volFK` int(3) NOT NULL,
  `tel_vol` varchar(15) NOT NULL,
  `tp_tel_vol` enum('Residencial','Celular','Comercial','Recado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tp_doacao`
--

CREATE TABLE `tb_tp_doacao` (
  `id_tp_doacao` int(2) NOT NULL,
  `nm_tp_doacao` varchar(30) NOT NULL,
  `st_ativo` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_tp_doacao`
--

INSERT INTO `tb_tp_doacao` (`id_tp_doacao`, `nm_tp_doacao`, `st_ativo`) VALUES
(1, 'Alimento', b'1'),
(2, 'Vestimenta', b'1'),
(3, 'ProdutoDeHigiene', b'1'),
(4, 'Mascara', b'1'),
(5, 'Absorvente', b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_voluntarios`
--

CREATE TABLE `tb_voluntarios` (
  `id_vol` int(3) NOT NULL,
  `nm_vol` varchar(60) NOT NULL,
  `tel_vol` varchar(15) NOT NULL,
  `email_vol` varchar(60) NOT NULL,
  `cpf_vol` char(14) NOT NULL,
  `nm_logra_vol` varchar(60) NOT NULL,
  `num_logra_vol` varchar(5) NOT NULL,
  `cep_vol` char(9) NOT NULL,
  `dt_nasc_vol` varchar(10) NOT NULL,
  `ativ_vol` varchar(60) NOT NULL,
  `senha_vol` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_voluntarios`
--

INSERT INTO `tb_voluntarios` (`id_vol`, `nm_vol`, `tel_vol`, `email_vol`, `cpf_vol`, `nm_logra_vol`, `num_logra_vol`, `cep_vol`, `dt_nasc_vol`, `ativ_vol`, `senha_vol`) VALUES
(1, 'Antônia Ferreira Santos', '(11) 95689-3365', 'antoniaferreira@gmail.com', '134.569.569-89', 'Rua João Alvares', '21', '12065-895', '02/11/2005', 'Entregar_Doacoes', '$2y$08$x6qxkImIIRgxbL7s2TMnfe9aRJ1h7Vpkj6CwrWBexXlP1W65Hofjy'),
(2, 'Renata Ferreira dos Santos', '(11) 95689-3365', 'renataferreira123@teste.com', '125.569.023-89', 'Sesc Itaquera', '123', '02165-895', '03/10/2001', 'Entregar_Doacoes', '$2y$08$1FnPgyjzYOXUWUSgRIDI3.LelJZb0z5YlJpfMoWtNa7GVXOYymU7i'),
(3, 'José Victor Santos', '(11) 98956-0222', 'josesantos123@teste.com', '120.569.569-89', 'Saldanha Marinha', '450', '07858-221', '05/08/1999', 'Preparacao_Alimentos', '$2y$08$qmp0dXyIVXn2KaSB2.koV.jYG.RynXOPLcyNqfSHr.iZIYGFho2.W');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_doacao`
--
ALTER TABLE `tb_doacao`
  ADD PRIMARY KEY (`id_doacao`),
  ADD KEY `doador_doacao` (`id_doadorFK`);

--
-- Índices para tabela `tb_doadores`
--
ALTER TABLE `tb_doadores`
  ADD PRIMARY KEY (`id_doador`);

--
-- Índices para tabela `tb_emp_parceiras`
--
ALTER TABLE `tb_emp_parceiras`
  ADD PRIMARY KEY (`id_emp`);

--
-- Índices para tabela `tb_grupos_vulneraveis`
--
ALTER TABLE `tb_grupos_vulneraveis`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Índices para tabela `tb_item_doacao`
--
ALTER TABLE `tb_item_doacao`
  ADD PRIMARY KEY (`id_item_doacao`),
  ADD KEY `doacao_item` (`id_doacaoFK`),
  ADD KEY `tp_item` (`id_tp_doacaoFK`);

--
-- Índices para tabela `tb_parcerias`
--
ALTER TABLE `tb_parcerias`
  ADD PRIMARY KEY (`id_parc`);

--
-- Índices para tabela `tb_tel_doador`
--
ALTER TABLE `tb_tel_doador`
  ADD PRIMARY KEY (`id_tel_doador`),
  ADD KEY `doador_tel` (`id_doadorFK`);

--
-- Índices para tabela `tb_tel_emp`
--
ALTER TABLE `tb_tel_emp`
  ADD PRIMARY KEY (`id_tel_emp`),
  ADD KEY `emp_tel` (`id_empFK`);

--
-- Índices para tabela `tb_tel_parc`
--
ALTER TABLE `tb_tel_parc`
  ADD PRIMARY KEY (`id_tel_parc`),
  ADD KEY `parc_tel` (`id_parcFK`);

--
-- Índices para tabela `tb_tel_vol`
--
ALTER TABLE `tb_tel_vol`
  ADD PRIMARY KEY (`id_tel_vol`),
  ADD KEY `vol_tel` (`id_volFK`);

--
-- Índices para tabela `tb_tp_doacao`
--
ALTER TABLE `tb_tp_doacao`
  ADD PRIMARY KEY (`id_tp_doacao`);

--
-- Índices para tabela `tb_voluntarios`
--
ALTER TABLE `tb_voluntarios`
  ADD PRIMARY KEY (`id_vol`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_doacao`
--
ALTER TABLE `tb_doacao`
  MODIFY `id_doacao` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tb_doadores`
--
ALTER TABLE `tb_doadores`
  MODIFY `id_doador` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `tb_emp_parceiras`
--
ALTER TABLE `tb_emp_parceiras`
  MODIFY `id_emp` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tb_grupos_vulneraveis`
--
ALTER TABLE `tb_grupos_vulneraveis`
  MODIFY `id_grupo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_item_doacao`
--
ALTER TABLE `tb_item_doacao`
  MODIFY `id_item_doacao` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tb_parcerias`
--
ALTER TABLE `tb_parcerias`
  MODIFY `id_parc` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_tel_doador`
--
ALTER TABLE `tb_tel_doador`
  MODIFY `id_tel_doador` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_tel_emp`
--
ALTER TABLE `tb_tel_emp`
  MODIFY `id_tel_emp` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_tel_parc`
--
ALTER TABLE `tb_tel_parc`
  MODIFY `id_tel_parc` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_tel_vol`
--
ALTER TABLE `tb_tel_vol`
  MODIFY `id_tel_vol` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_tp_doacao`
--
ALTER TABLE `tb_tp_doacao`
  MODIFY `id_tp_doacao` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_voluntarios`
--
ALTER TABLE `tb_voluntarios`
  MODIFY `id_vol` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_doacao`
--
ALTER TABLE `tb_doacao`
  ADD CONSTRAINT `doador_doacao` FOREIGN KEY (`id_doadorFK`) REFERENCES `tb_doadores` (`id_doador`);

--
-- Limitadores para a tabela `tb_item_doacao`
--
ALTER TABLE `tb_item_doacao`
  ADD CONSTRAINT `doacao_item` FOREIGN KEY (`id_doacaoFK`) REFERENCES `tb_doacao` (`id_doacao`),
  ADD CONSTRAINT `tp_item` FOREIGN KEY (`id_tp_doacaoFK`) REFERENCES `tb_tp_doacao` (`id_tp_doacao`);

--
-- Limitadores para a tabela `tb_tel_doador`
--
ALTER TABLE `tb_tel_doador`
  ADD CONSTRAINT `doador_tel` FOREIGN KEY (`id_doadorFK`) REFERENCES `tb_doadores` (`id_doador`);

--
-- Limitadores para a tabela `tb_tel_emp`
--
ALTER TABLE `tb_tel_emp`
  ADD CONSTRAINT `emp_tel` FOREIGN KEY (`id_empFK`) REFERENCES `tb_emp_parceiras` (`id_emp`);

--
-- Limitadores para a tabela `tb_tel_parc`
--
ALTER TABLE `tb_tel_parc`
  ADD CONSTRAINT `parc_tel` FOREIGN KEY (`id_parcFK`) REFERENCES `tb_parcerias` (`id_parc`);

--
-- Limitadores para a tabela `tb_tel_vol`
--
ALTER TABLE `tb_tel_vol`
  ADD CONSTRAINT `vol_tel` FOREIGN KEY (`id_volFK`) REFERENCES `tb_voluntarios` (`id_vol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
