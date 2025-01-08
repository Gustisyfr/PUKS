-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for puks
CREATE DATABASE IF NOT EXISTS `puks` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `puks`;

-- Dumping structure for table puks.kegiatan
CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table puks.kegiatan: ~4 rows (approximately)
INSERT INTO `kegiatan` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
	(3, 'Lorem Ipsum', 'lorem ipsum dolor sit amet', 'rx-7 yellow.jpeg'),
	(5, 'Lorem Ipsum 3', 'Lorem Ipsum dolor sit amet', 'kuning lemon.jpg'),
	(7, 'Lorem Ipsum 2', 'lorem ipsum dolor sit amet ', 'Mazda RX7.jpg'),
	(13, 'judul', 'lorem ipusum dolor sit amet', 'background login 1.png');

-- Dumping structure for table puks.levels
CREATE TABLE IF NOT EXISTS `levels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `level_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table puks.levels: ~3 rows (approximately)
INSERT INTO `levels` (`id`, `level_name`) VALUES
	(1, 'superadmin'),
	(2, 'admin'),
	(3, 'user');

-- Dumping structure for table puks.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table puks.migrations: ~1 rows (approximately)
INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
	(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1733264950, 1);

-- Dumping structure for table puks.statusr
CREATE TABLE IF NOT EXISTS `statusr` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomor_registrasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_mitra` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_mitra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bentuk_kerjasama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bentuk_dukungan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bentuk_dukungan_opsional` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_rekomendasi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `catatan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `file_memo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='\r\n';

-- Dumping data for table puks.statusr: ~11 rows (approximately)
INSERT INTO `statusr` (`id`, `nomor_registrasi`, `nama_mitra`, `jenis_mitra`, `bentuk_kerjasama`, `bentuk_dukungan`, `bentuk_dukungan_opsional`, `status_rekomendasi`, `catatan`, `file_memo`) VALUES
	(56, 'KALROREN2024120323E1D5', 'Lorem Ipsum', 'Ormas/LSM', 'Nota Kesepahaman', 'Dukungan Manajemen', NULL, 'Direkomendasikan', NULL, '912-P05.pdf'),
	(57, 'KALROREN202412039E9E2A', 'Lorem Ipsum 1', 'Kementrian/Lembaga', 'Perjanjian Kerjasama', 'Pengawasan dan Pengendalian Pesisir dan Pulau-Pulau Kecil', NULL, 'Direkomendasikan', '', '153-P04.pdf'),
	(58, 'KALROREN202412036B9C74', 'Lorem Ipsum 2', 'Universitas/Perguruan Tinggi', 'Kesepakatan Bersama', 'Pengelolaan Sampah Plastik di Laut', NULL, 'Direkomendasikan', '', '153-P09.pdf'),
	(59, 'KALROREN2024120356204B', 'Lorem Ipsum 3', 'Kementrian/Lembaga', 'Nota Kesepakatan', 'Dukungan Manajemen', NULL, 'Direkomendasikan', '', '153-P10.pdf'),
	(60, 'KALROREN2024120397A075', 'Lorem Ipsum 4', 'Universitas/Perguruan Tinggi', 'Memorandum Saling Pengertian', 'Dukungan Manajemen', NULL, 'Direkomendasikan', '', '153-P06.pdf'),
	(61, 'KALROREN202412033F0928', 'Lorem Ipsum 5', 'Kementrian/Lembaga', 'Lain-lain', 'Dukungan Manajemen', NULL, 'Direkomendasikan', '', '153-P07.pdf'),
	(62, 'KALROREN202412059E0463', 'testing', 'Kementrian/Lembaga', 'Lain-lain', 'Dukungan Manajemen', NULL, 'Direkomendasikan', '', '916-P06.pdf'),
	(63, 'KALROREN20241206EC4160', 'lorem Ipsum 6', 'Pemerintah Daerah', 'Kesepakatan Bersama', 'Pengembangan Budidaya Laut, Pesisir dan Darat Secara Berkelanjutan', NULL, 'Direkomendasikan', '', '240-P06.pdf'),
	(64, 'KALROREN20241206FDE9C2', 'Lorem Ipsum 7', 'Badan Usaha Milik Negara', 'Lain-lain', 'Dukungan Manajemen', NULL, 'Direkomendasikan', '', '240-P05.pdf'),
	(66, 'KALROREN20241206B3620D', 'Lorem Ipsum 8', 'Swasta', 'Nota Kesepahaman', 'Pengawasan dan Pengendalian Pesisir dan Pulau-Pulau Kecil', NULL, 'Direkomendasikan', '', '240-P07.pdf'),
	(67, 'KALROREN202412098C09A2', 'testing', 'Pemerintah Daerah', 'Nota Kesepahaman', 'Perluasan Kawasan Konservasi Laut', '', 'Direkomendasikan', '', '207-P09.pdf');

-- Dumping structure for table puks.statusvd
CREATE TABLE IF NOT EXISTS `statusvd` (
  `id` int NOT NULL AUTO_INCREMENT,
  `unit_organisasi` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `satker_upt_1` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `satker_upt_2` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `satker_upt_3` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `satker_upt_4` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `satker_upt_5` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `satker_upt_6` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `satker_upt_7` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `satker_upt_8` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `satker_upt_9` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_mitra` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_mitra` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bentuk_kerjasama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kerjasama_lain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bentuk_dukungan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bentuk_dukungan_opsional` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_verifikasi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uraian` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `surat_permohonan` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_mitra` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `draft_kerjasama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sk_kumham` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `surat_komitmen` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table puks.statusvd: ~11 rows (approximately)
INSERT INTO `statusvd` (`id`, `unit_organisasi`, `satker_upt_1`, `satker_upt_2`, `satker_upt_3`, `satker_upt_4`, `satker_upt_5`, `satker_upt_6`, `satker_upt_7`, `satker_upt_8`, `satker_upt_9`, `jenis_mitra`, `nama_mitra`, `bentuk_kerjasama`, `kerjasama_lain`, `bentuk_dukungan`, `bentuk_dukungan_opsional`, `status_verifikasi`, `uraian`, `surat_permohonan`, `profil_mitra`, `draft_kerjasama`, `sk_kumham`, `surat_komitmen`) VALUES
	(101, 'Sekretariat Jendral', 'Biro Perencanaan', '', '', '', '', '', '', '', '', 'Ormas/LSM', 'Lorem Ipsum', 'Nota Kesepahaman', '', 'Dukungan Manajemen', NULL, 'Terverifikasi', '', '912-P07.pdf', '912-P05.pdf', '912-P03.pdf', '912-P02.pdf', '912-P03.pdf'),
	(102, 'Sekretariat Jendral', 'Biro Perencanaan', '', '', '', '', '', '', '', '', 'Kementrian/Lembaga', 'Lorem Ipsum 1', 'Perjanjian Kerjasama', '', 'Pengawasan dan Pengendalian Pesisir dan Pulau-Pulau Kecil', NULL, 'Terverifikasi', '', '153-P03.pdf', '', '153-P06.pdf', '', ''),
	(103, 'Direktorat Jenderal Penguatan Daya Saing Produk Kelautan dan Perikanan', '', '', '', '', 'Direktorat Pengolahan', '', '', '', '', 'Universitas/Perguruan Tinggi', 'Lorem Ipsum 2', 'Kesepakatan Bersama', '', 'Pengelolaan Sampah Plastik di Laut', NULL, 'Terverifikasi', '', '153-P11.pdf', '153-P09.pdf', '153-P05.pdf', '', ''),
	(104, 'Inspektorat Jenderal', '', '', '', '', '', '', 'Inspektorat II', '', '', 'Kementrian/Lembaga', 'Lorem Ipsum 3', 'Nota Kesepakatan', '', 'Dukungan Manajemen', NULL, 'Terverifikasi', 'lorem ipsum', '153-P05.pdf', '', '153-P01.pdf', '', ''),
	(105, 'Direktorat Jenderal Pengawasan Sumber Daya Kelautan dan Perikanan', '', '', '', '', '', 'Pangkalan Pengawasan Sumber Daya Kelautan dan Perikanan(PPSDKP) Lampulo', '', '', '', 'Universitas/Perguruan Tinggi', 'Lorem Ipsum 4', 'Memorandum Saling Pengertian', '', 'Dukungan Manajemen', NULL, 'Terverifikasi', '', '153-P09.pdf', '153-P04.pdf', '153-P04.pdf', '', ''),
	(106, 'Direktorat Jenderal Perikanan Budidaya', '', '', '', 'Direktorat Ikan Air Payau', '', '', '', '', '', 'Kementrian/Lembaga', 'Lorem Ipsum 5', 'Lain-lain', 'Lorem ipsum dolor sit amet', 'Dukungan Manajemen', NULL, 'Terverifikasi', '', '153-P06.pdf', '', '153-P02.pdf', '', ''),
	(107, 'Sekretariat Jendral', 'Biro Keuangan dan Barang Milik Negara', '', '', '', '', '', '', '', '', 'Kementrian/Lembaga', 'testing', 'Lain-lain', 'testing', 'Dukungan Manajemen', NULL, 'Terverifikasi', '', '916-P04.pdf', '', '916-P06.pdf', '', ''),
	(110, 'Direktorat Jenderal Perikanan Budidaya', '', '', '', 'Balai Besar Perikanan Budidaya Air Payau', '', '', '', '', '', 'Pemerintah Daerah', 'lorem Ipsum 6', 'Kesepakatan Bersama', '', 'Pengembangan Budidaya Laut, Pesisir dan Darat Secara Berkelanjutan', 'Penangkapan Ikan Terukur Berbasis Kuota', 'Terverifikasi', '', '916-P01.pdf', '', '916-P02.pdf', '', ''),
	(111, 'Inspektorat Jenderal', '', '', '', '', '', '', 'Inspektorat III', '', '', 'Badan Usaha Milik Negara', 'Lorem Ipsum 7', 'Lain-lain', 'lorem ipsum', 'Dukungan Manajemen', 'Perluasan Kawasan Konservasi Laut', 'Terverifikasi', '', '240-P07.pdf', '', '240-P09.pdf', '', ''),
	(113, 'Direktorat Jenderal Penguatan Daya Saing Produk Kelautan dan Perikanan', '', '', '', '', 'Direktorat Logistik', '', '', '', '', 'Swasta', 'Lorem Ipsum 8', 'Nota Kesepahaman', '', 'Pengawasan dan Pengendalian Pesisir dan Pulau-Pulau Kecil', 'Perluasan Kawasan Konservasi Laut', 'Terverifikasi', '', '240-P03.pdf', '240-P04.pdf', '240-P04.pdf', '240-P09.pdf', '240-P06.pdf'),
	(115, 'Direktorat Jenderal Perikanan Budidaya', '', '', '', 'Direktorat Ikan Air Laut', '', '', '', '', '', 'Pemerintah Daerah', 'testing', 'Nota Kesepahaman', '', 'Perluasan Kawasan Konservasi Laut', '', 'Terverifikasi', '', '207-P06.pdf', '', '207-P01.pdf', '', '');

-- Dumping structure for table puks.statusvm
CREATE TABLE IF NOT EXISTS `statusvm` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomor_registrasi` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_mitra` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_mitra` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `notel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_verifikasi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_statusvd` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table puks.statusvm: ~11 rows (approximately)
INSERT INTO `statusvm` (`id`, `nomor_registrasi`, `nama_mitra`, `jenis_mitra`, `alamat`, `email`, `notel`, `status_verifikasi`, `id_statusvd`) VALUES
	(53, 'KALROREN2024120323E1D5', 'Lorem Ipsum', 'Ormas/LSM', 'Lorem ipsum dolor sit amet', 'loremipsum@gmail.com', '0812345678900', 'Terverifikasi', 0),
	(54, 'KALROREN202412039E9E2A', 'Lorem Ipsum 1', 'Kementrian/Lembaga', 'lorem ipsum dolor sit amet', 'loremipsum1@gmail.com', '0879123456', 'Terverifikasi', 0),
	(55, 'KALROREN202412036B9C74', 'Lorem Ipsum 2', 'Universitas/Perguruan Tinggi', 'Lorem ipsum dolor sit amet ', 'loremipsum2@gmail.com', '0213456789', 'Terverifikasi', 0),
	(56, 'KALROREN2024120356204B', 'Lorem Ipsum 3', 'Kementrian/Lembaga', 'Lorem ipsum dolor sit amet', 'loremipsum3@gmail.com', '12345667890', 'Terverifikasi', 0),
	(57, 'KALROREN2024120397A075', 'Lorem Ipsum 4', 'Universitas/Perguruan Tinggi', 'Lorem ipsum dolor sit amet', 'loremipsum4@gmail.com', '0987654321', 'Terverifikasi', 0),
	(58, 'KALROREN202412033F0928', 'Lorem Ipsum 5', 'Kementrian/Lembaga', 'Lorem ipsum dolor sit amet', 'loremipsum5@gmail.com', '1234567890', 'Terverifikasi', 0),
	(60, 'KALROREN202412059E0463', 'testing', 'Kementrian/Lembaga', 'testing', 'testing@gmail.com', '12345678890', 'Terverifikasi', 0),
	(61, 'KALROREN20241206EC4160', 'lorem Ipsum 6', 'Pemerintah Daerah', 'lorem ipsum', 'loremipsum6@gmail.com', '1234567890', 'Terverifikasi', 0),
	(62, 'KALROREN20241206FDE9C2', 'Lorem Ipsum 7', 'Badan Usaha Milik Negara', 'lorem ipsum dolor sit amet', 'loremipsum7@gmail.com', '1234567890', 'Terverifikasi', 0),
	(63, 'KALROREN20241206B3620D', 'Lorem Ipsum 8', 'Swasta', 'lorem ipsum dolor sit amet', 'loremipsum8@gmail.com', '1234567890', 'Terverifikasi', 0),
	(64, 'KALROREN202412098C09A2', 'testing', 'Pemerintah Daerah', 'lorem ipsum', 'loremipsum9@gmail.com', '1234567890', 'Terverifikasi', 0);

-- Dumping structure for table puks.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table puks.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `username`, `email`, `password`, `level_id`, `created_at`, `updated_at`) VALUES
	(1, 'kalroren', NULL, '$2y$12$hqlqolFdR82JNeTzDSVeTOYjL/IL82/OWMTpzuhXCrm27jNWM0riK', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'rorenkkp', NULL, '$2y$12$kRJp45WIqXEnSkG1AgcK7eZdvL9RrUK9dzH4Ih14GuBHsRVMDim2q', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
