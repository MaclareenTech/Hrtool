-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2023 at 08:51 AM
-- Server version: 10.6.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u804846074_hrtool`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate`
--

CREATE TABLE `tbl_candidate` (
  `candidate_id` int(11) NOT NULL,
  `candidate_name` text NOT NULL,
  `candidate_email` text NOT NULL,
  `candidate_mobile_no` int(12) NOT NULL,
  `candidate_job_profile` text NOT NULL,
  `candidate_job_status` tinyint(4) NOT NULL DEFAULT 0,
  `candidate_resume` text NOT NULL,
  `candidate_aadhar_card` text NOT NULL,
  `candidate_pan_card` text NOT NULL,
  `candidate_passport` text NOT NULL,
  `candidate_join_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `candidate_satus_days` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `candidate_password` text NOT NULL,
  `job_training_one` text NOT NULL,
  `job_training_two` text NOT NULL,
  `job_training_three` text NOT NULL,
  `job_training_one_date_time` text NOT NULL,
  `job_training_two_date_time` text NOT NULL,
  `job_training_three_date_time` text NOT NULL,
  `visa_training` text NOT NULL,
  `visa_training_datetime` text NOT NULL,
  `job_training_one_meet_id` text NOT NULL,
  `job_training_one_meet_password` text NOT NULL,
  `job_training_two_meet_id` text NOT NULL,
  `job_training_two_meet_password` text NOT NULL,
  `job_training_three_meet_id` text NOT NULL,
  `job_training_three_password` text NOT NULL,
  `visa_training_meet_id` text NOT NULL,
  `visa_training_meet_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_candidate`
--

INSERT INTO `tbl_candidate` (`candidate_id`, `candidate_name`, `candidate_email`, `candidate_mobile_no`, `candidate_job_profile`, `candidate_job_status`, `candidate_resume`, `candidate_aadhar_card`, `candidate_pan_card`, `candidate_passport`, `candidate_join_date`, `candidate_satus_days`, `updated_by`, `candidate_password`, `job_training_one`, `job_training_two`, `job_training_three`, `job_training_one_date_time`, `job_training_two_date_time`, `job_training_three_date_time`, `visa_training`, `visa_training_datetime`, `job_training_one_meet_id`, `job_training_one_meet_password`, `job_training_two_meet_id`, `job_training_two_meet_password`, `job_training_three_meet_id`, `job_training_three_password`, `visa_training_meet_id`, `visa_training_meet_password`) VALUES
(1, 'vaibhavi more', 'vaibhavi@gmail.com', 2147483647, 'opt4', 0, 'vaibhavi more_9850341806_resume.pdf', 'vaibhavi more_9850341806_aadhar.pdf', 'vaibhavi more_9850341806_pan.pdf', 'vaibhavi more_9850341806_passport.pdf', '2023-07-05 07:41:35', '2023-07-10 16:51:14', 1, '18d8352c2cde837968c250c1bd50e955', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', ''),
(2, 'tanaji', 'tanaji@gmail.com', 2147483647, 'opt2', 8, 'tanaji_9850231806_resume.pdf', 'tanaji_9850231806_aadhar.pdf', 'tanaji_9850231806_pan.pdf', 'tanaji_9850231806_passport.pdf', '2023-07-05 08:34:20', '0000-00-00 00:00:00', 1, '1188357b463808fcd15ffb779af209e3', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', ''),
(3, 'test', 'test@gmail.com', 2147483647, 'opt3', 2, 'test_9850341806_resume.pdf', 'test_9850341806_aadhar.pdf', 'test_9850341806_pan.pdf', 'test_9850341806_passport.pdf', '2023-07-05 08:39:21', '0000-00-00 00:00:00', 1, '1188357b463808fcd15ffb779af209e3', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', ''),
(4, 'vaibhavi', 'test@gmail.com', 2147483647, 'opt3', 4, '', 'vaibhavi_9850341806_aadhar.pdf', '', '', '2023-07-05 09:26:54', '2023-07-10 16:30:54', 1, '1188357b463808fcd15ffb779af209e3', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', ''),
(12, 'tanaji jedhe ', 'tanaji.jedhe@maclareen.com', 2147483647, 'ehowuf', 11, 'tanaji.jedhe@maclareen.com_resume.pdf', 'tanaji.jedhe@maclareen.com_aadhar.pdf', 'tanaji.jedhe@maclareen.com_pan.pdf', 'tanaji.jedhe@maclareen.com_passport.pdf', '2023-07-10 06:45:39', '2023-07-10 16:34:55', 1, 'cda36cf39ed5b0cc0c8f1615f3505e96', 'test', 'test 2', 'gfdg', '2023-07-12T07:34', '2023-07-14T04:37', '2023-07-07T08:36', 'test', '2023-07-21T16:38', '12', 'vssddsvdsv', 'gvsfdg', 'fbdbvdf', 'fdg', 'fdgg', 'asdvz', 'sdg'),
(13, 'mehzabeen attar', 'mehzabeen.attar@maclareen.com', 2147483647, 'opt3', 1, 'mehzabeen.attar@maclareen.com_resume.pdf', 'mehzabeen.attar@maclareen.com_aadhar.pdf', '', '', '2023-07-10 07:22:47', '2023-07-10 18:17:25', 1, 'd1d504a3ccb40ced32211438224c9a25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'deepali sarode', 'deepali.sarode@maclareen.com', 2147483647, 'opt4', 0, '', '', '', '', '2023-07-10 12:51:46', '2023-07-10 18:21:46', 1, '73b88ff38a77111a488acb184e94ffd9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

CREATE TABLE `tbl_log` (
  `log_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_log`
--

INSERT INTO `tbl_log` (`log_id`, `candidate_id`, `admin_id`, `date`, `status`) VALUES
(1, 12, 1, '2023-07-10 10:21:04', 1),
(2, 12, 1, '2023-07-10 10:47:04', 2),
(3, 12, 1, '2023-07-10 10:47:53', 1),
(4, 12, 1, '2023-07-10 10:59:47', 1),
(5, 12, 1, '2023-07-10 11:00:19', 2),
(6, 12, 1, '2023-07-10 11:00:47', 3),
(7, 4, 1, '2023-07-10 11:00:58', 4),
(8, 12, 1, '2023-07-10 11:01:15', 4),
(9, 12, 1, '2023-07-10 11:01:59', 5),
(10, 12, 1, '2023-07-10 11:02:26', 6),
(11, 12, 1, '2023-07-10 11:03:36', 7),
(12, 12, 1, '2023-07-10 11:03:49', 8),
(13, 12, 1, '2023-07-10 11:04:16', 9),
(14, 12, 1, '2023-07-10 11:04:45', 10),
(15, 12, 1, '2023-07-10 11:04:58', 11),
(16, 13, 6, '2023-07-10 12:01:44', 1),
(17, 13, 6, '2023-07-10 12:14:09', 1),
(18, 13, 6, '2023-07-10 12:39:36', 1),
(19, 13, 1, '2023-07-10 12:47:29', 1),
(20, 14, 1, '2023-07-10 12:51:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_mobile` text NOT NULL,
  `user_role` tinyint(4) NOT NULL DEFAULT 1,
  `user_password` text NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `user_profile` text NOT NULL,
  `table_id` int(11) NOT NULL,
  `id_deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_mobile`, `user_role`, `user_password`, `emp_id`, `user_profile`, `table_id`, `id_deleted`) VALUES
(1, 'maclareen adminjtyjtj', 'vaibhavi.more@maclareen.com', '1234567890', 1, '1188357b463808fcd15ffb779af209e3', 'M2023V29', '_1_profile.png', 0, 0),
(2, 'vaibhavi more', 'vaibhavi@gmail.com', '9850341806', 0, '1188357b463808fcd15ffb779af209e3', '', '', 0, 0),
(3, 'tanaji', 'tanaji@gmail.com', '9850231806', 0, '1188357b463808fcd15ffb779af209e3', '', '', 0, 0),
(4, 'test', 'test@gmail.com', '9850341806', 0, '1188357b463808fcd15ffb779af209e3', '', '', 0, 0),
(5, 'vaibhavi', 'test2@gmail.com', '9850341806', 0, '1188357b463808fcd15ffb779af209e3', '', '', 0, 0),
(6, 'vaibhavi more  admin', 'vaibhavimore@maclareen.com', '9850231806', 2, '1188357b463808fcd15ffb779af209e3', 'M2023V29', '', 0, 0),
(7, 'tanaji jehde', 'tajani.jedhe@maclareen.com', '1234567890', 1, 'cda36cf39ed5b0cc0c8f1615f3505e96', 'M2023J26', '', 0, 0),
(15, 'tanaji jedhe ', 'tanaji.jedhe@maclareen.com', '9850341806', 0, 'cda36cf39ed5b0cc0c8f1615f3505e96', '', '', 12, 0),
(16, 'mehzabeen attar', 'mehzabeen.attar@maclareen.com', '9850341806', 0, 'd1d504a3ccb40ced32211438224c9a25', '', '', 13, 0),
(17, 'deepali sarode', 'deepali.sarode@maclareen.com', '9850341806', 0, '73b88ff38a77111a488acb184e94ffd9', '', '', 14, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_candidate`
--
ALTER TABLE `tbl_candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_candidate`
--
ALTER TABLE `tbl_candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
