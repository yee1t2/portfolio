-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 11:48 AM
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
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Yearlevel` int(100) NOT NULL,
  `Favcolor` varchar(100) NOT NULL,
  `FavFood` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Username`, `Yearlevel`, `Favcolor`, `FavFood`, `Password`, `role`) VALUES
(79, 'falco', 5, 'black', '', 'gfgffg', 'user'),
(80, 'john', 9, 'yellow', 'bloxy cola', '122wewe', 'user'),
(82, 'ada', 12, 'magenta', 'burger', 'aaaaa', 'user'),
(84, 'ger', 11, 'yellow', 'burger', 'ghghgh', 'user'),
(87, 'lebron', 12, 'purple', 'tacos', 'lakers', 'user'),
(89, 'butler', 2, 'red', 'coffee', 'heat', 'user'),
(92, 'lillard', 9, 'green', 'tacos', 'bucks', 'user'),
(93, 'Gerrard', 11, 'purple', 'unagi', 'pendulum', 'admin'),
(94, 'david', 6, 'red', 'pizza', 'arataka', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
