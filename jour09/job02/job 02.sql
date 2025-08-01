-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20250718.d42db65a1e
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2025 at 02:34 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jour09`
--

-- --------------------------------------------------------

--
-- Table structure for table `etage`
--

CREATE TABLE `etage` (
  `id` int NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `numero` int DEFAULT NULL,
  `superficie` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `etage`
--

INSERT INTO `etage` (`id`, `nom`, `numero`, `superficie`) VALUES
(1, 'RDC', 0, 500),
(2, 'R+1', 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `etages`
--

CREATE TABLE `etages` (
  `id` int NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `numero` int DEFAULT NULL,
  `superficie` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `etages`
--

INSERT INTO `etages` (`id`, `nom`, `numero`, `superficie`) VALUES
(1, 'RDC', 0, 500),
(2, 'R+1', 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `naissance` date DEFAULT NULL,
  `sexe` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`id`, `prenom`, `nom`, `naissance`, `sexe`, `email`) VALUES
(1, 'Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@gmail.com'),
(2, 'Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@gmail.com'),
(3, 'Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@gmail.com'),
(4, 'Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@gmail.com'),
(5, 'Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@gmail.com'),
(6, 'Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben.habib@gmail.com'),
(7, 'Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `salles`
--

CREATE TABLE `salles` (
  `id` int NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `id_etage` int DEFAULT NULL,
  `capacite` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `salles`
--

INSERT INTO `salles` (`id`, `nom`, `id_etage`, `capacite`) VALUES
(1, 'Lounge', 1, 100),
(2, 'Studio Son', 1, 5),
(3, 'Broadcasting', 2, 50),
(4, 'Bocal Peda', 2, 4),
(5, 'Coworking', 2, 80),
(6, 'Studio Video', 2, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etage`
--
ALTER TABLE `etage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etages`
--
ALTER TABLE `etages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_etage` (`id_etage`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etage`
--
ALTER TABLE `etage`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `etages`
--
ALTER TABLE `etages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `salles`
--
ALTER TABLE `salles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `salles`
--
ALTER TABLE `salles`
  ADD CONSTRAINT `salles_ibfk_1` FOREIGN KEY (`id_etage`) REFERENCES `etage` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
