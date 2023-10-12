/*
 Navicat Premium Data Transfer

 Source Server         : root
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : 10

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 09/06/2022 15:22:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for assign_supir
-- ----------------------------
DROP TABLE IF EXISTS `assign_supir`;
CREATE TABLE `assign_supir`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `supir_id` bigint(20) NOT NULL,
  `pesanan_id` bigint(20) NOT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of assign_supir
-- ----------------------------
INSERT INTO `assign_supir` VALUES (1, 8, 1, 'ditolak oleh sopir', 'gabisa');
INSERT INTO `assign_supir` VALUES (2, 6, 1, 'diterima oleh sopir', NULL);

-- ----------------------------
-- Table structure for cars
-- ----------------------------
DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `merk_mobil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nama_mobil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_polisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gambar_mobil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `harga_sewa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bahan_bakar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status_mobil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '0',
  `tahun_pembuatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tenaga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `warna_mobil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kapasitas_penumpang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `fasilitas` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cars
-- ----------------------------
INSERT INTO `cars` VALUES (1, 'honda', 'civic', 'b481kqw', 'hrIHFfYoQHdeaOBqQwlr2mHuFeNnnco8zeP7s8hY.jpg', '210000', 'bensin', 'Sed pellentesque sem sit amet interdum rhoncus. Nam cursus lorem sit amet sapien accumsan vestibulum. Etiam at tristique tellus. Quisque rhoncus ipsum nunc, at vestibulum tellus malesuada eget. In elementum libero sed consectetur posuere. Donec posuere tortor sit amet ante consectetur ultrices. Nulla quis urna gravida, pharetra velit sit amet, consectetur tellus. Aliquam nec semper ante, id luctus neque. Donec commodo eleifend mi, id elementum tortor tempus quis. Sed consectetur justo et nulla pulvinar, sed blandit ex malesuada.', '0', '2019', '180 hp', 'putih', '5', 'gada', '2022-06-08 10:29:44', '2022-06-08 10:29:44');
INSERT INTO `cars` VALUES (2, 'honda', 'jazz', 'b47890pza', 'J5j7BCDHPGPTPxr1MJtSqHUfnNJni8vwp7SbKMTk.jpg', '180000', 'bensin', 'Sed pellentesque sem sit amet interdum rhoncus. Nam cursus lorem sit amet sapien accumsan vestibulum. Etiam at tristique tellus. Quisque rhoncus ipsum nunc, at vestibulum tellus malesuada eget. In elementum libero sed consectetur posuere. Donec posuere tortor sit amet ante consectetur ultrices. Nulla quis urna gravida, pharetra velit sit amet, consectetur tellus. Aliquam nec semper ante, id luctus neque. Donec commodo eleifend mi, id elementum tortor tempus quis. Sed consectetur justo et nulla pulvinar, sed blandit ex malesuada.', '0', '2017', '160hp', 'biru', '5', 'g', '2022-06-08 10:36:00', '2022-06-08 10:36:00');
INSERT INTO `cars` VALUES (3, 'honda', 'estilo', 'b1237la', 'MSVOHy75fK8svmbAZ6IklwvX7TbAHXhvyO2ou916.jpg', '550000', 'solar', 'Sed pellentesque sem sit amet interdum rhoncus. Nam cursus lorem sit amet sapien accumsan vestibulum. Etiam at tristique tellus. Quisque rhoncus ipsum nunc, at vestibulum tellus malesuada eget. In elementum libero sed consectetur posuere. Donec posuere tortor sit amet ante consectetur ultrices. Nulla quis urna gravida, pharetra velit sit amet, consectetur tellus. Aliquam nec semper ante, id luctus neque. Donec commodo eleifend mi, id elementum tortor tempus quis. Sed consectetur justo et nulla pulvinar, sed blandit ex malesuada.', '0', '2007', '215 hp', 'putih', '5', 'g', '2022-06-08 10:37:13', '2022-06-08 10:37:13');
INSERT INTO `cars` VALUES (4, 'vw', 'scirocco', 'b1237laww', 'rVADoNXVgr5kGbVCu9OxSEcCePYqwqg9aIekSxuV.webp', '850000', 'bensin', 'Sed pellentesque sem sit amet interdum rhoncus. Nam cursus lorem sit amet sapien accumsan vestibulum. Etiam at tristique tellus. Quisque rhoncus ipsum nunc, at vestibulum tellus malesuada eget. In elementum libero sed consectetur posuere. Donec posuere tortor sit amet ante consectetur ultrices. Nulla quis urna gravida, pharetra velit sit amet, consectetur tellus. Aliquam nec semper ante, id luctus neque. Donec commodo eleifend mi, id elementum tortor tempus quis. Sed consectetur justo et nulla pulvinar, sed blandit ex malesuada.', '0', '2007', '215 hp', 'putih', '5', 'g', '2022-06-08 10:38:23', '2022-06-08 10:38:23');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2021_05_03_061918_create_role_type_users_table', 1);
INSERT INTO `migrations` VALUES (6, '2021_11_04_095829_create_cars_table', 1);
INSERT INTO `migrations` VALUES (7, '2021_11_04_095948_create_pesanan_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_05_05_155652_create__supir_table', 1);
INSERT INTO `migrations` VALUES (9, '2022_05_06_040414_create_operator_table', 1);

-- ----------------------------
-- Table structure for operator
-- ----------------------------
DROP TABLE IF EXISTS `operator`;
CREATE TABLE `operator`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl_masuk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of operator
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for pesanan
-- ----------------------------
DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `cars_id` bigint(20) NOT NULL,
  `supir_id` bigint(20) NULL DEFAULT NULL,
  `no_pesanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `denda` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jaminan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewa_supir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_transfer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `foto_jaminan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_peminjaman` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pesanan
-- ----------------------------
INSERT INTO `pesanan` VALUES (1, 4, 2, 6, 'B-1654698504080622', '2022-06-09', '2022-06-11', '0', 'ktp', '2', NULL, 'Fy52qebcryKjLBzhBWmBNKs38oTjEgGGMiKGuHwi.pdf', '4xdLaupnPKeJgrestMkCNVg8n7FnV2Y8sHWAHiAS.png', '1', '2', '2022-06-08 07:28:24', '2022-06-08 07:32:10');

-- ----------------------------
-- Table structure for role_type_users
-- ----------------------------
DROP TABLE IF EXISTS `role_type_users`;
CREATE TABLE `role_type_users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_type_users
-- ----------------------------
INSERT INTO `role_type_users` VALUES (1, 'Admin', NULL, NULL);
INSERT INTO `role_type_users` VALUES (2, 'Operator', NULL, NULL);
INSERT INTO `role_type_users` VALUES (3, 'Penyewa', NULL, NULL);
INSERT INTO `role_type_users` VALUES (4, 'Supir', NULL, NULL);

-- ----------------------------
-- Table structure for supir
-- ----------------------------
DROP TABLE IF EXISTS `supir`;
CREATE TABLE `supir`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of supir
-- ----------------------------
INSERT INTO `supir` VALUES (1, 'Andi Tambun', '21', 'andi2@gmail.com', 'Laki', '082938922', 'jalan gunung', '20 02 2002', '2022-06-07 04:47:37', '2022-06-07 04:47:37');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `role_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_telephone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Badang', 'Badang', 'natanaeltambun9@gmail.com', NULL, '$2y$10$Q.OPr31SHL3ZL2ix7kUXJeYPL4tU8nRf/Uw9lMKYNpX4cPd3cZhg2', '1', 'Operator', 'Silombu', '085216250314', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (2, 'Gabriel', 'Gabriel Baringbing', 'gabriel12@gmail.com', NULL, '$2y$10$4OiZeIUEJYX0hyMlkWeUdOq92tJGo6MXyC7grFniX/SqjIAPb5kf2', '2', 'Admin', 'Silombu', '085216250314', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (3, 'Andi', 'Andi Tambun', 'andi2@gmail.com', NULL, '$2y$10$x8lyvu/vPtCqYqU9/hrb9e32RgEcM2NOht2o8FVCqCxHrg5QDYkoy', '3', 'Supir', 'Silombu', '085216250314', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (4, 'anonymous', 'orang', 'anonymous@anon.com', NULL, '$2y$10$HatVtlLGs5BMdDO5EKizNu4XSWVsu9hUwr0ck85HH0IiuEPhFI0Bu', '0', 'Penyewa', 'jalanan', '089651147065', NULL, NULL, NULL, NULL, NULL, '2022-06-07 02:58:26', '2022-06-07 02:58:26');
INSERT INTO `users` VALUES (5, 'Risky Siahaan', 'Anonymous', 'dimasvgpew@gmail.com', NULL, '$2y$10$wvile2ddhYsMQ8rn1qNceuSqhtxH5thXAAeZFpFcYy/NzzlrBltpG', '0', 'Penyewa', 'jalanan', '029301829392', NULL, NULL, NULL, NULL, NULL, '2022-06-07 03:24:07', '2022-06-07 03:24:07');
INSERT INTO `users` VALUES (6, 'Anto', 'Anto ajah', 'anto@gmail.com', NULL, '$2y$10$x8lyvu/vPtCqYqU9/hrb9e32RgEcM2NOht2o8FVCqCxHrg5QDYkoy', '3', 'Supir', 'Silombu', '085216250312', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (7, 'Anjur', 'Anjur ajah', 'anjur@gmail.com', NULL, '$2y$10$x8lyvu/vPtCqYqU9/hrb9e32RgEcM2NOht2o8FVCqCxHrg5QDYkoy', '3', 'Supir', 'Silombu', '081216250312', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (8, 'Agung', 'Agung ajah', 'agung@gmail.com', NULL, '$2y$10$x8lyvu/vPtCqYqU9/hrb9e32RgEcM2NOht2o8FVCqCxHrg5QDYkoy', '3', 'Supir', 'Silombu', '081316250312', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (9, 'orang12345', 'Anonymous', 'anonymous123@anon.com', NULL, '$2y$10$rXRKtKh.ncEj8wO1nj3eV.Q/SGoOj1EIFIWnnPzgm/lHI8ZsiCT9m', '3', 'Penyewa', 'jalanan', '0829398293', NULL, NULL, NULL, NULL, NULL, '2022-06-08 07:37:48', '2022-06-08 07:37:48');
INSERT INTO `users` VALUES (10, 'kol12345', 'anon', 'sitesa@gmail.com', NULL, '$2y$10$cAavegUBODMnxOvYqiy/wei/gPyVPbf2V8nkcSEkHDkFI/ZniK0zK', '3', 'Penyewa', 'jalanan', '0823823', NULL, NULL, NULL, NULL, NULL, '2022-06-08 07:38:18', '2022-06-08 07:38:18');
INSERT INTO `users` VALUES (11, 'havel', 'bapakmu', 'havel@gmail.com', NULL, '$2y$10$n72EMqVyRGhVTDPtxNU8/u8JCddnEp5uRD5tH9YiKilhD1.9gmcRa', '3', 'Operator', 'asasfa', '08124124124', NULL, NULL, NULL, NULL, NULL, '2022-06-08 10:17:01', '2022-06-08 10:17:01');

SET FOREIGN_KEY_CHECKS = 1;
