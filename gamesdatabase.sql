-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 07:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamesdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `rating` int(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`ID`, `name`, `age`, `rating`, `genre`, `photo`) VALUES
(1, 'pubg1', '+12', 17, '1', 'pubg.png'),
(2, 'call of duty', '+17', 9, '1', 'cod.png'),
(3, 'Marvel Futer Revolution', '+12', 5, '1', 'marvel.jpg '),
(4, 'Archero', '+4', 5, '1', 'archero.png'),
(5, 'Khan Academy kidy', '+4', 5, '3', 'khan.png'),
(6, 'Dute', '+4', 5, '3', 'Duet.png'),
(7, 'Toca Life World: Build storiess', '+4', 5, '3', 'toca.png'),
(8, 'English Fun Match', '+4', 5, '3', 'English_fun.png'),
(9, 'F1 Clash', '+13', 5, '2', 'f1-clash.jpg'),
(10, 'Table Tennis Touch', '+4', 5, '2', 'table.png'),
(11, 'FIFA Football', '+4', 5, '2', 'racing.png'),
(12, 'motorsport maneger racing', '+4', 5, '2', 'racing.png'),
(14, 'Tets', '+10', 0, '2', 'a1.PNG'),
(15, 'Last test', '+4', 0, '3', 'AM-DEF-7000-Defibrillator-Monitor.jpg'),
(16, 'Last test', '+4', 0, '3', 'AM-DEF-7000-Defibrillator-Monitor.jpg'),
(17, 'Tets App', '+2', 0, '2', 'Capture15.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`ID`, `name`) VALUES
(1, 'action'),
(2, 'sports'),
(3, 'education');

-- --------------------------------------------------------

--
-- Table structure for table `manger`
--

CREATE TABLE `manger` (
  `ID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manger`
--

INSERT INTO `manger` (`ID`, `username`, `password`, `email`) VALUES
(1, 'manegar', 123, 'm@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(100) NOT NULL,
  `game_ID` varchar(100) NOT NULL,
  `rating` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `game_ID`, `rating`, `created_at`) VALUES
(1, '2', 3, '2022-05-05 17:19:09'),
(2, '2', 1, '2022-05-05 17:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `write_review` varchar(100) NOT NULL,
  `game_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID`, `name`, `write_review`, `game_id`) VALUES
(1, 'Simon', 'Waaoh', 1),
(2, 'simon', 'rrrrr', 1),
(3, 'Name', 'Review', 1),
(4, 'Name', 'Review', 1),
(5, 'Name', 'Review', 1),
(6, 'Name', 'Review', 1),
(7, 'Name', 'Review', 1),
(8, 'Name', 'Review', 1),
(9, 'Name', 'Review', 1),
(10, 'Name', 'Review', 1),
(11, 'Simon', 'fooo', 2),
(12, 'hj', 'hjhhh', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `genre` (`genre`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `manger`
--
ALTER TABLE `manger`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
