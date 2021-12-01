-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 06:43 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hikeyuk`
--
CREATE DATABASE IF NOT EXISTS `hikeyuk` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hikeyuk`;

-- --------------------------------------------------------

--
-- Stand-in structure for view `bioview`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `bioview`;
CREATE TABLE IF NOT EXISTS `bioview` (
`username` varchar(99)
,`age` varchar(99)
,`email` varchar(99)
,`phone` varchar(99)
,`role` varchar(99)
,`gender` varchar(99)
,`ig` text
,`twitter` text
,`fb` text
,`komen` varchar(99)
,`bioPic` varchar(99)
);

-- --------------------------------------------------------

--
-- Table structure for table `guider`
--

DROP TABLE IF EXISTS `guider`;
CREATE TABLE IF NOT EXISTS `guider` (
  `emailGuider` varchar(250) NOT NULL,
  `PriceRate` varchar(99) NOT NULL,
  `Status` varchar(99) NOT NULL,
  `phone` varchar(99) NOT NULL,
  `pic` text NOT NULL,
  `Comment_Other` varchar(99) NOT NULL,
  `MakDayang` varchar(99) NOT NULL,
  `BukitBendera` varchar(99) NOT NULL,
  `JandaBaik` varchar(99) NOT NULL,
  `TelagaSimpul` varchar(99) NOT NULL,
  `HarimauMenangis` varchar(99) NOT NULL,
  `Menderu` varchar(99) NOT NULL,
  PRIMARY KEY (`emailGuider`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guider`
--

INSERT INTO `guider` (`emailGuider`, `PriceRate`, `Status`, `phone`, `pic`, `Comment_Other`, `MakDayang`, `BukitBendera`, `JandaBaik`, `TelagaSimpul`, `HarimauMenangis`, `Menderu`) VALUES
('dziya.uzzaman@gmail.com', '15', 'checked', '0139181521', '1b54efef3720f6ac39647fc420d4a6f9.png', '', 'checked', 'checked', ' ', ' ', 'checked', 'checked'),
('jazz@gmail.com', '25', 'checked', '0111', '', '', 'checked', 'checked', 'checked', ' ', 'checked', ' ');

-- --------------------------------------------------------

--
-- Stand-in structure for view `guiderbio`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `guiderbio`;
CREATE TABLE IF NOT EXISTS `guiderbio` (
`email` varchar(250)
,`price` varchar(99)
,`status` varchar(99)
,`phone` varchar(99)
,`pic` text
,`comment` varchar(99)
,`md` varchar(99)
,`bb` varchar(99)
,`jb` varchar(99)
,`ts` varchar(99)
,`hm` varchar(99)
,`menderu` varchar(99)
,`ig` text
,`fb` text
,`twitter` text
,`gender` varchar(99)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `guiderdetail`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `guiderdetail`;
CREATE TABLE IF NOT EXISTS `guiderdetail` (
`name` varchar(99)
,`age` varchar(99)
,`phone` varchar(99)
,`role` varchar(99)
,`pic` text
,`ig` text
,`fb` text
,`twitter` text
,`komen` varchar(99)
,`price` varchar(99)
);

-- --------------------------------------------------------

--
-- Table structure for table `hiker`
--

DROP TABLE IF EXISTS `hiker`;
CREATE TABLE IF NOT EXISTS `hiker` (
  `email` varchar(99) NOT NULL,
  `username` varchar(99) NOT NULL,
  `age` varchar(99) NOT NULL,
  `comment` varchar(99) NOT NULL,
  `pic` varchar(99) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hiker`
--

INSERT INTO `hiker` (`email`, `username`, `age`, `comment`, `pic`) VALUES
('dziya.zaman@gmail.com', 'Zia', '21', '', '[HÃ¬nh áº£nh] Luffy One Piece trá»n bá»™ Ä‘áº¹p ngáº§u siÃªu cute full HD - 1920x1080.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

DROP TABLE IF EXISTS `program`;
CREATE TABLE IF NOT EXISTS `program` (
  `Id` int(99) NOT NULL AUTO_INCREMENT,
  `emailProgram` varchar(99) NOT NULL,
  `noPhone` varchar(99) NOT NULL,
  `Location` text NOT NULL,
  `NameId` text NOT NULL,
  `Guider` text NOT NULL,
  `Time` text NOT NULL,
  `Date` date NOT NULL,
  `TotalMember` int(99) NOT NULL,
  `Status` text NOT NULL,
  `Comment_Order` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`Id`, `emailProgram`, `noPhone`, `Location`, `NameId`, `Guider`, `Time`, `Date`, `TotalMember`, `Status`, `Comment_Order`) VALUES
(2, 'dziya.zaman@gmail.com', '0139381521', 'Mak Dayang', 'AiSunaIzumi', 'dziya.uzzaman@gmail.com', '17:02', '2021-06-05', 5, 'Done', 'bawak air cukup2'),
(3, 'dziya.zaman@gmail.com', '0139181521', 'Bukit Bendera', 'AiSunaIzumi', '', '11:11', '2021-06-06', 12, '', ''),
(5, 'dziya.zaman@gmail.com', '0139181521', 'Janda Mandi', 'ZIRAFAH', 'dziya.uzzaman@gmail.com', '08:00', '2021-06-08', 3, 'accept', 'Bawak Air woi');

-- --------------------------------------------------------

--
-- Stand-in structure for view `setupview`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `setupview`;
CREATE TABLE IF NOT EXISTS `setupview` (
`email` varchar(99)
,`user` varchar(99)
,`noPhone` varchar(99)
,`age` varchar(99)
,`gender` varchar(99)
,`ig` text
,`gb` text
,`twitter` text
,`price` varchar(99)
,`stat` varchar(99)
,`md` varchar(99)
,`bb` varchar(99)
,`jb` varchar(99)
,`ts` varchar(99)
,`hm` varchar(99)
,`menderu` varchar(99)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(99) NOT NULL,
  `passwordC` varchar(99) NOT NULL,
  `Age` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `noPhone` varchar(99) NOT NULL,
  `role` varchar(99) NOT NULL,
  `gender` varchar(99) NOT NULL,
  `pic` text NOT NULL,
  `instagram` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `passwordC`, `Age`, `email`, `noPhone`, `role`, `gender`, `pic`, `instagram`, `facebook`, `twitter`) VALUES
('PikAcChu', 'asuna98', '23', 'dziya.uzzaman@gmail.com', '0139181521', 'Guider', 'Lelaki', 'FB_IMG_1556269298091.jpg', 'https://www.instagram.com/dziya_uzzaman/', 'https://www.facebook.com/dziya.uzzaman/', 'https://twitter.com/AisunaDziya'),
('Zia', 'asuna98', '21', 'dziya.zaman@gmail.com', '0139181521', 'Hiker', 'Lelaki', 'D20181081701_thumb.png', 'https://www.instagram.com/dziya_uzzaman/', 'https://www.facebook.com/dziya.uzzaman/', 'https://twitter.com/AisunaDziya');

-- --------------------------------------------------------

--
-- Stand-in structure for view `userprogramview`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `userprogramview`;
CREATE TABLE IF NOT EXISTS `userprogramview` (
`Id` int(99)
,`userEmail` varchar(99)
,`phone` varchar(99)
,`location` text
,`guider` text
,`username` text
,`time` text
,`date` date
,`member` int(99)
,`status` text
,`comment` text
,`guiderName` varchar(99)
,`guiderPhone` varchar(99)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewprogram`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `viewprogram`;
CREATE TABLE IF NOT EXISTS `viewprogram` (
`id` int(99)
,`userEmail` varchar(99)
,`hikername` text
,`phone` varchar(99)
,`location` text
,`time` text
,`date` date
,`member` int(99)
,`stat` text
,`email` varchar(250)
,`md` varchar(99)
,`bb` varchar(99)
,`jb` varchar(99)
,`ts` varchar(99)
,`hm` varchar(99)
,`menderu` varchar(99)
);

-- --------------------------------------------------------

--
-- Structure for view `bioview`
--
DROP TABLE IF EXISTS `bioview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bioview`  AS  select `user`.`username` AS `username`,`user`.`Age` AS `age`,`user`.`email` AS `email`,`user`.`noPhone` AS `phone`,`user`.`role` AS `role`,`user`.`gender` AS `gender`,`user`.`instagram` AS `ig`,`user`.`twitter` AS `twitter`,`user`.`facebook` AS `fb`,`hiker`.`comment` AS `komen`,`hiker`.`pic` AS `bioPic` from (`user` join `hiker`) where `user`.`email` = `hiker`.`email` ;

-- --------------------------------------------------------

--
-- Structure for view `guiderbio`
--
DROP TABLE IF EXISTS `guiderbio`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `guiderbio`  AS  select `guider`.`emailGuider` AS `email`,`guider`.`PriceRate` AS `price`,`guider`.`Status` AS `status`,`guider`.`phone` AS `phone`,`guider`.`pic` AS `pic`,`guider`.`Comment_Other` AS `comment`,`guider`.`MakDayang` AS `md`,`guider`.`BukitBendera` AS `bb`,`guider`.`JandaBaik` AS `jb`,`guider`.`TelagaSimpul` AS `ts`,`guider`.`HarimauMenangis` AS `hm`,`guider`.`Menderu` AS `menderu`,`user`.`instagram` AS `ig`,`user`.`facebook` AS `fb`,`user`.`twitter` AS `twitter`,`user`.`gender` AS `gender` from (`guider` join `user`) where `user`.`email` = `guider`.`emailGuider` ;

-- --------------------------------------------------------

--
-- Structure for view `guiderdetail`
--
DROP TABLE IF EXISTS `guiderdetail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `guiderdetail`  AS  select `user`.`username` AS `name`,`user`.`Age` AS `age`,`user`.`noPhone` AS `phone`,`user`.`role` AS `role`,`user`.`pic` AS `pic`,`user`.`instagram` AS `ig`,`user`.`facebook` AS `fb`,`user`.`twitter` AS `twitter`,`guider`.`Comment_Other` AS `komen`,`guider`.`PriceRate` AS `price` from (`user` join `guider`) where `user`.`email` = `guider`.`emailGuider` ;

-- --------------------------------------------------------

--
-- Structure for view `setupview`
--
DROP TABLE IF EXISTS `setupview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `setupview`  AS  select `user`.`email` AS `email`,`user`.`username` AS `user`,`user`.`noPhone` AS `noPhone`,`user`.`Age` AS `age`,`user`.`gender` AS `gender`,`user`.`instagram` AS `ig`,`user`.`facebook` AS `gb`,`user`.`twitter` AS `twitter`,`guider`.`PriceRate` AS `price`,`guider`.`Status` AS `stat`,`guider`.`MakDayang` AS `md`,`guider`.`BukitBendera` AS `bb`,`guider`.`JandaBaik` AS `jb`,`guider`.`TelagaSimpul` AS `ts`,`guider`.`HarimauMenangis` AS `hm`,`guider`.`Menderu` AS `menderu` from (`user` join `guider`) where `user`.`email` = `guider`.`emailGuider` ;

-- --------------------------------------------------------

--
-- Structure for view `userprogramview`
--
DROP TABLE IF EXISTS `userprogramview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `userprogramview`  AS  select `program`.`Id` AS `Id`,`program`.`emailProgram` AS `userEmail`,`program`.`noPhone` AS `phone`,`program`.`Location` AS `location`,`program`.`Guider` AS `guider`,`program`.`NameId` AS `username`,`program`.`Time` AS `time`,`program`.`Date` AS `date`,`program`.`TotalMember` AS `member`,`program`.`Status` AS `status`,`program`.`Comment_Order` AS `comment`,`user`.`username` AS `guiderName`,`user`.`noPhone` AS `guiderPhone` from (`user` join `program`) where `program`.`Guider` = `user`.`email` ;

-- --------------------------------------------------------

--
-- Structure for view `viewprogram`
--
DROP TABLE IF EXISTS `viewprogram`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewprogram`  AS  select `program`.`Id` AS `id`,`program`.`emailProgram` AS `userEmail`,`program`.`NameId` AS `hikername`,`program`.`noPhone` AS `phone`,`program`.`Location` AS `location`,`program`.`Time` AS `time`,`program`.`Date` AS `date`,`program`.`TotalMember` AS `member`,`program`.`Status` AS `stat`,`guider`.`emailGuider` AS `email`,`guider`.`MakDayang` AS `md`,`guider`.`BukitBendera` AS `bb`,`guider`.`JandaBaik` AS `jb`,`guider`.`TelagaSimpul` AS `ts`,`guider`.`HarimauMenangis` AS `hm`,`guider`.`Menderu` AS `menderu` from (`program` join `guider`) where `guider`.`Status` = 'checked' ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
