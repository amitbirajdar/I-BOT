-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 02:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibot`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`) VALUES
(1, 'Santro'),
(2, 'I20'),
(3, 'Creta'),
(4, 'Tucson');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stateID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `stateID`) VALUES
(1, 'Diadema', 1),
(2, 'Mauá', 1),
(3, 'Rio Grande da Serra', 1),
(4, 'Angra dos Reis', 2),
(5, 'Barra Mansa', 2),
(6, 'Belford Roxo', 2),
(7, 'Cabo Frio', 2),
(8, 'Aquiraz', 3),
(9, 'Canindé', 3),
(10, 'Caucaia', 3),
(11, 'Crato', 3),
(12, 'Blumenau', 4),
(13, 'Chapecó', 4),
(14, 'Criciúma', 4),
(15, 'Lages', 4),
(16, 'Aracruz', 5),
(17, 'Cariacica', 5),
(18, 'Colatina', 5),
(19, 'Linhares', 5),
(20, 'Guangzhou', 6),
(21, 'Shanghai', 6),
(22, 'Chongqing', 6),
(23, 'Beijing', 6),
(24, 'Baoding', 7),
(25, 'Qinhuangdao', 7),
(26, 'Tangshan', 8),
(27, 'Sanhe', 8),
(28, 'Paris', 11),
(29, 'Poissy', 11),
(30, 'Torbes', 12),
(31, 'Rodrez', 12),
(32, 'Auger-Saint-Vincent', 13),
(33, 'Aumatre', 13),
(34, 'Belfort', 14),
(35, 'Dole', 14),
(36, 'Colmar', 15),
(37, 'Obernai', 15),
(38, 'Gurugram', 16),
(39, 'Panipat', 16),
(40, 'Rewari', 16),
(41, 'Chandigarh', 16),
(42, 'Tirupati', 17),
(43, 'Vijayvada', 17),
(44, 'Elluru', 17),
(45, 'Nellore', 17),
(46, 'New Delhi', 18),
(47, 'Faridabad', 18),
(48, 'Chennai', 19),
(49, 'Madurai', 19),
(50, 'Coimbatore', 19),
(51, 'Salem', 19),
(52, 'Ballia', 20),
(53, 'Varanasi', 20),
(54, 'Lucknow', 20),
(55, 'Kanpur', 20),
(56, 'Los Angeles', 21),
(57, 'San Francisco', 21),
(58, 'San Diego', 21),
(59, 'Oakland', 21),
(60, 'lowa city', 22),
(61, 'Ames', 22),
(62, 'Waterloo', 22),
(63, 'Mason city', 22),
(64, 'New york city', 23),
(65, 'Buffalo', 23),
(66, 'Albany', 23),
(67, 'Yonkers', 23),
(68, 'Trenton', 24),
(69, 'Princeton', 24),
(70, 'Atlantic city', 24),
(71, 'Paterson', 24),
(72, 'Boston', 25),
(73, 'Cambridge', 25),
(74, 'Springfield', 25),
(75, 'Lowell', 25);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Brazil'),
(2, 'China'),
(3, 'France'),
(4, 'India'),
(5, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `partcost`
--

CREATE TABLE `partcost` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `Car` varchar(255) NOT NULL,
  `Paint cost` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partcost`
--

INSERT INTO `partcost` (`id`, `name`, `price`, `Car`, `Paint cost`) VALUES
(1, 'Hood', 11422, 'Santro', 3426),
(2, 'orvm', 2803, 'Santro', 870),
(3, 'Fender', 4586, 'Santro', 1375),
(4, 'Front bumper', 5969, 'Santro', 1790),
(5, 'Rear bumper', 10268, 'Santro', 3080),
(6, 'Front door', 18965, 'Santro', 5689),
(7, 'Rear door', 18965, 'Santro', 5689),
(8, 'Headlight', 6532, 'Santro', 0),
(9, 'Tail light', 3629, 'Santro', 0),
(10, 'Front Windshield', 11573, 'Santro', 0),
(11, 'Rear windshield', 12000, 'Santro', 0),
(12, 'Front foglamp', 4506, 'Santro', 0),
(13, 'Rear foglamp', 3406, 'Santro', 0),
(14, 'Front Sidewindow', 651, 'Santro', 0),
(15, 'Rear Sidewindow', 651, 'Santro', 0),
(16, 'Tailgate', 6242, 'Santro', 1872),
(17, 'Hood', 12321, 'I20', 3696),
(18, 'orvm', 9490, 'I20', 2847),
(19, 'Fender', 5645, 'I20', 1693),
(20, 'Front bumper', 7015, 'I20', 2104),
(21, 'Rear bumper', 3921, 'I20', 1176),
(22, 'Front door', 25967, 'I20', 7790),
(23, 'Rear door', 25967, 'I20', 7790),
(24, 'Headlight', 9851, 'I20', 0),
(25, 'Tail light', 7174, 'I20', 0),
(26, 'Front Windshield', 14161, 'I20', 0),
(27, 'Rear windshield', 15000, 'I20', 0),
(28, 'Front foglamp', 6717, 'I20', 0),
(29, 'Rear foglamp', 5617, 'I20', 0),
(30, 'Front Sidewindow', 1536, 'I20', 0),
(31, 'Rear Sidewindow', 1536, 'I20', 0),
(32, 'Tailgate', 6284, 'I20', 1885),
(49, 'Hood', 17186, 'Creta', 5155),
(50, 'orvm', 20901, 'Creta', 6270),
(51, 'Fender', 8714, 'Creta', 2614),
(52, 'Front bumper', 10479, 'Creta', 3143),
(53, 'Rear bumper', 45000, 'Creta', 13500),
(54, 'Front door', 42859, 'Creta', 12857),
(55, 'Rear door', 42859, 'Creta', 12857),
(56, 'Headlight', 17121, 'Creta', 0),
(57, 'Tail light', 13936, 'Creta', 0),
(58, 'Front Windshield', 21774, 'Creta', 0),
(59, 'Rear windshield', 22000, 'Creta', 0),
(60, 'Front foglamp', 11606, 'Creta', 0),
(61, 'Rear foglamp', 10175, 'Creta', 0),
(62, 'Front Sidewindow', 3146, 'Creta', 0),
(63, 'Rear Sidewindow', 3146, 'Creta', 0),
(64, 'Tailgate', 8224, 'Creta', 2467),
(65, 'Hood', 28667, 'Tucson', 8600),
(66, 'orvm', 42005, 'Tucson', 12601),
(67, 'Fender', 15319, 'Tucson', 4595),
(68, 'Front bumper', 18127, 'Tucson', 5438),
(69, 'Rear bumper', 11902, 'Tucson', 33570),
(70, 'Front door', 77676, 'Tucson', 23302),
(71, 'Rear door', 77676, 'Tucson', 23302),
(72, 'Headlight', 31709, 'Tucson', 0),
(73, 'Tail light', 26906, 'Tucson', 0),
(74, 'Front Windshield', 38203, 'Tucson', 0),
(75, 'Rear windshield', 40000, 'Tucson', 0),
(76, 'Front foglamp', 21444, 'Tucson', 0),
(77, 'Rear foglamp', 19154, 'Tucson', 0),
(78, 'Front Sidewindow', 6184, 'Tucson', 0),
(79, 'Rear Sidewindow', 6184, 'Tucson', 0),
(80, 'Tailgate', 13213, 'Tucson', 3964);

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `name`) VALUES
(1, 'Hood'),
(2, 'Front Bumper'),
(8, 'Rear bumper'),
(9, 'Tailgate'),
(10, 'Front door'),
(11, 'Rear door'),
(12, 'Fender');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(255) NOT NULL,
  `car` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `imagename` varchar(255) NOT NULL DEFAULT 'Whole part was replaced!',
  `damage` int(255) NOT NULL DEFAULT 0,
  `user_id` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `t_id` int(255) NOT NULL,
  `claim` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `car`, `name`, `imagename`, `damage`, `user_id`, `status`, `t_id`, `claim`) VALUES
(395, 'I20', 'Hood', 'background.jpg', 0, 8, 0, 1, 0),
(396, 'I20', 'Headlight', 'Full part Replacement!', 100, 8, 0, 1, 19702),
(397, 'I20', 'Steering Assembly', 'Full part Replacement!', 100, 8, 0, 1, 13500),
(398, 'I20', 'ORVM', 'Full part Replacement!', 100, 8, 0, 1, 9490),
(399, 'I20', 'Speakers', 'Full part Replacement!', 100, 8, 0, 1, 12000),
(400, 'I20', 'Exhaust', 'Full part Replacement!', 100, 8, 0, 1, 12000),
(401, 'I20', 'Break Lines', 'Full part Replacement!', 100, 8, 0, 1, 5250);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `countryID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `countryID`) VALUES
(1, 'Sao Paulo', 1),
(2, 'Rio de Janeiro', 1),
(3, 'Ceara', 1),
(4, 'Santa Catarina', 1),
(5, 'Espirito Santo', 1),
(6, 'Beijing', 2),
(7, 'Hebei', 2),
(8, 'Jiangsu', 2),
(9, 'Guangdong', 2),
(10, 'Guangdong', 2),
(11, 'Ile-de-France', 3),
(12, 'Midi-Pyrenees', 3),
(13, 'Picardie', 3),
(14, 'Franche-Comte', 3),
(15, 'Alsace', 3),
(16, 'Haryana', 4),
(17, 'Andhra Pradesh', 4),
(18, 'Delhi', 4),
(19, 'Tamil Nadu', 4),
(20, 'Uttar Pradesh', 4),
(21, 'California', 5),
(22, 'Iowa', 5),
(23, 'New York', 5),
(24, 'New Jersey', 5),
(25, 'Massachusetts', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`, `state`, `country`) VALUES
(8, 'Manan Bolia', 'mananbolia14@gmail.com', 'manan1', '9799996309', '46', '19/5-B margdarshan, Prof. N. S. Phadke marg, andheri(E)', '18', '4'),
(12, 'Harsh Agarwal', 'harshagg@gmail.com', 'harsh1', '9876543210', '64', 'jabfaiwdbckasuc', '23', '5'),
(13, 'vedang gupte', 'vedanggupte@gmail.com', 'aastha', '9820951637', '64', 'uyewfbWFB', '23', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partcost`
--
ALTER TABLE `partcost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partcost`
--
ALTER TABLE `partcost`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
