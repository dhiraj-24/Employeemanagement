-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 01:10 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `name` varchar(150) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(70) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `signature` varchar(150) NOT NULL,
  `profile` varchar(150) NOT NULL,
  `pasword` varchar(200) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_type`, `name`, `designation`, `mobile`, `email`, `gender`, `address`, `dob`, `doj`, `blood_group`, `signature`, `profile`, `pasword`, `created_date`) VALUES
(2, 3, 'Dhiraj', 'developer', '687465', 'dhiraj@gmail.com', 'other', 'xvxcv', '2023-09-10', '2023-09-15', 'o+', 'uploads/495094527_wallpaper.jpg', 'uploads/297175493_wallpaper.jpg', '', '2023-09-02 21:15:44'),
(4, 3, 'test', 'test designation', '674583746', 'test@gmailcom', 'female', 'test adress', '2023-09-07', '2023-09-15', 'o', 'uploads/1609442222_IMG_20170526_151555.jpg', 'uploads/1092975336_IMG_20170522_080409.jpg', '', '2023-09-03 08:25:02'),
(5, 3, 'biswa', 'desihgnrrrr', '36456456', 'biswa@gmail.com', 'female', 'bhubaneswar odisha', '2023-09-16', '2023-10-04', 'g', 'uploads/1012427452_IMG-20161205-WA0011.jpg', 'uploads/2090448458_IMG-20170218-WA0002.jpg', 'biswa123', '2023-09-03 15:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `username` varchar(40) NOT NULL,
  `pasword` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `username`, `pasword`) VALUES
(1, 'superadmin', 'superadmin', '202cb962ac59075b964b07152d234b70'),
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
