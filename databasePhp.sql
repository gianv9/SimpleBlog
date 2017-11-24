-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2017 at 04:40 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasePhp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`) VALUES
(1, 'Title 1', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas ultricies augue.\r\n                        Donec hendrerit tellus a malesuada imperdiet. Sed sapien nibh,\r\n                        tristique vitae enim id, posuere dictum odio. Nullam vestibulum diam sed ipsum hendrerit placerat.\r\n                        Phasellus commodo, arcu sit amet fermentum commodo, tortor magna egestas sapien, ac sollicitudin\r\n                        nibh augue nec quam. Sed accumsan aliquet nibh, vel dictum eros lacinia sed. Vivamus aliquam ligula\r\n                        urna, eget imperdiet sapien venenatis eget. Praesent sem tellus, tincidunt nec elit ut, facilisis\r\n                        tempor elit. Morbi facilisis sem condimentum libero pellentesque, tempor blandit risus efficitur.\r\n                        Sed quis dolor tempor metus fringilla pharetra sed ut metus.\r\n\r\n                        Cras varius posuere accumsan. Sed pharetra pellentesque velit, eu tincidunt ligula posuere ut.\r\n                        Maecenas nulla libero, maximus eu dui tincidunt, auctor tempus quam. Aliquam iaculis fringilla velit,\r\n                        nec consequat sapien. Pellentesque scelerisque nulla vitae fermentum pellentesque. In vel laoreet nisl,\r\n                        quis pulvinar ante. Praesent mattis, eros vel dapibus interdum, urna.'),
(2, 'Title2', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas ultricies augue.\r\n                        Donec hendrerit tellus a malesuada imperdiet. Sed sapien nibh,\r\n                        tristique vitae enim id, posuere dictum odio. Nullam vestibulum diam sed ipsum hendrerit placerat.\r\n                        Phasellus commodo, arcu sit amet fermentum commodo, tortor magna egestas sapien, ac sollicitudin\r\n                        nibh augue nec quam. Sed accumsan aliquet nibh, vel dictum eros lacinia sed. Vivamus aliquam ligula\r\n                        urna, eget imperdiet sapien venenatis eget. Praesent sem tellus, tincidunt nec elit ut, facilisis\r\n                        tempor elit. Morbi facilisis sem condimentum libero pellentesque, tempor blandit risus efficitur.\r\n                        Sed quis dolor tempor metus fringilla pharetra sed ut metus.\r\n\r\n                        Cras varius posuere accumsan. Sed pharetra pellentesque velit, eu tincidunt ligula posuere ut.\r\n                        Maecenas nulla libero, maximus eu dui tincidunt, auctor tempus quam. Aliquam iaculis fringilla velit,\r\n                        nec consequat sapien. Pellentesque scelerisque nulla vitae fermentum pellentesque. In vel laoreet nisl,\r\n                        quis pulvinar ante. Praesent mattis, eros vel dapibus interdum, urna.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;
--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
