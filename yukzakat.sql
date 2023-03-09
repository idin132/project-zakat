/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.24-MariaDB-log : Database - yukzakat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`yukzakat` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `yukzakat`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
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

/*Data for the table `failed_jobs` */

LOCK TABLES `failed_jobs` WRITE;

UNLOCK TABLES;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

LOCK TABLES `migrations` WRITE;

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2022_09_26_023546_create_mustahiq_table',1),
(6,'2022_09_26_098734_create_zakat_table',1),
(7,'2022_09_26_098765_create_pembayaran_table',1),
(8,'2022_10_17_023333_create_muzakki_table',1),
(9,'2022_10_19_030222_create_penerimaan_table',1),
(10,'2022_10_23_064228_add_role_to_users_table',1),
(11,'2022_10_24_030933_create_sessions_table',1),
(12,'2022_11_03_122255_add_api_token_to_users_table',1),
(13,'2023_02_09_005842_foreign_key',1),
(14,'2023_02_26_133944_create_notifications_table',1),
(15,'2023_02_26_134247_add_notifiable_type_to_notifications_table',1);

UNLOCK TABLES;

/*Table structure for table `mustahiq` */

DROP TABLE IF EXISTS `mustahiq`;

CREATE TABLE `mustahiq` (
  `id_mustahiq` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mustahiq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ashnaf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_mustahiq`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mustahiq` */

LOCK TABLES `mustahiq` WRITE;

insert  into `mustahiq`(`id_mustahiq`,`nik`,`nama_mustahiq`,`jenis_kelamin`,`tgl_lahir`,`alamat`,`agama`,`pekerjaan`,`penghasilan`,`jumlah_anak`,`ashnaf`,`created_at`,`updated_at`) values 
(6,'312','fds','P','2023-03-08','das','das','asd','12','231','amil','2023-03-08 00:22:23','2023-03-08 00:22:23');

UNLOCK TABLES;

/*Table structure for table `muzakki` */

DROP TABLE IF EXISTS `muzakki`;

CREATE TABLE `muzakki` (
  `id_muzakki` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `nama_muzakki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `nomor_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `penghasilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_muzakki`),
  UNIQUE KEY `muzakki_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `muzakki` */

LOCK TABLES `muzakki` WRITE;

UNLOCK TABLES;

/*Table structure for table `notif` */

DROP TABLE IF EXISTS `notif`;

CREATE TABLE `notif` (
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `notif` */

LOCK TABLES `notif` WRITE;

UNLOCK TABLES;

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_id_index` (`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `notifications` */

LOCK TABLES `notifications` WRITE;

UNLOCK TABLES;

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

LOCK TABLES `password_resets` WRITE;

UNLOCK TABLES;

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_zakat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_muzakki` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_muzakki` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pembayaran_id_muzakki_foreign` (`id_muzakki`),
  CONSTRAINT `pembayaran_id_muzakki_foreign` FOREIGN KEY (`id_muzakki`) REFERENCES `muzakki` (`id_muzakki`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pembayaran` */

LOCK TABLES `pembayaran` WRITE;

insert  into `pembayaran`(`id`,`nama_zakat`,`nama_muzakki`,`no_hp`,`email`,`jumlah`,`metode_pembayaran`,`bukti_pembayaran`,`status`,`created_at`,`updated_at`,`id_muzakki`) values 
(4,'Zakat Fitrah','admin','081111111','admin@gmail.com','32500','Dana','kQMD7rUM2CuybRwPGArcBdHIRbXG4S2MgxrFAdSF.png','0','2023-03-08 02:05:25','2023-03-08 07:47:16',NULL),
(5,'Zakat Fitrah','testuser','081111111','admin@gmail.com','32500','Dana','kQMD7rUM2CuybRwPGArcBdHIRbXG4S2MgxrFAdSF.png','0','2023-03-08 02:05:25','2023-03-09 02:22:46',NULL),
(6,'Zakat Fitrah','testuser1','081111111','admin@gmail.com','32500','Dana','kQMD7rUM2CuybRwPGArcBdHIRbXG4S2MgxrFAdSF.png','0','2023-03-08 02:05:25','2023-03-09 02:24:19',NULL),
(7,'Zakat Fitrah','bellalopeidin','08183','bella@idin.my.id','25000','Dana','FizvDUFarPL02HAu7YKtmVGejDE9mg57UUepQduV.png','0','2023-03-09 02:23:40','2023-03-09 02:24:17',NULL);

UNLOCK TABLES;

/*Table structure for table `penerimaan` */

DROP TABLE IF EXISTS `penerimaan`;

CREATE TABLE `penerimaan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_anak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_zakat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ashnaf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_mustahiq` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `penerimaan_id_mustahiq_foreign` (`id_mustahiq`),
  CONSTRAINT `penerimaan_id_mustahiq_foreign` FOREIGN KEY (`id_mustahiq`) REFERENCES `mustahiq` (`id_mustahiq`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `penerimaan` */

LOCK TABLES `penerimaan` WRITE;

UNLOCK TABLES;

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

LOCK TABLES `personal_access_tokens` WRITE;

UNLOCK TABLES;

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sessions` */

LOCK TABLES `sessions` WRITE;

UNLOCK TABLES;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `nama_muzakki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `nomor_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `penghasilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_api_token_unique` (`api_token`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`id`,`nik`,`nama_muzakki`,`jenis_kelamin`,`nomor_rekening`,`tgl_lahir`,`email`,`email_verified_at`,`no_hp`,`alamat`,`pekerjaan`,`penghasilan`,`status`,`username`,`password`,`api_token`,`remember_token`,`created_at`,`updated_at`,`role`) values 
(1,'null','admin','null','null','null','admin@gmail.com','2023-03-06 13:07:08','081111111','Alamat Admin','null','null','null','admin','$2y$10$U1atRmN9BMy61zzcCo/u7.6BFpoI7S74zTZ4cz72FOT27uQuiT43G',NULL,'kqSPs0LGGBmkaxj5PgpA654zTD7JeD2YcWmW5GF3N4rELc6BHsA0Rvuoc3DH','2023-03-06 13:07:09','2023-03-06 13:07:09','admin'),
(2,'null','Pydydyn','null','null','null','Pydydyn@gmail.com','2023-03-06 13:07:09','081111111','Alamat Pydydyn','null','null','null','Pydydyn','$2y$10$xXF2eSnNq/8.EWdKalAIy.sd2CQXpjBH5/rVMa3FTOs2L2EHwVZuS',NULL,'ztaCr0Z8WT','2023-03-06 13:07:09','2023-03-06 13:07:09','admin'),
(3,'null','testuser','null','null','null','testuser@gmail.com',NULL,'08121212','jl ambon','null','null','null','testuser','$2y$10$0lD/1Zg6LfNySst2bv6MXOI73MnPWSRX8Hgml/hBmDrH3RFKHes7O',NULL,NULL,'2023-03-07 00:56:41','2023-03-07 00:56:41','admin'),
(4,'null','bellalopeidin','null','null','null','bella@idin.my.id',NULL,'08183','Jl. Dket mixue','null','null','null','ibel','$2y$10$buvwpj7JGaImUSnUVyxM/.fMDtwdnKb3CxnwTU0pKBPpOz0G4LLsy',NULL,NULL,'2023-03-08 07:54:57','2023-03-08 07:54:57','user');

UNLOCK TABLES;

/*Table structure for table `verif` */

DROP TABLE IF EXISTS `verif`;

CREATE TABLE `verif` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_zakat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_muzakki` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_muzakki` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pembayaran_id_muzakki_foreign` (`id_muzakki`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `verif` */

LOCK TABLES `verif` WRITE;

insert  into `verif`(`id`,`nama_zakat`,`nama_muzakki`,`no_hp`,`email`,`jumlah`,`metode_pembayaran`,`bukti_pembayaran`,`status`,`created_at`,`updated_at`,`id_muzakki`) values 
(4,'Zakat Fitrah','admin','081111111','admin@gmail.com','32500','Dana','kQMD7rUM2CuybRwPGArcBdHIRbXG4S2MgxrFAdSF.png','0','2023-03-08 14:47:16',NULL,NULL),
(5,'Zakat Fitrah','testuser','081111111','admin@gmail.com','32500','Dana','kQMD7rUM2CuybRwPGArcBdHIRbXG4S2MgxrFAdSF.png','0','2023-03-09 09:22:46',NULL,NULL),
(6,'Zakat Fitrah','testuser1','081111111','admin@gmail.com','32500','Dana','kQMD7rUM2CuybRwPGArcBdHIRbXG4S2MgxrFAdSF.png','0','2023-03-09 09:24:19',NULL,NULL),
(7,'Zakat Fitrah','bellalopeidin','08183','bella@idin.my.id','25000','Dana','FizvDUFarPL02HAu7YKtmVGejDE9mg57UUepQduV.png','0','2023-03-09 09:24:17',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `zakat` */

DROP TABLE IF EXISTS `zakat`;

CREATE TABLE `zakat` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kategori_zakat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_zakat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `zakat` */

LOCK TABLES `zakat` WRITE;

insert  into `zakat`(`id`,`kategori_zakat`,`id_zakat`,`created_at`,`updated_at`) values 
(1,'Zakat Penghasilan','ZK01','2023-03-06 13:07:09','2023-03-06 13:07:09'),
(2,'Zakat Fitrah','ZK02','2023-03-06 13:07:09','2023-03-06 13:07:09');

UNLOCK TABLES;

/* Trigger structure for table `pembayaran` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `verif` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `verif` AFTER UPDATE ON `pembayaran` FOR EACH ROW IF new.status = "0" THEN
INSERT INTO verif SET
id = new.id,
nama_zakat = new.nama_zakat,
nama_muzakki = new.nama_muzakki,
no_hp = new.no_hp,
email = new.email,
jumlah = new.jumlah,
metode_pembayaran = new.metode_pembayaran,
bukti_pembayaran = new.bukti_pembayaran,
created_at = CURRENT_TIMESTAMP,
status = new.status;
END IF */$$


DELIMITER ;

/* Trigger structure for table `pembayaran` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `DeleteWhenRollback` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `DeleteWhenRollback` AFTER UPDATE ON `pembayaran` FOR EACH ROW IF new.status = "1" THEN
DELETE FROM verif WHERE id=new.id;
END IF */$$


DELIMITER ;

/* Function  structure for function  `usia` */

/*!50003 DROP FUNCTION IF EXISTS `usia` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `usia`(tgl_lahir DATE) RETURNS int(11)
BEGIN
  DECLARE today DATE;
  DECLARE age INT;
  
  SET today = CURDATE();
  SET age = YEAR(today) - YEAR(tgl_lahir);
  
  IF (MONTH(today) < MONTH(tgl_lahir) OR (MONTH(today) = MONTH(tgl_lahir) AND DAY(today) < DAY(tgl_lahir))) THEN
    SET age = age - 1;
  END IF;
  
  RETURN age;
END */$$
DELIMITER ;

/* Procedure structure for procedure `JumlahZakat` */

/*!50003 DROP PROCEDURE IF EXISTS  `JumlahZakat` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `JumlahZakat`()
BEGIN
    SELECT SUM(jumlah) FROM pembayaran;
END */$$
DELIMITER ;

/*Table structure for table `muzakki_view` */

DROP TABLE IF EXISTS `muzakki_view`;

/*!50001 DROP VIEW IF EXISTS `muzakki_view` */;
/*!50001 DROP TABLE IF EXISTS `muzakki_view` */;

/*!50001 CREATE TABLE  `muzakki_view`(
 `nama_muzakki` varchar(255) ,
 `email` varchar(255) ,
 `no_hp` varchar(255) ,
 `alamat` varchar(255) ,
 `username` varchar(255) ,
 `created_at` timestamp ,
 `updated_at` timestamp 
)*/;

/*View structure for view muzakki_view */

/*!50001 DROP TABLE IF EXISTS `muzakki_view` */;
/*!50001 DROP VIEW IF EXISTS `muzakki_view` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `muzakki_view` AS (select `users`.`nama_muzakki` AS `nama_muzakki`,`users`.`email` AS `email`,`users`.`no_hp` AS `no_hp`,`users`.`alamat` AS `alamat`,`users`.`username` AS `username`,`users`.`created_at` AS `created_at`,`users`.`updated_at` AS `updated_at` from `users`) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
