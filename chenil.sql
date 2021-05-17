-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 07:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chenil`
--
CREATE DATABASE IF NOT EXISTS `chenil` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chenil`;

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `chip` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `sterilized` tinyint(1) NOT NULL,
  `birthDate` date NOT NULL,
  `fk_person` int(11) NOT NULL,
  `fk_race` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `chip`, `name`, `sex`, `sterilized`, `birthDate`, `fk_person`, `fk_race`) VALUES
(1, '2ae9faa6-e20df7', 'Tabbie', 'M', 0, '2021-03-30', 5, 1),
(2, 'd7ae7e2c-1c85db', 'Pierson', 'M', 1, '2020-06-07', 2, 2),
(3, 'd2a4a665-e256-9', 'Brand', 'M', 1, '2021-02-12', 7, 3),
(4, '880c0310-b06d24', 'Rafael', 'M', 1, '2021-03-12', 5, 4),
(5, 'd5023369-4daa-a', 'Carny', 'M', 0, '2020-12-12', 4, 5),
(6, '50390c92-c47d-4', 'Olga', 'F', 0, '2020-11-01', 7, 6),
(7, 'e6fd34e3-0719aa', 'Georgeanna', 'F', 0, '2020-10-09', 1, 7),
(8, '3a111cbc-41158c', 'Donalt', 'M', 1, '2021-04-19', 1, 8),
(9, 'eef78c17-6fcb40', 'Pernell', 'M', 0, '2020-07-09', 2, 9),
(10, 'f480d3be-84a8-c', 'Dagny', 'M', 0, '2020-12-09', 7, 10),
(11, 'e263905e-d535-4', 'Elia', 'M', 0, '2020-11-01', 6, 1),
(12, '00e2b74f-04de96', 'Wilfred', 'M', 0, '2021-03-22', 9, 2),
(13, 'acde6f6a-040d27', 'Sawyer', 'M', 1, '2021-02-19', 8, 3),
(14, '747804bf-c42665', 'Jocelyne', 'F', 0, '2021-03-13', 7, 4),
(15, '1e408425-114e-4', 'Jory', 'M', 0, '2020-05-27', 10, 5),
(16, '34f596b2-8de7af', 'Dorolice', 'F', 1, '2020-06-09', 5, 6),
(17, '1c85dad6-e667-4', 'Rubi', 'F', 1, '2020-06-05', 4, 7),
(18, 'ff970d0e-10bd1c', 'Roxanne', 'F', 0, '2020-07-10', 4, 8),
(19, '34a211fd-7dd597', 'Auberta', 'F', 1, '2020-07-04', 8, 9),
(20, '24f3f0d9-9690-8', 'Casey', 'F', 0, '2020-07-10', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `animals_vaccines`
--

CREATE TABLE `animals_vaccines` (
  `fk_animal` int(11) NOT NULL,
  `fk_vaccine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `birthDate` date NOT NULL,
  `email` varchar(60) NOT NULL,
  `telephone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `firstName`, `lastName`, `birthDate`, `email`, `telephone`) VALUES
(1, 'Susi', 'Toupe', '1974-11-15', 'stoupe0@symantec.com', '6685851293'),
(2, 'Eveline', 'Joyner', '1970-08-31', 'ejoyner1@cloudflare.com', '7861614104'),
(3, 'Eba', 'Penquet', '1996-07-01', 'epenquet2@walmart.com', '7779636737'),
(4, 'Justina', 'Dearth', '1987-10-21', 'jdearth3@hc360.com', '5481337107'),
(5, 'Venus', 'Tolwood', '1982-04-09', 'vtolwood4@w3.org', '2896359988'),
(6, 'Napoleon', 'Jencey', '1984-01-31', 'njencey5@csmonitor.com', '5625961927'),
(7, 'Kain', 'Wrist', '1976-09-09', 'kwrist6@mayoclinic.com', '5729661592'),
(8, 'Vernor', 'Titchen', '1979-06-21', 'vtitchen7@moonfruit.com', '2342462343'),
(9, 'Carlen', 'Bratton', '1998-12-12', 'cbratton8@zimbio.com', '7919696106'),
(10, 'April', 'Le Noire', '1991-11-08', 'alenoire9@boston.com', '1604641535');

-- --------------------------------------------------------

--
-- Table structure for table `races`
--

CREATE TABLE `races` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fk_species` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `races`
--

INSERT INTO `races` (`id`, `name`, `fk_species`) VALUES
(1, 'Border Collie', 1),
(2, 'Bouledogue français', 1),
(3, 'Chihuaha', 1),
(4, 'Dobermann', 1),
(5, 'Bouvier bernois', 1),
(6, 'Bull terrier', 1),
(7, 'Saint-bernard', 1),
(8, 'Jack Russell', 1),
(9, 'Dalmatien', 1),
(10, 'Lévrier', 1);

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`id`, `name`) VALUES
(1, 'Canidée');

-- --------------------------------------------------------

--
-- Table structure for table `stays`
--

CREATE TABLE `stays` (
  `id` int(11) NOT NULL,
  `dateBegin` date NOT NULL,
  `dateEnd` date NOT NULL,
  `fk_animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `name`, `description`) VALUES
(1, 'Maladie de Carré', 'A faire à 4 et 7 ans. Lorem ipsum dolor sit amet, constes?'),
(2, 'Parvovirose ', 'A faire à 4 et 7 ans. Lorem ipsum dolor sit amet, consecte'),
(3, 'Leptospirose ictérigène', 'A faire à 2, 3, 4, 5, 7 et 8 ans. Lorem ipsum duo voluptas voluptates?'),
(4, 'Hépatite contagieuse', 'A faire à 4 et 7 ans. Lorem ipsum dolor sit amet, uptates?'),
(5, 'Toux des chenils', 'A faire à 2, 3, 4, 5, 6, 7 et 8 ans. Lorem ipsum doloroluptas voluptates?'),
(6, 'Rage', 'Tous les 3 ans pour les pays de l\'\'Union européenne. Lorem ipsum duo voluptas voluptates?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animal.fk_race` (`fk_race`),
  ADD KEY `animal.fk_person` (`fk_person`);

--
-- Indexes for table `animals_vaccines`
--
ALTER TABLE `animals_vaccines`
  ADD KEY `animal_vaccine.fk_animal` (`fk_animal`),
  ADD KEY `animal_vaccine.fk_vaccine` (`fk_vaccine`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`id`),
  ADD KEY `races.fk_species` (`fk_species`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stays`
--
ALTER TABLE `stays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stays.fk_animal` (`fk_animal`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `races`
--
ALTER TABLE `races`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `species`
--
ALTER TABLE `species`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stays`
--
ALTER TABLE `stays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animal.fk_person` FOREIGN KEY (`fk_person`) REFERENCES `persons` (`id`),
  ADD CONSTRAINT `animal.fk_race` FOREIGN KEY (`fk_race`) REFERENCES `races` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `animals_vaccines`
--
ALTER TABLE `animals_vaccines`
  ADD CONSTRAINT `animal_vaccine.fk_animal` FOREIGN KEY (`fk_animal`) REFERENCES `animals` (`id`),
  ADD CONSTRAINT `animal_vaccine.fk_vaccine` FOREIGN KEY (`fk_vaccine`) REFERENCES `vaccines` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `races`
--
ALTER TABLE `races`
  ADD CONSTRAINT `races.fk_species` FOREIGN KEY (`fk_species`) REFERENCES `species` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stays`
--
ALTER TABLE `stays`
  ADD CONSTRAINT `stays.fk_animal` FOREIGN KEY (`fk_animal`) REFERENCES `animals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




-- Add vaccines_animals data

--
-- Dumping data for table `races`
--

INSERT INTO `animals_vaccines` ( `fk_animal`, `fk_vaccine`) VALUES
(1,  1),
(1,  2),
(1,  3),
(2,  4),
(2, 5),
(2, 6),
(3, 1),
(3, 3),
(3, 6),
(3, 2);

-- Stays

insert into stays(dateBegin, dateEnd, fk_animal) values ("2015-04-24", "2020-05-19",1)
