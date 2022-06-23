-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 12:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhome`
--

-- --------------------------------------------------------

--
-- Table structure for table `catégorie`
--

CREATE TABLE `catégorie` (
  `ID_catégorie` int(5) NOT NULL,
  `Nom_catégorie` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catégorie`
--

INSERT INTO `catégorie` (`ID_catégorie`, `Nom_catégorie`) VALUES
(1, 'apartment'),
(2, 'villa'),
(3, 'house'),
(4, 'duplex');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ID_client` int(5) NOT NULL,
  `Nom` varchar(250) DEFAULT NULL,
  `Prenom` varchar(250) DEFAULT NULL,
  `cin` varchar(9) DEFAULT NULL,
  `number` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `pass` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ID_client`, `Nom`, `Prenom`, `cin`, `number`, `email`, `pass`) VALUES
(26, 'zobair', 'soodi', 'KB121212', '0625124512', 'soodi.zobair.solicode@gmail.com', '12312312'),
(28, 'amine', 'salmi', 'KB202810', '0698160482', 'amine@gmail.com', '12345678'),
(29, 'nada', 'bouyahya', 'KC101010', '0610281245', 'nada@gmail.com', '14141414'),
(30, 'nada', 'bouyahya', 'KC101010', '0610281245', 'nada@gmail.com', '14141414');

-- --------------------------------------------------------

--
-- Table structure for table `favori`
--

CREATE TABLE `favori` (
  `ID_client` int(5) NOT NULL,
  `ID_house` int(5) NOT NULL,
  `Date_ajouter` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galary`
--

CREATE TABLE `galary` (
  `ID_image` int(5) NOT NULL,
  `ID_house` int(5) DEFAULT NULL,
  `image` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galary`
--

INSERT INTO `galary` (`ID_image`, `ID_house`, `image`) VALUES
(3, 1, 'houses 1.png'),
(4, 2, 'houses 2.png'),
(5, 3, 'houses 3.png'),
(6, 4, 'houses 4.png'),
(7, 1, 'img2_detail.png'),
(8, 1, 'img3_detail.png');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `ID_house` int(5) NOT NULL,
  `ID_catégorie` int(5) DEFAULT NULL,
  `profile_pic` varchar(254) DEFAULT NULL,
  `adress` varchar(254) DEFAULT NULL,
  `price` decimal(3,0) DEFAULT NULL,
  `description` varchar(254) DEFAULT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`ID_house`, `ID_catégorie`, `profile_pic`, `adress`, `price`, `description`, `title`) VALUES
(1, 3, 'profile_img1.png', 'TANGIER 90090-9 room house', '300', 'house\r\nhouse 3 pièces en bon état, avec vue dégagée – 139m2 – Boulevard du Général de tenger (59100)\r\n\r\n- Vue dégagée\r\n- Quartier recherché de Roubaix\r\n- Parking collectif\r\n- 2 sall', '9-room house in good condition with mezzanine, cellar and lift – 63 m² – Rue de Sèze – Lyon'),
(2, 1, 'profile_img2.png', '1 Avenue Tanger, 94100 Saint-Maur-des-Fossés', '500', 'Appartement 1 pièce en très bon état, avec balcon, de 26 m²', '5-room Appartement in good condition with mezzanine, cellar and lift – 63 m² – Rue de Sèze – Lyon'),
(3, 2, 'profile_img3.png', '18 tanger, 92800 sidi driss', '900', 'villa 3 pièces en bon état avec parking et cave, de 98 m²', '11-room villa in good condition with mezzanine, cellar and lift – 63 m² – Rue de tanger – Lyon'),
(4, 2, 'profile_img4.png', '50 Route tanger, 69800 Saint-tanger', '990', 'villa 4 pièces en bon état avec jardin et piscine, de 119 m²', '15-room villa in good condition with mezzanine, cellar and lift – 63 m² – Rue de Sèze – Lyon');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID_review` int(5) NOT NULL,
  `ID_house` int(5) DEFAULT NULL,
  `ID_client` int(5) DEFAULT NULL,
  `Note` int(5) DEFAULT NULL,
  `Commentaire` varchar(254) DEFAULT NULL,
  `Date_ajout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID_review`, `ID_house`, `ID_client`, `Note`, `Commentaire`, `Date_ajout`) VALUES
(1, 1, 26, 5, 'nice website', '2022-06-22'),
(7, 1, 28, 5, 'nice website and i love it waw ', '2022-06-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catégorie`
--
ALTER TABLE `catégorie`
  ADD PRIMARY KEY (`ID_catégorie`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID_client`);

--
-- Indexes for table `favori`
--
ALTER TABLE `favori`
  ADD PRIMARY KEY (`ID_client`,`ID_house`),
  ADD KEY `ID_house` (`ID_house`);

--
-- Indexes for table `galary`
--
ALTER TABLE `galary`
  ADD PRIMARY KEY (`ID_image`),
  ADD KEY `ID_house` (`ID_house`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`ID_house`),
  ADD KEY `ID_catégorie` (`ID_catégorie`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID_review`),
  ADD KEY `ID_house` (`ID_house`),
  ADD KEY `ID_client` (`ID_client`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catégorie`
--
ALTER TABLE `catégorie`
  MODIFY `ID_catégorie` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `ID_client` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `galary`
--
ALTER TABLE `galary`
  MODIFY `ID_image` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `ID_house` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID_review` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favori`
--
ALTER TABLE `favori`
  ADD CONSTRAINT `favori_ibfk_1` FOREIGN KEY (`ID_client`) REFERENCES `clients` (`ID_client`),
  ADD CONSTRAINT `favori_ibfk_2` FOREIGN KEY (`ID_house`) REFERENCES `house` (`ID_house`);

--
-- Constraints for table `galary`
--
ALTER TABLE `galary`
  ADD CONSTRAINT `galary_ibfk_1` FOREIGN KEY (`ID_house`) REFERENCES `house` (`ID_house`);

--
-- Constraints for table `house`
--
ALTER TABLE `house`
  ADD CONSTRAINT `house_ibfk_1` FOREIGN KEY (`ID_catégorie`) REFERENCES `catégorie` (`ID_catégorie`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`ID_house`) REFERENCES `house` (`ID_house`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`ID_client`) REFERENCES `clients` (`ID_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
