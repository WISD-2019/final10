-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idcard` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `customers` (`id`, `user_id`, `name`, `phone`, `idcard`, `created_at`, `updated_at`) VALUES
(1,	1,	'111',	'0912345678',	'P12345678',	NULL,	NULL),
(4,	4,	'33',	'0912345678',	'A123456789',	'2020-01-07 04:07:30',	'2020-01-07 04:07:30');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_12_29_134642_create_customers_table',	1),
(4,	'2019_12_29_134704_create_reservations_table',	1),
(5,	'2019_12_29_134718_create_rooms_table',	1),
(6,	'2020_01_01_134037_create_resrooms_table',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `check_in` datetime DEFAULT NULL,
  `check_out` datetime DEFAULT NULL,
  `pay` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `out_time` datetime DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `reservations` (`id`, `check_in`, `check_out`, `pay`, `cost`, `money`, `out_time`, `customer_id`, `created_at`, `updated_at`) VALUES
(1,	'2020-01-05 17:33:56',	'2020-01-05 17:33:56',	'1',	1,	1,	'2020-01-05 17:33:56',	1,	NULL,	NULL),
(6,	NULL,	NULL,	'n',	20,	8,	'2020-01-07 03:26:18',	1,	'2020-01-05 02:50:51',	'2020-01-06 11:26:18'),
(19,	NULL,	NULL,	'n',	40,	16,	NULL,	1,	'2020-01-07 05:30:26',	'2020-01-07 05:30:26'),
(20,	NULL,	NULL,	'n',	40,	16,	NULL,	1,	'2020-01-07 05:33:19',	'2020-01-07 05:33:19');

DROP TABLE IF EXISTS `resrooms`;
CREATE TABLE `resrooms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `in_room` datetime NOT NULL,
  `out_room` datetime NOT NULL,
  `room_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `resrooms` (`id`, `in_room`, `out_room`, `room_id`, `reservation_id`, `created_at`, `updated_at`) VALUES
(1,	'2020-01-05 00:21:05',	'2020-01-05 00:21:05',	1,	1,	NULL,	NULL),
(7,	'2020-01-05 00:21:58',	'2020-01-05 00:21:58',	3,	6,	NULL,	NULL),
(20,	'2020-01-01 01:00:00',	'2020-01-05 01:00:00',	1,	19,	'2020-01-07 05:30:26',	'2020-01-07 05:30:26'),
(21,	'2020-01-01 01:00:00',	'2020-01-05 01:00:00',	1,	20,	'2020-01-07 05:33:19',	'2020-01-07 05:33:19');

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dry_wet` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wood` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `balcony` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `rooms` (`id`, `dry_wet`, `wood`, `price`, `balcony`, `type`, `created_at`, `updated_at`) VALUES
(1,	'Y',	'Y',	10,	'Y',	1,	NULL,	NULL),
(2,	'Y',	'Y',	20,	'Y',	2,	NULL,	NULL),
(3,	'Y',	'Y',	30,	'Y',	4,	NULL,	NULL),
(4,	'N',	'N',	40,	'N',	6,	NULL,	NULL);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `idcard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`idcard`, `phone`, `id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `type`, `created_at`, `updated_at`) VALUES
('P123456789',	'0912345678',	1,	'11',	'11@gmail.com',	NULL,	'$2y$10$naGy06.6qjzA1yfyp6W54u6ROdAnu1fvNp9AJp3TOOWlKiBp2yTD.',	NULL,	1,	'2020-01-04 08:22:34',	'2020-01-04 08:22:34'),
('A123456789',	'0912345678',	4,	'33',	'33@gmail.com',	NULL,	'$2y$10$WvHSDoE7gua313C0xShmvOIklxz3Uxmxz3/TKuyMaanfrC80eT2g2',	NULL,	2,	'2020-01-07 04:07:30',	'2020-01-07 04:07:30');

-- 2020-01-07 14:04:23
