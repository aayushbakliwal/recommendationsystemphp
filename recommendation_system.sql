-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 12:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recommendation_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`) VALUES
(1, 'john'),
(2, 'johny'),
(3, 'john'),
(4, 'xws'),
(5, 'ywa'),
(6, 'aayush'),
(7, 'shown'),
(8, 'santa');

-- --------------------------------------------------------

--
-- Table structure for table `users_books`
--

CREATE TABLE `users_books` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `books_name` varchar(255) NOT NULL,
  `books_rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_books`
--

INSERT INTO `users_books` (`id`, `users_id`, `books_name`, `books_rating`) VALUES
(1, 1, '2 state', 0),
(2, 2, 'revolution 2020', 4),
(3, 3, 'avengers', 8),
(4, 1, 'fault of stars', 9),
(13, 6, 'tiatnic', 4),
(14, 4, 'revolution 2020', 6),
(15, 4, '2 state', 7),
(16, 5, '2 state', 9),
(17, 5, 'twilight', 6),
(18, 1, 'avengers', 7),
(19, 1, 'superman', 7),
(20, 2, 'superman', 7),
(21, 2, 'deadpool', 8),
(22, 2, '2 state', 3),
(23, 3, 'deadpool', 7),
(24, 6, '2 state', 8),
(25, 7, 'deadpool', 5),
(26, 7, 'tiatnic', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_books`
--
ALTER TABLE `users_books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_books`
--
ALTER TABLE `users_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
