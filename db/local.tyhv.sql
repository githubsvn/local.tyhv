-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2014 at 01:37 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `local.tyhv`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_classes`
--

CREATE TABLE IF NOT EXISTS `acl_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `acl_entries`
--

CREATE TABLE IF NOT EXISTS `acl_entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(10) unsigned NOT NULL,
  `object_identity_id` int(10) unsigned DEFAULT NULL,
  `security_identity_id` int(10) unsigned NOT NULL,
  `field_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) unsigned NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`),
  KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`),
  KEY `IDX_46C8B806EA000B10` (`class_id`),
  KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`),
  KEY `IDX_46C8B806DF9183C9` (`security_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `acl_object_identities`
--

CREATE TABLE IF NOT EXISTS `acl_object_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_object_identity_id` int(10) unsigned DEFAULT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`),
  KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `acl_object_identity_ancestors`
--

CREATE TABLE IF NOT EXISTS `acl_object_identity_ancestors` (
  `object_identity_id` int(10) unsigned NOT NULL,
  `ancestor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`object_identity_id`,`ancestor_id`),
  KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`),
  KEY `IDX_825DE299C671CEA1` (`ancestor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acl_security_identities`
--

CREATE TABLE IF NOT EXISTS `acl_security_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mtx_branch`
--

CREATE TABLE IF NOT EXISTS `mtx_branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CAB0DCA8727ACA70` (`parent_id`),
  KEY `IDX_CAB0DCA85EE01E44` (`created_id`),
  KEY `IDX_CAB0DCA8960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `mtx_branch`
--

INSERT INTO `mtx_branch` (`id`, `parent_id`, `created_id`, `updated_id`, `lft`, `rgt`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL),
(4, NULL, 1, 1, 3, 14, 1, '2013-11-24 04:35:16', '2013-11-24 04:35:16'),
(5, NULL, 1, 1, 15, 26, 1, '2013-11-24 04:35:46', '2013-11-24 04:35:46'),
(6, 4, 1, 1, 4, 5, 1, '2013-11-28 13:59:42', '2013-11-28 13:59:42'),
(7, 4, 1, 1, 6, 7, 1, '2013-11-28 14:00:37', '2013-11-28 14:00:37'),
(8, 4, 1, 1, 8, 9, 1, '2013-11-28 14:02:39', '2013-11-28 14:02:39'),
(9, 4, 1, 1, 10, 11, 1, '2013-11-28 14:04:07', '2013-11-28 14:04:07'),
(10, 4, 1, 1, 12, 13, 1, '2013-11-28 14:04:43', '2013-11-28 14:04:43'),
(11, 5, 1, 1, 16, 17, 1, '2013-11-28 14:05:48', '2013-11-28 14:05:48'),
(12, 5, 1, 1, 18, 19, 1, '2013-11-28 14:07:23', '2013-11-28 14:07:23'),
(13, 5, 1, 1, 20, 21, 1, '2013-11-28 14:08:02', '2013-11-28 14:08:02'),
(14, 5, 1, 1, 22, 23, 1, '2013-11-28 14:11:56', '2013-11-28 14:11:56'),
(15, 5, 1, 1, 24, 25, 1, '2013-11-28 14:12:49', '2013-11-28 14:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_branch_language`
--

CREATE TABLE IF NOT EXISTS `mtx_branch_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_64D3050082F1BAF4` (`language_id`),
  KEY `IDX_64D30500DCD6CC49` (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `mtx_branch_language`
--

INSERT INTO `mtx_branch_language` (`id`, `language_id`, `branch_id`, `name`) VALUES
(3, 1, 4, 'Sản Phẩm'),
(4, 1, 5, 'Đặc Sản Vùng Miền'),
(5, 1, 6, 'Điện Thoại'),
(6, 1, 7, 'Máy Tính Bảng'),
(7, 1, 8, 'Máy Tính Xách Tay'),
(8, 1, 9, 'Máy Tính Để Bàn'),
(9, 1, 10, 'Kỹ Thuật Số'),
(10, 1, 11, 'Bong Bóng Cá'),
(11, 1, 12, 'Bào Ngư'),
(12, 1, 13, 'Các Bóng Kho Tiêu'),
(13, 1, 14, 'Các Lóc Kho Tộ'),
(14, 1, 15, 'Các Linh Kho Lạc');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_category`
--

CREATE TABLE IF NOT EXISTS `mtx_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A8C8079B727ACA70` (`parent_id`),
  KEY `IDX_A8C8079B5EE01E44` (`created_id`),
  KEY `IDX_A8C8079B960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mtx_category`
--

INSERT INTO `mtx_category` (`id`, `parent_id`, `created_id`, `updated_id`, `lft`, `rgt`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL),
(2, NULL, 1, 1, 3, 4, 1, '2013-11-24 04:36:42', '2013-11-24 04:36:42'),
(3, NULL, 1, 1, 5, 6, 1, '2013-11-24 04:37:10', '2013-11-24 04:37:10'),
(4, NULL, 1, 1, 7, 8, 1, '2013-11-24 04:37:43', '2013-11-24 04:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_category_language`
--

CREATE TABLE IF NOT EXISTS `mtx_category_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B2A3A34012469DE2` (`category_id`),
  KEY `IDX_B2A3A34082F1BAF4` (`language_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mtx_category_language`
--

INSERT INTO `mtx_category_language` (`id`, `category_id`, `language_id`, `name`) VALUES
(1, 2, 1, 'Tin Tức'),
(2, 3, 1, 'Dịch Vụ'),
(3, 4, 1, 'Tư Vấn Tiêu Dùng');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_comment`
--

CREATE TABLE IF NOT EXISTS `mtx_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `products_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C10042846C8A81A9` (`products_id`),
  KEY `IDX_C10042845EE01E44` (`created_id`),
  KEY `IDX_C1004284960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `mtx_comment`
--

INSERT INTO `mtx_comment` (`id`, `products_id`, `created_id`, `updated_id`, `status`, `created_at`, `updated_at`) VALUES
(20, 23, 1, 1, 1, '2013-12-10 15:48:06', '2013-12-10 15:48:06'),
(21, 23, 1, 1, 1, '2013-12-11 15:18:24', '2013-12-11 15:18:24'),
(24, 23, 1, 1, 1, '2013-12-11 16:07:27', '2013-12-11 16:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_comment_language`
--

CREATE TABLE IF NOT EXISTS `mtx_comment_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_70AE6D1782F1BAF4` (`language_id`),
  KEY `IDX_70AE6D17F8697D13` (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `mtx_comment_language`
--

INSERT INTO `mtx_comment_language` (`id`, `language_id`, `comment_id`, `title`, `name`, `email`, `content`) VALUES
(16, 1, 20, 'Tui muon nhan xet', 'Thien Le', NULL, 'uh, cu nhan xet'),
(17, 1, 21, 'Nhan xet 1', 'Thien Le', NULL, 'AAA'),
(20, 1, 24, 'Nhận xét 5', 'Thien Le', NULL, 'AA');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_company`
--

CREATE TABLE IF NOT EXISTS `mtx_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `charter_capital` double DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1ACB19A7C54C8C93` (`type_id`),
  KEY `IDX_1ACB19A75EE01E44` (`created_id`),
  KEY `IDX_1ACB19A7960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mtx_company`
--

INSERT INTO `mtx_company` (`id`, `type_id`, `created_id`, `updated_id`, `charter_capital`, `phone`, `fax`, `mst`, `email`, `status`, `created_at`, `updated_at`, `thumb`, `website`) VALUES
(1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-11-26 13:25:13', '2013-11-26 13:25:13', '5294a139e0bfe.png', 'http://google.com'),
(2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-11-26 13:26:07', '2013-11-26 13:26:07', '5294a16f04193.png', 'http://www.ebay.com/'),
(3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-11-26 13:30:02', '2013-11-26 13:30:02', '5294a25ae59f6.png', 'http://www.nvidia.com'),
(4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-11-26 13:31:04', '2013-11-26 13:31:04', '5294a298548b4.png', 'http://www.intuit.com/'),
(5, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-11-26 13:32:44', '2013-11-26 13:32:44', '5294a2fcd8e61.png', 'http://yahoo.com'),
(6, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-11-26 13:34:39', '2013-11-26 13:53:11', '5294a7c6bcb40.png', 'http://www.symantec.com'),
(7, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-11-26 13:45:12', '2013-11-26 13:45:12', '5294a5e8769cd.png', 'http://www.seagate.com'),
(8, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-11-26 13:45:57', '2013-11-26 13:45:57', '5294a6159d956.png', 'http://www.amd.com'),
(9, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-11-26 13:46:46', '2013-11-26 13:46:46', '5294a6460efe9.png', 'http://www.apple.com'),
(10, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-12-12 15:09:57', '2013-12-12 15:09:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_companytype`
--

CREATE TABLE IF NOT EXISTS `mtx_companytype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9AF919955EE01E44` (`created_id`),
  KEY `IDX_9AF91995960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mtx_companytype`
--

INSERT INTO `mtx_companytype` (`id`, `created_id`, `updated_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2013-11-26 13:24:04', '2013-11-26 13:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_companytype_language`
--

CREATE TABLE IF NOT EXISTS `mtx_companytype_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `companytype_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_54F6538B1E00F65` (`companytype_id`),
  KEY `IDX_54F6538B82F1BAF4` (`language_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mtx_companytype_language`
--

INSERT INTO `mtx_companytype_language` (`id`, `companytype_id`, `language_id`, `name`) VALUES
(1, 1, 1, 'Quốc Tế');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_company_language`
--

CREATE TABLE IF NOT EXISTS `mtx_company_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `adress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `representation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_757D1B7C82F1BAF4` (`language_id`),
  KEY `IDX_757D1B7C979B1AD6` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mtx_company_language`
--

INSERT INTO `mtx_company_language` (`id`, `language_id`, `company_id`, `name`, `description`, `adress`, `representation`, `video`) VALUES
(1, 1, 1, 'Google', '<p><strong>Google</strong> l&agrave; một c&ocirc;ng ty <a title="Internet" href="http://vi.wikipedia.org/wiki/Internet">Internet</a> c&oacute; trụ sở tại <a title="Hoa Kỳ" href="http://vi.wikipedia.org/wiki/Hoa_K%E1%BB%B3">Hoa Kỳ</a>, được th&agrave;nh lập v&agrave;o năm <a title="1998" href="http://vi.wikipedia.org/wiki/1998">1998</a>. Sản phẩm ch&iacute;nh của c&ocirc;ng ty n&agrave;y l&agrave; c&ocirc;ng cụ t&igrave;m kiếm Google, được nhiều người đ&aacute;nh gi&aacute; l&agrave; c&ocirc;ng cụ t&igrave;m kiếm hữu &iacute;ch v&agrave; mạnh mẽ nhất tr&ecirc;n <a title="Internet" href="http://vi.wikipedia.org/wiki/Internet">Internet</a>. Trụ sở của Google t&ecirc;n l&agrave; "Googleplex" tại Mountain View, <a title="California" href="http://vi.wikipedia.org/wiki/California">California</a>. <a title="Tổng gi&aacute;m đốc điều h&agrave;nh" href="http://vi.wikipedia.org/wiki/T%E1%BB%95ng_gi%C3%A1m_%C4%91%E1%BB%91c_%C4%91i%E1%BB%81u_h%C3%A0nh">Gi&aacute;m đốc</a> l&agrave; <a title="Larry Page" href="http://vi.wikipedia.org/wiki/Larry_Page">Larry Page</a>, một trong hai người s&aacute;ng lập ra c&ocirc;ng ty. T&ecirc;n "Google" l&agrave; một lối chơi chữ của từ <em><a title="Googol" href="http://vi.wikipedia.org/wiki/Googol">googol</a></em>, bằng 10<sup>100</sup>. Google chọn t&ecirc;n n&agrave;y để thể hiện sứ mệnh của c&ocirc;ng ty để sắp xếp số lượng th&ocirc;ng tin khổng lồ tr&ecirc;n mạng. Googleplex, t&ecirc;n của trụ sở Google, c&oacute; nghĩa l&agrave; 10<sup>googol</sup>.</p>\r\n<p>Đầu năm 2012, Google đứng đầu trong danh s&aacute;ch 100 c&ocirc;ng ty c&oacute; m&ocirc;i trường l&agrave;m việc tốt nhất ở Mỹ do tạp ch&iacute; <em><a class="new" title="Fortune (tạp ch&iacute;) (trang chưa được viết)" href="http://vi.wikipedia.org/w/index.php?title=Fortune_%28t%E1%BA%A1p_ch%C3%AD%29&amp;action=edit&amp;redlink=1">Fortune</a></em> b&igrave;nh chọn với tỷ lệ tăng trưởng việc l&agrave;m trong năm 2011 l&agrave; 33%.<sup id="cite_ref-4" class="reference"><a href="http://vi.wikipedia.org/wiki/Google#cite_note-4">[4]</a></sup></p>', NULL, NULL, NULL),
(2, 1, 2, 'eBay', NULL, NULL, NULL, NULL),
(3, 1, 3, 'NVIDIA', NULL, NULL, NULL, NULL),
(4, 1, 4, 'INTUIT', NULL, NULL, NULL, NULL),
(5, 1, 5, 'Yahoo', NULL, NULL, NULL, NULL),
(6, 1, 6, 'Symantec', NULL, NULL, NULL, NULL),
(7, 1, 7, 'Maxtor', NULL, NULL, NULL, NULL),
(8, 1, 8, 'AMD', NULL, NULL, NULL, NULL),
(9, 1, 9, 'Apple', NULL, NULL, NULL, NULL),
(10, 1, 10, 'Ngân Long', '<p>Ng&acirc;n Long</p>', NULL, NULL, '<p><iframe src="http://www.youtube.com/embed/Mta4yj5pliY" frameborder="0" width="560" height="315"></iframe></p>');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_config`
--

CREATE TABLE IF NOT EXISTS `mtx_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `mtx_config`
--

INSERT INTO `mtx_config` (`id`, `name`, `value`, `description`) VALUES
(1, 'image_slide_id', '2', ''),
(2, 'image_advertisement_id', '3', ''),
(3, 'hot_line', '01234 55 88 99', ''),
(4, 'advertisement_number', '01234 55 66 88', ''),
(5, 'menu_left_parent_id_product', '4', ''),
(6, 'menu_left_parent_id_speciality_product', '5', ''),
(7, 'per_item_sale_product', '3', ''),
(8, 'support_skype', 'minhthienvt', ''),
(9, 'support_yahoo', 'minhthienvt', ''),
(10, 'admin_email', 'leminhthien84@gmail.com', ''),
(11, 'per_product_item_view_category', '13', ''),
(12, 'per_quantity_page_view_category', '10', ''),
(13, 'per_new_product_item', '6', 'Số lượng sản phẩm mới'),
(14, 'per_product_item_homepage', '10', 'Số lượng sản phẩm hiện thị trên trang chủ'),
(15, 'per_company_item_homepage', '9', 'Số lượng logo công ty trên trang chủ'),
(16, 'minuteToCounterVisitor', '15', NULL),
(17, 'meta_description', 'Toi Yeu Hang Viet', NULL),
(18, 'meta_keywords', 'Toi Yeu Hang Viet', NULL),
(19, 'meta_content', 'Toi Yeu Hang Viet', NULL),
(20, 'footer_add', 'Tòa nhà ETown 2, lầu 6, phòng 6.5 - số 364 Cộng Hòa, Tân Bình, TP HCM', 'Địa chỉ công ty được hiện thị dưới footer.'),
(21, 'phone', '(08) 38 125 999', 'Số điện thoại công ty được hiện thị phía dưới footer'),
(22, 'fax', '(08) 38 125 998', 'Số fax công ty được hiện thị phía dưới footer.'),
(23, 'info_email', 'info@toiyeuvietnam.com', 'Email liên hệ của công ty được hiện thị dưới footer.'),
(24, 'facebook_page', '#', NULL),
(25, 'twitter_page', '#', NULL),
(26, 'youtube_page', '#', NULL),
(27, 'left_ads_url', '#', 'url cho banner quảng cáo bên trái'),
(28, 'right_ads_url', '#', 'url cho banner quảng cáo bên phải');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_counter`
--

CREATE TABLE IF NOT EXISTS `mtx_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_visit` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_visit` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `mtx_counter`
--

INSERT INTO `mtx_counter` (`id`, `ip`, `time_visit`, `date_visit`) VALUES
(9, '127.0.0.1', '584', '17/1/2014'),
(10, '192.168.106.61', '586', '17/1/2014'),
(11, '192.168.106.66', '587', '17/1/2014'),
(12, '127.0.0.1', '940', '18/1/2014'),
(13, '127.0.0.1', '694', '4/3/2014'),
(14, '127.0.0.1', '890', '8/3/2014'),
(15, '127.0.0.1', '907', '8/3/2014'),
(16, '127.0.0.1', '947', '8/3/2014'),
(17, '127.0.0.1', '964', '8/3/2014'),
(18, '127.0.0.1', '284', '9/3/2014'),
(19, '127.0.0.1', '305', '9/3/2014'),
(20, '127.0.0.1', '321', '9/3/2014'),
(21, '127.0.0.1', '338', '9/3/2014'),
(22, '127.0.0.1', '354', '9/3/2014'),
(23, '127.0.0.1', '390', '9/3/2014'),
(24, '127.0.0.1', '415', '9/3/2014'),
(25, '127.0.0.1', '812', '10/3/2014');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_file`
--

CREATE TABLE IF NOT EXISTS `mtx_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C602A0815EE01E44` (`created_id`),
  KEY `IDX_C602A081960CC7F3` (`updated_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mtx_file_language`
--

CREATE TABLE IF NOT EXISTS `mtx_file_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `file_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_71562BD582F1BAF4` (`language_id`),
  KEY `IDX_71562BD593CB796C` (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mtx_group`
--

CREATE TABLE IF NOT EXISTS `mtx_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `active` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mtx_group`
--

INSERT INTO `mtx_group` (`id`, `name`, `created_at`, `updated_at`, `active`) VALUES
(1, 'Administrators', '2013-11-10 12:41:59', '2013-11-10 12:41:59', 1),
(2, 'Manager', '2013-11-10 12:41:59', '2013-11-10 12:41:59', 1),
(3, 'Users', '2013-11-10 12:41:59', '2013-11-10 12:41:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_group_role`
--

CREATE TABLE IF NOT EXISTS `mtx_group_role` (
  `group_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`,`role_id`),
  KEY `IDX_C468F723FE54D947` (`group_id`),
  KEY `IDX_C468F723D60322AC` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mtx_group_role`
--

INSERT INTO `mtx_group_role` (`group_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_item`
--

CREATE TABLE IF NOT EXISTS `mtx_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemtype_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5586B38FBA861EDF` (`itemtype_id`),
  KEY `IDX_5586B38F5EE01E44` (`created_id`),
  KEY `IDX_5586B38F960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mtx_item`
--

INSERT INTO `mtx_item` (`id`, `itemtype_id`, `created_id`, `updated_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 4, 1, 1, 1, '2013-12-22 15:46:21', '2013-12-22 15:46:21'),
(3, 4, 1, 1, 1, '2013-12-22 15:48:09', '2013-12-22 15:48:09'),
(4, 3, 1, 1, 1, '2013-12-22 15:49:09', '2013-12-22 15:49:09'),
(5, 3, 1, 1, 1, '2013-12-22 15:50:03', '2013-12-22 15:50:03'),
(6, 3, 1, 1, 1, '2013-12-22 15:51:05', '2013-12-22 15:51:05'),
(7, 3, 1, 1, 1, '2013-12-22 15:51:45', '2013-12-22 15:51:45'),
(8, 4, 1, 1, 1, '2013-12-22 15:57:01', '2013-12-22 15:57:01'),
(9, 4, 1, 1, 1, '2013-12-22 15:58:08', '2013-12-22 15:58:08'),
(10, 3, 1, 1, 1, '2013-12-22 15:58:56', '2013-12-22 15:58:56'),
(11, 4, 1, 1, 1, '2013-12-22 16:00:46', '2013-12-22 16:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_item_language`
--

CREATE TABLE IF NOT EXISTS `mtx_item_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oldprice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_AC0B6C8382F1BAF4` (`language_id`),
  KEY `IDX_AC0B6C83126F525E` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mtx_item_language`
--

INSERT INTO `mtx_item_language` (`id`, `language_id`, `item_id`, `name`, `price`, `oldprice`, `description`) VALUES
(2, 1, 2, 'Bí Xanh', '8000', '6000', NULL),
(3, 1, 3, 'Bí đỏ', '20000', '15000', NULL),
(4, 1, 4, 'Cá chép', '70000', '80000', NULL),
(5, 1, 5, 'Cá diêu hồng', '60000', '50000', NULL),
(6, 1, 6, 'Cá trê', '90000', '100000', NULL),
(7, 1, 7, 'Cá lóc', '60000', '70000', NULL),
(8, 1, 8, 'Dưa leo', '15000', '20000', NULL),
(9, 1, 9, 'Cà chua', '15000', '10000', NULL),
(10, 1, 10, 'Cá rô', '65000', '60000', NULL),
(11, 1, 11, 'Cải bông', '30000', '20000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_item_type`
--

CREATE TABLE IF NOT EXISTS `mtx_item_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CFFE2F26727ACA70` (`parent_id`),
  KEY `IDX_CFFE2F265EE01E44` (`created_id`),
  KEY `IDX_CFFE2F26960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mtx_item_type`
--

INSERT INTO `mtx_item_type` (`id`, `parent_id`, `created_id`, `updated_id`, `lft`, `rgt`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL),
(3, NULL, 1, 1, 3, 4, 1, '2013-12-22 15:05:02', '2013-12-22 15:05:02'),
(4, NULL, 1, 1, 5, 6, 1, '2013-12-22 15:12:40', '2013-12-22 15:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_item_type_language`
--

CREATE TABLE IF NOT EXISTS `mtx_item_type_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `itemtype_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FF5952E382F1BAF4` (`language_id`),
  KEY `IDX_FF5952E3BA861EDF` (`itemtype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mtx_item_type_language`
--

INSERT INTO `mtx_item_type_language` (`id`, `language_id`, `itemtype_id`, `name`) VALUES
(2, 1, 3, 'Thực Phẩm'),
(3, 1, 4, 'Nông Sản');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_language`
--

CREATE TABLE IF NOT EXISTS `mtx_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lang_key` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `is_default` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7A5F6FEF30F485F4` (`lang_key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mtx_language`
--

INSERT INTO `mtx_language` (`id`, `name`, `lang_key`, `is_default`) VALUES
(1, 'Tiếng Việt', 'vi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_media`
--

CREATE TABLE IF NOT EXISTS `mtx_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_ED6E9F4812469DE2` (`category_id`),
  KEY `IDX_ED6E9F485EE01E44` (`created_id`),
  KEY `IDX_ED6E9F48960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mtx_media`
--

INSERT INTO `mtx_media` (`id`, `category_id`, `created_id`, `updated_id`, `name`, `width`, `height`, `created_at`, `updated_at`, `active`, `link`) VALUES
(1, 2, NULL, NULL, '5291894d83dde.jpg', NULL, NULL, '2013-11-24 05:06:22', '2013-11-24 05:06:22', 1, ''),
(2, 2, NULL, NULL, '52918de59cff6.jpg', NULL, NULL, '2013-11-24 05:25:57', '2013-11-24 05:25:57', 1, ''),
(3, 2, NULL, NULL, '52918f131850b.jpg', NULL, NULL, '2013-11-24 05:28:37', '2013-11-24 05:30:59', 1, ''),
(4, 2, NULL, NULL, '52918f4d4dc0c.jpg', NULL, NULL, '2013-11-24 05:31:57', '2013-11-24 05:33:45', 1, ''),
(5, 2, NULL, NULL, '52918f6c8011f.jpg', NULL, NULL, '2013-11-24 05:32:28', '2013-11-24 05:34:24', 1, ''),
(6, 3, NULL, NULL, '5291931374e26.jpg', NULL, NULL, '2013-11-24 05:48:03', '2013-11-24 05:48:03', 1, 'http://google.com'),
(7, 3, NULL, NULL, '5291fbd4dcf20.jpg', NULL, NULL, '2013-11-24 13:15:01', '2013-11-24 13:15:01', 1, 'http://google.com'),
(8, 3, NULL, NULL, '5291fc0961574.jpg', NULL, NULL, '2013-11-24 13:15:53', '2013-11-24 13:15:53', 1, 'http://google.com'),
(9, 3, NULL, NULL, '5291fc71f283c.jpg', NULL, NULL, '2013-11-24 13:17:38', '2013-11-24 13:17:38', 1, NULL),
(10, 3, NULL, NULL, '52949f90a2e32.jpg', NULL, NULL, '2013-11-26 13:18:09', '2013-11-26 13:18:09', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_mediacategory`
--

CREATE TABLE IF NOT EXISTS `mtx_mediacategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_70EAB08727ACA70` (`parent_id`),
  KEY `IDX_70EAB085EE01E44` (`created_id`),
  KEY `IDX_70EAB08960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mtx_mediacategory`
--

INSERT INTO `mtx_mediacategory` (`id`, `parent_id`, `created_id`, `updated_id`, `lft`, `rgt`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL),
(2, NULL, 1, 1, 3, 4, 1, '2013-11-24 05:05:34', '2013-11-24 05:05:34'),
(3, NULL, 1, 1, 5, 6, 1, '2013-11-24 05:47:01', '2013-11-24 05:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_mediacategory_language`
--

CREATE TABLE IF NOT EXISTS `mtx_mediacategory_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mediacategory_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FBDE26F27B28A30E` (`mediacategory_id`),
  KEY `IDX_FBDE26F282F1BAF4` (`language_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_mediacategory_language`
--

INSERT INTO `mtx_mediacategory_language` (`id`, `mediacategory_id`, `language_id`, `name`) VALUES
(1, 2, 1, 'Slide'),
(2, 3, 1, 'Quảng Cáo');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_menu`
--

CREATE TABLE IF NOT EXISTS `mtx_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `param` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3798AC02727ACA70` (`parent_id`),
  KEY `IDX_3798AC025EE01E44` (`created_id`),
  KEY `IDX_3798AC02960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mtx_menu`
--

INSERT INTO `mtx_menu` (`id`, `parent_id`, `created_id`, `updated_id`, `lft`, `rgt`, `status`, `created_at`, `updated_at`, `url`, `type`, `param`, `position`) VALUES
(1, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 1, 1, 3, 4, 1, '2013-11-24 04:39:28', '2013-11-24 04:39:28', 'http://local.tyhv', 10, NULL, 1),
(3, NULL, 1, 1, 5, 6, 1, '2013-11-24 04:41:40', '2013-11-24 04:41:40', '/product/view-branch/1/san-pham-4.html', 3, 4, 1),
(4, NULL, 1, 1, 7, 8, 1, '2013-11-24 04:42:38', '2013-11-24 04:42:38', '/product/view-branch/1/dac-san-vung-mien-5.html', 3, 5, 1),
(5, NULL, 1, 1, 9, 10, 1, '2013-11-24 04:43:42', '2013-11-24 04:43:42', '/news/view-cat/1/dich-vu-3.html', 6, 3, 1),
(6, NULL, 1, 1, 11, 12, 1, '2013-11-24 04:44:44', '2013-11-24 04:44:44', 'http://local.tyhv/company/view-all', 10, NULL, 1),
(7, NULL, 1, 1, 13, 14, 1, '2013-11-24 04:45:46', '2013-11-24 04:45:46', '/news/view-cat/1/tu-van-tieu-dung-4.html', 6, 4, 1),
(8, NULL, 1, 1, 15, 16, 1, '2014-03-09 06:00:41', '2014-03-09 06:00:41', '/page/detail/gioi-thieu-1.html', 8, 1, 5),
(9, NULL, 1, 1, 17, 18, 1, '2014-03-09 06:01:51', '2014-03-09 06:01:51', '/page/detail/tam-nhin-su-menh-2.html', 8, 2, 5),
(10, NULL, 1, 1, 19, 20, 1, '2014-03-09 06:03:01', '2014-03-09 06:03:01', '/page/detail/cau-hoi-thuong-gap-3.html', 8, 3, 5),
(11, NULL, 1, 1, 21, 22, 1, '2014-03-09 06:04:26', '2014-03-09 06:04:26', '/page/detail/lien-he-4.html', 8, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_menu_language`
--

CREATE TABLE IF NOT EXISTS `mtx_menu_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EC57E1DECCD7E912` (`menu_id`),
  KEY `IDX_EC57E1DE82F1BAF4` (`language_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mtx_menu_language`
--

INSERT INTO `mtx_menu_language` (`id`, `menu_id`, `language_id`, `name`, `alias`) VALUES
(1, 2, 1, 'Trang Chủ', NULL),
(2, 3, 1, 'Sản Phẩm', NULL),
(3, 4, 1, 'Đặc Sản Vùng Miền', NULL),
(4, 5, 1, 'Dịch Vụ', NULL),
(5, 6, 1, 'Doanh Nghiệp', NULL),
(6, 7, 1, 'Tư Vấn Tiêu Dùng', NULL),
(7, 8, 1, 'Giới thiệu', NULL),
(8, 9, 1, 'Tầm nhìn sứ mệnh', NULL),
(9, 10, 1, 'Câu hỏi thường gặp', NULL),
(10, 11, 1, 'Liên hệ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_news`
--

CREATE TABLE IF NOT EXISTS `mtx_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_574E0FC112469DE2` (`category_id`),
  KEY `IDX_574E0FC15EE01E44` (`created_id`),
  KEY `IDX_574E0FC1960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `mtx_news`
--

INSERT INTO `mtx_news` (`id`, `category_id`, `created_id`, `updated_id`, `status`, `created_at`, `updated_at`, `image`) VALUES
(1, 2, 1, 1, 1, '2013-11-28 13:27:39', '2013-11-28 13:27:39', '529744cb8f109.jpg'),
(2, 2, 1, 1, 1, '2013-11-28 13:30:16', '2013-11-28 13:30:16', '529745684054a.jpg'),
(3, 2, 1, 1, 1, '2013-11-28 13:32:31', '2013-11-28 13:32:31', NULL),
(4, 2, 1, 1, 1, '2013-11-28 13:39:55', '2013-11-28 13:39:55', '529747abed4a2.jpg'),
(5, 2, 1, 1, 1, '2013-11-28 13:40:58', '2013-11-28 13:40:58', NULL),
(6, 3, 1, 1, 1, '2013-12-05 15:25:21', '2013-12-05 15:25:21', NULL),
(7, 3, 1, 1, 1, '2013-12-05 15:29:17', '2013-12-05 15:29:17', NULL),
(8, 3, 1, 1, 1, '2013-12-05 15:30:26', '2013-12-05 15:30:26', NULL),
(9, 3, 1, 1, 1, '2013-12-05 15:33:03', '2013-12-05 15:33:03', NULL),
(10, 3, 1, 1, 1, '2013-12-05 15:34:17', '2013-12-05 15:34:17', NULL),
(11, 3, 1, 1, 1, '2013-12-05 15:36:43', '2013-12-05 15:36:43', NULL),
(12, 3, 1, 1, 1, '2013-12-05 15:41:24', '2013-12-05 15:41:24', NULL),
(13, 3, 1, 1, 1, '2013-12-05 15:42:31', '2013-12-05 15:42:31', NULL),
(14, 3, 1, 1, 1, '2013-12-05 15:43:41', '2013-12-05 15:43:41', NULL),
(15, 3, 1, 1, 1, '2013-12-05 15:44:33', '2013-12-05 15:44:33', NULL),
(16, 3, 1, 1, 1, '2013-12-05 15:45:23', '2013-12-05 15:45:23', NULL),
(17, 3, 1, 1, 1, '2013-12-05 15:46:22', '2013-12-05 15:46:22', NULL),
(18, 2, 1, 1, 1, '2013-12-05 15:47:09', '2013-12-05 15:47:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_news_language`
--

CREATE TABLE IF NOT EXISTS `mtx_news_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_8938071982F1BAF4` (`language_id`),
  KEY `IDX_89380719B5A459A0` (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `mtx_news_language`
--

INSERT INTO `mtx_news_language` (`id`, `language_id`, `news_id`, `name`, `intro`, `description`) VALUES
(1, 1, 1, 'Từ giáo viên trung học thành triệu phú', '<p><strong>Ban đầu, Mark Pentecost chỉ muốn kiếm th&ecirc;m 500 USD mỗi th&aacute;ng để phụ gi&uacute;p gia đ&igrave;nh. Nhưng sau đ&oacute;, thầy gi&aacute;o dạy to&aacute;n n&agrave;y đ&atilde; trở th&agrave;nh &ocirc;ng chủ của một c&ocirc;ng ty doanh thu h&agrave;ng trăm triệu USD mỗi năm.</strong></p>', '<p class="Normal">C&ocirc;ng ty của Pentecost c&oacute; t&ecirc;n It Works!, kinh doanh miếng d&aacute;n giảm mỡ thừa, thực phẩm dinh dưỡng v&agrave; c&aacute;c sản phẩm chăm s&oacute;c sức khỏe. C&ocirc;ng dụng của miếng d&aacute;n bằng vải n&agrave;y l&agrave; l&agrave;m săn v&agrave; s&aacute;ng da. Thoạt nghe c&oacute; vẻ kỳ lạ, nhưng sản phẩm n&agrave;y đ&atilde; gi&uacute;p It Works! đạt doanh thu tr&ecirc;n 200 triệu USD năm 2012 v&agrave; dự kiến l&ecirc;n 500 triệu USD năm nay, <em>Forbes</em> cho biết.</p>\r\n<p class="Normal">Pentecost năm nay 56 tuổi, từng l&agrave; gi&aacute;o vi&ecirc;n dạy to&aacute;n ki&ecirc;m huấn luyện vi&ecirc;n b&oacute;ng rổ tại một trường đại học ở Grand Rapids, Michigan. Từ thập ni&ecirc;n 90, &ocirc;ng đ&atilde; muốn kiếm th&ecirc;m mỗi th&aacute;ng để lo cho gia đ&igrave;nh với ba c&ocirc; con g&aacute;i.</p>\r\n<p class="Normal">"Hồi đ&oacute;, ch&uacute;ng t&ocirc;i muốn nhiều thứ lắm. T&ocirc;i hay đọc những cuốn s&aacute;ch dạy c&aacute;ch đi l&ecirc;n, th&iacute;ch c&aacute;c c&acirc;u chuyện về tiểu sử của người th&agrave;nh đạt v&agrave; lu&ocirc;n cố t&igrave;m ra c&aacute;ch kiếm tiền. T&ocirc;i cũng y&ecirc;u việc dạy học v&agrave; huấn luyện vi&ecirc;n lắm chứ. Nhưng thu nhập từ ch&uacute;ng chẳng thể nu&ocirc;i nổi gia đ&igrave;nh", Pentecost cho biết.</p>\r\n<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/11/28/It-Works-6201-1385631188.jpg" alt="It-Works-6201-1385631188.jpg" data-natural-width="500" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">Mark Pentecost đ&atilde; trở th&agrave;nh triệu ph&uacute; nhờ nỗ lực kinh doanh trong nhiều năm. Ảnh: <em>Forbes</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal">Năm 1993, &ocirc;ng l&agrave;m th&ecirc;m cho Excel Telecommunications, một h&atilde;ng kinh doanh điện thoại cố định. Cho đến tận l&uacute;c đ&oacute;, kinh nghiệm b&aacute;n h&agrave;ng duy nhất m&agrave; &ocirc;ng c&oacute; được l&agrave; mua c&aacute;c căn nh&agrave; hỏng, sửa chữa v&agrave; b&aacute;n lại. D&ugrave; vậy, khi nhận c&ocirc;ng việc mới, Pentecost đ&atilde; nhanh ch&oacute;ng ph&aacute;t hiện m&igrave;nh c&oacute; năng khiếu b&aacute;n h&agrave;ng. Chỉ trong thời gian ngắn, &ocirc;ng trở th&agrave;nh nh&acirc;n vi&ecirc;n xuất sắc của c&ocirc;ng ty, kiếm được 300.000 - 500.000 USD mỗi năm. Hai năm sau, Pentecost nghỉ dạy học ở trường.</p>\r\n<p class="Normal">Tuy nhi&ecirc;n, khi điện thoại di động ra đời, c&ocirc;ng việc của Pentecost dần kh&ocirc;ng c&ograve;n chỗ đứng. &Ocirc;ng rời c&ocirc;ng ty, nhưng vẫn nung nấu &yacute; định tham gia v&agrave;o lĩnh vực b&aacute;n h&agrave;ng trực tiếp (Direct Sales). "Khi ấy, t&ocirc;i đ&atilde; nghĩ rằng nếu muốn tiếp tục l&agrave;m việc, t&ocirc;i sẽ mở một c&ocirc;ng ty ri&ecirc;ng để chủ động cuộc sống của m&igrave;nh", &ocirc;ng n&oacute;i.</p>\r\n<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/11/28/IWG-Male-and-Female-Wrap-1547-1385631188.jpg" alt="IWG-Male-and-Female-Wrap-1547-1385631188" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">Sản phẩm miếng d&aacute;n n&agrave;y đ&atilde; gi&uacute;p c&ocirc;ng ty đạt doanh thu h&agrave;ng trăm triệu USD. Ảnh: <em>Forbes</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal">&Yacute; tưởng về miếng d&aacute;n giảm mỡ thừa đến với &ocirc;ng cuối năm 2000. "Khi ấy, t&ocirc;i thấy bạn b&egrave; xung quanh dần quan t&acirc;m đến việc l&agrave;m thế n&agrave;o để tr&ocirc;ng trẻ v&agrave; gọn g&agrave;ng hơn", &ocirc;ng nhớ lại. Sau khi đến thăm một nh&agrave; m&aacute;y ở Mexico, Pentecost đ&atilde; đ&agrave;m ph&aacute;n để được cung cấp độc quyền sản phẩm n&agrave;y. Rồi &ocirc;ng th&agrave;nh lập It Works! năm 2001 với số tiền tiết kiệm từ thời b&aacute;n điện thoại.</p>\r\n<p class="Normal">Pentecost đ&atilde; nhận được sự trợ gi&uacute;p từ vợ v&agrave; cả những người đồng nghiệp th&acirc;n thiết trong Excel. Thời kỳ đầu, họ trưng b&agrave;y sản phẩm tại nh&agrave; v&agrave; c&aacute;c kh&aacute;ch sạn ở Michigan, Virginia, Bắc Carolina c&ugrave;ng một số địa điểm kh&aacute;c. Tuy nhi&ecirc;n, việc kinh doanh tiến triển rất chậm. Năm 2002, họ chỉ đạt doanh thu 431.000 USD v&agrave; c&ograve;n bị lỗ.</p>\r\n<p class="Normal">Cuối năm 2004, t&igrave;nh h&igrave;nh vẫn chưa được cải thiện v&agrave; Pentecost đ&atilde; phải chi th&ecirc;m nhiều tiền để giữ c&ocirc;ng ty đứng vững. V&agrave;i th&aacute;ng sau, nhờ nỗ lực kh&ocirc;ng ngừng nghỉ của c&aacute;c nh&acirc;n vi&ecirc;n kinh doanh, sản phẩm mới dần được ch&uacute; &yacute;. Đến năm 2005, họ bắt đầu c&oacute; lợi nhuận.</p>\r\n<p class="Normal">Năm 2008, It Works đ&atilde; trả được hết nợ v&agrave; c&ograve;n tiến sang thị trường Canada. Năm 2010, họ đạt doanh thu 27 triệu USD v&agrave; l&ecirc;n 46 triệu USD một năm sau đ&oacute;.</p>\r\n<p class="Normal">Hiện nay, sản phẩm của It Works! đ&atilde; c&oacute; mặt tại 12 nước tr&ecirc;n thế giới. Số nh&acirc;n c&ocirc;ng của h&atilde;ng hiện l&agrave; 60.000 người. Cả ba con g&aacute;i của Pentecost đều l&agrave; c&aacute;c nh&acirc;n vi&ecirc;n kinh doanh đắc lực cho bố.</p>\r\n<p class="Normal">It Works! lu&ocirc;n coi sinh vi&ecirc;n mới tốt nghiệp l&agrave; nguồn nh&acirc;n vi&ecirc;n kinh doanh tiềm năng. Pentecost cho biết: "T&ocirc;i muốn dạy họ kỹ năng l&atilde;nh đạo. T&ocirc;i kh&ocirc;ng quan t&acirc;m IQ của họ cao bao nhi&ecirc;u, m&agrave; chỉ cần biết họ can đảm đến mức n&agrave;o. Chỉ cần l&agrave; người gan g&oacute;c, bạn c&oacute; thể vượt qua mọi thử th&aacute;ch v&agrave; th&agrave;nh c&ocirc;ng".</p>\r\n<p class="Normal" style="text-align: right;"><strong>H&agrave; Thu</strong></p>'),
(2, 1, 2, 'Triệu phú ưa bận rộn', '<p><strong>Luke Johnson lu&ocirc;n n&oacute;i rằng "t&ocirc;i chẳng bao giờ muốn rảnh rỗi", v&agrave; điều n&agrave;y đ&atilde; gi&uacute;p &ocirc;ng trở th&agrave;nh triệu ph&uacute; với t&agrave;i sản 150 triệu bảng (243 triệu USD) c&ugrave;ng h&agrave;ng loạt th&agrave;nh t&iacute;ch kinh doanh.</strong></p>', '<p class="Normal">&Ocirc;ng hiện l&agrave; Chủ tịch quỹ đầu tư Risk Capital Partners tại Anh. Quỹ n&agrave;y r&oacute;t tiền v&agrave;o rất nhiều lĩnh vực, như nh&agrave; h&agrave;ng, c&ocirc;ng ty du lịch, ng&acirc;n h&agrave;ng v&agrave; cả c&aacute;c h&atilde;ng nghi&ecirc;n cứu. &Ocirc;ng c&ograve;n l&agrave; Chủ tịch Viện nghi&ecirc;n cứu Ung thư (ICS) v&agrave; đang viết một cuốn s&aacute;ch về kinh doanh.</p>\r\n<p class="Normal">Triệu ph&uacute; 51 tuổi cho biết tr&ecirc;n<em> BBC</em>: "Buồn ch&aacute;n l&agrave; kẻ th&ugrave; lớn nhất của t&ocirc;i. V&agrave; t&ocirc;i phải l&agrave;m mọi thứ để chống lại n&oacute;. Cũng như c&aacute;c doanh nh&acirc;n kh&aacute;c, t&ocirc;i l&agrave; kiểu người kh&ocirc;ng th&iacute;ch ngồi y&ecirc;n một chỗ. V&igrave; thế, t&ocirc;i t&igrave;m đến kinh doanh".</p>\r\n<p class="Normal">Johnson dự định trở th&agrave;nh một b&aacute;c sĩ khi theo học đại học Oxford. Tuy nhi&ecirc;n, mọi thứ đ&atilde; thay đổi khi &ocirc;ng c&ugrave;ng một người bạn quản l&yacute; một hộp đ&ecirc;m. "Ch&uacute;ng t&ocirc;i nghĩ ra rất nhiều &yacute; tưởng để thu ph&iacute; người v&agrave;o. Khi ấy, t&ocirc;i đ&atilde; nhận ra điều m&igrave;nh muốn l&agrave;m nhất trong cuộc đời. Đ&oacute; l&agrave; mở c&ocirc;ng ty ri&ecirc;ng".</p>\r\n<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/11/27/Luke-Johnson-3139-1385546722.jpg" alt="Luke-Johnson-3139-1385546722.jpg" data-natural-width="500" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">Luke Johnson đ&atilde; th&agrave;nh c&ocirc;ng với rất nhiều thương vụ kinh doanh. Ảnh: <em>Sunday Times</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal">Sau đ&oacute;, Johnson bỏ ngang khoa Y v&agrave; tốt nghiệp với tấm bằng sinh l&yacute; học. Ra trường, &ocirc;ng lại l&agrave;m m&ocirc;i giới chứng kho&aacute;n v&agrave;i năm trước khi ch&iacute;nh thức khởi nghiệp năm 27 tuổi.</p>\r\n<p class="Normal">Khối t&agrave;i sản đầu ti&ecirc;n của Johnson đến từ một cửa h&agrave;ng pizza. &Ocirc;ng c&ugrave;ng người bạn - Hugh Osmond mua lại chuỗi h&agrave;ng pizza nhỏ ở London c&oacute; t&ecirc;n Pizza Express. Họ đ&atilde; thuyết phục được c&aacute;c nh&agrave; s&aacute;ng lập Pizza Express rằng m&igrave;nh ch&iacute;nh l&agrave; người c&oacute; thể gi&uacute;p c&ocirc;ng ty ph&aacute;t triển.</p>\r\n<p class="Normal">Tại thời điểm đ&oacute;, h&atilde;ng chỉ c&oacute; 12 chi nh&aacute;nh. Nhưng 6 năm sau, nhờ Johnson, Pizza Express đ&atilde; c&oacute; 250 cửa h&agrave;ng tr&ecirc;n khắp nước Anh. Cổ phiếu của h&atilde;ng cũng tăng 40% trong thời gian n&agrave;y. Johnson coi Pizza Express l&agrave; một "việc kinh doanh ho&agrave;n hảo&rdquo; do pizza lu&ocirc;n được y&ecirc;u th&iacute;ch v&agrave; c&oacute; lợi nhuận cao.</p>\r\n<p class="Normal">Tuy nhi&ecirc;n, muốn c&oacute; thử th&aacute;ch mới, Johnson đ&atilde; b&aacute;n chuỗi cửa h&agrave;ng n&agrave;y năm 1999. Sau đ&oacute;, &ocirc;ng lại mua c&aacute;c nh&agrave; h&agrave;ng nổi tiếng như The Ivy hay Le Caprice v&agrave; mở th&ecirc;m Strada Italian. Đến năm 2005, &ocirc;ng b&aacute;n c&aacute;c chuỗi h&agrave;ng n&agrave;y v&agrave; thu về hơn 90 triệu bảng. Đầu năm nay, chuỗi nh&agrave; h&agrave;ng Giraffe của Johnson cũng được Tập đo&agrave;n Tesco mua lại với gi&aacute; 50 triệu bảng.</p>\r\n<p class="Normal">C&ocirc;ng thức th&agrave;nh c&ocirc;ng của Johnson l&agrave;: "T&igrave;m cộng sự tốt, quản l&yacute; tốt. Đ&oacute; l&agrave; những người bạn muốn l&agrave;m việc c&ugrave;ng. Họ phải thật tự tin, c&oacute; kiến thức v&agrave; nhiệt t&igrave;nh. Th&ecirc;m v&agrave;o đ&oacute;, h&atilde;y t&igrave;m đến c&aacute;c dự &aacute;n đ&atilde; tồn tại, nhưng chưa ph&aacute;t triển. Khi ấy, bạn sẽ l&agrave; người đầu tư vốn, kiến thức v&agrave; c&aacute;c mối quan hệ để gi&uacute;p c&ocirc;ng ty đ&oacute; lớn mạnh".</p>\r\n<p class="Normal">Johnson đ&atilde; từng thất bại khi mua chuỗi cửa h&agrave;ng s&aacute;ch Borders v&agrave; phải thanh l&yacute; năm 2011. &Ocirc;ng cho biết: "T&ocirc;i kh&ocirc;ng t&iacute;nh được rằng sự ph&aacute;t triển của Amazon, e-book v&agrave; si&ecirc;u thị sẽ khiến c&aacute;c cửa h&agrave;ng s&aacute;ch truyền thống bị l&atilde;ng qu&ecirc;n. Lần ấy, t&ocirc;i đ&atilde; mất sạch tiền".</p>\r\n<p class="Normal">D&ugrave; cho rằng đ&acirc;y l&agrave; "b&agrave;i học đau đớn", Johnson vẫn quan niệm "thất bại kh&ocirc;ng phải l&agrave; việc chết người". "T&ocirc;i thường khuy&ecirc;n c&aacute;c doanh nh&acirc;n trẻ rằng cứ l&agrave;m đi. Cuộc sống kh&ocirc;ng phải l&agrave; một sự tập dượt. Đừng để m&igrave;nh sau n&agrave;y phải hối hận: ''Ước g&igrave; m&igrave;nh đ&atilde; l&agrave;m việc đ&oacute;''", &ocirc;ng cho biết.</p>\r\n<p class="Normal" style="text-align: right;"><strong>H&agrave; Thu</strong></p>'),
(3, 1, 3, '''Khủng hoảng tài chính toàn cầu đã kết thúc''', '<p><strong>Theo ng&acirc;n h&agrave;ng đầu tư Nhật Bản &ndash; Nomura, 2014 sẽ l&agrave; năm đầu ti&ecirc;n kể từ sau khủng hoảng to&agrave;n cầu, c&aacute;c rủi ro vĩ m&ocirc; kh&ocirc;ng c&ograve;n thống trị thị trường chứng kho&aacute;n.</strong></p>', '<p class="Normal">Nhận định tr&ecirc;n được đưa ra trong b&aacute;o c&aacute;o mới nhất của nh&oacute;m nghi&ecirc;n cứu cổ phiếu tại Nomura. Người dẫn đầu nh&oacute;m n&agrave;y - Michael Kurtz cho biết họ cũng đ&atilde; thay đổi ch&iacute;nh s&aacute;ch đầu tư cổ phiếu năm 2014.</p>\r\n<p class="Normal">Kurtz dẫn chứng h&agrave;ng loạt số liệu kinh tế gần đ&acirc;y cho thấy cuộc khủng hoảng đ&atilde; chấm dứt. Điển h&igrave;nh l&agrave; thị trường nh&agrave; đất Mỹ đang phục hồi, Trung Quốc cam kết cải tổ, ch&ecirc;nh lệch l&atilde;i suất tr&aacute;i phiếu giữa c&aacute;c nước v&ugrave;ng l&otilde;i v&agrave; r&igrave;a ch&acirc;u &Acirc;u đ&atilde; giảm, kinh tế eurozone cũng đang tăng trưởng. V&igrave; thế, nh&agrave; đầu tư sẽ quay lại xem x&eacute;t c&aacute;c yếu tố nền tảng, như lợi nhuận doanh nghiệp.</p>\r\n<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/11/28/wall-street-8979-1385613388.jpg" alt="wall-street-8979-1385613388.jpg" data-natural-width="500" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">Rủi ro vĩ m&ocirc; sẽ kh&ocirc;ng c&ograve;n thống trị chứng kho&aacute;n thế giới năm sau. Ảnh: <em>AP</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal">&Ocirc;ng cho biết: "Nếu nh&igrave;n về tương lai, bạn sẽ thấy 2014 l&agrave; năm c&aacute;c rủi ro vĩ m&ocirc; sẽ kh&ocirc;ng c&ograve;n thống trị thị trường nữa. Thay v&agrave;o đ&oacute;, hoạt động của c&aacute;c cổ phiếu sẽ t&ugrave;y thuộc v&agrave;o lợi nhuận. V&agrave; tin tốt l&agrave; trong năm 2014, lợi nhuận doanh nghiệp thế giới c&oacute; thể tăng vọt". Nomura dự đo&aacute;n tăng trưởng GDP to&agrave;n cầu sẽ chạm 7% năm tới, từ 6,1% năm 2013.</p>\r\n<p class="Normal">Theo Nomura, tăng trưởng kinh tế năm tới sẽ chủ yếu diễn ra ở c&aacute;c nước ph&aacute;t triển. Trong khi đ&oacute;, c&aacute;c thị trường mới nổi được dự đo&aacute;n đứng y&ecirc;n, c&ograve;n Trung Quốc tiếp tục chậm lại. Tăng trưởng lợi nhuận doanh nghiệp năm tới mạnh nhất l&agrave; ở Nhật bản (19%) v&agrave; ch&acirc;u &Acirc;u (trừ Anh) với 14%. C&ograve;n c&aacute;c nước ch&acirc;u &Aacute; - Th&aacute;i B&igrave;nh Dương được dự đo&aacute;n giảm tốc.</p>\r\n<p class="Normal">Tuy nhi&ecirc;n, theo Nomura, đ&agrave; phục hồi kinh tế tại Mỹ sẽ kh&ocirc;ng c&oacute; t&aacute;c dụng t&iacute;ch cực l&ecirc;n lợi nhuận, do "kỳ vọng qu&aacute; lớn v&agrave;o bi&ecirc;n lợi nhuận lại xung đột với chi ph&iacute; vốn đang tăng l&ecirc;n v&agrave; thị trường lao động dần khởi sắc". Nomura cho biết lợi nhuận tr&ecirc;n mỗi cổ phiếu (EPS) với c&aacute;c cổ phiếu trong S&amp;P 500 được dự đo&aacute;n tăng khoảng 6% năm 2014.</p>\r\n<p class="Normal">Nomura cũng cho biết năm tới đ&aacute;nh dấu "sự thay đổi quan trọng" về chiến lược đầu tư so với hai năm trước. "Từ thời điểm n&agrave;y, cổ phiếu sẽ biến động hợp l&yacute; hơn, thay v&igrave; chỉ b&aacute;m v&agrave;o c&aacute;c rủi ro vĩ m&ocirc; như năm 2012 - 2013", b&aacute;o c&aacute;o nhận định.</p>\r\n<p class="Normal">Tuy vậy, kh&ocirc;ng phải tất cả nh&agrave; ph&acirc;n t&iacute;ch đều lạc quan về triển vọng chứng kho&aacute;n năm tới. Steen Jakobsen &ndash; kinh tế trưởng tại Saxo Bank trả lời <em>CNBC</em> rằng c&aacute;c nh&agrave; đầu tư lạc quan chỉ đang b&aacute;m đu&ocirc;i đ&agrave; tăng của chứng kho&aacute;n gần đ&acirc;y. Theo &ocirc;ng, b&acirc;y giờ kh&ocirc;ng phải l&agrave; l&uacute;c để liều lĩnh. C&ograve;n chiến lược gia nổi tiếng bi quan - Bob Janjuah th&igrave; nhận định trong ba qu&yacute; cuối năm tới, nh&agrave; đầu tư sẽ b&aacute;n th&aacute;o cổ phiếu to&agrave;n cầu.</p>\r\n<p class="Normal" style="text-align: right;"><strong>H&agrave; Thu</strong></p>'),
(4, 1, 4, 'Google sắp vượt Exxon thành công ty lớn thứ 2 thế giới', '<p><strong>Khoảng ch&ecirc;nh lệch vốn h&oacute;a giữa 2 tập đo&agrave;n đang l&agrave; 54 tỷ USD. C&aacute;c chuy&ecirc;n gia tin rằng với tốc độ tăng trưởng như hiện nay, Google sẽ vượt mặt Exxon Mobil trong năm 2014 để tiến s&aacute;t hơn tới Apple.</strong></p>', '<p class="Normal">Hiện tại, "g&atilde; khổng lồ t&igrave;m kiếm" l&agrave; c&ocirc;ng ty lớn thứ 3 nước Mỹ x&eacute;t về vốn h&oacute;a thị trường, xếp sau Apple (số một) v&agrave; Exxon Mobil (tập đo&agrave;n chuy&ecirc;n về lĩnh vực năng lượng). Theo dữ liệu của<em> Bloomberg</em>, thị gi&aacute; Apple đang l&agrave; 491 tỷ USD, Exxon 409 tỷ USD c&ograve;n Google đạt 355 tỷ USD. Đ&acirc;y l&agrave; 3 c&ocirc;ng ty c&oacute; vốn h&oacute;a lớn nhất Mỹ v&agrave; tr&ecirc;n thế giới. hiện nay.</p>\r\n<p class="Normal"><em>CNN</em> cho rằng việc Google sớm vượt qua Exxon kh&ocirc;ng phải l&agrave; điều kh&oacute; khăn. Hai c&ocirc;ng ty đang ch&ecirc;nh nhau hơn 50 tỷ USD nhưng với tốc độ tăng trưởng như hiện tại, khoảng c&aacute;ch n&agrave;y c&oacute; thể thu hẹp trong thời gian kh&ocirc;ng l&acirc;u.</p>\r\n<p class="Normal">Trong năm nay, cổ phiếu Google đ&atilde; tăng gần 50% (đang l&agrave; 1.063 USD mỗi cổ phiếu), c&ograve;n Exxon chỉ được 9% (93,8 USD một cổ phiếu). Trong năm 2014, nếu Google tiếp tục đ&agrave; tăng v&agrave; chỉ cần đạt 25% so với hiện tại, trong khi cổ phiếu Exxon l&ecirc;n gi&aacute; 5% th&igrave; l&uacute;c n&agrave;y h&atilde;ng t&igrave;m kiếm sẽ vượt qua đại gia năng lượng.</p>\r\n<p class="Normal">Google đ&atilde; vượt qua Microsoft c&aacute;ch đ&acirc;y kh&ocirc;ng l&acirc;u để đứng thứ 3 tr&ecirc;n bảng xếp hạng c&aacute;c c&ocirc;ng ty đắt gi&aacute; của Mỹ v&agrave; vẫn l&agrave; một trong những "ng&ocirc;i sao" của l&agrave;ng c&ocirc;ng nghệ thế giới. Trong l&uacute;c c&aacute;c đại gia như Microsoft, IBM, Oracle, Cisco... tăng trưởng chậm chạp th&igrave; nh&agrave; đầu tư kh&ocirc;ng phải lo lắng về t&igrave;nh h&igrave;nh hoạt động của Google. Bốn tập đo&agrave;n c&ocirc;ng nghệ tr&ecirc;n đều đặt mục ti&ecirc;u doanh thu tăng 10% mỗi năm trong thời gian tới, c&ograve;n Google kỳ vọng v&agrave;o mức lợi nhuận 17% chứ kh&ocirc;ng n&oacute;i doanh thu.</p>\r\n<p class="Normal">H&atilde;ng c&oacute; trong tay khoảng 56,5 tỷ USD tiền mặt v&agrave; kh&ocirc;ng &iacute;t kế hoạch nghi&ecirc;n cứu ph&aacute;t triển, đầu tư, M&amp;A... Mục ti&ecirc;u tiếp theo sau khi qua được Exxon sẽ l&agrave; Apple. Nếu c&aacute;c thiết bị di động Android của h&atilde;ng vẫn tấn c&ocirc;ng v&agrave;o thị phần iPhone, iPad như hiện nay th&igrave; cục diện c&oacute; thể thay đổi hơn nữa.</p>\r\n<p class="Normal">Theo <em>CNN</em>, gi&aacute; Google hiện phản &aacute;nh sự lạc quan của c&aacute;c nh&agrave; đầu tư. Mỗi cổ phiếu đang giao dịch cao gấp 20 lần so với lợi nhuận tr&ecirc;n mỗi cổ phiếu (EPS) ước t&iacute;nh năm 2014. Nhưng nếu so ra th&igrave; đ&acirc;y vẫn chưa phải con số thể hiện tất cả v&igrave; Google vẫn c&ograve;n đối thủ. Facebook vẫn c&ograve;n trẻ v&agrave; cũng ph&aacute;t triển kh&ocirc;ng ngừng. Với 46,5 USD mỗi cổ phiếu, gi&aacute; đang cao hơn 40 lần so với EPS 2014. Yahoo cũng ở mức 21,5 lần.</p>\r\n<p class="Normal">Marissa Mayer l&ecirc;n nắm quyền thực sự đ&atilde; thay đổi c&acirc;u chuyện của Yahoo. C&aacute;c chuy&ecirc;n gia ước t&iacute;nh lợi nhuận của h&atilde;ng trong v&agrave;i năm tới sẽ tăng trung b&igrave;nh 10%. Hiện cổ phiếu Yahoo gần 37 USD, tăng gần gấp đ&ocirc;i so với thời điểm n&agrave;y năm trước, vốn h&oacute;a thị trường đạt 37,5 tỷ USD.</p>\r\n<p class="Normal" style="text-align: right;"><strong>Kh&aacute;nh Linh</strong></p>'),
(5, 1, 5, 'Chứng khoán Mỹ tăng cao kỷ lục', '<p><strong>Chốt phi&ecirc;n 27/11, chỉ số Dow Jones đạt 16.097,33 điểm, cao nhất trong lịch sử. Standard &amp; Poor''s 500 c&ugrave;ng l&uacute;c lập kỷ lục, hứa hẹn mức tăng h&agrave;ng năm lớn nhất kể từ 1998.</strong></p>', '<p class="Normal">Theo<em> Bloomberg</em>, chốt phi&ecirc;n giao dịch ng&agrave;y 27/11, chỉ số S&amp;P 500 tr&ecirc;n s&agrave;n New York (Mỹ) đ&atilde; tăng 0,3%, đạt mức kỷ 1.807,23 điểm. C&ugrave;ng với đ&oacute;, Dow Jones cũng kh&eacute;p lại một ng&agrave;y với mức tăng 0,2%, l&ecirc;n 16.097,33 điểm - cao nhất từ trước đến nay.</p>\r\n<p class="Normal">Trong năm nay, S&amp;P 500 đ&atilde; th&ecirc;m 27% v&agrave; c&oacute; thể trở th&agrave;nh mức tăng h&agrave;ng năm lớn nhất kể từ năm 1998, nhờ việc Cục Dự trữ li&ecirc;n bang Mỹ (FED) ấn định kế hoạch k&iacute;ch th&iacute;ch kinh tế. Ngo&agrave;i ra, số liệu về thị trường lao động v&agrave; niềm tin ti&ecirc;u d&ugrave;ng cũng khiến nh&agrave; đầu tư lạc quan về nền kinh tế.</p>\r\n<p class="Normal">Cựu chủ tịch FED Alan Greenspan cho rằng kinh tế Mỹ sẽ tăng trưởng chậm hơn so với dự đo&aacute;n trước đ&acirc;y v&agrave;o năm sau v&agrave; nhấn mạnh thị trường chứng kho&aacute;n đạt kỷ lục kh&ocirc;ng phải l&agrave; hiện tượng bong b&oacute;ng. "C&aacute;c chuy&ecirc;n gia dự tăng 2,5-3% năm tới c&oacute; thể hơi qu&aacute; lạc quan", Alan nhận định. Theo &ocirc;ng, tốc độ tăng trưởng chỉ đạt gần 2%, trong khi mức trung b&igrave;nh đưa ra trước đ&acirc;y l&agrave; 2,6%, c&ograve;n năm nay chỉ đạt 1,7%.</p>\r\n<p class="Normal">Trong số 10 nh&oacute;m chỉ số S&amp;P 500 th&igrave; c&oacute; 8 nh&oacute;m tăng điểm, trong đ&oacute; ng&agrave;nh c&ocirc;ng nghệ đạt cao nhất (1%) với cổ phiếu HP l&ecirc;n tới 27,36 USD (tăng 9,1%), cao nhất kể từ th&aacute;ng 2/2012. Mỗi cổ phiếu Apple cũng tăng 2,4% đạt 545,96 USD. Ngược lại, dầu th&ocirc; giảm gi&aacute; khiến nh&oacute;m cổ phiếu năng lượng giảm 0,7%, lớn nhất trong 10 nh&oacute;m.</p>\r\n<p class="Normal" style="text-align: right;"><strong>Kh&aacute;nh Linh</strong></p>'),
(6, 1, 6, 'Không đẩy nhanh triển khai 4G tại Việt Nam', '<p>Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng nhận định chi ph&iacute; đầu tư cho c&ocirc;ng nghệ mới sẽ khiến gi&aacute; th&agrave;nh dịch vụ tăng cao, chưa ph&ugrave; hợp với chi ti&ecirc;u của người d&acirc;n l&uacute;c n&agrave;y.</p>', '<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/12/05/4g-4145-1386240019.jpg" alt="4g-4145-1386240019.jpg" data-natural-width="500" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">Hiện 4G đang trong giai đoạn thử nghiệm v&agrave; đến 2015 mới c&oacute; thể cung cấp đến người ti&ecirc;u d&ugrave;ng. Ảnh: <em>Anh Qu&acirc;n</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal">Theo ph&acirc;n t&iacute;ch của Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng tại buổi giao ban ng&agrave;y 5/12, tr&ecirc;n thế giới đ&atilde; khoảng 30 nước c&oacute; doanh nghiệp viễn th&ocirc;ng cung cấp dịch vụ 4G, trong đ&oacute; c&oacute; một số quốc gia gần Việt Nam như Th&aacute;i Lan, Indonesia v&agrave; mới đ&acirc;y l&agrave; Trung Quốc. Mạng 4G trong điều kiện l&yacute; tưởng đạt tốc độ truyền tối đa 1Gbkps đối với người d&ugrave;ng tĩnh v&agrave; 100Mbkps với người di chuyển.</p>\r\n<p class="Normal">&Ocirc;ng Phạm Hồng Hải, Cục trưởng Cục Viễn th&ocirc;ng (Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng) s&aacute;ng 5/12 đ&atilde; đề xuất với l&atilde;nh đạo Bộ xem x&eacute;t việc họp với doanh nghiệp để đ&aacute;nh gi&aacute;, triển khai sớm c&ocirc;ng nghệ mạng 4G tại Việt Nam. Ph&iacute;a Cục cho rằng năng lực v&agrave; c&ocirc;ng nghệ, cũng như vấn đề t&agrave;i ch&iacute;nh hiện nay của c&aacute;c doanh nghiệp đ&atilde; tương đối sẵn s&agrave;ng, c&oacute; thể triển khai ngay m&agrave; kh&ocirc;ng cần đợi th&ecirc;m 2 năm nữa.</p>\r\n<p class="Normal">Tuy nhi&ecirc;n, đề xuất n&agrave;y kh&ocirc;ng được chấp thuận. Bộ trưởng Nguyễn Bắc Son khẳng định 4G Việt Nam cần tu&acirc;n theo đ&uacute;ng lộ tr&igrave;nh, sớm nhất l&agrave; năm 2015. Quy hoạch ph&aacute;t triển viễn th&ocirc;ng quốc gia cũng n&ecirc;u r&otilde; đến sau 2015 th&igrave; Ch&iacute;nh phủ mới xem x&eacute;t triển khai cấp ph&eacute;p 4G.</p>\r\n<p class="Normal">B&ecirc;n cạnh đ&oacute;, một phần l&yacute; do l&agrave; c&ocirc;ng suất mạng 3G vẫn chưa được khai th&aacute;c hết n&ecirc;n đẩy nhanh qu&aacute; tr&igrave;nh sẽ g&acirc;y l&atilde;ng ph&iacute;. "Nh&agrave; mạng đầu tư 2 tỷ USD cho hạ tầng 3G, người d&acirc;n cũng phải chi rất nhiều tiền để sắm thiết bị tương th&iacute;ch m&agrave; vẫn chưa d&ugrave;ng hết c&ocirc;ng suất", Bộ trưởng nhận định. Việc đầu tư 4G l&uacute;c n&agrave;y c&oacute; thể ti&ecirc;u tốn của nh&agrave; mạng th&ecirc;m tiền tỷ cho hạ tầng v&agrave; người ti&ecirc;u d&ugrave;ng cũng phải bỏ số tiền kh&ocirc;ng k&eacute;m để mua thiết bị đầu cuối c&oacute; hỗ trợ nền mạng n&agrave;y.</p>\r\n<p class="Normal">L&atilde;nh đạo Bộ cũng cho rằng c&ocirc;ng nghệ c&ograve;n chưa ho&agrave;n chỉnh v&igrave; qu&aacute; mới, gi&aacute; th&agrave;nh lại cao th&igrave; chưa n&ecirc;n &aacute;p dụng. Theo &ocirc;ng, chỉ khi thị trường đi v&agrave;o ổn định, gi&aacute; th&agrave;nh trở n&ecirc;n hợp l&yacute;, dễ tiếp cận với số đ&ocirc;ng người d&ugrave;ng th&igrave; mới n&ecirc;n triển khai. Hiện tại, Bộ cũng đ&atilde; cấp ph&eacute;p cho một số doanh nghiệp viễn th&ocirc;ng để thử nghiệm mạng 4G.</p>\r\n<p class="Normal">"Đến thời điểm th&iacute;ch hợp, Bộ sẽ cho đấu gi&aacute; băng tần như 3G trước đ&acirc;y, kh&ocirc;ng cấp ph&eacute;p trực tiếp cho doanh nghiệp n&agrave;o hết", Bộ trưởng khẳng định.&nbsp;<span>Năm 2009, Bộ đ&atilde; cấp 4 giấy ph&eacute;p cung cấp 3G cho Viettel, Mobifone, Vinaphone v&agrave; li&ecirc;n minh EVN Telecom-HT Mobile (nay EVT Telecom đ&atilde; s&aacute;p nhập với Viettel, HT Mobile đổi t&ecirc;n th&agrave;nh Vietnamobile). Đến nay trong số 5 doanh nghiệp viễn th&ocirc;ng đang hoạt động th&igrave; c&oacute; 4 đơn vị cung cấp 3G (ri&ecirc;ng Gmobile chỉ c&oacute; 2G).</span></p>\r\n<p class="Normal" style="text-align: right;"><strong><span>Anh Qu&acirc;n</span></strong></p>'),
(7, 1, 7, '12 triệu khách qua sân bay Nội Bài từ đầu năm', '<p>L&atilde;nh đạo Cảng h&agrave;ng kh&ocirc;ng Quốc tế Nội B&agrave;i nhận định c&oacute; thể ho&agrave;n th&agrave;nh mục ti&ecirc;u 12,7 triệu lượt kh&aacute;ch năm nay, song cũng lo lắng bởi t&igrave;nh trạng qu&aacute; tải.</p>', '<p>Vị kh&aacute;ch lượt thứ 12 triệu trong năm 2013 của Cảng h&agrave;ng kh&ocirc;ng quốc tế Nội B&agrave;i đặt ch&acirc;n xuống s&acirc;n bay l&uacute;c 9h10 s&aacute;ng nay (5/12). Đ&acirc;y được xem l&agrave; kỷ lục về số kh&aacute;ch đ&oacute;n tiếp trong năm của s&acirc;n bay n&agrave;y.&nbsp;Theo th&ocirc;ng b&aacute;o, vị kh&aacute;ch may mắn n&ecirc;u tr&ecirc;n l&agrave; &ocirc;ng Phạm Ngọc Dũng, một doanh nh&acirc;n tr&ecirc;n đường đi c&ocirc;ng t&aacute;c v&agrave; đi chuyến VJ8660 của Vietjet Air.</p>\r\n<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/12/05/khach-thu-12-2713-1386235389.jpg" alt="khach-thu-12-2713-1386235389.jpg" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">Một buổi lễ đ&atilde; được tổ chức để đ&oacute;n vị kh&aacute;ch thứ 12 triệu trong năm nay tại Cảng h&agrave;ng kh&ocirc;ng Quốc tế Nội B&agrave;i. Ảnh: <em>Thanh B&igrave;nh</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>"Kế hoạch đặt ra từ đầu năm của Nội B&agrave;i l&agrave; 12,7 triệu lượt kh&aacute;ch trong năm nay. Từ nay đến cuối năm c&ograve;n gần một th&aacute;ng nữa, nhiều khả năng ch&uacute;ng t&ocirc;i sẽ ho&agrave;n th&agrave;nh kế hoạch v&igrave; cuối năm lượng kh&aacute;ch đi lại nhiều", &ocirc;ng Vũ Thế Phiệt, Gi&aacute;m đốc Cảng cho hay.</p>\r\n<p>Cũng theo l&atilde;nh đạo s&acirc;n bay, việc đ&oacute;n tiếp khoảng 13 triệu lượt h&agrave;nh kh&aacute;ch trong một năm đ&atilde; vượt xa c&ocirc;ng suất thiết kế chỉ 6 triệu của Nội B&agrave;i. Để giảm t&igrave;nh trạng qu&aacute; tải, dự kiến cuối năm nay c&ocirc;ng ty quản l&yacute; cảng sẽ đưa th&ecirc;m phần T1 mở rộng (được đặt t&ecirc;n l&agrave; sảnh E) v&agrave;o sử dụng. Sảnh E n&agrave;y c&oacute; c&ocirc;ng suất 3 triệu h&agrave;nh kh&aacute;ch mỗi năm. Dự kiến v&agrave;o cuối năm 2014, nh&agrave; ga T2 với tổng mức đầu tư 18.000 tỷ đồng sẽ ho&agrave;n th&agrave;nh, với c&ocirc;ng suất 15 triệu h&agrave;nh kh&aacute;ch mỗi năm.&nbsp;</p>\r\n<p style="text-align: right;"><strong>Thanh B&igrave;nh</strong></p>'),
(8, 1, 8, 'Phạt doanh nghiệp phát tán tin rác hơn 3 tỷ đồng', '<p>Ch&aacute;nh thanh tra Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng cho biết đ&atilde; tiến h&agrave;nh xử phạt 25 doanh nghiệp li&ecirc;n quan đến nội dung n&agrave;y. Cơ quan quản l&yacute; nhận định nhiều đơn vị cung cấp nội dung di động&nbsp;đang tồn tại nhờ tin nhắn r&aacute;c.</p>', '<p class="Normal">Tại buổi giao ban định kỳ ng&agrave;y 5/12, Ch&aacute;nh thanh tra Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng Nguyễn Văn H&ugrave;ng cho biết thời gian qua, cơ quan n&agrave;y đ&atilde; phối hợp với Cục Viễn th&ocirc;ng,&nbsp;<span>Trung t&acirc;m Ứng cứu khẩn cấp m&aacute;y t&iacute;nh (VNCERT) kiểm tra c&aacute;c doanh nghiệp cung cấp dịch vụ nội dung. 25 đơn vị bị ph&aacute;t hiện gửi tin r&aacute;c đến thu&ecirc; bao đ&atilde; nhận &aacute;n phạt h&agrave;nh ch&iacute;nh tổng cộng 3 tỷ đồng.</span></p>\r\n<p class="Normal"><span>Theo &ocirc;ng H&ugrave;ng, d&ugrave; quản l&yacute; chặt nhưng đến nay tin nhắn r&aacute;c vẫn ho&agrave;nh h&agrave;nh, ng&agrave;y c&agrave;ng c&oacute; những h&igrave;nh thức tinh vi, xảo quyệt hơn n&ecirc;n việc quản l&yacute; đầu số cần gắt gao hơn nữa. "Đ&acirc;y l&agrave; t&igrave;nh trạng nhức nhối với x&atilde; hội", Ch&aacute;nh thanh tra nhấn mạnh.&nbsp;</span><span>Hồi th&aacute;ng 3, đ&atilde; c&oacute; 4 doanh nghiệp nội dung số bị xử phạt hơn 1,7 tỷ đồng v&igrave; ph&aacute;t t&aacute;n tin r&aacute;c. Theo ước t&iacute;nh của Sở Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng H&agrave; Nội, mỗi ng&agrave;y c&oacute; khoảng một triệu tin nhắn được gửi đến c&aacute;c thu&ecirc; bao.</span></p>\r\n<p class="Normal"><span>Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng đ&atilde; ban h&agrave;nh nhiều Th&ocirc;ng tư, Nghị định về việc quản l&yacute;, thu ph&iacute; thu&ecirc; bao trả trước, tuy nhi&ecirc;n c&aacute;c văn bản n&agrave;y vẫn chưa ph&aacute;t huy hết hiệu quả. Theo Bộ trưởng Nguyễn Bắc Son, việc cho ph&eacute;p mỗi người d&acirc;n được đăng k&yacute; tối đa 3 số ở mỗi nh&agrave; mạng (tương đương 15 số cho tất cả 5 doanh nghiệp cung cấp viễn th&ocirc;ng hiện nay) hay c&aacute; nh&acirc;n đăng k&yacute; cho doanh nghiệp c&oacute; thể cả trăm thu&ecirc; bao được xem l&agrave; kẽ hở.</span></p>\r\n<p class="Normal">&Ocirc;ng Phạm Hồng Hải, Cục trưởng Cục Viễn th&ocirc;ng chia sẻ th&ecirc;m: "Ở c&aacute;c điểm địa phương, c&oacute; thể n&oacute;i Th&ocirc;ng tư 04 chưa được triển khai". L&atilde;nh đạo Cục cũng cho biết t&iacute;nh hết th&aacute;ng 10 cả nước c&oacute; 120 triệu thu&ecirc; bao hoạt động (c&oacute; li&ecirc;n lạc đi hoặc đến). Trong số n&agrave;y chỉ c&oacute; khoảng 91 triệu c&oacute; ph&aacute;t sinh lưu lượng n&ecirc;n c&oacute; thể thấy lượng thu&ecirc; bao ảo tr&ecirc;n thị trường c&ograve;n rất nhiều.&nbsp;<span>Do vậy, l&atilde;nh đạo Bộ v&agrave; Cục Viễn th&ocirc;ng cho rằng tới đ&acirc;y cần điều chỉnh lại Th&ocirc;ng tư 04 về quản l&yacute; thu&ecirc; bao di động trả trước.&nbsp;</span></p>\r\n<p class="Normal">Th&ocirc;ng tư 04 đ&atilde; được &aacute;p dụng từ th&aacute;ng 6/2012, quy định người ti&ecirc;u d&ugrave;ng kh&ocirc;ng được sử dụng chứng minh thư nh&acirc;n d&acirc;n hoặc hộ chiếu của m&igrave;nh để đăng k&yacute; th&ocirc;ng tin thu&ecirc; bao cho người kh&aacute;c. Tuy nhi&ecirc;n bằng c&aacute;c thiết bị c&ocirc;ng nghệ v&agrave; "thủ thuật", c&aacute;c chủ đại l&yacute;, cửa h&agrave;ng sim thẻ vẫn thoải m&aacute;i k&iacute;ch hoạt sim trả trước để lấy khuyến mại, b&aacute;n ra thị trường, g&acirc;y kh&oacute; khăn cho việc ngăn chặn tin r&aacute;c của nh&agrave; mạng cũng như cơ quan chức năng.&nbsp;</p>\r\n<p class="Normal" style="text-align: right;"><strong>Anh Qu&acirc;n</strong></p>'),
(9, 1, 9, 'Cư dân Zone 9 xin được tiếp tục kinh doanh 3 năm', '<p>Bỏ hơn 40 tỷ đồng v&agrave; nhiều c&ocirc;ng sức để đầu tư v&agrave;o "quận nghệ thuật" Zone 9, c&aacute;c tiểu thương tại đ&acirc;y tỏ ra bức x&uacute;c trước th&ocirc;ng tin sắp phải đ&oacute;ng cửa.</p>', '<p class="Normal">2 ng&agrave;y sau khi th&ocirc;ng tin về quyết định đ&oacute;ng cửa Zone 9 được c&aacute;c phương tiện truyền th&ocirc;ng loan b&aacute;o, những người kinh doanh ở khu vực n&agrave;y đang trong cảnh đứng ngồi kh&ocirc;ng y&ecirc;n. D&ugrave; tất cả cửa h&agrave;ng vẫn mở cửa đ&oacute;n kh&aacute;ch, những nơi n&agrave;o đang cải tạo vẫn tiếp tục x&acirc;y dựng, nhưng tất cả đều trong t&acirc;m trạng chộn rộn. Chốc chốc, họ lại &iacute; ới nhau qua điện thoại, tập trung đến một qu&aacute;n n&agrave;o đ&oacute; để c&ugrave;ng thảo luận, b&agrave;n bạc.</p>\r\n<p>Chị Giang Trang, một người kinh doanh tại đ&acirc;y cho biết chiều qua, cả khu đ&atilde; c&oacute; một cuộc họp khẩn b&agrave;n c&aacute;ch viết đơn kiến nghị l&ecirc;n Ủy ban Nh&acirc;n d&acirc;n th&agrave;nh phố. "Ch&uacute;ng t&ocirc;i đ&atilde; tập hợp giấy đăng k&yacute; kinh doanh của c&aacute;c hộ để c&oacute; thống k&ecirc; cụ thể về c&aacute;c ng&agrave;nh nghề đang hoạt động tại đ&acirc;y, đồng thời cũng l&agrave; cơ sở ph&aacute;p l&yacute; để chứng minh m&igrave;nh l&agrave;m đ&uacute;ng luật", chị Trang n&oacute;i.</p>\r\n<p class="Normal">Ngo&agrave;i ra, trong thư ngỏ, c&aacute;c đơn vị kinh doanh khẳng định rằng m&igrave;nh đang lao động nghi&ecirc;m t&uacute;c, tạo ra nhiều c&ocirc;ng ăn việc l&agrave;m cho x&atilde; hội. "Ch&uacute;ng t&ocirc;i cũng đ&atilde; bỏ nhiều tiền của cải tạo v&agrave; thiết lập kinh doanh tại đ&acirc;y, do đ&oacute; mong muốn được duy tr&igrave; hoạt động, &iacute;t nhất l&agrave; theo đ&uacute;ng hợp đồng 3 năm đ&atilde; k&yacute;", tiểu thương n&agrave;y cho biết th&ecirc;m.</p>\r\n<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/12/04/zone-9-3-5474-1386156169.jpg" alt="zone-9-3-5474-1386156169.jpg" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">Một g&oacute;c Zone 9, khu hoạt động nghệ thuật tập trung đầu ti&ecirc;n ở Việt Nam. Ảnh: <em>Anh Qu&acirc;n</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Theo thống k&ecirc; chưa đầy đủ của c&aacute;c cư d&acirc;n Zone 9, tr&ecirc;n dưới 60 đơn vị đang kinh doanh tại đ&acirc;y đ&atilde; r&oacute;t tr&ecirc;n 40 tỷ đồng v&agrave;o nơi họ gọi l&agrave; "hợp t&aacute;c x&atilde; nghệ thuật" n&agrave;y. Một trong những người đ&atilde; đầu từ "khủng" nhất ch&iacute;nh l&agrave; gia đ&igrave;nh chị Trang. Hiện vợ chồng chị đồng sở hữu một qu&aacute;n bar mang t&ecirc;n Bar Betta, với số tiền đầu tư tr&ecirc;n 3 tỷ đồng, một qu&aacute;n c&agrave; ph&ecirc; 500 triệu đồng v&agrave; một c&ocirc;ng ty nội thất. Tất cả đều đặt trong khu n&agrave;y.</p>\r\n<p class="Normal">"Hơn 3 tỷ đồng l&agrave; mới t&iacute;nh những chi ph&iacute; nh&igrave;n thấy được. C&ograve;n những thứ tự nh&agrave; l&agrave;m được th&igrave; chưa t&iacute;nh, v&igrave; gia đ&igrave;nh t&ocirc;i l&agrave;m nội thất n&ecirc;n nhiều hạng mục trong c&aacute;c qu&aacute;n l&agrave; do tự l&agrave;m", chị Giang Trang n&oacute;i th&ecirc;m.</p>\r\n<p class="Normal">Ngo&agrave;i trường hợp n&ecirc;u tr&ecirc;n, nhiều khoản đầu tư khủng kh&aacute;c cũng được giới kinh doanh tại đ&acirc;y bỏ ra như nh&agrave; h&agrave;ng Nhật Take với vốn đầu tư tr&ecirc;n dưới một tỷ đồng, một studio nghệ thuật kh&aacute;c gi&aacute; tr&ecirc;n dưới 2 tỷ đồng...</p>\r\n<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/12/04/zone-9-1-5274-1386156169.jpg" alt="zone-9-1-5274-1386156169.jpg" data-natural-width="490" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">C&aacute;c cư d&acirc;n Zone 9 đang b&agrave;n về chuyện đ&oacute;ng cửa trưa 4/12. Ảnh:<em>&nbsp;Anh Qu&acirc;n</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>L&agrave; một nhiếp ảnh gia c&oacute; tiếng của H&agrave; Th&agrave;nh, anh Nguyễn Đăng Long cho biết đ&atilde; c&ugrave;ng em trai đ&atilde; đầu tư 600 triệu đồng để x&acirc;y dựng một studio ảnh tại đ&acirc;y. "Điều khiến t&ocirc;i lo lắng nhất kh&ocirc;ng phải l&agrave; tiền. Khi c&aacute;c nghệ sĩ, kiến tr&uacute;c sư, nh&agrave; thiết kế đầu tư v&agrave;o đ&acirc;y, ch&uacute;ng t&ocirc;i muốn tạo ra một s&acirc;n chơi nghệ thuật, một m&ocirc;i trường s&aacute;ng tạo", anh Long n&oacute;i.</p>\r\n<p>Luật sư Nguyễn Thế Truyền, một cư d&acirc;n kh&aacute;c của Zone 9 n&oacute;i: "Nếu được, H&agrave; Nội n&ecirc;n để c&aacute;c cư d&acirc;n hoạt động 3 năm đ&uacute;ng như hợp đồng ch&uacute;ng t&ocirc;i đ&atilde; thu&ecirc;. Sau đ&oacute; nếu th&agrave;nh phố thấy m&ocirc; h&igrave;nh n&agrave;y hiệu quả v&agrave; cần ph&aacute;t triển, th&agrave;nh phố c&oacute; thể tiếp tục để ch&uacute;ng t&ocirc;i hoạt động hoặc bố tr&iacute; một địa điểm kh&aacute;c để cư d&acirc;n Zone 9 chuyển đến".</p>\r\n<p>Hiện nay, c&aacute;c cư d&acirc;n Zone 9 hoang mang v&igrave; c&aacute;c th&ocirc;ng tin đ&oacute;ng cửa m&agrave; họ biết được đều l&agrave; qua b&aacute;o ch&iacute;. C&aacute;c cơ quan chức năng vẫn chưa gửi bất cứ th&ocirc;ng tin g&igrave; đến họ về sự việc tr&ecirc;n. Để trấn an, h&ocirc;m qua C&ocirc;ng ty TNHH Th&agrave;nh Đạt, đơn vị k&yacute; hợp đồng li&ecirc;n doanh li&ecirc;n kết với c&aacute;c hộ kinh doanh, đ&atilde; ph&aacute;t đi một th&ocirc;ng b&aacute;o trấn an cho biết hoạt động kinh doanh vẫn diễn ra b&igrave;nh thường.</p>\r\n<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/12/04/zone-9-2-9891-1386156169.jpg" alt="zone-9-2-9891-1386156169.jpg" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">Một qu&aacute;n c&agrave; ph&ecirc; c&oacute; c&aacute;ch trang tr&iacute; độc đ&aacute;o ở Zone 9. Ảnh: <em>Anh Qu&acirc;n</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Trước khi c&oacute; những th&ocirc;ng tin n&ecirc;u tr&ecirc;n, giới trẻ H&agrave; Th&agrave;nh vẫn biết đến v&agrave; gọi khu Zone 9 l&agrave; "quận nghệ thuật" (art district). Đ&acirc;y tiền th&acirc;n l&agrave; một khu nh&agrave; bỏ hoang của C&ocirc;ng ty cổ phần Dược phẩm Trung ương 2, bị bỏ hoang sau khi đơn vị n&agrave;y kết th&uacute;c hợp đồng thu&ecirc; đất 50 năm.&nbsp;</p>\r\n<p>Đầu năm 2006, tại số 9 Trần Th&aacute;nh T&ocirc;ng (Hai B&agrave; Trưng), một cuộc thảo luận đ&atilde; diễn ra giữa ra giữa 5 đơn vị, gồm c&oacute; Đại diện c&ocirc;ng ty cổ phần dược phẩm Trung ương 2, C&ocirc;ng ty cổ phần tập đo&agrave;n Đại Dương, C&ocirc;ng ty cổ phần B&igrave;nh An, C&ocirc;ng ty cổ phần Tiến Bộ, C&ocirc;ng ty TNHH tư vấn BĐS Th&agrave;nh Đạt. Sau khi thảo luận, c&aacute;c b&ecirc;n đ&atilde; thống nhất ủy quyền cho C&ocirc;ng ty cổ phần tập đo&agrave;n Đại Dương, đại diện l&agrave; &ocirc;ng Ng&ocirc; Anh Tuấn k&yacute; bi&ecirc;n bản b&agrave;n giao mặt bằng cho C&ocirc;ng ty cổ phần Tiến Bộ, đồng thời thống nhất về việc đơn vị n&agrave;y b&agrave;n giao kh&aacute;c th&aacute;c, sử dụng mặt bằng khu đất cho C&ocirc;ng ty TNHH tư vấn Th&agrave;nh Đạt do b&agrave; Lại Thị Chinh l&agrave;m gi&aacute;m đốc.&nbsp;</p>\r\n<p>Đến lượt C&ocirc;ng ty Th&agrave;nh Đạt đ&atilde; k&yacute; hợp đồng li&ecirc;n doanh li&ecirc;n kết thời hạn 3 năm với c&aacute;c c&ocirc;ng ty, hộ kinh doanh c&aacute; thể, những người muốn thu&ecirc; lại mặt bằng tại khu vực n&agrave;y để kinh doanh v&agrave; hoạt động nghệ thuật.</p>\r\n<p>Từ một khu vực bỏ hoang, c&aacute;c văn nghệ sĩ v&agrave; người kinh doanh đ&atilde; biến Zone 9 th&agrave;nh một "quận nghệ thuật" với tr&ecirc;n dưới 60 cơ sở hoạt động, bao gồm c&aacute;c ph&ograve;ng tranh, nơi biểu diễn nghệ thuật, ph&ograve;ng trưng b&agrave;y, studio ảnh, một số nh&agrave; h&agrave;ng qu&aacute;n ăn như hiện nay.</p>\r\n<p style="text-align: right;"><strong>Thanh B&igrave;nh</strong></p>'),
(10, 1, 10, 'Tái xuất nhiều xe Việt kiều ách tại cảng', '<p>Trong thời hạn 30 ng&agrave;y kể từ khi c&oacute; quyết định t&aacute;i xuất, nếu chủ h&agrave;ng kh&ocirc;ng thực hiện, những chiếc xe hạng sang n&agrave;y sẽ bị tịch thu.&nbsp;</p>', '<p class="Normal"><span>Bộ T&agrave;i ch&iacute;nh vừa c&oacute; c&ocirc;ng văn hướng dẫn Cục Hải quan c&aacute;c tỉnh, th&agrave;nh phố xử l&yacute; đối với xe &ocirc;t&ocirc;, m&ocirc;t&ocirc; đ&atilde; chuyển về cảng Việt Nam nhưng kh&ocirc;ng đủ điều kiện nhập khẩu theo chế độ t&agrave;i sản di chuyển của Việt kiều hồi hương.&nbsp;</span><span>Theo đ&oacute;, những trường hợp vi phạm sẽ bị xử l&iacute; bằng c&aacute;ch phạt tiền v&agrave; buộc đưa ra khỏi l&atilde;nh thổ Việt Nam.</span></p>\r\n<p class="Normal">C&aacute;c trường hợp n&ecirc;u tr&ecirc;n phải được thực hiện trong thời hạn 30 ng&agrave;y kể từ ng&agrave;y Hải quan ra quyết định buộc t&aacute;i xuất. Qu&aacute; thời hạn m&agrave; kh&ocirc;ng thực hiện, phương tiện sẽ bị tịch thu theo quy định, trừ trường hợp c&oacute; l&yacute; do ch&iacute;nh đ&aacute;ng. Đối với c&aacute;c trường hợp kh&aacute;c, Bộ T&agrave;i ch&iacute;nh y&ecirc;u cầu c&aacute;c đơn vị kiểm tra, x&aacute;c minh v&agrave; xử l&yacute; theo Điều 45 Luật Hải quan.&nbsp;</p>\r\n<p class="Normal">Trước đ&oacute;, l&atilde;nh đạo Chi cục Hải quan cửa khẩu cảng C&aacute;i M&eacute;p (tỉnh B&agrave; Rịa - Vũng T&agrave;u), cảng Đ&agrave; Nẵng v&agrave; Hải Ph&ograve;ng đều cho biết đang lưu giữ h&agrave;ng chục chiếc xe &ocirc;t&ocirc; hạng sang như: Range Rover Evoque 2013, Acura MDX 2013, Jaguar XJL 2013 (automobile), Lexus 2013 RX 350, Toyota Sienna LE (m&agrave;u v&agrave;ng)... Trong đ&oacute; c&oacute; rất nhiều chiếc của c&aacute;c c&aacute; nh&acirc;n Việt kiều nhập xe theo diện hồi hương mang t&agrave;i sản theo c&ugrave;ng.&nbsp;</p>\r\n<p class="Normal">Theo quy định t&agrave;i sản &ldquo;theo ch&acirc;n&rdquo; Việt kiều hồi hương sẽ được miễn thuế VAT v&agrave; thuế nhập khẩu, chỉ phải nộp thuế ti&ecirc;u thụ đặc biệt dựa tr&ecirc;n trị gi&aacute; ban đầu n&ecirc;n nhiều doanh nghiệp tranh thủ lợi dụng nhập lậu. Với ưu đ&atilde;i tr&ecirc;n, mỗi chiếc xe hạng sang rẻ hơn h&agrave;ng chục ngh&igrave;n đ&ocirc;la so với c&aacute;ch th&ocirc;ng thường. C&aacute;c cơ quan Hải quan cũng cho biết nhiều lần mời c&aacute;c đơn vị đứng t&ecirc;n nhập khẩu l&ecirc;n l&agrave;m việc nhưng kh&ocirc;ng nhận được sự hợp t&aacute;c.</p>\r\n<p class="Normal" style="text-align: right;"><strong>Ngọc Tuy&ecirc;n</strong></p>');
INSERT INTO `mtx_news_language` (`id`, `language_id`, `news_id`, `name`, `intro`, `description`) VALUES
(11, 1, 11, 'Tái xuất nhiều xe Việt kiều ách tại cảng', '<p>Trong thời hạn 30 ng&agrave;y kể từ khi c&oacute; quyết định t&aacute;i xuất, nếu chủ h&agrave;ng kh&ocirc;ng thực hiện, những chiếc xe hạng sang n&agrave;y sẽ bị tịch thu</p>', '<p class="Normal"><span>Bộ T&agrave;i ch&iacute;nh vừa c&oacute; c&ocirc;ng văn hướng dẫn Cục Hải quan c&aacute;c tỉnh, th&agrave;nh phố xử l&yacute; đối với xe &ocirc;t&ocirc;, m&ocirc;t&ocirc; đ&atilde; chuyển về cảng Việt Nam nhưng kh&ocirc;ng đủ điều kiện nhập khẩu theo chế độ t&agrave;i sản di chuyển của Việt kiều hồi hương.&nbsp;</span><span>Theo đ&oacute;, những trường hợp vi phạm sẽ bị xử l&iacute; bằng c&aacute;ch phạt tiền v&agrave; buộc đưa ra khỏi l&atilde;nh thổ Việt Nam.</span></p>\r\n<p class="Normal">C&aacute;c trường hợp n&ecirc;u tr&ecirc;n phải được thực hiện trong thời hạn 30 ng&agrave;y kể từ ng&agrave;y Hải quan ra quyết định buộc t&aacute;i xuất. Qu&aacute; thời hạn m&agrave; kh&ocirc;ng thực hiện, phương tiện sẽ bị tịch thu theo quy định, trừ trường hợp c&oacute; l&yacute; do ch&iacute;nh đ&aacute;ng. Đối với c&aacute;c trường hợp kh&aacute;c, Bộ T&agrave;i ch&iacute;nh y&ecirc;u cầu c&aacute;c đơn vị kiểm tra, x&aacute;c minh v&agrave; xử l&yacute; theo Điều 45 Luật Hải quan.&nbsp;</p>\r\n<p class="Normal">Trước đ&oacute;, l&atilde;nh đạo Chi cục Hải quan cửa khẩu cảng C&aacute;i M&eacute;p (tỉnh B&agrave; Rịa - Vũng T&agrave;u), cảng Đ&agrave; Nẵng v&agrave; Hải Ph&ograve;ng đều cho biết đang lưu giữ h&agrave;ng chục chiếc xe &ocirc;t&ocirc; hạng sang như: Range Rover Evoque 2013, Acura MDX 2013, Jaguar XJL 2013 (automobile), Lexus 2013 RX 350, Toyota Sienna LE (m&agrave;u v&agrave;ng)... Trong đ&oacute; c&oacute; rất nhiều chiếc của c&aacute;c c&aacute; nh&acirc;n Việt kiều nhập xe theo diện hồi hương mang t&agrave;i sản theo c&ugrave;ng.&nbsp;</p>\r\n<p class="Normal">Theo quy định t&agrave;i sản &ldquo;theo ch&acirc;n&rdquo; Việt kiều hồi hương sẽ được miễn thuế VAT v&agrave; thuế nhập khẩu, chỉ phải nộp thuế ti&ecirc;u thụ đặc biệt dựa tr&ecirc;n trị gi&aacute; ban đầu n&ecirc;n nhiều doanh nghiệp tranh thủ lợi dụng nhập lậu. Với ưu đ&atilde;i tr&ecirc;n, mỗi chiếc xe hạng sang rẻ hơn h&agrave;ng chục ngh&igrave;n đ&ocirc;la so với c&aacute;ch th&ocirc;ng thường. C&aacute;c cơ quan Hải quan cũng cho biết nhiều lần mời c&aacute;c đơn vị đứng t&ecirc;n nhập khẩu l&ecirc;n l&agrave;m việc nhưng kh&ocirc;ng nhận được sự hợp t&aacute;c.</p>\r\n<p class="Normal" style="text-align: right;"><strong>Ngọc Tuy&ecirc;n</strong></p>'),
(12, 1, 12, 'Tái xuất nhiều xe Việt kiều ách tại cảng', '<p>Trong thời hạn 30 ng&agrave;y kể từ khi c&oacute; quyết định t&aacute;i xuất, nếu chủ h&agrave;ng kh&ocirc;ng thực hiện, những chiếc xe hạng sang n&agrave;y sẽ bị tịch thu</p>', '<p>Bộ T&agrave;i ch&iacute;nh vừa c&oacute; c&ocirc;ng văn hướng dẫn Cục Hải quan c&aacute;c tỉnh, th&agrave;nh phố xử l&yacute; đối với xe &ocirc;t&ocirc;, m&ocirc;t&ocirc; đ&atilde; chuyển về cảng Việt Nam nhưng kh&ocirc;ng đủ điều kiện nhập khẩu theo chế độ t&agrave;i sản di chuyển của Việt kiều hồi hương. Theo đ&oacute;, những trường hợp vi phạm sẽ bị xử l&iacute; bằng c&aacute;ch phạt tiền v&agrave; buộc đưa ra khỏi l&atilde;nh thổ Việt Nam.<br />C&aacute;c trường hợp n&ecirc;u tr&ecirc;n phải được thực hiện trong thời hạn 30 ng&agrave;y kể từ ng&agrave;y Hải quan ra quyết định buộc t&aacute;i xuất. Qu&aacute; thời hạn m&agrave; kh&ocirc;ng thực hiện, phương tiện sẽ bị tịch thu theo quy định, trừ trường hợp c&oacute; l&yacute; do ch&iacute;nh đ&aacute;ng. Đối với c&aacute;c trường hợp kh&aacute;c, Bộ T&agrave;i ch&iacute;nh y&ecirc;u cầu c&aacute;c đơn vị kiểm tra, x&aacute;c minh v&agrave; xử l&yacute; theo Điều 45 Luật Hải quan. <br />Trước đ&oacute;, l&atilde;nh đạo Chi cục Hải quan cửa khẩu cảng C&aacute;i M&eacute;p (tỉnh B&agrave; Rịa - Vũng T&agrave;u), cảng Đ&agrave; Nẵng v&agrave; Hải Ph&ograve;ng đều cho biết đang lưu giữ h&agrave;ng chục chiếc xe &ocirc;t&ocirc; hạng sang như: Range Rover Evoque 2013, Acura MDX 2013, Jaguar XJL 2013 (automobile), Lexus 2013 RX 350, Toyota Sienna LE (m&agrave;u v&agrave;ng)... Trong đ&oacute; c&oacute; rất nhiều chiếc của c&aacute;c c&aacute; nh&acirc;n Việt kiều nhập xe theo diện hồi hương mang t&agrave;i sản theo c&ugrave;ng. <br />Theo quy định t&agrave;i sản &ldquo;theo ch&acirc;n&rdquo; Việt kiều hồi hương sẽ được miễn thuế VAT v&agrave; thuế nhập khẩu, chỉ phải nộp thuế ti&ecirc;u thụ đặc biệt dựa tr&ecirc;n trị gi&aacute; ban đầu n&ecirc;n nhiều doanh nghiệp tranh thủ lợi dụng nhập lậu. Với ưu đ&atilde;i tr&ecirc;n, mỗi chiếc xe hạng sang rẻ hơn h&agrave;ng chục ngh&igrave;n đ&ocirc;la so với c&aacute;ch th&ocirc;ng thường. C&aacute;c cơ quan Hải quan cũng cho biết nhiều lần mời c&aacute;c đơn vị đứng t&ecirc;n nhập khẩu l&ecirc;n l&agrave;m việc nhưng kh&ocirc;ng nhận được sự hợp t&aacute;c.</p>\r\n<p>Bộ T&agrave;i ch&iacute;nh vừa c&oacute; c&ocirc;ng văn hướng dẫn Cục Hải quan c&aacute;c tỉnh, th&agrave;nh phố xử l&yacute; đối với xe &ocirc;t&ocirc;, m&ocirc;t&ocirc; đ&atilde; chuyển về cảng Việt Nam nhưng kh&ocirc;ng đủ điều kiện nhập khẩu theo chế độ t&agrave;i sản di chuyển của Việt kiều hồi hương. Theo đ&oacute;, những trường hợp vi phạm sẽ bị xử l&iacute; bằng c&aacute;ch phạt tiền v&agrave; buộc đưa ra khỏi l&atilde;nh thổ Việt Nam.<br />C&aacute;c trường hợp n&ecirc;u tr&ecirc;n phải được thực hiện trong thời hạn 30 ng&agrave;y kể từ ng&agrave;y Hải quan ra quyết định buộc t&aacute;i xuất. Qu&aacute; thời hạn m&agrave; kh&ocirc;ng thực hiện, phương tiện sẽ bị tịch thu theo quy định, trừ trường hợp c&oacute; l&yacute; do ch&iacute;nh đ&aacute;ng. Đối với c&aacute;c trường hợp kh&aacute;c, Bộ T&agrave;i ch&iacute;nh y&ecirc;u cầu c&aacute;c đơn vị kiểm tra, x&aacute;c minh v&agrave; xử l&yacute; theo Điều 45 Luật Hải quan. <br />Trước đ&oacute;, l&atilde;nh đạo Chi cục Hải quan cửa khẩu cảng C&aacute;i M&eacute;p (tỉnh B&agrave; Rịa - Vũng T&agrave;u), cảng Đ&agrave; Nẵng v&agrave; Hải Ph&ograve;ng đều cho biết đang lưu giữ h&agrave;ng chục chiếc xe &ocirc;t&ocirc; hạng sang như: Range Rover Evoque 2013, Acura MDX 2013, Jaguar XJL 2013 (automobile), Lexus 2013 RX 350, Toyota Sienna LE (m&agrave;u v&agrave;ng)... Trong đ&oacute; c&oacute; rất nhiều chiếc của c&aacute;c c&aacute; nh&acirc;n Việt kiều nhập xe theo diện hồi hương mang t&agrave;i sản theo c&ugrave;ng. <br />Theo quy định t&agrave;i sản &ldquo;theo ch&acirc;n&rdquo; Việt kiều hồi hương sẽ được miễn thuế VAT v&agrave; thuế nhập khẩu, chỉ phải nộp thuế ti&ecirc;u thụ đặc biệt dựa tr&ecirc;n trị gi&aacute; ban đầu n&ecirc;n nhiều doanh nghiệp tranh thủ lợi dụng nhập lậu. Với ưu đ&atilde;i tr&ecirc;n, mỗi chiếc xe hạng sang rẻ hơn h&agrave;ng chục ngh&igrave;n đ&ocirc;la so với c&aacute;ch th&ocirc;ng thường. C&aacute;c cơ quan Hải quan cũng cho biết nhiều lần mời c&aacute;c đơn vị đứng t&ecirc;n nhập khẩu l&ecirc;n l&agrave;m việc nhưng kh&ocirc;ng nhận được sự hợp t&aacute;c.</p>\r\n<p>Bộ T&agrave;i ch&iacute;nh vừa c&oacute; c&ocirc;ng văn hướng dẫn Cục Hải quan c&aacute;c tỉnh, th&agrave;nh phố xử l&yacute; đối với xe &ocirc;t&ocirc;, m&ocirc;t&ocirc; đ&atilde; chuyển về cảng Việt Nam nhưng kh&ocirc;ng đủ điều kiện nhập khẩu theo chế độ t&agrave;i sản di chuyển của Việt kiều hồi hương. Theo đ&oacute;, những trường hợp vi phạm sẽ bị xử l&iacute; bằng c&aacute;ch phạt tiền v&agrave; buộc đưa ra khỏi l&atilde;nh thổ Việt Nam.<br />C&aacute;c trường hợp n&ecirc;u tr&ecirc;n phải được thực hiện trong thời hạn 30 ng&agrave;y kể từ ng&agrave;y Hải quan ra quyết định buộc t&aacute;i xuất. Qu&aacute; thời hạn m&agrave; kh&ocirc;ng thực hiện, phương tiện sẽ bị tịch thu theo quy định, trừ trường hợp c&oacute; l&yacute; do ch&iacute;nh đ&aacute;ng. Đối với c&aacute;c trường hợp kh&aacute;c, Bộ T&agrave;i ch&iacute;nh y&ecirc;u cầu c&aacute;c đơn vị kiểm tra, x&aacute;c minh v&agrave; xử l&yacute; theo Điều 45 Luật Hải quan. <br />Trước đ&oacute;, l&atilde;nh đạo Chi cục Hải quan cửa khẩu cảng C&aacute;i M&eacute;p (tỉnh B&agrave; Rịa - Vũng T&agrave;u), cảng Đ&agrave; Nẵng v&agrave; Hải Ph&ograve;ng đều cho biết đang lưu giữ h&agrave;ng chục chiếc xe &ocirc;t&ocirc; hạng sang như: Range Rover Evoque 2013, Acura MDX 2013, Jaguar XJL 2013 (automobile), Lexus 2013 RX 350, Toyota Sienna LE (m&agrave;u v&agrave;ng)... Trong đ&oacute; c&oacute; rất nhiều chiếc của c&aacute;c c&aacute; nh&acirc;n Việt kiều nhập xe theo diện hồi hương mang t&agrave;i sản theo c&ugrave;ng. <br />Theo quy định t&agrave;i sản &ldquo;theo ch&acirc;n&rdquo; Việt kiều hồi hương sẽ được miễn thuế VAT v&agrave; thuế nhập khẩu, chỉ phải nộp thuế ti&ecirc;u thụ đặc biệt dựa tr&ecirc;n trị gi&aacute; ban đầu n&ecirc;n nhiều doanh nghiệp tranh thủ lợi dụng nhập lậu. Với ưu đ&atilde;i tr&ecirc;n, mỗi chiếc xe hạng sang rẻ hơn h&agrave;ng chục ngh&igrave;n đ&ocirc;la so với c&aacute;ch th&ocirc;ng thường. C&aacute;c cơ quan Hải quan cũng cho biết nhiều lần mời c&aacute;c đơn vị đứng t&ecirc;n nhập khẩu l&ecirc;n l&agrave;m việc nhưng kh&ocirc;ng nhận được sự hợp t&aacute;c.</p>'),
(13, 1, 13, 'Tái xuất nhiều xe Việt kiều ách tại cảng', '<p>Trong thời hạn 30 ng&agrave;y kể từ khi c&oacute; quyết định t&aacute;i xuất, nếu chủ h&agrave;ng kh&ocirc;ng thực hiện, những chiếc xe hạng sang n&agrave;y sẽ bị tịch thu</p>', '<p>Bộ T&agrave;i ch&iacute;nh vừa c&oacute; c&ocirc;ng văn hướng dẫn Cục Hải quan c&aacute;c tỉnh, th&agrave;nh phố xử l&yacute; đối với xe &ocirc;t&ocirc;, m&ocirc;t&ocirc; đ&atilde; chuyển về cảng Việt Nam nhưng kh&ocirc;ng đủ điều kiện nhập khẩu theo chế độ t&agrave;i sản di chuyển của Việt kiều hồi hương. Theo đ&oacute;, những trường hợp vi phạm sẽ bị xử l&iacute; bằng c&aacute;ch phạt tiền v&agrave; buộc đưa ra khỏi l&atilde;nh thổ Việt Nam.<br />C&aacute;c trường hợp n&ecirc;u tr&ecirc;n phải được thực hiện trong thời hạn 30 ng&agrave;y kể từ ng&agrave;y Hải quan ra quyết định buộc t&aacute;i xuất. Qu&aacute; thời hạn m&agrave; kh&ocirc;ng thực hiện, phương tiện sẽ bị tịch thu theo quy định, trừ trường hợp c&oacute; l&yacute; do ch&iacute;nh đ&aacute;ng. Đối với c&aacute;c trường hợp kh&aacute;c, Bộ T&agrave;i ch&iacute;nh y&ecirc;u cầu c&aacute;c đơn vị kiểm tra, x&aacute;c minh v&agrave; xử l&yacute; theo Điều 45 Luật Hải quan. <br />Trước đ&oacute;, l&atilde;nh đạo Chi cục Hải quan cửa khẩu cảng C&aacute;i M&eacute;p (tỉnh B&agrave; Rịa - Vũng T&agrave;u), cảng Đ&agrave; Nẵng v&agrave; Hải Ph&ograve;ng đều cho biết đang lưu giữ h&agrave;ng chục chiếc xe &ocirc;t&ocirc; hạng sang như: Range Rover Evoque 2013, Acura MDX 2013, Jaguar XJL 2013 (automobile), Lexus 2013 RX 350, Toyota Sienna LE (m&agrave;u v&agrave;ng)... Trong đ&oacute; c&oacute; rất nhiều chiếc của c&aacute;c c&aacute; nh&acirc;n Việt kiều nhập xe theo diện hồi hương mang t&agrave;i sản theo c&ugrave;ng. <br />Theo quy định t&agrave;i sản &ldquo;theo ch&acirc;n&rdquo; Việt kiều hồi hương sẽ được miễn thuế VAT v&agrave; thuế nhập khẩu, chỉ phải nộp thuế ti&ecirc;u thụ đặc biệt dựa tr&ecirc;n trị gi&aacute; ban đầu n&ecirc;n nhiều doanh nghiệp tranh thủ lợi dụng nhập lậu. Với ưu đ&atilde;i tr&ecirc;n, mỗi chiếc xe hạng sang rẻ hơn h&agrave;ng chục ngh&igrave;n đ&ocirc;la so với c&aacute;ch th&ocirc;ng thường. C&aacute;c cơ quan Hải quan cũng cho biết nhiều lần mời c&aacute;c đơn vị đứng t&ecirc;n nhập khẩu l&ecirc;n l&agrave;m việc nhưng kh&ocirc;ng nhận được sự hợp t&aacute;c.</p>\r\n<p>Bộ T&agrave;i ch&iacute;nh vừa c&oacute; c&ocirc;ng văn hướng dẫn Cục Hải quan c&aacute;c tỉnh, th&agrave;nh phố xử l&yacute; đối với xe &ocirc;t&ocirc;, m&ocirc;t&ocirc; đ&atilde; chuyển về cảng Việt Nam nhưng kh&ocirc;ng đủ điều kiện nhập khẩu theo chế độ t&agrave;i sản di chuyển của Việt kiều hồi hương. Theo đ&oacute;, những trường hợp vi phạm sẽ bị xử l&iacute; bằng c&aacute;ch phạt tiền v&agrave; buộc đưa ra khỏi l&atilde;nh thổ Việt Nam.<br />C&aacute;c trường hợp n&ecirc;u tr&ecirc;n phải được thực hiện trong thời hạn 30 ng&agrave;y kể từ ng&agrave;y Hải quan ra quyết định buộc t&aacute;i xuất. Qu&aacute; thời hạn m&agrave; kh&ocirc;ng thực hiện, phương tiện sẽ bị tịch thu theo quy định, trừ trường hợp c&oacute; l&yacute; do ch&iacute;nh đ&aacute;ng. Đối với c&aacute;c trường hợp kh&aacute;c, Bộ T&agrave;i ch&iacute;nh y&ecirc;u cầu c&aacute;c đơn vị kiểm tra, x&aacute;c minh v&agrave; xử l&yacute; theo Điều 45 Luật Hải quan. <br />Trước đ&oacute;, l&atilde;nh đạo Chi cục Hải quan cửa khẩu cảng C&aacute;i M&eacute;p (tỉnh B&agrave; Rịa - Vũng T&agrave;u), cảng Đ&agrave; Nẵng v&agrave; Hải Ph&ograve;ng đều cho biết đang lưu giữ h&agrave;ng chục chiếc xe &ocirc;t&ocirc; hạng sang như: Range Rover Evoque 2013, Acura MDX 2013, Jaguar XJL 2013 (automobile), Lexus 2013 RX 350, Toyota Sienna LE (m&agrave;u v&agrave;ng)... Trong đ&oacute; c&oacute; rất nhiều chiếc của c&aacute;c c&aacute; nh&acirc;n Việt kiều nhập xe theo diện hồi hương mang t&agrave;i sản theo c&ugrave;ng. <br />Theo quy định t&agrave;i sản &ldquo;theo ch&acirc;n&rdquo; Việt kiều hồi hương sẽ được miễn thuế VAT v&agrave; thuế nhập khẩu, chỉ phải nộp thuế ti&ecirc;u thụ đặc biệt dựa tr&ecirc;n trị gi&aacute; ban đầu n&ecirc;n nhiều doanh nghiệp tranh thủ lợi dụng nhập lậu. Với ưu đ&atilde;i tr&ecirc;n, mỗi chiếc xe hạng sang rẻ hơn h&agrave;ng chục ngh&igrave;n đ&ocirc;la so với c&aacute;ch th&ocirc;ng thường. C&aacute;c cơ quan Hải quan cũng cho biết nhiều lần mời c&aacute;c đơn vị đứng t&ecirc;n nhập khẩu l&ecirc;n l&agrave;m việc nhưng kh&ocirc;ng nhận được sự hợp t&aacute;c.</p>'),
(14, 1, 14, 'Không đẩy nhanh triển khai 4G tại Việt Nam', '<p>Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng nhận định chi ph&iacute; đầu tư cho c&ocirc;ng nghệ mới sẽ khiến gi&aacute; th&agrave;nh dịch vụ tăng cao, chưa ph&ugrave; hợp với chi ti&ecirc;u của người d&acirc;n l&uacute;c n&agrave;y.</p>', '<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/12/05/4g-4145-1386240019.jpg" alt="4g-4145-1386240019.jpg" data-natural-width="500" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">Hiện 4G đang trong giai đoạn thử nghiệm v&agrave; đến 2015 mới c&oacute; thể cung cấp đến người ti&ecirc;u d&ugrave;ng. Ảnh: <em>Anh Qu&acirc;n</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal">Theo ph&acirc;n t&iacute;ch của Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng tại buổi giao ban ng&agrave;y 5/12, tr&ecirc;n thế giới đ&atilde; khoảng 30 nước c&oacute; doanh nghiệp viễn th&ocirc;ng cung cấp dịch vụ 4G, trong đ&oacute; c&oacute; một số quốc gia gần Việt Nam như Th&aacute;i Lan, Indonesia v&agrave; mới đ&acirc;y l&agrave; Trung Quốc. Mạng 4G trong điều kiện l&yacute; tưởng đạt tốc độ truyền tối đa 1Gbkps đối với người d&ugrave;ng tĩnh v&agrave; 100Mbkps với người di chuyển.</p>\r\n<p class="Normal">&Ocirc;ng Phạm Hồng Hải, Cục trưởng Cục Viễn th&ocirc;ng (Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng) s&aacute;ng 5/12 đ&atilde; đề xuất với l&atilde;nh đạo Bộ xem x&eacute;t việc họp với doanh nghiệp để đ&aacute;nh gi&aacute;, triển khai sớm c&ocirc;ng nghệ mạng 4G tại Việt Nam. Ph&iacute;a Cục cho rằng năng lực v&agrave; c&ocirc;ng nghệ, cũng như vấn đề t&agrave;i ch&iacute;nh hiện nay của c&aacute;c doanh nghiệp đ&atilde; tương đối sẵn s&agrave;ng, c&oacute; thể triển khai ngay m&agrave; kh&ocirc;ng cần đợi th&ecirc;m 2 năm nữa.</p>\r\n<p class="Normal">Tuy nhi&ecirc;n, đề xuất n&agrave;y kh&ocirc;ng được chấp thuận. Bộ trưởng Nguyễn Bắc Son khẳng định 4G Việt Nam cần tu&acirc;n theo đ&uacute;ng lộ tr&igrave;nh, sớm nhất l&agrave; năm 2015. Quy hoạch ph&aacute;t triển viễn th&ocirc;ng quốc gia cũng n&ecirc;u r&otilde; đến sau 2015 th&igrave; Ch&iacute;nh phủ mới xem x&eacute;t triển khai cấp ph&eacute;p 4G.</p>\r\n<p class="Normal">B&ecirc;n cạnh đ&oacute;, một phần l&yacute; do l&agrave; c&ocirc;ng suất mạng 3G vẫn chưa được khai th&aacute;c hết n&ecirc;n đẩy nhanh qu&aacute; tr&igrave;nh sẽ g&acirc;y l&atilde;ng ph&iacute;. "Nh&agrave; mạng đầu tư 2 tỷ USD cho hạ tầng 3G, người d&acirc;n cũng phải chi rất nhiều tiền để sắm thiết bị tương th&iacute;ch m&agrave; vẫn chưa d&ugrave;ng hết c&ocirc;ng suất", Bộ trưởng nhận định. Việc đầu tư 4G l&uacute;c n&agrave;y c&oacute; thể ti&ecirc;u tốn của nh&agrave; mạng th&ecirc;m tiền tỷ cho hạ tầng v&agrave; người ti&ecirc;u d&ugrave;ng cũng phải bỏ số tiền kh&ocirc;ng k&eacute;m để mua thiết bị đầu cuối c&oacute; hỗ trợ nền mạng n&agrave;y.</p>\r\n<p class="Normal">L&atilde;nh đạo Bộ cũng cho rằng c&ocirc;ng nghệ c&ograve;n chưa ho&agrave;n chỉnh v&igrave; qu&aacute; mới, gi&aacute; th&agrave;nh lại cao th&igrave; chưa n&ecirc;n &aacute;p dụng. Theo &ocirc;ng, chỉ khi thị trường đi v&agrave;o ổn định, gi&aacute; th&agrave;nh trở n&ecirc;n hợp l&yacute;, dễ tiếp cận với số đ&ocirc;ng người d&ugrave;ng th&igrave; mới n&ecirc;n triển khai. Hiện tại, Bộ cũng đ&atilde; cấp ph&eacute;p cho một số doanh nghiệp viễn th&ocirc;ng để thử nghiệm mạng 4G.</p>\r\n<p class="Normal">"Đến thời điểm th&iacute;ch hợp, Bộ sẽ cho đấu gi&aacute; băng tần như 3G trước đ&acirc;y, kh&ocirc;ng cấp ph&eacute;p trực tiếp cho doanh nghiệp n&agrave;o hết", Bộ trưởng khẳng định.&nbsp;<span>Năm 2009, Bộ đ&atilde; cấp 4 giấy ph&eacute;p cung cấp 3G cho Viettel, Mobifone, Vinaphone v&agrave; li&ecirc;n minh EVN Telecom-HT Mobile (nay EVT Telecom đ&atilde; s&aacute;p nhập với Viettel, HT Mobile đổi t&ecirc;n th&agrave;nh Vietnamobile). Đến nay trong số 5 doanh nghiệp viễn th&ocirc;ng đang hoạt động th&igrave; c&oacute; 4 đơn vị cung cấp 3G (ri&ecirc;ng Gmobile chỉ c&oacute; 2G).</span></p>\r\n<p class="Normal" style="text-align: right;"><strong><span>Anh Qu&acirc;n</span></strong></p>'),
(15, 1, 15, 'Không đẩy nhanh triển khai 4G tại Việt Nam', '<p>Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng nhận định chi ph&iacute; đầu tư cho c&ocirc;ng nghệ mới sẽ khiến gi&aacute; th&agrave;nh dịch vụ tăng cao, chưa ph&ugrave; hợp với chi ti&ecirc;u của người d&acirc;n l&uacute;c n&agrave;y.</p>', '<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/12/05/4g-4145-1386240019.jpg" alt="4g-4145-1386240019.jpg" data-natural-width="500" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">Hiện 4G đang trong giai đoạn thử nghiệm v&agrave; đến 2015 mới c&oacute; thể cung cấp đến người ti&ecirc;u d&ugrave;ng. Ảnh: <em>Anh Qu&acirc;n</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal">Theo ph&acirc;n t&iacute;ch của Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng tại buổi giao ban ng&agrave;y 5/12, tr&ecirc;n thế giới đ&atilde; khoảng 30 nước c&oacute; doanh nghiệp viễn th&ocirc;ng cung cấp dịch vụ 4G, trong đ&oacute; c&oacute; một số quốc gia gần Việt Nam như Th&aacute;i Lan, Indonesia v&agrave; mới đ&acirc;y l&agrave; Trung Quốc. Mạng 4G trong điều kiện l&yacute; tưởng đạt tốc độ truyền tối đa 1Gbkps đối với người d&ugrave;ng tĩnh v&agrave; 100Mbkps với người di chuyển.</p>\r\n<p class="Normal">&Ocirc;ng Phạm Hồng Hải, Cục trưởng Cục Viễn th&ocirc;ng (Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng) s&aacute;ng 5/12 đ&atilde; đề xuất với l&atilde;nh đạo Bộ xem x&eacute;t việc họp với doanh nghiệp để đ&aacute;nh gi&aacute;, triển khai sớm c&ocirc;ng nghệ mạng 4G tại Việt Nam. Ph&iacute;a Cục cho rằng năng lực v&agrave; c&ocirc;ng nghệ, cũng như vấn đề t&agrave;i ch&iacute;nh hiện nay của c&aacute;c doanh nghiệp đ&atilde; tương đối sẵn s&agrave;ng, c&oacute; thể triển khai ngay m&agrave; kh&ocirc;ng cần đợi th&ecirc;m 2 năm nữa.</p>\r\n<p class="Normal">Tuy nhi&ecirc;n, đề xuất n&agrave;y kh&ocirc;ng được chấp thuận. Bộ trưởng Nguyễn Bắc Son khẳng định 4G Việt Nam cần tu&acirc;n theo đ&uacute;ng lộ tr&igrave;nh, sớm nhất l&agrave; năm 2015. Quy hoạch ph&aacute;t triển viễn th&ocirc;ng quốc gia cũng n&ecirc;u r&otilde; đến sau 2015 th&igrave; Ch&iacute;nh phủ mới xem x&eacute;t triển khai cấp ph&eacute;p 4G.</p>\r\n<p class="Normal">B&ecirc;n cạnh đ&oacute;, một phần l&yacute; do l&agrave; c&ocirc;ng suất mạng 3G vẫn chưa được khai th&aacute;c hết n&ecirc;n đẩy nhanh qu&aacute; tr&igrave;nh sẽ g&acirc;y l&atilde;ng ph&iacute;. "Nh&agrave; mạng đầu tư 2 tỷ USD cho hạ tầng 3G, người d&acirc;n cũng phải chi rất nhiều tiền để sắm thiết bị tương th&iacute;ch m&agrave; vẫn chưa d&ugrave;ng hết c&ocirc;ng suất", Bộ trưởng nhận định. Việc đầu tư 4G l&uacute;c n&agrave;y c&oacute; thể ti&ecirc;u tốn của nh&agrave; mạng th&ecirc;m tiền tỷ cho hạ tầng v&agrave; người ti&ecirc;u d&ugrave;ng cũng phải bỏ số tiền kh&ocirc;ng k&eacute;m để mua thiết bị đầu cuối c&oacute; hỗ trợ nền mạng n&agrave;y.</p>\r\n<p class="Normal">L&atilde;nh đạo Bộ cũng cho rằng c&ocirc;ng nghệ c&ograve;n chưa ho&agrave;n chỉnh v&igrave; qu&aacute; mới, gi&aacute; th&agrave;nh lại cao th&igrave; chưa n&ecirc;n &aacute;p dụng. Theo &ocirc;ng, chỉ khi thị trường đi v&agrave;o ổn định, gi&aacute; th&agrave;nh trở n&ecirc;n hợp l&yacute;, dễ tiếp cận với số đ&ocirc;ng người d&ugrave;ng th&igrave; mới n&ecirc;n triển khai. Hiện tại, Bộ cũng đ&atilde; cấp ph&eacute;p cho một số doanh nghiệp viễn th&ocirc;ng để thử nghiệm mạng 4G.</p>\r\n<p class="Normal">"Đến thời điểm th&iacute;ch hợp, Bộ sẽ cho đấu gi&aacute; băng tần như 3G trước đ&acirc;y, kh&ocirc;ng cấp ph&eacute;p trực tiếp cho doanh nghiệp n&agrave;o hết", Bộ trưởng khẳng định.&nbsp;<span>Năm 2009, Bộ đ&atilde; cấp 4 giấy ph&eacute;p cung cấp 3G cho Viettel, Mobifone, Vinaphone v&agrave; li&ecirc;n minh EVN Telecom-HT Mobile (nay EVT Telecom đ&atilde; s&aacute;p nhập với Viettel, HT Mobile đổi t&ecirc;n th&agrave;nh Vietnamobile). Đến nay trong số 5 doanh nghiệp viễn th&ocirc;ng đang hoạt động th&igrave; c&oacute; 4 đơn vị cung cấp 3G (ri&ecirc;ng Gmobile chỉ c&oacute; 2G).</span></p>\r\n<p class="Normal" style="text-align: right;"><strong><span>Anh Qu&acirc;n</span></strong></p>'),
(16, 1, 16, 'Không đẩy nhanh triển khai 4G tại Việt Nam', '<p>Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng nhận định chi ph&iacute; đầu tư cho c&ocirc;ng nghệ mới sẽ khiến gi&aacute; th&agrave;nh dịch vụ tăng cao, chưa ph&ugrave; hợp với chi ti&ecirc;u của người d&acirc;n l&uacute;c n&agrave;y.</p>', '<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/12/05/4g-4145-1386240019.jpg" alt="4g-4145-1386240019.jpg" data-natural-width="500" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">Hiện 4G đang trong giai đoạn thử nghiệm v&agrave; đến 2015 mới c&oacute; thể cung cấp đến người ti&ecirc;u d&ugrave;ng. Ảnh: <em>Anh Qu&acirc;n</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal">Theo ph&acirc;n t&iacute;ch của Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng tại buổi giao ban ng&agrave;y 5/12, tr&ecirc;n thế giới đ&atilde; khoảng 30 nước c&oacute; doanh nghiệp viễn th&ocirc;ng cung cấp dịch vụ 4G, trong đ&oacute; c&oacute; một số quốc gia gần Việt Nam như Th&aacute;i Lan, Indonesia v&agrave; mới đ&acirc;y l&agrave; Trung Quốc. Mạng 4G trong điều kiện l&yacute; tưởng đạt tốc độ truyền tối đa 1Gbkps đối với người d&ugrave;ng tĩnh v&agrave; 100Mbkps với người di chuyển.</p>\r\n<p class="Normal">&Ocirc;ng Phạm Hồng Hải, Cục trưởng Cục Viễn th&ocirc;ng (Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng) s&aacute;ng 5/12 đ&atilde; đề xuất với l&atilde;nh đạo Bộ xem x&eacute;t việc họp với doanh nghiệp để đ&aacute;nh gi&aacute;, triển khai sớm c&ocirc;ng nghệ mạng 4G tại Việt Nam. Ph&iacute;a Cục cho rằng năng lực v&agrave; c&ocirc;ng nghệ, cũng như vấn đề t&agrave;i ch&iacute;nh hiện nay của c&aacute;c doanh nghiệp đ&atilde; tương đối sẵn s&agrave;ng, c&oacute; thể triển khai ngay m&agrave; kh&ocirc;ng cần đợi th&ecirc;m 2 năm nữa.</p>\r\n<p class="Normal">Tuy nhi&ecirc;n, đề xuất n&agrave;y kh&ocirc;ng được chấp thuận. Bộ trưởng Nguyễn Bắc Son khẳng định 4G Việt Nam cần tu&acirc;n theo đ&uacute;ng lộ tr&igrave;nh, sớm nhất l&agrave; năm 2015. Quy hoạch ph&aacute;t triển viễn th&ocirc;ng quốc gia cũng n&ecirc;u r&otilde; đến sau 2015 th&igrave; Ch&iacute;nh phủ mới xem x&eacute;t triển khai cấp ph&eacute;p 4G.</p>\r\n<p class="Normal">B&ecirc;n cạnh đ&oacute;, một phần l&yacute; do l&agrave; c&ocirc;ng suất mạng 3G vẫn chưa được khai th&aacute;c hết n&ecirc;n đẩy nhanh qu&aacute; tr&igrave;nh sẽ g&acirc;y l&atilde;ng ph&iacute;. "Nh&agrave; mạng đầu tư 2 tỷ USD cho hạ tầng 3G, người d&acirc;n cũng phải chi rất nhiều tiền để sắm thiết bị tương th&iacute;ch m&agrave; vẫn chưa d&ugrave;ng hết c&ocirc;ng suất", Bộ trưởng nhận định. Việc đầu tư 4G l&uacute;c n&agrave;y c&oacute; thể ti&ecirc;u tốn của nh&agrave; mạng th&ecirc;m tiền tỷ cho hạ tầng v&agrave; người ti&ecirc;u d&ugrave;ng cũng phải bỏ số tiền kh&ocirc;ng k&eacute;m để mua thiết bị đầu cuối c&oacute; hỗ trợ nền mạng n&agrave;y.</p>\r\n<p class="Normal">L&atilde;nh đạo Bộ cũng cho rằng c&ocirc;ng nghệ c&ograve;n chưa ho&agrave;n chỉnh v&igrave; qu&aacute; mới, gi&aacute; th&agrave;nh lại cao th&igrave; chưa n&ecirc;n &aacute;p dụng. Theo &ocirc;ng, chỉ khi thị trường đi v&agrave;o ổn định, gi&aacute; th&agrave;nh trở n&ecirc;n hợp l&yacute;, dễ tiếp cận với số đ&ocirc;ng người d&ugrave;ng th&igrave; mới n&ecirc;n triển khai. Hiện tại, Bộ cũng đ&atilde; cấp ph&eacute;p cho một số doanh nghiệp viễn th&ocirc;ng để thử nghiệm mạng 4G.</p>\r\n<p class="Normal">"Đến thời điểm th&iacute;ch hợp, Bộ sẽ cho đấu gi&aacute; băng tần như 3G trước đ&acirc;y, kh&ocirc;ng cấp ph&eacute;p trực tiếp cho doanh nghiệp n&agrave;o hết", Bộ trưởng khẳng định.&nbsp;<span>Năm 2009, Bộ đ&atilde; cấp 4 giấy ph&eacute;p cung cấp 3G cho Viettel, Mobifone, Vinaphone v&agrave; li&ecirc;n minh EVN Telecom-HT Mobile (nay EVT Telecom đ&atilde; s&aacute;p nhập với Viettel, HT Mobile đổi t&ecirc;n th&agrave;nh Vietnamobile). Đến nay trong số 5 doanh nghiệp viễn th&ocirc;ng đang hoạt động th&igrave; c&oacute; 4 đơn vị cung cấp 3G (ri&ecirc;ng Gmobile chỉ c&oacute; 2G).</span></p>\r\n<p class="Normal" style="text-align: right;"><strong><span>Anh Qu&acirc;n</span></strong></p>'),
(17, 1, 17, '12 triệu khách qua sân bay Nội Bài từ đầu năm', '<p>L&atilde;nh đạo Cảng h&agrave;ng kh&ocirc;ng Quốc tế Nội B&agrave;i nhận định c&oacute; thể ho&agrave;n th&agrave;nh mục ti&ecirc;u 12,7 triệu lượt kh&aacute;ch năm nay, song cũng lo lắng bởi t&igrave;nh trạng qu&aacute; tải.</p>', '<p>Vị kh&aacute;ch lượt thứ 12 triệu trong năm 2013 của Cảng h&agrave;ng kh&ocirc;ng quốc tế Nội B&agrave;i đặt ch&acirc;n xuống s&acirc;n bay l&uacute;c 9h10 s&aacute;ng nay (5/12). Đ&acirc;y được xem l&agrave; kỷ lục về số kh&aacute;ch đ&oacute;n tiếp trong năm của s&acirc;n bay n&agrave;y.&nbsp;Theo th&ocirc;ng b&aacute;o, vị kh&aacute;ch may mắn n&ecirc;u tr&ecirc;n l&agrave; &ocirc;ng Phạm Ngọc Dũng, một doanh nh&acirc;n tr&ecirc;n đường đi c&ocirc;ng t&aacute;c v&agrave; đi chuyến VJ8660 của Vietjet Air.</p>\r\n<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/12/05/khach-thu-12-2713-1386235389.jpg" alt="khach-thu-12-2713-1386235389.jpg" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">Một buổi lễ đ&atilde; được tổ chức để đ&oacute;n vị kh&aacute;ch thứ 12 triệu trong năm nay tại Cảng h&agrave;ng kh&ocirc;ng Quốc tế Nội B&agrave;i. Ảnh: <em>Thanh B&igrave;nh</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>"Kế hoạch đặt ra từ đầu năm của Nội B&agrave;i l&agrave; 12,7 triệu lượt kh&aacute;ch trong năm nay. Từ nay đến cuối năm c&ograve;n gần một th&aacute;ng nữa, nhiều khả năng ch&uacute;ng t&ocirc;i sẽ ho&agrave;n th&agrave;nh kế hoạch v&igrave; cuối năm lượng kh&aacute;ch đi lại nhiều", &ocirc;ng Vũ Thế Phiệt, Gi&aacute;m đốc Cảng cho hay.</p>\r\n<p>Cũng theo l&atilde;nh đạo s&acirc;n bay, việc đ&oacute;n tiếp khoảng 13 triệu lượt h&agrave;nh kh&aacute;ch trong một năm đ&atilde; vượt xa c&ocirc;ng suất thiết kế chỉ 6 triệu của Nội B&agrave;i. Để giảm t&igrave;nh trạng qu&aacute; tải, dự kiến cuối năm nay c&ocirc;ng ty quản l&yacute; cảng sẽ đưa th&ecirc;m phần T1 mở rộng (được đặt t&ecirc;n l&agrave; sảnh E) v&agrave;o sử dụng. Sảnh E n&agrave;y c&oacute; c&ocirc;ng suất 3 triệu h&agrave;nh kh&aacute;ch mỗi năm. Dự kiến v&agrave;o cuối năm 2014, nh&agrave; ga T2 với tổng mức đầu tư 18.000 tỷ đồng sẽ ho&agrave;n th&agrave;nh, với c&ocirc;ng suất 15 triệu h&agrave;nh kh&aacute;ch mỗi năm.&nbsp;</p>\r\n<p style="text-align: right;"><strong>Thanh B&igrave;nh</strong></p>'),
(18, 1, 18, '12 triệu khách qua sân bay Nội Bài từ đầu năm', '<p>L&atilde;nh đạo Cảng h&agrave;ng kh&ocirc;ng Quốc tế Nội B&agrave;i nhận định c&oacute; thể ho&agrave;n th&agrave;nh mục ti&ecirc;u 12,7 triệu lượt kh&aacute;ch năm nay, song cũng lo lắng bởi t&igrave;nh trạng qu&aacute; tải.</p>', '<p>Vị kh&aacute;ch lượt thứ 12 triệu trong năm 2013 của Cảng h&agrave;ng kh&ocirc;ng quốc tế Nội B&agrave;i đặt ch&acirc;n xuống s&acirc;n bay l&uacute;c 9h10 s&aacute;ng nay (5/12). Đ&acirc;y được xem l&agrave; kỷ lục về số kh&aacute;ch đ&oacute;n tiếp trong năm của s&acirc;n bay n&agrave;y.&nbsp;Theo th&ocirc;ng b&aacute;o, vị kh&aacute;ch may mắn n&ecirc;u tr&ecirc;n l&agrave; &ocirc;ng Phạm Ngọc Dũng, một doanh nh&acirc;n tr&ecirc;n đường đi c&ocirc;ng t&aacute;c v&agrave; đi chuyến VJ8660 của Vietjet Air.</p>\r\n<table class="tplCaption" style="width: 1px;" border="0" cellspacing="0" cellpadding="3" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://m.f25.img.vnecdn.net/2013/12/05/khach-thu-12-2713-1386235389.jpg" alt="khach-thu-12-2713-1386235389.jpg" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class="Image">Một buổi lễ đ&atilde; được tổ chức để đ&oacute;n vị kh&aacute;ch thứ 12 triệu trong năm nay tại Cảng h&agrave;ng kh&ocirc;ng Quốc tế Nội B&agrave;i. Ảnh: <em>Thanh B&igrave;nh</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>"Kế hoạch đặt ra từ đầu năm của Nội B&agrave;i l&agrave; 12,7 triệu lượt kh&aacute;ch trong năm nay. Từ nay đến cuối năm c&ograve;n gần một th&aacute;ng nữa, nhiều khả năng ch&uacute;ng t&ocirc;i sẽ ho&agrave;n th&agrave;nh kế hoạch v&igrave; cuối năm lượng kh&aacute;ch đi lại nhiều", &ocirc;ng Vũ Thế Phiệt, Gi&aacute;m đốc Cảng cho hay.</p>\r\n<p>Cũng theo l&atilde;nh đạo s&acirc;n bay, việc đ&oacute;n tiếp khoảng 13 triệu lượt h&agrave;nh kh&aacute;ch trong một năm đ&atilde; vượt xa c&ocirc;ng suất thiết kế chỉ 6 triệu của Nội B&agrave;i. Để giảm t&igrave;nh trạng qu&aacute; tải, dự kiến cuối năm nay c&ocirc;ng ty quản l&yacute; cảng sẽ đưa th&ecirc;m phần T1 mở rộng (được đặt t&ecirc;n l&agrave; sảnh E) v&agrave;o sử dụng. Sảnh E n&agrave;y c&oacute; c&ocirc;ng suất 3 triệu h&agrave;nh kh&aacute;ch mỗi năm. Dự kiến v&agrave;o cuối năm 2014, nh&agrave; ga T2 với tổng mức đầu tư 18.000 tỷ đồng sẽ ho&agrave;n th&agrave;nh, với c&ocirc;ng suất 15 triệu h&agrave;nh kh&aacute;ch mỗi năm.&nbsp;</p>\r\n<p style="text-align: right;"><strong>Thanh B&igrave;nh</strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_news_media`
--

CREATE TABLE IF NOT EXISTS `mtx_news_media` (
  `news_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`news_id`,`media_id`),
  KEY `IDX_AAC8006BB5A459A0` (`news_id`),
  KEY `IDX_AAC8006BEA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mtx_page`
--

CREATE TABLE IF NOT EXISTS `mtx_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5E9720B15EE01E44` (`created_id`),
  KEY `IDX_5E9720B1960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mtx_page`
--

INSERT INTO `mtx_page` (`id`, `created_id`, `updated_id`, `status`, `created_at`, `updated_at`, `image`) VALUES
(1, 1, 1, 1, '2014-03-09 05:55:54', '2014-03-09 05:55:54', NULL),
(2, 1, 1, 1, '2014-03-09 05:56:37', '2014-03-09 05:56:37', NULL),
(3, 1, 1, 1, '2014-03-09 05:57:34', '2014-03-09 05:57:34', NULL),
(4, 1, 1, 1, '2014-03-09 05:58:16', '2014-03-09 05:58:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_page_language`
--

CREATE TABLE IF NOT EXISTS `mtx_page_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_4099A36882F1BAF4` (`language_id`),
  KEY `IDX_4099A368C4663E4` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mtx_page_language`
--

INSERT INTO `mtx_page_language` (`id`, `language_id`, `page_id`, `name`, `intro`, `description`) VALUES
(1, 1, 1, 'Giới Thiệu', '<p>Giới thiệu cty</p>', '<p>Giới thiệu cty</p>'),
(2, 1, 2, 'Tầm Nhìn Sứ Mệnh', '<p>Tầm Nh&igrave;n Sứ Mệnh</p>', '<p>Tầm Nh&igrave;n Sứ Mệnh</p>'),
(3, 1, 3, 'Câu Hỏi Thường Gặp', '<p>C&acirc;u Hỏi Thường Gặp</p>', '<p>C&acirc;u Hỏi Thường Gặp</p>'),
(4, 1, 4, 'Liên Hệ', '<p>Li&ecirc;n Hệ</p>', '<p>Li&ecirc;n Hệ</p>');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_page_media`
--

CREATE TABLE IF NOT EXISTS `mtx_page_media` (
  `page_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`page_id`,`media_id`),
  KEY `IDX_B6F678E3C4663E4` (`page_id`),
  KEY `IDX_B6F678E3EA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mtx_product`
--

CREATE TABLE IF NOT EXISTS `mtx_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `hot` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `promotion` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_863E14455EE01E44` (`created_id`),
  KEY `IDX_863E1445960CC7F3` (`updated_id`),
  KEY `IDX_863E1445DCD6CC49` (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `mtx_product`
--

INSERT INTO `mtx_product` (`id`, `created_id`, `updated_id`, `branch_id`, `price`, `unit`, `discount`, `thumb`, `amount`, `status`, `hot`, `created_at`, `updated_at`, `promotion`) VALUES
(1, 1, 1, 11, NULL, NULL, NULL, '5297537c16291.jpg', NULL, 1, 0, '2013-11-28 14:30:20', '2013-11-28 14:30:20', 1),
(2, 1, 1, 11, NULL, NULL, NULL, '5297540ed3247.jpg', NULL, 1, 1, '2013-11-28 14:32:46', '2013-11-28 14:32:46', NULL),
(3, 1, 1, 11, NULL, NULL, NULL, '5297546b24dba.jpg', NULL, 1, 1, '2013-11-28 14:34:19', '2013-11-28 14:34:19', NULL),
(4, 1, 1, 11, NULL, NULL, NULL, '5297549b62f00.jpg', NULL, 1, 1, '2013-11-28 14:35:07', '2013-11-28 14:35:07', NULL),
(5, 1, 1, 11, NULL, NULL, NULL, '529754d6a8547.jpg', NULL, 1, 1, '2013-11-28 14:36:06', '2013-11-28 14:36:06', NULL),
(6, 1, 1, 11, NULL, NULL, NULL, '5297550290f04.jpg', NULL, 1, 1, '2013-11-28 14:36:50', '2013-11-28 14:36:50', NULL),
(7, 1, 1, 11, NULL, NULL, NULL, '5297558b5d3d5.jpg', NULL, 1, 1, '2013-11-28 14:39:07', '2013-11-28 14:39:07', NULL),
(8, 1, 1, 11, NULL, NULL, NULL, '529a8586491b2.jpg', NULL, 1, 1, '2013-12-01 00:40:38', '2013-12-01 00:40:38', NULL),
(9, 1, 1, 11, NULL, NULL, NULL, '529a85e6cd0c3.jpg', NULL, 1, 1, '2013-12-01 00:42:14', '2013-12-01 00:42:14', NULL),
(10, 1, 1, 11, NULL, NULL, NULL, '529a86179df98.jpg', NULL, 1, 1, '2013-12-01 00:43:03', '2013-12-01 00:43:03', NULL),
(11, 1, 1, 11, NULL, NULL, NULL, '529a8642271cf.jpg', NULL, 1, 0, '2013-12-01 00:43:46', '2013-12-01 00:43:46', 1),
(12, 1, 1, 11, NULL, NULL, NULL, '529a867509012.jpg', NULL, 1, 1, '2013-12-01 00:44:37', '2013-12-01 00:44:37', NULL),
(13, 1, 1, 11, NULL, NULL, NULL, '529a87d501ca3.jpg', NULL, 1, 1, '2013-12-01 00:50:29', '2013-12-01 00:50:29', NULL),
(14, 1, 1, 11, NULL, NULL, NULL, '529a88018fcf0.jpg', NULL, 1, 1, '2013-12-01 00:51:13', '2013-12-01 00:51:13', NULL),
(15, 1, 1, 12, NULL, NULL, NULL, '529a883bde609.jpg', NULL, 1, 1, '2013-12-01 00:52:11', '2013-12-01 00:52:11', NULL),
(16, 1, 1, 12, NULL, NULL, NULL, '529a887a3d5e0.jpg', NULL, 1, 1, '2013-12-01 00:53:14', '2013-12-01 00:53:14', NULL),
(17, 1, 1, 12, NULL, NULL, NULL, '529a88ad616f5.jpg', NULL, 1, 1, '2013-12-01 00:54:05', '2013-12-01 00:54:05', NULL),
(18, 1, 1, 13, NULL, NULL, NULL, '529a891146803.jpg', NULL, 1, 1, '2013-12-01 00:55:45', '2013-12-01 00:55:45', NULL),
(19, 1, 1, 12, NULL, NULL, NULL, '529a8a340f23a.jpg', NULL, 1, 0, '2013-12-01 01:00:36', '2013-12-01 01:00:36', 1),
(20, 1, 1, 12, NULL, NULL, NULL, NULL, NULL, 1, 1, '2013-12-01 01:37:35', '2013-12-01 01:37:35', NULL),
(21, 1, 1, 12, NULL, NULL, NULL, NULL, NULL, 1, 1, '2013-12-01 01:41:18', '2013-12-01 01:41:18', NULL),
(22, 1, 1, 12, NULL, NULL, NULL, '529a9688f0087.jpg', NULL, 1, 1, '2013-12-01 01:53:12', '2013-12-01 01:53:12', NULL),
(23, 1, 1, 12, NULL, NULL, NULL, '529a96d255324.jpg', NULL, 1, 1, '2013-12-01 01:54:26', '2013-12-01 01:54:26', 1),
(24, 1, 1, 6, 3250000, NULL, NULL, '52a9cc07ebc99.jpg', NULL, 1, 1, '2013-12-12 14:45:27', '2013-12-12 14:45:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_product_language`
--

CREATE TABLE IF NOT EXISTS `mtx_product_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `intro` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_A65A64864584665A` (`product_id`),
  KEY `IDX_A65A648682F1BAF4` (`language_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `mtx_product_language`
--

INSERT INTO `mtx_product_language` (`id`, `product_id`, `language_id`, `name`, `description`, `intro`) VALUES
(1, 1, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', '<p><span class="price-old">$979k</span> <span class="price-new">$170k</span> - Save: <span class="price-save">83% off</span></p>'),
(2, 2, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(3, 3, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(4, 4, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(5, 5, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(6, 6, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(7, 7, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(8, 8, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(9, 9, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(10, 10, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(11, 11, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', '<p><span class="price-old">$979k</span> <span class="price-new">$170k</span> - Save: <span class="price-save">83% off</span></p>'),
(12, 12, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(13, 13, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(14, 14, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(15, 15, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(16, 16, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(17, 17, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(18, 18, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(19, 19, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', '<p><span class="price-old">$979k</span> <span class="price-new">$170k</span> - Save: <span class="price-save">83% off</span></p>'),
(20, 20, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(21, 21, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(22, 22, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n</div>', NULL),
(23, 23, 1, 'Món Cá tiến vua đặc sản cung đình miền bắc', '<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn nhất.</p>\r\n<div class="desc">\r\n<p>Trước đ&acirc;y để được thưởng thức m&oacute;n ăn trong cung đ&igrave;nh,, kh&ocirc;ng &iacute;t người ngược ra tận v&ugrave;ng Việt Tr&igrave;, Ph&uacute; Thọ, sẵn s&agrave;ng bỏ cả triệu đồng cho một đĩa c&aacute; anh vũ m&agrave; đ&acirc;u c&oacute; cơ may thưởng thức. Theo đặc điểm c&aacute; anh vũ c&oacute; d&aacute;ng dấp kh&aacute; giống c&aacute; tr&ocirc;i, nhưng vảy c&oacute; sắc &oacute;ng &aacute;nh, phần đầu thu&ocirc;n v&agrave; đặc biệt l&agrave; cặp m&ocirc;i h&igrave;nh tam gi&aacute;c.</p>\r\n<p>Những ngư d&acirc;n dọc s&ocirc;ng S&ecirc; San thường chặn bắt c&aacute; anh vũ ở v&ugrave;ng nước trong, nhiều hang hốc, chủ yếu ở khu vực thủy điện &yacute;.D&ugrave;ng c&aacute; tiến Vua n&agrave;y, ban đầu cứ ngỡ l&agrave; thịt g&agrave; nhưng cắn v&agrave;o th&igrave; thơm ngon hơn nhiều. Ngon kh&ocirc;ng chỉ v&igrave; thịt c&aacute;, m&agrave; c&ograve;n bởi được tận hưởng cảm gi&aacute;c &ldquo;l&agrave;m vua&rdquo; tr&ecirc;n b&agrave;n tiệc đại ng&agrave;n. Đ&acirc;y l&agrave; 1 trong những m&oacute;n ăn đặc sản việt nam hấp dẫn.</p>\r\n</div>\r\n</div>\r\n</div>', '<p><span class="price-old">$979k</span> <span class="price-new">$170k</span> - Save: <span class="price-save">83% off</span></p>'),
(24, 24, 1, 'Điện thoại HTC Windows Phone 8S', '<p><a href="http://www.mainguyen.vn/nokia-lumia-1520.html" target="_blank"><strong>Lumia 1520</strong></a>, <a href="http://www.mainguyen.vn/oppo-n1-32gb.html" target="_blank"><strong>N1</strong></a> v&agrave;<a href="http://www.mainguyen.vn/htc-one-max.html" target="_blank"><strong> One Max</strong></a> l&agrave; bộ ba phablet c&oacute; nhiều điểm tương đồng về thiết kế, m&agrave;n h&igrave;nh cũng như cấu h&igrave;nh b&ecirc;n trong. Tuy nhi&ecirc;n, Lumia 1520 của Nokia l&agrave; sản phẩm duy nhất sử dụng nền tảng Windows Phone, trong khi hai thiết bị c&ograve;n lại chạy tr&ecirc;n nền hệ điều h&agrave;nh Android Jelly Bean.</p>\r\n<p>Về thiết kế, phablet tới từ Nokia tạo được ấn tượng hơn hai đối thủ nhờ kiểu d&aacute;ng mỏng, bộ vỏ nguy&ecirc;n khối l&agrave;m từ Polycarbonate cho cảm gi&aacute;c cứng c&aacute;p ngoại h&igrave;nh thời trang nhiều m&agrave;u sắc. Trong khi đ&oacute;, One Max lại c&oacute; phần hơi th&ocirc; khi ngoại h&igrave;nh ph&oacute;ng lớn từ HTC One với một số thay đổi nhỏ, d&ugrave; vẫn giữ bộ vỏ nh&ocirc;m nguy&ecirc;n khối với c&aacute;c chi tiết sắc sảo. Oppo N1 lại sở hữu thiết kế lạ lẫm nhất với camera c&oacute; thể xoay, mặt lưng thiết kế đơn giản nhưng c&oacute; th&ecirc;m b&agrave;n r&ecirc; cảm ứng v&agrave; cho cảm gi&aacute;c cầm thoải m&aacute;i.</p>', '<h4 class="news_art_item_intro">Nokia Lumia 1520, HTC One Max v&agrave; Oppo N1 l&agrave; bộ ba smartphone cao cấp với m&agrave;n h&igrave;nh Full HD cực lớn, 5,9 - 6 inch, vừa mới được ph&aacute;t h&agrave;nh ở Việt Nam. Bộ ba n&agrave;y cạnh tranh với những đối thủ ra trước như Note 3 v&agrave; Xperia Z Ultra</h4>');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_product_media`
--

CREATE TABLE IF NOT EXISTS `mtx_product_media` (
  `products_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`products_id`,`media_id`),
  KEY `IDX_DFAD0FAD6C8A81A9` (`products_id`),
  KEY `IDX_DFAD0FADEA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mtx_product_media`
--

INSERT INTO `mtx_product_media` (`products_id`, `media_id`) VALUES
(1, 6),
(1, 7),
(2, 8),
(2, 9),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(8, 1),
(8, 2),
(23, 6),
(23, 7),
(23, 8),
(23, 9),
(23, 10);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_role`
--

CREATE TABLE IF NOT EXISTS `mtx_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mtx_role`
--

INSERT INTO `mtx_role` (`id`, `role`) VALUES
(1, 'ROLE_SUPER_ADMIN'),
(2, 'ROLE_ADMIN'),
(3, 'ROLE_USER');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_user`
--

CREATE TABLE IF NOT EXISTS `mtx_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `active` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mtx_user`
--

INSERT INTO `mtx_user` (`id`, `username`, `fullname`, `salt`, `password`, `email`, `created_at`, `updated_at`, `active`) VALUES
(1, 'admin', 'Administrator', '29d5d2283c31e6f7b396a04bd70bba0a', 'bbade4efa111e76cd4128d8e894562f9210e8ed7', 'admin@sm.com', '2013-11-10 12:41:59', '2013-11-10 12:45:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_user_group`
--

CREATE TABLE IF NOT EXISTS `mtx_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_355999A4A76ED395` (`user_id`),
  KEY `IDX_355999A4FE54D947` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mtx_user_group`
--

INSERT INTO `mtx_user_group` (`user_id`, `group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_user_role`
--

CREATE TABLE IF NOT EXISTS `mtx_user_role` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `IDX_A6F8FA57A76ED395` (`user_id`),
  KEY `IDX_A6F8FA57D60322AC` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mtx_user_role`
--

INSERT INTO `mtx_user_role` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_video`
--

CREATE TABLE IF NOT EXISTS `mtx_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `url` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_FB85E4685EE01E44` (`created_id`),
  KEY `IDX_FB85E468960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mtx_video`
--

INSERT INTO `mtx_video` (`id`, `created_id`, `updated_id`, `status`, `created_at`, `updated_at`, `url`) VALUES
(4, 1, 1, 1, '2014-03-08 16:50:04', '2014-03-08 16:50:04', 'http://youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_video_language`
--

CREATE TABLE IF NOT EXISTS `mtx_video_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BF41107D82F1BAF4` (`language_id`),
  KEY `IDX_BF41107D29C1004E` (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mtx_video_language`
--

INSERT INTO `mtx_video_language` (`id`, `language_id`, `video_id`, `name`) VALUES
(4, 1, 4, 'Video 4');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`);

--
-- Constraints for table `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mtx_branch`
--
ALTER TABLE `mtx_branch`
  ADD CONSTRAINT `FK_CAB0DCA85EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_CAB0DCA8727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mtx_branch` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_CAB0DCA8960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_branch_language`
--
ALTER TABLE `mtx_branch_language`
  ADD CONSTRAINT `FK_64D3050082F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_64D30500DCD6CC49` FOREIGN KEY (`branch_id`) REFERENCES `mtx_branch` (`id`);

--
-- Constraints for table `mtx_category`
--
ALTER TABLE `mtx_category`
  ADD CONSTRAINT `FK_A8C8079B5EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_A8C8079B727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mtx_category` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_A8C8079B960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_category_language`
--
ALTER TABLE `mtx_category_language`
  ADD CONSTRAINT `FK_B2A3A34012469DE2` FOREIGN KEY (`category_id`) REFERENCES `mtx_category` (`id`),
  ADD CONSTRAINT `FK_B2A3A34082F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`);

--
-- Constraints for table `mtx_comment`
--
ALTER TABLE `mtx_comment`
  ADD CONSTRAINT `FK_C10042845EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_C10042846C8A81A9` FOREIGN KEY (`products_id`) REFERENCES `mtx_product` (`id`),
  ADD CONSTRAINT `FK_C1004284960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_comment_language`
--
ALTER TABLE `mtx_comment_language`
  ADD CONSTRAINT `FK_70AE6D1782F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_70AE6D17F8697D13` FOREIGN KEY (`comment_id`) REFERENCES `mtx_comment` (`id`);

--
-- Constraints for table `mtx_company`
--
ALTER TABLE `mtx_company`
  ADD CONSTRAINT `FK_1ACB19A75EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_1ACB19A7960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_1ACB19A7C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `mtx_companytype` (`id`);

--
-- Constraints for table `mtx_companytype`
--
ALTER TABLE `mtx_companytype`
  ADD CONSTRAINT `FK_9AF919955EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_9AF91995960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_companytype_language`
--
ALTER TABLE `mtx_companytype_language`
  ADD CONSTRAINT `FK_54F6538B1E00F65` FOREIGN KEY (`companytype_id`) REFERENCES `mtx_companytype` (`id`),
  ADD CONSTRAINT `FK_54F6538B82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`);

--
-- Constraints for table `mtx_company_language`
--
ALTER TABLE `mtx_company_language`
  ADD CONSTRAINT `FK_757D1B7C82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_757D1B7C979B1AD6` FOREIGN KEY (`company_id`) REFERENCES `mtx_company` (`id`);

--
-- Constraints for table `mtx_file`
--
ALTER TABLE `mtx_file`
  ADD CONSTRAINT `FK_C602A0815EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_C602A081960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_file_language`
--
ALTER TABLE `mtx_file_language`
  ADD CONSTRAINT `FK_71562BD582F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_71562BD593CB796C` FOREIGN KEY (`file_id`) REFERENCES `mtx_file` (`id`);

--
-- Constraints for table `mtx_group_role`
--
ALTER TABLE `mtx_group_role`
  ADD CONSTRAINT `FK_C468F723D60322AC` FOREIGN KEY (`role_id`) REFERENCES `mtx_role` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C468F723FE54D947` FOREIGN KEY (`group_id`) REFERENCES `mtx_group` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mtx_item`
--
ALTER TABLE `mtx_item`
  ADD CONSTRAINT `FK_5586B38F5EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_5586B38F960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_5586B38FBA861EDF` FOREIGN KEY (`itemtype_id`) REFERENCES `mtx_item_type` (`id`);

--
-- Constraints for table `mtx_item_language`
--
ALTER TABLE `mtx_item_language`
  ADD CONSTRAINT `FK_AC0B6C83126F525E` FOREIGN KEY (`item_id`) REFERENCES `mtx_item` (`id`),
  ADD CONSTRAINT `FK_AC0B6C8382F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`);

--
-- Constraints for table `mtx_item_type`
--
ALTER TABLE `mtx_item_type`
  ADD CONSTRAINT `FK_CFFE2F265EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_CFFE2F26727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mtx_item_type` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_CFFE2F26960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_item_type_language`
--
ALTER TABLE `mtx_item_type_language`
  ADD CONSTRAINT `FK_FF5952E382F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_FF5952E3BA861EDF` FOREIGN KEY (`itemtype_id`) REFERENCES `mtx_item_type` (`id`);

--
-- Constraints for table `mtx_media`
--
ALTER TABLE `mtx_media`
  ADD CONSTRAINT `FK_ED6E9F4812469DE2` FOREIGN KEY (`category_id`) REFERENCES `mtx_mediacategory` (`id`),
  ADD CONSTRAINT `FK_ED6E9F485EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_ED6E9F48960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_mediacategory`
--
ALTER TABLE `mtx_mediacategory`
  ADD CONSTRAINT `FK_70EAB085EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_70EAB08727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mtx_mediacategory` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_70EAB08960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_mediacategory_language`
--
ALTER TABLE `mtx_mediacategory_language`
  ADD CONSTRAINT `FK_FBDE26F27B28A30E` FOREIGN KEY (`mediacategory_id`) REFERENCES `mtx_mediacategory` (`id`),
  ADD CONSTRAINT `FK_FBDE26F282F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`);

--
-- Constraints for table `mtx_menu`
--
ALTER TABLE `mtx_menu`
  ADD CONSTRAINT `FK_3798AC025EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_3798AC02727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mtx_menu` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_3798AC02960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_menu_language`
--
ALTER TABLE `mtx_menu_language`
  ADD CONSTRAINT `FK_EC57E1DE82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_EC57E1DECCD7E912` FOREIGN KEY (`menu_id`) REFERENCES `mtx_menu` (`id`);

--
-- Constraints for table `mtx_news`
--
ALTER TABLE `mtx_news`
  ADD CONSTRAINT `FK_574E0FC112469DE2` FOREIGN KEY (`category_id`) REFERENCES `mtx_category` (`id`),
  ADD CONSTRAINT `FK_574E0FC15EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_574E0FC1960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_news_language`
--
ALTER TABLE `mtx_news_language`
  ADD CONSTRAINT `FK_8938071982F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_89380719B5A459A0` FOREIGN KEY (`news_id`) REFERENCES `mtx_news` (`id`);

--
-- Constraints for table `mtx_news_media`
--
ALTER TABLE `mtx_news_media`
  ADD CONSTRAINT `FK_AAC8006BB5A459A0` FOREIGN KEY (`news_id`) REFERENCES `mtx_news` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_AAC8006BEA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `mtx_media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mtx_page`
--
ALTER TABLE `mtx_page`
  ADD CONSTRAINT `FK_5E9720B15EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_5E9720B1960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_page_language`
--
ALTER TABLE `mtx_page_language`
  ADD CONSTRAINT `FK_4099A36882F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_4099A368C4663E4` FOREIGN KEY (`page_id`) REFERENCES `mtx_page` (`id`);

--
-- Constraints for table `mtx_page_media`
--
ALTER TABLE `mtx_page_media`
  ADD CONSTRAINT `FK_B6F678E3C4663E4` FOREIGN KEY (`page_id`) REFERENCES `mtx_page` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B6F678E3EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `mtx_media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mtx_product`
--
ALTER TABLE `mtx_product`
  ADD CONSTRAINT `FK_863E14455EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_863E1445960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_863E1445DCD6CC49` FOREIGN KEY (`branch_id`) REFERENCES `mtx_branch` (`id`);

--
-- Constraints for table `mtx_product_language`
--
ALTER TABLE `mtx_product_language`
  ADD CONSTRAINT `FK_A65A64864584665A` FOREIGN KEY (`product_id`) REFERENCES `mtx_product` (`id`),
  ADD CONSTRAINT `FK_A65A648682F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`);

--
-- Constraints for table `mtx_product_media`
--
ALTER TABLE `mtx_product_media`
  ADD CONSTRAINT `FK_DFAD0FAD6C8A81A9` FOREIGN KEY (`products_id`) REFERENCES `mtx_product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_DFAD0FADEA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `mtx_media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mtx_user_group`
--
ALTER TABLE `mtx_user_group`
  ADD CONSTRAINT `FK_355999A4A76ED395` FOREIGN KEY (`user_id`) REFERENCES `mtx_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_355999A4FE54D947` FOREIGN KEY (`group_id`) REFERENCES `mtx_group` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mtx_user_role`
--
ALTER TABLE `mtx_user_role`
  ADD CONSTRAINT `FK_A6F8FA57A76ED395` FOREIGN KEY (`user_id`) REFERENCES `mtx_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A6F8FA57D60322AC` FOREIGN KEY (`role_id`) REFERENCES `mtx_role` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mtx_video`
--
ALTER TABLE `mtx_video`
  ADD CONSTRAINT `FK_FB85E4685EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_FB85E468960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_video_language`
--
ALTER TABLE `mtx_video_language`
  ADD CONSTRAINT `FK_BF41107D29C1004E` FOREIGN KEY (`video_id`) REFERENCES `mtx_video` (`id`),
  ADD CONSTRAINT `FK_BF41107D82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
