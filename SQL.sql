-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 16, 2025 at 10:09 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

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
  `attend` varchar(100) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `certified` varchar(10) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `email`, `phone`, `organization`, `position`, `attend`, `category`, `certified`, `date_created`) VALUES
(4, 'Francis Badejo', 'phrancisgilbert@yahoo.com', '07042629011', 'Aledoy Solution Limited', 'Web Developer', 'Career Professionals & Jobseekers', '', '', '2025-06-15 19:01:50'),
(3, 'Francis Badejo', 'phrancisgilbert@yahoo.com', '07042629011', 'BAN BC72', 'Head, Human Resource', 'Founders & Startup Teams', '', '', '2025-06-15 18:51:32'),
(5, 'Olumide Abikoye', 'domains@aledoy.com', '08023443581', 'Aledoy Solution Limited', 'Web Developer', 'Founders & Startup Teams', 'Physical', 'yes', '2025-06-16 21:57:35');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
