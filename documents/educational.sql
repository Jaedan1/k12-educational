-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 07:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educational`
--

-- --------------------------------------------------------

--
-- Table structure for table `compare-1-5`
--

CREATE TABLE `compare-1-5` (
  `id` int(20) NOT NULL,
  `value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `module-1-5`
--

CREATE TABLE `module-1-5` (
  `id` int(20) NOT NULL,
  `qsn` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `module-1-5-ans`
--

CREATE TABLE `module-1-5-ans` (
  `id` int(20) NOT NULL,
  `ans` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module-1-5-ans`
--

INSERT INTO `module-1-5-ans` (`id`, `ans`) VALUES
(5, '<h3 id=\"message\">  To see Hello world! click below.  </h>  \r\n                    <input type=\"button\" value=\"Click Me!\" onclick=\"displayHello();\"> \r\n\r\n\r\nfunction displayHello(){\r\n                                var msg;     \r\n                                msg = document.getElementById(\"message\");     \r\n                                msg.outerHTML = \"<h1>Hello, world! </h1>\";\r\n                                }');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `points` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `email`, `password`, `points`, `date`) VALUES
(12, 4783, 'adrian', 'adrian75@yahoo.com', 'adrian', 0, '2021-03-04 02:52:29'),
(13, 9223372036854775807, 'dummy1', 'dummy1@yahoo.com', 'dummy1', 0, '2021-03-05 20:26:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compare-1-5`
--
ALTER TABLE `compare-1-5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module-1-5`
--
ALTER TABLE `module-1-5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module-1-5-ans`
--
ALTER TABLE `module-1-5-ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `email` (`email`),
  ADD KEY `points` (`points`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compare-1-5`
--
ALTER TABLE `compare-1-5`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module-1-5`
--
ALTER TABLE `module-1-5`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module-1-5-ans`
--
ALTER TABLE `module-1-5-ans`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
