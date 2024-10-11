-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2024 at 11:04 AM
-- Server version: 10.6.19-MariaDB-cll-lve
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lbookfin_greendb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_number_tb`
--

CREATE TABLE `account_number_tb` (
  `ID` int(200) NOT NULL,
  `NEXT_ACCOUNT` bigint(200) NOT NULL,
  `FORMATION` varchar(200) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `DATE_CREATED` varchar(100) DEFAULT NULL,
  `DATE_MODIFIED` varchar(100) DEFAULT NULL,
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `account_number_tb`
--

INSERT INTO `account_number_tb` (`ID`, `NEXT_ACCOUNT`, `FORMATION`, `USER_ID`, `DATE_CREATED`, `DATE_MODIFIED`, `CCODE`, `HCODE`) VALUES
(1, 1038, 'SBST', 1, NULL, NULL, 233211, '45c25d94087adb87e798b0a674173f68'),
(4, 2, 'BRE', NULL, NULL, NULL, 364834, NULL),
(5, 1, 'ABI', NULL, NULL, NULL, 104565, NULL),
(6, 1, 'KOF', NULL, NULL, NULL, 604996, NULL),
(7, 1, 'KOF', NULL, NULL, NULL, 616561, NULL),
(8, 2, 'GID', NULL, NULL, NULL, 897326, NULL),
(9, 6, 'BAR', NULL, NULL, NULL, 822796, NULL),
(10, 1, 'DC ', NULL, NULL, NULL, 519574, NULL),
(11, 7, 'L-c', NULL, NULL, NULL, 603634, NULL),
(12, 4, 'UNI', NULL, NULL, NULL, 251115, NULL),
(13, 1, 'UNI', NULL, NULL, NULL, 381877, NULL),
(14, 1, 'BRE', NULL, NULL, NULL, 948296, NULL),
(15, 1, 'BRE', NULL, NULL, NULL, 436944, NULL),
(16, 1, 'BRE', NULL, NULL, NULL, 481758, NULL),
(17, 2, 'BRE', NULL, NULL, NULL, 647470, NULL),
(18, 2, 'RYA', NULL, NULL, NULL, 726670, NULL),
(19, 1, 'MAX', NULL, NULL, NULL, 520403, NULL),
(20, 4, 'NOV/SAV', NULL, NULL, '2022-07-14 01:03:24pm', 949796, NULL),
(21, 1, 'Abc', NULL, NULL, NULL, 984706, NULL),
(22, 1, 'Mcb', NULL, NULL, NULL, 618608, NULL),
(23, 4, 'LIN', NULL, NULL, NULL, 297358, NULL),
(24, 1, 'BES', NULL, NULL, NULL, 618782, NULL),
(25, 1, 'K B', NULL, NULL, NULL, 984103, NULL),
(26, 1, 'BRE', NULL, NULL, NULL, 515097, NULL),
(27, 1, 'JOE', NULL, NULL, NULL, 626175, NULL),
(28, 2, 'OMA', NULL, NULL, NULL, 463006, NULL),
(29, 1, 'STE', NULL, NULL, NULL, 723795, NULL),
(31, 1, 'BES', NULL, NULL, NULL, 563554, NULL),
(32, 1, 'LIN', NULL, NULL, NULL, 811193, NULL),
(33, 1, 'Que', NULL, NULL, NULL, 715676, NULL),
(34, 1, 'Dal', NULL, NULL, NULL, 610240, NULL),
(35, 2, 'PFS', NULL, NULL, '2022-08-31 07:35:42am', 570826, NULL),
(36, 1, 'Lin', NULL, NULL, NULL, 392986, NULL),
(37, 1, 'Lin', NULL, NULL, NULL, 137093, NULL),
(38, 3, 'Joe', NULL, NULL, NULL, 764459, NULL),
(39, 4, 'Sof', NULL, NULL, NULL, 381272, NULL),
(40, 2, 'Lin', NULL, NULL, NULL, 474308, NULL),
(41, 2, 'Pak', NULL, NULL, NULL, 994529, NULL),
(42, 1, 'Sta', NULL, NULL, NULL, 200776, NULL),
(43, 1, 'Tru', NULL, NULL, NULL, 548706, NULL),
(44, 1, 'Can', NULL, NULL, NULL, 898101, NULL),
(45, 1, 'Cas', NULL, NULL, NULL, 451923, NULL),
(46, 2, '3022010001', NULL, NULL, '2023-05-29 10:46:06am', 473858, NULL),
(47, 2, 'Pak', NULL, NULL, NULL, 169954, NULL),
(48, 1, 'Kwa', NULL, NULL, NULL, 379999, NULL),
(49, 33, 'GRE', NULL, NULL, '2024-04-26 11:55:03am', 340059, NULL),
(50, 1, 'Max', NULL, NULL, NULL, 197163, NULL),
(51, 2, 'Max', NULL, NULL, NULL, 518163, NULL),
(52, 1, 'Lin', NULL, NULL, NULL, 929764, NULL),
(53, 1, 'Sta', NULL, NULL, NULL, 267680, NULL),
(54, 1, 'Bes', NULL, NULL, NULL, 371265, NULL),
(55, 1, 'Lar', NULL, NULL, NULL, 933642, NULL),
(56, 3, 'Eph', NULL, NULL, NULL, 377586, NULL),
(57, 3, 'Eff', NULL, NULL, NULL, 961704, NULL),
(58, 6, 'Bre', NULL, NULL, NULL, 516448, NULL),
(59, 1, 'Bre', NULL, NULL, NULL, 558404, NULL),
(60, 2, 'Bar', NULL, NULL, NULL, 499047, NULL),
(61, 82, 'U-N', NULL, NULL, NULL, 270530, NULL),
(62, 1, 'Lin', NULL, NULL, NULL, 751991, NULL),
(63, 1, 'iTe', NULL, NULL, NULL, 598200, NULL),
(64, 3, 'And', NULL, NULL, NULL, 352648, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `account_tb`
--

CREATE TABLE `account_tb` (
  `ID` int(11) NOT NULL,
  `PRODUCT_ID` int(11) DEFAULT NULL,
  `CLIENT_ID` bigint(11) DEFAULT NULL,
  `ACCOUNT_NO` varchar(255) DEFAULT NULL,
  `SUBSCRIPTION` varchar(200) DEFAULT NULL,
  `ACC_STATUS` varchar(5) DEFAULT NULL,
  `SMS_STATUS` varchar(5) DEFAULT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `DATE_CREATED` varchar(100) DEFAULT NULL,
  `DATE_MODIFIED` varchar(50) DEFAULT NULL,
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `account_tb`
--

INSERT INTO `account_tb` (`ID`, `PRODUCT_ID`, `CLIENT_ID`, `ACCOUNT_NO`, `SUBSCRIPTION`, `ACC_STATUS`, `SMS_STATUS`, `DESCRIPTION`, `DATE_CREATED`, `DATE_MODIFIED`, `CCODE`, `HCODE`) VALUES
(1, 247344, 165980726, 'GRE 0000000024', 'null', '0', '0', 'DAILY SAVINGS', '2024-07-22', '2024-07-22', 340059, '19f603f751c31f7e461db778333eadfd92ea1fa0'),
(2, 247344, 964216306, 'GRE 0000000025', 'null', '0', '0', 'DAILY SAVINGS', '2022-04-28', '2022-04-28', 340059, '13a91ea3aad1eb8e2726dfb063f08028e11c2f1b'),
(3, 247344, 558365177, 'GRE 0000000026', 'null', '0', '0', 'DAILY SAVINGS', '2022-12-19', '2022-12-19', 340059, '7dae7cbe1adb274a835bfafee9a01036b1dde5f2'),
(4, 247344, 417764857, 'GRE 0000000027', 'null', '0', '0', 'DAILY SAVINGS', '2023-09-28', '2023-09-28', 340059, 'ebd7f94d25072c81450e6d4ad3230e06e9c53e1b'),
(5, 247344, 502344178, 'GRE 0000000028', 'null', '0', '0', 'DAILY SAVINGS', '2022-06-22', '2022-06-22', 340059, '77db092a9063099f6ca2526990770a5799d08e24'),
(6, 247344, 118760168, 'GRE 0000000029', 'null', '0', '0', 'DAILY SAVINGS', '2022-10-06', '2022-10-06', 340059, 'b71b4654c4fbd01fc6c6c0d935d785bd90e5fa01'),
(7, 247344, 829181896, 'GRE 0000000030', 'null', '0', '0', 'DAILY SAVINGS', '2024-06-01', '2024-06-01', 340059, '1511d1d586829b9478dc272bb9551b2c20fe0175'),
(8, 247344, 576165856, 'GRE 0000000031', 'null', '0', '0', 'DAILY SAVINGS', '2023-06-23', '2023-06-23', 340059, 'cd987b2556d794eb587b09b4ca65aca1fc74f4ea'),
(9, 247344, 326252747, 'GRE 0000000032', 'null', '0', '0', 'DAILY SAVINGS', '2022-06-07', '2022-06-07', 340059, 'd2b3946a313225a3f9f33a09e24d51a53abbb184');

-- --------------------------------------------------------

--
-- Table structure for table `acc_status_tb`
--

CREATE TABLE `acc_status_tb` (
  `ID` int(11) NOT NULL,
  `DESCRIPTION` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `acc_status_tb`
--

INSERT INTO `acc_status_tb` (`ID`, `DESCRIPTION`) VALUES
(1, 'Has account'),
(2, 'No account');

-- --------------------------------------------------------

--
-- Table structure for table `activation_tb`
--

CREATE TABLE `activation_tb` (
  `ID` int(11) NOT NULL,
  `NEXT_DATE` varchar(50) DEFAULT NULL,
  `USED_CODE` longtext DEFAULT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DATE_MODIFIED` varchar(50) DEFAULT NULL,
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `activation_tb`
--

INSERT INTO `activation_tb` (`ID`, `NEXT_DATE`, `USED_CODE`, `DATE_CREATED`, `DATE_MODIFIED`, `CCODE`, `HCODE`) VALUES
(33, '2024-09-26', '16ae438c5d535b79226378b53e1cbc5f25ee88c8', '2024-09-26 11:31:49', '2024-09-26 11:31', 340059, '0a069c2273d5803914889092bcf949bc58f34f15');

-- --------------------------------------------------------

--
-- Table structure for table `activity_tb`
--

CREATE TABLE `activity_tb` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(200) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `ACTIVITY` varchar(100) NOT NULL,
  `IPADDRESS` varchar(200) DEFAULT NULL,
  `LOCATION` varchar(100) DEFAULT NULL,
  `OS` varchar(200) NOT NULL,
  `DEVICE_TYPE` varchar(200) NOT NULL,
  `RESULT` varchar(50) NOT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CCODE` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `activity_tb`
--

INSERT INTO `activity_tb` (`ID`, `USERNAME`, `PASSWORD`, `ACTIVITY`, `IPADDRESS`, `LOCATION`, `OS`, `DEVICE_TYPE`, `RESULT`, `DATE_CREATED`, `CCODE`) VALUES
(1, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.168.157', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-05 13:46:29', 340059),
(2, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.12.125', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-05 14:54:56', 340059),
(3, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.168.157', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-05 15:02:11', 340059),
(4, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.168.157', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-05 17:05:18', 340059),
(5, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.12.125', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-05 17:40:01', 340059),
(6, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.168.157', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-05 19:42:03', 340059),
(7, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.168.157', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-05 19:42:03', 340059),
(8, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.168.157', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-05 21:57:51', 340059),
(9, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.168.157', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-05 21:59:19', 340059),
(10, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.173.136', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 03:19:30', 340059),
(11, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.173.214', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 08:40:33', 340059),
(12, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.143.46', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 08:56:18', 340059),
(13, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.143.46', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 09:13:27', 340059),
(14, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.129.36', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 09:58:23', 340059),
(15, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.143.46', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 10:02:21', 340059),
(16, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.143.46', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 10:07:32', 340059),
(17, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.175.202', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 10:14:40', 340059),
(18, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.175.202', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 10:28:42', 340059),
(19, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.173.243', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 10:34:22', 340059),
(20, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.151.99', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 11:22:07', 340059),
(21, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '102.222.172.47', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 11:43:15', 340059),
(22, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '102.222.172.47', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 12:43:01', 340059),
(23, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.151.99', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 13:41:42', 340059),
(24, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.151.99', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 14:39:54', 340059),
(25, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.151.99', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 14:50:56', 340059),
(26, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.151.99', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 15:15:21', 340059),
(27, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.151.99', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 15:25:33', 340059),
(28, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.151.99', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 15:36:40', 340059),
(29, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.151.99', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 16:44:19', 340059),
(30, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.130.147', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-06 17:27:10', 340059),
(31, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.129.36', '000, 000', 'LINUX', 'Mobile', 'success', '2024-08-06 17:31:57', 340059),
(32, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.129.36', '000, 000', 'LINUX', 'Mobile', 'success', '2024-08-06 18:11:08', 340059),
(33, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.13.50', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-07 03:36:43', 340059),
(34, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.13.50', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-07 09:31:35', 340059),
(35, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.13.50', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-07 13:14:05', 340059),
(36, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.13.50', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-07 14:36:43', 340059),
(37, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.13.50', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-07 14:59:13', 340059),
(38, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.160.16.107', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-07 16:21:16', 340059),
(39, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.13.50', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-07 16:26:56', 340059),
(40, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.160.16.107', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-07 16:28:09', 340059),
(41, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.13.50', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-07 17:03:11', 340059),
(42, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.160.16.107', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-07 17:15:48', 340059),
(43, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.180.1', '000, 000', 'LINUX', 'Mobile', 'success', '2024-08-07 17:18:29', 340059),
(44, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.43.70', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-08 12:26:38', 340059),
(45, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.160.26.145', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-08 12:57:37', 340059),
(46, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.160.26.145', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-08 13:35:53', 340059),
(47, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.43.70', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-08 13:45:28', 340059),
(48, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.160.26.145', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-08 13:56:32', 340059),
(49, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.160.10.141', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-09 11:42:52', 340059),
(50, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.160.10.141', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-09 17:12:15', 340059),
(51, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.166.154', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-12 09:34:11', 340059),
(52, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.166.154', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-12 09:34:11', 340059),
(53, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.166.154', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-12 10:38:04', 340059),
(54, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.166.154', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-12 11:35:49', 340059),
(55, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.166.154', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-12 13:15:12', 340059),
(56, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.166.154', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-12 13:40:30', 340059),
(57, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.166.154', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-12 13:44:06', 340059),
(58, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.166.154', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-12 13:45:24', 340059),
(59, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.166.154', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-12 14:01:41', 340059),
(60, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.166.154', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-12 15:39:51', 340059),
(61, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.164.12', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-13 10:31:54', 340059),
(62, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.164.12', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-13 11:41:12', 340059),
(63, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.164.12', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-13 11:41:12', 340059),
(64, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.137.9', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-13 11:50:45', 340059),
(65, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.164.12', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-13 12:49:13', 340059),
(66, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.137.9', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-13 12:49:48', 340059),
(67, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.137.9', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-13 12:51:51', 340059),
(68, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.164.12', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-13 12:57:54', 340059),
(69, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.164.12', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-13 13:24:39', 340059),
(70, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.58.191', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-14 10:32:28', 340059),
(71, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.58.191', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-14 15:34:11', 340059),
(72, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.5.27', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-15 10:42:28', 340059),
(73, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.5.27', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-15 13:13:57', 340059),
(74, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.42.117', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-16 10:14:14', 340059),
(75, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.42.117', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-16 15:37:36', 340059),
(76, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.42.117', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-16 15:37:36', 340059),
(77, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.18.98', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-16 15:56:26', 340059),
(78, 'Ldevelop', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.18.98', '000, 000', 'LINUX', 'Desktop', 'failed', '2024-08-16 15:56:39', 0),
(79, 'Ldevelop', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.18.98', '000, 000', 'LINUX', 'Desktop', 'failed', '2024-08-16 15:56:49', 0),
(80, 'Ldevelop', 'cb4ae4787bfa701a930e5299fda6d89b98948c8f', 'login', '154.161.18.98', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-16 15:56:54', 516448),
(81, 'Berlynda', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.18.98', '000, 000', 'LINUX', 'Desktop', 'failed', '2024-08-16 15:57:19', 0),
(82, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.18.98', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-16 15:57:26', 340059),
(83, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.18.98', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-16 15:58:42', 340059),
(84, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.42.117', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-16 16:06:42', 340059),
(85, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.42.117', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-16 16:08:15', 340059),
(86, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.18.98', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-16 16:12:46', 340059),
(87, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'login', '154.161.18.98', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-16 16:40:29', 340059),
(88, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.26.232', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-19 10:49:43', 340059),
(89, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.26.232', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-19 11:15:39', 340059),
(90, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.26.232', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-19 11:15:39', 340059),
(91, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.26.232', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-19 17:25:08', 340059),
(92, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.26.232', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-19 17:25:08', 340059),
(93, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.26.232', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-19 17:25:08', 340059),
(94, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.160.4.80', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-19 17:50:55', 340059),
(95, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.160.4.80', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-19 17:52:20', 340059),
(96, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.160.4.244', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-20 10:45:33', 340059),
(97, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.57.67', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-21 13:12:42', 340059),
(98, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.57.67', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-21 16:19:12', 340059),
(99, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.28.7', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-22 15:47:28', 340059),
(100, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.28.7', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-22 16:21:55', 340059),
(101, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.160.1.76', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-23 08:50:09', 340059),
(102, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.160.1.76', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-23 10:18:59', 340059),
(103, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.160.1.76', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-23 13:40:31', 340059),
(104, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.160.1.76', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-23 15:30:19', 340059),
(105, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.57.194', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-26 10:29:10', 340059),
(106, 'MANAGER ', '5b1fe27fb882bc44ebbd5068ee4a3620a3267fef', 'login', '154.161.59.145', '000, 000', 'LINUX', 'Mobile', 'success', '2024-08-26 11:36:41', 340059),
(107, 'MANAGER', '5b1fe27fb882bc44ebbd5068ee4a3620a3267fef', 'login', '154.161.59.145', '000, 000', 'LINUX', 'Mobile', 'success', '2024-08-26 11:51:23', 340059),
(108, 'MANAGER', '5b1fe27fb882bc44ebbd5068ee4a3620a3267fef', 'login', '154.161.59.145', '000, 000', 'LINUX', 'Mobile', 'success', '2024-08-26 11:58:05', 340059),
(109, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.57.194', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-26 12:03:34', 340059),
(110, 'MANAGER', '5b1fe27fb882bc44ebbd5068ee4a3620a3267fef', 'login', '154.161.59.145', '000, 000', 'LINUX', 'Mobile', 'success', '2024-08-26 14:43:08', 340059),
(111, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.57.194', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-26 16:43:26', 340059),
(112, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.57.194', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-26 16:43:26', 340059),
(113, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.57.194', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-26 16:43:33', 340059),
(114, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.57.194', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-26 16:44:30', 340059),
(115, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.160.1.187', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-27 10:57:38', 340059),
(116, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.160.1.187', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-27 12:39:24', 340059),
(117, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.160.1.187', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-27 17:09:32', 340059),
(118, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.25.5', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-28 08:24:51', 340059),
(119, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.34.33', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-30 10:17:01', 340059),
(120, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.34.33', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-30 10:17:01', 340059),
(121, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.34.33', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-30 11:06:17', 340059),
(122, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.34.33', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-30 14:59:09', 340059),
(123, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.34.33', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-30 14:59:09', 340059),
(124, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.34.33', '000, 000', 'LINUX', 'Desktop', 'success', '2024-08-30 17:00:13', 340059),
(125, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.39.15', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-02 11:00:03', 340059),
(126, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.39.15', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-02 11:29:07', 340059),
(127, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.39.15', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-02 12:37:36', 340059),
(128, 'MANAGER', '5b1fe27fb882bc44ebbd5068ee4a3620a3267fef', 'login', '154.161.1.204', '000, 000', 'LINUX', 'Mobile', 'success', '2024-09-03 15:57:02', 340059),
(129, 'MANAGER', '5b1fe27fb882bc44ebbd5068ee4a3620a3267fef', 'login', '154.161.1.204', '000, 000', 'LINUX', 'Mobile', 'success', '2024-09-03 15:59:09', 340059),
(130, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.51.22', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-04 13:31:28', 340059),
(131, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.51.22', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-04 13:31:30', 340059),
(132, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.51.22', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-04 13:31:30', 340059),
(133, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.51.22', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-04 13:31:30', 340059),
(134, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.51.22', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-04 13:31:30', 340059),
(135, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.160.1.177', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-05 15:09:28', 340059),
(136, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.133.1', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-06 10:03:42', 340059),
(137, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.133.1', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-06 10:03:44', 340059),
(138, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.133.1', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-06 10:18:16', 340059),
(139, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.133.1', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-06 13:52:14', 340059),
(140, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.133.1', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-06 17:03:48', 340059),
(141, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.155.55', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-09 10:07:56', 340059),
(142, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.155.55', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-09 10:34:47', 340059),
(143, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.155.55', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-09 12:42:48', 340059),
(144, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.155.55', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-09 16:09:03', 340059),
(145, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.155.55', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-09 18:22:43', 340059),
(146, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.161.103', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-10 06:13:27', 340059),
(147, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.161.103', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-10 06:29:13', 340059),
(148, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.132.120', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-13 09:26:13', 340059),
(149, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.132.120', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-13 12:27:13', 340059),
(150, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.132.120', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-13 14:54:06', 340059),
(151, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.132.120', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-13 15:49:22', 340059),
(152, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.132.120', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-13 17:04:35', 340059),
(153, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.155.205', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-16 12:06:07', 340059),
(154, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.155.205', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-16 17:44:34', 340059),
(155, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.145.28', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-17 17:19:49', 340059),
(156, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.147.131', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-19 15:07:25', 340059),
(157, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.131.180', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-20 08:25:40', 340059),
(158, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.131.180', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-20 11:05:49', 340059),
(159, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.146.49', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-20 16:07:48', 340059),
(160, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.146.49', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-20 16:31:10', 340059),
(161, 'MANAGER', '5b1fe27fb882bc44ebbd5068ee4a3620a3267fef', 'login', '154.161.163.78', '000, 000', 'LINUX', 'Mobile', 'success', '2024-09-21 17:14:59', 340059),
(162, 'MANAGER', '5b1fe27fb882bc44ebbd5068ee4a3620a3267fef', 'login', '154.161.163.78', '000, 000', 'LINUX', 'Mobile', 'success', '2024-09-21 17:15:21', 340059),
(163, 'MANAGER', '5b1fe27fb882bc44ebbd5068ee4a3620a3267fef', 'login', '154.161.163.78', '000, 000', 'LINUX', 'Mobile', 'success', '2024-09-21 17:19:13', 340059),
(164, 'MANAGER', '5b1fe27fb882bc44ebbd5068ee4a3620a3267fef', 'login', '154.161.163.78', '000, 000', 'LINUX', 'Mobile', 'success', '2024-09-21 17:24:55', 340059),
(165, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.18.174', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-24 09:35:22', 340059),
(166, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.172.11', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-25 11:32:42', 340059),
(167, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.172.11', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-25 13:06:11', 340059),
(168, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.172.11', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-25 14:26:39', 340059),
(169, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.172.11', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-25 14:30:45', 340059),
(173, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.164.23', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-27 09:18:37', 340059),
(174, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.164.23', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-27 09:18:37', 340059),
(175, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.164.23', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-27 16:17:55', 340059),
(176, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.164.23', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-27 17:02:35', 340059),
(177, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.164.23', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-27 17:28:20', 340059),
(178, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.160.91', '000, 000', 'LINUX', 'Desktop', 'success', '2024-09-30 12:15:13', 340059),
(179, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.179.62', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-03 11:41:28', 340059),
(180, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.185.202', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-04 09:53:51', 340059),
(181, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.185.202', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-04 10:40:32', 340059),
(182, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.185.202', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-04 13:00:57', 340059),
(183, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.185.202', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-04 16:21:21', 340059),
(184, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.185.202', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-04 17:46:09', 340059),
(185, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.143.249', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-07 11:22:50', 340059),
(186, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.143.249', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-07 11:22:50', 340059),
(187, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.143.249', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-07 16:19:52', 340059),
(188, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.128.108', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-08 13:01:56', 340059),
(189, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.128.108', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-08 14:52:02', 340059),
(190, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.136.16', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-08 15:33:49', 340059),
(191, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.136.16', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-08 16:59:07', 340059),
(192, 'BERLYNDA', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'login', '154.161.173.97', '000, 000', 'LINUX', 'Desktop', 'success', '2024-10-11 10:35:43', 340059);

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `ID` int(11) NOT NULL,
  `UID` int(11) DEFAULT NULL,
  `CODE` int(11) NOT NULL,
  `USERNAME` varchar(200) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `SURNAME` varchar(200) NOT NULL,
  `OTHERNAME` varchar(15) NOT NULL,
  `CONTACT` varchar(255) NOT NULL,
  `COMPANY` varchar(200) DEFAULT NULL,
  `TYPE` varchar(200) DEFAULT NULL,
  `USER_ROLE` int(11) DEFAULT NULL,
  `STATUS_ID` varchar(10) DEFAULT NULL,
  `DATE_CREATED` varchar(50) NOT NULL DEFAULT 'CURRENT_TIMESTAMP',
  `DATE_MODIFIED` varchar(100) DEFAULT NULL,
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`ID`, `UID`, `CODE`, `USERNAME`, `PASSWORD`, `SURNAME`, `OTHERNAME`, `CONTACT`, `COMPANY`, `TYPE`, `USER_ROLE`, `STATUS_ID`, `DATE_CREATED`, `DATE_MODIFIED`, `CCODE`, `HCODE`) VALUES
(1, NULL, 781795, 'Admin', 'd32fc5af074b754504a83697e039d3b46589bc0b', 'SUSU', 'ABI', '0240563565', NULL, '', 1, '1', '2022-07-01', '2022-07-01', 104565, 'ece801b60501f3083dbf5d0a70c9d7e55254f3f9'),
(2, NULL, 365214, 'Admin', 'ba19ab8c7d384f8648acad24099127cab4b6b726', 'Kwesi', 'Nyarko', '0247058668', NULL, '', 1, '1', '2022-06-28 16:36:45', '2022-06-28 04:36:45pm', 104565, '5454544adfafdafa5xxjdkddjdfd5ddddgfg54545'),
(3, NULL, 223039, 'Admin', 'c84f94fbe6532cee4b334d11bd53cf12838881d9', 'Asamoah', 'Kofi', '0247885588', NULL, '', 1, '1', '2022-07-01', '2022-07-01', 604996, 'f52ff589588ba6bb03131132512cd1d204072f6d'),
(4, NULL, 920682, 'Admin', 'dacfb19cbdadb1980991a452a10d182722d0f6a6', 'MENSAH', 'KOFI', '0247885500', NULL, '', 1, '1', '2022-07-01', '2022-07-01', 616561, 'bf36230823d5d077761b265954215bc0038d9845'),
(5, NULL, 201515, 'Admin', 'e0ee96bd4c8740df699ab48481250b155f3102f9', 'Brempong', 'Kwesi', '+233247058668', NULL, '', 1, '1', '2022-07-01', '2022-07-01', 897326, '95afcb234d046e24559e0adc1eb3ff239d591d12'),
(7, NULL, 326800, 'Admin', '0bed627bf5cbfb81c25a515612d3723ce7942155', 'DERRICK', 'ANTWI', '+233247586435', NULL, '', 1, '1', '2022-07-03', '2022-07-03', 519574, 'beb31b697a50f5e4368bd7ca1057eee0d405aa97'),
(8, NULL, 241799, 'Admin', '406a9dfa9679c335abfed594ba4ed1139778606e', 'Louis', 'Naj', '0555547984', NULL, '', 1, '1', '2022-07-06', '2022-07-06', 603634, '025e47bcc85a43ef9c11f6f788d598976f0772f1'),
(9, NULL, 740415, 'user1', 'ff84a3aefab0910791330d7c96121cd82540d50f', 'lam', 'naj', '45534543', NULL, '', 2, '1', '2022-07-06 21:26:11', '2022-07-06 21:26:11', 603634, '83fe0e8dc62250c91612973b0f46f194e1097583'),
(10, NULL, 985980, 'user2', '71043d7aa5cbcd3b5c4a6e0f6a97aab3ef102e85', 'la', 'naj', '45534899', NULL, '', 2, '1', '2022-07-06 21:26:58', '2022-07-12 09:02:44pm', 603634, '14e5b86eceae9c999447375573de4721c91eef3e'),
(11, NULL, 586652, 'Admin', '82096679bddfe4151a99eefd364db1ff4c5d96d0', 'Eugene', 'Anane', '0256496680', NULL, '', 1, '1', '2022-07-10', '2022-07-10', 251115, 'd8dab691be16cecef6bef3412dd12c26882d5db8'),
(12, NULL, 507980, 'Kraftman', 'c15df0fc286edeeaac8210ffa5934f24afd78c7b', 'Lamptey', 'Samuel', '0256496680', NULL, '', 5, '1', '2022-07-11 10:51:01', '2022-07-11 10:51:01', 251115, '3e5ab71fe594bb6d1c274c44063c7d54c0ac9b21'),
(13, NULL, 208826, 'Gaby', 'c15df0fc286edeeaac8210ffa5934f24afd78c7b', 'Nyarkoh', 'Gabriel', '0597327608', NULL, '', 1, '1', '2022-07-11 10:52:26', '2022-07-11 10:52:26', 251115, '9b44f1ad7c0c5b7d302db32a61f93a3b7c524c25'),
(14, NULL, 629395, 'Andrew', 'c15df0fc286edeeaac8210ffa5934f24afd78c7b', 'Anane', 'Andrew', '0541526077', NULL, '', 3, '1', '2022-07-11 11:00:33', '2022-07-11 11:00:33', 251115, '118c1029d26943492304a5901db71830e9edf1cd'),
(15, NULL, 522068, 'Admin', '6ca2ab2b33082b53fa0ba4fe86ede08ac274a407', 'Eugene', 'Anane', '0256496680', NULL, '', 1, '1', '2022-07-11', '2022-07-11', 381877, 'a8493e43b1e640de12b569f97a3598386952cbb7'),
(16, NULL, 504916, 'llll', '5b64f90e7e172e7d442c083812b7206e40500cef', 'kkk', 'lll', '0555547984', NULL, '', 5, '1', '2022-07-12 15:27:44', '2022-07-12 15:27:44', 603634, 'd1208d473475a5b8378253b9c14799411de23cc0'),
(17, NULL, 668620, 'kwakye01', 'd9ae2937e3fe4d66a7dc38144539f316e3b27e6e', 'Kwakye', 'Yaw', '0245110022', NULL, '', 1, '1', '2022-07-12 22:29:24', '2022-07-12 22:29:24', 822796, 'e18b07e2d1f50c8486631742900f10b313431a82'),
(18, NULL, 936750, 'agent01', 'd9ae2937e3fe4d66a7dc38144539f316e3b27e6e', 'Brempong', 'Joe', '0247058668', NULL, '', 5, '1', '2022-07-12 22:39:55', '2022-07-12 22:39:55', 822796, 'bd0c02e8ec7018804106fe5420e40ac08b1b66e5'),
(19, NULL, 855516, 'Admin', '1acaf3cd202190215961a6e26903e6d008d54b3a', 'Brempong', 'Joe', '0247058668', NULL, '', 1, '1', '2022-07-13', '2022-07-13', 948296, '1bfee9c07cda32d2c9ee4b1d0d1de7406e83d3c5'),
(20, NULL, 200507, 'Admin', 'bafc01f82b17ea81e817fdfcde34412917da3037', 'Brempong', 'Joe', '0247058668', NULL, '', 1, '1', '2022-07-13', '2022-07-13', 436944, 'cf99f39eb6647a13f24068736deb14107e305ecc'),
(21, NULL, 474806, 'Admin', '1b81814b1c93d57508e2d13b59e51f76105aa09c', 'Brempong', 'Joe', '0247058668', NULL, '', 1, '1', '2022-07-13', '2022-07-13', 481758, '682a400135f6d395eba374cf596fd5ae7f6d5378'),
(22, NULL, 392273, 'Admin', '751ec38ba435f8873d749add634a5375791478e4', 'Brempong', 'Joe', '0247058668', NULL, '', 1, '1', '2022-07-13', '2022-07-13', 647470, 'd585ee455acb3439172e8eb0ff098a0a1b3cfcbc'),
(23, NULL, 790285, 'Agent01', 'd9ae2937e3fe4d66a7dc38144539f316e3b27e6e', 'Kwaku', 'Frimpong', '0246562200', NULL, '', 5, '1', '2022-07-13 01:03:19', '2022-07-13 01:03:19', 647470, 'ab6787084edeb87f6c1a1650940e2847c57184d9'),
(25, NULL, 714860, 'Admin', 'bdc3ce0fcd4e1b6cea29f0faba8cb9f9afd44530', 'Barrigah', 'Ryan', '0541397813', NULL, '', 1, '1', '2022-07-13', '2022-07-13', 726670, '20ba09f4be1ec34781d63477f27cc67b01fe0c5b'),
(26, NULL, 807987, 'Admin', 'c2d8c53869bf2e76b9dbf06f545c34a56d96a66f', '', 'Able', '0507969859', NULL, '', 1, '1', '2022-07-14', '2022-07-14', 292381, '7ed347e615c30033daaffdc1dc61c04d6fbd78da'),
(27, NULL, 769917, 'Admin', '7b00a3fb9a428325e4f2ed8eef129c7b213afdc9', '', 'Able', '0507969859', NULL, '', 1, '1', '2022-07-14', '2022-07-14', 283198, '26a3f7baa7daeb9ae5912c345eef0c2dde878824'),
(28, NULL, 418598, 'Admin', '861b84b762cebb73746bef7d9434ead32efd756d', 'Brempong', 'Joseph', '0247058668', NULL, '', 1, '1', '2022-07-14', '2022-07-14', 879432, '646582c99a99c92a1a7382dd211bc35ca55d0e7e'),
(29, NULL, 858008, 'Admin', '7eb449e7eee49d5e1fd5cebaa344f02a055072ff', 'KWASI', 'BREMPONG', '0247058668', NULL, '', 1, '1', '2022-07-14', '2022-07-14', 510808, '125778905177e284bc7f9d2ee435384fd047f19c'),
(30, NULL, 723531, 'Admin', '067c34cb0b4d9b8b8d2d39aef50314be50d2b407', 'Kwasi', 'Maxwell', '0247058668', NULL, '', 1, '1', '2022-07-14', '2022-07-14', 195570, 'd6ecf000dcd5a8aa961b2fa39a3ee93ab2fe2af5'),
(31, NULL, 641043, 'Admin', '5c74c2e7b71f981ac53406e58873e75ca08180ca', 'Links', 'Maxwell', '0247058668', NULL, '', 1, '1', '2022-07-14', '2022-07-14', 970504, 'a9fa67bba85835a32da031580da3422adefa6d0f'),
(32, NULL, 589433, 'Admin', 'd0e8d2f0d0b686bd039e194c264dba3fc4c01fdc', 'Links', 'Max', '0247058668', NULL, '', 1, '1', '2022-07-14', '2022-07-14', 520403, '472467f708ced5e7a1573d51017232592fcdfafb'),
(33, NULL, 769406, 'Linkseng', 'd9ae2937e3fe4d66a7dc38144539f316e3b27e6e', 'Maxwell', 'Joe', '0247058668', NULL, '', 1, '1', '2022-07-14', '2022-07-15 10:00:30am', 949796, '6b29e063e8fb2fba10b573d0c67de5960930821f'),
(34, NULL, 607403, 'Admin', 'bef5f55f9080b1ef59dc0710dad98e8f8ca4fd74', '101', 'Client', '0240641163', NULL, '', 1, '1', '2022-07-15', '2022-07-15', 984706, '48e878f0fa65ecca4934cd72e9a75c201448d279'),
(35, NULL, 614090, 'Admin', '0d0f12c7dae8450b9605983b30bace388b701050', 'Asare', 'John', '0559633463', NULL, '', 1, '1', '2022-07-15', '2022-07-15', 618608, '4fa502604bf1ce5755cfcd6279b369b70d5b3aa1'),
(36, NULL, 771829, 'Admin', '5628796f411b0967bc31e1a65a690ebc1766c172', 'Links', 'Joe', '0247058668', NULL, '', 1, '1', '2022-07-15', '2022-07-15', 297358, '4e5f3ab22daf446f4ae110fa01354881fd6a8f0c'),
(37, NULL, 382519, 'Admin', 'a6d668ec64aea8adf2d1a54533a3443d4aad4186', 'Nyarko', 'Kwasi', '0247058668', NULL, '', 1, '1', '2022-07-15', '2022-07-15', 618782, '512f9efb5358461629f882e6d4eeda806097cda1'),
(38, NULL, 899934, 'Admin', 'fe435a3d40933eda6848c66339159cd28855fcef', 'Brempong', 'Kwasi', '0247058668', NULL, '', 1, '1', '2022-07-15', '2022-07-15', 984103, '65ab282cee82755ec32f30cfaf02526d7103cf46'),
(39, NULL, 394653, 'Admin', '755f0fad0b41466bdd2245ba1feb18bceb351b41', 'Nyarko', 'Brempong', '0247058668', NULL, '', 1, '1', '2022-07-15', '2022-07-15', 515097, 'db70ee40934bdedcfba97d0e5e33152f25073b4f'),
(40, NULL, 731920, 'Admin', '03d96e0ab321bebf924dcf8abccf8fe2c3f02d5b', 'MAXIM', 'JOE', '0247058668', NULL, '', 1, '1', '2022-07-15', '2022-07-15', 626175, '3892e4a7292e751c4b873dbbad7e845e00262640'),
(41, NULL, 389333, 'Spoony', 'e5905d8783618cab1da5c757c2884309d95a895e', 'Asare', 'Alex', '0240781654', NULL, '', 5, '1', '2022-07-15 12:27:38', '2022-07-15 12:27:38', 297358, '5792aa62f7d662fb31940dcd4e2366d4e996fba6'),
(42, NULL, 654839, 'Admin', 'd7466ccecb225be5907c67811e5116b797b7e4e0', 'Nyarko', 'Brempong', '0247058668', NULL, '', 1, '1', '2022-07-15', '2022-07-15', 463006, '87c0c9d55a81dd471e911284e7c0bd85edfca0bf'),
(43, NULL, 665850, 'Admin', '0894585e702a1f2196ae82589280655d3d337042', 'Samuel', 'Boadu', '0244228530', NULL, '', 1, '1', '2022-07-15', '2022-07-15', 723795, 'aae4f759e9f2f820c98645a2659d3632b2856358'),
(44, NULL, 745450, 'Director', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'Samuel', 'Boadu', '0244228530', NULL, '', 1, '1', '2022-07-15', '2022-07-15', 233211, '3fdffde97a1bab98752bb11a3177d9115c05e625'),
(45, NULL, 364876, 'proflinksgh', '73d956609f0e86d15f23f5618d813999be1aadde', 'Wise', 'Joe', '0247058668', NULL, '', 1, '1', '2022-07-15', '2022-07-15', 563554, '408f865eb1a7f9b7ce3c127bc30e60929e84090e'),
(46, NULL, 154414, 'Admin', '8a50f365e787ff5414fc690db670d8fbbfafbb29', 'Nyarko', 'Joe', '0247058668', NULL, '', 1, '1', '2022-07-15', '2022-07-15', 811193, 'f15a127b236f8bf163512907f34d76af87ba2082'),
(47, NULL, 904845, 'Agent01', 'de6ab6de7cf1b52db5d746d3c1de36e1b3d192ee', 'Ahorsu', 'Sylvia', '0542944859', NULL, '', 5, '1', '2022-07-15 20:38:08', '2022-07-15 20:38:08', 233211, '570975184bcf62772ccd810f900a62399a4396e5'),
(48, NULL, 235897, 'Agent02', 'f51339e68da96b70fe3504d44b050686e8923f8f', 'Pamela', 'Whyte', '0244696969', NULL, '', 3, '1', '2022-07-19 21:24:17', '2022-07-19 21:24:17', 233211, 'bc78f7686b37fd07845cc030babad8e4adc4d207'),
(49, NULL, 454004, 'Admin', '96d309755f9591d11867e4ea048e0e0682b37bac', 'Otoo', 'Deborah', '0556961312', NULL, '', 1, '1', '2022-08-09', '2022-08-09', 715676, '066363f06da7898f5f389eb0a986be95f706d826'),
(50, NULL, 354935, 'Admin', '802101fe80f7dec5a317e51fa88d5b35b41cf86f', 'Samuel', 'Agbo', '0557199309', NULL, '', 1, '1', '2022-08-23', '2022-08-23', 610240, 'cc8b01cd4b5fe4ecdb14f1842418bf65033d9800'),
(51, NULL, 849256, 'Admin', 'af8dbeb9649dfb76578661b7ac99aef42a678c00', 'AMOAKO', 'PRINCE', '0247201042', NULL, '', 1, '1', '2022-08-29', '2022-08-29', 570826, 'e551cb64693727c81ce3f9c89d8ff4e25f632ba8'),
(52, NULL, 368006, 'Admin', '17ded57f40e2b178981819aa0458e47b20bff469', 'Maxwell', 'Joe', '0247058668', NULL, '', 1, '1', '2022-09-13', '2022-09-13', 392986, '07f8ccebbf8de87aa6aa5c65c88ed78193bb6b33'),
(53, NULL, 371706, 'Admin', '47c941e19424034d11f09d65deb26b05bd5276a9', 'Joe', 'Links', '0247058668', NULL, '', 1, '1', '2022-09-13', '2022-09-13', 137093, '2d66c1c9d148ac908a21637575e5149727187392'),
(54, NULL, 884193, 'Admin', 'adb027c6c36a7954d8ef4a8ed10e62a12bb8fa3c', 'Joe', 'Maxwell', '0247058668', NULL, '', 1, '1', '2022-09-13', '2022-09-13', 764459, '8ee79b49b4c0713d1b456f86ec17f335f199fa39'),
(55, NULL, 654346, 'Admin', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'Otabil', 'Bievenim', '0243803348', NULL, '', 1, '1', '2022-09-13', '2022-09-13', 381272, 'bcf2d39455208ac08ecd24b2ee0358558f7ff52a'),
(57, NULL, 906315, 'Admin', '30d26d133cc67edd3892a7aac4f99737d9e718cd', 'Nyarko', 'Joseph', '0247058668', NULL, '', 1, '1', '2022-09-16', '2022-09-16', 474308, '3b77214759bf8a0c64fd6ef8050c70e4e14ef35e'),
(58, NULL, 945088, 'Admin', 'c42c83dd699525d6748f1df174d64d7f4a3450e1', 'Kofi', 'Andrew', '0201772311', NULL, '', 1, '1', '2022-09-21', '2022-09-21', 994529, '1d8a145aa9021198b51cdabf80e417e3bb945d4d'),
(59, NULL, 264620, 'Admin', '40b935253e444150bcf80a2a01a6df5e7dc634b3', 'Romeo', 'Richard', '0559104640', NULL, '', 1, '1', '2022-10-11', '2022-10-11', 200776, '53657c8fe68c9b39f433aa650e4b768537a7c835'),
(60, NULL, 603943, 'Admin', '3a2ad98e4f6b0e51e32861750d27318e75a60dcb', 'Fuakye', 'Evans', '0208332233', NULL, '', 1, '1', '2022-11-06', '2022-11-06', 548706, '550e721a3ecffba3331e62d0b67974a48b7fd68d'),
(61, NULL, 145802, 'Admin', 'e562ce00254d91863af6a6393371b8c4c1f0ce4d', 'Atanga', 'Foster', '0540172716', NULL, '', 1, '1', '2023-03-06', '2023-03-06', 898101, '86dbe0e0d258a976bda85a42de4f501e457cf72e'),
(62, NULL, 442556, 'Admin', '8748c9bc86a717a9a8b89e7bc4aad3bd3ad5ceb4', 'Boadu', 'Yaw', '0551780523', NULL, '', 1, '1', '2023-04-23', '2023-04-23', 451923, '4044ebebcee96c71c049112f0490910d197dac2e'),
(63, NULL, 378012, 'Admin', 'bdfa97bab93d4d4c8c3729673ebe045cf73924e9', 'Frempong', 'Francis', '0504311362', NULL, '', 1, '1', '2023-05-29', '2023-05-29', 473858, 'ac6c558faeae8e258ac0b8321d28a8fd0ed6ba71'),
(64, NULL, 300985, 'PATRICK', 'f4af8db01eca860adfda6315c1da0a005a832757', 'LANZO', 'PATRICK', '233549521977', NULL, '', 5, '1', '2023-05-29 14:34:13', '2023-05-29 14:34:13', 473858, '14eaf9d8ab516ab28f5739f44971c0ec854fe607'),
(65, NULL, 947953, 'Admin', '3a359c854539128980c6f36ec22586f33ddac0a5', 'Kofi', 'Andrew', '0556296422', NULL, '', 1, '1', '2023-06-05', '2023-06-05', 169954, '749691077b33a673c1f50ccbf5258ec877df9eb1'),
(66, NULL, 130537, 'Admin', '8ceaef40faec22668f328081d22edf87fefbc67d', 'Brempong', 'Kwasi', '0247058668', NULL, '', 1, '1', '2023-12-04', '2023-12-04', 379999, 'f33ed0e6dbe9070e872af17bf8f3075e3db43bc9'),
(67, NULL, 594285, 'paka', 'bf700943a1a05e70fe203a0bcb3c5e293010acc4', 'Andrew Test', 'Kofi', '0556296422', NULL, '', 5, '1', '2024-02-04 19:34:00', '2024-02-04 19:34:00', 233211, '415b21bbba91518c18cf6073b4ee6e569440deec'),
(68, NULL, 246236, 'Bigills', 'f09cf7033d5aed6aff04b64177e9a3a10f692ea7', 'Baah', 'Abigail', '0246147105', NULL, '', 5, '1', '2024-02-04 19:35:31', '2024-02-04 19:35:31', 233211, '984b7fa0aa19b34c38f1249f020ffc4f2025c064'),
(69, NULL, 520461, 'kjojo', 'e1f4b4f7486214353366cb6f44d3526610fc05c3', 'Kissi', 'Jojo', '0541397813', NULL, '', 5, '1', '2024-02-04 19:50:16', '2024-02-04 19:50:16', 233211, '9af7fa70179c3fbc5d824778eeb2c49a8839e677'),
(70, NULL, 699594, 'Manager', '5b1fe27fb882bc44ebbd5068ee4a3620a3267fef', 'KWAME', 'MICHAEL', '0541502290', NULL, '', 1, '1', '2024-04-25', '2024-04-26 01:45:01pm', 340059, 'fe8ba4a017c193ca47964ef477d29ce92ce271f4'),
(71, NULL, 680445, 'Berlynda', 'c67e7cb9079c8a21147e53293f9fa40d043a33ae', 'Abakah', 'ummi', '0243836985', NULL, '', 1, '1', '2024-04-26 13:43:52', '2024-08-02 12:07:35pm', 340059, 'f5b9bdf87ec376ba8444da3f34ca8efa9392273f'),
(72, NULL, 660546, 'Linkseng', 'ec44cec0323bdbc41a3b62086a0f0cec591a371b', 'Developer', 'account', '0247058668', NULL, '', 1, '1', '2024-05-13 20:20:43', '2024-08-01 10:22:27pm', 340059, 'b05aa16c47a208a67137192826fbe2d033fa594c'),
(73, NULL, 940492, 'Admin', 'de7981d1694c507e4261a089c52ef2a05e5281ea', 'Joe', 'Max', '0247058668', NULL, NULL, 1, '1', '2024-06-03', '2024-06-03', 197163, '2b675cbbfbe5296f596bdb6c61fd94ed8ff8132f'),
(74, NULL, 136133, 'Admin', 'c06a830bfe8847278b5ce8acb07b70a54f13bab7', 'Joe', 'Max', '0247058668', NULL, NULL, 1, '1', '2024-06-03', '2024-06-03', 518163, 'c71562d11748249f15696d12702ec28fd329ae11'),
(75, NULL, 288354, 'Admin', 'd64701b53a8ba7a355a723d18199b821a09634bf', 'Asante', 'Saani', '0247058661', NULL, NULL, 1, '1', '2024-06-03', '2024-06-03', 929764, '4c554106218aa6f6b2d6681e6a3eb40bbde476eb'),
(76, NULL, 801884, 'Admin', 'e67bfc7b66aa529d1f49cdb34b27085647e28f6c', 'Stanley', 'Quaye', '0247884488', NULL, NULL, 1, '1', '2024-06-03', '2024-06-03', 267680, 'c1d82321e159008d59eb4673db34c42052657f5f'),
(77, NULL, 420914, 'Admin', 'c8c35b589be60dfa7c12227eb161ff81765eae73', 'Johnson ', 'Kwame', '0248998877', NULL, NULL, 1, '1', '2024-06-03', '2024-06-03', 371265, '4bd7368beb102800b27b1d5fc41aae50af251382'),
(78, NULL, 646353, 'Admin', 'c6a43f4bb8bdea05276c32e8f83b0d2b5cd8f62b', 'Joe', 'Larry', '0248778844', NULL, NULL, 1, '1', '2024-06-03', '2024-06-03', 933642, 'f95d4bbe503573235b276913c4c2306eeccef4b4'),
(79, NULL, 920215, 'Admin', 'c5bc58095494b384897ef93081c771f63b1b2672', 'Amoakoh ', 'Richard ', '0209460537', NULL, NULL, 1, '1', '2024-07-11', '2024-07-11', 377586, 'bf81a26a4da3e0dcdfff92bdbb87d807ae2c6248'),
(80, NULL, 935855, 'Admin', '20f0e5ae4822309920b4e252c597c35eb402322c', 'Imbeah ', 'Felicia', '0209083006', NULL, NULL, 1, '1', '2024-07-14', '2024-07-14', 961704, '070d3e2326c737f12bbdcfcf755ec534c9344b56'),
(81, NULL, 594019, 'Ldevelop', 'cb4ae4787bfa701a930e5299fda6d89b98948c8f', 'Max', 'Joe', '0245898899', NULL, NULL, 1, '1', '2024-07-15', '2024-07-15 01:58:01pm', 516448, '41b6e586e620002d91ad2f9c7dd33a09aa128578'),
(82, NULL, 974907, 'Admin', 'e5ddda6ed765e61e30375aaa867bfb47e41ec5da', 'Yaw', 'Darko', '0247058668', NULL, NULL, 1, '1', '2024-07-15', '2024-07-15', 558404, '4b4eced1e207adcdfeb97d430225750d9475fd91'),
(83, NULL, 135072, 'Admin', '5469f5ab60424edaacb882ea06aa8758c580f128', 'Barrigah', 'Benissan ', '0541397813', NULL, NULL, 1, '1', '2024-07-18', '2024-07-18', 499047, 'a18b1c5d8bc4a70ae1ad35513d86ccf8b4657c92'),
(84, NULL, 309462, 'Admin', '73267c7dc739a7ffb424fa4dfbf417affc4b6d39', 'Eunice', 'Addo', '0274449300', NULL, NULL, 1, '1', '2024-07-19', '2024-07-19', 270530, 'c5446f11f1857ebbf5a1d52fb78a637c94534fdd'),
(85, NULL, 381810, 'Jane', 'd9ae2937e3fe4d66a7dc38144539f316e3b27e6e', 'Kofi', 'Mensah', '0247058668', NULL, NULL, 5, '1', '2024-07-19 14:04:03', '2024-07-19 14:04:03', 516448, '374d4b848ed062af9c80cd39c10823a3695b14a4'),
(86, NULL, 416457, 'James', 'f8d06513f33eacc1d16251ec36dc16de8bf39532', 'Addo', 'James', '0267192558', NULL, NULL, 5, '1', '2024-07-19 14:04:13', '2024-07-19 14:04:13', 270530, '712badff9ae706ae90654ccb4bbd5c6836f3e15b'),
(87, NULL, 648645, 'Admin', '722d93f2cc0117afa8211db039fa2f6688eba2bc', 'Test user', 'Kwesi', '0247058668', NULL, NULL, 1, '1', '2024-07-19', '2024-07-19', 751991, '8af1e2ed5531a504ee542ef6a40682c50dd9e8af'),
(88, NULL, 342869, 'Admin', 'fe73d2b963e691d3a5d571d685caec7172e11cbc', 'Atefah', 'Koif Andrew', '0556296422', NULL, NULL, 1, '1', '2024-07-23', '2024-07-23', 598200, 'a50e8c9fb5f5bdd95ecc4ec567dc29e3d8da3ff3'),
(89, NULL, 968925, 'Admin', '484f8e7251d039ca3d7e08863984fb22b88e8ee3', 'Atefah', 'kofi Andrew', '0556296422', NULL, NULL, 1, '1', '2024-07-31', '2024-07-31', 352648, '91d9d9a09faace15f69407c4763010df6a64ef59'),
(90, NULL, 704020, 'Teller1test', '8aeb5562ff976763e20fa3e6c008ea1c84952a96', 'Kumah', 'Test', '0556296422', NULL, NULL, 3, '1', '2024-07-31 03:24:40', '2024-07-31 03:24:40', 352648, '10d0a98be6e53ccac9399e5326aa9c558513c146');

-- --------------------------------------------------------

--
-- Table structure for table `balance_tb`
--

CREATE TABLE `balance_tb` (
  `ID` bigint(11) NOT NULL,
  `CLIENT_ID` bigint(11) DEFAULT NULL,
  `PRODUCT_ID` bigint(11) DEFAULT NULL,
  `ACCOUNT_NUMBER` varchar(200) DEFAULT NULL,
  `FEES` double DEFAULT NULL,
  `DEPOSITS` double DEFAULT NULL,
  `INTERESTS` double DEFAULT NULL,
  `WITHDRAWALS` double DEFAULT NULL,
  `BALANCE` double DEFAULT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DATE_MODIFIED` varchar(50) DEFAULT NULL,
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `balance_tb`
--

INSERT INTO `balance_tb` (`ID`, `CLIENT_ID`, `PRODUCT_ID`, `ACCOUNT_NUMBER`, `FEES`, `DEPOSITS`, `INTERESTS`, `WITHDRAWALS`, `BALANCE`, `DATE_CREATED`, `DATE_MODIFIED`, `CCODE`, `HCODE`) VALUES
(1, 165980726, 247344, 'GRE 0000000024', 20, 2020, 0, 0, 2000, '2024-10-11 10:53:39', '2024-10-11 10:53:39', 340059, '2aff207b6fe9d5695218d0cd93132ad9992f711a'),
(2, 964216306, 247344, 'GRE 0000000025', 20, 3120, 0, 3050, 50, '2024-08-06 12:16:06', '2024-08-06 12:16:06', 340059, 'da60659b141a9cb6b4dc674aa69c491ada6c6006'),
(3, 558365177, 247344, 'GRE 0000000026', 20, 420, 0, 260, 140, '2024-08-06 12:27:03', '2024-08-06 12:27:03', 340059, 'c028793f1a98c4099acc95e362ee027060defa7b'),
(4, 417764857, 247344, 'GRE 0000000027', 20, 490, 0, 0, 470, '2024-08-06 12:41:12', '2024-08-06 12:41:12', 340059, '16e1cb67a6c21686c1b45d7d7f9ab90ae0411ca2'),
(5, 502344178, 247344, 'GRE 0000000028', 20, 800, 0, 730, 50, '2024-08-06 13:04:03', '2024-08-06 13:04:03', 340059, 'abc5ef1998500c9136c90623cb31806bc7fb3f35'),
(6, 118760168, 247344, 'GRE 0000000029', 20, 2770, 0, 2700, 50, '2024-08-06 13:28:21', '2024-08-06 13:28:21', 340059, '42a53d567d3b39c37423d78ec0d001c1f69bd445'),
(7, 829181896, 247344, 'GRE 0000000030', 20, 2270, 0, 2150, 100, '2024-09-09 10:10:00', '2024-09-09 10:10:00', 340059, 'a4e465abc48bdf335d549507ed22a512ba134e4c'),
(8, 576165856, 247344, 'GRE 0000000031', 20, 6530, 0, 4180, 2330, '2024-09-27 16:18:46', '2024-09-27 16:18:46', 340059, '9490236425e78a48a598b1d555a5b07ab0b666ba'),
(9, 326252747, 247344, 'GRE 0000000032', 20, 9370, 0, 9270, 80, '2024-10-11 10:52:07', '2024-10-11 10:52:07', 340059, 'f20295e32eb3a9ecf6860756178fda772c21d6fe');

-- --------------------------------------------------------

--
-- Table structure for table `charge_tb`
--

CREATE TABLE `charge_tb` (
  `ID` bigint(11) NOT NULL,
  `CLIENT_ID` bigint(11) DEFAULT NULL,
  `ACCOUNT_NUMBER` varchar(200) DEFAULT NULL,
  `WITHDRAWAL_ID` int(11) DEFAULT NULL,
  `FEE_TYPE` varchar(200) DEFAULT NULL,
  `AMOUNT` double DEFAULT NULL,
  `DATE_CREATED` varchar(100) DEFAULT NULL,
  `DATE_MODIFIED` varchar(100) DEFAULT NULL,
  `DATE_NORMAL` varchar(200) DEFAULT NULL,
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `charge_tb`
--

INSERT INTO `charge_tb` (`ID`, `CLIENT_ID`, `ACCOUNT_NUMBER`, `WITHDRAWAL_ID`, `FEE_TYPE`, `AMOUNT`, `DATE_CREATED`, `DATE_MODIFIED`, `DATE_NORMAL`, `CCODE`, `HCODE`) VALUES
(1, 165980726, 'GRE 0000000024', NULL, 'ENTRY FEE', 20, '2024-08-06 11:31:06am', '2024-08-06 11:31:06', '2024-08-06 11:31:06', 340059, '05ad2ee339cf327df75aa7be16140849cab2e649'),
(2, 964216306, 'GRE 0000000025', NULL, 'ENTRY FEE', 20, '2024-08-06 12:04:48pm', '2024-08-06 12:04:48', '2024-08-06 12:04:48', 340059, 'd34d3fdac01af035f62ec204350c6cb4094c8eb2'),
(3, 964216306, 'GRE 0000000025', 1, 'WITHDRAWAL FEE', 0, '2022-12-22 12:15:31pm', NULL, '2022-12-22', 340059, 'adc1acb16a6f92526dd31833730d5ba58f0c7251'),
(4, 964216306, 'GRE 0000000025', 2, 'WITHDRAWAL FEE', 0, '2023-01-10 12:16:06pm', NULL, '2023-01-10', 340059, 'db089d314bc713c940f18227c32ab8edc26a0d05'),
(5, 558365177, 'GRE 0000000026', NULL, 'ENTRY FEE', 20, '2024-08-06 12:23:47pm', '2024-08-06 12:23:47', '2024-08-06 12:23:47', 340059, '36fe555fa0fcc8ae7812f67f4c142f659295a665'),
(6, 558365177, 'GRE 0000000026', 3, 'WITHDRAWAL FEE', 0, '2022-12-22 12:27:03pm', NULL, '2022-12-22', 340059, 'f2245d74b60378cae0b4dc4f34eea5bc2ead6022'),
(7, 417764857, 'GRE 0000000027', NULL, 'ENTRY FEE', 20, '2024-08-06 12:37:18pm', '2024-08-06 12:37:18', '2024-08-06 12:37:18', 340059, 'fd2120e43518fcf49172485498bb81a20aa93b49'),
(8, 502344178, 'GRE 0000000028', NULL, 'ENTRY FEE', 20, '2024-08-06 12:56:54pm', '2024-08-06 12:56:54', '2024-08-06 12:56:54', 340059, '1cbbea89dc04232ea8e09dee8a1dc7c31e3103c1'),
(9, 502344178, 'GRE 0000000028', 4, 'WITHDRAWAL FEE', 0, '2022-08-02 01:00:20pm', NULL, '2022-08-02', 340059, 'c2cf63cfe26e5b2f25b3835a0086703530b76f0c'),
(10, 502344178, 'GRE 0000000028', 5, 'WITHDRAWAL FEE', 0, '2022-09-21 01:01:26pm', NULL, '2022-09-21', 340059, '3a1e02a6ff6be7b0f4e233d24165f7f5e5d6746b'),
(11, 502344178, 'GRE 0000000028', 6, 'WITHDRAWAL FEE', 0, '2022-09-22 01:01:50pm', NULL, '2022-09-22', 340059, '37d916f93b9f742d382c8e24cf5f001e2ae68b5b'),
(12, 502344178, 'GRE 0000000028', 7, 'WITHDRAWAL FEE', 0, '2022-10-18 01:02:06pm', NULL, '2022-10-18', 340059, '742c18c15fecd6a888d3a8e1e9c64b40b3ba3ca6'),
(13, 502344178, 'GRE 0000000028', 8, 'WITHDRAWAL FEE', 0, '2022-12-09 01:02:36pm', NULL, '2022-12-09', 340059, '8c73db12b2927d78b423fb49aa246817e16f0e29'),
(14, 502344178, 'GRE 0000000028', 9, 'WITHDRAWAL FEE', 0, '2023-02-15 01:04:03pm', NULL, '2023-02-15', 340059, 'e18a674f2a5f46a6a30b7ec701720a7fad2dd948'),
(15, 118760168, 'GRE 0000000029', NULL, 'ENTRY FEE', 20, '2024-08-06 01:11:49pm', '2024-08-06 13:11:49', '2024-08-06 13:11:49', 340059, 'a423d93a9d4199467b60654c9d9fd9ea88fe3d29'),
(16, 118760168, 'GRE 0000000029', 10, 'WITHDRAWAL FEE', 0, '2022-11-11 01:18:11pm', NULL, '2022-11-11', 340059, '1a1dc74f1a44ade408b308567151a077965b910d'),
(17, 118760168, 'GRE 0000000029', 11, 'WITHDRAWAL FEE', 0, '2022-12-23 01:22:57pm', NULL, '2022-12-23', 340059, '74c09b21041782d0d7a4470b53116bbedc1a3239'),
(18, 118760168, 'GRE 0000000029', 12, 'WITHDRAWAL FEE', 0, '2023-06-02 01:28:21pm', NULL, '2023-06-02', 340059, 'b948f2b32f07af7b256e597b8ff352b8d48e2820'),
(19, 829181896, 'GRE 0000000030', NULL, 'ENTRY FEE', 20, '2024-08-06 05:42:48pm', '2024-08-06 17:42:48', '2024-08-06 17:42:48', 340059, 'c37a14c7dbced0a98fd5f08d32c12f8ce33b06f1'),
(20, 829181896, 'GRE 0000000030', 13, 'WITHDRAWAL FEE', 0, '2024-06-18 05:47:09pm', NULL, '2024-06-18', 340059, '219864e37e545f896fb8b63ae7474c05d6383f27'),
(21, 829181896, 'GRE 0000000030', 14, 'WITHDRAWAL FEE', 0, '2024-06-19 05:47:36pm', NULL, '2024-06-19', 340059, 'e012a59d6f9e2aeb7185afbbdc5abb5b2961a6eb'),
(22, 829181896, 'GRE 0000000030', 15, 'WITHDRAWAL FEE', 0, '2024-08-01 05:48:08pm', NULL, '2024-08-01', 340059, 'bd23aa20bbe1892102f50d5e1fd209bf144ba64d'),
(23, 576165856, 'GRE 0000000031', NULL, 'ENTRY FEE', 20, '2024-08-07 03:06:23pm', '2024-08-07 15:06:23', '2024-08-07 15:06:23', 340059, '7b8c26c61688c57f1d99cf520712bda3efb3e3f8'),
(24, 576165856, 'GRE 0000000031', 16, 'WITHDRAWAL FEE', 0, '2023-07-20 03:07:24pm', NULL, '2023-07-20', 340059, 'c017981b00e483a93a46dd215ac50450835e7273'),
(25, 576165856, 'GRE 0000000031', 17, 'WITHDRAWAL FEE', 0, '2023-07-24 03:07:39pm', NULL, '2023-07-24', 340059, '13ec6971f4a11c21c1f41a81e50ab756efa7c7be'),
(26, 576165856, 'GRE 0000000031', 18, 'WITHDRAWAL FEE', 0, '2023-08-01 03:07:58pm', NULL, '2023-08-01', 340059, 'dacef367f8ce18d063e4d3f5b587fbbb87e64f9e'),
(27, 576165856, 'GRE 0000000031', 19, 'WITHDRAWAL FEE', 0, '2023-09-11 03:08:19pm', NULL, '2023-09-11', 340059, '131984f217410760da3d9caa8158407806968117'),
(28, 576165856, 'GRE 0000000031', 20, 'WITHDRAWAL FEE', 0, '2023-11-15 03:10:34pm', NULL, '2023-11-15', 340059, 'ac07c2734c61edde0541c94fd1cbdc81f7d7c1df'),
(29, 576165856, 'GRE 0000000031', 21, 'WITHDRAWAL FEE', 0, '2023-11-29 03:11:22pm', NULL, '2023-11-29', 340059, 'b44a7dc05a4f44d7632f83e096c3d86d87fc459e'),
(30, 576165856, 'GRE 0000000031', 22, 'WITHDRAWAL FEE', 0, '2023-12-05 03:11:48pm', NULL, '2023-12-05', 340059, 'a2407adc52a8ae1f1a1453f720ef2228cabb082d'),
(31, 576165856, 'GRE 0000000031', 23, 'WITHDRAWAL FEE', 0, '2023-12-14 03:12:08pm', NULL, '2023-12-14', 340059, '68785a4718d34379520bd6470293866d850ff5e1'),
(32, 576165856, 'GRE 0000000031', 24, 'WITHDRAWAL FEE', 0, '2024-03-12 03:12:34pm', NULL, '2024-03-12', 340059, '2947d09e423159e44eb818091f558c594784e593'),
(33, 576165856, 'GRE 0000000031', 25, 'WITHDRAWAL FEE', 0, '2024-03-16 03:13:06pm', NULL, '2024-03-16', 340059, '4ecd365daeef725af29042dff5f7c1be9b16b119'),
(34, 576165856, 'GRE 0000000031', 26, 'WITHDRAWAL FEE', 0, '2024-05-14 03:14:02pm', NULL, '2024-05-14', 340059, '1e129c677f5ac4cc173d919c043b95c30e6d0b7c'),
(35, 576165856, 'GRE 0000000031', 27, 'WITHDRAWAL FEE', 0, '2024-06-03 03:14:31pm', NULL, '2024-06-03', 340059, 'e9cc90526966707a23ec3df2aad7dadc864e4571'),
(36, 576165856, 'GRE 0000000031', 28, 'WITHDRAWAL FEE', 0, '2024-06-03 03:15:15pm', NULL, '2024-06-03', 340059, 'e15622f19ef23f4303f58f0880c8977ca1303892'),
(37, 326252747, 'GRE 0000000032', NULL, 'ENTRY FEE', 20, '2024-08-07 03:55:38pm', '2024-08-07 15:55:38', '2024-08-07 15:55:38', 340059, 'c25836b20cb85400942462e0389b2bd8bfd01c43'),
(38, 326252747, 'GRE 0000000032', 29, 'WITHDRAWAL FEE', 0, '2022-07-22 03:58:24pm', NULL, '2022-07-22', 340059, '2e49d36d2ff3ca2c8781284c9f88b8c93e267026'),
(39, 326252747, 'GRE 0000000032', 30, 'WITHDRAWAL FEE', 0, '2022-07-25 03:58:46pm', NULL, '2022-07-25', 340059, '8da6cde6dfdcd93e41ea38c7416b3e28b4be8e62'),
(40, 326252747, 'GRE 0000000032', 31, 'WITHDRAWAL FEE', 0, '2022-08-17 03:59:32pm', NULL, '2022-08-17', 340059, '5517f74a47488bded3fb03c3d49b6f7e1995aecd'),
(41, 326252747, 'GRE 0000000032', 32, 'WITHDRAWAL FEE', 0, '2022-09-21 04:00:40pm', NULL, '2022-09-21', 340059, '5ab07ca5d33daa28b78237b0a9fff5107c504e3e'),
(42, 326252747, 'GRE 0000000032', 33, 'WITHDRAWAL FEE', 0, '2022-10-12 04:01:47pm', NULL, '2022-10-12', 340059, '8e5c1d84fde4d20b39b2f6866bac0179e385a7c5'),
(43, 326252747, 'GRE 0000000032', 34, 'WITHDRAWAL FEE', 0, '2022-10-19 04:02:47pm', NULL, '2022-10-19', 340059, 'c1e35c06eca116721e58e6dd1cc6a8c487ef11d4'),
(44, 326252747, 'GRE 0000000032', 35, 'WITHDRAWAL FEE', 0, '2022-10-24 04:03:23pm', NULL, '2022-10-24', 340059, 'd07f11e33b36d651dea42c18a4af6dc08c3ff9a6'),
(45, 326252747, 'GRE 0000000032', 36, 'WITHDRAWAL FEE', 0, '2022-10-28 04:04:31pm', NULL, '2022-10-28', 340059, '6a48c156ea44373ac5c45afb8534ca25756ce05b'),
(46, 326252747, 'GRE 0000000032', 37, 'WITHDRAWAL FEE', 0, '2022-11-12 04:07:41pm', NULL, '2022-11-12', 340059, '5134a32afeef4cd27b550d593a5d4cc65ebd86f9'),
(47, 326252747, 'GRE 0000000032', 38, 'WITHDRAWAL FEE', 0, '2022-11-19 04:08:15pm', NULL, '2022-11-19', 340059, '4282eb724f90d48e462d26e5cf9fea51779daeb6'),
(48, 326252747, 'GRE 0000000032', 39, 'WITHDRAWAL FEE', 0, '2022-12-01 04:08:33pm', NULL, '2022-12-01', 340059, 'bd0da3d1d4c5bc90eb53bd89a5690cbea7156e7d'),
(49, 326252747, 'GRE 0000000032', 40, 'WITHDRAWAL FEE', 0, '2022-12-08 04:08:50pm', NULL, '2022-12-08', 340059, '0c1c7dc7aba5d179b4a8283128fa1d23242408e4'),
(50, 326252747, 'GRE 0000000032', 41, 'WITHDRAWAL FEE', 0, '2022-12-17 04:09:13pm', NULL, '2022-12-17', 340059, '366d4b5502009183cef75afddc06a4f8a6827740'),
(51, 326252747, 'GRE 0000000032', 42, 'WITHDRAWAL FEE', 0, '2023-01-13 04:10:02pm', NULL, '2023-01-13', 340059, 'de50811bea44854229e380abaf4af5f364b2013d'),
(52, 326252747, 'GRE 0000000032', 43, 'WITHDRAWAL FEE', 0, '2023-01-14 04:10:15pm', NULL, '2023-01-14', 340059, '04b9b17139b80431e252a0c4b8eb892d4e751872'),
(53, 326252747, 'GRE 0000000032', 44, 'WITHDRAWAL FEE', 0, '2023-01-26 04:10:31pm', NULL, '2023-01-26', 340059, 'daeed3465a1d01fbf3f46830dc3c04b226171496'),
(54, 326252747, 'GRE 0000000032', 45, 'WITHDRAWAL FEE', 0, '2023-04-11 04:11:23pm', NULL, '2023-04-11', 340059, 'fcdc20b0df2b3937625650a52a2b9f65a55aa8ea'),
(55, 326252747, 'GRE 0000000032', 46, 'WITHDRAWAL FEE', 0, '2023-04-14 04:12:11pm', NULL, '2023-04-14', 340059, '5fa76d6074a7f8028fc7f3a9a438c319447c2eda'),
(56, 326252747, 'GRE 0000000032', 47, 'WITHDRAWAL FEE', 0, '2023-05-31 04:14:01pm', NULL, '2023-05-31', 340059, 'a4940fa14e48c59fc784887b9d5b38294a021519'),
(57, 326252747, 'GRE 0000000032', 48, 'WITHDRAWAL FEE', 0, '2023-11-10 04:16:40pm', NULL, '2023-11-10', 340059, 'e0ccdaf348c0911ef9df4d39aa6f2670f75eda15'),
(58, 326252747, 'GRE 0000000032', 49, 'WITHDRAWAL FEE', 0, '2024-01-08 04:18:41pm', NULL, '2024-01-08', 340059, '83b8167b2de39f1567708528ee94bfc0448efb78'),
(59, 326252747, 'GRE 0000000032', 50, 'WITHDRAWAL FEE', 0, '2024-02-09 04:19:22pm', NULL, '2024-02-09', 340059, 'f580468a21a0b380d7b4d135bbd53306f14cbcbf'),
(60, 326252747, 'GRE 0000000032', 51, 'WITHDRAWAL FEE', 0, '2024-03-08 04:20:05pm', NULL, '2024-03-08', 340059, 'ae6b4c57d1f9db21dfef454a18ac458c985a64e2'),
(61, 326252747, 'GRE 0000000032', 52, 'WITHDRAWAL FEE', 0, '2024-06-10 04:21:02pm', NULL, '2024-06-10', 340059, 'b5bf629a3be877af595c12523ef45f3c498571a0'),
(62, 326252747, 'GRE 0000000032', 53, 'WITHDRAWAL FEE', 0, '2024-07-30 04:21:46pm', NULL, '2024-07-30', 340059, 'edd7429ed9143ecce9f20594cd8e81674779fd59'),
(63, 326252747, 'GRE 0000000032', 54, 'WITHDRAWAL FEE', 0, '2024-08-08 12:29:28pm', NULL, '2024-08-08', 340059, '8eaec8051bba1c44321b74e4bab9d9158d2b44ca'),
(64, 576165856, 'GRE 0000000031', 55, 'WITHDRAWAL FEE', 0, '2024-08-14 03:35:36pm', NULL, '2024-08-14', 340059, 'a82f6fe0fa4226f07a866541d34be684f611bc74'),
(65, 326252747, 'GRE 0000000032', 56, 'WITHDRAWAL FEE', 0, '2024-08-14 01:15:58pm', NULL, '2024-08-14', 340059, '23bf9c9001be4f39b8ae05edac6e229a84aade80'),
(66, 576165856, 'GRE 0000000031', 57, 'WITHDRAWAL FEE', 0, '2024-08-22 04:22:43pm', NULL, '2024-08-22', 340059, 'de398058858282addc4dec4e15c111ad79f0d893'),
(67, 829181896, 'GRE 0000000030', 58, 'WITHDRAWAL FEE', 0, '2024-08-26 04:45:30pm', NULL, '2024-08-26', 340059, '17c62fc7c995edf7b81a92e0dd95bc530a8a0097'),
(68, 829181896, 'GRE 0000000030', 59, 'WITHDRAWAL FEE', 0, '2024-08-28 08:27:17am', NULL, '2024-08-28', 340059, 'a25ccd6f5902ad36ecf2967f1659b53f4d3afeb1'),
(69, 576165856, 'GRE 0000000031', 60, 'WITHDRAWAL FEE', 0, '2024-08-30 03:01:03pm', NULL, '2024-08-30', 340059, '148bf34791145dda0e0775d0de27b3a21bfed807'),
(70, 829181896, 'GRE 0000000030', 61, 'WITHDRAWAL FEE', 0, '2024-09-09 10:10:00am', NULL, '2024-09-09', 340059, '1a9bf4509d6f93aab00a9604093a1d509bed883a'),
(71, 576165856, 'GRE 0000000031', 62, 'WITHDRAWAL FEE', 0, '2024-09-09 12:44:03pm', NULL, '2024-09-09', 340059, 'd45ebeb16ec860c55aadb6aa28804f4c3618a6a5'),
(72, 576165856, 'GRE 0000000031', 63, 'WITHDRAWAL FEE', 0, '2024-09-13 02:56:03pm', NULL, '2024-09-13', 340059, '88303fc71800b90412051b55eee7e74f57fa01aa'),
(73, 576165856, 'GRE 0000000031', 64, 'WITHDRAWAL FEE', 0, '2024-09-17 05:20:43pm', NULL, '2024-09-17', 340059, '2f003b16b0b9faf19e064c8e515779e668f84ce1'),
(74, 326252747, 'GRE 0000000032', 65, 'WITHDRAWAL FEE', 0, '2024-09-19 03:08:18pm', NULL, '2024-09-19', 340059, '42ce049826709401458aaf75a6f0118c917fb50f'),
(75, 576165856, 'GRE 0000000031', 66, 'WITHDRAWAL FEE', 0, '2024-09-25 01:07:30pm', NULL, '2024-09-25', 340059, '00f8e4f32643a7fa7c00e9139903e47e5c623d8c'),
(76, 326252747, 'GRE 0000000032', 67, 'WITHDRAWAL FEE', 0, '2024-09-26 09:19:46am', NULL, '2024-09-26', 340059, 'eeaba61b2ce8947c8d1f38de77a841ea9eded925'),
(77, 576165856, 'GRE 0000000031', 68, 'WITHDRAWAL FEE', 0, '2024-09-27 04:18:46pm', NULL, '2024-09-27', 340059, '2f8ecd1b5aee136a5197fc67153fe0657ebc02e1'),
(78, 326252747, 'GRE 0000000032', 69, 'WITHDRAWAL FEE', 0, '2024-09-30 12:16:09pm', NULL, '2024-09-30', 340059, '5e2ab66471937fb6f66fe67bb059879fd6eaa3e6'),
(79, 326252747, 'GRE 0000000032', 70, 'WITHDRAWAL FEE', 0, '2024-10-08 01:02:53pm', NULL, '2024-10-08', 340059, '1f9631bd0d00451bd804d268b6b22a6ea88a68c6'),
(80, 326252747, 'GRE 0000000032', 71, 'WITHDRAWAL FEE', 0, '2024-10-11 10:52:07am', NULL, '2024-10-11', 340059, '667b787e03cdcc0ba899d8ef99b0cfc387762fd6');

-- --------------------------------------------------------

--
-- Table structure for table `check_tb`
--

CREATE TABLE `check_tb` (
  `ID` int(11) NOT NULL,
  `ACCOUNT_NUMBER` varchar(200) DEFAULT NULL,
  `ENTRY_FEE_STATUS` varchar(50) DEFAULT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `check_tb`
--

INSERT INTO `check_tb` (`ID`, `ACCOUNT_NUMBER`, `ENTRY_FEE_STATUS`, `DATE_CREATED`, `CCODE`, `HCODE`) VALUES
(1, 'GRE 0000000024', '0', '2024-08-06 11:31:06', 340059, '785212a8981cd71874c9a31f5f607af2ef3ab3cb'),
(2, 'GRE 0000000025', '0', '2024-08-06 12:04:48', 340059, '4d71829b5e32a61aeff87de619fc2117d52f0bd6'),
(3, 'GRE 0000000026', '0', '2024-08-06 12:23:47', 340059, 'c4b0dd6d2014f4e343fe1697c108bd00e040ecba'),
(4, 'GRE 0000000027', '0', '2024-08-06 12:37:18', 340059, 'aac564e8fc2e2a7fd879f57f2f34f11adce50bd4'),
(5, 'GRE 0000000028', '0', '2024-08-06 12:56:54', 340059, '1a3241fe6c1a42bdc0995ec70830f420eaf7baf2'),
(6, 'GRE 0000000029', '0', '2024-08-06 13:11:49', 340059, '39feeeb114717f326b42defa2bdb9b3beb441d8c'),
(7, 'GRE 0000000030', '0', '2024-08-06 17:42:48', 340059, '6beec82a0b245bc3980e879002078e47ff262073'),
(8, 'GRE 0000000031', '0', '2024-08-07 15:06:23', 340059, '636065b27e81475f2765dc553dfc1c6755cbe3c5'),
(9, 'GRE 0000000032', '0', '2024-08-07 15:55:38', 340059, '61ded5f0ce9b8e02098cd77e4e7d0ea9351453d5');

-- --------------------------------------------------------

--
-- Table structure for table `client_tb`
--

CREATE TABLE `client_tb` (
  `ID` bigint(11) NOT NULL,
  `CODE` bigint(11) NOT NULL,
  `FIRSTNAME` varchar(200) NOT NULL,
  `LASTNAME` varchar(200) NOT NULL,
  `OTHERNAME` varchar(200) DEFAULT NULL,
  `DOB` varchar(50) DEFAULT NULL,
  `GENDER` varchar(20) NOT NULL,
  `CONTACT_1` varchar(10) NOT NULL,
  `NEXT_OF_KIN` varchar(200) DEFAULT NULL,
  `NEXT_OF_KIN_CONTACT` varchar(13) DEFAULT NULL,
  `REGION` varchar(50) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `EDUCATION` varchar(200) DEFAULT NULL,
  `SESSIONID` int(11) DEFAULT NULL COMMENT '1:Daily 2:Weekly 3:Monthly 4:Yearly',
  `AREA` varchar(200) DEFAULT NULL,
  `OCCUPATION` varchar(100) DEFAULT NULL,
  `IDENTIFICATION` varchar(100) DEFAULT NULL,
  `IDNUMBER` varchar(100) DEFAULT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DATE_MODIFIED` varchar(100) DEFAULT NULL,
  `ACCOUNT_STATUS` int(11) DEFAULT NULL,
  `IMAGE_PATH` varchar(200) DEFAULT NULL,
  `POST_BY` int(11) DEFAULT NULL,
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client_tb`
--

INSERT INTO `client_tb` (`ID`, `CODE`, `FIRSTNAME`, `LASTNAME`, `OTHERNAME`, `DOB`, `GENDER`, `CONTACT_1`, `NEXT_OF_KIN`, `NEXT_OF_KIN_CONTACT`, `REGION`, `CITY`, `EMAIL`, `EDUCATION`, `SESSIONID`, `AREA`, `OCCUPATION`, `IDENTIFICATION`, `IDNUMBER`, `DATE_CREATED`, `DATE_MODIFIED`, `ACCOUNT_STATUS`, `IMAGE_PATH`, `POST_BY`, `CCODE`, `HCODE`) VALUES
(1, 165980726, 'BRIGHT', 'HUMADO', 'KWAKU', '1997-04-30', 'male', '0551259828', 'NONE', 'NONE', 'volta', 'HO', 'humadobright010gmail.com', 'SHS', NULL, 'Kpone', 'Driver', 'Ecowas Card', 'GHA-713836785-8', '2024-08-06 11:31:06', '2024-08-06 11:29:07', 1, '1-S-ttZrnFVcuMlgMoFakDkxxyJb4J512', 680445, 340059, '847af6d86948f588af5d122924aac684fafcefea'),
(2, 964216306, 'GEORGE', 'DANSO', 'ODURO', '1995-05-05', 'male', '0549782064', 'NONE', 'NONE', 'eastern', 'AKUAPIM AKROPONG', 'NONE', 'SHS', NULL, 'Kpone', 'Driver', 'Ecowas Card', 'GHA-729084122-3', '2024-08-06 12:04:48', '2024-08-06 12:03:38', 1, '1HcVVzrerAK7spJQMW7FWdpQPd9g9V9t6', 680445, 340059, 'c5e0298f2a8cb3990a1b0bc5ae5f2957aa74ed9d'),
(3, 558365177, 'MATTHEW', 'AYIAH', 'ATO', '1969-02-02', 'male', '0243740694', 'NONE', 'NONE', 'central', 'TAKORADI', 'NONE', 'SHS', NULL, 'Kpone', 'Carpenter', 'Ecowas Card', 'GHA-001117925-6', '2024-08-06 12:23:47', '2024-08-06 12:23:01', 1, '1_vy1F5ATLiNtNBdodS4nd1hKcyNyI4Rz', 680445, 340059, '3e198cb17aca8630bd59689b0a7766c782bc9b69'),
(4, 643587577, 'ABIGAIL', 'NUERTEY', 'NONE', '1992-06-24', 'female', '0248191196', 'NONE', 'NONE', 'greater accra', 'TEMA', 'NONE', 'Degree', NULL, 'Kpone', 'Seamstress', 'Ecowas Card', 'GHA-004893476-5', '2024-08-06 12:32:51', '2024-08-06 12:32:51', 2, '1YtzjxTVuupGC1wJgigAVYPxpxJ0CjlAo', 680445, 340059, '703949df871a0c8c5b4401efdf83aaa6f732e1ab'),
(5, 849128507, 'ABIGAIL', 'NUERTEY', 'NONE', '1992-06-24', 'female', '0248191196', 'NONE', 'NONE', 'greater accra', 'TEMA', 'NONE', 'Degree', NULL, 'Kpone', 'Seamstress', 'Ecowas Card', 'GHA-004893476-5', '2024-08-06 12:34:22', '2024-08-06 12:34:22', 2, '1YtzjxTVuupGC1wJgigAVYPxpxJ0CjlAo', 680445, 340059, '47e25bb8a5aafd27fb8985228b4f731eaba81d03'),
(6, 417764857, 'ABIGAIL', 'NUERTEY', 'NONE', '1992-06-24', 'female', '0248191196', 'NONE ', 'NONE', 'greater accra', 'TEMA', 'NONE', 'Degree', NULL, 'Kpone', 'Seamstress', 'Ecowas Card', 'GHA-004893476-5', '2024-08-06 12:37:18', '2024-08-06 12:36:31', 1, '1YtzjxTVuupGC1wJgigAVYPxpxJ0CjlAo', 680445, 340059, 'a8cc5db27fcc63a20ead011efaa05c37ae976c05'),
(7, 334274349, 'BENJAMINE', 'NUERTEY', 'NONE', '1993-06-06', 'male', '0557447781', 'NONE', 'NONE', 'greater accra', 'TEMA', 'NONE', 'JHS', NULL, 'Kpone', 'Engineer', 'Ecowas Card', 'GHA-000995564-2', '2024-08-06 12:52:10', '2024-08-06 12:52:10', 2, '1R7SecuTdjmT3f8IUJx5iwJ8SqGTlcEdN', 680445, 340059, '825c2ee629e62a3eb30eac3ffb40a7903a33bfdc'),
(8, 502344178, 'BENJAMIN', 'ANNA', 'NUERTEY', '1993-06-06', 'male', '0557447781', 'NONE', 'NONE', 'greater accra', 'TEMA', 'NONE', 'JHS', NULL, 'Kpone', 'Engineer', 'Ecowas Card', 'GHA-000995564-2', '2024-08-06 12:56:54', '2024-08-06 12:55:50', 1, '1R7SecuTdjmT3f8IUJx5iwJ8SqGTlcEdN', 680445, 340059, '25daa2df26372a6ec2d4d0bb6553794436849585'),
(9, 118760168, 'EMMANUEL', 'TETTEH', 'NONE', '1990-11-26', 'male', '0549212710', 'NONE', 'NONE', 'greater accra', 'KPONE', 'NONE', 'Degree', NULL, 'Kpone', 'Nurse', 'Ecowas Card', 'GHA-71914180-5', '2024-08-06 13:11:49', '2024-08-06 13:10:28', 1, '15_Nj1xkryA6bMBxJ6fJZqaUarbtZpgsy', 680445, 340059, 'ff69a5a89f1aada5f3808d66c05b9535e99dcf60'),
(10, 508473286, 'KWADWO', 'OFFEI', 'PRINCE', '1997-03-10', 'male', '0598685824', 'NONE', 'NONE', 'eastern', 'AKUAPEM AKROPONG', 'NONE', 'SHS', NULL, 'Kpone', 'Driver', 'Ecowas Card', 'GHA-729084122-3', '2024-08-06 17:38:36', '2024-08-06 17:38:36', 2, '19N46rPDWZ_z5ppgmqKJ2G4oaXh5hkWiq', 680445, 340059, '9ff688d65b8987d87f0584ba282af0d726c65557'),
(11, 829181896, 'KWADWO', 'OFFEI', 'PRINCE', '1997-03-10', 'male', '0598685824', 'NONE', 'NONE', 'eastern', 'AKUAPEM AKROPONG', 'NONE', 'SHS', NULL, 'Kpone', 'Driver', 'Ecowas Card', 'GHA-729084122-3', '2024-08-06 17:42:48', '2024-08-06 17:41:26', 1, '19N46rPDWZ_z5ppgmqKJ2G4oaXh5hkWiq', 680445, 340059, '7ba3bbd220934285f5344e14fe38a66241553587'),
(12, 539631706, 'WISDOM', 'OTITSUAMI', 'NONE', '1999-06-26', 'male', '0246517261', 'NONE', 'NONE', 'greater accra', 'ADAA', 'NONE', 'SHS', NULL, 'Kpone', 'null', 'Ecowas Card', 'GHA-713465516-6', '2024-08-07 14:54:24', '2024-08-07 14:54:24', 2, '1M7XJxUXekiFmqqtur3MjjxsO2ISKmmTU', 680445, 340059, 'd359e95f49f82939f6c93bc709ce00dc1098b966'),
(13, 576165856, 'TETTEH', 'ANNAG', 'SIMON', '1997-05-05', 'male', '0555476346', 'NONE', 'NONE', 'greater accra', 'KPONE', 'simonannang77gmail.com', 'SHS', NULL, 'Kpone', 'Engineer', 'Voters Id', '4734020703', '2024-08-07 15:06:23', '2024-08-07 15:05:16', 1, '1Z8Qn_hg-MZl14ZTcBCso1L27e5GuAJfo', 680445, 340059, '41993e106a0e5e91a76bb4ee1352504758ad21e6'),
(14, 326252747, 'RICHARD', 'AKORLI', 'NONE', '1998-02-07', 'male', '0265136422', 'NONE', 'NONE', 'volta', 'HO', 'NONE', 'SHS', NULL, 'Kpone', 'null', 'Ecowas Card', 'GHA-727495980-5', '2024-08-07 15:55:38', '2024-08-07 15:54:08', 1, '1_t-cXm9hfhPjeOInBcOhlBAAazIej4Qt', 680445, 340059, '0e41f275e6b26b74252a4ca5a9922193008daa02');

-- --------------------------------------------------------

--
-- Table structure for table `client_temp_tb`
--

CREATE TABLE `client_temp_tb` (
  `ID` bigint(20) NOT NULL,
  `FIRSTNAME` varchar(200) NOT NULL,
  `LASTNAME` varchar(200) NOT NULL,
  `OTHERNAME` varchar(200) DEFAULT NULL,
  `DOB` varchar(50) NOT NULL,
  `GENDER` varchar(20) NOT NULL,
  `CONTACT_1` varchar(10) NOT NULL,
  `NEXT_OF_KIN` varchar(200) DEFAULT NULL,
  `NEXT_OF_KIN_CONTACT` varchar(13) DEFAULT NULL,
  `REGION` varchar(50) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `AREA` varchar(200) DEFAULT NULL,
  `OCCUPATION` varchar(100) NOT NULL,
  `IDENTIFICATION` varchar(100) DEFAULT NULL,
  `IDNUMBER` varchar(100) DEFAULT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DATE_MODIFIED` varchar(100) DEFAULT NULL,
  `ACCOUNT_STATUS` int(11) DEFAULT NULL,
  `IMAGE_PATH` varchar(200) DEFAULT NULL,
  `POST_BY` int(11) DEFAULT NULL,
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_tb`
--

CREATE TABLE `company_tb` (
  `ID` int(11) NOT NULL,
  `UNIQ` int(11) NOT NULL,
  `COMPANY` varchar(200) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `BUSINESS` varchar(100) NOT NULL,
  `DATE_CREATED` varchar(100) NOT NULL,
  `DATE_MODIFIED` varchar(100) DEFAULT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `company_tb`
--

INSERT INTO `company_tb` (`ID`, `UNIQ`, `COMPANY`, `PHONE`, `EMAIL`, `BUSINESS`, `DATE_CREATED`, `DATE_MODIFIED`, `HCODE`) VALUES
(56, 340059, 'GREATERS GREEN STAR LIMITED', '0541502290', 'greatersgreeenstar@gmail.com', 'Savings & Loans', '2024-04-25', '2024-04-26 11:55:03am', '437a2e04336b91108db2c14705edbfc41cd553b2');

-- --------------------------------------------------------

--
-- Table structure for table `delist_tb`
--

CREATE TABLE `delist_tb` (
  `ID` bigint(11) NOT NULL,
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext NOT NULL,
  `DTABLE` varchar(50) NOT NULL,
  `DATE_CREATED` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposit_tb`
--

CREATE TABLE `deposit_tb` (
  `ID` bigint(11) NOT NULL,
  `AMOUNT` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `CLIENT_ID` bigint(11) DEFAULT NULL,
  `ACCOUNT_NUMBER` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `DATE_CREATED` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `DATE_NORMAL` varchar(200) DEFAULT NULL,
  `DATE_MODIFIED` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `CREATED_BY` bigint(11) DEFAULT NULL,
  `TAG` int(11) NOT NULL COMMENT '1:Deposit 2:Withdrawal',
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `deposit_tb`
--

INSERT INTO `deposit_tb` (`ID`, `AMOUNT`, `CLIENT_ID`, `ACCOUNT_NUMBER`, `DATE_CREATED`, `DATE_NORMAL`, `DATE_MODIFIED`, `CREATED_BY`, `TAG`, `CCODE`, `HCODE`) VALUES
(1, '1000', 165980726, 'GRE 0000000024', '2024-07-22 11:31:45am', '2024-07-22 11:31:45am', '2024-07-22 11:31:45am', 680445, 1, 340059, '0b9444820bc07ac84b5a1ffcad23f8d04feb672b'),
(2, '120', 165980726, 'GRE 0000000024', '2024-07-26 11:51:44am', '2024-07-26 11:51:44am', '2024-07-26 11:51:44am', 680445, 1, 340059, '78da9e55b7df78d6463f3eea9d83561acc0f6559'),
(3, '200', 165980726, 'GRE 0000000024', '2024-07-29 11:52:03am', '2024-07-29 11:52:03am', '2024-07-29 11:52:03am', 680445, 1, 340059, '908d2fd559baa360f376433fb3bd555e3cc90ecc'),
(4, '100', 165980726, 'GRE 0000000024', '2024-08-05 11:52:30am', '2024-08-05 11:52:30am', '2024-08-05 11:52:30am', 680445, 1, 340059, '9919b25519a528ba6e341fb8f8815e31cf2af47a'),
(5, '420', 964216306, 'GRE 0000000025', '2022-04-28 12:13:01pm', '2022-04-28 12:13:01pm', '2022-04-28 12:13:01pm', 680445, 1, 340059, 'c4c87f44da5b10d19bdaf1b6d22f04f1f458328b'),
(6, '400', 964216306, 'GRE 0000000025', '2022-05-27 12:13:21pm', '2022-05-27 12:13:21pm', '2022-05-27 12:13:21pm', 680445, 1, 340059, '0314d4e4d4ad90b14e2703f1d84bc54b8b0f5d63'),
(7, '400', 964216306, 'GRE 0000000025', '2022-07-22 12:13:46pm', '2022-07-22 12:13:46pm', '2022-07-22 12:13:46pm', 680445, 1, 340059, 'bd7e07c8eda8c37623951974bfbc5d115c87a71b'),
(8, '200', 964216306, 'GRE 0000000025', '2022-08-08 12:14:07pm', '2022-08-08 12:14:07pm', '2022-08-08 12:14:07pm', 680445, 1, 340059, '45a94bc84ba5d7ecbf47d3e7fe55c93d3027dce9'),
(9, '900', 964216306, 'GRE 0000000025', '2022-10-13 12:14:26pm', '2022-10-13 12:14:26pm', '2022-10-13 12:14:26pm', 680445, 1, 340059, 'c3b98381a3b9983cc25257c32c97762b94b73787'),
(10, '800', 964216306, 'GRE 0000000025', '2022-12-12 12:14:55pm', '2022-12-12 12:14:55pm', '2022-12-12 12:14:55pm', 680445, 1, 340059, 'ccc89bcf2927bfa3e585c9f721804f799bfec62a'),
(11, '420', 558365177, 'GRE 0000000026', '2022-12-19 12:24:09pm', '2022-12-19 12:24:09pm', '2022-12-19 12:24:09pm', 680445, 1, 340059, '6baa0fb3d95927178800db1769ef7340410b2e53'),
(12, '40', 417764857, 'GRE 0000000027', '2023-09-28 12:37:43pm', '2023-09-28 12:37:43pm', '2023-09-28 12:37:43pm', 680445, 1, 340059, '3441e8468ddbe2076c64125333c50c53e929a4aa'),
(13, '10', 417764857, 'GRE 0000000027', '2023-10-02 12:38:07pm', '2023-10-02 12:38:07pm', '2023-10-02 12:38:07pm', 680445, 1, 340059, 'ce44559e9655d0d872c5c05f746e099b3662aca3'),
(14, '30', 417764857, 'GRE 0000000027', '2023-10-04 12:38:23pm', '2023-10-04 12:38:23pm', '2023-10-04 12:38:23pm', 680445, 1, 340059, 'e23c3b90ccb8c39ab197aa05ba324819ba4dc1b8'),
(15, '10', 417764857, 'GRE 0000000027', '2023-10-10 12:38:44pm', '2023-10-10 12:38:44pm', '2023-10-10 12:38:44pm', 680445, 1, 340059, '5b1ddfdc75496d5d0175abd21b6a6d9c90ad1f30'),
(16, '20', 417764857, 'GRE 0000000027', '2023-10-18 12:39:14pm', '2023-10-18 12:39:14pm', '2023-10-18 12:39:14pm', 680445, 1, 340059, 'b8cb8e2f27d989304d4c2822d2c90865a848027e'),
(17, '30', 417764857, 'GRE 0000000027', '2023-10-19 12:39:33pm', '2023-10-19 12:39:33pm', '2023-10-19 12:39:33pm', 680445, 1, 340059, '3bd08c23b2eeb10f3d6b3100488b1cb79d5f00f3'),
(18, '50', 417764857, 'GRE 0000000027', '2023-10-25 12:39:48pm', '2023-10-25 12:39:48pm', '2023-10-25 12:39:48pm', 680445, 1, 340059, 'e055d865552b26a75028dfc846d0157fc0e87432'),
(19, '50', 417764857, 'GRE 0000000027', '2023-11-14 12:40:05pm', '2023-11-14 12:40:05pm', '2023-11-14 12:40:05pm', 680445, 1, 340059, 'f64d631e54959b10e2d5f2590e0f996281c59f49'),
(20, '50', 417764857, 'GRE 0000000027', '2023-12-04 12:40:26pm', '2023-12-04 12:40:26pm', '2023-12-04 12:40:26pm', 680445, 1, 340059, 'ad2ba18ab55d07d4c2daec04cf19fb799a31ddec'),
(21, '100', 417764857, 'GRE 0000000027', '2024-01-08 12:40:53pm', '2024-01-08 12:40:53pm', '2024-01-08 12:40:53pm', 680445, 1, 340059, 'ec75edd18abec98e8ce78b40071ab8cf25cfdd01'),
(22, '100', 417764857, 'GRE 0000000027', '2024-05-20 12:41:12pm', '2024-05-20 12:41:12pm', '2024-05-20 12:41:12pm', 680445, 1, 340059, 'f3070543b97f059f54e7a914f0982c9cb3b79b20'),
(23, '200', 502344178, 'GRE 0000000028', '2022-06-22 12:57:16pm', '2022-06-22 12:57:16pm', '2022-06-22 12:57:16pm', 680445, 1, 340059, '0de61a98defcfc1a5b25721cf1cf7197f56400c1'),
(24, '600', 502344178, 'GRE 0000000028', '2022-09-13 01:00:49pm', '2022-09-13 01:00:49pm', '2022-09-13 01:00:49pm', 680445, 1, 340059, 'f83927a44b989ee9087240694fc891802aa013e8'),
(25, '70', 118760168, 'GRE 0000000029', '2022-10-07 01:12:09pm', '2022-10-07 01:12:09pm', '2022-10-07 01:12:09pm', 680445, 1, 340059, '9e52caf497f9485c6a2d91a3f7e8bad429f87830'),
(26, '50', 118760168, 'GRE 0000000029', '2022-10-10 01:12:29pm', '2022-10-10 01:12:29pm', '2022-10-10 01:12:29pm', 680445, 1, 340059, 'fb869620cb8f2385915588a5cb2e1c7dbe5d93da'),
(27, '50', 118760168, 'GRE 0000000029', '2022-10-11 01:12:48pm', '2022-10-11 01:12:48pm', '2022-10-11 01:12:48pm', 680445, 1, 340059, '4990bfdd259a7de34ce053337404a0c33001df65'),
(28, '50', 118760168, 'GRE 0000000029', '2022-10-12 01:13:01pm', '2022-10-12 01:13:01pm', '2022-10-12 01:13:01pm', 680445, 1, 340059, '3ae0050c847811fc6ef964b3f673fecad578f719'),
(29, '50', 118760168, 'GRE 0000000029', '2022-10-13 01:13:13pm', '2022-10-13 01:13:13pm', '2022-10-13 01:13:13pm', 680445, 1, 340059, '1109fd86b99c6d8e8f3fa24a9ddb3ec6cb4f4413'),
(30, '50', 118760168, 'GRE 0000000029', '2022-10-14 01:13:23pm', '2022-10-14 01:13:23pm', '2022-10-14 01:13:23pm', 680445, 1, 340059, '7992a194619d3a6c2a73c7124641ab625f271f01'),
(31, '50', 118760168, 'GRE 0000000029', '2022-10-15 01:13:35pm', '2022-10-15 01:13:35pm', '2022-10-15 01:13:35pm', 680445, 1, 340059, '0a8819f2bf8d2b3b78b7f1cb83a974e3c5e32136'),
(32, '50', 118760168, 'GRE 0000000029', '2022-10-17 01:13:49pm', '2022-10-17 01:13:49pm', '2022-10-17 01:13:49pm', 680445, 1, 340059, 'ccd76bb01bb818a98f9d601ebb728293fbaa3892'),
(33, '50', 118760168, 'GRE 0000000029', '2022-10-19 01:13:59pm', '2022-10-19 01:13:59pm', '2022-10-19 01:13:59pm', 680445, 1, 340059, '23aa163037d0532017aef7c62c929b2b13ebce26'),
(34, '50', 118760168, 'GRE 0000000029', '2022-10-20 01:14:12pm', '2022-10-20 01:14:12pm', '2022-10-20 01:14:12pm', 680445, 1, 340059, '504004c66baf49ef17c898eebfb344350dc8aab1'),
(35, '50', 118760168, 'GRE 0000000029', '2022-10-24 01:14:25pm', '2022-10-24 01:14:25pm', '2022-10-24 01:14:25pm', 680445, 1, 340059, 'ec7b0b19f4cbaacdec4628d79325fd9624a27a80'),
(36, '50', 118760168, 'GRE 0000000029', '2022-10-26 01:14:38pm', '2022-10-26 01:14:38pm', '2022-10-26 01:14:38pm', 680445, 1, 340059, '8451a41a7c782d41f1551116af3bbc312bf0ef94'),
(37, '100', 118760168, 'GRE 0000000029', '2022-10-27 01:15:10pm', '2022-10-27 01:15:10pm', '2022-10-27 01:15:10pm', 680445, 1, 340059, 'dd5b51cfc934c1834af53d2dfc897622220cbc65'),
(38, '50', 118760168, 'GRE 0000000029', '2022-10-28 01:15:27pm', '2022-10-28 01:15:27pm', '2022-10-28 01:15:27pm', 680445, 1, 340059, 'f4766deb122d4b3f7a94c730f1cfc561b233c502'),
(39, '50', 118760168, 'GRE 0000000029', '2022-10-29 01:16:21pm', '2022-10-29 01:16:21pm', '2022-10-29 01:16:21pm', 680445, 1, 340059, '42886592ce1cc6e0d3364f51c571ecdea46c394e'),
(40, '150', 118760168, 'GRE 0000000029', '2022-11-05 01:17:16pm', '2022-11-05 01:17:16pm', '2022-11-05 01:17:16pm', 680445, 1, 340059, '3ee5a5c6adb61fe1d24e802471c07835298866bc'),
(41, '100', 118760168, 'GRE 0000000029', '2022-11-09 01:17:37pm', '2022-11-09 01:17:37pm', '2022-11-09 01:17:37pm', 680445, 1, 340059, 'd3cfa73ed7f822148e350f54007346c3b7de8798'),
(42, '100', 118760168, 'GRE 0000000029', '2022-11-17 01:18:39pm', '2022-11-17 01:18:39pm', '2022-11-17 01:18:39pm', 680445, 1, 340059, '5d10a58c3b7d1927c69da5950e51d5193153cf6f'),
(43, '100', 118760168, 'GRE 0000000029', '2022-11-21 01:18:51pm', '2022-11-21 01:18:51pm', '2022-11-21 01:18:51pm', 680445, 1, 340059, 'c42a2854d23002bee54482dd41a199e37a893659'),
(44, '100', 118760168, 'GRE 0000000029', '2022-11-23 01:19:03pm', '2022-11-23 01:19:03pm', '2022-11-23 01:19:03pm', 680445, 1, 340059, 'de499544c98fc06dd0b06d43e321a45d73a90512'),
(45, '100', 118760168, 'GRE 0000000029', '2022-11-28 01:19:30pm', '2022-11-28 01:19:30pm', '2022-11-28 01:19:30pm', 680445, 1, 340059, 'a30907f98a6c5dfb93723914af718fd630ab2e1b'),
(46, '100', 118760168, 'GRE 0000000029', '2022-11-30 01:19:48pm', '2022-11-30 01:19:48pm', '2022-11-30 01:19:48pm', 680445, 1, 340059, '8262fd8b76e890240aa4d1bddb7bf5a312b21930'),
(47, '50', 118760168, 'GRE 0000000029', '2022-12-01 01:20:13pm', '2022-12-01 01:20:13pm', '2022-12-01 01:20:13pm', 680445, 1, 340059, '5d8572c8e703e182bc0fe866a87793a38fd69e56'),
(48, '100', 118760168, 'GRE 0000000029', '2022-12-19 01:20:30pm', '2022-12-19 01:20:30pm', '2022-12-19 01:20:30pm', 680445, 1, 340059, '661975d61841842d737c89d349b2fedd0140a77c'),
(49, '100', 118760168, 'GRE 0000000029', '2022-12-21 01:20:57pm', '2022-12-21 01:20:57pm', '2022-12-21 01:20:57pm', 680445, 1, 340059, 'b68d4aa89e10e3c9e8fcfe653f71eb7efb161078'),
(50, '50', 118760168, 'GRE 0000000029', '2022-12-22 01:22:18pm', '2022-12-22 01:22:18pm', '2022-12-22 01:22:18pm', 680445, 1, 340059, 'b5f9b69b521eca82b76f8913aa5ab1ff07a3115b'),
(51, '100', 118760168, 'GRE 0000000029', '2023-04-14 01:23:19pm', '2023-04-14 01:23:19pm', '2023-04-14 01:23:19pm', 680445, 1, 340059, 'c74fa5aa3262810781d8746de709b82a6edab5c7'),
(52, '100', 118760168, 'GRE 0000000029', '2023-04-20 01:23:34pm', '2023-04-20 01:23:34pm', '2023-04-20 01:23:34pm', 680445, 1, 340059, '780a173c051f969c572309c19f3c8b470f0acda5'),
(53, '50', 118760168, 'GRE 0000000029', '2023-04-21 01:23:46pm', '2023-04-21 01:23:46pm', '2023-04-21 01:23:46pm', 680445, 1, 340059, '5f68b8aca01a229c90f2ee16196f1c6e7849ea2f'),
(54, '50', 118760168, 'GRE 0000000029', '2023-03-31 01:24:36pm', '2023-03-31 01:24:36pm', '2023-03-31 01:24:36pm', 680445, 1, 340059, '691bf4340157db772161d128029017e97ffb5261'),
(55, '50', 118760168, 'GRE 0000000029', '2023-04-03 01:24:55pm', '2023-04-03 01:24:55pm', '2023-04-03 01:24:55pm', 680445, 1, 340059, 'b406c49fda4fe68596b83e4da12006e45f11e31e'),
(56, '50', 118760168, 'GRE 0000000029', '2023-04-04 01:25:09pm', '2023-04-04 01:25:09pm', '2023-04-04 01:25:09pm', 680445, 1, 340059, '1ca3f780c7ff033c0efe16c19a257c6bf51e3df2'),
(57, '50', 118760168, 'GRE 0000000029', '2023-04-05 01:25:24pm', '2023-04-05 01:25:24pm', '2023-04-05 01:25:24pm', 680445, 1, 340059, '9db655be60ba5cf6ece99a382f96b92b014cbdb3'),
(58, '50', 118760168, 'GRE 0000000029', '2023-04-11 01:25:35pm', '2023-04-11 01:25:35pm', '2023-04-11 01:25:35pm', 680445, 1, 340059, '7e7ca934e4536c8341c8211128d992239479e5bd'),
(59, '50', 118760168, 'GRE 0000000029', '2023-04-16 01:26:03pm', '2023-04-16 01:26:03pm', '2023-04-16 01:26:03pm', 680445, 1, 340059, 'e54279189d8221f877cfb758176f72eda5b3bd49'),
(60, '50', 118760168, 'GRE 0000000029', '2023-04-17 01:26:16pm', '2023-04-17 01:26:16pm', '2023-04-17 01:26:16pm', 680445, 1, 340059, '677a881dff53da6af60dd19a59884263a8be8ee1'),
(61, '50', 118760168, 'GRE 0000000029', '2023-04-18 01:26:30pm', '2023-04-18 01:26:30pm', '2023-04-18 01:26:30pm', 680445, 1, 340059, 'a15af0148b6fbfe0a82f52ad9136d165d53c005b'),
(62, '150', 118760168, 'GRE 0000000029', '2023-05-02 01:27:15pm', '2023-05-02 01:27:15pm', '2023-05-02 01:27:15pm', 680445, 1, 340059, '68aab10dd8b6cf8384d8839667413be16105c591'),
(63, '50', 118760168, 'GRE 0000000029', '2023-05-10 01:27:35pm', '2023-05-10 01:27:35pm', '2023-05-10 01:27:35pm', 680445, 1, 340059, '6865f2b71655f422eff169dc75a9fbf5b5311280'),
(64, '50', 118760168, 'GRE 0000000029', '2023-05-31 01:27:51pm', '2023-05-31 01:27:51pm', '2023-05-31 01:27:51pm', 680445, 1, 340059, '6308353ec2d7215e26dc865d3a6a8db076e1c0e4'),
(65, '70', 829181896, 'GRE 0000000030', '2024-06-01 05:43:11pm', '2024-06-01 05:43:11pm', '2024-06-01 05:43:11pm', 680445, 1, 340059, '388f9195322b43a9d620627822e3969254dfb0dd'),
(66, '50', 829181896, 'GRE 0000000030', '2024-06-02 05:43:28pm', '2024-06-02 05:43:28pm', '2024-06-02 05:43:28pm', 680445, 1, 340059, '9e800fff0ff48d62082030bbc200171ac5d42f74'),
(67, '50', 829181896, 'GRE 0000000030', '2024-06-02 05:43:41pm', '2024-06-02 05:43:41pm', '2024-06-02 05:43:41pm', 680445, 1, 340059, '319cc2b0faf7c176057be69586c8052fb5bbf441'),
(68, '50', 829181896, 'GRE 0000000030', '2024-06-04 05:44:10pm', '2024-06-04 05:44:10pm', '2024-06-04 05:44:10pm', 680445, 1, 340059, '79906fa6447c90a81dd3e450cf43e7d2da17042a'),
(69, '50', 829181896, 'GRE 0000000030', '2024-06-05 05:44:25pm', '2024-06-05 05:44:25pm', '2024-06-05 05:44:25pm', 680445, 1, 340059, 'a7bb3d2c5616a9f1fa50a4916b9258a9da6b9c7a'),
(70, '50', 829181896, 'GRE 0000000030', '2024-06-06 05:44:38pm', '2024-06-06 05:44:38pm', '2024-06-06 05:44:38pm', 680445, 1, 340059, '73ec8fe8ee5cc55ab96a411a97228fade53860bc'),
(71, '50', 829181896, 'GRE 0000000030', '2024-06-07 05:44:53pm', '2024-06-07 05:44:53pm', '2024-06-07 05:44:53pm', 680445, 1, 340059, 'ab97624b2c886e40cf36da45a6bf370a3a6022fa'),
(72, '50', 829181896, 'GRE 0000000030', '2024-06-08 05:45:06pm', '2024-06-08 05:45:06pm', '2024-06-08 05:45:06pm', 680445, 1, 340059, 'aba557775b97ad0cf04ad0cdc0f20a892941267a'),
(73, '50', 829181896, 'GRE 0000000030', '2024-06-09 05:45:18pm', '2024-06-09 05:45:18pm', '2024-06-09 05:45:18pm', 680445, 1, 340059, '7a7bb270198b5566dcd28b4172ac3a4d8e526fb6'),
(74, '50', 829181896, 'GRE 0000000030', '2024-06-10 05:45:34pm', '2024-06-10 05:45:34pm', '2024-06-10 05:45:34pm', 680445, 1, 340059, '9b25d63c217873b37200d5489eba08978f96a726'),
(75, '50', 829181896, 'GRE 0000000030', '2024-06-11 05:45:46pm', '2024-06-11 05:45:46pm', '2024-06-11 05:45:46pm', 680445, 1, 340059, '6369563e0f3586a4e8e767d6dc26d85c0ed7f56b'),
(76, '50', 829181896, 'GRE 0000000030', '2024-06-12 05:45:59pm', '2024-06-12 05:45:59pm', '2024-06-12 05:45:59pm', 680445, 1, 340059, '7c4d56ded8a89d32fd8fcdf9249ca29a4d4c8568'),
(77, '50', 829181896, 'GRE 0000000030', '2024-06-13 05:46:12pm', '2024-06-13 05:46:12pm', '2024-06-13 05:46:12pm', 680445, 1, 340059, '8c48f48bd34423014a9fa8f83036c4c6bfc06b8e'),
(78, '50', 829181896, 'GRE 0000000030', '2024-06-14 05:46:27pm', '2024-06-14 05:46:27pm', '2024-06-14 05:46:27pm', 680445, 1, 340059, '6913c7ab33190a523f40079141a76ce7bb85c77e'),
(79, '50', 829181896, 'GRE 0000000030', '2024-06-15 05:46:42pm', '2024-06-15 05:46:42pm', '2024-06-15 05:46:42pm', 680445, 1, 340059, 'a695ffd76b5a11a8d238a26b4b90d553dd1850f7'),
(80, '100', 829181896, 'GRE 0000000030', '2024-08-01 05:48:38pm', '2024-08-01 05:48:38pm', '2024-08-01 05:48:38pm', 680445, 1, 340059, 'f0bc0ca55ea2d0caaaeb6221130c177a97f2b63e'),
(81, '100', 829181896, 'GRE 0000000030', '2024-08-02 05:48:52pm', '2024-08-02 05:48:52pm', '2024-08-02 05:48:52pm', 680445, 1, 340059, 'ffade1d53ae3e91f69ca0c252773c5eca5771c7c'),
(82, '100', 829181896, 'GRE 0000000030', '2024-08-03 05:49:02pm', '2024-08-03 05:49:02pm', '2024-08-03 05:49:02pm', 680445, 1, 340059, 'cce1496ebbe2bd8984c3e547db3d675103353a19'),
(83, '100', 829181896, 'GRE 0000000030', '2024-08-04 05:49:15pm', '2024-08-04 05:49:15pm', '2024-08-04 05:49:15pm', 680445, 1, 340059, '22354e244e33d78f28e9c67da98dbb05f02c44e4'),
(84, '420', 576165856, 'GRE 0000000031', '2023-06-23 03:06:46pm', '2023-06-23 03:06:46pm', '2023-06-23 03:06:46pm', 680445, 1, 340059, 'ac1d607239e688ae45db0846f313c5715c00c60d'),
(85, '200', 576165856, 'GRE 0000000031', '2023-10-12 03:08:38pm', '2023-10-12 03:08:38pm', '2023-10-12 03:08:38pm', 680445, 1, 340059, '6a514a9ca9d44bad315bd4ac8fc2899c9d6bbd00'),
(86, '1110', 576165856, 'GRE 0000000031', '2023-10-24 03:09:00pm', '2023-10-24 03:09:00pm', '2023-10-24 03:09:00pm', 680445, 1, 340059, '250880799ce628cad6f6ca2e2675a026b5049f6e'),
(87, '500', 576165856, 'GRE 0000000031', '2023-10-25 03:09:48pm', '2023-10-25 03:09:48pm', '2023-10-25 03:09:48pm', 680445, 1, 340059, '24031ebaf745acafb2ed63200d3137c361ba19a1'),
(88, '500', 576165856, 'GRE 0000000031', '2023-11-09 03:10:10pm', '2023-11-09 03:10:10pm', '2023-11-09 03:10:10pm', 680445, 1, 340059, '5ffb6196caf3f530cbf2ba8b5a84236a4244e7a5'),
(89, '300', 576165856, 'GRE 0000000031', '2023-11-20 03:10:56pm', '2023-11-20 03:10:56pm', '2023-11-20 03:10:56pm', 680445, 1, 340059, '815a552801f03268d5cf0fae6aaa8e0a9317be6f'),
(90, '700', 576165856, 'GRE 0000000031', '2024-05-10 03:13:38pm', '2024-05-10 03:13:38pm', '2024-05-10 03:13:38pm', 680445, 1, 340059, '5fe75256402ad9a4f2b2eacfd5761a7cc5538e61'),
(91, '1200', 576165856, 'GRE 0000000031', '2024-07-09 03:14:55pm', '2024-07-09 03:14:55pm', '2024-07-09 03:14:55pm', 680445, 1, 340059, '812277e1e88fb0abae8616dfbd99e86f86de2c96'),
(92, '70', 326252747, 'GRE 0000000032', '2022-06-07 03:56:05pm', '2022-06-07 03:56:05pm', '2022-06-07 03:56:05pm', 680445, 1, 340059, 'c608a75ef5a6073372eadf97c84dceaa6286f15b'),
(93, '100', 326252747, 'GRE 0000000032', '2022-06-10 03:56:19pm', '2022-06-10 03:56:19pm', '2022-06-10 03:56:19pm', 680445, 1, 340059, '4801d03b2359821f668c3a7c7e70ac31ed95ac8c'),
(94, '200', 326252747, 'GRE 0000000032', '2022-06-13 03:56:36pm', '2022-06-13 03:56:36pm', '2022-06-13 03:56:36pm', 680445, 1, 340059, '05169a3e07e8c1e0c45a0d53621a1c6f8a35dbc4'),
(95, '210', 326252747, 'GRE 0000000032', '2022-07-07 03:56:53pm', '2022-07-07 03:56:53pm', '2022-07-07 03:56:53pm', 680445, 1, 340059, '53f7982c59764b1dc36652abb3d85d7ec37bf3a9'),
(96, '250', 326252747, 'GRE 0000000032', '2022-08-08 03:59:07pm', '2022-08-08 03:59:07pm', '2022-08-08 03:59:07pm', 680445, 1, 340059, '828fdffce9d6a9b22917b53d03925836fbb438a5'),
(97, '300', 326252747, 'GRE 0000000032', '2022-09-05 03:59:56pm', '2022-09-05 03:59:56pm', '2022-09-05 03:59:56pm', 680445, 1, 340059, 'dce65d5289c8bc2f4376761684528f929a0e2469'),
(98, '90', 326252747, 'GRE 0000000032', '2022-09-08 04:00:16pm', '2022-09-08 04:00:16pm', '2022-09-08 04:00:16pm', 680445, 1, 340059, 'cda4d1da6bffd3859722b242a3c645edcf2c5d60'),
(99, '400', 326252747, 'GRE 0000000032', '2022-09-26 04:01:01pm', '2022-09-26 04:01:01pm', '2022-09-26 04:01:01pm', 680445, 1, 340059, '2fe49497923b7187d6b055f64397d3b98aa2c5d0'),
(100, '100', 326252747, 'GRE 0000000032', '2022-10-03 04:01:17pm', '2022-10-03 04:01:17pm', '2022-10-03 04:01:17pm', 680445, 1, 340059, 'a4882e770c97dde2176d63b1029b6dc029553d6f'),
(101, '80', 326252747, 'GRE 0000000032', '2022-10-10 04:01:29pm', '2022-10-10 04:01:29pm', '2022-10-10 04:01:29pm', 680445, 1, 340059, 'e0190e7b6f944f2b7fbe0aeb9aba3192d697e15f'),
(102, '195', 326252747, 'GRE 0000000032', '2022-10-17 04:02:06pm', '2022-10-17 04:02:06pm', '2022-10-17 04:02:06pm', 680445, 1, 340059, '820a4b239a1b23b0903b6840d9a3a831edc5c7e8'),
(103, '165', 326252747, 'GRE 0000000032', '2022-10-18 04:02:27pm', '2022-10-18 04:02:27pm', '2022-10-18 04:02:27pm', 680445, 1, 340059, '35b2ea6594e242754d5c39ecd4216a4152673607'),
(104, '90', 326252747, 'GRE 0000000032', '2022-10-21 04:03:06pm', '2022-10-21 04:03:06pm', '2022-10-21 04:03:06pm', 680445, 1, 340059, '256c9ef939c6150cc57b730f6f7218502d70f44d'),
(105, '100', 326252747, 'GRE 0000000032', '2022-10-24 04:03:45pm', '2022-10-24 04:03:45pm', '2022-10-24 04:03:45pm', 680445, 1, 340059, '09d832e5dc7ce92fc1392b3cf8905aaacd5a59fe'),
(106, '480', 326252747, 'GRE 0000000032', '2022-10-31 04:07:00pm', '2022-10-31 04:07:00pm', '2022-10-31 04:07:00pm', 680445, 1, 340059, '219742f2a1934e462b89dbc6c770e778f93e7178'),
(107, '300', 326252747, 'GRE 0000000032', '2022-11-01 04:07:22pm', '2022-11-01 04:07:22pm', '2022-11-01 04:07:22pm', 680445, 1, 340059, '2300d851c064ee707b94e3ec8bbbbf9cb5743ea2'),
(108, '120', 326252747, 'GRE 0000000032', '2022-11-14 04:07:56pm', '2022-11-14 04:07:56pm', '2022-11-14 04:07:56pm', 680445, 1, 340059, '8f387f14b5c2c622244a1cb6403533afbcc41733'),
(109, '500', 326252747, 'GRE 0000000032', '2023-01-10 04:09:39pm', '2023-01-10 04:09:39pm', '2023-01-10 04:09:39pm', 680445, 1, 340059, 'de28c2e5e6971cc7b68d6020f533f1c7f77b23d0'),
(110, '700', 326252747, 'GRE 0000000032', '2023-03-04 04:10:54pm', '2023-03-04 04:10:54pm', '2023-03-04 04:10:54pm', 680445, 1, 340059, '434b5eac74202d1ef122c8892a214ddaa7b05801'),
(111, '380', 326252747, 'GRE 0000000032', '2023-04-13 04:11:43pm', '2023-04-13 04:11:43pm', '2023-04-13 04:11:43pm', 680445, 1, 340059, 'facbd027be0d755addf4e0e62e4d563fb00c111e'),
(112, '90', 326252747, 'GRE 0000000032', '2023-05-22 04:12:32pm', '2023-05-22 04:12:32pm', '2023-05-22 04:12:32pm', 680445, 1, 340059, '252e1cca033aed48a2dd50e9a8efb219227af788'),
(113, '100', 326252747, 'GRE 0000000032', '2023-08-03 04:13:41pm', '2023-08-03 04:13:41pm', '2023-08-03 04:13:41pm', 680445, 1, 340059, 'dc62323427414796df0c3e85567ce03aa1671fa8'),
(114, '500', 326252747, 'GRE 0000000032', '2023-08-07 04:14:28pm', '2023-08-07 04:14:28pm', '2023-08-07 04:14:28pm', 680445, 1, 340059, '4d24a5802721bb2ce80dfaa2d5f116734e0d7d2a'),
(115, '120', 326252747, 'GRE 0000000032', '2023-11-20 04:16:17pm', '2023-11-20 04:16:17pm', '2023-11-20 04:16:17pm', 680445, 1, 340059, 'c83b1bb2fba0b13d47c9ff18174f026a6f1c8b16'),
(116, '100', 326252747, 'GRE 0000000032', '2023-11-21 04:17:04pm', '2023-11-21 04:17:04pm', '2023-11-21 04:17:04pm', 680445, 1, 340059, '2850925da94b09aeb89516a130f4e596356b00dc'),
(117, '70', 326252747, 'GRE 0000000032', '2023-11-27 04:17:16pm', '2023-11-27 04:17:16pm', '2023-11-27 04:17:16pm', 680445, 1, 340059, '06cff5e9e336ee668e46cd944432adbc24bb88b3'),
(118, '100', 326252747, 'GRE 0000000032', '2023-11-28 04:17:32pm', '2023-11-28 04:17:32pm', '2023-11-28 04:17:32pm', 680445, 1, 340059, '1bc4a2cf6646ec210d9daa2cb8265a9acd87f292'),
(119, '100', 326252747, 'GRE 0000000032', '2023-11-30 04:17:44pm', '2023-11-30 04:17:44pm', '2023-11-30 04:17:44pm', 680445, 1, 340059, 'b307077c4ed9413e9dba57a9c55abb7f96bf159b'),
(120, '40', 326252747, 'GRE 0000000032', '2023-12-22 04:18:06pm', '2023-12-22 04:18:06pm', '2023-12-22 04:18:06pm', 680445, 1, 340059, '5adf644086e14696e773d20aebf084030c7a1d4e'),
(121, '1290', 326252747, 'GRE 0000000032', '2024-02-05 04:19:00pm', '2024-02-05 04:19:00pm', '2024-02-05 04:19:00pm', 680445, 1, 340059, '15713bb02b855d85fb1ab57c0f49cdc3bb6f4794'),
(122, '150', 326252747, 'GRE 0000000032', '2024-02-23 04:19:40pm', '2024-02-23 04:19:40pm', '2024-02-23 04:19:40pm', 680445, 1, 340059, 'cf8ba6ea60af87ad6133b75b88ce6515a34b9bb4'),
(123, '200', 326252747, 'GRE 0000000032', '2024-05-20 04:20:23pm', '2024-05-20 04:20:23pm', '2024-05-20 04:20:23pm', 680445, 1, 340059, '0c4911f6bbdd22e68b7677461ca4d4761442405e'),
(124, '200', 326252747, 'GRE 0000000032', '2024-07-25 04:21:27pm', '2024-07-25 04:21:27pm', '2024-07-25 04:21:27pm', 680445, 1, 340059, '34b8777fe22cfbe48eca82eada92e4f1f18837fb'),
(125, '100', 829181896, 'GRE 0000000030', '2024-08-05 12:28:13pm', '2024-08-05 12:28:13pm', '2024-08-05 12:28:13pm', 680445, 1, 340059, 'ceabb2cc6e0707e17902c90989d66bc2186f3de0'),
(126, '100', 829181896, 'GRE 0000000030', '2024-08-06 12:28:28pm', '2024-08-06 12:28:28pm', '2024-08-06 12:28:28pm', 680445, 1, 340059, '30e221fd7a6f68b20473cb0f5db12d364dfaab16'),
(127, '100', 829181896, 'GRE 0000000030', '2024-08-07 11:46:02am', '2024-08-07 11:46:02am', '2024-08-07 11:46:02am', 680445, 1, 340059, '7d7d8740f811acc63f09ee4d0ab302c4c8158adb'),
(128, '100', 829181896, 'GRE 0000000030', '2024-08-08 11:46:15am', '2024-08-08 11:46:15am', '2024-08-08 11:46:15am', 680445, 1, 340059, 'dd6ed595222a24fa7110ec81898c0cbd9288f919'),
(129, '1600', 576165856, 'GRE 0000000031', '2024-08-12 01:21:53pm', '2024-08-12 01:21:53pm', '2024-08-12 01:21:53pm', 680445, 1, 340059, 'b0a1e40d224aee15796d1c4d93e3079204af9dce'),
(130, '100', 829181896, 'GRE 0000000030', '2024-08-12 10:38:18am', '2024-08-12 10:38:18am', '2024-08-12 10:38:18am', 680445, 1, 340059, '92ecf5a6b04a9bb5f210265cf4f6a25c20de9e06'),
(131, '100', 829181896, 'GRE 0000000030', '2024-08-13 10:33:33am', '2024-08-13 10:33:33am', '2024-08-13 10:33:33am', 680445, 1, 340059, '9e2e4c37a5bf8cf8f7a012b1170181bc878d6d82'),
(132, '100', 829181896, 'GRE 0000000030', '2024-08-15 10:44:59am', '2024-08-15 10:44:59am', '2024-08-15 10:44:59am', 680445, 1, 340059, 'f0866a7dd3478ca7d49dd10dee117ff8ccd84ac0'),
(133, '100', 165980726, 'GRE 0000000024', '2024-08-14 01:17:09pm', '2024-08-14 01:17:09pm', '2024-08-14 01:17:09pm', 680445, 1, 340059, '6dd44c8e5977e09792e46e9edecc54479c47bd77'),
(134, '100', 829181896, 'GRE 0000000030', '2024-08-15 05:56:01pm', '2024-08-15 05:56:01pm', '2024-08-15 05:56:01pm', 680445, 1, 340059, 'a78ba986a481eb8197ac7c6d20753d39f4313799'),
(135, '100', 829181896, 'GRE 0000000030', '2024-08-16 05:56:14pm', '2024-08-16 05:56:14pm', '2024-08-16 05:56:14pm', 680445, 1, 340059, '7adc5dfbb90feb290ed9a50de3dc7ec09e745c80'),
(136, '100', 829181896, 'GRE 0000000030', '2024-08-17 03:48:52pm', '2024-08-17 03:48:52pm', '2024-08-17 03:48:52pm', 680445, 1, 340059, '32342ba5ced48c69fe098f86365ef4ef1b1ecdd5'),
(137, '100', 829181896, 'GRE 0000000030', '2024-08-18 03:49:05pm', '2024-08-18 03:49:05pm', '2024-08-18 03:49:05pm', 680445, 1, 340059, 'bf1257b944ba1ea7657e85bc57951756f3d39fd2'),
(138, '80', 326252747, 'GRE 0000000032', '2024-08-27 12:40:46pm', '2024-08-27 12:40:46pm', '2024-08-27 12:40:46pm', 680445, 1, 340059, 'd530f4aad930af3c20f403ae633fcf7b9ade4557'),
(139, '200', 165980726, 'GRE 0000000024', '2024-09-02 11:01:08am', '2024-09-02 11:01:08am', '2024-09-02 11:01:08am', 680445, 1, 340059, 'f59b033b3bf0d45af7fb28912f732a3e3fc9f202'),
(140, '1400', 326252747, 'GRE 0000000032', '2024-09-16 12:13:57pm', '2024-09-16 12:13:57pm', '2024-09-16 12:13:57pm', 680445, 1, 340059, '16fe715ce74a6b34f95318def00f97d5309aa8bc'),
(141, '100', 165980726, 'GRE 0000000024', '2024-09-17 05:24:18pm', '2024-09-17 05:24:18pm', '2024-09-17 05:24:18pm', 680445, 1, 340059, 'f093fcb28d95f19641e9f734384d8f97680d5197'),
(142, '100', 165980726, 'GRE 0000000024', '2024-09-24 09:35:59am', '2024-09-24 09:35:59am', '2024-09-24 09:35:59am', 680445, 1, 340059, '8b70beb26cbb3ff7e1421c097703801379f6d61d'),
(143, '100', 165980726, 'GRE 0000000024', '2024-10-11 10:53:39am', '2024-10-11 10:53:39am', '2024-10-11 10:53:39am', 680445, 1, 340059, 'd8247ce248d02fe2b3462a5ea5fa789a5e48c40f');

-- --------------------------------------------------------

--
-- Table structure for table `dept_tb`
--

CREATE TABLE `dept_tb` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `code` bigint(20) NOT NULL,
  `description` longtext DEFAULT NULL,
  `posted_by` int(11) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `date_modified` varchar(100) NOT NULL,
  `companyid` bigint(20) DEFAULT NULL,
  `hcode` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dept_tb`
--

INSERT INTO `dept_tb` (`id`, `name`, `code`, `description`, `posted_by`, `date_created`, `date_modified`, `companyid`, `hcode`) VALUES
(1, 'Procurement', 1000, 'Procurement Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, 'c134a667-4847-11ef-abf9-dcfb48c50287'),
(2, 'Human Resources', 1001, 'Human Resources Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, 'e5acc47a-4845-11ef-abf9-dcfb48c50287'),
(3, 'Finance and Accounting', 1002, 'Finance and Accounting Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, '60a19347-4846-11ef-abf9-dcfb48c50287'),
(4, 'Marketing', 1003, 'Marketing Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, '04bed835-4847-11ef-abf9-dcfb48c50287'),
(5, 'Sales', 1004, 'Sales Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, 'dcef866b-4847-11ef-abf9-dcfb48c50287'),
(6, 'Operations', 1005, 'Operations Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, 'e4dc8632-4847-11ef-abf9-dcfb48c50287'),
(7, 'Information Technology (IT)', 1006, 'Information Technology Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, 'ec2e5e2c-4847-11ef-abf9-dcfb48c50287'),
(8, 'Customer Service', 1007, 'Customer Service Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, 'f4ec0587-4847-11ef-abf9-dcfb48c50287'),
(9, 'Research and Development (R&D)', 1008, 'Research and Development Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, 'fc2a4ab1-4847-11ef-abf9-dcfb48c50287'),
(10, 'Legal Affairs', 1009, 'Legal Affairs Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, '05373651-4848-11ef-abf9-dcfb48c50287'),
(11, 'Quality Assurance', 1010, 'Quality Assurance Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, '0d27522c-4848-11ef-abf9-dcfb48c50287'),
(12, 'Estates', 1011, 'Estates Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, '1601a626-4848-11ef-abf9-dcfb48c50287'),
(13, 'Administration', 1012, 'Administration Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, '47401f33-4848-11ef-abf9-dcfb48c50287'),
(14, 'Public Relations (PR)', 1013, 'Public Relations Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, '5a66c4c8-4848-11ef-abf9-dcfb48c50287'),
(15, 'Business Development', 1014, 'Business Development Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, '9167b452-4848-11ef-abf9-dcfb48c50287'),
(16, 'Health and Safety', 1015, 'Health and Safety Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, 'a241bec4-4848-11ef-abf9-dcfb48c50287'),
(17, 'Security', 1016, 'Security Department', 1, '2024-07-20 17:10', '2024-07-20 17:10', 1, '7cd6233e-4848-11ef-abf9-dcfb48c50287');

-- --------------------------------------------------------

--
-- Table structure for table `fees_tb`
--

CREATE TABLE `fees_tb` (
  `ID` int(11) NOT NULL,
  `ENTRY_MIN_FEE` varchar(200) NOT NULL,
  `ENTRY_MAX_FEE` varchar(200) DEFAULT NULL,
  `WITHDRAWAL_FEE` varchar(200) DEFAULT NULL,
  `REOPEN_MIN_FEE` varchar(200) DEFAULT NULL,
  `REOPEN_MAX_FEE` varchar(200) DEFAULT NULL,
  `CLOSING_MIN_FEE` varchar(200) DEFAULT NULL,
  `CLOSING_MAX_FEE` varchar(200) DEFAULT NULL,
  `MANAGEMENT_MIN_FEE` varchar(200) DEFAULT NULL,
  `MANAGEMENT_MAX_FEE` varchar(200) DEFAULT NULL,
  `PRODUCT_ID` int(11) DEFAULT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_tb`
--

CREATE TABLE `fee_tb` (
  `ID` int(11) NOT NULL,
  `ENTRY_FEE` varchar(200) DEFAULT NULL,
  `WITHDRAWAL_FEE` varchar(255) DEFAULT NULL,
  `PRODUCT_ID` int(11) DEFAULT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DATE_MODIFIED` varchar(50) DEFAULT NULL,
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fee_tb`
--

INSERT INTO `fee_tb` (`ID`, `ENTRY_FEE`, `WITHDRAWAL_FEE`, `PRODUCT_ID`, `DATE_CREATED`, `DATE_MODIFIED`, `CCODE`, `HCODE`) VALUES
(1, '20', '0', 247344, '2024-04-26 14:24:59', '2024-04-26 14:24:59', 340059, 'b1b5c949e65f4f279abeb15b9d7baeabca7f45fd'),
(2, '50', '30', 241632, '2024-06-03 19:43:21', '2024-06-03 19:43:21', 518163, 'b0f8e05365b638dc28a331a15fa6669a66748c9c'),
(3, '5', '0', 913427, '2024-07-11 15:11:16', '2024-07-11 15:11:16', 377586, 'b9fe795518fa0afbe1db07b4a016c668e73eb0f0'),
(4, '50', '30', 946768, '2024-07-12 13:48:37', '2024-07-12 13:48:37', 340059, '750fbf19403d0e0bf3e0e7c0d451c767084c8911'),
(5, '10', '5', 694644, '2024-07-14 16:13:26', '2024-07-14 16:13:26', 961704, '5070390f8185bb5d4d2128e7fe68ced6663af4d9'),
(6, '50', '1', 809827, '2024-07-18 12:59:51', '2024-07-18 12:59:51', 499047, 'a04fba5024b344e8d0b8a6ddca1a41ac09608ed7'),
(7, '100', '100', 266788, '2024-07-18 16:19:22', '2024-07-18 16:19:22', 516448, 'cf718a70b7e2f6940b639787dc96aff18ba8b462'),
(8, '5', '0', 556332, '2024-07-19 13:36:59', '2024-07-19 13:36:59', 270530, '1d38f4b1939dd44eccc5c15585c3a5dbaf0478b6'),
(9, '10', '10', 395645, '2024-07-20 17:54:13', '2024-07-20 17:54:13', 270530, '9ce6dec410c51753c7323fed7cda9b0620c3fadf'),
(10, '0', '0', 925396, '2024-07-22 13:56:51', '2024-07-22 13:56:51', 377586, 'bc998c2636740ed5cfa07e23a2ac71e35d75f173'),
(11, '0', '0', 801195, '2024-07-23 04:39:00', '2024-07-23 04:39:00am', 516448, '032401d1044e420fd033cf2f9d8a06858f156616'),
(12, '200', '10', 393100, '2024-07-31 02:58:33', '2024-07-31 02:58:33', 352648, 'ca6abc626d0c750fe3e30a4a4a7612d564d0d9d7');

-- --------------------------------------------------------

--
-- Table structure for table `formfee_tb`
--

CREATE TABLE `formfee_tb` (
  `id` bigint(20) NOT NULL,
  `loanid` varchar(200) NOT NULL,
  `customerid` bigint(20) NOT NULL,
  `amount` double NOT NULL,
  `posted_by` int(11) NOT NULL,
  `date_normal` varchar(100) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `date_modified` varchar(100) DEFAULT NULL,
  `ccode` int(11) NOT NULL,
  `hcode` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `formfee_tb`
--

INSERT INTO `formfee_tb` (`id`, `loanid`, `customerid`, `amount`, `posted_by`, `date_normal`, `date_created`, `date_modified`, `ccode`, `hcode`) VALUES
(1, 'GRE/BUS/2024/000002', 2, 250, 660546, '2nd August, 2024 10:06:44pm', '2024-08-02 22:06', '2024-08-02 22:06', 340059, 'fdd7ebebd1c2035c0d55795545a3a892e8ac4ab7'),
(2, 'GRE/BUS/2024/000006', 6, 250, 660546, '2024-08-03 11:16', '2024-08-03 11:16', '2024-08-03 11:16', 340059, 'a8939adb229a5ff913b25568f6dc3201d9cce22d'),
(3, 'GRE/BUS/2024/000007', 7, 250, 660546, '2024-08-04 05:29', '2024-08-04 05:29', '2024-08-04 05:29', 340059, 'b964e86e073bd150060d3861f5c1d4bc327d35a6'),
(4, 'GRE/BUS/2024/000008', 8, 250, 680445, '2022-08-22 13:36', '2022-08-22 13:36', '2022-08-22 13:36', 340059, 'd601daa5bcb86a1b657c7969ac4d6a7cf512bc9c'),
(5, 'GRE/BUS/2024/000001', 1, 250, 680445, '2022-08-22 13:56', '2022-08-22 13:56', '2022-08-22 13:56', 340059, '5a10568f5eaca71fa9fd06f3b2f3e88deba86485'),
(6, 'GRE/BUS/2024/000002', 2, 250, 680445, '2022-09-12 15:10', '2022-09-12 15:10', '2022-09-12 15:10', 340059, 'b8854df6675771bfbf8fae8711fb312e746f66bb'),
(7, 'GRE/BUS/2024/000003', 3, 250, 680445, '2024-04-22 15:52', '2024-04-22 15:52', '2024-04-22 15:52', 340059, '45f58b9a185c26e68ac1a73c8b0de386acf70857'),
(8, 'GRE/BUS/2024/000004', 4, 250, 680445, '2022-09-02 16:15', '2022-09-02 16:15', '2022-09-02 16:15', 340059, '295393cb0afff8d059b60fe61f6eca15c804df40'),
(9, 'GRE/BUS/2024/000004', 4, 250, 680445, '2023-07-08 16:22', '2023-07-08 16:22', '2023-07-08 16:22', 340059, '27321afe245c58a5ad0d2c03840af3f307658569'),
(10, 'GRE/BUS/2024/000005', 5, 250, 680445, '2022-12-05 16:46', '2022-12-05 16:46', '2022-12-05 16:46', 340059, 'e2d83f03531bfddd43b5c7f7a17a7dcb9e781785'),
(11, 'GRE/BUS/2024/000005', 5, 250, 680445, '2023-07-13 16:56', '2023-07-13 16:56', '2023-07-13 16:56', 340059, 'd69749ae52f48ad8b6b6fc63cc397ae7b08434e2'),
(12, 'GRE/BUS/2024/000006', 6, 250, 680445, '2024-02-22 17:19', '2024-02-22 17:19', '2024-02-22 17:19', 340059, '4265c422ad6951f79842a98901fe685182cc70e5'),
(13, 'GRE/BUS/2024/000007', 7, 250, 680445, '2022-09-01 03:31', '2022-09-01 03:31', '2022-09-01 03:31', 340059, '782f61e2b1468e604d45e6a6ccacb6fb53610c47'),
(14, 'GRE/BUS/2024/000009', 9, 250, 680445, '2024-01-18 04:12', '2024-01-18 04:12', '2024-01-18 04:12', 340059, 'd265a7166fc2110f8e280eed4eb2d1da6d7a08d3'),
(15, 'GRE/BUS/2024/0000010', 10, 250, 680445, '2023-06-12 04:31', '2023-06-12 04:31', '2023-06-12 04:31', 340059, '7a525d3095b7c0b51f33c5f537f8034437019ab0'),
(16, 'GRE/BUS/2024/0000011', 11, 250, 680445, '2023-05-16 16:49', '2023-05-16 16:49', '2023-05-16 16:49', 340059, '257ace86328c3d6929347ca2cc0fadd7f5bffa54'),
(17, 'GRE/BUS/2024/0000012', 12, 250, 680445, '2023-10-18 16:54', '2023-10-18 16:54', '2023-10-18 16:54', 340059, '7d77a708f9ba9ac3aa8f35ece3bc65efcfcf6d3d'),
(18, 'GRE/BUS/2024/0000014', 14, 250, 680445, '2023-12-11 17:09', '2023-12-11 17:09', '2023-12-11 17:09', 340059, '2ff222b6b04f566c588ae934b02677df605bb71e'),
(19, 'GRE/BUS/2024/0000015', 15, 250, 680445, '2024-03-26 18:00', '2024-03-26 18:00', '2024-03-26 18:00', 340059, 'fb382d9791402bcecc4f3c69041e2afb211d00b0'),
(20, 'GRE/BUS/2024/0000013', 13, 250, 680445, '2024-02-01 03:42', '2024-02-01 03:42', '2024-02-01 03:42', 340059, '3c57923f6058f7c6f562b7eccb2463f0efef86e5'),
(21, 'GRE/BUS/2024/0000016', 16, 250, 680445, '2024-02-19 04:13', '2024-02-19 04:13', '2024-02-19 04:13', 340059, '908bd93029817eb7d22e648164963471cac4ccce'),
(22, 'GRE/BUS/2024/0000017', 17, 250, 680445, '2024-03-11 04:23', '2024-03-11 04:23', '2024-03-11 04:23', 340059, '787f4ed3ee64aec3f544d07e0166d61fc56ab357'),
(23, 'GRE/BUS/2024/0000018', 18, 250, 680445, '2023-05-29 04:47', '2023-05-29 04:47', '2023-05-29 04:47', 340059, 'ca4e5ec7e24a4ab881bb06655db599622552b666'),
(24, 'GRE/BUS/2024/0000019', 19, 250, 680445, '2024-02-12 05:05', '2024-02-12 05:05', '2024-02-12 05:05', 340059, '3d0973536481591bb38ef98ea91bda7fd382df1b'),
(25, 'GRE/BUS/2024/0000019', 19, 250, 680445, '2024-06-05 05:13', '2024-06-05 05:13', '2024-06-05 05:13', 340059, '4a356b3105a18976921940e730bb556ae6853650'),
(26, 'GRE/BUS/2024/0000020', 20, 250, 680445, '2024-02-15 05:26', '2024-02-15 05:26', '2024-02-15 05:26', 340059, '16232e3e0fa68993024612775335b8216bdb805d'),
(27, 'GRE/BUS/2024/0000020', 20, 250, 680445, '2024-04-15 05:35', '2024-04-15 05:35', '2024-04-15 05:35', 340059, '57ce0622fe5517e254bacbc15dbb9781059b5b38'),
(28, 'GRE/BUS/2024/0000021', 21, 250, 680445, '2024-02-14 05:49', '2024-02-14 05:49', '2024-02-14 05:49', 340059, '6c5a342c2863d30faf63280cf34bd602bd15176e'),
(29, 'GRE/BUS/2024/0000021', 21, 250, 680445, '2024-05-24 06:00', '2024-05-24 06:00', '2024-05-24 06:00', 340059, 'c1d985382f3a62b304009e7890619a678726fd87'),
(30, 'GRE/BUS/2024/0000022', 22, 250, 680445, '2024-03-05 06:13', '2024-03-05 06:13', '2024-03-05 06:13', 340059, 'f98c1a5ce093b9b6a70621e94cd1c7fbeef9c7c8'),
(31, 'GRE/BUS/2024/0000023', 23, 250, 680445, '2023-05-11 06:32', '2023-05-11 06:32', '2023-05-11 06:32', 340059, 'c84577b566361392c11abd28576bab65c2802036'),
(32, 'GRE/BUS/2024/0000018', 18, 250, 680445, '2023-12-09 06:38', '2023-12-09 06:38', '2023-12-09 06:38', 340059, '96fcaa03f58865378449c71aef5393fc2db0de56'),
(33, 'GRE/BUS/2024/0000016', 16, 250, 680445, '2024-06-24 07:04', '2024-06-24 07:04', '2024-06-24 07:04', 340059, 'd9a37d418fb48e57a220ba32ac5670581c23b6e3'),
(34, 'GRE/BUS/2024/0000014', 14, 250, 680445, '2024-05-20 07:11', '2024-05-20 07:11', '2024-05-20 07:11', 340059, '7c59bed8f66160fd5e0484cbaa3816662da95639'),
(35, 'GRE/BUS/2024/0000015', 15, 250, 680445, '2024-08-11 07:16', '2024-08-11 07:16', '2024-08-11 07:16', 340059, 'f1d5aefdb6f7713b550e1d800d403d5d661b6d20'),
(36, 'GRE/BUS/2024/0000024', 24, 250, 680445, '2024-05-13 07:39', '2024-05-13 07:39', '2024-05-13 07:39', 340059, 'adcd6b4a870ffaa29d94ec26924b7bff2e8f32f9'),
(37, 'GRE/BUS/2024/0000025', 25, 250, 680445, '2023-01-27 08:12', '2023-01-27 08:12', '2023-01-27 08:12', 340059, '5c778654ed0b0a44b9649bde78267a750ddf0c48'),
(38, 'GRE/BUS/2024/0000026', 26, 250, 680445, '2023-03-07 08:28', '2023-03-07 08:28', '2023-03-07 08:28', 340059, 'c0368f58a03320e6a41969650679a74030f7967d'),
(39, 'GRE/BUS/2024/0000026', 26, 250, 680445, '2023-11-20 08:35', '2023-11-20 08:35', '2023-11-20 08:35', 340059, 'a0998b0ed0ae1f8728bbd5c31902661fd2ac03d6'),
(40, 'GRE/BUS/2024/0000026', 26, 250, 680445, '2023-07-13 09:33', '2023-07-13 09:33', '2023-07-13 09:33', 340059, 'a9b339dc63d9f7a4c8a687bc1b466f9f100a9f4f'),
(41, 'GRE/BUS/2024/0000027', 27, 250, 680445, '2024-04-22 09:57', '2024-04-22 09:57', '2024-04-22 09:57', 340059, '0d28aa4e9e0447b4ba4c8485cc1f88ce9677fc93'),
(42, 'GRE/BUS/2024/000008', 8, 250, 680445, '2023-01-28 10:08', '2023-01-28 10:08', '2023-01-28 10:08', 340059, '12f3bfad6ca52682f4be9dd10840f5c00a27905d'),
(43, 'GRE/BUS/2024/000008', 8, 250, 680445, '2023-04-11 10:15', '2023-04-11 10:15', '2023-04-11 10:15', 340059, '477980763e662091cf146d1d2314ed00fcf62ea2'),
(44, 'GRE/BUS/2024/0000017', 17, 250, 680445, '2024-06-10 12:41', '2024-06-10 12:41', '2024-06-10 12:41', 340059, 'a6ad1f3a59c89e5b2f594751dedf0d7903b44445'),
(45, 'GRE/BUS/2024/0000018', 18, 250, 680445, '2024-08-12 10:40', '2024-08-12 10:40', '2024-08-12 10:40', 340059, '6fd46773e2e03901439eaaae682e98c48fadc7fd'),
(46, 'GRE/BUS/2024/0000028', 28, 250, 680445, '2024-08-12 12:00', '2024-08-12 12:00', '2024-08-12 12:00', 340059, '8cbbe159c521e34605d5efbaf68afaa5f9d2c83e'),
(47, 'GRE/BUS/2024/0000029', 29, 250, 680445, '2024-08-12 13:59', '2024-08-12 13:59', '2024-08-12 13:59', 340059, 'e36c98e882f61f181173f1dcefa0cb4c34c34065'),
(48, 'GRE/BUS/2024/0000030', 30, 250, 680445, '2024-08-23 10:45', '2024-08-23 10:45', '2024-08-23 10:45', 340059, '51d84b532b25ce431454f984dfeceed7cc4225b2'),
(49, 'GRE/BUS/2024/000006', 6, 250, 680445, '2024-09-02 11:06', '2024-09-02 11:06', '2024-09-02 11:06', 340059, '247de5d857d87422da6360847c74de393d47d282'),
(50, 'GRE/BUS/2024/0000010', 10, 250, 680445, '2024-09-04 13:36', '2024-09-04 13:36', '2024-09-04 13:36', 340059, '01a9c51509fa6e88f52f656b96f8b258c3dc68c5');

-- --------------------------------------------------------

--
-- Table structure for table `form_tb`
--

CREATE TABLE `form_tb` (
  `ID` bigint(20) NOT NULL,
  `CUSTOMERID` bigint(20) NOT NULL,
  `LOANID` int(11) NOT NULL,
  `AFILE` varchar(200) NOT NULL,
  `POSTED_BY` int(11) NOT NULL,
  `DATE_CREATED` varchar(100) NOT NULL,
  `DATE_MODIFIED` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_tb`
--

INSERT INTO `form_tb` (`ID`, `CUSTOMERID`, `LOANID`, `AFILE`, `POSTED_BY`, `DATE_CREATED`, `DATE_MODIFIED`) VALUES
(1, 1, 1, 'img499288.jpg', 680445, '2024-08-05 13:57', '2024-08-05 13:57'),
(2, 2, 2, 'img737790.jpg', 680445, '2024-08-05 15:11', '2024-08-05 15:11'),
(3, 3, 3, 'img418891.jpg', 680445, '2024-08-05 15:53', '2024-08-05 15:53'),
(4, 4, 4, 'img295274.jpg', 680445, '2024-08-05 16:16', '2024-08-05 16:16'),
(5, 4, 5, 'img695849.jpg', 680445, '2024-08-05 16:24', '2024-08-05 16:24'),
(6, 5, 6, 'img262220.jpg', 680445, '2024-08-05 16:47', '2024-08-05 16:47'),
(7, 5, 7, 'img782388.jpg', 680445, '2024-08-05 16:57', '2024-08-05 16:57'),
(8, 6, 8, 'img183551.jpg', 680445, '2024-08-05 17:20', '2024-08-05 17:20'),
(9, 7, 9, 'img788175.jpg', 680445, '2024-08-06 03:32', '2024-08-06 03:32'),
(10, 9, 10, 'img261654.jpg', 680445, '2024-08-06 04:14', '2024-08-06 04:14'),
(11, 10, 11, 'img408260.jpg', 680445, '2024-08-06 04:32', '2024-08-06 04:32'),
(12, 11, 12, 'img192222.jpg', 680445, '2024-08-06 16:51', '2024-08-06 16:51'),
(13, 12, 13, 'img739996.jpg', 680445, '2024-08-06 16:58', '2024-08-06 16:58'),
(14, 13, 16, 'img472374.jpg', 680445, '2024-08-07 03:46', '2024-08-07 03:46'),
(15, 14, 14, 'img326958.jpg', 680445, '2024-08-07 03:57', '2024-08-07 03:57'),
(16, 15, 15, 'img995299.jpg', 680445, '2024-08-07 04:04', '2024-08-07 04:04'),
(17, 16, 17, 'img326315.jpg', 680445, '2024-08-07 04:15', '2024-08-07 04:15'),
(18, 18, 19, 'img200895.jpg', 680445, '2024-08-07 04:48', '2024-08-07 04:48'),
(19, 19, 20, 'img718039.jpg', 680445, '2024-08-07 05:06', '2024-08-07 05:06'),
(20, 19, 21, 'img882419.jpg', 680445, '2024-08-07 05:15', '2024-08-07 05:15'),
(21, 20, 22, 'img795290.jpg', 680445, '2024-08-07 05:28', '2024-08-07 05:28'),
(22, 20, 23, 'img107280.jpg', 680445, '2024-08-07 05:37', '2024-08-07 05:37'),
(23, 21, 24, 'img714718.jpg', 680445, '2024-08-07 05:50', '2024-08-07 05:50'),
(24, 21, 25, 'img501640.jpg', 680445, '2024-08-07 06:01', '2024-08-07 06:01'),
(25, 22, 26, 'img814814.jpg', 680445, '2024-08-07 06:15', '2024-08-07 06:15'),
(26, 23, 27, 'img490038.jpg', 680445, '2024-08-07 06:33', '2024-08-07 06:33'),
(27, 18, 28, 'img713552.jpg', 680445, '2024-08-07 06:57', '2024-08-07 06:57'),
(28, 16, 29, 'img476377.jpg', 680445, '2024-08-07 07:06', '2024-08-07 07:06'),
(29, 14, 30, 'img251370.jpg', 680445, '2024-08-07 07:12', '2024-08-07 07:12'),
(30, 15, 31, 'img140993.jpg', 680445, '2024-08-07 07:18', '2024-08-07 07:18'),
(31, 24, 32, 'img724212.jpg', 680445, '2024-08-07 07:58', '2024-08-07 07:58'),
(32, 25, 33, 'img193232.jpg', 680445, '2024-08-07 08:13', '2024-08-07 08:13'),
(33, 26, 34, 'img345110.jpg', 680445, '2024-08-07 08:30', '2024-08-07 08:30'),
(34, 26, 35, 'img717083.jpg', 680445, '2024-08-07 08:36', '2024-08-07 08:36'),
(35, 26, 36, 'img280360.jpg', 680445, '2024-08-07 09:35', '2024-08-07 09:35'),
(36, 27, 37, 'img129994.jpg', 680445, '2024-08-07 09:58', '2024-08-07 09:58'),
(37, 8, 38, 'img653745.jpg', 680445, '2024-08-07 10:09', '2024-08-07 10:09'),
(38, 8, 39, 'img219277.jpg', 680445, '2024-08-07 10:17', '2024-08-07 10:17'),
(39, 17, 18, 'img617500.jpg', 680445, '2024-08-08 12:35', '2024-08-08 12:35'),
(40, 17, 40, 'img731979.jpg', 680445, '2024-08-08 12:44', '2024-08-08 12:44'),
(41, 18, 41, 'img222214.jpg', 680445, '2024-08-12 10:52', '2024-08-12 10:52'),
(42, 28, 42, 'img195308.jpg', 680445, '2024-08-12 12:02', '2024-08-12 12:02'),
(43, 29, 43, 'img987011.jpg', 680445, '2024-08-12 14:02', '2024-08-12 14:02'),
(44, 30, 44, 'img412049.jpg', 680445, '2024-08-23 10:46', '2024-08-23 10:46'),
(45, 6, 45, 'img748974.jpg', 680445, '2024-09-02 11:31', '2024-09-02 11:31'),
(46, 10, 46, 'img579247.jpg', 680445, '2024-09-04 13:39', '2024-09-04 13:39');

-- --------------------------------------------------------

--
-- Table structure for table `guarantor_tb`
--

CREATE TABLE `guarantor_tb` (
  `ID` int(11) NOT NULL,
  `ACCOUNT_NO` varchar(200) NOT NULL,
  `GUARANTOR1` varchar(200) NOT NULL,
  `GUARANTOR2` varchar(200) NOT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DATE_MODIFIED` varchar(200) DEFAULT NULL,
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `haccount_tb`
--

CREATE TABLE `haccount_tb` (
  `ID` int(11) NOT NULL,
  `PRODUCT_ID` int(11) DEFAULT NULL,
  `CLIENT_ID` int(11) DEFAULT NULL,
  `ACCOUNT_NO` varchar(255) DEFAULT NULL,
  `SUBSCRIPTION` varchar(200) DEFAULT NULL,
  `RATE` int(11) DEFAULT NULL,
  `ACC_STATUS` int(11) DEFAULT NULL COMMENT '0:Active 1:Inactive',
  `SMS_STATUS` int(11) DEFAULT NULL COMMENT '0:Active 1:Inactive',
  `DESCRIPTION` varchar(255) NOT NULL,
  `DATE_CREATED` varchar(100) DEFAULT NULL,
  `DATE_MODIFIED` varchar(50) DEFAULT NULL,
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `haccount_tb`
--

INSERT INTO `haccount_tb` (`ID`, `PRODUCT_ID`, `CLIENT_ID`, `ACCOUNT_NO`, `SUBSCRIPTION`, `RATE`, `ACC_STATUS`, `SMS_STATUS`, `DESCRIPTION`, `DATE_CREATED`, `DATE_MODIFIED`, `CCODE`, `HCODE`) VALUES
(40, 296386, 7017125, 'Joe 0000000001', '5', 7, 1, 1, 'undefined', '2022-09-13', '2022-09-13 02:39:40pm', 764459, '83c7d3dacdb3482ad507569d4b7ed9da97c37e76'),
(41, 455775, 9591145, 'Sof 0000000001', '3', 7, 0, 0, 'undefined', '2022-09-13', '2022-09-13 02:40:35pm', 381272, '6a1d87ddde97badd1eb22826a5794d6703b3928c'),
(42, 296386, 2496317, 'Joe 0000000002', '5', 7, 0, 1, 'undefined', '2022-09-13', '2022-09-13', 764459, '369005044f8a1c4b9e06ce1f49b58a33bc948472'),
(43, 281652, 2767623, 'Lin 0000000001', '5', 7, 0, 1, 'undefined', '2022-09-16', '2022-09-16', 474308, 'ac1f59704df00ce1fb7177de6b7b838889ce9857'),
(44, 531344, 6416536, 'Sof 0000000002', '5', 7, 0, 1, 'undefined', '2022-09-16', '2022-09-16', 381272, '41d08a82ad9ba5b597b7541e05155dcb21f92716'),
(45, 919896, 4082317, 'Sof 0000000003', '1', 7, 0, 0, 'undefined', '2022-09-22', '2022-09-22 03:25:37pm', 381272, '0f2de3201687980847854a06504a22e1ca0bc3eb');

-- --------------------------------------------------------

--
-- Table structure for table `hcharge_tb`
--

CREATE TABLE `hcharge_tb` (
  `ID` bigint(20) NOT NULL,
  `HCODE` longtext NOT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `ACCOUNT_NUMBER` varchar(200) NOT NULL,
  `WITHDRAWAL_ID` int(11) DEFAULT NULL,
  `PRODUCT_ID` int(11) DEFAULT NULL,
  `FEE_TYPE` varchar(200) DEFAULT NULL,
  `QUANTITY` int(11) DEFAULT NULL,
  `AMOUNT` double NOT NULL,
  `CSTATUS` int(11) DEFAULT NULL COMMENT '1: Collected 2: Not Collected',
  `DATE_CREATED` varchar(50) NOT NULL,
  `DATE_MODIFIED` varchar(50) DEFAULT NULL,
  `DATE_NORMAL` varchar(50) NOT NULL,
  `CCODE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hproduct_tb`
--

CREATE TABLE `hproduct_tb` (
  `ID` int(11) NOT NULL,
  `CODE` int(11) NOT NULL,
  `PRODUCT` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `CATEGORY` int(11) DEFAULT NULL,
  `COG` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '0',
  `UNIT` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `QUANTITY` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `REMAINING` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `RESTOCK_LEVEL` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `EXP_DATE` varchar(50) DEFAULT NULL,
  `IMAGE` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DATE_MODIFIED` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interest_tb`
--

CREATE TABLE `interest_tb` (
  `ID` int(11) NOT NULL,
  `PRODUCT_ID` int(11) DEFAULT NULL,
  `ACCOUNT_NUMBER` varchar(255) NOT NULL,
  `ACCRUE_STATUS` varchar(200) DEFAULT NULL,
  `YEAR` varchar(100) DEFAULT NULL,
  `MONTH` varchar(100) DEFAULT NULL,
  `AMOUNT` double DEFAULT NULL,
  `DATE_CREATED` varchar(50) DEFAULT NULL,
  `DATE_NORMAL` varchar(100) DEFAULT NULL,
  `DATE_MODIFIED` varchar(50) DEFAULT NULL,
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loanreg_tb`
--

CREATE TABLE `loanreg_tb` (
  `id` bigint(20) NOT NULL,
  `code` varchar(255) NOT NULL,
  `regtype` int(11) NOT NULL COMMENT '1:Business 2:Group',
  `image` varchar(200) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `surname` varchar(200) DEFAULT NULL,
  `othername` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `dob` varchar(200) DEFAULT NULL,
  `dependant` varchar(200) DEFAULT NULL,
  `idtype` varchar(200) DEFAULT NULL,
  `idno` varchar(200) DEFAULT NULL,
  `dateissue` varchar(200) DEFAULT NULL,
  `dateexpire` varchar(200) DEFAULT NULL,
  `busname` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `btel` varchar(200) DEFAULT NULL,
  `byears` varchar(200) DEFAULT NULL,
  `emptype` int(11) DEFAULT NULL COMMENT '1:Employed 2: Unemployed 3:Self Employed',
  `empname` varchar(200) DEFAULT NULL,
  `position` varchar(200) DEFAULT NULL,
  `empno` varchar(200) DEFAULT NULL,
  `netsal` varchar(200) DEFAULT NULL,
  `bdirection` varchar(200) DEFAULT NULL,
  `rdirection` varchar(200) DEFAULT NULL,
  `posted_by` int(11) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `date_modified` varchar(100) DEFAULT NULL,
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loanreg_tb`
--

INSERT INTO `loanreg_tb` (`id`, `code`, `regtype`, `image`, `title`, `surname`, `othername`, `phone`, `gender`, `dob`, `dependant`, `idtype`, `idno`, `dateissue`, `dateexpire`, `busname`, `address`, `location`, `btel`, `byears`, `emptype`, `empname`, `position`, `empno`, `netsal`, `bdirection`, `rdirection`, `posted_by`, `date_created`, `date_modified`, `CCODE`, `HCODE`) VALUES
(1, 'GRE/BUS/2024/000001', 1, '1VLCD5vNGVk1sgcJdzegBikOG4tNcjHcs', 'Mr', 'ODOOM', 'VADIS', '0545142544', 'Male', '1956-12-26', '5', 'Voters Id', '4735036002', '2020-07-25', '2024-07-25', 'INRES LTD', 'BOX 2700', 'TEMA', '0545142544', '14 YEARS', 3, 'None', 'None', 'None', 'None', 'GOIL TO VRA KPONE ROAD', 'WASHING BAY PRECIOUS SEED', 680445, '2022-08-22 13:55', '2022-08-22 13:55', 340059, 'b5ac57e4485be0bb629368cc9583818bb2644134'),
(2, 'GRE/BUS/2024/000002', 1, '16pFmrn51BmYRNuDHiefWj53B5i_F8E66', 'Ms', 'TETTEH', 'GIFTY', '0240351761', 'Female', '1997-05-02', '3', 'Ecowas Card', 'GHA-722127319-6', '2020-03-15', '2030-03-14', 'TRADER', 'BOX 4', 'KPONE', '0240940391', '2YEARS', 3, 'None', 'None', 'None', 'None', 'CHOCOLATE STREET ADJACENT TO THE CHIEF HOUSE', 'SAME ROUTINE', 680445, '2022-09-12 15:09', '2022-09-12 15:09', 340059, '0c0a3d9bb5bc5e7c93bd9f1cc57792f9b9fc1362'),
(3, 'GRE/BUS/2024/000003', 1, '183SZthTvD3aEhslXN85aM3LKDFfa-5wD', 'Mrs', 'TETTEH ', 'AUGUSTINA', '0279783963', 'Female', '1970-07-28', '4', 'Ecowas Card', 'GHA-000949437-0', '2022-09-01', '2032-08-31', 'TRADER', 'C10 KPONE', 'TEMA COMMUNITY ONE', '0279783963', '23 YEARS', 3, 'None', 'None', 'None', 'None', 'KPONE TO TEMA COMM ONE', 'SAME ROUTINE', 680445, '2024-04-22 15:50', '2024-04-22 15:50', 340059, '1fc580ae6425f99c877684f31a4969b7afb79e84'),
(4, 'GRE/BUS/2024/000004', 1, '1ZJgmJ59dq7uJhDRe8f0lj8Q6I9sopUCD', 'Mr', 'KWAKU', 'JOSEPH', '0558474307', 'Male', '1976-07-02', '5', 'Ecowas Card', 'GHA-7274485334-2', '2021-11-18', '2031-11-17', 'BUILDING CONTRTACTOR', 'K10', 'KPONE', '0558474307', '30 YEARS', 3, 'None', 'None', 'None', 'None', 'KKMA TO KINGDOM STAR', 'SAME ROUTINE', 680445, '2022-09-02 16:14', '2022-09-02 16:14', 340059, '2e8839a6dc6c7593002e45b60caae707bdc3629d'),
(5, 'GRE/BUS/2024/000005', 1, '15tWvh2aDKLl_CzxJCiifspnfouoo4zwi', 'Mr', 'AYIAH', 'MATTHEW', '0243740694', 'Male', '1969-02-02', '4', 'Drivers License', '7458964510', '2020-10-15', '2022-10-14', 'TRADER', 'K8', 'KPONE SHANGHAI', '0243740694', '10 YEARS', 3, 'None', 'None', 'None', 'None', 'SHANGHAI JUNCTION', 'SAME ROUTINE', 680445, '2022-12-05 16:45', '2022-12-05 16:45', 340059, '602360a646f55f57e6ee91dfeaaed37a44c4aaac'),
(6, 'GRE/BUS/2024/000006', 1, '14BhishkLUx1B4mVKZt35PN7z_KmcIL02', 'Ms', 'SIKA', 'DEBORAH', '0556400714', 'Female', '1996-06-13', '1', 'Ecowas Card', 'GHA-713418456-3', '2019-07-15', '2029-06-26', 'CATHERING', 'LA10', 'ACCRA LA', '0556400714', '1 YEAR', 3, 'None', 'None', 'None', 'None', 'APAPA TO LA TENU', 'SAME ROUTINE', 680445, '2024-02-22 17:18', '2024-02-22 17:18', 340059, '07bd48a0647b97364835b8a339bb38368b879660'),
(7, 'GRE/BUS/2024/000007', 1, '1z0d0zP6deGqJSdIQaNzLkkufT5iqpb9C', 'Mr', 'AHADO', 'ABEL', '0550821785', 'Male', '1977-09-11', '5', 'Ecowas Card', 'GHA-727503065-1', '2021-02-12', '2031-01-12', 'TRADER', 'D/20', 'KPONE FARMS', '0201374567', '10 YEARS', 3, 'None', 'None', 'None', 'None', 'NEAR KKMA KPONE', 'ADJACENT KKMA', 680445, '2022-09-01 03:30', '2022-09-01 03:30', 340059, 'a57d0b12d5bafd0ac7bdeaa3d613ad2a1371e28e'),
(8, 'GRE/BUS/2024/000008', 1, '15oITSSccWjqBlgAA-y8OVW7cVMq1EI5o', 'Ms', 'ESHUN', 'FOSUA VIVIAN', '0558249913', 'Female', '1992-07-31', '4', 'Ecowas Card', 'GHA-727320060-1', '2021-07-12', '2031-07-11', 'MOBILE MONEY VENDOR', 'M/10', 'KPONE SHANGHAI', '0549678811', '6 YEARS', 3, 'None', 'None', 'None', 'None', 'SHANGHAI HOTEL ', 'SAME ROUTINE', 680445, '2023-10-28 04:01', '2023-10-28 04:01', 340059, '504ab144e72efb91d4c9e5e4edd87d7082482db1'),
(9, 'GRE/BUS/2024/000009', 1, '1Lwwu4jSWmSC1DaBhQGUTuh7JDB5CcToD', 'Ms', 'BAIDOO', 'SARAH', '0531612354', 'Female', '1991-10-14', '3', 'Ecowas Card', 'GHA-723791140-0', '2020-07-11', '2030-07-10', 'TRADER', 'K20', 'KONKOMPE CAR PARK', '0531612354', '1 YEAR', 3, 'None', 'None', 'None', 'None', 'KONKOMPE CAR PARK ', 'SAME ROUTINE', 680445, '2024-01-18 04:11', '2024-01-18 04:11', 340059, '9ddfd69dc9c8ffad4e1aa09a6523e73ef27e43c5'),
(10, 'GRE/BUS/2024/0000010', 1, '19C7vd3h738RMaJt_7fSc7FVhhVA6pRKZ', 'Ms', 'FUDZI', 'ERNESTINA', '0557447781', 'Female', '1985-01-07', '3', 'Ecowas Card', 'GHA-00099564-2', '2022-10-05', '2032-09-05', 'TRADER', 'T/1', 'TESHIE', '0208602231', '10 YEARS', 3, 'None', 'None', 'None', 'None', 'KATAMANSO TO TESHIE', 'SAME ROUTINE', 680445, '2023-06-12 04:30', '2023-06-12 04:30', 340059, '6703c6e3182aa788909606f7e9d4f6862e9dae23'),
(11, 'GRE/BUS/2024/0000011', 1, '1WBlA0PcFhR0izJJVe0psA8W-Q0yb8JOV', 'Ms', 'AMOAH', 'LAWRENCIA', '0553970058', 'Female', '1989-03-03', '5', 'Ecowas Card', 'GHA-726300667-9', '2020-03-09', '2030-02-09', 'TRADER', 'GK005948', 'KPONE GOSPEL', '0553970058', '1 YEAR', 3, 'None', 'None', 'None', 'None', '                  BEHIND GOSPEL DEEPER LIFE CHURCH', 'SAME ROUTINE', 680445, '2023-05-16 04:49', '2023-05-16 04:49', 340059, '5eb9d60b8ca45086665f599a09a565e12dd0f93f'),
(12, 'GRE/BUS/2024/0000012', 1, '1GjSmvwYq2kCCet8RTI6WvreT5sGgGUGS', 'Mr', 'DANSO ODURO', 'GEORGE', '0533489137', 'Male', '1995-05-05', '2', 'Ecowas Card', 'GHA-729084122-3', '2022-10-21', '2032-10-20', 'DRIVING', 'F1', 'KPONE ', '0598685824', '3 YEARS', 3, 'None', 'None', 'None', 'None', 'KPONE FAIRE POINT', 'SAME ROUTINE', 680445, '2023-10-18 05:10', '2023-10-18 05:10', 340059, 'bcd84fae15e2dd470eaac2fcfb6c7d7801af172e'),
(13, 'GRE/BUS/2024/0000013', 1, '19KRt3PTpbGwzSbD_f_S5H-QDoAYZ5jbi', 'Ms', 'ASANTE', 'BERNICE', '0248281909', 'Female', '1987-01-01', '2', 'Ecowas Card', 'GHA-722465210-9', '2020-03-20', '2030-03-19', 'TRADER', 'NONE', 'KPONE', '0248281909', '6 MONTH', 3, 'None', 'None', 'None', 'None', 'KPONE LEONALDO ROAD OPPOSITE ROYAL SCHOOL', 'SAME ROUTINE', 680445, '2024-02-01 05:21', '2024-02-01 05:21', 340059, '36184018643c53e943b326845267654341ca894e'),
(14, 'GRE/BUS/2024/0000014', 1, '10zc43gNNASLqVeXGPqbUf5gPWFTAobpp', 'Mr', 'ESHUN', 'BENJAMIN', '0243442911', 'Male', '1984-05-06', '5', 'Ecowas Card', 'GHA-726132335-4', '2020-09-02', '2030-09-01', 'DRIVING', 'GPRTU', 'TEMA', '0278877169', '14 YEARS', 3, 'None', 'None', 'None', 'None', 'KPONE TO TEMA ', 'TEMA TO KPONE', 680445, '2023-12-11 05:39', '2023-12-11 05:39', 340059, 'cd1d14c03200eb67fc677f4e771d3cddbf66b338'),
(15, 'GRE/BUS/2024/0000015', 1, '1Oj-X1PH_Gb7kfQY1W1gDKx1zvC-0Mqwr', 'Mrs', 'ADDO', 'VIVIAN', '0256569746', 'Female', '1989-08-11', '5', 'Ecowas Card', 'GHA-001163059-7', '2021-12-23', '2031-12-22', 'TRADER', 'GK0012-7910', 'KPONE SHANGHAI JUNCTION', '0256569746', '7 YEARS', 3, 'None', 'None', 'None', 'None', 'KPON SHANGHAI FIRST WASHING BAY', 'SAME ROUTINE', 680445, '2024-03-26 05:53', '2024-03-26 05:53', 340059, 'b99ea45d237227ded419ac4e158d05d1eb5d5e3d'),
(16, 'GRE/BUS/2024/0000016', 1, '1P03qEiDOytHwn7Zh5lPl0CvQwKATx93M', 'Ms', 'DZIVENU', 'GLORIA', '0534832378', 'Female', '1995-05-14', '5', 'Ecowas Card', 'GHA-729724983-5', '2024-02-16', '2034-02-15', 'TRADER', 'GK0021804', 'KPONE', '0257622579', '5 YEARS', 3, 'None', 'None', 'None', 'None', 'SHANGHAI TO KPONE', 'SAME ROUTINE', 680445, '2024-02-19 06:04', '2024-02-19 06:04', 340059, '5d6fe3e5cc84a551ea792bd29c29a75ec318f79c'),
(17, 'GRE/BUS/2024/0000017', 1, '1Q53rC97U4YWxqHt7xEgkmw5AhP0K496F', 'Ms', 'MENSAH', 'COMFORT', '0556901694', 'Female', '1980-05-20', '2', 'Ecowas Card', 'GHA-726537383-2', '2020-09-06', '2030-09-05', 'TRADER', 'GK0011-0151', 'KPONE', '0556901694', '14 YEARS', 3, 'None', 'None', 'None', 'None', ' ADJACENT KPONE KKMA', 'SAME ROUTINE', 680445, '2024-03-11 09:23', '2024-03-11 09:23', 340059, 'fb78739ed20bc27591baa9ab34620b9cfce49495'),
(18, 'GRE/BUS/2024/0000018', 1, '1j9HUY6SQ-qXt4UwniZmCLfRNkddtiSf-', 'Ms', 'NYARKOA', 'AMA DORIS', '0540863299', 'Female', '1988-05-05', '5', 'Ecowas Card', 'GHA-001159911-5', '2019-06-28', '2029-06-24', 'TRADER', 'NONE', 'KPONE', '0540863299', '2 YEARS', 3, 'None', 'None', 'None', 'None', 'OPPOSITE THE CHIEF\"S HOUSE (SHANGHAI TOUCH SKIES)', 'SAME ROUTINE', 680445, '2023-05-29 04:45', '2023-05-29 04:45', 340059, '42e635cb50dc7a12da4cdaefd58d114308c08e9c'),
(19, 'GRE/BUS/2024/0000019', 1, '1vWMEs0XMBBK1u1kvcmLBOflLEw-Gwxuq', 'Mrs', 'ALHASSAN', 'ABIBA', '0242334689', 'Female', '1978-08-10', '3', 'Ecowas Card', 'GHA-001169475-5', '2022-09-12', '2032-09-11', 'TRADER', 'NONE', 'KOKOMPE CAR PARK', '0542445922', '12 YEARS', 3, 'None', 'None', 'None', 'None', 'ALHAJI SARIA CAR PARK (KOKOMPE', 'SAME ROUTINE', 680445, '2024-02-12 05:04', '2024-02-12 05:04', 340059, '91adc7db4d9959989f932a861de5a788b330668a'),
(20, 'GRE/BUS/2024/0000020', 1, '1QHhO9qThr2MgHKrvdYlBGTbvdRNBx7YI', 'Ms', 'OSABUTEY', 'VERONICA TAWIAH', '0598988571', 'Female', '1989-01-01', '3', 'Ecowas Card', 'GHA-713499233-9', '2019-07-03', '2029-07-02', 'TRADER', 'A/123', 'KPONE LEONALDO ROAD', '0531409912', 'TWO YEARS', 3, 'None', 'None', 'None', 'None', 'KPONE FAIR POINT JUNCTION', 'SAME ROUTINE', 680445, '2024-02-15 05:25', '2024-02-15 05:25', 340059, '3d82a1dd62ecaba9029b6f08fac71d5913c73779'),
(21, 'GRE/BUS/2024/0000021', 1, '1zr3sUUSpsrWKl_7PdIm6dGeE_HLrP9Xx', 'Ms', 'AFENTSI', 'FAUSTINA', '0256901842', 'Female', '1993-06-12', '1', 'Ecowas Card', 'GHA-722021437-2', '2020-03-14', '2030-03-13', 'TRADER', 'NONE', 'KPONE SHANGHAI STATION', '0207925605', '3 YEARS', 3, 'None', 'None', 'None', 'None', 'KOKOMPE TO KPONE SHANGHAI', 'SAME ROUTINE', 680445, '2024-02-14 05:47', '2024-02-14 05:47', 340059, '6fc2ce78b7520f38cc32a2a51d8dcaff3b2d7105'),
(22, 'GRE/BUS/2024/0000022', 1, '1ukVMEZ7FEixbpRlFqOtVJeNZ90LvL59c', 'Mrs', 'TETTEH', 'JOYCE', '0596008705', 'Female', '1982-04-10', '7', 'Ecowas Card', 'GHA-729552849-3', '2023-11-14', '2033-11-13', 'TRADER', 'NONE', 'KPONE MARKET', '0596008705', '30 YEARS', 3, 'None', 'None', 'None', 'None', ' FROM SHANGHAI THE CHIEF\"S HOUSE TO KPONE MARKET', 'SAME ROUTINE', 680445, '2024-03-05 06:12', '2024-03-05 06:12', 340059, '670aaa4052c960b0c993bf34f9ca016b607e8617'),
(23, 'GRE/BUS/2024/0000023', 1, '16A-2v8BdxhDNl1jqxwN3LawFDo6OKEPw', 'Ms', 'OWUSU', 'MARY', '0545390478', 'Female', '1990-06-06', '6', 'Voters Id', '4733041558', '2016-07-21', '2024-07-20', 'TRADER', 'BL73', 'KPONE APOLLO', '054590478', '2 YEARS', 3, 'None', 'None', 'None', 'None', 'KPONE MARKET TO APOLLO', 'APOLLO TO KPONE MARKET', 680445, '2023-05-11 06:30', '2023-05-11 06:30', 340059, 'c6fa81678dad8fedd5bbf28ee16b5cfe8094b3f3'),
(24, 'GRE/BUS/2024/0000024', 1, '1odrxH3tppoQ0eU_CMw0iOMQ5FjLUwVTJ', 'Mr', 'BAAH', 'EVANS', '0257543088', 'Male', '1993-04-10', '4', 'Ecowas Card', 'GHA-729331145-9', '2023-09-12', '2033-09-11', 'TAILOR', 'NONE', 'KPONE SHALOM HOTEL', '0554676199', '7 YEARS', 3, 'None', 'None', 'None', 'None', 'None', 'NONE', 680445, '2024-05-13 07:33', '2024-05-13 07:33', 340059, 'f0cae8b9e9d002c5c8fe87042db63e8dd2c22c84'),
(25, 'GRE/BUS/2024/0000025', 1, '1T2kD3NXBMq2D7DPSUr0Azl5noYSHW2hp', 'Mr', 'ATTAH', 'KWEKU SAMUEL', '0248578084', 'Male', '1990-07-10', '10', 'Voters Id', '4731030525', '2020-07-28', '2024-07-27', 'WELDING ', 'NONE', 'KPONE SHANGHAI', '0248578084', '10 YEARS', 3, 'None', 'None', 'None', 'None', 'ADJACENT SHANGHAI HOTEL', 'SAME ROUTINE', 680445, '2023-01-27 08:10', '2023-01-27 08:10', 340059, '769a1c09ebafbee3fc3a758e22267a2956eaad8c'),
(26, 'GRE/BUS/2024/0000026', 1, '1nl5L15yTb0qY-IQx0th3INZhs6VIVA22', 'Mr', 'DWAMENA KOFI', 'ALFRED', '0551196260', 'Male', '1980-06-15', '5', 'Ecowas Card', 'GHA-001658363-4', '2020-09-11', '2030-09-07', 'UBER DRIVER', 'D18', 'KPONE', '0551196260', '12 YEARS', 3, 'None', 'None', 'None', 'None', 'None', 'NONE', 680445, '2023-03-07 08:25', '2023-03-07 08:25', 340059, 'b56bd46d3607c5e3f630afb2d86870adf3efe804'),
(27, 'GRE/BUS/2024/0000027', 1, '14fAPX9DoUW6L7SNs7C2bz2PeE9lETe_p', 'Mr', 'HUMADO', 'KWAKU BRIGHT', '0551259828', 'Male', '1997-04-30', '3', 'Ecowas Card', 'GHA-713836785-8', '2021-07-20', '2031-07-17', 'DRIVING', 'NONE', 'KPONE BARRIER', '0551259828', '4 YEARS', 3, 'None', 'None', 'None', 'None', 'KPONE TO BARRIER', 'BARRIER TO KPONE', 680445, '2024-04-22 09:55', '2024-04-22 09:55', 340059, '9d5a562eb00df4fe9f0b7567d8f7bddfa698c5c3'),
(28, 'GRE/BUS/2024/0000028', 1, '1snYyabyd1AYaVafmqMGa3WLacrARYeM0', 'Ms', 'OFORI', 'REGINA', '0552123239', 'Female', '1994-07-01', '3', 'Ecowas Card', 'GHA-722441607-9', '2020-03-20', '2030-03-19', 'TRADER ', 'NONE', 'TEMA COMMUNITY 5', '0535715303', '2 YEARS', 3, 'None', 'None', 'None', 'None', 'KPONE SCHOOL JUNCTION TO TEMA COM.1  FROM COM.1 TO TEMA COM5', 'SAME ROUNTINE', 680445, '2024-08-12 11:58', '2024-08-12 11:58', 340059, 'a6df742b451bbe8f2845b2165ea19ff4a53e5334'),
(29, 'GRE/BUS/2024/0000029', 1, '1qSFj3y-m1Qk2kqDRHufVxcN8Z4euP8uC', 'Ms', 'TETTEH', 'BERNICE', '0549433804', 'Female', '1986-02-12', '6', 'Ecowas Card', 'GHA-001160053-4', '2020-08-27', '2030-08-26', 'TRADER', 'A/123', 'KPONE SHANGHAI ', '0549433804', '10 YEARS', 3, 'None', 'None', 'None', 'None', 'KPONE  SHANGHAI TOUCH SKIES', 'SAME ROUTIN', 680445, '2024-08-12 13:51', '2024-08-12 13:51', 340059, 'db365e28e57e111f30ff705fd97ac7dff9eda3ae'),
(30, 'GRE/BUS/2024/0000030', 1, '1MChfl5-DFDOgLIl6j8A8pMcabN0WA5RN', 'Ms', 'FOSUA', 'AKOSUA PRISCILLA', '0558122675', 'Female', '1991-11-01', '1', 'Ecowas Card', 'GHA-713410056-8', '2019-06-26', '2029-06-25', 'ADEPA CLOTHES', 'NONE', 'NEW TOWN (BEIKRO BARACKS', '0558122675', 'ONE YEAR', 3, 'None', 'None', 'None', 'None', 'FROM BANKUMA AUTIE KATE TO BEIKRO BARACKS', 'SAME ROUNTIN', 680445, '2024-08-23 10:43', '2024-08-23 10:43', 340059, '996b66c9107cb0e1fb07184cf942e21a629530ab');

-- --------------------------------------------------------

--
-- Table structure for table `loan_payment`
--

CREATE TABLE `loan_payment` (
  `ID` bigint(20) NOT NULL,
  `CUSTOMERID` bigint(20) DEFAULT NULL,
  `LOANID` bigint(20) DEFAULT NULL,
  `AMOUNT` double NOT NULL,
  `POSTED_BY` int(11) NOT NULL,
  `DATE_NORMAL` varchar(200) NOT NULL,
  `DATE_CREATED` varchar(100) NOT NULL,
  `DATE_MODIFIED` varchar(100) DEFAULT NULL,
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_payment`
--

INSERT INTO `loan_payment` (`ID`, `CUSTOMERID`, `LOANID`, `AMOUNT`, `POSTED_BY`, `DATE_NORMAL`, `DATE_CREATED`, `DATE_MODIFIED`, `CCODE`, `HCODE`) VALUES
(1, 1, 1, 207, 680445, '2022-09-01 13:59', '2022-09-01 13:59', '2022-09-01 13:59', 340059, '14d9b8807267f613564c78dbc97cf54b7929e935'),
(2, 1, 1, 207, 680445, '2022-09-09 14:01', '2022-09-09 14:01', '2022-09-09 14:01', 340059, '6277e179a6ed0865e5dc803999dec0527b39c199'),
(3, 1, 1, 207, 680445, '2022-09-17 14:02', '2022-09-17 14:02', '2022-09-17 14:02', 340059, 'c200c14726066d640bf15cf3684aac63113c7dc6'),
(4, 1, 1, 207, 680445, '2022-09-26 14:02', '2022-09-26 14:02', '2022-09-26 14:02', 340059, 'd46a870eb3a27e098295161547c7f939c0432255'),
(5, 1, 1, 207, 680445, '2022-10-04 14:03', '2022-10-04 14:03', '2022-10-04 14:03', 340059, 'b032fe9bc4663e3bcdf6e44b923c4602deb1cf3e'),
(6, 1, 1, 207, 680445, '2022-10-10 14:04', '2022-10-10 14:04', '2022-10-10 14:04', 340059, '57b5bed020a45cd3efa9eb86a5735018b5018e60'),
(7, 1, 1, 213, 680445, '2022-10-18 14:05', '2022-10-18 14:05', '2022-10-18 14:05', 340059, '247990918abf32b242ee07bc4ae2be677fa7d907'),
(8, 1, 1, 400, 680445, '2022-10-28 14:05', '2022-10-28 14:05', '2022-10-28 14:05', 340059, '7c26c6e5a6ea46d684e3eafeabe0d888e049e1b2'),
(9, 1, 1, 625, 680445, '2022-11-03 14:06', '2022-11-03 14:06', '2022-11-03 14:06', 340059, '02d1eaec4669ceb02dc93b3583673eae62e4525f'),
(10, 2, 2, 105, 680445, '2023-03-24 15:16', '2023-03-24 15:16', '2023-03-24 15:16', 340059, '0e00953fd38a4c101472d18beb58f42df9924085'),
(11, 2, 2, 104, 680445, '2023-03-31 15:19', '2023-03-31 15:19', '2023-03-31 15:19', 340059, '9a0238e5b006d58cca70342ee5ac4fae97872b66'),
(12, 2, 2, 103, 680445, '2023-04-07 15:20', '2023-04-07 15:20', '2023-04-07 15:20', 340059, '57e7aa9d21e72a82e15ae51fec6258571657b62e'),
(13, 2, 2, 103, 680445, '2023-04-17 15:20', '2023-04-17 15:20', '2023-04-17 15:20', 340059, '6a3280d8b8cc744234627a372cb8552494742660'),
(14, 2, 2, 103, 680445, '2023-04-26 15:21', '2023-04-26 15:21', '2023-04-26 15:21', 340059, 'cb3cdfb14e690c4e52e99c56a92b35ac5d2706bd'),
(15, 2, 2, 103, 680445, '2023-05-05 15:21', '2023-05-05 15:21', '2023-05-05 15:21', 340059, '47df8c28793fff44098de20b2fe8b3d4791bc941'),
(16, 2, 2, 103, 680445, '2023-05-17 15:22', '2023-05-17 15:22', '2023-05-17 15:22', 340059, '27685fda9778a88480faadf5b4334e39b8ea34da'),
(17, 2, 2, 103, 680445, '2023-06-02 15:22', '2023-06-02 15:22', '2023-06-02 15:22', 340059, '1f5c70335b8737fcbb8bbcc56d366ab3f69e1028'),
(18, 2, 2, 103, 680445, '2023-06-13 15:23', '2023-06-13 15:23', '2023-06-13 15:23', 340059, '3a65abfa6344b6acba32dfe0c3f38d9be9a8ef14'),
(19, 2, 2, 103, 680445, '2023-06-26 15:23', '2023-06-26 15:23', '2023-06-26 15:23', 340059, 'db480747a8586a78b16043884881795c53ba2e26'),
(20, 2, 2, 103, 680445, '2023-07-10 15:25', '2023-07-10 15:25', '2023-07-10 15:25', 340059, 'c5deb666ce9d2972ef988e7a5d3d6e445c65ddef'),
(21, 3, 3, 207, 680445, '2024-03-05 15:54', '2024-03-05 15:54', '2024-03-05 15:54', 340059, '0280f8343fdd09c19fe920ff02902f564e945cdc'),
(22, 3, 3, 207, 680445, '2024-03-10 15:55', '2024-03-10 15:55', '2024-03-10 15:55', 340059, '180525ced7fb96928450a76b3464488bb6a791a0'),
(23, 3, 3, 207, 680445, '2024-03-17 15:56', '2024-03-17 15:56', '2024-03-17 15:56', 340059, 'b3e0b02e22e8e0d3489498c179d03fabe0979f67'),
(24, 3, 3, 207, 680445, '2024-03-24 15:57', '2024-03-24 15:57', '2024-03-24 15:57', 340059, 'f6ff4a88834822667a42f05344f4fb56288f7852'),
(25, 3, 3, 207, 680445, '2024-04-01 15:57', '2024-04-01 15:57', '2024-04-01 15:57', 340059, 'af1a21e08190dc30d116d55c6cc05f1b0e5aef20'),
(26, 3, 3, 207, 680445, '2024-04-10 15:58', '2024-04-10 15:58', '2024-04-10 15:58', 340059, '133fab01cb7bbc414421ad4efe734791db296956'),
(27, 3, 3, 207, 680445, '2024-04-16 15:58', '2024-04-16 15:58', '2024-04-16 15:58', 340059, 'faf1918e3ec780f4cedf1b9c6175cea93a92e65a'),
(28, 3, 3, 207, 680445, '2024-04-25 15:58', '2024-04-25 15:58', '2024-04-25 15:58', 340059, 'd39c36b581e04f2a0ec31ee10ae1e06d65fec1a6'),
(29, 3, 3, 207, 680445, '2024-04-28 15:59', '2024-04-28 15:59', '2024-04-28 15:59', 340059, '84aa665d51ac366cf920ae3cfebc5e48ff037fd4'),
(30, 3, 3, 207, 680445, '2024-05-04 16:00', '2024-05-04 16:00', '2024-05-04 16:00', 340059, 'fc8b6c22772eb2786372f767e9b9e61bfe87c915'),
(31, 3, 3, 207, 680445, '2024-05-16 16:01', '2024-05-16 16:01', '2024-05-16 16:01', 340059, '433b93e1d16dddcf16acd78fd94231f92c2d5b50'),
(32, 4, 4, 800, 680445, '2022-10-24 16:18', '2022-10-24 16:18', '2022-10-24 16:18', 340059, '5801b3ef89ff0f8107ce536d91dddf97e21d33c9'),
(33, 4, 4, 750, 680445, '2022-11-22 16:20', '2022-11-22 16:20', '2022-11-22 16:20', 340059, 'c93513d3b1262dc6563ad535da2a3d507840ba9f'),
(34, 4, 4, 930, 680445, '2022-11-12 16:21', '2022-11-12 16:21', '2022-11-12 16:21', 340059, '07e359a79ff344b7acb948a0c2a04f01d1d19599'),
(35, 4, 5, 1640, 680445, '2023-09-08 16:26', '2023-09-08 16:26', '2023-09-08 16:26', 340059, '8680d9394ec4a57bb6ce84adffd41b5a6dbcd850'),
(36, 4, 5, 1000, 680445, '2023-10-05 16:26', '2023-10-05 16:26', '2023-10-05 16:26', 340059, '2cec5d955999da8a1e11f0a20338706c316623e4'),
(37, 5, 6, 280, 680445, '2022-12-19 16:49', '2022-12-19 16:49', '2022-12-19 16:49', 340059, '91cd3a14b9ad51d745c9dea45059cf7c943c5797'),
(38, 5, 6, 400, 680445, '2023-01-12 16:50', '2023-01-12 16:50', '2023-01-12 16:50', 340059, '26fdd0d66d00877d8e21ad4a05caaf7a2fd57ddd'),
(39, 5, 6, 400, 680445, '2023-01-18 16:51', '2023-01-18 16:51', '2023-01-18 16:51', 340059, 'c5205abb36bfd57cfcf3a6120836d9e6939ba9cb'),
(40, 5, 6, 400, 680445, '2023-01-31 16:51', '2023-01-31 16:51', '2023-01-31 16:51', 340059, '6cc7d0eec38b2cd2096d4b3417d2878292b2542f'),
(41, 5, 6, 500, 680445, '2023-02-13 16:53', '2023-02-13 16:53', '2023-02-13 16:53', 340059, '0b8a0d736a179e173ceb294c8ea88b9b8b7816d5'),
(42, 5, 6, 500, 680445, '2023-03-03 16:54', '2023-03-03 16:54', '2023-03-03 16:54', 340059, 'd6d8b2f12bb33f59668d8a875d18c99a4dc81fcb'),
(43, 5, 7, 435, 680445, '2023-07-31 16:58', '2023-07-31 16:58', '2023-07-31 16:58', 340059, '76d02482355d3fad323297d0193b3609ffc4958a'),
(44, 5, 7, 435, 680445, '2023-08-14 16:59', '2023-08-14 16:59', '2023-08-14 16:59', 340059, '9ea45bfce1e207bbdf0c4efd15419a63b069e570'),
(45, 5, 7, 435, 680445, '2023-08-24 17:00', '2023-08-24 17:00', '2023-08-24 17:00', 340059, 'ce06318020b364c7a6c32d8a30552cfedd9976b0'),
(46, 5, 7, 700, 680445, '2023-10-19 17:00', '2023-10-19 17:00', '2023-10-19 17:00', 340059, 'e13f7e1f5e1266eb8fb8863c77edb88a66c2a54b'),
(47, 5, 7, 500, 680445, '2023-11-20 17:02', '2023-11-20 17:02', '2023-11-20 17:02', 340059, '362df0ffd96285eb81ed17f8ed78c2b1575f9d31'),
(48, 6, 8, 207, 680445, '2024-03-22 17:21', '2024-03-22 17:21', '2024-03-22 17:21', 340059, 'b39f5572b0cd6731fe3f8c1afd7598f3f2a46767'),
(49, 6, 8, 207, 680445, '2024-03-29 17:22', '2024-03-29 17:22', '2024-03-29 17:22', 340059, '59a6a302efd7b39f40cd8a163ba09e8d8071c8af'),
(50, 6, 8, 207, 680445, '2024-04-05 17:22', '2024-04-05 17:22', '2024-04-05 17:22', 340059, '015da92928530c1865e894bca79f44ee0bdc3a13'),
(51, 6, 8, 207, 680445, '2024-04-12 17:23', '2024-04-12 17:23', '2024-04-12 17:23', 340059, 'a3a0c9103eb795bbcd445cc558b7afea9c37275c'),
(52, 6, 8, 207, 680445, '2024-04-19 17:25', '2024-04-19 17:25', '2024-04-19 17:25', 340059, '596439abdaa04657a93b2a41172d6a92f8806715'),
(53, 6, 8, 207, 680445, '2024-04-26 17:25', '2024-04-26 17:25', '2024-04-26 17:25', 340059, '06d37eeb48976112e0420ddcec096e71d6475fb7'),
(54, 6, 8, 207, 680445, '2024-05-03 17:26', '2024-05-03 17:26', '2024-05-03 17:26', 340059, '26ddbede201722fecae09c5a4e4cfef12486080d'),
(55, 6, 8, 207, 680445, '2024-05-10 17:26', '2024-05-10 17:26', '2024-05-10 17:26', 340059, '2ddb34335eec67a328b295b2ccb801782ab0344c'),
(56, 6, 8, 207, 680445, '2024-05-17 17:28', '2024-05-17 17:28', '2024-05-17 17:28', 340059, '9cac21edd6419b1dfa2a9a512135eb98a26a4120'),
(57, 6, 8, 618, 680445, '2024-07-19 17:31', '2024-07-19 17:31', '2024-07-19 17:31', 340059, '11fd3160e7192aa09dd4b325f78b50baf38c350f'),
(58, 7, 9, 207, 680445, '2022-09-21 03:33', '2022-09-21 03:33', '2022-09-21 03:33', 340059, '0ebb130125a878b9ca2c49baf857432c01b0c062'),
(59, 7, 9, 207, 680445, '2022-09-24 03:34', '2022-09-24 03:34', '2022-09-24 03:34', 340059, '71479b8101da3b85f438f4afe7ca21394bc3dc77'),
(60, 7, 9, 207, 680445, '2022-10-03 03:35', '2022-10-03 03:35', '2022-10-03 03:35', 340059, '3cf3c3876bf7611ee0e6ef20746538823b86109f'),
(61, 7, 9, 207, 680445, '2022-10-11 03:35', '2022-10-11 03:35', '2022-10-11 03:35', 340059, '73bd1718ec765bbf7673538f26a982d130537215'),
(62, 7, 9, 207, 680445, '2022-10-17 03:35', '2022-10-17 03:35', '2022-10-17 03:35', 340059, 'a54657fee98bf6f483921642f6e7ef35df0605ce'),
(63, 7, 9, 207, 680445, '2022-10-26 03:36', '2022-10-26 03:36', '2022-10-26 03:36', 340059, '2bcea32c0484d0f430731fa09a0044beb7e442ca'),
(64, 7, 9, 207, 680445, '2022-10-31 03:36', '2022-10-31 03:36', '2022-10-31 03:36', 340059, '16595f3cee63e3f143a2e9307dd2107ca78632e6'),
(65, 7, 9, 207, 680445, '2022-11-08 03:37', '2022-11-08 03:37', '2022-11-08 03:37', 340059, '89dc37ebdd0b5b61be946bf9e4b7066b6716354c'),
(66, 7, 9, 207, 680445, '2022-11-16 03:37', '2022-11-16 03:37', '2022-11-16 03:37', 340059, '9a08c7a84a31aa63ff3a5ae003682a3804231768'),
(67, 7, 9, 207, 680445, '2022-11-22 03:38', '2022-11-22 03:38', '2022-11-22 03:38', 340059, '9c2f4969483fe2029c462bcfdc2f1663621fc531'),
(68, 7, 9, 413, 680445, '2022-11-29 03:42', '2022-11-29 03:42', '2022-11-29 03:42', 340059, 'f926145902611276c10b9952edf4667cc0701bf7'),
(69, 9, 10, 207, 680445, '2024-02-02 04:15', '2024-02-02 04:15', '2024-02-02 04:15', 340059, 'fe3e37d0666e77939b2fc22b9008c845ac3cb2d5'),
(70, 9, 10, 207, 680445, '2024-02-09 04:16', '2024-02-09 04:16', '2024-02-09 04:16', 340059, '35a5c113847e0e28edef17525d9ef8aa394d9f8a'),
(71, 9, 10, 207, 680445, '2024-02-16 04:16', '2024-02-16 04:16', '2024-02-16 04:16', 340059, '58938fa9d216f48a3281c9a1ad406d727f3cdbec'),
(72, 9, 10, 297, 680445, '2024-03-01 04:17', '2024-03-01 04:17', '2024-03-01 04:17', 340059, 'cbf659cf61ec0edd54e62a3b14c37b81f4e7bab6'),
(73, 9, 10, 828, 680445, '2024-04-25 04:18', '2024-04-25 04:18', '2024-04-25 04:18', 340059, '884efc9977299c40b7efc964a39bf0fd871d7e87'),
(74, 9, 10, 500, 680445, '2024-06-03 04:19', '2024-06-03 04:19', '2024-06-03 04:19', 340059, '58236a509645a0b49e681e5c566fb0b694be84cb'),
(75, 9, 10, 234, 680445, '2024-08-05 04:19', '2024-08-05 04:19', '2024-08-05 04:19', 340059, '0bc32198f82f8c29320a4ce66e2a88ebc892af14'),
(76, 10, 11, 207, 680445, '2023-06-26 04:33', '2023-06-26 04:33', '2023-06-26 04:33', 340059, 'c79209af02d78d601fbf43f135c95153f3caa245'),
(77, 10, 11, 207, 680445, '2023-06-30 04:34', '2023-06-30 04:34', '2023-06-30 04:34', 340059, '421e25de51bcfe74090c22e58f5d98c7366f2dfb'),
(78, 10, 11, 207, 680445, '2023-07-07 04:34', '2023-07-07 04:34', '2023-07-07 04:34', 340059, 'ffca1e0415e7b36b71f88a10386ffcc9951659d4'),
(79, 10, 11, 207, 680445, '2023-07-24 04:35', '2023-07-24 04:35', '2023-07-24 04:35', 340059, '9bc410130a8c68b9b6e0dcccd34da3f82d6971d2'),
(80, 10, 11, 207, 680445, '2023-07-29 04:35', '2023-07-29 04:35', '2023-07-29 04:35', 340059, '302c03c677b0df039415c317c6c8027ca0341793'),
(81, 10, 11, 207, 680445, '2023-08-07 04:36', '2023-08-07 04:36', '2023-08-07 04:36', 340059, '1827145c5b27f80b126e2af32946cb56e4ebd9e0'),
(82, 10, 11, 207, 680445, '2023-08-16 04:37', '2023-08-16 04:37', '2023-08-16 04:37', 340059, '0d5768ae58000c634095638f506e6c54e3f45767'),
(83, 10, 11, 207, 680445, '2023-08-23 04:37', '2023-08-23 04:37', '2023-08-23 04:37', 340059, '8494d19b50d7ce91bed3dff8d25bd28e091aa1c2'),
(84, 10, 11, 207, 680445, '2023-09-14 04:38', '2023-09-14 04:38', '2023-09-14 04:38', 340059, 'b9f422dd2fca9c4d067cde840382d4e64de3a378'),
(85, 10, 11, 410, 680445, '2023-09-26 04:40', '2023-09-26 04:40', '2023-09-26 04:40', 340059, '4dcda1f59ab8a63fc6af21babd739fc8005e63ad'),
(86, 10, 11, 207, 680445, '2023-12-23 04:41', '2023-12-23 04:41', '2023-12-23 04:41', 340059, '1a55f93f97f2d6bc83c89c32a3c446b97c43c5a2'),
(87, 11, 12, 600, 680445, '0023-07-27 16:52', '0023-07-27 16:52', '0023-07-27 16:52', 340059, '38342a5f57dd7682e002a679963c5b10cb3a24df'),
(88, 11, 12, 600, 680445, '0023-07-28 16:53', '0023-07-28 16:53', '0023-07-28 16:53', 340059, 'a794ddb7b84bfb8c44d1a476f30ca76f3b5f3441'),
(89, 12, 13, 207, 680445, '2023-11-03 16:59', '2023-11-03 16:59', '2023-11-03 16:59', 340059, 'c5a94998d14af54046766dd0d929a2432b88413d'),
(90, 12, 13, 207, 680445, '2023-11-17 17:00', '2023-11-17 17:00', '2023-11-17 17:00', 340059, '5549e52545053fdec79223e5aa5f84b74db09e03'),
(91, 12, 13, 207, 680445, '2023-11-27 17:00', '2023-11-27 17:00', '2023-11-27 17:00', 340059, '94b7d2d854e16e877f3f766aed8280ce543bcdc8'),
(92, 12, 13, 207, 680445, '2023-12-07 17:01', '2023-12-07 17:01', '2023-12-07 17:01', 340059, '68bc2b679d48fbca79650a5a5d3b5e37671b9daa'),
(93, 12, 13, 207, 680445, '2023-12-12 17:01', '2023-12-12 17:01', '2023-12-12 17:01', 340059, '3775bb40788dd86aa53671e6e6bf8223f4e919bf'),
(94, 12, 13, 207, 680445, '2023-12-15 17:02', '2023-12-15 17:02', '2023-12-15 17:02', 340059, '9dff4b9c3384ab567878e3889221516bbbd7b42f'),
(95, 12, 13, 207, 680445, '2024-01-29 17:02', '2024-01-29 17:02', '2024-01-29 17:02', 340059, 'e683c421ea8616c25141c22cf3999eb9c53c51a5'),
(96, 12, 13, 207, 680445, '2024-02-03 17:03', '2024-02-03 17:03', '2024-02-03 17:03', 340059, 'd6d79d81b19587bb3dcec0ada34a7a0ca19a1fbc'),
(97, 12, 13, 207, 680445, '2024-02-09 17:04', '2024-02-09 17:04', '2024-02-09 17:04', 340059, '90cceda11ac05a2b290b7a1a4d4878d566c4631d'),
(98, 12, 13, 207, 680445, '2024-03-01 17:05', '2024-03-01 17:05', '2024-03-01 17:05', 340059, 'f8bd9ee63ccc8ab315f36a2e7a29b61cdb632056'),
(99, 12, 13, 411, 680445, '2024-03-16 17:07', '2024-03-16 17:07', '2024-03-16 17:07', 340059, '98e0f67de688a490fb69a78e16a9d77408c2828f'),
(100, 13, 16, 207, 680445, '2024-02-16 03:48', '2024-02-16 03:48', '2024-02-16 03:48', 340059, '09df8a4af72541232e421ee42d9e5cad3382ef60'),
(101, 13, 16, 207, 680445, '2024-02-23 03:49', '2024-02-23 03:49', '2024-02-23 03:49', 340059, '04cf1e74d720f2037dabb7b1ec9f8356120391c7'),
(102, 13, 16, 207, 680445, '2024-03-01 03:49', '2024-03-01 03:49', '2024-03-01 03:49', 340059, '5dc4a764c071ba667ac5d9030b48d6ce643249bf'),
(103, 13, 16, 207, 680445, '2024-03-08 03:50', '2024-03-08 03:50', '2024-03-08 03:50', 340059, '161310fc14a67bdfc153dde18ea20cb7beadcd57'),
(104, 13, 16, 207, 680445, '2024-03-16 03:51', '2024-03-16 03:51', '2024-03-16 03:51', 340059, '4a074074ea25e58f7ca641df34c05b07bb77854e'),
(105, 13, 16, 207, 680445, '2024-03-22 03:51', '2024-03-22 03:51', '2024-03-22 03:51', 340059, '1761e0b5e53474e99b4cb0298e96aad39531b94c'),
(106, 13, 16, 207, 680445, '2024-04-05 03:52', '2024-04-05 03:52', '2024-04-05 03:52', 340059, '5cf47195c9931e32170db493caf45feefca95308'),
(107, 13, 16, 207, 680445, '2024-04-12 03:53', '2024-04-12 03:53', '2024-04-12 03:53', 340059, 'afedbd81af81d8fecce5aab89b21fefa480c5088'),
(108, 13, 16, 207, 680445, '2024-04-19 03:53', '2024-04-19 03:53', '2024-04-19 03:53', 340059, 'afbca8a92ed16e63b935b170929727e5e58f713f'),
(109, 13, 16, 207, 680445, '2024-04-26 03:54', '2024-04-26 03:54', '2024-04-26 03:54', 340059, '4d1f5b39124cb2f9edb4cf1e38c648e730663ef0'),
(110, 14, 14, 414, 680445, '2024-01-12 03:58', '2024-01-12 03:58', '2024-01-12 03:58', 340059, 'e6bb01c696f8694e550e04da3356229e31ff21e6'),
(111, 14, 14, 414, 680445, '2024-01-26 03:59', '2024-01-26 03:59', '2024-01-26 03:59', 340059, 'c34c8aaf5bc71ea4bcebcb6fcd753ab21708620e'),
(112, 14, 14, 300, 680445, '2024-02-09 04:00', '2024-02-09 04:00', '2024-02-09 04:00', 340059, 'ecfab50b8512dcc0e1d9baba9959271522a15928'),
(113, 14, 14, 414, 680445, '2024-02-23 04:00', '2024-02-23 04:00', '2024-02-23 04:00', 340059, '69b0cf110ebc91f2cd855ae320a10cffa7d9fa25'),
(114, 14, 14, 500, 680445, '2024-03-12 04:01', '2024-03-12 04:01', '2024-03-12 04:01', 340059, 'f45701d08ddf118c29cba6c8fb74f632191dee10'),
(115, 14, 14, 438, 680445, '2024-04-12 04:02', '2024-04-12 04:02', '2024-04-12 04:02', 340059, 'ec579a2ed98479568ea0efcb82f2965fb1f390a9'),
(116, 15, 15, 207, 680445, '2024-04-05 04:05', '2024-04-05 04:05', '2024-04-05 04:05', 340059, '644ef756793d7bda084efc27594b794999b1f0af'),
(117, 15, 15, 207, 680445, '2024-04-12 04:06', '2024-04-12 04:06', '2024-04-12 04:06', 340059, 'd1d4cb11f1c82a639f46363717dcde1680db9ac4'),
(118, 15, 15, 207, 680445, '2024-04-19 04:06', '2024-04-19 04:06', '2024-04-19 04:06', 340059, 'dea8ef6e0c5276c940b76effdea31b5ebc05f0cb'),
(119, 15, 15, 207, 680445, '2024-04-29 04:07', '2024-04-29 04:07', '2024-04-29 04:07', 340059, 'fcea22120e495f98c4296862060a05b05654d094'),
(120, 15, 15, 207, 680445, '2024-05-03 04:07', '2024-05-03 04:07', '2024-05-03 04:07', 340059, '18d85af9e666c95231b26235f733d8d74b4dfc57'),
(121, 15, 15, 207, 680445, '2024-05-10 04:08', '2024-05-10 04:08', '2024-05-10 04:08', 340059, '1f422f8e552f0f9fb9c47aa3a98c043f397a2398'),
(122, 15, 15, 207, 680445, '2024-05-20 04:08', '2024-05-20 04:08', '2024-05-20 04:08', 340059, 'b831788b03e456f456fd6c4aae7d83af5b1ae150'),
(123, 15, 15, 207, 680445, '2024-05-24 04:09', '2024-05-24 04:09', '2024-05-24 04:09', 340059, '3c0f3545c35bd130f526215a6962b2b9f5ba669a'),
(124, 15, 15, 207, 680445, '2024-06-03 04:09', '2024-06-03 04:09', '2024-06-03 04:09', 340059, '40f5b5d462cc27ad676411d357c845ec924e9538'),
(125, 15, 15, 207, 680445, '2024-06-10 04:10', '2024-06-10 04:10', '2024-06-10 04:10', 340059, 'd62d6009d74437ad67f15eb4f9b52a8e34c208a1'),
(126, 15, 15, 410, 680445, '2024-06-18 04:11', '2024-06-18 04:11', '2024-06-18 04:11', 340059, 'a455e773d656df6a12c01c6f41569d5c61ee0ac0'),
(127, 16, 17, 207, 680445, '2024-03-01 04:16', '2024-03-01 04:16', '2024-03-01 04:16', 340059, '4cd67e29c3211f4c2e0f3db07ad2ee9a54b24ea9'),
(128, 16, 17, 207, 680445, '2024-03-11 04:17', '2024-03-11 04:17', '2024-03-11 04:17', 340059, '6a72ba37ec3d7cb942b683a3d338a77fb9f9a0a1'),
(129, 16, 17, 414, 680445, '2024-03-22 04:17', '2024-03-22 04:17', '2024-03-22 04:17', 340059, '82b328b6b0da231498288f169738d03c6bc12b49'),
(130, 16, 17, 207, 680445, '2024-04-05 04:18', '2024-04-05 04:18', '2024-04-05 04:18', 340059, 'c6c095d95ec10601739b80715affa057f981133b'),
(131, 16, 17, 207, 680445, '2024-04-12 04:18', '2024-04-12 04:18', '2024-04-12 04:18', 340059, 'fea29d542ad1d112f8a2ad205878d25abca4fd78'),
(132, 16, 17, 207, 680445, '2024-04-19 04:19', '2024-04-19 04:19', '2024-04-19 04:19', 340059, 'a8f54f47532f5c507274d34a5121b985049b6f69'),
(133, 16, 17, 207, 680445, '2024-04-26 04:19', '2024-04-26 04:19', '2024-04-26 04:19', 340059, 'ddb575e710514613ec30fd60b645189056bf0a0a'),
(134, 16, 17, 207, 680445, '2024-05-03 04:20', '2024-05-03 04:20', '2024-05-03 04:20', 340059, '54dee475ba8343e8137b3745d46e175bf6ddc661'),
(135, 16, 17, 207, 680445, '2024-05-10 04:20', '2024-05-10 04:20', '2024-05-10 04:20', 340059, '706448d11dab5719cb20007401b345e957354fcc'),
(136, 16, 17, 410, 680445, '2024-05-17 04:21', '2024-05-17 04:21', '2024-05-17 04:21', 340059, 'dd7ce61bac564cb2ad66250915fe2ddb14455638'),
(137, 18, 19, 207, 680445, '2024-06-09 04:49', '2024-06-09 04:49', '2024-06-09 04:49', 340059, '536d402af1d3d913b2f992d41921181c36f8d648'),
(138, 18, 19, 207, 680445, '2024-06-16 04:50', '2024-06-16 04:50', '2024-06-16 04:50', 340059, 'fc833a23325f41b76938d66a96bbbbd9ddd00657'),
(139, 18, 19, 207, 680445, '2024-06-23 04:50', '2024-06-23 04:50', '2024-06-23 04:50', 340059, '5913cc6fb5265668f1f59790961345d1bcb2b898'),
(140, 18, 19, 207, 680445, '2024-06-30 04:51', '2024-06-30 04:51', '2024-06-30 04:51', 340059, 'e9e1e540b9741c26f2ae1832e513ce699594820e'),
(141, 18, 19, 207, 680445, '2024-07-07 04:51', '2024-07-07 04:51', '2024-07-07 04:51', 340059, '64219c06703ffa17cf8266303bbe89dec4fc2e7b'),
(142, 18, 19, 207, 680445, '2024-07-14 04:51', '2024-07-14 04:51', '2024-07-14 04:51', 340059, '92b64887761a494af2ed0ab2e054a3f1b83672a0'),
(143, 18, 19, 207, 680445, '2024-07-24 04:52', '2024-07-24 04:52', '2024-07-24 04:52', 340059, 'ec036f492f60e6c8bc5230dbc521c7edc215fcac'),
(144, 18, 19, 207, 680445, '2024-07-28 04:53', '2024-07-28 04:53', '2024-07-28 04:53', 340059, 'a75f2665ee05687a57fcc922df748d805328ea2d'),
(145, 18, 19, 207, 680445, '2024-08-08 04:53', '2024-08-08 04:53', '2024-08-08 04:53', 340059, '0ab197c148e1eee24584bb2f07ac485b354ca404'),
(146, 18, 19, 207, 680445, '2024-08-15 04:54', '2024-08-15 04:54', '2024-08-15 04:54', 340059, '4137c6dc71d90a36a06c3d2d2c322f218900fcbf'),
(147, 18, 19, 410, 680445, '2024-08-31 04:55', '2024-08-31 04:55', '2024-08-31 04:55', 340059, '000be6b85aa33ea9a989abe5c11dd96330884da3'),
(148, 19, 20, 207, 680445, '2024-02-23 05:07', '2024-02-23 05:07', '2024-02-23 05:07', 340059, '83581fa24a02c1a28e40b0b510df277adaee0202'),
(149, 19, 20, 207, 680445, '2024-03-01 05:08', '2024-03-01 05:08', '2024-03-01 05:08', 340059, '428e6d0ea13caed1189f1617b96242bc69cd3438'),
(150, 19, 20, 414, 680445, '2024-03-16 05:08', '2024-03-16 05:08', '2024-03-16 05:08', 340059, '77a4c662136e042937a48b997fc34cf2394c29ff'),
(151, 19, 20, 370, 680445, '2024-04-03 05:09', '2024-04-03 05:09', '2024-04-03 05:09', 340059, '992def497683669585b8b5a1bbf95aa6aabe22ec'),
(152, 19, 20, 1000, 680445, '2024-04-26 05:10', '2024-04-26 05:10', '2024-04-26 05:10', 340059, '5824c6bfafb59239c7e0a09542a723355208e1e9'),
(153, 19, 20, 282, 680445, '2024-05-03 05:11', '2024-05-03 05:11', '2024-05-03 05:11', 340059, 'ad02053664eec45b5f5cb4d03639b505e36405b2'),
(154, 19, 21, 414, 680445, '2024-05-17 05:16', '2024-05-17 05:16', '2024-05-17 05:16', 340059, '21ed5f4299b87426a7890a8976458133af275951'),
(155, 20, 22, 290, 680445, '2024-02-23 05:29', '2024-02-23 05:29', '2024-02-23 05:29', 340059, 'b1bae29b2db0b4db88a6c331167f2a2fc7f61da6'),
(156, 20, 22, 290, 680445, '2024-03-01 05:30', '2024-03-01 05:30', '2024-03-01 05:30', 340059, '58050bfb58b74ff6c04def485f222ee953b06e90'),
(157, 20, 22, 290, 680445, '2024-03-08 05:31', '2024-03-08 05:31', '2024-03-08 05:31', 340059, '5e6b69e56ee4b8ad38b432237c3bc91109080a20'),
(158, 20, 22, 290, 680445, '2024-03-15 05:31', '2024-03-15 05:31', '2024-03-15 05:31', 340059, '152540092bdfa5285a0435078055c37ed6b02f91'),
(159, 20, 22, 580, 680445, '2024-04-05 05:32', '2024-04-05 05:32', '2024-04-05 05:32', 340059, '4157febba4c274db95ddd0e63435c38f3b0b7fe5'),
(160, 20, 22, 740, 680445, '2024-04-12 05:33', '2024-04-12 05:33', '2024-04-12 05:33', 340059, '41a1eb1a73c88605f62052ea1792a9b4a18abf0e'),
(161, 20, 23, 517, 680445, '2024-04-22 05:39', '2024-04-22 05:39', '2024-04-22 05:39', 340059, 'fd2fe8ff48c3649c0df5f07abed300454b4651c2'),
(162, 20, 23, 517, 680445, '2024-05-14 05:39', '2024-05-14 05:39', '2024-05-14 05:39', 340059, '57693e77cc12c69cb7236d6ad57e180bb926063d'),
(163, 20, 23, 517, 680445, '2024-05-20 05:40', '2024-05-20 05:40', '2024-05-20 05:40', 340059, '79742b2af05699eb7bc32ce2d77beacd8526052d'),
(164, 21, 24, 207, 680445, '2024-02-23 05:51', '2024-02-23 05:51', '2024-02-23 05:51', 340059, '4a8f39b3abeb428f82c5e5752dbc2653425217c0'),
(165, 21, 24, 207, 680445, '2024-03-01 05:52', '2024-03-01 05:52', '2024-03-01 05:52', 340059, 'bf91750ee85ad925538d3ce7183f966fea09117d'),
(166, 21, 24, 207, 680445, '2024-03-08 05:52', '2024-03-08 05:52', '2024-03-08 05:52', 340059, '709da6176419a759b2b7638dc4c83c4081ee7431'),
(167, 21, 24, 414, 680445, '2024-03-22 05:53', '2024-03-22 05:53', '2024-03-22 05:53', 340059, 'b16d7d72461713862742487a64a3504c5a3b7c06'),
(168, 21, 24, 207, 680445, '2024-04-05 05:53', '2024-04-05 05:53', '2024-04-05 05:53', 340059, '78ef7e2aabfd77fbee72d6437ba800bf895eb297'),
(169, 21, 24, 207, 680445, '2024-04-12 05:54', '2024-04-12 05:54', '2024-04-12 05:54', 340059, 'c7586a363927c88c606a609621c030ce30916500'),
(170, 21, 24, 207, 680445, '2024-04-19 05:55', '2024-04-19 05:55', '2024-04-19 05:55', 340059, 'cf0541a05de25fa7318c46d170000335f375203d'),
(171, 21, 24, 207, 680445, '2024-04-26 05:55', '2024-04-26 05:55', '2024-04-26 05:55', 340059, '495220b9f96e3594479cf70ff4fd29f859f776fd'),
(172, 21, 24, 207, 680445, '2024-05-03 05:56', '2024-05-03 05:56', '2024-05-03 05:56', 340059, '884b6f74570864c80ad09d362519fc3e50ae349e'),
(173, 21, 24, 410, 680445, '2024-05-10 05:56', '2024-05-10 05:56', '2024-05-10 05:56', 340059, '2e4f6f5d38f667761d9ba4cbf062c9268240fb60'),
(174, 21, 25, 414, 680445, '2024-06-07 06:02', '2024-06-07 06:02', '2024-06-07 06:02', 340059, '2d8ab5b0d2062e070de22903994349fc174adc74'),
(175, 21, 25, 414, 680445, '2024-06-21 06:02', '2024-06-21 06:02', '2024-06-21 06:02', 340059, '79a8261d075c590f70037fa8c94297c95ff7c59d'),
(176, 21, 25, 414, 680445, '2024-06-28 06:03', '2024-06-28 06:03', '2024-06-28 06:03', 340059, '12b8930a43baef0c7c5bfdb18ac7b3216a6442a3'),
(177, 21, 25, 414, 680445, '2024-07-12 06:03', '2024-07-12 06:03', '2024-07-12 06:03', 340059, '3e9aace4fa23a09cc33bcc7ba95e1d28d1ab1967'),
(178, 21, 25, 414, 680445, '2024-07-19 06:04', '2024-07-19 06:04', '2024-07-19 06:04', 340059, '10e9416eb32e4457a270a409898fc70e0fa8208d'),
(179, 21, 25, 414, 680445, '0007-07-26 06:04', '0007-07-26 06:04', '0007-07-26 06:04', 340059, '88c204d29dce1c9193b3196b783c9503981c27f0'),
(180, 22, 26, 350, 680445, '2024-03-22 06:16', '2024-03-22 06:16', '2024-03-22 06:16', 340059, '28c87eb20a915d8d2aa42887b13efe19489db6ae'),
(181, 22, 26, 220, 680445, '2024-03-29 06:17', '2024-03-29 06:17', '2024-03-29 06:17', 340059, 'b13d85659eec1e4f2c60dc31c0dad0b70e1e6982'),
(182, 22, 26, 207, 680445, '2024-04-12 06:17', '2024-04-12 06:17', '2024-04-12 06:17', 340059, '3869a4a163b442edde483dc0498241ee87651aa2'),
(183, 22, 26, 207, 680445, '2024-04-26 06:18', '2024-04-26 06:18', '2024-04-26 06:18', 340059, 'd716958493adafc842870436124df839b6d25e20'),
(184, 22, 26, 207, 680445, '2024-05-17 06:19', '2024-05-17 06:19', '2024-05-17 06:19', 340059, 'dd37444359317f93f4f41ecd381757bba9ddb045'),
(185, 22, 26, 250, 680445, '2024-06-21 06:19', '2024-06-21 06:19', '2024-06-21 06:19', 340059, 'd061d0d6ea35af19bff1f524000901c1d3390035'),
(186, 22, 26, 207, 680445, '2024-07-05 06:20', '2024-07-05 06:20', '2024-07-05 06:20', 340059, 'cc41eba5736cc02f26b07bc60cfdc1b3641e7e30'),
(187, 22, 26, 207, 680445, '2024-07-23 06:20', '2024-07-23 06:20', '2024-07-23 06:20', 340059, '66818fba7bd0f5391c6063a1890bf803e4eb93bc'),
(188, 23, 27, 310, 680445, '2023-05-20 06:34', '2023-05-20 06:34', '2023-05-20 06:34', 340059, '0b8398f921b2d34a9357885eb2bfd7a89db3ef1a'),
(189, 23, 27, 310, 680445, '2023-05-29 06:34', '2023-05-29 06:34', '2023-05-29 06:34', 340059, 'c724aab10c089c652a32bfe93b928a641eb7982d'),
(190, 23, 27, 310, 680445, '2023-06-26 06:35', '2023-06-26 06:35', '2023-06-26 06:35', 340059, '5e85c0090cd261e9af42e4f79cd888570ae161e9'),
(191, 23, 27, 310, 680445, '2023-08-01 06:35', '2023-08-01 06:35', '2023-08-01 06:35', 340059, 'ec65df95813186bab648aa990ee9504a3f9ea35d'),
(192, 23, 27, 310, 680445, '2023-09-26 06:36', '2023-09-26 06:36', '2023-09-26 06:36', 340059, 'dcb7a0cf7235458044f988194771db2c0c18b840'),
(193, 23, 27, 310, 680445, '2023-10-04 06:36', '2023-10-04 06:36', '2023-10-04 06:36', 340059, '2a09fd9ab6263c857a15b7d552112aa66f82d399'),
(194, 18, 28, 310, 680445, '2023-10-04 06:58', '2023-10-04 06:58', '2023-10-04 06:58', 340059, '092924f48e43219970f68dedc7aab86c7dfa0741'),
(195, 18, 28, 310, 680445, '2023-10-13 06:59', '2023-10-13 06:59', '2023-10-13 06:59', 340059, '6dd6e93b772053cac35c288436614806ebfc464b'),
(196, 18, 28, 310, 680445, '2023-10-19 06:59', '2023-10-19 06:59', '2023-10-19 06:59', 340059, 'a845c4c02b394c88b5f8d66b9b3ac34a6b1d94d9'),
(197, 18, 28, 310, 680445, '2023-11-01 07:00', '2023-11-01 07:00', '2023-11-01 07:00', 340059, '8139c7c37311c9da3b16006fc864e2860f313596'),
(198, 18, 28, 2480, 680445, '2024-02-22 07:01', '2024-02-22 07:01', '2024-02-22 07:01', 340059, 'bd9a818f37894fdff64d298e9acc694d392417e4'),
(199, 16, 29, 414, 680445, '2024-07-05 07:08', '2024-07-05 07:08', '2024-07-05 07:08', 340059, 'cdbb91ad5616050ae050befd56afc5c781ede88c'),
(200, 16, 29, 414, 680445, '2024-07-12 07:08', '2024-07-12 07:08', '2024-07-12 07:08', 340059, '2f0c4acce02acef61e4541f44964684a0dc0f748'),
(201, 14, 30, 400, 680445, '2024-07-05 07:14', '2024-07-05 07:14', '2024-07-05 07:14', 340059, '37d01af3c60740422bc70bdef79607666c038155'),
(202, 14, 30, 400, 680445, '2024-07-19 07:14', '2024-07-19 07:14', '2024-07-19 07:14', 340059, '3c1511158b0680d3411255f2f83966c8544fd491'),
(203, 15, 31, 414, 680445, '2024-07-22 07:19', '2024-07-22 07:19', '2024-07-22 07:19', 340059, 'f7e71b5a048ad91cf97b023c9544eef22fca7fa3'),
(204, 15, 31, 828, 680445, '2024-08-06 07:20', '2024-08-06 07:20', '2024-08-06 07:20', 340059, 'd895d48f556e9d07936fb8758a2b0eeb5823cda2'),
(205, 24, 32, 155, 680445, '2024-05-28 07:59', '2024-05-28 07:59', '2024-05-28 07:59', 340059, '987e6f0eb8c3a35689a6fd5e8954a1c01818e758'),
(206, 24, 32, 155, 680445, '2024-06-03 08:00', '2024-06-03 08:00', '2024-06-03 08:00', 340059, 'a6a37907e1141f69251a6d04dfd9a0ff178980f7'),
(207, 24, 32, 155, 680445, '2024-06-07 08:01', '2024-06-07 08:01', '2024-06-07 08:01', 340059, '13bddd378de7fd127d01a5efd325b7a54ace4ffb'),
(208, 24, 32, 155, 680445, '2024-06-14 08:01', '2024-06-14 08:01', '2024-06-14 08:01', 340059, '3e23218706d4af651abae25c2261cf3be1fa5ee4'),
(209, 24, 32, 155, 680445, '2024-06-21 08:02', '2024-06-21 08:02', '2024-06-21 08:02', 340059, '42c26264c22356c46ba713d0baeec68f49da21e3'),
(210, 24, 32, 155, 680445, '2024-06-28 08:02', '2024-06-28 08:02', '2024-06-28 08:02', 340059, '2889bc0615abdd8b8c337ec2369cc3a5b0378f6c'),
(211, 24, 32, 155, 680445, '2024-07-05 08:02', '2024-07-05 08:02', '2024-07-05 08:02', 340059, '723a5b16b86d99eb89d8e6629ee0ce91a815143e'),
(212, 24, 32, 155, 680445, '2024-07-15 08:03', '2024-07-15 08:03', '2024-07-15 08:03', 340059, '1958174be5908633b6adb0c97b57b636932374ae'),
(213, 24, 32, 155, 680445, '2024-07-23 08:04', '2024-07-23 08:04', '2024-07-23 08:04', 340059, 'eeb61722401d6cebe349bad1cf69036cac0f2713'),
(214, 24, 32, 155, 680445, '2024-07-28 08:04', '2024-07-28 08:04', '2024-07-28 08:04', 340059, 'f906932509977a2d91150adc24856e0833eb31d5'),
(215, 25, 33, 620, 680445, '2023-02-10 08:14', '2023-02-10 08:14', '2023-02-10 08:14', 340059, '655504dd093e9421fafa6c2813c09b2479061d85'),
(216, 25, 33, 600, 680445, '2023-04-03 08:15', '2023-04-03 08:15', '2023-04-03 08:15', 340059, 'ca1361b23697e4f10b5d552d971672119dda726c'),
(217, 25, 33, 2500, 680445, '2023-12-12 08:16', '2023-12-12 08:16', '2023-12-12 08:16', 340059, '091570bbece85b86e2caf792ce4f1d9fa6a32ef5'),
(218, 26, 34, 930, 680445, '2023-04-26 08:32', '2023-04-26 08:32', '2023-04-26 08:32', 340059, '3db29495f9bf206be52c63336050bf759ce2c0af'),
(219, 26, 34, 930, 680445, '2023-05-16 08:32', '2023-05-16 08:32', '2023-05-16 08:32', 340059, 'ee3955405707fc240c8743030ed464ed13e9ab78'),
(220, 26, 34, 930, 680445, '2023-06-06 08:33', '2023-06-06 08:33', '2023-06-06 08:33', 340059, 'e8d2f9b99fc027bb1de1e3d4d543f0c6be27252b'),
(221, 26, 34, 930, 680445, '2023-06-21 08:33', '2023-06-21 08:33', '2023-06-21 08:33', 340059, 'f3d55a75c7db1b7cd2c2c8d5493ae1eec9a2887c'),
(222, 26, 35, 1242, 680445, '2023-11-30 08:38', '2023-11-30 08:38', '2023-11-30 08:38', 340059, '7cb2b1a7d58c7e7ee3e22ff7957a078909ead534'),
(223, 26, 35, 1242, 680445, '2024-02-02 08:39', '2024-02-02 08:39', '2024-02-02 08:39', 340059, 'c0d9b2cd1f9feda69a57717b85840fe0de1d5657'),
(224, 26, 35, 1242, 680445, '2024-03-08 08:40', '2024-03-08 08:40', '2024-03-08 08:40', 340059, '6f7e11d239a8dd62f335cd83a99b244d9420cd07'),
(225, 26, 36, 724, 680445, '2023-07-23 09:37', '2023-07-23 09:37', '2023-07-23 09:37', 340059, '9bd5e5b24eff1bcaf24e12ff078a99f5a0bee511'),
(226, 26, 36, 724, 680445, '2023-08-07 09:37', '2023-08-07 09:37', '2023-08-07 09:37', 340059, 'a42f278af4f449065ce43c98154bd8ecd7acf80b'),
(227, 26, 36, 724, 680445, '2023-08-11 09:38', '2023-08-11 09:38', '2023-08-11 09:38', 340059, 'ba29113793ca95b487cedcbadf75b576450bb558'),
(228, 26, 36, 724, 680445, '2023-08-25 09:39', '2023-08-25 09:39', '2023-08-25 09:39', 340059, 'f34b701642efeb05f14305c0417c44a51c692043'),
(229, 26, 36, 724, 680445, '2023-09-01 09:39', '2023-09-01 09:39', '2023-09-01 09:39', 340059, '6c6fce1b6635621c38ff964c9fc1a49db50476ee'),
(230, 26, 36, 724, 680445, '2023-09-17 09:39', '2023-09-17 09:39', '2023-09-17 09:39', 340059, 'b45c02928765e11f5a0beec01e954527ab491489'),
(231, 27, 37, 207, 680445, '2024-05-03 10:00', '2024-05-03 10:00', '2024-05-03 10:00', 340059, 'ddafc83b4b0df3ab065b4c3938f92e1c61c0e3f5'),
(232, 27, 37, 210, 680445, '2024-05-20 10:00', '2024-05-20 10:00', '2024-05-20 10:00', 340059, '1356415b8efc0cc64fc3de5cc52add964eae1b14'),
(233, 27, 37, 210, 680445, '2024-06-03 10:01', '2024-06-03 10:01', '2024-06-03 10:01', 340059, 'b5bc76c70ede88c7592342432df923d9d1f7bb5e'),
(234, 27, 37, 210, 680445, '2024-06-20 10:01', '2024-06-20 10:01', '2024-06-20 10:01', 340059, 'd9c7d805b1527eff7a1e2c02acef4d26264f37f8'),
(235, 27, 37, 403, 680445, '2024-07-23 10:02', '2024-07-23 10:02', '2024-07-23 10:02', 340059, '8036bbfd1e702146173e81ba36f2b0e57537816b'),
(236, 8, 38, 310, 680445, '2023-02-10 10:10', '2023-02-10 10:10', '2023-02-10 10:10', 340059, '50d3721de8be0cba04e0f64664325818c9d8a5e7'),
(237, 8, 38, 310, 680445, '2023-02-17 10:10', '2023-02-17 10:10', '2023-02-17 10:10', 340059, '3d37cbcec97c10902659b535738380e839777184'),
(238, 8, 38, 310, 680445, '2023-02-24 10:11', '2023-02-24 10:11', '2023-02-24 10:11', 340059, '42a0d37f7133212afa0ad7ab401f2fda06dacf11'),
(239, 8, 38, 310, 680445, '2023-03-03 10:11', '2023-03-03 10:11', '2023-03-03 10:11', 340059, '33537d23dd7213071aba8656f7f8d5da66ec7449'),
(240, 8, 38, 310, 680445, '2023-03-10 10:11', '2023-03-10 10:11', '2023-03-10 10:11', 340059, '87a0311f55ac72a620bc06b3ff1252b8faf6d518'),
(241, 8, 38, 310, 680445, '2023-03-27 10:12', '2023-03-27 10:12', '2023-03-27 10:12', 340059, '22d7ad32e6b7009b44b994b45112667502d6a265'),
(242, 8, 38, 1860, 680445, '2023-04-06 10:13', '2023-04-06 10:13', '2023-04-06 10:13', 340059, '8191f7871a42af75b8679b5b3e2718100b3ae3b5'),
(243, 8, 39, 984, 680445, '2023-05-08 10:19', '2023-05-08 10:19', '2023-05-08 10:19', 340059, 'de382d386e774bebab11e5495d4f11baa96d5d87'),
(244, 8, 39, 994, 680445, '2023-05-22 10:20', '2023-05-22 10:20', '2023-05-22 10:20', 340059, '40f1dd707d71f6ed7fa7cfe982e8bc8a80e091c2'),
(245, 8, 39, 988, 680445, '2023-06-29 10:21', '2023-06-29 10:21', '2023-06-29 10:21', 340059, '9ff8ce94d8c0394f1f2d737fefe152d008f24a82'),
(246, 26, 36, 724, 680445, '2023-09-25 16:39', '2023-09-25 16:39', '2023-09-25 16:39', 340059, 'a260666a73d6953709a07090c7ce3dbf905e0005'),
(247, 26, 36, 724, 680445, '2023-10-02 16:40', '2023-10-02 16:40', '2023-10-02 16:40', 340059, '977812519a616b4e79e274b7ba1fff9df9b58a58'),
(248, 26, 36, 724, 680445, '2023-10-06 16:40', '2023-10-06 16:40', '2023-10-06 16:40', 340059, 'b8cec7f8361521e40c17eb20220b990639e599b4'),
(249, 26, 36, 724, 680445, '2023-10-16 16:41', '2023-10-16 16:41', '2023-10-16 16:41', 340059, 'afa72ada0555c105de3566e13b38a88deff9e150'),
(250, 26, 36, 1440, 680445, '2023-10-23 16:42', '2023-10-23 16:42', '2023-10-23 16:42', 340059, '58884bfd9ab2e862aab62c60d1f439e8c08c1de6'),
(251, 19, 21, 420, 680445, '2024-05-28 17:29', '2024-05-28 17:29', '2024-05-28 17:29', 340059, 'b89ecfafdde32cfba9c1f99daf343d94640d4a14'),
(252, 19, 21, 420, 680445, '2024-06-07 17:30', '2024-06-07 17:30', '2024-06-07 17:30', 340059, '3943d252557526fc459e8ec96c9f096e858dd87a'),
(253, 19, 21, 800, 680445, '2024-06-20 17:31', '2024-06-20 17:31', '2024-06-20 17:31', 340059, '647825b1dd60b76e29c93190d352fc2b15c624e3'),
(254, 19, 21, 800, 680445, '2024-07-12 17:32', '2024-07-12 17:32', '2024-07-12 17:32', 340059, 'a532a091a934c25630c235e5e8f80caa01dc0808'),
(255, 17, 18, 540, 680445, '2024-04-11 12:37', '2024-04-11 12:37', '2024-04-11 12:37', 340059, 'df42ac471331b5f5003a95dc0be16e668977c920'),
(256, 17, 18, 540, 680445, '2024-05-07 12:37', '2024-05-07 12:37', '2024-05-07 12:37', 340059, 'e945d09b35582f4ac8bc03cd294a0f66bb939fe6'),
(257, 17, 18, 540, 680445, '2024-05-31 12:39', '2024-05-31 12:39', '2024-05-31 12:39', 340059, 'cb43818d6b0c180f2baec75ad9a23d38d551b58a'),
(258, 17, 18, 540, 680445, '2024-06-06 12:40', '2024-06-06 12:40', '2024-06-06 12:40', 340059, 'fbad6b4be305b441da668621ea0e73f2eec10927'),
(260, 3, 3, 203, 680445, '2024-07-01 14:02', '2024-07-01 14:02', '2024-07-01 14:02', 340059, 'eb18ffbfd9b46f2e50739affb033828ab60bb7c8'),
(261, 26, 35, 413, 680445, '2024-08-08 14:10', '2024-08-08 14:10', '2024-08-08 14:10', 340059, 'cc15e1916a13c8a3c6fb5dce31ea24ce65a46d9e'),
(262, 26, 35, 413, 680445, '2024-08-08 14:12', '2024-08-08 14:12', '2024-08-08 14:12', 340059, '332b95d5bbf37162049561aa686e2d6ca2abb1c1'),
(263, 26, 35, 408, 680445, '2024-08-08 14:13', '2024-08-08 14:13', '2024-08-08 14:13', 340059, 'b4f86e94ee6a6c7abd65fea4388568e4d0596eb0'),
(264, 2, 2, 103, 680445, '2024-08-08 14:16', '2024-08-08 14:16', '2024-08-08 14:16', 340059, '54c34dfe579cb8f1efbfb2536d2d5ec7a864891c'),
(265, 2, 2, 1, 680445, '2024-08-08 14:17', '2024-08-08 14:17', '2024-08-08 14:17', 340059, 'c3840268c848e5e415ada65cf78edb8b1e2d3019'),
(266, 4, 5, 1000, 680445, '2024-08-08 14:19', '2024-08-08 14:19', '2024-08-08 14:19', 340059, 'ddd4a70f85127719fa7f319752ba753a21b0b4ae'),
(267, 4, 5, 680, 680445, '2024-08-08 14:29', '2024-08-08 14:29', '2024-08-08 14:29', 340059, '9e1404491e5e7e639770681df5bd2444c8724186'),
(268, 4, 5, 640, 680445, '2024-08-08 14:30', '2024-08-08 14:30', '2024-08-08 14:30', 340059, 'c1b791fe9321caa72dd9414cb3ccb48e4af91cb3'),
(269, 5, 7, 975, 680445, '2024-08-08 14:32', '2024-08-08 14:32', '2024-08-08 14:32', 340059, '4cfaa8bad2c60b0ccd7a5a0e7c7673a5a6f695e8'),
(270, 13, 16, 410, 680445, '2024-08-09 17:14', '2024-08-09 17:14', '2024-08-09 17:14', 340059, '31fdc0b39903cb62413e1aa0f7dc7927bb9b5dab'),
(271, 24, 32, 310, 680445, '2024-08-12 15:40', '2024-08-12 15:40', '2024-08-12 15:40', 340059, 'd17a897c5ee6c028c6d7084e18d46fc94e3e56fc'),
(272, 15, 31, 414, 680445, '2024-08-13 13:25', '2024-08-13 13:25', '2024-08-13 13:25', 340059, '34392703522f8ee2c6a3bbd43f262303ba20e225'),
(273, 21, 25, 414, 680445, '2024-08-16 16:48', '2024-08-16 16:48', '2024-08-16 16:48', 340059, '215d25796771d4482624c0dd1bd912465448cb23'),
(274, 16, 29, 414, 680445, '2024-08-16 16:48', '2024-08-16 16:48', '2024-08-16 16:48', 340059, '9296a432e6dc78bdde67ed9d1e51ad070819a491'),
(275, 18, 41, 207, 680445, '2024-08-23 10:48', '2024-08-23 10:48', '2024-08-23 10:48', 340059, '211150279ec309d6d0460ddd3cc7e961eaa2e60f'),
(276, 29, 43, 207, 680445, '2024-08-23 13:43', '2024-08-23 13:43', '2024-08-23 13:43', 340059, 'c1a9faa2518d057ff792b24d62cacd198736dd68'),
(277, 15, 31, 414, 680445, '2024-08-23 13:54', '2024-08-23 13:54', '2024-08-23 13:54', 340059, '4a284e394ca157da183f32445e7592e89bd97752'),
(278, 28, 42, 207, 680445, '2024-08-23 15:30', '2024-08-23 15:30', '2024-08-23 15:30', 340059, 'e38187e8e458693e017c643d2fe65244967a347c'),
(279, 15, 31, 414, 680445, '2024-08-30 10:19', '2024-08-30 10:19', '2024-08-30 10:19', 340059, '50a065b451ca4683a3ab1a69eff2e638edb61e6b'),
(280, 18, 41, 207, 680445, '2024-08-30 10:28', '2024-08-30 10:28', '2024-08-30 10:28', 340059, '1057621a83e64bc0807a11c472230e7d5d3569a0'),
(281, 29, 43, 207, 680445, '2024-08-30 11:26', '2024-08-30 11:26', '2024-08-30 11:26', 340059, '29ccd85795248a25d30a781b3d4fd7361ebefaaa'),
(282, 28, 42, 207, 680445, '2024-08-30 17:01', '2024-08-30 17:01', '2024-08-30 17:01', 340059, '53e0516b1af32120f3583653e13d5c96169628a5'),
(283, 21, 25, 827, 680445, '2024-09-02 11:34', '2024-09-02 11:34', '2024-09-02 11:34', 340059, '66cdd5b28ea759c5d19622d183c578a5529f1059'),
(284, 18, 41, 207, 680445, '2024-09-06 10:08', '2024-09-06 10:08', '2024-09-06 10:08', 340059, 'f96b2f190e3394e6e2b9fa31c6ff3b84795cd437'),
(285, 29, 43, 207, 680445, '2024-09-06 10:09', '2024-09-06 10:09', '2024-09-06 10:09', 340059, 'f72cbdf059889cdac849646b71060fdd73458b68'),
(286, 15, 31, 414, 680445, '2024-09-06 10:10', '2024-09-06 10:10', '2024-09-06 10:10', 340059, 'b6dd7d7b24a1923a0df4031574ba12a4b02e1c6d'),
(287, 30, 44, 207, 680445, '2024-09-06 13:52', '2024-09-06 13:52', '2024-09-06 13:52', 340059, 'd1864e81096115d47399f6d4623218d5d9672569'),
(288, 19, 21, 800, 680445, '2024-09-06 13:54', '2024-09-06 13:54', '2024-09-06 13:54', 340059, 'c75969a7b9625c9233236d9f84be751955d382c2'),
(289, 28, 42, 207, 680445, '2024-09-10 06:14', '2024-09-10 06:14', '2024-09-10 06:14', 340059, 'cfe99be7383baa3e4496e3413e615e7ac9c84563'),
(290, 10, 46, 207, 680445, '2024-09-13 09:26', '2024-09-13 09:26', '2024-09-13 09:26', 340059, 'fafc202caff590de15344a5b2b6a84640fa2909d'),
(291, 29, 43, 207, 680445, '2024-09-13 12:28', '2024-09-13 12:28', '2024-09-13 12:28', 340059, 'c5553dce31d0f7729fd2d26d631ac15f96344ecf'),
(292, 18, 41, 207, 680445, '2024-09-13 15:50', '2024-09-13 15:50', '2024-09-13 15:50', 340059, '40696b0603e5475d8070f808691d4cf10274dc0e'),
(293, 15, 31, 414, 680445, '2024-09-13 15:51', '2024-09-13 15:51', '2024-09-13 15:51', 340059, '780f69c295881e8227f7bc18c4d119ad7e31484c'),
(294, 30, 44, 207, 680445, '2024-09-13 15:52', '2024-09-13 15:52', '2024-09-13 15:52', 340059, 'e44b458690c6bdbac0517124be26f3c1240cf93b'),
(295, 21, 25, 415, 680445, '2024-09-13 17:05', '2024-09-13 17:05', '2024-09-13 17:05', 340059, 'e7f637976094aa8124b7319c0b84d6acdb4ad54b'),
(296, 16, 29, 1242, 680445, '2024-09-13 17:08', '2024-09-13 17:08', '2024-09-13 17:08', 340059, 'dde9dbf260210faf0282eecf87cd14618d0096ee'),
(297, 6, 45, 207, 680445, '2024-09-16 12:07', '2024-09-16 12:07', '2024-09-16 12:07', 340059, 'c1feebd47742ac9e42ac3eb7bc4c0c87c15c97ab'),
(298, 29, 43, 207, 680445, '2024-09-20 08:26', '2024-09-20 08:26', '2024-09-20 08:26', 340059, 'f325d415947e517625358b0c3fde2ffaeece38b7'),
(299, 10, 46, 207, 680445, '2024-09-20 08:27', '2024-09-20 08:27', '2024-09-20 08:27', 340059, '48de035ef9cbca69b74f9dfe3024796c3e342c67'),
(300, 30, 44, 207, 680445, '2024-09-20 11:07', '2024-09-20 11:07', '2024-09-20 11:07', 340059, 'c45aa11f4dc51a40baa24c60ea265463ec8de26f'),
(301, 30, 44, 207, 680445, '2024-09-20 11:08', '2024-09-20 11:08', '2024-09-20 11:08', 340059, '2ea776be56f4fe37142f79d416feb9d7d4d73876'),
(302, 16, 29, 414, 680445, '2024-09-24 09:37', '2024-09-24 09:37', '2024-09-24 09:37', 340059, '6545edf8b954bf7ba1b7584ec43ea4cab1e4030e'),
(303, 18, 41, 207, 680445, '2024-09-24 09:38', '2024-09-24 09:38', '2024-09-24 09:38', 340059, '694ecb82089bf953bcff4ec24237942c74f44760'),
(304, 6, 45, 207, 680445, '2024-09-24 09:38', '2024-09-24 09:38', '2024-09-24 09:38', 340059, '2ef41f981e572efaeae3863451495bc41dff8284'),
(305, 15, 31, 414, 680445, '2024-09-25 14:31', '2024-09-25 14:31', '2024-09-25 14:31', 340059, '2dfef2c10aa9e87a37a7d297851c30daed7fc058'),
(306, 10, 46, 207, 680445, '2024-09-25 14:32', '2024-09-25 14:32', '2024-09-25 14:32', 340059, 'cf5c5e1ebd276f48c48bbadbf0588a1a055d250c'),
(307, 29, 43, 207, 680445, '2024-09-27 09:20', '2024-09-27 09:20', '2024-09-27 09:20', 340059, '458df7ab2e64c41043b6c14870f6bd766f753dfd'),
(308, 18, 41, 207, 680445, '2024-09-27 09:31', '2024-09-27 09:31', '2024-09-27 09:31', 340059, 'dd4d3bfc9534412947c77137a38a13df61a5533e'),
(309, 18, 41, 207, 680445, '2024-10-04 09:55', '2024-10-04 09:55', '2024-10-04 09:55', 340059, '29d4b273649336d88013ce18f39a9e80b795b2b5'),
(310, 10, 46, 207, 680445, '2024-10-04 09:57', '2024-10-04 09:57', '2024-10-04 09:57', 340059, '133846645acb70c3646841c682ad65338bf633f7'),
(311, 29, 43, 207, 680445, '2024-10-04 10:41', '2024-10-04 10:41', '2024-10-04 10:41', 340059, '713379122c2d3ae8acae3cad26723e80ed681793'),
(312, 16, 29, 414, 680445, '2024-10-04 16:22', '2024-10-04 16:22', '2024-10-04 16:22', 340059, '33b54a6721abb7dabddc7b38bcb438c20d70e802'),
(313, 15, 31, 414, 680445, '2024-10-04 16:23', '2024-10-04 16:23', '2024-10-04 16:23', 340059, '6bcb38b2b6cf1136654d9fda534b6b42841db80d'),
(314, 6, 45, 414, 680445, '2024-10-07 11:23', '2024-10-07 11:23', '2024-10-07 11:23', 340059, 'ac0fac7fe85048a6cf30e866b445ae0ca26e9c58'),
(315, 19, 21, 900, 680445, '2024-10-07 11:25', '2024-10-07 11:25', '2024-10-07 11:25', 340059, 'fd59f8d2871f0085607d19643f436aba1b3fedc4'),
(316, 10, 46, 207, 680445, '2024-10-11 10:37', '2024-10-11 10:37', '2024-10-11 10:37', 340059, '4193e709adfd1b776db6617bca58f5f0c2d8f5c1'),
(317, 29, 43, 207, 680445, '2024-10-11 10:37', '2024-10-11 10:37', '2024-10-11 10:37', 340059, '2b6429d4ec0c4ef25d74e008788bb88db50487a0'),
(318, 18, 41, 207, 680445, '2024-10-11 10:37', '2024-10-11 10:37', '2024-10-11 10:37', 340059, '23c07404499d737b5496701458a2c963fdab6a48');

-- --------------------------------------------------------

--
-- Table structure for table `loan_product_tb`
--

CREATE TABLE `loan_product_tb` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `CODE` int(11) NOT NULL,
  `MIN_AMOUNT` double DEFAULT NULL,
  `MAX_AMOUNT` double DEFAULT NULL,
  `FORM_FEE` double DEFAULT NULL,
  `PROCESSING_FEE` double DEFAULT NULL,
  `INTEREST` double DEFAULT NULL,
  `PENALTY` double NOT NULL,
  `DATE_CREATED` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `DATE_MODIFIED` varchar(200) NOT NULL,
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `loan_product_tb`
--

INSERT INTO `loan_product_tb` (`ID`, `NAME`, `CODE`, `MIN_AMOUNT`, `MAX_AMOUNT`, `FORM_FEE`, `PROCESSING_FEE`, `INTEREST`, `PENALTY`, `DATE_CREATED`, `DATE_MODIFIED`, `CCODE`, `HCODE`) VALUES
(1, 'Business Loan', 1000, 1000, 0, 200, 50, 0.08, 0.08, '2024-04-30 12:28', '2024-05-02 02:28:17pm', 340059, 'aa12d6bd9ea6ff446e444da3e4f3e620b0d8b297'),
(4, 'Salary Advance', 1002, 2000, 10000, 100, 100, 30, 866.67, '2024-07-18 20:08', '2024-07-18 20:08', 377586, '10b92e15250ac46c4e6bd5ca04137f7a59105b2b'),
(5, 'student loan', 1003, 1000, 5000, 20, 50, 3.5, 0.45, '2024-07-22 12:56', '2024-07-22 12:56', 377586, '25993a0ef4df7472814b401864378a290739b038');

-- --------------------------------------------------------

--
-- Table structure for table `loan_tb`
--

CREATE TABLE `loan_tb` (
  `ID` bigint(20) NOT NULL,
  `CODE` int(11) NOT NULL,
  `ACCOUNT_NO` varchar(100) NOT NULL,
  `LOAN_PRODUCT_CODE` int(11) DEFAULT NULL,
  `AMOUNT` double NOT NULL,
  `INTEREST` double DEFAULT NULL,
  `TOTAL` double DEFAULT NULL,
  `REPAYMENT` double DEFAULT NULL,
  `PENALTY` double NOT NULL,
  `COLAT` longtext NOT NULL,
  `LOAN_PERIOD` varchar(100) DEFAULT NULL,
  `CAPACITY` int(11) NOT NULL COMMENT '1:1 Week 2:2 Weeks',
  `DAYS_LEFT` varchar(100) DEFAULT NULL,
  `STATUS` int(11) NOT NULL COMMENT '0:Active 1:Pending 2:Declined 3:Matured',
  `REPAY_STATUS` int(11) NOT NULL COMMENT '0:Complete 1:Pending',
  `DATE_CREATED` varchar(200) NOT NULL,
  `DATE_APPROVE` varchar(200) NOT NULL,
  `DATE_MATURE` varchar(200) DEFAULT NULL,
  `DATE_MODIFIED` varchar(200) DEFAULT NULL,
  `POSTED_BY` int(11) NOT NULL,
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `loan_tb`
--

INSERT INTO `loan_tb` (`ID`, `CODE`, `ACCOUNT_NO`, `LOAN_PRODUCT_CODE`, `AMOUNT`, `INTEREST`, `TOTAL`, `REPAYMENT`, `PENALTY`, `COLAT`, `LOAN_PERIOD`, `CAPACITY`, `DAYS_LEFT`, `STATUS`, `REPAY_STATUS`, `DATE_CREATED`, `DATE_APPROVE`, `DATE_MATURE`, `DATE_MODIFIED`, `POSTED_BY`, `CCODE`, `HCODE`) VALUES
(1, 1000, 'GRE/BUS/2024/000001', 1000, 2000, 480, 2480, 0, 0, 'CONTAINER', '3', 1, '90', 0, 0, '2022-08-22 13:56', '2024-08-05', '2024-11-3', '2024-08-07 18:11', 680445, 340059, 'e7d1efe6696d1ee66263b1ac575791dfb93eebdb'),
(2, 1001, 'GRE/BUS/2024/000002', 1000, 1000, 240, 1240, 0, 0, 'KIOSK', '3', 1, '90', 0, 0, '2022-09-12 15:10', '2024-08-05', '2024-11-3', '2024-08-08 14:16', 680445, 340059, '0063d8fb697e0fa2e9e3ea3163e7e18734f7dd27'),
(3, 1002, 'GRE/BUS/2024/000003', 1000, 2000, 480, 2480, 0, 0, 'LAND', '3', 1, '90', 0, 0, '2024-04-22 15:52', '2024-08-05', '2024-11-3', '2024-08-08 14:00', 680445, 340059, '419c9deecff7d08995840084230602a3af756b3d'),
(4, 1003, 'GRE/BUS/2024/000004', 1000, 2000, 480, 2480, 0, 0, 'HOUSE', '3', 1, '90', 0, 0, '2022-09-02 16:15', '2024-08-05', '2024-11-3', '2024-08-07 16:22', 680445, 340059, 'd27c8f687fb7964c55d28f7313eef0ce1a84b33d'),
(5, 1004, 'GRE/BUS/2024/000004', 1000, 4000, 960, 4960, 0, 0, 'HOUSE', '3', 1, '90', 0, 0, '2023-07-08 16:22', '2024-08-05', '2024-11-3', '2024-08-08 14:29', 680445, 340059, '7bf844efda704ceee622c971dfc4fb334e6a142c'),
(6, 1005, 'GRE/BUS/2024/000005', 1000, 2000, 480, 2480, 0, 0, 'CONTAINER', '3', 1, '90', 0, 0, '2022-12-05 16:46', '2024-08-05', '2024-11-3', '2024-08-07 16:22', 680445, 340059, 'ce1e9e8724a32f5ef3453b190050413a3126a5a2'),
(7, 1006, 'GRE/BUS/2024/000005', 1000, 3000, 480, 3480, 0, 0, 'CONTAINER', '2', 1, '60', 0, 0, '2023-07-13 16:56', '2024-08-05', '2024-10-4', '2024-08-08 14:30', 680445, 340059, '2f8f204c8adbc110916d456c545b352427546200'),
(8, 1007, 'GRE/BUS/2024/000006', 1000, 2000, 480, 2480, 0, 0, 'CONTAINER', '3', 1, '90', 0, 0, '2024-02-22 17:19', '2024-08-05', '2024-11-3', '2024-08-07 18:01', 680445, 340059, 'd861322d0b532168fb410231cbdf317e095e4d1d'),
(9, 1008, 'GRE/BUS/2024/000007', 1000, 2000, 480, 2480, 0, 0, 'STORE NEAR KPONE KKMA', '3', 1, '90', 0, 0, '2022-09-01 03:31', '2024-08-06', '2024-11-4', '2024-08-07 16:23', 680445, 340059, '1f575c88d994387fb567d30c637cdc46357b0301'),
(10, 1009, 'GRE/BUS/2024/000009', 1000, 2000, 480, 2480, 0, 0, 'CONTAINER ', '3', 1, '90', 0, 0, '2024-01-18 04:12', '2024-08-06', '2024-11-4', '2024-08-07 16:22', 680445, 340059, '7409e4db21cec7f55157889f5c51fe32de64535f'),
(11, 1010, 'GRE/BUS/2024/0000010', 1000, 2000, 480, 2480, 0, 0, 'CONTAINER', '3', 1, '90', 0, 0, '2023-06-12 04:31', '2024-08-06', '2024-11-4', '2024-08-07 18:01', 680445, 340059, 'fa9be058d57e5495f6c9ffdb072ed579711dfb92'),
(12, 1011, 'GRE/BUS/2024/0000011', 1000, 2000, 480, 2480, 0, 0, 'shop', '3', 1, '90', 0, 1, '2023-05-16 16:49', '2024-08-06', '2024-11-4', '2024-10-11 10:37', 680445, 340059, 'd2549645bb1f8ee379de678cb24d1cee0fe3729d'),
(13, 1012, 'GRE/BUS/2024/0000012', 1000, 2000, 480, 2480, 0, 0, 'MOTORCYCLE (PRAYAH)', '3', 1, '90', 0, 0, '2023-10-18 16:54', '2024-08-06', '2024-11-4', '2024-08-07 16:23', 680445, 340059, 'ca9e9501c99a084f9c7c832c5556754b2511a254'),
(14, 1013, 'GRE/BUS/2024/0000014', 1000, 2000, 480, 2480, 0, 0, 'taxi', '3', 1, '90', 0, 0, '2023-12-11 17:09', '2024-08-07', '2024-11-5', '2024-08-07 16:22', 680445, 340059, 'e783980dc2bad502200cb88d016c3c47b8424593'),
(15, 1014, 'GRE/BUS/2024/0000015', 1000, 2000, 480, 2480, 0, 0, 'NONE', '3', 1, '90', 0, 0, '2024-03-26 18:00', '2024-08-07', '2024-11-5', '2024-08-07 16:22', 680445, 340059, '3429929a7d285c047049cccbe47efe1beacdc040'),
(16, 1015, 'GRE/BUS/2024/0000013', 1000, 2000, 480, 2480, 0, 0, 'store', '3', 1, '90', 0, 0, '2024-02-01 03:42', '2024-08-07', '2024-11-5', '2024-08-09 17:13', 680445, 340059, 'c91cd1c9772e43a607691fb9df136636204ac556'),
(17, 1016, 'GRE/BUS/2024/0000016', 1000, 2000, 480, 2480, 0, 0, 'popcorn machine', '3', 1, '90', 0, 0, '2024-02-19 04:13', '2024-08-07', '2024-11-5', '2024-08-07 16:22', 680445, 340059, '1e6836120e257595302ac50b641f70bdeb50fded'),
(18, 1017, 'GRE/BUS/2024/0000017', 1000, 2000, 160, 2160, 0, 0, 'hair drier', '1', 1, '30', 0, 0, '2024-03-11 04:23', '2024-08-08', '2024-9-7', '2024-08-08 12:39', 680445, 340059, '73bd1f7ea5c7b109f2cebe68428bdc39ae77e03e'),
(19, 1018, 'GRE/BUS/2024/0000018', 1000, 2000, 480, 2480, 0, 0, 'CONTAINER', '3', 1, '90', 0, 0, '2023-05-29 04:47', '2024-08-07', '2024-11-5', '2024-08-07 16:22', 680445, 340059, '9b1ef5abb9572646f9ee6aca3a4c0fd21e7b34eb'),
(20, 1019, 'GRE/BUS/2024/0000019', 1000, 2000, 480, 2480, 0, 0, 'NONE', '3', 1, '90', 0, 0, '2024-02-12 05:05', '2024-08-07', '2024-11-5', '2024-08-07 16:22', 680445, 340059, '43b0cec63e5196abf7975a611d25bcdeff595d98'),
(21, 1020, 'GRE/BUS/2024/0000019', 1000, 4000, 960, 4960, 0, 0, 'NONE', '3', 1, '90', 0, 1, '2024-06-05 05:13', '2024-08-07', '2024-11-5', '2024-10-11 10:37', 680445, 340059, '09a67c2f01d895b8f3dce0f241f83a317958b6b0'),
(22, 1021, 'GRE/BUS/2024/0000020', 1000, 2000, 480, 2480, 0, 0, 'CONTAINER ', '3', 1, '90', 0, 0, '2024-02-15 05:26', '2024-08-07', '2024-11-5', '2024-08-07 16:22', 680445, 340059, 'a293f26800ba73902027e1361805af7aecddfc5f'),
(23, 1022, 'GRE/BUS/2024/0000020', 1000, 5000, 1200, 6200, 0, 0, 'CONTAINER', '3', 1, '90', 0, 1, '2024-04-15 05:35', '2024-08-07', '2024-11-5', '2024-10-11 10:37', 680445, 340059, '4cd3353dc38739af28bc39102b58773dbf8d2024'),
(24, 1023, 'GRE/BUS/2024/0000021', 1000, 2000, 480, 2480, 0, 0, 'SPARE PART CONTAINER', '3', 1, '90', 0, 0, '2024-02-14 05:49', '2024-08-07', '2024-11-5', '2024-08-07 16:22', 680445, 340059, '7359a57422e72ed2e3e86320b99048e7e46f5f3a'),
(25, 1024, 'GRE/BUS/2024/0000021', 1000, 4000, 960, 4960, 0, 0, 'SPARE PART SHOP ', '3', 1, '90', 0, 1, '2024-05-24 06:00', '2024-08-07', '2024-11-5', '2024-10-11 10:37', 680445, 340059, '30408dfb870fc9bdd139d40438b9a4ea2d0e1f14'),
(26, 1025, 'GRE/BUS/2024/0000022', 1000, 2000, 480, 2480, 0, 0, 'STORE', '3', 1, '90', 0, 1, '2024-03-05 06:13', '2024-08-07', '2024-11-5', '2024-10-11 10:37', 680445, 340059, '7e1be7b36f2152a8f4c09668aed48785c6c9ce70'),
(27, 1026, 'GRE/BUS/2024/0000023', 1000, 3000, 720, 3720, 0, 0, 'CAR (TAXI', '3', 1, '90', 0, 1, '2023-05-11 06:32', '2024-08-07', '2024-11-5', '2024-10-11 10:37', 680445, 340059, '99d943ac4e96232ebe6e42428dd3f17972b450bf'),
(28, 1027, 'GRE/BUS/2024/0000018', 1000, 3000, 720, 3720, 0, 0, 'CONTAINER', '3', 1, '90', 0, 0, '2023-12-09 06:38', '2024-08-07', '2024-11-5', '2024-08-07 16:22', 680445, 340059, 'c39c98e2271ce4f8917ad6ca6ee86b876d1d98a2'),
(29, 1028, 'GRE/BUS/2024/0000016', 1000, 4000, 960, 4960, 0, 0, 'DEEP FREEZER', '3', 1, '90', 0, 1, '2024-06-24 07:04', '2024-08-07', '2024-11-5', '2024-10-11 10:37', 680445, 340059, 'f3f7bd16c6a7680a5843374d5cc936090f9e5f0f'),
(30, 1029, 'GRE/BUS/2024/0000014', 1000, 2000, 480, 2480, 0, 0, 'TAXI', '3', 1, '90', 0, 1, '2024-05-20 07:11', '2024-08-07', '2024-11-5', '2024-10-11 10:37', 680445, 340059, 'dc97cdabab8ae0d2f8257b63e3fac430cb9ef688'),
(31, 1030, 'GRE/BUS/2024/0000015', 1000, 4000, 960, 4960, 0, 0, 'NONE', '3', 1, '90', 0, 1, '2024-08-11 07:16', '2024-08-07', '2024-11-5', '2024-10-11 10:37', 680445, 340059, '5d54157554338c78a193775adf42145b897f61a0'),
(32, 1031, 'GRE/BUS/2024/0000024', 1000, 1500, 360, 1860, 0, 0, 'MOTORCYCLE (PRAGYA', '3', 1, '90', 0, 0, '2024-05-13 07:39', '2024-08-07', '2024-11-5', '2024-08-12 15:40', 680445, 340059, 'f06cdf91f3b8cf008fadf022094ed2f9af4d57b1'),
(33, 1032, 'GRE/BUS/2024/0000025', 1000, 3000, 720, 3720, 0, 0, 'WELDING MACHINE', '3', 1, '90', 0, 0, '2023-01-27 08:12', '2024-08-07', '2024-11-5', '2024-08-07 16:22', 680445, 340059, '5284413305419aae54a1c37c59c876231634f612'),
(34, 1033, 'GRE/BUS/2024/0000026', 1000, 3000, 720, 3720, 0, 0, 'NONE', '3', 1, '90', 0, 0, '2023-03-07 08:28', '2024-08-07', '2024-11-5', '2024-08-07 16:22', 680445, 340059, 'bb5a58f0e61cdffa0e39ebead7faf275649ca4c5'),
(35, 1034, 'GRE/BUS/2024/0000026', 1000, 4000, 960, 4960, 0, 0, 'CAR', '3', 1, '90', 0, 0, '2023-11-20 08:35', '2024-08-07', '2024-11-5', '2024-08-08 14:13', 680445, 340059, 'ff8c495430833461c75d032f5193449e6963950b'),
(36, 1035, 'GRE/BUS/2024/0000026', 1000, 7000, 1680, 8680, 0, 0, 'CAR', '3', 1, '90', 0, 0, '2023-07-13 09:33', '2024-08-07', '2024-11-5', '2024-08-07 16:41', 680445, 340059, '1ddeb332e5be1a51e4c86f66a6efeaf0f57efc6b'),
(37, 1036, 'GRE/BUS/2024/0000027', 1000, 1000, 240, 1240, 0, 0, 'WASHING MACHINE', '3', 2, '90', 0, 0, '2024-04-22 09:57', '2024-08-07', '2024-11-5', '2024-08-07 16:22', 680445, 340059, 'fbf85c076c9eed98691edd65bc92a55585dc65c9'),
(38, 1037, 'GRE/BUS/2024/000008', 1000, 3000, 720, 3720, 0, 0, 'NONE', '3', 1, '90', 0, 0, '2023-01-28 10:08', '2024-08-07', '2024-11-5', '2024-08-07 16:22', 680445, 340059, 'f698b2712bd1d938b00497766c2d515a1a574991'),
(39, 1038, 'GRE/BUS/2024/000008', 1000, 8000, 1920, 9920, 0, 0, 'PREPAID MACHINE', '3', 1, '90', 0, 1, '2023-04-11 10:15', '2024-08-07', '2024-11-5', '2024-10-11 10:37', 680445, 340059, '727a17a9fc6a9930e8a8d99acb8e13607be3b2f4'),
(40, 1039, 'GRE/BUS/2024/0000017', 1000, 3000, 720, 3720, 0, 0, 'HAIR DRIER', '3', 1, '90', 0, 1, '2024-06-10 12:41', '2024-08-08', '2024-11-6', '2024-10-11 10:37', 680445, 340059, 'a5f7dde5fd1a3786bc66989db17e5aade409770d'),
(41, 1040, 'GRE/BUS/2024/0000018', 1000, 2000, 480, 2480, 0, 0, 'CONTAINER (AMARK PHONE REPAIRES)', '3', 1, '90', 0, 1, '2024-08-12 10:40', '2024-08-12', '2024-11-10', '2024-10-11 10:37', 680445, 340059, '437d1712474e64d0ceed14e415356c8b451c8500'),
(42, 1041, 'GRE/BUS/2024/0000028', 1000, 2000, 480, 2480, 0, 0, 'HOME USE ACCESSARIES CONTAINER ', '3', 1, '90', 0, 1, '2024-08-12 12:00', '2024-08-12', '2024-11-10', '2024-10-11 10:37', 680445, 340059, 'de43d9d2c7de017d628d0877684b2792cb60a544'),
(43, 1042, 'GRE/BUS/2024/0000029', 1000, 2000, 480, 2480, 0, 0, '  CONTAINER (KITCHEN SET) ', '3', 1, '90', 0, 1, '2024-08-12 13:59', '2024-08-12', '2024-11-10', '2024-10-11 10:37', 680445, 340059, 'a72d8dd4fbc559b832d6a7302726722489c287cf'),
(44, 1043, 'GRE/BUS/2024/0000030', 1000, 2000, 480, 2480, 0, 0, 'ADEPA CLOTHE (CONTAINER)', '3', 1, '90', 0, 1, '2024-08-23 10:45', '2024-08-23', '2024-11-21', '2024-10-11 10:37', 680445, 340059, '6128e9f51a674b3eab633125bbb752a5c56ac7d7'),
(45, 1044, 'GRE/BUS/2024/000006', 1000, 2000, 480, 2480, 0, 0, 'container (sika avenue', '3', 1, '90', 0, 1, '2024-09-02 11:06', '2024-09-04', '2024-12-3', '2024-10-11 10:37', 680445, 340059, '15ec68a8ba8b9aee7cad06fe7c0332f970255f83'),
(46, 1045, 'GRE/BUS/2024/0000010', 1000, 2000, 480, 2480, 0, 0, 'REFRIGERATOTR', '3', 1, '90', 0, 1, '2024-09-04 13:36', '2024-09-04', '2024-12-3', '2024-10-11 10:37', 680445, 340059, 'bf899652d1c1a5f4a599068a686140edb7023ec7');

-- --------------------------------------------------------

--
-- Table structure for table `momo_trans_tb`
--

CREATE TABLE `momo_trans_tb` (
  `ID` int(11) NOT NULL,
  `DEPOSIT` varchar(200) NOT NULL,
  `DEPOSIT_COMM` varchar(200) DEFAULT NULL,
  `CASHOUT` varchar(200) NOT NULL,
  `CASHOUT_COMM` varchar(200) DEFAULT NULL,
  `POSTED_BY` int(11) DEFAULT NULL,
  `DATE_CREATED` varchar(200) NOT NULL,
  `DATE_MODIFIED` varchar(50) DEFAULT NULL,
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `month_tb`
--

CREATE TABLE `month_tb` (
  `ID` int(11) NOT NULL,
  `MONTHCODE` varchar(50) NOT NULL,
  `CODE` varchar(50) NOT NULL,
  `SELECTION` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `no_account_tb`
--

CREATE TABLE `no_account_tb` (
  `ID` int(11) NOT NULL,
  `CLIENT_ID` int(11) DEFAULT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `occupation_tb`
--

CREATE TABLE `occupation_tb` (
  `ID` int(11) NOT NULL,
  `OCCUPATION` varchar(200) NOT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `occupation_tb`
--

INSERT INTO `occupation_tb` (`ID`, `OCCUPATION`, `DATE_CREATED`, `CCODE`, `HCODE`) VALUES
(1, 'Teacher', '2020-10-19 12:05:16', 0, ''),
(2, 'Farmer', '2020-10-19 12:05:16', 0, ''),
(3, 'Nurse', '2020-10-19 12:05:16', 0, ''),
(4, 'Lawyer', '2020-10-19 12:05:16', 0, ''),
(5, 'Police', '2020-10-19 12:05:16', 0, ''),
(6, 'Soldier', '2020-10-19 12:05:16', 0, ''),
(7, 'Trader', '2020-10-19 12:05:16', 0, ''),
(8, 'Artisan', '2020-10-19 12:05:16', 0, ''),
(9, 'Doctor', '2020-10-19 12:05:16', 0, ''),
(10, 'Aboboyaa rider', '2020-10-19 12:05:16', 0, ''),
(11, 'Okada rider', '2020-10-19 12:05:16', 0, ''),
(12, 'Mason', '2020-10-19 12:55:31', 0, ''),
(14, 'Hairdresser', '2020-10-20 13:11:37', 0, ''),
(15, 'Seamstress', '2020-10-20 13:12:28', 0, ''),
(16, 'Welder', '2020-10-20 13:13:00', 0, ''),
(17, 'Driver', '2020-10-20 13:13:31', 0, ''),
(18, 'Store Attendent', '2020-10-24 14:56:56', 0, ''),
(19, 'Barber', '2020-10-24 15:02:05', 0, ''),
(20, 'Electrician', '2020-10-24 15:11:58', 0, ''),
(21, 'Auto  Electrician', '2020-10-24 15:12:45', 0, ''),
(22, 'Graphic  Designer', '2020-10-24 15:13:20', 0, ''),
(23, 'Multi Tv - Installer', '2020-10-24 15:14:21', 0, ''),
(24, 'Tv & Radio Repairer', '2020-10-24 15:15:21', 0, ''),
(25, 'Computer Specialist', '2020-10-24 15:16:00', 0, ''),
(26, 'Vulcanizer', '2020-10-24 15:19:32', 0, ''),
(27, 'Carpenter', '2020-10-24 15:22:20', 0, ''),
(28, 'Steel Bender', '2020-10-26 01:42:13', 0, ''),
(29, 'Mechanical  Engineer', '2020-10-26 03:23:25', 0, ''),
(30, 'Student', '2020-10-26 14:24:18', 0, ''),
(31, 'Engineer', '2020-10-27 09:14:52', 0, ''),
(32, 'Pastor', '2020-10-27 17:28:04', 0, ''),
(0, 'Graphic designer ', '2022-07-10 09:30:13', 251115, '817467fd974175d6875ccbe4b04b15e25146620d'),
(0, 'worker at S.D Property LTD', '2022-09-13 19:34:34', 381272, 'bcb82ab4ffb2211820455ef190fe78c34e75258c'),
(0, 'constructor', '2022-09-22 15:05:25', 381272, 'd3c41e57747513710115f118377f23e84ed9008e');

-- --------------------------------------------------------

--
-- Table structure for table `penalty_tb`
--

CREATE TABLE `penalty_tb` (
  `ID` bigint(20) NOT NULL,
  `CUSTOMERID` bigint(20) DEFAULT NULL,
  `LOANID` bigint(20) DEFAULT NULL,
  `BALANCE` double NOT NULL,
  `PRATE` double NOT NULL,
  `AMOUNT` double NOT NULL,
  `POSTED_BY` int(11) NOT NULL,
  `DATE_NORMAL` varchar(200) NOT NULL,
  `DATE_CREATED` varchar(100) NOT NULL,
  `DATE_MODIFIED` varchar(100) DEFAULT NULL,
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE `product_tb` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `CODE` varchar(200) DEFAULT NULL,
  `INITIAL_MIN_AMOUNT` varchar(200) NOT NULL,
  `INITIAL_MAX_AMOUNT` varchar(200) DEFAULT NULL,
  `BALANCE_MIN` varchar(200) DEFAULT NULL,
  `BALANCE_MAX` varchar(200) DEFAULT NULL,
  `INTEREST_RATE` varchar(200) DEFAULT NULL,
  `INTEREST_PERIOD` varchar(200) DEFAULT NULL,
  `DEPOSIT_COMM` double DEFAULT NULL,
  `WITHDRAWAL_COMM` double DEFAULT NULL,
  `SOURCE` int(11) DEFAULT NULL COMMENT '1:SUSU/Savings 2:Agency',
  `CLIENT_ID` int(11) DEFAULT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DATE_MODIFIED` varchar(100) DEFAULT NULL,
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`ID`, `NAME`, `CODE`, `INITIAL_MIN_AMOUNT`, `INITIAL_MAX_AMOUNT`, `BALANCE_MIN`, `BALANCE_MAX`, `INTEREST_RATE`, `INTEREST_PERIOD`, `DEPOSIT_COMM`, `WITHDRAWAL_COMM`, `SOURCE`, `CLIENT_ID`, `DATE_CREATED`, `DATE_MODIFIED`, `CCODE`, `HCODE`) VALUES
(1, 'Daily SUSU', '247344', '10', '0', '50', 'undefined', '0', '0', NULL, NULL, NULL, NULL, '2024-04-26 14:24:59', '2024-04-26 14:24:59', 340059, 'c2b355099388d2e5d31343ccd681b48767ea85c9'),
(2, 'PREMIUM Savings', '241632', '100', '0', '100', 'undefined', '5', '7', NULL, NULL, NULL, NULL, '2024-06-03 19:43:21', '2024-06-03 19:43:21', 518163, 'ee9ceb382df0ef80a6fa286ffd5b41b1192d2f18'),
(3, 'Daily Susu', '913427', '500', '100000', '50', 'undefined', '2', '0', NULL, NULL, NULL, NULL, '2024-07-11 15:11:16', '2024-07-11 15:11:16', 377586, '966cf1d373bf4534bd335ab483423e7bd2c21511'),
(4, 'SMEPro Banking', '946768', '100', '0', '100', 'undefined', '2', '30', NULL, NULL, NULL, NULL, '2024-07-12 13:48:37', '2024-07-12 13:48:37', 340059, '2017bc7c988b116f9fa4c0b0a2e3aa96cae944bf'),
(5, 'Susu Savings', '694644', '1000', '5', '5', 'undefined', '3.22', '30', NULL, NULL, NULL, NULL, '2024-07-14 16:13:26', '2024-07-14 16:13:26', 961704, 'd97de630d4af3616baa2890c6c8ebd8808e1d051'),
(6, 'Eazy Savings ', '809827', '100', '100000', '50', 'undefined', '2.5', '30', NULL, NULL, NULL, NULL, '2024-07-18 12:59:51', '2024-07-18 12:59:51', 499047, 'fcb3e45791256126790573b39a54e55c3736eff0'),
(7, 'Daily SUSU', '266788', '100', '0', '100', 'undefined', '0', '7', NULL, NULL, NULL, NULL, '2024-07-18 16:19:22', '2024-07-18 16:19:22', 516448, '922b48014bb3809d3dbfd6d8b1bb7a6a70797b7b'),
(8, 'E-NICE DAILY SUSU  ', '556332', '5', '2000', '5', 'undefined', '3.33', '30', NULL, NULL, NULL, NULL, '2024-07-19 13:36:59', '2024-07-19 13:36:59', 270530, 'c1e078577e62cd18b9c650a8fadc9470ddc66fe9'),
(9, 'Stationary Susu ', '395645', '10', '1000', '10', 'undefined', '3.33', '30', NULL, NULL, NULL, NULL, '2024-07-20 17:54:13', '2024-07-20 17:54:13', 270530, 'b5d625b546548d0193fc0f5a237c01a1a9b3b373'),
(10, 'Fidelity Banking', '925396', '10000', '100000', '5', 'undefined', '0', '0', NULL, NULL, NULL, NULL, '2024-07-22 13:56:51', '2024-07-22 13:56:51', 377586, 'f6eb839610dee84224a3e6ee7906cc17bd51f6c3'),
(11, 'Fidelity Agency', '801195', '200', '0', '200', 'undefined', '0', '0', 0.08, 0.07, 2, NULL, '2024-07-23 04:39:00', '2024-07-23 04:39:00am', 516448, 'd7ca666f2b80b0a980243ac2b2da24574755a9c7'),
(12, 'Ecobank', '393100', '100', '20000', '100', 'undefined', '5', '7', 0.01, 0.01, 2, NULL, '2024-07-31 02:58:33', '2024-07-31 02:58:33', 352648, '0e5783a8fe6356f12f686097ec02afadd86b0385');

-- --------------------------------------------------------

--
-- Table structure for table `residence_tb`
--

CREATE TABLE `residence_tb` (
  `ID` int(11) NOT NULL,
  `AREA` varchar(200) NOT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DATE_MODIFIED` varchar(100) DEFAULT NULL,
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `residence_tb`
--

INSERT INTO `residence_tb` (`ID`, `AREA`, `DATE_CREATED`, `DATE_MODIFIED`, `CCODE`, `HCODE`) VALUES
(2, 'Adanse', '2024-02-02 02:52:55', NULL, 233211, '1c04c7b7bf608010ad75b5631e8bb188'),
(3, 'Atekyemu', '2024-02-02 02:52:55', NULL, 233211, '15bbf1d7d0bf7b9445bdec9d81a014a9'),
(4, 'Clinic', '2024-02-02 02:52:55', NULL, 233211, '2d6d25bbb0869191bb1561d18651cffd'),
(5, 'Bowohomoden', '2024-02-02 02:52:55', NULL, 233211, '00275c5fbb95015cec43d901a41d6af1'),
(6, 'Amankwaakrom', '2024-02-02 02:52:55', NULL, 233211, '6ea066a3237bf81424759a425055e599'),
(7, 'Odurokrom', '2024-02-02 02:52:55', NULL, 233211, 'a5c34d5eff73637218bfd06c1a4a3ca2'),
(8, 'Old Zongo', '2024-02-02 02:52:55', NULL, 233211, 'd86d9b602d9f6348e44170ee49321ad2'),
(9, 'New Zongo', '2024-02-02 02:52:55', NULL, 233211, 'af9c47ceb2c739c6b39266b003ee3b88'),
(10, 'Aboasa', '2024-02-02 02:52:55', NULL, 233211, 'cbf20470dcd4c1125751bc033d86461b'),
(11, 'Beposo', '2024-02-02 02:52:55', NULL, 233211, '52e8d7940a4987295fe4853e0ebf949b'),
(12, 'Tiboase', '2024-02-02 02:52:55', NULL, 233211, '3c16896040168451f651227189ef22ba'),
(13, 'Apenkwa', '2024-02-02 02:52:55', NULL, 233211, 'b3667da8458b78cc717abee2c24a4246'),
(14, 'Station', '2024-02-02 02:52:55', NULL, 233211, '73628cdfe097106625607a3bd06b22c2'),
(15, 'Amanfrom', '2024-02-02 02:52:55', NULL, 233211, '4c536480bc51d2b707336d7f106c5c2a'),
(16, 'Mmrewasan', '2024-02-02 02:52:55', NULL, 233211, '876b9b87b8e39e59421b013eb99ffef7'),
(17, 'Bofenase', '2024-02-02 02:52:55', NULL, 233211, 'b0ad7033873b1fb254d35fece4028676'),
(30, 'Presby School Area', '2024-02-02 02:52:55', NULL, 233211, 'dbefe76a6db0bfdbf5ff356a48bee49f'),
(31, 'Main Market', '2024-02-02 02:52:55', NULL, 233211, '6fafa0a93804ed650217567ca079f34a'),
(32, 'Plumper', '2024-02-02 02:52:55', NULL, 233211, 'e3080a58a60e61dbc4659c19927d2171'),
(33, 'Akookoosu', '2024-02-02 02:52:55', NULL, 233211, '239290e7aa3549c0f55439dc84e3fe86'),
(34, 'Bomaamu', '2024-02-02 02:52:55', NULL, 233211, '95d43616c789dcc3ba1022229f9bc15b'),
(35, 'Atobriso', '2024-02-02 02:52:55', NULL, 233211, '7b1c13be43025512c5155966cbb46d88'),
(36, 'Tema', '2024-04-25 19:51:00', NULL, 340059, '82ed3c290d1072995d2ebb0ff337d71c2020edbd'),
(37, 'Kpone', '2024-04-26 13:49:15', NULL, 340059, '858aefc44ad43cd049578420014177dc435b8554'),
(38, 'Bakaano', '2024-04-26 14:44:57', NULL, 340059, '3f375ced55202c5d1329ee808ad702fa61917fd8'),
(39, 'KLAGO', '2024-04-26 15:39:59', NULL, 340059, '0fcb67565dadac39f176fb2a3bc26cb63baa459b'),
(40, 'Breman Asikuma', '2024-05-14 11:05:41', NULL, 340059, '5ab86fddef5a8cfdea6b07308398148516f5ab91'),
(41, 'Tema', '2024-06-03 19:31:51', NULL, 518163, '2053a7f140c28c5296dd8a46912de2a0221d7205'),
(42, 'Dome', '2024-07-11 15:17:33', NULL, 377586, '1568d455f9928924099307b7ab288bcab1046b6f'),
(43, 'Manhea-Ablekuma', '2024-07-13 09:15:40', NULL, 377586, 'fc32c5490b8a7b9cb1158e22941eee39109d19d7'),
(44, 'Manhean Ablekuma ', '2024-07-14 15:34:56', NULL, 961704, '0dc415197543f64c46e1a0676fe4f42afa8ad70f'),
(45, 'Ablekuma ', '2024-07-18 09:45:40', NULL, 377586, '628ebc7586c4239cf46effe96e06d66ef24a35ae'),
(46, 'K&#39;dua', '2024-07-18 12:57:18', NULL, 499047, 'd389717afdcd80dcc5015eb37f6046ca3e0abb1c'),
(47, 'Kooforidua', '2024-07-18 12:58:07', NULL, 499047, '16b7fb2151acbeaf2f9e29abcb787cd8d53bb694'),
(48, 'Dome', '2024-07-18 16:14:30', NULL, 516448, '3aa6964a11839410ca4a65190c047a50e1d55f0b'),
(49, 'Ofankor', '2024-07-18 19:51:43', NULL, 377586, '48174f6ed87a98267c640e33811b46818e9c65fe'),
(50, 'Ablekuma', '2024-07-19 13:42:26', NULL, 270530, 'a9e6cf4f34b185add36ab6d67e71f9e15030ed68'),
(51, 'Obolo Spot', '2024-07-29 17:49:44', NULL, 270530, 'c651fe76a1773f49830c6af1e8f9507f404a53a6'),
(52, 'Dome', '2024-07-31 03:02:04', NULL, 352648, 'd4a22f5440d5b79b929c352115d45080fe6b7964');

-- --------------------------------------------------------

--
-- Table structure for table `role_settings`
--

CREATE TABLE `role_settings` (
  `ID` int(11) NOT NULL,
  `ROLE` int(11) NOT NULL,
  `REGISTER` int(11) NOT NULL COMMENT '0:Active 1: Inactive',
  `DEPOSIT` int(11) NOT NULL COMMENT '0:Active 1: Inactive',
  `WITHDRAWAL` int(11) NOT NULL COMMENT '0:Active 1: Inactive',
  `TRANSFER` int(11) NOT NULL COMMENT '0:Active 1: Inactive',
  `HISTORY` int(11) NOT NULL COMMENT '0:Active 1: Inactive',
  `LOAN` int(11) NOT NULL COMMENT '0:Active 1: Inactive',
  `DATE_MODIFIED` varchar(100) DEFAULT NULL,
  `POSTED_BY` int(11) NOT NULL COMMENT '0:Active 1: Inactive',
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `role_settings`
--

INSERT INTO `role_settings` (`ID`, `ROLE`, `REGISTER`, `DEPOSIT`, `WITHDRAWAL`, `TRANSFER`, `HISTORY`, `LOAN`, `DATE_MODIFIED`, `POSTED_BY`, `CCODE`, `HCODE`) VALUES
(4, 1, 0, 0, 0, 0, 0, 0, '2022-06-30', 234532, 364834, '1e640045a9ea0361947c03f2d394356b3ffc1c90'),
(5, 5, 0, 0, 1, 1, 0, 1, '2022-06-30', 234532, 364834, '60cbba0a834031b7c81fb0d8884a4eb80be748f8'),
(6, 3, 0, 0, 0, 1, 0, 1, '2022-06-30', 234532, 364834, '9d32c734b81eccb95b50e252de17ffcd7e221ebf'),
(7, 1, 0, 0, 0, 0, 0, 0, '2022-07-01', 234532, 104565, '07ab23bd171068b87aa0b052f167ec45f1161dff'),
(8, 5, 0, 0, 1, 1, 0, 1, '2022-07-01', 234532, 104565, '118432b728e009a7e22783d190d975457486124b'),
(9, 3, 0, 0, 0, 1, 0, 1, '2022-07-01', 234532, 104565, 'a8ceac7da0a31633d12abdfe9ba4b272b8a520d9'),
(10, 1, 0, 0, 0, 0, 0, 0, '2022-07-01', 234532, 604996, 'bcc67c71d18e0a3a55f26984a59f8fd8519d2beb'),
(11, 5, 0, 0, 1, 1, 0, 1, '2022-07-01', 234532, 604996, 'cdd788b66e33547c44d3c5c6910cad44e1f964af'),
(12, 3, 0, 0, 0, 1, 0, 1, '2022-07-01', 234532, 604996, '1ea8c955105ca331225cadae0da159fce934019c'),
(13, 1, 0, 0, 0, 0, 0, 0, '2022-07-01', 234532, 616561, 'e0ae8afabb2835057b8158458601a02a06201e8a'),
(14, 5, 0, 0, 1, 1, 0, 1, '2022-07-01', 234532, 616561, '8723528882da31e59110f7581996b245573e9af0'),
(15, 3, 0, 0, 0, 1, 0, 1, '2022-07-01', 234532, 616561, 'bd768dd8f4d05d9af1608d1248868e368e55d724'),
(16, 1, 0, 0, 0, 0, 0, 0, '2022-07-01', 234532, 897326, 'caf65176d774c74eee5d6cf9251fe89e200832ac'),
(17, 5, 0, 0, 1, 1, 0, 1, '2022-07-01', 234532, 897326, '8658a2e8e650fedb5e153af499fe237f36c370fa'),
(18, 3, 0, 0, 0, 1, 0, 1, '2022-07-01', 234532, 897326, '0ba42907f04819687c0dd33a46eac9f596839977'),
(19, 1, 0, 0, 0, 0, 0, 0, '2022-07-02', 234532, 822796, '206b322c0e749838c62d4cf15b5e0f6827e60ff5'),
(20, 5, 0, 0, 1, 1, 1, 1, '2022-07-07 03:26:37pm', 508199, 822796, '7f823d0c7e580020666c72a777f038c54c6adbf6'),
(21, 3, 0, 0, 0, 0, 0, 1, '2022-07-07 03:26:37pm', 508199, 822796, '2e8d2f4ee62ab558d26e2dd9c6087535a236aac0'),
(22, 1, 0, 0, 0, 0, 0, 0, '2022-07-03', 234532, 519574, 'ac4ab4fa7441aa5993a422ce22412098db37c9fe'),
(23, 5, 0, 0, 1, 1, 0, 1, '2022-07-03', 234532, 519574, 'a56b1bad0cff3e2f5fa7fb55698c97403842b9f8'),
(24, 3, 0, 0, 0, 1, 0, 1, '2022-07-03', 234532, 519574, '0739dfee35444cb00690e0986e335bffcb3a49f3'),
(25, 1, 0, 0, 0, 0, 0, 0, '2022-07-06', 234532, 603634, '3a9f0584bc557624daaf5b58cdd387a5cb773bad'),
(26, 5, 0, 0, 1, 1, 0, 1, '2022-07-06', 234532, 603634, '7017f4e721b6490c7a8b457b25cff0d6df4f0e7d'),
(27, 3, 0, 0, 0, 1, 0, 1, '2022-07-06', 234532, 603634, '62f0fec0fade848ca491ef5365c5f4be805f9eb5'),
(28, 1, 0, 0, 0, 0, 0, 0, '2022-07-10', 234532, 251115, 'f60c0e88e61d15d76ed0a887a00a59d49b4c8f95'),
(29, 5, 0, 0, 1, 1, 1, 1, '2022-07-11 10:43:50pm', 586652, 251115, '6b1f5cb31d39271f6bfe3e521f85f5d1ab2f40c0'),
(30, 3, 0, 0, 0, 1, 1, 1, '2022-07-11 10:43:50pm', 586652, 251115, '8f330f4787208da1dcef5eaa1c818a27bc21ee6a'),
(31, 1, 0, 0, 0, 0, 0, 0, '2022-07-11', 234532, 381877, '0d82eca6455e375536c1167da256d5603db060ad'),
(32, 5, 0, 0, 1, 1, 0, 1, '2022-07-11', 234532, 381877, 'e5d6213a22df64182067bee813cb35169674648e'),
(33, 3, 0, 0, 0, 1, 0, 1, '2022-07-11', 234532, 381877, '1222297874bf35b44e896904d458db7ddfbca23f'),
(34, 1, 0, 0, 0, 0, 0, 0, '2022-07-13', 234532, 948296, '9720d4b12f53cf8c43ad5edc3f2336b585a84a05'),
(35, 5, 0, 0, 1, 1, 0, 1, '2022-07-13', 234532, 948296, '338a1da38c544f4f43fa9b0c4da4ac15242594d4'),
(36, 3, 0, 0, 0, 1, 0, 1, '2022-07-13', 234532, 948296, '76951aed0ba6145809457e2eeb650d6a15319903'),
(37, 1, 0, 0, 0, 0, 0, 0, '2022-07-13', 234532, 436944, 'a760cf334d088eacb19bea1f40614a5421e96b00'),
(38, 5, 0, 0, 1, 1, 0, 1, '2022-07-13', 234532, 436944, '3089e0d1e466f2b6baf85087f7472945d0850236'),
(39, 3, 0, 0, 0, 1, 0, 1, '2022-07-13', 234532, 436944, '71e08254c63cfcfba4f2f67173e0912d5dd0b22d'),
(40, 1, 0, 0, 0, 0, 0, 0, '2022-07-13', 234532, 481758, '9383a70119b92d443e130c57e399791d43f11890'),
(41, 5, 0, 0, 1, 1, 0, 1, '2022-07-13', 234532, 481758, 'eac7060c23068290cfb48d68dd6f99307788ad76'),
(42, 3, 0, 0, 0, 1, 0, 1, '2022-07-13', 234532, 481758, 'ef3a50fcf23d1a85adc2f87fe8aec4512f68227e'),
(43, 1, 0, 0, 0, 0, 0, 0, '2022-07-13', 234532, 647470, '48f3a7d2a6cddc648a289f9ea6b6287de680beb9'),
(44, 5, 0, 0, 1, 1, 0, 1, '2022-07-13', 234532, 647470, '98b7641ce9aa99fdd72dfeb1e5938dcd491c5e1d'),
(45, 3, 0, 0, 0, 1, 0, 1, '2022-07-13', 234532, 647470, '8e609589fe704c88c22d6b69aeebe91f1200d482'),
(46, 1, 0, 0, 0, 0, 0, 0, '2022-07-13', 234532, 726670, '7016ed08a1036f0aca3a9dbadcec54a39877b060'),
(47, 5, 0, 0, 0, 1, 1, 1, '2022-07-13 11:58:47am', 714860, 726670, '67ef30a4bece81149bcaef17526097e1a9d40aaa'),
(48, 3, 0, 0, 0, 1, 1, 1, '2022-07-13 11:58:47am', 714860, 726670, '871658af410c6516bd0911d7838a9876fb380a77'),
(49, 1, 0, 0, 0, 0, 0, 0, '2022-07-14', 234532, 520403, 'ecae5e9c8971f4950535df072a5736bea8112deb'),
(50, 5, 0, 0, 1, 1, 0, 1, '2022-07-14', 234532, 520403, '1a2199b6dcbf71beef5affe0dd92d0d267df9801'),
(51, 3, 0, 0, 0, 1, 0, 1, '2022-07-14', 234532, 520403, '539a079e650fb3882f3ab8174d8912ac9d20a324'),
(52, 1, 0, 0, 0, 0, 0, 0, '2022-07-14', 234532, 949796, '52cb4177319e776fc9bd22b4bf690526c769418c'),
(53, 5, 0, 0, 1, 1, 1, 1, '2022-08-29 11:28:10am', 769406, 949796, '22fda53f271a55d0258be7d591b0f16a2b25d972'),
(54, 3, 0, 0, 0, 0, 0, 1, '2022-08-29 11:28:10am', 769406, 949796, '1301f45e406d12114456bccfd9b61e2cc27b832b'),
(55, 1, 0, 0, 0, 0, 0, 0, '2022-07-15', 234532, 984706, '16a4b8b24d4c26cdc53c30cdd387bf20bfb6d66d'),
(56, 5, 0, 0, 1, 1, 0, 1, '2022-07-15', 234532, 984706, 'a6c64bf49c38e498bce0a580e0b2ea355c4c0661'),
(57, 3, 0, 0, 0, 1, 0, 1, '2022-07-15', 234532, 984706, '0e32ccda8b8b6bdad32b08d42a8da5f091c08884'),
(58, 1, 0, 0, 0, 0, 0, 0, '2022-07-15', 234532, 618608, 'ed7889ace2ecf7bf4af221b07faa7c0aeed9b033'),
(59, 5, 0, 0, 1, 1, 0, 1, '2022-07-15', 234532, 618608, '3a063c5f09c88aace17015fc4726695d7d564b83'),
(60, 3, 0, 0, 0, 1, 0, 1, '2022-07-15', 234532, 618608, 'b5694d299510a75584a85eec07f14e7abe0a3f13'),
(61, 1, 0, 0, 0, 0, 0, 0, '2022-07-15', 234532, 297358, '26252d2359f1d1bda804716a613526ce02b3bea0'),
(62, 5, 0, 0, 1, 1, 0, 1, '2022-07-15', 234532, 297358, '8bf82da269f2323f88a032ec6f24d859efb6db03'),
(63, 3, 0, 0, 0, 1, 0, 1, '2022-07-15', 234532, 297358, '6a3f8c1b0fb86f2469adb067e9cd1b35b64af2de'),
(64, 1, 0, 0, 0, 0, 0, 0, '2022-07-15', 234532, 618782, 'c66087b3569108a2481efe2f296a07720f7c587b'),
(65, 5, 0, 0, 1, 1, 0, 1, '2022-07-15', 234532, 618782, '183d706b38f7cbb380086f4c074635f5976ef752'),
(66, 3, 0, 0, 0, 1, 0, 1, '2022-07-15', 234532, 618782, 'e16628517c7a3efb6bc7c4eafaaaa62cf893d6e1'),
(67, 1, 0, 0, 0, 0, 0, 0, '2022-07-15', 234532, 984103, 'b2bce48544b4cafc7c0d032ecce6fd15352898d0'),
(68, 5, 0, 0, 1, 1, 0, 1, '2022-07-15', 234532, 984103, '0b2589dc19dc1159bf76d2c305d8db036f7918ed'),
(69, 3, 0, 0, 0, 1, 0, 1, '2022-07-15', 234532, 984103, '975ca5b37702f986b5bed046f5db724934a1ed3f'),
(70, 1, 0, 0, 0, 0, 0, 0, '2022-07-15', 234532, 515097, '2d675a8d0092649ff0257dd82c3b4fe2558ec5b0'),
(71, 5, 0, 0, 1, 1, 0, 1, '2022-07-15', 234532, 515097, '0c8b810377d3afda930ab2fb5ed35635adaf82c8'),
(72, 3, 0, 0, 0, 1, 0, 1, '2022-07-15', 234532, 515097, '8895a8cd40f2e14f18bf95cc9a1cec97e39c9a30'),
(73, 1, 0, 0, 0, 0, 0, 0, '2022-07-15', 234532, 626175, '9878e7f28148d7aea870a502ae40f4da382cda90'),
(74, 5, 0, 0, 1, 1, 0, 1, '2022-07-15', 234532, 626175, '1738b1b1c37d3e90abfb0699d5156478fdc54bf9'),
(75, 3, 0, 0, 0, 1, 0, 1, '2022-07-15', 234532, 626175, 'e5a47af8c6faa81837adc3065eb12eeecce2b067'),
(76, 1, 0, 0, 0, 0, 0, 0, '2022-07-15', 234532, 463006, '2c6ae390e3898498b483ca7ecb67bca6d1aa0cc6'),
(77, 5, 0, 0, 1, 1, 0, 1, '2022-07-15', 234532, 463006, '3fae37e33d49214fd0d7c47d8f3110755cf86ec8'),
(78, 3, 0, 0, 0, 1, 0, 1, '2022-07-15', 234532, 463006, '9b9aab92155c9ac9f6f1c75d8104e4a30a2c497c'),
(79, 1, 0, 0, 0, 0, 0, 0, '2022-07-15', 234532, 723795, '654b0cf064bc31a03d6a1e70e80e1fbcbe088c2a'),
(80, 5, 0, 0, 1, 1, 0, 1, '2022-07-15', 234532, 723795, '3b58f0ab9e3e7b32e9f9b5a62a14545eeaa1fc0b'),
(81, 3, 0, 0, 0, 1, 0, 1, '2022-07-15', 234532, 723795, '7080fe033211bbcf663c177d885e80edaadfbf6d'),
(82, 1, 0, 0, 0, 0, 0, 0, '2022-07-15', 234532, 233211, '7c903d1854324da259582d6f6e1e109bc813b5d3'),
(83, 5, 0, 0, 1, 1, 0, 1, '2022-07-15', 234532, 233211, '8266bc7b09d9ae103a9a0fb767d11755df88a296'),
(84, 3, 0, 0, 0, 1, 0, 1, '2022-07-15', 234532, 233211, '5b44817d4165abe3dcdc36a55d262f75e6ce815d'),
(85, 1, 0, 0, 0, 0, 0, 0, '2022-07-15', 234532, 563554, 'dd58fb8bbca704eeb4de8f9e1278c3586841bd0e'),
(86, 5, 0, 0, 1, 1, 0, 1, '2022-07-15', 234532, 563554, '2e87c8832ad8636be8fd851edd1cad2bd55d88bd'),
(87, 3, 0, 0, 0, 1, 0, 1, '2022-07-15', 234532, 563554, '7cde7c14b6027013399d28847fb7d1717167cec3'),
(88, 1, 0, 0, 0, 0, 0, 0, '2022-07-15', 234532, 811193, '59ab7561eb5063703d54d851b31704bdd6c43f50'),
(89, 5, 0, 0, 1, 1, 0, 1, '2022-07-15', 234532, 811193, '060a1966cb1a00a6140d2c868bc976078b719244'),
(90, 3, 0, 0, 0, 1, 0, 1, '2022-07-15', 234532, 811193, '4f4ab619f2ddaa6e03885ecee41839bb4dc4ac14'),
(91, 1, 0, 0, 0, 0, 0, 0, '2022-08-09', 234532, 715676, '7b609fccd523cb1f112107eb731a9d2d6aa61fa5'),
(92, 5, 0, 0, 1, 1, 0, 1, '2022-08-09', 234532, 715676, 'a0b18931b5a3935e10992740ae1d39f72121e85c'),
(93, 3, 0, 0, 0, 1, 0, 1, '2022-08-09', 234532, 715676, 'b40f73df6ca8bb0d2be6f73c5e5752783dc6d5d5'),
(94, 1, 0, 0, 0, 0, 0, 0, '2022-08-23', 234532, 610240, '419d08bca83a11cc69b2c9b03e04525df21862ca'),
(95, 5, 0, 0, 1, 1, 0, 1, '2022-08-23', 234532, 610240, '800b5b07d8b5cf835ce0a78f338c765c96a05ae0'),
(96, 3, 0, 0, 0, 1, 0, 1, '2022-08-23', 234532, 610240, 'd265485db7a0781baf0a328a372628e7b5cdfd4a'),
(97, 1, 0, 0, 0, 0, 0, 0, '2022-08-29', 234532, 570826, '38552f600ba489ff2cbbded371d561fc7bc38fb0'),
(98, 5, 0, 0, 1, 1, 0, 1, '2022-08-29', 234532, 570826, 'ca8e116791724932315ef3b9ec00d1cef7f4465e'),
(99, 3, 0, 0, 0, 1, 0, 1, '2022-08-29', 234532, 570826, 'ccb225082978eb0f5654ce8e71b977837e45a653'),
(100, 1, 0, 0, 0, 0, 0, 0, '2022-09-13', 234532, 392986, '94d08a93ee7a20c5df124f19b63a8ed4fa354f56'),
(101, 5, 0, 0, 1, 1, 0, 1, '2022-09-13', 234532, 392986, 'a9ae1991cd27c92e1137cae179c7b54df56f0ab8'),
(102, 3, 0, 0, 0, 1, 0, 1, '2022-09-13', 234532, 392986, '07609b3db3631486de1958d0efcb09fb893de20b'),
(103, 1, 0, 0, 0, 0, 0, 0, '2022-09-13', 234532, 137093, '34df7dd5e144fdd0c7627ed04ab032d26a8860fc'),
(104, 5, 0, 0, 1, 1, 0, 1, '2022-09-13', 234532, 137093, '3e81f02ea080a975dcfc5899cfa07d5cdb61aa68'),
(105, 3, 0, 0, 0, 1, 0, 1, '2022-09-13', 234532, 137093, '45f38057146bccc9a5f56993dff115e837cca935'),
(106, 1, 0, 0, 0, 0, 0, 0, '2022-09-13', 234532, 764459, 'c2b77532ff6fe3dd146bef3f1a676783bfdbbbf8'),
(107, 5, 0, 0, 1, 1, 0, 1, '2022-09-13', 234532, 764459, '725d51b88905a41fa6bc5c9cae9d517a7c30d2f7'),
(108, 3, 0, 0, 0, 1, 0, 1, '2022-09-13', 234532, 764459, '2e72a45630a507bcf8f395b5d332715ef212271b'),
(109, 1, 0, 0, 0, 0, 0, 0, '2022-09-13', 234532, 381272, 'f97055d307c35eb0e875d021006f2cb7f7ca02bf'),
(110, 5, 0, 0, 1, 1, 0, 1, '2022-09-13', 234532, 381272, '76d2e96ac2086afb1a2c8504a1ee6454cef3cf3a'),
(111, 3, 0, 0, 0, 1, 0, 1, '2022-09-13', 234532, 381272, '5f818a7039b4293f60568500bb0f18d1fa895a25'),
(112, 1, 0, 0, 0, 0, 0, 0, '2022-09-16', 234532, 474308, 'ae1ddb6d1080d2eeda9d5f011920aa689ec9f8d5'),
(113, 5, 0, 0, 1, 1, 0, 1, '2022-09-16', 234532, 474308, 'fcda514fc94e553556ad200fcfa3ded451a51770'),
(114, 3, 0, 0, 0, 1, 0, 1, '2022-09-16', 234532, 474308, 'faa8564ccf1ff3f45f07cbc2be0abe92abc8eeba'),
(115, 1, 0, 0, 0, 0, 0, 0, '2022-09-21', 234532, 994529, '9f1d2884346e35891154d50b920bc7fc5b4401f3'),
(116, 5, 0, 0, 1, 1, 0, 1, '2022-09-21', 234532, 994529, '534eba2947ba6e53fbcb221a8394022f1dd4f97d'),
(117, 3, 0, 0, 0, 1, 0, 1, '2022-09-21', 234532, 994529, 'bb4261bad412ab3f874acb4f0d11871fdec578bd'),
(118, 1, 0, 0, 0, 0, 0, 0, '2022-10-11', 234532, 200776, 'b7b2ee67a48ab1e3154aba0d9a5835beb06753eb'),
(119, 5, 0, 0, 1, 1, 0, 1, '2022-10-11', 234532, 200776, '37537137f1a978ea3a7cc8469259de16cb666341'),
(120, 3, 0, 0, 0, 1, 0, 1, '2022-10-11', 234532, 200776, '2c69008e2e8b6698106a99ebadb9c3aba0291de6'),
(121, 1, 0, 0, 0, 0, 0, 0, '2022-11-06', 234532, 548706, 'ec4f1fa50710e4845175589964fecaaeff80ea5e'),
(122, 5, 0, 0, 1, 1, 0, 1, '2022-11-06', 234532, 548706, 'ff24c584bb064fee2ab63b0052332b0b3f1bf1d8'),
(123, 3, 0, 0, 0, 1, 0, 1, '2022-11-06', 234532, 548706, '1b4fa22c6810189e7d413cc48f7468aecd52e41e'),
(124, 1, 0, 0, 0, 0, 0, 0, '2023-03-06', 234532, 898101, '042d09799f605ef1d7d8924bb52f506de47d7e0d'),
(125, 5, 0, 0, 1, 1, 0, 1, '2023-03-06', 234532, 898101, 'afd5acf45b9b55b9443cfd255cd9e8af7b503197'),
(126, 3, 0, 0, 0, 1, 0, 1, '2023-03-06', 234532, 898101, '9c13f32a619500dd8abff8753a227c5f2dfe98e5'),
(127, 1, 0, 0, 0, 0, 0, 0, '2023-04-23', 234532, 451923, '9d02912d28f491938eeb2b7cf5f1916cb76e4573'),
(128, 5, 0, 0, 1, 1, 0, 1, '2023-04-23', 234532, 451923, '7e349c5d58fee1c3a3cb4b9b7b497f21cc98daaa'),
(129, 3, 0, 0, 0, 1, 0, 1, '2023-04-23', 234532, 451923, 'ef652d91c07dd2aacf588dad859f0455e58ee0f9'),
(130, 1, 0, 0, 0, 0, 0, 0, '2023-05-29', 234532, 473858, '70b381e16e3d8ae5970599214a20352da65384ad'),
(131, 5, 0, 0, 1, 1, 0, 1, '2023-05-29', 234532, 473858, '12230e41871999509647e884cdc750c3b470bcd4'),
(132, 3, 0, 0, 0, 1, 0, 1, '2023-05-29', 234532, 473858, '97b23fec2d348d3542d5c93683819f41e22e8b07'),
(133, 1, 0, 0, 0, 0, 0, 0, '2023-06-05', 234532, 169954, 'e42426ee8ab28287acef9bb68c8250d19b6e023d'),
(134, 5, 0, 0, 1, 1, 0, 1, '2023-06-05', 234532, 169954, '37a1f9449106f53ab85df0a96c6bb95413e4197d'),
(135, 3, 0, 0, 0, 1, 0, 1, '2023-06-05', 234532, 169954, '8990a46986a347215244223492d133bf6b3134d1'),
(136, 1, 0, 0, 0, 0, 0, 0, '2023-12-04', 234532, 379999, '0ffc0ffbcf45f58f33443047754e818e3d767da6'),
(137, 5, 0, 0, 1, 1, 0, 1, '2023-12-04', 234532, 379999, '8762437cbb9b3ef6022aff5d2ada654c65564abc'),
(138, 3, 0, 0, 0, 1, 0, 1, '2023-12-04', 234532, 379999, '8c118255e35a4d99e01554b0b1bce5954a2e7136'),
(139, 1, 0, 0, 0, 0, 0, 0, '2024-04-25', 234532, 340059, '0d73ffdcc3ceb263b467cf112d4b83c309c72562'),
(140, 5, 0, 0, 1, 1, 0, 1, '2024-04-25', 234532, 340059, '3e70e5c89e6b20bf8596b26701bc4b82b90ef41b'),
(141, 3, 0, 0, 0, 1, 0, 1, '2024-04-25', 234532, 340059, '621cde31c4e50594daf6715627b1615c806f57dd'),
(142, 1, 0, 0, 0, 0, 0, 0, '2024-06-03', 234532, 197163, '6d4696e4f539279d11f6923bbd0f439675d0329d'),
(143, 5, 0, 0, 1, 1, 0, 1, '2024-06-03', 234532, 197163, '101aeeb70960f2b335c3b7b26f4f24ac2487af29'),
(144, 3, 0, 0, 0, 1, 0, 1, '2024-06-03', 234532, 197163, '98f02a98c6c850591ce9265903f1a3d99bb20d2f'),
(145, 1, 0, 0, 0, 0, 0, 0, '2024-06-03', 234532, 518163, 'fe97b0c8f9d10b9641f1534453c184ddfc66736b'),
(146, 5, 0, 0, 1, 1, 0, 1, '2024-06-03', 234532, 518163, '53c581685deb88b1648903a901d3156ec7d6ab8c'),
(147, 3, 0, 0, 0, 1, 0, 1, '2024-06-03', 234532, 518163, '1a94a2c524b1dd414b3daa6af804c4f2420421be'),
(148, 1, 0, 0, 0, 0, 0, 0, '2024-06-03', 234532, 929764, '1457341a0698b8f5ce85580eb010f8517e13e53d'),
(149, 5, 0, 0, 1, 1, 0, 1, '2024-06-03', 234532, 929764, '3c9171819e389ebef327a6992612ae8f2c581ff3'),
(150, 3, 0, 0, 0, 1, 0, 1, '2024-06-03', 234532, 929764, 'e8a3c4c1d4a3fa396019e4ade8cd4f0dcdd5b46d'),
(151, 1, 0, 0, 0, 0, 0, 0, '2024-06-03', 234532, 267680, '6c2f75ad5e54d40371cf1851f863b2262579350e'),
(152, 5, 0, 0, 1, 1, 0, 1, '2024-06-03', 234532, 267680, '48dc7a915af91bc7fa8cf01d797bc16b35233371'),
(153, 3, 0, 0, 0, 1, 0, 1, '2024-06-03', 234532, 267680, '5466668116cca04183422291b94fe0cdadc6b604'),
(154, 1, 0, 0, 0, 0, 0, 0, '2024-06-03', 234532, 371265, 'e345951a15c526a2fdb84490ceb8671e5025bf1c'),
(155, 5, 0, 0, 1, 1, 0, 1, '2024-06-03', 234532, 371265, '25134a61c95df654a1e070eca05c1c2f4560af90'),
(156, 3, 0, 0, 0, 1, 0, 1, '2024-06-03', 234532, 371265, '533eea64ed6ab6f559134119c149d546c89268d6'),
(157, 1, 0, 0, 0, 0, 0, 0, '2024-06-03', 234532, 933642, 'ca71c62850af0610e7879284464d25e0fb0c0c5c'),
(158, 5, 0, 0, 1, 1, 0, 1, '2024-06-03', 234532, 933642, '06c691f6d4530c20cc29b0f06c183a453a9b8032'),
(159, 3, 0, 0, 0, 1, 0, 1, '2024-06-03', 234532, 933642, '59bb444246d623b4971e0d1ae44bd1c8b0c7cacf'),
(160, 1, 0, 0, 0, 0, 0, 0, '2024-07-11', 234532, 377586, '98831a8bdf929ac265478016918bfab8dba9ff05'),
(161, 5, 0, 0, 1, 1, 0, 1, '2024-07-11', 234532, 377586, '153b055f45e58e64521ef4426aa88ff07c7df0bb'),
(162, 3, 0, 0, 0, 1, 0, 1, '2024-07-11', 234532, 377586, '2cfe56ea4e614635ca9d2a290514478b59686ccc'),
(163, 1, 0, 0, 0, 0, 0, 0, '2024-07-14', 234532, 961704, 'ec8996c324d002e18b8434bf898cdc6bc4619012'),
(164, 5, 0, 0, 1, 1, 0, 1, '2024-07-14', 234532, 961704, 'bc206a36bb77c82e1af90057fe033cb01d229ffb'),
(165, 3, 0, 0, 0, 1, 0, 1, '2024-07-14', 234532, 961704, '55515ed10ee80a3f8e4d91610b84f2ad00ada647'),
(166, 1, 0, 0, 0, 0, 0, 0, '2024-07-15', 234532, 516448, '2dd78036e7111b184bc166363aa3eef8a51c4a52'),
(167, 5, 0, 0, 1, 1, 0, 1, '2024-07-15', 234532, 516448, 'f16f5a4c8000bab5c07fb93a4176d0b0239e5a67'),
(168, 3, 0, 0, 0, 1, 0, 1, '2024-07-15', 234532, 516448, '057aaa78f162f16764fe654408e4a99d417623d8'),
(169, 1, 0, 0, 0, 0, 0, 0, '2024-07-15', 234532, 558404, '75daa1dd856324b27b4c928e7605fe5a98bcd073'),
(170, 5, 0, 0, 1, 1, 0, 1, '2024-07-15', 234532, 558404, '6b5a1a01601d0b1f5d81e5a734bb700c9a45503f'),
(171, 3, 0, 0, 0, 1, 0, 1, '2024-07-15', 234532, 558404, '257209e2bb69c603069bba341c39c903b962b059'),
(172, 1, 0, 0, 0, 0, 0, 0, '2024-07-18', 234532, 499047, '6a8bdd066c6c87c7b72f95fae59f064daefa0b1e'),
(173, 5, 0, 0, 1, 1, 0, 1, '2024-07-18', 234532, 499047, 'a9106a2c0a5abede24d2881a28b23d18c76abaec'),
(174, 3, 0, 0, 0, 1, 0, 1, '2024-07-18', 234532, 499047, '5f87d8087e2954e2bb9f58724b7e6f0135340409'),
(175, 1, 0, 0, 0, 0, 0, 0, '2024-07-19', 234532, 270530, '7dc93ec41e532560e75f182f839a9329e10cc1d1'),
(176, 5, 0, 0, 1, 1, 0, 1, '2024-07-19', 234532, 270530, 'd649cd69f584f82db1a3e16179383d1a92f73e58'),
(177, 3, 0, 0, 0, 1, 0, 1, '2024-07-19', 234532, 270530, 'df3d788f3a7365962b25af78e1a5f8383adbf55a'),
(178, 1, 0, 0, 0, 0, 0, 0, '2024-07-19', 234532, 751991, '4091cdf8b421905f185f4e3606502e6164f24592'),
(179, 5, 0, 0, 1, 1, 0, 1, '2024-07-19', 234532, 751991, '2ac16554cae05658a7ad8af394386b8baf5fef9b'),
(180, 3, 0, 0, 0, 1, 0, 1, '2024-07-19', 234532, 751991, '0314049784a0f4a41cc93fd4ff891f308ebb3df4'),
(181, 1, 0, 0, 0, 0, 0, 0, '2024-07-23', 234532, 598200, '7097cdbc820ba47eb0819b97b77cadf6ad6b6d52'),
(182, 5, 0, 0, 1, 1, 0, 1, '2024-07-23', 234532, 598200, '422652b1fceaebc63b014b691dc0b7aaa83e26cd'),
(183, 3, 0, 0, 0, 1, 0, 1, '2024-07-23', 234532, 598200, 'e4a662c2412d559601916aaa778ac7feb811e145'),
(184, 1, 0, 0, 0, 0, 0, 0, '2024-07-31', 234532, 352648, '43f2a07e991245d9fbfc6a970e128e6343bb24d6'),
(185, 5, 0, 0, 1, 1, 0, 1, '2024-07-31', 234532, 352648, '1c72ba4d6aa5f7f98e4cc63eb5113bf2ae72b47c'),
(186, 3, 0, 0, 0, 1, 0, 1, '2024-07-31', 234532, 352648, '485673e7137419ce2d4246ff675cb921455ec20b');

-- --------------------------------------------------------

--
-- Table structure for table `role_tb`
--

CREATE TABLE `role_tb` (
  `ID` int(11) NOT NULL,
  `ROLE` varchar(200) NOT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `role_tb`
--

INSERT INTO `role_tb` (`ID`, `ROLE`, `DATE_CREATED`, `CCODE`, `HCODE`) VALUES
(1, 'Administrator', '2020-10-08 09:33:56', NULL, NULL),
(2, 'Loans officer', '2020-10-16 00:16:38', NULL, NULL),
(3, 'Teller', '2020-10-16 00:16:38', NULL, NULL),
(4, 'Clerk', '2020-10-16 00:16:38', NULL, NULL),
(5, 'Mobile banker', '2020-10-16 00:16:38', NULL, NULL),
(6, 'MOMO Agent', '2020-12-22 10:38:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('24oO1GcGHgORovLqiBIiD64Z1fNo8nx3Z0zpBFvo', NULL, '121.200.5.243', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_2_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.2 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiREx4T3d4NE41dExxQVhJTUN4TnpsbjlPUklnSWpnR1ZUQ29haGEyUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722140265),
('2cq36l6pF7UO5EkSwsH5vJNQqN77lsJsmwCirPwY', NULL, '104.166.80.220', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTzFSYTdMeWpHMDNyaUJsdlhjWWNQTXRQdklEMmxQMWd5UHdtZlI1eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722126583),
('2QpbXNVG2yg2djajmbg6Zyvzmd1jJrcOCYdhjYKE', NULL, '116.206.228.187', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_5_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.5 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMEhONUwxUmdNUHg5cnlIcVBNUmFMSFdmaGFZUERLY3ZlbUN5S2Z0WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722139840),
('2uhwQScQp3v2dejLJLThrvqIsOhcd9Q6gnE8d3xy', NULL, '54.167.112.252', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQVZsVTYzQlRxRDJzR29zM05DSjMwVmdPcERUS3ZOcE42ckhlZ25xUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722138398),
('5IqfPESUKUQtC4a05ym5DOjk39ecsl0TVXRxaZyP', NULL, '104.166.80.252', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaG1oUkp6QVpRNko5Nno5YjJpaEVLM1RqUENlcE5oOWExakR0QXYydyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722197726),
('730ewtoKfHcZ97VcBjaeMwLet09NFj8n43S5aX0V', NULL, '198.7.56.239', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36 Edg/121.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXZyNEZzOTlNRXVPSTI2YTdlNU1IcnRFdnI2ZjR3ZFZCTlF5Y09KZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722139397),
('BFYkeVkz90mCLd2KQ3tXRXKbzKbxnAVc34JHlO3m', NULL, '104.166.80.47', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYWJlUW4wbUZRemxYVzQ1NWpVMzhhTmJtRFpsQzh5a0tFM0RmWjd1RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722545531),
('CbPGmot0gaP27ZN46yu2uZQIABDfrUahjqcsDoae', NULL, '121.200.5.243', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_2_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.2 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiODJ4Z1plRGppSUpHNUpmcUVtYmxhYmxyaEY1WTJ2Y0xLYXNsRTNkSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722139836),
('dWLO5APKjoAbykibAxWgCRXQGNTEjvpb0jvoP4L4', NULL, '104.166.80.220', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0k3b1hxcEt4YlZzRGZvS1htVVNVSHNGRjFlVHRsUnNmamFTMGpKYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722126582),
('ELTNRTsooUd9HxPbaJNO1mzcTM6WsTE279LyzFvU', NULL, '80.255.7.109', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSWN3RGJPQUpTWU9hY3g4NkFhWjk0TXB2MENRT2FvdWJOWVhueExPNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722131182),
('f7vGKuPzKIZmAhjXLF0xjC95wyhZ6Tk0F0C4Wi7W', NULL, '104.166.80.247', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXlRbTBOd05KNUprUHNZWWRIRE1XRHVMZGxyMVpiMUJTODRzNWRxWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722372008),
('FBxQKso8mb8xAFeNFVP5oRhuvY0KuJW9gczlPNcG', NULL, '130.180.200.35', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid29oQXFvMlZpUnRxd254UDlYZWxFMUFIWXdhVDFOazlON3hkamdBMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722138427),
('FIaaX59Wb32Lw9XFhavXo8s7qdMgTcn6ENHbzAoi', NULL, '94.102.63.27', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTVE2bGlsMXJ1c1lhSnFTRVVHM0RHZHBjSUYwUzVwdmdubzZSNTdvaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722138068),
('gUdqHn2YdKGh9lYincxkVFM6k1iIwvYjgNIIo3zJ', NULL, '104.166.80.230', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTTNxQlIzR1VFM0J3ckFYTnRwbFhaUnRJSWl0SEs0ZjY2RzFDSUpTWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722463661),
('hnyiq0abvK37cz7SYAyIxVEIqfQlA4cUG3BFsK9a', NULL, '89.248.171.23', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicjJldVFpMUF0NDd1ZlR6Zzh1Q0x1cFdDM1VZemtrb1Q5bnVUaXhReiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722138266),
('I5GghkpkfcZr1sUgrcHrARrv0oCx7bJvD2zFA3Sl', NULL, '23.108.51.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36 Edg/119.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV3NuclpsZVBSNTd6QW9XQjVwWmFCQm5BRENLTUxxM3pnRjZFVVd4NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722138102),
('I6Q32dhMueJyWUptR39dfRqpj2SYzOUUbTSa3Q1b', NULL, '149.102.237.35', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_2_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.2 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibktZc1lydXFyRWZMekNQODdnVFNzN2RialpKa2pqRFpKSVBrQk9ycSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722138140),
('ibVTYEb0ellOTHu6fJoa4dk7JANrcemVkQwgzzC7', NULL, '104.166.80.47', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTmFUNDNSQ3JpeVE1RGxjN205aEN6QkFTa0xZVlRWM1Z4blJUQ2NZQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722372224),
('INvAtjC7tnAm8sHEajJAuC4oj7Ci1UgjCZwLQ8Zs', NULL, '104.166.80.124', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQWVob3RmTDFwZGxmWlJUNWw1OUlkUGg2ajRlYzhnelIxckNyMUZESSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722545421),
('jCKXeICtHtbREKMsECFVVP7HsGVPo3A9UtVdOHgV', NULL, '54.79.118.38', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/109.0.5414.46 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieWF6aEc4Rzl2U09GblZ3VzE5QUVmbUViand2V0UwM1E3d1NoeU1GRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722140136),
('kDmX3lxnJtKPv5aSJvtchPDc4Axk14YllLZeNsdw', NULL, '203.57.50.250', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1ZadUFIMDlaM3F0anl4SDFic242MkMzd2Vja2FzanhJVm44QUFXNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722140230),
('kFGNU6efFXiQUPe4KFS7LP3ny7lDo1WzwXORPQHx', NULL, '203.57.50.250', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXRVb3REb1k0Q3RVV29aODBPUjRNc1A5NzkydFFiT0hhREFWZXloZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722139834),
('me6J9B5AOQEUSCHZzpKGtNzwAOiBmjhd66Z2NvCw', NULL, '121.200.5.243', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWkyUE1EWXNHQ201QTlKajhRZldVR3ZmWGlCQXN0anY0eVo5WVpsMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722140953),
('ntY0IHoFbiMkdJKdzruVHapyq8w4htIIb9UuGpsH', NULL, '104.166.80.34', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieHJVZTlRRDNtWTBNUUpWYk4zSXRyRWc5TDgzeDd6c3BMU01US25tdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722460647),
('nvvDN9wTss8Ik24s6YvpdtBvWxWXKLJQyE34KxUI', NULL, '104.166.80.205', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNlFLTmNUSnZxclBtU3FUaWVaUGZKekVkOUFrMXNJYlR0eVdBSkFBNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722286475),
('POWn2bHAdW5VNzJ9BgDf9hHOKuNKWeOhVnlvwBYM', NULL, '172.241.250.178', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWndCeEF2aDhaRlFIUTIxYVY1MHhyemFLR21NbnU3djFUQ09MSUxUVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722139399),
('qh9z0WxlkhaAOCt7LwcMQhtPA2z3YIengIVUvPlH', NULL, '37.120.213.173', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGszTEs0TnU5SVphSlgzd2hUdWM1cW4yenY4OEFwMUluMHh6eFNDTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722139397),
('R0hNtCLJV64yxskJxZLYwGCJBauMwilr3Ob4E5xd', NULL, '197.242.156.56', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36 Edg/119.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjUxUE5wTVhONjB3eFpXdTNQWU00OE9XVmE1eTRQeHdzdUdZNU1lcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722139400),
('rIIWPEdgXNsbaSMrAqHjdnotDsbxSY2SaaHPXhnz', NULL, '94.102.63.27', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM0FwZ3JTNHJHemRtS0U1UFlsejRTZmFzQ2QyMGlxWWZzQnlxOGc2TCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722138061),
('RLkGBYJQpeVsaxSlTe2O8oBwGsVow9VRxzxeB1Hy', NULL, '104.166.80.47', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNlpBaXBHQmxoU1czMkZabjZQS0ZSazJ4MjNQQXRUeUlVcFBCNFNZeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722286376),
('rqYxTtsxK9YHRd8hwlbp2Tphijm2hNcWIks2XEhG', NULL, '149.102.237.35', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_2_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.2 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiODI0Z3h0aTM5a3ZtWERsckhBbXdBd3pLckYzdk5qQTRtVjBBN2NVSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722138102),
('sexTCX6XtGrXst3SBbewP2LtmEmLVqwTuKg1zuuP', NULL, '149.102.237.35', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicVZMWXpTZHlZb1poSFdXNVB4alRLOHE0eGZpNFpCWjhkY3J2bWhCaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722138163),
('sZv2OTOMiDm55LhYlsQi1lwD68GUbDWK7bxGuQeI', NULL, '198.23.148.146', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYUQ1SlRlNDZCaVNIOUttd2NId1JBN09JVDZ4RzBxUWtuMVFTQW81RCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722138055),
('T4L7U3xwWg7VVz1yoO2yVdgEeguRXvZwN1kjqPoo', NULL, '104.166.80.19', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 14.1; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidzBheTlRWUF6ek0xVkliVjdnOVFlbU14TDhRaHA0UTNNRDBhMTh3NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722124689),
('tKn8Qd5CMQNQ5EBD9uWbnm8G7UWaiSyjtr6e4OUr', NULL, '106.161.65.206', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmxnU2M0T25pUXdwNVA2azdFaTBHc2J4WUtEamhEcEkxMGREcVRUZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722139834),
('u1jzNFSlXUYpS7GWrsJbXLrY0d7s0LgxvbwmB7YM', NULL, '137.184.141.45', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibjFobUtya3RiTkZUajYzbzhBTjY1V2RNdlk1RzB6ZG1sNWxsbTZucSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722397509),
('uqc604E9GqCuBlY5uHJ9Kq7gcRIVfOlfWh2q3D9w', NULL, '104.166.80.19', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 14.1; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUNYVkU1UG1PcU1MTTA2UUtvMzRVeU5aald6YmlKZlR3S2NlUGJ3ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722124688),
('USP4qfWHIL9pqgnnyrwEe9SxWTonLnlliBIG7efi', NULL, '179.61.240.45', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ1ZzNEJac2ZaZ0tMaUxlc3NLbUVhenV0UGtDTzF5ak8wcmFQTkdSdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722139834),
('VaHzvVce6k8NlbM130yHopY8b3nzKrbcpUKQfXGh', NULL, '203.57.50.250', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTDVRN1I5SGtpb1pGckpZRGFUMmJjYWEya2R3RkVNcnJWY2s4cU5SRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722140860),
('vixcWTLwWcg8GrrTwwlW3cwkkpwi9avINg90Y8cE', NULL, '104.166.80.143', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTUkyaGtIbFh5a2xCQVZnN0NyWjExdUhTeU9jblliOEJqOEVhZTJpdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722197670),
('w57pe97TFC2gPLZmro2h0TxjrZsxGcakw9dA2Ik8', NULL, '142.11.219.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.246', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWTZaSzVKZWNQVjB3bEh6c0N2Wm9DUHU3cnpGdWtvclU3YU9xOTNPTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722139767),
('ws4GasOi1eKUqcOcdZWFq96154xHey6PiIpFLqxW', NULL, '146.70.155.13', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/109.0.5414.46 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNkNJa0c0bWg0amkxczkzTk5kYTcwajJNdzVhaU5VYTYyZG9aMWZ5OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722140027),
('WYbwJz1OQ8J4KmjP4ZP5S847GiUkmDs91f7qhesN', NULL, '149.88.16.235', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUFRqRmdvY0RiYWhyS1RlS1k5ejZKeE4wZnYwY1hiMzVTMnZzbkk2UiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722137947),
('X97EXlq8KgkKes4qGrfnckEIfCLLFVKyLkoLKg5s', NULL, '212.102.36.171', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidFBndlBZc3VXUWRkSlozblh2RHpienRaTmx5UnREekJkcGJtYlIxdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722138102),
('z1soLNNaEX3D808rzDsFTZBP4IDAxzf7ddvfo2UG', NULL, '203.57.115.146', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV2RpeHZxR29HZ3RNNHFheE55N3hUWUJFRzJ5cVE5bDBXcFlJbWxIOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722139839),
('Z7UbioGuBvqxvT6CI06G3w1Ut2FLQRT3GqkPHdkw', NULL, '106.161.65.206', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_2_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.2 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZlRjZGJuWUZnQVpNNDJ5c1piVUQyY3RISzhRNm1jM0NOOW1WcWF0ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcm91dGVhcGkubGJvb2tmaW50ZWNoLmNvbS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722139833);

-- --------------------------------------------------------

--
-- Table structure for table `sms_settings`
--

CREATE TABLE `sms_settings` (
  `APIKEY` varchar(255) DEFAULT NULL,
  `SID` varchar(50) DEFAULT NULL,
  `WELCOME_SMS` int(11) NOT NULL COMMENT '0:Active 1: Inactive',
  `DEPOSIT_SMS` int(11) NOT NULL COMMENT '0:Active 1: Inactive',
  `WITHDRAWAL_SMS` int(11) NOT NULL COMMENT '0:Active 1: Inactive',
  `TRANSFER_SMS` int(11) NOT NULL COMMENT '0:Active 1: Inactive',
  `WELCOME_MESS` longtext DEFAULT NULL,
  `DEPOSIT_MESS` longtext DEFAULT NULL,
  `WITHDRAWAL_MESS` longtext DEFAULT NULL,
  `TRANSFER_MESS` longtext DEFAULT NULL,
  `DATE_MODIFIED` varchar(50) DEFAULT NULL,
  `POSTED_BY` int(11) NOT NULL,
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `sms_settings`
--

INSERT INTO `sms_settings` (`APIKEY`, `SID`, `WELCOME_SMS`, `DEPOSIT_SMS`, `WITHDRAWAL_SMS`, `TRANSFER_SMS`, `WELCOME_MESS`, `DEPOSIT_MESS`, `WITHDRAWAL_MESS`, `TRANSFER_MESS`, `DATE_MODIFIED`, `POSTED_BY`, `CCODE`, `HCODE`) VALUES
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-06-30', 333343, 364834, 'c6073e9854d484676697a288416ec798a9c4263f'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-01', 333343, 104565, '0e2da937a54db7f72afd01dcc60dcbffbc66147f'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-01', 333343, 604996, '918e216a350cb15f77f48ed7f13d2e9f048d37e1'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-01', 333343, 616561, '192dff6fc6d575de647492d9e724354455906eba'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-01', 333343, 897326, '1b70958737bf95f4437e97633d8c5e72781469d5'),
('e2ffc99ccdac1df5', 'LINKSENG', 1, 0, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', '', 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-12 10:08:52pm', 508199, 822796, 'c841798b58d07dcc0728d5b1b8de78d9832797f6'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-03', 333343, 519574, '3b54d4f831574840b0619284192ab0ff4e12698f'),
('public key', 'lcorp4u4us', 0, 0, 0, 0, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS newbalance.00. Thank you.', 'An amount of amount has been deposited into your account by account_ number. \r\ndate_created', 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-11 09:53:43pm', 241799, 603634, 'ad0c821b1248bfede7359954257b89fdef046687'),
('8fbf43b01a7d65a5', 'UNIXFIN', 0, 0, 0, 1, 'Thank you for subscribing to UNIX GRAFX notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by UNIX GRAFX. Your new balance is GHS {newbalance}.00. Thank you', 'An amount of GHS {amount}.00 has been withdrawn from your account by UNIX GRAFX. Your new balance is GHS {new balance}.00\r\nThank you.', 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-11 10:43:59pm', 586652, 251115, '961c4e1664e40b0e91fef2d005a07b668448bc1c'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-11', 333343, 381877, 'c92b493702814e462df91197f53fc199a344f393'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-13', 333343, 948296, '3b6e8a403628317aa464daa6b953b30d486be4ff'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-13', 333343, 436944, '3d2aa154f6f48090e9e87ab6c17ba988e4e4175e'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-13', 333343, 481758, '7914e31d135e081c9eb069a0722cd51c40d72cc8'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-13', 333343, 647470, '36344f27773858a362259c9bc43d1fb36cc8814c'),
('96d98381024ba97b', 'RYAN SUSU', 0, 0, 0, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', 'An amount of GHS {amount}.00 has been withdrawn into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-13 12:05:27pm', 714860, 726670, '67bbf00ec7502f9234cbadfeaf3bafd8f9dd4bc1'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-14', 333343, 520403, '724b4973a64625f55e0579b424683a36268ea35f'),
('xxxxxxxxxxxx', 'xxxxxxxx', 0, 0, 1, 0, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', '', 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-08-29 11:30:20am', 769406, 949796, 'fcfe13ad4d1727b528df3cc799f63bcac99989fe'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-15', 333343, 984706, '1b8860b6a99c341b75aca71961037c76c48c8311'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-15', 333343, 618608, 'cd4208fcaeb91cf953c5a9d546eeb6ed0aeb43cf'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-15', 333343, 297358, '230cec1178f3af07d129697e0d4bfd49745622ab'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-15', 333343, 618782, 'dbe3dd52f6e28c53356778eb1acc1f39d15f51ae'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-15', 333343, 984103, '2d13e10d1e5893ba51a287aea0279b08c3fec0a8'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-15', 333343, 515097, 'ed80c223309c91fce8973d14abc6d99a1e26d292'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-15', 333343, 626175, 'b28bcf85241ef79280ec2ee32a27708727d6a69e'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-15', 333343, 463006, 'b71e76f4459e825c7ae81b2eb24d87402a00013a'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-15', 333343, 723795, 'c2f53e5364339fc3fd8e5597c6988cb46c8654eb'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-15', 333343, 233211, 'd3054fab68f1f989e49ab4923266e2bafc636ae1'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-15', 333343, 563554, '8fd5254ca0107c735fba5cb073c644c2d7f81fe4'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-07-15', 333343, 811193, '5942015c5e4cc2ec291fde3fd4c8b6a3d21e8ba4'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-08-09', 333343, 715676, '9eaaff2227c703af3afd2d6c8e3f3948d7eacc17'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-08-23', 333343, 610240, 'e429c5d3678af5c0916e52eb733766ea38c74427'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-08-29', 333343, 570826, 'c525bd9fa9a7c4ad634716d30aa6ee94f7384bad'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-09-13', 333343, 392986, '37010fbc1caebb5b52c154946715a6b9bbac2a65'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-09-13', 333343, 137093, 'c60a4078ae644b20ceededfe461e4a1cdb683ba6'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-09-13', 333343, 764459, '807160dff82a467e78522112e11ce76adb9685d7'),
('368d7b51e799d3ce', 'SOFTPAYY GH', 0, 0, 1, 1, 'Thank you for subscribing to {company} notification service. \r\nWe offer Electronic, Home and Office appliances on Cash or Credit basis to customers. \r\nThank you.', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-09-13 02:24:07pm', 654346, 381272, '87e60bbaac39882253397fd984583d18d1960011'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-09-16', 333343, 474308, '06f07880ca2c427ff3f7da3b3890a83ef82ce894'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-09-21', 333343, 994529, '5981ca958d3023b16cda6d022580a2169495fec8'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-10-11', 333343, 200776, 'fe2302a8a26c3cc35eb62cd1635f777b18bfab6d'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2022-11-06', 333343, 548706, '7dd5230f47de7f8505dc10eccef603110b2ffa1d'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2023-03-06', 333343, 898101, '923c161b09c8b8efc27a1c43e58e9b7aa4e0d3bc'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2023-04-23', 333343, 451923, '87d4f63f0a6425862c08e4de934db396ddc4a86f'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2023-05-29', 333343, 473858, 'de9bcbd700157373f298790a8255a233ad43d5e9'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2023-06-05', 333343, 169954, 'fd887d9486ef5f667ad693c3b02d0b4778e08d74'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2023-12-04', 333343, 379999, '5900ed8f8c72d4a07419fe4b79ce246905471685'),
('5775560e3c1971b9', 'GREEN STAR', 0, 0, 0, 0, 'Thank you for subscribing to {company} notification service. ', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', 'An amount of GHS {amount}.00 has been withdrawn from your account by {company}. Your new balance is GHS {newbalance}.00. Thank you.', 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-07-18 03:43:05pm', 660546, 340059, '86ff45edd62bb42930e80c1ceb8bbb70629e545d'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-06-03', 333343, 197163, 'bd61ba846a1f691a8928da8f43c118363fddf8eb'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-06-03', 333343, 518163, '96cdeec13ef635dec886cc85c86a0eb885459d9a'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-06-03', 333343, 929764, 'c0ca8b4ce85318d82db1b2bc8834d284380447f8'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-06-03', 333343, 267680, '8d34a5b30fd386da66e1bd76b1440dc28d295f84'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-06-03', 333343, 371265, '89f89f175be22abad07ec2ab9cde40cc54b20184'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-06-03', 333343, 933642, '23e0f277da83ee9274f173cf76de409322c2af8c'),
('4a97b234462c3996', 'EPHODTECHL', 0, 0, 0, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', 'An amount of GHS {amount}.00 has been withdrawn from your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-07-18 08:54:06pm', 920215, 377586, '1d809bf8c54a41eb7ab35a5c1105756edcfccb34'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-07-14', 333343, 961704, '6eef8a510f926e885dadd15a75ccf532e1d32a35'),
('xxxxxxxxxxxxxx', 'Linkseng', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', 'An amount of GHS {amount}.00 has been withdrawn from your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-07-23 04:37:48am', 594019, 516448, 'a98aebe1cac4bea285fb2752b1b31c7d6de216fd'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-07-15', 333343, 558404, 'bf47c7788dd1820ba5813cb813d8434c00ccc090'),
('b1661b47fab698b9', 'SMEPROBANKING', 0, 0, 0, 0, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', 'An amount of GHS {amount}.00 has been withdrwan into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-07-18 07:08:42pm', 135072, 499047, 'd0a5ce6e9080e5eae17c99adf56c3df2c51dba3d'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-07-19', 333343, 270530, '453e1672318b7a23530850c9929b708193af119c'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-07-19', 333343, 751991, 'dfa41f8af471afdab012b1ddceaab6c58a4a491b'),
('xxxxxxxxxxxx', 'xxxxxxxx', 1, 1, 1, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-07-23 10:50:48am', 342869, 598200, '7cfd4c6e235b6866eeee14ada08fb1b3a9d321c1'),
('xxxxxxxxxxxx', 'xxxxxxxx', 0, 0, 0, 1, 'Thank you for subscribing to {company} notification service. Thank you', 'An amount of GHS {amount}.00 has been deposited into your account by {company}. Your new balance is GHS {newbalance}.00. Thank you', NULL, 'An amount of GHS {amount}.00 has been transferred from your account to account number {account_number} by {company}. Your new balance is GHS {newbalance}.00. Thank you', '2024-07-31', 333343, 352648, 'b421cda7aabb69ec941d10fdb687d32e2c8ddd2c');

-- --------------------------------------------------------

--
-- Table structure for table `sms_tb`
--

CREATE TABLE `sms_tb` (
  `ID` int(11) NOT NULL,
  `ACCOUNT_NO` varchar(200) NOT NULL,
  `MESSAGE` varchar(255) DEFAULT NULL,
  `CONTACT` varchar(20) DEFAULT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_tb`
--

CREATE TABLE `status_tb` (
  `ID` int(11) NOT NULL,
  `STATUS` varchar(10) DEFAULT NULL,
  `DESCRIPTION` varchar(200) NOT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT current_timestamp(),
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_tb`
--

CREATE TABLE `subscription_tb` (
  `ID` int(11) NOT NULL,
  `SUBSCRIPTION` int(200) NOT NULL,
  `DAYS_LEFT` int(255) NOT NULL,
  `DATE_MODIFIED` varchar(50) DEFAULT NULL,
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `subscription_tb`
--

INSERT INTO `subscription_tb` (`ID`, `SUBSCRIPTION`, `DAYS_LEFT`, `DATE_MODIFIED`, `CCODE`, `HCODE`) VALUES
(33, 10000155, 10000170, '2024-10-11', 340059, '8f0c2c43ae0fc88cebaf6aa6a5d132c84cb33153');

-- --------------------------------------------------------

--
-- Table structure for table `susucomm_tb`
--

CREATE TABLE `susucomm_tb` (
  `ID` bigint(20) NOT NULL,
  `SOURCE` int(11) DEFAULT NULL COMMENT '1:Deposit 2: Withdrawal',
  `DEPID` int(11) NOT NULL,
  `AMOUNT` double NOT NULL,
  `RATE` double NOT NULL,
  `COMMISSION` double NOT NULL,
  `POSTED_BY` int(11) NOT NULL,
  `DATE_CREATED` varchar(100) NOT NULL,
  `DATE_MODIFIED` varchar(100) DEFAULT NULL,
  `CCODE` int(11) NOT NULL,
  `HCODE` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sync_history`
--

CREATE TABLE `sync_history` (
  `ID` int(11) NOT NULL,
  `DATE_CREATED` varchar(50) DEFAULT NULL,
  `LAST_DATE` varchar(50) NOT NULL,
  `LAST_TIME` varchar(50) NOT NULL,
  `SYNC_BY` int(11) DEFAULT NULL,
  `HOST_ID` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `sync_history`
--

INSERT INTO `sync_history` (`ID`, `DATE_CREATED`, `LAST_DATE`, `LAST_TIME`, `SYNC_BY`, `HOST_ID`) VALUES
(3, '2022-07-01 01:59:39', '1st July, 2022', '01:59 AM', 219038, '364834'),
(4, '2022-07-01 15:11:56', '1st July, 2022', '03:11 PM', 781795, '104565'),
(5, '2022-07-01 15:11:56', '1st July, 2022', '03:11 PM', 781795, '104565'),
(6, '2022-07-01', 'Not yet', 'Not yet', 34323, '604996'),
(7, '2022-07-01', '2022-07-01', '2022-07-01', 10001, '604996'),
(8, '2022-07-01', 'Not yet', 'Not yet', 34323, '616561'),
(9, '2022-07-01', '2022-07-01', '2022-07-01', 10001, '616561'),
(10, '2022-07-02 07:20:57', '2nd July, 2022', '07:20 AM', 201515, '897326'),
(11, '2022-07-02 07:20:57', '2nd July, 2022', '07:20 AM', 201515, '897326'),
(12, '2022-07-03 22:49:35', '3rd July, 2022', '10:49 PM', 508199, '822796'),
(13, '2022-07-03 22:49:35', '3rd July, 2022', '10:49 PM', 508199, '822796'),
(14, '2022-07-03', 'Not yet', 'Not yet', 34323, '519574'),
(15, '2022-07-03', '2022-07-03', '2022-07-03', 10001, '519574'),
(16, '2022-07-06', 'Not yet', 'Not yet', 34323, '603634'),
(17, '2022-07-06', '2022-07-06', '2022-07-06', 10001, '603634'),
(18, '2022-07-10', 'Not yet', 'Not yet', 34323, '251115'),
(19, '2022-07-10', '2022-07-10', '2022-07-10', 10001, '251115'),
(20, '2022-07-11', 'Not yet', 'Not yet', 34323, '381877'),
(21, '2022-07-11', '2022-07-11', '2022-07-11', 10001, '381877'),
(22, '2022-07-13', 'Not yet', 'Not yet', 34323, '948296'),
(23, '2022-07-13', '2022-07-13', '2022-07-13', 10001, '948296'),
(24, '2022-07-13', 'Not yet', 'Not yet', 34323, '436944'),
(25, '2022-07-13', '2022-07-13', '2022-07-13', 10001, '436944'),
(26, '2022-07-13', 'Not yet', 'Not yet', 34323, '481758'),
(27, '2022-07-13', '2022-07-13', '2022-07-13', 10001, '481758'),
(28, '2022-07-13', 'Not yet', 'Not yet', 34323, '647470'),
(29, '2022-07-13', '2022-07-13', '2022-07-13', 10001, '647470'),
(30, '2022-07-13', 'Not yet', 'Not yet', 34323, '726670'),
(31, '2022-07-13', '2022-07-13', '2022-07-13', 10001, '726670'),
(32, '2022-07-14', 'Not yet', 'Not yet', 34323, '520403'),
(33, '2022-07-14', '2022-07-14', '2022-07-14', 10001, '520403'),
(34, '2022-07-14', 'Not yet', 'Not yet', 34323, '949796'),
(35, '2022-07-14', '2022-07-14', '2022-07-14', 10001, '949796'),
(36, '2022-07-15', 'Not yet', 'Not yet', 34323, '984706'),
(37, '2022-07-15', '2022-07-15', '2022-07-15', 10001, '984706'),
(38, '2022-07-15', 'Not yet', 'Not yet', 34323, '618608'),
(39, '2022-07-15', '2022-07-15', '2022-07-15', 10001, '618608'),
(40, '2022-07-15', 'Not yet', 'Not yet', 34323, '297358'),
(41, '2022-07-15', '2022-07-15', '2022-07-15', 10001, '297358'),
(42, '2022-07-15', 'Not yet', 'Not yet', 34323, '618782'),
(43, '2022-07-15', '2022-07-15', '2022-07-15', 10001, '618782'),
(44, '2022-07-15', 'Not yet', 'Not yet', 34323, '984103'),
(45, '2022-07-15', '2022-07-15', '2022-07-15', 10001, '984103'),
(46, '2022-07-15', 'Not yet', 'Not yet', 34323, '515097'),
(47, '2022-07-15', '2022-07-15', '2022-07-15', 10001, '515097'),
(48, '2022-07-15', 'Not yet', 'Not yet', 34323, '626175'),
(49, '2022-07-15', '2022-07-15', '2022-07-15', 10001, '626175'),
(50, '2022-07-15', 'Not yet', 'Not yet', 34323, '463006'),
(51, '2022-07-15', '2022-07-15', '2022-07-15', 10001, '463006'),
(52, '2022-07-15', 'Not yet', 'Not yet', 34323, '723795'),
(53, '2022-07-15', '2022-07-15', '2022-07-15', 10001, '723795'),
(54, '2022-07-15', 'Not yet', 'Not yet', 34323, '233211'),
(55, '2022-07-15', '2022-07-15', '2022-07-15', 10001, '233211'),
(56, '2022-07-15', 'Not yet', 'Not yet', 34323, '563554'),
(57, '2022-07-15', '2022-07-15', '2022-07-15', 10001, '563554'),
(58, '2022-07-15', 'Not yet', 'Not yet', 34323, '811193'),
(59, '2022-07-15', '2022-07-15', '2022-07-15', 10001, '811193'),
(60, '2022-08-09', 'Not yet', 'Not yet', 34323, '715676'),
(61, '2022-08-09', '2022-08-09', '2022-08-09', 10001, '715676'),
(62, '2022-08-23', 'Not yet', 'Not yet', 34323, '610240'),
(63, '2022-08-23', '2022-08-23', '2022-08-23', 10001, '610240'),
(64, '2022-08-29', 'Not yet', 'Not yet', 34323, '570826'),
(65, '2022-08-29', '2022-08-29', '2022-08-29', 10001, '570826'),
(66, '2022-09-13', 'Not yet', 'Not yet', 34323, '392986'),
(67, '2022-09-13', '2022-09-13', '2022-09-13', 10001, '392986'),
(68, '2022-09-13', 'Not yet', 'Not yet', 34323, '137093'),
(69, '2022-09-13', '2022-09-13', '2022-09-13', 10001, '137093'),
(70, '2022-09-13', 'Not yet', 'Not yet', 34323, '764459'),
(71, '2022-09-13', '2022-09-13', '2022-09-13', 10001, '764459'),
(72, '2022-09-13', 'Not yet', 'Not yet', 34323, '381272'),
(73, '2022-09-13', '2022-09-13', '2022-09-13', 10001, '381272'),
(74, '2022-09-16', 'Not yet', 'Not yet', 34323, '474308'),
(75, '2022-09-16', '2022-09-16', '2022-09-16', 10001, '474308'),
(76, '2022-09-21', 'Not yet', 'Not yet', 34323, '994529'),
(77, '2022-09-21', '2022-09-21', '2022-09-21', 10001, '994529'),
(78, '2022-10-11', 'Not yet', 'Not yet', 34323, '200776'),
(79, '2022-10-11', '2022-10-11', '2022-10-11', 10001, '200776'),
(80, '2022-11-06', 'Not yet', 'Not yet', 34323, '548706'),
(81, '2022-11-06', '2022-11-06', '2022-11-06', 10001, '548706'),
(82, '2023-03-06', 'Not yet', 'Not yet', 34323, '898101'),
(83, '2023-03-06', '2023-03-06', '2023-03-06', 10001, '898101'),
(84, '2023-04-23', 'Not yet', 'Not yet', 34323, '451923'),
(85, '2023-04-23', '2023-04-23', '2023-04-23', 10001, '451923'),
(86, '2023-05-29', 'Not yet', 'Not yet', 34323, '473858'),
(87, '2023-05-29', '2023-05-29', '2023-05-29', 10001, '473858'),
(88, '2023-06-05', 'Not yet', 'Not yet', 34323, '169954'),
(89, '2023-06-05', '2023-06-05', '2023-06-05', 10001, '169954'),
(90, '2023-12-04', 'Not yet', 'Not yet', 34323, '379999'),
(91, '2023-12-04', '2023-12-04', '2023-12-04', 10001, '379999'),
(92, '2024-04-25', 'Not yet', 'Not yet', 34323, '340059'),
(93, '2024-04-25', '2024-04-25', '2024-04-25', 10001, '340059'),
(94, '2024-06-03', 'Not yet', 'Not yet', 34323, '197163'),
(95, '2024-06-03', 'Not yet', 'Not yet', 34323, '518163'),
(96, '2024-06-03', 'Not yet', 'Not yet', 34323, '929764'),
(97, '2024-06-03', 'Not yet', 'Not yet', 34323, '267680'),
(98, '2024-06-03', 'Not yet', 'Not yet', 34323, '371265'),
(99, '2024-06-03', 'Not yet', 'Not yet', 34323, '933642'),
(100, '2024-07-11', 'Not yet', 'Not yet', 34323, '377586'),
(101, '2024-07-14', 'Not yet', 'Not yet', 34323, '961704'),
(102, '2024-07-15', 'Not yet', 'Not yet', 34323, '516448'),
(103, '2024-07-15', 'Not yet', 'Not yet', 34323, '558404'),
(104, '2024-07-18', 'Not yet', 'Not yet', 34323, '499047'),
(105, '2024-07-19', 'Not yet', 'Not yet', 34323, '270530'),
(106, '2024-07-19', 'Not yet', 'Not yet', 34323, '751991'),
(107, '2024-07-22 10:58:27', '2024-07-22 10:58:27', '10:58:27', 10001, NULL),
(108, '2024-07-23', 'Not yet', 'Not yet', 34323, '598200'),
(109, '2024-07-31', 'Not yet', 'Not yet', 34323, '352648');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal_tb`
--

CREATE TABLE `withdrawal_tb` (
  `ID` bigint(11) NOT NULL,
  `CODE` bigint(11) NOT NULL,
  `AMOUNT` varchar(200) NOT NULL,
  `CLIENT_ID` bigint(11) DEFAULT NULL,
  `ACCOUNT_NUMBER` varchar(200) NOT NULL,
  `DATE_CREATED` varchar(100) DEFAULT NULL,
  `PHOTO` longtext DEFAULT NULL,
  `DATE_NORMAL` varchar(200) DEFAULT NULL,
  `DATE_MODIFIED` varchar(50) DEFAULT NULL,
  `CREATED_BY` int(11) DEFAULT NULL,
  `TAG` int(11) NOT NULL COMMENT '1:Deposit 2:Withdrawal',
  `CCODE` int(11) DEFAULT NULL,
  `HCODE` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `withdrawal_tb`
--

INSERT INTO `withdrawal_tb` (`ID`, `CODE`, `AMOUNT`, `CLIENT_ID`, `ACCOUNT_NUMBER`, `DATE_CREATED`, `PHOTO`, `DATE_NORMAL`, `DATE_MODIFIED`, `CREATED_BY`, `TAG`, `CCODE`, `HCODE`) VALUES
(1, 710509, '1100', 964216306, 'GRE 0000000025', '2022-12-22 12:15:31pm', 'none', '2022-12-22', NULL, 680445, 2, 340059, '468ce17f3b53f140e0ac10ea2d4134f839f93623'),
(2, 581963, '1950', 964216306, 'GRE 0000000025', '2023-01-10 12:16:06pm', 'none', '2023-01-10', NULL, 680445, 2, 340059, 'ae41083628f06691ec6730bde791c0f4d105a061'),
(3, 629402, '260', 558365177, 'GRE 0000000026', '2022-12-22 12:27:03pm', 'none', '2022-12-22', NULL, 680445, 2, 340059, '61768ec71175916f69787908ab6469d3572144a8'),
(4, 952051, '100', 502344178, 'GRE 0000000028', '2022-08-02 01:00:20pm', 'none', '2022-08-02', NULL, 680445, 2, 340059, '6994cc8410db3ba9d6188761d0b42d16b7f9ca20'),
(5, 380654, '100', 502344178, 'GRE 0000000028', '2022-09-21 01:01:26pm', 'none', '2022-09-21', NULL, 680445, 2, 340059, '4242b8811dba769938655cdc33a6003dfc0a0e1d'),
(6, 716224, '150', 502344178, 'GRE 0000000028', '2022-09-22 01:01:50pm', 'none', '2022-09-22', NULL, 680445, 2, 340059, 'c1b4167f7796234b0b8b5dae2fd331628dae5424'),
(7, 761574, '50', 502344178, 'GRE 0000000028', '2022-10-18 01:02:06pm', 'none', '2022-10-18', NULL, 680445, 2, 340059, '110a66e6cf68b2bc46ff7077556ce30eeba3017e'),
(8, 509076, '300', 502344178, 'GRE 0000000028', '2022-12-09 01:02:36pm', 'none', '2022-12-09', NULL, 680445, 2, 340059, 'fd84399f3390f58d937e821b1fc3237c1f44df87'),
(9, 965246, '30', 502344178, 'GRE 0000000028', '2023-02-15 01:04:03pm', 'none', '2023-02-15', NULL, 680445, 2, 340059, '6a2f571349dbd019eb3fac6caf604f1d610df917'),
(10, 519839, '1000', 118760168, 'GRE 0000000029', '2022-11-11 01:18:11pm', 'none', '2022-11-11', NULL, 680445, 2, 340059, '5aece445fda52684bb69b7e328ffec7dc27985a6'),
(11, 305347, '800', 118760168, 'GRE 0000000029', '2022-12-23 01:22:57pm', 'none', '2022-12-23', NULL, 680445, 2, 340059, '2e41a4e12ffa73007cd9496424e06ac4bd668290'),
(12, 265549, '900', 118760168, 'GRE 0000000029', '2023-06-02 01:28:21pm', 'none', '2023-06-02', NULL, 680445, 2, 340059, '89727b1bfb3f146da7d4075e3c8c3bd657df276c'),
(13, 275390, '450', 829181896, 'GRE 0000000030', '2024-06-18 05:47:09pm', 'none', '2024-06-18', NULL, 680445, 2, 340059, '6e257a76bc05e1636c34c4941fdf035e14be2a03'),
(14, 240231, '200', 829181896, 'GRE 0000000030', '2024-06-19 05:47:36pm', 'none', '2024-06-19', NULL, 680445, 2, 340059, '598793dad96f8d3b39d810dcc555974a42b69f3d'),
(15, 853318, '50', 829181896, 'GRE 0000000030', '2024-08-01 05:48:08pm', 'none', '2024-08-01', NULL, 680445, 2, 340059, '69b82fdb4dfe405046c629730e007b21ebacc29b'),
(16, 763030, '100', 576165856, 'GRE 0000000031', '2023-07-20 03:07:24pm', 'none', '2023-07-20', NULL, 680445, 2, 340059, '6a852ee1e7af2f4c030a611b792c299dd4936b51'),
(17, 712532, '50', 576165856, 'GRE 0000000031', '2023-07-24 03:07:39pm', 'none', '2023-07-24', NULL, 680445, 2, 340059, '387a41f7f955317fa5c07f5c6cfd2ea3990bf3af'),
(18, 548469, '100', 576165856, 'GRE 0000000031', '2023-08-01 03:07:58pm', 'none', '2023-08-01', NULL, 680445, 2, 340059, '809d1eaf33ac76e5bae211b08d4aa2ba405940b5'),
(19, 261361, '60', 576165856, 'GRE 0000000031', '2023-09-11 03:08:19pm', 'none', '2023-09-11', NULL, 680445, 2, 340059, '46c93f630ea4b0cdb1deace4c181d56212c3d567'),
(20, 326684, '300', 576165856, 'GRE 0000000031', '2023-11-15 03:10:34pm', 'none', '2023-11-15', NULL, 680445, 2, 340059, '41116ca6b82d286aecc6bcc5c1b6bad6fc588ada'),
(21, 208373, '100', 576165856, 'GRE 0000000031', '2023-11-29 03:11:22pm', 'none', '2023-11-29', NULL, 680445, 2, 340059, '1b3f3cc5a6a94018743dbb80528ae36e12b6f265'),
(22, 708705, '100', 576165856, 'GRE 0000000031', '2023-12-05 03:11:48pm', 'none', '2023-12-05', NULL, 680445, 2, 340059, '077e1cf1092ce5b0657ef2dc86655eb1997aeab5'),
(23, 512885, '50', 576165856, 'GRE 0000000031', '2023-12-14 03:12:08pm', 'none', '2023-12-14', NULL, 680445, 2, 340059, '5d182ce8bb71e9db4032aba9d5dbf254f7c4a146'),
(24, 576070, '300', 576165856, 'GRE 0000000031', '2024-03-12 03:12:34pm', 'none', '2024-03-12', NULL, 680445, 2, 340059, '6188853045024ecd83bd836eb552f45623e56fb1'),
(25, 638487, '70', 576165856, 'GRE 0000000031', '2024-03-16 03:13:06pm', 'none', '2024-03-16', NULL, 680445, 2, 340059, '643811f8118af9cb057bbfdfcbf0f042aec44ced'),
(26, 745549, '300', 576165856, 'GRE 0000000031', '2024-05-14 03:14:02pm', 'none', '2024-05-14', NULL, 680445, 2, 340059, '1ff3e6f38512d4b88b063bd2d0b6a45e91b2181d'),
(27, 301611, '50', 576165856, 'GRE 0000000031', '2024-06-03 03:14:31pm', 'none', '2024-06-03', NULL, 680445, 2, 340059, '31e74c5a94403fd3eeba42352777a139fb806ed7'),
(28, 230411, '200', 576165856, 'GRE 0000000031', '2024-06-03 03:15:15pm', 'none', '2024-06-03', NULL, 680445, 2, 340059, 'a9346d412775a526c7b2579604f4dd305570ed1b'),
(29, 665303, '200', 326252747, 'GRE 0000000032', '2022-07-22 03:58:24pm', 'none', '2022-07-22', NULL, 680445, 2, 340059, 'b1c3dad57946928f30ccddc4cefdf9f5a774aa15'),
(30, 470528, '300', 326252747, 'GRE 0000000032', '2022-07-25 03:58:46pm', 'none', '2022-07-25', NULL, 680445, 2, 340059, '8df8ad270e254576015174f81e6f1cfeb82f8a83'),
(31, 880762, '260', 326252747, 'GRE 0000000032', '2022-08-17 03:59:32pm', 'none', '2022-08-17', NULL, 680445, 2, 340059, '6c05e4beeaef9496066daa0df880f01b22eadd6c'),
(32, 893374, '100', 326252747, 'GRE 0000000032', '2022-09-21 04:00:40pm', 'none', '2022-09-21', NULL, 680445, 2, 340059, '2ef2f985b30a1fb392f0deb5378df795217e7161'),
(33, 308570, '300', 326252747, 'GRE 0000000032', '2022-10-12 04:01:47pm', 'none', '2022-10-12', NULL, 680445, 2, 340059, '744afa87d421da971f34cb81157f148d61e9ba54'),
(34, 199349, '20', 326252747, 'GRE 0000000032', '2022-10-19 04:02:47pm', 'none', '2022-10-19', NULL, 680445, 2, 340059, '58eec27f6e8d0a312eba604b3e3267b1c75c3b1d'),
(35, 364392, '50', 326252747, 'GRE 0000000032', '2022-10-24 04:03:23pm', 'none', '2022-10-24', NULL, 680445, 2, 340059, '8f94cc86d5a8f4fe224f9a1eb2fba0f402ed2170'),
(36, 728200, '170', 326252747, 'GRE 0000000032', '2022-10-28 04:04:31pm', 'none', '2022-10-28', NULL, 680445, 2, 340059, 'fb0d2d08828bccb391e3614b3552b6da83d4c5a3'),
(37, 362399, '100', 326252747, 'GRE 0000000032', '2022-11-12 04:07:41pm', 'none', '2022-11-12', NULL, 680445, 2, 340059, 'f8fc698c42ee47905ec31f2839b0b21678c0f8b7'),
(38, 950083, '700', 326252747, 'GRE 0000000032', '2022-11-19 04:08:15pm', 'none', '2022-11-19', NULL, 680445, 2, 340059, 'd25162fceb91dc2f35578dea2c452ba76a93aaaa'),
(39, 537333, '100', 326252747, 'GRE 0000000032', '2022-12-01 04:08:33pm', 'none', '2022-12-01', NULL, 680445, 2, 340059, '0dbe6bbbc5c9c84dc56b822e79f0416eadd0fd1e'),
(40, 581572, '300', 326252747, 'GRE 0000000032', '2022-12-08 04:08:50pm', 'none', '2022-12-08', NULL, 680445, 2, 340059, 'd9d326db3d1d155b70e2b27a0bd3a460a407e3d9'),
(41, 844045, '150', 326252747, 'GRE 0000000032', '2022-12-17 04:09:13pm', 'none', '2022-12-17', NULL, 680445, 2, 340059, '4c4effdc09eb8cd0521319215adc19e7263a2242'),
(42, 536021, '80', 326252747, 'GRE 0000000032', '2023-01-13 04:10:02pm', 'none', '2023-01-13', NULL, 680445, 2, 340059, '53d02e5cd866c09c3c5d5026b6885a32ce469b0f'),
(43, 444118, '50', 326252747, 'GRE 0000000032', '2023-01-14 04:10:15pm', 'none', '2023-01-14', NULL, 680445, 2, 340059, 'ed1610d87df170e6e56e578c58638c0baa0ab744'),
(44, 793187, '800', 326252747, 'GRE 0000000032', '2023-01-26 04:10:31pm', 'none', '2023-01-26', NULL, 680445, 2, 340059, 'd01f95b6921f6cbad056a914022c0ad81012f543'),
(45, 202908, '350', 326252747, 'GRE 0000000032', '2023-04-11 04:11:23pm', 'none', '2023-04-11', NULL, 680445, 2, 340059, '3363724adc773f9aa4ab0eaf5367711301964580'),
(46, 260703, '500', 326252747, 'GRE 0000000032', '2023-04-14 04:12:11pm', 'none', '2023-04-14', NULL, 680445, 2, 340059, '60a00932e62bb9870280eac71dcce0a40bea6fb1'),
(47, 117546, '340', 326252747, 'GRE 0000000032', '2023-05-31 04:14:01pm', 'none', '2023-05-31', NULL, 680445, 2, 340059, 'ac0075019519a9ce4eb5df635cb2e5d8aea94bb8'),
(48, 337386, '600', 326252747, 'GRE 0000000032', '2023-11-10 04:16:40pm', 'none', '2023-11-10', NULL, 680445, 2, 340059, '25f7bfbb69a9ed3d8fe508e183bbb09abdb73df6'),
(49, 525464, '500', 326252747, 'GRE 0000000032', '2024-01-08 04:18:41pm', 'none', '2024-01-08', NULL, 680445, 2, 340059, 'e3c651807e4a796dabdae5564064bd7b1bd03cfd'),
(50, 224591, '1250', 326252747, 'GRE 0000000032', '2024-02-09 04:19:22pm', 'none', '2024-02-09', NULL, 680445, 2, 340059, 'ca8f8989acf3614dc3cac94af506785f058c4010'),
(51, 720374, '200', 326252747, 'GRE 0000000032', '2024-03-08 04:20:05pm', 'none', '2024-03-08', NULL, 680445, 2, 340059, '025b10838a1e012fb3b68c9f0ba6ae12c6425086'),
(52, 708758, '200', 326252747, 'GRE 0000000032', '2024-06-10 04:21:02pm', 'none', '2024-06-10', NULL, 680445, 2, 340059, '8b9ac1e5d455b0ada82748d26ca2a586dbf14d03'),
(53, 994080, '50', 326252747, 'GRE 0000000032', '2024-07-30 04:21:46pm', 'none', '2024-07-30', NULL, 680445, 2, 340059, '5846d68a4583ed4d34e136b97ed1831c52c412d0'),
(54, 952913, '50', 326252747, 'GRE 0000000032', '2024-08-08 12:29:28pm', 'none', '2024-08-08', NULL, 680445, 2, 340059, '7f3643c7f253a16be42c3692d1e46d59bea86c6a'),
(55, 422456, '300', 576165856, 'GRE 0000000031', '2024-08-14 03:35:36pm', 'none', '2024-08-14', NULL, 680445, 2, 340059, '98e36969de3aa2a8563e5a2459190a6810e7e0e7'),
(56, 883558, '100', 326252747, 'GRE 0000000032', '2024-08-14 01:15:58pm', 'none', '2024-08-14', NULL, 680445, 2, 340059, '150d6b3a1dce19e78016b6ff3fb64141b85cc793'),
(57, 677516, '200', 576165856, 'GRE 0000000031', '2024-08-22 04:22:43pm', 'none', '2024-08-22', NULL, 680445, 2, 340059, 'c15e379ef21dea3c29da4fc1a3ccfc299acd5373'),
(58, 125515, '200', 829181896, 'GRE 0000000030', '2024-08-26 04:45:30pm', 'none', '2024-08-26', NULL, 680445, 2, 340059, 'b0ccd974da5cb5a0388f7fcb405312ad3edbfa9c'),
(59, 413443, '800', 829181896, 'GRE 0000000030', '2024-08-28 08:27:17am', 'none', '2024-08-28', NULL, 680445, 2, 340059, '34edb59ad4f76d1dd3767ac13c5ac682dba07559'),
(60, 101632, '100', 576165856, 'GRE 0000000031', '2024-08-30 03:01:03pm', 'none', '2024-08-30', NULL, 680445, 2, 340059, '8b1f8cab526486bba165b08a5b22cdb45eadb4da'),
(61, 499574, '450', 829181896, 'GRE 0000000030', '2024-09-09 10:10:00am', 'none', '2024-09-09', NULL, 680445, 2, 340059, 'f1815f86c1c2642d57aef442a3d71fd2fe5b9c1a'),
(62, 928046, '200', 576165856, 'GRE 0000000031', '2024-09-09 12:44:03pm', 'none', '2024-09-09', NULL, 680445, 2, 340059, '6b3e1ee807966849776babbbb08643d3a620b87f'),
(63, 513460, '500', 576165856, 'GRE 0000000031', '2024-09-13 02:56:03pm', 'none', '2024-09-13', NULL, 680445, 2, 340059, '0a504310ec69cffdf1459b073e3a076b6b4bca9b'),
(64, 916632, '200', 576165856, 'GRE 0000000031', '2024-09-17 05:20:43pm', 'none', '2024-09-17', NULL, 680445, 2, 340059, '5cdc5085999b788aafc498048aaf8efa4e86c8f0'),
(65, 260361, '100', 326252747, 'GRE 0000000032', '2024-09-19 03:08:18pm', 'none', '2024-09-19', NULL, 680445, 2, 340059, '4caa3112acb23179adc993a99d91a40e41d845f9'),
(66, 890473, '500', 576165856, 'GRE 0000000031', '2024-09-25 01:07:30pm', 'none', '2024-09-25', NULL, 680445, 2, 340059, 'e7f1df67322d9bf94a7c9eba26e6c90c7efe5eb2'),
(67, 890560, '50', 326252747, 'GRE 0000000032', '2024-09-26 09:19:46am', 'none', '2024-09-26', NULL, 680445, 2, 340059, '494d40683b4a064f14618449ba094d770bba2ffd'),
(68, 218510, '400', 576165856, 'GRE 0000000031', '2024-09-27 04:18:46pm', 'none', '2024-09-27', NULL, 680445, 2, 340059, 'e155700dea249c9c961cd6504968899a23ac61ad'),
(69, 789738, '100', 326252747, 'GRE 0000000032', '2024-09-30 12:16:09pm', 'none', '2024-09-30', NULL, 680445, 2, 340059, 'c89e242077178715fad1e0cb99a369f82ffb22e6'),
(70, 318994, '900', 326252747, 'GRE 0000000032', '2024-10-08 01:02:53pm', 'none', '2024-10-08', NULL, 680445, 2, 340059, 'ef7d9f6711af7b0a60075d78c86e6e7fee4a8337'),
(71, 129293, '300', 326252747, 'GRE 0000000032', '2024-10-11 10:52:07am', 'none', '2024-10-11', NULL, 680445, 2, 340059, '8fe171f4135df97337453b2151b56b4651944ea6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_number_tb`
--
ALTER TABLE `account_number_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `account_tb`
--
ALTER TABLE `account_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `acc_status_tb`
--
ALTER TABLE `acc_status_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `activation_tb`
--
ALTER TABLE `activation_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `activity_tb`
--
ALTER TABLE `activity_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USER_ROLE` (`USER_ROLE`);

--
-- Indexes for table `balance_tb`
--
ALTER TABLE `balance_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`),
  ADD KEY `ACCOUNT_NUMBER` (`ACCOUNT_NUMBER`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `charge_tb`
--
ALTER TABLE `charge_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`),
  ADD KEY `WITHDRAWAL_ID` (`WITHDRAWAL_ID`);

--
-- Indexes for table `check_tb`
--
ALTER TABLE `check_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `client_tb`
--
ALTER TABLE `client_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ACCOUNT_STATUS` (`ACCOUNT_STATUS`),
  ADD KEY `POST_BY` (`POST_BY`);

--
-- Indexes for table `client_temp_tb`
--
ALTER TABLE `client_temp_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company_tb`
--
ALTER TABLE `company_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `delist_tb`
--
ALTER TABLE `delist_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `deposit_tb`
--
ALTER TABLE `deposit_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`),
  ADD KEY `CREATED_BY` (`CREATED_BY`);

--
-- Indexes for table `dept_tb`
--
ALTER TABLE `dept_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companyid` (`companyid`);

--
-- Indexes for table `fees_tb`
--
ALTER TABLE `fees_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `fee_tb`
--
ALTER TABLE `fee_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `formfee_tb`
--
ALTER TABLE `formfee_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_tb`
--
ALTER TABLE `form_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `haccount_tb`
--
ALTER TABLE `haccount_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `hcharge_tb`
--
ALTER TABLE `hcharge_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`),
  ADD KEY `WITHDRAWAL_ID` (`WITHDRAWAL_ID`);

--
-- Indexes for table `hproduct_tb`
--
ALTER TABLE `hproduct_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `interest_tb`
--
ALTER TABLE `interest_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `loanreg_tb`
--
ALTER TABLE `loanreg_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_payment`
--
ALTER TABLE `loan_payment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CUSTOMERID` (`CUSTOMERID`),
  ADD KEY `LOANID` (`LOANID`);

--
-- Indexes for table `loan_product_tb`
--
ALTER TABLE `loan_product_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `loan_tb`
--
ALTER TABLE `loan_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `momo_trans_tb`
--
ALTER TABLE `momo_trans_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `POSTED_BY` (`POSTED_BY`);

--
-- Indexes for table `month_tb`
--
ALTER TABLE `month_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `no_account_tb`
--
ALTER TABLE `no_account_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`);

--
-- Indexes for table `penalty_tb`
--
ALTER TABLE `penalty_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CUSTOMERID` (`CUSTOMERID`),
  ADD KEY `LOANID` (`LOANID`);

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`);

--
-- Indexes for table `residence_tb`
--
ALTER TABLE `residence_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `role_settings`
--
ALTER TABLE `role_settings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `role_tb`
--
ALTER TABLE `role_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sms_tb`
--
ALTER TABLE `sms_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `status_tb`
--
ALTER TABLE `status_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subscription_tb`
--
ALTER TABLE `subscription_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `susucomm_tb`
--
ALTER TABLE `susucomm_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sync_history`
--
ALTER TABLE `sync_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `withdrawal_tb`
--
ALTER TABLE `withdrawal_tb`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`),
  ADD KEY `CREATED_BY` (`CREATED_BY`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_number_tb`
--
ALTER TABLE `account_number_tb`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `account_tb`
--
ALTER TABLE `account_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `acc_status_tb`
--
ALTER TABLE `acc_status_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `activation_tb`
--
ALTER TABLE `activation_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `activity_tb`
--
ALTER TABLE `activity_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `balance_tb`
--
ALTER TABLE `balance_tb`
  MODIFY `ID` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `charge_tb`
--
ALTER TABLE `charge_tb`
  MODIFY `ID` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `check_tb`
--
ALTER TABLE `check_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client_tb`
--
ALTER TABLE `client_tb`
  MODIFY `ID` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `client_temp_tb`
--
ALTER TABLE `client_temp_tb`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_tb`
--
ALTER TABLE `company_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `delist_tb`
--
ALTER TABLE `delist_tb`
  MODIFY `ID` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposit_tb`
--
ALTER TABLE `deposit_tb`
  MODIFY `ID` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `dept_tb`
--
ALTER TABLE `dept_tb`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fees_tb`
--
ALTER TABLE `fees_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_tb`
--
ALTER TABLE `fee_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `formfee_tb`
--
ALTER TABLE `formfee_tb`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `form_tb`
--
ALTER TABLE `form_tb`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `haccount_tb`
--
ALTER TABLE `haccount_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `hcharge_tb`
--
ALTER TABLE `hcharge_tb`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hproduct_tb`
--
ALTER TABLE `hproduct_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interest_tb`
--
ALTER TABLE `interest_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loanreg_tb`
--
ALTER TABLE `loanreg_tb`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `loan_payment`
--
ALTER TABLE `loan_payment`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `loan_product_tb`
--
ALTER TABLE `loan_product_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loan_tb`
--
ALTER TABLE `loan_tb`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `momo_trans_tb`
--
ALTER TABLE `momo_trans_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `month_tb`
--
ALTER TABLE `month_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `no_account_tb`
--
ALTER TABLE `no_account_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penalty_tb`
--
ALTER TABLE `penalty_tb`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `residence_tb`
--
ALTER TABLE `residence_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `role_settings`
--
ALTER TABLE `role_settings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `role_tb`
--
ALTER TABLE `role_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sms_tb`
--
ALTER TABLE `sms_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status_tb`
--
ALTER TABLE `status_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_tb`
--
ALTER TABLE `subscription_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `susucomm_tb`
--
ALTER TABLE `susucomm_tb`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sync_history`
--
ALTER TABLE `sync_history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `withdrawal_tb`
--
ALTER TABLE `withdrawal_tb`
  MODIFY `ID` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan_payment`
--
ALTER TABLE `loan_payment`
  ADD CONSTRAINT `loan_payment_ibfk_1` FOREIGN KEY (`CUSTOMERID`) REFERENCES `loanreg_tb` (`id`),
  ADD CONSTRAINT `loan_payment_ibfk_2` FOREIGN KEY (`LOANID`) REFERENCES `loan_tb` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
