-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 04, 2020 at 11:53 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(15) NOT NULL,
  `sender_email` varchar(60) NOT NULL,
  `receiver_email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender_email`, `receiver_email`, `message`) VALUES
(0, 'abdullahzakhil11@gmail.com', '16pwcse1498@uetpeshawar.edu.pk', 'Hi buddy, how are you doin?'),
(0, 'abdullahzakhilwal007@gmail.com', '16pwcse1498@uetpeshawar.edu.pk', 'Hello, can we meet tomorrow, please?'),
(0, '16pwcse1498@uetpeshawar.edu.pk', 'abbassaadat@gmail.com', 'Hello, you there?'),
(0, 'abbassaadat3@gmail.com', '16pwcse1498@uetpeshawar.edu.pk', 'Hello, you there?'),
(0, '16pwcse1498@uetpeshawar.edu.pk', 'jamesbond007@gmail.com', 'Hello Bond, we are meeting tomorrow?'),
(0, '16pwcse1498@uetpeshawar.edu.pk', 'jamesbond007@gmail.com', 'Hi, how are you?'),
(0, '', '', ''),
(0, 'ahadsaadat@gmail.com', '16pwcse1498@uetpeshawar.edu.pk', 'Hello Abd Ullah, come to the states sometimes! :)'),
(0, 'sidrasaadat@gmail.com', '16pwcse1498@uetpeshawar.edu.pk', 'Hello Uncle, how are you?'),
(0, 'mawasaadat@gmail.com', '16pwcse1498@uetpeshawar.edu.pk', 'Hello Mamo, how are you?'),
(0, 'hamzasaadat@gmail.com', '16pwcse1498@uetpeshawar.edu.pk', 'Hi mamo, how are you?\r\nfrom hamza'),
(0, '16pwcse1498@uetpeshawar.edu.pk', 'hamzasaadat@gmail.com', 'Hi hamza, fine thanks. how are you?');

-- --------------------------------------------------------

--
-- Table structure for table `regis_users`
--

DROP TABLE IF EXISTS `regis_users`;
CREATE TABLE IF NOT EXISTS `regis_users` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `profile_sr` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `regis_users`
--

INSERT INTO `regis_users` (`user_id`, `user_email`, `user_password`, `profile_sr`) VALUES
(0, 'abdullahzakhil11@gmail.com', 'abbaskhan', '0'),
(0, 'abdullahzakhil11@gmail.com', 'abbaskhan', '0'),
(0, 'abbassaadat3@gmail.com', 'the intruder', '0'),
(0, '16pwcse1498@uetpeshawar.edu.pk', 'jamesbond@007', '0'),
(0, 'abdullahzakhilwal007@gmail.com', 'jamesbond', '0'),
(0, 'abdullahzakhilwal007@gmail.com', 'jamesbond', '0'),
(0, 'Amansaadat@gmail.com', 'KOOL!', 'images/Amansaadat@gmail.com__myprofile-pic.jpg'),
(0, 'abbassaadat3@gmail.com', 'distinction@school', 'images/abbassaadat3@gmail.com__Abbas.jpg'),
(0, '', '', 'images/__'),
(0, '', '', 'images/__'),
(0, '', '', 'images/__'),
(0, '', '', 'images/__'),
(0, '', '', 'images/__'),
(0, '', '', 'images/__'),
(0, 'jamesbond007@gmail.com', 'jamesbond007', 'images/jamesbond007@gmail.com__jamesbond.jpg'),
(0, 'abbassaadat3@gmail.com', 'abbassaadat', 'images/abbassaadat3@gmail.com__Abbas.jpg'),
(0, 'amankhan@gmail.com', 'amankhan', 'images/amankhan@gmail.com__'),
(0, '', '', 'images/__'),
(0, '', '', 'images/__'),
(0, '', '', 'images/__'),
(0, '', '', 'images/__'),
(0, 'ahadsaadat@gmail.com', 'ahadsaadat', 'images/ahadsaadat@gmail.com__myprofile-pic.jpg'),
(0, 'sidrasaadat@gmail.com', 'sidrasaadat', 'images/sidrasaadat@gmail.com__Abbas.jpg'),
(0, 'iqrasaadat@gmail.com', 'iqrasaadat', 'profile-pics/iqrasaadat@gmail.com__Abbas.jpg'),
(0, 'mawasaadat@gmail.com', 'mawasaadat', 'profile-pics/mawasaadat@gmail.com__abbas.jpg'),
(0, 'mawasaadat@gmail.com', 'mawasaadat', 'profile-pics/mawasaadat@gmail.com__abbas.jpg'),
(0, 'hamzasaadat@gmail.com', 'hamzasaadat', 'profile-pics/hamzasaadat@gmail.com__abbas.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
