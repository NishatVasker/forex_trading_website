-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 09:14 PM
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
-- Database: `php-login-google`
--

-- --------------------------------------------------------

--
-- Table structure for table `marketdata`
--

CREATE TABLE `marketdata` (
  `id` int(11) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `opening_Price` varchar(128) NOT NULL,
  `closing_Price` varchar(128) NOT NULL,
  `profit` varchar(128) NOT NULL,
  `loss` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marketdata`
--

INSERT INTO `marketdata` (`id`, `company_name`, `opening_Price`, `closing_Price`, `profit`, `loss`) VALUES
(1, 'Company 1', '80', '64', '63', '42'),
(2, 'Company 2', '65', '58', '71', '29'),
(3, 'Company 3', '57', '55', '63', '22'),
(4, 'Company 4', '102', '146', '75', '33'),
(5, 'Company 5', '105', '82', '88', '23'),
(6, 'Company 1', '140', '101', '72', '48'),
(7, 'Company 2', '54', '65', '61', '39'),
(8, 'Company 3', '59', '135', '74', '24'),
(9, 'Company 4', '117', '70', '72', '31'),
(10, 'Company 5', '70', '126', '87', '20'),
(11, 'Company 1', '126', '112', '88', '43'),
(12, 'Company 2', '73', '61', '97', '28'),
(13, 'Company 3', '145', '94', '80', '44'),
(14, 'Company 4', '129', '128', '77', '49'),
(15, 'Company 5', '126', '94', '79', '38'),
(16, 'Company 1', '74', '136', '50', '29'),
(17, 'Company 2', '147', '58', '87', '49'),
(18, 'Company 3', '58', '50', '92', '26'),
(19, 'Company 4', '82', '108', '69', '36'),
(20, 'Company 5', '114', '77', '95', '50'),
(21, 'Company ', '82', '103', '61', '31'),
(22, 'Company ', '52', '74', '75', '40'),
(23, 'Company ', '58', '63', '96', '29'),
(24, 'Company ', '68', '70', '76', '32'),
(25, 'Company ', '103', '126', '51', '10'),
(26, 'Company 1', '107', '69', '52', '34'),
(27, 'Company 2', '51', '101', '71', '31'),
(28, 'Company 3', '79', '82', '85', '15'),
(29, 'Company 4', '116', '55', '100', '45'),
(30, 'Company 5', '54', '73', '93', '14'),
(31, 'Company 1', '89', '148', '85', '20'),
(32, 'Company 2', '149', '142', '92', '48'),
(33, 'Company 3', '149', '62', '90', '20'),
(34, 'Company 4', '130', '85', '82', '28'),
(35, 'Company 5', '120', '137', '58', '28'),
(36, 'Company 1', '51', '144', '51', '43'),
(37, 'Company 2', '63', '61', '79', '37'),
(38, 'Company 3', '114', '104', '74', '19'),
(39, 'Company 4', '149', '129', '87', '38'),
(40, 'Company 5', '103', '87', '100', '23'),
(41, 'Company 1', '123', '76', '80', '21'),
(42, 'Company 2', '120', '82', '100', '32'),
(43, 'Company 3', '128', '61', '50', '45'),
(44, 'Company 4', '84', '144', '68', '20'),
(45, 'Company 5', '53', '73', '92', '42'),
(46, 'Company 1', '124', '99', '90', '43'),
(47, 'Company 2', '94', '137', '97', '34'),
(48, 'Company 3', '109', '107', '97', '15'),
(49, 'Company 4', '77', '94', '83', '35'),
(50, 'Company 5', '117', '58', '68', '24'),
(51, 'Company 1', '56', '89', '84', '13'),
(52, 'Company 2', '142', '119', '87', '26'),
(53, 'Company 3', '106', '132', '67', '19'),
(54, 'Company 4', '79', '96', '80', '10'),
(55, 'Company 5', '136', '95', '56', '42'),
(56, 'Company 1', '149', '68', '66', '21'),
(57, 'Company 2', '95', '97', '67', '42'),
(58, 'Company 3', '57', '55', '85', '35'),
(59, 'Company 4', '139', '134', '93', '12'),
(60, 'Company 5', '122', '75', '56', '42'),
(61, 'Company 1', '133', '101', '57', '12'),
(62, 'Company 2', '95', '68', '83', '21'),
(63, 'Company 3', '119', '95', '99', '28'),
(64, 'Company 4', '69', '59', '86', '31'),
(65, 'Company 5', '85', '136', '50', '14'),
(66, 'Company 1', '106', '108', '83', '27'),
(67, 'Company 2', '140', '97', '52', '14'),
(68, 'Company 3', '84', '50', '70', '22'),
(69, 'Company 4', '146', '74', '74', '12'),
(70, 'Company 5', '62', '59', '51', '13'),
(71, 'Company 1', '128', '73', '84', '30'),
(72, 'Company 2', '149', '132', '100', '29'),
(73, 'Company 3', '72', '117', '97', '47'),
(74, 'Company 4', '126', '118', '89', '32'),
(75, 'Company 5', '76', '140', '77', '24'),
(76, 'Company 1', '57', '148', '63', '50'),
(77, 'Company 2', '144', '72', '50', '32'),
(78, 'Company 3', '102', '67', '97', '35'),
(79, 'Company 4', '79', '60', '73', '12'),
(80, 'Company 5', '92', '83', '89', '18'),
(81, 'Company 1', '127', '101', '59', '39'),
(82, 'Company 2', '71', '97', '61', '50'),
(83, 'Company 3', '114', '56', '71', '37'),
(84, 'Company 4', '80', '134', '79', '41'),
(85, 'Company 5', '56', '142', '100', '35'),
(86, 'Company 1', '65', '90', '56', '33'),
(87, 'Company 2', '83', '76', '71', '48'),
(88, 'Company 3', '112', '68', '69', '19'),
(89, 'Company 4', '122', '105', '84', '16'),
(90, 'Company 5', '134', '114', '70', '10'),
(91, 'Company 1', '72', '84', '86', '45'),
(92, 'Company 2', '77', '67', '76', '35'),
(93, 'Company 3', '98', '112', '93', '42'),
(94, 'Company 4', '116', '99', '81', '21'),
(95, 'Company 5', '139', '113', '88', '41'),
(96, 'Company 1', '50', '59', '93', '43'),
(97, 'Company 2', '77', '68', '62', '21'),
(98, 'Company 3', '87', '63', '57', '34'),
(99, 'Company 4', '103', '126', '95', '11'),
(100, 'Company 5', '90', '147', '95', '25'),
(101, 'Company 1', '69', '141', '70', '21'),
(102, 'Company 2', '123', '143', '81', '43'),
(103, 'Company 3', '113', '106', '97', '43'),
(104, 'Company 4', '108', '109', '92', '35'),
(105, 'Company 5', '123', '107', '74', '33'),
(106, 'Company 1', '57', '146', '55', '30'),
(107, 'Company 2', '78', '77', '66', '20'),
(108, 'Company 3', '70', '131', '56', '33'),
(109, 'Company 4', '76', '135', '61', '11'),
(110, 'Company 5', '112', '73', '97', '50'),
(111, 'Company 1', '76', '122', '53', '24'),
(112, 'Company 2', '107', '77', '89', '36'),
(113, 'Company 3', '148', '143', '100', '13'),
(114, 'Company 4', '114', '60', '96', '30'),
(115, 'Company 5', '114', '102', '97', '31'),
(116, 'Company 1', '80', '87', '55', '33'),
(117, 'Company 2', '80', '85', '60', '45'),
(118, 'Company 3', '86', '75', '72', '43'),
(119, 'Company 4', '95', '138', '90', '14'),
(120, 'Company 5', '106', '69', '80', '19'),
(121, 'Company 1', '99', '53', '80', '29'),
(122, 'Company 2', '77', '53', '53', '41'),
(123, 'Company 3', '145', '107', '75', '14'),
(124, 'Company 4', '70', '93', '90', '46'),
(125, 'Company 5', '66', '147', '76', '30'),
(126, 'Company 1', '149', '52', '53', '21'),
(127, 'Company 2', '74', '93', '70', '13'),
(128, 'Company 3', '124', '126', '74', '15'),
(129, 'Company 4', '94', '67', '54', '47'),
(130, 'Company 5', '132', '142', '88', '13'),
(131, 'Company 1', '55', '86', '64', '19'),
(132, 'Company 2', '97', '108', '54', '15'),
(133, 'Company 3', '78', '50', '80', '25'),
(134, 'Company 4', '60', '102', '62', '38'),
(135, 'Company 5', '98', '104', '94', '30'),
(136, 'Company 1', '55', '110', '91', '49'),
(137, 'Company 2', '97', '123', '69', '26'),
(138, 'Company 3', '88', '147', '90', '19'),
(139, 'Company 4', '84', '142', '86', '49'),
(140, 'Company 5', '83', '134', '76', '14'),
(141, 'Company 1', '90', '50', '66', '45'),
(142, 'Company 2', '95', '112', '74', '22'),
(143, 'Company 3', '86', '81', '93', '11'),
(144, 'Company 4', '103', '70', '100', '40'),
(145, 'Company 5', '100', '64', '72', '21'),
(146, 'Company 1', '145', '63', '91', '47'),
(147, 'Company 2', '112', '139', '86', '48'),
(148, 'Company 3', '147', '142', '90', '23'),
(149, 'Company 4', '95', '60', '91', '50'),
(150, 'Company 5', '82', '69', '70', '46'),
(151, 'Company 1', '102', '52', '75', '14'),
(152, 'Company 2', '81', '70', '80', '32'),
(153, 'Company 3', '107', '94', '87', '10'),
(154, 'Company 4', '138', '57', '75', '20'),
(155, 'Company 5', '103', '94', '81', '27'),
(156, 'Company 1', '108', '114', '78', '47'),
(157, 'Company 2', '52', '134', '80', '13'),
(158, 'Company 3', '84', '85', '73', '38'),
(159, 'Company 4', '97', '142', '70', '23'),
(160, 'Company 5', '97', '99', '73', '50'),
(161, 'Company 1', '136', '88', '50', '31'),
(162, 'Company 2', '123', '101', '92', '17'),
(163, 'Company 3', '79', '56', '54', '38'),
(164, 'Company 4', '67', '74', '68', '39'),
(165, 'Company 5', '87', '129', '88', '33'),
(166, 'Company 1', '140', '140', '81', '12'),
(167, 'Company 2', '92', '96', '58', '14'),
(168, 'Company 3', '102', '73', '58', '23'),
(169, 'Company 4', '84', '122', '99', '47'),
(170, 'Company 5', '101', '62', '92', '43'),
(171, 'Company 1', '115', '84', '92', '44'),
(172, 'Company 2', '132', '138', '93', '32'),
(173, 'Company 3', '91', '68', '96', '20'),
(174, 'Company 4', '140', '66', '75', '42'),
(175, 'Company 5', '94', '142', '94', '17'),
(176, 'Company 1', '148', '65', '90', '44'),
(177, 'Company 2', '127', '102', '100', '33'),
(178, 'Company 3', '68', '94', '56', '40'),
(179, 'Company 4', '71', '76', '93', '39'),
(180, 'Company 5', '131', '141', '77', '15'),
(181, 'Company 1', '94', '84', '53', '46'),
(182, 'Company 2', '79', '120', '52', '17'),
(183, 'Company 3', '141', '128', '95', '30'),
(184, 'Company 4', '110', '145', '91', '10'),
(185, 'Company 5', '135', '77', '90', '34'),
(186, 'Company 1', '138', '50', '79', '27'),
(187, 'Company 2', '100', '102', '100', '26'),
(188, 'Company 3', '144', '98', '80', '43'),
(189, 'Company 4', '141', '140', '78', '31'),
(190, 'Company 5', '107', '117', '80', '43'),
(191, 'Company 1', '124', '74', '98', '47'),
(192, 'Company 2', '61', '100', '72', '47'),
(193, 'Company 3', '94', '99', '67', '42'),
(194, 'Company 4', '131', '145', '66', '41'),
(195, 'Company 5', '136', '101', '82', '38'),
(196, 'Company 1', '75', '149', '66', '24'),
(197, 'Company 2', '81', '128', '55', '18'),
(198, 'Company 3', '58', '59', '96', '16'),
(199, 'Company 4', '149', '125', '96', '23'),
(200, 'Company 5', '127', '109', '56', '45'),
(201, 'Company 1', '91', '63', '55', '17'),
(202, 'Company 2', '53', '66', '50', '37'),
(203, 'Company 3', '108', '132', '77', '42'),
(204, 'Company 4', '104', '92', '58', '29'),
(205, 'Company 5', '50', '104', '51', '43');

-- --------------------------------------------------------

--
-- Table structure for table `profit`
--

CREATE TABLE `profit` (
  `id` int(11) NOT NULL,
  `investment` int(11) DEFAULT NULL,
  `profit_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(50) NOT NULL DEFAULT '',
  `gender` varchar(50) NOT NULL DEFAULT '',
  `full_name` varchar(100) NOT NULL DEFAULT '',
  `picture` varchar(255) NOT NULL DEFAULT '',
  `verifiedEmail` int(11) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL DEFAULT '',
  `balance` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `gender`, `full_name`, `picture`, `verifiedEmail`, `token`, `balance`) VALUES
(1, 'sm2azad@gmail.com', 'S.M. Manziul', 'Azad', '', 'S.M. Manziul Azad', 'https://lh3.googleusercontent.com/a/ACg8ocJf8tNOsbZhfIXoaahSBWLF_hSYEvsIOukrhM8od2iw=s96-c', 1, '113654066974504373097', 0.00),
(2, 'manziulazad@gmail.com', 'Manziul', 'Azad', '', 'Manziul Azad', 'https://lh3.googleusercontent.com/a/ACg8ocKf99V6KSdV1VG8DRp46Yppa0_pDiIHA-U1apQl3hiDkQ=s96-c', 1, '105725864015912665846', 50.00),
(3, 'ahmedbabu2622@gmail.com', 'Ahmed', 'Babu', '', 'Ahmed Babu', 'https://lh3.googleusercontent.com/a/ACg8ocL-plT5ubUqjjrzA5keJLDOy631G15emp2YJLAMKW4S=s96-c', 1, '110345305343427349656', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `user_transactions`
--

CREATE TABLE `user_transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` enum('invest','profit','loss') NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_transactions`
--

INSERT INTO `user_transactions` (`id`, `user_id`, `action`, `amount`, `timestamp`) VALUES
(1, 1, 'invest', 20.00, '2023-12-26 12:05:20'),
(2, 1, 'invest', 20.00, '2023-12-26 12:05:24'),
(3, 1, 'invest', 20.00, '2023-12-26 12:22:17'),
(4, 1, 'invest', 20.00, '2023-12-26 12:22:23'),
(5, 1, 'profit', 50.00, '2023-12-26 17:56:21'),
(6, 1, 'invest', 50.00, '2023-12-26 18:41:28'),
(7, 1, 'profit', 20.00, '2023-12-26 18:41:55'),
(8, 1, 'invest', 70.00, '2023-12-26 18:44:28'),
(9, 1, 'invest', 70.00, '2023-12-26 18:45:06'),
(10, 1, 'invest', 70.00, '2023-12-26 18:45:09'),
(11, 1, 'invest', 40.00, '2023-12-26 20:06:16'),
(12, 1, 'profit', 70.00, '2023-12-26 20:06:59'),
(13, 1, 'invest', 40.00, '2023-12-26 20:09:57'),
(14, 1, 'loss', 37.00, '2023-12-26 20:10:15'),
(15, 1, 'invest', 100.00, '2023-12-26 22:14:09'),
(16, 2, 'invest', 50.00, '2023-12-27 07:52:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marketdata`
--
ALTER TABLE `marketdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profit`
--
ALTER TABLE `profit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_transactions`
--
ALTER TABLE `user_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marketdata`
--
ALTER TABLE `marketdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_transactions`
--
ALTER TABLE `user_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_transactions`
--
ALTER TABLE `user_transactions`
  ADD CONSTRAINT `user_transactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
