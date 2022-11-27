/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80027
 Source Host           : localhost:3306
 Source Schema         : dulieu999

 Target Server Type    : MySQL
 Target Server Version : 80027
 File Encoding         : 65001

 Date: 03/11/2022 17:48:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'Admin', 'khoa');
INSERT INTO `admin` VALUES (2, 'Admin', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- Table structure for nhanvien
-- ----------------------------
DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE `nhanvien`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `IDNV` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IDPB` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  UNIQUE INDEX `IDNV`(`IDNV` ASC) USING BTREE,
  INDEX `IDPB`(`IDPB` ASC) USING BTREE,
  CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`IDPB`) REFERENCES `phongban` (`IDPB`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 43 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of nhanvien
-- ----------------------------
INSERT INTO `nhanvien` VALUES (43, 'NV01', 'Nguyễn Văn Khoa', 'PB01', 'Đà Nẵng');
INSERT INTO `nhanvien` VALUES (48, 'NV02', 'Nguyễn Văn Hoàng', 'PB022', 'Quảng Trị');
INSERT INTO `nhanvien` VALUES (50, 'NV03', 'Ngô Tấn Dũng', 'PB03', 'Đà Nẵng');
INSERT INTO `nhanvien` VALUES (51, 'NV04', 'Huỳnh Thu Ngân', 'PB05', 'Đà Nẵng');
INSERT INTO `nhanvien` VALUES (52, 'NV05', 'Ngô Thị Hạnh', 'PB03', 'Huế');
INSERT INTO `nhanvien` VALUES (53, 'NV06', 'Trần Nhật Minh', 'PB05', 'Đà Nẵng');
INSERT INTO `nhanvien` VALUES (54, 'NV07', 'Phạm Tiến Hữu', 'PB04', 'Đà Nẵng');
INSERT INTO `nhanvien` VALUES (55, 'NV08', 'Huỳnh Thị Ly Ca', 'PB06', 'Hà Nội');
INSERT INTO `nhanvien` VALUES (56, 'NV10', 'Trần Quan Đại Bảo ', 'PB05', 'Thanh Hóa');
INSERT INTO `nhanvien` VALUES (57, 'NV11', 'Lê Tiến Đạt', 'PB022', 'Thanh Hóa');
INSERT INTO `nhanvien` VALUES (58, 'NV12', 'Ngô Thừa Thãi', 'PB02', 'TP HCM');
INSERT INTO `nhanvien` VALUES (59, 'NV13', 'Đặng Ngọc Khánh', 'PB03', 'Quảng Nam');
INSERT INTO `nhanvien` VALUES (60, 'NV007', 'Will Smith', 'PB03', 'US');
INSERT INTO `nhanvien` VALUES (62, 'NV14', 'Joji', 'PB02', 'Japan');

-- ----------------------------
-- Table structure for phongban
-- ----------------------------
DROP TABLE IF EXISTS `phongban`;
CREATE TABLE `phongban`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `IDPB` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenPB` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  UNIQUE INDEX `IDPB`(`IDPB` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 70 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of phongban
-- ----------------------------
INSERT INTO `phongban` VALUES (1, 'PB01', 'Phòng Admin', 'phong cho Admin');
INSERT INTO `phongban` VALUES (2, 'PB022', 'Phòng Thu Âm', 'phong thu am cho ca si');
INSERT INTO `phongban` VALUES (70, 'PB02', 'Phòng Chủ Tịch', 'Phòng Dành Cho Chủ Tịch ');
INSERT INTO `phongban` VALUES (71, 'PB03', 'Phòng Quản Lí Nhân Sự', 'Phòng Cho Nhân Viên Công Ty Quản Lý Nhân Sự');
INSERT INTO `phongban` VALUES (72, 'PB04', 'Phòng Ăn', 'Phòng Cho Ăn Uống Và Tổ Chức Tiệc Tùng');
INSERT INTO `phongban` VALUES (74, 'PB05', 'Phòng Tiếp Khách', 'Phòng Dành Cho Tiếp Khách (phụ huynh, khách quý...)');
INSERT INTO `phongban` VALUES (75, 'PB06', 'Phòng Hội Đồng Quản Trị', 'Phòng HĐQT');

SET FOREIGN_KEY_CHECKS = 1;
