-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 03:50 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_crud_masud_420`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_byke`
--

CREATE TABLE `tbl_byke` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `phone`, `name`, `email`, `address`) VALUES
(4, 'qq', 'qq', 'qqq@gmail.com', 'qq'),
(5, '01750396604', 'masud', 'masud4rana1@gmail.com', 'mohammadpur'),
(6, '017505858', 'saiful islam', 'saiful islam ', 'dhaka '),
(11, 'jklhjkll', 'Saipul', 'islam2311@live.com', 'oiulkj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cosmetics`
--

CREATE TABLE `tbl_cosmetics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cosmetics`
--

INSERT INTO `tbl_cosmetics` (`id`, `name`, `model`, `details`, `price`, `create_at`) VALUES
(1, 'jewerly', 'size 2\'\'', 'n/a', '4000', '2019-03-23 14:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laptop`
--

CREATE TABLE `tbl_laptop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_laptop`
--

INSERT INTO `tbl_laptop` (`id`, `name`, `model`, `details`, `price`) VALUES
(1, 'dell111', 'i522', 'this is a bangladesh', 1000),
(2, 'thinkpad', 'intel5', 'adff adfdaf adfadf asdfafd adfadf afdaf adfaf afdaf afdaf', 97000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menus`
--

CREATE TABLE `tbl_menus` (
  `id` int(11) NOT NULL,
  `menutitle` varchar(255) NOT NULL,
  `linkofmenu` varchar(255) NOT NULL,
  `car` varchar(255) NOT NULL,
  `tv` varchar(255) NOT NULL,
  `laptop` varchar(255) NOT NULL,
  `byke` varchar(255) NOT NULL,
  `cosm` varchar(255) NOT NULL,
  `cosmetics` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menus`
--

INSERT INTO `tbl_menus` (`id`, `menutitle`, `linkofmenu`, `car`, `tv`, `laptop`, `byke`, `cosm`, `cosmetics`) VALUES
(1, 'Homepage', '', '', '', '', '', '', ''),
(2, 'Aboutpage\r\n', '', '', '', '', '', '', ''),
(3, 'Contact', '', '', '', '', '', '', ''),
(19, 'Mobile', '', '', '', '', '', '', ''),
(20, 'laptop', '', '', '', '', '', '', ''),
(22, 'cosmetics', '', '', '', '', '', '', ''),
(23, 'tvs', '', '', '', '', '', '', ''),
(24, 'byke', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobile`
--

CREATE TABLE `tbl_mobile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mobile`
--

INSERT INTO `tbl_mobile` (`id`, `name`, `model`, `details`, `price`, `create_at`) VALUES
(2, 'hp', '0254', 'abcd', '250', '2019-03-23 11:17:08'),
(6, 'sumsung', 'j2', 'n/adfdfx', '10000', '2019-03-23 11:16:59'),
(11, 'sumsung', 'j3', 'n/a', '250', '2019-03-23 11:16:54'),
(13, 'sumsung', 'j4', 'n/a', '10000', '2019-03-23 11:16:50'),
(14, 'nokia', '1200', 'n/a', '10000', '2019-03-23 11:16:45'),
(15, 'iphone1', 'iphone101', 'n/a1', 'adfa', '2019-03-23 11:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tv`
--

CREATE TABLE `tbl_tv` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tv`
--

INSERT INTO `tbl_tv` (`id`, `name`, `model`, `details`, `price`, `create_at`) VALUES
(1, 'LCDqqq', '1000t', '   FDHFKJ A ADFGH ADF K AFDSHAKDF ASDFHKJ FASFD GDJF ADSF GJDK ADFJK AFD FDSJLKFJ HJKFHA SFDAFDKJHF ADFHVBour', '5666', '2019-03-23 14:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `reg_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `reg_id`, `username`) VALUES
(1, '', 'stuedent 1'),
(2, '', 'student 2'),
(3, '', 'student 3'),
(4, '', 'student 4'),
(5, '', 'student 5'),
(6, '', 'student 6'),
(7, 'ABCD-10001', 'ABDULLAH 1'),
(8, 'ABCD-10001', 'ABDULLAH 2'),
(9, 'ABCD-10001', 'ABDULLAH 3'),
(10, 'ABCD-10001', 'ABDULLAH 4'),
(11, 'ABCD-10001', 'ABDULLAH 5'),
(12, 'ABCD-10001', 'ABDULLAH 6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_byke`
--
ALTER TABLE `tbl_byke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cosmetics`
--
ALTER TABLE `tbl_cosmetics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_laptop`
--
ALTER TABLE `tbl_laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menus`
--
ALTER TABLE `tbl_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mobile`
--
ALTER TABLE `tbl_mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tv`
--
ALTER TABLE `tbl_tv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_byke`
--
ALTER TABLE `tbl_byke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_cosmetics`
--
ALTER TABLE `tbl_cosmetics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_laptop`
--
ALTER TABLE `tbl_laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_menus`
--
ALTER TABLE `tbl_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_mobile`
--
ALTER TABLE `tbl_mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_tv`
--
ALTER TABLE `tbl_tv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
