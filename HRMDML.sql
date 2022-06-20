-- Seeds

--
-- Dumping data for table `ORGANIZATION`
--

INSERT INTO `ORGANIZATION` (`reg_number`, `name`, `address`) VALUES
(1, 'Jupiter Apperals', 'Union Place');


--
-- Dumping data for table `LEAVE_COUNT`
--

INSERT INTO `LEAVE_COUNT` (`pay_grade`, `annual`, `casual`, `no_pay`, `maternity`, `mandatory_no_pay`) VALUES
('Level 1', 10, 10, 15, 90, 30),
('Level 2', 20, 20, 25, 90, 30),
('Level 3', 30, 30, 40, 120, 40);

-- ====================================================

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `firstname`, `lastname`, `address`, `date_of_birth`, `marital_status`, `email`) VALUES
(1, 'Akila', 'Gamage', 'Katubedda, Moratuwa', '1999-07-04', 1, 'akila@db.com'),
(2, 'Deshan', 'Lakshitha', 'Galle', '1999-02-08', 2, 'deshan@db.com'),
(3, 'Dinuka', 'Nuwan', 'Galle', '1999-04-30', 1,'dinuka@db.com'),
(4, 'Jalitha', 'Kalsara', 'Galle', '1999-10-25', 2, 'jalitha@db.com'),
(5, 'Kasun', 'Isuranga', 'Hikkaduwa', '1999-01-01', 1, 'kasun@db.com');

--
-- Dumping data for table `emp_mobile`
--

INSERT INTO `emp_mobile` (`emp_id`, `mobile`) VALUES
(1, '712334567'),
(2, '0723654789'),
(3, '0745612375'),
(5, '0759874623'),
(1, '0783214567');

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`emg_id`, `emp_id`, `name`, `relationship`) VALUES
(1, 1, 'Akila Emergency 1', 'relationship1'),
(2, 4, 'Jalitha Emergency 1', 'relationship2'),
(3, 3, 'Dinuka Emergency 1', 'relationship2'),
(4, 4, 'Jalitha Emergency 2', 'relationship1');


--
-- Dumping data for table `emg_mobile`
--

INSERT INTO `emg_mobile` (`emg_id`, `mobile`) VALUES
(1, '0723654789'),
(2, '0745612375'),
(3, '0759874623');

--
-- Dumping data for table `supervise`
--

INSERT INTO `supervise` (`subordinate_id`, `supervisor_id`) VALUES
(4, 1),
(3, 4),
(1, 5),
(2, 5);