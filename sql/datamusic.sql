-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Mar-2018 às 04:22
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamusic`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `albums`
--

CREATE TABLE `albums` (
  `idAlbums` int(11) NOT NULL,
  `Album` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Publisher` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Year` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Data` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Image` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `albumId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `albums`
--

INSERT INTO `albums` (`idAlbums`, `Album`, `Publisher`, `Year`, `Data`, `Image`, `albumId`) VALUES
(1, 'Blurryface', 'Fueled by Ramen', '2015', '16/03/2018', 'blurryface-W320.jpg', 10),
(2, 'Vessel', 'Fueled by Ramen', '2013', '16/03/2018', 'vessel21p.jpg', 10),
(3, 'Evolve', 'Interscope Records', '2017', '16/03/2018', 'imgd.jpg', 12),
(4, 'All Hope Is Gone', 'Roadrunner Records', '2008', '16/03/2018', 'SlipknotAllHopeIsGoneCapa.jpg', 1),
(5, 'Toxicity', 'American Recordings', '2001', '16/03/2018', 'toxicity.jpg', 13),
(7, 'One More Light', 'Warner Bros. Records', '2017', '17/03/2018', '1more.jpeg', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `bands`
--

CREATE TABLE `bands` (
  `idBand` int(11) NOT NULL,
  `Band` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Description` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Image` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Data` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `bands`
--

INSERT INTO `bands` (`idBand`, `Band`, `Description`, `Image`, `Data`) VALUES
(1, 'Slipknot', 'Slipknot Ã© uma banda americana formada em Des Moines, Iowa, em 1995. Advinda do estilo musical nu metal, que explodiu no fim dos anos 1990 nos Estados Unidos, a banda Ã© conhecida por seu grande nÃºmero de integrantes, pelas mÃ¡scaras usadas por cada um, e pelos shows enÃ©rgicos, o que garantiu uma grande base de jovens fÃ£s atÃ© aos dias atuais. Seu estilo jÃ¡ foi rotulado como heavy metal, nu metal, metal alternativo, death metal, thrash metal, rap metal e avant-garde metal. Entre 1998 e 2010, a banda foi constituÃ­da por Sid Wilson, Chris Fehn, James Root, Craig Jones, Shawn Crahan, Mick Thomson, Corey Taylor, Paul Gray e Joey Jordison, responsÃ¡veis pela gravaÃ§Ã£o de quatro Ã¡lbuns de estÃºdio nesse perÃ­odo. ApÃ³s a morte do baixista Paul Gray em 2010 e a saÃ­da do baterista Joey Jordison em 2013, Alessandro Venturella (baixo) e Jay Weinberg (bateria) foram escolhidos como substitutos.', 'slipknot.jpg', '15/03/2018'),
(10, 'Twenty One Pilots', 'Twenty One Pilots \r\n(estilizado como twenty one pilots, e Ã s vezes como twenty Ã¸ne pilÃ¸ts) Ã© um duo americano originÃ¡rio de Columbus, Ohio. A banda foi formada em 2009 e Ã© composta por Tyler Joseph e Josh Dun. Eles lanÃ§aram dois Ã¡lbuns independentes antes de assinarem com a gravadora Fueled by Ramen, em 2012: Twenty One Pilots (2009) e Regional at Best (2011). No ano seguinte, lanÃ§aram o primeiro Ã¡lbum com esta gravadora, intitulado Vessel. Seu segundo Ã¡lbum assinado, intitulado Blurryface, foi lanÃ§ado em 17 de maio de 2015.', 'twentyonepilots.jpeg', '16/03/2018'),
(12, 'Imagine Dragons', 'Imagine Dragons Ã© uma banda de indie rock formada em Las Vegas, Nevada, Estados Unidos. O nome do grupo Ã© um anagrama, mas a palavra original Ã© desconhecida, exceto para os membros da banda.', 'Imagine_Dragons.jpg', '15/03/2018'),
(13, 'System Of A Down', 'System of a Down (Ã s vezes abreviado como SOAD ou System) Ã© uma banda de rock formada em Glendale, CalifÃ³rnia em 1994. Ã‰ composta por Serj Tankian (vocais, teclados, guitarra), Daron Malakian (guitarra, vocais), Shavo Odadjian (baixo, vocais) e John Dolmayan (bateria). O grupo Ã© conhecido pelas visÃµes polÃ­ticas e sociais que inserem nas letras de suas canÃ§Ãµes.', 'sytem.jpg', '16/03/2018'),
(14, 'Linkin Park', 'Linkin Park Ã© uma banda de rock dos Estados Unidos formada em 1996 em Agoura Hills, CalifÃ³rnia. Desde a sua formaÃ§Ã£o, o grupo jÃ¡ vendeu pelo menos 70 milhÃµes de Ã¡lbuns pelo mundo e ganhou dois Grammy Awards. Eles tiveram o sucesso alcanÃ§ado em 2000, com o seu Ã¡lbum de estreia, Hybrid Theory, que foi certificado pela RIAA como disco de diamante em 2005. O Ã¡lbum seguinte, Meteora, continuou o sucesso da banda, com o topo no grÃ¡fico de Ã¡lbuns Billboard 200 em 2003, e foi seguido por um extenso trabalho de caridades e de turnÃªs em todo o mundo. Em 2003, Linkin Park foi nomeada pela MTV2 a sexta maior banda da era de videoclipes e a terceira melhor do novo milÃªnio atrÃ¡s de Oasis e Coldplay.', 'LinkinPark.jpg', '17/03/2018');

-- --------------------------------------------------------

--
-- Estrutura da tabela `musics`
--

CREATE TABLE `musics` (
  `idMusic` int(11) NOT NULL,
  `Music` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `bandId` int(11) DEFAULT NULL,
  `albumId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `musics`
--

INSERT INTO `musics` (`idMusic`, `Music`, `bandId`, `albumId`) VALUES
(1, 'Believer', 12, 3),
(2, 'Psychosocial', 1, 4),
(3, 'Ride', 10, 1),
(4, 'Migraine', 10, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`idAlbums`),
  ADD KEY `albumId` (`albumId`);

--
-- Indexes for table `bands`
--
ALTER TABLE `bands`
  ADD PRIMARY KEY (`idBand`);

--
-- Indexes for table `musics`
--
ALTER TABLE `musics`
  ADD PRIMARY KEY (`idMusic`),
  ADD KEY `albumId_idx` (`albumId`),
  ADD KEY `bandId_idx` (`bandId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `idAlbums` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bands`
--
ALTER TABLE `bands`
  MODIFY `idBand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `musics`
--
ALTER TABLE `musics`
  MODIFY `idMusic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`albumId`) REFERENCES `bands` (`idBand`);

--
-- Limitadores para a tabela `musics`
--
ALTER TABLE `musics`
  ADD CONSTRAINT `albumId` FOREIGN KEY (`albumId`) REFERENCES `albums` (`idAlbums`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bandId` FOREIGN KEY (`bandId`) REFERENCES `bands` (`idBand`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
