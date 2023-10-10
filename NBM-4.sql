-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2023 at 06:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NBM`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE `tblregister` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cono` bigint(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `UserType` varchar(50) NOT NULL DEFAULT 'UserType'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`id`, `name`, `email`, `cono`, `username`, `password`, `UserType`) VALUES
(7, 'zeel', 'zeelgondaliya83@gmail.com', 9978367592, 'zeel123', '2610', 'Tenant'),
(8, 'dhruv', '21bmiit052@gmail.com', 9090989878, 'dhruv123', '4474', 'Tenant'),
(9, 'khwahish', '21bmiit040@gmail.com', 9012345456, 'khwahish123', '2811', 'Admin'),
(10, 'yash', '21bmiit026@gmail.com', 8976565456, 'yash123', '9090', 'Admin'),
(11, 'Dev', '21bmiit30@gmail.coom', 9090674523, 'dev12', '1212', 'Tenant'),
(12, 'Harsh', '21bmiit090@gmail.com', 9098761212, 'harsh12', '7878', 'Owner'),
(13, 'niraj', '21bmiit084@gmail.com', 9056454323, 'niraj12', '1019', 'Owner'),
(14, 'janki', '21bmiit0050@gmail.com', 9043267890, 'janki123', '6745', 'Owner'),
(15, 'harshil', '21bmiit052@gmail.com', 7865345234, 'harshil89', '2020', 'Tenant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblregister`
--
ALTER TABLE `tblregister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblregister`
--
ALTER TABLE `tblregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
