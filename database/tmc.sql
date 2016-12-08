-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 01:01 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_admin`
--

CREATE TABLE `app_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `admin_pass` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `admin_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `admin_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `admin_lname` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_level` int(11) NOT NULL,
  `admin_status` int(11) NOT NULL,
  `admin_isdelete` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_admin`
--

INSERT INTO `app_admin` (`admin_id`, `admin_user`, `admin_pass`, `admin_title`, `admin_name`, `admin_lname`, `admin_email`, `admin_level`, `admin_status`, `admin_isdelete`) VALUES
(1, 'cb0ef4c7be04ff1bf4cfcd104ef8df03251266ab', 'cb0ef4c7be04ff1bf4cfcd104ef8df03251266ab', '', 'Sper', 'Admin', '', 1, 1, 0),
(2, 'd5f3f4db6d8400f894bde2523e8247b9ff2346fb', 'd5f3f4db6d8400f894bde2523e8247b9ff2346fb', 'นางสาว', 'พรทิพย์', 'ผาสุข', '', 2, 0, 0),
(3, 'c92a181ed4f11700ac71a45e219647fcaa5077ab', 'c92a181ed4f11700ac71a45e219647fcaa5077ab', 'นาย', 'ปิยะ', 'แสงทอง', '', 3, 0, 0),
(5, '0d5ba6a47c0d1759acf7c1ffecf6375c08ae3c88', '0d5ba6a47c0d1759acf7c1ffecf6375c08ae3c88', 'นาย', 'ธีรทร', 'บุญมาทัน', '', 2, 0, 0),
(11, '68aeb8c02944e4f501a967b26125ee9dacf07edc', '68aeb8c02944e4f501a967b26125ee9dacf07edc', 'นาย', 'มานะ', 'ทดสอบ', '', 3, 2, 0),
(12, '38f078a81a2b033d197497af5b77f95b50bfcfb8', '38f078a81a2b033d197497af5b77f95b50bfcfb8', 'นาย', 'admin12', 'admin12', '', 3, 2, 0),
(13, '017f94ada91f1168a89ba4555540adc4b4f27f25', '017f94ada91f1168a89ba4555540adc4b4f27f25', 'นาย', 'สมบัติ', 'สมมติ', '', 3, 2, 0),
(14, '3893c8dea615370ce87d040b95f62f4368c1ff18', '3893c8dea615370ce87d040b95f62f4368c1ff18', 'นาย', 'มาดี', 'มีนา', 'madee@hotmail.com', 3, 2, 1),
(15, '33feced9e14a71424013c73e246be6bc544fa0f4', '33feced9e14a71424013c73e246be6bc544fa0f4', 'นาย', 'ทดสอบ', 'ทดสอบ', 'todsob@hotmail.com', 3, 0, 1),
(16, '0e9b0c5ec6459d054be9fd23d14f3d21ee6d55e1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'นาย', 'ชนาธิป', 'มั่นคง', '22ararara@hotmail.com', 3, 0, 1),
(17, '1ad7706541cbe985cdd398fbba4d29681deb39b1', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'นาย', 'มานะ', 'มีนา', '22arawrara@hotmail.com', 3, 0, 1),
(18, 'ae4f3165ec73dc1edb3bb4a66b9d758daedb4260', 'ae4f3165ec73dc1edb3bb4a66b9d758daedb4260', 'นาย', 'ชนาธิป', 'สงกะสินธ์', 'chanatip@hotmail.com', 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `app_admin_level`
--

CREATE TABLE `app_admin_level` (
  `level_id` int(11) NOT NULL,
  `level_name` varchar(50) DEFAULT NULL,
  `level_status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_admin_level`
--

INSERT INTO `app_admin_level` (`level_id`, `level_name`, `level_status`) VALUES
(1, 'Super Admin', 1),
(2, 'Admin', 1),
(3, 'Staff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detailcomplain`
--

CREATE TABLE `detailcomplain` (
  `ID` int(20) NOT NULL,
  `IdPeople` text COLLATE utf8_bin NOT NULL,
  `TittleName` text COLLATE utf8_bin NOT NULL,
  `Name` text COLLATE utf8_bin NOT NULL,
  `SurName` text COLLATE utf8_bin NOT NULL,
  `Relationship` text COLLATE utf8_bin NOT NULL,
  `PhoneNumber` text COLLATE utf8_bin NOT NULL,
  `Email` text COLLATE utf8_bin NOT NULL,
  `Adress` text COLLATE utf8_bin NOT NULL,
  `PhoneHome` text COLLATE utf8_bin NOT NULL,
  `NameDoctor` text COLLATE utf8_bin NOT NULL,
  `HospitalName` text COLLATE utf8_bin NOT NULL,
  `Detai` text COLLATE utf8_bin NOT NULL,
  `Day` text COLLATE utf8_bin NOT NULL,
  `AtDay` text COLLATE utf8_bin NOT NULL,
  `IdCode` text COLLATE utf8_bin NOT NULL,
  `responsiblePerson` text COLLATE utf8_bin NOT NULL,
  `Main` text COLLATE utf8_bin,
  `Status` text COLLATE utf8_bin NOT NULL,
  `RecipientComplaints` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `detailcomplain`
--

INSERT INTO `detailcomplain` (`ID`, `IdPeople`, `TittleName`, `Name`, `SurName`, `Relationship`, `PhoneNumber`, `Email`, `Adress`, `PhoneHome`, `NameDoctor`, `HospitalName`, `Detai`, `Day`, `AtDay`, `IdCode`, `responsiblePerson`, `Main`, `Status`, `RecipientComplaints`) VALUES
(35, '1102002284404', 'นาย', 'Dbbxb', 'ดาต้า', 'Xhbxhxb', '087689756', 'nxbxhdb@hxhh.com', 'บ้านเลขที่ #:#Bzbzbx\nซอย/หมู่บ้าน #:#Xhhxbx\nถนน #:#Zhvzhxh\nตำบล/แขวง #:#Xhxbxbx\nอำเภอ/เขต #:#Gxbbzb\nจังหวัด #:#ขอนแก่น\nไปรษณีย์ #:#97979', '', '1 : นายแพทย์  asdf  wwww  12321\n2 : นายแพทย์  zzzzz  ggggg  43143\n3 : นายแพทย์  android  sql  54343\n4 : นายแพทย์  sim  dtac  66654\n', 'วิชระ', 'ทดสอบ1', '2016-12-08  ถึง  2016-12-08', '2016-12-08', 'eTMCm08122016044359278', 'ไม่มีผู้รับผิดชอบ', 'ทดสอบ1', '1', 'ไม่มีผู้รับเรื่อง');

-- --------------------------------------------------------

--
-- Table structure for table `detaildoctor`
--

CREATE TABLE `detaildoctor` (
  `id` int(30) NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `surname` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numbercode` text COLLATE utf8_bin NOT NULL,
  `hospital` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `detaildoctor`
--

INSERT INTO `detaildoctor` (`id`, `title`, `name`, `surname`, `numbercode`, `hospital`) VALUES
(1, 'นายแพทย์', 'asdf', 'wwww', '12321', 'aaaaaa'),
(2, 'นายแพทย์', 'zzzzz', 'ggggg', '43143', 'ios'),
(3, 'นายแพทย์', 'sumsung', 'java', '13445', 'football'),
(4, 'นายแพทย์', 'android', 'sql', '54343', 'database'),
(5, 'นายแพทย์', 'sim', 'dtac', '66654', 'ais'),
(6, 'นายแพทย์', 'mane', 'php', '99845', 'england'),
(7, 'นายแพทย์', 'ronaldo', 'cr7', '43432', 'Real'),
(8, 'นายแพทย์', 'zoo', 'qrcode', '67651', 'scan'),
(9, 'นายแพทย์', 'fafour', 'se', '19099', 'england'),
(10, 'นายแพทย์', 'ชาติชาย', 'ไม่มี', '12098', 'วชิระ'),
(11, 'นายแพทย์', 'ดีดี', 'มีมี', '123456', 'เดบีซี');

-- --------------------------------------------------------

--
-- Table structure for table `historylogin`
--

CREATE TABLE `historylogin` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `date_time` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `historylogin`
--

INSERT INTO `historylogin` (`id`, `username`, `date_time`) VALUES
(1, 'four', '29/11/2016 13:53:38'),
(2, 'fafour', '29/11/2016 14:30:05'),
(3, 'four', '29/11/2016 14:44:20'),
(4, 'four', '29/11/2016 14:55:52'),
(5, 'four', '29/11/2016 15:00:12'),
(6, 'four', '29/11/2016 15:37:51'),
(7, 'four', '29/11/2016 15:41:20'),
(8, 'four', '29/11/2016 15:48:58'),
(9, 'four', '30/11/2016 09:57:15'),
(10, 'four', '01/12/2016 11:09:30'),
(11, 'fafour', '01/12/2016 11:14:56'),
(12, 'fafour', '01/12/2016 12:35:25'),
(13, 'fafour', '01/12/2016 13:46:40'),
(14, 'fafour', '01/12/2016 16:06:38'),
(15, 'four', '01/12/2016 16:34:59'),
(16, 'four', '01/12/2016 17:22:52'),
(17, 'four', '02/12/2016 10:46:34'),
(18, 'four', '02/12/2016 14:48:17'),
(19, 'four', '02/12/2016 14:51:35'),
(20, 'four', '02/12/2016 15:47:04'),
(21, 'four', '02/12/2016 16:13:08'),
(22, 'four', '02/12/2016 16:14:21'),
(23, 'four', '02/12/2016 16:18:25'),
(24, 'four', '02/12/2016 16:36:01'),
(25, 'four', '02/12/2016 16:51:47'),
(26, 'four', '02/12/2016 16:54:56'),
(27, 'four', '02/12/2016 17:06:06'),
(28, 'four', '02/12/2016 17:16:58'),
(29, 'four', '02/12/2016 17:31:56'),
(30, 'four', '03/12/2016 18:16:15'),
(31, 'four', '03/12/2016 20:03:01'),
(32, 'four', '03/12/2016 20:47:34'),
(33, 'four', '03/12/2016 20:53:26'),
(34, 'four', '03/12/2016 20:56:52'),
(35, 'four', '03/12/2016 21:07:23'),
(36, 'four', '03/12/2016 21:15:18'),
(37, 'four', '03/12/2016 21:23:29'),
(38, 'four', '03/12/2016 21:30:34'),
(39, 'four', '03/12/2016 21:33:21'),
(40, 'four', '03/12/2016 21:53:08'),
(41, 'four', '03/12/2016 21:58:17'),
(42, 'four', '03/12/2016 22:08:31'),
(43, 'four', '04/12/2016 17:28:33'),
(44, 'four', '04/12/2016 17:50:32'),
(45, 'four', '04/12/2016 19:04:44'),
(46, 'four', '04/12/2016 19:05:39'),
(47, 'fafour', '04/12/2016 19:06:20'),
(48, 'four', '06/12/2016 09:55:07'),
(49, 'four', '06/12/2016 12:08:47'),
(50, 'four', '06/12/2016 12:19:14'),
(51, 'four', '06/12/2016 12:29:24'),
(52, 'four', '06/12/2016 14:21:49'),
(53, 'four', '06/12/2016 14:41:55'),
(54, 'four', '06/12/2016 15:07:03'),
(55, 'four', '06/12/2016 15:22:08'),
(56, 'four', '06/12/2016 15:27:58'),
(57, 'four', '06/12/2016 15:37:07'),
(58, 'four', '06/12/2016 15:39:16'),
(59, 'four', '06/12/2016 15:54:06'),
(60, 'four', '06/12/2016 16:13:31'),
(61, 'four', '06/12/2016 16:20:55'),
(62, 'four', '06/12/2016 16:28:33'),
(63, 'four', '06/12/2016 16:33:49'),
(64, 'four', '06/12/2016 16:52:25'),
(65, 'four', '06/12/2016 16:55:47'),
(66, 'four', '06/12/2016 16:59:32'),
(67, 'four', '06/12/2016 17:01:56'),
(68, 'four', '06/12/2016 17:08:07'),
(69, 'four', '06/12/2016 17:15:16'),
(70, 'four', '06/12/2016 17:17:37'),
(71, 'four', '06/12/2016 17:19:01'),
(72, 'four', '06/12/2016 17:39:18'),
(73, 'four', '06/12/2016 17:53:04'),
(74, 'four', '06/12/2016 18:03:33'),
(75, 'four', '06/12/2016 18:07:32'),
(76, 'four', '06/12/2016 18:35:13'),
(77, 'four', '06/12/2016 18:38:07'),
(78, 'four', '06/12/2016 18:40:50'),
(79, 'four', '06/12/2016 18:49:54'),
(80, 'four', '06/12/2016 18:55:08'),
(81, 'four', '07/12/2016 10:56:40'),
(82, 'four', '07/12/2016 11:28:22'),
(83, 'four', '07/12/2016 11:43:15'),
(84, 'four', '07/12/2016 12:06:08'),
(85, 'four', '07/12/2016 12:26:40'),
(86, 'four', '07/12/2016 16:00:18'),
(87, 'four', '07/12/2016 16:18:46'),
(88, 'four', '08/12/2016 10:25:49'),
(89, 'four', '08/12/2016 14:22:06'),
(90, 'four', '08/12/2016 14:55:18'),
(91, 'four', '08/12/2016 15:21:04'),
(92, 'four', '08/12/2016 15:36:38'),
(93, 'four', '08/12/2016 15:51:57'),
(94, 'four', '08/12/2016 15:57:22'),
(95, 'four', '08/12/2016 16:37:32'),
(96, 'four', '08/12/2016 16:44:38'),
(97, 'four', '08/12/2016 16:49:51'),
(98, 'four', '08/12/2016 16:57:08'),
(99, 'four', '08/12/2016 16:59:28'),
(100, 'four', '08/12/2016 17:02:20'),
(101, 'four', '08/12/2016 17:06:06'),
(102, 'four', '08/12/2016 17:07:09'),
(103, 'four', '08/12/2016 17:13:00'),
(104, 'four', '08/12/2016 17:18:43'),
(105, 'four', '08/12/2016 17:28:21'),
(106, 'four', '08/12/2016 17:49:17'),
(107, 'four', '08/12/2016 17:54:12'),
(108, 'four', '08/12/2016 17:57:40'),
(109, 'four', '08/12/2016 18:17:24'),
(110, 'four', '08/12/2016 18:22:43'),
(111, 'four', '08/12/2016 18:26:12'),
(112, 'four', '08/12/2016 18:26:58'),
(113, 'four', '08/12/2016 18:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `imageupload`
--

CREATE TABLE `imageupload` (
  `id` int(11) NOT NULL,
  `image_data` text COLLATE utf8_bin NOT NULL,
  `image_tag` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `imageupload`
--

INSERT INTO `imageupload` (`id`, `image_data`, `image_tag`) VALUES
(78, 'http://192.168.1.47/tmc_ethic/pic/01102002284404.jpg', '1102002284404');

-- --------------------------------------------------------

--
-- Table structure for table `leveadmin`
--

CREATE TABLE `leveadmin` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leveadmin`
--

INSERT INTO `leveadmin` (`id`, `name`, `level`) VALUES
(1, 'Authorities', 1),
(2, 'Admin', 2),
(3, 'SuperAdmin', 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(10) NOT NULL,
  `Username` varchar(30) COLLATE utf8_bin NOT NULL,
  `Password` varchar(30) COLLATE utf8_bin NOT NULL,
  `NameUser` text COLLATE utf8_bin NOT NULL,
  `SurNameUser` text COLLATE utf8_bin NOT NULL,
  `Level` varchar(11) COLLATE utf8_bin NOT NULL,
  `Status` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Username`, `Password`, `NameUser`, `SurNameUser`, `Level`, `Status`) VALUES
(12, 'four', '123456789', 'gtuiiffgg', 'cgjk', '2', '1'),
(19, 'fafour', '12345678', 'Hxhdg', 'Hsgdfgd', '1', '1'),
(21, 'Max', '1234567890', 'Phanuwat', 'P', '2', '1'),
(22, 'psu', '12345678', 'Zvzb', 'Gzvbxcx', '2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_authority`
--

CREATE TABLE `tb_authority` (
  `aut_id` int(11) NOT NULL,
  `aut_title` varchar(50) NOT NULL,
  `aut_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `aut_lname` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `aut_isdelete` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_authority`
--

INSERT INTO `tb_authority` (`aut_id`, `aut_title`, `aut_name`, `aut_lname`, `aut_isdelete`) VALUES
(0, '-', '', '', 0),
(1, 'นาย', 'ทรงชัย', 'ศักดิ์แก้ว', 0),
(2, 'นางสาว', 'พรทิพย์', 'ผาสุข', 0),
(3, 'นาย', 'ปิยะ', 'แสงทอง', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_complaint`
--

CREATE TABLE `tb_complaint` (
  `com_id` int(11) NOT NULL,
  `com_code` varchar(22) NOT NULL,
  `com_card_number` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `com_title_name` varchar(50) NOT NULL,
  `com_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `com_lname` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `no_address` varchar(50) NOT NULL,
  `alley` varchar(100) NOT NULL,
  `road` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `prefecture` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `relevance` text NOT NULL,
  `com_tel` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `com_email` varchar(50) NOT NULL,
  `com_date` datetime NOT NULL,
  `com_status` int(11) NOT NULL DEFAULT '1',
  `authority_id` int(11) NOT NULL COMMENT 'เจ้าหน้าที่รับเรื่อง',
  `PhoneHome` varchar(20) NOT NULL,
  `responsiblePerson` varchar(200) NOT NULL,
  `Main` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_complaint`
--

INSERT INTO `tb_complaint` (`com_id`, `com_code`, `com_card_number`, `com_title_name`, `com_name`, `com_lname`, `no_address`, `alley`, `road`, `district`, `prefecture`, `province`, `zip_code`, `relevance`, `com_tel`, `com_email`, `com_date`, `com_status`, `authority_id`, `PhoneHome`, `responsiblePerson`, `Main`) VALUES
(26, 'eTMCm08122016044359278', '1102002284404', 'นาย', 'Dbbxb', 'ดาต้า', 'Bzbzbx', 'Xhhxbx', 'Zhvzhxh', 'Xhxbxbx', 'Gxbbzb', 'ขอนแก่น', '97979', 'Xhbxhxb', '087689756', 'nxbxhdb@hxhh.com', '2016-12-08 16:43:51', 1, 0, '', 'ไม่มีผู้รับผิดชอบ', 'ทดสอบ1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_doctor`
--

CREATE TABLE `tb_doctor` (
  `doc_id` int(11) NOT NULL,
  `doc_title` varchar(50) COLLATE utf8_bin NOT NULL,
  `doc_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `doc_lname` varchar(100) COLLATE utf8_bin NOT NULL,
  `doc_code` varchar(20) COLLATE utf8_bin NOT NULL,
  `FK_com_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tb_doctor`
--

INSERT INTO `tb_doctor` (`doc_id`, `doc_title`, `doc_name`, `doc_lname`, `doc_code`, `FK_com_id`) VALUES
(51, 'นายแพทย์', 'asdf', 'wwww', '12321', 26),
(52, 'นายแพทย์', 'sim', 'dtac', '66654', 26),
(53, 'นายแพทย์', 'zzzzz', 'ggggg', '43143', 26),
(54, 'นายแพทย์', 'android', 'sql', '54343', 26);

-- --------------------------------------------------------

--
-- Table structure for table `tb_information`
--

CREATE TABLE `tb_information` (
  `infor_id` int(11) NOT NULL,
  `hospital` varchar(100) COLLATE utf8_bin NOT NULL,
  `detail_complaint` text COLLATE utf8_bin NOT NULL,
  `date_scene` datetime NOT NULL,
  `location` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'แพทยสภา',
  `comID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tb_information`
--

INSERT INTO `tb_information` (`infor_id`, `hospital`, `detail_complaint`, `date_scene`, `location`, `comID`) VALUES
(30, 'วิชระ', 'ทดสอบ1', '2016-12-08 16:43:51', 'แพทยสภา', 26);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `st_id` int(11) NOT NULL,
  `st_title` varchar(200) COLLATE utf8_bin NOT NULL,
  `st_isdelete` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`st_id`, `st_title`, `st_isdelete`) VALUES
(1, 'ส่งเรื่องผ่านระบบ รอยื่นเอกสาร', 0),
(2, 'ส่งเรื่องร้องเรียนแล้ว', 0),
(3, 'ไม่รับเรื่องร้องเรียน', 0),
(4, 'ไม่อยู่ในความรับผิดชอบ', 0),
(5, 'กำลังดำเนินการ', 0),
(6, 'รับเรื่องร้องเรียน', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_admin`
--
ALTER TABLE `app_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `app_admin_level`
--
ALTER TABLE `app_admin_level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `detailcomplain`
--
ALTER TABLE `detailcomplain`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `detaildoctor`
--
ALTER TABLE `detaildoctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historylogin`
--
ALTER TABLE `historylogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imageupload`
--
ALTER TABLE `imageupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leveadmin`
--
ALTER TABLE `leveadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_authority`
--
ALTER TABLE `tb_authority`
  ADD PRIMARY KEY (`aut_id`);

--
-- Indexes for table `tb_complaint`
--
ALTER TABLE `tb_complaint`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `tb_information`
--
ALTER TABLE `tb_information`
  ADD PRIMARY KEY (`infor_id`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_admin`
--
ALTER TABLE `app_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `app_admin_level`
--
ALTER TABLE `app_admin_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `detailcomplain`
--
ALTER TABLE `detailcomplain`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `detaildoctor`
--
ALTER TABLE `detaildoctor`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `historylogin`
--
ALTER TABLE `historylogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `imageupload`
--
ALTER TABLE `imageupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `leveadmin`
--
ALTER TABLE `leveadmin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_complaint`
--
ALTER TABLE `tb_complaint`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `tb_information`
--
ALTER TABLE `tb_information`
  MODIFY `infor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
