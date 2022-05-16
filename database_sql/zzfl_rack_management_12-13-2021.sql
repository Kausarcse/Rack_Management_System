-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 11:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zzfl_rack_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) NOT NULL,
  `barcode_code` varchar(30) DEFAULT '',
  `construction` varchar(150) DEFAULT NULL,
  `composition` varchar(150) DEFAULT NULL,
  `weave` varchar(150) DEFAULT NULL,
  `shade` varchar(150) DEFAULT NULL,
  `finished_width` varchar(150) DEFAULT NULL,
  `finished_type` varchar(150) DEFAULT NULL,
  `transaction_type` varchar(50) DEFAULT NULL,
  `transaction_table_row_id` bigint(20) DEFAULT NULL,
  `activity_sql` text DEFAULT NULL,
  `response` varchar(100) DEFAULT NULL,
  `recording_person_id` varchar(30) DEFAULT NULL,
  `recording_person_name` varchar(100) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `transaction_table_row_id`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES
(1, 'FASHION_65130_1', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56.00', 'SOFT', 'receiving', 1, 'insert into `item_receiving` ( `barcode_code`,`receiving_location`,`received_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`,`shade`,`construction`,`composition`,`weave`,`length`,`finished_width`,`finished_type`,`type`,`grade`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `active`, `recording_person_id`, `recording_person_name`,`recording_time` ) values (\'FASHION_65130_1\',\'ZZFL Febric Warehouse\',\'Hriday Ahmed\',\'2021-12-06\',\'1\',\'23308A1\',\'65130-100 ROJO/RED\',\'VGS-23308/202\',\'JOY AUTO GARMENTS LTD.\',\'100 ROJO/RED\',\'30X30+40D/176X65\',\'98% COTTON & 2% SPANDEX\',\'3/1 S TWILL\',\'230\',\'56.00\',\'SOFT\',\'Bulk\',\'A\',\'1\',\'A\',\'A1\',\'1\',\'1\',\'1\', \'1\',\'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2021-12-13 16:01:38'),
(2, 'FASHION_65130_1', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56.00', 'SOFT', 'receiving', 1, 'INSERT INTO datewise_transaction_summary (`transaction_date`, `work_order_number`, `gd_number`, `customer_name`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `total_receiving`) VALUES ( \'2021-12-06\', \'65130-100 ROJO/RED\', \'VGS-23308/202\', \'JOY AUTO GARMENTS LTD.\', \'30X30+40D/176X65\', \'98% COTTON & 2% SPANDEX\', \'3/1 S TWILL\', \'100 ROJO/RED\', \'56.00\', \'SOFT\', \'230\')', 'success', 'hriday', 'Hriday', '2021-12-13 16:01:38'),
(3, 'FASHION_65130_1', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56.00', 'SOFT', 'receiving', 1, 'insert into `item_info` ( `customer_name`,`gd_number`,`work_order_number`,`shade`,`construction`,`composition`,`weave`,`finished_width`,`finished_type`,`on_hand_stock`, `uom`,`total_roll`,`recording_person_id`,`recording_person_name`,`recording_time` ) values (\'JOY AUTO GARMENTS LTD.\', \'VGS-23308/202\', \'65130-100 ROJO/RED\', \'100 ROJO/RED\',\'30X30+40D/176X65\',\'98% COTTON & 2% SPANDEX\',\'3/1 S TWILL\',\'56.00\',\'SOFT\', \'230\', \'yds\', \'1\',\'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2021-12-13 16:01:38'),
(4, 'FASHION_65130_2', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56.00', 'SOFT', 'receiving', 2, 'insert into `item_receiving` ( `barcode_code`,`receiving_location`,`received_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`,`shade`,`construction`,`composition`,`weave`,`length`,`finished_width`,`finished_type`,`type`,`grade`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `active`, `recording_person_id`, `recording_person_name`,`recording_time` ) values (\'FASHION_65130_2\',\'ZZFL Febric Warehouse\',\'Hriday Ahmed\',\'2021-12-06\',\'2\',\'23308A1\',\'65130-100 ROJO/RED\',\'VGS-23308/202\',\'JOY AUTO GARMENTS LTD.\',\'100 ROJO/RED\',\'30X30+40D/176X65\',\'98% COTTON & 2% SPANDEX\',\'3/1 S TWILL\',\'250\',\'56.00\',\'SOFT\',\'Bulk\',\'A\',\'2\',\'A\',\'A2\',\'1\',\'1\',\'1\', \'1\',\'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2021-12-13 16:01:46'),
(5, 'FASHION_65130_2', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56.00', 'SOFT', 'receiving', 1, 'UPDATE datewise_transaction_summary SET `total_receiving` = (`total_receiving` + 250) WHERE `transaction_date` = \'2021-12-06\' AND `work_order_number` = \'65130-100 ROJO/RED\' AND `gd_number` = \'VGS-23308/202\' AND `customer_name` = \'JOY AUTO GARMENTS LTD.\' AND `construction` = \'30X30+40D/176X65\' AND `composition` = \'98% COTTON & 2% SPANDEX\' AND `weave` = \'3/1 S TWILL\' AND `shade` = \'100 ROJO/RED\' AND `finished_width` = \'56.00\' AND `finished_type` = \'SOFT\' ', 'success', 'hriday', 'Hriday', '2021-12-13 16:01:46'),
(6, 'FASHION_65130_2', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56.00', 'SOFT', 'receiving', 1, 'UPDATE item_info\n									SET on_hand_stock = \'480\',\n										total_roll = \'2\'\n									WHERE shade = \'100 ROJO/RED\'\n									  AND construction = \'30X30+40D/176X65\'\n									  AND customer_name = \'JOY AUTO GARMENTS LTD.\'\n									  AND gd_number = \'VGS-23308/202\'\n									  AND work_order_number = \'65130-100 ROJO/RED\'\n									  AND composition = \'98% COTTON & 2% SPANDEX\'\n									  AND weave = \'3/1 S TWILL\'\n									  AND finished_width = \'56.00\'\n									  AND finished_type = \'SOFT\'\n								;', 'success', 'hriday', 'Hriday', '2021-12-13 16:01:46'),
(7, 'FASHION_65130_3', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56.00', 'SOFT', 'receiving', 3, 'insert into `item_receiving` ( `barcode_code`,`receiving_location`,`received_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`,`shade`,`construction`,`composition`,`weave`,`length`,`finished_width`,`finished_type`,`type`,`grade`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `active`, `recording_person_id`, `recording_person_name`,`recording_time` ) values (\'FASHION_65130_3\',\'ZZFL Febric Warehouse\',\'Hriday Ahmed\',\'2021-12-06\',\'3\',\'23308A1\',\'65130-100 ROJO/RED\',\'VGS-23308/202\',\'JOY AUTO GARMENTS LTD.\',\'100 ROJO/RED\',\'30X30+40D/176X65\',\'98% COTTON & 2% SPANDEX\',\'3/1 S TWILL\',\'320\',\'56.00\',\'SOFT\',\'Bulk\',\'A\',\'3\',\'A\',\'A3\',\'1\',\'1\',\'1\', \'1\',\'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2021-12-13 16:01:54'),
(8, 'FASHION_65130_3', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56.00', 'SOFT', 'receiving', 1, 'UPDATE datewise_transaction_summary SET `total_receiving` = (`total_receiving` + 320) WHERE `transaction_date` = \'2021-12-06\' AND `work_order_number` = \'65130-100 ROJO/RED\' AND `gd_number` = \'VGS-23308/202\' AND `customer_name` = \'JOY AUTO GARMENTS LTD.\' AND `construction` = \'30X30+40D/176X65\' AND `composition` = \'98% COTTON & 2% SPANDEX\' AND `weave` = \'3/1 S TWILL\' AND `shade` = \'100 ROJO/RED\' AND `finished_width` = \'56.00\' AND `finished_type` = \'SOFT\' ', 'success', 'hriday', 'Hriday', '2021-12-13 16:01:54'),
(9, 'FASHION_65130_3', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56.00', 'SOFT', 'receiving', 1, 'UPDATE item_info\n									SET on_hand_stock = \'800\',\n										total_roll = \'3\'\n									WHERE shade = \'100 ROJO/RED\'\n									  AND construction = \'30X30+40D/176X65\'\n									  AND customer_name = \'JOY AUTO GARMENTS LTD.\'\n									  AND gd_number = \'VGS-23308/202\'\n									  AND work_order_number = \'65130-100 ROJO/RED\'\n									  AND composition = \'98% COTTON & 2% SPANDEX\'\n									  AND weave = \'3/1 S TWILL\'\n									  AND finished_width = \'56.00\'\n									  AND finished_type = \'SOFT\'\n								;', 'success', 'hriday', 'Hriday', '2021-12-13 16:01:54'),
(10, 'FASHION_65130_1', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56', 'SOFT', 'issuing', 1, 'insert into `item_issuing` ( `barcode_code`,`receiving_location`,`issued_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`,`shade`,`construction`,`composition`,`weave`,`length`,`finished_width`,`finished_type`,`type`,`grade`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`,`recording_person_id`,`recording_person_name`,`recording_time` ) values (\'FASHION_65130_1\',\'zzfl_wearhouse\',\'Hriday\',\'2021-12-13\',\'1\',\'23308A1\',\'65130-100 ROJO/RED\',\'VGS-23308/202\',\'JOY AUTO GARMENTS LTD.\',\'100 ROJO/RED\',\'30X30+40D/176X65\',\'98% COTTON & 2% SPANDEX\',\'3/1 S TWILL\',\'230\',\'56\',\'SOFT\',\'Bulk\',\'A\',\'1\',\'A\',\'A1\',\'1\',\'1\',\'1\',\'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2021-12-13 16:08:56'),
(11, 'FASHION_65130_1', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56', 'SOFT', 'issuing', 2, 'INSERT INTO datewise_transaction_summary (`transaction_date`, `work_order_number`, `gd_number`, `customer_name`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `total_receiving`) VALUES ( \'2021-12-13\', \'65130-100 ROJO/RED\', \'VGS-23308/202\', \'JOY AUTO GARMENTS LTD.\', \'30X30+40D/176X65\', \'98% COTTON & 2% SPANDEX\', \'3/1 S TWILL\', \'100 ROJO/RED\', \'56\', \'SOFT\', \'230\')', 'success', 'hriday', 'Hriday', '2021-12-13 16:08:56'),
(12, 'FASHION_65130_2', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56', 'SOFT', 'issuing', 2, 'insert into `item_issuing` ( `barcode_code`,`receiving_location`,`issued_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`,`shade`,`construction`,`composition`,`weave`,`length`,`finished_width`,`finished_type`,`type`,`grade`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`,`recording_person_id`,`recording_person_name`,`recording_time` ) values (\'FASHION_65130_2\',\'zzfl_wearhouse\',\'Hriday\',\'2021-12-13\',\'2\',\'23308A1\',\'65130-100 ROJO/RED\',\'VGS-23308/202\',\'JOY AUTO GARMENTS LTD.\',\'100 ROJO/RED\',\'30X30+40D/176X65\',\'98% COTTON & 2% SPANDEX\',\'3/1 S TWILL\',\'250\',\'56\',\'SOFT\',\'Bulk\',\'A\',\'2\',\'A\',\'A2\',\'1\',\'1\',\'1\',\'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2021-12-13 16:08:56'),
(13, 'FASHION_65130_2', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56', 'SOFT', 'issuing', 2, 'UPDATE datewise_transaction_summary SET `total_issuing` = (`total_issuing` + 250) WHERE `transaction_date` = \'2021-12-13\' AND `work_order_number` = \'65130-100 ROJO/RED\' AND `gd_number` = \'VGS-23308/202\' AND `customer_name` = \'JOY AUTO GARMENTS LTD.\' AND `construction` = \'30X30+40D/176X65\' AND `composition` = \'98% COTTON & 2% SPANDEX\' AND `weave` = \'3/1 S TWILL\' AND `shade` = \'100 ROJO/RED\' AND `finished_type` = \'SOFT\' ', 'success', 'hriday', 'Hriday', '2021-12-13 16:08:56'),
(14, 'FASHION_65130_3', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56', 'SOFT', 'issuing', 3, 'insert into `item_issuing` ( `barcode_code`,`receiving_location`,`issued_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`,`shade`,`construction`,`composition`,`weave`,`length`,`finished_width`,`finished_type`,`type`,`grade`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`,`recording_person_id`,`recording_person_name`,`recording_time` ) values (\'FASHION_65130_3\',\'zzfl_wearhouse\',\'Hriday\',\'2021-12-13\',\'3\',\'23308A1\',\'65130-100 ROJO/RED\',\'VGS-23308/202\',\'JOY AUTO GARMENTS LTD.\',\'100 ROJO/RED\',\'30X30+40D/176X65\',\'98% COTTON & 2% SPANDEX\',\'3/1 S TWILL\',\'320\',\'56\',\'SOFT\',\'Bulk\',\'A\',\'3\',\'A\',\'A3\',\'1\',\'1\',\'1\',\'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2021-12-13 16:08:56'),
(15, 'FASHION_65130_3', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56', 'SOFT', 'issuing', 2, 'UPDATE datewise_transaction_summary SET `total_issuing` = (`total_issuing` + 320) WHERE `transaction_date` = \'2021-12-13\' AND `work_order_number` = \'65130-100 ROJO/RED\' AND `gd_number` = \'VGS-23308/202\' AND `customer_name` = \'JOY AUTO GARMENTS LTD.\' AND `construction` = \'30X30+40D/176X65\' AND `composition` = \'98% COTTON & 2% SPANDEX\' AND `weave` = \'3/1 S TWILL\' AND `shade` = \'100 ROJO/RED\' AND `finished_type` = \'SOFT\' ', 'success', 'hriday', 'Hriday', '2021-12-13 16:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `authorized_item_receiver_info`
--

CREATE TABLE `authorized_item_receiver_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_id` varchar(30) DEFAULT NULL,
  `organization_name` varchar(50) DEFAULT NULL,
  `organization_location` varchar(150) DEFAULT NULL,
  `item_inventory_organization` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `mobile_no` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `recording_person_id` varchar(30) DEFAULT NULL,
  `recording_person_name` varchar(50) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cubic_number_position`
--

CREATE TABLE `cubic_number_position` (
  `id` int(11) NOT NULL,
  `rack_number` varchar(20) NOT NULL,
  `row_number` varchar(50) NOT NULL,
  `cubic_number` varchar(50) NOT NULL,
  `recording_person_id` varchar(50) NOT NULL,
  `recording_person_name` varchar(50) NOT NULL,
  `recording_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cubic_number_position`
--

INSERT INTO `cubic_number_position` (`id`, `rack_number`, `row_number`, `cubic_number`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES
(479, 'A', '1', 'A1', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(480, 'A', '2', 'A2', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(481, 'A', '3', 'A3', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(482, 'A', '4', 'A4', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(483, 'A', '5', 'A5', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(484, 'A', '6', 'A6', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(485, 'A', '7', 'A7', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(486, 'A', '8', 'A8', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(487, 'A', '9', 'A9', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(488, 'A', '10', 'A10', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(489, 'A', '11', 'A11', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(490, 'A', '12', 'A12', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(491, 'A', '13', 'A13', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(492, 'A', '14', 'A14', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(493, 'A', '15', 'A15', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(494, 'A', '16', 'A16', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(495, 'A', '17', 'A17', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(496, 'A', '18', 'A18', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(497, 'A', '19', 'A19', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(498, 'A', '20', 'A20', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(499, 'A', '21', 'A21', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(500, 'A', '22', 'A22', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(501, 'A', '23', 'A23', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(502, 'A', '24', 'A24', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(503, 'A', '25', 'A25', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(504, 'A', '26', 'A26', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(505, 'A', '27', 'A27', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(506, 'A', '28', 'A28', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(507, 'A', '29', 'A29', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(508, 'A', '30', 'A30', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(509, 'A', '31', 'A31', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(510, 'A', '32', 'A32', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(511, 'A', '33', 'A33', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(512, 'A', '34', 'A34', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(513, 'A', '35', 'A35', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(514, 'A', '36', 'A36', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(515, 'A', '37', 'A37', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(516, 'A', '38', 'A38', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(517, 'A', '39', 'A39', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(518, 'A', '40', 'A40', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(519, 'A', '41', 'A41', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(520, 'A', '42', 'A42', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(521, 'A', '43', 'A43', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(522, 'A', '44', 'A44', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(523, 'A', '45', 'A45', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(524, 'A', '46', 'A46', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(525, 'A', '47', 'A47', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(526, 'A', '48', 'A48', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(527, 'A', '49', 'A49', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(528, 'A', '50', 'A50', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(529, 'A', '51', 'A51', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(530, 'A', '52', 'A52', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(531, 'A', '53', 'A53', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(532, 'A', '54', 'A54', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(533, 'A', '55', 'A55', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(534, 'A', '56', 'A56', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(535, 'A', '57', 'A57', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(536, 'A', '58', 'A58', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(537, 'A', '59', 'A59', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(538, 'A', '60', 'A60', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(539, 'A', '61', 'A61', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(540, 'A', '62', 'A62', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(541, 'A', '63', 'A63', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(542, 'A', '64', 'A64', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(543, 'A', '65', 'A65', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(544, 'A', '66', 'A66', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(545, 'A', '67', 'A67', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(546, 'A', '68', 'A68', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(547, 'A', '69', 'A69', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(548, 'A', '70', 'A70', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(549, 'A', '71', 'A71', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(550, 'A', '72', 'A72', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(551, 'A', '73', 'A73', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(552, 'A', '74', 'A74', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(553, 'A', '75', 'A75', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(554, 'A', '76', 'A76', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(555, 'A', '77', 'A77', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(556, 'A', '78', 'A78', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(557, 'A', '79', 'A79', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(558, 'A', '80', 'A80', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(559, 'A', '81', 'A81', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(560, 'A', '82', 'A82', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(561, 'A', '83', 'A83', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(562, 'A', '84', 'A84', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(563, 'A', '85', 'A85', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(564, 'A', '86', 'A86', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(565, 'A', '87', 'A87', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(566, 'A', '88', 'A88', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(567, 'A', '89', 'A89', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(568, 'A', '90', 'A90', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(569, 'A', '91', 'A91', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(570, 'A', '92', 'A92', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(571, 'A', '93', 'A93', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(572, 'A', '94', 'A94', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(573, 'A', '95', 'A95', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(574, 'A', '96', 'A96', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(575, 'A', '97', 'A97', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(576, 'A', '98', 'A98', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(577, 'A', '99', 'A99', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(578, 'A', '100', 'A100', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(579, 'A', '101', 'A101', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(580, 'A', '102', 'A102', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(581, 'A', '103', 'A103', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(582, 'A', '104', 'A104', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(583, 'A', '105', 'A105', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(584, 'A', '106', 'A106', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(585, 'A', '107', 'A107', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(586, 'A', '108', 'A108', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(587, 'A', '109', 'A109', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(588, 'A', '110', 'A110', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(589, 'A', '111', 'A111', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(590, 'A', '112', 'A112', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(591, 'A', '113', 'A113', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(592, 'A', '114', 'A114', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(593, 'A', '115', 'A115', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(594, 'A', '116', 'A116', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(595, 'A', '117', 'A117', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(596, 'A', '118', 'A118', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(597, 'A', '119', 'A119', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(598, 'A', '120', 'A120', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(599, 'A', '121', 'A121', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(600, 'A', '122', 'A122', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(601, 'A', '123', 'A123', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(602, 'A', '124', 'A124', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(603, 'A', '125', 'A125', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(604, 'A', '126', 'A126', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(605, 'A', '127', 'A127', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(606, 'A', '128', 'A128', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(607, 'A', '129', 'A129', 'hriday', 'Hriday', '2021-10-25 12:04:18'),
(608, 'B', '1', 'B1', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(609, 'B', '2', 'B2', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(610, 'B', '3', 'B3', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(611, 'B', '4', 'B4', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(612, 'B', '5', 'B5', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(613, 'B', '6', 'B6', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(614, 'B', '7', 'B7', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(615, 'B', '8', 'B8', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(616, 'B', '9', 'B9', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(617, 'B', '10', 'B10', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(618, 'B', '11', 'B11', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(619, 'B', '12', 'B12', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(620, 'B', '13', 'B13', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(621, 'B', '14', 'B14', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(622, 'B', '15', 'B15', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(623, 'B', '16', 'B16', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(624, 'B', '17', 'B17', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(625, 'B', '18', 'B18', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(626, 'B', '19', 'B19', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(627, 'B', '20', 'B20', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(628, 'B', '21', 'B21', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(629, 'B', '22', 'B22', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(630, 'B', '23', 'B23', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(631, 'B', '24', 'B24', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(632, 'B', '25', 'B25', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(633, 'B', '26', 'B26', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(634, 'B', '27', 'B27', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(635, 'B', '28', 'B28', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(636, 'B', '29', 'B29', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(637, 'B', '30', 'B30', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(638, 'B', '31', 'B31', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(639, 'B', '32', 'B32', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(640, 'B', '33', 'B33', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(641, 'B', '34', 'B34', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(642, 'B', '35', 'B35', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(643, 'B', '36', 'B36', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(644, 'B', '37', 'B37', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(645, 'B', '38', 'B38', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(646, 'B', '39', 'B39', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(647, 'B', '40', 'B40', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(648, 'B', '41', 'B41', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(649, 'B', '42', 'B42', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(650, 'B', '43', 'B43', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(651, 'B', '44', 'B44', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(652, 'B', '45', 'B45', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(653, 'B', '46', 'B46', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(654, 'B', '47', 'B47', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(655, 'B', '48', 'B48', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(656, 'B', '49', 'B49', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(657, 'B', '50', 'B50', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(658, 'B', '51', 'B51', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(659, 'B', '52', 'B52', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(660, 'B', '53', 'B53', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(661, 'B', '54', 'B54', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(662, 'B', '55', 'B55', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(663, 'B', '56', 'B56', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(664, 'B', '57', 'B57', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(665, 'B', '58', 'B58', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(666, 'B', '59', 'B59', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(667, 'B', '60', 'B60', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(668, 'B', '61', 'B61', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(669, 'B', '62', 'B62', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(670, 'B', '63', 'B63', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(671, 'B', '64', 'B64', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(672, 'B', '65', 'B65', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(673, 'B', '66', 'B66', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(674, 'B', '67', 'B67', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(675, 'B', '68', 'B68', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(676, 'B', '69', 'B69', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(677, 'B', '70', 'B70', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(678, 'B', '71', 'B71', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(679, 'B', '72', 'B72', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(680, 'B', '73', 'B73', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(681, 'B', '74', 'B74', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(682, 'B', '75', 'B75', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(683, 'B', '76', 'B76', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(684, 'B', '77', 'B77', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(685, 'B', '78', 'B78', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(686, 'B', '79', 'B79', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(687, 'B', '80', 'B80', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(688, 'B', '81', 'B81', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(689, 'B', '82', 'B82', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(690, 'B', '83', 'B83', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(691, 'B', '84', 'B84', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(692, 'B', '85', 'B85', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(693, 'B', '86', 'B86', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(694, 'B', '87', 'B87', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(695, 'B', '88', 'B88', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(696, 'B', '89', 'B89', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(697, 'B', '90', 'B90', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(698, 'B', '91', 'B91', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(699, 'B', '92', 'B92', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(700, 'B', '93', 'B93', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(701, 'B', '94', 'B94', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(702, 'B', '95', 'B95', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(703, 'B', '96', 'B96', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(704, 'B', '97', 'B97', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(705, 'B', '98', 'B98', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(706, 'B', '99', 'B99', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(707, 'B', '100', 'B100', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(708, 'B', '101', 'B101', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(709, 'B', '102', 'B102', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(710, 'B', '103', 'B103', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(711, 'B', '104', 'B104', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(712, 'B', '105', 'B105', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(713, 'B', '106', 'B106', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(714, 'B', '107', 'B107', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(715, 'B', '108', 'B108', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(716, 'B', '109', 'B109', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(717, 'B', '110', 'B110', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(718, 'B', '111', 'B111', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(719, 'B', '112', 'B112', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(720, 'B', '113', 'B113', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(721, 'B', '114', 'B114', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(722, 'B', '115', 'B115', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(723, 'B', '116', 'B116', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(724, 'B', '117', 'B117', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(725, 'B', '118', 'B118', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(726, 'B', '119', 'B119', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(727, 'B', '120', 'B120', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(728, 'B', '121', 'B121', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(729, 'B', '122', 'B122', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(730, 'B', '123', 'B123', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(731, 'B', '124', 'B124', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(732, 'B', '125', 'B125', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(733, 'B', '126', 'B126', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(734, 'B', '127', 'B127', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(735, 'B', '128', 'B128', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(736, 'B', '129', 'B129', 'hriday', 'Hriday', '2021-10-25 12:05:22'),
(737, 'C', '1', 'C1', 'hriday', 'Hriday', '2021-10-25 12:06:32'),
(738, 'C', '2', 'C2', 'hriday', 'Hriday', '2021-10-25 12:06:32'),
(739, 'C', '3', 'C3', 'hriday', 'Hriday', '2021-10-25 12:06:32'),
(740, 'C', '4', 'C4', 'hriday', 'Hriday', '2021-10-25 12:06:32'),
(741, 'C', '5', 'C5', 'hriday', 'Hriday', '2021-10-25 12:06:32'),
(742, 'C', '6', 'C6', 'hriday', 'Hriday', '2021-10-25 12:06:32'),
(743, 'C', '7', 'C7', 'hriday', 'Hriday', '2021-10-25 12:06:32'),
(744, 'C', '8', 'C8', 'hriday', 'Hriday', '2021-10-25 12:06:32'),
(745, 'C', '9', 'C9', 'hriday', 'Hriday', '2021-10-25 12:06:32'),
(746, 'C', '10', 'C10', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(747, 'C', '11', 'C11', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(748, 'C', '12', 'C12', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(749, 'C', '13', 'C13', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(750, 'C', '14', 'C14', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(751, 'C', '15', 'C15', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(752, 'C', '16', 'C16', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(753, 'C', '17', 'C17', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(754, 'C', '18', 'C18', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(755, 'C', '19', 'C19', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(756, 'C', '20', 'C20', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(757, 'C', '21', 'C21', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(758, 'C', '22', 'C22', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(759, 'C', '23', 'C23', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(760, 'C', '24', 'C24', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(761, 'C', '25', 'C25', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(762, 'C', '26', 'C26', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(763, 'C', '27', 'C27', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(764, 'C', '28', 'C28', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(765, 'C', '29', 'C29', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(766, 'C', '30', 'C30', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(767, 'C', '31', 'C31', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(768, 'C', '32', 'C32', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(769, 'C', '33', 'C33', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(770, 'C', '34', 'C34', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(771, 'C', '35', 'C35', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(772, 'C', '36', 'C36', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(773, 'C', '37', 'C37', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(774, 'C', '38', 'C38', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(775, 'C', '39', 'C39', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(776, 'C', '40', 'C40', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(777, 'C', '41', 'C41', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(778, 'C', '42', 'C42', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(779, 'C', '43', 'C43', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(780, 'C', '44', 'C44', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(781, 'C', '45', 'C45', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(782, 'C', '46', 'C46', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(783, 'C', '47', 'C47', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(784, 'C', '48', 'C48', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(785, 'C', '49', 'C49', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(786, 'C', '50', 'C50', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(787, 'C', '51', 'C51', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(788, 'C', '52', 'C52', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(789, 'C', '53', 'C53', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(790, 'C', '54', 'C54', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(791, 'C', '55', 'C55', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(792, 'C', '56', 'C56', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(793, 'C', '57', 'C57', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(794, 'C', '58', 'C58', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(795, 'C', '59', 'C59', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(796, 'C', '60', 'C60', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(797, 'C', '61', 'C61', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(798, 'C', '62', 'C62', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(799, 'C', '63', 'C63', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(800, 'C', '64', 'C64', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(801, 'C', '65', 'C65', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(802, 'C', '66', 'C66', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(803, 'C', '67', 'C67', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(804, 'C', '68', 'C68', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(805, 'C', '69', 'C69', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(806, 'C', '70', 'C70', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(807, 'C', '71', 'C71', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(808, 'C', '72', 'C72', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(809, 'C', '73', 'C73', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(810, 'C', '74', 'C74', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(811, 'C', '75', 'C75', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(812, 'C', '76', 'C76', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(813, 'C', '77', 'C77', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(814, 'C', '78', 'C78', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(815, 'C', '79', 'C79', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(816, 'C', '80', 'C80', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(817, 'C', '81', 'C81', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(818, 'C', '82', 'C82', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(819, 'C', '83', 'C83', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(820, 'C', '84', 'C84', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(821, 'C', '85', 'C85', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(822, 'C', '86', 'C86', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(823, 'C', '87', 'C87', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(824, 'C', '88', 'C88', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(825, 'C', '89', 'C89', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(826, 'C', '90', 'C90', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(827, 'C', '91', 'C91', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(828, 'C', '92', 'C92', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(829, 'C', '93', 'C93', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(830, 'C', '94', 'C94', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(831, 'C', '95', 'C95', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(832, 'C', '96', 'C96', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(833, 'C', '97', 'C97', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(834, 'C', '98', 'C98', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(835, 'C', '99', 'C99', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(836, 'C', '100', 'C100', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(837, 'C', '101', 'C101', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(838, 'C', '102', 'C102', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(839, 'C', '103', 'C103', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(840, 'C', '104', 'C104', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(841, 'C', '105', 'C105', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(842, 'C', '106', 'C106', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(843, 'C', '107', 'C107', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(844, 'C', '108', 'C108', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(845, 'C', '109', 'C109', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(846, 'C', '110', 'C110', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(847, 'C', '111', 'C111', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(848, 'C', '112', 'C112', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(849, 'C', '113', 'C113', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(850, 'C', '114', 'C114', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(851, 'C', '115', 'C115', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(852, 'C', '116', 'C116', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(853, 'C', '117', 'C117', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(854, 'C', '118', 'C118', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(855, 'C', '119', 'C119', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(856, 'C', '120', 'C120', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(857, 'C', '121', 'C121', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(858, 'C', '122', 'C122', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(859, 'C', '123', 'C123', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(860, 'C', '124', 'C124', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(861, 'C', '125', 'C125', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(862, 'C', '126', 'C126', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(863, 'C', '127', 'C127', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(864, 'C', '128', 'C128', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(865, 'C', '129', 'C129', 'hriday', 'Hriday', '2021-10-25 12:06:33'),
(866, 'D', '1', 'D1', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(867, 'D', '2', 'D2', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(868, 'D', '3', 'D3', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(869, 'D', '4', 'D4', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(870, 'D', '5', 'D5', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(871, 'D', '6', 'D6', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(872, 'D', '7', 'D7', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(873, 'D', '8', 'D8', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(874, 'D', '9', 'D9', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(875, 'D', '10', 'D10', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(876, 'D', '11', 'D11', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(877, 'D', '12', 'D12', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(878, 'D', '13', 'D13', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(879, 'D', '14', 'D14', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(880, 'D', '15', 'D15', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(881, 'D', '16', 'D16', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(882, 'D', '17', 'D17', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(883, 'D', '18', 'D18', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(884, 'D', '19', 'D19', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(885, 'D', '20', 'D20', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(886, 'D', '21', 'D21', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(887, 'D', '22', 'D22', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(888, 'D', '23', 'D23', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(889, 'D', '24', 'D24', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(890, 'D', '25', 'D25', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(891, 'D', '26', 'D26', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(892, 'D', '27', 'D27', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(893, 'D', '28', 'D28', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(894, 'D', '29', 'D29', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(895, 'D', '30', 'D30', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(896, 'D', '31', 'D31', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(897, 'D', '32', 'D32', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(898, 'D', '33', 'D33', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(899, 'D', '34', 'D34', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(900, 'D', '35', 'D35', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(901, 'D', '36', 'D36', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(902, 'D', '37', 'D37', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(903, 'D', '38', 'D38', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(904, 'D', '39', 'D39', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(905, 'D', '40', 'D40', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(906, 'D', '41', 'D41', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(907, 'D', '42', 'D42', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(908, 'D', '43', 'D43', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(909, 'D', '44', 'D44', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(910, 'D', '45', 'D45', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(911, 'D', '46', 'D46', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(912, 'D', '47', 'D47', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(913, 'D', '48', 'D48', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(914, 'D', '49', 'D49', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(915, 'D', '50', 'D50', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(916, 'D', '51', 'D51', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(917, 'D', '52', 'D52', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(918, 'D', '53', 'D53', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(919, 'D', '54', 'D54', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(920, 'D', '55', 'D55', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(921, 'D', '56', 'D56', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(922, 'D', '57', 'D57', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(923, 'D', '58', 'D58', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(924, 'D', '59', 'D59', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(925, 'D', '60', 'D60', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(926, 'D', '61', 'D61', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(927, 'D', '62', 'D62', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(928, 'D', '63', 'D63', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(929, 'D', '64', 'D64', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(930, 'D', '65', 'D65', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(931, 'D', '66', 'D66', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(932, 'D', '67', 'D67', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(933, 'D', '68', 'D68', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(934, 'D', '69', 'D69', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(935, 'D', '70', 'D70', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(936, 'D', '71', 'D71', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(937, 'D', '72', 'D72', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(938, 'D', '73', 'D73', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(939, 'D', '74', 'D74', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(940, 'D', '75', 'D75', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(941, 'D', '76', 'D76', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(942, 'D', '77', 'D77', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(943, 'D', '78', 'D78', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(944, 'D', '79', 'D79', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(945, 'D', '80', 'D80', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(946, 'D', '81', 'D81', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(947, 'D', '82', 'D82', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(948, 'D', '83', 'D83', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(949, 'D', '84', 'D84', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(950, 'D', '85', 'D85', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(951, 'D', '86', 'D86', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(952, 'D', '87', 'D87', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(953, 'D', '88', 'D88', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(954, 'D', '89', 'D89', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(955, 'D', '90', 'D90', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(956, 'D', '91', 'D91', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(957, 'D', '92', 'D92', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(958, 'D', '93', 'D93', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(959, 'D', '94', 'D94', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(960, 'D', '95', 'D95', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(961, 'D', '96', 'D96', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(962, 'D', '97', 'D97', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(963, 'D', '98', 'D98', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(964, 'D', '99', 'D99', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(965, 'D', '100', 'D100', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(966, 'D', '101', 'D101', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(967, 'D', '102', 'D102', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(968, 'D', '103', 'D103', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(969, 'D', '104', 'D104', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(970, 'D', '105', 'D105', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(971, 'D', '106', 'D106', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(972, 'D', '107', 'D107', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(973, 'D', '108', 'D108', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(974, 'D', '109', 'D109', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(975, 'D', '110', 'D110', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(976, 'D', '111', 'D111', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(977, 'D', '112', 'D112', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(978, 'D', '113', 'D113', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(979, 'D', '114', 'D114', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(980, 'D', '115', 'D115', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(981, 'D', '116', 'D116', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(982, 'D', '117', 'D117', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(983, 'D', '118', 'D118', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(984, 'D', '119', 'D119', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(985, 'D', '120', 'D120', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(986, 'D', '121', 'D121', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(987, 'D', '122', 'D122', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(988, 'D', '123', 'D123', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(989, 'D', '124', 'D124', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(990, 'D', '125', 'D125', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(991, 'D', '126', 'D126', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(992, 'D', '127', 'D127', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(993, 'D', '128', 'D128', 'hriday', 'Hriday', '2021-10-25 12:06:37'),
(994, 'D', '129', 'D129', 'hriday', 'Hriday', '2021-10-25 12:06:37');

-- --------------------------------------------------------

--
-- Table structure for table `datewise_transaction_summary`
--

CREATE TABLE `datewise_transaction_summary` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_date` varchar(20) NOT NULL,
  `work_order_number` varchar(150) DEFAULT NULL,
  `gd_number` varchar(150) DEFAULT NULL,
  `customer_name` varchar(150) DEFAULT NULL,
  `construction` varchar(150) NOT NULL,
  `composition` varchar(150) NOT NULL,
  `weave` varchar(150) NOT NULL,
  `shade` varchar(150) NOT NULL,
  `finished_width` varchar(150) NOT NULL,
  `finished_type` varchar(150) NOT NULL,
  `total_receiving` double DEFAULT 0,
  `total_issuing` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datewise_transaction_summary`
--

INSERT INTO `datewise_transaction_summary` (`id`, `transaction_date`, `work_order_number`, `gd_number`, `customer_name`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `total_receiving`, `total_issuing`) VALUES
(1, '2021-12-06', '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56.00', 'SOFT', 800, 0),
(2, '2021-12-13', '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '100 ROJO/RED', '56', 'SOFT', 230, 570);

-- --------------------------------------------------------

--
-- Table structure for table `item_info`
--

CREATE TABLE `item_info` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT '',
  `gd_number` varchar(100) DEFAULT NULL,
  `work_order_number` varchar(100) DEFAULT '',
  `shade` varchar(100) NOT NULL,
  `composition` varchar(100) NOT NULL,
  `weave` varchar(100) NOT NULL,
  `construction` varchar(100) NOT NULL,
  `finished_width` varchar(100) NOT NULL,
  `finished_type` varchar(100) NOT NULL,
  `on_hand_stock` int(11) NOT NULL,
  `uom` varchar(100) NOT NULL,
  `total_roll` int(11) NOT NULL,
  `recording_person_id` varchar(100) NOT NULL,
  `recording_person_name` varchar(100) NOT NULL,
  `recording_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_info`
--

INSERT INTO `item_info` (`id`, `customer_name`, `gd_number`, `work_order_number`, `shade`, `composition`, `weave`, `construction`, `finished_width`, `finished_type`, `on_hand_stock`, `uom`, `total_roll`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES
(1, 'JOY AUTO GARMENTS LTD.', 'VGS-23308/202', '65130-100 ROJO/RED', '100 ROJO/RED', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '30X30+40D/176X65', '56.00', 'SOFT', 800, 'yds', 3, 'hriday', 'Hriday', '2021-12-13 16:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `item_issuing`
--

CREATE TABLE `item_issuing` (
  `id` int(10) UNSIGNED NOT NULL,
  `barcode_code` varchar(100) NOT NULL,
  `receiving_location` varchar(100) DEFAULT NULL,
  `issued_by` varchar(50) DEFAULT NULL,
  `date_of_receipt` varchar(20) DEFAULT NULL,
  `roll_no` varchar(50) DEFAULT NULL,
  `pp_number` varchar(50) DEFAULT NULL,
  `work_order_number` varchar(50) DEFAULT NULL,
  `gd_number` varchar(100) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `shade` varchar(30) DEFAULT NULL,
  `construction` varchar(30) DEFAULT NULL,
  `composition` varchar(50) DEFAULT NULL,
  `weave` varchar(30) DEFAULT NULL,
  `length` float DEFAULT NULL,
  `finished_width` float DEFAULT NULL,
  `finished_type` varchar(30) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `row_number` varchar(30) DEFAULT '',
  `rack_number` varchar(30) DEFAULT '',
  `cubic_number` varchar(30) DEFAULT '',
  `bin_card_number` varchar(30) DEFAULT NULL,
  `quantiy` float DEFAULT NULL,
  `uom` varchar(20) DEFAULT NULL,
  `recording_person_id` varchar(30) DEFAULT NULL,
  `recording_person_name` varchar(50) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_issuing`
--

INSERT INTO `item_issuing` (`id`, `barcode_code`, `receiving_location`, `issued_by`, `date_of_receipt`, `roll_no`, `pp_number`, `work_order_number`, `gd_number`, `customer_name`, `shade`, `construction`, `composition`, `weave`, `length`, `finished_width`, `finished_type`, `type`, `grade`, `row_number`, `rack_number`, `cubic_number`, `bin_card_number`, `quantiy`, `uom`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES
(1, 'FASHION_65130_1', 'zzfl_wearhouse', 'Hriday', '2021-12-13', '1', '23308A1', '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '100 ROJO/RED', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', 230, 56, 'SOFT', 'Bulk', 'A', '1', 'A', 'A1', '1', 1, '1', 'hriday', 'Hriday', '2021-12-13 16:08:56'),
(2, 'FASHION_65130_2', 'zzfl_wearhouse', 'Hriday', '2021-12-13', '2', '23308A1', '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '100 ROJO/RED', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', 250, 56, 'SOFT', 'Bulk', 'A', '2', 'A', 'A2', '1', 1, '1', 'hriday', 'Hriday', '2021-12-13 16:08:56'),
(3, 'FASHION_65130_3', 'zzfl_wearhouse', 'Hriday', '2021-12-13', '3', '23308A1', '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '100 ROJO/RED', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', 320, 56, 'SOFT', 'Bulk', 'A', '3', 'A', 'A3', '1', 1, '1', 'hriday', 'Hriday', '2021-12-13 16:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `item_receiving`
--

CREATE TABLE `item_receiving` (
  `id` int(10) UNSIGNED NOT NULL,
  `barcode_code` varchar(100) NOT NULL,
  `receiving_location` varchar(100) DEFAULT NULL,
  `received_by` varchar(50) DEFAULT NULL,
  `date_of_receipt` varchar(20) DEFAULT NULL,
  `roll_no` varchar(50) DEFAULT NULL,
  `pp_number` varchar(50) DEFAULT NULL,
  `work_order_number` varchar(50) DEFAULT NULL,
  `gd_number` varchar(100) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `shade` varchar(30) DEFAULT NULL,
  `construction` varchar(30) DEFAULT NULL,
  `composition` varchar(50) DEFAULT NULL,
  `weave` varchar(30) DEFAULT NULL,
  `length` float DEFAULT NULL,
  `pallet_no` varchar(30) NOT NULL,
  `finished_width` float DEFAULT NULL,
  `finished_type` varchar(30) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `row_number` varchar(30) DEFAULT '',
  `rack_number` varchar(30) DEFAULT '',
  `cubic_number` varchar(30) DEFAULT '',
  `bin_card_number` varchar(30) DEFAULT NULL,
  `quantiy` float DEFAULT NULL,
  `uom` varchar(20) DEFAULT NULL,
  `active` varchar(11) DEFAULT NULL,
  `recording_person_id` varchar(30) DEFAULT NULL,
  `recording_person_name` varchar(50) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_receiving`
--

INSERT INTO `item_receiving` (`id`, `barcode_code`, `receiving_location`, `received_by`, `date_of_receipt`, `roll_no`, `pp_number`, `work_order_number`, `gd_number`, `customer_name`, `shade`, `construction`, `composition`, `weave`, `length`, `pallet_no`, `finished_width`, `finished_type`, `type`, `grade`, `row_number`, `rack_number`, `cubic_number`, `bin_card_number`, `quantiy`, `uom`, `active`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES
(1, 'FASHION_65130_1', 'ZZFL Febric Warehouse', 'Hriday Ahmed', '2021-12-06', '1', '23308A1', '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '100 ROJO/RED', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', 230, '', 56, 'SOFT', 'Bulk', 'A', '1', 'A', 'A1', '1', 1, '1', '0', 'hriday', 'Hriday', '2021-12-13 16:01:38'),
(2, 'FASHION_65130_2', 'ZZFL Febric Warehouse', 'Hriday Ahmed', '2021-12-06', '2', '23308A1', '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '100 ROJO/RED', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', 250, '', 56, 'SOFT', 'Bulk', 'A', '2', 'A', 'A2', '1', 1, '1', '0', 'hriday', 'Hriday', '2021-12-13 16:01:46'),
(3, 'FASHION_65130_3', 'ZZFL Febric Warehouse', 'Hriday Ahmed', '2021-12-06', '3', '23308A1', '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '100 ROJO/RED', '30X30+40D/176X65', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', 320, '', 56, 'SOFT', 'Bulk', 'A', '3', 'A', 'A3', '1', 1, '1', '0', 'hriday', 'Hriday', '2021-12-13 16:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `move_item`
--

CREATE TABLE `move_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `barcode_code` varchar(100) NOT NULL,
  `receiving_location` varchar(100) DEFAULT NULL,
  `received_by` varchar(50) DEFAULT NULL,
  `date_of_receipt` varchar(20) DEFAULT NULL,
  `roll_no` varchar(50) DEFAULT NULL,
  `pp_number` varchar(50) DEFAULT NULL,
  `work_order_number` varchar(50) DEFAULT NULL,
  `gd_number` varchar(100) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `shade` varchar(30) DEFAULT NULL,
  `construction` varchar(30) DEFAULT NULL,
  `composition` varchar(50) DEFAULT NULL,
  `weave` varchar(30) DEFAULT NULL,
  `length` float DEFAULT NULL,
  `finished_width` float DEFAULT NULL,
  `finished_type` varchar(30) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `old_row_number` varchar(30) DEFAULT '',
  `old_rack_number` varchar(30) DEFAULT '',
  `old_cubic_number` varchar(30) DEFAULT '',
  `new_row_number` varchar(30) DEFAULT '',
  `new_rack_number` varchar(30) DEFAULT '',
  `new_cubic_number` varchar(30) DEFAULT '',
  `old_pallet_number` varchar(30) DEFAULT '',
  `new_pallet_number` varchar(30) DEFAULT '',
  `bin_card_number` varchar(30) DEFAULT NULL,
  `quantiy` float DEFAULT NULL,
  `uom` varchar(20) DEFAULT NULL,
  `recording_person_id` varchar(30) DEFAULT NULL,
  `recording_person_name` varchar(50) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `packing_list`
--

CREATE TABLE `packing_list` (
  `id` int(11) NOT NULL,
  `work_order_number` varchar(100) DEFAULT NULL,
  `gd_number` varchar(70) DEFAULT NULL,
  `customer_name` varchar(150) DEFAULT NULL,
  `customer_id` varchar(40) DEFAULT NULL,
  `construction` varchar(80) DEFAULT NULL,
  `finish_width_in_inch` varchar(70) DEFAULT NULL,
  `roll_no` varchar(100) DEFAULT '',
  `composition` varchar(100) DEFAULT NULL,
  `shade` varchar(100) DEFAULT NULL,
  `weave` varchar(100) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `finished_type` varchar(100) DEFAULT NULL,
  `grade` varchar(100) DEFAULT NULL,
  `order_quantity` int(11) DEFAULT NULL,
  `actual_finished_width` varchar(30) DEFAULT NULL,
  `actual_cuttable_width` varchar(100) DEFAULT NULL,
  `points_per_yds` varchar(100) DEFAULT NULL,
  `pass_fail` varchar(30) DEFAULT NULL,
  `recording_person_id` varchar(30) DEFAULT NULL,
  `recording_person_name` varchar(100) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packing_list`
--

INSERT INTO `packing_list` (`id`, `work_order_number`, `gd_number`, `customer_name`, `customer_id`, `construction`, `finish_width_in_inch`, `roll_no`, `composition`, `shade`, `weave`, `length`, `finished_type`, `grade`, `order_quantity`, `actual_finished_width`, `actual_cuttable_width`, `points_per_yds`, `pass_fail`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES
(1, '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '1', '98% COTTON & 2% SPANDEX', '100 ROJO/RED', '3/1 S TWILL', 230, 'SOFT', 'A', 0, '45', '56', '12.8', 'Pass', '123', 'Hriday', '2021-12-06 11:05:38'),
(2, '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '2', '98% COTTON & 2% SPANDEX', '100 ROJO/RED', '3/1 S TWILL', 250, 'SOFT', 'A', 0, '45', '56', '12.1', 'Pass', '123', 'Hriday', '2021-12-06 11:06:00'),
(3, '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '3', '98% COTTON & 2% SPANDEX', '100 ROJO/RED', '3/1 S TWILL', 320, 'SOFT', 'A', 0, '46', '56', '12.4', 'Pass', '123', 'Hriday', '2021-12-06 11:06:22'),
(4, '65129-077 MARINO/NAVY', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '1', '98% COTTON & 2% SPANDEX', '077 MARINO/NAVY', '3/1 S TWILL', 300, 'SOFT', 'A', 0, '47', '58', '11.8', 'Pass', '123', 'Hriday', '2021-12-06 11:07:03'),
(5, '65129-077 MARINO/NAVY', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '2', '98% COTTON & 2% SPANDEX', '077 MARINO/NAVY', '3/1 S TWILL', 290, 'SOFT', 'A', 0, '47', '58', '11.7', 'Pass', '123', 'Hriday', '2021-12-06 11:07:23'),
(6, '65129-077 MARINO/NAVY', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '3', '98% COTTON & 2% SPANDEX', '077 MARINO/NAVY', '3/1 S TWILL', 320, 'SOFT', 'A', 0, '47', '58', '11.7', 'Pass', '123', 'Hriday', '2021-12-06 11:07:34'),
(7, '65129-077 MARINO/NAVY', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '4', '98% COTTON & 2% SPANDEX', '077 MARINO/NAVY', '3/1 S TWILL', 310, 'SOFT', 'A', 0, '47', '58', '11.7', 'Pass', '123', 'Hriday', '2021-12-06 11:07:48'),
(8, '65129-077 MARINO/NAVY', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '5', '98% COTTON & 2% SPANDEX', '077 MARINO/NAVY', '3/1 S TWILL', 280, 'SOFT', 'A', 0, '47', '58', '11.7', 'Pass', '123', 'Hriday', '2021-12-06 11:07:56'),
(9, '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '4', '98% COTTON & 2% SPANDEX', '100 ROJO/RED', '3/1 S TWILL', 310, 'SOFT', 'A', 0, '100', '90', '10', 'Pass', '123', 'Hriday', '2021-12-08 21:11:22'),
(10, '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '5', '98% COTTON & 2% SPANDEX', '100 ROJO/RED', '3/1 S TWILL', 310, 'SOFT', 'A', 0, '100', '90', '10', 'Pass', '123', 'Hriday', '2021-12-08 21:11:29'),
(11, '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '6', '98% COTTON & 2% SPANDEX', '100 ROJO/RED', '3/1 S TWILL', 310, 'SOFT', 'A', 0, '100', '90', '10', 'Pass', '123', 'Hriday', '2021-12-08 21:11:35'),
(12, '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '7', '98% COTTON & 2% SPANDEX', '100 ROJO/RED', '3/1 S TWILL', 310, 'SOFT', 'A', 0, '100', '90', '10', 'Pass', '123', 'Hriday', '2021-12-08 21:11:42'),
(13, '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '8', '98% COTTON & 2% SPANDEX', '100 ROJO/RED', '3/1 S TWILL', 310, 'SOFT', 'A', 0, '100', '90', '10', 'Pass', '123', 'Hriday', '2021-12-08 21:11:48'),
(14, '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '9', '98% COTTON & 2% SPANDEX', '100 ROJO/RED', '3/1 S TWILL', 310, 'SOFT', 'A', 0, '100', '90', '10', 'Pass', '123', 'Hriday', '2021-12-08 21:11:54'),
(15, '65130-100 ROJO/RED', 'VGS-23308/202', 'JOY AUTO GARMENTS LTD.', '1', '30X30+40D/176X65', '56.00', '10', '98% COTTON & 2% SPANDEX', '100 ROJO/RED', '3/1 S TWILL', 310, 'SOFT', 'A', 0, '100', '90', '10', 'Pass', '123', 'Hriday', '2021-12-08 21:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `proxima_software_data`
--

CREATE TABLE `proxima_software_data` (
  `id` int(11) NOT NULL,
  `buyer` varchar(100) NOT NULL,
  `work_order` varchar(100) NOT NULL,
  `gd_number` varchar(150) DEFAULT '',
  `composition` varchar(100) NOT NULL,
  `construction` varchar(100) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `finish_type` varchar(100) NOT NULL,
  `finish_width` varchar(100) NOT NULL,
  `pp_date` varchar(100) NOT NULL,
  `pp_no` varchar(100) NOT NULL,
  `shade` varchar(100) NOT NULL,
  `weave` varchar(100) NOT NULL,
  `recording_person_id` varchar(100) NOT NULL,
  `recording_person_name` varchar(100) NOT NULL,
  `recording_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proxima_software_data`
--

INSERT INTO `proxima_software_data` (`id`, `buyer`, `work_order`, `gd_number`, `composition`, `construction`, `customer`, `finish_type`, `finish_width`, `pp_date`, `pp_no`, `shade`, `weave`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES
(413, 'SIGNET', '1-Lt.blue-Whtite Strip', 'ZZFL-H/21/10001', '100% COTTON POPLIN', '40X40/110X76', 'MARK MODE LTD.', 'REGULAR', '58.00', '2012-05-13', '1', 'Lt.blue-Whtite Strip', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:30'),
(414, 'SIGNET', 'NULL', 'ZZFL-H/21/10001', '100% COTTON POPLIN', '40X40/110X76', 'MARK MODE LTD.', 'REGULAR', '58.00', '2012-05-13', '1', 'Pink-White Stripe', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:30'),
(415, 'SIGNET', 'NULL', 'ZZFL-H/21/10001', '100% COTTON POPLIN', '40X40/110X76', 'MARK MODE LTD.', 'REGULAR', '58.00', '2012-05-13', '1', 'Pink-Why deep Stripe', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:30'),
(416, 'SIGNET', 'NULL', 'ZZFL-H/21/10001', '100% COTTON POPLIN', '40X40/110X76', 'MARK MODE LTD.', 'REGULAR', '58.00', '2012-05-13', '1', 'Pink-White YD Check', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:30'),
(417, 'CASUAL MALE', '19-COL-04 MARINE(19-3925)', 'ZZFL-H/21/10002', '100% COTTON TWILL', '20X16/128X60', 'Apparel Export Limited.', 'PEACH FINISH', '57.00', '2012-06-27', '1504', 'COL-04 MARINE(19-3925)', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:30'),
(418, 'CASUAL MALE', '16-COL-34 ROSE(14-1511)', 'ZZFL-H/21/10003', '100% COTTON TWILL', '20X16/128X60', 'Apparel Export Limited.', 'PEACH FINISH', '57.00', '2012-06-27', '1504', 'COL-34 ROSE(14-1511)', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:30'),
(419, 'CASUAL MALE', '18-COL-68 BEIGE(15-1215)', 'ZZFL-H/21/10003', '100% COTTON TWILL', '20X16/128X60', 'Apparel Export Limited.', 'PEACH FINISH', '57.00', '2012-06-27', '1504', 'COL-68 BEIGE(15-1215)', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(420, 'C&A', '23-BRIGHT WHITE(11-0601)', 'ZZFL-H/21/10003', '100% COTTON POPLIN', '40X40/133X100', 'Manta Apparels Ltd.', 'REGULAR', '58.00', '2012-06-27', '1507', 'BRIGHT WHITE(11-0601)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(421, 'C&A', '30-STRONG BLUE(18-4051)', 'ZZFL-H/21/10004', '100% COTTON POPLIN', '40X40/133X100', 'Manta Apparels Ltd.', 'REGULAR', '58.00', '2012-06-27', '1507', 'STRONG BLUE(18-4051)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(422, 'C&A', '25-BRIGHT WHITE(11-0601)', 'ZZFL-H/21/10004', '100% COTTON POPLIN', '40X40/133X100', 'Manta Apparels Ltd.', 'REGULAR', '58.00', '2012-06-27', '1507', 'BRIGHT WHITE(11-0601)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(423, 'C&A', '27-CERAMIC(16-5127)', 'ZZFL-H/21/10004', '100% COTTON POPLIN', '40X40/133X100', 'Manta Apparels Ltd.', 'REGULAR', '58.00', '2012-06-27', '1507', 'CERAMIC(16-5127)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(424, 'C&A', '12340-LAND', 'ZZFL-H/21/10005', '100% COTTON POPLIN', '40X40/133X100', 'Vision Apparels (Pvt) Ltd.', 'REGULAR', '58.00', '2012-06-28', '1511', 'LAND', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(425, 'Martytex Ltd.', '196-BLUE NAVY 5003', 'ZZFL-H/21/10005', '100% COTTON TWILL', '30X30/130X70', 'OLIRA FASHIONS LTD', 'REGULAR', '57.00', '2012-07-12', '1586', 'BLUE NAVY 5003', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(426, 'Martytex Ltd.', '194-KAKI 6006', 'ZZFL-H/21/10005', '100% COTTON TWILL', '30X30/130X70', 'OLIRA FASHIONS LTD', 'REGULAR', '57.00', '2012-07-12', '1586', 'KAKI 6006', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(427, 'Martytex Ltd.', '197-ARMANI 6015', 'ZZFL-H/21/10005', '100% COTTON TWILL', '30X30/130X70', 'OLIRA FASHIONS LTD', 'REGULAR', '57.00', '2012-07-12', '1586', 'ARMANI 6015', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(428, 'Martytex Ltd.', '195-FUMO 7006', 'ZZFL-H/21/10005', '100% COTTON TWILL', '30X30/130X70', 'OLIRA FASHIONS LTD', 'REGULAR', '57.00', '2012-07-12', '1586', 'FUMO 7006', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(429, 'C&A', '118-FROST GREY', 'ZZFL-H/21/10006', '100% COTTON TWILL', '30X30/130X70', 'KANIZ GARMENTS LTD.', 'PEACH FINISH', '58.00', '2012-08-01', '1531', 'FROST GREY', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(430, 'C&A', '115-CERAMIC', 'ZZFL-H/21/10006', '100% COTTON TWILL', '30X30/130X70', 'KANIZ GARMENTS LTD.', 'PEACH FINISH', '58.00', '2012-08-01', '1531', 'CERAMIC', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(431, 'H&M', '397-NEPTUNE PRINT STRIPE BLUE(75-104)', 'ZZFL-H/21/10006', '100% COTTON POPLIN', '40X40/133X100', 'Ananta Garments Ltd.', 'REGULAR', '58.00', '2012-08-02', '1715', 'NEPTUNE PRINT STRIPE BLUE(75-104)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(432, 'BIG W', '495-STONE', 'ZZFL-H/21/10007', '100% COTTON TWILL', '20X16/128X60', 'ARRIVAL FASHION LTD', 'PEACH FINISH', '57.00', '2012-08-08', '1761', 'STONE', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(433, 'BIG W', '494-CHARCOAL', 'ZZFL-H/21/10007', '100% COTTON TWILL', '20X16/128X60', 'ARRIVAL FASHION LTD', 'PEACH FINISH', '57.00', '2012-08-08', '1761', 'CHARCOAL', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(434, 'BIG W', '493-BLACK', 'ZZFL-H/21/10008', '100% COTTON TWILL', '20X16/128X60', 'ARRIVAL FASHION LTD', 'PEACH FINISH', '57.00', '2012-08-08', '1761', 'BLACK', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(435, 'PARKZONE LTD', '487-LIGHT GREY 21-4', 'ZZFL-H/21/10008', '100% COTTON TWILL', '40/2X12/120X68', 'PARK STAR APPARELS LTD.', 'REGULAR', '57.00', '2012-08-08', '1758', 'LIGHT GREY 21-4', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(436, 'C&A', '516-102, BLACK', 'ZZFL-H/21/10008', '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '58.00', '2012-08-09', '1773', '102, BLACK', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(437, 'C&A', '513-815,MAJOR BROWN(19-0810)', 'ZZFL-H/21/10009', '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '58.00', '2012-08-09', '1773', '815,MAJOR BROWN(19-0810)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(438, 'C&A', '517-888, CHALK', 'ZZFL-H/21/10009', '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '58.00', '2012-08-09', '1773', '888, CHALK', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(439, 'C&A', '514-197, WHITE', 'ZZFL-H/21/10009', '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '58.00', '2012-08-09', '1773', '197, WHITE', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(440, 'C&A', '518-653, MAZARINE BLUE (19-3864)', 'ZZFL-H/21/10009', '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '58.00', '2012-08-09', '1773', '653, MAZARINE BLUE (19-3864)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(441, 'VF ASIA LTD.', '589-DIRT', 'ZZFL-H/21/10009', '100% COTTON TWILL', '20X10/130X50', 'Medlar Apparels Ltd.', 'REGULAR', '58.00', '2012-08-24', '1834', 'DIRT', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(442, 'VF ASIA LTD.', '587-GRANITE', 'ZZFL-H/21/10009', '100% COTTON TWILL', '20X10/130X50', 'Medlar Apparels Ltd.', 'REGULAR', '58.00', '2012-08-24', '1834', 'GRANITE', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(443, 'H&M', '49585-Blue Stripe (75-104)', 'ZZFL-H/21/10009', '100% COTTON POPLIN', '40X40/133X100', 'Ananta Garments Ltd.', 'SOFT', '58.00', '2012-08-29', '1848', 'Blue Stripe (75-104)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(444, 'Patrick International', '52681-Strong Blue (18-4051 TCX)', 'ZZFL-H/21/10009', '100% COTTON TWILL', '20X16/128X60', 'Cambrige Garments Ltd.', 'REGULAR', '57.00', '2012-08-29', '1857', 'Strong Blue (18-4051 TCX)', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(445, 'C&A', '51726-CHECK', 'ZZFL-H/21/10009', '100% COTTON POPLIN', '40X40/133X100', 'JEANS 2000 LTD', 'REGULAR', '58.00', '2012-08-30', '1864', 'CHECK', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(446, 'H&M', '50261-BEIGE (13-105)', 'ZZFL-H/21/10009', '100% COTTON TWILL', '32X32/160X90', 'Russel Garments', 'PEACH FINISH', '57.00', '2012-08-30', '1865', 'BEIGE (13-105)', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(447, 'H&M', '51743-PFD', 'ZZFL-H/21/10009', '100% COTTON TWILL', '40X40/150X100', 'Ananta Garments Ltd.', 'PEACH FINISH', '58.00', '2012-08-31', '1870', 'PFD', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(448, 'SYKHAI', '663-RFD', 'ZZFL-H/21/10009', '100% COTTON TWILL', '30X20/140X70', 'ANIKA GARMENTS(PVT) LTD', 'LT. PEACH', '57.00', '2012-10-08', '2054', 'RFD', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(449, 'CASUAL MALE', '671-Black', 'ZZFL-H/21/10009', '100% COTTON TWILL', '20X16/128X60', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-08', '2057', 'Black', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(450, 'CASUAL MALE', '668-Khaki', 'ZZFL-H/21/10009', '100% COTTON TWILL', '20X16/128X60', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-08', '2057', 'Khaki', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(451, 'CASUAL MALE', '667-Stone', 'ZZFL-H/21/10009', '100% COTTON TWILL', '20X16/128X60', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-08', '2057', 'Stone', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(452, 'C&A', '674-927,PB TURQUOISE', 'ZZFL-H/21/100010', '100% COTTON TWILL', '40X40/150X100', 'Fashion Forum Ltd.', 'REGULAR', '57.00', '2012-10-09', '2064', '927,PB TURQUOISE', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(453, 'C&A', '679-938, FLURO ORANGE', 'ZZFL-H/21/100010', '100% COTTON TWILL', '40X40/150X100', 'Fashion Forum Ltd.', 'REGULAR', '57.00', '2012-10-09', '2064', '938, FLURO ORANGE', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(454, 'C&A', '675-938, FLURO ORANGE', 'ZZFL-H/21/100010', '100% COTTON TWILL', '40X40/150X100', 'Fashion Forum Ltd.', 'REGULAR', '57.00', '2012-10-09', '2064', '938, FLURO ORANGE', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(455, 'C&A', '680-952, FLURO GREEN AS SWATCH', 'ZZFL-H/21/100010', '100% COTTON TWILL', '40X40/150X100', 'Fashion Forum Ltd.', 'REGULAR', '57.00', '2012-10-09', '2064', '952, FLURO GREEN AS SWATCH', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(456, 'C&A', '676-952, FLURO GREEN AS SWATCH', 'ZZFL-H/21/100010', '100% COTTON TWILL', '40X40/150X100', 'Fashion Forum Ltd.', 'REGULAR', '57.00', '2012-10-09', '2064', '952, FLURO GREEN AS SWATCH', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31'),
(457, 'KAPPAHL', '690-8341C KHAKI GREEN', 'ZZFL-H/21/100010', '100% COTTON POPLIN', '30X30/133X85', 'Sams Attire Ltd.', 'MICRO SAND PEACH', '57.00', '2012-10-12', '2093', '8341C KHAKI GREEN', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(458, 'Smart Jeans Ltd', '700-2364(18-1112 TCX)', 'ZZFL-H/21/100010', '100% COTTON POPLIN', '40X40/133X100', 'Smart Jeans Ltd.', 'REGULAR', '57.00', '2012-10-12', '2095', '2364(18-1112 TCX)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(459, 'H&M', '712-96-111', 'ZZFL-H/21/100010', '100% COTTON TWILL', '40X40/143X112', 'BANGA GARMENTS LTD.', 'REGULAR', '57.00', '2012-10-13', '2103', '96-111', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(460, 'Fashion Dormation', '713-300A BRIGHT BLUE', 'ZZFL-H/21/100010', '100% COTTON TWILL', '30X20/152X95', 'FARKAN TEX LTD.', 'LT. PEACH', '57.00', '2012-10-13', '2106', '300A BRIGHT BLUE', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(461, 'ASMARA', '731-RFD', 'ZZFL-H/21/100010', '100% COTTON TWILL', '32X32/140X80', 'Babylon Casualwear Ltd.', 'LT. PEACH', '57.00', '2012-10-15', '2127', 'RFD', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(462, 'ASMARA', '732-GREEN CAMO', 'ZZFL-H/21/100010', '100% COTTON TWILL', '32X32/140X80', 'Babylon Casualwear Ltd.', 'LT. PEACH', '57.00', '2012-10-15', '2128', 'GREEN CAMO', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(463, 'ASMARA', '740-BLACK', 'ZZFL-H/21/100010', '100% COTTON CANVAS', '20X16/80X60', 'Babylon Casualwear Ltd.', 'LT. PEACH', '57.00', '2012-10-15', '2130', 'BLACK', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(464, 'MATALAN', '724-WHITE', 'ZZFL-H/21/100010', '100% COTTON TWILL', '30X30/130X70', 'Bakul Apparels Ltd.', 'REGULAR', '58.00', '2012-10-15', '2125', 'WHITE', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(465, 'VF ASIA LTD.', '753-BURNT HENNA', 'ZZFL-H/21/100011', '100% COTTON CAVALRY TWILL', '20X10/130x50', 'Medlar Apparels Ltd.', 'REGULAR', '57.00', '2012-10-15', '2140', 'BURNT HENNA', '3/3 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(466, 'VF ASIA LTD.', '752-DIRT', 'ZZFL-H/21/100011', '100% COTTON CAVALRY TWILL', '20X10/130x50', 'Medlar Apparels Ltd.', 'REGULAR', '57.00', '2012-10-15', '2140', 'DIRT', '3/3 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(467, 'Styletex', '741-RFD', NULL, '100% COTTON POPLIN', '40X40/133X100', 'Optimo Jeans Ltd.', 'PEACH FINISH', '58.00', '2012-10-15', '2132', 'RFD', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(468, 'HEMA', '728-Daphne', NULL, '100% COTTON POPLIN', '40X40/133X100', 'SAAD SAAN APPARELS LTD.', 'PAPER TOUCH', '58.00', '2012-10-15', '2126', 'Daphne', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(469, 'HEMA', '729-Khaki', NULL, '100% COTTON POPLIN', '40X40/133X100', 'SAAD SAAN APPARELS LTD.', 'PAPER TOUCH', '58.00', '2012-10-15', '2126', 'Khaki', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(470, 'HEMA', '726-Red', NULL, '100% COTTON POPLIN', '40X40/133X100', 'SAAD SAAN APPARELS LTD.', 'PAPER TOUCH', '58.00', '2012-10-15', '2126', 'Red', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(471, 'HEMA', '730-Blue Curacao', NULL, '100% COTTON POPLIN', '40X40/133X100', 'SAAD SAAN APPARELS LTD.', 'PAPER TOUCH', '58.00', '2012-10-15', '2126', 'Blue Curacao', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(472, 'HEMA', '727-Bright White', NULL, '100% COTTON POPLIN', '40X40/133X100', 'SAAD SAAN APPARELS LTD.', 'PAPER TOUCH', '58.00', '2012-10-15', '2126', 'Bright White', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(473, 'VF ASIA LTD.', '770-Bungi Camo', NULL, '100% COTTON TWILL', '20X16/128X60', 'Arunima Sports Wear Ltd.', 'PEACH FINISH', '58.00', '2012-10-16', '2150', 'Bungi Camo', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(474, 'VF ASIA LTD.', '771-Bungi Camo', NULL, '100% COTTON TWILL', '20X16/128X60', 'Arunima Sports Wear Ltd.', 'PEACH FINISH', '58.00', '2012-10-16', '2151', 'Bungi Camo', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(475, 'C&A', '765-PRINT-01-BEETROOT PURPLE', NULL, '100% ORGANIC COTTON CANVAS', '30X30/132X85', 'S.F DENIM APPARELS LTD.', 'REGULAR', '57.00', '2012-10-16', '2145', 'PRINT-01-BEETROOT PURPLE', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(476, 'C&A', '764-PRINT-02-LIMELIGHT (AMERICAN ORANGE)', NULL, '100% ORGANIC COTTON CANVAS', '30X30/132X85', 'S.F DENIM APPARELS LTD.', 'REGULAR', '57.00', '2012-10-16', '2145', 'PRINT-02-LIMELIGHT (AMERICAN ORANGE)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(477, 'C&A', '763-LIMELIGHT 12-0740 TCX', NULL, '100% COTTON POPLIN', '40X40/133X100', 'S.F DENIM APPARELS LTD.', 'REGULAR', '57.00', '2012-10-16', '2144', 'LIMELIGHT 12-0740 TCX', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(478, 'C&A', '762-BLUE ATOLL 16-4535 TCX', NULL, '100% COTTON POPLIN', '40X40/133X100', 'S.F DENIM APPARELS LTD.', 'REGULAR', '57.00', '2012-10-16', '2144', 'BLUE ATOLL 16-4535 TCX', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(479, 'C&A', '761-REAL BLACK', NULL, '100% COTTON POPLIN', '40X40/133X100', 'S.F DENIM APPARELS LTD.', 'REGULAR', '57.00', '2012-10-16', '2144', 'REAL BLACK', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(480, 'VF ASIA LTD.', '780-4AB- ATLANTIC BLUE', NULL, '100% COTTON DOBBY', '32X12/128X76', 'Refat Garments Ltd.', 'PEACH FINISH', '57.00', '2012-10-17', '2157', '4AB- ATLANTIC BLUE', 'DOBBY', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(481, 'VF ASIA LTD.', '783-LODEN (3LD)', NULL, '100% COTTON DOBBY', '32X12/128X76', 'Refat Garments Ltd.', 'PEACH FINISH', '57.00', '2012-10-17', '2157', 'LODEN (3LD)', 'DOBBY', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(482, 'VF ASIA LTD.', '797-Nautica Stone (13S)', NULL, '100% COTTON TWILL', '16X12/108X56', 'MBM GARMENTS LTD.', 'PEACH FINISH', '58.00', '2012-10-18', '2167', 'Nautica Stone (13S)', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(483, 'VISAGE', '813-PFD/RFD', NULL, '100% COTTON TWILL', '20X30/126X80', 'AKM Knit Wear Ltd.', 'PEACH FINISH', '58.00', '2012-10-19', '2170', 'PFD/RFD', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(484, 'H&M', '814-BEIGE (13-105)', NULL, '100% COTTON TWILL', '32X32/160X90', 'Glory Industries Ltd.', 'PEACH FINISH', '57.00', '2012-10-19', '2173', 'BEIGE (13-105)', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(485, 'H&M', '820-76-223(Blue Dark)', NULL, '100% ORGANIC COTTON TWILL', '32X32/160X90', 'CHITTAGONG ASIAN APPARELS LTD.', 'PEACH FINISH', '57.00', '2012-10-20', '2175', '76-223(Blue Dark)', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(486, 'H&M', '823-07-206(Grey)', NULL, '100% ORGANIC COTTON TWILL', '32X32/160X90', 'CHITTAGONG ASIAN APPARELS LTD.', 'PEACH FINISH', '57.00', '2012-10-20', '2175', '07-206(Grey)', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(487, 'H&M', '821-88-209(Turquoise Greenish)', NULL, '100% ORGANIC COTTON TWILL', '32X32/160X90', 'CHITTAGONG ASIAN APPARELS LTD.', 'PEACH FINISH', '57.00', '2012-10-20', '2175', '88-209(Turquoise Greenish)', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(488, 'H&M', '826-Blu redish dk 76-205', NULL, '100% COTTON TWILL', '40X40/150X100', 'Glory Industries Ltd.', 'PEACH FINISH', '57.00', '2012-10-20', '2176', 'Blu redish dk 76-205', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(489, 'OBG', '846-WHITE- WH1001', NULL, '100% COTTON TWILL', '20X16/128X60', 'GOLDEN HEIGHTS LTD.', 'PEACH FINISH', '-1.00', '2012-10-21', '2194', 'WHITE- WH1001', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(490, 'ESSENZA', '836-Fango 298', NULL, '100% COTTON TWILL', '30X30/155X90', 'Megastar Apparels ltd', 'LT. PEACH', '57.00', '2012-10-21', '2188', 'Fango 298', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(491, 'ESSENZA', '839-Blu 713', NULL, '100% COTTON TWILL', '30X30/155X90', 'Megastar Apparels ltd', 'LT. PEACH', '57.00', '2012-10-21', '2188', 'Blu 713', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(492, 'ESSENZA', '837-Beige 222', NULL, '100% COTTON TWILL', '30X30/155X90', 'Megastar Apparels ltd', 'LT. PEACH', '57.00', '2012-10-21', '2188', 'Beige 222', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(493, 'ESSENZA', '840-Oceano', NULL, '100% COTTON TWILL', '30X30/155X90', 'Megastar Apparels ltd', 'LT. PEACH', '57.00', '2012-10-21', '2188', 'Oceano', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(494, 'ESSENZA', '838-Grogio 809', NULL, '100% COTTON TWILL', '30X30/155X90', 'Megastar Apparels ltd', 'LT. PEACH', '57.00', '2012-10-21', '2188', 'Grogio 809', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(495, 'Carters B Tags', '843-WHITE/ WH0001', NULL, '100% COTTON POPLIN', '32X32/140X70', 'Smart Jeans Ltd.', 'PEACH FINISH', '57.00', '2012-10-21', '2192', 'WHITE/ WH0001', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(496, 'CRL', '833-GOLDEN BROWN', NULL, '100% COTTON DOBBY', '30X14/152X80', 'Step two apparels Ltd', 'REGULAR', '58.00', '2012-10-21', '2187', 'GOLDEN BROWN', 'DOBBY', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(497, 'CRL', '835-NAVY', NULL, '100% COTTON DOBBY', '30X14/152X80', 'Step two apparels Ltd', 'REGULAR', '58.00', '2012-10-21', '2187', 'NAVY', 'DOBBY', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(498, 'CRL', '834-LIGHT GREY', NULL, '100% COTTON DOBBY', '30X14/152X80', 'Step two apparels Ltd', 'REGULAR', '58.00', '2012-10-21', '2187', 'LIGHT GREY', 'DOBBY', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(499, 'TESCO(UK)', '832-Medieval (19 3933)', NULL, '100% COTTON CANVAS', '20X20/100X50', 'Utah Fashions Ltd.', 'PEACH FINISH', '58.00', '2012-10-21', '2185', 'Medieval (19 3933)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(500, 'CASUAL MALE', '857-AHR', NULL, '100% COTTON CANVAS', '30X30/133X85', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-22', '2198', 'AHR', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(501, 'CASUAL MALE', '858-GUM', NULL, '100% COTTON CANVAS', '30X30/133X85', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-22', '2198', 'GUM', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32'),
(502, 'CASUAL MALE', '854-ERN', NULL, '100% COTTON TWILL', '20X16/128X60', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-22', '2197', 'ERN', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33'),
(503, 'CASUAL MALE', '856-NAVY', NULL, '100% COTTON TWILL', '20X16/128X60', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-22', '2197', 'NAVY', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33'),
(504, 'CASUAL MALE', '855-ONB', NULL, '100% COTTON TWILL', '20X16/128X60', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-22', '2197', 'ONB', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33'),
(505, 'C&A', '861-BLUE ATTOL(P16-4535 TCX)', NULL, '100% COTTON POPLIN', '40X40/133X100', 'Fashion Forum Ltd.', 'REGULAR', '58.00', '2012-10-22', '2201', 'BLUE ATTOL(P16-4535 TCX)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:33'),
(506, 'C&A', '863-FUCHSIA PURPLE(P18-2436 TCX)', NULL, '100% COTTON POPLIN', '40X40/133X100', 'Fashion Forum Ltd.', 'REGULAR', '58.00', '2012-10-22', '2201', 'FUCHSIA PURPLE(P18-2436 TCX)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:33'),
(507, 'C&A', '860-FUCHISA PINK(15-2718)', NULL, '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '57.00', '2012-10-22', '2200', 'FUCHISA PINK(15-2718)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:33'),
(508, 'C&A', '859-GREY FLOWER PRINT', NULL, '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '58.00', '2012-10-22', '2199', 'GREY FLOWER PRINT', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:33'),
(509, 'H&M', '874-12-335 (Beig Light)', NULL, '100% COTTON TWILL', '40X40/150X100', 'Ananta Garments Ltd.', 'PEACH FINISH', '58.00', '2012-10-23', '2226', '12-335 (Beig Light)', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33'),
(510, 'H&M', '875-PFD', NULL, '100% COTTON TWILL', '40X40/150X100', 'Ananta Garments Ltd.', 'PEACH FINISH', '58.00', '2012-10-23', '2227', 'PFD', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33'),
(511, 'H&M', '879-97-305', NULL, '100% COTTON TWILL', '40X40/150X100', 'HONG KONG DENIM (PVT.) LTD.', 'PEACH FINISH', '57.00', '2012-10-23', '2228', '97-305', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33'),
(512, 'H&M', '877-30-102', NULL, '100% COTTON TWILL', '40X40/150X100', 'HONG KONG DENIM (PVT.) LTD.', 'PEACH FINISH', '57.00', '2012-10-23', '2228', '30-102', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33'),
(513, 'ORBITAL', '868-as per swatch', NULL, '100% COTTON TWILL', '30X20/130X70', 'Miswar Hosiery Mills (Pvt) Ltd.', 'REGULAR', '58.00', '2012-10-23', '2219', 'as per swatch', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33'),
(514, 'ORBITAL', '870-Beige', NULL, '100% COTTON CANVAS', '30X20/124X58', 'Miswar Hosiery Mills (Pvt) Ltd.', 'REGULAR', '58.00', '2012-10-23', '2220', 'Beige', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `roll_information_barcode`
--

CREATE TABLE `roll_information_barcode` (
  `id` int(11) NOT NULL,
  `barcode_code` varchar(100) NOT NULL,
  `pp_number` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `work_order_number` varchar(100) NOT NULL,
  `gd_number` varchar(100) DEFAULT NULL,
  `construction` varchar(100) NOT NULL,
  `finish_width_in_inch` varchar(100) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `kgs` varchar(100) NOT NULL,
  `composition` varchar(100) NOT NULL,
  `shade` varchar(100) NOT NULL,
  `weave` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `finished_type` varchar(100) NOT NULL,
  `pallet_no` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `recording_person_id` varchar(100) NOT NULL,
  `recording_person_name` varchar(100) NOT NULL,
  `recording_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roll_information_barcode`
--

INSERT INTO `roll_information_barcode` (`id`, `barcode_code`, `pp_number`, `customer_name`, `customer_id`, `work_order_number`, `gd_number`, `construction`, `finish_width_in_inch`, `roll_no`, `kgs`, `composition`, `shade`, `weave`, `length`, `finished_type`, `pallet_no`, `type`, `grade`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES
(1, 'FASHION_65130_1', '23308A1', 'JOY AUTO GARMENTS LTD.', '1', '65130-100 ROJO/RED', 'VGS-23308/202', '30X30+40D/176X65', '56.00', '1', '', '98% COTTON & 2% SPANDEX', '100 ROJO/RED', '3/1 S TWILL', '230', 'SOFT', '112233', 'Bulk', 'A', 'hriday', 'Hriday', '2021-12-06 11:25:16'),
(2, 'FASHION_65130_2', '23308A1', 'JOY AUTO GARMENTS LTD.', '1', '65130-100 ROJO/RED', 'VGS-23308/202', '30X30+40D/176X65', '56.00', '2', '', '98% COTTON & 2% SPANDEX', '100 ROJO/RED', '3/1 S TWILL', '250', 'SOFT', '112233', 'Bulk', 'A', 'hriday', 'Hriday', '2021-12-06 11:29:14'),
(3, 'FASHION_65130_3', '23308A1', 'JOY AUTO GARMENTS LTD.', '1', '65130-100 ROJO/RED', 'VGS-23308/202', '30X30+40D/176X65', '56.00', '3', '', '98% COTTON & 2% SPANDEX', '100 ROJO/RED', '3/1 S TWILL', '320', 'SOFT', '112233', 'Bulk', 'A', 'hriday', 'Hriday', '2021-12-06 11:30:06'),
(4, 'FASHION_65129_1', '23308A1', 'JOY AUTO GARMENTS LTD.', '1', '65129-077 MARINO/NAVY', 'VGS-23308/202', '30X30+40D/176X65', '56.00', '1', '', '98% COTTON & 2% SPANDEX', '077 MARINO/NAVY', '3/1 S TWILL', '300', 'SOFT', '112233', 'Bulk', 'A', 'hriday', 'Hriday', '2021-12-06 11:31:25'),
(5, 'FASHION_65129_2', '23308A1', 'JOY AUTO GARMENTS LTD.', '1', '65129-077 MARINO/NAVY', 'VGS-23308/202', '30X30+40D/176X65', '56.00', '2', '', '98% COTTON & 2% SPANDEX', '077 MARINO/NAVY', '3/1 S TWILL', '290', 'SOFT', '112233', 'Bulk', 'A', 'hriday', 'Hriday', '2021-12-06 11:32:52'),
(10, 'FASHION_65129_3', '23308A1', 'JOY AUTO GARMENTS LTD.', '1', '65129-077 MARINO/NAVY', 'VGS-23308/202', '30X30+40D/176X65', '56.00', '3', '333', '98% COTTON & 2% SPANDEX', '077 MARINO/NAVY', '3/1 S TWILL', '320', 'SOFT', '33333', 'Bulk', 'A', 'hriday', 'Hriday', '2021-12-06 14:24:55'),
(11, 'FASHION_65129_4', '23308A1', 'JOY AUTO GARMENTS LTD.', '1', '65129-077 MARINO/NAVY', 'VGS-23308/202', '30X30+40D/176X65', '56.00', '4', '310', '98% COTTON & 2% SPANDEX', '077 MARINO/NAVY', '3/1 S TWILL', '310', 'SOFT', '12345', 'Bulk', 'A', 'hriday', 'Hriday', '2021-12-08 21:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `unloading_plan`
--

CREATE TABLE `unloading_plan` (
  `id` int(11) NOT NULL,
  `work_order_number` varchar(100) DEFAULT NULL,
  `delivery_quantity` int(11) DEFAULT NULL,
  `buyer` varchar(100) DEFAULT NULL,
  `garments` varchar(150) DEFAULT NULL,
  `ac_holder` varchar(150) DEFAULT NULL,
  `fabrication` varchar(100) DEFAULT NULL,
  `composition` varchar(100) DEFAULT NULL,
  `weave` varchar(100) DEFAULT NULL,
  `width` varchar(90) DEFAULT NULL,
  `process_name` varchar(120) DEFAULT NULL,
  `gd_number` varchar(100) DEFAULT NULL,
  `pi_number` varchar(100) DEFAULT NULL,
  `pp_number` varchar(100) DEFAULT NULL,
  `color_or_design` varchar(100) DEFAULT NULL,
  `order_qty` int(11) DEFAULT NULL,
  `grade_a` int(11) DEFAULT NULL,
  `grade_b` int(11) DEFAULT NULL,
  `total_stock` int(11) DEFAULT NULL,
  `number_of_roll` int(11) DEFAULT NULL,
  `date_of_delivery` varchar(40) DEFAULT NULL,
  `all_cubics` varchar(40) DEFAULT NULL,
  `all_barcodes` varchar(2000) DEFAULT NULL,
  `active` varchar(11) DEFAULT NULL,
  `recording_person_id` varchar(100) DEFAULT NULL,
  `recording_person_name` varchar(200) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unloading_plan`
--

INSERT INTO `unloading_plan` (`id`, `work_order_number`, `delivery_quantity`, `buyer`, `garments`, `ac_holder`, `fabrication`, `composition`, `weave`, `width`, `process_name`, `gd_number`, `pi_number`, `pp_number`, `color_or_design`, `order_qty`, `grade_a`, `grade_b`, `total_stock`, `number_of_roll`, `date_of_delivery`, `all_cubics`, `all_barcodes`, `active`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES
(1, '65130-100 ROJO/RED', 800, 'JOY AUTO GARMENTS LTD.', '', '', '', '98% COTTON & 2% SPANDEX', '3/1 S TWILL', '', '', 'VGS-23308/202', '', '23308A1', '', 0, 800, 0, 800, 3, '12/14/2021', 'A1,A2,A3', 'FASHION_65130_1, FASHION_65130_2, FASHION_65130_3', '0', 'hriday', 'Hriday', '2021-12-13 16:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `employee_name` varchar(100) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `confirm_password` varchar(50) DEFAULT NULL,
  `user_type` varchar(20) DEFAULT NULL,
  `user_access` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `profile_picture` varchar(130) DEFAULT NULL,
  `recording_person_id` varchar(30) DEFAULT NULL,
  `recording_person_name` varchar(50) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_name`, `employee_name`, `user_id`, `password`, `confirm_password`, `user_type`, `user_access`, `status`, `email`, `contact_no`, `department`, `designation`, `profile_picture`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES
(15, 'iftekhar', 'iftekhar', 'iftekhar', '12345', '12345', 'Admin', 'N/A', 'Active', 'abcd@gmail.com', '11111111', 'ICT', 'Application Developer', 'default.png', 'iftekhar', 'iftekhar', '2021-02-23 15:53:17'),
(26, 'Md. Jiash Hasnat', 'Md.Jiash Hasnat', '004143', 'covid19zz', 'covid19zz', 'Admin', 'N/A', 'Active', 'ftslab@znzfab.com', '01985982850', 'Lab & QC', 'Engineer', 'default.png', 'iftekhar', 'iftekhar', '2021-03-07 23:44:07'),
(27, 'Md. Saiful Islam', NULL, 'Saiful Lab', '4321', '4321', 'User', 'N/A', 'Active', 'md.saiful@znzfab.com', '01701212563', 'Marketing', 'Manager', 'default.png', 'qc', 'qc', '2020-12-01 09:55:55'),
(28, 'Md. Saiful Islam', NULL, 'Saiful Lab', '4321', '4321', 'User', 'N/A', 'Active', 'md.saiful@znzfab.com', '01701212563', 'ICT', 'Manager', 'default.png', 'qc', 'qc', '2020-12-01 09:58:41'),
(30, 'admin', 'Mr. Admin', 'admin', 'ie', 'ie', 'Super Admin', 'N/A', 'Active', 'qc@gmail.com', '100000000', '', 'Deputy Manager', 'default.png', 'admin', 'admin', '2021-11-02 10:43:40'),
(32, 'abc', 'Mr.QC', 'abc123', '12345', '12345', 'User', 'N/A', 'Active', 'abc@gmail.com', '11111111', 'ICT', 'Engineer', 'default.png', 'iftekhar', 'iftekhar', '2021-02-23 15:51:47'),
(34, 'dto', 'data entry operator', 'dto_1', '12345', '12345', 'User', 'proc_1', 'Active', 'dto@dto.com', '34543523232', 'ICT', 'Data Co-ordinator', 'default.png', 'iftekhar', 'iftekhar', '2021-03-07 23:43:56'),
(35, 'dto', 'data entry operator', 'dto_1', '12345', '12345', 'User', 'proc_1', 'Active', 'dto@dto.com', '34543523232', 'ICT', 'Data Co-ordinator', 'default.png', 'iftekhar', 'iftekhar', '2021-03-07 23:43:56'),
(36, 'Data Entry OP', 'Mr. Haris', '090', '1234', '1234', 'Sub_User', 'N/A', 'Active', 'jiash09@live.com', '0', 'Marketing', 'Assistant Officer', 'default.png', 'qc', 'qc', '2021-03-10 17:51:42'),
(37, 'test', 'test', '1234', '12345', '12345', 'User', 'proc_1', 'Active', 'test', '000020202', 'Marketing', 'Application Implementer', 'default.png', 'qc', 'qc', '2021-08-30 10:47:34'),
(38, 'aaa', 'aaa', '123', '12345', '12345', 'Admin', 'N/A', 'Active', 'aaa@gmail.com', '000020202', 'Marketing', 'Deputy Manager', 'default.png', 'qc', 'qc', '2021-08-30 10:48:09'),
(39, 'user', 'corrugation user', '111', '111', '111', 'User', 'proc_1', 'Active', 'abcd@gmail.com', '34543523232', 'Marketing', 'Assistant General Manager', 'default.png', 'qc', 'qc', '2021-09-04 11:20:16'),
(40, 'Faruk', 'Md Akash Islam', '300221', 'faruk', 'faruk', 'Admin', 'N/A', 'Active', 'farukeee1935@gmail.com', '01709994729', 'CARTON', 'Officer', 'default.png', 'admin', 'admin', '2021-09-19 12:20:19'),
(41, 'faruk', 'Md. Faruk Hossain', '8035', 'ie', 'ie', 'Admin', 'proc_5', 'Active', 'faruk@znzal.com', '01709994729', 'INDUSTRIAL ENGINEERING', 'Officer', 'default.png', 'admin', 'admin', '2021-11-02 10:40:33'),
(42, 'Corrugation', 'Ming Wei Corrugation', '300221', 'faruk', 'faruk', 'User', 'proc_1', 'Active', 'farukeee1935@gmail.com', '01709994729', 'CARTON', 'Data Co-ordinator', 'default.png', 'admin', 'admin', '2021-09-19 16:28:35'),
(43, 'Printing', 'Flexo Printing', '300221', 'faruk', 'faruk', 'User', 'proc_3', 'Active', 'farukeee1935@gmail.com', '01709994729', 'CARTON', 'Data Co-ordinator', 'default.png', 'admin', 'admin', '2021-09-19 16:30:48'),
(44, 'Auto Folder', 'Auto Gluing Machine', '300221', 'faruk', 'faruk', 'User', 'proc_8', 'Active', 'farukeee1935@gmail.com', '01709994729', 'CARTON', 'Data Co-ordinator', 'default.png', 'admin', 'admin', '2021-09-19 16:32:22'),
(45, 'Finishing ', 'Hriday', '300221', 'faruk', 'faruk', 'User', 'proc_9', 'Active', 'farukeee1935@gmail.com', '01709994729', 'CARTON', 'Data Co-ordinator', 'default.png', 'admin', 'admin', '2021-09-19 16:33:50'),
(46, 'Gluer', 'Auto Gluing Machine', '300221', 'faruk', 'faruk', 'User', 'proc_8', 'Active', '01709994729', '01709994729', 'CARTON', 'Data Co-ordinator', 'default.png', 'admin', 'admin', '2021-09-19 17:33:57'),
(47, 'test2', 'test2', '8042', '123456', '123456', 'User', 'proc_2', 'Active', '', '01894949949', 'INDUSTRIAL ENGINEERING', 'Senior Operator ', 'default.png', 'admin', 'admin', '2021-09-20 12:47:46'),
(48, 'Shahin', 'Md. Shahin Islam', '5989', 'zzal', 'zzal', 'User', 'proc_1', 'Active', '', '01764773781', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 12:51:07'),
(49, 'Rejaul', 'Md. Rejaul Islam', '5455', 'zzal', 'zzal', 'User', 'proc_1', 'Active', '', '01734419469', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 12:53:38'),
(52, 'rejaul', 'Md. Rejaul Islam', '305059', 'zzal', 'zzal', 'User', 'proc_8', 'Active', '', '01770896098', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 13:59:14'),
(53, 'sujon', 'Md.Sujon Islam', '302770', 'zzal', 'zzal', 'User', 'proc_8', 'Active', '', '01849439999', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:00:27'),
(54, 'akther', 'Md. Akther Islam', '306186', 'zzal', 'zzal', 'User', 'proc_2', 'Active', '', '01705687309', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:03:17'),
(55, 'hriday', 'Md. Hriday Islam', '305647', 'zzal', 'zzal', 'User', 'proc_9', 'Active', '', '01737608061', 'CARTON', 'Finishing Supervisor', 'default.png', 'admin', 'admin', '2021-09-20 14:05:40'),
(56, 'polash', 'Md. Polash Islam', '361', 'zzal', 'zzal', 'User', 'proc_4', 'Active', '', '01723907435', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:11:19'),
(57, 'subash', 'Sree Subash Ray', '297', 'zzal', 'zzal', 'User', 'proc_4', 'Active', '', '01815394217', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:14:51'),
(58, 'monarul', 'Md. Monaru Islaml', '304064', 'zzal', 'zzal', 'User', 'proc_6', 'Active', '', '01739451237', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:19:55'),
(59, 'kamal', 'Md. Kamal Islam', '302863', 'zzal', 'zzal', 'User', 'proc_6', 'Active', '', '01796815228', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:21:42'),
(60, 'golam', 'Md. Golam Hossain', '4205', 'zzal', 'zzal', 'User', 'proc_5', 'Active', '', '01741537943', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:28:59'),
(61, 'rabiul', 'Md. Rabiul Islam', '304387', 'zzal', 'zzal', 'User', 'proc_5', 'Active', '', '01924000294', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:32:16'),
(62, 'aslam', 'Md. Aslam Islam', '6065', 'zzal', 'zzal', 'User', 'proc_5', 'Active', '', '01745784227', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:34:36'),
(63, 'delivery', 'Md. Rajib Islam ', '12345', 'zzal', 'zzal', 'User', 'proc_10', 'Active', '', '01770794854', 'CARTON', 'Assistant Officer', 'default.png', 'admin', 'admin', '2021-09-20 14:37:57'),
(64, 'asinur', 'Md. Asinur Hossain', '3603', 'zzal', 'zzal', 'User', 'proc_11', 'Active', '', '01935278390', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:45:51'),
(65, 'hridaytest', 'Hriday Test', '3782', '123456', '123456', 'User', 'proc_5', 'Active', '', '01802892934', 'INDUSTRIAL ENGINEERING', 'System Administrator', 'default.png', 'admin', 'admin', '2021-09-20 16:36:45'),
(66, 'shahin', 'Md. Shahin Islam', '5989', 'zzal', 'zzal', 'User', 'proc_1', 'Active', '', '01764773781', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 16:42:34'),
(67, 'rejaulnc', 'Md. Rejaul Islam', '5455', 'zzal', 'zzal', 'User', 'proc_1', 'Active', '', '01734419469', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 16:50:18'),
(68, 'monir', 'Md. Monir Islam', '300817', 'zzal', 'zzal', 'User', 'proc_3', 'Active', '', '01735207342', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 17:09:04'),
(69, 'jakir', 'Md. Jakir Hosen', '301982', 'zzal', 'zzal', 'User', 'proc_3', 'Active', '', '01735207342', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 17:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `employee_name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact_no` varchar(25) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `user_type` varchar(20) DEFAULT NULL,
  `user_access` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `profile_picture` varchar(100) DEFAULT NULL,
  `recording_person_id` varchar(30) DEFAULT NULL,
  `recording_person_name` varchar(50) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_id`, `user_name`, `employee_name`, `first_name`, `last_name`, `middle_name`, `password`, `email`, `contact_no`, `department`, `designation`, `user_type`, `user_access`, `status`, `profile_picture`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES
(69, 'iftekhar', 'iftekhar', '', '', '', '', '12345', 'abcd@gmail.com', '11111111', 'ICT', 'Application Developer', 'Admin', 'N/A', 'Active', 'default.png', 'iftekhar', 'iftekhar', '2021-02-23 15:53:17'),
(84, 'admin', 'admin', 'Mr. Admin', '', '', '', 'ie', 'qc@gmail.com', '100000000', '', 'Deputy Manager', 'Super Admin', 'N/A', 'Active', 'default.png', 'admin', 'admin', '2021-11-02 10:43:40'),
(134, '361', 'polash', 'Md. Polash Islam', NULL, NULL, NULL, 'polash@', '', '01723907435', 'CARTON', 'Operator', 'User', 'proc_2', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:54:30'),
(135, '297', 'subash', 'Sree Subash Ray', NULL, NULL, NULL, 'subash@', '', '01815394217', 'CARTON', 'Operator', 'User', 'proc_2', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:56:23'),
(132, '301982', 'jakir', 'Md. Jakir Hosen', NULL, NULL, NULL, 'jakir@', '', '01733755360', 'CARTON', 'Operator', 'User', 'proc_2', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:49:23'),
(131, '300817', 'monir', 'Md. Monir Islam', NULL, NULL, NULL, 'monir@', '', '01735207342', 'CARTON', 'Operator', 'User', 'proc_2', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:46:28'),
(136, '4205', 'golam', 'Md. Golam Islam', NULL, NULL, NULL, 'golam@', '', '01741537943', 'CARTON', 'Operator', 'User', 'proc_3', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:58:34'),
(137, '3603', 'asinur', 'Md. Asinur Hossain', NULL, NULL, NULL, 'asinur@', '', '01935278390', 'CARTON', 'Operator', 'User', 'proc_3', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:00:10'),
(154, '304387', 'rabiul', 'Md. Rabiul Islam', NULL, NULL, NULL, 'rabiul@', '', '01924000294', 'CARTON', 'Junior Operator', 'User', 'proc_3', 'Active', 'default.png', 'admin', 'admin', '2021-10-07 10:44:03'),
(139, '6065', 'aslam', 'Md. Aslam Islam', NULL, NULL, NULL, 'aslam@', '', '01745784227', 'CARTON', 'Operator', 'User', 'proc_3', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:08:30'),
(140, '305059', 'rejaul', 'Md. Rejaul Islam', NULL, NULL, NULL, 'rejaul@', '', '01770896098', 'CARTON', 'Operator', 'User', 'proc_6', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:15:09'),
(141, '302770', 'sujon', 'Md.Sujon Islam', NULL, NULL, NULL, 'sujon@', '', '01849439999', 'CARTON', 'Operator', 'User', 'proc_6', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:16:46'),
(142, '304064', 'monarul', 'Md.Monarul Islam', NULL, NULL, NULL, 'monarul@', '', '01739451237', 'CARTON', 'Operator', 'User', 'proc_6', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:18:52'),
(143, '302863', 'kamal', 'Md.Kamal Islam', NULL, NULL, NULL, 'kamal@', '', '01796815228', 'CARTON', 'Operator', 'User', 'proc_6', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:20:24'),
(144, '306186', 'akther', 'Md. Akther Islam', NULL, NULL, NULL, 'akther@', '', '01705687309', 'CARTON', 'Operator', 'User', 'proc_4', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:23:40'),
(145, '2408', 'rakib', 'Md. Rakib Islam', NULL, NULL, NULL, 'rakib@', '', '01729709269', 'CARTON', 'Operator', 'User', 'proc_5', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:25:34'),
(149, '306020', 'rejowan', 'Md. Rejowan Islam', NULL, NULL, NULL, 'rejowan@', '', '01761830775', 'CARTON', 'Junior Operator', 'User', 'proc_1', 'Active', 'default.png', 'admin', 'admin', '2021-10-04 17:11:39'),
(148, '200035', 'mijan', 'Md. Mijanur Islam', NULL, NULL, NULL, 'mijanur@', '', '01913201003', 'CARTON', 'Officer', 'User', 'proc_1', 'Active', 'default.png', 'admin', 'admin', '2021-10-04 17:10:04'),
(129, '5989', 'shahin', 'Md. Shahin Islam', NULL, NULL, NULL, 'shahin@', '', '01764773781', 'CARTON', 'Operator', 'User', 'proc_1', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:22:36'),
(130, '5455', 'rejaulnc', 'Md. Rejaul Islam', NULL, NULL, NULL, 'rejaulnc@', '', '01734419469', 'CARTON', 'Operator', 'User', 'proc_1', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:37:52'),
(150, '3534', 'mahfuz', 'Mahfuz Alam Rajib', NULL, NULL, NULL, 'rajib1234', 'mahfuz@znzal.com', '01770794854', 'CARTON', 'Incharge', 'User', 'proc_7', 'Active', 'default.png', 'admin', 'admin', '2021-10-05 10:27:12'),
(151, '5467', 'monwar', 'Monwar Jahid', NULL, NULL, NULL, 'du081312023', 'jahid@znzal.com', '01701212548', 'Head Of Operation', 'General Manager', 'Super Admin', 'N/A', 'Active', 'default.png', 'admin', 'admin', '2021-10-05 18:13:51'),
(152, '9047', 'masum', 'Masum Billah', NULL, NULL, NULL, 'honey', 'masum@znzal.com', '01919424720', 'CARTON', 'Junior Officer', 'Restricted_User', 'N/A', 'Active', 'default.png', '9047', 'masum', '2021-11-08 13:56:09'),
(153, '8035', 'faruk', 'Md. Faruk Hossain', NULL, NULL, NULL, 'ie', 'faruk@znzal.com', '01709994729', 'INDUSTRIAL ENGINEERING', 'Officer', 'Admin', 'N/A', 'Active', 'default.png', 'admin', 'admin', '2021-11-02 10:40:33'),
(155, '8463', 'babor', 'Babor Molla', NULL, NULL, NULL, '125051', 'babor.molla@znzal.com', '01313009406', 'Planing', 'Assistant Manager', 'Admin', 'N/A', 'Active', 'default.png', 'admin', 'admin', '2021-11-08 12:26:56'),
(157, '200381', 'akram', 'Md Akram Islam', NULL, NULL, NULL, 'akram', '', '01614332079', 'INDUSTRIAL ENGINEERING', 'Assistant Officer', 'Sub_User', 'N/A', 'Active', 'default.png', 'admin', 'admin', '2021-11-02 10:43:17'),
(156, '8609', 'pavel', 'Md Sazedul Karim Pavel', NULL, NULL, NULL, 'pavel1234', 'sazedul.pavel@znzal.com', '01313009334', 'CARTON', 'Assistant Manager', 'Sub_User', 'N/A', 'Active', 'default.png', 'admin', 'admin', '2021-11-10 10:39:32'),
(158, '300302', 'kamal', 'Md Kamal Shekh', NULL, NULL, NULL, '300302', '', '01989693610', 'CARTON', 'Junior Operator', 'User', 'proc_5', 'Active', 'default.png', 'admin', 'admin', '2021-11-20 13:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `short_name` varchar(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `short_name`) VALUES
(1, 'Super Admin', 'super_admin'),
(2, 'Admin', 'admin'),
(3, 'Senior Officer LC & PI', 'senior_officer_lc_pi'),
(4, 'Senior Officer B2B', 'senior_officer_b2b'),
(5, 'Assistant Manager ', 'assistant_manager'),
(6, 'Assistant Manager Banking', 'assistant_manager_banking'),
(7, 'Officer', 'officer'),
(8, 'Assistant Officer BTMA', 'assistant_officer_btma'),
(9, 'Assistant Officer B2B', 'assistant_officer_b2b'),
(10, 'Manager', 'manager'),
(11, 'Sub User', 'sub_user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authorized_item_receiver_info`
--
ALTER TABLE `authorized_item_receiver_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cubic_number_position`
--
ALTER TABLE `cubic_number_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datewise_transaction_summary`
--
ALTER TABLE `datewise_transaction_summary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_info`
--
ALTER TABLE `item_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_issuing`
--
ALTER TABLE `item_issuing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_receiving`
--
ALTER TABLE `item_receiving`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `move_item`
--
ALTER TABLE `move_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packing_list`
--
ALTER TABLE `packing_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proxima_software_data`
--
ALTER TABLE `proxima_software_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roll_information_barcode`
--
ALTER TABLE `roll_information_barcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unloading_plan`
--
ALTER TABLE `unloading_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `authorized_item_receiver_info`
--
ALTER TABLE `authorized_item_receiver_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cubic_number_position`
--
ALTER TABLE `cubic_number_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=995;

--
-- AUTO_INCREMENT for table `datewise_transaction_summary`
--
ALTER TABLE `datewise_transaction_summary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_info`
--
ALTER TABLE `item_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item_issuing`
--
ALTER TABLE `item_issuing`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item_receiving`
--
ALTER TABLE `item_receiving`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `move_item`
--
ALTER TABLE `move_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packing_list`
--
ALTER TABLE `packing_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `proxima_software_data`
--
ALTER TABLE `proxima_software_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=515;

--
-- AUTO_INCREMENT for table `roll_information_barcode`
--
ALTER TABLE `roll_information_barcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `unloading_plan`
--
ALTER TABLE `unloading_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
