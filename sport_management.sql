-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 03:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `badminton`
--

CREATE TABLE `badminton` (
  `team_id` int(100) NOT NULL,
  `team_1_number` int(100) NOT NULL,
  `team_2_number` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `court_number` int(100) NOT NULL,
  `winning_team` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `badminton`
--

INSERT INTO `badminton` (`team_id`, `team_1_number`, `team_2_number`, `category`, `court_number`, `winning_team`) VALUES
(13, 1, 2, 'UG', 1, '1'),
(14, 3, 5, 'PG', 2, '3'),
(15, 4, 1, 'UG', 1, '1'),
(16, 2, 4, 'UG', 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `basketball`
--

CREATE TABLE `basketball` (
  `team_id` int(100) NOT NULL,
  `team_1_number` int(100) NOT NULL,
  `team_2_number` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `court_number` int(100) NOT NULL,
  `winning_team` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basketball`
--

INSERT INTO `basketball` (`team_id`, `team_1_number`, `team_2_number`, `category`, `court_number`, `winning_team`) VALUES
(9, 1, 2, 'UG', 1, '1'),
(10, 3, 5, 'PG', 2, '3'),
(11, 4, 1, 'UG', 1, '1'),
(12, 2, 4, 'UG', 2, '2');

-- --------------------------------------------------------

--
-- Stand-in structure for view `rank`
-- (See below for the actual view)
--
CREATE TABLE `rank` (
`rank` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(100) NOT NULL,
  `team_1_number` int(100) NOT NULL,
  `team_2_number` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sport` varchar(100) NOT NULL,
  `start_time` time(6) NOT NULL,
  `end_time` time(6) NOT NULL,
  `court_number` int(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `team_1_number`, `team_2_number`, `category`, `sport`, `start_time`, `end_time`, `court_number`, `Date`) VALUES
(1, 1, 2, 'UG', 'Tennis', '08:30:00.000000', '10:30:00.000000', 1, '0000-00-00'),
(2, 3, 5, 'PG', 'Tennis', '04:30:00.000000', '06:30:00.000000', 2, '0000-00-00'),
(3, 4, 1, 'UG', 'Tennis', '08:30:00.000000', '10:30:00.000000', 1, '0000-00-00'),
(4, 2, 4, 'UG', 'Tennis', '04:30:00.000000', '06:30:00.000000', 2, '0000-00-00'),
(5, 1, 2, 'UG', 'Volleyball', '08:30:00.000000', '10:30:00.000000', 1, '0000-00-00'),
(6, 3, 5, 'PG', 'Volleyball', '04:30:00.000000', '06:30:00.000000', 2, '0000-00-00'),
(7, 4, 1, 'UG', 'Volleyball', '08:30:00.000000', '10:30:00.000000', 1, '0000-00-00'),
(8, 2, 4, 'UG', 'Volleyball', '04:30:00.000000', '06:30:00.000000', 2, '0000-00-00'),
(9, 1, 2, 'UG', 'Basketball', '08:30:00.000000', '10:30:00.000000', 1, '0000-00-00'),
(10, 3, 5, 'PG', 'Basketball', '04:30:00.000000', '06:30:00.000000', 2, '0000-00-00'),
(11, 4, 1, 'UG', 'Basketball', '08:30:00.000000', '10:30:00.000000', 1, '0000-00-00'),
(12, 2, 4, 'UG', 'Basketball', '04:30:00.000000', '06:30:00.000000', 2, '0000-00-00'),
(13, 1, 2, 'UG', 'Badminton', '08:30:00.000000', '10:30:00.000000', 1, '0000-00-00'),
(14, 3, 5, 'PG', 'Badminton', '04:30:00.000000', '06:30:00.000000', 2, '0000-00-00'),
(15, 4, 1, 'UG', 'Badminton', '08:30:00.000000', '10:30:00.000000', 1, '0000-00-00'),
(16, 2, 4, 'UG', 'Badminton', '04:30:00.000000', '06:30:00.000000', 2, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `team_number` int(100) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `no_of_wins` int(100) NOT NULL,
  `no_of_losses` int(100) NOT NULL,
  `no_of_draws` int(100) NOT NULL,
  `total_points` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(100) NOT NULL,
  `team_number` int(100) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_number`, `team_name`, `category`) VALUES
(1, 1, 'college1', 'UG'),
(2, 2, 'college2', 'UG'),
(3, 3, 'college3', 'PG'),
(4, 4, 'college4', 'UG'),
(5, 5, 'college5', 'PG');

-- --------------------------------------------------------

--
-- Table structure for table `tennis`
--

CREATE TABLE `tennis` (
  `team_id` int(100) NOT NULL,
  `team_1_number` int(100) NOT NULL,
  `team_2_number` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `court_number` int(100) NOT NULL,
  `winning_team` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tennis`
--

INSERT INTO `tennis` (`team_id`, `team_1_number`, `team_2_number`, `category`, `court_number`, `winning_team`) VALUES
(1, 1, 2, 'UG', 1, '1'),
(2, 3, 5, 'PG', 2, '3'),
(3, 4, 1, 'UG', 1, '1'),
(4, 2, 4, 'UG', 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `volleyball`
--

CREATE TABLE `volleyball` (
  `team_id` int(100) NOT NULL,
  `team_1_number` int(100) NOT NULL,
  `team_2_number` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `court_number` int(100) NOT NULL,
  `winning_team` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volleyball`
--

INSERT INTO `volleyball` (`team_id`, `team_1_number`, `team_2_number`, `category`, `court_number`, `winning_team`) VALUES
(5, 1, 2, 'UG', 1, '1'),
(6, 3, 5, 'PG', 2, '3'),
(7, 4, 1, 'UG', 1, '1'),
(8, 2, 4, 'UG', 2, '2');

-- --------------------------------------------------------

--
-- Structure for view `rank`
--
DROP TABLE IF EXISTS `rank`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rank`  AS SELECT rank() over ( order by `scores`.`total_points` desc) AS `rank` FROM `scores` ORDER BY `scores`.`team_number` ASC  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `badminton`
--
ALTER TABLE `badminton`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `basketball`
--
ALTER TABLE `basketball`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `tennis`
--
ALTER TABLE `tennis`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `volleyball`
--
ALTER TABLE `volleyball`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `badminton`
--
ALTER TABLE `badminton`
  MODIFY `team_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `basketball`
--
ALTER TABLE `basketball`
  MODIFY `team_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tennis`
--
ALTER TABLE `tennis`
  MODIFY `team_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `volleyball`
--
ALTER TABLE `volleyball`
  MODIFY `team_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
