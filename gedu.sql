-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 02:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_pass` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_pass`) VALUES
(123456);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `score` int(100) DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `score`, `level`) VALUES
('1102', 'ชายวิชชากร', '1102', 140, 2),
('1104', 'เด็กชายเอกวัฒน์ ทองพรหม', '1104', 150, 2),
('1181', 'เด็กหญิงปาริฉัตร โสธรรมมงคล', '1181', 230, 3),
('1196', 'เด็กชายเดชานนท์ สงครามยศ', '1196', 150, 2),
('1206', 'เด็กชายพีระพัฒน์ แก่นศรียา', '1206', 210, 3),
('1270', 'เด็กชายธนวัฒน์ ศรีเพ็ง', '1270', 160, 2),
('1271', 'เด็กชายวรเมธ พูลผล', '1271', 160, 2),
('1279', 'เด็กหญิงญาณิศา สุจิมงคล', '1279', 220, 3),
('1280', 'เด็กหญิงพัทธ์ธีรา ไชยสิทธิ์', '1280', 240, 3),
('1299', 'เด็กชายบุญญฤทธิ์ ศรีวรพงษ์เดช', '1299', 270, 3),
('1312', 'เด็กหญิงธนภรณ์ สารมะโน', '1312', 80, 1),
('1332', 'สุรางคนา', '1332', 250, 3),
('1333', 'ศศิภัสสร จำปาทอง', '1333', 150, 2),
('1335', 'กนกพร จิตตมาตย์', '1335', 260, 3),
('1632', 'เด็กหญิงวิชชุตา ศรีถาน', '1632', 180, 2),
('1633', 'เด็กหญิงศิรภัสสร บุญชู', '1633', 160, 2),
('1764', 'เด็กชายปฐมชัย ศรีบุรินทร์', '1764', 230, 2),
('1770', 'เด็กหญิงรัตน์ดาพร สีตา', '1770', 90, 1),
('2116', 'เด็กชายขุนศึก  คำแก้ว', '2116', 150, 2),
('2118', 'เด็กหญิงอภิญญา  สระไสย์', '2118', 150, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
