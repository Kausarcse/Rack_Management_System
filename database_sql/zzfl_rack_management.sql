/*
Navicat MySQL Data Transfer

Source Server         : conn
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : zzfl_rack_management

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-07-01 11:38:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `activity_log`
-- ----------------------------
DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE `activity_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
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
  `recording_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of activity_log
-- ----------------------------

-- ----------------------------
-- Table structure for `authorized_item_receiver_info`
-- ----------------------------
DROP TABLE IF EXISTS `authorized_item_receiver_info`;
CREATE TABLE `authorized_item_receiver_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `recording_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of authorized_item_receiver_info
-- ----------------------------
INSERT INTO `authorized_item_receiver_info` VALUES ('1', 'MD. SHOHAG', 'shohag', 'Noman Home Textile Mills Ltd.', 'KEOWA, SREEPUR, GAZIPUR', 'NHTML STORE', 'STORE', 'ASST. STORE KEEPER', '01856590775', 'shohag.saman@gmail.coim', 'Active', 'shohag', 'MD. SHOHAG', '2016-10-03 14:48:43');
INSERT INTO `authorized_item_receiver_info` VALUES ('2', 'MD. NASIR UDDIN', 'nasir', 'Noman Home Textile Mills Ltd.', 'KEOWA, SREEPUR, GAZIPUR', 'NHTML STORE', 'STORE', 'ASST. OFFICER', '01914826318', 'nasir01914@gmail.com', 'Active', 'nasir', 'MD. NASIR UDDIN', '2016-10-04 10:14:44');
INSERT INTO `authorized_item_receiver_info` VALUES ('3', 'MD. SOHAG ALI', '0135', 'select', 'KEOWA SREEPUR GAZIPUR', 'NHTML STORE', 'STORE', 'STORE KEEPER', '01737868586', 'sohagpb1990@gmail.com', 'Active', '0135', 'MD. SOHAG ALI', '2016-10-15 10:56:42');
INSERT INTO `authorized_item_receiver_info` VALUES ('4', 'MD. HIRON MIAH', '0050', 'Noman Home Textile Mills Ltd.', 'KEOWA SREEPUR GAZIPUR', 'NHTML STORE', 'STORE', 'ASST. STORE KEEPER', '01735845950', 'hironmahmud15@gmail.com', 'Active', '0050', 'MD. HIRON MIAH', '2016-10-15 10:59:58');
INSERT INTO `authorized_item_receiver_info` VALUES ('5', 'MD. ANOWAR HOSSAIN', '0029', 'Noman Home Textile Mills Ltd.', 'KEOWA SREEPUR GAZIPUR', 'NHTML STORE', 'STORE', 'ASST. OFFICER', '01734522245', '@ .', 'Active', '0029', 'MD. ANOWAR HOSSAIN', '2016-10-15 11:02:45');
INSERT INTO `authorized_item_receiver_info` VALUES ('6', 'MD. SOHAG ALI', '0135', 'Noman Home Textile Mills Ltd.', 'KEOWA SREEPUR GAZIPUR', 'NHTML STORE', 'STORE', 'STORE KEEPER', '01737868586', 'sohagpb1990@gmail.com', 'Active', '0135', 'MD. SOHAG ALI', '2016-10-15 11:05:11');
INSERT INTO `authorized_item_receiver_info` VALUES ('7', 'MD. PINTU KHAN', '208', 'Noman Home Textile Mills Ltd.', 'KEOWA,SREEPUR,GAZIPUR', 'NHTML STORE', 'STORE', 'ASST. OFFICER', '01734991294', 'pintukhan58@yahoo.com', 'Active', '208', 'MD. PINTU KHAN', '2020-06-18 10:24:43');
INSERT INTO `authorized_item_receiver_info` VALUES ('8', 'MD.ARIFUL ISLAM', '0152', 'Noman Home Textile Mills Ltd.', 'KEOWA,SREEPUR,GAZIPUR', 'NHTML STORE', 'STORE', 'STORE KEEPER', '01735-281657', 'arifulislam2286@gmail.com', 'Active', '0152', 'MD.ARIFUL ISLAM', '2020-06-25 08:43:43');

-- ----------------------------
-- Table structure for `datewise_transaction_summary`
-- ----------------------------
DROP TABLE IF EXISTS `datewise_transaction_summary`;
CREATE TABLE `datewise_transaction_summary` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_date` date NOT NULL,
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
  `total_issuing` double DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of datewise_transaction_summary
-- ----------------------------

-- ----------------------------
-- Table structure for `item_info`
-- ----------------------------
DROP TABLE IF EXISTS `item_info`;
CREATE TABLE `item_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `recording_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of item_info
-- ----------------------------

-- ----------------------------
-- Table structure for `item_receiving`
-- ----------------------------
DROP TABLE IF EXISTS `item_receiving`;
CREATE TABLE `item_receiving` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `barcode_code` varchar(100) NOT NULL,
  `receiving_location` varchar(100) DEFAULT NULL,
  `received_by` varchar(50) DEFAULT NULL,
  `date_of_receipt` date DEFAULT NULL,
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
  `row_number` int(11) DEFAULT NULL,
  `rack_number` int(11) DEFAULT NULL,
  `rack_hole_number` int(11) DEFAULT NULL,
  `bin_card_number` varchar(30) DEFAULT NULL,
  `quantiy` float DEFAULT NULL,
  `uom` varchar(20) DEFAULT NULL,
  `recording_person_id` varchar(30) DEFAULT NULL,
  `recording_person_name` varchar(50) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of item_receiving
-- ----------------------------

-- ----------------------------
-- Table structure for `proxima_software_data`
-- ----------------------------
DROP TABLE IF EXISTS `proxima_software_data`;
CREATE TABLE `proxima_software_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `recording_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=515 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of proxima_software_data
-- ----------------------------
INSERT INTO `proxima_software_data` VALUES ('413', 'SIGNET', '1-Lt.blue-Whtite Strip', 'ZZFL-H/21/10001', '100% COTTON POPLIN', '40X40/110X76', 'MARK MODE LTD.', 'REGULAR', '58.00', '2012-05-13', '1', 'Lt.blue-Whtite Strip', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:30');
INSERT INTO `proxima_software_data` VALUES ('414', 'SIGNET', 'NULL', 'ZZFL-H/21/10001', '100% COTTON POPLIN', '40X40/110X76', 'MARK MODE LTD.', 'REGULAR', '58.00', '2012-05-13', '1', 'Pink-White Stripe', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:30');
INSERT INTO `proxima_software_data` VALUES ('415', 'SIGNET', 'NULL', 'ZZFL-H/21/10001', '100% COTTON POPLIN', '40X40/110X76', 'MARK MODE LTD.', 'REGULAR', '58.00', '2012-05-13', '1', 'Pink-Why deep Stripe', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:30');
INSERT INTO `proxima_software_data` VALUES ('416', 'SIGNET', 'NULL', 'ZZFL-H/21/10001', '100% COTTON POPLIN', '40X40/110X76', 'MARK MODE LTD.', 'REGULAR', '58.00', '2012-05-13', '1', 'Pink-White YD Check', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:30');
INSERT INTO `proxima_software_data` VALUES ('417', 'CASUAL MALE', '19-COL-04 MARINE(19-3925)', 'ZZFL-H/21/10002', '100% COTTON TWILL', '20X16/128X60', 'Apparel Export Limited.', 'PEACH FINISH', '57.00', '2012-06-27', '1504', 'COL-04 MARINE(19-3925)', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:30');
INSERT INTO `proxima_software_data` VALUES ('418', 'CASUAL MALE', '16-COL-34 ROSE(14-1511)', 'ZZFL-H/21/10003', '100% COTTON TWILL', '20X16/128X60', 'Apparel Export Limited.', 'PEACH FINISH', '57.00', '2012-06-27', '1504', 'COL-34 ROSE(14-1511)', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:30');
INSERT INTO `proxima_software_data` VALUES ('419', 'CASUAL MALE', '18-COL-68 BEIGE(15-1215)', 'ZZFL-H/21/10003', '100% COTTON TWILL', '20X16/128X60', 'Apparel Export Limited.', 'PEACH FINISH', '57.00', '2012-06-27', '1504', 'COL-68 BEIGE(15-1215)', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('420', 'C&A', '23-BRIGHT WHITE(11-0601)', 'ZZFL-H/21/10003', '100% COTTON POPLIN', '40X40/133X100', 'Manta Apparels Ltd.', 'REGULAR', '58.00', '2012-06-27', '1507', 'BRIGHT WHITE(11-0601)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('421', 'C&A', '30-STRONG BLUE(18-4051)', 'ZZFL-H/21/10004', '100% COTTON POPLIN', '40X40/133X100', 'Manta Apparels Ltd.', 'REGULAR', '58.00', '2012-06-27', '1507', 'STRONG BLUE(18-4051)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('422', 'C&A', '25-BRIGHT WHITE(11-0601)', 'ZZFL-H/21/10004', '100% COTTON POPLIN', '40X40/133X100', 'Manta Apparels Ltd.', 'REGULAR', '58.00', '2012-06-27', '1507', 'BRIGHT WHITE(11-0601)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('423', 'C&A', '27-CERAMIC(16-5127)', 'ZZFL-H/21/10004', '100% COTTON POPLIN', '40X40/133X100', 'Manta Apparels Ltd.', 'REGULAR', '58.00', '2012-06-27', '1507', 'CERAMIC(16-5127)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('424', 'C&A', '12340-LAND', 'ZZFL-H/21/10005', '100% COTTON POPLIN', '40X40/133X100', 'Vision Apparels (Pvt) Ltd.', 'REGULAR', '58.00', '2012-06-28', '1511', 'LAND', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('425', 'Martytex Ltd.', '196-BLUE NAVY 5003', 'ZZFL-H/21/10005', '100% COTTON TWILL', '30X30/130X70', 'OLIRA FASHIONS LTD', 'REGULAR', '57.00', '2012-07-12', '1586', 'BLUE NAVY 5003', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('426', 'Martytex Ltd.', '194-KAKI 6006', 'ZZFL-H/21/10005', '100% COTTON TWILL', '30X30/130X70', 'OLIRA FASHIONS LTD', 'REGULAR', '57.00', '2012-07-12', '1586', 'KAKI 6006', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('427', 'Martytex Ltd.', '197-ARMANI 6015', 'ZZFL-H/21/10005', '100% COTTON TWILL', '30X30/130X70', 'OLIRA FASHIONS LTD', 'REGULAR', '57.00', '2012-07-12', '1586', 'ARMANI 6015', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('428', 'Martytex Ltd.', '195-FUMO 7006', 'ZZFL-H/21/10005', '100% COTTON TWILL', '30X30/130X70', 'OLIRA FASHIONS LTD', 'REGULAR', '57.00', '2012-07-12', '1586', 'FUMO 7006', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('429', 'C&A', '118-FROST GREY', 'ZZFL-H/21/10006', '100% COTTON TWILL', '30X30/130X70', 'KANIZ GARMENTS LTD.', 'PEACH FINISH', '58.00', '2012-08-01', '1531', 'FROST GREY', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('430', 'C&A', '115-CERAMIC', 'ZZFL-H/21/10006', '100% COTTON TWILL', '30X30/130X70', 'KANIZ GARMENTS LTD.', 'PEACH FINISH', '58.00', '2012-08-01', '1531', 'CERAMIC', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('431', 'H&M', '397-NEPTUNE PRINT STRIPE BLUE(75-104)', 'ZZFL-H/21/10006', '100% COTTON POPLIN', '40X40/133X100', 'Ananta Garments Ltd.', 'REGULAR', '58.00', '2012-08-02', '1715', 'NEPTUNE PRINT STRIPE BLUE(75-104)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('432', 'BIG W', '495-STONE', 'ZZFL-H/21/10007', '100% COTTON TWILL', '20X16/128X60', 'ARRIVAL FASHION LTD', 'PEACH FINISH', '57.00', '2012-08-08', '1761', 'STONE', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('433', 'BIG W', '494-CHARCOAL', 'ZZFL-H/21/10007', '100% COTTON TWILL', '20X16/128X60', 'ARRIVAL FASHION LTD', 'PEACH FINISH', '57.00', '2012-08-08', '1761', 'CHARCOAL', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('434', 'BIG W', '493-BLACK', 'ZZFL-H/21/10008', '100% COTTON TWILL', '20X16/128X60', 'ARRIVAL FASHION LTD', 'PEACH FINISH', '57.00', '2012-08-08', '1761', 'BLACK', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('435', 'PARKZONE LTD', '487-LIGHT GREY 21-4', 'ZZFL-H/21/10008', '100% COTTON TWILL', '40/2X12/120X68', 'PARK STAR APPARELS LTD.', 'REGULAR', '57.00', '2012-08-08', '1758', 'LIGHT GREY 21-4', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('436', 'C&A', '516-102, BLACK', 'ZZFL-H/21/10008', '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '58.00', '2012-08-09', '1773', '102, BLACK', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('437', 'C&A', '513-815,MAJOR BROWN(19-0810)', 'ZZFL-H/21/10009', '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '58.00', '2012-08-09', '1773', '815,MAJOR BROWN(19-0810)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('438', 'C&A', '517-888, CHALK', 'ZZFL-H/21/10009', '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '58.00', '2012-08-09', '1773', '888, CHALK', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('439', 'C&A', '514-197, WHITE', 'ZZFL-H/21/10009', '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '58.00', '2012-08-09', '1773', '197, WHITE', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('440', 'C&A', '518-653, MAZARINE BLUE (19-3864)', 'ZZFL-H/21/10009', '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '58.00', '2012-08-09', '1773', '653, MAZARINE BLUE (19-3864)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('441', 'VF ASIA LTD.', '589-DIRT', 'ZZFL-H/21/10009', '100% COTTON TWILL', '20X10/130X50', 'Medlar Apparels Ltd.', 'REGULAR', '58.00', '2012-08-24', '1834', 'DIRT', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('442', 'VF ASIA LTD.', '587-GRANITE', 'ZZFL-H/21/10009', '100% COTTON TWILL', '20X10/130X50', 'Medlar Apparels Ltd.', 'REGULAR', '58.00', '2012-08-24', '1834', 'GRANITE', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('443', 'H&M', '49585-Blue Stripe (75-104)', 'ZZFL-H/21/10009', '100% COTTON POPLIN', '40X40/133X100', 'Ananta Garments Ltd.', 'SOFT', '58.00', '2012-08-29', '1848', 'Blue Stripe (75-104)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('444', 'Patrick International', '52681-Strong Blue (18-4051 TCX)', 'ZZFL-H/21/10009', '100% COTTON TWILL', '20X16/128X60', 'Cambrige Garments Ltd.', 'REGULAR', '57.00', '2012-08-29', '1857', 'Strong Blue (18-4051 TCX)', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('445', 'C&A', '51726-CHECK', 'ZZFL-H/21/10009', '100% COTTON POPLIN', '40X40/133X100', 'JEANS 2000 LTD', 'REGULAR', '58.00', '2012-08-30', '1864', 'CHECK', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('446', 'H&M', '50261-BEIGE (13-105)', 'ZZFL-H/21/10009', '100% COTTON TWILL', '32X32/160X90', 'Russel Garments', 'PEACH FINISH', '57.00', '2012-08-30', '1865', 'BEIGE (13-105)', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('447', 'H&M', '51743-PFD', 'ZZFL-H/21/10009', '100% COTTON TWILL', '40X40/150X100', 'Ananta Garments Ltd.', 'PEACH FINISH', '58.00', '2012-08-31', '1870', 'PFD', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('448', 'SYKHAI', '663-RFD', 'ZZFL-H/21/10009', '100% COTTON TWILL', '30X20/140X70', 'ANIKA GARMENTS(PVT) LTD', 'LT. PEACH', '57.00', '2012-10-08', '2054', 'RFD', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('449', 'CASUAL MALE', '671-Black', 'ZZFL-H/21/10009', '100% COTTON TWILL', '20X16/128X60', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-08', '2057', 'Black', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('450', 'CASUAL MALE', '668-Khaki', 'ZZFL-H/21/10009', '100% COTTON TWILL', '20X16/128X60', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-08', '2057', 'Khaki', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('451', 'CASUAL MALE', '667-Stone', 'ZZFL-H/21/10009', '100% COTTON TWILL', '20X16/128X60', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-08', '2057', 'Stone', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('452', 'C&A', '674-927,PB TURQUOISE', 'ZZFL-H/21/100010', '100% COTTON TWILL', '40X40/150X100', 'Fashion Forum Ltd.', 'REGULAR', '57.00', '2012-10-09', '2064', '927,PB TURQUOISE', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('453', 'C&A', '679-938, FLURO ORANGE', 'ZZFL-H/21/100010', '100% COTTON TWILL', '40X40/150X100', 'Fashion Forum Ltd.', 'REGULAR', '57.00', '2012-10-09', '2064', '938, FLURO ORANGE', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('454', 'C&A', '675-938, FLURO ORANGE', 'ZZFL-H/21/100010', '100% COTTON TWILL', '40X40/150X100', 'Fashion Forum Ltd.', 'REGULAR', '57.00', '2012-10-09', '2064', '938, FLURO ORANGE', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('455', 'C&A', '680-952, FLURO GREEN AS SWATCH', 'ZZFL-H/21/100010', '100% COTTON TWILL', '40X40/150X100', 'Fashion Forum Ltd.', 'REGULAR', '57.00', '2012-10-09', '2064', '952, FLURO GREEN AS SWATCH', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('456', 'C&A', '676-952, FLURO GREEN AS SWATCH', 'ZZFL-H/21/100010', '100% COTTON TWILL', '40X40/150X100', 'Fashion Forum Ltd.', 'REGULAR', '57.00', '2012-10-09', '2064', '952, FLURO GREEN AS SWATCH', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:31');
INSERT INTO `proxima_software_data` VALUES ('457', 'KAPPAHL', '690-8341C KHAKI GREEN', 'ZZFL-H/21/100010', '100% COTTON POPLIN', '30X30/133X85', 'Sams Attire Ltd.', 'MICRO SAND PEACH', '57.00', '2012-10-12', '2093', '8341C KHAKI GREEN', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('458', 'Smart Jeans Ltd', '700-2364(18-1112 TCX)', 'ZZFL-H/21/100010', '100% COTTON POPLIN', '40X40/133X100', 'Smart Jeans Ltd.', 'REGULAR', '57.00', '2012-10-12', '2095', '2364(18-1112 TCX)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('459', 'H&M', '712-96-111', 'ZZFL-H/21/100010', '100% COTTON TWILL', '40X40/143X112', 'BANGA GARMENTS LTD.', 'REGULAR', '57.00', '2012-10-13', '2103', '96-111', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('460', 'Fashion Dormation', '713-300A BRIGHT BLUE', 'ZZFL-H/21/100010', '100% COTTON TWILL', '30X20/152X95', 'FARKAN TEX LTD.', 'LT. PEACH', '57.00', '2012-10-13', '2106', '300A BRIGHT BLUE', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('461', 'ASMARA', '731-RFD', 'ZZFL-H/21/100010', '100% COTTON TWILL', '32X32/140X80', 'Babylon Casualwear Ltd.', 'LT. PEACH', '57.00', '2012-10-15', '2127', 'RFD', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('462', 'ASMARA', '732-GREEN CAMO', 'ZZFL-H/21/100010', '100% COTTON TWILL', '32X32/140X80', 'Babylon Casualwear Ltd.', 'LT. PEACH', '57.00', '2012-10-15', '2128', 'GREEN CAMO', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('463', 'ASMARA', '740-BLACK', 'ZZFL-H/21/100010', '100% COTTON CANVAS', '20X16/80X60', 'Babylon Casualwear Ltd.', 'LT. PEACH', '57.00', '2012-10-15', '2130', 'BLACK', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('464', 'MATALAN', '724-WHITE', 'ZZFL-H/21/100010', '100% COTTON TWILL', '30X30/130X70', 'Bakul Apparels Ltd.', 'REGULAR', '58.00', '2012-10-15', '2125', 'WHITE', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('465', 'VF ASIA LTD.', '753-BURNT HENNA', 'ZZFL-H/21/100011', '100% COTTON CAVALRY TWILL', '20X10/130x50', 'Medlar Apparels Ltd.', 'REGULAR', '57.00', '2012-10-15', '2140', 'BURNT HENNA', '3/3 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('466', 'VF ASIA LTD.', '752-DIRT', 'ZZFL-H/21/100011', '100% COTTON CAVALRY TWILL', '20X10/130x50', 'Medlar Apparels Ltd.', 'REGULAR', '57.00', '2012-10-15', '2140', 'DIRT', '3/3 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('467', 'Styletex', '741-RFD', null, '100% COTTON POPLIN', '40X40/133X100', 'Optimo Jeans Ltd.', 'PEACH FINISH', '58.00', '2012-10-15', '2132', 'RFD', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('468', 'HEMA', '728-Daphne', null, '100% COTTON POPLIN', '40X40/133X100', 'SAAD SAAN APPARELS LTD.', 'PAPER TOUCH', '58.00', '2012-10-15', '2126', 'Daphne', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('469', 'HEMA', '729-Khaki', null, '100% COTTON POPLIN', '40X40/133X100', 'SAAD SAAN APPARELS LTD.', 'PAPER TOUCH', '58.00', '2012-10-15', '2126', 'Khaki', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('470', 'HEMA', '726-Red', null, '100% COTTON POPLIN', '40X40/133X100', 'SAAD SAAN APPARELS LTD.', 'PAPER TOUCH', '58.00', '2012-10-15', '2126', 'Red', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('471', 'HEMA', '730-Blue Curacao', null, '100% COTTON POPLIN', '40X40/133X100', 'SAAD SAAN APPARELS LTD.', 'PAPER TOUCH', '58.00', '2012-10-15', '2126', 'Blue Curacao', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('472', 'HEMA', '727-Bright White', null, '100% COTTON POPLIN', '40X40/133X100', 'SAAD SAAN APPARELS LTD.', 'PAPER TOUCH', '58.00', '2012-10-15', '2126', 'Bright White', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('473', 'VF ASIA LTD.', '770-Bungi Camo', null, '100% COTTON TWILL', '20X16/128X60', 'Arunima Sports Wear Ltd.', 'PEACH FINISH', '58.00', '2012-10-16', '2150', 'Bungi Camo', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('474', 'VF ASIA LTD.', '771-Bungi Camo', null, '100% COTTON TWILL', '20X16/128X60', 'Arunima Sports Wear Ltd.', 'PEACH FINISH', '58.00', '2012-10-16', '2151', 'Bungi Camo', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('475', 'C&A', '765-PRINT-01-BEETROOT PURPLE', null, '100% ORGANIC COTTON CANVAS', '30X30/132X85', 'S.F DENIM APPARELS LTD.', 'REGULAR', '57.00', '2012-10-16', '2145', 'PRINT-01-BEETROOT PURPLE', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('476', 'C&A', '764-PRINT-02-LIMELIGHT (AMERICAN ORANGE)', null, '100% ORGANIC COTTON CANVAS', '30X30/132X85', 'S.F DENIM APPARELS LTD.', 'REGULAR', '57.00', '2012-10-16', '2145', 'PRINT-02-LIMELIGHT (AMERICAN ORANGE)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('477', 'C&A', '763-LIMELIGHT 12-0740 TCX', null, '100% COTTON POPLIN', '40X40/133X100', 'S.F DENIM APPARELS LTD.', 'REGULAR', '57.00', '2012-10-16', '2144', 'LIMELIGHT 12-0740 TCX', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('478', 'C&A', '762-BLUE ATOLL 16-4535 TCX', null, '100% COTTON POPLIN', '40X40/133X100', 'S.F DENIM APPARELS LTD.', 'REGULAR', '57.00', '2012-10-16', '2144', 'BLUE ATOLL 16-4535 TCX', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('479', 'C&A', '761-REAL BLACK', null, '100% COTTON POPLIN', '40X40/133X100', 'S.F DENIM APPARELS LTD.', 'REGULAR', '57.00', '2012-10-16', '2144', 'REAL BLACK', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('480', 'VF ASIA LTD.', '780-4AB- ATLANTIC BLUE', null, '100% COTTON DOBBY', '32X12/128X76', 'Refat Garments Ltd.', 'PEACH FINISH', '57.00', '2012-10-17', '2157', '4AB- ATLANTIC BLUE', 'DOBBY', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('481', 'VF ASIA LTD.', '783-LODEN (3LD)', null, '100% COTTON DOBBY', '32X12/128X76', 'Refat Garments Ltd.', 'PEACH FINISH', '57.00', '2012-10-17', '2157', 'LODEN (3LD)', 'DOBBY', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('482', 'VF ASIA LTD.', '797-Nautica Stone (13S)', null, '100% COTTON TWILL', '16X12/108X56', 'MBM GARMENTS LTD.', 'PEACH FINISH', '58.00', '2012-10-18', '2167', 'Nautica Stone (13S)', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('483', 'VISAGE', '813-PFD/RFD', null, '100% COTTON TWILL', '20X30/126X80', 'AKM Knit Wear Ltd.', 'PEACH FINISH', '58.00', '2012-10-19', '2170', 'PFD/RFD', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('484', 'H&M', '814-BEIGE (13-105)', null, '100% COTTON TWILL', '32X32/160X90', 'Glory Industries Ltd.', 'PEACH FINISH', '57.00', '2012-10-19', '2173', 'BEIGE (13-105)', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('485', 'H&M', '820-76-223(Blue Dark)', null, '100% ORGANIC COTTON TWILL', '32X32/160X90', 'CHITTAGONG ASIAN APPARELS LTD.', 'PEACH FINISH', '57.00', '2012-10-20', '2175', '76-223(Blue Dark)', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('486', 'H&M', '823-07-206(Grey)', null, '100% ORGANIC COTTON TWILL', '32X32/160X90', 'CHITTAGONG ASIAN APPARELS LTD.', 'PEACH FINISH', '57.00', '2012-10-20', '2175', '07-206(Grey)', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('487', 'H&M', '821-88-209(Turquoise Greenish)', null, '100% ORGANIC COTTON TWILL', '32X32/160X90', 'CHITTAGONG ASIAN APPARELS LTD.', 'PEACH FINISH', '57.00', '2012-10-20', '2175', '88-209(Turquoise Greenish)', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('488', 'H&M', '826-Blu redish dk 76-205', null, '100% COTTON TWILL', '40X40/150X100', 'Glory Industries Ltd.', 'PEACH FINISH', '57.00', '2012-10-20', '2176', 'Blu redish dk 76-205', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('489', 'OBG', '846-WHITE- WH1001', null, '100% COTTON TWILL', '20X16/128X60', 'GOLDEN HEIGHTS LTD.', 'PEACH FINISH', '-1.00', '2012-10-21', '2194', 'WHITE- WH1001', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('490', 'ESSENZA', '836-Fango 298', null, '100% COTTON TWILL', '30X30/155X90', 'Megastar Apparels ltd', 'LT. PEACH', '57.00', '2012-10-21', '2188', 'Fango 298', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('491', 'ESSENZA', '839-Blu 713', null, '100% COTTON TWILL', '30X30/155X90', 'Megastar Apparels ltd', 'LT. PEACH', '57.00', '2012-10-21', '2188', 'Blu 713', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('492', 'ESSENZA', '837-Beige 222', null, '100% COTTON TWILL', '30X30/155X90', 'Megastar Apparels ltd', 'LT. PEACH', '57.00', '2012-10-21', '2188', 'Beige 222', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('493', 'ESSENZA', '840-Oceano', null, '100% COTTON TWILL', '30X30/155X90', 'Megastar Apparels ltd', 'LT. PEACH', '57.00', '2012-10-21', '2188', 'Oceano', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('494', 'ESSENZA', '838-Grogio 809', null, '100% COTTON TWILL', '30X30/155X90', 'Megastar Apparels ltd', 'LT. PEACH', '57.00', '2012-10-21', '2188', 'Grogio 809', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('495', 'Carters B Tags', '843-WHITE/ WH0001', null, '100% COTTON POPLIN', '32X32/140X70', 'Smart Jeans Ltd.', 'PEACH FINISH', '57.00', '2012-10-21', '2192', 'WHITE/ WH0001', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('496', 'CRL', '833-GOLDEN BROWN', null, '100% COTTON DOBBY', '30X14/152X80', 'Step two apparels Ltd', 'REGULAR', '58.00', '2012-10-21', '2187', 'GOLDEN BROWN', 'DOBBY', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('497', 'CRL', '835-NAVY', null, '100% COTTON DOBBY', '30X14/152X80', 'Step two apparels Ltd', 'REGULAR', '58.00', '2012-10-21', '2187', 'NAVY', 'DOBBY', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('498', 'CRL', '834-LIGHT GREY', null, '100% COTTON DOBBY', '30X14/152X80', 'Step two apparels Ltd', 'REGULAR', '58.00', '2012-10-21', '2187', 'LIGHT GREY', 'DOBBY', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('499', 'TESCO(UK)', '832-Medieval (19 3933)', null, '100% COTTON CANVAS', '20X20/100X50', 'Utah Fashions Ltd.', 'PEACH FINISH', '58.00', '2012-10-21', '2185', 'Medieval (19 3933)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('500', 'CASUAL MALE', '857-AHR', null, '100% COTTON CANVAS', '30X30/133X85', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-22', '2198', 'AHR', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('501', 'CASUAL MALE', '858-GUM', null, '100% COTTON CANVAS', '30X30/133X85', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-22', '2198', 'GUM', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:32');
INSERT INTO `proxima_software_data` VALUES ('502', 'CASUAL MALE', '854-ERN', null, '100% COTTON TWILL', '20X16/128X60', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-22', '2197', 'ERN', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33');
INSERT INTO `proxima_software_data` VALUES ('503', 'CASUAL MALE', '856-NAVY', null, '100% COTTON TWILL', '20X16/128X60', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-22', '2197', 'NAVY', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33');
INSERT INTO `proxima_software_data` VALUES ('504', 'CASUAL MALE', '855-ONB', null, '100% COTTON TWILL', '20X16/128X60', 'DIANA GARMENTS PVT LTD', 'LT. PEACH', '57.00', '2012-10-22', '2197', 'ONB', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33');
INSERT INTO `proxima_software_data` VALUES ('505', 'C&A', '861-BLUE ATTOL(P16-4535 TCX)', null, '100% COTTON POPLIN', '40X40/133X100', 'Fashion Forum Ltd.', 'REGULAR', '58.00', '2012-10-22', '2201', 'BLUE ATTOL(P16-4535 TCX)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:33');
INSERT INTO `proxima_software_data` VALUES ('506', 'C&A', '863-FUCHSIA PURPLE(P18-2436 TCX)', null, '100% COTTON POPLIN', '40X40/133X100', 'Fashion Forum Ltd.', 'REGULAR', '58.00', '2012-10-22', '2201', 'FUCHSIA PURPLE(P18-2436 TCX)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:33');
INSERT INTO `proxima_software_data` VALUES ('507', 'C&A', '860-FUCHISA PINK(15-2718)', null, '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '57.00', '2012-10-22', '2200', 'FUCHISA PINK(15-2718)', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:33');
INSERT INTO `proxima_software_data` VALUES ('508', 'C&A', '859-GREY FLOWER PRINT', null, '100% COTTON POPLIN', '40X40/133X100', 'Pioneer Apparels Ltd.', 'REGULAR', '58.00', '2012-10-22', '2199', 'GREY FLOWER PRINT', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:33');
INSERT INTO `proxima_software_data` VALUES ('509', 'H&M', '874-12-335 (Beig Light)', null, '100% COTTON TWILL', '40X40/150X100', 'Ananta Garments Ltd.', 'PEACH FINISH', '58.00', '2012-10-23', '2226', '12-335 (Beig Light)', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33');
INSERT INTO `proxima_software_data` VALUES ('510', 'H&M', '875-PFD', null, '100% COTTON TWILL', '40X40/150X100', 'Ananta Garments Ltd.', 'PEACH FINISH', '58.00', '2012-10-23', '2227', 'PFD', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33');
INSERT INTO `proxima_software_data` VALUES ('511', 'H&M', '879-97-305', null, '100% COTTON TWILL', '40X40/150X100', 'HONG KONG DENIM (PVT.) LTD.', 'PEACH FINISH', '57.00', '2012-10-23', '2228', '97-305', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33');
INSERT INTO `proxima_software_data` VALUES ('512', 'H&M', '877-30-102', null, '100% COTTON TWILL', '40X40/150X100', 'HONG KONG DENIM (PVT.) LTD.', 'PEACH FINISH', '57.00', '2012-10-23', '2228', '30-102', '2/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33');
INSERT INTO `proxima_software_data` VALUES ('513', 'ORBITAL', '868-as per swatch', null, '100% COTTON TWILL', '30X20/130X70', 'Miswar Hosiery Mills (Pvt) Ltd.', 'REGULAR', '58.00', '2012-10-23', '2219', 'as per swatch', '3/1 S TWILL', 'hriday', 'Hriday', '2021-06-08 14:58:33');
INSERT INTO `proxima_software_data` VALUES ('514', 'ORBITAL', '870-Beige', null, '100% COTTON CANVAS', '30X20/124X58', 'Miswar Hosiery Mills (Pvt) Ltd.', 'REGULAR', '58.00', '2012-10-23', '2220', 'Beige', '1/1 PLAIN', 'hriday', 'Hriday', '2021-06-08 14:58:33');

-- ----------------------------
-- Table structure for `roll_information_barcode`
-- ----------------------------
DROP TABLE IF EXISTS `roll_information_barcode`;
CREATE TABLE `roll_information_barcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `pallet_no` varchar(100) NOT NULL DEFAULT '',
  `recording_person_id` varchar(100) NOT NULL,
  `recording_person_name` varchar(100) NOT NULL,
  `recording_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of roll_information_barcode
-- ----------------------------
