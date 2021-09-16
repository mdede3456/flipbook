-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;



-- Dumping structure for table flipbook.abouts
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'About Page',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','nonactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.abouts: ~1 rows (approximately)
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` (`id`, `title`, `description`, `banner`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'About Page', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', NULL, 'active', NULL, '2021-09-13 11:17:58');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;

-- Dumping structure for table flipbook.banner_sites
CREATE TABLE IF NOT EXISTS `banner_sites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` enum('home1','home2','majalah','komik') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.banner_sites: ~4 rows (approximately)
/*!40000 ALTER TABLE `banner_sites` DISABLE KEYS */;
INSERT INTO `banner_sites` (`id`, `title`, `link`, `banner`, `position`, `created_at`, `updated_at`) VALUES
	(1, '20% Off Select Book', 'https://www.google.com/', 'uploads/banner//nDeqPYPX4DjBW3g8dipDn5S6nzkNl0gP3EBvSKTM.jpg', 'home1', '2021-09-13 11:41:35', '2021-09-13 15:40:07'),
	(2, 'Book Your<br> Own Adventures', 'https://www.google.com/', 'uploads/banner//iTY8goyHxib5Ha3wp2ubBDJGgwMobCj1jBbyNsHO.jpg', 'home2', '2021-09-13 11:41:51', '2021-09-13 22:52:55'),
	(3, 'Book Your Own Adventures', 'https://www.google.com/', 'uploads/banner//4mBeU1ZFkv8l9jjB6cu4NonKIhh49m28ErCmqDs7.jpg', 'majalah', '2021-09-13 11:42:12', '2021-09-14 13:50:09'),
	(4, 'Book Your Own Adventures', 'https://www.google.com/', 'uploads/banner//kk1ZrdhPfXSyUo9WROZNnciqqMkLdFkCUHZ37y7O.jpg', 'komik', '2021-09-13 11:42:21', '2021-09-13 11:42:21');
/*!40000 ALTER TABLE `banner_sites` ENABLE KEYS */;

-- Dumping structure for table flipbook.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.categories: ~0 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table flipbook.category_flipbooks
CREATE TABLE IF NOT EXISTS `category_flipbooks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'uploads/category/image.jpg',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.category_flipbooks: ~4 rows (approximately)
/*!40000 ALTER TABLE `category_flipbooks` DISABLE KEYS */;
INSERT INTO `category_flipbooks` (`id`, `name`, `banner`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Sample 01', NULL, '2021-09-13 12:13:25', '2021-09-13 12:11:08', '2021-09-13 12:13:25'),
	(2, 'Edukasi', 'uploads/category//VOZtWMl5GnnkglLoUn7bq92QRGy6A9Wf8gw73UtL.jpg', NULL, '2021-09-13 12:11:11', '2021-09-15 06:04:24'),
	(3, 'Politik', 'uploads/category//srqPS9IU3G17uGxAA9Ti1lxnvixdzotBfAr7jk9n.jpg', NULL, '2021-09-13 12:11:14', '2021-09-15 06:04:14'),
	(4, 'Travel', 'uploads/category//V1Sgt3VRf2IpKkVIYg2yROa8l7TMcp5WIGBJDRWp.jpg', NULL, '2021-09-13 12:11:16', '2021-09-15 06:04:04'),
	(5, 'Artis', 'uploads/category//jY5whMy0dXowYIbOJwH4q2UoLpphGfbcxO1jMCvc.jpg', NULL, '2021-09-15 06:05:21', '2021-09-15 06:05:21'),
	(6, 'Business', 'uploads/category//rLI6cSeyj3mnmUC9zLesDIvghetDp9QRJVV1I462.jpg', NULL, '2021-09-15 06:05:27', '2021-09-15 06:05:27');
/*!40000 ALTER TABLE `category_flipbooks` ENABLE KEYS */;

-- Dumping structure for table flipbook.chapters
CREATE TABLE IF NOT EXISTS `chapters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `komik_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_type` enum('byimage','pdf') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'byimage',
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chapters_komik_id_index` (`komik_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.chapters: ~0 rows (approximately)
/*!40000 ALTER TABLE `chapters` DISABLE KEYS */;
/*!40000 ALTER TABLE `chapters` ENABLE KEYS */;

-- Dumping structure for table flipbook.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.contacts: ~0 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table flipbook.failed_jobs
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

-- Dumping data for table flipbook.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table flipbook.flip_books
CREATE TABLE IF NOT EXISTS `flip_books` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL,
  `author_id` bigint(20) unsigned NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unggulan` enum('ya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ya',
  `status` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/flipbook/image.jpg',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `flip_books_category_id_index` (`category_id`),
  KEY `flip_books_author_id_index` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.flip_books: ~12 rows (approximately)
/*!40000 ALTER TABLE `flip_books` DISABLE KEYS */;
INSERT INTO `flip_books` (`id`, `category_id`, `author_id`, `tag`, `title`, `description`, `file`, `unggulan`, `status`, `thumbnail`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(3, 3, 3, '"saya merupakan,anak,ana"', 'Majalah 2016 Vol 7', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu<br></p>', 'uploads/berkas//R990wMQ6pP86sCphoRE9iFMKpYqnh5pGbJS9WvSG.pdf', 'tidak', 1, 'uploads/flipbook//aTBX8Vicaxk7275nVy3fLnC6guLYSKmgMKHKhgrw.jpg', NULL, '2021-09-13 12:32:24', '2021-09-15 05:57:13'),
	(4, 2, 3, '"hallo,nama saya dede"', 'Majalah 2016 Vol 8', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu<br></p>', 'uploads/berkas//R990wMQ6pP86sCphoRE9iFMKpYqnh5pGbJS9WvSG.pdf', 'tidak', 1, 'uploads/flipbook//Z1VCp3GUrofjSUoFIRk4WSRWGqAjwSfsyhHJ7Tig.jpg', NULL, '2021-09-13 12:31:16', '2021-09-15 05:55:49'),
	(5, 3, 3, '"hallo,nama saya dede"', 'Majalah 2016 Vol 9', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu<br></p>', 'uploads/berkas//R990wMQ6pP86sCphoRE9iFMKpYqnh5pGbJS9WvSG.pdf', 'tidak', 1, 'uploads/flipbook//v5evg8oTfPQ9ODu0dmHd4voXMsq3VAG1idRtw8M2.jpg', NULL, '2021-09-13 12:31:16', '2021-09-15 05:56:25'),
	(6, 4, 3, '"hallo,nama saya dede"', 'Majalah 2016 Vol 10', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu<br></p>', 'uploads/berkas//R990wMQ6pP86sCphoRE9iFMKpYqnh5pGbJS9WvSG.pdf', 'ya', 1, 'uploads/flipbook//qGomPcAKFd6WXfUgYhgmOtst7m99LmaWaXzH4PYq.jpg', NULL, '2021-09-13 12:31:16', '2021-09-15 06:00:07'),
	(7, 4, 3, '"hallo,nama saya dede"', 'Majalah 2017 Vol 11', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu<br></p>', 'uploads/berkas//R990wMQ6pP86sCphoRE9iFMKpYqnh5pGbJS9WvSG.pdf', 'ya', 1, 'uploads/flipbook//tb74cAQBBm5JzPXmBAAZbVcuX60wK4or3rVPxziU.jpg', NULL, '2021-09-13 12:31:16', '2021-09-15 05:55:59'),
	(8, 2, 2, '"hallo,nama saya dede"', 'Majalah 2017 Vol 13', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu<br></p>', 'uploads/berkas//R990wMQ6pP86sCphoRE9iFMKpYqnh5pGbJS9WvSG.pdf', 'ya', 1, 'uploads/flipbook//SZH3gcPzMqqiznkvPGpWKbdE5K7QISHnj3uF2Nyb.jpg', NULL, '2021-09-13 12:31:16', '2021-09-15 05:51:12'),
	(9, 2, 2, '"hallo,nama saya dede"', 'Majalah 2018 Vol 14', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu<br></p>', 'uploads/berkas//R990wMQ6pP86sCphoRE9iFMKpYqnh5pGbJS9WvSG.pdf', 'ya', 1, 'uploads/flipbook//razCH4QVIGmIfFh9kowW2Tvqik71IVCxpkPBtcig.jpg', NULL, '2021-09-13 12:31:16', '2021-09-15 05:50:51'),
	(10, 2, 2, '"hallo,nama saya dede"', 'Majalah 2018 Vol 15', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu<br></p>', 'uploads/berkas//R990wMQ6pP86sCphoRE9iFMKpYqnh5pGbJS9WvSG.pdf', 'tidak', 1, 'uploads/flipbook//Ozev7m0fVbUbTsHaAttpbVIMYOSStRIvk79wnBSG.jpg', NULL, '2021-09-13 12:31:16', '2021-09-15 05:50:25'),
	(11, 2, 2, '"hallo,nama saya dede"', 'Majalah 2018 Vol 16', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu<br></p>', 'uploads/berkas//R990wMQ6pP86sCphoRE9iFMKpYqnh5pGbJS9WvSG.pdf', 'tidak', 1, 'uploads/flipbook//1qZEWH1dsEeFFU2RUC7IXYPLAa5a1iJG734Gswe6.jpg', NULL, '2021-09-13 12:31:16', '2021-09-15 05:47:33'),
	(12, 2, 2, '"hallo,nama saya dede"', 'Majalah 2019 Vol 17', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu<br></p>', 'uploads/berkas//R990wMQ6pP86sCphoRE9iFMKpYqnh5pGbJS9WvSG.pdf', 'ya', 1, 'uploads/flipbook//VBW0vyuIISjTYx0XjCa4kT8mWs56McH3Usgu8cPy.jpg', NULL, '2021-09-13 12:31:16', '2021-09-15 05:39:10'),
	(13, 2, 2, '"hallo,nama saya dede"', 'Majalah 2019 Vol 18', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu<br></p>', 'uploads/berkas//R990wMQ6pP86sCphoRE9iFMKpYqnh5pGbJS9WvSG.pdf', 'ya', 1, 'uploads/flipbook//g7lwB56PpWdoldznXuUkVG89EKqScVQe03gvW31w.jpg', NULL, '2021-09-13 12:31:16', '2021-09-15 05:38:32'),
	(14, 2, 2, '"hallo,nama saya dede"', 'Majalah 2018 Vol 16', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu<br></p>', NULL, 'tidak', 1, 'uploads/flipbook//oVH96XfCIFcZm2R8m5HmDQDbKIRu2oT1KgQXmTp7.jpg', NULL, '2021-09-15 05:47:06', '2021-09-15 05:52:42');
/*!40000 ALTER TABLE `flip_books` ENABLE KEYS */;

-- Dumping structure for table flipbook.genres
CREATE TABLE IF NOT EXISTS `genres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','tidak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.genres: ~4 rows (approximately)
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` (`id`, `name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Action', 'active', NULL, '2021-09-13 22:13:31', '2021-09-13 22:13:31'),
	(2, 'Isekai', 'active', NULL, '2021-09-13 22:13:37', '2021-09-13 22:13:37'),
	(3, 'Donghua', 'active', NULL, '2021-09-13 22:13:46', '2021-09-13 22:13:46'),
	(4, 'School', 'active', NULL, '2021-09-13 22:13:53', '2021-09-13 22:13:53');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;

-- Dumping structure for table flipbook.komiks
CREATE TABLE IF NOT EXISTS `komiks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `genre_id` bigint(20) unsigned NOT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/manga/image.jpg',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ongoing','selesai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ongoing',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `komiks_genre_id_index` (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.komiks: ~2 rows (approximately)
/*!40000 ALTER TABLE `komiks` DISABLE KEYS */;
INSERT INTO `komiks` (`id`, `genre_id`, `meta`, `thumbnail`, `name`, `status`, `description`, `rate`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 1, NULL, 'uploads/manga//SseL1m5nYJvNUvr9Y7epnNZgAVcdm0Uvfka9OyFy.png', 'Naruto Shippuden', 'selesai', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>', '5', NULL, '2021-09-13 22:23:05', '2021-09-13 22:23:05'),
	(2, 1, NULL, 'uploads/manga//R6WXuJ4OcgZxzyeW7qmjVWa8gSxiTM4E4bC7D7zX.png', 'One Piece', 'ongoing', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>', '4', NULL, '2021-09-13 22:23:21', '2021-09-13 22:23:21'),
	(3, 1, NULL, 'uploads/manga//p5o5UeufQ1y14eIaaitL6Zaxq7brBAgoo9pkZRYI.png', 'Kimetsu No Yaiba', 'ongoing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5', NULL, '2021-09-13 22:23:35', '2021-09-13 22:23:35');
/*!40000 ALTER TABLE `komiks` ENABLE KEYS */;

-- Dumping structure for table flipbook.media
CREATE TABLE IF NOT EXISTS `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_imageable_type_imageable_id_index` (`imageable_type`,`imageable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.media: ~0 rows (approximately)
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;

-- Dumping structure for table flipbook.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.migrations: ~22 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2021_09_07_113158_create_flip_books_table', 1),
	(6, '2021_09_08_104503_create_categories_table', 1),
	(7, '2021_09_08_104515_create_genres_table', 1),
	(8, '2021_09_08_104539_create_komiks_table', 1),
	(9, '2021_09_08_104612_create_chapters_table', 1),
	(10, '2021_09_08_110148_create_media_table', 1),
	(11, '2021_09_12_210657_create_settings_table', 1),
	(12, '2021_09_12_210722_create_abouts_table', 1),
	(13, '2021_09_12_210748_create_terms_table', 1),
	(14, '2021_09_12_210758_create_policies_table', 1),
	(15, '2021_09_12_210821_create_subcribers_table', 1),
	(16, '2021_09_12_211430_create_category_flipbooks_table', 1),
	(17, '2021_09_12_221010_create_banner_sites_table', 1),
	(18, '2021_09_12_221259_create_viewers_table', 1),
	(19, '2021_09_12_222028_create_sliders_table', 1),
	(20, '2021_09_13_074630_create_contacts_table', 1),
	(21, '2021_09_13_075050_create_videos_table', 1),
	(22, '2021_09_13_140542_create_permission_tables', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table flipbook.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.model_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Dumping structure for table flipbook.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.model_has_roles: ~0 rows (approximately)
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Dumping structure for table flipbook.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table flipbook.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table flipbook.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table flipbook.policies
CREATE TABLE IF NOT EXISTS `policies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Police Page',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','nonactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.policies: ~1 rows (approximately)
/*!40000 ALTER TABLE `policies` DISABLE KEYS */;
INSERT INTO `policies` (`id`, `title`, `description`, `banner`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Policy Page', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', NULL, 'active', NULL, '2021-09-13 11:22:42');
/*!40000 ALTER TABLE `policies` ENABLE KEYS */;

-- Dumping structure for table flipbook.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.roles: ~0 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table flipbook.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.role_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Dumping structure for table flipbook.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nama Website',
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/image.jpg',
  `about` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `notice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.settings: ~1 rows (approximately)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `name`, `logo`, `about`, `instagram_link`, `twitter_link`, `facebook_link`, `youtube_link`, `copyright`, `notice`, `email`, `phone`, `address`, `fax`, `created_at`, `updated_at`) VALUES
	(1, 'My Website', 'uploads/page//upWjmEcFjgx63twemh9Ll0zZ3g45TTLynAreONyV.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>', 'https://www.instagram.com/', 'https://twitter.com/home', 'https://www.facebook.com/', 'https://www.youtube.com/', '© 2021 MDH Diigtal. All Rights Reserved', 'Covid 19 Update: We are open for business', 'mdede.hidayatullah@gmail.com', '6285794298878', 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.', '02194298878', NULL, '2021-09-13 11:08:45');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping structure for table flipbook.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.sliders: ~3 rows (approximately)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `title`, `link`, `image`, `button`, `created_at`, `updated_at`) VALUES
	(1, 'Biggest <span>bookstore</span><br> in Europe', 'https://www.google.com/', 'uploads/slider//x1Vg4SsUYaWiF9j83eW4FwD169AGJ75oEc6ZJSh4.jpg', 'Meet OUR BESTSELLER', '2021-09-13 11:58:14', '2021-09-13 15:18:31'),
	(2, 'Biggest <span>bookstore</span><br> in Europe', 'https://www.google.com/', 'uploads/slider//Eivqa9UYH9tXRjUzd30WyPJPOWxWZyazx5HD8oFR.jpg', 'Meet OUR BESTSELLER', '2021-09-13 12:00:24', '2021-09-13 15:18:53'),
	(4, 'Biggest <span>bookstore</span><br> in Europe', 'https://www.google.com/', 'uploads/slider//q4cfRsqHEN6Yfe4Tym3KbyL3fU7p6xgVjXFcib4m.jpg', 'Baca Buku Sekarang', '2021-09-13 12:00:52', '2021-09-13 15:27:01');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Dumping structure for table flipbook.subcribers
CREATE TABLE IF NOT EXISTS `subcribers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.subcribers: ~0 rows (approximately)
/*!40000 ALTER TABLE `subcribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `subcribers` ENABLE KEYS */;

-- Dumping structure for table flipbook.terms
CREATE TABLE IF NOT EXISTS `terms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Term Page',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','nonactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.terms: ~1 rows (approximately)
/*!40000 ALTER TABLE `terms` DISABLE KEYS */;
INSERT INTO `terms` (`id`, `title`, `description`, `banner`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Term Page', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', NULL, 'active', NULL, '2021-09-13 11:20:59');
/*!40000 ALTER TABLE `terms` ENABLE KEYS */;

-- Dumping structure for table flipbook.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/image.jpg',
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('super_admin','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `banner`, `role`, `remember_token`, `created_at`, `deleted_at`, `updated_at`) VALUES
	(1, 'Dede Hidayatullah', 'mdede.hidayatullah@gmail.com', NULL, '$2y$10$NsEOWY.qX6OHdwDdcRgUL.ibyk7PxTM6lx4vKPuipLcv/1feC7d4.', 'uploads/image.jpg', 'uploads/banner.jpg', 'super_admin', NULL, NULL, NULL, NULL),
	(2, 'Harum Sidik', 'harum@gmail.com', NULL, '$2y$10$t1LPPcSSf.ArdrZkiCxHTOUVWM047XSReprOLEXxsXbyufH9ws8Tq', 'uploads/image.jpg', 'uploads/banner.jpg', 'admin', NULL, NULL, NULL, NULL),
	(3, 'Elan Hidayat', 'elan@gmail.com', NULL, '$2y$10$t1LPPcSSf.ArdrZkiCxHTOUVWM047XSReprOLEXxsXbyufH9ws8Tq', 'uploads/image.jpg', 'uploads/banner.jpg', 'admin', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table flipbook.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL,
  `author_id` bigint(20) unsigned NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/video/image.jpg',
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unggulan` enum('ya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ya',
  `status` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `videos_category_id_index` (`category_id`),
  KEY `videos_author_id_index` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.videos: ~4 rows (approximately)
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id`, `category_id`, `author_id`, `tag`, `title`, `description`, `thumbnail`, `video`, `unggulan`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 6, 3, '"business,bitcoin"', 'Percaya Bitcoin - Jadi Lo Kheng Hong Rasa Crypto', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', 'uploads/video//nlqHCECyO564Ra055SfOsXkQZveIh6HV0bRuORbB.jpg', '49_rf7ozdpU', 'tidak', 1, NULL, '2021-09-13 13:51:58', '2021-09-15 09:38:14'),
	(3, 4, 3, '"digital marketing,denny santoso"', 'Platform Wajib untuk Para Content Creator - Creators to Profit with Digital Marketing', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', 'uploads/video//q8WPcQEybL0JuWkqDLt6hBOtB0d7ATMDDnWcZ89D.jpg', '49_rf7ozdpU', 'tidak', 1, NULL, '2021-09-13 13:52:32', '2021-09-15 09:36:04'),
	(4, 4, 3, '"naruto shippuden,instrumental music"', 'Naruto Shippuden - Flying Light (Extended)', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', 'uploads/video//m6lT9hCuFS1OjaorXae9joLk2TeWQC0hGDVbpJ4T.jpg', '49_rf7ozdpU', 'tidak', 1, NULL, '2021-09-13 13:51:58', '2021-09-15 09:34:19'),
	(5, 5, 3, '"wibu,anime,amv,music modern"', '[AMV ᴴᴰ] Fate Stay Night UBW ▶ Brave Shine | Op 2 Full |', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', 'uploads/video//OO6C5AxlJv8yEz535ACu4e9Nt0Sqa7F19lEQE7c4.jpg', '49_rf7ozdpU', 'ya', 1, NULL, '2021-09-13 13:51:58', '2021-09-15 09:33:17'),
	(6, 5, 3, '"\\"momoland,artist korea,garelis\\""', 'MOMOLAND - Pengeditan persimpangan BAAM', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', 'uploads/video//joTs1zOBDSEgaHNG34HKhNNLvnrH0U8AiwxI9HoY.jpg', '49_rf7ozdpU', 'ya', 1, NULL, '2021-09-13 13:51:58', '2021-09-15 09:31:57'),
	(7, 4, 2, '"\\"\\\\\\"\\\\\\\\\\\\\\"sample\\\\\\\\\\\\\\"\\\\\\"\\""', 'Sample Video 01', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', 'uploads/video//tBM0VuyIzoHuCwLkdPNCmeZHUVIdcCLF6uthR9P1.jpg', '49_rf7ozdpU', 'ya', 0, NULL, '2021-09-13 13:51:58', '2021-09-15 09:55:19'),
	(8, 3, 2, '"\\"sample\\""', 'CRIPTO‼️ CARA KAYA HARI GINI⁉️ ILMU SEMUA NIH‼️. -PANDU SJAHRIR - Deddy Corbuzier Podcast', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', 'uploads/video//nECG868HXv63FkK0oKJTE9EFWAx4E48F2ed869ws.jpg', '49_rf7ozdpU', 'ya', 1, NULL, '2021-09-13 13:51:58', '2021-09-15 09:51:27'),
	(9, 6, 2, '"\\"sample\\""', 'Petani Muda Sukses Budidaya Selada Hidroponik - Vale Farm Hidroponik Solo', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', 'uploads/video//MMI0en3bEgePlrsjQay2c7rTTx1voNSUcHp0E3RV.jpg', '49_rf7ozdpU', 'ya', 1, NULL, '2021-09-13 13:51:58', '2021-09-15 09:50:40'),
	(10, 6, 2, '"\\"sample\\""', 'Tanam Kangkung Organik didalam rumah - Panen 10 hari', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', 'uploads/video//RLNFelw6PUctnT6nDr8GPMNauLZiuJOsnwv9ptYA.jpg', '49_rf7ozdpU', 'ya', 1, NULL, '2021-09-13 13:51:58', '2021-09-15 09:49:56');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;

-- Dumping structure for table flipbook.viewers
CREATE TABLE IF NOT EXISTS `viewers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_id` bigint(20) unsigned NOT NULL,
  `type` enum('video','komik','majalah') COLLATE utf8mb4_unicode_ci NOT NULL,
  `device` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `viewers_content_id_index` (`content_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flipbook.viewers: ~33 rows (approximately)
/*!40000 ALTER TABLE `viewers` DISABLE KEYS */;
INSERT INTO `viewers` (`id`, `content_id`, `type`, `device`, `browser`, `created_at`, `updated_at`) VALUES
	(1, 13, 'majalah', 'Windows', 'Chrome', '2021-09-14 13:13:57', '2021-09-14 13:13:57'),
	(2, 13, 'majalah', 'Windows', 'Chrome', '2021-09-14 13:17:04', '2021-09-14 13:17:04'),
	(3, 13, 'majalah', 'Windows', 'Chrome', '2021-09-14 13:20:32', '2021-09-14 13:20:32'),
	(4, 13, 'majalah', 'Windows', 'Chrome', '2021-09-14 13:36:52', '2021-09-14 13:36:52'),
	(5, 13, 'majalah', 'Windows', 'Chrome', '2021-09-14 13:42:44', '2021-09-14 13:42:44'),
	(6, 2, 'majalah', 'Windows', 'Chrome', '2021-09-14 14:00:00', '2021-09-14 14:00:00'),
	(7, 6, 'majalah', 'Windows', 'Chrome', '2021-09-14 14:40:08', '2021-09-14 14:40:08'),
	(8, 13, 'majalah', 'Windows', 'Chrome', '2021-09-14 14:54:39', '2021-09-14 14:54:39'),
	(9, 13, 'majalah', 'Windows', 'Chrome', '2021-09-14 15:00:00', '2021-09-14 15:00:00'),
	(10, 6, 'majalah', 'Windows', 'Chrome', '2021-09-14 15:00:17', '2021-09-14 15:00:17'),
	(11, 13, 'majalah', 'Windows', 'Chrome', '2021-09-14 15:10:19', '2021-09-14 15:10:19'),
	(12, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 01:02:04', '2021-09-15 01:02:04'),
	(13, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 01:05:00', '2021-09-15 01:05:00'),
	(14, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 01:25:01', '2021-09-15 01:25:01'),
	(15, 3, 'majalah', 'Windows', 'Chrome', '2021-09-15 01:35:29', '2021-09-15 01:35:29'),
	(16, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 01:38:54', '2021-09-15 01:38:54'),
	(17, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 01:47:52', '2021-09-15 01:47:52'),
	(18, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 01:48:05', '2021-09-15 01:48:05'),
	(19, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 01:51:36', '2021-09-15 01:51:36'),
	(20, 12, 'majalah', 'Windows', 'Chrome', '2021-09-15 01:51:56', '2021-09-15 01:51:56'),
	(21, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 01:54:15', '2021-09-15 01:54:15'),
	(22, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 01:56:59', '2021-09-15 01:56:59'),
	(23, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 01:58:40', '2021-09-15 01:58:40'),
	(24, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 02:02:08', '2021-09-15 02:02:08'),
	(25, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 02:02:21', '2021-09-15 02:02:21'),
	(26, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 02:03:29', '2021-09-15 02:03:29'),
	(27, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 02:06:25', '2021-09-15 02:06:25'),
	(28, 10, 'majalah', 'Windows', 'Chrome', '2021-09-15 02:11:18', '2021-09-15 02:11:18'),
	(29, 9, 'majalah', 'Windows', 'Chrome', '2021-09-15 02:13:37', '2021-09-15 02:13:37'),
	(30, 8, 'majalah', 'Windows', 'Chrome', '2021-09-15 02:28:46', '2021-09-15 02:28:46'),
	(31, 8, 'majalah', 'Windows', 'Chrome', '2021-09-15 03:37:08', '2021-09-15 03:37:08'),
	(32, 10, 'majalah', 'Windows', 'Chrome', '2021-09-15 03:37:50', '2021-09-15 03:37:50'),
	(33, 3, 'majalah', 'Windows', 'Chrome', '2021-09-15 04:13:01', '2021-09-15 04:13:01'),
	(34, 11, 'majalah', 'Windows', 'Chrome', '2021-09-15 05:53:03', '2021-09-15 05:53:03'),
	(35, 2, 'majalah', 'Windows', 'Chrome', '2021-09-15 05:58:55', '2021-09-15 05:58:55'),
	(36, 2, 'majalah', 'Windows', 'Chrome', '2021-09-15 05:59:35', '2021-09-15 05:59:35'),
	(37, 13, 'majalah', 'Windows', 'Chrome', '2021-09-15 06:08:50', '2021-09-15 06:08:50'),
	(38, 12, 'majalah', 'Windows', 'Chrome', '2021-09-15 06:12:36', '2021-09-15 06:12:36'),
	(39, 6, 'video', 'Windows', 'Chrome', '2021-09-15 10:31:26', '2021-09-15 10:31:26'),
	(40, 6, 'video', 'Windows', 'Chrome', '2021-09-15 10:33:59', '2021-09-15 10:33:59'),
	(41, 6, 'video', 'Windows', 'Chrome', '2021-09-15 10:34:05', '2021-09-15 10:34:05'),
	(42, 6, 'video', 'Windows', 'Chrome', '2021-09-15 10:35:18', '2021-09-15 10:35:18'),
	(43, 6, 'video', 'Windows', 'Chrome', '2021-09-15 10:37:35', '2021-09-15 10:37:35'),
	(44, 10, 'video', 'Windows', 'Chrome', '2021-09-15 10:37:46', '2021-09-15 10:37:46'),
	(45, 9, 'video', 'Windows', 'Chrome', '2021-09-15 10:37:50', '2021-09-15 10:37:50'),
	(46, 9, 'video', 'Windows', 'Chrome', '2021-09-15 10:49:40', '2021-09-15 10:49:40'),
	(47, 9, 'video', 'Windows', 'Chrome', '2021-09-15 10:50:35', '2021-09-15 10:50:35');
/*!40000 ALTER TABLE `viewers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
