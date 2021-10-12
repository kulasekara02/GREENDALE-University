-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 21, 2021 at 10:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royaluniversity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(255) NOT NULL,
  `admin_name` varchar(1000) NOT NULL,
  `admin_email` varchar(1000) NOT NULL,
  `admin_password` varchar(1000) NOT NULL,
  `admin_picture` varchar(100) NOT NULL,
  `admin_year` varchar(1000) NOT NULL,
  `admin_birthday` varchar(1000) NOT NULL,
  `admin_NIC` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_picture`, `admin_year`, `admin_birthday`, `admin_NIC`) VALUES
(2, 'Suranga Fernando', 'Suranga @gmail.com', '1234', 'tyuu.jpg', '2020', '1989/09/14', 2147483647),
(3874, 'Jagath Liyanage', 'Jagath@gmail.com', '1234', 'images.jpg', '2020', '1963/04/21', 762878965);

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `course_id` int(255) NOT NULL,
  `course_name` varchar(1000) NOT NULL,
  `module_1` varchar(1000) NOT NULL,
  `module_2` varchar(1000) NOT NULL,
  `module_3` varchar(1000) NOT NULL,
  `module_4` varchar(1000) NOT NULL,
  `module_5` varchar(1000) NOT NULL,
  `module_6` varchar(1000) NOT NULL,
  `module_7` varchar(1000) NOT NULL,
  `module_8` varchar(1000) NOT NULL,
  `module_9` varchar(1000) NOT NULL,
  `module_10` varchar(1000) NOT NULL,
  `payment_1` int(255) NOT NULL,
  `payment_2` int(255) NOT NULL,
  `payment_3` int(255) NOT NULL,
  `payment_4` int(255) NOT NULL,
  `payment_5` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_id`, `course_name`, `module_1`, `module_2`, `module_3`, `module_4`, `module_5`, `module_6`, `module_7`, `module_8`, `module_9`, `module_10`, `payment_1`, `payment_2`, `payment_3`, `payment_4`, `payment_5`) VALUES
(1, 'Software Engineering HND', 'Artificial Intelligence', 'Programming', 'Ethics', 'Mobile Application', 'Web Development', 'PHP ', 'Windows Application', 'Database Design And Development', 'Project Management', 'Project', 150000, 165000, 65000, 65000, 65000),
(2, 'Civil Engineering HND', 'Engineering Mathematics for Engineers', 'Engineering Mechanics and Strength of Materials', 'Civil Engineering Construction Technology', 'Geology & Soil Mechanics', 'Advanced Mathematics', 'Advanced Construction Technology', 'Civil Engineering Structural Design', 'Site Surveying in Practice', 'Civil Engineering Hydrology & Environmental Science', 'Management and Health, Safety Practice in Construction', 170000, 170000, 95000, 95000, 50000),
(3, 'Bussiness Information Systems HND', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', 24000, 24000, 24000, 150000, 150000),
(4, 'Bussiness Management HND', '1', '2', ' 3', '4', '5', ' 6', '7', ' 8', ' 9', '10', 67000, 67000, 67000, 67000, 67000),
(5, 'Software Engineering BSC', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', 100000, 100000, 100000, 100000, 100000),
(6, 'Civil Engineering BSC', '', '', '', '', '', '', '', '', '', '', 100000, 100000, 100000, 100000, 100000),
(7, 'Bussiness Information Systems BSC', '', '', '', '', '', '', '', '', '', '', 100000, 100000, 100000, 100000, 100000),
(8, 'Bussiness Management BSC', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', 100000, 10000, 10000, 10000, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `lecturer_id` int(255) NOT NULL,
  `lecturer_name` varchar(1000) NOT NULL,
  `lecturer_status` set('Intern','Visiting') NOT NULL,
  `lecturer_password` varchar(1000) NOT NULL,
  `lecturer_course` varchar(1000) NOT NULL,
  `lecturer_picture` varchar(1000) NOT NULL,
  `lecturer_email` varchar(1000) NOT NULL,
  `lecturer_year` varchar(1000) NOT NULL,
  `lecturer_birthday` varchar(1000) NOT NULL,
  `lecturer_NIC` varchar(1000) NOT NULL,
  `type` set('Mr.','Mrs.') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`lecturer_id`, `lecturer_name`, `lecturer_status`, `lecturer_password`, `lecturer_course`, `lecturer_picture`, `lecturer_email`, `lecturer_year`, `lecturer_birthday`, `lecturer_NIC`, `type`) VALUES
(9017, 'Senadi Perera', 'Visiting', '1234', 'Civil Engineering HND', 'senadilecturer.jfif', 'senadi@gmail.com', '2012', '1985/09/13', '986685655647', ''),
(9018, 'Damayanthi Nanayakkara', 'Intern', '1234', 'Bussiness Information Systems HND', '5.jpg', 'damayanthi@gmail.com', '2015', '1970/12/12', '70988721223', ''),
(9019, 'Kanchana perera', 'Visiting', '1234', 'Bussiness Management HND', '4.jpg', 'kumari@gmail.com', '2019', '1987/08/30', '97897567576', ''),
(9023, 'Suresh', 'Intern', '1234', 'Software Engineering HND', '2.jpg', 'Suresh@gmail.com', '1234', '1992/12/12', '0094734482349', ''),
(9025, 'Hashan', 'Visiting', '1234', 'Software Engineering HND', '3.jpg', 'Hashan@gmail.com', '2012', '1994/10/04', '89893483423', '');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_notifications`
--

CREATE TABLE `lecturer_notifications` (
  `notification_ID` int(255) NOT NULL,
  `lecturer_id` int(255) NOT NULL,
  `Notification` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer_notifications`
--

INSERT INTO `lecturer_notifications` (`notification_ID`, `lecturer_id`, `Notification`, `date`) VALUES
(4, 9017, 'hello senadi please meet mr induneth', '2021-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `module_assignments`
--

CREATE TABLE `module_assignments` (
  `assignmnt_id` int(255) NOT NULL,
  `batch_id` int(255) NOT NULL,
  `moduleassignment_1` varchar(1000) NOT NULL,
  `moduleassignment_2` varchar(1000) NOT NULL,
  `moduleassignment_3` varchar(1000) NOT NULL,
  `moduleassignment_4` varchar(1000) NOT NULL,
  `moduleassignment_5` varchar(1000) NOT NULL,
  `moduleassignment_6` varchar(1000) NOT NULL,
  `moduleassignment_7` varchar(1000) NOT NULL,
  `moduleassignment_8` varchar(1000) NOT NULL,
  `moduleassignment_9` varchar(1000) NOT NULL,
  `moduleassignment_10` varchar(1000) NOT NULL,
  `module_1_issued` date DEFAULT NULL,
  `module_2_issued` date DEFAULT NULL,
  `module_3_issued` date DEFAULT NULL,
  `module_4_issued` date DEFAULT NULL,
  `module_5_issued` date DEFAULT NULL,
  `module_6_issued` date DEFAULT NULL,
  `module_7_issued` date DEFAULT NULL,
  `module_8_issued` date DEFAULT NULL,
  `module_9_issued` date DEFAULT NULL,
  `module_10_issued` date DEFAULT NULL,
  `module_1_deadl` date DEFAULT NULL,
  `module_2_deadl` date DEFAULT NULL,
  `module_3_deadl` date DEFAULT NULL,
  `module_4_deadl` date DEFAULT NULL,
  `module_5_deadl` date DEFAULT NULL,
  `module_6_deadl` date DEFAULT NULL,
  `module_7_deadl` date DEFAULT NULL,
  `module_8_deadl` date DEFAULT NULL,
  `module_9_deadl` date DEFAULT NULL,
  `module_10_deadl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module_assignments`
--

INSERT INTO `module_assignments` (`assignmnt_id`, `batch_id`, `moduleassignment_1`, `moduleassignment_2`, `moduleassignment_3`, `moduleassignment_4`, `moduleassignment_5`, `moduleassignment_6`, `moduleassignment_7`, `moduleassignment_8`, `moduleassignment_9`, `moduleassignment_10`, `module_1_issued`, `module_2_issued`, `module_3_issued`, `module_4_issued`, `module_5_issued`, `module_6_issued`, `module_7_issued`, `module_8_issued`, `module_9_issued`, `module_10_issued`, `module_1_deadl`, `module_2_deadl`, `module_3_deadl`, `module_4_deadl`, `module_5_deadl`, `module_6_deadl`, `module_7_deadl`, `module_8_deadl`, `module_9_deadl`, `module_10_deadl`) VALUES
(1, 1, 'HND_SE_1_Module_1.docx', 'HND_SE_1_Module_2.docx', 'HND_SE_1_Module_3.docx', 'HND_SE_1_Module_4.docx', 'HND_SE_1_Module_5.docx', 'HND_SE_1_Module_6.docx', 'HND_SE_1_Module_7.docx', 'HND_SE_1_Module_8.docx', 'HND_SE_1_Module_9.docx', 'HND_SE_1_Module_10.docx', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(2, 2, 'HND_CE_1_Module_1.docx', 'HND_CE_1_Module_2.docx', 'HND_CE_1_Module_3.docx', 'HND_CE_1_Module_4.docx', 'HND_CE_1_Module_5.docx', 'HND_CE_1_Module_6.docx', 'HND_CE_1_Module_7.docx', 'HND_CE_1_Module_8.docx', 'HND_CE_1_Module_9.docx', 'HND_CE_1_Module_10.docx', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(3, 4, '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(4, 3, '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(5, 5, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 7, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 8, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 9, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(255) NOT NULL,
  `batch_id` int(255) NOT NULL,
  `student_fname` varchar(1000) NOT NULL,
  `student_lname` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `birthday` varchar(1000) NOT NULL,
  `contactnumber` int(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `NIC` int(255) NOT NULL,
  `picture` varchar(1000) NOT NULL,
  `parent_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `batch_id`, `student_fname`, `student_lname`, `email`, `birthday`, `contactnumber`, `password`, `NIC`, `picture`, `parent_name`) VALUES
(100010001, 1, 'Shenal', 'Fernando', 'Shenal@gmail.com', '1998/09/12', 112905127, '1234', 2147483647, 'shenal.jpg', 'Kumudu Fernando');

-- --------------------------------------------------------

--
-- Table structure for table `students_assignments`
--

CREATE TABLE `students_assignments` (
  `uploaded_assignment_id` int(11) NOT NULL,
  `batch_id` int(255) NOT NULL,
  `batch` varchar(1000) NOT NULL,
  `student_id` int(255) NOT NULL,
  `batch_code` varchar(1000) NOT NULL,
  `student_name` varchar(1000) NOT NULL,
  `module_name` varchar(1000) NOT NULL,
  `assignment_name` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students_notifications`
--

CREATE TABLE `students_notifications` (
  `notification_ID` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `Notification` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_notifications`
--

INSERT INTO `students_notifications` (`notification_ID`, `student_id`, `Notification`, `date`) VALUES
(1, 100010001, 'You have due payments. make the payment before block the portal. Thank you', '2020-09-25 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `students_payments`
--

CREATE TABLE `students_payments` (
  `studentpayment_id` int(255) NOT NULL,
  `batch_id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `payment1_status` set('Paid','Not paid') NOT NULL,
  `payment2_status` set('Paid','Not paid') NOT NULL,
  `payment3_status` set('Paid','Not paid') NOT NULL,
  `payment4_status` set('Paid','Not paid') NOT NULL,
  `payment5_status` set('Paid','Not paid') NOT NULL,
  `final_status` set('Payment compleated','Payment not compleated') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_payments`
--

INSERT INTO `students_payments` (`studentpayment_id`, `batch_id`, `student_id`, `payment1_status`, `payment2_status`, `payment3_status`, `payment4_status`, `payment5_status`, `final_status`) VALUES
(42, 1, 100010001, 'Not paid', 'Not paid', 'Not paid', 'Not paid', 'Not paid', 'Payment not compleated');

-- --------------------------------------------------------

--
-- Table structure for table `students_results`
--

CREATE TABLE `students_results` (
  `studentresult_id` int(255) NOT NULL,
  `batch_id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `subject1_results` int(11) NOT NULL,
  `subject2_results` int(11) NOT NULL,
  `subject3_results` int(11) NOT NULL,
  `subject4_results` int(255) NOT NULL,
  `subject5_results` int(255) NOT NULL,
  `subject6_results` int(255) NOT NULL,
  `subject7_results` int(255) NOT NULL,
  `subject8_results` int(255) NOT NULL,
  `subject9_results` int(255) NOT NULL,
  `subject10_results` int(255) NOT NULL,
  `final__status` set('Course completed','Course not completed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_results`
--

INSERT INTO `students_results` (`studentresult_id`, `batch_id`, `student_id`, `subject1_results`, `subject2_results`, `subject3_results`, `subject4_results`, `subject5_results`, `subject6_results`, `subject7_results`, `subject8_results`, `subject9_results`, `subject10_results`, `final__status`) VALUES
(19035, 1, 100010001, 40, 45, 43, 0, 0, 0, 0, 0, 0, 0, 'Course not completed');

-- --------------------------------------------------------

--
-- Table structure for table `student_batches`
--

CREATE TABLE `student_batches` (
  `batch_id` int(255) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `assignment_id` int(11) DEFAULT NULL,
  `batch_code` varchar(1000) NOT NULL,
  `batch_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_batches`
--

INSERT INTO `student_batches` (`batch_id`, `course_id`, `assignment_id`, `batch_code`, `batch_name`) VALUES
(1, 1, 1, 'HND/SE/1', 'Software Engineering HND 1'),
(2, 2, 2, 'HND/CE/1', 'Civil Engineering HND 1'),
(3, 4, 4, 'HND/BM/1', 'Bussiness Management HND 1'),
(4, 3, 3, 'HND/BIS/1', 'Bussiness Information HND 1'),
(5, 5, 5, 'BSC/SE/1', 'Software Engineering BSC 1'),
(6, 6, 6, 'BSC/CE/1', 'Civil Engineering BSC 1'),
(7, 7, 7, 'BSC/BIS/1', 'Bussiness Information Systems BSC 1'),
(8, 8, 8, 'BSC/BM/1', 'Bussiness Management BSC 1'),
(9, 1, 9, 'HND/SE/2', 'Software Engineering HND 2');

-- --------------------------------------------------------

--
-- Table structure for table `student_notice_board`
--

CREATE TABLE `student_notice_board` (
  `notice_id` int(255) NOT NULL,
  `notice` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_notice_board`
--

INSERT INTO `student_notice_board` (`notice_id`, `notice`) VALUES
(1, 'Dear students, faculty and staff,  Because of a significant rise in COVID-19 cases linked primarily to CU Boulder students, and to protect the health and safety of the community, CU Boulder is fully cooperating with a Boulder County Public Health recommendation issued today: We will be moving to a 14-day quarantine period for our students who live in the city of Boulder. The quarantine period does not apply to CU Boulder faculty or staff.  In a joint news release, Boulder County Public Health strongly recommends that all local CU Boulder undergraduate and graduate students immediately self-quarantine for two weeks in their campus-area home or residence hall. CU Boulder will be enforcing this measure, which expires at 11:59 p.m. on Tuesday, Sept. 29.  Additionally, any Boulder County resident (including CU students who live off campus, faculty and staff) who is interested in getting a test is encouraged to visit a new testing site. Full details, including hours and location, are availab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `lecturer_notifications`
--
ALTER TABLE `lecturer_notifications`
  ADD PRIMARY KEY (`notification_ID`);

--
-- Indexes for table `module_assignments`
--
ALTER TABLE `module_assignments`
  ADD PRIMARY KEY (`assignmnt_id`),
  ADD KEY `batch_id` (`batch_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `batch_id` (`batch_id`);

--
-- Indexes for table `students_assignments`
--
ALTER TABLE `students_assignments`
  ADD PRIMARY KEY (`uploaded_assignment_id`),
  ADD KEY `course_id` (`batch`(768)),
  ADD KEY `batch_id` (`batch_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students_notifications`
--
ALTER TABLE `students_notifications`
  ADD PRIMARY KEY (`notification_ID`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students_payments`
--
ALTER TABLE `students_payments`
  ADD PRIMARY KEY (`studentpayment_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `students_payments_ibfk_1` (`batch_id`);

--
-- Indexes for table `students_results`
--
ALTER TABLE `students_results`
  ADD PRIMARY KEY (`studentresult_id`),
  ADD KEY `students_results_ibfk_1` (`student_id`),
  ADD KEY `students_results_ibfk_2` (`batch_id`);

--
-- Indexes for table `student_batches`
--
ALTER TABLE `student_batches`
  ADD PRIMARY KEY (`batch_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `assignment_id` (`assignment_id`);

--
-- Indexes for table `student_notice_board`
--
ALTER TABLE `student_notice_board`
  ADD PRIMARY KEY (`notice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3885;

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `course_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `lecturer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9026;

--
-- AUTO_INCREMENT for table `lecturer_notifications`
--
ALTER TABLE `lecturer_notifications`
  MODIFY `notification_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200020008;

--
-- AUTO_INCREMENT for table `students_assignments`
--
ALTER TABLE `students_assignments`
  MODIFY `uploaded_assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `students_notifications`
--
ALTER TABLE `students_notifications`
  MODIFY `notification_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90001;

--
-- AUTO_INCREMENT for table `students_payments`
--
ALTER TABLE `students_payments`
  MODIFY `studentpayment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `students_results`
--
ALTER TABLE `students_results`
  MODIFY `studentresult_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19057;

--
-- AUTO_INCREMENT for table `student_notice_board`
--
ALTER TABLE `student_notice_board`
  MODIFY `notice_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34455;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`batch_id`) REFERENCES `student_batches` (`batch_id`);

--
-- Constraints for table `students_assignments`
--
ALTER TABLE `students_assignments`
  ADD CONSTRAINT `students_assignments_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `student_batches` (`batch_id`);

--
-- Constraints for table `students_results`
--
ALTER TABLE `students_results`
  ADD CONSTRAINT `students_results_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `student_batches`
--
ALTER TABLE `student_batches`
  ADD CONSTRAINT `student_batches_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course_details` (`course_id`),
  ADD CONSTRAINT `student_batches_ibfk_2` FOREIGN KEY (`assignment_id`) REFERENCES `module_assignments` (`assignmnt_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
