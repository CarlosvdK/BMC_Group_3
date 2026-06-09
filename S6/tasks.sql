-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 26, 2023 at 07:59 AM
-- Server version: 5.7.34
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasks`
--
CREATE DATABASE IF NOT EXISTS `tasks` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tasks`;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `title`, `description`, `created_at`, `iduser`) VALUES
(3, 'id01', 'Repair Milennium Falcon........', '2021-06-10 14:16:54', 7),
(4, 'Rp36', 'Flight Tatoonie soon.', '2021-06-10 14:17:15', 7),
(5, 'DE45', 'Laser combat trainning', '2021-06-10 14:17:52', 6),
(6, 'FT12', 'Meditation day', '2021-06-10 14:18:24', 6),
(7, 'AD01', 'Systema maintenance', '2021-06-10 14:18:44', 4),
(8, 'Maintenence 4', 'M$', '2022-02-14 12:43:37', 7),
(9, 'TR-9090', 'Repair X-Wing.', '2022-05-25 18:38:22', 6);


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `firstname`, `lastname`, `admin`) VALUES
(4, 'admin', 'admin', 'System', 'Administrator', 1),
(6, 'luke', 'luke', 'Luke', 'Skywalker', 0),
(7, 'han', 'han', 'Han', 'Solo', 0),
(8, 'dark', 'dark', 'Dark', 'Vader', 0),
(9, 'Obi', 'obi', 'Obi Wan', 'Kenobi', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
