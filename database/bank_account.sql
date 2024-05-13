-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 10:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accId` int(255) NOT NULL,
  `balance` float DEFAULT 0,
  `pwd` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accId`, `balance`, `pwd`, `email`) VALUES
(2, 8, 'yasser', 'yasser.dalali@gmail.com'),
(3, 200, 'JohnDoe1985!', 'john.doe@example.com'),
(4, 0, 'JaneSmith$2020', 'jane.smith@example.com'),
(5, 2, 'AliceWonder123', 'alice.wonder@example.com'),
(6, 4500, 'BobBuilder99#', 'bob.builder@example.com'),
(7, 3200, 'CarolSinger2021', 'carol.singer@example.com'),
(8, 1800, 'DavidMiller!23', 'david.miller@example.com'),
(9, 20000, 'EmilyWhite$4', 'emily.white@example.com'),
(10, 3800, 'FrankJones#77', 'frank.jones@example.com'),
(11, 4200, 'GraceMoore$$', 'grace.moore@example.com'),
(12, 2900, 'HenryBrown*1', 'henry.brown@example.com'),
(13, 3500, 'IsabelGreen!23', 'isabel.green@example.com'),
(14, 400, 'KyleHall2022', 'kyle.hall@example.com'),
(15, 4700, 'LindaKing$2023', 'linda.king@example.com'),
(16, 2600, 'MichaelLee!99', 'michael.lee@example.com'),
(17, 1400, 'NancyRogers#7', 'nancy.rogers@example.com'),
(18, 3100, 'OliverScott*8', 'oliver.scott@example.com'),
(19, 2300, 'PatriciaWright123', 'patricia.wright@example.com'),
(20, 3700, 'QuincyYoung$2024', 'quincy.young@example.com'),
(21, 500, 'RachelKim!123', 'rachel.kim@example.com'),
(22, 4800, 'SteveNguyen$$', 'steve.nguyen@example.com'),
(23, 2200, 'TinaWilson#5', 'tina.wilson@example.com'),
(24, 1600, 'UrsulaMorris2025', 'ursula.morris@example.com'),
(25, 4300, 'VictorHernandez!11', 'victor.hernandez@example.com'),
(26, 3300, 'WendyChen$123', 'wendy.chen@example.com'),
(27, 4200, 'XavierGarcia*2026', 'xavier.garcia@example.com'),
(28, 0, 'test', 'test'),
(35, 8690, 'reda123', 'redasbe3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `id` int(11) NOT NULL,
  `timestmp` datetime DEFAULT current_timestamp(),
  `ammount` decimal(10,2) NOT NULL,
  `fromacc` int(11) NOT NULL,
  `toacc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`id`, `timestmp`, `ammount`, `fromacc`, `toacc`) VALUES
(1, '2024-05-12 17:57:59', 100.00, 3, 5),
(2, '2024-05-12 18:09:44', 100.00, 3, 5),
(3, '2024-05-12 18:14:58', 100.00, 3, 5),
(4, '2024-05-12 18:19:24', 100.00, 3, 5),
(5, '2024-05-12 18:20:48', 100.00, 3, 5),
(6, '2024-05-12 18:21:41', 100.00, 3, 5),
(7, '2024-05-12 18:21:42', 100.00, 3, 5),
(8, '2024-05-12 18:21:42', 100.00, 3, 5),
(9, '2024-05-12 18:21:43', 100.00, 3, 5),
(10, '2024-05-12 18:21:43', 100.00, 3, 5),
(11, '2024-05-12 18:22:54', 100.00, 3, 5),
(12, '2024-05-12 18:24:57', 100.00, 3, 5),
(13, '2024-05-12 18:25:07', 100.00, 3, 5),
(14, '2024-05-12 18:25:27', 100.00, 3, 5),
(15, '2024-05-12 18:25:31', 100.00, 3, 5),
(16, '2024-05-12 18:25:40', 100.00, 3, 5),
(17, '2024-05-12 18:25:50', 100.00, 3, 5),
(18, '2024-05-12 18:25:51', 100.00, 3, 5),
(19, '2024-05-12 18:25:53', 100.00, 3, 5),
(20, '2024-05-12 18:25:56', 100.00, 3, 5),
(21, '2024-05-12 18:26:02', 100.00, 3, 5),
(22, '2024-05-12 18:26:04', 100.00, 3, 5),
(23, '2024-05-12 18:27:26', 100.00, 3, 5),
(24, '2024-05-12 18:27:57', 100.00, 3, 5),
(25, '2024-05-12 18:28:10', 100.00, 3, 5),
(26, '2024-05-12 18:28:13', 100.00, 3, 5),
(27, '2024-05-12 18:28:59', 100.00, 3, 5),
(28, '2024-05-12 18:29:00', 100.00, 3, 5),
(29, '2024-05-12 18:29:01', 100.00, 3, 5),
(30, '2024-05-12 18:29:02', 100.00, 3, 5),
(31, '2024-05-12 18:30:23', 100.00, 5, 5),
(32, '2024-05-12 18:30:24', 100.00, 5, 5),
(33, '2024-05-12 18:30:25', 100.00, 5, 5),
(34, '2024-05-12 18:30:25', 100.00, 5, 5),
(35, '2024-05-12 18:30:35', 100.00, 5, 3),
(36, '2024-05-12 18:30:35', 100.00, 5, 3),
(37, '2024-05-12 18:31:51', 100.00, 5, 3),
(38, '2024-05-12 18:32:00', 100.00, 5, 3),
(39, '2024-05-12 18:32:02', 100.00, 5, 3),
(40, '2024-05-12 18:32:06', 100.00, 5, 3),
(41, '2024-05-12 18:32:10', 100.00, 5, 3),
(42, '2024-05-12 18:32:24', 100.00, 5, 3),
(43, '2024-05-12 18:32:27', 100.00, 5, 3),
(44, '2024-05-12 18:32:34', 100.00, 5, 3),
(45, '2024-05-12 18:32:43', 3000.00, 5, 3),
(46, '2024-05-12 18:32:53', 3000.00, 5, 3),
(47, '2024-05-12 18:33:27', 3000.00, 5, 3),
(48, '2024-05-12 18:33:35', 3000.00, 5, 3),
(49, '2024-05-12 18:33:51', 3000.00, 5, 3),
(50, '2024-05-12 18:37:06', 3000.00, 5, 3),
(51, '2024-05-12 18:38:28', 3000.00, 5, 3),
(52, '2024-05-12 18:43:06', 100.00, 2, 3),
(53, '2024-05-12 18:43:14', 100.00, 2, 3),
(56, '2024-05-12 18:43:59', 100.00, 2, 4),
(57, '2024-05-12 18:44:42', 100.00, 2, 4),
(58, '2024-05-12 18:46:59', 1.00, 3, 4),
(59, '2024-05-12 18:47:00', 1.00, 3, 4),
(60, '2024-05-12 18:49:11', 1.00, 3, 4),
(61, '2024-05-12 18:49:57', 1.00, 3, 4),
(62, '2024-05-12 18:50:21', 1.00, 3, 4),
(63, '2024-05-12 18:50:25', 1.00, 3, 4),
(64, '2024-05-12 18:50:33', 1.00, 3, 4),
(65, '2024-05-12 18:52:21', 1.00, 3, 4),
(66, '2024-05-12 18:59:37', 26190.00, 3, 9),
(67, '2024-05-12 19:02:00', 2.00, 3, 5),
(68, '2024-05-12 19:12:04', 208.00, 4, 2),
(69, '2024-05-12 19:25:18', 2000.00, 4, 4),
(70, '2024-05-12 19:27:08', 2000.00, 4, 2),
(71, '2024-05-12 20:03:34', 2000.00, 2, 34),
(72, '2024-05-13 08:47:52', 200.00, 2, 3),
(73, '2024-05-13 09:41:39', 8690.00, 9, 32),
(74, '2024-05-13 09:42:38', 8690.00, 32, 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accId`);

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fromacc` (`fromacc`),
  ADD KEY `toacc` (`toacc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `accId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `trans`
--
ALTER TABLE `trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trans`
--
ALTER TABLE `trans`
  ADD CONSTRAINT `trans_ibfk_1` FOREIGN KEY (`fromacc`) REFERENCES `account` (`accId`),
  ADD CONSTRAINT `trans_ibfk_2` FOREIGN KEY (`toacc`) REFERENCES `account` (`accId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
