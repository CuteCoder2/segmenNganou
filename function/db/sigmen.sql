-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 10:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigmen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `first_name`, `last_name`, `password`) VALUES
('amin@admin', 'lo2', 'col23', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `post_article`
--

CREATE TABLE `post_article` (
  `post_id` int(11) NOT NULL,
  `heading` varchar(60) NOT NULL,
  `body` varchar(2000) NOT NULL,
  `media` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT current_timestamp(),
  `view_state` varchar(60) NOT NULL DEFAULT 'not view'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_article`
--

INSERT INTO `post_article` (`post_id`, `heading`, `body`, `media`, `email`, `date_post`, `view_state`) VALUES
(3, 'qsfdsqf', 'sfsqfqsfezgferzgherhgetfgdrhdfheyr', '../img/IMG-1636490264.jpg', 'amin@admin', '2021-11-09 20:37:44', 'viewed'),
(4, 'pires', 's,kljqoijdziajfilqsjclsiqjfcilsjfolqsjf', '../img/IMG-1636586209.jpg', 'amin@admin', '2021-11-10 23:16:49', 'viewed'),
(5, 'cute killer', 'afzpjfsjfqjzofjafsjqkfjqpofjpazojfpazojfzpfqs', '../img/IMG-1636797912.pdf', 'amin@admin', '2021-11-13 10:05:12', 'viewed'),
(6, 'raims pires', 'qfdsgdshgfcffdhshdshgsdhsdhds', '../img/IMG-1636830359.mp4', 'amin@admin', '2021-11-13 19:05:59', 'viewed');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `email` varchar(100) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `series` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`email`, `first_name`, `last_name`, `password`, `series`) VALUES
('fotsopires10@gmail.com', 'et', 'etet', '12345678', 'eete'),
('jkjckqsjkljqs', 'fotso', 'fotso', '12345678', 'vdv;dlkvdsl'),
('pires@2', 'fotso', 'fotso', '12345678', 'sfqsfsq'),
('pires@admin', 'fotso', 'fotso', '12345678', 'gfdgfd'),
('raimspires10@gmail.com', 'pi', 'pi', '12345678', 'ghgj'),
('raimspires20@gmail.com', 'fds', 'srerz', '12345678', 'ezrzr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `post_article`
--
ALTER TABLE `post_article`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_article`
--
ALTER TABLE `post_article`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_article`
--
ALTER TABLE `post_article`
  ADD CONSTRAINT `fk_post_admin` FOREIGN KEY (`email`) REFERENCES `admin` (`email`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
