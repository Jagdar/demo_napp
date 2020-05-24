-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 02:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `nappdb`
--

CREATE TABLE `nappdb` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `avtar_path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nappdb`
--

INSERT INTO `nappdb` (`id`, `username`, `password`, `created_at`, `avtar_path`) VALUES
(0, '9876789', '$2y$10$AaR41LuQPKeE9NIt4LmJ/uamQwr3RJZwiy5BUTI4rpl0etfYkwVna', '2020-05-24 13:01:32', 'images/av6.png.jfif'),
(0, 'manio', '$2y$10$nr8til7IX0Wkrjmkhok80uPCbgBhcGl2jvnO1bDWZATeh2teWVR2y', '2020-05-24 13:02:42', 'images/av3.png'),
(0, 'sushant', '$2y$10$XWshO/qbYClSuQK.hrxpY.MrSjKCqo0S1aqaXhrU/HWOwViIGvAe6', '2020-05-24 13:03:42', 'images/av3.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `avtar_path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `avtar_path`) VALUES
(1, '7654321', '$2y$10$vkX6sojT9Dn/WkurlAvkteVltSyCVohMc6ZsldciGJm9kNYigSOWm', '2020-05-24 00:11:19', 'images/a.png'),
(2, 'manish', '$2y$10$uZVQ0yz5IWBC4.L4WTbqNuWKC2QHnmOm6Y/UUzAn8h.S6iT0nzbaO', '2020-05-24 00:39:14', 'images/a.png'),
(3, 'manisha', '$2y$10$Q4sqhlH17E/hNGcB9ZQp6.LYKTE4RvEsqHPQOzNPAo0RwiNWuHTsG', '2020-05-24 00:39:59', 'images/a.png'),
(4, '1702699', '$2y$10$mbiIxf.TEUbP2dlGMl1v.OdtoLORjsoAPgzd9dH6NKT8WIdeybGZ.', '2020-05-24 07:53:02', 'images/av2.png'),
(6, 'manisha1', '$2y$10$M7Qs9B2sjTzTGXbTrWLcFem3MYYALVTJga75EcWD74Y9J.dN/VKuu', '2020-05-24 08:25:46', 'images/av3.png'),
(7, 'mihir', '$2y$10$aeuye1AzzmCyfLmdIWuw9.nu9mXZIkUsxBIkYlIYDJDk5iwmcnH6G', '2020-05-24 11:24:22', 'images/av2.png'),
(8, 'mano', '$2y$10$BnOI0RsmYzKQtkk1HGXS/ubfeBrfy9g9WAgYfDGCE7BcjwQ5TK636', '2020-05-24 11:35:09', 'images/av6.png.jfif');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
