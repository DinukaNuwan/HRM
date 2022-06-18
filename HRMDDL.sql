-- TODO: 'check' constraints,
--        refactor 'default's (DONE)
--        add 'index's (CREATE INDEX idx_lastname ON Persons (LastName);) (DONE - for emp_id)

--        create 'view's for reports (CREATE VIEW [Brazil Customers] AS
                          -- SELECT CustomerName, ContactName
                          -- FROM Customers
                          -- WHERE Country = 'Brazil';)

--        time bound events (SO FAR NONE)

--        triggers for events
            -- -> update leave count of employee when leave_application is approved

-- --------------------------------------------------------

--
-- Table structure for table `ORGANIZATION`
--

CREATE TABLE `ORGANIZATION` (
  `reg_number` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `LEAVE_COUNT`
--

CREATE TABLE `LEAVE_COUNT` (
  `pay_grade` varchar(45) NOT NULL,
  `annual` int(11) NOT NULL,
  `casual` int(11) NOT NULL,
  `no_pay` int(11) NOT NULL,
  `maternity` int(11) NOT NULL,
  `mandatory_no_pay` int(11) NOT NULL,
  PRIMARY KEY (`pay_grade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `emp_marital_status`
--

CREATE TABLE `emp_marital_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_marital_status`
--

INSERT INTO `emp_marital_status` (`status_id`, `status`) VALUES
(1, 'Married'),
(2, 'Unmarried');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `marital_status` int(11) NOT NULL,
  PRIMARY KEY(`emp_id`),
  CONSTRAINT FK_MaritalStatus FOREIGN KEY (`marital_status`) REFERENCES `emp_marital_status`(`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
--  Create index for emp_id
--

CREATE INDEX idx_empID ON `employee` (`emp_id`);


-- --------------------------------------------------------

--
-- Table structure for table `emp_mobile`
--

CREATE TABLE `emp_mobile` (
  `emp_id` int(11) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  CONSTRAINT FK_EmpMobile FOREIGN KEY (`emp_id`) REFERENCES `employee`(`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `emg_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `relationship` varchar(45) NOT NULL,
  PRIMARY KEY(`emg_id`),
  CONSTRAINT FK_EmpEmg FOREIGN KEY (`emp_id`) REFERENCES `employee`(`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emg_mobile`
--

CREATE TABLE `emg_mobile` (
  `emg_id` int(11) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  CONSTRAINT FK_EmgMobile FOREIGN KEY (`emg_id`) REFERENCES `emergency`(`emg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_title`
--

CREATE TABLE `job_title` (
  `job_title_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(45) NOT NULL,
  PRIMARY KEY (`job_title_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_title`
--

INSERT INTO `job_title` (`job_title_id`, `job_title`) VALUES
(1, 'HR Manager'),
(2, 'Accountant'),
(3, 'Software Engineer'),
(4, 'QA Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `pay_grade`
--

CREATE TABLE `pay_grade` (
  `pay_grade_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_grade` varchar(45) NOT NULL,
  `basic_salary` int(11) NOT NULL,
  PRIMARY KEY (`pay_grade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay_grade`
--

INSERT INTO `pay_grade` (`pay_grade_id`, `pay_grade`, `basic_salary`) VALUES
(1, 'Level 1', NULL),
(2, 'Level 2', NULL),
(3, 'Level3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employment_status`
--

CREATE TABLE `employment_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employment_status`
--

INSERT INTO `employment_status` (`status_id`, `status`) VALUES
(1, 'Intern-Fulltime'),
(2, 'Intern-Parttime'),
(3, 'Contract-Fulltime'),
(4, 'Contract-Parttime'),
(5, 'Permanent'),
(6, 'Freelance');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` int(11) NOT NULL,
  `pay_grade` int(11) NOT NULL,
  `employment_status` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`),
  CONSTRAINT FK_Employment FOREIGN KEY (`emp_id`) REFERENCES `employee`(`emp_id`),
  CONSTRAINT FK_EmploymentJobTitle FOREIGN KEY (`job_title`) REFERENCES `job_title`(`job_title_id`),
  CONSTRAINT FK_EmploymentPayGrade FOREIGN KEY (`pay_grade`) REFERENCES `pay_grade`(`pay_grade_id`),
  CONSTRAINT FK_EmploymentStatus FOREIGN KEY (`employment_status`) REFERENCES `employment_status`(`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supervise`
--

CREATE TABLE `supervise` (
  `subordinate_id` int(11) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  PRIMARY KEY (`subordinate_id`),
  CONSTRAINT FK_EmpSubordinate FOREIGN KEY (`subordinate_id`) REFERENCES `employee`(`emp_id`),
  CONSTRAINT FK_EmpSupervisor FOREIGN KEY (`supervisor_id`) REFERENCES `employee`(`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leave_application_type`
--

CREATE TABLE `leave_application_type` (
  `leave_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `leave_type` varchar(10) NOT NULL,
  PRIMARY KEY (`leave_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_application_type`
--

INSERT INTO `leave_application_type` (`leave_type_id`, `leave_type`) VALUES
(1, 'Annual'),
(2, 'Casual'),
(3, 'Maternity'),
(4, 'No Pay');

-- --------------------------------------------------------

--
-- Table structure for table `leave_application_status`
--

CREATE TABLE `leave_application_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_application_status`
--

INSERT INTO `leave_application_status` (`status_id`, `status`) VALUES
(1, 'pending'),
(2, 'approved'),
(3, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

CREATE TABLE `leave_application` (
  `application_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `leave_type` int(11) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `num_of_days` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`application_id`),
  CONSTRAINT FK_EmpLeaveApp FOREIGN KEY (`emp_id`) REFERENCES `employee`(`emp_id`),
  CONSTRAINT FK_LeaveType FOREIGN KEY (`leave_type`) REFERENCES `leave_application_type`(`leave_type_id`),
  CONSTRAINT FK_LeaveAppStatus FOREIGN KEY (`status`) REFERENCES `leave_application_status`(`status_id`)
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
  `no_pay` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`),
  CONSTRAINT FK_EmpLeaveCount FOREIGN KEY (`emp_id`) REFERENCES `employee`(`emp_id`)
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
  `deductions` float NOT NULL,
  CONSTRAINT FK_EmpPayroll FOREIGN KEY (`emp_id`) REFERENCES `employee`(`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role` varchar(45) NOT NULL,
  PRIMARY KEY (`user_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `user_role`) VALUES
(1, 'Admin'),
(2, 'HR Manager'),
(3, 'Second Manager'),
(4, 'General Employee');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `emp_id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `usernme` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` blob DEFAULT NULL,
  PRIMARY KEY (`emp_id`),
  CONSTRAINT FK_EmpUser FOREIGN KEY (`emp_id`) REFERENCES `employee`(`emp_id`),
  CONSTRAINT FK_UserRole FOREIGN KEY (`role`) REFERENCES `user_role`(`user_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
