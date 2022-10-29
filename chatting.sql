-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 09:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatting`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `message` varchar(555) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `type` enum('Admin','User') NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_img` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `type`, `email`, `phone`, `password`, `profile_img`, `created_at`, `updated_at`) VALUES
(1, 'Sujal', 'Saxena', 'sujal', 'Admin', 'sujal@gmail.com', '8962576134', 'e10adc3949ba59abbe56e057f20f883e', '1667071062.png', '2022-10-29 12:40:08', '2022-10-29 19:20:45'),
(2, 'Ishu', 'Kaushik', 'ishu', 'User', 'ishu@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, '2022-10-29 12:56:19', '2022-10-29 18:26:19'),
(3, 'Shahid', 'Raja', 'shahid', 'User', 'shahid@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, '2022-10-29 13:12:13', '2022-10-29 18:42:13'),
(4, 'Yogesh', 'Chauhan', 'yogesh', 'User', 'yogesh@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, '2022-10-29 13:12:52', '2022-10-29 18:42:52'),
(5, 'Vinit', 'Garg', 'vinit', 'User', 'vinit@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, '2022-10-29 13:13:20', '2022-10-29 18:43:20'),
(6, 'Ankit', 'Thakur', 'ankit', 'User', 'ankit@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, '2022-10-29 13:13:50', '2022-10-29 18:43:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
