-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 01:13 AM
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
-- Database: `gibidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `abalat_merja`
--

CREATE TABLE `abalat_merja` (
  `Gibi_ID` varchar(20) NOT NULL,
  `ስም` varchar(20) NOT NULL,
  `የአባት_ስም` varchar(20) NOT NULL,
  `የክርስትና_ስም` varchar(20) NOT NULL,
  `ክህነት` varchar(20) NOT NULL,
  `የትምህርት_ክፍል` varchar(20) NOT NULL,
  `ባች` int(5) NOT NULL,
  `ስልክ` int(10) NOT NULL,
  `ኢሜል` varchar(30) NOT NULL,
  `የትምህርት_ዓመት` int(10) NOT NULL,
  `ፎቶ` varchar(255) NOT NULL,
  `ዓ/ም` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `abalat_merja`
--

INSERT INTO `abalat_merja` (`Gibi_ID`, `ስም`, `የአባት_ስም`, `የክርስትና_ስም`, `ክህነት`, `የትምህርት_ክፍል`, `ባች`, `ስልክ`, `ኢሜል`, `የትምህርት_ዓመት`, `ፎቶ`, `ዓ/ም`) VALUES
('MAU1009', 'hailea', 'sey', 'gebr', 'diakon', 'computers', 2, 989016199, 'bbbr@gmail.com', 3, 'images (2).jpeg', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `ስልክ` int(11) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `sex`, `ስልክ`, `password`) VALUES
(1, 'gibi', 'm/f', 989016198, '2721'),
(2, 'kubo', 'm', 989016198, '2719'),
(3, 'Romi', 'F', 967010431, '75');

-- --------------------------------------------------------

--
-- Table structure for table `begena`
--

CREATE TABLE `begena` (
  `Gibi_ID` varchar(20) NOT NULL DEFAULT 'MAU',
  `ስም` varchar(30) NOT NULL,
  `ክህነት` varchar(30) DEFAULT NULL,
  `ስልክ` int(10) NOT NULL,
  `የትምህርት_ደረጃ` varchar(20) NOT NULL,
  `ኢሜል` varchar(30) NOT NULL,
  `የትምህርት_ክፍል` varchar(20) NOT NULL,
  `የክርስትና-ስም` varchar(20) NOT NULL,
  `ዓም` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `begena`
--

INSERT INTO `begena` (`Gibi_ID`, `ስም`, `ክህነት`, `ስልክ`, `የትምህርት_ደረጃ`, `ኢሜል`, `የትምህርት_ክፍል`, `የክርስትና-ስም`, `ዓም`) VALUES
('Mau098 ', 'Roman ', 'Lrvun', 989877664, '3', 'bitye@gmail.com ', 'computers', 'Gebre', 0000),
('MAU1000', 'abel', NULL, 912121121, '3', 'ablea@gmail.com', 'bio', 'gebr', 0000),
('mau1201212 ', 'bera ', 'diakon', 988888, '3', 'eliasibesa@gmial.com ', 'computers', 'gebrgiorgis', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `newstud`
--

CREATE TABLE `newstud` (
  `Gibi_ID` varchar(20) NOT NULL DEFAULT 'MAU',
  `ስም` varchar(30) NOT NULL,
  `የአባት_ስም` varchar(30) NOT NULL,
  `የክርስትና_ስም` varchar(30) NOT NULL,
  `ክልል` varchar(10) NOT NULL,
  `ዞን` varchar(10) NOT NULL,
  `ወረዳ` varchar(10) NOT NULL,
  `አቅራቢያ_ቤ/ክ` varchar(30) NOT NULL,
  `ስልክ` varchar(20) NOT NULL DEFAULT '+251',
  `የቅርብ_ተጠልሪ_ስም` varchar(20) NOT NULL,
  `የቅርብ_ተጠልሪ_ስልክ` varchar(20) NOT NULL DEFAULT '+251',
  `ክህነት` varchar(20) NOT NULL,
  `ፎቶ` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `newstud1`
--

CREATE TABLE `newstud1` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `religiousname` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `woreda` varchar(50) NOT NULL,
  `church` varchar(50) NOT NULL,
  `ordination` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `emergenceyname` varchar(50) NOT NULL,
  `emergenceyphone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `myimage` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `ዓም` year(4) NOT NULL,
  `የትምህርት_ክፍል` varchar(20) DEFAULT NULL,
  `ባች` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newstud1`
--

INSERT INTO `newstud1` (`id`, `name`, `fathername`, `sex`, `religiousname`, `region`, `zone`, `woreda`, `church`, `ordination`, `phone`, `emergenceyname`, `emergenceyphone`, `email`, `myimage`, `year`, `ዓም`, `የትምህርት_ክፍል`, `ባች`) VALUES
('Mau098', 'Roman', 'Eaal', 'male', 'Gebre', 'Amr', 'Wol', 'Eer', 'Mar', 'Lrvun', '0989877664', 'Yre', '09877654', 'bitye@gmail.com', 'images.jfif', '3', 2012, 'computers', 3),
('mau101212', 'second', 'bell', 'male', 'gebrgiorgis', 'aa', 'zone', '6', 'debremwe', 'diakon', '0988888', 'mom', '0910686868', 'zeki@gmail.com', 'download.jfif', '4', 2013, 'biology', 6),
('mau1201212', 'bera', 'nega', 'male', 'gebrgiorgis', 'aa', 'zone', '6', 'debremwe', 'diakon', '0988888', 'mom', '0910686868', 'eliasibesa@gmial.com', 'images (2).jpeg', '3', 2015, 'computers', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sera_asfetsami`
--

CREATE TABLE `sera_asfetsami` (
  `Gibi_ID` varchar(20) NOT NULL,
  `ስም` varchar(30) NOT NULL,
  `የትምህርት_ከፍል` varchar(20) NOT NULL,
  `የአገልግሎት_ክፍል` varchar(30) DEFAULT NULL,
  `ስልክ` varchar(10) NOT NULL,
  `ክህነት` varchar(20) NOT NULL,
  `ኢሜል` varchar(30) NOT NULL,
  `ዓም` year(4) NOT NULL,
  `የክርስትናስም` varchar(20) NOT NULL,
  `የትምህርት_ደረጃ` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `temeraki`
--

CREATE TABLE `temeraki` (
  `Gibi_ID` varchar(20) NOT NULL DEFAULT 'MAU',
  `ስም` varchar(20) NOT NULL,
  `የትምህርት_ከፍል` varchar(20) NOT NULL,
  `ስልክ` int(10) NOT NULL,
  `ኢሜል` varchar(30) NOT NULL,
  `የትምህርት_ደረጃ` varchar(10) NOT NULL,
  `ክህነት` varchar(20) NOT NULL,
  `የክርስትና-ስም` varchar(20) NOT NULL,
  `ዓም` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `temeraki`
--

INSERT INTO `temeraki` (`Gibi_ID`, `ስም`, `የትምህርት_ከፍል`, `ስልክ`, `ኢሜል`, `የትምህርት_ደረጃ`, `ክህነት`, `የክርስትና-ስም`, `ዓም`) VALUES
('Mau098 ', 'Roman ', 'computers', 989877664, 'bitye@gmail.com', '3 ', 'Lrvun', 'Gebre', 2012);

-- --------------------------------------------------------

--
-- Table structure for table `wancha_acchivers`
--

CREATE TABLE `wancha_acchivers` (
  `Gibi_ID` varchar(20) NOT NULL,
  `ስም` varchar(30) NOT NULL,
  `ስልክ` int(10) NOT NULL,
  `ክህነት` varchar(20) NOT NULL,
  `የትምህርት_ደረጃ` varchar(10) NOT NULL,
  `ኢሜል` varchar(30) NOT NULL,
  `የትምህርት_ክፍል` varchar(30) NOT NULL,
  `የክርስትና-ስም` varchar(20) NOT NULL,
  `ዓም` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `wancha_acchivers`
--

INSERT INTO `wancha_acchivers` (`Gibi_ID`, `ስም`, `ስልክ`, `ክህነት`, `የትምህርት_ደረጃ`, `ኢሜል`, `የትምህርት_ክፍል`, `የክርስትና-ስም`, `ዓም`) VALUES
('Mau098 ', 'Roman ', 989877664, 'Lrvun', '3', 'bitye@gmail.com ', 'computers', 'Gebre', 2012);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abalat_merja`
--
ALTER TABLE `abalat_merja`
  ADD PRIMARY KEY (`Gibi_ID`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `begena`
--
ALTER TABLE `begena`
  ADD PRIMARY KEY (`Gibi_ID`);

--
-- Indexes for table `newstud`
--
ALTER TABLE `newstud`
  ADD PRIMARY KEY (`Gibi_ID`);

--
-- Indexes for table `newstud1`
--
ALTER TABLE `newstud1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sera_asfetsami`
--
ALTER TABLE `sera_asfetsami`
  ADD PRIMARY KEY (`Gibi_ID`);

--
-- Indexes for table `temeraki`
--
ALTER TABLE `temeraki`
  ADD PRIMARY KEY (`Gibi_ID`);

--
-- Indexes for table `wancha_acchivers`
--
ALTER TABLE `wancha_acchivers`
  ADD PRIMARY KEY (`Gibi_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
