-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 01:50 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csis2440`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_form`
--

CREATE TABLE `info_form` (
  `sno` int(11) NOT NULL,
  `FirstName` varchar(111) NOT NULL,
  `LastName` varchar(111) NOT NULL,
  `Email` varchar(111) NOT NULL,
  `Birthday` varchar(111) NOT NULL,
  `Password` varchar(111) NOT NULL,
  `Active` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_form`
--

INSERT INTO `info_form` (`sno`, `FirstName`, `LastName`, `Email`, `Birthday`, `Password`, `Active`) VALUES
(15, 'Avichal Bhargav', 'rrr', 'jaiswalv764@gmail.com', '26/12/1994', '233', 'Y'),
(16, 'Avichal Bhargavc', 'rrr', 'jaiswalv764@gmail.com', '26/12/1994', '124', 'Y'),
(17, 'cccc', 'rrr', 'jaiswalv764@gmail.com', '26/12/1994', '5555', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_form`
--
ALTER TABLE `info_form`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_form`
--
ALTER TABLE `info_form`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
