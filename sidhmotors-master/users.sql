-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 02:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `referral` varchar(10) NOT NULL,
  `wallet` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `username`, `phone`, `email`, `pass`, `referral`, `wallet`) VALUES
(16, 'Kevin', 'BlackMeth', '+919207131215', 'mathewthomaskevin@gmail.com', '774608d1f79bfe88776c5fcd3ed7c1e7', 'AAAAA', 0),
(19, 'Jack', 'jackLantern', '1231231121', 'jack@gmail.com', '774608d1f79bfe88776c5fcd3ed7c1e7', 'v@N??', 0),
(20, 'Kevin', 'Kevcool771', '+919207131215', 'mathewthomaskevin1@gmail.com', '246acdd2007516a9e76f9f1e5a7231d1', '?3?]?', 0),
(21, 'Test Account', 'test1234', '1231231231', 'test@gmail.com', 'f926b91963b91e3e46d68f694ac5f4d5', 'd41d8', 600),
(25, 'bruce', 'bruce77', '1231231231', 'batman@gmail.com', '20b7cae4bba8e30618fedc2f0637c23b', '3f723', 200),
(26, 'Peter', 'spidey77', '1231231231', 'spidey77@gmail.com', 'fdfaa305906647809e87df887d362501', '2d57d', 200),
(27, 'Diana', 'wonderwoman', '1231231231', 'wonder@gmail.com', '9697300b728bcc75d1168d9c9028737c', '13b35', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
