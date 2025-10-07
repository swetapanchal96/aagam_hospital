-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2025 at 11:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aagam_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_master`
--

CREATE TABLE `appointment_master` (
  `appointment_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `category_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `status` varchar(11) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `isDelete` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointment_master`
--

INSERT INTO `appointment_master` (`appointment_id`, `name`, `gender`, `phone`, `email`, `appointment_date`, `appointment_time`, `category_id`, `doctor_id`, `message`, `status`, `iStatus`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'Heena Patel', 'Female', '9876543210', 'heenapatel@gmail.com', '2025-05-23', '10:30:00', 1, 1, 'hello', '', 1, 0, '2025-05-22 13:52:34', '2025-05-22 13:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blogTitle` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `rejectedcomments` varchar(100) DEFAULT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `isDelete` int(11) NOT NULL DEFAULT 0,
  `strIP` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `blogImage` varchar(255) DEFAULT NULL,
  `blogDescription` text DEFAULT NULL,
  `metaTitle` text DEFAULT NULL,
  `metaKeyword` text DEFAULT NULL,
  `metaDescription` text DEFAULT NULL,
  `blogDate` date DEFAULT NULL,
  `blog_slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `blogTitle`, `content`, `status`, `rejectedcomments`, `iStatus`, `isDelete`, `strIP`, `created_at`, `updated_at`, `created_by`, `updated_by`, `blogImage`, `blogDescription`, `metaTitle`, `metaKeyword`, `metaDescription`, `blogDate`, `blog_slug`) VALUES
(1, 1, 'The Hidden Power of Daily Mindfulness: Transforming Life One Moment at a Time', NULL, 1, NULL, 1, 0, '103.1.100.226', '2025-07-21 14:48:04', '2025-07-21 14:48:04', NULL, NULL, '1753177024.jpg', '<p data-start=\"297\" data-end=\"631\">In our fast-paced world, where we’re constantly connected and perpetually occupied, mindfulness might seem like a luxury rather than a necessity. But research and ancient wisdom alike suggest that pausing to become aware of the present moment—without judgment—can profoundly impact our well-being, productivity, and emotional balance.</p>\r\n<p data-start=\"633\" data-end=\"993\">Mindfulness isn’t just about meditation or deep breathing (although both help). It’s a state of being fully engaged in what you\'re doing, where you are, and how you feel—without distraction or overwhelming emotion. It means noticing the small details of everyday life: the warmth of your coffee cup, the sensation of your breath, the colors in the sky at dusk.</p>', '<br>', '<br>', '<br>', '2025-07-21', 'the-hidden-power-of-daily-mindfulness-transforming-life-one-moment-at-a-time'),
(2, 1, 'Why Is Skin Surgeon Considered Underrated', NULL, 1, NULL, 1, 0, '127.0.0.1', '2025-07-22 09:38:44', '2025-07-22 09:38:44', NULL, NULL, '1753177124.jpg', '<p data-start=\"297\" data-end=\"631\">In our fast-paced world, where we’re constantly connected and perpetually occupied, mindfulness might seem like a luxury rather than a necessity. But research and ancient wisdom alike suggest that pausing to become aware of the present moment—without judgment—can profoundly impact our well-being, productivity, and emotional balance.</p><p data-start=\"633\" data-end=\"993\">Mindfulness isn’t just about meditation or deep breathing (although both help). It’s a state of being fully engaged in what you\'re doing, where you are, and how you feel—without distraction or overwhelming emotion. It means noticing the small details of everyday life: the warmth of your coffee cup, the sensation of your breath, the colors in the sky at dusk.</p>', '<br>', '<br>', '<br>', '2025-07-22', 'why-is-skin-surgeon-considered-underrated');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `isDelete` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `iStatus`, `isDelete`) VALUES
(1, 'Ortho Services', 1, 0),
(2, 'Pediatric services', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_master`
--

CREATE TABLE `doctor_master` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `doctor_designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctor_master`
--

INSERT INTO `doctor_master` (`doctor_id`, `doctor_name`, `doctor_designation`) VALUES
(1, 'Dr. Padmanabh Vora', 'MS Orthopaedic'),
(2, 'Dr. Maitry Shah', 'MD Paediatrics');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faqid` int(11) NOT NULL,
  `serviceId` int(11) NOT NULL,
  `question` varchar(5000) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `isDelete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `strIP` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faqid`, `serviceId`, `question`, `answer`, `iStatus`, `isDelete`, `created_at`, `updated_at`, `strIP`) VALUES
(1, 1, 'test question', 'Lorem Ipsum is a standard dummy text used in printing and web design. Learn about its origin, variations, translations and how to generate it online.', 1, 0, '2024-09-14 09:04:47', NULL, '152.59.33.35');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `galleryId` int(11) NOT NULL,
  `serviceId` int(11) NOT NULL,
  `strPhoto` varchar(50) NOT NULL,
  `iStatus` tinyint(4) NOT NULL DEFAULT 1,
  `isDelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`galleryId`, `serviceId`, `strPhoto`, `iStatus`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 1, '1725442771.jpg', 1, 0, '2024-07-26 14:04:07', '2024-07-26 14:04:07'),
(4, 1, '1725442755.jpg', 1, 0, '2024-08-02 14:32:26', '2024-08-02 14:32:26'),
(5, 2, '1725443114.jpg', 1, 0, '2024-08-05 17:12:32', '2024-08-05 17:12:32'),
(6, 1, '1725442783.jpg', 1, 0, '2024-09-04 15:09:43', '2024-09-04 15:09:43'),
(7, 1, '1725442799.jpg', 1, 0, '2024-09-04 15:09:59', '2024-09-04 15:09:59'),
(8, 1, '1725442834.jpg', 1, 0, '2024-09-04 15:10:34', '2024-09-04 15:10:34'),
(9, 1, '1725442863.jpg', 1, 0, '2024-09-04 15:11:03', '2024-09-04 15:11:03'),
(10, 1, '1725442918.jpg', 1, 0, '2024-09-04 15:11:58', '2024-09-04 15:11:58'),
(11, 1, '1725443072.jpg', 1, 0, '2024-09-04 15:14:32', '2024-09-04 15:14:32'),
(12, 2, '1725443183.jpg', 1, 0, '2024-09-04 15:16:23', '2024-09-04 15:16:23'),
(13, 2, '1725443236.jpg', 1, 0, '2024-09-04 15:17:16', '2024-09-04 15:17:16'),
(14, 2, '1725443290.jpg', 1, 0, '2024-09-04 15:18:10', '2024-09-04 15:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mobileNumber` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `strIp` varchar(50) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `isDelete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiry_id`, `category_id`, `name`, `mobileNumber`, `email`, `message`, `date`, `strIp`, `iStatus`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kush', '9874563210', 'testadmin@gmail.com', 'testttt', '2025-07-22 14:31:45', '127.0.0.1', 1, 0, '2025-07-22 09:01:45', '2025-07-22 09:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry___`
--

CREATE TABLE `inquiry___` (
  `inquiry_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mobileNumber` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `strIp` varchar(50) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `isDelete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inquiry___`
--

INSERT INTO `inquiry___` (`inquiry_id`, `name`, `mobileNumber`, `email`, `subject`, `message`, `date`, `strIp`, `iStatus`, `isDelete`, `created_at`, `updated_at`) VALUES
(13, 'Bansari Patel', '9876541230', 'dev5.apolloinfotech@gmail.com', '', 'Testing Message.', NULL, '103.1.100.226', 1, 0, '2024-02-03 05:11:00', '2024-02-03 05:11:00'),
(14, 'Bansari Patel', '9876543210', 'dev1.apolloinfotech@gmail.com', '', 'Test Message.', NULL, '103.1.100.226', 1, 0, '2024-02-05 09:06:18', '2024-02-05 09:06:18'),
(15, 'Bansari Patel', '9874563210', 'dev1.apolloinfotech@gmail.com', '', 'Test Message.', NULL, '103.1.100.226', 1, 0, '2024-02-06 05:17:38', '2024-02-06 05:17:38'),
(18, 'test user name', '09876543210', 'dev4@apolloinfotech.com', '', 'test message', '2024-09-13 14:18:00', '117.228.26.90', 1, 0, '2024-09-04 03:19:02', NULL),
(19, 'test user name', '09876543210', 'dev4@apolloinfotech.com', '', 'jknkjngg', '2024-09-26 14:21:00', '117.228.26.90', 1, 0, '2024-09-04 03:21:20', NULL),
(20, 'test user name', '09876543210', 'dev4@apolloinfotech.com', '', 'jdskg', '2024-09-12 14:23:00', '117.228.26.90', 1, 0, '2024-09-04 03:23:13', NULL),
(21, 'test user name', '09876543210', 'dev4@apolloinfotech.com', '', 'd', '2024-09-16 14:33:00', '117.228.26.90', 1, 0, '2024-09-04 03:33:48', NULL),
(22, 'test user name', '09876543210', 'dev4@apolloinfotech.com', '', 'test', '2024-09-05 14:36:00', '117.228.26.90', 1, 0, '2024-09-04 03:36:10', NULL),
(23, 'test user name', '09876543210', 'dev4@apolloinfotech.com', 'Eye treatments', 'lkdlng', '2024-10-02 14:38:00', '117.228.26.90', 1, 0, '2024-09-04 03:38:27', NULL),
(24, 'jkgkhgkjhgkghkjghgkjhgkhgkjghkjghkgjhgkjghkjgghgkj', '9876543210', 'dev4@apolloinfotech.com', 'Contact Us', 'this is test message', '2024-09-21 13:29:00', '127.0.0.1', 1, 0, '2024-09-21 07:56:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE `meta_data` (
  `id` int(11) NOT NULL,
  `pagename` varchar(50) NOT NULL,
  `h1tag` text DEFAULT NULL,
  `h1taggrey` text DEFAULT NULL,
  `metaTitle` varchar(100) DEFAULT NULL,
  `metaKeyword` varchar(2000) DEFAULT NULL,
  `metaDescription` varchar(8000) DEFAULT NULL,
  `head` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meta_data`
--

INSERT INTO `meta_data` (`id`, `pagename`, `h1tag`, `h1taggrey`, `metaTitle`, `metaKeyword`, `metaDescription`, `head`, `body`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, 'Expert Web  design & development Services | Apollo Infotech', 'Expert Web  design & development Services in Ahmedabad, Best  design & development Company in Ahmedabad', 'Apollo Infotech is an Ahmedabad company that offers professional expertise in website design, web development, mobile app, and digital marketing services.', NULL, NULL, '2021-06-09 08:31:40', '2024-09-05 11:18:15'),
(2, 'about', NULL, NULL, 'Know Your Doctor', 'MS Ophthalmology (Goldmedalist)', 'Dr. Shwetambari Singh did her MBBS from BJ Medical College and postgraduation from M & J Institute of Ophthalmology, Ahmedabad.\r\n\r\nShe received gold medal in her postgraduation from Gujarat University.\r\nShe did her fellowship in the field of cataract surgery.\r\nShe has worked as Cataract, Cornea and Refractive surgery consultant (Associate Professor) at Nagri Eye Institute for 12 years and as an Eye Bank incharge for 3 years.\r\nShe has given surgical training to many postgraduate students. She is very active academically with many national and international publications under her name.', NULL, NULL, '2021-06-09 08:31:40', '2024-09-05 11:24:50'),
(3, 'contact', NULL, NULL, 'Contact Us :Shine Aesthetic & Eye Clinic |Prahaladnagar, Ahmedabad', 'comprehensive IT services', '105, Pinnacle Business Park, Opposite Royal Orchid,\r\nCorporate Road, Prahladnagar, Ahmedabad, Gujarat 380015', NULL, NULL, '2021-06-09 08:32:23', '2024-09-05 11:27:25'),
(4, 'Aesthetic Services', NULL, NULL, 'Aesthetic Services | Ahmedabad', 'Cosmetic Surgeon,Trauma Surgeon,Burns Management,A- V Fistula Sugeon,Plastic Surgeon', 'best aesthetic service in Prahladnager,Ahmedabad', NULL, NULL, '2021-06-09 08:32:23', '2024-09-05 11:30:45'),
(5, 'Eye treatments', NULL, NULL, 'Eye treatments |ahmedabad', 'Cataract,Corneal transplantation,Refractive surgery,Ocular surface disorders,Ocular Trauma', 'best Eye treatments in Prahladnager,Ahmedabad', NULL, NULL, '2021-06-09 08:32:54', '2024-09-05 11:33:10'),
(6, 'Eye treatments and  Aesthetic Services gallery', NULL, NULL, 'Eye treatments | Aesthetic Services | ahmedabad', 'Cataract,Corneal transplantation,Refractive surgery,Ocular surface disorders,Ocular Trauma and Cosmetic Surgeon,Trauma Surgeon,Burns Management,A- V Fistula Sugeon,Plastic Surgeon', 'best Eye treatments in Prahladnager,Ahmedabad', NULL, NULL, '2021-06-09 08:32:54', '2024-09-05 11:36:38'),
(7, 'Eye treatments and  Aesthetic Services video', NULL, NULL, 'Eye treatments | Aesthetic Services | ahmedabad', 'Cataract,Corneal transplantation,Refractive surgery,Ocular surface disorders,Ocular Trauma and Cosmetic Surgeon,Trauma Surgeon,Burns Management,A- V Fistula Sugeon,Plastic Surgeon', 'best Eye treatments in Prahladnager,Ahmedabad', NULL, NULL, '2021-06-09 08:32:54', '2024-09-05 11:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-09-12 04:33:06', '2022-09-12 04:33:06'),
(2, 'User', 'web', '2022-09-12 04:33:06', '2022-09-12 04:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `sendemaildetails`
--

CREATE TABLE `sendemaildetails` (
  `id` int(11) NOT NULL,
  `strSubject` varchar(50) DEFAULT NULL,
  `strTitle` varchar(50) DEFAULT NULL,
  `strFromMail` varchar(250) DEFAULT NULL,
  `ToMail` varchar(250) DEFAULT NULL,
  `strCC` varchar(250) DEFAULT NULL,
  `strBCC` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sendemaildetails`
--

INSERT INTO `sendemaildetails` (`id`, `strSubject`, `strTitle`, `strFromMail`, `ToMail`, `strCC`, `strBCC`) VALUES
(4, 'Login Otp', 'Shine Aestheticeye', 'info@getdemo.in', NULL, '', ''),
(8, 'Forget Password', 'Shine Aestheticeye', 'no-reply@dev5.apolloinfotech@gmail.com', NULL, NULL, NULL),
(9, 'Order Detail From The Wardrobe Fashion Order No', 'Shine Aestheticeye', 'no-reply@dev5.apolloinfotech@gmail.com', NULL, NULL, NULL),
(10, 'Dispatch Order', 'Shine Aestheticeye', 'no-reply@dev5.apolloinfotech@gmail.com', NULL, NULL, NULL),
(11, 'Contact Us', 'Shine Aestheticeye', 'no-reply@dev5.apolloinfotech@gmail.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `serviceName` varchar(100) NOT NULL,
  `iStatus` tinyint(4) NOT NULL DEFAULT 1,
  `isDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `serviceName`, `iStatus`, `isDelete`) VALUES
(1, 'Aesthetic Services', 1, 0),
(2, 'Eye treatments', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `serviceId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `iStatus` tinyint(4) NOT NULL DEFAULT 1,
  `isDelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `serviceId`, `name`, `description`, `photo`, `iStatus`, `isDelete`, `created_at`, `updated_at`) VALUES
(4, 1, 'John Doeee', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do\r\n														eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis\r\n														ipsum suspendisse ultrices gravida. Risus commodo viverra maecena\r\n														ssuspendisse ultrices gravida.', '1753175508.jpg', 1, 0, '2025-07-22 14:41:48', '2025-07-22 14:41:48'),
(5, 1, 'John Deo', '01 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do\r\n														eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis\r\n														ipsum suspendisse ultrices gravida. Risus commodo viverra maecena\r\n														ssuspendisse ultrices gravida.', '1753175565.jpg', 1, 0, '2025-07-22 14:42:45', '2025-07-22 14:42:45'),
(6, 1, 'Lisa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do\r\n														eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis\r\n														ipsum suspendisse ultrices gravida. Risus commodo viverra maecena\r\n														ssuspendisse ultrices gravida.', '1753175736.jpg', 1, 0, '2025-07-22 14:45:36', '2025-07-22 14:45:36'),
(7, 2, 'Alex', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do\r\n														eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis\r\n														ipsum suspendisse ultrices gravida. Risus commodo viverra maecena\r\n														ssuspendisse ultrices gravida.', '1753175768.jpg', 1, 0, '2025-07-22 14:46:08', '2025-07-22 14:46:08'),
(8, 1, 'John', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do\r\n														eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis\r\n														ipsum suspendisse ultrices gravida. Risus commodo viverra maecena\r\n														ssuspendisse ultrices gravida.', '1753175799.jpg', 1, 0, '2025-07-22 14:46:39', '2025-07-22 14:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2 COMMENT '1=Admin, 2=Customer,3=Reseller',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `mobile_number`, `email_verified_at`, `password`, `role_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', 'admin@admin.com', '9028187696', NULL, '$2y$10$Sm9e0By9uozq9fyuB4OSWermQ8nlgMJ8t4ZYUzGRtrWBuGIGMY92e', 1, 1, NULL, '2022-09-12 04:33:06', '2025-07-21 13:06:37'),
(2, 'Mihir', 'Rathod', 'test@gmail.com', '9999999999', NULL, '$2y$10$SnKyu4Xcoi.MBgjKVvOrFeXmTeChg96kk.OgtUrqHOzZ2yvvg.Cci', 2, 1, NULL, '2022-09-12 04:33:06', '2023-12-20 18:22:59'),
(3, 'dkkjgjlkgjjg', NULL, 'dev4.apolloinfotech@gmail.com', '9876543210', NULL, '$2y$10$CzVuGyARYVDQ.FV.zT8JmOHEdiZOO6IDKDAz/s6UFVIPT0u7xVAd2', 3, 1, NULL, '2024-07-15 11:47:04', '2024-07-15 11:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `videoId` int(11) NOT NULL,
  `serviceId` int(11) NOT NULL,
  `video` varchar(50) NOT NULL,
  `iStatus` tinyint(4) NOT NULL DEFAULT 1,
  `isDelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`videoId`, `serviceId`, `video`, `iStatus`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://www.youtube.com/embed/KRmpmDlu5PI?loop=1', 1, 0, '2024-07-26 16:17:35', '2024-07-26 16:17:35'),
(2, 2, 'https://www.youtube.com/embed/KRmpmDlu5PI?loop=1', 1, 0, '2024-08-02 14:49:26', '2024-08-02 14:49:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_master`
--
ALTER TABLE `appointment_master`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `doctor_master`
--
ALTER TABLE `doctor_master`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faqid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`galleryId`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `inquiry___`
--
ALTER TABLE `inquiry___`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `meta_data`
--
ALTER TABLE `meta_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `sendemaildetails`
--
ALTER TABLE `sendemaildetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`videoId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_master`
--
ALTER TABLE `appointment_master`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor_master`
--
ALTER TABLE `doctor_master`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `galleryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry___`
--
ALTER TABLE `inquiry___`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `meta_data`
--
ALTER TABLE `meta_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sendemaildetails`
--
ALTER TABLE `sendemaildetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `videoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
