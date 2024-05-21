-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 09:22 AM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `cruddata`
--

CREATE TABLE `cruddata` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cruddata`
--

INSERT INTO `cruddata` (`id`, `name`, `email`, `phno`, `address`, `password`) VALUES
(8, 'SWARNALI SINGHA12', 'swarnalisingha76@gmail.com12', '9832348190', '50/10 DEVI CHOUDHURANI SARANI,Milan pally,Siliguri.12', 'raj10@gmail.com12'),
(9, 'Rajshekhar Karmakar', 'rajshekharkarmakar.slg@gmail.com1', '9832348190', 'belgharia', 'raj10@2003'),
(11, 'raj', 'raj@gmail.com', '9832348190', '50/10 DEVI CHOUDHURANI SARANI,Milan pally,Siliguri.', 'raj123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cruddata`
--
ALTER TABLE `cruddata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cruddata`
--
ALTER TABLE `cruddata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
