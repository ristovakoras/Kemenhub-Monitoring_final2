-- --------------------------------------------------------
-- Host:                         167.99.12.152
-- Server version:               10.5.15-MariaDB-0ubuntu0.21.10.1 - Ubuntu 21.10
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_wim4
CREATE DATABASE IF NOT EXISTS `db_wim4` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_wim4`;

-- Dumping structure for table db_wim4.axle_spacings
CREATE TABLE IF NOT EXISTS `axle_spacings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Axles` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Distance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wim_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.axle_spacings: ~23 rows (approximately)
DELETE FROM `axle_spacings`;
/*!40000 ALTER TABLE `axle_spacings` DISABLE KEYS */;
INSERT INTO `axle_spacings` (`id`, `Axles`, `Distance`, `created_at`, `updated_at`, `wim_id`) VALUES
	(28, '1-2', '132', '2022-03-14 08:54:06', '2022-03-14 08:54:06', 46),
	(29, '1-2', '132', '2022-03-14 08:54:37', '2022-03-14 08:54:37', 47),
	(30, '1-2', '132', '2022-03-14 08:54:49', '2022-03-14 08:54:49', 48),
	(31, '1-2', '132', '2022-03-14 08:55:03', '2022-03-14 08:55:03', 49),
	(32, '1-2', '132', '2022-03-14 08:56:12', '2022-03-14 08:56:12', 50),
	(33, '1-2', '132', '2022-03-14 09:04:13', '2022-03-14 09:04:13', 51),
	(34, '1-2', '132', '2022-03-14 09:07:06', '2022-03-14 09:07:06', 52),
	(35, '1-2', '132', '2022-03-14 09:07:26', '2022-03-14 09:07:26', 53),
	(36, '1-2', '132', '2022-03-14 09:07:42', '2022-03-14 09:07:42', 54),
	(37, '1-2', '132', '2022-03-14 09:08:10', '2022-03-14 09:08:10', 55),
	(38, '1-2', '132', '2022-03-14 09:51:12', '2022-03-14 09:51:12', 56);
/*!40000 ALTER TABLE `axle_spacings` ENABLE KEYS */;

-- Dumping structure for table db_wim4.axle_weights
CREATE TABLE IF NOT EXISTS `axle_weights` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `AxleWeight_1` float NOT NULL,
  `AxleWeight_2` float NOT NULL,
  `AxleWeight_3` float DEFAULT NULL,
  `AxleWeight_4` float DEFAULT NULL,
  `AxleWeight_5` float DEFAULT NULL,
  `wim_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.axle_weights: ~25 rows (approximately)
DELETE FROM `axle_weights`;
/*!40000 ALTER TABLE `axle_weights` DISABLE KEYS */;
INSERT INTO `axle_weights` (`id`, `AxleWeight_1`, `AxleWeight_2`, `AxleWeight_3`, `AxleWeight_4`, `AxleWeight_5`, `wim_id`, `created_at`, `updated_at`) VALUES
	(30, 321, 421, 312, 313, 312, 46, '2022-03-14 08:54:05', '2022-03-14 08:54:05'),
	(31, 321, 421, 312, 313, 312, 47, '2022-03-14 08:54:37', '2022-03-14 08:54:37'),
	(32, 321, 421, 312, 313, 312, 48, '2022-03-14 08:54:49', '2022-03-14 08:54:49'),
	(33, 321, 421, 312, 313, 312, 49, '2022-03-14 08:55:03', '2022-03-14 08:55:03'),
	(34, 321, 421, 312, 313, 312, 50, '2022-03-14 08:56:12', '2022-03-14 08:56:12'),
	(35, 321, 421, 312, 313, 312, 51, '2022-03-14 09:04:13', '2022-03-14 09:04:13'),
	(36, 321, 421, 312, 313, 312, 52, '2022-03-14 09:07:05', '2022-03-14 09:07:05'),
	(37, 321, 421, 312, 313, 312, 53, '2022-03-14 09:07:25', '2022-03-14 09:07:25'),
	(38, 321, 421, 312, 313, 312, 54, '2022-03-14 09:07:42', '2022-03-14 09:07:42'),
	(39, 321, 421, 312, 313, 312, 55, '2022-03-14 09:08:09', '2022-03-14 09:08:09'),
	(40, 321, 421, 312, 313, 312, 56, '2022-03-14 09:51:11', '2022-03-14 09:51:11');
/*!40000 ALTER TABLE `axle_weights` ENABLE KEYS */;

-- Dumping structure for table db_wim4.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table db_wim4.lidar
CREATE TABLE IF NOT EXISTS `lidar` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `LidarLimitHeight` float NOT NULL,
  `LidarLimitWidth` float NOT NULL,
  `LidarLimitLength` float NOT NULL,
  `LidarReadingHeight` float NOT NULL,
  `LidarReadingWidth` float NOT NULL,
  `LidarReadingLength` float NOT NULL,
  `LidarOverHeight` float NOT NULL,
  `LidarOverWidth` float NOT NULL,
  `LidarOverLength` float NOT NULL,
  `LidarPercentageHeight` float NOT NULL,
  `LidarPercentageWidth` float NOT NULL,
  `LidarPercentageLength` float NOT NULL,
  `IsLidarOverHeight` int(11) NOT NULL,
  `IsLidarOverWidth` int(11) NOT NULL,
  `IsLidarOverLength` int(11) NOT NULL,
  `IsDimensionOver` int(11) NOT NULL,
  `LidarRaw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wim_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_wim` (`wim_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.lidar: ~19 rows (approximately)
DELETE FROM `lidar`;
/*!40000 ALTER TABLE `lidar` DISABLE KEYS */;
INSERT INTO `lidar` (`id`, `LidarLimitHeight`, `LidarLimitWidth`, `LidarLimitLength`, `LidarReadingHeight`, `LidarReadingWidth`, `LidarReadingLength`, `LidarOverHeight`, `LidarOverWidth`, `LidarOverLength`, `LidarPercentageHeight`, `LidarPercentageWidth`, `LidarPercentageLength`, `IsLidarOverHeight`, `IsLidarOverWidth`, `IsLidarOverLength`, `IsDimensionOver`, `LidarRaw`, `wim_id`, `created_at`, `updated_at`) VALUES
	(20, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/phU6t1Z5cHf7lcKXV9g2piPFV7SfGgQEL4nuKgAl.txt', 43, '2022-03-14 08:12:18', '2022-03-14 08:12:18'),
	(21, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/TqpzdPC3aqHqwf6BrE2YvM0FadlI5H5iqoaPSzm7.txt', 44, '2022-03-14 08:25:30', '2022-03-14 08:25:30'),
	(22, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/kwlweShsEQ89GztIvowW79TQpH38sxHb2e9Q1eql.txt', 45, '2022-03-14 08:26:02', '2022-03-14 08:26:02'),
	(23, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/5CmvNEpapttpjb6NHIaFypwfxOBPjs61ad1UfuDK.txt', 46, '2022-03-14 08:54:06', '2022-03-14 08:54:06'),
	(24, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/AacLztMIlYADB6aRZu3nrjXpTAJ4JoNeqSprpwP9.txt', 47, '2022-03-14 08:54:38', '2022-03-14 08:54:38'),
	(25, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/hx5HbkC3WdrQcJaJG8j4bNTjD2Po97bJgpdEPbeg.txt', 48, '2022-03-14 08:54:50', '2022-03-14 08:54:50'),
	(26, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/ehHXmyT5fP0K5oQKVz472p4gtdMLdMTEWQhK3YsW.txt', 49, '2022-03-14 08:55:04', '2022-03-14 08:55:04'),
	(27, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/2cy6bxTtghHhtYSacKlE6OpjoXLygPPBAuPqXqya.txt', 50, '2022-03-14 08:56:13', '2022-03-14 08:56:13'),
	(28, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/VcUTaUMdwIYPbS0lGW97gRhXbsWgM4UmGxbiAQ6x.txt', 51, '2022-03-14 09:04:14', '2022-03-14 09:04:14'),
	(29, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/13OCt6Gjv3qw0Qp56wUkk3YrIa6CkZcxspln8HCp.txt', 52, '2022-03-14 09:07:06', '2022-03-14 09:07:06'),
	(30, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/fq39DVy3ABlsrTLT9Xih6wO8ggajIolaCguya0Iq.txt', 53, '2022-03-14 09:07:26', '2022-03-14 09:07:26'),
	(31, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/5NPPTdtyNxTYpBdjjqWgs9pzk88bx3mxuDEcYT4g.txt', 54, '2022-03-14 09:07:43', '2022-03-14 09:07:43'),
	(32, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/WHUm5Yu3pgloKgHhmjTiXeTB6k6Ev7YjXZKjmBmi.txt', 55, '2022-03-14 09:08:10', '2022-03-14 09:08:10'),
	(33, 1000, 32, 5044, 454, 541, 544, 43, 34, 134, 411, 553, 423, 432, 321, 551, 123, 'storage/raw_lidar/pudgNfdbRK9pCqOujgH6o0rVX977XAJzxyVc0aLA.txt', 56, '2022-03-14 09:51:12', '2022-03-14 09:51:12');
/*!40000 ALTER TABLE `lidar` ENABLE KEYS */;

-- Dumping structure for table db_wim4.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.migrations: ~9 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_10_09_135640_create_permission_tables', 1),
	(5, '2020_10_09_135732_create_products_table', 1),
	(6, '2022_02_14_034431_create_wims_table', 1),
	(7, '2022_02_17_083413_create_lidars_table', 1),
	(8, '2022_02_17_102649_create_axle_weights_table', 1),
	(9, '2022_02_17_102950_create_axle_spacings_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table db_wim4.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.model_has_permissions: ~0 rows (approximately)
DELETE FROM `model_has_permissions`;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Dumping structure for table db_wim4.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.model_has_roles: ~3 rows (approximately)
DELETE FROM `model_has_roles`;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(2, 'App\\Models\\User', 2),
	(3, 'App\\Models\\User', 3);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Dumping structure for table db_wim4.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table db_wim4.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.permissions: ~0 rows (approximately)
DELETE FROM `permissions`;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table db_wim4.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.products: ~0 rows (approximately)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table db_wim4.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.roles: ~3 rows (approximately)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'web', '2022-03-06 23:10:26', '2022-03-06 23:10:26'),
	(2, 'user', 'web', '2022-03-06 23:10:26', '2022-03-06 23:10:26'),
	(3, 'device', 'web', '2022-03-06 23:10:26', '2022-03-06 23:10:26');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table db_wim4.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.role_has_permissions: ~0 rows (approximately)
DELETE FROM `role_has_permissions`;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Dumping structure for table db_wim4.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.users: ~3 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin Role', 'admin@role.test', NULL, '$2y$10$tpq7BXtUY0VF4sWuhUbo5uF6G2ReZw7Ngn0pAZsf5pV345NtC9CzK', NULL, '2022-03-06 23:10:26', '2022-03-06 23:10:26'),
	(2, 'User Role', 'user@role.test', NULL, '$2y$10$tnmFdVo24D0xljqGZT2.JuAk9Kr9D77OpKyrQOOSHgFa/anFQnjEK', NULL, '2022-03-06 23:10:26', '2022-03-06 23:10:26'),
	(3, 'Device Role', 'device@role.test', NULL, '$2y$10$2ZU8/IJrxYiqWLMJxDEf.edDbxfYfCIxx8xdCYQNK21cVRnKSAgMi', NULL, '2022-03-06 23:10:26', '2022-03-06 23:10:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table db_wim4.wim
CREATE TABLE IF NOT EXISTS `wim` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Weight_wim` float NOT NULL,
  `Speed` float NOT NULL,
  `LimitWeight` float NOT NULL,
  `LimitAxle` float NOT NULL,
  `OverWeight` float NOT NULL,
  `OverPercentage` float NOT NULL,
  `IsWeightOver` int(11) NOT NULL,
  `Axle_wim` int(11) NOT NULL,
  `WeighingDateTime` datetime NOT NULL,
  `WeighingTime` time NOT NULL,
  `WeighingDate` date NOT NULL,
  `LicencePlate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InfoTestNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InfoValidPeriod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InfoVehicleType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InfoAxleConfiguration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InfoOwnerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InfoOwnerAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DoesLicencePlateExist` int(11) NOT NULL,
  `Location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_wim4.wim: ~32 rows (approximately)
DELETE FROM `wim`;
/*!40000 ALTER TABLE `wim` DISABLE KEYS */;
INSERT INTO `wim` (`id`, `Weight_wim`, `Speed`, `LimitWeight`, `LimitAxle`, `OverWeight`, `OverPercentage`, `IsWeightOver`, `Axle_wim`, `WeighingDateTime`, `WeighingTime`, `WeighingDate`, `LicencePlate`, `InfoTestNumber`, `InfoValidPeriod`, `InfoVehicleType`, `InfoAxleConfiguration`, `InfoOwnerName`, `InfoOwnerAddress`, `DoesLicencePlateExist`, `Location`, `Image`, `created_at`, `updated_at`) VALUES
	(46, 3000, 15, 500, 200, 30, 40, 123, 5432, '2023-02-21 20:15:30', '20:15:30', '2023-02-21', 'D7423RFA', '100', '30', 'Daihatsu', '343', 'HADI', 'citayam', 12, 'LOSARANG', 'storage/image_wim/2TPKyAQqGkipJ6d4FksdUMqQcCQzEwj9MiDakclf.jpg', '2022-03-14 08:54:03', '2022-03-14 08:54:03'),
	(47, 3000, 15, 500, 200, 30, 40, 123, 5432, '2022-02-21 20:15:30', '20:15:30', '2022-02-21', 'D7423RFA', '100', '30', 'Daihatsu', '343', 'HADI', 'citayam', 12, 'LOSARANG', 'storage/image_wim/Te8sBJTfuZoYKzM7VFPys9mETz4iv3nnitH0LKuJ.jpg', '2022-03-14 08:54:34', '2022-03-14 08:54:34'),
	(48, 3000, 15, 500, 200, 30, 40, 123, 5432, '2021-02-21 20:15:30', '20:15:30', '2021-02-21', 'D7423RFA', '100', '30', 'Daihatsu', '343', 'HADI', 'citayam', 12, 'LOSARANG', 'storage/image_wim/USWMOxPxfAMhAqZM9DXcDdNg8e9CRiOyqYeauDvo.jpg', '2022-03-14 08:54:46', '2022-03-14 08:54:46'),
	(49, 3000, 15, 500, 200, 30, 40, 123, 5432, '2020-02-21 20:15:30', '20:15:30', '2020-02-21', 'D7423RFA', '100', '30', 'Daihatsu', '343', 'HADI', 'citayam', 12, 'LOSARANG', 'storage/image_wim/JXF26f8tEFkosyqdvkSiKmb9utg2RfgL03wP1NPf.jpg', '2022-03-14 08:55:00', '2022-03-14 08:55:00'),
	(50, 3000, 15, 500, 200, 30, 40, 123, 5432, '2024-02-21 20:15:30', '20:15:30', '2024-02-21', 'D7423RFA', '100', '30', 'Daihatsu', '343', 'HADI', 'citayam', 12, 'LOSARANG', 'storage/image_wim/NI7tkBjVthgA72ZZie5DZBmQYhlYJIOAqIOgI5CX.jpg', '2022-03-14 08:56:09', '2022-03-14 08:56:09'),
	(51, 3000, 15, 500, 200, 30, 40, 123, 5432, '2020-02-21 20:15:30', '20:15:30', '2020-02-21', 'D7423RFA', '100', '30', 'Daihatsu', '343', 'HADI', 'citayam', 12, 'LOSARANG', 'storage/image_wim/kGm5YbYriMtlA8Jd1IU0rS70gNxaiasqCmzpnwrc.jpg', '2022-03-14 09:04:10', '2022-03-14 09:04:10'),
	(52, 3000, 15, 500, 200, 30, 40, 123, 5432, '2018-02-21 20:15:30', '20:15:30', '2018-02-21', 'D7423RFA', '100', '30', 'Daihatsu', '343', 'HADI', 'citayam', 12, 'LOSARANG', 'storage/image_wim/v6IHQB7o5yAXGk37IdDiNurDXQLMLpNbVHJ6O3zS.jpg', '2022-03-14 09:07:02', '2022-03-14 09:07:02'),
	(53, 3000, 15, 500, 200, 30, 40, 123, 5432, '2025-02-21 20:15:30', '20:15:30', '2025-02-21', 'D7423RFA', '100', '30', 'Daihatsu', '343', 'HADI', 'citayam', 12, 'LOSARANG', 'storage/image_wim/QrLBaqpFpS9iqODYBi359lrrfNoQkq5BvEzdUUM7.jpg', '2022-03-14 09:07:22', '2022-03-14 09:07:22'),
	(54, 3000, 15, 500, 200, 30, 40, 123, 5432, '2024-02-21 20:15:30', '20:15:30', '2024-02-21', 'D7423RFA', '100', '30', 'Daihatsu', '343', 'HADI', 'citayam', 12, 'LOSARANG', 'storage/image_wim/tQ0qGjCW5WwmdCLdHd475P9JBnYeFvpOJXK3AW8X.jpg', '2022-03-14 09:07:39', '2022-03-14 09:07:39'),
	(55, 3000, 15, 500, 200, 30, 40, 123, 5432, '2024-02-25 20:15:30', '20:15:30', '2024-02-25', 'D7423RFA', '100', '30', 'Daihatsu', '343', 'HADI', 'citayam', 12, 'LOSARANG', 'storage/image_wim/7GP8YrNcWbj5JnWQcwI9ZHc26kjD9xjSvSlghURf.jpg', '2022-03-14 09:08:07', '2022-03-14 09:08:07'),
	(56, 3000, 15, 500, 200, 30, 40, 123, 5432, '2022-02-25 20:15:30', '20:15:30', '2022-02-25', 'D7423RFA', '100', '30', 'Daihatsu', '343', 'HADI', 'citayam', 12, 'LOSARANG', 'storage/image_wim/zMkUwzVff24KujmXls0RoB5M6CpFi7IzkVmURmHE.jpg', '2022-03-14 09:51:09', '2022-03-14 09:51:09');
/*!40000 ALTER TABLE `wim` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
