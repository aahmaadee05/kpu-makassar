/*
 Navicat Premium Data Transfer

 Source Server         : Coding
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : 127.0.0.1:3306
 Source Schema         : pakar_gigi

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : 65001

 Date: 16/08/2018 07:39:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for gejala
-- ----------------------------
DROP TABLE IF EXISTS `gejala`;
CREATE TABLE `gejala`  (
  `id_gejala` int(10) NOT NULL AUTO_INCREMENT,
  `kd_gejala` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gejala` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_gejala`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 247 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gejala
-- ----------------------------
INSERT INTO `gejala` VALUES (219, 'G01', 'Bau mulut tak sedap');
INSERT INTO `gejala` VALUES (220, 'G02', 'Bintik putih pada gigi');
INSERT INTO `gejala` VALUES (221, 'G03', 'Demam');
INSERT INTO `gejala` VALUES (222, 'G04', 'Dentin terlihat');
INSERT INTO `gejala` VALUES (223, 'G05', 'Disertai rasa gatal');
INSERT INTO `gejala` VALUES (224, 'G06', 'Disertai sakit kepala');
INSERT INTO `gejala` VALUES (225, 'G07', 'Gigi berlubang');
INSERT INTO `gejala` VALUES (226, 'G08', 'Gigi keluar darah');
INSERT INTO `gejala` VALUES (227, 'G09', 'Gigi nyeri saat terkena rangsangan (panas atau dingin)');
INSERT INTO `gejala` VALUES (228, 'G10', 'Nyeri pada TMJ (Sendi temporo mandibuler)');
INSERT INTO `gejala` VALUES (229, 'G11', 'Gusi bengkak');
INSERT INTO `gejala` VALUES (230, 'G12', 'Gusi licin dan mengkilap');
INSERT INTO `gejala` VALUES (231, 'G13', 'Gusi merah muda');
INSERT INTO `gejala` VALUES (232, 'G14', 'Gusi mudah berdarah');
INSERT INTO `gejala` VALUES (233, 'G15', 'Infeksi pada kelenjar ludah');
INSERT INTO `gejala` VALUES (234, 'G16', 'Lubang sangat besar pada gigi');
INSERT INTO `gejala` VALUES (235, 'G17', 'Muncul benjolan kemerahan pada lubang gigi');
INSERT INTO `gejala` VALUES (236, 'G18', 'Nyeri saat berbaring');
INSERT INTO `gejala` VALUES (237, 'G19', 'Nyeri saat gigi tertekan makanan');
INSERT INTO `gejala` VALUES (238, 'G20', 'Nyeri saat mengunyah');
INSERT INTO `gejala` VALUES (239, 'G21', 'Pembusukan gigi');
INSERT INTO `gejala` VALUES (240, 'G22', 'Pulpa mati rasa');
INSERT INTO `gejala` VALUES (241, 'G23', 'Pulpa trinfeksi/radang pada pulpa');
INSERT INTO `gejala` VALUES (242, 'G24', 'Resesi gusi');
INSERT INTO `gejala` VALUES (243, 'G25', 'Sakit berdenyut tanpa rangsangan');
INSERT INTO `gejala` VALUES (244, 'G26', 'Terasa perih saat makan dan minum');
INSERT INTO `gejala` VALUES (245, 'G27', 'Terbentuk kantong antara gigi dan gusi');
INSERT INTO `gejala` VALUES (246, 'G28', 'Terdapat endapan plak');

-- ----------------------------
-- Table structure for hasil
-- ----------------------------
DROP TABLE IF EXISTS `hasil`;
CREATE TABLE `hasil`  (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(4) NOT NULL,
  `kd_penyakit` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cf` decimal(15, 2) NULL DEFAULT NULL,
  `tanggal` date NOT NULL,
  `gejala` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `waktu` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hasil
-- ----------------------------
INSERT INTO `hasil` VALUES (1, 2, 'P02', 0.50, '2018-08-11', '220,222,245', '2018-08-11 04:09:09');
INSERT INTO `hasil` VALUES (2, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 10:37:31');
INSERT INTO `hasil` VALUES (3, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 10:47:15');
INSERT INTO `hasil` VALUES (4, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 10:47:42');
INSERT INTO `hasil` VALUES (5, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 10:52:02');
INSERT INTO `hasil` VALUES (6, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 10:54:36');
INSERT INTO `hasil` VALUES (7, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:03:16');
INSERT INTO `hasil` VALUES (8, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:04:16');
INSERT INTO `hasil` VALUES (9, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:04:34');
INSERT INTO `hasil` VALUES (10, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:05:43');
INSERT INTO `hasil` VALUES (11, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:08:04');
INSERT INTO `hasil` VALUES (12, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:10:18');
INSERT INTO `hasil` VALUES (13, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:10:40');
INSERT INTO `hasil` VALUES (14, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:11:55');
INSERT INTO `hasil` VALUES (15, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:14:06');
INSERT INTO `hasil` VALUES (16, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:14:17');
INSERT INTO `hasil` VALUES (17, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:14:45');
INSERT INTO `hasil` VALUES (18, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:15:04');
INSERT INTO `hasil` VALUES (19, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:19:36');
INSERT INTO `hasil` VALUES (20, 29, 'P04', 0.15, '2018-08-15', '222,224,225,227,228,234,235,236,237,243,244,245', '2018-08-15 11:20:29');
INSERT INTO `hasil` VALUES (21, 29, 'P10', 0.34, '2018-08-15', '232,233,235,237,239,243,244', '2018-08-15 11:37:30');

-- ----------------------------
-- Table structure for penyakit
-- ----------------------------
DROP TABLE IF EXISTS `penyakit`;
CREATE TABLE `penyakit`  (
  `id_penyakit` int(10) NOT NULL AUTO_INCREMENT,
  `kd_penyakit` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_penyakit` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dosis` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gambar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_penyakit`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 108 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penyakit
-- ----------------------------
INSERT INTO `penyakit` VALUES (98, 'P01', 'Karies Superfisial', NULL, 'karies_superfisialis.jpg');
INSERT INTO `penyakit` VALUES (99, 'P02', 'Karies Media', NULL, 'karies_media.jpg');
INSERT INTO `penyakit` VALUES (100, 'P03', 'Karies Profunda', NULL, 'karies_profunda.jpg');
INSERT INTO `penyakit` VALUES (101, 'P04', 'Pulpitis Akut', NULL, 'pulpitis_akut.jpg');
INSERT INTO `penyakit` VALUES (102, 'P05', 'Pulpitis Kronis', NULL, 'pulpitis_kronis.jpg');
INSERT INTO `penyakit` VALUES (103, 'PO6', 'Periodontitis', NULL, 'periodontitis.jpg');
INSERT INTO `penyakit` VALUES (104, 'P07', 'Nekrosis Pulpa', NULL, 'nekrosis_pulpa.jpg');
INSERT INTO `penyakit` VALUES (105, 'P08', 'Gingivitis', NULL, 'gingivitas.jpg');
INSERT INTO `penyakit` VALUES (106, 'P09', 'Stomatitis', NULL, 'stomatitis.jpg');
INSERT INTO `penyakit` VALUES (107, 'P10', 'Abses Periodontal', NULL, 'abses_profuntal.jpg');

-- ----------------------------
-- Table structure for rule
-- ----------------------------
DROP TABLE IF EXISTS `rule`;
CREATE TABLE `rule`  (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kd_gejala` int(5) NOT NULL,
  `kd_penyakit` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mb` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `md` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 101 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rule
-- ----------------------------
INSERT INTO `rule` VALUES (7, 220, 'P01', '0.8', '0.2');
INSERT INTO `rule` VALUES (8, 225, 'P01', '0.2', '0.8');
INSERT INTO `rule` VALUES (9, 220, 'P02', '0.9', '0.1');
INSERT INTO `rule` VALUES (10, 222, 'P02', '0.6', '0.4');
INSERT INTO `rule` VALUES (11, 225, 'P02', '0.9', '0.1');
INSERT INTO `rule` VALUES (12, 219, 'P03', '0.8', '0.2');
INSERT INTO `rule` VALUES (13, 222, 'P03', '0.9', '0.1');
INSERT INTO `rule` VALUES (14, 225, 'P03', '0.9', '0.1');
INSERT INTO `rule` VALUES (15, 226, 'P03', '0.4', '0.6');
INSERT INTO `rule` VALUES (16, 227, 'P03', '0.9', '0.1');
INSERT INTO `rule` VALUES (17, 234, 'P03', '0.9', '0.1');
INSERT INTO `rule` VALUES (18, 238, 'P03', '0.8', '0.2');
INSERT INTO `rule` VALUES (19, 244, 'P03', '0.8', '0.2');
INSERT INTO `rule` VALUES (20, 219, 'P04', '0.8', '0.2');
INSERT INTO `rule` VALUES (21, 221, 'P04', '0.4', '0.6');
INSERT INTO `rule` VALUES (22, 224, 'P04', '0.8', '0.2');
INSERT INTO `rule` VALUES (23, 225, 'P04', '0.9', '0.1');
INSERT INTO `rule` VALUES (24, 226, 'P04', '0.6', '0.4');
INSERT INTO `rule` VALUES (25, 227, 'P04', '0.9', '0.1');
INSERT INTO `rule` VALUES (26, 228, 'P04', '0.4', '0.6');
INSERT INTO `rule` VALUES (27, 234, 'P04', '0.9', '0.1');
INSERT INTO `rule` VALUES (28, 235, 'P04', '0.8', '0.2');
INSERT INTO `rule` VALUES (29, 238, 'P04', '0.8', '0.2');
INSERT INTO `rule` VALUES (30, 241, 'P04', '0.9', '0.1');
INSERT INTO `rule` VALUES (31, 243, 'P04', '0.9', '0.1');
INSERT INTO `rule` VALUES (32, 244, 'P04', '0.9', '0.1');
INSERT INTO `rule` VALUES (33, 219, 'P05', '0.8', '0.2');
INSERT INTO `rule` VALUES (34, 225, 'P05', '0.9', '0.1');
INSERT INTO `rule` VALUES (35, 226, 'P05', '0.6', '0.4');
INSERT INTO `rule` VALUES (36, 227, 'P05', '0.8', '0.2');
INSERT INTO `rule` VALUES (37, 234, 'P05', '0.9', '0.1');
INSERT INTO `rule` VALUES (38, 235, 'P05', '0.6', '0.4');
INSERT INTO `rule` VALUES (39, 238, 'P05', '0.9', '0.1');
INSERT INTO `rule` VALUES (40, 241, 'P05', '0.8', '0.2');
INSERT INTO `rule` VALUES (41, 244, 'P05', '0.8', '0.2');
INSERT INTO `rule` VALUES (42, 219, 'PO6', '0.6', '0.4');
INSERT INTO `rule` VALUES (43, 221, 'PO6', '0.4', '0.6');
INSERT INTO `rule` VALUES (44, 224, 'PO6', '0.4', '0.6');
INSERT INTO `rule` VALUES (45, 225, 'PO6', '0.4', '0.6');
INSERT INTO `rule` VALUES (46, 226, 'PO6', '0.2', '0.8');
INSERT INTO `rule` VALUES (47, 227, 'PO6', '0.4', '0.6');
INSERT INTO `rule` VALUES (48, 228, 'PO6', '0.6', '0.4');
INSERT INTO `rule` VALUES (49, 231, 'PO6', '0.6', '0.4');
INSERT INTO `rule` VALUES (50, 237, 'PO6', '0.9', '0.1');
INSERT INTO `rule` VALUES (51, 238, 'PO6', '0.8', '0.2');
INSERT INTO `rule` VALUES (52, 244, 'PO6', '0.8', '0.2');
INSERT INTO `rule` VALUES (53, 219, 'P07', '0.9', '0.1');
INSERT INTO `rule` VALUES (56, 225, 'P07', '0.9', '0.1');
INSERT INTO `rule` VALUES (57, 226, 'P07', '0.8', '0.2');
INSERT INTO `rule` VALUES (58, 234, 'P07', '0.9', '0.1');
INSERT INTO `rule` VALUES (59, 239, 'P07', '0.9', '0.1');
INSERT INTO `rule` VALUES (60, 240, 'P07', '0.9', '0.1');
INSERT INTO `rule` VALUES (71, 219, 'P10', '0.8', '0.2');
INSERT INTO `rule` VALUES (72, 221, 'P10', '0.9', '0.1');
INSERT INTO `rule` VALUES (73, 223, 'P10', '0.8', '0.2');
INSERT INTO `rule` VALUES (74, 224, 'P10', '0.8', '0.2');
INSERT INTO `rule` VALUES (75, 225, 'P10', '0.6', '0.4');
INSERT INTO `rule` VALUES (76, 228, 'P10', '0.8', '0.2');
INSERT INTO `rule` VALUES (77, 229, 'P10', '0.9', '0.1');
INSERT INTO `rule` VALUES (78, 230, 'P10', '0.9', '0.1');
INSERT INTO `rule` VALUES (79, 232, 'P10', '0.9', '0.1');
INSERT INTO `rule` VALUES (80, 234, 'P10', '0.6', '0.4');
INSERT INTO `rule` VALUES (81, 235, 'P10', '0.6', '0.4');
INSERT INTO `rule` VALUES (82, 237, 'P10', '0.8', '0.2');
INSERT INTO `rule` VALUES (83, 238, 'P10', '0.9', '0.1');
INSERT INTO `rule` VALUES (84, 244, 'P10', '0.8', '0.2');
INSERT INTO `rule` VALUES (85, 245, 'P10', '0.9', '0.1');
INSERT INTO `rule` VALUES (86, 246, 'P10', '0.9', '0.1');
INSERT INTO `rule` VALUES (89, 219, 'P08', '0.6', '0.4');
INSERT INTO `rule` VALUES (91, 221, 'P08', '0.6', '0.4');
INSERT INTO `rule` VALUES (92, 223, 'P08', '0.8', '0.2');
INSERT INTO `rule` VALUES (93, 229, 'P08', '0.8', '0.2');
INSERT INTO `rule` VALUES (94, 230, 'P08', '0.9', '0.1');
INSERT INTO `rule` VALUES (95, 232, 'P08', '0.9', '0.1');
INSERT INTO `rule` VALUES (97, 238, 'P08', '0.6', '0.4');
INSERT INTO `rule` VALUES (98, 242, 'P08', '0.6', '0.4');
INSERT INTO `rule` VALUES (99, 246, 'P08', '0.9', '0.1');
INSERT INTO `rule` VALUES (100, 244, 'P09', '0.8', '0.2');

-- ----------------------------
-- Table structure for solusi
-- ----------------------------
DROP TABLE IF EXISTS `solusi`;
CREATE TABLE `solusi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_penyakit` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `defenisi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `solusi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of solusi
-- ----------------------------
INSERT INTO `solusi` VALUES (4, '98', 'Karies yang sudah mencapai bagian dalam dari email dan kadang-kadang terasa sakit', '<li>Sikat gigi 2 kali, dipagi hari setelah makan dan dimalam hari sebelum tidur. Proses menyikat gigi usahakan minimal 4 menit. Menyikat gigi harus dibuat gerakan melingkar, atau lakukan gerakan agar keluar dari gusi ke tepi gigi. Gunakan sikat gigi yang lembut dan ganti setiap 3 – 4 bulan</li>\r\n<li> Lakukan penambalan yang hanya dapat dilakukan oleh dokter</li>\r\n<li>Konsumsi obat analgetik jika diperlukan namun dengan anjuran pakai dari apoteker tempat anda membeli obat, jangan lupa dipastikan terlebih dahulu tidak ada riwayat alergi penggunaan obat-obatan</li>\r\n<li>Lebih lanjut, konsultasikan dengan dokter untuk solusi terbaik masalah anda</li>');
INSERT INTO `solusi` VALUES (5, '99', 'karies yang sudah mencapai bagian dentin (tulang gigi) atau bagian pertengahan antara permukaan gigi dan kamar pulpa. Gigi biasanya terasa sakit bila terkena rangsangan dingin, makanan asam dan manis', '<li>Sikat gigi 2 kali, dipagi hari setelah makan dan dimalam hari sebelum tidur. Proses menyikat gigi usahakan minimal 4 menit. Menyikat gigi harus dibuat gerakan melingkar, atau lakukan gerakan agar keluar dari gusi ke tepi gigi. Gunakan sikat gigi yang lembut dan ganti setiap 3 – 4 bulan</li>  \r\n<li>Lakukan penambalan yang hanya dapat dilakukan oleh dokter</li>  \r\n<li>Lebih lanjut, konsultasikan dengan dokter untuk solusi terbaik masalah anda</li>  \r\n');
INSERT INTO `solusi` VALUES (6, '100', 'karies yang telah mendekati atau bahkan telah mencapai pulpa sehingga terjadi peradangan pada pulpa. Biasanya terasa sakit secara tiba-tiba tanpa rangsangan apapun. Apabila tidak segera diobati dan ditambal maka gigi akan mati, dan untuk perawatan selanjutnya akan lebih lama dibandingkan pada karies-karies lainnya', '<li> Sikat gigi 2 kali, dipagi hari setelah makan dan dimalam hari sebelum tidur. Proses menyikat gigi usahakan minimal 4 menit. Menyikat gigi harus dibuat gerakan melingkar, atau lakukan gerakan agar keluar dari gusi ke tepi gigi. Gunakan sikat gigi yang lembut dan ganti setiap 3 – 4 bulan</li>\r\n<li> Lakukan penambalan, Perawatan saluran akar dan pembersihan karang gigi</li>\r\n<li> Konsumsi obat analgetik jika diperlukan namun dengan anjuran pakai dari apoteker tempat anda membeli obat, jangan lupa dipastikan terlebih dahulu tidak ada riwayat alergi penggunaan obat-obatan</li>\r\n<li> Lebih lanjut, konsultasikan dengan dokter untuk solusi terbaik masalah anda</li>\r\n');
INSERT INTO `solusi` VALUES (7, '101', 'Karies gigi yang berpenetrasi melewati email dan dentin, kemudian mencapai pulpa', '<li> Sikat gigi 2 kali, dipagi hari setelah makan dan dimalam hari sebelum tidur. Proses menyikat gigi usahakan minimal 4 menit. Menyikat gigi harus dibuat gerakan melingkar, atau lakukan gerakan agar keluar dari gusi ke tepi gigi. Gunakan sikat gigi yang lembut dan ganti setiap 3 – 4 bulan</li>\r\n<li> Perawatan saluran akar dan pembersihan karang gigi</li>\r\n<li> Istirahat yang cukup</li>\r\n<li> Konsumsi obat antibiotik dan analgetik jika diperlukan namun dengan anjuran pakai dari apoteker tempat anda membeli obat, jangan lupa dipastikan terlebih dahulu tidak ada riwayat alergi penggunaan obat-obatan</li>\r\n<li> Lebih lanjut, konsultasikan dengan dokter untuk solusi terbaik masalah anda</li>');
INSERT INTO `solusi` VALUES (8, '102', 'Lanjutan dari pulpitis akut', '<li>  Sikat gigi 2 kali, dipagi hari setelah makan dan dimalam hari sebelum tidur. Proses menyikat gigi usahakan minimal 4 menit. Menyikat gigi harus dibuat gerakan melingkar, atau lakukan gerakan agar keluar dari gusi ke tepi gigi. Gunakan sikat gigi yang lembut dan ganti setiap 3 – 4 bulan</li>\r\n<li>  Perawatan saluran akar dan pembersihan karang gigi</li>\r\n<li>  Istirahat yang cukup</li>\r\n<li>  Konsumsi obat antibiotik dan analgetik jika diperlukan namun dengan anjuran pakai dari apoteker tempat anda membeli obat, jangan lupa dipastikan terlebih dahulu tidak ada riwayat alergi penggunaan obat-obatan</li>\r\n<li>  Lebih lanjut, konsultasikan dengan dokter untuk solusi terbaik masalah anda</li>\r\n');
INSERT INTO `solusi` VALUES (9, '103', 'Peradangan dari jaringan penyangga gigi yang meliputi gingiva, serabut-serabut  periodontal, sementum dan tulang alveolar sebagai akibat lanjut dari gingivitis yang tidak dirawat', '<li>  Sikat gigi 2 kali, dipagi hari setelah makan dan dimalam hari sebelum tidur. Proses menyikat gigi usahakan minimal 4 menit. Menyikat gigi harus dibuat gerakan melingkar, atau lakukan gerakan agar keluar dari gusi ke tepi gigi. Gunakan sikat gigi yang lembut dan ganti setiap 3 – 4 bulan</li>\r\n<li>  Pertimbangkan untuk menggunakan sikat gigi elektrik, yang dapat lebih efektif dalam mengangkat plak dan karang</li>\r\n<li>  Pembersihan karang gigi. Gunakan obat kumur untuk membantu mengurangi plak di antara gigi</li>\r\n<li>  Lengkapi dengan pembersih antara gigi, seperti tusuk gigi, sikat interdental yang dirancang khusus untuk membersihkan sela-sela gigi</li>\r\n<li>  Pencabutan gigi bila diperlukan</li>\r\n<li>  Konsumsi obat antibiotic dan analgetik jika diperlukan namun dengan anjuran pakai dari apoteker tempat anda membeli obat, jangan lupa dipastikan terlebih dahulu tidak ada riwayat alergi penggunaan obat-obatan</li>\r\n<li>  Lebih lanjut, konsultasikan dengan dokter untuk solusi terbaik masalah anda</li>\r\n');
INSERT INTO `solusi` VALUES (10, '104', 'Kematian pulpa yang dapat diakibatkan oleh pulpitis ireversibel yang tidak dirawat atau terjadi trauma yang dapat mengganggu suplai darah ke pulpa', '<li>  Sikat gigi 2 kali, dipagi hari setelah makan dan dimalam hari sebelum tidur. Proses menyikat gigi usahakan minimal 4 menit. Menyikat gigi harus dibuat gerakan melingkar, atau lakukan gerakan agar keluar dari gusi ke tepi gigi. Gunakan sikat gigi yang lembut dan ganti setiap 3 – 4 bulan</li>\r\n<li>  Pertimbangkan untuk menggunakan sikat gigi elektrik, yang dapat lebih efektif dalam mengangkat plak dan karang</li>\r\n<li>  Pembersihan karang gigi. Gunakan obat kumur untuk membantu mengurangi plak di antara gigi</li>\r\n<li>  Lengkapi dengan pembersih antara gigi, seperti tusuk gigi, sikat interdental yang dirancang khusus untuk membersihkan sela-sela gigi</li>\r\n<li>  Pencabutan gigi bila diperlukan</li>\r\n<li>  Konsumsi obat antibiotic dan analgetik jika diperlukan namun dengan anjuran pakai dari apoteker tempat anda membeli obat, jangan lupa dipastikan terlebih dahulu tidak ada riwayat alergi penggunaan obat-obatan</li>\r\n<li>  Lebih lanjut, konsultasikan dengan dokter untuk solusi terbaik masalah anda</li>');
INSERT INTO `solusi` VALUES (11, '105', 'Salah satu jenis penyakit gusi yang menyebabkan iritasi, kemerahan, dan pembengkakan pada gusi', '<li>  Sikat gigi 2 kali, dipagi hari setelah makan dan dimalam hari sebelum tidur. Proses menyikat gigi usahakan minimal 4 menit. Menyikat gigi harus dibuat gerakan melingkar, atau lakukan gerakan agar keluar dari gusi ke tepi gigi. Gunakan sikat gigi yang lembut dan ganti setiap 3 – 4 bulan</li>\r\n<li>  Pertimbangkan untuk menggunakan sikat gigi elektrik, yang dapat lebih efektif dalam mengangkat plak dan karang</li>\r\n<li>  Pembersihan karang gigi. Gunakan obat kumur untuk membantu mengurangi plak di antara gigi</li>\r\n<li>  Lengkapi dengan pembersih antara gigi, seperti tusuk gigi, sikat interdental yang dirancang khusus untuk membersihkan sela-sela gigi</li>\r\n<li>  Pencabutan gigi bila diperlukan</li>\r\n<li>  Konsumsi obat analgetik jika diperlukan namun dengan anjuran pakai dari apoteker tempat anda membeli obat, jangan lupa dipastikan terlebih dahulu tidak ada riwayat alergi penggunaan obat-obatan dan gunakan obat kumur</li>\r\n<li>  Lebih lanjut, konsultasikan dengan dokter untuk solusi terbaik masalah anda</li>');
INSERT INTO `solusi` VALUES (12, '106', 'Suatu kelainan pada selaput lendir mulut berupaluka pada mulut yang berbentuk bercak berwarna putih kekuningan dengan permukaan agak cekung. Munculnya Seriawan ini disertai rasa sakit yang tinggi', '<li>  Kumur mulut Anda. Gunakan air garam atau larutan baking soda (larutkan 1 sendok teh baking soda dalam ½ cup air hangat)</li>\r\n<li>  Oleskan sedikit susu magnesia pada sariawan beberapa kali sehari</li>\r\n<li>  Hindari makanan yang kasar, asam atau pedas yang dapat memperparah iritasi dan rasa sakit</li>\r\n<li>  Letakan es pada sariawan dengan membiarkan es meleleh di bagian luka</li>\r\n<li>  Sikat gigi dengan lembut, menggunakan sikat yang lembut dan pasta gigi bebas agen busa seperti Biotene atau Sensodyne ProNamel</li>\r\n<li>  Konsumsi salep sariawan dan obat kumur</li>\r\n<li>  Lebih lanjut, konsultasikan dengan dokter untuk solusi terbaik masalah anda</li>\r\n');
INSERT INTO `solusi` VALUES (13, '107', 'Suatu infeksi yang terletak di sekitar poket periodontal serta dapat mengakibatkan kerusakan ligamentum periodontal dan tulang alveolar', '<li>  Kompres dingin dapat diterapkan ke tempat cedera. Ini akan membantu menghilangkan sindrom nyeri</li>\r\n<li>  Yang terbaik adalah tidak makan makanan padat. Dan perlu untuk memonitor suhunya. Hidangan terlalu dingin atau panas berkontribusi pada intensifikasi rasa sakit</li>\r\n<li>  Perlu minum lebih banyak cairan. Dalam hal ini, air sederhana atau air mineral digunakan</li>\r\n<li>  Tidak mungkin memanaskan area yang terkena dalam hal apapun, karena ini hanya akan meningkatkan proses inflamasi.</li>\r\n<li>  Konsumsi obat antibiotic dan antiinflamasi jika diperlukan namun dengan anjuran pakai dari apoteker tempat anda membeli obat, jangan lupa dipastikan terlebih dahulu tidak ada riwayat alergi penggunaan obat-obatan</li>\r\n<li>  Lebih lanjut, konsultasikan dengan dokter untuk solusi terbaik masalah anda</li>');

-- ----------------------------
-- Table structure for tmp_gejala
-- ----------------------------
DROP TABLE IF EXISTS `tmp_gejala`;
CREATE TABLE `tmp_gejala`  (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_penyakit` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_gejala` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 296 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tmp_gejala
-- ----------------------------
INSERT INTO `tmp_gejala` VALUES (289, NULL, '232');
INSERT INTO `tmp_gejala` VALUES (290, NULL, '233');
INSERT INTO `tmp_gejala` VALUES (291, NULL, '235');
INSERT INTO `tmp_gejala` VALUES (292, NULL, '237');
INSERT INTO `tmp_gejala` VALUES (293, NULL, '239');
INSERT INTO `tmp_gejala` VALUES (294, NULL, '243');
INSERT INTO `tmp_gejala` VALUES (295, NULL, '244');

-- ----------------------------
-- Table structure for tmp_penyakit
-- ----------------------------
DROP TABLE IF EXISTS `tmp_penyakit`;
CREATE TABLE `tmp_penyakit`  (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kd_penyakit` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cf` decimal(15, 2) NULL DEFAULT NULL,
  `jml_gejala` int(3) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1800 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tmp_penyakit
-- ----------------------------
INSERT INTO `tmp_penyakit` VALUES (1790, 'P01', 0.00, 0);
INSERT INTO `tmp_penyakit` VALUES (1791, 'P02', 0.00, 0);
INSERT INTO `tmp_penyakit` VALUES (1792, 'P03', 0.60, 1);
INSERT INTO `tmp_penyakit` VALUES (1793, 'P04', 0.65, 3);
INSERT INTO `tmp_penyakit` VALUES (1794, 'P05', 0.40, 2);
INSERT INTO `tmp_penyakit` VALUES (1795, 'PO6', 0.70, 2);
INSERT INTO `tmp_penyakit` VALUES (1796, 'P07', 0.80, 1);
INSERT INTO `tmp_penyakit` VALUES (1797, 'P08', 0.80, 1);
INSERT INTO `tmp_penyakit` VALUES (1798, 'P09', 0.60, 1);
INSERT INTO `tmp_penyakit` VALUES (1799, 'P10', 0.34, 4);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jk` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telp` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `level` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `aktif` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 49 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, '-', 'admin', NULL, NULL, NULL, 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '0');
INSERT INTO `users` VALUES (28, '0987654321', 'Nur Indah Sari', NULL, NULL, NULL, 'indah@gmail.com', 'indah', 'f3385c508ce54d577fd205a1b2ecdfb7', 'Pasien', '1');
INSERT INTO `users` VALUES (29, '098765432', 'Dina', '-', '1', '1', '1@1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 'User', '1');
INSERT INTO `users` VALUES (48, NULL, '2', 'L', '2', '2', '2@2', '2', 'c81e728d9d4c2f636f067f89cc14862c', 'User', '1');

SET FOREIGN_KEY_CHECKS = 1;
