-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 09:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `emg_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `relationship` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emg_mobile`
--

CREATE TABLE `emg_mobile` (
  `emg_id` int(11) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `marital_status` enum('Married','Unmarried') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `emp_id` int(11) NOT NULL,
  `job_title` varchar(45) NOT NULL,
  `pay_grade` varchar(45) NOT NULL,
  `employment_status` varchar(45) NOT NULL,
  `basic_salary` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave_count`
--

CREATE TABLE `emp_leave_count` (
  `emp_id` int(11) NOT NULL,
  `annual` int(11) NOT NULL,
  `casual` int(11) NOT NULL,
  `maternity` int(11) NOT NULL,
  `no_pay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_mobile`
--

CREATE TABLE `emp_mobile` (
  `emp_id` int(11) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

CREATE TABLE `leave_application` (
  `application_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `leave_type` varchar(45) NOT NULL,
  `num_of_days` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leave_count`
--

CREATE TABLE `leave_count` (
  `pay_grade` varchar(45) NOT NULL,
  `annual` int(11) NOT NULL,
  `casual` int(11) NOT NULL,
  `no_pay` int(11) NOT NULL,
  `maternity` int(11) NOT NULL,
  `mandatory_no_pay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `reg_number` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `emp_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `bonus` float NOT NULL,
  `incentive` float NOT NULL,
  `deductions` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supervise`
--

CREATE TABLE `supervise` (
  `subordinate_id` int(11) NOT NULL,
  `supervisor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `emp_id` int(11) NOT NULL,
  `role` enum('Admin','HR_Manager','General_Employee','Second_Manager') NOT NULL,
  `usernme` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`emg_id`),
  ADD KEY `emp_id_idx` (`emp_id`);

--
-- Indexes for table `emg_mobile`
--
ALTER TABLE `emg_mobile`
  ADD KEY `fk_emg_mobile_1_idx` (`emg_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `emp_leave_count`
--
ALTER TABLE `emp_leave_count`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `emp_mobile`
--
ALTER TABLE `emp_mobile`
  ADD KEY `fk_emp_mobile_1_idx` (`emp_id`);

--
-- Indexes for table `leave_application`
--
ALTER TABLE `leave_application`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `fk_leave_application_1_idx` (`emp_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`reg_number`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD KEY `fk_payroll_1_idx` (`emp_id`);

--
-- Indexes for table `supervise`
--
ALTER TABLE `supervise`
  ADD PRIMARY KEY (`subordinate_id`),
  ADD KEY `fk_supervise_2_idx` (`supervisor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `emg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_application`
--
ALTER TABLE `leave_application`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emergency`
--
ALTER TABLE `emergency`
  ADD CONSTRAINT `emp_id` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `emg_mobile`
--
ALTER TABLE `emg_mobile`
  ADD CONSTRAINT `fk_emg_mobile_1` FOREIGN KEY (`emg_id`) REFERENCES `emergency` (`emg_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employment`
--
ALTER TABLE `employment`
  ADD CONSTRAINT `fk_employment_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `emp_leave_count`
--
ALTER TABLE `emp_leave_count`
  ADD CONSTRAINT `fk_emp_leave_count_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `emp_mobile`
--
ALTER TABLE `emp_mobile`
  ADD CONSTRAINT `fk_emp_mobile_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `leave_application`
--
ALTER TABLE `leave_application`
  ADD CONSTRAINT `fk_leave_application_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `fk_payroll_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `supervise`
--
ALTER TABLE `supervise`
  ADD CONSTRAINT `fk_supervise_1` FOREIGN KEY (`subordinate_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supervise_2` FOREIGN KEY (`supervisor_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
