/*
Navicat MySQL Data Transfer

Source Server         : Conn
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : zzfl_rack_management

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-01-06 16:44:43
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of activity_log
-- ----------------------------
INSERT INTO `activity_log` VALUES ('1', 'FASHION_63918_1', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56.00', 'PEACH FINISH', 'receiving', '1', 'insert into `item_receiving` ( `barcode_code`,`receiving_location`,`received_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`, `buyer`,`shade`,`construction`,`composition`,`weave`,`length`,`kgs`,`pallet_no`,`finished_width`,`finished_type`,`type`,`grade`,`ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `active`, `recording_person_id`, `recording_person_name`,`recording_time` ) values (\'FASHION_63918_1\',\'ZZFL Febric Warehouse\',\'Hriday Ahmed\',\'2022-01-06\',\'1\',\'22815B1\',\'63918-F392 WHEAT\',\'RD-22815/202\',\'LA-MUNI APPARELS LTD.\', \'RD INTERNATIONAL\',\'F392 WHEAT\',\'16X16+70D/112X59\',\'98% COTTON 2% SPANDEX TWILL\',\'3/1 S TWILL\',\'120\',\'45\',\'112233\',\'56.00\',\'PEACH FINISH\',\'Bulk\',\'A\',\'Mohammad Taki Uddin\', \'747.98\', \'20.00\', \'2.20\', \'Solid Dyed\', \'22815B\',\'54.00\',\'35MWO15SL\',\'1\',\'A\',\'A1\',\'1\',\'1\',\'1\', \'1\',\'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:18');
INSERT INTO `activity_log` VALUES ('2', 'FASHION_63918_1', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56.00', 'PEACH FINISH', 'receiving', '1', 'INSERT INTO datewise_transaction_summary (`transaction_date`, `work_order_number`, `gd_number`, `customer_name`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `total_receiving`) VALUES ( \'2022-01-06\', \'63918-F392 WHEAT\', \'RD-22815/202\', \'LA-MUNI APPARELS LTD.\', \'16X16+70D/112X59\', \'98% COTTON 2% SPANDEX TWILL\', \'3/1 S TWILL\', \'F392 WHEAT\', \'56.00\', \'PEACH FINISH\', \'120\')', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:18');
INSERT INTO `activity_log` VALUES ('3', 'FASHION_63918_1', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56.00', 'PEACH FINISH', 'receiving', '1', 'insert into `item_info` ( `customer_name`,`buyer`,`gd_number`,`work_order_number`,`shade`,`construction`,`composition`,`weave`,`finished_width`,`finished_type`,`on_hand_stock`, `uom`,`total_roll`, `ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`, `recording_person_id`,`recording_person_name`,`recording_time` ) values (\'LA-MUNI APPARELS LTD.\', \'RD INTERNATIONAL\',\'RD-22815/202\', \'63918-F392 WHEAT\', \'F392 WHEAT\',\'16X16+70D/112X59\',\'98% COTTON 2% SPANDEX TWILL\',\'3/1 S TWILL\',\'56.00\',\'PEACH FINISH\', \'120\', \'yds\', \'1\', \'Mohammad Taki Uddin\', \'747.98\', \'20.00\', \'2.20\', \'Solid Dyed\', \'22815B\',\'54.00\',\'35MWO15SL\', \'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:18');
INSERT INTO `activity_log` VALUES ('4', 'FASHION_63918_2', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56.00', 'PEACH FINISH', 'receiving', '2', 'insert into `item_receiving` ( `barcode_code`,`receiving_location`,`received_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`, `buyer`,`shade`,`construction`,`composition`,`weave`,`length`,`kgs`,`pallet_no`,`finished_width`,`finished_type`,`type`,`grade`,`ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `active`, `recording_person_id`, `recording_person_name`,`recording_time` ) values (\'FASHION_63918_2\',\'ZZFL Febric Warehouse\',\'Hriday Ahmed\',\'2022-01-06\',\'2\',\'22815B1\',\'63918-F392 WHEAT\',\'RD-22815/202\',\'LA-MUNI APPARELS LTD.\', \'RD INTERNATIONAL\',\'F392 WHEAT\',\'16X16+70D/112X59\',\'98% COTTON 2% SPANDEX TWILL\',\'3/1 S TWILL\',\'240\',\'55\',\'112233\',\'56.00\',\'PEACH FINISH\',\'Bulk\',\'A\',\'Mohammad Taki Uddin\', \'747.98\', \'20.00\', \'2.20\', \'Solid Dyed\', \'22815B\',\'54.00\',\'35MWO15SL\',\'1\',\'A\',\'A1\',\'1\',\'1\',\'1\', \'1\',\'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:23');
INSERT INTO `activity_log` VALUES ('5', 'FASHION_63918_2', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56.00', 'PEACH FINISH', 'receiving', '1', 'UPDATE datewise_transaction_summary SET `total_receiving` = (`total_receiving` + 240) WHERE `transaction_date` = \'2022-01-06\' AND `work_order_number` = \'63918-F392 WHEAT\' AND `gd_number` = \'RD-22815/202\' AND `customer_name` = \'LA-MUNI APPARELS LTD.\' AND `construction` = \'16X16+70D/112X59\' AND `composition` = \'98% COTTON 2% SPANDEX TWILL\' AND `weave` = \'3/1 S TWILL\' AND `shade` = \'F392 WHEAT\' AND `finished_width` = \'56.00\' AND `finished_type` = \'PEACH FINISH\' ', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:23');
INSERT INTO `activity_log` VALUES ('6', 'FASHION_63918_2', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56.00', 'PEACH FINISH', 'receiving', '1', 'UPDATE `item_info` SET `on_hand_stock` = \'360\', `total_roll` = \'2\'\n									WHERE `shade` = \'F392 WHEAT\'\n									  AND `construction` = \'16X16+70D/112X59\'\n									  AND `customer_name` = \'LA-MUNI APPARELS LTD.\'\n									  AND `gd_number` = \'RD-22815/202\'\n									  AND `work_order_number` = \'63918-F392 WHEAT\'\n									  AND `composition` = \'98% COTTON 2% SPANDEX TWILL\'\n									  AND `weave` = \'3/1 S TWILL\'\n									  AND `finished_width` = \'56.00\'\n									  AND `finished_type` = \'PEACH FINISH\'', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:23');
INSERT INTO `activity_log` VALUES ('7', 'FASHION_63757_4', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '22HU GREEN CAMO', '56.00', 'PEACH FINISH', 'receiving', '3', 'insert into `item_receiving` ( `barcode_code`,`receiving_location`,`received_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`, `buyer`,`shade`,`construction`,`composition`,`weave`,`length`,`kgs`,`pallet_no`,`finished_width`,`finished_type`,`type`,`grade`,`ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `active`, `recording_person_id`, `recording_person_name`,`recording_time` ) values (\'FASHION_63757_4\',\'ZZFL Febric Warehouse\',\'Hriday Ahmed\',\'2022-01-06\',\'4\',\'22931A1\',\'63757-22HU GREEN CAMO\',\'RD-22931/2021\',\'LA-MUNI APPARELS LTD.\', \'RD INTERNATIONAL\',\'22HU GREEN CAMO\',\'16X16+70D/112X59\',\'98% COTTON 2% SPANDEX TWILL\',\'3/1 S TWILL\',\'300\',\'40\',\'112233\',\'56.00\',\'PEACH FINISH\',\'Bulk\',\'A\',\'Mohammad Taki Uddin\', \'3929.18\', \'8.00\', \'2.35\', \'PIGMENT PRINT ON SOLID DYED\', \'22931A\',\'54.00\',\'35MW0065,35MW0115, 35MW0115, 35MW011BO, 35MW011N\',\'1\',\'A\',\'A1\',\'1\',\'1\',\'1\', \'1\',\'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:31');
INSERT INTO `activity_log` VALUES ('8', 'FASHION_63757_4', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '22HU GREEN CAMO', '56.00', 'PEACH FINISH', 'receiving', '2', 'INSERT INTO datewise_transaction_summary (`transaction_date`, `work_order_number`, `gd_number`, `customer_name`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `total_receiving`) VALUES ( \'2022-01-06\', \'63757-22HU GREEN CAMO\', \'RD-22931/2021\', \'LA-MUNI APPARELS LTD.\', \'16X16+70D/112X59\', \'98% COTTON 2% SPANDEX TWILL\', \'3/1 S TWILL\', \'22HU GREEN CAMO\', \'56.00\', \'PEACH FINISH\', \'300\')', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:31');
INSERT INTO `activity_log` VALUES ('9', 'FASHION_63757_4', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '22HU GREEN CAMO', '56.00', 'PEACH FINISH', 'receiving', '2', 'insert into `item_info` ( `customer_name`,`buyer`,`gd_number`,`work_order_number`,`shade`,`construction`,`composition`,`weave`,`finished_width`,`finished_type`,`on_hand_stock`, `uom`,`total_roll`, `ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`, `recording_person_id`,`recording_person_name`,`recording_time` ) values (\'LA-MUNI APPARELS LTD.\', \'RD INTERNATIONAL\',\'RD-22931/2021\', \'63757-22HU GREEN CAMO\', \'22HU GREEN CAMO\',\'16X16+70D/112X59\',\'98% COTTON 2% SPANDEX TWILL\',\'3/1 S TWILL\',\'56.00\',\'PEACH FINISH\', \'300\', \'yds\', \'1\', \'Mohammad Taki Uddin\', \'3929.18\', \'8.00\', \'2.35\', \'PIGMENT PRINT ON SOLID DYED\', \'22931A\',\'54.00\',\'35MW0065,35MW0115, 35MW0115, 35MW011BO, 35MW011N\', \'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:31');
INSERT INTO `activity_log` VALUES ('10', 'FASHION_64987_6', '30X20+70D/120X70', '98% COTTON 2% SPANDEX', '2/1 S TWILL', 'BLACK', '56.00', 'PEACH FINISH', 'receiving', '4', 'insert into `item_receiving` ( `barcode_code`,`receiving_location`,`received_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`, `buyer`,`shade`,`construction`,`composition`,`weave`,`length`,`kgs`,`pallet_no`,`finished_width`,`finished_type`,`type`,`grade`,`ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `active`, `recording_person_id`, `recording_person_name`,`recording_time` ) values (\'FASHION_64987_6\',\'ZZFL Febric Warehouse\',\'Hriday Ahmed\',\'2022-01-06\',\'6\',\'23228A1\',\'64987-BLACK\',\'VRG S.A-23228/2021\',\'Noman Fashion Fabrics Ltd.\', \'VRG S.A\',\'BLACK\',\'30X20+70D/120X70\',\'98% COTTON 2% SPANDEX\',\'2/1 S TWILL\',\'320\',\'44\',\'112233\',\'56.00\',\'PEACH FINISH\',\'Bulk\',\'A\',\'Mashruk Al Tanvir Khan\', \'2723.08\', \'15.00\', \'2.80\', \'Solid Dyed\', \'23228A\',\'54.00\',\'XW2629\',\'1\',\'A\',\'A1\',\'1\',\'1\',\'1\', \'1\',\'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:36');
INSERT INTO `activity_log` VALUES ('11', 'FASHION_64987_6', '30X20+70D/120X70', '98% COTTON 2% SPANDEX', '2/1 S TWILL', 'BLACK', '56.00', 'PEACH FINISH', 'receiving', '3', 'INSERT INTO datewise_transaction_summary (`transaction_date`, `work_order_number`, `gd_number`, `customer_name`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `total_receiving`) VALUES ( \'2022-01-06\', \'64987-BLACK\', \'VRG S.A-23228/2021\', \'Noman Fashion Fabrics Ltd.\', \'30X20+70D/120X70\', \'98% COTTON 2% SPANDEX\', \'2/1 S TWILL\', \'BLACK\', \'56.00\', \'PEACH FINISH\', \'320\')', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:36');
INSERT INTO `activity_log` VALUES ('12', 'FASHION_64987_6', '30X20+70D/120X70', '98% COTTON 2% SPANDEX', '2/1 S TWILL', 'BLACK', '56.00', 'PEACH FINISH', 'receiving', '3', 'insert into `item_info` ( `customer_name`,`buyer`,`gd_number`,`work_order_number`,`shade`,`construction`,`composition`,`weave`,`finished_width`,`finished_type`,`on_hand_stock`, `uom`,`total_roll`, `ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`, `recording_person_id`,`recording_person_name`,`recording_time` ) values (\'Noman Fashion Fabrics Ltd.\', \'VRG S.A\',\'VRG S.A-23228/2021\', \'64987-BLACK\', \'BLACK\',\'30X20+70D/120X70\',\'98% COTTON 2% SPANDEX\',\'2/1 S TWILL\',\'56.00\',\'PEACH FINISH\', \'320\', \'yds\', \'1\', \'Mashruk Al Tanvir Khan\', \'2723.08\', \'15.00\', \'2.80\', \'Solid Dyed\', \'23228A\',\'54.00\',\'XW2629\', \'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:36');
INSERT INTO `activity_log` VALUES ('13', 'FASHION_63918_3', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56.00', 'PEACH FINISH', 'receiving', '5', 'insert into `item_receiving` ( `barcode_code`,`receiving_location`,`received_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`, `buyer`,`shade`,`construction`,`composition`,`weave`,`length`,`kgs`,`pallet_no`,`finished_width`,`finished_type`,`type`,`grade`,`ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `active`, `recording_person_id`, `recording_person_name`,`recording_time` ) values (\'FASHION_63918_3\',\'ZZFL Febric Warehouse\',\'Hriday Ahmed\',\'2022-01-06\',\'3\',\'22815B1\',\'63918-F392 WHEAT\',\'RD-22815/202\',\'LA-MUNI APPARELS LTD.\', \'RD INTERNATIONAL\',\'F392 WHEAT\',\'16X16+70D/112X59\',\'98% COTTON 2% SPANDEX TWILL\',\'3/1 S TWILL\',\'320\',\'57\',\'112233\',\'56.00\',\'PEACH FINISH\',\'Bulk\',\'B\',\'Mohammad Taki Uddin\', \'747.98\', \'20.00\', \'2.20\', \'Solid Dyed\', \'22815B\',\'54.00\',\'35MWO15SL\',\'2\',\'A\',\'A2\',\'1\',\'1\',\'1\', \'1\',\'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:42');
INSERT INTO `activity_log` VALUES ('14', 'FASHION_63918_3', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56.00', 'PEACH FINISH', 'receiving', '1', 'UPDATE datewise_transaction_summary SET `total_receiving` = (`total_receiving` + 320) WHERE `transaction_date` = \'2022-01-06\' AND `work_order_number` = \'63918-F392 WHEAT\' AND `gd_number` = \'RD-22815/202\' AND `customer_name` = \'LA-MUNI APPARELS LTD.\' AND `construction` = \'16X16+70D/112X59\' AND `composition` = \'98% COTTON 2% SPANDEX TWILL\' AND `weave` = \'3/1 S TWILL\' AND `shade` = \'F392 WHEAT\' AND `finished_width` = \'56.00\' AND `finished_type` = \'PEACH FINISH\' ', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:42');
INSERT INTO `activity_log` VALUES ('15', 'FASHION_63918_3', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56.00', 'PEACH FINISH', 'receiving', '1', 'UPDATE `item_info` SET `on_hand_stock` = \'680\', `total_roll` = \'3\'\n									WHERE `shade` = \'F392 WHEAT\'\n									  AND `construction` = \'16X16+70D/112X59\'\n									  AND `customer_name` = \'LA-MUNI APPARELS LTD.\'\n									  AND `gd_number` = \'RD-22815/202\'\n									  AND `work_order_number` = \'63918-F392 WHEAT\'\n									  AND `composition` = \'98% COTTON 2% SPANDEX TWILL\'\n									  AND `weave` = \'3/1 S TWILL\'\n									  AND `finished_width` = \'56.00\'\n									  AND `finished_type` = \'PEACH FINISH\'', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:42');
INSERT INTO `activity_log` VALUES ('16', 'FASHION_64987_7', '30X20+70D/120X70', '98% COTTON 2% SPANDEX', '2/1 S TWILL', 'BLACK', '56.00', 'PEACH FINISH', 'receiving', '6', 'insert into `item_receiving` ( `barcode_code`,`receiving_location`,`received_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`, `buyer`,`shade`,`construction`,`composition`,`weave`,`length`,`kgs`,`pallet_no`,`finished_width`,`finished_type`,`type`,`grade`,`ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `active`, `recording_person_id`, `recording_person_name`,`recording_time` ) values (\'FASHION_64987_7\',\'ZZFL Febric Warehouse\',\'Hriday Ahmed\',\'2022-01-06\',\'7\',\'23228A1\',\'64987-BLACK\',\'VRG S.A-23228/2021\',\'Noman Fashion Fabrics Ltd.\', \'VRG S.A\',\'BLACK\',\'30X20+70D/120X70\',\'98% COTTON 2% SPANDEX\',\'2/1 S TWILL\',\'310\',\'48\',\'112233\',\'56.00\',\'PEACH FINISH\',\'Bulk\',\'B\',\'Mashruk Al Tanvir Khan\', \'2723.08\', \'15.00\', \'2.80\', \'Solid Dyed\', \'23228A\',\'54.00\',\'XW2629\',\'2\',\'A\',\'A2\',\'1\',\'1\',\'1\', \'1\',\'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:47');
INSERT INTO `activity_log` VALUES ('17', 'FASHION_64987_7', '30X20+70D/120X70', '98% COTTON 2% SPANDEX', '2/1 S TWILL', 'BLACK', '56.00', 'PEACH FINISH', 'receiving', '3', 'UPDATE datewise_transaction_summary SET `total_receiving` = (`total_receiving` + 310) WHERE `transaction_date` = \'2022-01-06\' AND `work_order_number` = \'64987-BLACK\' AND `gd_number` = \'VRG S.A-23228/2021\' AND `customer_name` = \'Noman Fashion Fabrics Ltd.\' AND `construction` = \'30X20+70D/120X70\' AND `composition` = \'98% COTTON 2% SPANDEX\' AND `weave` = \'2/1 S TWILL\' AND `shade` = \'BLACK\' AND `finished_width` = \'56.00\' AND `finished_type` = \'PEACH FINISH\' ', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:47');
INSERT INTO `activity_log` VALUES ('18', 'FASHION_64987_7', '30X20+70D/120X70', '98% COTTON 2% SPANDEX', '2/1 S TWILL', 'BLACK', '56.00', 'PEACH FINISH', 'receiving', '3', 'UPDATE `item_info` SET `on_hand_stock` = \'630\', `total_roll` = \'2\'\n									WHERE `shade` = \'BLACK\'\n									  AND `construction` = \'30X20+70D/120X70\'\n									  AND `customer_name` = \'Noman Fashion Fabrics Ltd.\'\n									  AND `gd_number` = \'VRG S.A-23228/2021\'\n									  AND `work_order_number` = \'64987-BLACK\'\n									  AND `composition` = \'98% COTTON 2% SPANDEX\'\n									  AND `weave` = \'2/1 S TWILL\'\n									  AND `finished_width` = \'56.00\'\n									  AND `finished_type` = \'PEACH FINISH\'', 'success', 'hriday', 'Hriday', '2022-01-06 14:39:47');
INSERT INTO `activity_log` VALUES ('19', 'FASHION_63918_1', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56', 'PEACH FINISH', 'issuing', '1', 'INSERT INTO `item_issuing` ( `barcode_code`,`receiving_location`,`issued_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`,`shade`,`construction`,`composition`,`weave`,`length`,`kgs`,`pallet_no`,`finished_width`,`finished_type`,`type`,`grade`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`, `recording_person_id`,`recording_person_name`,`recording_time` ) VALUES (\'FASHION_63918_1\',\'zzfl_wearhouse\',\'Hriday\',\'2022-01-06\',\'1\',\'22815B1\',\'63918-F392 WHEAT\',\'RD-22815/202\',\'LA-MUNI APPARELS LTD.\',\'F392 WHEAT\',\'16X16+70D/112X59\',\'98% COTTON 2% SPANDEX TWILL\',\'3/1 S TWILL\',\'120\',\'45\',\'112233\',\'56\',\'PEACH FINISH\',\'Bulk\',\'A\',\'1\',\'A\',\'A1\',\'1\',\'1\',\'1\', \'Mohammad Taki Uddin\', \'747.98\', \'20.00\', \'2.20\', \'Solid Dyed\', \'22815B\',\'54.00\',\'35MWO15SL\', \'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2022-01-06 14:42:43');
INSERT INTO `activity_log` VALUES ('20', 'FASHION_63918_1', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56', 'PEACH FINISH', 'issuing', '4', 'INSERT INTO datewise_transaction_summary (`transaction_date`, `work_order_number`, `gd_number`, `customer_name`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `total_receiving`,`total_issuing`) VALUES ( \'2022-01-08\', \'63918-F392 WHEAT\', \'RD-22815/202\', \'LA-MUNI APPARELS LTD.\', \'16X16+70D/112X59\', \'98% COTTON 2% SPANDEX TWILL\', \'3/1 S TWILL\', \'F392 WHEAT\', \'56\', \'PEACH FINISH\',0,\'120\')', 'success', 'hriday', 'Hriday', '2022-01-06 14:42:43');
INSERT INTO `activity_log` VALUES ('21', 'FASHION_63918_2', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56', 'PEACH FINISH', 'issuing', '2', 'INSERT INTO `item_issuing` ( `barcode_code`,`receiving_location`,`issued_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`,`shade`,`construction`,`composition`,`weave`,`length`,`kgs`,`pallet_no`,`finished_width`,`finished_type`,`type`,`grade`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`, `recording_person_id`,`recording_person_name`,`recording_time` ) VALUES (\'FASHION_63918_2\',\'zzfl_wearhouse\',\'Hriday\',\'2022-01-06\',\'2\',\'22815B1\',\'63918-F392 WHEAT\',\'RD-22815/202\',\'LA-MUNI APPARELS LTD.\',\'F392 WHEAT\',\'16X16+70D/112X59\',\'98% COTTON 2% SPANDEX TWILL\',\'3/1 S TWILL\',\'240\',\'55\',\'112233\',\'56\',\'PEACH FINISH\',\'Bulk\',\'A\',\'1\',\'A\',\'A1\',\'1\',\'1\',\'1\', \'Mohammad Taki Uddin\', \'747.98\', \'20.00\', \'2.20\', \'Solid Dyed\', \'22815B\',\'54.00\',\'35MWO15SL\', \'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2022-01-06 14:42:43');
INSERT INTO `activity_log` VALUES ('22', 'FASHION_63918_2', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56', 'PEACH FINISH', 'issuing', '4', 'UPDATE datewise_transaction_summary SET `total_issuing` = (`total_issuing` + 240) WHERE `transaction_date` = \'2022-01-08\' AND `work_order_number` = \'63918-F392 WHEAT\' AND `gd_number` = \'RD-22815/202\' AND `customer_name` = \'LA-MUNI APPARELS LTD.\' AND `construction` = \'16X16+70D/112X59\' AND `composition` = \'98% COTTON 2% SPANDEX TWILL\' AND `weave` = \'3/1 S TWILL\' AND `shade` = \'F392 WHEAT\' AND `finished_type` = \'PEACH FINISH\' ', 'success', 'hriday', 'Hriday', '2022-01-06 14:42:43');
INSERT INTO `activity_log` VALUES ('23', 'FASHION_63918_3', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56', 'PEACH FINISH', 'issuing', '3', 'INSERT INTO `item_issuing` ( `barcode_code`,`receiving_location`,`issued_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`,`shade`,`construction`,`composition`,`weave`,`length`,`kgs`,`pallet_no`,`finished_width`,`finished_type`,`type`,`grade`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`, `recording_person_id`,`recording_person_name`,`recording_time` ) VALUES (\'FASHION_63918_3\',\'zzfl_wearhouse\',\'Hriday\',\'2022-01-06\',\'3\',\'22815B1\',\'63918-F392 WHEAT\',\'RD-22815/202\',\'LA-MUNI APPARELS LTD.\',\'F392 WHEAT\',\'16X16+70D/112X59\',\'98% COTTON 2% SPANDEX TWILL\',\'3/1 S TWILL\',\'320\',\'57\',\'112233\',\'56\',\'PEACH FINISH\',\'Bulk\',\'B\',\'2\',\'A\',\'A2\',\'1\',\'1\',\'1\', \'Mohammad Taki Uddin\', \'747.98\', \'20.00\', \'2.20\', \'Solid Dyed\', \'22815B\',\'54.00\',\'35MWO15SL\', \'hriday\',\'Hriday\',NOW())', 'success', 'hriday', 'Hriday', '2022-01-06 14:42:43');
INSERT INTO `activity_log` VALUES ('24', 'FASHION_63918_3', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56', 'PEACH FINISH', 'issuing', '4', 'UPDATE datewise_transaction_summary SET `total_issuing` = (`total_issuing` + 320) WHERE `transaction_date` = \'2022-01-08\' AND `work_order_number` = \'63918-F392 WHEAT\' AND `gd_number` = \'RD-22815/202\' AND `customer_name` = \'LA-MUNI APPARELS LTD.\' AND `construction` = \'16X16+70D/112X59\' AND `composition` = \'98% COTTON 2% SPANDEX TWILL\' AND `weave` = \'3/1 S TWILL\' AND `shade` = \'F392 WHEAT\' AND `finished_type` = \'PEACH FINISH\' ', 'success', 'hriday', 'Hriday', '2022-01-06 14:42:43');

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

-- ----------------------------
-- Table structure for `cubic_number_position`
-- ----------------------------
DROP TABLE IF EXISTS `cubic_number_position`;
CREATE TABLE `cubic_number_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rack_number` varchar(20) NOT NULL,
  `row_number` varchar(50) NOT NULL,
  `cubic_number` varchar(50) NOT NULL,
  `recording_person_id` varchar(50) NOT NULL,
  `recording_person_name` varchar(50) NOT NULL,
  `recording_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=995 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cubic_number_position
-- ----------------------------
INSERT INTO `cubic_number_position` VALUES ('479', 'A', '1', 'A1', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('480', 'A', '2', 'A2', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('481', 'A', '3', 'A3', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('482', 'A', '4', 'A4', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('483', 'A', '5', 'A5', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('484', 'A', '6', 'A6', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('485', 'A', '7', 'A7', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('486', 'A', '8', 'A8', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('487', 'A', '9', 'A9', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('488', 'A', '10', 'A10', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('489', 'A', '11', 'A11', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('490', 'A', '12', 'A12', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('491', 'A', '13', 'A13', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('492', 'A', '14', 'A14', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('493', 'A', '15', 'A15', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('494', 'A', '16', 'A16', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('495', 'A', '17', 'A17', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('496', 'A', '18', 'A18', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('497', 'A', '19', 'A19', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('498', 'A', '20', 'A20', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('499', 'A', '21', 'A21', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('500', 'A', '22', 'A22', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('501', 'A', '23', 'A23', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('502', 'A', '24', 'A24', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('503', 'A', '25', 'A25', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('504', 'A', '26', 'A26', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('505', 'A', '27', 'A27', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('506', 'A', '28', 'A28', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('507', 'A', '29', 'A29', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('508', 'A', '30', 'A30', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('509', 'A', '31', 'A31', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('510', 'A', '32', 'A32', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('511', 'A', '33', 'A33', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('512', 'A', '34', 'A34', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('513', 'A', '35', 'A35', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('514', 'A', '36', 'A36', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('515', 'A', '37', 'A37', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('516', 'A', '38', 'A38', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('517', 'A', '39', 'A39', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('518', 'A', '40', 'A40', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('519', 'A', '41', 'A41', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('520', 'A', '42', 'A42', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('521', 'A', '43', 'A43', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('522', 'A', '44', 'A44', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('523', 'A', '45', 'A45', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('524', 'A', '46', 'A46', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('525', 'A', '47', 'A47', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('526', 'A', '48', 'A48', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('527', 'A', '49', 'A49', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('528', 'A', '50', 'A50', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('529', 'A', '51', 'A51', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('530', 'A', '52', 'A52', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('531', 'A', '53', 'A53', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('532', 'A', '54', 'A54', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('533', 'A', '55', 'A55', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('534', 'A', '56', 'A56', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('535', 'A', '57', 'A57', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('536', 'A', '58', 'A58', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('537', 'A', '59', 'A59', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('538', 'A', '60', 'A60', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('539', 'A', '61', 'A61', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('540', 'A', '62', 'A62', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('541', 'A', '63', 'A63', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('542', 'A', '64', 'A64', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('543', 'A', '65', 'A65', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('544', 'A', '66', 'A66', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('545', 'A', '67', 'A67', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('546', 'A', '68', 'A68', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('547', 'A', '69', 'A69', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('548', 'A', '70', 'A70', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('549', 'A', '71', 'A71', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('550', 'A', '72', 'A72', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('551', 'A', '73', 'A73', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('552', 'A', '74', 'A74', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('553', 'A', '75', 'A75', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('554', 'A', '76', 'A76', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('555', 'A', '77', 'A77', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('556', 'A', '78', 'A78', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('557', 'A', '79', 'A79', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('558', 'A', '80', 'A80', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('559', 'A', '81', 'A81', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('560', 'A', '82', 'A82', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('561', 'A', '83', 'A83', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('562', 'A', '84', 'A84', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('563', 'A', '85', 'A85', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('564', 'A', '86', 'A86', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('565', 'A', '87', 'A87', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('566', 'A', '88', 'A88', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('567', 'A', '89', 'A89', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('568', 'A', '90', 'A90', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('569', 'A', '91', 'A91', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('570', 'A', '92', 'A92', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('571', 'A', '93', 'A93', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('572', 'A', '94', 'A94', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('573', 'A', '95', 'A95', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('574', 'A', '96', 'A96', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('575', 'A', '97', 'A97', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('576', 'A', '98', 'A98', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('577', 'A', '99', 'A99', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('578', 'A', '100', 'A100', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('579', 'A', '101', 'A101', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('580', 'A', '102', 'A102', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('581', 'A', '103', 'A103', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('582', 'A', '104', 'A104', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('583', 'A', '105', 'A105', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('584', 'A', '106', 'A106', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('585', 'A', '107', 'A107', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('586', 'A', '108', 'A108', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('587', 'A', '109', 'A109', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('588', 'A', '110', 'A110', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('589', 'A', '111', 'A111', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('590', 'A', '112', 'A112', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('591', 'A', '113', 'A113', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('592', 'A', '114', 'A114', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('593', 'A', '115', 'A115', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('594', 'A', '116', 'A116', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('595', 'A', '117', 'A117', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('596', 'A', '118', 'A118', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('597', 'A', '119', 'A119', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('598', 'A', '120', 'A120', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('599', 'A', '121', 'A121', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('600', 'A', '122', 'A122', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('601', 'A', '123', 'A123', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('602', 'A', '124', 'A124', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('603', 'A', '125', 'A125', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('604', 'A', '126', 'A126', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('605', 'A', '127', 'A127', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('606', 'A', '128', 'A128', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('607', 'A', '129', 'A129', 'hriday', 'Hriday', '2021-10-25 12:04:18');
INSERT INTO `cubic_number_position` VALUES ('608', 'B', '1', 'B1', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('609', 'B', '2', 'B2', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('610', 'B', '3', 'B3', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('611', 'B', '4', 'B4', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('612', 'B', '5', 'B5', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('613', 'B', '6', 'B6', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('614', 'B', '7', 'B7', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('615', 'B', '8', 'B8', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('616', 'B', '9', 'B9', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('617', 'B', '10', 'B10', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('618', 'B', '11', 'B11', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('619', 'B', '12', 'B12', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('620', 'B', '13', 'B13', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('621', 'B', '14', 'B14', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('622', 'B', '15', 'B15', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('623', 'B', '16', 'B16', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('624', 'B', '17', 'B17', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('625', 'B', '18', 'B18', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('626', 'B', '19', 'B19', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('627', 'B', '20', 'B20', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('628', 'B', '21', 'B21', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('629', 'B', '22', 'B22', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('630', 'B', '23', 'B23', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('631', 'B', '24', 'B24', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('632', 'B', '25', 'B25', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('633', 'B', '26', 'B26', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('634', 'B', '27', 'B27', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('635', 'B', '28', 'B28', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('636', 'B', '29', 'B29', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('637', 'B', '30', 'B30', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('638', 'B', '31', 'B31', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('639', 'B', '32', 'B32', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('640', 'B', '33', 'B33', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('641', 'B', '34', 'B34', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('642', 'B', '35', 'B35', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('643', 'B', '36', 'B36', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('644', 'B', '37', 'B37', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('645', 'B', '38', 'B38', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('646', 'B', '39', 'B39', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('647', 'B', '40', 'B40', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('648', 'B', '41', 'B41', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('649', 'B', '42', 'B42', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('650', 'B', '43', 'B43', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('651', 'B', '44', 'B44', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('652', 'B', '45', 'B45', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('653', 'B', '46', 'B46', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('654', 'B', '47', 'B47', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('655', 'B', '48', 'B48', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('656', 'B', '49', 'B49', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('657', 'B', '50', 'B50', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('658', 'B', '51', 'B51', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('659', 'B', '52', 'B52', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('660', 'B', '53', 'B53', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('661', 'B', '54', 'B54', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('662', 'B', '55', 'B55', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('663', 'B', '56', 'B56', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('664', 'B', '57', 'B57', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('665', 'B', '58', 'B58', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('666', 'B', '59', 'B59', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('667', 'B', '60', 'B60', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('668', 'B', '61', 'B61', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('669', 'B', '62', 'B62', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('670', 'B', '63', 'B63', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('671', 'B', '64', 'B64', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('672', 'B', '65', 'B65', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('673', 'B', '66', 'B66', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('674', 'B', '67', 'B67', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('675', 'B', '68', 'B68', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('676', 'B', '69', 'B69', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('677', 'B', '70', 'B70', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('678', 'B', '71', 'B71', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('679', 'B', '72', 'B72', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('680', 'B', '73', 'B73', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('681', 'B', '74', 'B74', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('682', 'B', '75', 'B75', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('683', 'B', '76', 'B76', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('684', 'B', '77', 'B77', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('685', 'B', '78', 'B78', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('686', 'B', '79', 'B79', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('687', 'B', '80', 'B80', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('688', 'B', '81', 'B81', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('689', 'B', '82', 'B82', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('690', 'B', '83', 'B83', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('691', 'B', '84', 'B84', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('692', 'B', '85', 'B85', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('693', 'B', '86', 'B86', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('694', 'B', '87', 'B87', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('695', 'B', '88', 'B88', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('696', 'B', '89', 'B89', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('697', 'B', '90', 'B90', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('698', 'B', '91', 'B91', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('699', 'B', '92', 'B92', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('700', 'B', '93', 'B93', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('701', 'B', '94', 'B94', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('702', 'B', '95', 'B95', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('703', 'B', '96', 'B96', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('704', 'B', '97', 'B97', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('705', 'B', '98', 'B98', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('706', 'B', '99', 'B99', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('707', 'B', '100', 'B100', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('708', 'B', '101', 'B101', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('709', 'B', '102', 'B102', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('710', 'B', '103', 'B103', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('711', 'B', '104', 'B104', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('712', 'B', '105', 'B105', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('713', 'B', '106', 'B106', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('714', 'B', '107', 'B107', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('715', 'B', '108', 'B108', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('716', 'B', '109', 'B109', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('717', 'B', '110', 'B110', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('718', 'B', '111', 'B111', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('719', 'B', '112', 'B112', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('720', 'B', '113', 'B113', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('721', 'B', '114', 'B114', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('722', 'B', '115', 'B115', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('723', 'B', '116', 'B116', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('724', 'B', '117', 'B117', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('725', 'B', '118', 'B118', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('726', 'B', '119', 'B119', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('727', 'B', '120', 'B120', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('728', 'B', '121', 'B121', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('729', 'B', '122', 'B122', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('730', 'B', '123', 'B123', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('731', 'B', '124', 'B124', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('732', 'B', '125', 'B125', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('733', 'B', '126', 'B126', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('734', 'B', '127', 'B127', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('735', 'B', '128', 'B128', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('736', 'B', '129', 'B129', 'hriday', 'Hriday', '2021-10-25 12:05:22');
INSERT INTO `cubic_number_position` VALUES ('737', 'C', '1', 'C1', 'hriday', 'Hriday', '2021-10-25 12:06:32');
INSERT INTO `cubic_number_position` VALUES ('738', 'C', '2', 'C2', 'hriday', 'Hriday', '2021-10-25 12:06:32');
INSERT INTO `cubic_number_position` VALUES ('739', 'C', '3', 'C3', 'hriday', 'Hriday', '2021-10-25 12:06:32');
INSERT INTO `cubic_number_position` VALUES ('740', 'C', '4', 'C4', 'hriday', 'Hriday', '2021-10-25 12:06:32');
INSERT INTO `cubic_number_position` VALUES ('741', 'C', '5', 'C5', 'hriday', 'Hriday', '2021-10-25 12:06:32');
INSERT INTO `cubic_number_position` VALUES ('742', 'C', '6', 'C6', 'hriday', 'Hriday', '2021-10-25 12:06:32');
INSERT INTO `cubic_number_position` VALUES ('743', 'C', '7', 'C7', 'hriday', 'Hriday', '2021-10-25 12:06:32');
INSERT INTO `cubic_number_position` VALUES ('744', 'C', '8', 'C8', 'hriday', 'Hriday', '2021-10-25 12:06:32');
INSERT INTO `cubic_number_position` VALUES ('745', 'C', '9', 'C9', 'hriday', 'Hriday', '2021-10-25 12:06:32');
INSERT INTO `cubic_number_position` VALUES ('746', 'C', '10', 'C10', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('747', 'C', '11', 'C11', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('748', 'C', '12', 'C12', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('749', 'C', '13', 'C13', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('750', 'C', '14', 'C14', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('751', 'C', '15', 'C15', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('752', 'C', '16', 'C16', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('753', 'C', '17', 'C17', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('754', 'C', '18', 'C18', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('755', 'C', '19', 'C19', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('756', 'C', '20', 'C20', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('757', 'C', '21', 'C21', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('758', 'C', '22', 'C22', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('759', 'C', '23', 'C23', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('760', 'C', '24', 'C24', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('761', 'C', '25', 'C25', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('762', 'C', '26', 'C26', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('763', 'C', '27', 'C27', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('764', 'C', '28', 'C28', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('765', 'C', '29', 'C29', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('766', 'C', '30', 'C30', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('767', 'C', '31', 'C31', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('768', 'C', '32', 'C32', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('769', 'C', '33', 'C33', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('770', 'C', '34', 'C34', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('771', 'C', '35', 'C35', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('772', 'C', '36', 'C36', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('773', 'C', '37', 'C37', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('774', 'C', '38', 'C38', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('775', 'C', '39', 'C39', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('776', 'C', '40', 'C40', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('777', 'C', '41', 'C41', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('778', 'C', '42', 'C42', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('779', 'C', '43', 'C43', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('780', 'C', '44', 'C44', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('781', 'C', '45', 'C45', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('782', 'C', '46', 'C46', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('783', 'C', '47', 'C47', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('784', 'C', '48', 'C48', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('785', 'C', '49', 'C49', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('786', 'C', '50', 'C50', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('787', 'C', '51', 'C51', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('788', 'C', '52', 'C52', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('789', 'C', '53', 'C53', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('790', 'C', '54', 'C54', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('791', 'C', '55', 'C55', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('792', 'C', '56', 'C56', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('793', 'C', '57', 'C57', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('794', 'C', '58', 'C58', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('795', 'C', '59', 'C59', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('796', 'C', '60', 'C60', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('797', 'C', '61', 'C61', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('798', 'C', '62', 'C62', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('799', 'C', '63', 'C63', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('800', 'C', '64', 'C64', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('801', 'C', '65', 'C65', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('802', 'C', '66', 'C66', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('803', 'C', '67', 'C67', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('804', 'C', '68', 'C68', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('805', 'C', '69', 'C69', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('806', 'C', '70', 'C70', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('807', 'C', '71', 'C71', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('808', 'C', '72', 'C72', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('809', 'C', '73', 'C73', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('810', 'C', '74', 'C74', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('811', 'C', '75', 'C75', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('812', 'C', '76', 'C76', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('813', 'C', '77', 'C77', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('814', 'C', '78', 'C78', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('815', 'C', '79', 'C79', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('816', 'C', '80', 'C80', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('817', 'C', '81', 'C81', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('818', 'C', '82', 'C82', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('819', 'C', '83', 'C83', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('820', 'C', '84', 'C84', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('821', 'C', '85', 'C85', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('822', 'C', '86', 'C86', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('823', 'C', '87', 'C87', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('824', 'C', '88', 'C88', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('825', 'C', '89', 'C89', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('826', 'C', '90', 'C90', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('827', 'C', '91', 'C91', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('828', 'C', '92', 'C92', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('829', 'C', '93', 'C93', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('830', 'C', '94', 'C94', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('831', 'C', '95', 'C95', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('832', 'C', '96', 'C96', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('833', 'C', '97', 'C97', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('834', 'C', '98', 'C98', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('835', 'C', '99', 'C99', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('836', 'C', '100', 'C100', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('837', 'C', '101', 'C101', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('838', 'C', '102', 'C102', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('839', 'C', '103', 'C103', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('840', 'C', '104', 'C104', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('841', 'C', '105', 'C105', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('842', 'C', '106', 'C106', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('843', 'C', '107', 'C107', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('844', 'C', '108', 'C108', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('845', 'C', '109', 'C109', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('846', 'C', '110', 'C110', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('847', 'C', '111', 'C111', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('848', 'C', '112', 'C112', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('849', 'C', '113', 'C113', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('850', 'C', '114', 'C114', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('851', 'C', '115', 'C115', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('852', 'C', '116', 'C116', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('853', 'C', '117', 'C117', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('854', 'C', '118', 'C118', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('855', 'C', '119', 'C119', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('856', 'C', '120', 'C120', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('857', 'C', '121', 'C121', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('858', 'C', '122', 'C122', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('859', 'C', '123', 'C123', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('860', 'C', '124', 'C124', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('861', 'C', '125', 'C125', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('862', 'C', '126', 'C126', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('863', 'C', '127', 'C127', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('864', 'C', '128', 'C128', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('865', 'C', '129', 'C129', 'hriday', 'Hriday', '2021-10-25 12:06:33');
INSERT INTO `cubic_number_position` VALUES ('866', 'D', '1', 'D1', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('867', 'D', '2', 'D2', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('868', 'D', '3', 'D3', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('869', 'D', '4', 'D4', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('870', 'D', '5', 'D5', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('871', 'D', '6', 'D6', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('872', 'D', '7', 'D7', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('873', 'D', '8', 'D8', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('874', 'D', '9', 'D9', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('875', 'D', '10', 'D10', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('876', 'D', '11', 'D11', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('877', 'D', '12', 'D12', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('878', 'D', '13', 'D13', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('879', 'D', '14', 'D14', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('880', 'D', '15', 'D15', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('881', 'D', '16', 'D16', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('882', 'D', '17', 'D17', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('883', 'D', '18', 'D18', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('884', 'D', '19', 'D19', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('885', 'D', '20', 'D20', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('886', 'D', '21', 'D21', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('887', 'D', '22', 'D22', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('888', 'D', '23', 'D23', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('889', 'D', '24', 'D24', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('890', 'D', '25', 'D25', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('891', 'D', '26', 'D26', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('892', 'D', '27', 'D27', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('893', 'D', '28', 'D28', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('894', 'D', '29', 'D29', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('895', 'D', '30', 'D30', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('896', 'D', '31', 'D31', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('897', 'D', '32', 'D32', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('898', 'D', '33', 'D33', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('899', 'D', '34', 'D34', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('900', 'D', '35', 'D35', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('901', 'D', '36', 'D36', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('902', 'D', '37', 'D37', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('903', 'D', '38', 'D38', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('904', 'D', '39', 'D39', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('905', 'D', '40', 'D40', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('906', 'D', '41', 'D41', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('907', 'D', '42', 'D42', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('908', 'D', '43', 'D43', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('909', 'D', '44', 'D44', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('910', 'D', '45', 'D45', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('911', 'D', '46', 'D46', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('912', 'D', '47', 'D47', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('913', 'D', '48', 'D48', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('914', 'D', '49', 'D49', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('915', 'D', '50', 'D50', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('916', 'D', '51', 'D51', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('917', 'D', '52', 'D52', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('918', 'D', '53', 'D53', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('919', 'D', '54', 'D54', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('920', 'D', '55', 'D55', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('921', 'D', '56', 'D56', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('922', 'D', '57', 'D57', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('923', 'D', '58', 'D58', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('924', 'D', '59', 'D59', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('925', 'D', '60', 'D60', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('926', 'D', '61', 'D61', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('927', 'D', '62', 'D62', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('928', 'D', '63', 'D63', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('929', 'D', '64', 'D64', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('930', 'D', '65', 'D65', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('931', 'D', '66', 'D66', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('932', 'D', '67', 'D67', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('933', 'D', '68', 'D68', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('934', 'D', '69', 'D69', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('935', 'D', '70', 'D70', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('936', 'D', '71', 'D71', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('937', 'D', '72', 'D72', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('938', 'D', '73', 'D73', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('939', 'D', '74', 'D74', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('940', 'D', '75', 'D75', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('941', 'D', '76', 'D76', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('942', 'D', '77', 'D77', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('943', 'D', '78', 'D78', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('944', 'D', '79', 'D79', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('945', 'D', '80', 'D80', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('946', 'D', '81', 'D81', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('947', 'D', '82', 'D82', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('948', 'D', '83', 'D83', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('949', 'D', '84', 'D84', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('950', 'D', '85', 'D85', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('951', 'D', '86', 'D86', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('952', 'D', '87', 'D87', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('953', 'D', '88', 'D88', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('954', 'D', '89', 'D89', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('955', 'D', '90', 'D90', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('956', 'D', '91', 'D91', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('957', 'D', '92', 'D92', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('958', 'D', '93', 'D93', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('959', 'D', '94', 'D94', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('960', 'D', '95', 'D95', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('961', 'D', '96', 'D96', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('962', 'D', '97', 'D97', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('963', 'D', '98', 'D98', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('964', 'D', '99', 'D99', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('965', 'D', '100', 'D100', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('966', 'D', '101', 'D101', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('967', 'D', '102', 'D102', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('968', 'D', '103', 'D103', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('969', 'D', '104', 'D104', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('970', 'D', '105', 'D105', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('971', 'D', '106', 'D106', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('972', 'D', '107', 'D107', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('973', 'D', '108', 'D108', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('974', 'D', '109', 'D109', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('975', 'D', '110', 'D110', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('976', 'D', '111', 'D111', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('977', 'D', '112', 'D112', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('978', 'D', '113', 'D113', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('979', 'D', '114', 'D114', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('980', 'D', '115', 'D115', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('981', 'D', '116', 'D116', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('982', 'D', '117', 'D117', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('983', 'D', '118', 'D118', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('984', 'D', '119', 'D119', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('985', 'D', '120', 'D120', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('986', 'D', '121', 'D121', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('987', 'D', '122', 'D122', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('988', 'D', '123', 'D123', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('989', 'D', '124', 'D124', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('990', 'D', '125', 'D125', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('991', 'D', '126', 'D126', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('992', 'D', '127', 'D127', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('993', 'D', '128', 'D128', 'hriday', 'Hriday', '2021-10-25 12:06:37');
INSERT INTO `cubic_number_position` VALUES ('994', 'D', '129', 'D129', 'hriday', 'Hriday', '2021-10-25 12:06:37');

-- ----------------------------
-- Table structure for `datewise_transaction_summary`
-- ----------------------------
DROP TABLE IF EXISTS `datewise_transaction_summary`;
CREATE TABLE `datewise_transaction_summary` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `total_issuing` double DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of datewise_transaction_summary
-- ----------------------------
INSERT INTO `datewise_transaction_summary` VALUES ('1', '2022-01-06', '63918-F392 WHEAT', 'RD-22815/202', 'LA-MUNI APPARELS LTD.', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56.00', 'PEACH FINISH', '680', '0');
INSERT INTO `datewise_transaction_summary` VALUES ('2', '2022-01-06', '63757-22HU GREEN CAMO', 'RD-22931/2021', 'LA-MUNI APPARELS LTD.', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '22HU GREEN CAMO', '56.00', 'PEACH FINISH', '300', '0');
INSERT INTO `datewise_transaction_summary` VALUES ('3', '2022-01-06', '64987-BLACK', 'VRG S.A-23228/2021', 'Noman Fashion Fabrics Ltd.', '30X20+70D/120X70', '98% COTTON 2% SPANDEX', '2/1 S TWILL', 'BLACK', '56.00', 'PEACH FINISH', '630', '0');
INSERT INTO `datewise_transaction_summary` VALUES ('4', '2022-01-08', '63918-F392 WHEAT', 'RD-22815/202', 'LA-MUNI APPARELS LTD.', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', 'F392 WHEAT', '56', 'PEACH FINISH', '0', '680');

-- ----------------------------
-- Table structure for `item_info`
-- ----------------------------
DROP TABLE IF EXISTS `item_info`;
CREATE TABLE `item_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) DEFAULT '',
  `buyer` varchar(150) DEFAULT NULL,
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
  `ac_holder` varchar(120) DEFAULT NULL,
  `order_qty` varchar(20) DEFAULT NULL,
  `allownce` varchar(20) DEFAULT NULL,
  `rate` varchar(40) DEFAULT NULL,
  `process` varchar(100) DEFAULT NULL,
  `pi_no` varchar(100) DEFAULT NULL,
  `cut_width` varchar(50) DEFAULT NULL,
  `style_no` varchar(100) DEFAULT NULL,
  `recording_person_id` varchar(100) NOT NULL,
  `recording_person_name` varchar(100) NOT NULL,
  `recording_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of item_info
-- ----------------------------
INSERT INTO `item_info` VALUES ('1', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', 'RD-22815/202', '63918-F392 WHEAT', 'F392 WHEAT', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '16X16+70D/112X59', '56.00', 'PEACH FINISH', '680', 'yds', '3', 'Mohammad Taki Uddin', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', 'hriday', 'Hriday', '2022-01-06 14:39:18');
INSERT INTO `item_info` VALUES ('2', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', 'RD-22931/2021', '63757-22HU GREEN CAMO', '22HU GREEN CAMO', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '16X16+70D/112X59', '56.00', 'PEACH FINISH', '300', 'yds', '1', 'Mohammad Taki Uddin', '3929.18', '8.00', '2.35', 'PIGMENT PRINT ON SOLID DYED', '22931A', '54.00', '35MW0065,35MW0115, 35MW0115, 35MW011BO, 35MW011N', 'hriday', 'Hriday', '2022-01-06 14:39:31');
INSERT INTO `item_info` VALUES ('3', 'Noman Fashion Fabrics Ltd.', 'VRG S.A', 'VRG S.A-23228/2021', '64987-BLACK', 'BLACK', '98% COTTON 2% SPANDEX', '2/1 S TWILL', '30X20+70D/120X70', '56.00', 'PEACH FINISH', '630', 'yds', '2', 'Mashruk Al Tanvir Khan', '2723.08', '15.00', '2.80', 'Solid Dyed', '23228A', '54.00', 'XW2629', 'hriday', 'Hriday', '2022-01-06 14:39:36');

-- ----------------------------
-- Table structure for `item_issuing`
-- ----------------------------
DROP TABLE IF EXISTS `item_issuing`;
CREATE TABLE `item_issuing` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `barcode_code` varchar(100) NOT NULL,
  `receiving_location` varchar(100) DEFAULT NULL,
  `issued_by` varchar(50) DEFAULT NULL,
  `date_of_receipt` varchar(20) DEFAULT NULL,
  `roll_no` varchar(50) DEFAULT NULL,
  `pp_number` varchar(50) DEFAULT NULL,
  `work_order_number` varchar(50) DEFAULT NULL,
  `gd_number` varchar(100) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `buyer` varchar(150) DEFAULT NULL,
  `shade` varchar(30) DEFAULT NULL,
  `construction` varchar(30) DEFAULT NULL,
  `composition` varchar(50) DEFAULT NULL,
  `weave` varchar(30) DEFAULT NULL,
  `length` float DEFAULT NULL,
  `kgs` varchar(12) DEFAULT NULL,
  `pallet_no` varchar(40) DEFAULT NULL,
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
  `ac_holder` varchar(140) DEFAULT NULL,
  `order_qty` varchar(40) DEFAULT NULL,
  `allownce` varchar(20) DEFAULT NULL,
  `rate` varchar(20) DEFAULT NULL,
  `process` varchar(50) DEFAULT NULL,
  `pi_no` varchar(70) DEFAULT NULL,
  `cut_width` varchar(30) DEFAULT NULL,
  `style_no` varchar(100) DEFAULT NULL,
  `recording_person_id` varchar(30) DEFAULT NULL,
  `recording_person_name` varchar(50) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of item_issuing
-- ----------------------------
INSERT INTO `item_issuing` VALUES ('1', 'FASHION_63918_1', 'zzfl_wearhouse', 'Hriday', '2022-01-06', '1', '22815B1', '63918-F392 WHEAT', 'RD-22815/202', 'LA-MUNI APPARELS LTD.', null, 'F392 WHEAT', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '120', '45', '112233', '56', 'PEACH FINISH', 'Bulk', 'A', '1', 'A', 'A1', '1', '1', '1', 'Mohammad Taki Uddin', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', 'hriday', 'Hriday', '2022-01-06 14:42:43');
INSERT INTO `item_issuing` VALUES ('2', 'FASHION_63918_2', 'zzfl_wearhouse', 'Hriday', '2022-01-06', '2', '22815B1', '63918-F392 WHEAT', 'RD-22815/202', 'LA-MUNI APPARELS LTD.', null, 'F392 WHEAT', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '240', '55', '112233', '56', 'PEACH FINISH', 'Bulk', 'A', '1', 'A', 'A1', '1', '1', '1', 'Mohammad Taki Uddin', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', 'hriday', 'Hriday', '2022-01-06 14:42:43');
INSERT INTO `item_issuing` VALUES ('3', 'FASHION_63918_3', 'zzfl_wearhouse', 'Hriday', '2022-01-06', '3', '22815B1', '63918-F392 WHEAT', 'RD-22815/202', 'LA-MUNI APPARELS LTD.', null, 'F392 WHEAT', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '320', '57', '112233', '56', 'PEACH FINISH', 'Bulk', 'B', '2', 'A', 'A2', '1', '1', '1', 'Mohammad Taki Uddin', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', 'hriday', 'Hriday', '2022-01-06 14:42:43');

-- ----------------------------
-- Table structure for `item_receiving`
-- ----------------------------
DROP TABLE IF EXISTS `item_receiving`;
CREATE TABLE `item_receiving` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `barcode_code` varchar(100) NOT NULL,
  `receiving_location` varchar(100) DEFAULT NULL,
  `received_by` varchar(50) DEFAULT NULL,
  `date_of_receipt` varchar(20) DEFAULT NULL,
  `roll_no` varchar(50) DEFAULT NULL,
  `pp_number` varchar(50) DEFAULT NULL,
  `work_order_number` varchar(50) DEFAULT NULL,
  `gd_number` varchar(100) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `buyer` varchar(150) DEFAULT NULL,
  `shade` varchar(30) DEFAULT NULL,
  `construction` varchar(30) DEFAULT NULL,
  `composition` varchar(50) DEFAULT NULL,
  `weave` varchar(30) DEFAULT NULL,
  `length` float DEFAULT NULL,
  `kgs` varchar(12) DEFAULT NULL,
  `pallet_no` varchar(30) NOT NULL,
  `finished_width` float DEFAULT NULL,
  `finished_type` varchar(30) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `ac_holder` varchar(100) DEFAULT NULL,
  `order_qty` varchar(30) DEFAULT NULL,
  `allownce` varchar(35) DEFAULT NULL,
  `rate` varchar(30) DEFAULT NULL,
  `process` varchar(60) DEFAULT NULL,
  `pi_no` varchar(60) DEFAULT NULL,
  `cut_width` varchar(50) DEFAULT NULL,
  `style_no` varchar(100) DEFAULT NULL,
  `row_number` varchar(30) DEFAULT '',
  `rack_number` varchar(30) DEFAULT '',
  `cubic_number` varchar(30) DEFAULT '',
  `bin_card_number` varchar(30) DEFAULT NULL,
  `quantiy` float DEFAULT NULL,
  `uom` varchar(20) DEFAULT NULL,
  `active` varchar(11) DEFAULT NULL,
  `recording_person_id` varchar(30) DEFAULT NULL,
  `recording_person_name` varchar(50) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of item_receiving
-- ----------------------------
INSERT INTO `item_receiving` VALUES ('1', 'FASHION_63918_1', 'ZZFL Febric Warehouse', 'Hriday Ahmed', '2022-01-06', '1', '22815B1', '63918-F392 WHEAT', 'RD-22815/202', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', 'F392 WHEAT', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '120', '45', '112233', '56', 'PEACH FINISH', 'Bulk', 'A', 'Mohammad Taki Uddin', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', '1', 'A', 'A1', '1', '1', '1', '0', 'hriday', 'Hriday', '2022-01-06 14:39:18');
INSERT INTO `item_receiving` VALUES ('2', 'FASHION_63918_2', 'ZZFL Febric Warehouse', 'Hriday Ahmed', '2022-01-06', '2', '22815B1', '63918-F392 WHEAT', 'RD-22815/202', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', 'F392 WHEAT', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '240', '55', '112233', '56', 'PEACH FINISH', 'Bulk', 'A', 'Mohammad Taki Uddin', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', '1', 'A', 'A1', '1', '1', '1', '0', 'hriday', 'Hriday', '2022-01-06 14:39:23');
INSERT INTO `item_receiving` VALUES ('3', 'FASHION_63757_4', 'ZZFL Febric Warehouse', 'Hriday Ahmed', '2022-01-06', '4', '22931A1', '63757-22HU GREEN CAMO', 'RD-22931/2021', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', '22HU GREEN CAMO', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '300', '40', '112233', '56', 'PEACH FINISH', 'Bulk', 'A', 'Mohammad Taki Uddin', '3929.18', '8.00', '2.35', 'PIGMENT PRINT ON SOLID DYED', '22931A', '54.00', '35MW0065,35MW0115, 35MW0115, 35MW011BO, 35MW011N', '1', 'A', 'A1', '1', '1', '1', '1', 'hriday', 'Hriday', '2022-01-06 14:39:31');
INSERT INTO `item_receiving` VALUES ('4', 'FASHION_64987_6', 'ZZFL Febric Warehouse', 'Hriday Ahmed', '2022-01-06', '6', '23228A1', '64987-BLACK', 'VRG S.A-23228/2021', 'Noman Fashion Fabrics Ltd.', 'VRG S.A', 'BLACK', '30X20+70D/120X70', '98% COTTON 2% SPANDEX', '2/1 S TWILL', '320', '44', '112233', '56', 'PEACH FINISH', 'Bulk', 'A', 'Mashruk Al Tanvir Khan', '2723.08', '15.00', '2.80', 'Solid Dyed', '23228A', '54.00', 'XW2629', '1', 'A', 'A1', '1', '1', '1', '1', 'hriday', 'Hriday', '2022-01-06 14:39:36');
INSERT INTO `item_receiving` VALUES ('5', 'FASHION_63918_3', 'ZZFL Febric Warehouse', 'Hriday Ahmed', '2022-01-06', '3', '22815B1', '63918-F392 WHEAT', 'RD-22815/202', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', 'F392 WHEAT', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '320', '57', '112233', '56', 'PEACH FINISH', 'Bulk', 'B', 'Mohammad Taki Uddin', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', '2', 'A', 'A2', '1', '1', '1', '0', 'hriday', 'Hriday', '2022-01-06 14:39:42');
INSERT INTO `item_receiving` VALUES ('6', 'FASHION_64987_7', 'ZZFL Febric Warehouse', 'Hriday Ahmed', '2022-01-06', '7', '23228A1', '64987-BLACK', 'VRG S.A-23228/2021', 'Noman Fashion Fabrics Ltd.', 'VRG S.A', 'BLACK', '30X20+70D/120X70', '98% COTTON 2% SPANDEX', '2/1 S TWILL', '310', '48', '112233', '56', 'PEACH FINISH', 'Bulk', 'B', 'Mashruk Al Tanvir Khan', '2723.08', '15.00', '2.80', 'Solid Dyed', '23228A', '54.00', 'XW2629', '2', 'A', 'A2', '1', '1', '1', '1', 'hriday', 'Hriday', '2022-01-06 14:39:47');

-- ----------------------------
-- Table structure for `move_item`
-- ----------------------------
DROP TABLE IF EXISTS `move_item`;
CREATE TABLE `move_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `recording_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of move_item
-- ----------------------------

-- ----------------------------
-- Table structure for `packing_list`
-- ----------------------------
DROP TABLE IF EXISTS `packing_list`;
CREATE TABLE `packing_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `work_order_number` varchar(100) DEFAULT NULL,
  `gd_number` varchar(70) DEFAULT NULL,
  `customer_name` varchar(150) DEFAULT NULL,
  `buyer` varchar(150) DEFAULT NULL,
  `customer_id` varchar(40) DEFAULT NULL,
  `construction` varchar(80) DEFAULT NULL,
  `finish_width_in_inch` varchar(70) DEFAULT NULL,
  `roll_no` varchar(100) DEFAULT '',
  `composition` varchar(100) DEFAULT NULL,
  `shade` varchar(100) DEFAULT NULL,
  `weave` varchar(100) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `kg` varchar(12) DEFAULT NULL,
  `finished_type` varchar(100) DEFAULT NULL,
  `grade` varchar(100) DEFAULT NULL,
  `order_quantity` int(11) DEFAULT NULL,
  `actual_finished_width` varchar(30) DEFAULT NULL,
  `actual_cuttable_width` varchar(100) DEFAULT NULL,
  `problems_point` varchar(20) DEFAULT NULL,
  `points_per_yds` varchar(100) DEFAULT NULL,
  `pass_fail` varchar(30) DEFAULT NULL,
  `ac_holder` varchar(100) DEFAULT NULL,
  `order_qty` varchar(20) DEFAULT NULL,
  `allownce` varchar(15) DEFAULT NULL,
  `rate` varchar(11) DEFAULT NULL,
  `process` varchar(20) DEFAULT NULL,
  `pi_no` varchar(50) DEFAULT NULL,
  `cut_width` varchar(100) DEFAULT NULL,
  `style_no` varchar(150) DEFAULT NULL,
  `recording_person_id` varchar(30) DEFAULT NULL,
  `recording_person_name` varchar(100) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of packing_list
-- ----------------------------
INSERT INTO `packing_list` VALUES ('1', '63918-F392 WHEAT', 'RD-22815/202', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', '1', '16X16+70D/112X59', '56.00', '1', '98% COTTON 2% SPANDEX TWILL', 'F392 WHEAT', '3/1 S TWILL', '120', '45', 'PEACH FINISH', 'A', '748', '56', '55', '45', '24.545454545454547', 'Fail', 'Mohammad Taki Uddin', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', '123', 'Hriday', '2022-01-06 14:34:41');
INSERT INTO `packing_list` VALUES ('2', '63918-F392 WHEAT', 'RD-22815/202', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', '1', '16X16+70D/112X59', '56.00', '2', '98% COTTON 2% SPANDEX TWILL', 'F392 WHEAT', '3/1 S TWILL', '240', '55', 'PEACH FINISH', 'A', '748', '56', '45', '28', '9.333333333333334', 'Pass', 'Mohammad Taki Uddin', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', '123', 'Hriday', '2022-01-06 14:35:11');
INSERT INTO `packing_list` VALUES ('3', '63918-F392 WHEAT', 'RD-22815/202', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', '1', '16X16+70D/112X59', '56.00', '3', '98% COTTON 2% SPANDEX TWILL', 'F392 WHEAT', '3/1 S TWILL', '320', '57', 'PEACH FINISH', 'B', '748', '55', '50', '29', '6.525', 'Pass', 'Mohammad Taki Uddin', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', '123', 'Hriday', '2022-01-06 14:35:36');
INSERT INTO `packing_list` VALUES ('4', '63757-22HU GREEN CAMO', 'RD-22931/2021', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', '1', '16X16+70D/112X59', '56.00', '3', '98% COTTON 2% SPANDEX TWILL', '22HU GREEN CAMO', '3/1 S TWILL', '290', '34', 'PEACH FINISH', 'A', '3929', '55', '55', '55', '12.413793103448276', 'Pass', 'Mohammad Taki Uddin', '3929.18', '8.00', '2.35', 'PIGMENT PRINT ON SOL', '22931A', '54.00', '35MW0065,35MW0115, 35MW0115, 35MW011BO, 35MW011N', '123', 'Hriday', '2022-01-06 14:36:07');
INSERT INTO `packing_list` VALUES ('5', '63757-22HU GREEN CAMO', 'RD-22931/2021', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', '1', '16X16+70D/112X59', '56.00', '4', '98% COTTON 2% SPANDEX TWILL', '22HU GREEN CAMO', '3/1 S TWILL', '300', '40', 'PEACH FINISH', 'A', '3929', '55', '55', '34', '7.673981191222571', 'Pass', 'Mohammad Taki Uddin', '3929.18', '8.00', '2.35', 'PIGMENT PRINT ON SOL', '22931A', '54.00', '35MW0065,35MW0115, 35MW0115, 35MW011BO, 35MW011N', '123', 'Hriday', '2022-01-06 14:36:22');
INSERT INTO `packing_list` VALUES ('6', '64987-BLACK', 'VRG S.A-23228/2021', 'Noman Fashion Fabrics Ltd.', 'VRG S.A', '1', '30X20+70D/120X70', '56.00', '6', '98% COTTON 2% SPANDEX', 'BLACK', '2/1 S TWILL', '320', '44', 'PEACH FINISH', 'A', '2723', '55', '45', '34', '8.5', 'Pass', 'Mashruk Al Tanvir Khan', '2723.08', '15.00', '2.80', 'Solid Dyed', '23228A', '54.00', 'XW2629', '123', 'Hriday', '2022-01-06 14:36:52');
INSERT INTO `packing_list` VALUES ('7', '64987-BLACK', 'VRG S.A-23228/2021', 'Noman Fashion Fabrics Ltd.', 'VRG S.A', '1', '30X20+70D/120X70', '56.00', '7', '98% COTTON 2% SPANDEX', 'BLACK', '2/1 S TWILL', '310', '48', 'PEACH FINISH', 'B', '2723', '56', '45', '33', '8.516129032258064', 'Pass', 'Mashruk Al Tanvir Khan', '2723.08', '15.00', '2.80', 'Solid Dyed', '23228A', '54.00', 'XW2629', '123', 'Hriday', '2022-01-06 14:37:13');

-- ----------------------------
-- Table structure for `roll_information_barcode`
-- ----------------------------
DROP TABLE IF EXISTS `roll_information_barcode`;
CREATE TABLE `roll_information_barcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barcode_code` varchar(100) NOT NULL,
  `pp_number` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `buyer` varchar(150) DEFAULT NULL,
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
  `ac_holder` varchar(120) DEFAULT NULL,
  `order_qty` varchar(50) DEFAULT NULL,
  `allownce` varchar(12) DEFAULT NULL,
  `rate` varchar(20) DEFAULT NULL,
  `process` varchar(40) DEFAULT NULL,
  `pi_no` varchar(60) DEFAULT NULL,
  `cut_width` varchar(100) DEFAULT NULL,
  `style_no` varchar(150) DEFAULT NULL,
  `recording_person_id` varchar(100) NOT NULL,
  `recording_person_name` varchar(100) NOT NULL,
  `recording_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of roll_information_barcode
-- ----------------------------
INSERT INTO `roll_information_barcode` VALUES ('1', 'FASHION_63918_1', '22815B1', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', '1', '63918-F392 WHEAT', 'RD-22815/202', '16X16+70D/112X59', '56.00', '1', '45', '98% COTTON 2% SPANDEX TWILL', 'F392 WHEAT', '3/1 S TWILL', '120', 'PEACH FINISH', '112233', 'Bulk', 'A', 'Mohammad Taki Uddin', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', 'hriday', 'Hriday', '2022-01-06 14:37:33');
INSERT INTO `roll_information_barcode` VALUES ('2', 'FASHION_63918_2', '22815B1', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', '1', '63918-F392 WHEAT', 'RD-22815/202', '16X16+70D/112X59', '56.00', '2', '55', '98% COTTON 2% SPANDEX TWILL', 'F392 WHEAT', '3/1 S TWILL', '240', 'PEACH FINISH', '112233', 'Bulk', 'A', 'Mohammad Taki Uddin', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', 'hriday', 'Hriday', '2022-01-06 14:37:42');
INSERT INTO `roll_information_barcode` VALUES ('3', 'FASHION_63918_3', '22815B1', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', '1', '63918-F392 WHEAT', 'RD-22815/202', '16X16+70D/112X59', '56.00', '3', '57', '98% COTTON 2% SPANDEX TWILL', 'F392 WHEAT', '3/1 S TWILL', '320', 'PEACH FINISH', '112233', 'Bulk', 'B', 'Mohammad Taki Uddin', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', 'hriday', 'Hriday', '2022-01-06 14:37:55');
INSERT INTO `roll_information_barcode` VALUES ('4', 'FASHION_63757_4', '22931A1', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', '1', '63757-22HU GREEN CAMO', 'RD-22931/2021', '16X16+70D/112X59', '56.00', '4', '40', '98% COTTON 2% SPANDEX TWILL', '22HU GREEN CAMO', '3/1 S TWILL', '300', 'PEACH FINISH', '112233', 'Bulk', 'A', 'Mohammad Taki Uddin', '3929.18', '8.00', '2.35', 'PIGMENT PRINT ON SOLID DYED', '22931A', '54.00', '35MW0065,35MW0115, 35MW0115, 35MW011BO, 35MW011N', 'hriday', 'Hriday', '2022-01-06 14:38:11');
INSERT INTO `roll_information_barcode` VALUES ('5', 'FASHION_64987_6', '23228A1', 'Noman Fashion Fabrics Ltd.', 'VRG S.A', '1', '64987-BLACK', 'VRG S.A-23228/2021', '30X20+70D/120X70', '56.00', '6', '44', '98% COTTON 2% SPANDEX', 'BLACK', '2/1 S TWILL', '320', 'PEACH FINISH', '112233', 'Bulk', 'A', 'Mashruk Al Tanvir Khan', '2723.08', '15.00', '2.80', 'Solid Dyed', '23228A', '54.00', 'XW2629', 'hriday', 'Hriday', '2022-01-06 14:38:48');
INSERT INTO `roll_information_barcode` VALUES ('6', 'FASHION_64987_7', '23228A1', 'Noman Fashion Fabrics Ltd.', 'VRG S.A', '1', '64987-BLACK', 'VRG S.A-23228/2021', '30X20+70D/120X70', '56.00', '7', '48', '98% COTTON 2% SPANDEX', 'BLACK', '2/1 S TWILL', '310', 'PEACH FINISH', '112233', 'Bulk', 'B', 'Mashruk Al Tanvir Khan', '2723.08', '15.00', '2.80', 'Solid Dyed', '23228A', '54.00', 'XW2629', 'hriday', 'Hriday', '2022-01-06 14:38:57');
INSERT INTO `roll_information_barcode` VALUES ('7', 'FASHION_64987_5', '23228A1', 'Noman Fashion Fabrics Ltd.', 'VRG S.A', '1', '64987-BLACK', 'VRG S.A-23228/2021', '30X20+70D/120X70', '56.00', '5', 'undefined', '98% COTTON 2% SPANDEX', 'BLACK', '2/1 S TWILL', 'undefined', 'PEACH FINISH', '', 'select', 'No_Data', 'Mashruk Al Tanvir Khan', '2723.08', '15.00', '2.80', 'Solid Dyed', '23228A', '54.00', 'XW2629', 'hriday', 'Hriday', '2022-01-06 14:53:18');

-- ----------------------------
-- Table structure for `unloading_plan`
-- ----------------------------
DROP TABLE IF EXISTS `unloading_plan`;
CREATE TABLE `unloading_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `grade_a` int(11) DEFAULT NULL,
  `grade_b` int(11) DEFAULT NULL,
  `total_stock` int(11) DEFAULT NULL,
  `number_of_roll` int(11) DEFAULT NULL,
  `date_of_delivery` varchar(40) DEFAULT NULL,
  `all_cubics` varchar(40) DEFAULT NULL,
  `all_barcodes` varchar(2000) DEFAULT NULL,
  `active` varchar(11) DEFAULT NULL,
  `order_qty` varchar(25) DEFAULT NULL,
  `allownce` varchar(20) DEFAULT NULL,
  `rate` varchar(20) DEFAULT NULL,
  `process` varchar(70) DEFAULT NULL,
  `pi_no` varchar(80) DEFAULT NULL,
  `cut_width` varchar(35) DEFAULT NULL,
  `style_no` varchar(120) DEFAULT NULL,
  `recording_person_id` varchar(100) DEFAULT NULL,
  `recording_person_name` varchar(200) DEFAULT NULL,
  `recording_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of unloading_plan
-- ----------------------------
INSERT INTO `unloading_plan` VALUES ('1', '63918-F392 WHEAT', '680', 'LA-MUNI APPARELS LTD.', 'RD INTERNATIONAL', 'Mohammad Taki Uddin', '16X16+70D/112X59', '98% COTTON 2% SPANDEX TWILL', '3/1 S TWILL', '56', 'Solid Dyed', 'RD-22815/202', '', '22815B1', '', '360', '320', '680', '3', '01/08/2022', 'A1,A2', 'FASHION_63918_1, FASHION_63918_2, FASHION_63918_3', '0', '747.98', '20.00', '2.20', 'Solid Dyed', '22815B', '54.00', '35MWO15SL', 'hriday', 'Hriday', '2022-01-06 14:41:20');

-- ----------------------------
-- Table structure for `user_info`
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `recording_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_info
-- ----------------------------
INSERT INTO `user_info` VALUES ('15', 'iftekhar', 'iftekhar', 'iftekhar', '12345', '12345', 'Admin', 'N/A', 'Active', 'abcd@gmail.com', '11111111', 'ICT', 'Application Developer', 'default.png', 'iftekhar', 'iftekhar', '2021-02-23 15:53:17');
INSERT INTO `user_info` VALUES ('26', 'Md. Jiash Hasnat', 'Md.Jiash Hasnat', '004143', 'covid19zz', 'covid19zz', 'Admin', 'N/A', 'Active', 'ftslab@znzfab.com', '01985982850', 'Lab & QC', 'Engineer', 'default.png', 'iftekhar', 'iftekhar', '2021-03-07 23:44:07');
INSERT INTO `user_info` VALUES ('27', 'Md. Saiful Islam', null, 'Saiful Lab', '4321', '4321', 'User', 'N/A', 'Active', 'md.saiful@znzfab.com', '01701212563', 'Marketing', 'Manager', 'default.png', 'qc', 'qc', '2020-12-01 09:55:55');
INSERT INTO `user_info` VALUES ('28', 'Md. Saiful Islam', null, 'Saiful Lab', '4321', '4321', 'User', 'N/A', 'Active', 'md.saiful@znzfab.com', '01701212563', 'ICT', 'Manager', 'default.png', 'qc', 'qc', '2020-12-01 09:58:41');
INSERT INTO `user_info` VALUES ('30', 'admin', 'Mr. Admin', 'admin', 'ie', 'ie', 'Super Admin', 'N/A', 'Active', 'qc@gmail.com', '100000000', '', 'Deputy Manager', 'default.png', 'admin', 'admin', '2021-11-02 10:43:40');
INSERT INTO `user_info` VALUES ('32', 'abc', 'Mr.QC', 'abc123', '12345', '12345', 'User', 'N/A', 'Active', 'abc@gmail.com', '11111111', 'ICT', 'Engineer', 'default.png', 'iftekhar', 'iftekhar', '2021-02-23 15:51:47');
INSERT INTO `user_info` VALUES ('34', 'dto', 'data entry operator', 'dto_1', '12345', '12345', 'User', 'proc_1', 'Active', 'dto@dto.com', '34543523232', 'ICT', 'Data Co-ordinator', 'default.png', 'iftekhar', 'iftekhar', '2021-03-07 23:43:56');
INSERT INTO `user_info` VALUES ('35', 'dto', 'data entry operator', 'dto_1', '12345', '12345', 'User', 'proc_1', 'Active', 'dto@dto.com', '34543523232', 'ICT', 'Data Co-ordinator', 'default.png', 'iftekhar', 'iftekhar', '2021-03-07 23:43:56');
INSERT INTO `user_info` VALUES ('36', 'Data Entry OP', 'Mr. Haris', '090', '1234', '1234', 'Sub_User', 'N/A', 'Active', 'jiash09@live.com', '0', 'Marketing', 'Assistant Officer', 'default.png', 'qc', 'qc', '2021-03-10 17:51:42');
INSERT INTO `user_info` VALUES ('37', 'test', 'test', '1234', '12345', '12345', 'User', 'proc_1', 'Active', 'test', '000020202', 'Marketing', 'Application Implementer', 'default.png', 'qc', 'qc', '2021-08-30 10:47:34');
INSERT INTO `user_info` VALUES ('38', 'aaa', 'aaa', '123', '12345', '12345', 'Admin', 'N/A', 'Active', 'aaa@gmail.com', '000020202', 'Marketing', 'Deputy Manager', 'default.png', 'qc', 'qc', '2021-08-30 10:48:09');
INSERT INTO `user_info` VALUES ('39', 'user', 'corrugation user', '111', '111', '111', 'User', 'proc_1', 'Active', 'abcd@gmail.com', '34543523232', 'Marketing', 'Assistant General Manager', 'default.png', 'qc', 'qc', '2021-09-04 11:20:16');
INSERT INTO `user_info` VALUES ('40', 'Faruk', 'Md Akash Islam', '300221', 'faruk', 'faruk', 'Admin', 'N/A', 'Active', 'farukeee1935@gmail.com', '01709994729', 'CARTON', 'Officer', 'default.png', 'admin', 'admin', '2021-09-19 12:20:19');
INSERT INTO `user_info` VALUES ('41', 'faruk', 'Md. Faruk Hossain', '8035', 'ie', 'ie', 'Admin', 'proc_5', 'Active', 'faruk@znzal.com', '01709994729', 'INDUSTRIAL ENGINEERING', 'Officer', 'default.png', 'admin', 'admin', '2021-11-02 10:40:33');
INSERT INTO `user_info` VALUES ('42', 'Corrugation', 'Ming Wei Corrugation', '300221', 'faruk', 'faruk', 'User', 'proc_1', 'Active', 'farukeee1935@gmail.com', '01709994729', 'CARTON', 'Data Co-ordinator', 'default.png', 'admin', 'admin', '2021-09-19 16:28:35');
INSERT INTO `user_info` VALUES ('43', 'Printing', 'Flexo Printing', '300221', 'faruk', 'faruk', 'User', 'proc_3', 'Active', 'farukeee1935@gmail.com', '01709994729', 'CARTON', 'Data Co-ordinator', 'default.png', 'admin', 'admin', '2021-09-19 16:30:48');
INSERT INTO `user_info` VALUES ('44', 'Auto Folder', 'Auto Gluing Machine', '300221', 'faruk', 'faruk', 'User', 'proc_8', 'Active', 'farukeee1935@gmail.com', '01709994729', 'CARTON', 'Data Co-ordinator', 'default.png', 'admin', 'admin', '2021-09-19 16:32:22');
INSERT INTO `user_info` VALUES ('45', 'Finishing ', 'Hriday', '300221', 'faruk', 'faruk', 'User', 'proc_9', 'Active', 'farukeee1935@gmail.com', '01709994729', 'CARTON', 'Data Co-ordinator', 'default.png', 'admin', 'admin', '2021-09-19 16:33:50');
INSERT INTO `user_info` VALUES ('46', 'Gluer', 'Auto Gluing Machine', '300221', 'faruk', 'faruk', 'User', 'proc_8', 'Active', '01709994729', '01709994729', 'CARTON', 'Data Co-ordinator', 'default.png', 'admin', 'admin', '2021-09-19 17:33:57');
INSERT INTO `user_info` VALUES ('47', 'test2', 'test2', '8042', '123456', '123456', 'User', 'proc_2', 'Active', '', '01894949949', 'INDUSTRIAL ENGINEERING', 'Senior Operator ', 'default.png', 'admin', 'admin', '2021-09-20 12:47:46');
INSERT INTO `user_info` VALUES ('48', 'Shahin', 'Md. Shahin Islam', '5989', 'zzal', 'zzal', 'User', 'proc_1', 'Active', '', '01764773781', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 12:51:07');
INSERT INTO `user_info` VALUES ('49', 'Rejaul', 'Md. Rejaul Islam', '5455', 'zzal', 'zzal', 'User', 'proc_1', 'Active', '', '01734419469', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 12:53:38');
INSERT INTO `user_info` VALUES ('52', 'rejaul', 'Md. Rejaul Islam', '305059', 'zzal', 'zzal', 'User', 'proc_8', 'Active', '', '01770896098', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 13:59:14');
INSERT INTO `user_info` VALUES ('53', 'sujon', 'Md.Sujon Islam', '302770', 'zzal', 'zzal', 'User', 'proc_8', 'Active', '', '01849439999', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:00:27');
INSERT INTO `user_info` VALUES ('54', 'akther', 'Md. Akther Islam', '306186', 'zzal', 'zzal', 'User', 'proc_2', 'Active', '', '01705687309', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:03:17');
INSERT INTO `user_info` VALUES ('55', 'hriday', 'Md. Hriday Islam', '305647', 'zzal', 'zzal', 'User', 'proc_9', 'Active', '', '01737608061', 'CARTON', 'Finishing Supervisor', 'default.png', 'admin', 'admin', '2021-09-20 14:05:40');
INSERT INTO `user_info` VALUES ('56', 'polash', 'Md. Polash Islam', '361', 'zzal', 'zzal', 'User', 'proc_4', 'Active', '', '01723907435', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:11:19');
INSERT INTO `user_info` VALUES ('57', 'subash', 'Sree Subash Ray', '297', 'zzal', 'zzal', 'User', 'proc_4', 'Active', '', '01815394217', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:14:51');
INSERT INTO `user_info` VALUES ('58', 'monarul', 'Md. Monaru Islaml', '304064', 'zzal', 'zzal', 'User', 'proc_6', 'Active', '', '01739451237', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:19:55');
INSERT INTO `user_info` VALUES ('59', 'kamal', 'Md. Kamal Islam', '302863', 'zzal', 'zzal', 'User', 'proc_6', 'Active', '', '01796815228', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:21:42');
INSERT INTO `user_info` VALUES ('60', 'golam', 'Md. Golam Hossain', '4205', 'zzal', 'zzal', 'User', 'proc_5', 'Active', '', '01741537943', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:28:59');
INSERT INTO `user_info` VALUES ('61', 'rabiul', 'Md. Rabiul Islam', '304387', 'zzal', 'zzal', 'User', 'proc_5', 'Active', '', '01924000294', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:32:16');
INSERT INTO `user_info` VALUES ('62', 'aslam', 'Md. Aslam Islam', '6065', 'zzal', 'zzal', 'User', 'proc_5', 'Active', '', '01745784227', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:34:36');
INSERT INTO `user_info` VALUES ('63', 'delivery', 'Md. Rajib Islam ', '12345', 'zzal', 'zzal', 'User', 'proc_10', 'Active', '', '01770794854', 'CARTON', 'Assistant Officer', 'default.png', 'admin', 'admin', '2021-09-20 14:37:57');
INSERT INTO `user_info` VALUES ('64', 'asinur', 'Md. Asinur Hossain', '3603', 'zzal', 'zzal', 'User', 'proc_11', 'Active', '', '01935278390', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 14:45:51');
INSERT INTO `user_info` VALUES ('65', 'hridaytest', 'Hriday Test', '3782', '123456', '123456', 'User', 'proc_5', 'Active', '', '01802892934', 'INDUSTRIAL ENGINEERING', 'System Administrator', 'default.png', 'admin', 'admin', '2021-09-20 16:36:45');
INSERT INTO `user_info` VALUES ('66', 'shahin', 'Md. Shahin Islam', '5989', 'zzal', 'zzal', 'User', 'proc_1', 'Active', '', '01764773781', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 16:42:34');
INSERT INTO `user_info` VALUES ('67', 'rejaulnc', 'Md. Rejaul Islam', '5455', 'zzal', 'zzal', 'User', 'proc_1', 'Active', '', '01734419469', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 16:50:18');
INSERT INTO `user_info` VALUES ('68', 'monir', 'Md. Monir Islam', '300817', 'zzal', 'zzal', 'User', 'proc_3', 'Active', '', '01735207342', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 17:09:04');
INSERT INTO `user_info` VALUES ('69', 'jakir', 'Md. Jakir Hosen', '301982', 'zzal', 'zzal', 'User', 'proc_3', 'Active', '', '01735207342', 'CARTON', 'Operator', 'default.png', 'admin', 'admin', '2021-09-20 17:10:10');

-- ----------------------------
-- Table structure for `user_login`
-- ----------------------------
DROP TABLE IF EXISTS `user_login`;
CREATE TABLE `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `recording_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=159 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_login
-- ----------------------------
INSERT INTO `user_login` VALUES ('69', 'iftekhar', 'iftekhar', '', '', '', '', '12345', 'abcd@gmail.com', '11111111', 'ICT', 'Application Developer', 'Admin', 'N/A', 'Active', 'default.png', 'iftekhar', 'iftekhar', '2021-02-23 15:53:17');
INSERT INTO `user_login` VALUES ('84', 'admin', 'admin', 'Mr. Admin', '', '', '', 'ie', 'qc@gmail.com', '100000000', '', 'Deputy Manager', 'Super Admin', 'N/A', 'Active', 'default.png', 'admin', 'admin', '2021-11-02 10:43:40');
INSERT INTO `user_login` VALUES ('134', '361', 'polash', 'Md. Polash Islam', null, null, null, 'polash@', '', '01723907435', 'CARTON', 'Operator', 'User', 'proc_2', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:54:30');
INSERT INTO `user_login` VALUES ('135', '297', 'subash', 'Sree Subash Ray', null, null, null, 'subash@', '', '01815394217', 'CARTON', 'Operator', 'User', 'proc_2', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:56:23');
INSERT INTO `user_login` VALUES ('132', '301982', 'jakir', 'Md. Jakir Hosen', null, null, null, 'jakir@', '', '01733755360', 'CARTON', 'Operator', 'User', 'proc_2', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:49:23');
INSERT INTO `user_login` VALUES ('131', '300817', 'monir', 'Md. Monir Islam', null, null, null, 'monir@', '', '01735207342', 'CARTON', 'Operator', 'User', 'proc_2', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:46:28');
INSERT INTO `user_login` VALUES ('136', '4205', 'golam', 'Md. Golam Islam', null, null, null, 'golam@', '', '01741537943', 'CARTON', 'Operator', 'User', 'proc_3', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:58:34');
INSERT INTO `user_login` VALUES ('137', '3603', 'asinur', 'Md. Asinur Hossain', null, null, null, 'asinur@', '', '01935278390', 'CARTON', 'Operator', 'User', 'proc_3', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:00:10');
INSERT INTO `user_login` VALUES ('154', '304387', 'rabiul', 'Md. Rabiul Islam', null, null, null, 'rabiul@', '', '01924000294', 'CARTON', 'Junior Operator', 'User', 'proc_3', 'Active', 'default.png', 'admin', 'admin', '2021-10-07 10:44:03');
INSERT INTO `user_login` VALUES ('139', '6065', 'aslam', 'Md. Aslam Islam', null, null, null, 'aslam@', '', '01745784227', 'CARTON', 'Operator', 'User', 'proc_3', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:08:30');
INSERT INTO `user_login` VALUES ('140', '305059', 'rejaul', 'Md. Rejaul Islam', null, null, null, 'rejaul@', '', '01770896098', 'CARTON', 'Operator', 'User', 'proc_6', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:15:09');
INSERT INTO `user_login` VALUES ('141', '302770', 'sujon', 'Md.Sujon Islam', null, null, null, 'sujon@', '', '01849439999', 'CARTON', 'Operator', 'User', 'proc_6', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:16:46');
INSERT INTO `user_login` VALUES ('142', '304064', 'monarul', 'Md.Monarul Islam', null, null, null, 'monarul@', '', '01739451237', 'CARTON', 'Operator', 'User', 'proc_6', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:18:52');
INSERT INTO `user_login` VALUES ('143', '302863', 'kamal', 'Md.Kamal Islam', null, null, null, 'kamal@', '', '01796815228', 'CARTON', 'Operator', 'User', 'proc_6', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:20:24');
INSERT INTO `user_login` VALUES ('144', '306186', 'akther', 'Md. Akther Islam', null, null, null, 'akther@', '', '01705687309', 'CARTON', 'Operator', 'User', 'proc_4', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:23:40');
INSERT INTO `user_login` VALUES ('145', '2408', 'rakib', 'Md. Rakib Islam', null, null, null, 'rakib@', '', '01729709269', 'CARTON', 'Operator', 'User', 'proc_5', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 15:25:34');
INSERT INTO `user_login` VALUES ('149', '306020', 'rejowan', 'Md. Rejowan Islam', null, null, null, 'rejowan@', '', '01761830775', 'CARTON', 'Junior Operator', 'User', 'proc_1', 'Active', 'default.png', 'admin', 'admin', '2021-10-04 17:11:39');
INSERT INTO `user_login` VALUES ('148', '200035', 'mijan', 'Md. Mijanur Islam', null, null, null, 'mijanur@', '', '01913201003', 'CARTON', 'Officer', 'User', 'proc_1', 'Active', 'default.png', 'admin', 'admin', '2021-10-04 17:10:04');
INSERT INTO `user_login` VALUES ('129', '5989', 'shahin', 'Md. Shahin Islam', null, null, null, 'shahin@', '', '01764773781', 'CARTON', 'Operator', 'User', 'proc_1', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:22:36');
INSERT INTO `user_login` VALUES ('130', '5455', 'rejaulnc', 'Md. Rejaul Islam', null, null, null, 'rejaulnc@', '', '01734419469', 'CARTON', 'Operator', 'User', 'proc_1', 'Active', 'default.png', 'admin', 'admin', '2021-10-02 14:37:52');
INSERT INTO `user_login` VALUES ('150', '3534', 'mahfuz', 'Mahfuz Alam Rajib', null, null, null, 'rajib1234', 'mahfuz@znzal.com', '01770794854', 'CARTON', 'Incharge', 'User', 'proc_7', 'Active', 'default.png', 'admin', 'admin', '2021-10-05 10:27:12');
INSERT INTO `user_login` VALUES ('151', '5467', 'monwar', 'Monwar Jahid', null, null, null, 'du081312023', 'jahid@znzal.com', '01701212548', 'Head Of Operation', 'General Manager', 'Super Admin', 'N/A', 'Active', 'default.png', 'admin', 'admin', '2021-10-05 18:13:51');
INSERT INTO `user_login` VALUES ('152', '9047', 'masum', 'Masum Billah', null, null, null, 'honey', 'masum@znzal.com', '01919424720', 'CARTON', 'Junior Officer', 'Restricted_User', 'N/A', 'Active', 'default.png', '9047', 'masum', '2021-11-08 13:56:09');
INSERT INTO `user_login` VALUES ('153', '8035', 'faruk', 'Md. Faruk Hossain', null, null, null, 'ie', 'faruk@znzal.com', '01709994729', 'INDUSTRIAL ENGINEERING', 'Officer', 'Admin', 'N/A', 'Active', 'default.png', 'admin', 'admin', '2021-11-02 10:40:33');
INSERT INTO `user_login` VALUES ('155', '8463', 'babor', 'Babor Molla', null, null, null, '125051', 'babor.molla@znzal.com', '01313009406', 'Planing', 'Assistant Manager', 'Admin', 'N/A', 'Active', 'default.png', 'admin', 'admin', '2021-11-08 12:26:56');
INSERT INTO `user_login` VALUES ('157', '200381', 'akram', 'Md Akram Islam', null, null, null, 'akram', '', '01614332079', 'INDUSTRIAL ENGINEERING', 'Assistant Officer', 'Sub_User', 'N/A', 'Active', 'default.png', 'admin', 'admin', '2021-11-02 10:43:17');
INSERT INTO `user_login` VALUES ('156', '8609', 'pavel', 'Md Sazedul Karim Pavel', null, null, null, 'pavel1234', 'sazedul.pavel@znzal.com', '01313009334', 'CARTON', 'Assistant Manager', 'Sub_User', 'N/A', 'Active', 'default.png', 'admin', 'admin', '2021-11-10 10:39:32');
INSERT INTO `user_login` VALUES ('158', '300302', 'kamal', 'Md Kamal Shekh', null, null, null, '300302', '', '01989693610', 'CARTON', 'Junior Operator', 'User', 'proc_5', 'Active', 'default.png', 'admin', 'admin', '2021-11-20 13:43:44');

-- ----------------------------
-- Table structure for `user_type`
-- ----------------------------
DROP TABLE IF EXISTS `user_type`;
CREATE TABLE `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `short_name` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_type
-- ----------------------------
INSERT INTO `user_type` VALUES ('1', 'Super Admin', 'super_admin');
INSERT INTO `user_type` VALUES ('2', 'Admin', 'admin');
INSERT INTO `user_type` VALUES ('3', 'Senior Officer LC & PI', 'senior_officer_lc_pi');
INSERT INTO `user_type` VALUES ('4', 'Senior Officer B2B', 'senior_officer_b2b');
INSERT INTO `user_type` VALUES ('5', 'Assistant Manager ', 'assistant_manager');
INSERT INTO `user_type` VALUES ('6', 'Assistant Manager Banking', 'assistant_manager_banking');
INSERT INTO `user_type` VALUES ('7', 'Officer', 'officer');
INSERT INTO `user_type` VALUES ('8', 'Assistant Officer BTMA', 'assistant_officer_btma');
INSERT INTO `user_type` VALUES ('9', 'Assistant Officer B2B', 'assistant_officer_b2b');
INSERT INTO `user_type` VALUES ('10', 'Manager', 'manager');
INSERT INTO `user_type` VALUES ('11', 'Sub User', 'sub_user');
