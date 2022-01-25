-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 10:55 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mms-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `morning` varchar(10) NOT NULL,
  `lunch` varchar(10) NOT NULL,
  `evening` varchar(10) NOT NULL,
  `dinner` varchar(10) NOT NULL,
  `curr_date` datetime NOT NULL,
  `morning_cost` int(11) NOT NULL,
  `lunch_cost` int(11) NOT NULL,
  `evening _cost` int(11) NOT NULL,
  `dinner_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`id`, `s_id`, `morning`, `lunch`, `evening`, `dinner`, `curr_date`, `morning_cost`, `lunch_cost`, `evening _cost`, `dinner_cost`) VALUES
(1, 53, '', '', 'p', '', '2021-01-16 15:42:47', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dddata`
--

CREATE TABLE `dddata` (
  `cty` varchar(30) NOT NULL,
  `sstt` varchar(30) NOT NULL,
  `dprmt` varchar(30) NOT NULL,
  `clss` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dddata`
--

INSERT INTO `dddata` (`cty`, `sstt`, `dprmt`, `clss`, `sem`) VALUES
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', 'Mechanical Engineering', 'F.E.', ''),
('', '', 'Civil Engineering', 'S.E.', ''),
('', '', 'Electrical Engineering', 'T.E.', ''),
('', '', 'Computer Engineering', 'B.E.', ''),
('', '', '', '', 'sem I'),
('', '', '', '', 'sem II'),
('', '', '', '', 'sem III'),
('', '', '', '', 'sem IV'),
('', '', '', '', 'sem V'),
('', '', '', '', ''),
('', '', '', '', ''),
('Achalpur', '', '', '', ''),
('Ahmednagar', '', '', '', ''),
('Akola', '', '', '', ''),
('Ambarnath', '', '', '', ''),
('Amravati', '', '', '', ''),
('Aurangabad', '', '', '', ''),
('Barshi', '', '', '', ''),
('Beed', '', '', '', ''),
('Bhivandi-Nizampur', '', '', '', ''),
('Bhusawal', '', '', '', ''),
('Chandrapur', '', '', '', ''),
('Dhule', '', '', '', ''),
('Gondia', '', '', '', ''),
('Hinganghat', '', '', '', ''),
('Ichalkaranji', '', '', '', ''),
('Jalgaon', '', '', '', ''),
('Jalna', '', '', '', ''),
('Kalyan-Dombivli', '', '', '', ''),
('Kolhapur', '', '', '', ''),
('Latur', '', '', '', ''),
('Malegaon', '', '', '', ''),
('Mira-Bhayandar', '', '', '', ''),
('Mumbai', '', '', '', ''),
('Nagpur', '', '', '', ''),
('Nanded Waghala', '', '', '', ''),
('Nandurbar', '', '', '', ''),
('Nashik', '', '', '', ''),
('Navi Mumbai', '', '', '', ''),
('Osmanabad', '', '', '', ''),
('Panvel', '', '', '', ''),
('Parbhani', '', '', '', ''),
('PCMC, Pune', '', '', '', ''),
('PMC, Pune', '', '', '', ''),
('Ratnagiri', '', '', '', ''),
('Sangli-Miraj-Kupwad', '', '', '', ''),
('Satara', '', '', '', ''),
('Solapur', '', '', '', ''),
('Thane', '', '', '', ''),
('Udgir', '', '', '', ''),
('Ulhasnagar', '', '', '', ''),
('Vasai-Virar City MC', '', '', '', ''),
('Wardha', '', '', '', ''),
('Yavatmal', '', '', '', ''),
('', 'Andhra Pradesh', '', '', ''),
('', 'Arunachal Pradesh', '', '', ''),
('', 'Assam', '', '', ''),
('', 'Bihar', '', '', ''),
('', 'Chhattisgarh', '', '', ''),
('', 'Goa', '', '', ''),
('', 'Gujarat', '', '', ''),
('', 'Haryana', '', '', ''),
('', 'Himachal Pradesh', '', '', ''),
('', 'Jharkhand', '', '', ''),
('', '', '', '', ''),
('', 'Karnataka', '', '', ''),
('', 'Kerala', '', '', ''),
('', 'Madhya Pradesh', '', '', ''),
('', 'Maharashtra', '', '', ''),
('', 'Manipur', '', '', ''),
('', 'Meghalaya', '', '', ''),
('', 'Mizoram', '', '', ''),
('', 'Nagaland', '', '', ''),
('', 'Odisha', '', '', ''),
('', 'Punjab', '', '', ''),
('', 'Rajasthan', '', '', ''),
('', 'Sikkim', '', '', ''),
('', 'Tamil Nadu', '', '', ''),
('', 'Telangana', '', '', ''),
('', 'Tripura', '', '', ''),
('', 'Uttar Pradesh', '', '', ''),
('', 'Uttarakhand', '', '', ''),
('', 'West Bengal', '', '', ''),
('', '', '', 'F.E.', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `record_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `cleanliness` int(11) NOT NULL,
  `staff_service` int(11) NOT NULL,
  `service_speed` int(11) NOT NULL,
  `env` int(11) NOT NULL,
  `average` int(11) NOT NULL,
  `suggestion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`record_id`, `id`, `quality`, `cleanliness`, `staff_service`, `service_speed`, `env`, `average`, `suggestion`) VALUES
(8, 0, 5, 4, 3, 2, 1, 12, 'klkll'),
(9, 0, 5, 4, 3, 2, 1, 14, 'ghgjhgfj'),
(10, 0, 5, 4, 3, 2, 1, 3, ''),
(11, 0, 0, 0, 0, 0, 0, 0, ''),
(12, 0, 0, 0, 0, 0, 0, 0, ''),
(13, 0, 5, 3, 3, 4, 2, 3, 'need Improvement'),
(14, 0, 5, 4, 3, 3, 2, 3, 'Need Improvement');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `name` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` varchar(255) NOT NULL,
  `tmp_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menue_price`
--

CREATE TABLE `menue_price` (
  `rec_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `mor_price` int(11) NOT NULL,
  `lun_price` int(11) NOT NULL,
  `even_price` int(11) NOT NULL,
  `din_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menue_price`
--

INSERT INTO `menue_price` (`rec_id`, `date`, `mor_price`, `lun_price`, `even_price`, `din_price`) VALUES
(1, '2021-01-12', 20, 60, 20, 80),
(2, '2021-01-12', 20, 60, 20, 80),
(3, '2021-01-12', 20, 60, 20, 80),
(4, '2021-01-12', 20, 60, 20, 80),
(5, '2021-01-12', 20, 60, 20, 80),
(6, '2021-01-12', 20, 60, 20, 80),
(7, '2021-01-12', 20, 60, 20, 80),
(8, '2021-01-12', 20, 60, 20, 80),
(9, '2021-01-12', 20, 60, 20, 80),
(10, '0000-00-00', 20, 60, 20, 80),
(11, '0000-00-00', 20, 60, 20, 80),
(12, '2021-01-12', 20, 60, 20, 80),
(13, '2021-01-12', 20, 60, 20, 80),
(14, '2021-01-12', 20, 60, 20, 80),
(15, '2021-01-12', 20, 60, 20, 80),
(16, '2021-01-12', 20, 60, 20, 80),
(17, '2021-01-12', 20, 60, 20, 80),
(18, '2021-01-12', 20, 60, 20, 80),
(19, '2021-01-12', 20, 80, 30, 100),
(20, '2021-01-12', 20, 80, 30, 100),
(21, '2021-01-12', 20, 60, 20, 80),
(22, '2021-01-12', 20, 60, 20, 80),
(23, '2021-01-12', 20, 60, 20, 80),
(24, '2021-01-16', 20, 60, 20, 80),
(25, '0000-00-00', 40, 60, 10, 50),
(26, '2021-01-16', 40, 60, 10, 50),
(27, '2021-01-16', 40, 60, 10, 50),
(28, '2021-01-16', 40, 60, 10, 50),
(29, '2021-01-16', 40, 60, 10, 50),
(30, '2021-01-16', 40, 60, 10, 50);

-- --------------------------------------------------------

--
-- Table structure for table `rpt_table`
--

CREATE TABLE `rpt_table` (
  `ser_no` int(20) NOT NULL,
  `RFID` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrations`
--

CREATE TABLE `tbl_registrations` (
  `id` int(30) NOT NULL,
  `stud_prn` bigint(30) NOT NULL,
  `stud_rollno` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `department` varchar(30) NOT NULL,
  `class` varchar(15) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `aadhar_no` varchar(12) NOT NULL,
  `pin_code` int(7) NOT NULL,
  `mbl_no` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `joining_date` date NOT NULL,
  `stud_fee` int(10) NOT NULL,
  `cur_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `photo` varchar(100) NOT NULL,
  `food_license_no` varchar(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `Rfid` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registrations`
--

INSERT INTO `tbl_registrations` (`id`, `stud_prn`, `stud_rollno`, `user_name`, `address`, `city`, `state`, `department`, `class`, `semester`, `aadhar_no`, `pin_code`, `mbl_no`, `email`, `password`, `gender`, `dob`, `joining_date`, `stud_fee`, `cur_date`, `modified_date`, `photo`, `food_license_no`, `type`, `Rfid`) VALUES
(48, 0, 0, 'kiran kanta devane saheb kaka', '', '', '', '', '', '', '', 0, '9834812053', 'kiran@gmail.com', 'Kiran@12345', '', '0000-00-00', '0000-00-00', 0, '0000-00-00', '0000-00-00', '', '12345678912345', 'Admin', ''),
(49, 0, 0, 'Pooja Anant Petkar', '', '', '', '', '', '', '', 0, '', 'pattu@gmail.com', 'Puja@123', '', '0000-00-00', '0000-00-00', 0, '0000-00-00', '0000-00-00', '', '', 'SAdmin', ''),
(51, 0, 0, 'Aishu Aishu Bhosale', '', '', '', '', '', '', '', 0, '', 'aishu4@gmail.com', 'Aishu@123', '', '0000-00-00', '0000-00-00', 0, '0000-00-00', '0000-00-00', '', '', 'SAdmin', ''),
(53, 2020201936, 85, 'Divesh divesh Naik', 'Mapusa', 'Ahmednagar', 'Goa', 'Computer Engineering', 'F.E.', 'sem II', '123456789080', 123456, '9923751972', 'div@gmail.com', 'Divesh@1234', '', '2021-01-15', '2021-01-15', 6000, '0000-00-00', '0000-00-00', 'nature-4k-pc-full-hd-wallpaper-thumb.jpg', '', 'student', 'abcd2356741213'),
(54, 1234567891, 85, 'aishu aishu aishu', 'unchgav', 'Akola', 'Maharashtra', 'Civil Engineering', 'B.E.', 'sem II', '123456789090', 456987, '9865142365', 'aishu@gmail.com', 'Bhosale@123', 'F', '2021-01-16', '2021-01-16', 4582, '0000-00-00', '0000-00-00', '915474-summer-wallpaper-1920x1080-1920x1080-hd-1080p.jpg', '', 'student', '10203040507085'),
(55, 5123478965, 62, 'Anish Anish Anish', 'Khari corner', 'Akola', 'Bihar', 'Civil Engineering', 'S.E.', 'sem III', '741023658912', 412365, '8521479630', 'anish@gmail.com', 'Anish@123', 'M', '2021-01-17', '2021-01-17', 8510, '0000-00-00', '0000-00-00', 'eiffel-tower-wallpaper-paris-4_.jpg', '', 'student', 'abcd2356741250');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `menue_price`
--
ALTER TABLE `menue_price`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `rpt_table`
--
ALTER TABLE `rpt_table`
  ADD PRIMARY KEY (`ser_no`);

--
-- Indexes for table `tbl_registrations`
--
ALTER TABLE `tbl_registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choice`
--
ALTER TABLE `choice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `menue_price`
--
ALTER TABLE `menue_price`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_registrations`
--
ALTER TABLE `tbl_registrations`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
