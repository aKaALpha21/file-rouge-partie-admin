-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 09:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamingclub2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email_ad` varchar(50) NOT NULL,
  `password_ad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `firstname`, `lastname`, `email_ad`, `password_ad`) VALUES
(1, 'haitam', 'souiri', 'haitamsouiri3@gmail.com', 'ALpha212121');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `firstname`, `lastname`, `email`, `password`, `telephone`) VALUES
(4, 'HAITAM', 'SOUIRI', 'haitamsouiri@gmail.com', 'hhhh', '694535165'),
(5, 'frank', 'castle', 'frank@gmail.com', 'gggg', '694535165'),
(6, 'damon', 'salvatore', 'alpha@gmail.com', 'dddd', '682834121'),
(7, 'mikey', 'waterson', 'mikey@gmail.com', 'ffff', '1111111111'),
(8, 'test', 'last', 'last@gmail.com', 'hhhh', '0682834121');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `device` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `nombre-de-place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `price`, `device`, `description`, `nombre-de-place`) VALUES
(1, 5, 'PS4', '', '1 - 8'),
(2, 5, 'PS4', '', '1 - 8'),
(3, 5, 'PS4', '', '1 - 8'),
(4, 5, 'PS4', '', '1 - 8'),
(5, 5, 'PS4', '', '1 - 8'),
(6, 7, 'PS5', '', '1 - 8'),
(7, 7, 'PS5', '', '1 - 8'),
(8, 7, 'PS5', '', '1 - 8'),
(9, 7, 'PS5', '', '1 - 8'),
(10, 7, 'PS5', '', '1 - 8'),
(11, 8, 'PC', '', '1'),
(12, 8, 'PC', '', '1'),
(13, 8, 'PC', '', '1'),
(14, 8, 'PC', '', '1'),
(15, 8, 'PC', '', '1'),
(16, 8, 'PC', '', '1'),
(17, 8, 'PC', '', '1'),
(18, 8, 'PC', '', '1'),
(19, 8, 'PC', '', '1'),
(20, 8, 'PC', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `date_reservation` datetime NOT NULL DEFAULT current_timestamp(),
  `etat` varchar(10) NOT NULL,
  `nombre_de_joueur` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `date_debut`, `date_fin`, `date_reservation`, `etat`, `nombre_de_joueur`, `id_post`, `id_client`) VALUES
(5, '2023-06-23 12:29:21', '2023-06-23 16:29:21', '2023-06-16 12:29:21', 'confirm', 1, 1, 4),
(6, '2023-06-21 12:29:21', '2023-06-21 15:29:21', '2023-06-16 12:29:21', 'confirm', 5, 6, 5),
(8, '2023-06-24 15:56:08', '2023-06-24 19:56:08', '2023-06-16 15:56:08', 'en attente', 1, 8, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id-post` (`id_post`),
  ADD KEY `id-client` (`id_client`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
