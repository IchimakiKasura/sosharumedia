-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 11:47 PM
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
-- Database: `sosharumedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `img_dir` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `passwords`, `fullname`, `img_dir`, `state`) VALUES
(1, 'ichimaki', 'kean4646', 'Ichimaki Kasura ✔', 'img/profile.5f5a7cf39f8f5.jpg', 'offline'),
(2, 'clainard', 'clainard', 'Clainard Prado ✔', 'img/profile.5f5a7d0ade9d4.jpg', 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `dir`
--

CREATE TABLE `dir` (
  `smpst` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dir`
--

INSERT INTO `dir` (`smpst`) VALUES
('5f64c534621ef.smpst'),
('5f64c7852aaf3.smpst'),
('5f64cd4185a1b.smpst'),
('5f64cdbea9ec3.smpst'),
('5f64ce011b34e.smpst'),
('5f64d00350739.smpst'),
('5f64d3e4e55bb.smpst'),
('5f64d998f2be6.smpst'),
('5f64d9a25776c.smpst'),
('5f65a6f570497.smpst');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `a` int(11) NOT NULL,
  `statement` varchar(255) NOT NULL,
  `string` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`a`, `statement`, `string`) VALUES
(1, 'w_img', '<span name=\"g\" class=\"d_ht\">\r\n<div tag=\"divP\" id=\"form_Post\">\r\n<img tag=\"imgP\" id=\"form_Picutre\" onclick=\"imgShow(this)\"/>\r\n<h1 tag=\"h1P\" id=\"form_Name\" title=\"\"></h1>\r\n<pre tag=\"preP\" class=\"form_Time\"></pre>\r\n<p tag=\"plP\" class=\"form_Status\" style=\"width:500px\">\r\n</p><br>\r\n<p class=\"s_mr\">.: Click the Image to view more :.</p>\r\n<div id=\'form_Limit_length\'>\r\n<img tag=\"imgP2\" max-height=\"500\" max-width=\"699\" width=\"100%\"onclick=\"imgShow(this)\">\r\n</div>\r\n<hr>\r\n<button id=\"form_Buttons\" onfocus=\"blur()\">\r\nLike\r\n</button>\r\n<button id=\"form_Buttons\" onfocus=\"blur()\">\r\nComment\r\n</button>\r\n<button id=\"form_Buttons\" onfocus=\"blur()\">\r\nShare\r\n</button>\r\n</div>\r\n</span>'),
(2, 'no_img', '<span name=\"g\" class=\"d_ht\">\r\n<div tag=\"divP\" id=\"form_Post\">\r\n<img tag=\"imgP\" id=\"form_Picutre\" onclick=\"imgShow(this)\"/>\r\n<h1 tag=\"h1P\" id=\"form_Name\" title=\"\"></h1>\r\n<pre tag=\"preP\" class=\"form_Time\"></pre>\r\n<p tag=\"plP\" class=\"form_Status\" style=\"width:500px\">\r\n</p>\r\n<hr>\r\n<button id=\"form_Buttons\" onfocus=\"blur()\">\r\nLike\r\n</button>\r\n<button id=\"form_Buttons\" onfocus=\"blur()\">\r\nComment\r\n</button>\r\n<button id=\"form_Buttons\" onfocus=\"blur()\">\r\nShare\r\n</button>\r\n</div>\r\n</span>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`a`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
