-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 10:17 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crecent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_roll` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `user_roll`, `password`) VALUES
(1, 'admin@gmail.com', 1, '202cb962ac59075b964b07152d234b70'),
(2, 'mdikbal24@gmail.com', 1, '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `p_number` varchar(255) CHARACTER SET utf8 NOT NULL,
  `web_address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `mail`, `p_number`, `web_address`, `address`, `data`) VALUES
(10, 'admin@gmail.com', '01761341601', 'crecaent.com', 'Chittagon, Bangladesh', '24-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `courses_name`
--

CREATE TABLE `courses_name` (
  `id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_name`
--

INSERT INTO `courses_name` (`id`, `course_name`) VALUES
(5, 'Graphic Design'),
(7, 'Web Design');

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE `course_list` (
  `id` int(255) NOT NULL,
  `course_image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `instructor_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_rate` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `download_link` varchar(255) CHARACTER SET ucs2 NOT NULL,
  `date` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`id`, `course_image`, `course_name`, `instructor_name`, `course_rate`, `description`, `download_link`, `date`) VALUES
(12, 'Crecent_250_1532627535.jpg', 'Web Design', 'ikbal', '10,000', 'sfsdfsdafsadf', 'https://drive.google.com/file/d/1w_y4qkq8wAHXCQ9lj_ShRmjdOCmRFPIQ/view?usp=sharing', '25-07-18'),
(16, 'Crecent_253_1532846608.png', 'Graphic Design', 'ikbal', '12,000', 'ok', 'https://drive.google.com/file/d/1w_y4qkq8wAHXCQ9lj_ShRmjdOCmRFPIQ/view?usp=sharing', '27-07-18'),
(17, 'Crecent_3_1534792585.jpg', 'Graphic Design', 'ikbal', '9000', 'Bootstrapâ€™s form controls expand on our Rebooted form styles with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices. The example form below demonstrates common HTML form elements', 'https://v4-alpha.getbootstrap.com/components/forms/', '20-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `headnews`
--

CREATE TABLE `headnews` (
  `id` int(255) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headnews`
--

INSERT INTO `headnews` (`id`, `description`, `date`) VALUES
(18, 'à¦ªà¦¬à¦¿à¦¤à§à¦° à¦ˆà¦¦ à¦‰à¦ªà¦²à¦•à§à¦·à§‡ crescentbd 80% à¦›à¦¾à§œ ', '24-07-18'),
(19, 'à¦ªà¦¬à¦¿à¦¤à§à¦° à¦ˆà¦¦ à¦‰à¦ªà¦²à¦•à§à¦·à§‡ crescentbd 60% à¦›à¦¾à§œ ', '24-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `instructor_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `education` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `p_number` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `image`, `instructor_name`, `education`, `mail`, `p_number`, `address`, `date`) VALUES
(1, 'Instructor_of_Crecent_851_1534532008.jpg', 'ikbal', 'Bsc', 'md@gmail.com', '01628774123', 'Bangladesh', '17-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `payment_request`
--

CREATE TABLE `payment_request` (
  `id` int(255) NOT NULL,
  `payment_way` varchar(255) CHARACTER SET utf8 NOT NULL,
  `transaction_number` varchar(255) CHARACTER SET utf8 NOT NULL,
  `deposited_amount` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `download_link` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` varchar(255) CHARACTER SET utf8 NOT NULL,
  `request_check` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_request`
--

INSERT INTO `payment_request` (`id`, `payment_way`, `transaction_number`, `deposited_amount`, `user_id`, `name`, `mail`, `course_name`, `download_link`, `date`, `request_check`) VALUES
(8, 'bkash', 'sfsfsfasf', 'sfsafasfsf', 7, 'mdikbal24@gmail.com', 'mdikbal24@gmail.com', 'Graphic Design', 'https://drive.google.com/file/d/1w_y4qkq8wAHXCQ9lj_ShRmjdOCmRFPIQ/view?usp=sharing', '29-07-18', 1),
(9, 'bkash', 'casdfdf', 'afdfsaff', 7, 'mdikbal24@gmail.com', 'mdikbal24@gmail.com', 'Web', 'ok', '29-07-18', 1),
(10, 'bkash', 'asfasf', 'sfasfasf', 7, 'mdikbal24@gmail.com', 'mdikbal24@gmail.com', 'Web', 'https://drive.google.com/file/d/1w_y4qkq8wAHXCQ9lj_ShRmjdOCmRFPIQ/view?usp=sharing', '29-07-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registrationform`
--

CREATE TABLE `registrationform` (
  `id` int(255) NOT NULL,
  `image_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `p_number` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_roll` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationform`
--

INSERT INTO `registrationform` (`id`, `image_name`, `name`, `email`, `p_number`, `address`, `date`, `user_roll`, `password`) VALUES
(7, 'Student_647_1532844364.jpg', 'Washikar Mohammad Ikbal', 'mdikbal24@gmail.com', '01761341601', 'Dhaka, Bangladesh', '26-07-18', '2', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_name`
--
ALTER TABLE `courses_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_list`
--
ALTER TABLE `course_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headnews`
--
ALTER TABLE `headnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_request`
--
ALTER TABLE `payment_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationform`
--
ALTER TABLE `registrationform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `courses_name`
--
ALTER TABLE `courses_name`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `course_list`
--
ALTER TABLE `course_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `headnews`
--
ALTER TABLE `headnews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payment_request`
--
ALTER TABLE `payment_request`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `registrationform`
--
ALTER TABLE `registrationform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
