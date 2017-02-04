-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 12:29 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renata_sells_app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_role`
--

CREATE TABLE `tbl_admin_role` (
  `role_id` int(5) NOT NULL,
  `role_name` varchar(200) NOT NULL,
  `role_description` text NOT NULL,
  `permission_level` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(3) NOT NULL,
  `district_name` varchar(200) NOT NULL,
  `tbl_division_division_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`, `tbl_division_division_id`) VALUES
(1, 'Dhaka', 1),
(2, 'Narayan Ganj', 1),
(3, 'Faridpur', 1),
(4, 'Gopalganj', 1),
(5, 'Kishoregange', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_division`
--

CREATE TABLE `tbl_division` (
  `division_id` int(5) NOT NULL,
  `division_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_division`
--

INSERT INTO `tbl_division` (`division_id`, `division_name`) VALUES
(1, 'Dhaka'),
(2, 'Chitagong'),
(3, 'Barisal'),
(4, 'Khulna'),
(5, 'Sylhet'),
(6, 'Rajshahi'),
(7, 'Rangpur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `doctor_id` int(5) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `doctor_degree` varchar(200) NOT NULL,
  `doctor_address` text NOT NULL,
  `doctor_phone` varchar(100) NOT NULL,
  `doctor_email` varchar(200) NOT NULL,
  `doctor_image` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor_history`
--

CREATE TABLE `tbl_doctor_history` (
  `history_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `operation` varchar(200) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `doctor_degree` varchar(200) NOT NULL,
  `doctor_address` text NOT NULL,
  `doctor_phone` varchar(200) NOT NULL,
  `doctor_email` varchar(200) NOT NULL,
  `tbl_doctor_doctor_id` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor_type`
--

CREATE TABLE `tbl_doctor_type` (
  `doc_type_id` int(5) NOT NULL,
  `type_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drug`
--

CREATE TABLE `tbl_drug` (
  `drug_id` int(11) NOT NULL,
  `drug_name` varchar(200) NOT NULL,
  `tbl_drug_generic_name_gen_id` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_drug`
--

INSERT INTO `tbl_drug` (`drug_id`, `drug_name`, `tbl_drug_generic_name_gen_id`) VALUES
(1, 'Algin Injection', 1),
(2, 'Algin Syrup', 1),
(3, 'Algin Tablet', 1),
(4, 'Amcox Injection\r\n', 4),
(5, 'Maxpro Capsule', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drug_des`
--

CREATE TABLE `tbl_drug_des` (
  `drug_des_id` int(5) NOT NULL,
  `tbl_drug_drug_id` int(11) DEFAULT NULL,
  `drug_full_book` text NOT NULL,
  `benefits_feature` text NOT NULL,
  `drug_image` text NOT NULL,
  `create_drug_date` date NOT NULL,
  `create_drug_time` time NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drug_detail`
--

CREATE TABLE `tbl_drug_detail` (
  `drug_detail_id` int(5) NOT NULL,
  `drug_name_audio` text NOT NULL,
  `drug_detail_image` text NOT NULL,
  `point1` text NOT NULL,
  `audio1` text NOT NULL,
  `point2` text NOT NULL,
  `audio2` text NOT NULL,
  `point3` text NOT NULL,
  `audio3` text NOT NULL,
  `tbl_drug_detail_version_detail_version_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drug_detail_version`
--

CREATE TABLE `tbl_drug_detail_version` (
  `detail_version_id` int(5) NOT NULL,
  `version_id` int(5) NOT NULL,
  `tbl_doctor_type_doc_type_id` int(5) NOT NULL,
  `tbl_drug_drug_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drug_generic_name`
--

CREATE TABLE `tbl_drug_generic_name` (
  `gen_id` int(5) NOT NULL,
  `gen_name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_drug_generic_name`
--

INSERT INTO `tbl_drug_generic_name` (`gen_id`, `gen_name`) VALUES
(1, 'Tiemonium Methylsulphate'),
(2, 'Zinc, Manganese, Copper, Cobalt, Total Amino Acid'),
(3, 'Bacillus, Enterococcus, Pedicoccus, Lactobacillus'),
(4, 'Amoxycillin, Cloxacillin'),
(5, 'Esomeprazole');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drug_sells_target`
--

CREATE TABLE `tbl_drug_sells_target` (
  `drug_sells_target_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `quantity` int(3) NOT NULL,
  `tbl_target_target_id` int(5) DEFAULT NULL,
  `tbl_drug_drug_id` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_drug_sells_target`
--

INSERT INTO `tbl_drug_sells_target` (`drug_sells_target_id`, `date`, `time`, `quantity`, `tbl_target_target_id`, `tbl_drug_drug_id`) VALUES
(1, '2016-12-16', '00:00:00', 500, 1, 1),
(2, '2016-12-16', '00:00:00', 50, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam`
--

CREATE TABLE `tbl_exam` (
  `exam_id` int(5) NOT NULL,
  `exam_name` varchar(200) NOT NULL,
  `duration` int(3) NOT NULL,
  `exam_marks` int(3) NOT NULL,
  `exam_type` int(3) NOT NULL,
  `image` text NOT NULL,
  `exam_create_date` date NOT NULL,
  `exam_create_time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_exam`
--

INSERT INTO `tbl_exam` (`exam_id`, `exam_name`, `duration`, `exam_marks`, `exam_type`, `image`, `exam_create_date`, `exam_create_time`) VALUES
(1, 'Rolip Test', 1, 5, 1, 'uadayghosh.pixub.com/renata/upload/exam_image/Pharmaceuticals-Rolip-Tablet1.jpg', '2016-12-05', '00:00:00'),
(2, 'Valdipin Test', 20, 15, 2, 'uadayghosh.pixub.com/renata/upload/exam_image/Pharmaceuticals-Valzide-Tablet.jpg', '2016-12-05', '00:00:00'),
(3, 'Uritone Test', 30, 30, 1, 'uadayghosh.pixub.com/renata/upload/pso_image/Pharmaceuticals-Uritone-Tablet.jpg', '2016-12-07', '00:00:00'),
(4, 'Taven Test', 25, 22, 2, 'uadayghosh.pixub.com/renata/upload/pso_image/Pharmaceuticals-Taven-Tablet1.jpg', '2016-12-07', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam_assign`
--

CREATE TABLE `tbl_exam_assign` (
  `assign_id` int(5) NOT NULL,
  `marks` int(4) NOT NULL,
  `tbl_pso_pso_id` int(11) DEFAULT NULL,
  `tbl_exam_exam_id` int(5) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `exam_status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_exam_assign`
--

INSERT INTO `tbl_exam_assign` (`assign_id`, `marks`, `tbl_pso_pso_id`, `tbl_exam_exam_id`, `date`, `time`, `exam_status`) VALUES
(1, 1, 1, 1, '2016-12-06', '00:00:00', 1),
(2, 0, 1, 2, '2016-12-06', '00:00:00', 0),
(3, 0, 1, 3, '2016-12-07', '00:00:00', 1),
(4, 0, 1, 4, '2016-12-07', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_incentives`
--

CREATE TABLE `tbl_incentives` (
  `incentives_id` int(5) NOT NULL,
  `incentives_name` varchar(200) NOT NULL,
  `incentives_description` text NOT NULL,
  `incentives_image` text NOT NULL,
  `create_date` date NOT NULL,
  `status` int(3) NOT NULL,
  `exp_date` date NOT NULL,
  `incentives_point` int(3) NOT NULL,
  `quantity` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_incentives`
--

INSERT INTO `tbl_incentives` (`incentives_id`, `incentives_name`, `incentives_description`, `incentives_image`, `create_date`, `status`, `exp_date`, `incentives_point`, `quantity`) VALUES
(1, 'Cloth Coupon ', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley ', 'uadayghosh.pixub.com/renata/upload/pso_image/gift_bags_gal.jpg', '2016-12-15', 1, '2016-12-22', 80, 0),
(2, 'Food Ticket', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley ', 'uadayghosh.pixub.com/renata/upload/pso_image/01.jpg', '2016-12-15', 1, '2016-12-20', 50, 0),
(3, 'Air Ticket', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley ', 'uadayghosh.pixub.com/renata/upload/pso_image/1655672_10153880501270504_974600258_o.jpg', '2016-12-15', 1, '2016-12-27', 400, 0),
(4, 'Movie Ticket', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s', 'uadayghosh.pixub.com/renata/upload/pso_image/incentive_popup.png', '2016-12-26', 1, '2016-12-31', 200, 0),
(5, 'Air ticket', 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley ', 'http://localhost/renata/upload/shop_image/image_20160529_0215241.png', '2017-01-15', 1, '2017-01-17', 100, 2),
(6, 'movie ticket', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has ', 'http://localhost/renata/upload/shop_image/grocery-pakistan3.jpg', '2017-01-15', 1, '2017-01-19', 200, 10),
(7, 'Pizza Offer', 'fdhf dhsfkjhkfhsdk fhkjhfkjdhfkjhdkfhkjdhf ksd hfsh f sdh fkshfjhfkjsdhfkjs dhfkjsdhfkjsh f;jshdfj hs dkjfhdjsfhdkjs hf kjhdsfjhdkjshdjskfhdjs ghf;k df hgkdg', 'http://localhost/renata/upload/shop_image/Pizza_Hut_logo.svg_.png', '2017-01-15', 1, '2017-01-20', 200, 5),
(8, 'Pizza Offer', 'fdhf dhsfkjhkfhsdk fhkjhfkjdhfkjhdkfhkjdhf ksd hfsh f sdh fkshfjhfkjsdhfkjs dhfkjsdhfkjsh f;jshdfj hs dkjfhdjsfhdkjs hf kjhdsfjhdkjshdjskfhdjs ghf;k df hgkdg', 'http://localhost/renata/upload/shop_image/Pizza_Hut_logo.svg_.png', '2017-01-15', 1, '2017-01-20', 200, 5),
(9, 'Pizza Offer', 'gfj sdkjfhldkjs hfkljhdkj fhkjsdh fkjsdhkjfhdkjshf;dshfkldshfkldsh fkjdhskjfhdkjs hfkjds hfkjdhskjfhdkjshfkjdshf', 'http://localhost/renata/upload/shop_image/Pizza_Hut_logo.svg_1.png', '2017-01-15', 1, '2017-01-20', 200, 5),
(10, 'Pizza Offer', 'h kjdghkjdfhgkj dhfkjg hdfklhgkjhdfsgjh dfkjs ghkjdfhgkj dhfgj hfdj ghkjdf hgkj dhf gk hd;flgh df hgf gkjfdhgh', 'http://localhost/renata/upload/shop_image/Pizza_Hut_logo.svg_2.png', '2017-01-15', 1, '2017-01-20', 200, 5),
(11, 'Air ticket', 'fdshfkj dshfkjsdhfkjhdskfdkjs fkjsdhfdsf', 'http://localhost/renata/upload/shop_image/incentive11.jpg', '2017-01-15', 1, '2017-01-21', 500, 10),
(12, 'Food Fest', 'fdsjfkj sdklfjdklsfjlkdsjflkjdsfkljsdklf jlfjldksjfl djsfkldjslfjdlsfjlsdjfkljflkdjsfldjsfljsdfljdsfsf\r\nsdfjds fjskfds j', 'http://localhost/renata/upload/shop_image/grocery-pakistan4.jpg', '2017-01-15', 1, '2017-01-21', 100, 20),
(13, 'Game Ticket', 'f dsfhdshfkjdshfkjhsfkhdsk hfkshfkdhsfkjhdskfhksdhfkds hfkj sdh fk hsdfhds hfkjsdhf dsfksdkfhsdkjhf', 'http://localhost/renata/upload/shop_image/incentive.png', '2017-01-15', 1, '2017-01-19', 80, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_incentives_history`
--

CREATE TABLE `tbl_incentives_history` (
  `history_id` int(5) NOT NULL,
  `approval_date` date NOT NULL,
  `tbl_incentives_transection_transection_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_incentives_history`
--

INSERT INTO `tbl_incentives_history` (`history_id`, `approval_date`, `tbl_incentives_transection_transection_id`) VALUES
(3, '2017-01-15', 41),
(4, '2017-01-15', 38),
(5, '2017-01-15', 37),
(6, '2017-01-15', 40),
(7, '2017-01-17', 39);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_incentives_transection`
--

CREATE TABLE `tbl_incentives_transection` (
  `transection_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `tbl_incentives_incentives_id` int(5) DEFAULT NULL,
  `tbl_pso_pso_id` int(11) DEFAULT NULL,
  `pso_group_pso_group_id` int(5) DEFAULT NULL,
  `booked_incentive` tinyint(1) NOT NULL,
  `redeem_date` date NOT NULL,
  `fev` tinyint(1) NOT NULL,
  `approve` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_incentives_transection`
--

INSERT INTO `tbl_incentives_transection` (`transection_id`, `date`, `time`, `tbl_incentives_incentives_id`, `tbl_pso_pso_id`, `pso_group_pso_group_id`, `booked_incentive`, `redeem_date`, `fev`, `approve`) VALUES
(1, '2017-01-15', '00:00:00', 10, 1, NULL, 0, '0000-00-00', 0, 0),
(2, '2017-01-15', '00:00:00', 10, 6, NULL, 0, '0000-00-00', 0, 0),
(3, '2017-01-15', '00:00:00', 10, 7, NULL, 0, '0000-00-00', 0, 0),
(4, '2017-01-15', '00:00:00', 10, 8, NULL, 0, '0000-00-00', 0, 0),
(5, '2017-01-15', '00:00:00', 10, 9, NULL, 0, '0000-00-00', 0, 0),
(6, '2017-01-15', '00:00:00', 10, 10, NULL, 0, '0000-00-00', 0, 0),
(7, '2017-01-15', '00:00:00', 10, 11, NULL, 0, '0000-00-00', 0, 0),
(8, '2017-01-15', '00:00:00', 10, 12, NULL, 0, '0000-00-00', 0, 0),
(9, '2017-01-15', '00:00:00', 10, 14, NULL, 0, '0000-00-00', 0, 0),
(10, '2017-01-15', '00:00:00', 10, 16, NULL, 0, '0000-00-00', 0, 0),
(11, '2017-01-15', '00:00:00', 10, 17, NULL, 0, '0000-00-00', 0, 0),
(12, '2017-01-15', '00:00:00', 10, 18, NULL, 0, '0000-00-00', 0, 0),
(13, '2017-01-15', '00:00:00', 10, 19, NULL, 0, '0000-00-00', 0, 0),
(14, '2017-01-15', '00:00:00', 10, 20, NULL, 0, '0000-00-00', 0, 0),
(15, '2017-01-15', '00:00:00', 10, 21, NULL, 0, '0000-00-00', 0, 0),
(16, '2017-01-15', '00:00:00', 11, 1, NULL, 0, '0000-00-00', 0, 0),
(17, '2017-01-15', '00:00:00', 11, 6, NULL, 0, '0000-00-00', 0, 0),
(18, '2017-01-15', '00:00:00', 11, 7, NULL, 0, '0000-00-00', 0, 0),
(19, '2017-01-15', '00:00:00', 11, 8, NULL, 0, '0000-00-00', 0, 0),
(20, '2017-01-15', '00:00:00', 11, 9, NULL, 0, '0000-00-00', 0, 0),
(21, '2017-01-15', '00:00:00', 11, 10, NULL, 0, '0000-00-00', 0, 0),
(22, '2017-01-15', '00:00:00', 11, 11, NULL, 0, '0000-00-00', 0, 0),
(23, '2017-01-15', '00:00:00', 11, 12, NULL, 0, '0000-00-00', 0, 0),
(24, '2017-01-15', '00:00:00', 11, 14, NULL, 0, '0000-00-00', 0, 0),
(25, '2017-01-15', '00:00:00', 11, 16, NULL, 0, '0000-00-00', 0, 0),
(26, '2017-01-15', '00:00:00', 11, 17, NULL, 0, '0000-00-00', 0, 0),
(27, '2017-01-15', '00:00:00', 11, 18, NULL, 0, '0000-00-00', 0, 0),
(28, '2017-01-15', '00:00:00', 11, 19, NULL, 0, '0000-00-00', 0, 0),
(29, '2017-01-15', '00:00:00', 11, 20, NULL, 0, '0000-00-00', 0, 0),
(30, '2017-01-15', '00:00:00', 11, 21, NULL, 0, '0000-00-00', 0, 0),
(31, '2017-01-15', '00:00:00', 12, 1, NULL, 0, '0000-00-00', 0, 0),
(32, '2017-01-15', '00:00:00', 12, 6, NULL, 0, '0000-00-00', 0, 0),
(33, '2017-01-15', '00:00:00', 12, 21, NULL, 0, '0000-00-00', 0, 0),
(34, '2017-01-15', '00:00:00', 12, 7, NULL, 0, '0000-00-00', 0, 0),
(35, '2017-01-15', '00:00:00', 12, 8, NULL, 0, '0000-00-00', 0, 0),
(36, '2017-01-15', '00:00:00', 12, 14, NULL, 1, '0000-00-00', 0, 0),
(37, '2017-01-15', '00:00:00', 12, 16, NULL, 1, '0000-00-00', 0, 1),
(38, '2017-01-15', '00:00:00', 12, 17, NULL, 1, '0000-00-00', 0, 1),
(39, '2017-01-15', '00:00:00', 12, 18, NULL, 1, '0000-00-00', 0, 1),
(40, '2017-01-15', '00:00:00', 12, 20, NULL, 1, '0000-00-00', 0, 1),
(41, '2017-01-15', '00:00:00', 12, 19, NULL, 1, '0000-00-00', 0, 1),
(42, '2017-01-15', '00:00:00', 13, 18, NULL, 1, '0000-00-00', 0, 0),
(43, '2017-01-15', '00:00:00', 13, 20, NULL, 1, '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pso_group`
--

CREATE TABLE `tbl_pso_group` (
  `pso_group_id` int(5) NOT NULL,
  `pso_group_name` varchar(200) NOT NULL,
  `pso_area` text NOT NULL,
  `comment` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pso_history`
--

CREATE TABLE `tbl_pso_history` (
  `history_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `operation` varchar(200) NOT NULL,
  `renata_id` int(5) NOT NULL,
  `pso_name` varchar(200) NOT NULL,
  `pso_email` varchar(200) NOT NULL,
  `pso_phone` varchar(200) NOT NULL,
  `pso_address` text NOT NULL,
  `pso_password` varchar(200) NOT NULL,
  `pso_image` text NOT NULL,
  `status` int(3) NOT NULL,
  `tbl_user_pso_pso_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE `tbl_question` (
  `question_id` int(5) NOT NULL,
  `question` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `answer` varchar(10) NOT NULL,
  `tbl_exam_exam_id` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`question_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `tbl_exam_exam_id`) VALUES
(1, 'Calcium Orotate is more suitable for', 'Women', 'Old age patient', 'Elderly', 'Both b & c', 'd', 1),
(2, 'Calcin-O is suitable for elderly, because', 'it does not depend on Vit-D', 'Elderly lacks Gastric HCI', 'It does not cause arteriosclerosis ', 'All of the above', 'd', 1),
(3, 'Coral Calcium is nothing but', 'Calcium Citrate', 'Calcium Carbonate', 'Calcium Orotate', 'None of the above', 'b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_region`
--

CREATE TABLE `tbl_region` (
  `region_id` int(3) NOT NULL,
  `region_name` varchar(200) NOT NULL,
  `tbl_district_district_id` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_region`
--

INSERT INTO `tbl_region` (`region_id`, `region_name`, `tbl_district_district_id`) VALUES
(1, 'Banani', 1),
(2, 'Gulshan', 1),
(3, 'Uttara', 1),
(4, 'Dhanmondi', 1),
(5, 'Gulistan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `schedule_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `update_time` time NOT NULL,
  `status` int(3) NOT NULL,
  `tbl_doctor_doctor_id` int(5) DEFAULT NULL,
  `tbl_pso_pso_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule_history`
--

CREATE TABLE `tbl_schedule_history` (
  `history_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `operation` varchar(200) NOT NULL,
  `tbl_schedule_schedule_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_target`
--

CREATE TABLE `tbl_target` (
  `target_id` int(5) NOT NULL,
  `target_name` varchar(200) NOT NULL,
  `target_description` text NOT NULL,
  `target_type` int(1) NOT NULL,
  `status` int(3) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_target`
--

INSERT INTO `tbl_target` (`target_id`, `target_name`, `target_description`, `target_type`, `status`, `create_date`) VALUES
(1, 'Rolac', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley ', 1, 1, '2016-12-16'),
(2, 'Algin', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 2, 1, '2016-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_target_transaction`
--

CREATE TABLE `tbl_target_transaction` (
  `transaction_id` int(5) NOT NULL,
  `tbl_target_target_id` int(5) NOT NULL,
  `tbl_pso_pso_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `pso_group_pso_group_id` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_target_transaction`
--

INSERT INTO `tbl_target_transaction` (`transaction_id`, `tbl_target_target_id`, `tbl_pso_pso_id`, `date`, `time`, `pso_group_pso_group_id`) VALUES
(1, 1, 1, '2016-12-16', '00:00:00', NULL),
(2, 2, 1, '2016-12-16', '00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_admin`
--

CREATE TABLE `tbl_user_admin` (
  `admin_id` int(5) NOT NULL,
  `renata_id` int(5) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_phone` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `admin_image` text NOT NULL,
  `date` date NOT NULL COMMENT 'create date',
  `last_use_date` date NOT NULL COMMENT 'last log date',
  `status` int(1) NOT NULL,
  `tbl_admin_role_role_id` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_admin`
--

INSERT INTO `tbl_user_admin` (`admin_id`, `renata_id`, `admin_name`, `admin_email`, `admin_phone`, `admin_password`, `admin_image`, `date`, `last_use_date`, `status`, `tbl_admin_role_role_id`) VALUES
(1, 1, 'Mr.Test', 'test@gmail.com', '0188545656', 'e10adc3949ba59abbe56e057f20f883e', '', '2016-11-27', '2016-11-27', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_pso`
--

CREATE TABLE `tbl_user_pso` (
  `pso_id` int(5) NOT NULL,
  `renata_id` varchar(200) NOT NULL,
  `pso_name` varchar(200) NOT NULL,
  `pso_gender` int(3) NOT NULL,
  `pso_dob` date NOT NULL,
  `pso_email` varchar(200) NOT NULL,
  `pso_phone` varchar(200) NOT NULL,
  `pso_designation` varchar(200) NOT NULL,
  `pso_password` varchar(200) NOT NULL,
  `pso_image` text NOT NULL,
  `pso_point` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `tbl_pso_group_pso_group_id` int(5) NOT NULL,
  `tbl_region_region_id` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_pso`
--

INSERT INTO `tbl_user_pso` (`pso_id`, `renata_id`, `pso_name`, `pso_gender`, `pso_dob`, `pso_email`, `pso_phone`, `pso_designation`, `pso_password`, `pso_image`, `pso_point`, `status`, `tbl_pso_group_pso_group_id`, `tbl_region_region_id`) VALUES
(1, '1', 'Mr. Test', 1, '2017-01-14', 'test@gmail.com', '01830697059', 'PSO', '15de09b21854cf103e76fc817ce8c303', '', '600', 1, 1, 1),
(21, 'RA-011', 'Sudipta Ghosh', 1, '2017-01-14', 'uadayghosh@gmail.com', '01830697059', 'SR. PSO', 'c20aa458b1ce2ca90d202c3a78fd89da', 'http://localhost/renata/upload/pso_image/10710714_716706335051373_1144447382171769255_n.jpg', '', 1, 1, 2),
(6, '2', 'Shabab Akhter', 1, '2017-01-09', 'akhts077@gmail.com', '01830697059', 'SR. PSO', '46a157b9d859e8fa1a03f822e4ae0f71', 'http://localhost/renata/upload/pso_image/a.jpg', '', 1, 1, 1),
(7, '3', 'Sudipta Ghosh', 1, '1994-06-24', 'akhts077@gmail.com', '01779475591', '', 'a2a63ba4eab71d17408889fc120c937f', 'http://localhost/renata/upload/pso_image/a2.jpg', '', 1, 1, 2),
(8, '5', 'Shabab Akhter', 1, '2017-01-09', 'akhts077@gmail.com', '01779475591', '', '60c69ce467a6e9451998fa50d630f0a3', 'http://localhost/renata/upload/pso_image/grocery-pakistan.jpg', '', 1, 1, 2),
(9, '6', 'Sudipta Ghosh', 1, '1995-06-24', 'uadayghosh@gmail.com', '01830697059', '', '61eeb4fea51e8acceb50523638e17be1', 'http://localhost/renata/upload/pso_image/10710714_716706335051373_1144447382171769255_n1.jpg', '', 1, 1, 4),
(10, '10', 'Shabab Akhter', 2, '2017-01-09', 'akhts077@gmail.com', '01779475591', '', '67fbfc2d7add1091684f0e79a2e06035', '', '', 1, 1, -1),
(11, '12', 'Shabab Akhter', -1, '2017-01-09', 'akhts077@gmail.com', '01779475591', '', 'd71d331b68251901af9b30418bf86d35', '', '', 1, 1, -1),
(12, '13', 'Shabab Akhter', 1, '2017-01-09', 'akhts077@gmail.com', '01779475591', '', '831ef3f63ed27badd3d7a91caf04795e', '', '', 1, 1, -1),
(14, 'RF4094', 'Mr. MD. Mosharraf Hossain', 1, '1992-05-01', 'rakib@gmail.com', '0188784545', '', 'bc2fa32a92021a64af8cbebedb2896e1', '', '', 1, 1, 2),
(16, 'DS-008', 'Shabab Akhter', 1, '2017-12-31', 'akhts077@gmail.com', '01830697059', 'SR. PSO', '1e144f8e4a062bc85f297b64660cda98', '', '', 1, 1, 2),
(17, 'RA-555', 'Shuvo', 1, '1994-05-05', 'uadayghosh@gmail.com', '01929571838', 'N/A', '1642dca831d9d4608782c18b3138fad0', '', '', 1, 1, 2),
(18, 'RA-444', 'Uaday Ghosh', 1, '1995-06-24', 'uadayghosh@gmail.com', '01847228690', 'SR. PSO', '8e69dbc0d2cbc28e537d485d714ce037', '', '', 1, 1, 2),
(22, 'RA-021', 'Shabab Akhter', 1, '2017-01-17', 'akhts077@gmail.com', '01830697059', ',PSO', '029748f63c58076ad2d411dc00f3c5ad', '', '', 1, 1, 3),
(20, 'RA-999', 'Shabab Akhter', 1, '1994-01-01', 'akhts077@gmail.com', '01847228690', 'SR. PSO', '5012845e23df60b9162dfc904eedfce4', '', '', 1, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_role`
--
ALTER TABLE `tbl_admin_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_division`
--
ALTER TABLE `tbl_division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `tbl_doctor_history`
--
ALTER TABLE `tbl_doctor_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `tbl_doctor_type`
--
ALTER TABLE `tbl_doctor_type`
  ADD PRIMARY KEY (`doc_type_id`);

--
-- Indexes for table `tbl_drug`
--
ALTER TABLE `tbl_drug`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `tbl_drug_des`
--
ALTER TABLE `tbl_drug_des`
  ADD PRIMARY KEY (`drug_des_id`);

--
-- Indexes for table `tbl_drug_detail`
--
ALTER TABLE `tbl_drug_detail`
  ADD PRIMARY KEY (`drug_detail_id`);

--
-- Indexes for table `tbl_drug_detail_version`
--
ALTER TABLE `tbl_drug_detail_version`
  ADD PRIMARY KEY (`detail_version_id`);

--
-- Indexes for table `tbl_drug_generic_name`
--
ALTER TABLE `tbl_drug_generic_name`
  ADD PRIMARY KEY (`gen_id`);

--
-- Indexes for table `tbl_drug_sells_target`
--
ALTER TABLE `tbl_drug_sells_target`
  ADD PRIMARY KEY (`drug_sells_target_id`);

--
-- Indexes for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `tbl_exam_assign`
--
ALTER TABLE `tbl_exam_assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `tbl_incentives`
--
ALTER TABLE `tbl_incentives`
  ADD PRIMARY KEY (`incentives_id`);

--
-- Indexes for table `tbl_incentives_history`
--
ALTER TABLE `tbl_incentives_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `tbl_incentives_transection`
--
ALTER TABLE `tbl_incentives_transection`
  ADD PRIMARY KEY (`transection_id`);

--
-- Indexes for table `tbl_pso_group`
--
ALTER TABLE `tbl_pso_group`
  ADD PRIMARY KEY (`pso_group_id`);

--
-- Indexes for table `tbl_pso_history`
--
ALTER TABLE `tbl_pso_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `tbl_region`
--
ALTER TABLE `tbl_region`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `tbl_schedule_history`
--
ALTER TABLE `tbl_schedule_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `tbl_target`
--
ALTER TABLE `tbl_target`
  ADD PRIMARY KEY (`target_id`);

--
-- Indexes for table `tbl_target_transaction`
--
ALTER TABLE `tbl_target_transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `tbl_user_admin`
--
ALTER TABLE `tbl_user_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_user_pso`
--
ALTER TABLE `tbl_user_pso`
  ADD PRIMARY KEY (`pso_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_role`
--
ALTER TABLE `tbl_admin_role`
  MODIFY `role_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_division`
--
ALTER TABLE `tbl_division`
  MODIFY `division_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `doctor_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_doctor_history`
--
ALTER TABLE `tbl_doctor_history`
  MODIFY `history_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_doctor_type`
--
ALTER TABLE `tbl_doctor_type`
  MODIFY `doc_type_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_drug`
--
ALTER TABLE `tbl_drug`
  MODIFY `drug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_drug_des`
--
ALTER TABLE `tbl_drug_des`
  MODIFY `drug_des_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_drug_detail`
--
ALTER TABLE `tbl_drug_detail`
  MODIFY `drug_detail_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_drug_detail_version`
--
ALTER TABLE `tbl_drug_detail_version`
  MODIFY `detail_version_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_drug_generic_name`
--
ALTER TABLE `tbl_drug_generic_name`
  MODIFY `gen_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_drug_sells_target`
--
ALTER TABLE `tbl_drug_sells_target`
  MODIFY `drug_sells_target_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  MODIFY `exam_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_exam_assign`
--
ALTER TABLE `tbl_exam_assign`
  MODIFY `assign_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_incentives`
--
ALTER TABLE `tbl_incentives`
  MODIFY `incentives_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_incentives_history`
--
ALTER TABLE `tbl_incentives_history`
  MODIFY `history_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_incentives_transection`
--
ALTER TABLE `tbl_incentives_transection`
  MODIFY `transection_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tbl_pso_group`
--
ALTER TABLE `tbl_pso_group`
  MODIFY `pso_group_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pso_history`
--
ALTER TABLE `tbl_pso_history`
  MODIFY `history_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `question_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_region`
--
ALTER TABLE `tbl_region`
  MODIFY `region_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `schedule_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_schedule_history`
--
ALTER TABLE `tbl_schedule_history`
  MODIFY `history_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_target`
--
ALTER TABLE `tbl_target`
  MODIFY `target_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_target_transaction`
--
ALTER TABLE `tbl_target_transaction`
  MODIFY `transaction_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user_admin`
--
ALTER TABLE `tbl_user_admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user_pso`
--
ALTER TABLE `tbl_user_pso`
  MODIFY `pso_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
