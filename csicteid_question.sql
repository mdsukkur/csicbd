-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2020 at 05:55 AM
-- Server version: 10.3.24-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csicteid_question`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `title`, `short_desc`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Who we are', 'Demo :- Publishing packages and web page editors now use Lorem Ipsum as their default model text', 'আসসালামু আলাইকুম,\r\n\r\nসবাই কে আমাদের ওয়েব সাইড [CTG Share Investors Club Bangladesh (CSICBD)] এ স্বাগতম।\r\n\r\n Torem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit\r\n\r\n\r\nsollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere.', '1571897446video-bg.jpg', '2019-10-24 06:04:36', '2019-11-25 23:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Md Sukkur Ali', '01624899516', 'ctgsukkur112@gmail.com', '$2y$10$HoZElrAiAmbdrpoYpRp2XOloJp297hxmVmIek1BMoaiu8PGYxuGxO', 1, 'utfqDYt4uBmTxNqPUgEQObvKoCQrIn4AlqluRDIjO5MNgHYtQGu9IG2Ci7BB', NULL, '2019-10-26 11:58:37'),
(3, 'Csicbd', '01817076206', 'csicbd11@gmail.com', '$2y$10$dFoe8p69NUlBZDqXRrYwDOMD5dwif2xtwofpomwiK.ICX1vUOFoma', 1, 'foeByVDZpBffeUsKLHMP7TFOenoyYy3uu5YLsdMGltLEB8yzfzzg9KUk3THT', '2019-10-30 07:59:04', '2019-10-30 07:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Ceramics Sector', 1, '2019-11-02 16:34:57', '2019-11-04 03:38:15'),
(5, 'IT', 1, '2019-11-03 22:00:51', '2019-11-03 22:00:51'),
(6, 'Bank', 1, '2019-11-04 03:34:32', '2019-11-04 03:34:32'),
(7, 'Cement', 1, '2019-11-04 03:40:53', '2019-11-04 03:40:53'),
(8, 'Engineering', 1, '2019-11-04 03:42:15', '2019-11-04 03:42:15'),
(9, 'Financial Institutions', 1, '2019-11-04 03:43:26', '2019-11-04 03:43:26'),
(10, 'Food & Allied', 1, '2019-11-04 03:44:58', '2019-11-04 03:44:58'),
(11, 'Fuel & Power', 1, '2019-11-04 03:46:36', '2019-11-04 03:46:36'),
(12, 'Insurance', 1, '2019-11-04 03:48:20', '2019-11-04 03:48:20'),
(13, 'Jute', 1, '2019-11-04 03:49:48', '2019-11-04 03:49:48'),
(14, 'Miscellaneous', 1, '2019-11-04 03:51:20', '2019-11-04 03:51:20'),
(15, 'Mutual Funds', 1, '2019-11-04 03:53:02', '2019-11-04 03:53:02'),
(16, 'Paper & Printing', 1, '2019-11-04 03:54:49', '2019-11-04 03:54:49'),
(17, 'Pharmaceuticals & Chemicals', 1, '2019-11-04 03:57:07', '2019-11-04 03:57:07'),
(18, 'Services & Real Estate', 1, '2019-11-04 03:58:36', '2019-11-04 03:58:36'),
(19, 'Tannery Industries', 1, '2019-11-04 03:59:41', '2019-11-04 03:59:41'),
(20, 'Telecommunication', 1, '2019-11-04 04:01:05', '2019-11-04 04:01:05'),
(21, 'Textile', 1, '2019-11-04 04:07:51', '2019-11-04 04:07:51'),
(22, 'Travel & Leisure', 1, '2019-11-04 04:09:31', '2019-11-04 04:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ARAMITCEM( Aramit Cement Limited )', 7, 1, '2019-11-02 16:35:50', '2019-11-04 22:33:21'),
(2, 'CONFIDCEM( Confidence Cement Ltd. )', 7, 1, '2019-11-02 16:36:28', '2019-11-04 22:34:06'),
(3, 'FUWANGCER( Fu-Wang Ceramic Industries Ltd. )', 2, 1, '2019-11-02 16:37:35', '2019-11-04 22:49:48'),
(4, 'MONNOCERA( Monno Ceramic Industries Ltd. )', 2, 1, '2019-11-02 16:38:25', '2019-11-04 22:52:31'),
(7, 'BDCOM( BDCOM Online Ltd. )', 5, 1, '2019-11-03 22:02:34', '2019-11-06 22:19:39'),
(8, 'ABBANK( AB Bank Limited )', 6, 1, '2019-11-04 04:18:04', '2019-11-04 04:18:04'),
(9, 'ALARABANK( Al-Arafah Islami Bank Ltd )', 6, 1, '2019-11-04 04:19:46', '2019-11-04 04:19:46'),
(10, 'BANKASIA( Bank Asia Ltd. )', 6, 1, '2019-11-04 04:21:07', '2019-11-04 04:21:07'),
(11, 'BRACBANK( BRAC Bank Ltd. )', 6, 1, '2019-11-04 04:23:50', '2019-11-04 04:23:50'),
(12, 'CITYBANK( The City Bank Ltd. )', 6, 1, '2019-11-04 04:25:12', '2019-11-04 04:25:12'),
(13, 'DHAKABANK( Dhaka Bank Ltd. )', 6, 1, '2019-11-04 04:26:30', '2019-11-04 04:26:30'),
(14, 'DUTCHBANGL( Dutch-Bangla Bank Ltd. )', 6, 1, '2019-11-04 04:28:13', '2019-11-04 04:28:13'),
(15, 'EBL( Eastern Bank Ltd. )', 6, 1, '2019-11-04 04:30:01', '2019-11-04 04:30:01'),
(16, 'EXIMBANK( Export Import (Exim) Bank of Bangladesh Limited )', 6, 1, '2019-11-04 04:31:25', '2019-11-04 04:31:25'),
(17, 'FIRSTSBANK( First Security Islami Bank Limited )', 6, 1, '2019-11-04 04:32:38', '2019-11-04 04:32:38'),
(18, 'ICBIBANK( ICB Islamic Bank Limited )', 6, 1, '2019-11-04 04:33:42', '2019-11-04 04:33:42'),
(19, 'IFIC( IFIC Bank Ltd. )', 6, 1, '2019-11-04 04:34:34', '2019-11-04 04:37:04'),
(20, 'ISLAMIBANK( Islami Bank Bangladesh Limited )', 6, 1, '2019-11-04 04:38:12', '2019-11-04 04:38:12'),
(21, 'JAMUNABANK( Jamuna Bank Ltd. )', 6, 1, '2019-11-04 04:39:28', '2019-11-04 04:39:28'),
(22, 'MERCANBANK( Mercantile Bank Ltd. )', 6, 1, '2019-11-04 04:41:51', '2019-11-04 04:41:51'),
(23, 'MTB( Mutual Trust Bank Ltd. )', 6, 1, '2019-11-04 04:43:22', '2019-11-04 04:43:22'),
(24, 'NBL( National Bank Ltd. )', 6, 1, '2019-11-04 04:45:14', '2019-11-04 04:45:14'),
(25, 'NCCBANK( National Credit and Commerce Bank Ltd. )', 6, 1, '2019-11-04 04:46:33', '2019-11-04 04:46:33'),
(26, 'ONEBANKLTD( One Bank Limited )', 6, 1, '2019-11-04 04:47:55', '2019-11-04 04:47:55'),
(27, 'PREMIERBAN( Premier Bank Ltd. )', 6, 1, '2019-11-04 04:49:11', '2019-11-04 04:49:11'),
(28, 'PRIMEBANK( Prime Bank Ltd. )', 6, 1, '2019-11-04 04:50:34', '2019-11-04 04:50:34'),
(29, 'PUBALIBANK( Pubali Bank Ltd. )', 6, 1, '2019-11-04 04:52:33', '2019-11-04 04:52:33'),
(30, 'RUPALIBANK( Rupali Bank Ltd. )', 6, 1, '2019-11-04 04:53:50', '2019-11-04 04:53:50'),
(31, 'SHAHJABANK( Shahjalal Islami Bank Ltd. )', 6, 1, '2019-11-04 04:55:04', '2019-11-04 04:55:04'),
(32, 'SIBL( Social Islami Bank Limited )', 6, 1, '2019-11-04 04:56:28', '2019-11-04 04:56:28'),
(33, 'SOUTHEASTB( Southeast Bank Ltd. )', 6, 1, '2019-11-04 04:57:45', '2019-11-04 04:57:45'),
(34, 'STANDBANKL( Standard Bank Limited )', 6, 1, '2019-11-04 04:58:57', '2019-11-04 04:58:57'),
(35, 'TRUSTBANK( Trust Bank Limited )', 6, 1, '2019-11-04 05:00:29', '2019-11-04 05:00:29'),
(36, 'UCB( United Commercial Bank Ltd. )', 6, 1, '2019-11-04 05:01:35', '2019-11-04 05:01:35'),
(37, 'UTTARABANK( Uttara Bank Limited )', 6, 1, '2019-11-04 05:02:41', '2019-11-04 05:02:41'),
(38, 'HEIDELBCEM( Heidelberg Cement Bangladesh Ltd. )', 7, 1, '2019-11-04 22:34:57', '2019-11-04 22:34:57'),
(39, 'LHBL( LafargeHolcim Bangladesh Limited )', 7, 1, '2019-11-04 22:35:36', '2019-11-04 22:35:36'),
(40, 'MEGHNACEM( Meghna Cement Mills Ltd. )', 7, 1, '2019-11-04 22:36:02', '2019-11-04 22:36:02'),
(41, 'MICEMENT( M.I. Cement Factory Limited )', 7, 1, '2019-11-04 22:36:27', '2019-11-04 22:36:27'),
(42, 'PREMIERCEM( Premier Cement Mills Limited )', 7, 1, '2019-11-04 22:39:55', '2019-11-04 22:39:55'),
(43, 'RAKCERAMIC( RAK Ceramics (Bangladesh) Limited )', 2, 1, '2019-11-04 22:53:11', '2019-11-04 22:53:11'),
(44, 'SPCERAMICS( Shinepukur Ceramics Limited )', 2, 1, '2019-11-04 22:53:54', '2019-11-04 22:53:54'),
(45, 'STANCERAM( Standard Ceramic Industries Ltd. )', 2, 1, '2019-11-04 22:57:01', '2019-11-04 22:57:01'),
(46, 'AFTABAUTO( Aftab Automobiles Limited )', 8, 1, '2019-11-04 22:58:12', '2019-11-04 22:58:12'),
(47, 'ANWARGALV( Anwar Galvanizing Ltd. )', 8, 1, '2019-11-04 22:59:05', '2019-11-04 22:59:05'),
(48, 'APOLOISPAT( Appollo Ispat Complex Limited )', 8, 1, '2019-11-04 22:59:29', '2019-11-04 22:59:29'),
(49, 'ATLASBANG( Atlas Bangladesh Ltd. )', 8, 1, '2019-11-04 23:00:58', '2019-11-04 23:00:58'),
(50, 'AZIZPIPES( Aziz Pipes Ltd. )', 8, 1, '2019-11-04 23:02:01', '2019-11-04 23:02:01'),
(51, 'BBS( Bangladesh Building Systems Ltd. )', 8, 1, '2019-11-04 23:02:28', '2019-11-04 23:02:28'),
(52, 'BBSCABLES( BBS Cables Limited )', 8, 1, '2019-11-04 23:03:21', '2019-11-04 23:03:21'),
(53, 'BDAUTOCA( Bangladesh Autocars Ltd. )', 8, 1, '2019-11-05 21:50:33', '2019-11-05 21:50:33'),
(54, 'BDLAMPS( Bangladesh Lamps Limited )', 8, 1, '2019-11-05 21:51:01', '2019-11-05 21:51:01'),
(55, 'BDTHAI( Bd.Thai Aluminium Ltd. )', 8, 1, '2019-11-05 21:55:54', '2019-11-05 21:55:54'),
(56, 'BENGALWTL( Bengal Windsor Thermoplastics Ltd. )', 8, 1, '2019-11-05 21:56:16', '2019-11-05 21:56:16'),
(57, 'BSRMLTD( Bangladesh Steel Re-Rolling Mills Limited )', 8, 1, '2019-11-05 21:56:39', '2019-11-05 21:56:39'),
(58, 'BSRMSTEEL( BSRM Steels Limited )', 8, 1, '2019-11-05 21:56:57', '2019-11-05 21:56:57'),
(59, 'COPPERTECH(  Coppertech Industries Limited )', 8, 1, '2019-11-05 21:57:20', '2019-11-05 21:57:20'),
(60, 'DESHBANDHU( Deshbandhu Polymer Limited )', 8, 1, '2019-11-05 21:59:50', '2019-11-05 21:59:50'),
(61, 'ECABLES( Eastern Cables Ltd. )', 8, 1, '2019-11-05 22:01:19', '2019-11-05 22:01:19'),
(62, 'GOLDENSON( Golden Son Ltd. )', 8, 1, '2019-11-05 22:01:40', '2019-11-05 22:01:40'),
(63, 'GPHISPAT( GPH Ispat Ltd. )', 8, 1, '2019-11-05 22:02:03', '2019-11-05 22:02:03'),
(64, 'IFADAUTOS( IFAD Autos Limited )', 8, 1, '2019-11-05 22:02:26', '2019-11-05 22:02:26'),
(65, 'KAY&QUE( Kay & Que (Bangladesh) Ltd.  )', 8, 1, '2019-11-05 22:02:55', '2019-11-05 22:02:55'),
(66, 'KDSALTD( KDS Accessories Limited )', 8, 1, '2019-11-05 22:03:18', '2019-11-05 22:03:18'),
(67, 'MONNOSTAF( Monno Jute Stafflers Ltd. )', 8, 1, '2019-11-05 22:03:56', '2019-11-05 22:03:56'),
(68, 'NAHEEACP( Nahee Aluminum Composite Panel Ltd. )', 8, 1, '2019-11-05 22:04:23', '2019-11-05 22:04:23'),
(69, 'NAVANACNG( Navana CNG Limited )', 8, 1, '2019-11-05 22:04:51', '2019-11-05 22:04:51'),
(70, 'NPOLYMAR( National Polymer Industries Ltd. )', 8, 1, '2019-11-05 22:05:14', '2019-11-05 22:05:14'),
(71, 'NTLTUBES( National Tubes Limited )', 8, 1, '2019-11-05 22:05:39', '2019-11-05 22:05:39'),
(72, 'OAL( Olympic Accessories Limited )', 8, 1, '2019-11-05 22:06:00', '2019-11-05 22:06:00'),
(73, 'OIMEX( Oimex Electrode Limited )', 8, 1, '2019-11-05 22:06:19', '2019-11-05 22:06:19'),
(74, 'QUASEMIND( Quasem Industries Ltd. )', 8, 1, '2019-11-05 22:06:40', '2019-11-05 22:06:40'),
(75, 'RANFOUNDRY( Rangpur Foundry Ltd. )', 8, 1, '2019-11-05 22:09:51', '2019-11-05 22:09:51'),
(76, 'RENWICKJA( Renwick Jajneswar & Co (Bd) Ltd. )', 8, 1, '2019-11-05 22:10:47', '2019-11-05 22:10:47'),
(77, 'RSRMSTEEL( Ratanpur Steel Re-Rolling Mills Limited )', 8, 1, '2019-11-05 22:13:39', '2019-11-05 22:13:39'),
(78, 'RUNNERAUTO( Runner Automobiles Limited )', 8, 1, '2019-11-05 22:14:22', '2019-11-05 22:14:22'),
(79, 'SALAMCRST( S. Alam Cold Rolled Steels Ltd. )', 8, 1, '2019-11-05 22:14:53', '2019-11-05 22:14:53'),
(80, 'SHURWID( Shurwid Industries Limited )', 8, 1, '2019-11-05 22:15:34', '2019-11-05 22:15:34'),
(81, 'SINGERBD( Singer Bangladesh Limited )', 8, 1, '2019-11-05 22:16:29', '2019-11-05 22:16:29'),
(82, 'SSSTEEL( S. S. Steel Limited )', 8, 1, '2019-11-05 22:20:10', '2019-11-05 22:20:10'),
(83, 'WMSHIPYARD( Western Marine Shipyard Limited )', 8, 1, '2019-11-05 22:21:07', '2019-11-05 22:21:07'),
(84, 'YPL( Yeakin Polymer Limited )', 8, 1, '2019-11-05 22:21:35', '2019-11-05 22:21:35'),
(85, 'BAYLEASING( Bay Leasing & Investment Limited )', 9, 1, '2019-11-05 22:22:31', '2019-11-05 22:22:31'),
(86, 'BDFINANCE( Bangladesh Finance and Investment Co.Ltd )', 9, 1, '2019-11-05 22:23:36', '2019-11-05 22:23:36'),
(87, 'BIFC( Bangladesh Industrial Fin. Co. Ltd. )', 9, 1, '2019-11-05 22:25:40', '2019-11-05 22:25:40'),
(88, 'DBH( Delta Brac Housing Finance Corp. Ltd. )', 9, 1, '2019-11-05 22:26:11', '2019-11-05 22:26:11'),
(89, 'FAREASTFIN( Fareast Finance & Investment Limited )', 9, 1, '2019-11-05 22:26:44', '2019-11-05 22:26:44'),
(90, 'FASFIN( FAS Finance & Investment Limited )', 9, 1, '2019-11-05 22:27:23', '2019-11-05 22:27:23'),
(91, 'FIRSTFIN( First Finance Limited )', 9, 1, '2019-11-05 22:27:55', '2019-11-05 22:27:55'),
(92, 'GSPFINANCE( GSP Finance Company (Bangladesh) Limited )', 9, 1, '2019-11-05 22:28:26', '2019-11-05 22:28:26'),
(93, 'ICB( Investment Corporation Of Bangladesh )', 9, 1, '2019-11-05 22:28:59', '2019-11-05 22:28:59'),
(94, 'IDLC( IDLC Finance Ltd. )', 9, 1, '2019-11-05 22:30:38', '2019-11-05 22:30:38'),
(95, 'ILFSL( International Leasing & Financial Services Ltd. )', 9, 1, '2019-11-05 22:31:03', '2019-11-05 22:31:03'),
(96, 'IPDC( IPDC Finance Limited  )', 9, 1, '2019-11-05 22:31:25', '2019-11-05 22:31:25'),
(97, 'ISLAMICFIN( Islamic Finance & Investment Ltd. )', 9, 1, '2019-11-05 22:35:38', '2019-11-05 22:35:38'),
(98, 'LANKABAFIN( LankaBangla Finance Ltd. )', 9, 1, '2019-11-05 22:36:46', '2019-11-05 22:36:46'),
(99, 'MIDASFIN( MIDAS Financing Ltd. )', 9, 1, '2019-11-05 22:37:10', '2019-11-05 22:37:10'),
(100, 'NHFIL( National Housing Fin. and Inv. Ltd. )', 9, 1, '2019-11-05 22:37:36', '2019-11-05 22:37:36'),
(101, 'PHOENIXFIN( Phoenix Finance and Investments Ltd. )', 9, 1, '2019-11-05 22:38:02', '2019-11-05 22:38:02'),
(102, 'PLFSL( Peoples Leasing and Fin. Services Ltd. )', 9, 1, '2019-11-05 22:39:01', '2019-11-05 22:39:01'),
(103, 'PREMIERLEA( Premier Leasing & Finance Limited )', 9, 1, '2019-11-05 22:39:30', '2019-11-05 22:39:30'),
(104, 'PRIMEFIN( Prime Finance & Investment Ltd. )', 9, 1, '2019-11-05 22:40:09', '2019-11-05 22:40:09'),
(105, 'UNIONCAP( Union Capital Limited )', 9, 1, '2019-11-05 22:40:31', '2019-11-05 22:40:31'),
(106, 'UNITEDFIN( United Finance Limited )', 9, 1, '2019-11-05 22:40:56', '2019-11-05 22:40:56'),
(107, 'UTTARAFIN( Uttara Finance and Investments Limited )', 9, 1, '2019-11-05 22:41:50', '2019-11-05 22:41:50'),
(108, 'AMCL(PRAN)( Agricultural Marketing Company Ltd. (Pran)  )', 10, 1, '2019-11-05 22:42:30', '2019-11-05 22:42:30'),
(109, 'APEXFOODS( Apex Foods Limited )', 10, 1, '2019-11-05 22:42:50', '2019-11-05 22:42:50'),
(110, 'BANGAS( Bangas Ltd. )', 10, 1, '2019-11-05 22:43:09', '2019-11-05 22:43:09'),
(111, 'BATBC( British American Tobacco bangladesh Company Limited )', 10, 1, '2019-11-05 22:43:34', '2019-11-05 22:43:34'),
(112, 'BEACHHATCH( Beach Hatchery Ltd. )', 10, 1, '2019-11-05 22:44:00', '2019-11-05 22:44:00'),
(113, 'EMERALDOIL( Emerald Oil Industries Ltd. )', 10, 1, '2019-11-05 22:44:22', '2019-11-05 22:44:22'),
(114, 'FINEFOODS( Fine Foods Limited )', 10, 1, '2019-11-05 22:44:52', '2019-11-05 22:44:52'),
(115, 'FUWANGFOOD( Fu Wang Food Ltd. )', 10, 1, '2019-11-05 22:45:22', '2019-11-05 22:45:22'),
(116, 'GEMINISEA( Gemini Sea Food Ltd. )', 10, 1, '2019-11-05 22:45:45', '2019-11-05 22:45:45'),
(117, 'GHAIL( Golden Harvest Agro Industries Ltd. )', 10, 1, '2019-11-05 22:46:23', '2019-11-05 22:46:23'),
(118, 'MEGCONMILK( Meghna Condensed Milk Industries Ltd. )', 10, 1, '2019-11-05 22:46:50', '2019-11-05 22:46:50'),
(119, 'MEGHNAPET( Meghna Pet Industries Ltd. )', 10, 1, '2019-11-05 22:47:20', '2019-11-05 22:47:20'),
(120, 'NTC( National Tea Company Ltd. )', 10, 1, '2019-11-05 23:09:52', '2019-11-05 23:09:52'),
(121, 'OLYMPIC( Olympic Industries Ltd. )', 10, 1, '2019-11-05 23:12:36', '2019-11-05 23:12:36'),
(122, 'RDFOOD( Rangpur Dairy & Food Products Ltd. )', 10, 1, '2019-11-05 23:14:05', '2019-11-05 23:14:05'),
(123, 'SHYAMPSUG( Shyampur Sugar Mills Ltd. )', 10, 1, '2019-11-05 23:14:40', '2019-11-05 23:14:40'),
(124, 'ZEALBANGLA( Zeal Bangla Sugar Mills Ltd. )', 10, 1, '2019-11-05 23:16:53', '2019-11-05 23:16:53'),
(125, 'BARKAPOWER( Baraka Power Limited )', 11, 1, '2019-11-06 21:30:27', '2019-11-06 21:30:27'),
(126, 'BDWELDING( Bangladesh Welding Electrodes Ltd.  )', 11, 1, '2019-11-06 21:30:50', '2019-11-06 21:30:50'),
(127, 'CVOPRL( CVO Petrochemical Refinery Limited )', 11, 1, '2019-11-06 21:31:11', '2019-11-06 21:31:11'),
(128, 'DESCO( Dhaka Electric Supply Company Ltd. )', 11, 1, '2019-11-06 21:31:38', '2019-11-06 21:31:38'),
(129, 'DOREENPWR( Doreen Power Generations and Systems Limited )', 11, 1, '2019-11-06 21:32:03', '2019-11-06 21:32:03'),
(130, 'EASTRNLUB( Eastern Lubricants Ltd. )', 11, 1, '2019-11-06 21:32:31', '2019-11-06 21:32:31'),
(131, 'GBBPOWER( GBB Power Ltd. )', 11, 1, '2019-11-06 21:33:19', '2019-11-06 21:33:19'),
(132, 'INTRACO( Intraco Refueling Station Limited )', 11, 1, '2019-11-06 21:33:56', '2019-11-06 21:33:56'),
(133, 'JAMUNAOIL( Jamuna Oil Company Limited )', 11, 1, '2019-11-06 21:34:18', '2019-11-06 21:34:18'),
(134, 'KPCL( Khulna Power Company Limited )', 11, 1, '2019-11-06 21:34:48', '2019-11-06 21:34:48'),
(135, 'LINDEBD( Linde Bangladesh Limited )', 11, 1, '2019-11-06 21:35:11', '2019-11-06 21:35:11'),
(136, 'MJLBD( MJL Bangladesh Limited )', 11, 1, '2019-11-06 21:35:39', '2019-11-06 21:35:39'),
(137, 'PADMAOIL( Padma Oil Co. Ltd. )', 11, 1, '2019-11-06 21:37:58', '2019-11-06 21:37:58'),
(138, 'POWERGRID( Power Grid Company of Bangladesh Ltd. )', 11, 1, '2019-11-06 21:42:22', '2019-11-06 21:42:22'),
(139, 'SPCL( Shahjibazar Power Co. Ltd. )', 11, 1, '2019-11-06 21:42:47', '2019-11-06 21:42:47'),
(140, 'SUMITPOWER( Summit Power Limited )', 11, 1, '2019-11-06 21:43:27', '2019-11-06 21:43:27'),
(141, 'TITASGAS( Titas Gas Transmission & Dist. Co. Ltd. )', 11, 1, '2019-11-06 21:45:29', '2019-11-06 21:45:29'),
(142, 'UPGDCL( United Power Generation & Distribution Company Ltd. )', 11, 1, '2019-11-06 21:45:55', '2019-11-06 21:45:55'),
(143, 'AGRANINS( Agrani Insurance Co. Ltd. )', 12, 1, '2019-11-06 21:47:13', '2019-11-06 21:47:13'),
(144, 'ASIAINS( Asia Insurance Limited )', 12, 1, '2019-11-06 21:47:35', '2019-11-06 21:47:35'),
(145, 'ASIAPACINS( Asia Pacific General Insurance Co. Ltd. )', 12, 1, '2019-11-06 21:48:20', '2019-11-06 21:48:20'),
(146, 'BGIC( Bangladesh General Insurance Company Ltd. )', 12, 1, '2019-11-06 21:49:00', '2019-11-06 21:49:00'),
(147, 'BNICL( Bangladesh National Insurance Company Limited )', 12, 1, '2019-11-06 21:49:21', '2019-11-06 21:49:21'),
(148, 'CENTRALINS( Central Insurance Company Ltd. )', 12, 1, '2019-11-06 21:53:30', '2019-11-06 21:53:30'),
(149, 'CITYGENINS( City General Insurance Co. Ltd. )', 12, 1, '2019-11-06 21:53:51', '2019-11-06 21:53:51'),
(150, 'CONTININS( Continental Insurance Ltd. )', 12, 1, '2019-11-06 21:54:24', '2019-11-06 21:54:24'),
(151, 'DELTALIFE( Delta Life Insurance Company Ltd. )', 12, 1, '2019-11-06 21:54:45', '2019-11-06 21:54:45'),
(152, 'DHAKAINS( Dhaka Insurance Limited )', 12, 1, '2019-11-06 21:55:06', '2019-11-06 21:55:06'),
(153, 'EASTERNINS( Eastern Insurance Company Ltd. )', 12, 1, '2019-11-06 21:55:27', '2019-11-06 21:55:27'),
(154, 'EASTLAND( Eastland Insurance Company Ltd. )', 12, 1, '2019-11-06 21:57:23', '2019-11-06 21:57:23'),
(155, 'FAREASTLIF( Fareast Islami Life Insurance Co. Ltd. )', 12, 1, '2019-11-06 21:57:43', '2019-11-06 21:57:43'),
(156, 'FEDERALINS( Federal Insurance Company Ltd. )', 12, 1, '2019-11-06 21:58:40', '2019-11-06 21:58:40'),
(157, 'GLOBALINS( Global Insurance Company Ltd. )', 12, 1, '2019-11-06 21:59:15', '2019-11-06 21:59:15'),
(158, 'GREENDELT( Green Delta Insurance Ltd. )', 12, 1, '2019-11-06 21:59:39', '2019-11-06 21:59:39'),
(159, 'ISLAMIINS( Islami Insurance Bangladesh Limited )', 12, 1, '2019-11-06 22:00:08', '2019-11-06 22:00:08'),
(160, 'JANATAINS( Janata Insurance Company Ltd. )', 12, 1, '2019-11-06 22:00:40', '2019-11-06 22:00:40'),
(161, 'KARNAPHULI( Karnaphuli Insurance Company Ltd. )', 12, 1, '2019-11-06 22:01:12', '2019-11-06 22:01:12'),
(162, 'MEGHNALIFE( Meghna Life Insurance Co. Ltd. )', 12, 1, '2019-11-06 22:01:38', '2019-11-06 22:01:38'),
(163, 'MERCINS( Mercantile Insurance Co. Ltd. )', 12, 1, '2019-11-06 22:02:09', '2019-11-06 22:02:09'),
(164, 'NATLIFEINS( National Life Insurance Company Ltd. )', 12, 1, '2019-11-06 22:02:27', '2019-11-06 22:02:27'),
(165, 'NITOLINS( Nitol Insurance Co. Ltd. )', 12, 1, '2019-11-06 22:03:22', '2019-11-06 22:03:22'),
(166, 'NORTHRNINS( Northern General Insurance Company Ltd. )', 12, 1, '2019-11-06 22:05:23', '2019-11-06 22:05:23'),
(167, 'PADMALIFE( Padma Islami Life Insurance Limited )', 12, 1, '2019-11-06 22:05:45', '2019-11-06 22:05:45'),
(168, 'PARAMOUNT( Paramount Insurance Company Ltd. )', 12, 1, '2019-11-06 22:06:08', '2019-11-06 22:06:08'),
(169, 'PEOPLESINS( Peoples Insurance Company Ltd. )', 12, 1, '2019-11-06 22:06:30', '2019-11-06 22:06:30'),
(170, 'PHENIXINS( Phoenix Insurance Company Ltd. )', 12, 1, '2019-11-06 22:06:52', '2019-11-06 22:06:52'),
(171, 'PIONEERINS( Pioneer Insurance Company Ltd. )', 12, 1, '2019-11-06 22:07:13', '2019-11-06 22:07:13'),
(172, 'POPULARLIF( Popular Life Insurance Co. Ltd. )', 12, 1, '2019-11-06 22:07:33', '2019-11-06 22:07:33'),
(173, 'PRAGATIINS( Pragati Insurance Ltd )', 12, 1, '2019-11-06 22:07:54', '2019-11-06 22:07:54'),
(174, 'PRAGATILIF( Pragati Life Insurance Ltd. )', 12, 1, '2019-11-06 22:08:18', '2019-11-06 22:08:18'),
(175, 'PRIMEINSUR( Prime Insurance Company Ltd. )', 12, 1, '2019-11-06 22:08:42', '2019-11-06 22:08:42'),
(176, 'PRIMELIFE( Prime Islami Life Insurance Ltd. )', 12, 1, '2019-11-06 22:09:08', '2019-11-06 22:09:08'),
(177, 'PROGRESLIF( Progressive Life Insurance Co. Ltd. )', 12, 1, '2019-11-06 22:09:31', '2019-11-06 22:09:31'),
(178, 'PROVATIINS( Provati Insurance Company Limited )', 12, 1, '2019-11-06 22:09:51', '2019-11-06 22:09:51'),
(179, 'PURABIGEN( Purabi Gen. Insurance Company Ltd. )', 12, 1, '2019-11-06 22:10:15', '2019-11-06 22:10:15'),
(180, 'RELIANCINS( Reliance Insurance Ltd. )', 12, 1, '2019-11-06 22:10:39', '2019-11-06 22:10:39'),
(181, 'REPUBLIC( Republic Insurance Company Limited )', 12, 1, '2019-11-06 22:11:17', '2019-11-06 22:11:17'),
(182, 'RUPALIINS( Rupali Insurance Company Ltd. )', 12, 1, '2019-11-06 22:12:51', '2019-11-06 22:12:51'),
(183, 'RUPALILIFE( Rupali Life Insurance Company Limited )', 12, 1, '2019-11-06 22:13:20', '2019-11-06 22:13:20'),
(184, 'SANDHANINS( Sandhani Life Insurance Company Ltd. )', 12, 1, '2019-11-06 22:13:49', '2019-11-06 22:13:49'),
(185, 'SONARBAINS( Sonar Bangla Insurance Ltd. )', 12, 1, '2019-11-06 22:14:12', '2019-11-06 22:14:12'),
(186, 'STANDARINS( Standard Insurance Limited )', 12, 1, '2019-11-06 22:14:38', '2019-11-06 22:14:38'),
(187, 'SUNLIFEINS( Sunlife Insurance Company Limited )', 12, 1, '2019-11-06 22:15:04', '2019-11-06 22:15:04'),
(188, 'TAKAFULINS( Takaful Islami Insurance Limited )', 12, 1, '2019-11-06 22:15:49', '2019-11-06 22:15:49'),
(189, 'UNITEDINS( United Insurance Ltd. )', 12, 1, '2019-11-06 22:17:13', '2019-11-06 22:17:13'),
(190, 'AAMRANET( aamra networks limited )', 5, 1, '2019-11-06 22:17:51', '2019-11-06 22:17:51'),
(191, 'AAMRATECH( aamra technologies limited )', 5, 1, '2019-11-06 22:18:17', '2019-11-06 22:18:17'),
(192, 'AGNISYSL( Agni Systems Ltd. )', 5, 1, '2019-11-06 22:19:06', '2019-11-06 22:19:06'),
(193, 'DAFODILCOM( Daffodil Computers Ltd. )', 5, 1, '2019-11-06 22:23:01', '2019-11-06 22:23:01'),
(194, 'GENEXIL( Genex Infosys Limited )', 5, 1, '2019-11-06 22:23:53', '2019-11-06 22:23:53'),
(195, 'INTECH( Intech Limited )', 5, 1, '2019-11-06 22:24:28', '2019-11-06 22:24:28'),
(196, 'ISNLTD( Information Services Network Ltd. )', 5, 1, '2019-11-06 22:26:28', '2019-11-06 22:26:28'),
(197, 'ITC( IT Consultants Limited )', 5, 1, '2019-11-06 22:26:51', '2019-11-06 22:26:51'),
(198, 'JUTESPINN( Jute Spinners Ltd. )', 13, 1, '2019-11-06 22:27:28', '2019-11-06 22:27:28'),
(199, 'NORTHERN( Northern Jute Manufacturing Co. Ltd. )', 13, 1, '2019-11-06 22:27:51', '2019-11-06 22:27:51'),
(200, 'SONALIANSH( Sonali Aansh Industries Limited )', 13, 1, '2019-11-06 22:28:30', '2019-11-06 22:28:30'),
(201, 'AMANFEED( Aman Feed Limited )', 14, 1, '2019-11-06 22:28:57', '2019-11-06 22:28:57'),
(202, 'ARAMIT( Aramit Limited )', 14, 1, '2019-11-06 22:29:26', '2019-11-06 22:29:26'),
(203, 'BERGERPBL( Berger Paints Bangladesh Ltd. )', 14, 1, '2019-11-06 22:29:47', '2019-11-06 22:29:47'),
(204, 'BEXIMCO( Bangladesh Export Import Company Ltd. )', 14, 1, '2019-11-06 22:37:50', '2019-11-06 22:37:50'),
(205, 'BSC( Bangladesh Shipping Corporation )', 14, 1, '2019-11-06 22:39:26', '2019-11-06 22:39:26'),
(206, 'GQBALLPEN( GQ Ball Pen Industries Ltd. )', 14, 1, '2019-11-06 22:39:46', '2019-11-06 22:39:46'),
(207, 'KBPPWBIL( Khan Brothers PP Woven Bag Industries Limited )', 14, 1, '2019-11-06 22:40:07', '2019-11-06 22:40:07'),
(208, 'MIRACLEIND( Miracle Industries Ltd. )', 14, 1, '2019-11-06 22:40:35', '2019-11-06 22:40:35'),
(209, 'NFML( National Feed Mill Limited )', 14, 1, '2019-11-06 22:41:07', '2019-11-06 22:41:07'),
(210, 'SAVAREFR( Savar Refractories Limited )', 14, 1, '2019-11-06 22:41:55', '2019-11-06 22:41:55'),
(211, 'SINOBANGLA( Sinobangla Industries Ltd. )', 14, 1, '2019-11-06 22:42:20', '2019-11-06 22:42:20'),
(212, 'SKTRIMS( SK Trims & Industries Limited )', 14, 1, '2019-11-06 22:42:43', '2019-11-06 22:42:43'),
(213, 'USMANIAGL( Usmania Glass Sheet Factory Limited )', 14, 1, '2019-11-06 22:43:10', '2019-11-06 22:43:10'),
(214, 'BPML( Bashundhara Paper Mills Limited )', 16, 1, '2019-11-06 22:44:59', '2019-11-06 22:44:59'),
(215, 'HAKKANIPUL( Hakkani Pulp & Paper Mills Ltd. )', 16, 1, '2019-11-06 22:45:28', '2019-11-06 22:45:28'),
(216, 'KPPL( Khulna Printing & Packaging Limited )', 16, 1, '2019-11-06 22:45:48', '2019-11-06 22:45:48'),
(217, 'EHL( Eastern Housing Limited )', 18, 1, '2019-11-06 22:46:34', '2019-11-06 22:46:34'),
(218, 'SAIFPOWER( SAIF Powertec Limited )', 18, 1, '2019-11-06 22:47:09', '2019-11-06 22:47:09'),
(219, 'SAMORITA( Samorita Hospital Limited )', 18, 1, '2019-11-06 22:47:30', '2019-11-06 22:47:30'),
(220, 'SAPORTL( Summit Alliance Port Limited )', 18, 1, '2019-11-06 22:48:07', '2019-11-06 22:48:07'),
(221, 'APEXFOOT( Apex Footwear Limited. )', 19, 1, '2019-11-06 22:48:39', '2019-11-06 22:48:39'),
(222, 'APEXTANRY( Apex Tannery Limited )', 19, 1, '2019-11-06 22:49:11', '2019-11-06 22:49:11'),
(223, 'BATASHOE( Bata Shoe Company (Bangladesh) Limited )', 19, 1, '2019-11-06 22:49:39', '2019-11-06 22:49:39'),
(224, 'FORTUNE( Fortune Shoes Limited )', 19, 1, '2019-11-06 22:56:22', '2019-11-06 22:56:22'),
(225, 'LEGACYFOOT( Legacy Footwear Ltd. )', 19, 1, '2019-11-06 22:57:18', '2019-11-06 22:57:18'),
(226, 'SAMATALETH( Samata Leather Complex Ltd. )', 19, 1, '2019-11-06 22:57:52', '2019-11-06 22:57:52'),
(227, 'BSCCL( Bangladesh Submarine Cable Company Limited )', 20, 1, '2019-11-06 23:10:30', '2019-11-06 23:10:30'),
(228, 'GP( Grameenphone Ltd. )', 20, 1, '2019-11-06 23:10:49', '2019-11-06 23:10:49'),
(229, 'BDSERVICE( Bangladesh Services Ltd. )', 22, 1, '2019-11-06 23:11:14', '2019-11-06 23:11:14'),
(230, 'PENINSULA( The Peninsula Chittagong Limited )', 22, 1, '2019-11-06 23:11:34', '2019-11-06 23:11:34'),
(231, 'SEAPEARL( Sea Pearl Beach Resort & Spa Limited )', 22, 1, '2019-11-06 23:12:07', '2019-11-06 23:12:07'),
(232, 'UNIQUEHRL( Unique Hotel & Resorts Limited )', 22, 1, '2019-11-06 23:13:14', '2019-11-06 23:13:14'),
(233, 'UNITEDAIR( United Airways (BD) Ltd. )', 22, 1, '2019-11-06 23:13:44', '2019-11-06 23:13:44'),
(234, '1JANATAMF( First Janata Bank Mutual Fund )', 15, 1, '2019-11-09 17:39:06', '2019-11-09 17:39:06'),
(235, '1STPRIMFMF( Prime Finance First Mutual Fund )', 15, 1, '2019-11-09 17:39:38', '2019-11-09 17:39:38'),
(236, 'ABB1STMF( AB Bank 1st Mutual fund )', 15, 1, '2019-11-09 17:41:16', '2019-11-09 17:41:16'),
(237, 'AIBL1STIMF( AIBL 1st Islamic Mutual Fund )', 15, 1, '2019-11-09 17:41:56', '2019-11-09 17:41:56'),
(238, 'ATCSLGF( Asian Tiger Sandhani Life Growth Fund )', 15, 1, '2019-11-09 17:42:22', '2019-11-09 17:42:22'),
(239, 'CAPMBDBLMF( CAPM BDBL Mutual Fund 01 )', 15, 1, '2019-11-09 17:42:46', '2019-11-09 17:42:46'),
(240, 'CAPMIBBLMF( CAPM IBBL Islamic Mutual Fund )', 15, 1, '2019-11-09 17:43:19', '2019-11-09 17:43:19'),
(241, 'DBH1STMF( DBH First Mutual Fund )', 15, 1, '2019-11-09 17:43:47', '2019-11-09 17:43:47'),
(242, 'EBL1STMF( EBL First Mutual Fund )', 15, 1, '2019-11-09 17:44:24', '2019-11-09 17:44:24'),
(243, 'EBLNRBMF( EBL NRB Mutual Fund )', 15, 1, '2019-11-09 17:44:51', '2019-11-09 17:44:51'),
(244, 'EXIM1STMF( EXIM Bank 1st Mutual Fund  )', 15, 1, '2019-11-09 17:45:18', '2019-11-09 17:45:18'),
(245, 'FBFIF( First Bangladesh Fixed Income Fund )', 15, 1, '2019-11-09 17:46:54', '2019-11-09 17:46:54'),
(246, 'GRAMEENS2( Grameen One : Scheme Two )', 15, 1, '2019-11-09 17:47:23', '2019-11-09 17:47:23'),
(247, 'GREENDELMF( Green Delta Mutual Fund )', 15, 1, '2019-11-09 17:47:48', '2019-11-09 17:47:48'),
(248, 'ICB3RDNRB( ICB AMCL Third NRB Mutual Fund )', 15, 1, '2019-11-09 17:48:14', '2019-11-09 17:48:14'),
(249, 'ICBAGRANI1( ICB AMCL First Agrani Bank Mutual Fund )', 15, 1, '2019-11-09 17:48:41', '2019-11-09 17:48:41'),
(250, 'ICBAMCL2ND( ICB AMCL Second Mutual Fund )', 15, 1, '2019-11-09 17:49:06', '2019-11-09 17:49:06'),
(251, 'ICBEPMF1S1( ICB Employees Provident MF 1: Scheme 1 )', 15, 1, '2019-11-09 17:49:36', '2019-11-09 17:49:36'),
(252, 'ICBSONALI1( ICB AMCL Sonali Bank Limited 1st Mutual Fund )', 15, 1, '2019-11-09 17:49:57', '2019-11-09 17:49:57'),
(253, 'IFIC1STMF( IFIC Bank 1st Mutual Fund )', 15, 1, '2019-11-09 17:50:25', '2019-11-09 17:50:25'),
(254, 'IFILISLMF1( IFIL Islamic Mutual Fund-1 )', 15, 1, '2019-11-09 17:51:02', '2019-11-09 17:51:02'),
(255, 'LRGLOBMF1( LR Global Bangladesh Mutual Fund One )', 15, 1, '2019-11-09 17:51:29', '2019-11-09 17:51:29'),
(256, 'MBL1STMF( MBL 1st Mutual Fund )', 15, 1, '2019-11-09 17:52:00', '2019-11-09 17:52:00'),
(257, 'NCCBLMF1( NCCBL Mutual Fund-1 )', 15, 1, '2019-11-09 17:52:29', '2019-11-09 17:52:29'),
(258, 'NLI1STMF( NLI First Mutual Fund )', 15, 1, '2019-11-09 17:52:59', '2019-11-09 17:52:59'),
(259, 'PF1STMF( Phoenix Finance 1st Mutual Fund )', 15, 1, '2019-11-09 17:53:24', '2019-11-09 17:53:24'),
(260, 'PHPMF1( PHP First Mutual Fund )', 15, 1, '2019-11-09 17:53:50', '2019-11-09 17:53:50'),
(261, 'POPULAR1MF( Popular Life First Mutual Fund )', 15, 1, '2019-11-09 17:54:21', '2019-11-09 17:54:21'),
(262, 'PRIME1ICBA( Prime Bank 1st ICB AMCL Mutual Fund )', 15, 1, '2019-11-09 17:54:50', '2019-11-09 17:54:50'),
(263, 'RELIANCE1( \"Reliance One\" the first scheme of Reliance Insurance Mutual Fund )', 15, 1, '2019-11-09 17:55:45', '2019-11-09 17:55:45'),
(264, 'SEBL1STMF( Southeast Bank 1st Mutual Fund )', 15, 1, '2019-11-09 17:58:35', '2019-11-09 17:58:35'),
(265, 'SEMLFBSLGF( SEML FBLSL Growth Fund )', 15, 1, '2019-11-09 17:59:10', '2019-11-09 17:59:10'),
(266, 'SEMLIBBLSF( SEML IBBL Shariah Fund )', 15, 1, '2019-11-09 17:59:35', '2019-11-09 17:59:35'),
(267, 'SEMLLECMF( SEML Lecture Equity Management Fund )', 15, 1, '2019-11-09 18:00:12', '2019-11-09 18:00:12'),
(268, 'TRUSTB1MF( Trust Bank 1st Mutual Fund )', 15, 1, '2019-11-09 18:00:37', '2019-11-09 18:00:37'),
(269, 'VAMLBDMF1( Vanguard AML BD Finance Mutual Fund One )', 15, 1, '2019-11-09 18:01:01', '2019-11-09 18:01:01'),
(270, 'VAMLRBBF( Vanguard AML Rupali Bank Balanced Fund )', 15, 1, '2019-11-09 18:01:27', '2019-11-09 18:01:27'),
(271, 'ACI( ACI Limited )', 17, 1, '2019-11-11 21:45:06', '2019-11-11 21:45:06'),
(272, 'ACIFORMULA( ACI Formulations Limited )', 17, 1, '2019-11-11 21:45:25', '2019-11-11 21:45:25'),
(273, 'ACMELAB( The ACME Laboratories Limited )', 17, 1, '2019-11-11 21:46:03', '2019-11-11 21:46:03'),
(274, 'ACTIVEFINE( Active Fine Chemicals Limited )', 17, 1, '2019-11-11 21:49:53', '2019-11-11 21:49:53'),
(275, 'ADVENT( Advent Pharma Limited )', 17, 1, '2019-11-11 21:50:32', '2019-11-11 21:50:32'),
(276, 'AFCAGRO( AFC Agro Biotech Ltd. )', 17, 1, '2019-11-11 21:50:59', '2019-11-11 21:50:59'),
(277, 'AMBEEPHA( Ambee Pharmaceuticals Ltd. )', 17, 1, '2019-11-11 21:52:21', '2019-11-11 21:52:21'),
(278, 'BEACONPHAR( Beacon Pharmaceuticals Limited )', 17, 1, '2019-11-11 21:53:09', '2019-11-11 21:53:09'),
(279, 'BXPHARMA( Beximco Pharmaceuticals Ltd. )', 17, 1, '2019-11-11 21:57:51', '2019-11-11 21:57:51'),
(280, 'BXSYNTH( Beximco Synthetics Ltd. )', 17, 1, '2019-11-11 21:58:20', '2019-11-11 21:58:20'),
(281, 'CENTRALPHL( Central Pharmaceuticals Limited )', 17, 1, '2019-11-11 22:00:49', '2019-11-11 22:00:49'),
(282, 'FARCHEM( Far Chemical Industries Limited )', 17, 1, '2019-11-11 22:01:24', '2019-11-11 22:01:24'),
(283, 'GHCL( Global Heavy Chemicals Limited )', 17, 1, '2019-11-11 22:02:17', '2019-11-11 22:02:17'),
(284, 'GLAXOSMITH( GlaxoSmithKline(GSK) Bangladesh Ltd. )', 17, 1, '2019-11-11 22:02:55', '2019-11-11 22:02:55'),
(285, 'IBNSINA( The IBN SINA Pharmaceutical Industry Ltd. )', 17, 1, '2019-11-11 22:03:26', '2019-11-11 22:03:26'),
(286, 'IBP( Indo-Bangla Pharmaceuticals Limited )', 17, 1, '2019-11-11 22:04:03', '2019-11-11 22:04:03'),
(287, 'IMAMBUTTON( Imam Button Industries Ltd. )', 17, 1, '2019-11-11 22:04:50', '2019-11-11 22:04:50'),
(288, 'JMISMDL( JMI Syringes & Medical Devices Ltd. )', 17, 1, '2019-11-11 22:06:17', '2019-11-11 22:06:17'),
(289, 'KEYACOSMET( Keya Cosmetics Ltd. )', 17, 1, '2019-11-11 22:07:18', '2019-11-11 22:07:18'),
(290, 'KOHINOOR( Kohinoor Chemicals Company (Bangladesh) Ltd. )', 17, 1, '2019-11-11 22:10:24', '2019-11-11 22:10:24'),
(291, 'LIBRAINFU( Libra Infusions Limited )', 17, 1, '2019-11-11 22:10:57', '2019-11-11 22:10:57'),
(292, 'MARICO( Marico Bangladesh Limited )', 17, 1, '2019-11-11 22:11:33', '2019-11-11 22:11:33'),
(293, 'ORIONINFU( Orion Infusion Ltd. )', 17, 1, '2019-11-11 22:12:09', '2019-11-11 22:12:09'),
(294, 'ORIONPHARM( Orion Pharma Ltd. )', 17, 1, '2019-11-11 22:12:55', '2019-11-11 22:12:55'),
(295, 'PHARMAID( Pharma Aids )', 17, 1, '2019-11-11 22:14:08', '2019-11-11 22:14:08'),
(296, 'RECKITTBEN( Reckitt Benckiser(Bd.)Ltd. )', 17, 1, '2019-11-11 22:15:32', '2019-11-11 22:15:32'),
(297, 'RENATA( Renata Ltd. )', 17, 1, '2019-11-11 22:16:20', '2019-11-11 22:16:20'),
(298, 'SILCOPHL( Silco Pharmaceuticals Limited  )', 17, 1, '2019-11-11 22:16:52', '2019-11-11 22:16:52'),
(299, 'SILVAPHL( Silva Pharmaceuticals Limited )', 17, 1, '2019-11-11 22:17:52', '2019-11-11 22:17:52'),
(300, 'SQURPHARMA( Square Pharmaceuticals Ltd. )', 17, 1, '2019-11-11 22:19:13', '2019-11-11 22:19:13'),
(301, 'WATACHEM( Wata Chemicals Limited )', 17, 1, '2019-11-11 22:21:24', '2019-11-11 22:21:24'),
(302, 'ACFL( Aman Cotton Fibrous Limited )', 21, 1, '2019-11-11 22:23:01', '2019-11-11 22:23:01'),
(303, 'AIL( Alif Industries Limited )', 21, 1, '2019-11-11 22:23:30', '2019-11-11 22:23:30'),
(304, 'AL-HAJTEX( Al-Haj Textile Mills Limited )', 21, 1, '2019-11-11 22:23:58', '2019-11-11 22:23:58'),
(305, 'ALIF( Alif Manufacturing Company Ltd. )', 21, 1, '2019-11-11 22:24:44', '2019-11-11 22:24:44'),
(306, 'ALLTEX( Alltex Industries Ltd. )', 21, 1, '2019-11-11 22:25:25', '2019-11-11 22:25:25'),
(307, 'ANLIMAYARN( Anlimayarn Deying Ltd. )', 21, 1, '2019-11-11 22:25:47', '2019-11-11 22:25:47'),
(308, 'APEXSPINN( Apex Spinning & Knitting Mills Limited )', 21, 1, '2019-11-11 22:26:44', '2019-11-11 22:26:44'),
(309, 'APEXSPINN( Apex Spinning & Knitting Mills Limited )', 21, 1, '2019-11-11 22:28:39', '2019-11-11 22:28:39'),
(310, 'ARGONDENIM( Argon Denims Limited )', 21, 1, '2019-11-11 22:29:04', '2019-11-11 22:29:04'),
(311, 'CNATEX( C & A Textiles Limited )', 21, 1, '2019-11-11 22:36:51', '2019-11-11 22:36:51'),
(312, 'DACCADYE( The Dacca Dyeing & Manufacturing Co.Ltd. )', 21, 1, '2019-11-11 22:37:15', '2019-11-11 22:37:15'),
(313, 'DELTASPINN( Delta Spinners Ltd. )', 21, 1, '2019-11-11 22:37:48', '2019-11-11 22:37:48'),
(314, 'DSHGARME( Desh Garmants Ltd. )', 21, 1, '2019-11-11 22:38:12', '2019-11-11 22:38:12'),
(315, 'DSSL( Dragon Sweater and Spinning Limited )', 21, 1, '2019-11-11 22:38:36', '2019-11-11 22:38:36'),
(316, 'DULAMIACOT( Dulamia Cotton Spinning Mills Ltd. )', 21, 1, '2019-11-11 22:39:06', '2019-11-11 22:39:06'),
(317, 'ENVOYTEX( Envoy Textiles Limited )', 21, 1, '2019-11-11 22:39:34', '2019-11-11 22:39:34'),
(318, 'ESQUIRENIT( Esquire Knit Composite Limited )', 21, 1, '2019-11-11 22:40:06', '2019-11-11 22:40:06'),
(319, 'ETL( Evince Textiles Limited )', 21, 1, '2019-11-11 22:40:44', '2019-11-11 22:40:44'),
(320, 'FAMILYTEX( Familytex (BD) Limited )', 21, 1, '2019-11-11 22:41:16', '2019-11-11 22:41:16'),
(321, 'FEKDIL( Far East Knitting & Dyeing Industries Limited )', 21, 1, '2019-11-11 22:42:01', '2019-11-11 22:42:01'),
(322, 'GENNEXT( Generation Next Fashions Limited )', 21, 1, '2019-11-11 22:42:28', '2019-11-11 22:42:28'),
(323, 'HFL( Hamid Fabrics Limited )', 21, 1, '2019-11-11 22:42:57', '2019-11-11 22:42:57'),
(324, 'HRTEX( H.R.Textile Ltd. )', 21, 1, '2019-11-11 22:43:21', '2019-11-11 22:43:21'),
(325, 'HWAWELLTEX( Hwa Well Textiles (BD) Limited )', 21, 1, '2019-11-11 22:43:42', '2019-11-11 22:43:42'),
(326, 'KTL( Kattali Textile Limited )', 21, 1, '2019-11-11 22:44:22', '2019-11-11 22:44:22'),
(327, 'MAKSONSPIN( Maksons Spinning Mills Limited )', 21, 1, '2019-11-11 22:44:51', '2019-11-11 22:44:51'),
(328, 'MALEKSPIN( Malek Spinning Mills Ltd. )', 21, 1, '2019-11-11 22:46:07', '2019-11-11 22:46:07'),
(329, 'MATINSPINN( Matin Spinning Mills Ltd. )', 21, 1, '2019-11-11 22:46:31', '2019-11-11 22:46:31'),
(330, 'METROSPIN( Metro Spinning Ltd. )', 21, 1, '2019-11-11 22:46:58', '2019-11-11 22:46:58'),
(331, 'MHSML( Mozaffar Hossain Spinning Mills Ltd. )', 21, 1, '2019-11-11 22:49:22', '2019-11-11 22:49:22'),
(332, 'MITHUNKNIT( Mithun Knitting and Dyeing Ltd. )', 21, 1, '2019-11-11 22:49:56', '2019-11-11 22:49:56'),
(333, 'MLDYEING( M.L. Dyeing Limited )', 21, 1, '2019-11-11 22:51:52', '2019-11-11 22:51:52'),
(334, 'NEWLINE( New Line Clothings Limited )', 21, 1, '2019-11-11 22:52:17', '2019-11-11 22:52:17'),
(335, 'NURANI( Nurani Dyeing & Sweater Limited )', 21, 1, '2019-11-11 22:52:51', '2019-11-11 22:52:51'),
(336, 'PDL( Pacific Denims Limited )', 21, 1, '2019-11-11 22:53:49', '2019-11-11 22:53:49'),
(337, 'PRIMETEX( Prime Textile Spinning Mills Limited )', 21, 1, '2019-11-11 22:54:18', '2019-11-11 22:54:18'),
(338, 'PTL( Paramount Textile Limited )', 21, 1, '2019-11-11 22:54:39', '2019-11-11 22:54:39'),
(339, 'QUEENSOUTH( Queen South Textile Mills Limited )', 21, 1, '2019-11-11 22:55:02', '2019-11-11 22:55:02'),
(340, 'RAHIMTEXT( Rahim Textile Mills Ltd. )', 21, 1, '2019-11-11 22:57:10', '2019-11-11 22:57:10'),
(341, 'REGENTTEX( Regent Textile Mills Limited )', 21, 1, '2019-11-11 23:00:05', '2019-11-11 23:00:05'),
(342, 'RNSPIN( R.N. Spinning Mills Limited )', 21, 1, '2019-11-11 23:03:03', '2019-11-11 23:03:03'),
(343, 'SAFKOSPINN( Safko Spinnings Mills Ltd. )', 21, 1, '2019-11-11 23:03:59', '2019-11-11 23:03:59'),
(344, 'SAIHAMCOT( Saiham Cotton Mills Limited )', 21, 1, '2019-11-11 23:20:35', '2019-11-11 23:20:35'),
(345, 'SAIHAMTEX( Saiham Textile Mills Ltd. )', 21, 1, '2019-11-11 23:23:25', '2019-11-11 23:23:25'),
(346, 'SHASHADNIM( Shasha Denims Limited )', 21, 1, '2019-11-11 23:26:41', '2019-11-11 23:26:41'),
(347, 'SHEPHERD( Shepherd Industries Limited )', 21, 1, '2019-11-11 23:27:21', '2019-11-11 23:27:21'),
(348, 'SIMTEX( Simtex Industries Limited )', 21, 1, '2019-11-11 23:27:52', '2019-11-11 23:27:52'),
(349, 'SONARGAON( Sonargaon Textiles Ltd. )', 21, 1, '2019-11-11 23:28:42', '2019-11-11 23:28:42'),
(350, 'SQUARETEXT( Square Textile Ltd. )', 21, 1, '2019-11-11 23:29:35', '2019-11-11 23:29:35'),
(351, 'STYLECRAFT( Stylecraft Limited )', 21, 1, '2019-11-11 23:30:52', '2019-11-11 23:30:52'),
(352, 'TALLUSPIN( Tallu Spinning Mills Ltd. )', 21, 1, '2019-11-11 23:31:54', '2019-11-11 23:31:54'),
(353, 'TOSRIFA( Tosrifa Industries Limited )', 21, 1, '2019-11-11 23:32:33', '2019-11-11 23:32:33'),
(354, 'TUNGHAI( Tung Hai Knitting & Dyeing Limited )', 21, 1, '2019-11-11 23:33:04', '2019-11-11 23:33:04'),
(355, 'VFSTDL( VFS Thread Dyeing Limited )', 21, 1, '2019-11-11 23:33:33', '2019-11-11 23:33:33'),
(356, 'ZAHEENSPIN( Zaheen Spinning Limited )', 21, 1, '2019-11-11 23:34:06', '2019-11-11 23:34:06'),
(357, 'ZAHINTEX( Zahintex Industries Limited )', 21, 1, '2019-11-11 23:34:31', '2019-11-11 23:34:31'),
(358, 'RINGSHINE( Ring Shine Textiles Limited )', 21, 1, '2019-12-17 21:38:04', '2019-12-17 21:38:04'),
(359, 'SONALIPAPR ( Sonali Paper & Board Mills Ltd. )', 16, 1, '2020-08-23 03:44:34', '2020-08-23 03:44:34'),
(360, 'EIL ( Express Insurance Limited )', 12, 1, '2020-08-27 14:30:02', '2020-08-27 14:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `user_id`, `subject`, `admin_note`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'cement problem', 'THank you for your complain.\r\nWe will solve the problem as soon as possible.', 1, '2019-11-02 16:43:18', '2019-11-02 16:44:33'),
(2, 1, 'rsthretjhrtlhh thrt', 'WE SOLVE THE MATTER EARLY', 1, '2019-11-03 21:57:29', '2019-11-03 22:07:59'),
(4, 2, 'dgdfgdf', 'rgrg', 1, '2019-11-07 17:03:37', '2019-11-07 17:03:55'),
(5, 9, 'need cancelling option', 'Thanks your Opinion.', 1, '2019-11-19 04:23:15', '2019-11-19 17:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `name`, `phone`, `email`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad zitu', '01925140334', 'shopuser@gmail.com', 'TJTJG GTRG', 0, '2019-11-03 22:15:15', '2019-11-03 22:15:15'),
(2, 'Abu Kawsar', '01816292796', 'nabihakawsar@gmail.com', 'Please reset my phone number', 0, '2019-11-19 02:26:24', '2019-11-19 02:26:24'),
(3, 'Nazrul Islam', '01710914498,01937991787', 'nazrul.ikon@gmail.com', 'Best Wishes', 0, '2019-11-19 02:44:50', '2019-11-19 02:44:50'),
(4, 'Chelsey Wiza', '720-182-7851 x638', 'duffyfour@gmail.com', 'moratorium', 0, '2020-01-11 05:31:52', '2020-01-11 05:31:52'),
(5, 'Dr. Jamey Beatty', '654.271.0226 x0784', 'tsholt@charter.net', 'initiative', 0, '2020-01-14 01:05:14', '2020-01-14 01:05:14'),
(6, 'Abigayle Harber', '006-283-4417', 'brancky3@gmail.com', 'Knolls', 0, '2020-01-14 04:04:13', '2020-01-14 04:04:13'),
(7, 'Nathen White', '(423) 530-4121', 'roger.delgado@comcast.com', 'fresh-thinking', 0, '2020-01-18 05:33:37', '2020-01-18 05:33:37'),
(8, 'Michaela Bernhard', '1-368-148-6182 x030', 'welchl111@aol.com', 'Sleek Granite Cheese', 0, '2020-01-20 08:54:53', '2020-01-20 08:54:53'),
(9, 'Beverly Auer V', '(142) 159-1810 x85021', 'ristyb1@yahoo.com', 'connect', 0, '2020-01-20 22:25:20', '2020-01-20 22:25:20'),
(10, 'Ford Funk', '1-341-041-1070 x90055', 'avi5656@bezeqint.net', 'Shoes', 0, '2020-01-24 08:34:43', '2020-01-24 08:34:43'),
(11, 'Adrien Schoen', '883.657.6404', 'dalealanthomas@yahoo.com', 'action-items', 0, '2020-01-25 03:46:03', '2020-01-25 03:46:03'),
(12, 'Abner Considine', '274.095.7728', 'jboggs06@gmail.com', 'Computers', 0, '2020-01-27 12:29:25', '2020-01-27 12:29:25'),
(13, 'Dr. Nichole Tromp', '1-875-255-1807', 'amp3marie@yahoo.com', 'Front-line', 0, '2020-01-27 14:47:50', '2020-01-27 14:47:50'),
(14, 'Bridget Sipes', '481-399-8723 x41586', 'dee.selway@yahoo.co.uk', 'Money Market Account', 0, '2020-01-28 06:21:29', '2020-01-28 06:21:29'),
(15, 'Maryjane Walter III', '317-131-3333 x5645', '4over@franklin-flare.com', 'plum', 0, '2020-02-04 12:27:58', '2020-02-04 12:27:58'),
(16, 'Imani Gaylord', '(977) 307-6414', 'shyampotdar@yahoo.com', 'Investment Account', 0, '2020-02-05 17:49:57', '2020-02-05 17:49:57'),
(17, 'Reina Gottlieb', '543-317-9511', 'admin@primebuchholz.com', 'International', 0, '2020-02-10 22:43:59', '2020-02-10 22:43:59'),
(18, 'Miss Evangeline Langworth', '1-601-868-0581', 'elanceze15@orange.fr', 'JSON', 0, '2020-02-17 15:44:19', '2020-02-17 15:44:19'),
(19, 'Ada O\'Conner IV', '1-675-983-3959 x86367', 'sbairi@iconma.com', 'Berkshire', 0, '2020-02-18 10:37:41', '2020-02-18 10:37:41'),
(20, 'Roslyn Lemke', '(976) 990-5438 x256', 'breezzy1214@aim.com', 'override', 0, '2020-02-19 07:33:23', '2020-02-19 07:33:23'),
(21, 'Reina Kilback', '(141) 836-9267 x3073', 'al.smith@synterratech.com', 'calculating', 0, '2020-02-22 08:34:06', '2020-02-22 08:34:06'),
(22, 'Abigayle Cartwright', '783.232.9707', 'doubleplay@embarqmail.com', 'neural', 0, '2020-02-26 11:57:52', '2020-02-26 11:57:52'),
(23, 'Martine Bashirian', '388.495.1220', 'booroola@bigpond.com', 'Granite', 0, '2020-02-27 12:56:59', '2020-02-27 12:56:59'),
(24, 'Eden Runte', '1-205-023-2688', 'samhrdng@netins.net', 'Small Wooden Computer', 0, '2020-02-28 14:10:29', '2020-02-28 14:10:29'),
(25, 'Nolan Sipes', '(463) 414-6457 x09008', 'support@proctoru.com', 'Jewelery', 0, '2020-03-13 05:22:02', '2020-03-13 05:22:02'),
(26, 'Mr. Velva Quigley', '473.608.1521 x1347', 'bulkbuddy1@gmail.com', 'Inlet', 0, '2020-03-19 08:52:46', '2020-03-19 08:52:46'),
(27, 'Dylan Rogahn', '330.516.7241', 'adurham64@yahoo.com', 'deliverables', 0, '2020-03-25 06:41:49', '2020-03-25 06:41:49'),
(28, 'Jessica Jaskolski', '456-563-8336 x9367', 'highlash1@gmail.com', 'Steel', 0, '2020-03-25 08:11:23', '2020-03-25 08:11:23'),
(29, 'Sunny Murray', '(596) 008-9877', 'amyhlex@gmail.com', 'ivory', 0, '2020-03-28 11:58:31', '2020-03-28 11:58:31'),
(30, 'Katlynn Roob', '231.568.1129', 'scotttkoss@gmail.com', 'full-range', 0, '2020-03-28 17:10:42', '2020-03-28 17:10:42'),
(31, 'Ansley Koss V', '(801) 640-4388', 'sagar.shah08@gmail.com', 'Dominica', 0, '2020-04-01 04:29:00', '2020-04-01 04:29:00'),
(32, 'Sheldon Mills PhD', '469.985.2522', 'jzmek777@gmail.com', 'Haiti', 0, '2020-04-01 23:42:19', '2020-04-01 23:42:19'),
(33, 'Carroll Fahey', '(849) 805-3255', 'loverlingly@yahoo.com', 'Wall', 0, '2020-04-08 04:43:24', '2020-04-08 04:43:24'),
(34, 'Lola Hettinger', '(687) 795-2781', 'bdmouse@gmail.com', 'Checking Account', 0, '2020-04-09 02:38:02', '2020-04-09 02:38:02'),
(35, 'Elsa Grady', '(701) 069-5103 x84293', 'rdora30@aol.com', 'open-source', 0, '2020-04-10 03:26:15', '2020-04-10 03:26:15'),
(36, 'Sylvester Kuphal', '905-663-1946', 'kunju_jeby@yahoo.com', 'grey', 0, '2020-04-13 19:54:12', '2020-04-13 19:54:12'),
(37, 'Ms. Hunter Dietrich', '609.186.9469 x030', 'eckhoff.matthew@gmail.com', 'architectures', 0, '2020-04-18 20:24:00', '2020-04-18 20:24:00'),
(38, 'Lilliana Grant', '(103) 802-9719', 'fizasalar@gmail.com', 'Handcrafted', 0, '2020-04-20 18:15:22', '2020-04-20 18:15:22'),
(39, 'Dr. Della McGlynn', '862-471-2133', 'brmadman@gmail.com', 'Interactions', 0, '2020-04-26 00:12:58', '2020-04-26 00:12:58'),
(40, 'Cara Emmerich', '(278) 318-4545 x906', 'nekiab33@gmail.com', 'Generic Granite Computer', 0, '2020-04-29 03:17:20', '2020-04-29 03:17:20'),
(41, 'Dr. Asha Abernathy', '10280582884', 'xaiyang042085@gmail.com', 'analyzing', 0, '2020-05-08 07:04:27', '2020-05-08 07:04:27'),
(42, 'Elva Fritsch', '10785677197', 'scottparrish3k@gmail.com', 'Sierra Leone', 0, '2020-05-12 00:39:57', '2020-05-12 00:39:57'),
(43, 'Libbie Cummerata', '12685109966', 'kfox@foxandbank.com', 'Health', 0, '2020-05-14 11:39:34', '2020-05-14 11:39:34'),
(44, 'Rod Wolf Jr.', '18407810215', 'crstyrs63@gmail.com', 'hierarchy', 0, '2020-05-14 17:15:04', '2020-05-14 17:15:04'),
(45, 'Baylee Zemlak', '18136298984', '1297129879@qq.com', 'bluetooth', 0, '2020-05-16 08:14:45', '2020-05-16 08:14:45'),
(46, 'Mr. Carli Mraz', '14035522120', 'aesmed3@hotmail.com', 'Mexico', 0, '2020-05-19 00:47:45', '2020-05-19 00:47:45'),
(47, 'Trenton Graham', '16177896830', 'ccrisp72@yahoo.com', 'copy', 0, '2020-05-19 14:18:23', '2020-05-19 14:18:23'),
(48, 'Lupe Bruen', '16390225468', 'kohlheidi732@gmail.com', 'Incredible', 0, '2020-05-21 09:27:57', '2020-05-21 09:27:57'),
(49, 'Eliane Schmeler', '12984847687', 'clayps@gmail.com', 'Locks', 0, '2020-05-27 09:20:48', '2020-05-27 09:20:48'),
(50, 'Kris Wiza', '13802717078', 'cbuchanan10@hotmail.co.uk', 'Berkshire', 0, '2020-05-27 15:20:02', '2020-05-27 15:20:02'),
(51, 'Clark Krajcik', '16836191496', 'kohlheidi732@gmail.com', 'Gardens', 0, '2020-05-31 02:04:13', '2020-05-31 02:04:13'),
(52, 'Zion Sporer', '12320309717', 'bluesprite_83@hotmail.com', 'orchestrate', 0, '2020-05-31 08:13:37', '2020-05-31 08:13:37'),
(53, 'Hassie Kulas', '11201630337', 'matt@synstall.com', 'intuitive', 0, '2020-05-31 14:12:50', '2020-05-31 14:12:50'),
(54, 'Donald Crooks', '18369100640', 'chichilagringa77@gmail.com', 'synthesize', 0, '2020-05-31 16:13:15', '2020-05-31 16:13:15'),
(55, 'Dewayne Wiegand', '17742988891', 'helenackerley@hotmail.co.uk', 'Soft', 0, '2020-06-01 01:48:00', '2020-06-01 01:48:00'),
(56, 'Kassandra Abshire', '15243342965', 'jonas.schaefer1909@t-online.de', 'real-time', 0, '2020-06-02 02:45:15', '2020-06-02 02:45:15'),
(57, 'Janelle Osinski', '12905258831', 'artwiggins@bellsouth.net', 'mindshare', 0, '2020-06-04 09:57:17', '2020-06-04 09:57:17'),
(58, 'Keith Gutkowski', '19477672635', 'joannamills8@gmail.com', 'encoding', 0, '2020-06-20 23:38:52', '2020-06-20 23:38:52'),
(59, 'Juliana Stehr', '10811917022', 'marc.doerrbaum25@gmail.com', 'Colombia', 0, '2020-06-23 19:50:55', '2020-06-23 19:50:55'),
(60, 'Viola O\'Hara', '14040647553', 'idshaar56@gmail.com', '1080p', 0, '2020-06-25 18:57:19', '2020-06-25 18:57:19'),
(61, 'Flavio Mitchell', '16719572436', 'sykoram053@gmail.com', 'invoice', 0, '2020-06-28 22:23:53', '2020-06-28 22:23:53'),
(62, 'Don Morissette V', '13976807152', 'alexisaac@gmail.com', 'mint green', 0, '2020-07-01 09:45:24', '2020-07-01 09:45:24'),
(63, 'Breana Pagac I', '10513654282', 'joeleee48@gmail.com', 'Haven', 0, '2020-07-02 06:25:02', '2020-07-02 06:25:02'),
(64, 'Franz Hills', '13545670602', '3477804348@att.com', 'Ergonomic Wooden Chicken', 0, '2020-07-10 06:05:45', '2020-07-10 06:05:45'),
(65, 'Jaylan McKenzie', '12638153799', 'customercare@druglessdoctor.com', 'Fundamental', 0, '2020-07-15 12:10:21', '2020-07-15 12:10:21'),
(66, 'Ms. Blair Rogahn', '17136810224', 'melinda@hughmacdonaldconstruction.com', 'bypass', 0, '2020-07-23 05:25:27', '2020-07-23 05:25:27'),
(67, 'Nickolas Shanahan V', '14903550773', 'gryatfamily@gmail.com', 'Ecuador', 0, '2020-08-01 06:28:00', '2020-08-01 06:28:00'),
(68, 'Ms. Kayden Walter', '11230657746', 'derek@kegsmiths.com', 'Enhanced', 0, '2020-08-02 05:38:23', '2020-08-02 05:38:23'),
(69, 'Kerri Martin', '(503) 380-6300', 'martinshow@gmail.com', 'It looks like you\'ve misspelled the word \"elit\" on your website.  I thought you would like to know :).  Silly mistakes can ruin your site\'s credibility.  I\'ve used a tool called SpellScan.com in the past to keep mistakes off of my website.\n\n-Kerri', 0, '2020-08-03 21:43:37', '2020-08-03 21:43:37'),
(70, 'Trevion Nienow', '19721502779', 'ron.brian.heinlein@rogers.com', 'streamline', 0, '2020-08-12 11:47:40', '2020-08-12 11:47:40'),
(71, 'Junior Conn', '16891956605', 'y.swaans@qmulus.nl', 'Awesome Soft Fish', 0, '2020-08-20 10:48:19', '2020-08-20 10:48:19'),
(72, 'Miss Beatrice Koepp', '11298730219', 'connie0528@aol.com', 'Centralized', 0, '2020-08-23 02:46:34', '2020-08-23 02:46:34'),
(73, 'Miss Hertha Muller', '19210085172', 'averycostilow50@icloud.com', 'copying', 0, '2020-08-30 15:41:11', '2020-08-30 15:41:11'),
(74, 'Broderick Quigley', '19277781805', 'jessikamazure@aol.com', 'Cambridgeshire', 0, '2020-08-31 13:30:36', '2020-08-31 13:30:36'),
(75, 'Breana Osinski', '19218739356', 'bjbeutler@comcast.net', 'Colorado', 0, '2020-09-04 07:23:36', '2020-09-04 07:23:36'),
(76, 'Kristopher Gerhold', '15836226845', 'cut5403@gmail.com', 'clear-thinking', 0, '2020-09-06 02:06:16', '2020-09-06 02:06:16'),
(77, 'Davion Lockman', '18754634485', 'patrussell@russellconveyor.com', 'Kuwaiti Dinar', 0, '2020-09-12 02:34:03', '2020-09-12 02:34:03'),
(78, 'Dr. Zita West', '12448110786', '6789108407@txt.att.net', 'integrate', 0, '2020-09-13 12:52:20', '2020-09-13 12:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE `generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generals`
--

INSERT INTO `generals` (`id`, `site_title`, `logo`, `icon`, `address`, `email_1`, `email_2`, `phone_1`, `phone_2`, `copyright`, `copyright_link`, `facebook`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'CSICBD', '1572855835casic_5__upppppp-01.png', '1571906617cs-01_(1).png', '3566/A, 1st Floor, Sk Mujib Road, Badamtoli, Chittagong.', 'ctgsukkur112@gmail.com', NULL, '01817076206', NULL, '©2019 All Rights Reserved - Designed and Developed by <a target=\"_blank\" href=\"https://www.changetechbd.com\">Changetech BD</a>', NULL, 'https://www.facebook.com/groups/647707372403529/?ref=group_header', NULL, NULL, '2019-10-24 08:37:11', '2019-11-25 19:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_20_090906_create_companies_table', 2),
(5, '2019_10_20_111020_create_categories_table', 3),
(6, '2019_10_21_111438_create_questions_table', 4),
(7, '2019_10_22_155454_create_complains_table', 5),
(8, '2019_10_23_162933_create_sliders_table', 6),
(9, '2019_10_23_181022_create_aboutuses_table', 7),
(10, '2019_10_24_121525_create_generals_table', 8),
(12, '2019_10_26_123922_create_office_addresses_table', 9),
(13, '2019_10_26_135202_create_contactuses_table', 10),
(14, '2019_10_26_151812_create_admins_table', 11),
(15, '2019_11_04_163327_create_privacies_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `office_addresses`
--

CREATE TABLE `office_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_addresses`
--

INSERT INTO `office_addresses` (`id`, `title`, `Street`, `city`, `zip_code`, `facebook`, `twitter`, `linkedin`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Section 1', '3566/A, Sheikh Mujib Road, Badamtali, Agrabad.', 'Chittagong', '4100', '#https://www.facebook.com/groups/647707372403529/?ref=group_header', NULL, NULL, 1, '2019-11-02 20:10:32', '2019-11-18 00:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mohammad_shariful@yahoo.com', '$2y$10$KyrsJwt7i4o2gX1SOgLD4eMIXf/pZeCAiMJmQbwHcB8FxraZukdzy', '2019-11-19 04:06:13'),
('nabihakawsar@gmail.com', '$2y$10$fI6HtEtUprF0maB.wrZ5vuB32tLEf0uYk0cKPPIr7E.N.JNNG9byK', '2019-11-19 04:17:19'),
('litoncse89@gmail.com', '$2y$10$SRPQN2E8J5.Y0btyuLABIuBPH8ASB6Riff3rnwvF4l23PY0P12T32', '2020-07-09 03:21:19'),
('bivash.barua@outlook.com', '$2y$10$nDHsUnNGrq16oPQ8ESv4eeWzheZrhT9A7IR8N6Ik4jo/fdlTecPaS', '2020-08-17 22:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<h2><strong>1.&nbsp;Terms of Use</strong>&nbsp;</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► Sign Up এ Click করে প্রয়োজনীয় তথ্য দিয়ে Sign Up করুন&nbsp;(১ বার করলে হবে)।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>►&nbsp;Sign In&nbsp;এ Click&nbsp;করে আপনার Mobile No &amp; Password দিয়ে আপনার আইডিতে প্রবেশ করুন (Remember Me তে টিক চিহ্ন দিয়ে দিন তাহলে Login এর&nbsp;সময় আর বার বার Password দিতে হবে না&nbsp;)।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► এরপর বামপাশে শেয়ার জিজ্ঞাসাতে&nbsp;Click&nbsp;করার পর উপরে Add New&nbsp;শেয়ার জিজ্ঞাসাতে&nbsp; Click&nbsp;করুন।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>► এখন আপনি যে সেক্টর এর&nbsp;শেয়ার সম্পকে&acute; জানতে চাচ্ছেন ওই&nbsp;সেক্টর&nbsp;Click&nbsp;করার পর Company Name এ&nbsp;Click করে আপনার শেয়ারটি সিলেক্ট করুন এবং এর লাষ্ট 4 Digit&nbsp;দিয়ে Submit&nbsp;করুন।</p>\r\n\r\n<p>&nbsp;</p>', '2019-11-04 23:35:44', '2019-11-25 22:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `transection_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` int(11) DEFAULT NULL,
  `admin_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `company_id`, `category_id`, `transection_id`, `user_note`, `answer`, `admin_note`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 1, 'asfdgg#fj12', NULL, 1, NULL, 1, '2019-11-02 16:39:23', '2019-11-02 16:41:44'),
(2, 3, 5, 2, '1234', NULL, 0, NULL, 1, '2019-11-02 23:33:17', '2019-11-03 22:04:57'),
(3, 1, 5, 2, 'asdff12344', NULL, 0, NULL, 1, '2019-11-03 21:50:40', '2019-11-03 22:04:57'),
(4, 1, 5, 3, 'asdfg1234', NULL, 0, NULL, 1, '2019-11-03 21:51:49', '2019-11-03 22:04:57'),
(5, 1, 5, 1, 'fghfghf', NULL, 0, NULL, 1, '2019-11-03 21:52:22', '2019-11-03 22:04:57'),
(6, 1, 6, 2, 'qwert1234', NULL, 0, NULL, 1, '2019-11-03 21:54:10', '2019-11-03 22:04:57'),
(7, 1, 3, 2, 'ghghrthrt123', NULL, 0, NULL, 1, '2019-11-03 21:55:10', '2019-11-03 22:04:57'),
(8, 1, 7, 5, 'DGFHGH123233', NULL, 1, 'THANK YOU', 1, '2019-11-03 22:03:06', '2019-11-03 22:04:57'),
(9, 4, 8, 2, 'iodiobd', NULL, 0, NULL, 1, '2019-11-04 19:52:20', '2019-11-05 20:44:27'),
(10, 2, 32, 6, 'hatrherter123', NULL, 0, NULL, 1, '2019-11-04 22:25:01', '2019-11-05 20:44:27'),
(11, 2, 46, 6, 'gjkdfgjvb123434', NULL, 0, NULL, 1, '2019-11-05 20:35:44', '2019-11-05 20:44:27'),
(12, 2, 46, 6, 'thrthrththgr', NULL, 0, NULL, 1, '2019-11-05 20:37:50', '2019-11-05 20:44:27'),
(13, 2, 46, 5, 'gjkdfgjvb123434', NULL, 1, NULL, 1, '2019-11-05 20:43:23', '2019-11-05 20:44:27'),
(17, 4, 50, 8, 'jbu989238n', 'bov', 0, NULL, 1, '2019-11-05 21:21:08', '2019-11-07 17:03:13'),
(19, 2, 8, 6, 'fdgdrfg', NULL, 1, NULL, 1, '2019-11-06 17:42:25', '2019-11-07 17:03:13'),
(20, 2, 8, 6, 'thrthrththgr', NULL, 1, NULL, 1, '2019-11-07 17:02:39', '2019-11-07 17:03:13'),
(21, 1, 301, 17, '1234', NULL, 1, NULL, 1, '2019-11-11 23:36:15', '2019-11-11 23:49:47'),
(22, 1, 46, 8, '4431', 'Navana Cng ta kmn hobe?', NULL, 'Same Ques........', 2, '2019-11-11 23:37:27', '2019-11-19 04:42:51'),
(23, 1, 305, 21, 'ffsdffgk;', NULL, 0, NULL, 1, '2019-11-11 23:38:07', '2019-11-11 23:49:47'),
(24, 1, 88, 9, '1357', NULL, 0, NULL, 1, '2019-11-13 23:07:16', '2019-11-13 23:59:25'),
(25, 1, 193, 5, '5326', NULL, 0, NULL, 1, '2019-11-13 23:11:03', '2019-11-13 23:59:25'),
(26, 1, 317, 21, 'ggdhhff', NULL, 0, NULL, 1, '2019-11-13 23:11:46', '2019-11-13 23:59:25'),
(27, 1, 114, 10, 'hfghv', NULL, 0, NULL, 1, '2019-11-13 23:12:21', '2019-11-13 23:59:25'),
(28, 1, 13, 6, 'dchhvvb', NULL, 0, NULL, 1, '2019-11-13 23:13:21', '2019-11-13 23:59:25'),
(29, 1, 10, 6, 'dhjkg', NULL, 0, NULL, 1, '2019-11-13 23:17:32', '2019-11-13 23:59:25'),
(30, 5, 223, 19, '15488285', NULL, 0, NULL, 1, '2019-11-13 23:53:42', '2019-11-13 23:59:25'),
(31, 5, 30, 6, '856974', NULL, 1, NULL, 1, '2019-11-13 23:54:13', '2019-11-13 23:59:25'),
(32, 3, 70, 8, 'YHBYJMI8K', NULL, 0, NULL, 1, '2019-11-13 23:56:36', '2019-11-13 23:59:25'),
(33, 3, 185, 12, '2299592', NULL, 1, NULL, 1, '2019-11-13 23:58:00', '2019-11-13 23:59:25'),
(34, 5, 214, 16, '25896455', NULL, 1, 'Careful Eps Up Coming', 1, '2019-11-14 02:05:14', '2019-11-14 23:04:23'),
(35, 6, 156, 12, '1234', NULL, 1, NULL, 1, '2019-11-18 04:01:12', '2019-11-18 18:51:33'),
(36, 9, 265, 15, '12', 'is it entry time?', 1, NULL, 1, '2019-11-19 04:11:11', '2019-11-19 04:46:20'),
(37, 9, 159, 12, '12', 'safe entry?', 1, NULL, 1, '2019-11-19 04:13:12', '2019-11-19 04:46:20'),
(38, 9, 169, 12, '12', 'safe entry? and range to buy?', 1, NULL, 1, '2019-11-19 04:14:27', '2019-11-19 04:46:20'),
(39, 9, 169, 12, '12', 'safe entry? and range to buy?', 1, NULL, 1, '2019-11-19 04:14:30', '2019-11-19 04:46:20'),
(40, 11, 187, 12, '1234', 'Want to buy 14 to 14.80\r\nhope this stock will play before December or 1st weak of December', 0, NULL, 1, '2019-11-19 04:23:33', '2019-11-19 04:46:20'),
(41, 11, 156, 12, '1235', 'i think this stock will play tomorrow\r\nwhat  do you think ?', 1, NULL, 1, '2019-11-19 04:25:14', '2019-11-19 04:46:20'),
(42, 11, 169, 12, '1222', 'what do you think ?\r\nhope next day will play', 1, NULL, 1, '2019-11-19 04:26:13', '2019-11-19 04:46:20'),
(43, 11, 265, 15, '4311', 'i think good position, what do you think? \r\nwhat to take posation', 1, NULL, 1, '2019-11-19 04:27:36', '2019-11-19 04:46:20'),
(44, 10, 265, 15, '1', NULL, 1, NULL, 1, '2019-11-19 15:22:11', '2019-11-19 17:52:59'),
(45, 11, 159, 12, '2222', 'Hold korbo ?', 1, NULL, 1, '2019-11-19 18:11:55', '2019-11-20 00:14:36'),
(46, 2, 8, 6, 'thrthrththgr', NULL, 1, 'thank you for your question.', 1, '2019-11-24 23:47:12', '2019-11-24 23:48:01'),
(48, 2, 2, 7, 'gjkdfgjvb123434', NULL, 1, 'Looking', 1, '2019-11-25 23:36:29', '2019-11-25 23:46:51'),
(49, 14, 265, 15, '1234', 'Can i buy this share?', 1, NULL, 1, '2019-12-23 04:13:22', '2019-12-29 21:56:03'),
(50, 14, 157, 12, '2234', 'Can i buy this share on current market price?', 1, NULL, 1, '2019-12-23 04:15:11', '2019-12-29 21:56:03'),
(51, 14, 265, 15, 'slgf', 'Can i buy this share?', 1, NULL, 1, '2019-12-27 00:07:09', '2019-12-29 21:56:03'),
(52, 1, 307, 21, '1334', 'kmn hbe?', 1, NULL, 1, '2019-12-29 21:53:54', '2019-12-29 21:56:03'),
(53, 14, 67, 8, 'staf', 'Can i buy this share at current market price ?', 0, NULL, 1, '2020-01-01 22:10:45', '2020-02-25 04:20:37'),
(54, 11, 231, 22, '6666', 'it\'s break out, will i take position?', 1, NULL, 1, '2020-01-16 22:02:52', '2020-02-25 04:20:37'),
(55, 18, 12, 6, '123', NULL, 1, NULL, 1, '2020-08-22 21:53:17', '2020-08-22 22:15:45'),
(56, 18, 39, 7, '123', NULL, 1, NULL, 1, '2020-08-22 21:54:03', '2020-08-22 22:15:45'),
(57, 18, 303, 21, '123', NULL, 1, NULL, 1, '2020-08-22 21:54:31', '2020-08-22 22:15:45'),
(58, 18, 300, 17, '123', NULL, 1, NULL, 1, '2020-08-22 21:54:54', '2020-08-22 22:15:45'),
(59, 18, 194, 5, '123', NULL, 1, NULL, 1, '2020-08-22 21:55:21', '2020-08-22 22:15:45'),
(60, 18, 28, 6, '123', NULL, 0, 'Trade Hours  No Answer', 1, '2020-08-24 16:02:20', '2020-08-24 17:01:07'),
(61, 18, 45, 2, '123', 'what is your opinion', 0, NULL, 1, '2020-08-24 16:29:34', '2020-08-24 17:01:07'),
(62, 18, 49, 8, '123', 'need decision', 0, NULL, 1, '2020-08-24 16:48:31', '2020-08-24 17:01:07'),
(63, 18, 226, 19, '123', 'sir need your suggestion', 1, NULL, 1, '2020-08-24 17:12:51', '2020-08-27 14:27:49'),
(64, 18, 41, 7, '123', 'sir', 0, NULL, 1, '2020-08-24 17:21:07', '2020-08-27 14:27:49'),
(65, 18, 265, 15, '123', NULL, 1, NULL, 1, '2020-08-24 17:22:30', '2020-08-27 14:27:49'),
(66, 18, 109, 10, '123', 'কি নেয়া যায়', 1, NULL, 1, '2020-08-25 02:10:06', '2020-08-27 14:27:49'),
(67, 18, 221, 19, '00000', 'কি নেয়া যায়', 1, NULL, 1, '2020-08-25 02:11:16', '2020-08-27 14:27:49'),
(68, 18, 65, 8, 'কি নেয়া যায়', 'কি নেয়া যায়', 1, NULL, 1, '2020-08-25 02:13:20', '2020-08-27 14:27:49'),
(69, 18, 120, 10, 'কি নেয়া যায়?', 'কি নেয়া যায়', 1, NULL, 1, '2020-08-25 04:16:54', '2020-08-27 14:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `details`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Strengths of Successful Businesses left', 'Randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anembarrassing hidden in the middle of text.', '1572067585slider01.jpg', 1, '2019-10-26 05:26:25', '2019-10-26 05:59:11'),
(2, 'Strengths of Successful Businesses', 'Randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anembarrassing hidden in the middle of text.', '1572067608slider02.jpg', 1, '2019-10-26 05:26:48', '2019-10-26 05:26:48'),
(3, 'Strengths of Successful Businesses', 'Randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anembarrassing hidden in the middle of text.', '1572067623slider03.jpg', 1, '2019-10-26 05:27:03', '2019-10-26 05:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `phone`, `email`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rahim Ullah', '01812328124', 'litoncse89@gmail.com', 'Chittagong, 4100', NULL, '$2y$10$1k5/XdDz9aCxgqI6C//uguzBef3/o4cvFoYM14pn7xQuWaoBNPEIe', 'VPXhd9nzYmhzGc9OetKvV88B1mU9ndVNgq3yepBgUIllCyIO0j6F93YO5mOw', '2019-11-02 16:02:24', '2019-11-02 16:02:24'),
(2, 1, 'Muahammad zitu', '01838669896', 'zitu1100@gmail.com', 'agrabad', NULL, '$2y$10$CqLpmKtI5DNqX/8wh54x7OQvynYK8yPvzEifI7xuH/RwQv0F1BX82', NULL, '2019-11-02 16:07:25', '2019-11-02 16:07:25'),
(3, 1, 'Tipu Sarkar', '01877555401', 'mmhoque65@yahoo.com', 'Chittagong,4100', NULL, '$2y$10$u1R2sfhhWyZBBVV8n7RU4eXb2zjGhsDynOxFIEn/r2uR6u87JblUG', 'iJXOtpbaxjXeLY7Cg5GMr2QvX2mysYEWARincOdCWIb6kFTgAplY9lASscfs', '2019-11-02 23:30:10', '2019-11-02 23:30:10'),
(4, 1, 'Md Sukkur Ali', '01624899516', 'ctgsukkur112@gmail.com', 'ziobciobn', NULL, '$2y$10$FY3f2bh7tJLktTz3X5v53OYBVXpnDiVlaY2p/1cTPOWgfryI51C6y', NULL, '2019-11-04 16:43:38', '2019-11-04 16:43:38'),
(5, 1, 'Md. Hasan', '01822890492', 'mdhasan17890@yahoo.com', 'Ctg.', NULL, '$2y$10$7ZvNLPQIalN.oAUNJA3Swu2SHwliDLFMrgGP2IUgy9uN7TxuOH/Cu', NULL, '2019-11-13 23:51:36', '2019-11-13 23:51:36'),
(6, 1, 'Anzir Arafat (Rupom)', '01914301474', 'maps7667@gmail.com', 'Mirpur 2, Dhaka 1216', NULL, '$2y$10$hnQA0Bz1veKQWfvME.3yPuI3OO.Yh/muAt8XeUGygDkqxUD1Mp7pu', 'kUBMZ6M5NEMxBzygI8G6qtyLlzHK0WIkFHnsdSzsWhtlfNX97hMi4NduY3Zi', '2019-11-18 03:55:20', '2019-11-18 03:55:20'),
(7, 1, 'Md. Abu kawsar', '01816292799', 'nabihakawsar@gmail.com', '49/5/F2 west Razabazar, Dhaka', NULL, '$2y$10$yoZ/984fnPF3cWPpAWAPx.eQaTJmfxUQIqqB9jAQ.j9qUXhVY8Cyu', NULL, '2019-11-19 02:04:29', '2019-11-19 02:04:29'),
(8, 1, 'md.shariful islam', '01617576060', 'mohammad_shariful@yahoo.com', 'Dhaka-', NULL, '$2y$10$LcHYUg0Gy5tCmr2vdoSKuOsaxzc6xBMuKcEN1UcXnnUjyIYobHDXi', NULL, '2019-11-19 04:00:57', '2019-11-19 04:00:57'),
(9, 1, 'md.shariful islam', '01617576060', 'md2shariful@gmail.com', 'Dhaka-', NULL, '$2y$10$lmhzPhYHqkf/AMQRSgbE4Ob8iCQPWyHzWTO.q8PYXDRne2BIT7py2', NULL, '2019-11-19 04:09:38', '2019-11-19 04:15:03'),
(10, 1, 'Nazrul Islam', '01710914498', 'nazrul.ikon@gmail.com', 'House-400,Road-10,Block-B,Chandgaon R/A, P.O - Chandgaon-4212, P.S- Chandgaon, Dist-Chattogram', NULL, '$2y$10$E53N0UfipSGCEWGYTbPPA.Xa9JRSLTbDfBNb49bB9UIObr0C9Dj3O', 'IrGRQUyLoVULpknfVgUtcvoZAOP0VS6CzQm1FR7y1OoGPz2WLgfP4IxnekXp', '2019-11-19 04:12:06', '2019-11-19 04:12:06'),
(11, 1, 'Abu Kawsar', '01816292796', 'abukawser@yahoo.com', '4/5 F2 West Raabaar', NULL, '$2y$10$ERwQ.fCIIwZVRYle6MBlP.cHG6xT5zPrBKY5UDQbHRUNE/aH3rxGu', 'skIAfuRVemZySe6dBI37y6rkOB6XkvyZGu3Mv7aJG7xlHd8fyhEOXkdSjA8P', '2019-11-19 04:19:37', '2019-11-19 04:19:37'),
(12, 1, 'Amlan Kumer Barua', '+8801966670024', 'abamlancu1@gmail.com', '99, Hensen Lane, Kotwali, Chattogram', NULL, '$2y$10$40abcvzepe2DGbRdLVXCQ.80/L2NspuQe2CxhMjWaza3I3wff7.g6', NULL, '2019-11-19 14:55:05', '2019-11-19 14:55:05'),
(13, 1, 'Abul Hasnath', '01866914143', 'ahasnath10@gamil.com', 'Boxirhat,Kotowali,Ctg', NULL, '$2y$10$./pskhszuYl2B4RYmNcQEe8ow3NLGxU3NijANPV3ahgfV1njHuG1i', NULL, '2019-12-11 03:18:32', '2019-12-11 03:18:32'),
(14, 1, 'Abul Hasnath', '01307880914', 'ahasnath10@gmail.com', 'Kotowali,Chittagong', NULL, '$2y$10$r3Vq45WG0uxDIKBfPuoHNeJcRjunTWyc030h1ApiePvloG22duUU6', 'Ik9M3rqqWmUgSLqG8Q7dKqkIVZnbsZk4BTLptYMXkEqnMCkiFQS8JF6WrWOL', '2019-12-23 04:09:47', '2019-12-23 04:09:47'),
(15, 1, '3NpAnMpLfW www.yandex.ru/42', '+74955465861', 'vladislavzwhdm@inbox.ru', '3NpAnMpLfW www.yandex.ru/42', NULL, '$2y$10$3R8PL.1givEd7RnY2a0SY.FBmP9TcowXvjeftyF6fHX9VR2vNsnsO', NULL, '2020-02-07 17:14:38', '2020-02-07 17:14:38'),
(16, 1, 'SXP7D7A5RG www.yandex.ru/42', '+74957814920', 'artemmawb@mail.ru', 'SXP7D7A5RG www.yandex.ru/42', NULL, '$2y$10$ZvWVtC7Q3Rsd5Df5cSmAOOmnNt.6VNZEyobogUcxneAGS/iscBgQi', NULL, '2020-06-09 08:49:22', '2020-06-09 08:49:22'),
(17, 1, 'Bivash Barua', '+88001819974747', 'bivash.barua@outlook.com', 'Ctg', NULL, '$2y$10$Q2//mjWA1.XRLn6EskTXXug6iKZVRpV1WIY24ZXtquzJQTQqfOMtG', NULL, '2020-08-17 22:14:06', '2020-08-17 22:14:06'),
(18, 1, 'Bivash Barua', '01819616324', 'bivashnits2011@gmail.com', 'ctg', NULL, '$2y$10$axxw9O.8ImdJ35i4Jri90OIYjBqgbCsmbQOxCcVfO6wylinNiLTEi', 'qGtt3qVwqB8tCI7pw9O4EVDE0tEjvsAspYn3WEonOLZCwbnLFMLa1MHsmDO5', '2020-08-22 21:51:34', '2020-08-22 21:51:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_addresses`
--
ALTER TABLE `office_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=361;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generals`
--
ALTER TABLE `generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `office_addresses`
--
ALTER TABLE `office_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
