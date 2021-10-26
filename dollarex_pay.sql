-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2019 at 04:38 AM
-- Server version: 10.3.20-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dollarex_pay`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_table`
--

CREATE TABLE `buy_table` (
  `id` int(11) NOT NULL,
  `send_method` varchar(250) NOT NULL,
  `receive_method` varchar(250) NOT NULL,
  `receive_amount` varchar(250) NOT NULL,
  `send_amount` varchar(250) NOT NULL,
  `BKash_Rocket` varchar(250) NOT NULL,
  `TRX_ID` varchar(250) NOT NULL,
  `receive_currency` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `dates` date NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_table`
--

INSERT INTO `buy_table` (`id`, `send_method`, `receive_method`, `receive_amount`, `send_amount`, `BKash_Rocket`, `TRX_ID`, `receive_currency`, `user_email`, `dates`, `status`) VALUES
(58, 'BKash', 'Neteller', '10', '970', '017316102441', '1000005dC10000', 'akashahmed628@gmail.com', 'ruyhanur@gmail.com', '2019-12-07', 'pending '),
(59, 'BKash', 'Payoneer', '50', '4500', '017317102555', '1000001Dxcj0005', 'lalu@gmail.com', 'ruyhanur@gmail.com', '2019-12-07', 'Completed '),
(60, 'BKash', 'Payoneer', '10', '900', '01794780466', '10000019xcj0005', 'akash@gmail.com', 'ruyhanur@gmail.com', '2019-12-07', 'Received'),
(61, 'BKash', 'Neteller', '50', '4850', '01687848444', 'Hjkz', 'Pranto258@gmail.com', 'Pranto258@gmail.com', '2019-12-07', 'Completed   ');

-- --------------------------------------------------------

--
-- Table structure for table `dollarexpay`
--

CREATE TABLE `dollarexpay` (
  `id` int(11) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dollarexpay`
--

INSERT INTO `dollarexpay` (`id`, `u_name`, `email`, `password`) VALUES
(1, 'SKYFAR', 'akashahmed628@gmail.com', 'd6cb294025d46a64c4106374576433da'),
(2, 'Shohel', 'dollarexpay@gmail.com', '4780b84e8bd8cb99a22a23ea83dcd0f7');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_table`
--

CREATE TABLE `exchange_table` (
  `id` int(11) NOT NULL,
  `send_method` varchar(250) NOT NULL,
  `receive_method` varchar(250) NOT NULL,
  `send_amount` varchar(250) NOT NULL,
  `receive_amount` varchar(250) NOT NULL,
  `send_AC_email` varchar(250) NOT NULL,
  `receive_AC_email` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `dates` date NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sell_table`
--

CREATE TABLE `sell_table` (
  `id` int(11) NOT NULL,
  `send_method` varchar(250) NOT NULL,
  `receive_method` varchar(250) NOT NULL,
  `send_amount` varchar(250) NOT NULL,
  `receive_amount` varchar(250) NOT NULL,
  `BKash_Rocket` varchar(250) NOT NULL,
  `send_currency` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `dates` date NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell_table`
--

INSERT INTO `sell_table` (`id`, `send_method`, `receive_method`, `send_amount`, `receive_amount`, `BKash_Rocket`, `send_currency`, `user_email`, `dates`, `status`) VALUES
(32, 'Payoneer', 'BKash', '10', '830', '01710322662', 'mdatikur@gmail.com', 'ruyhanur@gmail.com', '2019-12-07', 'Completed '),
(33, 'Skrill', 'Rocket', '80', '7040', '01734020514', 'mdshohel@gmail.com', 'ruyhanur@gmail.com', '2019-12-07', 'Re Check '),
(34, 'Neteller', 'Rocket', '179', '15752', '017317102555', 'mdatikur@gmail.com', 'ruyhanur@gmail.com', '2019-12-07', 'Pending '),
(35, 'Advcash', 'BKash', '200', '16600', '01734020514', 'shohelmanik007@gmail.com', 'ruyhanur@gmail.com', '2019-12-07', 'Completed ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_name`, `email`, `password`) VALUES
(20, 'Sky Far', 'akashahmed628@gmail.com', '202cb962ac59075b964b07152d234b70'),
(21, 'Ruyhan Rahman', 'ruyhanur@gmail.com', '202cb962ac59075b964b07152d234b70'),
(22, 'Rana Hamid ', 'ranahamid722705@gmail.com', 'e29edcf58470c9fe328d3852fc780ebe'),
(23, 'Sayadat Sakib', 'sayadatsakib@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(24, 'Pranto', 'Pranto258@gmail.com', '8ab52bb260cc0fe68a237717b83f09da'),
(25, 'akashahmed628@gmail.com', 'akashahmed628@gmail.com', 'd6cb294025d46a64c4106374576433da'),
(26, 'akashahmed628@gmail.com', 'sadi.sakib0196@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy_table`
--
ALTER TABLE `buy_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dollarexpay`
--
ALTER TABLE `dollarexpay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_table`
--
ALTER TABLE `exchange_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_table`
--
ALTER TABLE `sell_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy_table`
--
ALTER TABLE `buy_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `dollarexpay`
--
ALTER TABLE `dollarexpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exchange_table`
--
ALTER TABLE `exchange_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sell_table`
--
ALTER TABLE `sell_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
