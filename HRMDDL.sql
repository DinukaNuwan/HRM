-- TODO: 'check' constraints,ex: CONSTRAINT CHK_Person CHECK (Age>=18 AND City='Sandnes')
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
(1, 'Level 1', 30000),
(2, 'Level 2', 40000),
(3, 'Level 3', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `LEAVE_COUNT`
--

CREATE TABLE `LEAVE_COUNT` (
  `pay_grade` int(11) NOT NULL,
  `annual` int(11) NOT NULL,
  `casual` int(11) NOT NULL,
  `no_pay` int(11) NOT NULL,
  `maternity` int(11) NOT NULL,
  `mandatory_no_pay` int(11) NOT NULL,
  PRIMARY KEY (`pay_grade`),
  CONSTRAINT FK_PayGrade FOREIGN KEY (`pay_grade`) REFERENCES `pay_grade`(`pay_grade_id`)
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
  `email` varchar(100) NOT NULL,
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
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(30) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'HR'),
(2, 'IT'),
(3, 'Production'),
(4, 'Marketing'),
(5, 'Finance');

--
-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` int(11) NOT NULL,
  `pay_grade` int(11) NOT NULL,
  `employment_status` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`),
  CONSTRAINT FK_Employment FOREIGN KEY (`emp_id`) REFERENCES `employee`(`emp_id`),
  CONSTRAINT FK_EmploymentJobTitle FOREIGN KEY (`job_title`) REFERENCES `job_title`(`job_title_id`),
  CONSTRAINT FK_EmploymentPayGrade FOREIGN KEY (`pay_grade`) REFERENCES `pay_grade`(`pay_grade_id`),
  CONSTRAINT FK_EmploymentStatus FOREIGN KEY (`employment_status`) REFERENCES `employment_status`(`status_id`),
  CONSTRAINT FK_Department FOREIGN KEY (`department`) REFERENCES `department`(`dept_id`)
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
  `leave_type` varchar(20) NOT NULL,
  PRIMARY KEY (`leave_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_application_type`
--

INSERT INTO `leave_application_type` (`leave_type_id`, `leave_type`) VALUES
(1, 'Annual'),
(2, 'Casual'),
(3, 'Maternity'),
(4, 'No_Pay');

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
  `annual` int(11) NOT NULL DEFAULT 0,
  `casual` int(11) NOT NULL DEFAULT 0,
  `maternity` int(11) NOT NULL DEFAULT 0,
  `no_pay` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`emp_id`),
  CONSTRAINT FK_EmpLeaveCount FOREIGN KEY (`emp_id`) REFERENCES `employee`(`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payroll` (not currently part of the system)
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
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` mediumblob  DEFAULT NULL,
  PRIMARY KEY (`emp_id`),
  CONSTRAINT FK_EmpUser FOREIGN KEY (`emp_id`) REFERENCES `employee`(`emp_id`),
  CONSTRAINT FK_UserRole FOREIGN KEY (`role`) REFERENCES `user_role`(`user_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- index for username 
CREATE INDEX idx_uname ON user (username);
-- --------------------------------------------------------

--
-- Triggers
--
-- IF ADDING TRIGGER FROM SQL QUERY FAILS, THEN ADD THE TRIGGER USING CREATE TRIGGER OPTION IN PHPMYADMIN

CREATE TRIGGER `updateEmpLeaveCount` AFTER UPDATE ON `leave_application`
 FOR EACH ROW 
 IF (OLD.status = 1 AND NEW.status = 2) THEN 
	SET @numDays = DATEDIFF(NEW.to, NEW.from);
	IF (SELECT COUNT(*) FROM emp_leave_count WHERE emp_id = NEW.emp_id) = 0 THEN
    	INSERT INTO emp_leave_count (emp_id) VALUES (NEW.emp_id);
    END IF;
	IF NEW.leave_type = 1 THEN 
			UPDATE emp_leave_count SET annual = annual + @numDays WHERE emp_id = NEW.emp_id; 
		ELSEIF NEW.leave_type = 2 THEN 
			UPDATE emp_leave_count SET casual = casual + @numDays WHERE emp_id = NEW.emp_id; 
        ELSEIF NEW.leave_type = 3 THEN 
			UPDATE emp_leave_count SET maternity = maternity + @numDays WHERE emp_id = NEW.emp_id;
        ELSEIF NEW.leave_type = 4 THEN 
			UPDATE emp_leave_count SET no_pay = no_pay + @numDays WHERE emp_id = NEW.emp_id;
    END IF; 
END IF;

--
-- --------------------------------------------------------------
-- VIEW

CREATE VIEW reportingModule AS
SELECT employment.emp_id, 
department.dept_name as department, pay_grade.pay_grade, pay_grade.basic_salary, job_title.job_title, employment_status.status as employment_status, 
employee.firstname, employee.lastname, employee.email 
FROM employment 
JOIN department ON employment.department = department.dept_id 
JOIN pay_grade ON employment.pay_grade=pay_grade.pay_grade_id 
JOIN job_title ON employment.job_title=job_title.job_title_id 
JOIN employment_status ON employment.employment_status=employment_status.status_id
JOIN employee USING(emp_id)  
ORDER BY `employment`.`emp_id` ASC