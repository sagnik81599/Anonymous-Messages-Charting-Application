-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2025 at 05:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `message_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip` varchar(255) NOT NULL,
  `mac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg`, `time`, `ip`, `mac`) VALUES
('hi', '2024-11-17 13:12:24', '::1', '0A-00-27-00-00-11'),
('sahg', '2024-11-17 13:12:34', '::1', '0A-00-27-00-00-11'),
('Hi Everyone', '2024-11-17 14:10:37', '::1', '0A-00-27-00-00-11'),
('hello ', '2024-11-18 14:00:26', '::1', '0A-00-27-00-00-11'),
('Hello sir', '2024-11-22 08:35:15', '::1', '0A-00-27-00-00-11'),
('daddy says good night', '2024-11-22 17:53:14', '::1', '0A-00-27-00-00-11'),
('Happy new Year', '2025-01-02 10:55:06', '::1', '50-84-92-A5-F1-F4'),
('Welcome Guys.', '2025-01-02 11:07:36', '::1', '50-84-92-A5-F1-F4'),
('hii', '2025-03-14 13:42:51', '::1', '0A-00-27-00-00-09'),
('🤧 complete ', '2025-03-19 10:32:58', '172.20.10.1', '0A-00-27-00-00-09'),
('Tui maagi', '2025-03-19 14:59:42', '172.18.1.221', '0A-00-27-00-00-09'),
('tor choke tan pore geche', '2025-03-20 07:40:04', '10.0.68.33', '0A-00-27-00-00-09'),
('Fuck U sagnik ...ah ah ah', '2025-03-20 12:12:50', '172.20.10.9', '0A-00-27-00-00-09'),
('Hi bivu', '2025-03-22 17:35:50', '192.168.29.239', '0A-00-27-00-00-09'),
('Hiii, কেমন আছো অন্তহীন অন্তরালে?', '2025-03-30 19:41:18', '192.168.29.230', '0A-00-27-00-00-09'),
('Babli tero mobile,\r\nHaaire tero ismile.\r\nXO tattooed all over my badyy ahhhhh.\r\nTaasshhhu', '2025-03-30 19:44:26', '192.168.29.227', '0A-00-27-00-00-09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`) VALUES
(1, 'sagnik', 's@gmail.com', '$2y$10$3kBqIPKWw01hUD14QvU60e3k.eUmYoFYdtjZvmoVIJ20am/Q08.Xa'),
(2, '2321', '21', '$2y$10$NahTYHLQuFdSuCtYCZqDI.aYHFeZLinJ7x7OUyTPD27hOhsP/Nns2'),
(5, 'Saggy', 'saggy@gmail.com', '$2y$10$nRFVvdiEnYscYJpndpDFp.9tRtEWgudQFYJQy61bmFWbMsG6DHLQu'),
(6, 'sagnik04', 'sagnik@gmail.com', '2002'),
(7, 'God12', 'god@gmail.com', '$2y$10$dZhOsf7d.kBiL7rkuZsflOz5EtFwzCk4gAiGxsie40fY4H9Y0P4nG'),
(8, 'TapasBivu', 'tapassaha837@gmail.com', '$2y$10$3SpNCbZBg1FIuCjV4LVJlus2iCKqFa8mtEbY/Cymin7oSEd7.v7GS'),
(9, 'Sana07', 'Tanishaduttatolly07@gmail.com ', '$2y$10$I2lktvz9jglvKzJi4XFNkeaB.45mVPm/wSIXpvYvsyc7Crq20aqlq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
