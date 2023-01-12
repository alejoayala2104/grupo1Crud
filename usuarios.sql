-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 09:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `cedusu` varchar(10) NOT NULL,
  `nomusu` varchar(50) NOT NULL,
  `apeusu` varchar(50) NOT NULL,
  `genusu` varchar(1) NOT NULL,
  `fecnac` date NOT NULL,
  `telusu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`cedusu`, `nomusu`, `apeusu`, `genusu`, `fecnac`, `telusu`) VALUES
('1233191314', 'Juan Camilo', 'López', 'M', '2006-01-31', '3226254587'),
('1233191315', 'Andrés Alejandro', 'Ayala Chamorro', 'M', '1998-01-29', '3226240407'),
('1244156254', 'Vanessa', 'López Gelpud', 'F', '1999-01-04', '3112548500'),
('1255412872', 'Valeria Giannia', 'Caicedo', 'F', '2001-06-05', '3215469852'),
('1266587251', 'Iván Andrés', 'Santacruz', 'M', '1998-06-09', '3234902154');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedusu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
