-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2025 at 08:40 PM
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
-- Database: `sort`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `Song_ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Album_Name` varchar(100) NOT NULL,
  `Song_Name` varchar(100) NOT NULL,
  `Date_Release` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`Song_ID`, `Name`, `Album_Name`, `Song_Name`, `Date_Release`) VALUES
(1, 'Avril Lavigne', 'Let Go', 'Sk8er Boi', '2002-09-09'),
(2, 'Avril Lavigne', 'The Best Damn Thing', 'Girlfriend', '2007-02-27'),
(3, 'Avril Lavigne', 'Goodbye Lullaby', 'What The Hell', '2011-01-10'),
(4, 'Lady Gaga', 'Mayhem', 'Abracadabra', '2025-02-03'),
(5, 'Lady Gaga', 'The Fame', 'Poker Face', '2008-09-23'),
(6, 'Lady Gaga', 'Artpop', 'Applause', '2013-08-12'),
(7, 'Sabrina Carpenter', 'Short n\' Sweet', 'Espresso', '2024-04-11'),
(8, 'Sabrina Carpenter', 'Man\'s Best Friend', 'ManChild', '2025-06-05'),
(9, 'Sabrina Carpenter', 'Emails I Can\'t Send', 'Nonsense', '2022-11-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`Song_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `Song_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
