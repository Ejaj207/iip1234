-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 02:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iipacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_des` text NOT NULL,
  `about_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `about_title`, `about_des`, `about_status`) VALUES
(2, 'about mer', 'about desc', 0),
(3, 'about me', 'about desc', 0),
(4, 'lajklka', 'lkjakljakj', 0);

-- --------------------------------------------------------

--
-- Table structure for table `add_country`
--

CREATE TABLE `add_country` (
  `country_id` int(11) NOT NULL,
  `country_title` varchar(255) NOT NULL,
  `country_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_country`
--

INSERT INTO `add_country` (`country_id`, `country_title`, `country_status`) VALUES
(1, 'INDIA', 1),
(2, 'INDIA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `add_country11`
--

CREATE TABLE `add_country11` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(250) NOT NULL,
  `country_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `add_course`
--

CREATE TABLE `add_course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `course_desc` text NOT NULL,
  `add_file` text NOT NULL,
  `course_img` text NOT NULL,
  `course_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_course`
--

INSERT INTO `add_course` (`course_id`, `course_name`, `course_price`, `course_duration`, `course_desc`, `add_file`, `course_img`, `course_status`) VALUES
(1, 'Website Development (HTML, CSS, JAVASCRIPT, PHP, MYSQL', 4000, '5 months ', 'Front end and Back End Program ', 'Web Development', '', 1),
(2, 'Android Development', 3000, '2 months ', 'Android Development', 'Android Development', '', 1),
(3, 'Core Java and Advance Java', 5000, '4 months ', 'Core Java and Advance Java', 'Java', '', 1),
(4, '.NET', 4000, '4 months ', '.NET', '.Net', '', 1),
(5, 'I-Phone', 2000, '1 month', 'I-Phone Development Course', 'I-Phone', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `add_gallery`
--

CREATE TABLE `add_gallery` (
  `gallery_Id` int(11) NOT NULL,
  `img_title` text NOT NULL,
  `add_img` text NOT NULL,
  `gallery_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_gallery`
--

INSERT INTO `add_gallery` (`gallery_Id`, `img_title`, `add_img`, `gallery_status`) VALUES
(1, 'Image 1', '63512016758194310.0009765625', '1'),
(2, 'Image 2', '976032816758194660.001953125', '1'),
(3, 'Image 3', '86667716758194860.0029296875', '1'),
(4, 'Image 4', '695617016758195060.00390625', '1'),
(5, 'Image 5', '851292916758195250.0048828125', '1'),
(6, 'Image 6', '295585416758195420.005859375', '1'),
(7, 'Image  7', '611999616758195600.0068359375', '1'),
(8, 'Image 8', '681245716758195900.0078125', '1'),
(9, 'Image 9', '906356516758196190.0087890625', '1');

-- --------------------------------------------------------

--
-- Table structure for table `add_iq`
--

CREATE TABLE `add_iq` (
  `q_id` int(11) NOT NULL,
  `question_name` varchar(250) NOT NULL,
  `question_answer` varchar(250) NOT NULL,
  `iq_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_iq`
--

INSERT INTO `add_iq` (`q_id`, `question_name`, `question_answer`, `iq_status`) VALUES
(1, 'What is your name?', 'MD Ejaj', 1),
(2, 'What is your name?', 'RAVI GUPTA', 1),
(3, 'What is your name?', 'Pradeep Kumar', 1),
(4, 'What is your name?', 'Mukesh Kumar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `add_news`
--

CREATE TABLE `add_news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_description` text NOT NULL,
  `news_date` date NOT NULL,
  `news_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_news`
--

INSERT INTO `add_news` (`news_id`, `news_title`, `news_description`, `news_date`, `news_status`) VALUES
(13, 'ws cube 123', 'Cube Technology ', '2022-11-30', 1),
(15, 'akljalk', 'aaaa', '2022-12-13', 1),
(16, 'WS', 'Cube Technology ', '2022-11-30', 1),
(17, 'WS', 'Cube Technology ', '2022-11-30', 1),
(19, 'WS', 'Cube Technology ', '2022-11-30', 1),
(20, 'WS', 'Cube Technology ', '2022-11-30', 1),
(21, 'WS', 'Cube Technology ', '2022-11-30', 1),
(22, 'WS', 'Cube Technology ', '2022-11-30', 1),
(23, 'WS', 'Cube Technology ', '2022-11-30', 1),
(24, 'WS', 'Cube Technology ', '2022-11-30', 1),
(25, 'WS', 'Cube Technology ', '2022-11-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `add_state`
--

CREATE TABLE `add_state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_state`
--

INSERT INTO `add_state` (`state_id`, `state_name`, `country_id`, `state_status`) VALUES
(1, 'Jharkhand', 1, 1),
(2, 'Australia', 3, 1),
(3, 'WhiteHouse', 2, 1),
(4, 'Ranchi', 1, 1),
(5, 'American ', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

CREATE TABLE `add_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_mobile` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`user_id`, `user_name`, `user_password`, `user_email`, `user_mobile`) VALUES
(1, 'admin', '123', 'khanejaj121@gmail.com', '7004541875'),
(2, 'admin123', 'admin@123', 'khanejaj1d23@gmail.com', '980998089'),
(6, 'admin', 'dfafaa', 'khanejaj121@gmail.com', '1322123123'),
(7, 'admin', 'dfaaa', 'admin@gmail.com', '33333'),
(8, 'dafsaa', 'sddfdsdd', 'khanejaj121@gmail.com', '99899898'),
(9, 'dafsaa', 'sddfdsdd', 'khanejaj121@gmail.com', '99899898'),
(10, 'dafsaa', 'sddfdsdd', 'khanejaj121@gmail.com', '99899898');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(250) NOT NULL DEFAULT '',
  `admin_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin'),
(2, 'demo', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `countect_id` int(11) NOT NULL,
  `c_phone` bigint(20) NOT NULL,
  `c_mobile` bigint(20) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_website` varchar(255) NOT NULL,
  `c_map` text NOT NULL,
  `c_address` text NOT NULL,
  `c_ffacebook` varchar(255) NOT NULL,
  `c_instagram` varchar(255) NOT NULL,
  `c_linkdin` varchar(255) NOT NULL,
  `c_twitter` varchar(255) NOT NULL,
  `c_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`countect_id`, `c_phone`, `c_mobile`, `c_email`, `c_website`, `c_map`, `c_address`, `c_ffacebook`, `c_instagram`, `c_linkdin`, `c_twitter`, `c_status`) VALUES
(1, 6541255425, 45054242525, 'info@iipacademy.com', ' www.iipacademy.com', 'ravi', 'Ground Floor, Laxmi Tower, Bhaskar Circle, Ratanada, Jodhpur (Raj.)', 'ejaj.facebook.com', 'ejaj.instagram', 'ejaj1212.linkdin', 'ejaj343twitter.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_country`
--
ALTER TABLE `add_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `add_country11`
--
ALTER TABLE `add_country11`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `add_course`
--
ALTER TABLE `add_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `add_gallery`
--
ALTER TABLE `add_gallery`
  ADD PRIMARY KEY (`gallery_Id`);

--
-- Indexes for table `add_iq`
--
ALTER TABLE `add_iq`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `add_news`
--
ALTER TABLE `add_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `add_state`
--
ALTER TABLE `add_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `add_user`
--
ALTER TABLE `add_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`countect_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_country`
--
ALTER TABLE `add_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_country11`
--
ALTER TABLE `add_country11`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_course`
--
ALTER TABLE `add_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_gallery`
--
ALTER TABLE `add_gallery`
  MODIFY `gallery_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `add_iq`
--
ALTER TABLE `add_iq`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_news`
--
ALTER TABLE `add_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `add_state`
--
ALTER TABLE `add_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_user`
--
ALTER TABLE `add_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `countect_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
