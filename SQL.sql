-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2025 at 02:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `jobrfnso_frontier`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `attend` varchar(100) NOT NULL,
  `meeting` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `email`, `phone`, `organization`, `position`, `attend`, `meeting`, `date_created`) VALUES
(1, 'faruk', 'soagafaruk@gmail.com', '09876543210', 'sdvds', 'se', '', '', '2025-06-13 09:41:21'),
(2, 'faruk', 'soagafaruk@gmail.com', '11111111111', 'aledoy', 'fullstack', '', '', '2025-06-13 12:27:14'),
(3, 'faruk', 'mayowadelu@gmail.com', '09876543210', 'aledoy', 'fullstack', 'Orange', '', '2025-06-13 15:47:27'),
(4, 'faruk', 'mayowadelu@gmail.com', '09876543210', 'aledoy', 'fullstack', 'Orange', '', '2025-06-13 15:47:54'),
(5, 'faruk', 'mayowadelu@gmail.com', '09876543210', 'aledoy', 'fullstack', 'Orange', '', '2025-06-13 15:49:44'),
(6, 'faruk', 'soagafaruk@gmail.com', '09876543210', 'aledoy', 'fullstack', 'SME Owners & Leaders', '', '2025-06-13 15:50:36'),
(7, 'faruk', 'soagafaruk@gmail.com', '09876543210', 'aledoy', 'fullstack', 'SME Owners & Leaders', '', '2025-06-13 15:51:48'),
(8, 'faruk', 'mayowadelu@gmail.com', '11111111111', 'aledoy', 'fullstack', 'Career Professionals & Jobseekers', '', '2025-06-16 12:23:50'),
(9, 'faruk', 'mayowadelu@gmail.com', '11111111111', 'aledoy', 'fullstack', 'Founders & Startup Teams', 'Physical', '2025-06-16 12:27:11'),
(10, 'faruk', 'mayowadelu@gmail.com', '11111111111', 'aledoy', 'fullstack', 'Founders & Startup Teams', 'Virtual', '2025-06-16 12:27:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
