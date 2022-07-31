-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 02:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `kritikdansaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `Name`, `email`, `kritikdansaran`) VALUES
(18, 'Ahmad Hidayat', 'ahmadhidayat120402@gmail.', 'Alhamdulillah makanannya enak dan tempatnya bagus'),
(19, 'Fandi', 'Fandi123@gmail.com', 'MaasyaAllah nikmat sekali masakannya, sebaiknya ketersediaan makanananya diperbanyak lagi'),
(20, 'Ardella', 'Ardella76@gmail.com', 'Alhamdulillah tempatnya sangat indah, sebaiknya sediakan lebih banyak tempat duduk '),
(21, 'Anam', 'anam12345@gmail.com', 'Alhamdulillah bumbunya terasa sekali khas Indonesia, sebaiknya ketersediaan porsi makanan lebih dipe'),
(22, 'Ary', 'Ary76543@gmail.com', 'MaasyaAllah jusnya terasa sekali di lidah dan aromanya sangat terasa, sebaiknya porsi minuman sepert'),
(23, 'Fais', 'fais12@gmail.com', 'wenak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
