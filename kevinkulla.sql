-- MySQL dump 10.13  Distrib 8.0.22, for osx10.16 (x86_64)
--
-- Host: localhost    Database: kevinkulla
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `charges`
--

DROP TABLE IF EXISTS `charges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `charges` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `charge_id` bigint NOT NULL,
  `test` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `interval` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capped_amount` decimal(8,2) DEFAULT NULL,
  `trial_days` int DEFAULT NULL,
  `billing_on` timestamp NULL DEFAULT NULL,
  `activated_on` timestamp NULL DEFAULT NULL,
  `trial_ends_on` timestamp NULL DEFAULT NULL,
  `cancelled_on` timestamp NULL DEFAULT NULL,
  `expires_on` timestamp NULL DEFAULT NULL,
  `plan_id` int unsigned DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_charge` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `charges_user_id_foreign` (`user_id`),
  KEY `charges_plan_id_foreign` (`plan_id`),
  CONSTRAINT `charges_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`),
  CONSTRAINT `charges_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `charges`
--

LOCK TABLES `charges` WRITE;
/*!40000 ALTER TABLE `charges` DISABLE KEYS */;
/*!40000 ALTER TABLE `charges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collections`
--

DROP TABLE IF EXISTS `collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `collections` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collections`
--

LOCK TABLES `collections` WRITE;
/*!40000 ALTER TABLE `collections` DISABLE KEYS */;
INSERT INTO `collections` VALUES (12,'terracotta church','2021-02-24 19:00:19','2021-02-24 19:00:19','terracotta-church','In the old west the rule of law was determined by who could draw fastest.'),(13,'rooms','2021-02-28 23:50:50','2021-02-28 23:50:50','rooms',NULL);
/*!40000 ALTER TABLE `collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (13,'2014_10_12_000000_create_users_table',1),(14,'2014_10_12_100000_create_password_resets_table',1),(15,'2019_08_19_000000_create_failed_jobs_table',1),(16,'2020_01_29_010501_create_plans_table',1),(17,'2020_01_29_230905_create_shops_table',1),(18,'2020_01_29_231006_create_charges_table',1),(19,'2020_07_03_211514_add_interval_column_to_charges_table',1),(20,'2020_07_03_211854_add_interval_column_to_plans_table',1),(21,'2020_11_24_003530_create_collections_table',1),(22,'2020_11_24_003607_create_paintings_table',1),(23,'2021_01_10_191308_add_url_to_paintings_table',1),(24,'2021_01_11_200750_add_slug_to_paintings_table',1),(25,'2021_01_12_004210_remove_role_from_users_table',2),(26,'2021_01_12_205011_change_description_length',3),(28,'2021_01_12_210106_add_order_index',4),(29,'2021_01_12_211134_readd_paintings_table',5),(30,'2021_01_12_211724_add_url',6),(36,'2021_02_05_195834_create_press_release_table',7),(37,'2021_02_05_213858_add_slug',8),(38,'2021_02_23_214015_image_details',9),(39,'2021_02_24_135406_nullable_description',10),(40,'2021_02_24_135831_nullable_description_2',11),(41,'2021_02_24_151712_add_thumbnail',12);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paintings`
--

DROP TABLE IF EXISTS `paintings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paintings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medium` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `collection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_index` int DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageKitID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paintings`
--

LOCK TABLES `paintings` WRITE;
/*!40000 ALTER TABLE `paintings` DISABLE KEYS */;
INSERT INTO `paintings` VALUES (26,'Cowboy Blues','2020','Acrylic on Canvas','91.4','121.9','Yabba Dabba Doo','2021-02-24 20:31:28','2021-02-24 20:31:28','12',NULL,'cowboy-blues','https://ik.imagekit.io/1gfgqmo2jq8/FDAF36BA-DD43-4F2D-B626-6A8D14600EAA_YB_U8wWFF.JPEG','60367151b270135ff591e4d9','https://ik.imagekit.io/1gfgqmo2jq8/tr:n-media_library_thumbnail/FDAF36BA-DD43-4F2D-B626-6A8D14600EAA_YB_U8wWFF.JPEG'),(27,'Get \'Em Cowgirl','2021','Acrylic on Canvas','46','61','Get em cowgirl','2021-02-28 23:54:07','2021-02-28 23:54:07','12',NULL,'get-em-cowgirl','https://ik.imagekit.io/1gfgqmo2jq8/FC0DFE15-9C22-41D1-BFB4-F9AC121CE748_HOLlHWn82.JPEG','603be6d0f426b337d0049862','https://ik.imagekit.io/1gfgqmo2jq8/tr:n-media_library_thumbnail/FC0DFE15-9C22-41D1-BFB4-F9AC121CE748_HOLlHWn82.JPEG'),(28,'Just because I love you doesn\'t mean I won\'t shoot','2021','Acrylic on Canvas','91','122','Woman and hairless cat sit on couch inside red room with blue floor. gold coffee table sits in front with two mugs a book, a pack of cigarettes, and a lighter. The room is decorated with a western motif.','2021-02-28 23:57:08','2021-02-28 23:57:08','12',NULL,'just-because-i-love-you-doesnt-mean-i-wont-shoot','https://ik.imagekit.io/1gfgqmo2jq8/3E6AAE5A-E133-47F4-B1D0-797372B78CA6_RmdmRV8wm.JPEG','603be78592d9fe34c98b278a','https://ik.imagekit.io/1gfgqmo2jq8/tr:n-media_library_thumbnail/3E6AAE5A-E133-47F4-B1D0-797372B78CA6_RmdmRV8wm.JPEG'),(29,'Eleventh Hour','2020','Acrylic and Crackle Paste on Canvas','91','122','Destroyed room with broken terracotta venus de milo statue on the ground. man sits at table with head in hands in dispair. broken picasso painting sits on broken wall. full moon looks over the scene.','2021-02-28 23:59:22','2021-02-28 23:59:22','13',NULL,'eleventh-hour','https://ik.imagekit.io/1gfgqmo2jq8/eleventhHour_50KpuNRV4.jpg','603be80bf426b337d0049a3f','https://ik.imagekit.io/1gfgqmo2jq8/tr:n-media_library_thumbnail/eleventhHour_50KpuNRV4.jpg'),(30,'Morning Coffee','2020','Acrylic on Canvas','46','61','Blue room with man drinking coffee. Lion sits on terracotta floor.','2021-03-01 00:02:57','2021-03-01 00:02:57','13',NULL,'morning-coffee','https://ik.imagekit.io/1gfgqmo2jq8/room-01_Xai6CNT73.jpg','603be8e2f426b337d0049bdf','https://ik.imagekit.io/1gfgqmo2jq8/tr:n-media_library_thumbnail/room-01_Xai6CNT73.jpg'),(31,'Yellow','2020','Acrylic and Crackle Paste on Canvas','91','122','Yellow Egypt inspired room','2021-03-01 00:05:40','2021-03-01 00:05:40','13',NULL,'yellow','https://ik.imagekit.io/1gfgqmo2jq8/613A25FF-910B-432C-BABA-5654A93EC1A0_lq8jHW9no.JPEG','603be985f426b337d0049c47','https://ik.imagekit.io/1gfgqmo2jq8/tr:n-media_library_thumbnail/613A25FF-910B-432C-BABA-5654A93EC1A0_lq8jHW9no.JPEG'),(32,'Heat Wave','2020','Acrylic on Canvas','46','61','Heat Wave and bengal tiger','2021-03-01 00:06:45','2021-03-01 00:06:45','13',NULL,'heat-wave','https://ik.imagekit.io/1gfgqmo2jq8/room-03_wgLnNZK_F.jpg','603be9c692d9fe34c98b2b5a','https://ik.imagekit.io/1gfgqmo2jq8/tr:n-media_library_thumbnail/room-03_wgLnNZK_F.jpg'),(33,'The Matador','2020','Acrylic on Canvas','46','61','Yellow room with bull and matador.','2021-03-01 00:07:27','2021-03-01 00:07:27','13',NULL,'the-matador','https://ik.imagekit.io/1gfgqmo2jq8/room-04_rLuw_p6Kz.jpg','603be9f0f426b337d0049d12','https://ik.imagekit.io/1gfgqmo2jq8/tr:n-media_library_thumbnail/room-04_rLuw_p6Kz.jpg'),(34,'Catching My Ride','2020','Acrylic on Canvas','46','61','Green room with wild zebra. Basquiat\'s Riding with death in gold frame on wall.','2021-03-01 00:08:21','2021-03-01 00:08:21','13',NULL,'catching-my-ride','https://ik.imagekit.io/1gfgqmo2jq8/room-05_bG6NUwL8v.jpg','603bea2692d9fe34c98b2bce','https://ik.imagekit.io/1gfgqmo2jq8/tr:n-media_library_thumbnail/room-05_bG6NUwL8v.jpg');
/*!40000 ALTER TABLE `paintings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plans` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `interval` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capped_amount` decimal(8,2) DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_days` int DEFAULT NULL,
  `test` tinyint(1) NOT NULL DEFAULT '0',
  `on_install` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plans`
--

LOCK TABLES `plans` WRITE;
/*!40000 ALTER TABLE `plans` DISABLE KEYS */;
/*!40000 ALTER TABLE `plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `press_releases`
--

DROP TABLE IF EXISTS `press_releases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `press_releases` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `press_date` date NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `press_releases`
--

LOCK TABLES `press_releases` WRITE;
/*!40000 ALTER TABLE `press_releases` DISABLE KEYS */;
/*!40000 ALTER TABLE `press_releases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shopify_grandfathered` tinyint(1) NOT NULL DEFAULT '0',
  `shopify_namespace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopify_freemium` tinyint(1) NOT NULL DEFAULT '0',
  `plan_id` int unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_plan_id_foreign` (`plan_id`),
  CONSTRAINT `users_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'kevinkulla.myshopify.com','shop@kevinkulla.myshopify.com',NULL,'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',NULL,'2021-01-12 05:43:08','2021-01-12 05:45:29',0,NULL,0,NULL,NULL),(2,'Kevin Kulla','kevinjkulla@gmail.com',NULL,'$2y$10$ElpgGYGIPhkNCi5ATvTA1ONKWbkr6S3aHA20ZSRFpsMJoW.vOt36y','WPozSgbqJWHgdgzWPq8IcIk1ogZeIumUN6G8pLXgdX5eKfbWJjrrJCS2GktW','2021-01-13 01:34:38','2021-01-13 01:34:38',0,NULL,0,NULL,NULL),(3,'kevinkulladev.myshopify.com','shop@kevinkulladev.myshopify.com',NULL,'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',NULL,'2021-01-16 03:47:02','2021-01-16 03:47:12',0,NULL,0,NULL,NULL),(4,'devkevinkulla.myshopify.com','shop@devkevinkulla.myshopify.com',NULL,'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',NULL,'2021-01-19 03:04:43','2021-01-19 03:04:51',0,NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-02 14:26:41
