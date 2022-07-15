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
(1, 10, 10, 15, 90, 30),
(2, 20, 20, 25, 90, 30),
(3, 30, 30, 40, 120, 40);

-- ====================================================



-- first 5 records will be details of dev team :)
-- 1
INSERT INTO `employee` (`emp_id`,`firstname`, `lastname`, `address`, `date_of_birth`, `marital_status`, `email`) VALUES (1, 'Akila', 'Gamage', 'Katubedda, Moratuwa', '1999-07-04', 1, 'akila@db.com');

INSERT INTO `employment`(`emp_id`, `job_title`, `pay_grade`, `employment_status`, `department`) VALUES ('1','2','2','5','3');

INSERT INTO `emp_mobile`(`emp_id`, `mobile`) VALUES (1, '712334567');

INSERT INTO `emergency`(`emg_id`, `emp_id`, `name`, `relationship`) VALUES ('1','1','Nancy Patterson','Mother');

INSERT INTO `emg_mobile`(`emg_id`, `mobile`) VALUES (1, '0723654789');



INSERT INTO `user`(`emp_id`, `role`, `username`, `password`) VALUES ('1','1','akila','$2y$10$vkxJE8S.PrLXJzLT/h3orey/cI.aF9YXKiwDjKHL3v82WcyhGwSrK');

-- end of employee record
-- 2
INSERT INTO `employee` (`emp_id`,`firstname`, `lastname`, `address`, `date_of_birth`, `marital_status`, `email`) VALUES (2, 'Deshan', 'Lakshitha', 'Galle', '1999-02-08', 2, 'deshan@db.com');

INSERT INTO `employment`(`emp_id`, `job_title`, `pay_grade`, `employment_status`, `department`) VALUES ('2','2','2','5','3');

INSERT INTO `emp_mobile`(`emp_id`, `mobile`) VALUES (2, '0723654789');

INSERT INTO `emergency`(`emg_id`, `emp_id`, `name`, `relationship`) VALUES ('2','2','Nathen Attinston','Father');

INSERT INTO `emg_mobile`(`emg_id`, `mobile`) VALUES (2, '0745612375');


INSERT INTO `user`(`emp_id`, `role`, `username`, `password`) VALUES ('2','2','deshan','$2y$10$vkxJE8S.PrLXJzLT/h3orey/cI.aF9YXKiwDjKHL3v82WcyhGwSrK');

-- end of employee record
-- 3
INSERT INTO `employee` (`emp_id`,`firstname`, `lastname`, `address`, `date_of_birth`, `marital_status`, `email`) VALUES (3, 'Dinuka', 'Nuwan', 'Galle', '1999-04-30', 1,'dinuka@db.com');

INSERT INTO `employment`(`emp_id`, `job_title`, `pay_grade`, `employment_status`, `department`) VALUES ('3','2','2','5','3');

INSERT INTO `emp_mobile`(`emp_id`, `mobile`) VALUES (3, '0745612375');

INSERT INTO `emergency`(`emg_id`, `emp_id`, `name`, `relationship`) VALUES ('3','3','Blake Sprint','Brother');

INSERT INTO `emg_mobile`(`emg_id`, `mobile`) VALUES (3, '0759874623');


INSERT INTO `user`(`emp_id`, `role`, `username`, `password`) VALUES ('3','3','dinuka','$2y$10$vkxJE8S.PrLXJzLT/h3orey/cI.aF9YXKiwDjKHL3v82WcyhGwSrK');

-- end of employee record
-- 4
INSERT INTO `employee` (`emp_id`,`firstname`, `lastname`, `address`, `date_of_birth`, `marital_status`, `email`) VALUES (4, 'Jalitha', 'Kalsara', 'Galle', '1999-10-25', 2, 'jalitha@db.com');

INSERT INTO `employment`(`emp_id`, `job_title`, `pay_grade`, `employment_status`, `department`) VALUES ('4','2','2','5','3');

INSERT INTO `emp_mobile`(`emp_id`, `mobile`) VALUES (4, '0783214567');

INSERT INTO `emergency`(`emg_id`, `emp_id`, `name`, `relationship`) VALUES ('4','4','Olivia Setsed','Wife');

INSERT INTO `emg_mobile`(`emg_id`, `mobile`) VALUES (4, '0714832567');


INSERT INTO `user`(`emp_id`, `role`, `username`, `password`) VALUES ('4','4','jalitha','$2y$10$vkxJE8S.PrLXJzLT/h3orey/cI.aF9YXKiwDjKHL3v82WcyhGwSrK');

-- end of employee record
-- 5
INSERT INTO `employee` (`emp_id`,`firstname`, `lastname`, `address`, `date_of_birth`, `marital_status`, `email`) VALUES (5, 'Kasun', 'Isuranga', 'Hikkaduwa', '1999-01-01', 1, 'kasun@db.com');

INSERT INTO `employment`(`emp_id`, `job_title`, `pay_grade`, `employment_status`, `department`) VALUES ('5','2','2','5','3');

INSERT INTO `emp_mobile`(`emp_id`, `mobile`) VALUES (5, '0759874623');

INSERT INTO `emergency`(`emg_id`, `emp_id`, `name`, `relationship`) VALUES ('5','5','Psyco OneN-Only','Cousin');

INSERT INTO `emg_mobile`(`emg_id`, `mobile`) VALUES (5, '0775984362');


INSERT INTO `user`(`emp_id`, `role`, `username`, `password`) VALUES ('5','4','kasun','$2y$10$vkxJE8S.PrLXJzLT/h3orey/cI.aF9YXKiwDjKHL3v82WcyhGwSrK');

-- end of employee record
-- ==================================================================
INSERT INTO `supervise`(`subordinate_id`, `supervisor_id`) VALUES ('1','5');

INSERT INTO `supervise`(`subordinate_id`, `supervisor_id`) VALUES ('2','5');

INSERT INTO `supervise`(`subordinate_id`, `supervisor_id`) VALUES ('3','4');

INSERT INTO `supervise`(`subordinate_id`, `supervisor_id`) VALUES ('4','1');

INSERT INTO `supervise`(`subordinate_id`, `supervisor_id`) VALUES ('5','2');


-- dump other employee data (200 user entries) from HRM_seeds.sql