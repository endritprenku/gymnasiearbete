/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : gymnasiearbete

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 11/04/2023 13:45:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `video` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Fallteknik', 'https://i.imgur.com/W78WHb7.png', 'https://www.youtube.com/embed/rBd0h-g59dg');
INSERT INTO `categories` VALUES (2, 'Inlägg', 'https://i.imgur.com/W78WHb7.png', 'https://www.youtube.com/embed/TJAfLE39ZZ8');
INSERT INTO `categories` VALUES (3, 'Greppteknik', 'https://i.imgur.com/W78WHb7.png', 'https://www.youtube.com/embed/rBd0h-g59dg');
INSERT INTO `categories` VALUES (4, 'Pulshöjande', 'https://i.imgur.com/W78WHb7.png', 'https://www.youtube.com/embed/TJAfLE39ZZ8');
INSERT INTO `categories` VALUES (5, 'Fötter', 'https://i.imgur.com/W78WHb7.png', 'https://www.youtube.com/embed/rBd0h-g59dg');
INSERT INTO `categories` VALUES (6, 'Utsparksteknik', 'https://i.imgur.com/W78WHb7.png', 'https://www.youtube.com/embed/TJAfLE39ZZ8');

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees`  (
  `full_name` varchar(900) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role` varchar(900) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role_description` varchar(900) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `picture` varchar(900) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `instagram` varchar(900) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES ('Endrit Prenku', 'Programmerare', 'Endrit är en mycket duktig programmerare med mångårig erfarenhet av att utveckla komplexa system och applikationer. Han är väl insatt i flera programmeringsspråk och har en stark förståelse för hur olika tekniker kan användas tillsammans för att skapa effektiva lösningar. Endrit är också känd för sin förmåga att förklara tekniska koncept på ett lättförståeligt sätt, vilket gör honom till en utmärkt mentor för mindre erfarna utvecklare. Han är alltid angelägen om att lära sig nya tekniker och metoder för att hålla sig uppdaterad med den senaste utvecklingen inom branschen.', 'https://www.informatique-mania.com/wp-content/uploads/2021/04/foto-sin-rostro-de-facebook-780x470.jpg', 'endritprenku');
INSERT INTO `employees` VALUES ('Filip Persson', 'Målvaktstränare', 'Filip är en duktig målvaktstränare på grund av hans breda erfarenhet och kunskap om positionen. Han har tränat målvakter på alla nivåer, från ungdomslag till professionella lag, och har en känsla för hur man ska utveckla individuella spelare. Han förstår vikten av att skapa en stark grund av grundläggande färdigheter, samtidigt som han också fokuserar på att utveckla mer avancerade tekniker och taktiker. Filip är också en mycket bra lärare och förstår hur man ska förklara svåra koncept på ett enkelt sätt, vilket gör det lättare för spelare att förstå och tillämpa det i matchsituationer. Han är också mycket bra på att analysera videomaterial och ger konstruktiv feedback till sina spelare för att hjälpa dem att förbättra sig. Dessutom är han en mycket engagerad och dedikerad tränare som alltid är villig att gå den extra milen för att hjälpa sina spelare att nå sina mål.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Edward_blom.melodifestivalen2018.18d873.1460307.jpg/250px-Edward_blom.melodifestivalen2018.18d873.1460307.jpg', 'fillepersson30');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_ip` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `subscription` enum('default','member','admin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'default',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username` ASC) USING BTREE,
  UNIQUE INDEX `id`(`id` ASC) USING BTREE,
  UNIQUE INDEX `id_2`(`id` ASC) USING BTREE,
  UNIQUE INDEX `id_3`(`id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Endrit', '$2y$10$aTF8pqEKFk.zmLxs8.vZ0Ole.7/dN9yVJ12P3Gam9aTCbsGnPMl/2', '::1', 'default');

SET FOREIGN_KEY_CHECKS = 1;
