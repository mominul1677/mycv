-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2020 at 04:15 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

DROP TABLE IF EXISTS `sign_up`;
CREATE TABLE IF NOT EXISTS `sign_up` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email_addg` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_addg` (`email_addg`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `fname`, `lname`, `email_addg`, `user_pwd`) VALUES
(19, 'Saikat', 'Islam', 'saikat@gmail.com', '1234'),
(29, 'kalu Sakib', 'hossen', 'kalusakib11@gmail.com', '4321'),
(31, 'Sakib', 'Khan', 'sakib123@gmail.com', '12345'),
(32, 'Sumya', 'Akter', 'sumya@gmail.com', '1234'),
(33, 'Radoan', 'Hossain', 'radoan@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `db_hName` varchar(200) NOT NULL,
  `db_proName` varchar(200) NOT NULL,
  `db_email` varchar(200) NOT NULL,
  `db_fackboock` varchar(200) NOT NULL,
  `db_phoneNumber` varchar(200) NOT NULL,
  `db_pName` varchar(200) NOT NULL,
  `db_permanentAddress` varchar(200) NOT NULL,
  `db_presentAddress` varchar(200) NOT NULL,
  `db_workExperienc` varchar(200) NOT NULL,
  `db_skill` varchar(200) NOT NULL,
  `db_schoolName` varchar(200) NOT NULL,
  `db_schoolAddress` varchar(200) NOT NULL,
  `db_spYear` varchar(200) NOT NULL,
  `db_cName` varchar(200) NOT NULL,
  `db_cpYear` varchar(200) NOT NULL,
  `db_cAddress` varchar(200) NOT NULL,
  `db_uName` varchar(200) NOT NULL,
  `db_udName` varchar(200) NOT NULL,
  `db_upYear` varchar(200) NOT NULL,
  `db_uAddress` varchar(200) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `image_name` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `db_hName`, `db_proName`, `db_email`, `db_fackboock`, `db_phoneNumber`, `db_pName`, `db_permanentAddress`, `db_presentAddress`, `db_workExperienc`, `db_skill`, `db_schoolName`, `db_schoolAddress`, `db_spYear`, `db_cName`, `db_cpYear`, `db_cAddress`, `db_uName`, `db_udName`, `db_upYear`, `db_uAddress`, `user_email`, `image_name`) VALUES
(44, 'Sumya Akter', '', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', NULL, NULL),
(45, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL),
(46, 'Mominul', 'teacher', 'mi.saikat99@gmail.com', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', NULL, NULL),
(47, '', '', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', NULL, NULL),
(48, '', '', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', NULL, NULL),
(49, '', '', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', NULL, NULL),
(50, '', '', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', NULL, NULL),
(51, '', '', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', NULL, NULL),
(52, '', '', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', NULL, NULL),
(53, 'Mominul', 'teacher', 'mi.saikat99@gmail.com', 'sakib', '0123456', 'sakib ', 'jamgora', 'jamgora', '', '', '', '', '', '', '', '', '', '', '', ' ', NULL, NULL),
(54, 'Mominul', 'teacher', 'mi.saikat99@gmail.com', 'sakib', '0123456', 'sakib ', 'jamgora', 'jamgora', '', '', '', '', '', '', '', '', '', '', '', ' ', NULL, NULL),
(55, 'Mominul', 'teacher', 'mi.saikat99@gmail.com', 'sakib', '0123456', 'sakib ', 'jamgora', 'jamgora', 'null', 'n/a', 'scpsc', 'savar', '2013', 'scpsc', 'savar', '2016', 'saikat@gmail.com', 'CSE', '2021', ' ashulia', '', NULL),
(56, 'Radoan', 'Developer', 'raodanhossaiinpream@outlook.com', 'sakib', '0123456', 'sakib ', 'jamgora', 'jamgora', 'null', 'n/a', 'scpsc', 'savar', '2013', 'scpsc', 'savar', '2016', 'saikat@gmail.com', 'CSE', '2021', ' ashulia', 'saikat@gmail.com', 'uploads/12-removebg-preview.jpg'),
(57, 'Sakib Khhan', 'teacher', 'sakib123@gmail.com', 'sakib', '01396587654', 'sakib Khan ', 'Dhaka', 'Dhaka', 'owner of axbd', 'Phython', 'scpsc', 'savar', '2013', 'scpsc', 'savar', '2016', 'diu', 'CSE', '2021', ' ashulia', 'sakib123@gmail.com', NULL),
(58, '', '', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', 'sakib123@gmail.com', NULL),
(59, 'Radoan', 'Developer', 'radoan@gmail.com', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', 'radoan@gmail.com', 'uploads/72544924_551740272255690_4897217011928530944_n.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
