-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.34-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for db_restoran
CREATE DATABASE IF NOT EXISTS `db_restoran` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_restoran`;


-- Dumping structure for table db_restoran.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_restoran.migrations: ~8 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2020_06_01_063345_create_user', 1),
	(2, '2020_06_01_063614_create_user_db', 1),
	(3, '2020_10_13_094326_create_password_resets', 1),
	(4, '2021_08_19_145927_table_menu', 2),
	(5, '2021_08_19_162739_table_pelanggan', 3),
	(6, '2021_08_19_171331_table_meja', 4),
	(7, '2021_08_24_151346_transaksi_header', 5),
	(8, '2021_08_24_152024_transaksi_detail', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table db_restoran.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_restoran.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Dumping structure for table db_restoran.table_meja
CREATE TABLE IF NOT EXISTS `table_meja` (
  `id_meja` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nomor_meja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_meja`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_restoran.table_meja: ~2 rows (approximately)
/*!40000 ALTER TABLE `table_meja` DISABLE KEYS */;
INSERT INTO `table_meja` (`id_meja`, `nomor_meja`, `lokasi`, `created_at`, `updated_at`) VALUES
	(5, 'a', 'sa', '2021-08-25 17:14:36', '2021-08-25 17:14:36');
/*!40000 ALTER TABLE `table_meja` ENABLE KEYS */;


-- Dumping structure for table db_restoran.table_menu
CREATE TABLE IF NOT EXISTS `table_menu` (
  `id_menu` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kategori_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_restoran.table_menu: ~13 rows (approximately)
/*!40000 ALTER TABLE `table_menu` DISABLE KEYS */;
INSERT INTO `table_menu` (`id_menu`, `kategori_menu`, `nama_menu`, `harga`, `deskripsi`, `created_at`, `updated_at`) VALUES
	(1, 'minuman', 'teh', '1', 'opke', '2021-08-19 15:35:28', '2021-08-19 15:35:28'),
	(2, 'minuman', 'es jeruk', '10', 'enak', '2021-08-19 15:42:48', '2021-08-19 15:42:48'),
	(3, 'makanan', 'tera', '10', 'oke', '2021-08-19 15:49:16', '2021-08-19 15:49:16'),
	(4, 'makanan', 'ikan', '10', 'oke', '2021-08-19 16:06:15', '2021-08-19 16:06:15'),
	(5, 'minuman', 'air putih', '10', 'oke', '2021-08-19 16:06:37', '2021-08-19 16:06:37'),
	(6, 'makanan', 'rempah', '10', 'oke', '2021-08-19 16:06:52', '2021-08-19 16:06:52'),
	(7, 'makanan', '121', '10', '11', '2021-08-19 16:14:17', '2021-08-19 16:14:17'),
	(8, 'makanan', 'ayam geprek', '10', 'enak banget', '2021-08-21 21:56:36', '2021-08-21 21:56:36'),
	(9, 'minuman', 'teh anget', '1.000', 'oke', '2021-08-21 21:57:38', '2021-08-21 21:57:38'),
	(10, 'makanan', 'nasi kuning', '10.000', 'ok', '2021-08-22 14:49:40', '2021-08-22 14:49:40'),
	(11, 'makanan', 'dzaa', '100.000', 'sasa', '2021-08-25 14:38:38', '2021-08-25 14:38:38'),
	(12, 'makanan', 'ikan', '10.000', 'sasasasasasasasasasasasasasasasasasasasasasasasasasas', '2021-08-25 14:38:57', '2021-08-25 14:38:57'),
	(13, 'minuman', 'makanan', '120.000', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-08-25 14:49:06', '2021-08-25 14:49:06');
/*!40000 ALTER TABLE `table_menu` ENABLE KEYS */;


-- Dumping structure for table db_restoran.table_pelanggan
CREATE TABLE IF NOT EXISTS `table_pelanggan` (
  `id_pelanggan` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_restoran.table_pelanggan: ~2 rows (approximately)
/*!40000 ALTER TABLE `table_pelanggan` DISABLE KEYS */;
INSERT INTO `table_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `telepon`, `jenis_kelamin`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
	(1, 'resi', '75871625121', 'perempuan', 'denisagita@gmail.com', 'jl. babakan pocis', '2021-08-19 16:44:17', '2021-08-19 16:44:17'),
	(2, 'dewa', '75871668', 'Laki-laki', 'dewa@gmail.com', 'jl. samudra', '2021-08-19 16:56:05', '2021-08-19 16:56:05'),
	(3, 'resika', '75681672617', 'Laki-laki', 'resika@gmaill.com', 'jl. babakan pocis', '2021-08-19 17:00:28', '2021-08-19 17:00:28');
/*!40000 ALTER TABLE `table_pelanggan` ENABLE KEYS */;


-- Dumping structure for table db_restoran.transaksi_detail
CREATE TABLE IF NOT EXISTS `transaksi_detail` (
  `id_detail` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_header` bigint(20) unsigned NOT NULL,
  `id_menu` date NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_detail`),
  KEY `id_header` (`id_header`),
  CONSTRAINT `id_header` FOREIGN KEY (`id_header`) REFERENCES `transaksi_header` (`id_header`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_restoran.transaksi_detail: ~0 rows (approximately)
/*!40000 ALTER TABLE `transaksi_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksi_detail` ENABLE KEYS */;


-- Dumping structure for table db_restoran.transaksi_header
CREATE TABLE IF NOT EXISTS `transaksi_header` (
  `id_header` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_meja` int(30) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `atas_nama` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` int(80) NOT NULL,
  `status` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_header`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_restoran.transaksi_header: ~0 rows (approximately)
/*!40000 ALTER TABLE `transaksi_header` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksi_header` ENABLE KEYS */;


-- Dumping structure for table db_restoran.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_restoran.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;


-- Dumping structure for table db_restoran.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_restoran.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(12, 'veriska', 'veriska@gmail.com', NULL, '$2y$10$uYwMWe4FtxOwPPMpd5DY4eKXakJiY8t/M72k.4jtP90HFNBsckDEW', 'kasir', 'o3aFGNU9mLUDprXdek92a8Ojbo7g9Vagf2BfI2pXTc00gyo7TUYJ1kf13XOu', NULL, '2021-08-21 11:12:02', '2021-08-21 11:12:02'),
	(13, 'tebi', 'tebi@gmail.com', NULL, '$2y$10$OLHinCzx4xr2RivgvnoHme7MsOJjLZ7S3P1/rq11Bq5O718fX5lFC', 'kitchen', 'Z9RoHL5AuuF3StBpFoudPIZiTOzJ9n6I2UvAcdoZlnl0PLsMhHtI7tgUifDx', NULL, '2021-08-21 11:17:12', '2021-08-21 11:17:12');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
