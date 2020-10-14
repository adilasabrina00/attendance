-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 06:30 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `fileupload_db`
--

CREATE TABLE `fileupload_db` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `staffNo` varchar(255) NOT NULL,
  `ICno` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `imglink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fileupload_db`
--

INSERT INTO `fileupload_db` (`id`, `fullname`, `staffNo`, `ICno`, `password`, `imglink`) VALUES
(29, 'DINA', '18DDT18F1011', '001122334455', '1234', 'uploads/2.jpg'),
(30, 'SYAKUR', '12345', '112233445566', '1234', 'uploads/3.jpg'),
(31, 'PRRIYA', '18DDT18F1179', '112233445566', '1234', 'uploads/PRRIYA.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_touch`
--

CREATE TABLE `tbl_touch` (
  `id_touch` int(11) NOT NULL,
  `id_staff` int(11) NOT NULL,
  `touch_in` datetime NOT NULL,
  `touch_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_touch`
--

INSERT INTO `tbl_touch` (`id_touch`, `id_staff`, `touch_in`, `touch_out`) VALUES
(35, 30, '2020-10-13 08:06:35', '2020-10-13 08:08:10'),
(36, 29, '2020-10-13 08:07:44', '2020-10-13 08:08:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fileupload_db`
--
ALTER TABLE `fileupload_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_touch`
--
ALTER TABLE `tbl_touch`
  ADD PRIMARY KEY (`id_touch`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fileupload_db`
--
ALTER TABLE `fileupload_db`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_touch`
--
ALTER TABLE `tbl_touch`
  MODIFY `id_touch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
