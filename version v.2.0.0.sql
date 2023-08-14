-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 14, 2023 at 07:53 AM
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
-- Table structure for table `tbl_advertisement`
--

CREATE TABLE `tbl_advertisement` (
  `ad_id` int(11) NOT NULL,
  `ad_type` text NOT NULL,
  `ad_image_path` text NOT NULL,
  `added_date` datetime NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_advertisement`
--

INSERT INTO `tbl_advertisement` (`ad_id`, `ad_type`, `ad_image_path`, `added_date`, `is_active`) VALUES
(1, 'test', 'test_img.png', '2023-08-14 13:06:34', 1),
(2, 'test1', 'test1_img.png', '2023-08-14 13:08:32', 0);

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
  `is_paid` tinyint(4) NOT NULL DEFAULT 0,
  `candidate_source_id` int(12) NOT NULL,
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
  `visa_training_meet_password` text NOT NULL,
  `candidate_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_candidate`
--

INSERT INTO `tbl_candidate` (`candidate_id`, `candidate_name`, `candidate_email`, `candidate_mobile_no`, `candidate_job_profile`, `candidate_job_status`, `candidate_resume`, `candidate_aadhar_card`, `candidate_pan_card`, `candidate_passport`, `candidate_join_date`, `candidate_satus_days`, `updated_by`, `candidate_password`, `is_paid`, `candidate_source_id`, `job_training_one`, `job_training_two`, `job_training_three`, `job_training_one_date_time`, `job_training_two_date_time`, `job_training_three_date_time`, `visa_training`, `visa_training_datetime`, `job_training_one_meet_id`, `job_training_one_meet_password`, `job_training_two_meet_id`, `job_training_two_meet_password`, `job_training_three_meet_id`, `job_training_three_password`, `visa_training_meet_id`, `visa_training_meet_password`, `candidate_photo`) VALUES
(1, 'vaibhavi123', 'vaibhavi@gmail.com', 2147483647, 'SCBU1', 1, 'vaibhavi more_9850341806_resume.pdf', 'vaibhavi more_9850341806_aadhar.pdf', 'vaibhavi more_9850341806_pan.pdf', 'vaibhavi more_9850341806_passport.pdf', '2023-07-05 07:41:35', '2023-08-14 10:14:14', 1, '18d8352c2cde837968c250c1bd50e955', 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'vaibhavi1232147483647_img.png'),
(2, 'tanaji', 'tanaji@gmail.com', 2147483647, 'INTE2', 8, 'tanaji_9850231806_resume.pdf', 'tanaji_9850231806_aadhar.pdf', 'tanaji_9850231806_pan.pdf', 'tanaji_9850231806_passport.pdf', '2023-07-05 08:34:20', '0000-00-00 00:00:00', 1, '1188357b463808fcd15ffb779af209e3', 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'test', 'test@gmail.com', 2147483647, 'SCBU1', 2, 'test_9850341806_resume.pdf', 'test_9850341806_aadhar.pdf', 'test_9850341806_pan.pdf', 'test_9850341806_passport.pdf', '2023-07-05 08:39:21', '0000-00-00 00:00:00', 1, '1188357b463808fcd15ffb779af209e3', 0, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'vaibhavi', 'test@gmail.com', 2147483647, 'SCBU1', 4, '', 'vaibhavi_9850341806_aadhar.pdf', '', '', '2023-07-05 09:26:54', '2023-07-10 16:30:54', 1, '1188357b463808fcd15ffb779af209e3', 0, 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'tanaji jedhe ', 'tanaji.jedhe@maclareen.com', 2147483647, 'INTE2', 1, 'tanaji.jedhe@maclareen.com_resume.pdf', 'tanaji.jedhe@maclareen.com_aadhar.pdf', 'tanaji.jedhe@maclareen.com_pan.pdf', 'tanaji.jedhe@maclareen.com_passport.pdf', '2023-07-10 06:45:39', '2023-08-14 11:38:52', 1, 'cda36cf39ed5b0cc0c8f1615f3505e96', 0, 5, 'test', 'test 2', 'gfdg', 'July 12, 2023 at 07:34 AM', 'July 14, 2023 at 04:37 AM', '2023-07-07T08:36', 'test', '2023-07-21T16:38', '12', 'vssddsvdsv', 'gvsfdg', 'fbdbvdf', 'fdg', 'fdgg', 'asdvz', 'sdg', ''),
(13, 'mehzabeen attar', 'mehzabeen.attar@maclareen.com', 2147483647, 'SCBU1', 1, 'mehzabeen.attar@maclareen.com_resume.pdf', 'mehzabeen.attar@maclareen.com_aadhar.pdf', '', '', '2023-07-10 07:22:47', '2023-08-03 12:15:16', 1, 'd1d504a3ccb40ced32211438224c9a25', 0, 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'deepali sarode', 'deepali.sarode@maclareen.com', 2147483647, 'SCBU1', 5, '', '', '', '', '2023-07-10 12:51:46', '2023-07-26 11:20:04', 1, '73b88ff38a77111a488acb184e94ffd9', 0, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'maclareen test', 'maclareentech@gmail.com', 2147483647, 'INTE2', 2, '', '', '', '', '2023-07-14 12:29:25', '2023-07-14 18:00:10', 1, '1188357b463808fcd15ffb779af209e3', 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'anmol chavan', 'anmol.chavan@maclareen.com', 1234567890, 'SCBU1', 1, 'anmol.chavan@maclareen.com_resume.pdf', 'anmol.chavan@maclareen.com_aadhar.pdf', 'anmol.chavan@maclareen.com_pan.pdf', 'anmol.chavan@maclareen.com_passport.pdf', '2023-07-14 12:42:37', '2023-07-18 20:03:19', 1, 'f37df02160f453640f0a6443c7143fef', 0, 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'test', 'test1@gmail.com', 2147483647, 'SCBU1', 1, '', '', '', '', '2023-07-25 10:31:23', '2023-07-26 11:23:34', 1, '1188357b463808fcd15ffb779af209e3', 0, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'test', 'test12@gmail.com', 2147483647, 'SCBU1', 5, '', '', '', '', '2023-07-25 11:51:32', '2023-07-26 11:28:33', 1, '81d92b1d9fd3d80be5b8d2733144308d', 0, 6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'test', 'test@maclareen.com', 2147483647, 'MUFA3', 4, '', '', '', '', '2023-07-26 06:36:54', '2023-07-26 12:06:54', 6, '1188357b463808fcd15ffb779af209e3', 0, 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'tyest', 'vaibhavimore111@maclareen.com', 2147483647, 'SCBU1', 5, '', '', '', '', '2023-07-26 09:29:51', '2023-07-26 14:59:51', 6, '1188357b463808fcd15ffb779af209e3', 0, 4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'tester123', 'tester@gmail.com', 2147483647, 'INTE2', 1, '', '', '', '', '2023-08-03 07:22:20', '2023-08-03 15:25:30', 6, '1188357b463808fcd15ffb779af209e3', 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_source`
--

CREATE TABLE `tbl_candidate_source` (
  `source_id` int(11) NOT NULL,
  `source_name` text NOT NULL,
  `source_email` text NOT NULL,
  `source_mobile_number` text NOT NULL,
  `is_social_media` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_candidate_source`
--

INSERT INTO `tbl_candidate_source` (`source_id`, `source_name`, `source_email`, `source_mobile_number`, `is_social_media`, `is_active`) VALUES
(1, 'Facebook', '', '', 1, 0),
(2, 'Vaibhavi More', 'vaibhavi@gmail.com', '9850231806', 0, 0),
(3, 'vdssdv', 'vaibhavvvi@gmail.com', '9850231806', 0, 0),
(4, 'WhatsApp', '', '', 1, 0),
(5, 'Instagram', '', '', 1, 0),
(6, 'Walk-In', '', '', 0, 0),
(7, 'test', '', '', 1, 0),
(8, 'walk-in', 'teester@gmail.com', '9989456456', 0, 1),
(9, 'sadsd', 'dfdfds@fdsf.com', '9974185223', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `chat_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `chat_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`chat_id`, `sender_id`, `chat_message`, `chat_time`) VALUES
(1, 24, 'hi vaibhavi more', '2023-08-04 16:05:16'),
(2, 24, 'hello', '2023-08-04 16:24:42'),
(3, 1, 'dfgfg', '2023-08-04 16:24:56'),
(4, 1, 'hmmmmm', '2023-08-04 16:25:10'),
(5, 24, 'its working or not ', '2023-08-04 16:25:21'),
(6, 1, 'yes working', '2023-08-04 16:25:37'),
(7, 24, 'thank you', '2023-08-04 16:25:49'),
(8, 24, 'good evevning', '2023-08-07 16:44:27'),
(9, 24, 'Hi vaibhavi ', '2023-08-08 16:54:48'),
(10, 1, 'HI', '2023-08-08 16:55:01'),
(11, 24, 'What are you doing ', '2023-08-08 16:55:12'),
(12, 1, 'HI', '2023-08-08 16:55:27'),
(13, 1, 'HI', '2023-08-08 16:55:48'),
(14, 6, 'hu', '2023-08-08 17:50:06'),
(15, 24, 'hello', '2023-08-10 17:23:40'),
(16, 24, 'testing', '2023-08-10 17:24:45'),
(17, 6, 'ghgh', '2023-08-11 14:08:11'),
(18, 6, 'hi', '2023-08-11 16:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `invoice_id` int(11) NOT NULL,
  `invoice_unique_id` text NOT NULL,
  `candidate_name` text NOT NULL,
  `candidate_address` text NOT NULL,
  `candidate_mail` text NOT NULL,
  `payment_mode` text NOT NULL,
  `invoice_date` date NOT NULL,
  `candidate_gstin_no` text NOT NULL,
  `candidate_number` text NOT NULL,
  `candidate_state` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `invoice_path` text NOT NULL,
  `invoice_paeticulars` text NOT NULL,
  `invoice_amount` text NOT NULL,
  `invoice_amount_with_gst` text NOT NULL,
  `invoice_amount_in_word` text NOT NULL,
  `candidate_company_name` text NOT NULL,
  `candidate_company_pan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`invoice_id`, `invoice_unique_id`, `candidate_name`, `candidate_address`, `candidate_mail`, `payment_mode`, `invoice_date`, `candidate_gstin_no`, `candidate_number`, `candidate_state`, `admin_id`, `created_time`, `invoice_path`, `invoice_paeticulars`, `invoice_amount`, `invoice_amount_with_gst`, `invoice_amount_in_word`, `candidate_company_name`, `candidate_company_pan`) VALUES
(1, 'M231', 'vaibhavi more', 'thane west', 'vaibhavi.more@maclareen.com', 'Cheque', '2023-07-28', '', '', 'Arunachal Pradesh', 24, '2023-07-28 08:08:14', 'vaibhavimore_2023-07-28_64c3776ec176e.pdf', '[{\"particular\":\"test\",\"amount\":\"111\",\"hsn\":\"200\",\"gstRate\":\"11\",\"amountwithGST\":\"130\"}]', '11', '130', 'dsvd sdV', 'maclareen ', '1234'),
(2, 'M232', 'tanaji jedhe', 'Thane', 'vaibhavi@gmail.vom', 'Cheque', '2023-07-28', '', '', 'Andhra Pradesh', 24, '2023-07-28 13:08:15', 'tanajijedhe_2023-07-28_64c3bdbf9b03e.pdf', '[{\"particular\":\"df\",\"amount\":\"11\",\"hsn\":\"999210\",\"gstRate\":\"20\",\"amountwithGST\":\"11\"}]', '11', '11', 'sdvdv', 'Test', '123334'),
(3, 'M233', 'tanaji jedhe', 'Thane', 'vaibhavi@gmail.vom', 'Cheque', '2023-07-28', '', '', 'Andhra Pradesh', 24, '2023-07-28 13:11:17', 'tanajijedhe_2023-07-28_64c3be7516c17.pdf', '[{\"particular\":\"df\",\"amount\":\"11\",\"hsn\":\"999210\",\"gstRate\":\"20\",\"amountwithGST\":\"11\"}]', '11', '11', 'sdvdv', 'Test', '123334'),
(4, 'M234', 'tanaji jedhe', 'Thane', 'vaibhavi@gmail.vom', 'Cheque', '2023-07-28', '', '', 'Andhra Pradesh', 24, '2023-07-28 13:12:29', 'tanajijedhe_2023-07-28_64c3bebd5eb59.pdf', '[{\"particular\":\"df\",\"amount\":\"11\",\"hsn\":\"999210\",\"gstRate\":\"20\",\"amountwithGST\":\"11\"}]', '11', '11', 'sdvdv', 'Test', '123334'),
(5, 'M235', 'vaibhavi more', 'thane west', 'vaibhavi.more@maclareen.com', 'Cheque', '2023-07-31', '', '', 'Arunachal Pradesh', 25, '2023-07-31 09:41:06', 'vaibhavimore_2023-07-31_64c781b26f2cc.pdf', '[{\"particular\":\"vbfdbv\",\"amount\":\"100\",\"hsn\":\"999210\",\"gstRate\":\"20\",\"amountwithGST\":\"120\"}]', '100', '120', 'vfdvdf', 'maclareen ', '1234'),
(6, 'M236', 'vaibhavi more', 'thane west', 'vaibhavi.more@maclareen.com', 'Cheque', '2023-07-31', '', '', 'Arunachal Pradesh', 25, '2023-07-31 09:43:35', 'vaibhavimore_2023-07-31_64c78247d0f51.pdf', '[{\"particular\":\"vbfdbv\",\"amount\":\"100\",\"hsn\":\"999210\",\"gstRate\":\"20\",\"amountwithGST\":\"120\"}]', '100', '120', 'vfdvdf', 'maclareen ', '1234'),
(7, 'M237', 'TANAJI', 'THANE', 'tanaji@maclareen.com', 'Cheque', '2023-07-31', '', '', 'Maharashtra', 24, '2023-07-31 10:03:48', 'TANAJI_2023-07-31_64c787046dfd6.pdf', '[{\"particular\":\"water\",\"amount\":\"20\",\"hsn\":\"9992\",\"gstRate\":\"10\",\"amountwithGST\":\"30\"},{\"particular\":\"test\",\"amount\":\"200\",\"hsn\":\"999210\",\"gstRate\":\"18\",\"amountwithGST\":\"230\"}]', '220', '260', 'two hundred sixty', '', ''),
(8, 'M238', '', 'vdsfdv', 'vaibhavu@gmail.com', 'Online Payment', '2023-07-31', '', '', 'Arunachal Pradesh', 24, '2023-07-31 11:00:13', '_2023-07-31_64c7943dd3bf4.pdf', '[{\"particular\":\"vsd\",\"amount\":\"100\",\"hsn\":\"9992\",\"gstRate\":\"10\",\"amountwithGST\":\"111\"}]', '11', '111', 'vfv', '', ''),
(9, 'M239', 'vaibhavi more', 'thane west', 'vaibhavi.more@maclareen.com', 'Online Payment', '2023-08-02', '', '', 'Arunachal Pradesh', 24, '2023-08-02 08:49:11', 'vaibhavimore_2023-08-02_64ca1887370f7.pdf', '[{\"particular\":\"test\",\"amount\":\"100\",\"hsn\":\"998511\",\"gstRate\":\"11\",\"amountwithGST\":\"111\"}]', '100', '111', 'ttttt', 'maclareen ', '1234'),
(10, 'M2310', 'vaibhavi more', 'thane west', 'vaibhavi.more@maclareen.com', 'Online Payment', '2023-08-02', '', '', 'Arunachal Pradesh', 24, '2023-08-02 09:20:07', 'vaibhavimore_2023-08-02_64ca1fc7c653d.pdf', '[{\"particular\":\"water\",\"amount\":\"100\",\"hsn\":\"9985\",\"gstRate\":\"18\",\"amountwithGST\":\"118\"}]', '100', '118', 'one hundred and eighteen ', '', ''),
(11, 'M2311', 'vaibhavi more', 'thane west', 'vaibhavi.more@maclareen.com', 'Cash Payment', '2023-08-02', '', '', 'Arunachal Pradesh', 24, '2023-08-02 09:29:26', 'vaibhavimore_2023-08-02_64ca21f64c666.pdf', '[{\"particular\":\"water\",\"amount\":\"100\",\"hsn\":\"9985\",\"gstRate\":\"18\",\"amountwithGST\":\"118\"}]', '100', '118', 'one hundred and eighteen', '', ''),
(12, 'M2312', 'vaibhavi more', 'thane west', 'vaibhavi.more@maclareen.com', 'Cash Payment', '2023-08-02', '', '', 'Arunachal Pradesh', 24, '2023-08-02 09:41:54', 'vaibhavimore_2023-08-02_64ca24e20c79b.pdf', '[{\"particular\":\"water\",\"amount\":\"100\",\"hsn\":\"998511\",\"gstRate\":\"18\",\"amountwithGST\":\"118\"}]', '100', '118', 'two hundred sixty', '', ''),
(13, 'M2313', 'vaibhavi more', 'thane west', 'vaibhavi.more@maclareen.com', 'Cash Payment', '2023-08-02', '', '', 'Arunachal Pradesh', 24, '2023-08-02 09:42:31', 'vaibhavimore_2023-08-02_64ca25074aceb.pdf', '[{\"particular\":\"water\",\"amount\":\"100\",\"hsn\":\"998511\",\"gstRate\":\"18\",\"amountwithGST\":\"118\"}]', '100', '118', 'two hundred sixty', '', ''),
(14, 'M2314', 'vaibhavi more', 'thane west', 'vaibhavi.more@maclareen.com', 'Cash Payment', '2023-08-02', '', '', 'Arunachal Pradesh', 24, '2023-08-02 09:42:56', 'vaibhavimore_2023-08-02_64ca2520ce1ff.pdf', '[{\"particular\":\"water\",\"amount\":\"100\",\"hsn\":\"998511\",\"gstRate\":\"18\",\"amountwithGST\":\"118\"}]', '100', '118', 'two hundred sixty', '', ''),
(15, 'M2315', 'vaibhavi more', 'test', 'vaibhavu@gmail.com', 'Cash Payment', '2023-08-02', '', '', 'Maharashtra', 24, '2023-08-02 10:02:29', 'vaibhavimore_2023-08-02_64ca29b5dba63.pdf', '[{\"particular\":\"gergvre\",\"amount\":\"100\",\"hsn\":\"9985\",\"gstRate\":\"11\",\"amountwithGST\":\"111\"}]', '100', '111', 'dvdfv', '', ''),
(16, 'M2316', 'vaibhavi more', 'vsidfgcliusfgbn', 'vaibhavu@gmail.com', 'Cash Payment', '2023-08-02', '', '', 'Arunachal Pradesh', 24, '2023-08-02 10:26:58', 'vaibhavimore_2023-08-02_64ca2f723c47a.pdf', '[{\"particular\":\"test\",\"amount\":\"100\",\"hsn\":\"9985\",\"gstRate\":\"11\",\"amountwithGST\":\"111\"}]', '100', '111', 'fngfnbgfn', '', ''),
(17, 'M2317', 'vaibhavi more', 'test', 'vaibhavu@gmail.com', 'Cash Payment', '2023-08-04', '', '', 'Andhra Pradesh', 24, '2023-08-04 10:57:10', 'vaibhavimore_2023-08-04_64ccd986bd9fa.pdf', '[{\"particular\":\"test\",\"amount\":\"100\",\"hsn\":\"9985\",\"gstRate\":\"11\",\"amountwithGST\":\"111\"}]', '100', '111', 'five ', '', ''),
(18, 'M2318', 'vaibhavi more', 'test', 'vaibhavu@gmail.com', 'Cash Payment', '2023-08-04', '', '', 'Arunachal Pradesh', 24, '2023-08-04 11:31:21', 'vaibhavimore_2023-08-04_64cce18943bf2.pdf', '[{\"particular\":\"test\",\"amount\":\"100\",\"hsn\":\"9985\",\"gstRate\":\"11\",\"amountwithGST\":\"111\"}]', '100', '111', 'five ', '', ''),
(19, 'M2319', 'vaibhavi more', 'test', 'vaibhavu@gmail.com', 'Cash Payment', '2023-08-04', '', '', 'Arunachal Pradesh', 24, '2023-08-04 11:33:09', 'vaibhavimore_2023-08-04_64cce1f5614ec.pdf', '[{\"particular\":\"test\",\"amount\":\"100\",\"hsn\":\"9985\",\"gstRate\":\"11\",\"amountwithGST\":\"111\"}]', '100', '111', 'five ', '', ''),
(20, 'M2320', 'vaibhavi more', 'test', 'vaibhavu@gmail.com', 'Cash Payment', '2023-08-04', '', '', 'Arunachal Pradesh', 24, '2023-08-04 11:57:49', 'vaibhavimore_2023-08-04_64cce7bd62ca5.pdf', '[{\"particular\":\"test\",\"amount\":\"100\",\"hsn\":\"9985\",\"gstRate\":\"11\",\"amountwithGST\":\"111\"}]', '100', '111', 'five ', '', ''),
(21, 'M2321', 'vaibhavi more', 'thane ', 'vaibhavu@gmail.com', 'Cash Payment', '2023-08-07', '', '', 'Arunachal Pradesh', 24, '2023-08-07 10:51:45', 'vaibhavimore_2023-08-07_64d0ccc1177f6.pdf', '[{\"particular\":\"test\",\"amount\":\"100\",\"hsn\":\"9985\",\"gstRate\":\"11\",\"amountwithGST\":\"111\"}]', '100', '111', 'five ', '', ''),
(22, 'M2322', 'vaibhavi more', 'test', 'vaibhavu@gmail.com', 'Cash Payment', '2023-08-07', '', 'vsfvdf', 'Arunachal Pradesh', 24, '2023-08-07 10:59:28', 'vaibhavimore_2023-08-07_64d0ce9032a8d.pdf', '[{\"particular\":\"hjmj\",\"amount\":\"100\",\"hsn\":\"9985\",\"gstRate\":\"25\",\"amountwithGST\":\"354\"}]', '222', '666', 'jtyj', 'mhjmhjmhj', ''),
(23, 'M2323', 'vaibhavi more', 'thane ', 'vaibhavu@gmail.com', 'Cash Payment', '2023-08-10', '', '9850231805', 'Andhra Pradesh', 24, '2023-08-10 13:08:59', 'vaibhavimore_2023-08-10_64d4e16b3aa6d.pdf', '[{\"particular\":\"test\",\"amount\":\"100\",\"hsn\":\"9985\",\"gstRate\":\"11\",\"amountwithGST\":\"111\"}]', '100', '111', 'five ', '', ''),
(24, 'M2324', 'vaibhavi more', 'thane ', 'vaibhavu@gmail.com', 'Cash Payment', '2023-08-10', '', '9850231805', 'Andhra Pradesh', 24, '2023-08-10 13:09:36', 'vaibhavimore_2023-08-10_64d4e1909781a.pdf', '[{\"particular\":\"test\",\"amount\":\"100\",\"hsn\":\"9985\",\"gstRate\":\"11\",\"amountwithGST\":\"111\"}]', '100', '111', 'five ', '', ''),
(25, 'M2325', 'vaibhavi more', 'thane ', 'vaibhavu@gmail.com', 'Cash Payment', '2023-08-10', '', '9850231805', 'Andhra Pradesh', 24, '2023-08-10 13:10:00', 'vaibhavimore_2023-08-10_64d4e1a884a1d.pdf', '[{\"particular\":\"test\",\"amount\":\"100\",\"hsn\":\"9985\",\"gstRate\":\"11\",\"amountwithGST\":\"111\"}]', '100', '111', 'five ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_opening`
--

CREATE TABLE `tbl_job_opening` (
  `job_id` int(11) NOT NULL,
  `job_country` text NOT NULL,
  `job_position` text NOT NULL,
  `job_open_position` int(22) NOT NULL,
  `job_fill_position` int(22) NOT NULL,
  `job_remaining_position` int(22) NOT NULL,
  `job_code` varchar(200) NOT NULL,
  `job_open_from` date NOT NULL,
  `job_open_till` date NOT NULL,
  `is_open` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_job_opening`
--

INSERT INTO `tbl_job_opening` (`job_id`, `job_country`, `job_position`, `job_open_position`, `job_fill_position`, `job_remaining_position`, `job_code`, `job_open_from`, `job_open_till`, `is_open`) VALUES
(1, 'Schengen', 'Business Visa', 10, 2, 8, 'SCBU1', '2023-07-06', '2023-11-30', 0),
(2, 'India', 'Test', 20, 1, 19, 'INTE2', '2023-07-28', '2023-09-27', 0),
(3, 'Mumbai', 'Farmer', 10, 1, 9, 'MUFA3', '2023-07-26', '2023-10-28', 0),
(4, 'Test', 'Farmer', 10, 0, 0, 'TEFA4', '2023-07-26', '2023-10-28', 0);

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
(20, 14, 1, '2023-07-10 12:51:46', 0),
(21, 12, 1, '2023-07-13 08:49:36', 1),
(22, 12, 1, '2023-07-13 08:50:19', 1),
(23, 15, 1, '2023-07-14 12:29:25', 0),
(24, 15, 1, '2023-07-14 12:30:15', 2),
(25, 16, 1, '2023-07-14 12:42:37', 0),
(26, 16, 1, '2023-07-18 14:33:23', 1),
(27, 12, 6, '2023-07-25 08:00:55', 2),
(28, 12, 6, '2023-07-25 08:01:48', 3),
(29, 17, 6, '2023-07-25 10:31:23', 0),
(30, 18, 6, '2023-07-25 11:51:32', 0),
(31, 12, 1, '2023-07-26 04:30:28', 4),
(32, 1, 1, '2023-07-26 05:47:55', 1),
(33, 14, 1, '2023-07-26 05:50:08', 1),
(34, 17, 1, '2023-07-26 05:53:38', 1),
(35, 18, 1, '2023-07-26 05:58:37', 1),
(36, 1, 1, '2023-07-26 06:01:15', 1),
(37, 19, 6, '2023-07-26 06:36:54', 0),
(38, 20, 6, '2023-07-26 09:29:51', 0),
(39, 13, 24, '2023-07-26 12:08:51', 1),
(40, 1, 1, '2023-07-27 09:20:47', 1),
(41, 12, 24, '2023-08-02 10:20:07', 5),
(42, 1, 1, '2023-08-03 06:43:52', 1),
(43, 1, 1, '2023-08-03 06:43:56', 1),
(44, 13, 1, '2023-08-03 06:45:20', 1),
(45, 21, 1, '2023-08-03 07:22:20', 0),
(46, 21, 6, '2023-08-03 09:55:33', 1),
(47, 1, 1, '2023-08-14 04:44:18', 1),
(48, 12, 1, '2023-08-14 05:08:27', 6),
(49, 12, 1, '2023-08-14 06:01:34', 1),
(50, 12, 1, '2023-08-14 06:08:00', 1),
(51, 12, 1, '2023-08-14 06:08:22', 2),
(52, 12, 1, '2023-08-14 06:08:34', 1);

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
  `login_otp` text NOT NULL,
  `login_time` text NOT NULL,
  `logout_time` datetime NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `id_deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_mobile`, `user_role`, `user_password`, `emp_id`, `user_profile`, `table_id`, `login_otp`, `login_time`, `logout_time`, `latitude`, `longitude`, `id_deleted`) VALUES
(1, 'Vaibhavi More', 'vaibhavi.more@maclareen.com', '1234567890', 1, '1188357b463808fcd15ffb779af209e3', 'M2023V29', '_1_profile.png', 0, '5843', '2023-08-14 10:13:47', '2023-08-14 12:21:52', '19.1975463', '72.9476393', 0),
(2, 'vaibhavi more', 'vaibhavi@gmail.com', '9850341806', 0, '1188357b463808fcd15ffb779af209e3', '', '', 0, '', '2023-07-31 15:09:02', '2023-08-04 14:55:24', '', '', 0),
(3, 'tanaji', 'tanaji@gmail.com', '9850231806', 0, '1188357b463808fcd15ffb779af209e3', '', '', 0, '', '2023-07-31 15:09:02', '2023-08-04 14:55:24', '', '', 0),
(4, 'test', 'test@gmail.com', '9850341806', 0, '1188357b463808fcd15ffb779af209e3', '', '', 0, '', '0000-00-00 00:00:00', '2023-08-04 14:55:24', '', '', 0),
(5, 'vaibhavi', 'test2@gmail.com', '9850341806', 0, '1188357b463808fcd15ffb779af209e3', '', '', 0, '', '0000-00-00 00:00:00', '2023-08-04 14:55:24', '', '', 0),
(6, 'vaibhavi more  admin', 'vaibhavimore@maclareen.com', '9850231806', 2, '1188357b463808fcd15ffb779af209e3', 'M2023V29', '', 0, '', '2023-08-11 16:46:42', '2023-08-11 16:50:48', '', '', 0),
(7, 'tanaji jehde', 'tajani.jedhe@maclareen.com', '1234567890', 1, 'cda36cf39ed5b0cc0c8f1615f3505e96', 'M2023J26', '', 0, '', '2023-07-31 15:09:02', '2023-08-04 14:55:24', '', '', 0),
(15, 'tanaji jedhe ', 'tanaji.jedhe@maclareen.com', '9850341806', 0, 'cda36cf39ed5b0cc0c8f1615f3505e96', '', '', 12, '', '0000-00-00 00:00:00', '2023-08-11 17:27:38', '', '', 0),
(16, 'mehzabeen attar', 'mehzabeen.attar@maclareen.com', '9850341806', 0, 'd1d504a3ccb40ced32211438224c9a25', '', '', 13, '', '0000-00-00 00:00:00', '2023-08-04 14:55:24', '', '', 0),
(17, 'deepali sarode', 'deepali.sarode@maclareen.com', '9850341806', 0, '73b88ff38a77111a488acb184e94ffd9', '', '', 14, '', '0000-00-00 00:00:00', '2023-08-04 14:55:24', '', '', 0),
(18, 'maclareen test', 'maclareentech@gmail.com', '9850231806', 0, '1188357b463808fcd15ffb779af209e3', '', '', 15, '', '0000-00-00 00:00:00', '2023-08-11 17:10:17', '', '', 0),
(19, 'anmol chavan', 'anmol.chavan@maclareen.com', '1234567890', 0, 'f37df02160f453640f0a6443c7143fef', '', '', 16, '', '0000-00-00 00:00:00', '2023-08-04 14:55:24', '', '', 0),
(20, 'test', 'test1@gmail.com', '9850231808', 0, '1188357b463808fcd15ffb779af209e3', '', '', 17, '', '0000-00-00 00:00:00', '2023-08-04 14:55:24', '', '', 0),
(21, 'test', 'test12@gmail.com', '9850231808', 0, '81d92b1d9fd3d80be5b8d2733144308d', '', '', 18, '', '0000-00-00 00:00:00', '2023-08-04 14:55:24', '', '', 0),
(22, 'test', 'test@maclareen.com', '9850231807', 0, '1188357b463808fcd15ffb779af209e3', '', '', 19, '', '0000-00-00 00:00:00', '2023-08-04 14:55:24', '', '', 0),
(23, 'tyest', 'vaibhavimore111@maclareen.com', '9850231807', 0, '1188357b463808fcd15ffb779af209e3', '', '', 20, '', '0000-00-00 00:00:00', '2023-08-04 14:55:24', '', '', 0),
(24, 'Muthpandy Nadar', 'muthupandy.nadar@maclareen.com', '9850232806', 2, '55c48bbb54f1f0a0ca3fdece89f8f7fa', 'admin', '', 0, '', '2023-08-14 12:22:17', '0000-00-00 00:00:00', '', '', 0),
(25, 'Nisha Minsariya ', 'nisha.minsariya@maclareen.com', '9850232806', 1, '1188357b463808fcd15ffb779af209e3', 'M2023M11', '', 0, '3431', '2023-07-31 15:10:25', '2023-08-04 14:55:24', '19.1975577', '72.9476867', 0),
(26, 'tester', 'tester@gmail.com', '9989789456', 0, '1188357b463808fcd15ffb779af209e3', '', '', 21, '', '2023-07-31 15:10:25', '2023-08-04 14:55:24', '', '', 0),
(27, 'automationtester', 'tester@gmfgf.vdfd', '7789456258', 1, 'fa22e17cf92f70e449fab9ae7a939904', '789', '', 0, '', '2023-07-31 15:10:25', '2023-08-04 14:55:24', '', '', 0),
(28, 'Deepa', 'deepa@gmail.com', '7784789456', 1, '1cffc6ebbc138ae85b2ed7360e03fcb6', '123123', '', 0, '', '', '0000-00-00 00:00:00', '', '', 0),
(29, 'asdfa', 'sadfsdf@fdgdfg.dfsadfsd', '7777777777', 2, '0415fdb479aeacb14fb1cbd941819c00', 'asdfasdf', '', 0, '', '', '0000-00-00 00:00:00', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_advertisement`
--
ALTER TABLE `tbl_advertisement`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `tbl_candidate`
--
ALTER TABLE `tbl_candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `tbl_candidate_source`
--
ALTER TABLE `tbl_candidate_source`
  ADD PRIMARY KEY (`source_id`);

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `tbl_job_opening`
--
ALTER TABLE `tbl_job_opening`
  ADD PRIMARY KEY (`job_id`);

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
-- AUTO_INCREMENT for table `tbl_advertisement`
--
ALTER TABLE `tbl_advertisement`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_candidate`
--
ALTER TABLE `tbl_candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_candidate_source`
--
ALTER TABLE `tbl_candidate_source`
  MODIFY `source_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_job_opening`
--
ALTER TABLE `tbl_job_opening`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
