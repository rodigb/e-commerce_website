-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 02:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `livechat`
--

CREATE TABLE `livechat` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `live_message` text NOT NULL,
  `msgtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livechat`
--

INSERT INTO `livechat` (`id`, `username`, `live_message`, `msgtime`) VALUES
(30, 'adminajsdnsakld', 'Im selling some nike items, check my user out!', '2028-04-20 03:47:44'),
(31, 'bobsmith', 'oh really?\r\ni will contact you soon!', '2028-04-20 03:50:36'),
(35, 'admin', 'asd\r\n', '2020-04-29 08:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `privatemessages`
--

CREATE TABLE `privatemessages` (
  `id` int(11) NOT NULL,
  `from_user` varchar(255) NOT NULL,
  `to_user` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `read` tinyint(1) NOT NULL,
  `msgdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privatemessages`
--

INSERT INTO `privatemessages` (`id`, `from_user`, `to_user`, `subject`, `message`, `read`, `msgdate`) VALUES
(11, 'admin', 'rodi', 'asd', 'as', 0, '2025-04-20 14:36:49'),
(13, 'admin', 'admin', 'deepstest', 'hi im deeps and im testing this', 0, '2025-04-20 16:32:34'),
(15, 'admin', 'aaa', 'aaa', 'aa', 0, '2026-04-20 17:03:37'),
(21, 'admin', 'admin', 'RE: RE: deepstest', 'this is another test!', 0, '2026-04-20 19:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `profileimg` varchar(250) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `product1` varchar(255) NOT NULL,
  `desc1` text NOT NULL,
  `img1` varchar(200) NOT NULL,
  `size1` varchar(255) NOT NULL,
  `price1` decimal(38,2) NOT NULL,
  `product2` varchar(255) NOT NULL,
  `desc2` text NOT NULL,
  `img2` varchar(255) NOT NULL,
  `size2` varchar(255) NOT NULL,
  `price2` decimal(38,2) NOT NULL,
  `product3` varchar(255) NOT NULL,
  `desc3` text NOT NULL,
  `img3` varchar(255) NOT NULL,
  `size3` varchar(255) NOT NULL,
  `price3` decimal(38,2) NOT NULL,
  `product4` varchar(255) NOT NULL,
  `desc4` text NOT NULL,
  `img4` varchar(255) NOT NULL,
  `size4` varchar(255) NOT NULL,
  `price4` decimal(38,2) NOT NULL,
  `product5` varchar(255) NOT NULL,
  `desc5` text NOT NULL,
  `img5` varchar(255) NOT NULL,
  `size5` varchar(255) NOT NULL,
  `price5` decimal(38,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `active`, `username`, `profileimg`, `bio`, `product1`, `desc1`, `img1`, `size1`, `price1`, `product2`, `desc2`, `img2`, `size2`, `price2`, `product3`, `desc3`, `img3`, `size3`, `price3`, `product4`, `desc4`, `img4`, `size4`, `price4`, `product5`, `desc5`, `img5`, `size5`, `price5`) VALUES
(1, 'Deeps', 'Paul', 'rodix08@gmail.com', 'admin12345', 1, 'admin', 'Screenshot (1).png', 'i sell 2nd hand Primark clothing!', 'addidas', 'adkfjkpasdjadkpls', 'Screenshot (1).png', 'Medium, Large only', '10000.00', 'a', 'a', 'Screenshot (1).png', '', '1.00', 'aaa', 'askdkasdm', 'Screenshot (1).png', '', '10000.00', 'aaa', 'askdkasdm', 'Screenshot (1).png', '', '10000.00', 'aa', 'asdasdsda', 'Screenshot (1).png', '', '1.10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livechat`
--
ALTER TABLE `livechat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privatemessages`
--
ALTER TABLE `privatemessages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livechat`
--
ALTER TABLE `livechat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `privatemessages`
--
ALTER TABLE `privatemessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
