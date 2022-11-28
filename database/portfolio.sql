/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.14-MariaDB : Database - portfolio
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`portfolio` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `portfolio`;

/*Table structure for table `contents` */

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `section` varchar(50) NOT NULL,
  `sub_section` varchar(50) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `contents` */

insert  into `contents`(`id`,`section`,`sub_section`,`title`,`description`,`file`,`created_at`,`updated_at`) values 
(1,'dashboard','title','Satyam',NULL,NULL,'2022-11-12 17:04:13','2022-11-12 11:34:13'),
(2,'dashboard','content1','A Full Stack Developer','I\'m <span>Satyam Suri</span>','1668280643.png','2022-11-13 00:47:23','2022-11-12 19:17:23'),
(3,'dashboard','content2','content 2','I\'m a <span>Full Stack Developer</span> based in India','1668367227.png','2022-11-14 00:50:27','2022-11-13 19:20:27'),
(4,'about','about','A small river named Duden flows by their place and supplies it with the necessary regelialia.','<li class=\"d-flex\"><span>Name:</span> <span>Satyam Suri</span></li>\r\n<li class=\"d-flex\"><span>Date of birth:</span> <span>January 13, 2001</span></li>\r\n<li class=\"d-flex\"><span>Address:</span> <span>Punjab Jalandhar 144001 IND</span></li>\r\n<li class=\"d-flex\"><span>Zip code:</span> <span>144001</span></li>\r\n<li class=\"d-flex\"><span>Email:</span> <span>satyamsuri82@gmail.com</span></li>\r\n<li class=\"d-flex\"><span>Phone: </span> <span>+91-7009965155</span></li>','1668367329.png','2022-11-14 00:52:09','2022-11-13 19:22:09'),
(5,'resume','resume','resume','A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.','1668277135.pdf','2022-11-12 23:48:55','2022-11-12 18:18:55'),
(6,'qualification','degree1','Matriculation','<span class=\"date\">2016-2017</span>\r\n    					<h2>Matriculation</h2>\r\n    					<span class=\"position\">D.M.S</span>\r\n    					<p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>',NULL,'2022-11-13 00:00:21','2022-11-12 18:30:21'),
(7,'qualification','degree2','Humanites','<span class=\"date\">2018-2020</span>\r\n    					<h2>12th in humanities</h2>\r\n    					<span class=\"position\">D.A.V College</span>\r\n    					<p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>',NULL,'2022-11-13 00:02:21','2022-11-12 18:32:21'),
(8,'qualification','degree3','Diploma in computer science','<span class=\"date\">2017-2020</span>\r\n    					<h2>Diploma in computer science</h2>\r\n    					<span class=\"position\">Mehr Chand Polytechnical College</span>\r\n    					<p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>',NULL,'2022-11-13 00:05:23','2022-11-12 18:35:23'),
(9,'qualification','degree4','B.tech in computer science','<span class=\"date\">2020-2023</span>\r\n    					<h2>B.tech in computer science</h2>\r\n    					<span class=\"position\">Khalsa College of Engg</span>\r\n    					<p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>',NULL,'2022-11-13 00:07:03','2022-11-12 18:37:03'),
(10,'services','service1','Web Designing','flaticon-analysis',NULL,'2022-11-13 22:40:16','2022-11-13 17:10:16'),
(11,'services','service2','Phtography','flaticon-flasks',NULL,'2022-11-13 22:34:14','2022-11-13 17:04:14'),
(12,'services','service3','Web Developer','flaticon-ideas',NULL,'2022-11-13 22:35:45','2022-11-13 17:05:45'),
(13,'services','service4','App Developing','flaticon-analysis',NULL,'2022-11-13 22:36:19','2022-11-13 17:06:19'),
(14,'services','service5','Branding','flaticon-flasks',NULL,'2022-11-13 22:36:49','2022-11-13 17:06:49'),
(15,'services','service6','Product Strategy','flaticon-ideas',NULL,'2022-11-13 22:37:43','2022-11-13 17:07:43'),
(16,'projects','Project1','col-md-4','<h3><a href=\"#\">Branding & Illustration Design</a></h3>\r\n<span>Web Design</span>','1668756676.jpg','2022-11-18 14:34:36','2022-11-18 07:39:30'),
(17,'projects','Project2','col-md-8','<h3><a href=\"#\">Branding & Illustration Design</a></h3>\r\n<span>Web Design</span>','1668756741.jpg','2022-11-18 14:34:38','2022-11-18 07:39:55'),
(18,'projects','Project3','col-md-8','<h3><a href=\"#\">Branding & Illustration Design</a></h3>\r\n<span>Web Design</span>','1668756805.jpg','2022-11-18 14:34:40','2022-11-18 07:40:37'),
(19,'projects','Project4','col-md-4','<h3><a href=\"#\">Branding & Illustration Design</a></h3>\r\n<span>Web Design</span>','1668756959.jpg','2022-11-18 14:34:44','2022-11-18 07:50:40'),
(20,'projects','Project5','col-md-8','<h3><a href=\"#\">Branding & Illustration Design</a></h3>\r\n<span>Web Design</span>','1668756891.jpg','2022-11-18 14:34:46','2022-11-18 07:50:23'),
(21,'projects','Project6','col-md-4','<h3><a href=\"#\">Branding & Illustration Design</a></h3>\r\n<span>Web Design</span>','1668757047.jpg','2022-11-18 14:34:49','2022-11-18 07:50:57'),
(25,'blogs','blog1','blog1','<div class=\"d-flex align-items-center mb-3 meta\">\r\n                                <p class=\"mb-0\">\r\n                                    <span class=\"mr-2\">June 21, 2019</span>\r\n                                    <a href=\"#\" class=\"mr-2\">Admin</a>\r\n                                    <a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>\r\n                                </p>\r\n                            </div>\r\n                            <h3 class=\"heading\"><a href=\"single.html\">Why Lead Generation is Key for Business\r\n                                    Growth</a></h3>\r\n                            <p>A small river named Duden flows by their place and supplies it with the necessary\r\n                                regelialia.</p>','1668762971.jpg','2022-11-18 14:55:52','2022-11-18 09:25:52'),
(26,'blogs','blog2','blog2','<div class=\"d-flex align-items-center mb-3 meta\">\r\n                                <p class=\"mb-0\">\r\n                                    <span class=\"mr-2\">June 21, 2019</span>\r\n                                    <a href=\"#\" class=\"mr-2\">Admin</a>\r\n                                    <a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>\r\n                                </p>\r\n                            </div>\r\n                            <h3 class=\"heading\"><a href=\"single.html\">Why Lead Generation is Key for Business\r\n                                    Growth</a></h3>\r\n                            <p>A small river named Duden flows by their place and supplies it with the necessary\r\n                                regelialia.</p>','1668763209.jpg','2022-11-18 14:50:09','2022-11-18 09:20:09'),
(27,'blogs','blog3','blog3','<div class=\"d-flex align-items-center mb-3 meta\">\r\n                                <p class=\"mb-0\">\r\n                                    <span class=\"mr-2\">June 21, 2019</span>\r\n                                    <a href=\"#\" class=\"mr-2\">Admin</a>\r\n                                    <a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>\r\n                                </p>\r\n                            </div>\r\n                            <h3 class=\"heading\"><a href=\"single.html\">Why Lead Generation is Key for Business\r\n                                    Growth</a></h3>\r\n                            <p>A small river named Duden flows by their place and supplies it with the necessary\r\n                                regelialia.</p>','1668763298.jpg','2022-11-18 14:51:38','2022-11-18 09:21:38'),
(28,'achievements','achievement1','101','Awards',NULL,'2022-11-18 15:10:14','2022-11-18 09:40:14'),
(29,'achievements','achievement2','1200','Complete Projects',NULL,'2022-11-18 15:03:30','2022-11-18 09:33:30'),
(30,'achievements','achievement3','1200','Happy Customers',NULL,'2022-11-18 15:04:15','2022-11-18 09:34:15'),
(31,'achievements','achievement4','500','Cups of coffee',NULL,'2022-11-18 15:05:07','2022-11-18 09:35:07'),
(32,'contacts','ADDRESS','icon-map-signs','198 West 21th Street, Suite 721 New York NY 10016',NULL,'2022-11-18 15:50:43','2022-11-18 10:20:43'),
(33,'contacts','Contact Number','icon-phone2','1235 2355 98',NULL,'2022-11-18 15:51:36','2022-11-18 10:21:36'),
(34,'contacts','Email Address','icon-paper-plane','info@yoursite.com',NULL,'2022-11-18 15:52:01','2022-11-18 10:22:01'),
(35,'contacts','website','icon-globe','yoursite.com',NULL,'2022-11-18 15:52:49','2022-11-18 10:22:49'),
(36,'enquiry','content','about content',NULL,'1668769401.jpg','2022-11-18 16:33:21','2022-11-18 11:03:21');

/*Table structure for table `enquiries` */

DROP TABLE IF EXISTS `enquiries`;

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `enquiries` */

insert  into `enquiries`(`id`,`name`,`email`,`subject`,`message`,`created_at`,`updated_at`) values 
(1,'satyam','satyamsuri82@gmail.com','Job Application','Hi, I want the job.','2022-11-13 18:13:43','2022-11-13 18:13:43'),
(2,'raman','satyamsuri82@gmail.com','Job Application','sdasdasd','2022-11-13 18:14:33','2022-11-13 18:14:33'),
(3,'vipul','vipul@gmail.com','Job','Job haigi','2022-11-18 05:13:09','2022-11-18 05:13:09');

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

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

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

/*Table structure for table `skills` */

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `percentage` varchar(20) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `skills` */

insert  into `skills`(`id`,`name`,`percentage`,`is_active`,`created_at`,`updated_at`) values 
(8,'React','74',1,'2022-11-12 06:15:49','2022-11-12 08:59:36'),
(9,'Express','75',1,'2022-11-12 06:15:49','2022-11-12 09:01:04'),
(10,'Laravel','97',1,'2022-11-12 06:21:03','2022-11-18 09:26:53'),
(13,'jQuery & jQuery UI','84',1,'2022-11-12 08:48:26','2022-11-12 08:59:36'),
(14,'MySql','81',1,'2022-11-12 08:58:04','2022-11-12 09:00:03'),
(15,'HTML','80',1,'2022-11-12 08:58:04','2022-11-12 08:58:04'),
(16,'Bootstrap','73',1,'2022-11-12 08:58:04','2022-11-12 08:59:36'),
(17,'PHP','87',1,'2022-11-12 08:58:04','2022-11-12 08:59:36'),
(18,'Javascript','77',1,'2022-11-12 08:58:04','2022-11-12 09:01:04'),
(19,'API & REST API','83',1,'2022-11-12 08:58:04','2022-11-12 08:59:48'),
(20,'MongoDB','74',1,'2022-11-12 08:58:05','2022-11-12 08:58:05'),
(21,'GIT & GIT BRANCH','78',1,'2022-11-12 08:58:05','2022-11-12 08:59:36');

/*Table structure for table `socialmedias` */

DROP TABLE IF EXISTS `socialmedias`;

CREATE TABLE `socialmedias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `icon_class` varchar(50) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `socialmedias` */

insert  into `socialmedias`(`id`,`name`,`link`,`icon_class`,`order`,`created_at`,`updated_at`) values 
(1,'Twitter',NULL,'icon-twitter',1,'2022-11-18 17:08:57','0000-00-00 00:00:00'),
(2,'Facebook',NULL,'icon-facebook',2,'2022-11-18 17:09:23','0000-00-00 00:00:00'),
(3,'Instagram',NULL,'icon-instagram',3,'2022-11-18 17:09:46','0000-00-00 00:00:00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'satyam','satyamsuri82@gmail.com',NULL,'$2y$10$fpmFNgMYZ/DRNPs05cXMF.JI7KUgNoHHDuHlGqT8p56rRpG.UC0Ze',NULL,'2022-11-08 07:36:24','2022-11-08 07:36:24');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
