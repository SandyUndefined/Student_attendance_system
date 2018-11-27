-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 08:57 PM
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
-- Database: `student_attendance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(65) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Roll` varchar(255) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Department` varchar(250) NOT NULL,
  `Sem` varchar(250) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ID`, `Name`, `Roll`, `Email`, `Department`, `Sem`, `Date`, `Status`) VALUES
(1, 'Sagar Roy', '33401215003', 'amlanghosh@gmail.com', 'BCA', '5', '2018-11-27', 'Present'),
(2, 'Srawan Chhetri', '33401215004', 'amlanghosh@gmail.com', 'BCA', '5', '2018-11-27', 'Present'),
(3, 'Sonam Tamang', '33401215005', 'amlanghosh@gmail.com', 'BCA', '5', '2018-11-27', 'Present'),
(4, 'Armaan Chhetri', '33401216001', 'amlanghosh@gmail.com', 'BCA', '1', '2018-11-27', 'Present'),
(5, 'Angat Chhetri', '33401216002', 'amlanghosh@gmail.com', 'BCA', '1', '2018-11-27', 'Present'),
(6, 'Siddhant Rai', '33401216004', 'amlanghosh@gmail.com', 'BCA', '1', '2018-11-27', 'Present'),
(7, 'Nitin Rai', '33401217002', 'amlanghosh@gmail.com', 'BCA', '2', '2018-11-27', 'Present'),
(8, 'Abishek Khampa', '33401219003', 'amlanghosh@gmail.com', 'BCA', '4', '2018-11-27', 'Present'),
(9, 'Nagendra Bist', '33401219004', 'amlanghosh@gmail.com', 'BCA', '4', '2018-11-27', 'Present'),
(10, 'Aayush Pradhan', '33401219005', 'amlanghosh@gmail.com', 'BCA', '4', '2018-11-27', 'Present'),
(11, 'Tsewang Bhutia', '33401211101', 'ratnankurmajumdar@gmail.com', 'MCA', '2', '2018-11-27', 'Present'),
(12, 'Ashmita Thapa', '33401211102', 'ratnankurmajumdar@gmail.com', 'MCA', '2', '2018-11-27', 'Present'),
(13, 'Rashmi Thapa', '33401211103', 'ratnankurmajumdar@gmail.com', 'MCA', '2', '2018-11-27', 'Present'),
(14, 'Richa Pradhan', '33401211104', 'ratnankurmajumdar@gmail.com', 'MCA', '2', '2018-11-27', 'Present'),
(15, 'Swarnim Rai', '33401211301', 'ratnankurmajumdar@gmail.com', 'MCA', '4', '2018-11-27', 'Present'),
(16, 'Sayam Tamang', '33401211302', 'ratnankurmajumdar@gmail.com', 'MCA', '4', '2018-11-27', 'Present'),
(17, 'Shasi Limbu', '33401211303', 'ratnankurmajumdar@gmail.com', 'MCA', '4', '2018-11-27', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(25) NOT NULL,
  `SNAME` varchar(200) NOT NULL,
  `DOB` date NOT NULL,
  `PHONE` bigint(20) NOT NULL,
  `ROLL` bigint(20) NOT NULL,
  `DEPT` varchar(35) NOT NULL,
  `SEM` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `SNAME`, `DOB`, `PHONE`, `ROLL`, `DEPT`, `SEM`) VALUES
(1, 'Armaan Chhetri', '1998-11-11', 9874653155, 33401216001, 'BCA', '1'),
(2, 'Angat Chhetri', '1995-11-11', 9745651286, 33401216002, 'BCA', '1'),
(3, 'Sourav Thapa', '1996-04-28', 9745632815, 33401216003, 'BCA', '1'),
(4, 'Siddhant Rai', '1996-05-14', 9546781235, 33401216004, 'BCA', '1'),
(5, 'Ankit Thapa', '1998-06-21', 9631549845, 33401216005, 'BCA', '1'),
(6, 'Neil Sharma', '1996-05-11', 6325895828, 33401217001, 'BCA', '2'),
(7, 'Nitin Rai', '1997-09-17', 9865752382, 33401217002, 'BCA', '2'),
(8, 'Mukesh Sharma', '1998-08-12', 9884567512, 33401217003, 'BCA', '2'),
(9, 'John Lepcha', '1997-06-17', 9568236445, 33401217004, 'BCA', '2'),
(10, 'Nawazuddin Siddiqui', '1998-03-15', 9865252621, 33401217005, 'BCA', '2'),
(11, 'Ujjwal Rai', '1996-10-12', 6578945123, 33401218001, 'BCA', '3'),
(12, 'Ditshen Bhutia ', '1996-02-23', 6987412563, 33401218002, 'BCA', '3'),
(13, 'Nudenla Tamang', '1999-06-24', 6789541285, 33401218003, 'BCA', '3'),
(14, 'Prayash Rai', '1996-00-14', 6987412587, 33401218004, 'BCA', '3'),
(15, 'Bashist Chhetri', '1996-07-28', 6325897465, 33401218005, 'BCA', '3'),
(16, 'Mayank Sharma', '1996-04-13', 6895471254, 33401219001, 'BCA', '4'),
(17, 'Aakash Raju', '1996-08-25', 6936582147, 33401219002, 'BCA', '4'),
(18, 'Abishek Khampa', '1995-12-25', 6698574412, 33401219003, 'BCA', '4'),
(19, 'Nagendra Bist', '1996-05-18', 662255887744, 33401219004, 'BCA', '4'),
(20, 'Aayush Pradhan', '1999-12-29', 6654879245, 33401219005, 'BCA', '4'),
(21, 'Sandeep Sharma', '1996-09-19', 6845795845, 33401215001, 'BCA', '5'),
(22, 'Sylvester Lepcha', '1998-12-25', 9856214574, 33401215002, 'BCA', '5'),
(23, 'Sagar Roy', '1996-02-15', 7452169854, 33401215003, 'BCA', '5'),
(24, 'Srawan Chhetri', '1995-12-23', 7547712635, 33401215004, 'BCA', '5'),
(25, 'Sonam Tamang', '1996-10-12', 9804586952, 33401215005, 'BCA', '5'),
(26, 'Abishek Pradhan', '1995-10-08', 9854712635, 33401214001, 'BCA', '6'),
(27, 'Rajnish Sharma', '1996-01-28', 9854762314, 33401214002, 'BCA', '6'),
(28, 'Nitant Gurung', '1996-03-25', 6451789547, 33401214003, 'BCA', '6'),
(29, 'Prashant Gurung', '1994-05-14', 9632587412, 33401214005, 'BCA', '6'),
(30, 'Karan Subba', '1996-04-15', 6894512697, 33401214005, 'BCA', '6'),
(31, 'Adarsh Chhetri', '1995-12-14', 6547895874, 33401210201, 'MCA', '1'),
(32, 'Kashyap Sharma', '1993-03-03', 6325147895, 33401210202, 'MCA', '1'),
(33, 'Pranil Chhetri', '1993-07-21', 6632588741, 33401210203, 'MCA', '1'),
(34, 'Pasil Chhetri', '1992-08-11', 6998445712, 33401210204, 'MCA', '1'),
(35, 'Nisa Tamang', '1995-09-19', 8457126532, 33401210205, 'MCA', '1'),
(36, 'Tsewang Bhutia', '1996-07-22', 8016451278, 33401211101, 'MCA', '2'),
(37, 'Ashmita Thapa', '1996-10-12', 8016325547, 33401211102, 'MCA', '2'),
(38, 'Rashmi Thapa', '1996-01-23', 8024578124, 33401211103, 'MCA', '2'),
(39, 'Richa Pradhan', '1997-05-18', 8026547896, 33401211104, 'MCA', '2'),
(40, 'Rupa Gurung', '1998-10-16', 9804577412, 33401211105, 'MCA', '2'),
(41, 'Gulshan Dhasmana', '1996-06-26', 7841452104, 33401211201, 'MCA', '3'),
(42, 'Vijay Limbu', '1996-09-15', 6654789541, 33401211202, 'MCA', '3'),
(43, 'Tshering Tamang ', '1995-09-10', 7412365874, 33401211203, 'MCA', '3'),
(44, 'Timothy Sharma ', '1993-12-20', 9804512457, 33401211204, 'MCA', '3'),
(45, 'Vishal Varma', '1995-12-27', 9854127468, 33401211205, 'MCA', '3'),
(46, 'Swarnim Rai', '1995-06-16', 8015423651, 33401211301, 'MCA', '4'),
(47, 'Sayam Tamang', '1996-03-12', 9804652317, 33401211302, 'MCA', '4'),
(48, 'Shasi Limbu', '1996-07-24', 8016235478, 33401211303, 'MCA', '4'),
(49, 'Sanjeev Limbu', '1996-07-04', 9804532147, 33401211304, 'MCA', '4'),
(50, 'Sangam Pradhan', '1998-07-25', 9547812456, 33401211305, 'MCA', '4'),
(51, 'Rajeev Magar', '1995-02-19', 9801245741, 33401211501, 'MCA', '5'),
(52, 'Prajan Poudel', '1996-12-01', 9805632587, 33401211502, 'MCA', '5'),
(53, 'Penang Lama', '1997-01-14', 7458796581, 33401211503, 'MCA', '5'),
(54, 'Pooja Pradhan', '1998-03-16', 8451269802, 33401211504, 'MCA', '5'),
(55, 'Aakash Limbu', '1996-09-17', 9820145784, 33401211505, 'MCA', '5'),
(56, 'Neylam Limbu', '1994-06-21', 9804523652, 33401211601, 'MCA', '6'),
(57, 'Neha Rai ', '1998-05-25', 9804578451, 33401211602, 'MCA', '6'),
(58, 'Kunal Sahu', '1997-01-28', 8012456322, 33401211603, 'MCA', '6'),
(59, 'Raman Sahu', '1996-09-08', 9412937035, 33401211604, 'MCA', '6'),
(60, 'Santosh Lama', '1996-12-27', 9845217455, 33401211605, 'MCA', '6');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(65) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `STATE` varchar(100) NOT NULL,
  `CITY` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `STATE`, `CITY`) VALUES
(1, 'Apurba Chakroborty', 'apurbachakroborty@gmail.com', '1234', 'West Bengal', 'SILIGURI'),
(2, 'Amlan Ghosh', 'amlanghosh@gmail.com', '1234', 'West Bengal', 'SILIGURI'),
(3, 'Tumpa banerjee', 'tumpabanerjee@gmail.com', '1234', 'West Bengal', 'SILIGURI'),
(4, 'Ratnankur Majumdar', 'ratnankurmajumdar@gmail.com', '1234', 'West Bengal', 'SILIGURI'),
(5, 'Pratiusha Guha', 'pratiushaguha@gmail.com', '1234', 'West Bengal', 'SILIGURI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
