-- MySQL dump 10.13  Distrib 5.7.23-23, for Linux (x86_64)
--
-- Host: localhost    Database: yousabte_db
-- ------------------------------------------------------
-- Server version	5.7.23-23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*!50717 SELECT COUNT(*) INTO @rocksdb_has_p_s_session_variables FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'performance_schema' AND TABLE_NAME = 'session_variables' */;
/*!50717 SET @rocksdb_get_is_supported = IF (@rocksdb_has_p_s_session_variables, 'SELECT COUNT(*) INTO @rocksdb_is_supported FROM performance_schema.session_variables WHERE VARIABLE_NAME=\'rocksdb_bulk_load\'', 'SELECT 0') */;
/*!50717 PREPARE s FROM @rocksdb_get_is_supported */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;
/*!50717 SET @rocksdb_enable_bulk_load = IF (@rocksdb_is_supported, 'SET SESSION rocksdb_bulk_load = 1', 'SET @rocksdb_dummy_bulk_load = 0') */;
/*!50717 PREPARE s FROM @rocksdb_enable_bulk_load */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `current` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `addresses_user_id_foreign` (`user_id`),
  CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1,'Super Admin','admin@gmail.com','01126785910','admin',NULL,'$2y$10$gMXGNL13lZiC.AmpAMwpyOCwnmWUlW6G5dN8AI0lEdttzz8FOIcGi',NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `b_settings`
--

DROP TABLE IF EXISTS `b_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `b_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `b_settings`
--

LOCK TABLES `b_settings` WRITE;
/*!40000 ALTER TABLE `b_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `b_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner_translations`
--

DROP TABLE IF EXISTS `banner_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `banner_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `banner_translations_banner_id_locale_unique` (`banner_id`,`locale`),
  KEY `banner_translations_locale_index` (`locale`),
  CONSTRAINT `banner_translations_banner_id_foreign` FOREIGN KEY (`banner_id`) REFERENCES `banners` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner_translations`
--

LOCK TABLES `banner_translations` WRITE;
/*!40000 ALTER TABLE `banner_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `banner_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1 => category, 2 => flash sale',
  PRIMARY KEY (`id`),
  KEY `banners_store_id_foreign` (`store_id`),
  KEY `banners_category_id_foreign` (`category_id`),
  CONSTRAINT `banners_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `banners_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `store_id`, `created_at`, `updated_at`, `category_id`, `type`) VALUES (1,10,'2025-06-29 04:01:39','2025-06-29 04:01:39',1,NULL),(2,10,'2025-06-29 04:01:39','2025-06-29 04:01:39',3,NULL),(3,2,'2025-06-29 04:01:39','2025-06-29 04:01:39',10,NULL);
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brand_translations`
--

DROP TABLE IF EXISTS `brand_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brand_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `brand_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `brand_translations_brand_id_locale_unique` (`brand_id`,`locale`),
  KEY `brand_translations_locale_index` (`locale`),
  CONSTRAINT `brand_translations_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand_translations`
--

LOCK TABLES `brand_translations` WRITE;
/*!40000 ALTER TABLE `brand_translations` DISABLE KEYS */;
INSERT INTO `brand_translations` (`id`, `title`, `description`, `brand_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'نايكي','علامة تجارية للأزياء الرياضية عالية الأداء.',1,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'Nike','High-performance sportswear brand.',1,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'أديداس','رائد عالمي في الملابس الرياضية.',2,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'Adidas','Global leader in athletic apparel.',2,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'زارا','متجر أزياء عصري لكل المواسم.',3,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'Zara','Trendy fashion retailer for all seasons.',3,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,'إتش آند إم','ملابس عصرية بأسعار معقولة.',4,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,'H&M','Affordable and stylish casual wear.',4,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,'غوتشي','علامة فاخرة بجودة حرفية إيطالية.',5,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,'Gucci','Luxury brand with Italian craftsmanship.',5,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(11,'لويس فيتون','دار أزياء فرنسية فاخرة ومميزة.',6,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(12,'Louis Vuitton','Iconic French luxury fashion house.',6,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(13,'برادا','أزياء أنيقة وراقية.',7,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(14,'Prada','Elegant and high-end fashion.',7,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(15,'شانيل','علامة تجارية فاخرة ذات جذور فرنسية.',8,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(16,'Chanel','Timeless luxury brand with French roots.',8,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(17,'فيرساتشي','تصاميم جريئة لعشاق الموضة المعاصرة.',9,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(18,'Versace','Bold designs for contemporary fashion lovers.',9,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(19,'ليفايز','ماركة كلاسيكية للجينز والملابس الكاجوال.',10,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(20,'Levi\'s','Classic denim and casual wear brand.',10,'en','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `brand_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `isTop` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` (`id`, `created_at`, `updated_at`, `sort`, `isTop`) VALUES (1,'2025-06-29 04:01:39','2025-06-29 04:01:39',0,1),(2,'2025-06-29 04:01:39','2025-06-29 04:01:39',0,0),(3,'2025-06-29 04:01:39','2025-06-29 04:01:39',0,1),(4,'2025-06-29 04:01:39','2025-06-29 04:01:39',0,0),(5,'2025-06-29 04:01:39','2025-06-29 04:01:39',0,0),(6,'2025-06-29 04:01:39','2025-06-29 04:01:39',0,1),(7,'2025-06-29 04:01:39','2025-06-29 04:01:39',0,1),(8,'2025-06-29 04:01:39','2025-06-29 04:01:39',0,1),(9,'2025-06-29 04:01:39','2025-06-29 04:01:39',0,0),(10,'2025-06-29 04:01:39','2025-06-29 04:01:39',0,1);
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'shop, featuredOccasions',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `type`) VALUES (1,'2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(2,'2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(3,'2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(4,'2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(5,'2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(6,'2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(7,'2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(8,'2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(9,'2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(10,'2025-06-29 04:01:39','2025-06-29 04:01:39',NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_translations`
--

DROP TABLE IF EXISTS `category_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`),
  KEY `category_translations_locale_index` (`locale`),
  CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_translations`
--

LOCK TABLES `category_translations` WRITE;
/*!40000 ALTER TABLE `category_translations` DISABLE KEYS */;
INSERT INTO `category_translations` (`id`, `title`, `category_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'زهور طبيعية',1,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'Fresh Flowers',1,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'زهور صناعية',2,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'Artificial Flowers',2,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'باقات زهور',3,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'Flower Bouquets',3,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,'زهور الزفاف',4,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,'Wedding Flowers',4,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,'زهور أعياد الميلاد',5,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,'Birthday Flowers',5,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(11,'زهور المناسبات',6,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(12,'Anniversary Flowers',6,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(13,'زهور عيد الحب',7,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(14,'Valentine\'s Day Flowers',7,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(15,'نباتات داخلية',8,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(16,'Indoor Plants',8,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(17,'نباتات خارجية',9,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(18,'Outdoor Plants',9,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(19,'إكسسوارات زهور',10,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(20,'Floral Accessories',10,'en','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `category_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chooseUs_translations`
--

DROP TABLE IF EXISTS `chooseUs_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chooseUs_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `choose_us_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `chooseus_translations_choose_us_id_locale_unique` (`choose_us_id`,`locale`),
  KEY `chooseus_translations_locale_index` (`locale`),
  CONSTRAINT `chooseus_translations_choose_us_id_foreign` FOREIGN KEY (`choose_us_id`) REFERENCES `chooseUss` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chooseUs_translations`
--

LOCK TABLES `chooseUs_translations` WRITE;
/*!40000 ALTER TABLE `chooseUs_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `chooseUs_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chooseUss`
--

DROP TABLE IF EXISTS `chooseUss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chooseUss` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `emoji` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chooseUss`
--

LOCK TABLES `chooseUss` WRITE;
/*!40000 ALTER TABLE `chooseUss` DISABLE KEYS */;
/*!40000 ALTER TABLE `chooseUss` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `color_translations`
--

DROP TABLE IF EXISTS `color_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `color_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `color_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `color_translations_color_id_locale_unique` (`color_id`,`locale`),
  KEY `color_translations_locale_index` (`locale`),
  CONSTRAINT `color_translations_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `color_translations`
--

LOCK TABLES `color_translations` WRITE;
/*!40000 ALTER TABLE `color_translations` DISABLE KEYS */;
INSERT INTO `color_translations` (`id`, `title`, `subtitle`, `description`, `color_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'أحمر',NULL,NULL,1,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'Red',NULL,NULL,1,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'أزرق',NULL,NULL,2,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'Blue',NULL,NULL,2,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'أخضر',NULL,NULL,3,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'Green',NULL,NULL,3,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,'أصفر',NULL,NULL,4,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,'Yellow',NULL,NULL,4,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,'أسود',NULL,NULL,5,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,'Black',NULL,NULL,5,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(11,'أبيض',NULL,NULL,6,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(12,'White',NULL,NULL,6,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(13,'أرجواني',NULL,NULL,7,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(14,'Purple',NULL,NULL,7,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(15,'برتقالي',NULL,NULL,8,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(16,'Orange',NULL,NULL,8,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(17,'وردي',NULL,NULL,9,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(18,'Pink',NULL,NULL,9,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(19,'رمادي',NULL,NULL,10,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(20,'Gray',NULL,NULL,10,'en','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `color_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hexCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#000',
  PRIMARY KEY (`id`),
  KEY `colors_store_id_foreign` (`store_id`),
  CONSTRAINT `colors_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colors`
--

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` (`id`, `store_id`, `created_at`, `updated_at`, `hexCode`) VALUES (1,8,'2025-06-29 04:01:39','2025-06-29 04:01:39','#000'),(2,3,'2025-06-29 04:01:39','2025-06-29 04:01:39','#000'),(3,7,'2025-06-29 04:01:39','2025-06-29 04:01:39','#000'),(4,1,'2025-06-29 04:01:39','2025-06-29 04:01:39','#000'),(5,2,'2025-06-29 04:01:39','2025-06-29 04:01:39','#000'),(6,9,'2025-06-29 04:01:39','2025-06-29 04:01:39','#000'),(7,7,'2025-06-29 04:01:39','2025-06-29 04:01:39','#000'),(8,6,'2025-06-29 04:01:39','2025-06-29 04:01:39','#000'),(9,10,'2025-06-29 04:01:39','2025-06-29 04:01:39','#000'),(10,7,'2025-06-29 04:01:39','2025-06-29 04:01:39','#000');
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complain_translations`
--

DROP TABLE IF EXISTS `complain_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complain_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `complain_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `complain_translations_complain_id_locale_unique` (`complain_id`,`locale`),
  KEY `complain_translations_locale_index` (`locale`),
  CONSTRAINT `complain_translations_complain_id_foreign` FOREIGN KEY (`complain_id`) REFERENCES `complains` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complain_translations`
--

LOCK TABLES `complain_translations` WRITE;
/*!40000 ALTER TABLE `complain_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `complain_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complains`
--

DROP TABLE IF EXISTS `complains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complains` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `repeat` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complains`
--

LOCK TABLES `complains` WRITE;
/*!40000 ALTER TABLE `complains` DISABLE KEYS */;
/*!40000 ALTER TABLE `complains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `contact`, `icon`, `type`, `created_at`, `updated_at`) VALUES (1,'+201070718676','ri-phone-fill','phone','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'+201070718676','ri-whatsapp-fill','whatsapp','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'yousab-tech@gmail.com','ri-whatsapp-fill','email','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `counter_translations`
--

DROP TABLE IF EXISTS `counter_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `counter_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `counter_translations_counter_id_locale_unique` (`counter_id`,`locale`),
  KEY `counter_translations_locale_index` (`locale`),
  CONSTRAINT `counter_translations_counter_id_foreign` FOREIGN KEY (`counter_id`) REFERENCES `counters` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `counter_translations`
--

LOCK TABLES `counter_translations` WRITE;
/*!40000 ALTER TABLE `counter_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `counter_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `counters`
--

DROP TABLE IF EXISTS `counters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `counters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `count` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `counters`
--

LOCK TABLES `counters` WRITE;
/*!40000 ALTER TABLE `counters` DISABLE KEYS */;
/*!40000 ALTER TABLE `counters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq_translations`
--

DROP TABLE IF EXISTS `faq_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `faq_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `faq_translations_faq_id_locale_unique` (`faq_id`,`locale`),
  KEY `faq_translations_locale_index` (`locale`),
  CONSTRAINT `faq_translations_faq_id_foreign` FOREIGN KEY (`faq_id`) REFERENCES `faqs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq_translations`
--

LOCK TABLES `faq_translations` WRITE;
/*!40000 ALTER TABLE `faq_translations` DISABLE KEYS */;
INSERT INTO `faq_translations` (`id`, `title`, `subtitle`, `description`, `faq_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'كيف يمكنك التأكد من سلامة البضائع المنقولة؟',NULL,'<p>السلامة هي أولويتنا. نحن نستخدم أحدث المعدات والموظفين المدربين ونقوم بإجراء فحوصات صارمة للجودة لضمان النقل الآمن للبضائع.</p>',1,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'How do you ensure the safety of transported goods?',NULL,'<p>Safety is our priority. We employ state-of-the-art equipment, trained personnel, and rigorous quality checks to ensure the secure transportation of goods.</p>',1,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'ما حجم الأحمال التي يمكن أن تستوعبها شاحناتك؟',NULL,'<p>أسطولنا مجهز للتعامل مع مجموعة متنوعة من أحجام التحميل. بدءًا من حمولات الشاحنات الجزئية إلى الكاملة، نقوم بتصميم خدماتنا لتلائم احتياجات الشحن المحددة الخاصة بك.</p>',2,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'What size of loads can your trucks accommodate?',NULL,'<p>Our fleet is equipped to handle a variety of load sizes. From partial to full truckloads, we tailor our services to accommodate your specific cargo needs.</p>',2,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'كيف يمكنني متابعة تقدم شحنتي؟',NULL,'<p>نحن نقدم حلول تتبع في الوقت الفعلي، مما يتيح لك مراقبة تقدم شحنتك في كل خطوة على الطريق. فريقنا متاح أيضًا لأية تحديثات أو استفسارات.</p>',3,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'How can I track my shipment\'s progress?',NULL,'<p>We offer real-time tracking solutions, enabling you to monitor your shipment\'s progress every step of the way. Our team is also available for any updates or queries.</p>',3,'en','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `faq_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` (`id`, `created_at`, `updated_at`) VALUES (1,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favorites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `favorites_product_id_foreign` (`product_id`),
  KEY `favorites_user_id_foreign` (`user_id`),
  CONSTRAINT `favorites_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorites`
--

LOCK TABLES `favorites` WRITE;
/*!40000 ALTER TABLE `favorites` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `amount` double DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fees_project_id_foreign` (`project_id`),
  CONSTRAINT `fees_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fees`
--

LOCK TABLES `fees` WRITE;
/*!40000 ALTER TABLE `fees` DISABLE KEYS */;
/*!40000 ALTER TABLE `fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fileable_id` int(11) NOT NULL,
  `fileable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` (`id`, `url`, `fileable_id`, `fileable_type`, `created_at`, `updated_at`) VALUES (1,'images/5ab9d872514b6c0fe6ec60f298f586d5.jpeg',1,'App\\Models\\Banner','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'images/5ab9d872514b6c0fe6ec60f298f586d5.jpeg',2,'App\\Models\\Banner','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'images/5ab9d872514b6c0fe6ec60f298f586d5.jpeg',3,'App\\Models\\Banner','2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'images/slider1.jpg',1,'App\\Models\\Slider','2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'images/slider2.jpg',2,'App\\Models\\Slider','2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'images/slider3.avif',3,'App\\Models\\Slider','2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,'images/6Uc5BhjmQJtfneedg6lKQ4U0Mh4SHOs5OAd8StZd.webp',1,'App\\Models\\Page','2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,'images/dbfWCgbV5jglKcWKTYT6SeIsuAsQxCQ4GGDLHXex.webp',2,'App\\Models\\Page','2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,'images/8dTGgGdIWqURKxo2SYehtgjCL3AKeSKmINcUVMyy.webp',6,'App\\Models\\Page','2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,'images/l2K1cEb5wcsPVzhHhj2OWNcQXBPKKrofxrfhgu5W.webp',7,'App\\Models\\Page','2025-06-29 04:01:39','2025-06-29 04:01:39'),(11,'images/khyVZVtSks0zZfm3NQAA3496oI8ovcN3rzKD9rX4.webp',7,'App\\Models\\Page','2025-06-29 04:01:39','2025-06-29 04:01:39'),(12,'images/NzpSLncvvrosX4WqGDJLZtWvY3Xrvxzw6saO8xr6.webp',7,'App\\Models\\Page','2025-06-29 04:01:39','2025-06-29 04:01:39'),(13,NULL,1,'App\\Models\\Faq','2025-06-29 04:01:39','2025-06-29 04:01:39'),(14,NULL,2,'App\\Models\\Faq','2025-06-29 04:01:39','2025-06-29 04:01:39'),(15,NULL,3,'App\\Models\\Faq','2025-06-29 04:01:39','2025-06-29 04:01:39'),(16,'images/n7PsCCvTh0UlmeZ3tkeZLAJN2xZNVCP3rKbBtmCa.jpg',1,'App\\Models\\Offer','2025-06-29 04:01:39','2025-06-29 04:01:39'),(17,'images/DgSnJOCTJyqssz89T9uJtnJgrutQyoTjzGPCDoVv.jpg',2,'App\\Models\\Offer','2025-06-29 04:01:39','2025-06-29 04:01:39'),(18,'images/kA0VxkfdwE8CxxjWcxE8aFrqi9faVH03GaouireY.jpg',3,'App\\Models\\Offer','2025-06-29 04:01:39','2025-06-29 04:01:39'),(19,'images/vy8NlbjHaAQ0LkP9mM2JLvfTf5R4T12n3OC4NDcr.jpg',4,'App\\Models\\Offer','2025-06-29 04:01:39','2025-06-29 04:01:39'),(20,'images/R9fRY7NuH0tlxdO08Dx9nypoXJQTwIDICgKjTZF0.jpg',5,'App\\Models\\Offer','2025-06-29 04:01:40','2025-06-29 04:01:40'),(21,'images/3FOisZQw41DmayYWu1hmb8DCXcmfiHPoZKOw9b8R.jpg',6,'App\\Models\\Offer','2025-06-29 04:01:40','2025-06-29 04:01:40'),(22,'images/DVzIt7cFI2jBoCJMmK8QOB6nRkzrMJBrFAEjS6xy.jpg',7,'App\\Models\\Offer','2025-06-29 04:01:40','2025-06-29 04:01:40'),(23,'images/GSijNNjRYjo9WWymllbU1BO3Wr2Easx6e5eMlQV3.jpg',8,'App\\Models\\Offer','2025-06-29 04:01:40','2025-06-29 04:01:40'),(24,'images/We0YQrRVYvsxIlJ7LfVikDqd2LouFhzgzEyg75Dj.jpg',9,'App\\Models\\Offer','2025-06-29 04:01:40','2025-06-29 04:01:40'),(25,'images/3DYnoNH8BKd6Js167lD7dAseNCLFFqNdnzEgkm2n.jpg',10,'App\\Models\\Offer','2025-06-29 04:01:40','2025-06-29 04:01:40'),(26,'images/h13R9Ao8Sa6W6HuW99D2026AMbdUKo5FT6M2m1n7.jpg',11,'App\\Models\\Offer','2025-06-29 04:01:40','2025-06-29 04:01:40'),(27,'images/RkuWoIH5tcfcEthvvxNrYVdCTmpG3JNoSyBhe5lA.jpg',12,'App\\Models\\Offer','2025-06-29 04:01:40','2025-06-29 04:01:40');
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_translations`
--

DROP TABLE IF EXISTS `gallery_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `gallery_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gallery_translations_gallery_id_locale_unique` (`gallery_id`,`locale`),
  KEY `gallery_translations_locale_index` (`locale`),
  CONSTRAINT `gallery_translations_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_translations`
--

LOCK TABLES `gallery_translations` WRITE;
/*!40000 ALTER TABLE `gallery_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `gallery_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_gallery_id_foreign` (`gallery_id`),
  CONSTRAINT `images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemRequest_translations`
--

DROP TABLE IF EXISTS `itemRequest_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itemRequest_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `itemRequest_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `itemrequest_translations_itemrequest_id_locale_unique` (`itemRequest_id`,`locale`),
  KEY `itemrequest_translations_locale_index` (`locale`),
  CONSTRAINT `itemrequest_translations_itemrequest_id_foreign` FOREIGN KEY (`itemRequest_id`) REFERENCES `itemRequests` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemRequest_translations`
--

LOCK TABLES `itemRequest_translations` WRITE;
/*!40000 ALTER TABLE `itemRequest_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `itemRequest_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemRequests`
--

DROP TABLE IF EXISTS `itemRequests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itemRequests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` bigint(20) unsigned NOT NULL,
  `reviewer_id` bigint(20) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'create, edit',
  `data` longtext COLLATE utf8mb4_unicode_ci,
  `product_id` bigint(20) unsigned DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'pending, accepted',
  `rejected_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affected_fields` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `images` longtext COLLATE utf8mb4_unicode_ci,
  `variationImages` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `itemrequests_product_id_foreign` (`product_id`),
  KEY `itemrequests_reviewer_id_foreign` (`reviewer_id`),
  CONSTRAINT `itemrequests_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `itemrequests_reviewer_id_foreign` FOREIGN KEY (`reviewer_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemRequests`
--

LOCK TABLES `itemRequests` WRITE;
/*!40000 ALTER TABLE `itemRequests` DISABLE KEYS */;
/*!40000 ALTER TABLE `itemRequests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ltm_translations`
--

DROP TABLE IF EXISTS `ltm_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ltm_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL DEFAULT '0',
  `locale` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `key` text COLLATE utf8mb4_bin NOT NULL,
  `value` text COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ltm_translations`
--

LOCK TABLES `ltm_translations` WRITE;
/*!40000 ALTER TABLE `ltm_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `ltm_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merchantRequests`
--

DROP TABLE IF EXISTS `merchantRequests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `merchantRequests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `storeName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchantName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending' COMMENT 'pending',
  `pending_at` timestamp NULL DEFAULT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `rejected_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merchantRequests`
--

LOCK TABLES `merchantRequests` WRITE;
/*!40000 ALTER TABLE `merchantRequests` DISABLE KEYS */;
/*!40000 ALTER TABLE `merchantRequests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merchants`
--

DROP TABLE IF EXISTS `merchants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `merchants` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sellingCountry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'saudiArabia',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `merchants_email_unique` (`email`),
  UNIQUE KEY `merchants_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merchants`
--

LOCK TABLES `merchants` WRITE;
/*!40000 ALTER TABLE `merchants` DISABLE KEYS */;
/*!40000 ALTER TABLE `merchants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'2014_04_02_124945_create_admins_table',1),(2,'2014_04_02_193005_create_translations_table',1),(3,'2014_10_12_000000_create_users_table',1),(4,'2014_10_12_100000_create_password_reset_tokens_table',1),(5,'2014_10_12_100000_create_password_resets_table',1),(6,'2016_06_01_000001_create_oauth_auth_codes_table',1),(7,'2016_06_01_000002_create_oauth_access_tokens_table',1),(8,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(9,'2016_06_01_000004_create_oauth_clients_table',1),(10,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(11,'2019_08_19_000000_create_failed_jobs_table',1),(12,'2019_12_14_000001_create_personal_access_tokens_table',1),(13,'2022_10_21_075806_create_categories_table',1),(14,'2022_10_22_075805_create_stores_table',1),(15,'2022_10_22_075806_create_banners_table',1),(16,'2022_10_22_075806_create_brands_table',1),(17,'2022_10_22_075806_create_chooseUss_table',1),(18,'2022_10_22_075806_create_colors_table',1),(19,'2022_10_22_075806_create_sizes_table',1),(20,'2022_10_22_075806_create_sliders_table',1),(21,'2022_10_22_075806_create_subcategories_table',1),(22,'2022_10_23_075805_create_productOffers_table',1),(23,'2022_10_23_075805_create_products_table',1),(24,'2022_10_23_075806_create_faqs_table',1),(25,'2022_10_23_075806_create_itemRequests_table',1),(26,'2022_10_23_075806_create_offers_table',1),(27,'2022_10_23_075806_create_processes_table',1),(28,'2022_10_23_075806_create_testimonials_table',1),(29,'2022_10_23_075846_create_settings_table',1),(30,'2022_10_23_080942_create_galleries_table',1),(31,'2022_10_24_111948_create_partners_table',1),(32,'2022_10_24_111948_create_teams_table',1),(33,'2022_10_26_125729_create_pages_table',1),(34,'2022_10_26_125729_create_services_table',1),(35,'2022_10_29_155126_create_messages_table',1),(36,'2022_10_29_155126_create_newsletters_table',1),(37,'2022_10_29_155126_create_orders_table',1),(38,'2022_10_29_155126_create_serviceRequests_table',1),(39,'2022_10_30_133959_add_columns_to_orders_table',1),(40,'2022_10_30_145447_add_transaction_reference_to_orders_table',1),(41,'2022_11_06_150334_create_images_table',1),(42,'2022_11_26_153759_create_orderproducts_table',1),(43,'2022_11_26_153759_create_videos_table',1),(44,'2022_11_26_154654_create_contacts_table',1),(45,'2022_11_26_154654_create_counters_table',1),(46,'2022_11_26_154654_create_projects_table',1),(47,'2023_06_26_173744_create_permission_tables',1),(48,'2023_06_27_154699_create_fees_table',1),(49,'2023_06_27_154699_create_tasks_table',1),(50,'2023_06_27_170717_create_banner_translations_table',1),(51,'2023_06_27_170717_create_brand_translations_table',1),(52,'2023_06_27_170717_create_category_translations_table',1),(53,'2023_06_27_170717_create_chooseUs_translations_table',1),(54,'2023_06_27_170717_create_color_translations_table',1),(55,'2023_06_27_170717_create_faq_translations_table',1),(56,'2023_06_27_170717_create_itemRequest_translations_table',1),(57,'2023_06_27_170717_create_offer_translations_table',1),(58,'2023_06_27_170717_create_process_translations_table',1),(59,'2023_06_27_170717_create_product_translations_table',1),(60,'2023_06_27_170717_create_size_translations_table',1),(61,'2023_06_27_170717_create_slider_translations_table',1),(62,'2023_06_27_170717_create_store_translations_table',1),(63,'2023_06_27_170717_create_subcategory_translations_table',1),(64,'2023_06_27_170717_create_testimonial_translations_table',1),(65,'2023_06_28_105000_create_files_table',1),(66,'2023_06_28_175550_create_setting_translations_table',1),(67,'2023_06_28_180004_create_gallery_translations_table',1),(68,'2023_06_28_180137_create_partner_translations_table',1),(69,'2023_06_28_180137_create_team_translations_table',1),(70,'2023_06_28_180243_create_page_translations_table',1),(71,'2023_06_28_180243_create_service_translations_table',1),(72,'2023_06_28_180523_create_video_translations_table',1),(73,'2023_06_28_180559_create_counter_translations_table',1),(74,'2023_10_23_075806_create_productVariations_table',1),(75,'2023_11_22_170717_create_productVariation_translations_table',1),(76,'2024_05_18_143428_create_b_settings_table',1),(77,'2024_06_17_142322_create_complains_table',1),(78,'2024_06_17_143258_create_complain_translations_table',1),(79,'2024_06_19_070504_create_vaccancies_table',1),(80,'2024_06_20_090402_create_vaccancy_translations_table',1),(81,'2025_01_09_133939_add_youtibe_link_to_pages_table',1),(82,'2025_01_18_153527_create_storeBrands_table',1),(83,'2025_01_18_153527_create_storeCategories_table',1),(84,'2025_02_04_131459_add_cart_to_users_table',1),(85,'2025_02_05_092041_add_sort_is_top_to_brands',1),(86,'2025_02_06_142130_create_addresses_table',1),(87,'2025_02_09_093328_add_status_to_orders',1),(88,'2025_02_09_114426_remove_address_from_table',1),(89,'2025_02_09_135754_add_current_to_addresses',1),(90,'2025_02_09_140613_add_cancel_reason_to_orders_table',1),(91,'2025_02_13_091838_add_variation_id_to_orderproducts_table',1),(92,'2025_02_16_134128_create_temb_orders_table',1),(93,'2025_02_16_135542_create_temb_order_products_table',1),(94,'2025_02_16_145447_add_balance_to_users_table',1),(95,'2025_02_18_082138_add_color_to_products_table',1),(96,'2025_02_18_082138_add_status_to_users_table',1),(97,'2025_02_20_155447_add_payment_name_to_orders_table',1),(98,'2025_02_22_155447_add_paid_at_to_orders_table',1),(99,'2025_02_23_182138_add_fcm_to_users_table',1),(100,'2025_02_26_111904_create_transactions_table',1),(101,'2025_02_26_141557_add_column_to_colors_table',1),(102,'2025_03_02_095625_update_status_comment_in_orders_table',1),(103,'2025_03_02_101355_rename_failed_at_to_returned_at_in_orders_table',1),(104,'2025_03_03_145912_add_uuid_to_users_table',1),(105,'2025_03_09_105322_create_merchantRequests_table',1),(106,'2025_03_09_145912_add_category_to_banners_table',1),(107,'2025_03_10_110518_add_merchant_name_to_merchants_table',1),(108,'2025_03_10_110519_add_merchant_id_to_stores_table',1),(109,'2025_03_12_122719_create_product_requests_table',1),(110,'2025_03_19_114309_add_columns_to_item_requests_tables',1),(111,'2025_03_19_114309_add_variationImages_to_item_requests_tables',1),(112,'2025_03_19_122719_create_favorites_table',1),(113,'2025_03_19_145912_add_type_to_banners_table',1),(114,'2025_03_24_104820_add_new_fields_to_settings_table',1),(115,'2025_03_26_110624_add_otp_to_users_table',1),(116,'2025_03_26_110624_add_price_to_products_table',1),(117,'2025_03_30_193701_remove_variation_from_orderproducts',1),(118,'2025_03_6_145915_create_merchants_table',1),(119,'2025_04_08_125839_add_title_and_subtitle_to_slider_translations_table',1),(120,'2025_04_09_104636_update_orders_table_replace_address_id_with_address',1),(121,'2025_04_09_105414_add_type_to_categories_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES (1,'App\\Models\\Admin',1);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `newsletterEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `newsletters_newsletteremail_unique` (`newsletterEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletters`
--

LOCK TABLES `newsletters` WRITE;
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
INSERT INTO `newsletters` (`id`, `newsletterEmail`, `created_at`, `updated_at`) VALUES (1,'ibrahimsamy308@gmail.com','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'Kero@gmail.com','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'ibrahim@gmail.com','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offer_translations`
--

DROP TABLE IF EXISTS `offer_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offer_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `offer_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `offer_translations_offer_id_locale_unique` (`offer_id`,`locale`),
  KEY `offer_translations_locale_index` (`locale`),
  CONSTRAINT `offer_translations_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offer_translations`
--

LOCK TABLES `offer_translations` WRITE;
/*!40000 ALTER TABLE `offer_translations` DISABLE KEYS */;
INSERT INTO `offer_translations` (`id`, `title`, `subtitle`, `description`, `offer_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'دعاية',NULL,'Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',1,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'ADVERTISING','Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',NULL,1,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'احجز جلسة تدريب شخصية مجانية',NULL,'Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',2,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'BOOK A FREE PERSONAL TRAINING SESSION','Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',NULL,2,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'دعاية',NULL,'Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',3,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'ADVERTISING','Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',NULL,3,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,'اللياقة البدنية الداخلية',NULL,'Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',4,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,'INDOOR FITNESS','Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',NULL,4,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,'اللياقة البدنية فنون القتال المختلطة',NULL,'Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',5,'ar','2025-06-29 04:01:40','2025-06-29 04:01:40'),(10,'MMA FITNESS','Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',NULL,5,'en','2025-06-29 04:01:40','2025-06-29 04:01:40'),(11,'اللياقة البدنية في الهواء الطلق',NULL,'Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',6,'ar','2025-06-29 04:01:40','2025-06-29 04:01:40'),(12,'OUTDOOR FITNESS','Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',NULL,6,'en','2025-06-29 04:01:40','2025-06-29 04:01:40'),(13,'جلسة المقاومة الإسبارطية',NULL,'Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',7,'ar','2025-06-29 04:01:40','2025-06-29 04:01:40'),(14,'SPARTAN RESISTANCE SESSION','Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',NULL,7,'en','2025-06-29 04:01:40','2025-06-29 04:01:40'),(15,'معسكر الشاطئ التدريبي',NULL,'Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',8,'ar','2025-06-29 04:01:40','2025-06-29 04:01:40'),(16,'BEACH BOOTCAMP','Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',NULL,8,'en','2025-06-29 04:01:40','2025-06-29 04:01:40'),(17,'جلسة وظائف الجسم بالكامل',NULL,'Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',9,'ar','2025-06-29 04:01:40','2025-06-29 04:01:40'),(18,'FULL BODY FUNC SESSION','Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',NULL,9,'en','2025-06-29 04:01:40','2025-06-29 04:01:40'),(19,'دعاية',NULL,'Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',10,'ar','2025-06-29 04:01:40','2025-06-29 04:01:40'),(20,'ADVERTISING','Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',NULL,10,'en','2025-06-29 04:01:40','2025-06-29 04:01:40'),(21,'خطة النظام الغذائي والتغذية',NULL,'Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',11,'ar','2025-06-29 04:01:40','2025-06-29 04:01:40'),(22,'DIET & NUTRITION PLAN','Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',NULL,11,'en','2025-06-29 04:01:40','2025-06-29 04:01:40'),(23,'دعاية',NULL,'Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',12,'ar','2025-06-29 04:01:40','2025-06-29 04:01:40'),(24,'ADVERTISING','Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.',NULL,12,'en','2025-06-29 04:01:40','2025-06-29 04:01:40');
/*!40000 ALTER TABLE `offer_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offers`
--

LOCK TABLES `offers` WRITE;
/*!40000 ALTER TABLE `offers` DISABLE KEYS */;
INSERT INTO `offers` (`id`, `icon`, `created_at`, `updated_at`) VALUES (1,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,NULL,'2025-06-29 04:01:40','2025-06-29 04:01:40'),(6,NULL,'2025-06-29 04:01:40','2025-06-29 04:01:40'),(7,NULL,'2025-06-29 04:01:40','2025-06-29 04:01:40'),(8,NULL,'2025-06-29 04:01:40','2025-06-29 04:01:40'),(9,NULL,'2025-06-29 04:01:40','2025-06-29 04:01:40'),(10,NULL,'2025-06-29 04:01:40','2025-06-29 04:01:40'),(11,NULL,'2025-06-29 04:01:40','2025-06-29 04:01:40'),(12,NULL,'2025-06-29 04:01:40','2025-06-29 04:01:40');
/*!40000 ALTER TABLE `offers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderproducts`
--

DROP TABLE IF EXISTS `orderproducts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderproducts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `count` bigint(20) unsigned NOT NULL,
  `total` double DEFAULT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `order_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orderproducts_product_id_foreign` (`product_id`),
  KEY `orderproducts_order_id_foreign` (`order_id`),
  CONSTRAINT `orderproducts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orderproducts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderproducts`
--

LOCK TABLES `orderproducts` WRITE;
/*!40000 ALTER TABLE `orderproducts` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderproducts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` double DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cancelled_by` int(11) DEFAULT NULL COMMENT '1->customer, 2->merchant, 3->app, 4->timeout',
  `pending_at` timestamp NULL DEFAULT NULL,
  `in_processing_at` timestamp NULL DEFAULT NULL,
  `cancelled_at` timestamp NULL DEFAULT NULL,
  `shipped_at` timestamp NULL DEFAULT NULL,
  `out_for_delivery_at` timestamp NULL DEFAULT NULL,
  `delivered_at` timestamp NULL DEFAULT NULL,
  `refunded_at` timestamp NULL DEFAULT NULL,
  `transaction_reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'digital_payment, wallet',
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending' COMMENT 'pending,in_processing,cancelled,shipped,out_for_delivery,delivered,refunded,returned',
  `cancelReason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'cards, apple_pay, stc_pay, wallet',
  `paid_at` timestamp NULL DEFAULT NULL,
  `returned_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_translations`
--

DROP TABLE IF EXISTS `page_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `page_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_translations_page_id_locale_unique` (`page_id`,`locale`),
  KEY `page_translations_locale_index` (`locale`),
  CONSTRAINT `page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_translations`
--

LOCK TABLES `page_translations` WRITE;
/*!40000 ALTER TABLE `page_translations` DISABLE KEYS */;
INSERT INTO `page_translations` (`id`, `title`, `subtitle`, `description`, `page_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'إنشاء مواقع ويب للشركات الكبيرة و الصغيرة','أفضل حلول برمجة الويب','ً<p>نحن من ذوي الخبرة في إنشاء مواقع الويب التي يمكن أن تخدم أعمالك وتلبي جميع متطلباتك</p>',1,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'Creating Websites for small and big businesses','Best Web Solutions','<p>We are experienced in creating websites that can serve your business and meet all your requirements</p>',1,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'معلومات عنا','نحن شركة برمجة مواقع ويب ','<p>مرحبًا بكم في شركة يوساب تك، الشركة الرائدة في مجال تطوير الويب والملتزمة بتقديم تجارب رقمية استثنائية. بفضل شغفنا بالإبداع والخبرة التقنية، نحن متخصصون في صياغة حلول الويب المخصصة التي تساعد الشركات على الازدهار في العالم الرقمي. في يوساب تك، نحن نفهم قوة موقع الويب المصمم جيدًا. إنها بمثابة واجهة متجر رقمية لعلامتك التجارية، حيث تربطك بجمهورك المستهدف وتدفع النمو. يعمل فريقنا من مطوري الويب والمصممين والاستراتيجيين الرقميين المهرة بشكل تعاوني لإنشاء مواقع ويب جذابة تركز على المستخدم وتترك انطباعًا دائمًا.</p>',2,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'About US','We are a web development company.','<p>Welcome to Yousab Tech, a leading web development company committed to delivering exceptional digital experiences. With a passion for creativity and technical expertise, we specialize in crafting custom web solutions that help businesses thrive in the digital world. At Yousab Tech, we understand the power of a well-designed website. It serves as the digital storefront for your brand, connecting you with your target audience and driving growth. Our team of skilled web developers, designers, and digital strategists work collaboratively to create engaging, user-centric websites that leave a lasting impression.</p>',2,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'نحن نقدم أفضل حلول الويب',NULL,'<p>نحن نقدم مجموعة شاملة من خدمات تطوير الويب لمساعدة الشركات على تأسيس تواجد قوي عبر الإنترنت وتحقيق أهدافها الرقمية. مع فريق من المهنيين ذوي المهارات العالية، فإننا نجمع بين الإبداع والخبرة الفنية وأفضل ممارسات الصناعة لتقديم حلول ويب استثنائية. وهنا بعض من الخدمات التي نقدمها</p>',3,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'We provide the best Web solutions',NULL,'<p>We offer a comprehensive range of web development services to help businesses   establish a strong online presence and achieve their digital goals. With a team of highly skilled professionals, we combine creativity, technical expertise, and industry best practices to deliver exceptional web solutions. Here are some of the services we provide</p>',3,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,'سابقة اعمالنا ','سابقة الأعمال','<p>نحن نفخر بالمجموعة المتنوعة من المشاريع التي نجحنا في تسليمها لعملائنا. تعرض  سابقة اعمالنا خبرتنا في تطوير الويب والتصميم والحلول الرقمية</p>',4,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,'Our latest Portfolio for your choice','Portfolio Templates','<p>We take great pride in the diverse range of projects we have successfully delivered for our clients. Our portfolio showcases our expertise in web development, design, and digital solutions. Here are a few highlights</p>',4,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,'كيف نعمل','آلية العمل','<p>تم تصميم الية العمل لدينا لإبقاء عملائنا مشاركين ومطلعين وراضين طوال كل مرحلة من مراحل المشروع. وفيما يلي نظرة عامة على عملية عملنا</p>',5,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,'How it works','Work Process','<p>Our work process is designed to keep our clients involved, informed, and satisfied throughout each stage of the project. Here\'s an overview of our work process</p>',5,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(11,'اعرف المزيد عن حلول الويب لدينا','الأسئلة التي قد تتبادر إلى ذهنك','<p>إذا كان لديك المزيد من الأسئلة، نحن هنا للمساعدة! لا تتردد في الاتصال بنا، وسيكون فريقنا سعيدًا بتزويدك بمزيد من المعلومات ومعالجة أي مخاوف محددة قد تكون لديك</p>',6,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(12,'Know more about our web solutions','Questions that may come to your mind','<p>If you have more questions, We\'re here to help! Feel free to contact us, and our team will be happy to provide you with further information and address any specific concerns you may have</p>',6,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(13,'لدينا مهارة مهنية','مهارة احترافية',NULL,7,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(14,'We have professional skilled','Professional Skill',NULL,7,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(15,'فريق العمل','تعرف على فريق العمل','<p>لقد قمنا بتجميع فريق من المهنيين ذوي المهارات العالية والحماس الذين يكرسون جهودهم لتقديم حلول استثنائية لتطوير الويب</p>',8,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(16,'Expert Team','Meet with our expert','<p>we have assembled a team of highly skilled and passionate professionals who are dedicated to delivering exceptional web development solutions</p>',8,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(17,'تواصل معنا ','ابقى على تواصل','<p>نحن نقدر التواصل المفتوح والشفاف مع عملائنا. سواء كان لديك سؤال، أو فكرة مشروع، أو ببساطة تريد معرفة المزيد حول خدمات تطوير الويب لدينا، فإن فريقنا موجود لمساعدتك</p>',9,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(18,'Contact','Get in touch','<p>We value open and transparent communication with our clients. Whether you have a question, a project idea, or simply want to learn more about our web development services, our team is here to assist you</p>',9,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(19,'نحن هنا للإجابة على أسئلتك على مدار اليوم','تحتاج إلى خدمات الحل','<p>Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue atpellentesque laoreet</p>',10,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(20,'We are here to answer your questions 24/7','Need for it solution services','<p>Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue atpellentesque laoreet</p>',10,'en','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `page_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `identifier`, `created_at`, `updated_at`, `youtube_link`) VALUES (1,'home-banner','2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(2,'about-us','2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(3,'service-section','2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(4,'portfolio-section','2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(5,'process-section','2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(6,'faq-section','2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(7,'skills-section','2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(8,'team-section','2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(9,'contact-section','2025-06-29 04:01:39','2025-06-29 04:01:39',NULL),(10,'solution-section','2025-06-29 04:01:39','2025-06-29 04:01:39',NULL);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partner_translations`
--

DROP TABLE IF EXISTS `partner_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partner_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `partner_translations_partner_id_locale_unique` (`partner_id`,`locale`),
  KEY `partner_translations_locale_index` (`locale`),
  CONSTRAINT `partner_translations_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partner_translations`
--

LOCK TABLES `partner_translations` WRITE;
/*!40000 ALTER TABLE `partner_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `partner_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (1,'role-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'role-create','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'role-edit','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'role-delete','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'product-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'product-create','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,'product-edit','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,'product-delete','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,'image-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,'image-create','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(11,'image-edit','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(12,'image-delete','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(13,'category-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(14,'category-create','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(15,'category-edit','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(16,'category-delete','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(17,'setting-edit','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(18,'orderproduct-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(19,'orderproduct-create','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(20,'orderproduct-edit','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(21,'orderproduct-delete','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(22,'admin-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(23,'admin-create','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(24,'admin-edit','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(25,'admin-delete','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(26,'message-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(27,'message-delete','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(28,'message-reply','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(29,'order-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(30,'order-reply','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(31,'newsletter-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(32,'newsletter-delete','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(33,'newsletter-reply','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(34,'subcategory-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(35,'subcategory-create','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(36,'subcategory-edit','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(37,'subcategory-delete','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(38,'slider-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(39,'slider-create','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(40,'slider-edit','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(41,'slider-delete','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(42,'chooseUs-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(43,'chooseUs-create','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(44,'chooseUs-edit','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(45,'chooseUs-delete','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(46,'service-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(47,'service-create','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(48,'service-edit','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(49,'service-delete','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(50,'page-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(51,'page-edit','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(52,'contact-list','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(53,'contact-create','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(54,'contact-edit','admin','2025-06-29 04:01:39','2025-06-29 04:01:39'),(55,'contact-delete','admin','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `process_translations`
--

DROP TABLE IF EXISTS `process_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `process_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `process_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `process_translations_process_id_locale_unique` (`process_id`,`locale`),
  KEY `process_translations_locale_index` (`locale`),
  CONSTRAINT `process_translations_process_id_foreign` FOREIGN KEY (`process_id`) REFERENCES `processes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `process_translations`
--

LOCK TABLES `process_translations` WRITE;
/*!40000 ALTER TABLE `process_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `process_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `processes`
--

DROP TABLE IF EXISTS `processes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `processes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `processes`
--

LOCK TABLES `processes` WRITE;
/*!40000 ALTER TABLE `processes` DISABLE KEYS */;
/*!40000 ALTER TABLE `processes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productOffers`
--

DROP TABLE IF EXISTS `productOffers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productOffers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `percentage` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productOffers`
--

LOCK TABLES `productOffers` WRITE;
/*!40000 ALTER TABLE `productOffers` DISABLE KEYS */;
INSERT INTO `productOffers` (`id`, `startDate`, `endDate`, `percentage`, `created_at`, `updated_at`) VALUES (1,'2025-07-07','2025-07-12',38,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'2025-07-08','2025-07-13',40,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'2025-07-08','2025-07-16',38,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'2025-06-29','2025-07-11',40,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'2025-07-07','2025-07-17',22,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'2025-07-06','2025-07-15',36,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,'2025-06-30','2025-07-17',32,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,'2025-06-29','2025-07-10',32,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,'2025-07-04','2025-07-10',36,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,'2025-07-06','2025-07-10',31,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(11,'2025-07-01','2025-07-09',33,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(12,'2025-07-05','2025-07-17',35,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(13,'2025-07-06','2025-07-09',39,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(14,'2025-07-07','2025-07-18',28,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(15,'2025-07-04','2025-07-18',26,'2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `productOffers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productVariation_translations`
--

DROP TABLE IF EXISTS `productVariation_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productVariation_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `productVariation_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `productvariation_translations_productvariation_id_locale_unique` (`productVariation_id`,`locale`),
  KEY `productvariation_translations_locale_index` (`locale`),
  CONSTRAINT `productvariation_translations_productvariation_id_foreign` FOREIGN KEY (`productVariation_id`) REFERENCES `productVariations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productVariation_translations`
--

LOCK TABLES `productVariation_translations` WRITE;
/*!40000 ALTER TABLE `productVariation_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `productVariation_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productVariations`
--

DROP TABLE IF EXISTS `productVariations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productVariations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `price` double NOT NULL DEFAULT '0',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `product_id` bigint(20) unsigned DEFAULT NULL,
  `size_id` bigint(20) unsigned DEFAULT NULL,
  `color_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productvariations_product_id_foreign` (`product_id`),
  KEY `productvariations_size_id_foreign` (`size_id`),
  KEY `productvariations_color_id_foreign` (`color_id`),
  CONSTRAINT `productvariations_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  CONSTRAINT `productvariations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `productvariations_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productVariations`
--

LOCK TABLES `productVariations` WRITE;
/*!40000 ALTER TABLE `productVariations` DISABLE KEYS */;
INSERT INTO `productVariations` (`id`, `price`, `quantity`, `product_id`, `size_id`, `color_id`, `created_at`, `updated_at`) VALUES (1,237,188,7,10,9,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,300,85,10,7,4,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,384,54,3,8,9,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,411,32,7,3,2,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,270,67,9,9,6,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,457,70,9,10,4,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,369,13,2,1,2,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,182,31,2,9,3,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,252,162,5,6,4,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,332,88,4,6,2,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(11,155,129,2,9,9,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(12,269,44,6,1,4,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(13,267,124,1,2,6,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(14,242,61,6,6,4,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(15,108,46,5,4,3,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(16,436,185,1,5,2,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(17,461,143,7,10,7,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(18,472,97,5,10,2,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(19,277,129,2,7,3,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(20,312,138,6,3,6,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(21,324,26,1,8,7,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(22,185,172,9,8,7,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(23,208,150,8,1,6,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(24,412,130,6,1,4,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(25,296,186,8,2,7,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(26,453,79,6,10,9,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(27,323,184,6,1,8,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(28,301,200,8,5,3,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(29,156,100,8,3,8,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(30,453,186,10,1,1,'2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `productVariations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_requests`
--

DROP TABLE IF EXISTS `product_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_requests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` bigint(20) unsigned NOT NULL,
  `reviewer_id` bigint(20) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'create, edit',
  `data` longtext COLLATE utf8mb4_unicode_ci,
  `product_id` bigint(20) unsigned DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'pending, accepted',
  `rejected_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affected_fields` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_requests_product_id_foreign` (`product_id`),
  KEY `product_requests_reviewer_id_foreign` (`reviewer_id`),
  CONSTRAINT `product_requests_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `product_requests_reviewer_id_foreign` FOREIGN KEY (`reviewer_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_requests`
--

LOCK TABLES `product_requests` WRITE;
/*!40000 ALTER TABLE `product_requests` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_translations`
--

DROP TABLE IF EXISTS `product_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `product_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`),
  KEY `product_translations_locale_index` (`locale`),
  CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_translations`
--

LOCK TABLES `product_translations` WRITE;
/*!40000 ALTER TABLE `product_translations` DISABLE KEYS */;
INSERT INTO `product_translations` (`id`, `title`, `description`, `product_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'ورود حمراء رومانسية','<p>باقة من الورود الحمراء العميقة، مثالية للتعبير عن الحب والرومانسية.</p>',1,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'Romantic Red Roses','<p>A bouquet of deep red roses, perfect for expressing love and romance.</p>',1,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'زنابق بيضاء أنيقة','<p>زنابق بيضاء أنيقة ترمز إلى النقاء والرقي، مناسبة لجميع المناسبات.</p>',2,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'Elegant White Lilies','<p>Elegant white lilies that symbolize purity and grace, ideal for any occasion.</p>',2,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'باقة عباد الشمس المشرقة','<p>زهور عباد الشمس المشرقة التي تضيف الدفء والسعادة لأي مكان.</p>',3,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'Sunshine Sunflower Bouquet','<p>Bright sunflowers that bring warmth and happiness into any space.</p>',3,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,'زهور الربيع المختلطة','<p>خليط من زهور الربيع يضفي لمسة منعشة ومفعمة بالألوان.</p>',4,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,'Mixed Spring Flowers','<p>A mix of spring flowers to add freshness and color to your home.</p>',4,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,'تنسيق أوركيد فاخر','<p>تنسيق فاخر من زهور الأوركيد لإضافة لمسة من الأناقة.</p>',5,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,'Luxury Orchid Arrangement','<p>Luxury orchids arranged beautifully for a touch of sophistication.</p>',5,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(11,'ورود خاصة لعيد الحب','<p>باقة ورد حمراء مصممة خصيصًا لمفاجآت عيد الحب.</p>',6,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(12,'Valentine\'s Special Roses','<p>Specially crafted red roses bouquet for Valentine\'s Day surprises.</p>',6,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(13,'بهجة الفاونيا الوردية','<p>فاونيا وردية ناعمة لتنسيق زهور رقيق وساحر.</p>',7,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(14,'Pink Peony Delight','<p>Soft pink peonies for a delicate and charming floral arrangement.</p>',7,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(15,'باقة حب التوليب','<p>باقة توليب نابضة بالحياة، رمز الحب المثالي.</p>',8,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(16,'Tulip Love Bouquet','<p>A vibrant tulip bouquet, a symbol of perfect love.</p>',8,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(17,'مجموعة القرنفل الكلاسيكية','<p>قرنفل كلاسيكي يعبر عن الإعجاب العميق والحب.</p>',9,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(18,'Classic Carnation Bunch','<p>Classic carnations that represent deep admiration and love.</p>',9,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(19,'لافندر طازج من الحديقة','<p>لافندر طازج معروف برائحته الهادئة ومظهره الأنيق.</p>',10,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(20,'Garden Fresh Lavender','<p>Fresh lavender, known for its calming scent and elegant look.</p>',10,'en','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `product_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `weight` double NOT NULL DEFAULT '0',
  `rate` double NOT NULL DEFAULT '5',
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `subcategory_id` bigint(20) unsigned DEFAULT NULL,
  `brand_id` bigint(20) unsigned DEFAULT NULL,
  `store_id` bigint(20) unsigned DEFAULT NULL,
  `productOffer_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `backgroundColor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#C6C6C6',
  `price` double NOT NULL DEFAULT '0',
  `quantity` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_subcategory_id_foreign` (`subcategory_id`),
  KEY `products_brand_id_foreign` (`brand_id`),
  KEY `products_store_id_foreign` (`store_id`),
  KEY `products_productoffer_id_foreign` (`productOffer_id`),
  CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_productoffer_id_foreign` FOREIGN KEY (`productOffer_id`) REFERENCES `productOffers` (`id`) ON DELETE SET NULL,
  CONSTRAINT `products_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `weight`, `rate`, `SKU`, `category_id`, `subcategory_id`, `brand_id`, `store_id`, `productOffer_id`, `created_at`, `updated_at`, `backgroundColor`, `price`, `quantity`) VALUES (1,0,4.6,'SKU-KDGLSOPF',2,3,NULL,NULL,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39','#C6C6C6',614,30),(2,0,3,'SKU-TEVBDCPD',1,1,NULL,NULL,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39','#C6C6C6',396,22),(3,0,3.1,'SKU-NK3IBZF6',10,7,NULL,NULL,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39','#C6C6C6',573,42),(4,0,3.2,'SKU-U7G6AHIG',3,4,NULL,NULL,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39','#C6C6C6',262,6),(5,0,3.7,'SKU-SNG9YHBJ',2,1,NULL,NULL,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39','#C6C6C6',143,15),(6,0,3.3,'SKU-JTKALLNH',7,3,NULL,NULL,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39','#C6C6C6',191,11),(7,0,5,'SKU-S6UYO0GN',8,2,NULL,NULL,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39','#C6C6C6',368,5),(8,0,3.1,'SKU-6FNHKNYR',4,1,NULL,NULL,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39','#C6C6C6',389,43),(9,0,4.9,'SKU-4DDAOK8P',5,4,NULL,NULL,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39','#C6C6C6',140,42),(10,0,3.9,'SKU-A5IHUHA9',8,6,NULL,NULL,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39','#C6C6C6',302,12);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `cost` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (1,'admin','admin','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serviceRequests`
--

DROP TABLE IF EXISTS `serviceRequests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serviceRequests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serviceRequest` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serviceRequests`
--

LOCK TABLES `serviceRequests` WRITE;
/*!40000 ALTER TABLE `serviceRequests` DISABLE KEYS */;
/*!40000 ALTER TABLE `serviceRequests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_translations`
--

DROP TABLE IF EXISTS `service_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `service_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `service_translations_service_id_locale_unique` (`service_id`,`locale`),
  KEY `service_translations_locale_index` (`locale`),
  CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_translations`
--

LOCK TABLES `service_translations` WRITE;
/*!40000 ALTER TABLE `service_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting_translations`
--

DROP TABLE IF EXISTS `setting_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `address` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `appointment` text COLLATE utf8mb4_unicode_ci,
  `copyright` text COLLATE utf8mb4_unicode_ci,
  `meta_data` text COLLATE utf8mb4_unicode_ci,
  `policy` text COLLATE utf8mb4_unicode_ci,
  `setting_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  KEY `setting_translations_locale_index` (`locale`),
  CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting_translations`
--

LOCK TABLES `setting_translations` WRITE;
/*!40000 ALTER TABLE `setting_translations` DISABLE KEYS */;
INSERT INTO `setting_translations` (`id`, `address`, `title`, `description`, `appointment`, `copyright`, `meta_data`, `policy`, `setting_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'Palm Hills Entrance, Mohandeseen, Grand Nile Tower Hotel - Egypt','Flower Fiori','Founded in 1994, Flower Fiori has become one of the leading brands in floral arrangement and supply in Egypt. Over the years, we have collaborated with elite companies such as EFG Hermes and Arab African International Bank. Our influence extends to Egypt\'s most luxurious hotels, including Four Seasons Hotel, Hilton Heliopolis, and Hilton Grand Nile Tower.',': 24/7','Copyright reserved by Flower Fiori © 2025','Flower Fiori - The Art of Floral Design & Luxury Arrangements','Flower Fiori - Excellence in Floral Art & Supply',1,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'مدخل بالم هيلز، المهندسين، فندق جراند نايل تاور - مصر','فلاور فيوري','تأسست Flower Fiori في عام 1994 لتصبح واحدة من أبرز العلامات في عالم تنسيق وتوريد الزهور في مصر. على مدار السنوات، عملنا مع نخبة من الشركات الكبرى مثل المجموعة المالية هيرميس والبنك العربي الأفريقي الدولي. وامتد تأثيرنا إلى أهم الفنادق الفاخرة في مصر، بما في ذلك فندق فورسيزونز، فندق هيلتون هليوبوليس، وهيلتون جراند نايل تاور.',': 24/7','جميع الحقوق محفوظة لدى Flower Fiori © 2025','فلاور فيوري - فن تصميم الزهور والتنسيقات الفاخرة','فلاور فيوري - التميز في فن الزهور وتوريدها',1,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `setting_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `white_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breadcrumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` text COLLATE utf8mb4_unicode_ci,
  `longitude` text COLLATE utf8mb4_unicode_ci,
  `nutritionDefault` text COLLATE utf8mb4_unicode_ci,
  `shipping` double DEFAULT NULL,
  `taxes` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `logo`, `white_logo`, `tab`, `breadcrumb`, `map`, `image`, `latitude`, `longitude`, `nutritionDefault`, `shipping`, `taxes`, `created_at`, `updated_at`, `email`, `whatsapp`, `mobile`) VALUES (1,'images/logo.png','images/logo.png','images/logo.png','images/TZb0eNyyzriIwXIELETQjBS5qdmYXQfmfegHEmQz.png','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55275.18948853619!2d31.18964315!3d30.016788299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458469235579697%3A0x4e91d61f9878fc52!2sGiza%2C%20El%20Omraniya%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1695471231297!5m2!1sen!2seg\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','image',NULL,NULL,NULL,NULL,NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39',NULL,NULL,NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `size_translations`
--

DROP TABLE IF EXISTS `size_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `size_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `size_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `size_translations_size_id_locale_unique` (`size_id`,`locale`),
  KEY `size_translations_locale_index` (`locale`),
  CONSTRAINT `size_translations_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `size_translations`
--

LOCK TABLES `size_translations` WRITE;
/*!40000 ALTER TABLE `size_translations` DISABLE KEYS */;
INSERT INTO `size_translations` (`id`, `title`, `subtitle`, `description`, `size_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'صغير جدًا',NULL,NULL,1,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'Extra Small',NULL,NULL,1,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'صغير',NULL,NULL,2,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'Small',NULL,NULL,2,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'متوسط',NULL,NULL,3,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'Medium',NULL,NULL,3,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,'كبير',NULL,NULL,4,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,'Large',NULL,NULL,4,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,'كبير جدًا',NULL,NULL,5,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,'Extra Large',NULL,NULL,5,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(11,'ضعف كبير جدًا',NULL,NULL,6,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(12,'Double Extra Large',NULL,NULL,6,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(13,'ثلاثي كبير جدًا',NULL,NULL,7,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(14,'Triple Extra Large',NULL,NULL,7,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(15,'مقاس واحد يناسب الجميع',NULL,NULL,8,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(16,'One Size Fits All',NULL,NULL,8,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(17,'صغير الحجم',NULL,NULL,9,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(18,'Petite',NULL,NULL,9,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(19,'مقاس كبير',NULL,NULL,10,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(20,'Plus Size',NULL,NULL,10,'en','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `size_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sizes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sizes_store_id_foreign` (`store_id`),
  CONSTRAINT `sizes_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sizes`
--

LOCK TABLES `sizes` WRITE;
/*!40000 ALTER TABLE `sizes` DISABLE KEYS */;
INSERT INTO `sizes` (`id`, `store_id`, `created_at`, `updated_at`) VALUES (1,4,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,1,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,7,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,3,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,1,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,3,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,7,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,7,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,3,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,1,'2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider_translations`
--

DROP TABLE IF EXISTS `slider_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slider_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slider_translations_slider_id_locale_unique` (`slider_id`,`locale`),
  KEY `slider_translations_locale_index` (`locale`),
  CONSTRAINT `slider_translations_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider_translations`
--

LOCK TABLES `slider_translations` WRITE;
/*!40000 ALTER TABLE `slider_translations` DISABLE KEYS */;
INSERT INTO `slider_translations` (`id`, `slider_id`, `locale`, `created_at`, `updated_at`, `title`, `subtitle`) VALUES (1,1,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39','توصيل الورد الطازج','فاجئ أحبّاءك بترتيبات زهور طازجة'),(2,1,'en','2025-06-29 04:01:39','2025-06-29 04:01:39','Fresh Flowers Delivered','Surprise your loved ones with fresh floral arrangements'),(3,2,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39','ازهِر يومك','ابدأ يومك بالألوان والعطور'),(4,2,'en','2025-06-29 04:01:39','2025-06-29 04:01:39','Bloom Your Day','Start your day with colors and fragrances'),(5,3,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39','باقات أنيقة','زهور فاخرة لكل مناسبة'),(6,3,'en','2025-06-29 04:01:39','2025-06-29 04:01:39','Elegant Bouquets','Luxury flowers for every occasion');
/*!40000 ALTER TABLE `slider_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `created_at`, `updated_at`) VALUES (1,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `storeBrands`
--

DROP TABLE IF EXISTS `storeBrands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `storeBrands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` bigint(20) unsigned DEFAULT NULL,
  `brand_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `storebrands_store_id_foreign` (`store_id`),
  KEY `storebrands_brand_id_foreign` (`brand_id`),
  CONSTRAINT `storebrands_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  CONSTRAINT `storebrands_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storeBrands`
--

LOCK TABLES `storeBrands` WRITE;
/*!40000 ALTER TABLE `storeBrands` DISABLE KEYS */;
INSERT INTO `storeBrands` (`id`, `store_id`, `brand_id`, `created_at`, `updated_at`) VALUES (1,1,5,NULL,NULL),(2,1,6,NULL,NULL),(3,2,2,NULL,NULL),(4,2,7,NULL,NULL),(5,3,2,NULL,NULL),(6,3,6,NULL,NULL),(7,4,1,NULL,NULL),(8,4,7,NULL,NULL),(9,5,4,NULL,NULL),(10,5,10,NULL,NULL),(11,6,4,NULL,NULL),(12,6,10,NULL,NULL),(13,7,3,NULL,NULL),(14,7,10,NULL,NULL),(15,8,4,NULL,NULL),(16,8,9,NULL,NULL),(17,9,3,NULL,NULL),(18,9,6,NULL,NULL),(19,10,1,NULL,NULL),(20,10,7,NULL,NULL);
/*!40000 ALTER TABLE `storeBrands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `storeCategories`
--

DROP TABLE IF EXISTS `storeCategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `storeCategories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` bigint(20) unsigned DEFAULT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `storecategories_store_id_foreign` (`store_id`),
  KEY `storecategories_category_id_foreign` (`category_id`),
  CONSTRAINT `storecategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `storecategories_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storeCategories`
--

LOCK TABLES `storeCategories` WRITE;
/*!40000 ALTER TABLE `storeCategories` DISABLE KEYS */;
INSERT INTO `storeCategories` (`id`, `store_id`, `category_id`, `created_at`, `updated_at`) VALUES (1,1,3,NULL,NULL),(2,1,10,NULL,NULL),(3,2,5,NULL,NULL),(4,2,6,NULL,NULL),(5,3,1,NULL,NULL),(6,3,6,NULL,NULL),(7,4,4,NULL,NULL),(8,4,9,NULL,NULL),(9,5,3,NULL,NULL),(10,5,10,NULL,NULL),(11,6,1,NULL,NULL),(12,6,8,NULL,NULL),(13,7,2,NULL,NULL),(14,7,6,NULL,NULL),(15,8,3,NULL,NULL),(16,8,9,NULL,NULL),(17,9,3,NULL,NULL),(18,9,7,NULL,NULL),(19,10,2,NULL,NULL),(20,10,10,NULL,NULL);
/*!40000 ALTER TABLE `storeCategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `store_translations`
--

DROP TABLE IF EXISTS `store_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `store_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `store_translations_store_id_locale_unique` (`store_id`,`locale`),
  KEY `store_translations_locale_index` (`locale`),
  CONSTRAINT `store_translations_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store_translations`
--

LOCK TABLES `store_translations` WRITE;
/*!40000 ALTER TABLE `store_translations` DISABLE KEYS */;
INSERT INTO `store_translations` (`id`, `title`, `description`, `store_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'مركز الموضة','اكتشف أحدث صيحات الموضة.',1,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'Fashion Central','Discover the latest trends in fashion.',1,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'ملاذ التقنية','وجهتك لجميع احتياجات التكنولوجيا.',2,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'Tech Haven','Your one-stop shop for technology needs.',2,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'نعيم الجمال','كل ما تحتاجه لروتين الجمال الخاص بك.',3,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'Beauty Bliss','Find everything for your beauty regimen.',3,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,'أساسيات المنزل','منتجات عالية الجودة لمنزلك.',4,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,'Home Essentials','Top-quality products for your home.',4,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,'مملكة الأطفال','ألعاب وملابس للأطفال من جميع الأعمار.',5,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,'Kids Kingdom','Toys and apparel for kids of all ages.',5,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(11,'مركز الرياضة','تجهيز نفسك لرياضتك المفضلة.',6,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(12,'Sports Hub','Gear up for your favorite sports.',6,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(13,'عالم الأدوات','أحدث الأدوات والاكسسوارات.',7,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(14,'Gadget World','Cutting-edge gadgets and accessories.',7,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(15,'حياة الفخامة','استمتع بمنتجات فاخرة تناسب أسلوب حياتك.',8,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(16,'Luxury Living','Indulge in luxury products for your lifestyle.',8,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(17,'زاوية الكتب','مجموعة مختارة بعناية من الكتب للجميع.',9,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(18,'Book Nook','A curated collection of books for everyone.',9,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(19,'حصاد صحي','منتجات طازجة وعضوية لحياة صحية.',10,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(20,'Healthy Harvest','Fresh and organic products for a healthy life.',10,'en','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `store_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stores`
--

DROP TABLE IF EXISTS `stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deliveryCharge` double NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stores`
--

LOCK TABLES `stores` WRITE;
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;
INSERT INTO `stores` (`id`, `banner`, `deliveryCharge`, `phone`, `email`, `created_at`, `updated_at`) VALUES (1,'store1_banner',16,'+966500000001','store1@gmail.com','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'store2_banner',13,'+966500000002','store2@gmail.com','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'store3_banner',14,'+966500000003','store3@gmail.com','2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'store4_banner',15,'+966500000004','store4@gmail.com','2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'store5_banner',5,'+966500000005','store5@gmail.com','2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'store6_banner',5,'+966500000006','store6@gmail.com','2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,'store7_banner',11,'+966500000007','store7@gmail.com','2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,'store8_banner',10,'+966500000008','store8@gmail.com','2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,'store9_banner',16,'+966500000009','store9@gmail.com','2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,'store10_banner',12,'+966500000010','store10@gmail.com','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `stores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subcategories_category_id_foreign` (`category_id`),
  CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategories`
--

LOCK TABLES `subcategories` WRITE;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` (`id`, `category_id`, `created_at`, `updated_at`) VALUES (1,8,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,1,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,6,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,4,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,5,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,4,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,4,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,8,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,4,'2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,1,'2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategory_translations`
--

DROP TABLE IF EXISTS `subcategory_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategory_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `subcategory_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subcategory_translations_subcategory_id_locale_unique` (`subcategory_id`,`locale`),
  KEY `subcategory_translations_locale_index` (`locale`),
  CONSTRAINT `subcategory_translations_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategory_translations`
--

LOCK TABLES `subcategory_translations` WRITE;
/*!40000 ALTER TABLE `subcategory_translations` DISABLE KEYS */;
INSERT INTO `subcategory_translations` (`id`, `title`, `subtitle`, `description`, `subcategory_id`, `locale`, `created_at`, `updated_at`) VALUES (1,'ورود',NULL,NULL,1,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(2,'Roses',NULL,NULL,1,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(3,'زنابق',NULL,NULL,2,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(4,'Lilies',NULL,NULL,2,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(5,'توليب',NULL,NULL,3,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(6,'Tulips',NULL,NULL,3,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(7,'أوركيد',NULL,NULL,4,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(8,'Orchids',NULL,NULL,4,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(9,'عباد الشمس',NULL,NULL,5,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(10,'Sunflowers',NULL,NULL,5,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(11,'أقحوان',NULL,NULL,6,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(12,'Daisies',NULL,NULL,6,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(13,'قرنفل',NULL,NULL,7,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(14,'Carnations',NULL,NULL,7,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(15,'هيدرانجيا',NULL,NULL,8,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(16,'Hydrangeas',NULL,NULL,8,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(17,'فاوانيا',NULL,NULL,9,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(18,'Peonies',NULL,NULL,9,'en','2025-06-29 04:01:39','2025-06-29 04:01:39'),(19,'غاردينيا',NULL,NULL,10,'ar','2025-06-29 04:01:39','2025-06-29 04:01:39'),(20,'Gardenias',NULL,NULL,10,'en','2025-06-29 04:01:39','2025-06-29 04:01:39');
/*!40000 ALTER TABLE `subcategory_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `employee_id` bigint(20) unsigned DEFAULT NULL,
  `project_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tasks_employee_id_foreign` (`employee_id`),
  KEY `tasks_project_id_foreign` (`project_id`),
  CONSTRAINT `tasks_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tasks_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_translations`
--

DROP TABLE IF EXISTS `team_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `team_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_translations_team_id_locale_unique` (`team_id`,`locale`),
  KEY `team_translations_locale_index` (`locale`),
  CONSTRAINT `team_translations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_translations`
--

LOCK TABLES `team_translations` WRITE;
/*!40000 ALTER TABLE `team_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temb_order_products`
--

DROP TABLE IF EXISTS `temb_order_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temb_order_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temb_order_products`
--

LOCK TABLES `temb_order_products` WRITE;
/*!40000 ALTER TABLE `temb_order_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `temb_order_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temb_orders`
--

DROP TABLE IF EXISTS `temb_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temb_orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` double DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `cart` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `temb_orders_user_id_foreign` (`user_id`),
  CONSTRAINT `temb_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temb_orders`
--

LOCK TABLES `temb_orders` WRITE;
/*!40000 ALTER TABLE `temb_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `temb_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonial_translations`
--

DROP TABLE IF EXISTS `testimonial_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonial_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `testimonial_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `testimonial_translations_testimonial_id_locale_unique` (`testimonial_id`,`locale`),
  KEY `testimonial_translations_locale_index` (`locale`),
  CONSTRAINT `testimonial_translations_testimonial_id_foreign` FOREIGN KEY (`testimonial_id`) REFERENCES `testimonials` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonial_translations`
--

LOCK TABLES `testimonial_translations` WRITE;
/*!40000 ALTER TABLE `testimonial_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `testimonial_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'debit',
  `payment_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'wallet',
  `payment_gateway` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'hyperpay',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_order_id_foreign` (`order_id`),
  KEY `transactions_user_id_foreign` (`user_id`),
  CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cart` longtext COLLATE utf8mb4_unicode_ci,
  `balance` double NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `fcm_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_uuid_unique` (`uuid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `cart`, `balance`, `status`, `fcm_token`, `app_lang`, `uuid`, `otp_code`, `is_verified`) VALUES (1,'Ibrahim Ahmed','ibrahimsamy308@gmail.com','01126785910',NULL,'$2y$10$bTmewdwfp4tcGdqsXVy0iOW3UMII7IFpah87z9qxMlBMnTvPPdsC6',NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39',NULL,0,1,NULL,'en',NULL,NULL,0),(2,'Mohamed Ali','Kero@gmail.com','01126985910',NULL,'$2y$10$INu.TN6iTeRxtA8ioAyFPeqLVGaV9PFnFIu68cbm30Jw/UM/BrDAe',NULL,'2025-06-29 04:01:39','2025-06-29 04:01:39',NULL,0,1,NULL,'en',NULL,NULL,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaccancies`
--

DROP TABLE IF EXISTS `vaccancies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vaccancies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `salary` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaccancies`
--

LOCK TABLES `vaccancies` WRITE;
/*!40000 ALTER TABLE `vaccancies` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaccancies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaccancy_translations`
--

DROP TABLE IF EXISTS `vaccancy_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vaccancy_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `vaccancy_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vaccancy_translations_vaccancy_id_locale_unique` (`vaccancy_id`,`locale`),
  KEY `vaccancy_translations_locale_index` (`locale`),
  CONSTRAINT `vaccancy_translations_vaccancy_id_foreign` FOREIGN KEY (`vaccancy_id`) REFERENCES `vaccancies` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaccancy_translations`
--

LOCK TABLES `vaccancy_translations` WRITE;
/*!40000 ALTER TABLE `vaccancy_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaccancy_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video_translations`
--

DROP TABLE IF EXISTS `video_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `video_translations_video_id_locale_unique` (`video_id`,`locale`),
  KEY `video_translations_locale_index` (`locale`),
  CONSTRAINT `video_translations_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video_translations`
--

LOCK TABLES `video_translations` WRITE;
/*!40000 ALTER TABLE `video_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `video_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `youtube_link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!50112 SET @disable_bulk_load = IF (@is_rocksdb_supported, 'SET SESSION rocksdb_bulk_load = @old_rocksdb_bulk_load', 'SET @dummy_rocksdb_bulk_load = 0') */;
/*!50112 PREPARE s FROM @disable_bulk_load */;
/*!50112 EXECUTE s */;
/*!50112 DEALLOCATE PREPARE s */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-28 15:10:39
