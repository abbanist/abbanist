-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2020 at 04:21 PM
-- Server version: 5.6.41-84.1
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
-- Database: `bearsgu3_bears`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `status`, `title`, `description`, `link`, `button_txt`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 0, 'SAY GOODBEY TO FLAT', 'Та өөрийн дугуйны хэмжээгээ оруулаад тохирох шингэнээ сонгоод шууд захиалаарай', '#', 'ДУГУЙНЫ ХЭМЖЭЭГЭЭРЭЭ ЗАХИАЛАХ', '16009.jpg', NULL, '2019-01-18 22:36:03', '2019-07-06 09:25:45'),
(6, 1, 'IT SEALS FAST!', 'Та өөрийн дугуйны хэмжээгээ оруулаад тохирох шингэнээ сонгоод шууд захиалаарай', '#', 'ДУГУЙНЫ ХЭМЖЭЭГЭЭРЭЭ ЗАХИАЛАХ', '81197.jpg', NULL, '2019-05-27 21:13:13', '2019-07-06 09:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 0, 'Фото мэдээ', 'фото мэдээ', 0, NULL, '2019-01-17 19:04:44', '2019-01-17 19:04:44'),
(3, 0, '2019 оны төлөвлөсөн ажил', '2019 оны төлөвлөсөн ажил', 0, NULL, '2019-01-17 19:08:08', '2019-01-17 19:08:08'),
(4, 0, 'Үйлчилгээний байгууллагууд', 'Үйлчилгээний байгууллагууд', 1, NULL, '2019-01-17 19:08:30', '2019-01-17 19:08:30'),
(5, 0, 'Урлаг спорт арга хэмжээ', 'Урлаг спорт арга хэмжээ', 1, NULL, '2019-01-17 19:09:14', '2019-01-17 19:09:14'),
(6, 0, 'Видео мэдээ', 'ы', 1, NULL, '2019-01-18 03:10:49', '2019-01-18 03:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hamts`
--

CREATE TABLE `hamts` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hamts`
--

INSERT INTO `hamts` (`id`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'http://gogo.mn', '20422.png', '2018-12-16 23:14:40', '2019-09-07 00:46:34'),
(2, 'http://zasag.mn/', '79369.png', '2018-12-16 23:21:45', '2019-09-07 00:47:05'),
(3, 'http://www.parliament.mn/', '937.png', '2018-12-16 23:21:53', '2019-09-07 00:48:20'),
(4, 'http://zasag.mn/', '3047.png', '2019-01-18 05:45:36', '2019-09-07 00:48:50'),
(5, 'http://khentii.khural.mn/', '85403.png', '2019-01-18 05:58:24', '2019-09-07 00:50:44'),
(6, 'http://mojha.gov.mn/legal_assistance_treaty.html', '83604.png', '2019-01-18 05:59:51', '2019-09-07 00:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `title`, `image`, `small_title`, `description`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'УС ХЭМНЭГЧ', '77192.jpeg', 'Товч танилцуулга', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum tenetur nobis, commodi beatae atque eius fuga. Commodi eum, similique doloremque officiis unde a culpa porro, cum enim, accusamus necessitatibus aspernatur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum tenetur nobis, commodi beatae atque eius fuga. Commodi eum, similique doloremque officiis unde a culpa porro, cum enim, accusamus necessitatibus aspernatur? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>', NULL, '2018-12-08 07:53:35', '2018-12-18 04:52:01'),
(2, 'Танилцуулга', '49194.png', 'Товч танилцуулга2', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum tenetur nobis, commodi beatae atque eius fuga. Commodi eum, similique doloremque officiis unde a culpa porro, cum enim, accusamus necessitatibus aspernatur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum tenetur nobis, commodi beatae atque eius fuga. Commodi eum, similique doloremque officiis unde a culpa porro, cum enim, accusamus necessitatibus aspernatur? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>', NULL, '2018-12-08 19:57:50', '2018-12-13 22:56:27'),
(3, 'УС ХЭМНЭГЧ3', '35740.jpg', 'Товч танилцуулга', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum tenetur nobis, commodi beatae atque eius fuga. Commodi eum, similique doloremque officiis unde a culpa porro, cum enim, accusamus necessitatibus aspernatur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum tenetur nobis, commodi beatae atque eius fuga. Commodi eum, similique doloremque officiis unde a culpa porro, cum enim, accusamus necessitatibus aspernatur? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>', NULL, '2018-12-08 20:41:03', '2018-12-13 22:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `orderm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `orderm`, `menu_name`, `menu_url`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 0, '', 'Танилцуулга', '/page/3', NULL, '2019-01-21 01:35:38', '2019-09-11 09:03:47'),
(3, 0, '1', 'Бүтээгдэхүүн', '/products', NULL, '2019-01-21 01:35:48', '2019-01-28 11:56:52'),
(12, 0, '9', 'Холбогдох', '/contact', NULL, '2019-01-22 00:10:17', '2019-09-14 04:35:38'),
(37, 0, '3', 'Мэдээлэл', '/blogs', NULL, '2019-01-24 09:14:53', '2019-01-28 11:57:14'),
(38, 0, '3', 'Судалгаа', '/page/21', NULL, '2019-09-08 03:40:11', '2019-09-14 04:35:25'),
(39, 0, '8', 'Тооцоолуур', '/sizer', NULL, '2019-09-15 04:03:57', '2019-09-15 04:58:27');

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2018_11_03_053315_create_category_table', 1),
(7, '2018_11_14_101118_create_products_table', 2),
(8, '2018_11_23_045635_create_posts_table', 3),
(9, '2018_11_25_052236_create_pages_table', 4),
(10, '2018_11_25_153357_create_productuser_table', 5),
(11, '2018_11_26_022623_create_banner_table', 5),
(12, '2018_11_26_060156_create_productuser_table', 6),
(13, '2018_11_26_061354_create_productuser_table', 7),
(14, '2018_11_26_065419_create_productuser_table', 8),
(15, '2018_11_26_071623_create_comu_table', 9),
(16, '2018_11_26_074031_create_banner_table', 10),
(17, '2018_11_26_090056_create_comus_table', 11),
(18, '2018_11_26_114601_create_banners_table', 12),
(19, '2018_11_30_062049_create_comus_table', 13),
(20, '2018_12_03_043334_create_infos_table', 14),
(27, '2018_12_04_102828_create_comus_table', 15),
(28, '2018_12_08_112935_create_banners_table', 16),
(29, '2018_12_11_115020_create_setups_table', 17),
(32, '2018_12_12_073908_create_menus_table', 18),
(33, '2018_12_17_064732_create_hamts_table', 19),
(35, '2019_01_18_023032_create_categories_table', 20),
(36, '2019_01_18_033928_create_posts_table', 21),
(37, '2019_01_18_153124_create_banners_table', 22),
(38, '2019_01_21_062823_create_products_table', 23),
(39, '2019_01_21_092637_create_menus_table', 24),
(40, '2019_01_21_114224_create_comments_table', 25),
(42, '2019_01_25_143457_create_setups_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_content`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Компаний танилцуулга', '<h5>БИEРС ТРЕЙД ХХК&nbsp;</h5>\r\n<p>Дугуйн хуягийг албан ёсны эрхтэйгээр тусгай захиалгаар&nbsp;<span class=\"mceItemHiddenSpellWord\">үйлдвэрлүүлэн</span> Монголынхоо хэрэглэгчдэд танилцуулж буй компани юм.</p>\r\n<p>Дугуйн хуягийн зөвшөөрлүүд, гэрчилгээнүүдийг сертификат хэсгээс үзнэ үү. Алтан шар зам тань өлзийтэй байг.&nbsp;</p>\r\n<p><span class=\"embed-youtube\"><iframe class=\"youtube-player\" src=\"//www.youtube.com/embed/OcFL3MdtRV8\" width=\"100%\" height=\"300\" allowfullscreen=\"allowfullscreen\" data-mce-fragment=\"1\"></iframe></span></p>', NULL, '2018-11-25 07:03:02', '2019-09-12 09:41:20'),
(4, 'Шилдгүүд', '<p>Шилдгүүд</p>', NULL, '2018-11-25 07:03:15', '2018-12-18 01:02:37'),
(8, 'Хамтран ажиллах', '<p>Бидэнтэй хамтран ажиллахыг хүсвэл бид хэзээд бэлэн.</p>', NULL, '2018-12-09 20:51:25', '2018-12-17 03:30:56'),
(11, 'Мэдээлэл', '<p>мэдээлэл тун удахгүй</p>', NULL, '2018-12-18 00:32:27', '2018-12-18 01:04:04'),
(13, 'Бидний тухай', '', NULL, '2018-12-18 01:02:28', '2018-12-18 01:02:28'),
(16, 'Зөвлөгөө', '<p>Ямар ч цэвэрлэгээ хийхээсээ өмнө цахилгааныг унтрааж салга.</p>\r\n<ol>\r\n<li>Оптик мэдрэгчийг цэвэрлэх</li>\r\n</ol>\r\n<p>Машинд бүх мэдрэгчийг зөөлөн болгоомтой цэвэрлэх нь маш чухал юм.</p>\r\n<p>Мэдрэгч, дамжуулагчид наалдсан тоосонцор буюу тоосыг сойзоор цэвэрлэнэ.</p>\r\n<p>Шилэн гадаргууг сийрэгжүүлсэн зөөлөн даавуугаар арчиж болно.</p>\r\n<ol start=\"2\">\r\n<li>Машин доторх үеийг тогтмол засах</li>\r\n</ol>\r\n<p>Машин дотор сард нэг удаа цэвэрлэгээ хийх хэрэгтэй</p>\r\n<p>машиныг дээд доод талыг нь онгойлгож цэвэрлэх боломжтой.</p>\r\n<ol start=\"3\">\r\n<li>Нэмэлт зөвлөмжүүд</li>\r\n</ol>\r\n<p>Тоос шороотой бохир өрөөнд машиныг ажиллуулахгүй байх.</p>\r\n<p>Үргэлж хамгаалалтын уут, бүрхүүлээр хамгаалж байх хэрэгтэй</p>\r\n<p>хуванцар таг (ашиглагдаагүй үед)</p>\r\n<p>&nbsp;</p>\r\n<p>АНХААРУУЛГА: АНХААР!</p>\r\n<p>DETECTORS ба / эсвэл OPTICAL SENSORS</p>\r\n<p>Анхааруулга</p>\r\n<ol>\r\n<li>Машин нь тэжээлийн найдвартай эх үүсвэрт холбогдсон байх ёстой.</li>\r\n<li>Машиныг хуурай, агааржуулалт сайтай газарт байлгах хэрэгтэй</li>\r\n</ol>\r\n<p>нарны гэрэл.</p>\r\n<ol start=\"3\">\r\n<li>Хүчтэй соронзон орон болон нарны гэрлээс машиныг хол байлгах хэрэгтэй</li>\r\n<li>Үр нөлөөтэй цахилгаан хүч нь 220В &plusmn; 10%</li>\r\n<li>Гал хамгаалагчийн 2А / 250V гэсэн үзүүлэлтийг нэмэгдэж, багасгаж болохгүй.</li>\r\n<li>Үйл ажиллагааны эвдрэлийн шалтгааны 80% нь тоос шороо, бохирдол байдаг</li>\r\n</ol>', NULL, '2019-01-21 23:56:38', '2019-03-13 01:04:10'),
(17, 'Холбоо барих', '<p><strong>Хаяг: &nbsp;&nbsp;</strong>Улаанбаатар хот, Баянзүрх дүүрэг, 1-р хороо, 12-р хороолол, Залуучуудын өргөн чөлөө-21, NORTH CENTER, 105 тоот / Сансарын E-MART-ын эсрэг талд хуучнаар АНОД БАНКНЫ байр /</p>\r\n<p>УТАС:&nbsp; 7755-4499</p>\r\n<p>МЭЙЛ: <a href=\"mailto:info@mungutoologch.mn\">info@bears.com</a></p>', NULL, '2019-01-22 00:09:42', '2019-09-12 08:04:29'),
(18, 'Он цагийн хүрд', '', NULL, '2019-09-08 03:39:51', '2019-09-08 03:49:27'),
(19, 'Нууцлалын бодлого', '', NULL, '2019-09-12 05:21:42', '2019-09-12 05:21:42'),
(20, 'Хамтын ажиллагаа', '', NULL, '2019-09-12 05:21:52', '2019-09-12 05:21:52'),
(21, 'Монгол улсын хөрсний гадаргын саруудын дундаж температур ХОТ,АЙМАГ, СУМААР', '<p>Хөрсөн дээрх температур хэрхэн хувьсдаг талаар олон жилийн дунджаар хийсэн судалгааны мэдээлэл.</p>\r\n<p><img src=\"/laravel-filemanager/photos/shares/BGA1.jpg\" alt=\"\" width=\"100%\" /></p>\r\n<p>Монгол улсын хэмжээнд гадна агаарын үнэмлэхүй их, бага агаарын температур</p>\r\n<p>Энэ нь олон жилийн судалгаагаар тухайн орон нутагт хамгийн их халсан болон, хамгийн их хүйтэрсэн температурыг тэмдэглэн авсан мэдээлэл юм.</p>\r\n<p><img src=\"/laravel-filemanager/photos/shares/Бага2.jpg\" alt=\"\" width=\"100%\" /></p>', NULL, '2019-09-12 05:22:09', '2019-09-12 13:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `status`, `category_id`, `image`, `post_title`, `post_content`, `created_at`, `updated_at`) VALUES
(23, 1, 2, '6480.jpg', 'Дугуйн хуяг 2019 оны 11 сарын 15 хүртэл өвлийн хямдрал зарлав.', '<p><span class=\"_5mfr\"><span class=\"_6qdm\">⛳️</span></span> Дугуйн хуяг <span class=\"_5mfr\"><span class=\"_6qdm\">☃️</span></span>&nbsp;ӨВЛИЙН 20%&nbsp;<span class=\"_5mfr\"><span class=\"_6qdm\">🌪</span></span> ХЯМДРАЛ ЗАРЛАЛАА! 11 сарын 15хүртэл.</p>\r\n<p>Дугуйн хуяг-ийн онцлог:</p>\r\n<p>-Бүх төрлийн техник хэрэгслийн олгойтой болон олгойгүй дугуйд ашиглаж болно.<span class=\"text_exposed_show\"><br />-Дугуйд урьдчилан сэргийлэх байдлаар болон хагарсны дараа хэрэглэх боломжтой<br />-Өвлийн ямар ч хүйтэнд&nbsp;<span class=\"_5mfr\"><span class=\"_6qdm\">❄️</span></span>/-45С/, зуны ямар ч халуунд&nbsp;<span class=\"_5mfr\"><span class=\"_6qdm\">🔆</span></span>/+90С/ нөхөх чадвараа алдахгүй<br />-Хийснээс хойш нэг жилийн хугацаанд 50 гаран цоорлыг автоматаар өөрөө нөхнө</span></p>\r\n<div class=\"text_exposed_show\">\r\n<p><span class=\"_5mfr\"><span class=\"_6qdm\">💰</span></span>&nbsp;Дугуйн хуяг-ийн үнэ:</p>\r\n<p>-Дугуйн хэмжээнээс шалтгаалан харилцан адилгүй ба манай вэб сайтны тооцоолуур хэсгээс дугуйд орох хэмжээгээ нарийн тооцоолж болно.<br />Жишээ нь: мотоциклийн нэг дугуйнд 11,500 төг, Приус 20 машины стандарт 15 тай нэг дугуйнд 16,500 төг, жийп машины том нэг дугуйнд 33,000 төг болно.<br />Жишээ дээрх үнүүд үнсэн үнэ бөгөөд 2019/11/15 хүртэл 20% хямдарна.</p>\r\n<p><span class=\"_5mfr\"><span class=\"_6qdm\">🚚</span></span>&nbsp;Хүргэлт үйлчилгээ:</p>\r\n<p>Хот дотор 3,500 төгрөгөөр хүргүүлж авах боломжтой ба хөдөө орон нутгийн хэрэглэгчиддээ унаанд нь тавьж өгч үйлчилнэ.</p>\r\n<p><span class=\"_5mfr\"><span class=\"_6qdm\">⛳️</span></span>&nbsp;Оффис хаяг:</p>\r\n<p>12р хороолол, Норт Центр, 105 тоот /Сансарын И-Мартын хойно, хуучнаар Анод банкны баганатай барилга</p>\r\n<p>Лавлах утас:</p>\r\n<p><span class=\"_5mfr\"><span class=\"_6qdm\">☎️</span></span>&nbsp;7755-4499<br /><span class=\"_5mfr\"><span class=\"_6qdm\">☎️</span></span>&nbsp;8081-8238<br /><span class=\"_5mfr\"><span class=\"_6qdm\">☎️</span></span>&nbsp;9900-4792</p>\r\n<p>Танилцуулга</p>\r\n<p><a href=\"https://youtu.be/ej-4b_7b9Vw\"><iframe src=\"//www.youtube.com/embed/ej-4b_7b9Vw\" width=\"380\" height=\"213\" allowfullscreen=\"allowfullscreen\"></iframe></a></p>\r\n<p>&nbsp;</p>\r\n</div>', '2019-03-13 19:55:05', '2019-11-08 06:20:24'),
(24, 1, 3, '1412.jpg', 'Дугуйн хуягийг цэвэрлэхэд маш хялбар', '<p><a class=\"profileLink\" href=\"https://www.facebook.com/DuguinHuyag/?__tn__=K-R&amp;eid=ARBeqkRfEaZ6KQt3sz3lb9Ybrxcnljr21VweYH1wN1yRi8Co6DhRItVsOLlJMk2YbMyOBcaA9jHuodUI&amp;fref=mentions&amp;__xts__%5B0%5D=68.ARBDmVxWH3q-9UIKxB2-lyQJMpCnXcyuqYRpJfs0VGvU9_bCjd-_V0bTiSryThqQ5KhEAsrzKFBqax7O-B6BfG4i5C_ZteKmwiJuAunzV8mAqvk7YoVy82pEoXGWLAD2Vgchvb7F6EEazD9amQOQqoozM92bTZ4avUaD0wvuOG-QQS_5J1-iAcqg1N2Rx0a5nag5Iyx72vDr_vRAZYQd-jiU_VC51Qje0vKxtDh0coqGR7pi_3EEHfgyZhukx8KeEhiMDwC_HKoLeKmHVowH_g6u_gVXKwfZs2wRIHuhxQhwXHJnQ8QFiffXagMWblLzZohkGYhKZv23zow8tZw8NgyA47X2DUw6\" data-hovercard=\"/ajax/hovercard/page.php?id=112639630091362&amp;extragetparams=%7B%22__tn__%22%3A%22%2CdK-R-R%22%2C%22eid%22%3A%22ARBeqkRfEaZ6KQt3sz3lb9Ybrxcnljr21VweYH1wN1yRi8Co6DhRItVsOLlJMk2YbMyOBcaA9jHuodUI%22%2C%22fref%22%3A%22mentions%22%7D\" data-hovercard-prefer-more-content-show=\"1\">Дугуйн хуяг</a>&nbsp;хийсэн дугуйг&nbsp;<span class=\"_5mfr\"><span class=\"_6qdm\">🚿</span></span>&nbsp;цэвэрлэж үзүүлж байна.</p>\r\n<p><a class=\"profileLink\" href=\"https://www.facebook.com/DuguinHuyag/?__tn__=K-R&amp;eid=ARBn998MUJuIZALyH95J_OSk-9kmb4OVd8GXIwn8ZuclxZcNkD78q83JDQfqjt9HGbzjip4zc9H5vCFo&amp;fref=mentions&amp;__xts__%5B0%5D=68.ARBDmVxWH3q-9UIKxB2-lyQJMpCnXcyuqYRpJfs0VGvU9_bCjd-_V0bTiSryThqQ5KhEAsrzKFBqax7O-B6BfG4i5C_ZteKmwiJuAunzV8mAqvk7YoVy82pEoXGWLAD2Vgchvb7F6EEazD9amQOQqoozM92bTZ4avUaD0wvuOG-QQS_5J1-iAcqg1N2Rx0a5nag5Iyx72vDr_vRAZYQd-jiU_VC51Qje0vKxtDh0coqGR7pi_3EEHfgyZhukx8KeEhiMDwC_HKoLeKmHVowH_g6u_gVXKwfZs2wRIHuhxQhwXHJnQ8QFiffXagMWblLzZohkGYhKZv23zow8tZw8NgyA47X2DUw6\" data-hovercard=\"/ajax/hovercard/page.php?id=112639630091362&amp;extragetparams=%7B%22__tn__%22%3A%22%2CdK-R-R%22%2C%22eid%22%3A%22ARBn998MUJuIZALyH95J_OSk-9kmb4OVd8GXIwn8ZuclxZcNkD78q83JDQfqjt9HGbzjip4zc9H5vCFo%22%2C%22fref%22%3A%22mentions%22%7D\" data-hovercard-prefer-more-content-show=\"1\">Дугуйн хуяг</a> дугуй дотроо ямар байдалтай байдаг вэ?<br />Обуд болон дугуйг&nbsp;<span class=\"_5mfr\"><span class=\"_6qdm\">🔄</span></span>&nbsp;дахиж ашиглаж болох уу?<br />Обуд болон дугуйгаас&nbsp;<span class=\"_5mfr\"><span class=\"_6qdm\">🛁</span></span>&nbsp;цэвэрлэхэд төвөгтэй юу?<span class=\"text_exposed_show\"><br />Обуд зэврэх үү? Гэх зэрэг олон олон асуулт ирсээр байгаа тул бид хариулт өгөх зорилгоор бодитоор бичлэг хийн үзүүлэхийг зорив.</span></p>\r\n<div class=\"text_exposed_show\">\r\n<p><span class=\"_5mfr\"><span class=\"_6qdm\">🎥</span></span>&nbsp;Бичлэг дээрх&nbsp;<span class=\"_5mfr\"><span class=\"_6qdm\">🚗</span></span>&nbsp;нь 3 сарын турш&nbsp;<a class=\"profileLink\" href=\"https://www.facebook.com/DuguinHuyag/?__tn__=K-R&amp;eid=ARBW64LjYRts32wY7lFL7LlWSaXwe-z99lRxoillWfrWpxCfoh_wm-ykNVPNeUlXsrM11bnAaqKZSpj0&amp;fref=mentions&amp;__xts__%5B0%5D=68.ARBDmVxWH3q-9UIKxB2-lyQJMpCnXcyuqYRpJfs0VGvU9_bCjd-_V0bTiSryThqQ5KhEAsrzKFBqax7O-B6BfG4i5C_ZteKmwiJuAunzV8mAqvk7YoVy82pEoXGWLAD2Vgchvb7F6EEazD9amQOQqoozM92bTZ4avUaD0wvuOG-QQS_5J1-iAcqg1N2Rx0a5nag5Iyx72vDr_vRAZYQd-jiU_VC51Qje0vKxtDh0coqGR7pi_3EEHfgyZhukx8KeEhiMDwC_HKoLeKmHVowH_g6u_gVXKwfZs2wRIHuhxQhwXHJnQ8QFiffXagMWblLzZohkGYhKZv23zow8tZw8NgyA47X2DUw6\" data-hovercard=\"/ajax/hovercard/page.php?id=112639630091362&amp;extragetparams=%7B%22__tn__%22%3A%22%2CdK-R-R%22%2C%22eid%22%3A%22ARBW64LjYRts32wY7lFL7LlWSaXwe-z99lRxoillWfrWpxCfoh_wm-ykNVPNeUlXsrM11bnAaqKZSpj0%22%2C%22fref%22%3A%22mentions%22%7D\" data-hovercard-prefer-more-content-show=\"1\">Дугуйн хуяг</a>-тай явсан болно.</p>\r\n<p>Дэлгэрэнгүй мэдээлэл авахыг хүсвэл дараах утсуудаар лавлана уу.</p>\r\n<p><span class=\"_5mfr\"><span class=\"_6qdm\">☎️</span></span>&nbsp;7755-4499<br /><span class=\"_5mfr\"><span class=\"_6qdm\">☎️</span></span>&nbsp;8081-8238<br /><span class=\"_5mfr\"><span class=\"_6qdm\">☎️</span></span>&nbsp;9900-4792</p>\r\n<p><iframe src=\"//www.youtube.com/embed/OEwoth0noVs\" width=\"387\" height=\"214\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>Дугуйн хуягийг усаар шүрших, алчуураар арчих зэргээр дугуйнаас цэвэрлэх боломжтой бөгөөд хэрэглэхэд хялбар, дугуйн насжилтыг уртасгаж, обуд зэврэлтээс хамгаалдаг.</p>\r\n<p><img src=\"/laravel-filemanager/photos/shares/20170923_180642_1506860929277.jpg\" alt=\"\" /></p>\r\n<p>Facebook HD video доор линкээр үзэх</p>\r\n<p><a href=\"https://www.facebook.com/DuguinHuyag/videos/564916247385296/?t=2\">https://www.facebook.com/DuguinHuyag/videos/564916247385296/?t=2</a></p>\r\n</div>', '2019-03-19 18:16:25', '2019-11-08 06:20:55'),
(25, 1, 3, '34963.jpg', 'Рулль тань чичрээд байна уу? Дугуйн баланс яагаад алддаг вэ?', '<p><strong>Таны машин өндөр хурдтай явж байх үед руль нь чичрээд байна уу?</strong></p>\r\n<p>Таны машин хөдөлгөөний хурдыг нэмэгдүүлж жигд хурдтай явж байхад, эсвэл тодорхой хурданд хүрээд гарт чичиргээ мэдрэгдэх эсвэл тоормослох үед чичиргээ мэдрэгдэж байсан уу?. Нэг үгээр хэлвэл 70, 80, 90, 100 км/ц хүрээд руль чичрээд байна уу?</p>\r\n<p><strong>Шалтгаан</strong></p>\r\n<ul>\r\n<li>Урд дугуй хавагнасан</li>\r\n<li>Рулийн тяг, жолооны механизмд холхио үүссэн</li>\r\n<li>Рулийн чичиргээ дарагч амортизатор ажилгүй болсон</li>\r\n<li>Дугуйн баланс алдагдсан, манжетка тавьсан</li>\r\n<li>Чагтан гол баланс тохиргоо алдагдсан</li>\r\n<li>Кардан гол баланс тохиргоо алдагдсан</li>\r\n<li>Пеланз сэнсэрсэн</li>\r\n<li>Дугуйн боолт сулрах Засварлах</li>\r\n<li>Дугуйг хэвийн гэмтэлгүй дугуйгаар сольж баланс хийлгэх</li>\r\n<li>Холхио үүссэн эд ангийг сольж тэнхлэг тохиргоо хийлгэх</li>\r\n<li>Рулийн амортизаторыг солих</li>\r\n<li>Дугуйн баланс хийлгэх</li>\r\n<li>Тоормосны дискийг солих</li>\r\n<li>Чагтан гол, кардан голыг шалгах, шаардлагатай бол солих</li>\r\n</ul>\r\n<ol>\r\n<li><strong>Дугуйн баланс</strong></li>\r\n</ol>\r\n<p>Обудыг үйлдвэрлэж байх явцад жин харилцан адилгүй байдаг тул эсрэг талд ачаа зүүж өгдөг байна. Дугуйн баланс алдагдахад маш олон хүчин зүйлээс болж үүсдэг байна. Дугуй хагарах үед обуд гэмтэх, дугуй хавагнах, жижиг том дугуй суулгах, дугуйн хий даралт өөр өөр байх зэрэг шалтгаанууд байна. Мөн ачаа тэнхлэг зөрүүлж ачих болон руль чичрэх нөхцлийн бий болгодог бусад бүх шалтгаанууд дугуйн балансд нөлөөлнө.&nbsp;&nbsp;</p>\r\n<ol start=\"2\">\r\n<li><strong>Кардан голын баланс</strong></li>\r\n</ol>\r\n<p>Үйлдвэрээсээ хийхдээ баланс таарсан байдаг. Засвар үйлчилгээ хийхдээ анхны байрлалд нь хийгээгүйгээс болж баланс нь зөрдөг.</p>\r\n<ol start=\"3\">\r\n<li><strong>Пиланз сэнсрэх</strong></li>\r\n</ol>\r\n<p>Тоормосны системийн үрэлтийн нөлөөллөөр пиланз зогсдог. Ингэж халсан үед нь ус туулах буюу халуун хүйтэн харшилсан үед хэв гажилтад орж сэнсэрдэг. Иймээс тоормос гишгэх үед руль дээр савалгаа мэдрэгддэг.</p>\r\n<p><strong>Баланс алдагдах шалтгаан</strong></p>\r\n<p><iframe src=\"//www.youtube.com/embed/4OvcOX74wh0\" width=\"380\" height=\"214\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe><br />&nbsp; &nbsp;&nbsp;</p>', '2019-03-19 18:23:42', '2019-11-08 06:21:41'),
(26, 1, 3, '15456.jpg', 'ДУГУЙН ХЭЭГ ЗӨВ СОНГОХ АРГАЧЛАЛ', '<div class=\"news-content\">\r\n<p>Дэлхий даяар газар зүйн болон цаг уурын хүчин зүйлсээс шалтгаалан дараах стандартуудыг мөрдлөг болгож байна. Үүнд: Ази стандарт / Япон, Солонгос /, Европ стандарт, Америк стандарт, Канад стандарт. Энэхүү стандартууд нь тус бүрдээ өөрийн гэсэн онцлогтой дугуйнуудыг үйлдвэрлэж байдаг.</p>\r\n<p>Монголд хамгийн тохиромжтой стандарт нь Америк болон Канад стандартын дугуйнууд байдаг. Учир нь газар зүйн болон цаг уурын бүсийн хувьд төстэй бүсэд оршдог тул хамгийн тохиромжтой.</p>\r\n<p>&nbsp;</p>\r\n<blockquote><strong>Автомашины дугуй дараах үндсэн хээтэй байдаг</strong></blockquote>\r\n<ul>\r\n<li>Өвлийн хээ</li>\r\n<li>Зуны хээ</li>\r\n<li>Бартаат замын хээ</li>\r\n<li>Бүх улирлын хээ</li>\r\n</ul>\r\n<p>Ихэнх хэрэглэгчид хээний талаар төдийлөн сайн мэддэггүйгээс буруу дугуй авах нь элбэг. Хэрвээ та шинэ дугуй авах гэж байгаа бол ямар замаар явдаг, ямар нөхцөлд ашигладаг гэдгээ сайтар бодолцож сонголтоо хийх нь чухал.</p>\r\n<p>Ингээд та бүхэнд дугуйн хээ болон түүний онцлог ямар замд ямар хээтэй дугуй хэрэглэх нь тохиромжтой тухай зөвлөе.</p>\r\n<div class=\"image\"><img title=\"\" src=\"https://cardoctor.mn/uploads/news/ef29775eab120df3e3189eaee22b4be9.jpg\" alt=\"\" /></div>\r\n<blockquote><strong>ӨВЛИЙН ХЭЭ</strong></blockquote>\r\n<p>Энэ төрлийн дугуй нь хийгдсэн материалын хувьд зөөлөн учраас амархан хатуурч хөлддөггүй, хээний зүслэг болон гулгалтын эсрэг ажиллах ажиллагаа алдагддаггүй.</p>\r\n<blockquote><strong>БҮХ УЛИРЛЫН ХЭЭ</strong></blockquote>\r\n<p>Энэ төрлийн хээ нь өвлийн хээтэй дугуйг бодвол арай хатуу. Тийм учраас эдэлгээ удаантай болдог. Ихэнхдээ жийп, кроссовер төрлийн машинуудад ашиглавал тохиромжтой байдаг.</p>\r\n<p>Хичнээн M+S буюу шавар цас гэсэн бичигтэй байлаа ч өвлийн дугуйны гулгалтын эсрэг болон ус зайлуулах үүргийн хувьд өвлийн дугуйны хэмжээнд хүрдэггүй.</p>\r\n<blockquote><strong>БАРТААТ ЗАМЫН ХЭЭ</strong></blockquote>\r\n<p>Зарим хэрэглэгч энэ хээг өвлийн хээтэй андуурах эсвэл харагдах байдлын хувьд гоё сайханд нь татагдаж худалдан авах нь элбэг. Гэвч ийм хээтэй дугуй нь тохирсон замын нөхцөлд л үндсэн үүргээ биелүүлэх бөгөөд бусад тохиолдолд таагүй мэдрэмж үлдээх нь олон.</p>\r\n<p>Жилдээ 4-5 удаа хөдөө явдаг. Явахдаа голчлон засмал замаар явдаг хэрэглэгч нар хөдөө их явдаг гээд ийм хээтэй дугуйг худалдан авах нь олон.</p>\r\n<p>Гэвч жилийн ихэнх хугацааг хотод өнгөрүүлдэг бол ийм хээтэй дугуйг худалдан авах нь тохиромжгүй юм. Ийм хээтэй дугуйг зөвхөн шавар бартаа ихтэй авто аялалд явахдаа тавьж яваарай.</p>\r\n<blockquote><strong>ЗУНЫ ХЭЭ</strong></blockquote>\r\n<p>Ийм хээтэй дугуйн хийгдсэн материалын хувьд хатуу байдаг. Учир нь халуун асфальт дээр дугуй үрэлт авч элэгдэл хурдан явагддаг. Үүнээс сэргийлж дугуйн бүтцийг хатууруулж эдэлгээний хугацаа болон замтай барьцалдах чадварыг ихэсгэсэн байдаг.</p>\r\n<div class=\"image\"><img title=\"\" src=\"https://cardoctor.mn/uploads/news/75c97d584d7fcf110a3793661d614f88.jpg\" alt=\"\" /></div>\r\n</div>\r\n<div class=\"copyright\">\r\n<p>Эх сурвалж: <a href=\"http://www.cardoctor.mn\">www.cardoctor.mn</a></p>\r\n<p><a href=\"https://news.cardoctor.mn/read/614\">https://news.cardoctor.mn/read/614</a></p>\r\n</div>', '2019-04-01 20:02:33', '2019-09-11 09:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `shingen` tinyint(4) DEFAULT NULL,
  `mainprice` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cer1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cer2link` text COLLATE utf8mb4_unicode_ci,
  `cer3link` text COLLATE utf8mb4_unicode_ci,
  `cer4link` text COLLATE utf8mb4_unicode_ci,
  `cer5link` text COLLATE utf8mb4_unicode_ci,
  `cer6link` text COLLATE utf8mb4_unicode_ci,
  `cer7link` text COLLATE utf8mb4_unicode_ci,
  `cer8link` text COLLATE utf8mb4_unicode_ci,
  `cer2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cer3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cer4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cer5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cer6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cer7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cer8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cer1link` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `video_scroll_a` text COLLATE utf8mb4_unicode_ci,
  `video_scroll_b` text COLLATE utf8mb4_unicode_ci,
  `video_scroll_c` text COLLATE utf8mb4_unicode_ci,
  `une1` text COLLATE utf8mb4_unicode_ci,
  `une2` text COLLATE utf8mb4_unicode_ci,
  `une3` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `f_video` text COLLATE utf8mb4_unicode_ci,
  `faq` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `status`, `shingen`, `mainprice`, `image`, `cer1`, `cer2link`, `cer3link`, `cer4link`, `cer5link`, `cer6link`, `cer7link`, `cer8link`, `cer2`, `cer3`, `cer4`, `cer5`, `cer6`, `cer7`, `cer8`, `cer1link`, `title`, `content`, `description`, `video_scroll_a`, `video_scroll_b`, `video_scroll_c`, `une1`, `une2`, `une3`, `created_at`, `updated_at`, `f_video`, `faq`) VALUES
(20, 1, 1, 20000, '10214.jpg', '40446.jpg', 'http://bears.mn/laravel-filemanager/files/shares/Bears Trade Co.,Ltd 20181129.pdf', 'http://bears.mn/laravel-filemanager/files/shares/Safety data sheet.pdf', 'http://bears.mn/laravel-filemanager/files/shares/High Way Vibration Test of tire sealant impact on Vehicles balance.pdf', 'http://bears.mn/laravel-filemanager/files/shares/Tire Sealant Impact on Wheel Banlace.pdf', NULL, NULL, NULL, '18290.jpg', '83434.jpg', '67864.jpg', '8988.jpg', '', '', '', 'http://bears.mn/laravel-filemanager/files/shares/BEARS ДУГУЙН ХУЯГ ТАНИЛЦУУЛГА.pdf', 'ДУГУЙН ХУЯГ 500 ml', '<p style=\"font-weight: 400;\">САВАЛГАА:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; 500 ml</p>\r\n<p style=\"font-weight: 400;\">БҮТЭЦ:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; Коктейль</p>\r\n<p style=\"font-weight: 400;\">ХАДГАЛАХ ХУГАЦАА: Сэрүүн нөхцөлд 3 жил</p>\r\n<p style=\"font-weight: 400;\">ХЭРЭГЛЭХ ХУГАЦАА: &nbsp;Дугуйнд хийснээс хойш 1 жил</p>\r\n<p style=\"font-weight: 400;\">Дугуйн хуяг нь CE буюу Европын холбооноос гаргасан хүн, амьтан, хүрээлэн буй орчинд аюулгүйг нотолсон сертификат, RоSH- Европын холбооны Аюултай бодис агуулаагүй сертификат, MSDS- Химийн аюулгүй байдлын мэдээллийн хуудас зэргээр баталгаажсан -45/+90 хэмд зохицон ажиллах чадвартай техникийн дугуйн хагаралтыг засварлах өөрөө нөхөгдөх шингэн технологи юм.</p>\r\n<p style=\"font-weight: 400;\">Дугуйн хуяг нь хэт том биш бол бүх цооролтыг нөхөх чадвартай.</p>', '<p><img style=\"float: right;\" src=\"/laravel-filemanager/photos/shares/босоо1.jpg\" alt=\"\" width=\"35%\" height=\"\" /></p>\r\n<h4 style=\"font-weight: 400;\"><strong>ТА ДУГУЙН ХУЯГ ДУГУЙНДАА ХИЙХ ГЭЖ БАЙГАА БОЛ&nbsp;</strong><br /><strong>ДАРААХ ЗААВРЫН ДАГУУ ХИЙНЭ ҮҮ.</strong></h4>\r\n<p>1. Машины дугуй хийлэгч амыг 2 эсвэл 10 цагийн зүүний байрлалд зогсооно</p>\r\n<p>2. Бүтээгдэхүүний хананд байрлах зальтник тайлагчийг ашиглан дугуйн хийг бүрэн гаргана.&nbsp;&nbsp;</p>\r\n<p>3. Бүтээгдэхүүнийг 30 секундийн турш сайтар сэгсэрнэ.</p>\r\n<p>4. Бүтээгдэхүүний тагийг тайлж, амсарт байрлах хамгаалалтын тугалган цаасыг бүрэн хуулж авна.</p>\r\n<p>5. Хагаралтыг үүсгэсэн зүйлийг авч хаяхаас гадна нүхийг 6 цагийн байрлалд байлгана..</p>\r\n<p>6. Бүтээгдэхүүнийг дугуйндаа дуустал шахаж хийнэ.</p>\r\n<p>7. Дугуй хийлэгч аманд Зальтникаа хийж сайтар чангална.</p>\r\n<p>8. Дугуйгаа хийлэгчээр тохирох түшин хүртэл хийлнэ.</p>\r\n<h4><strong>ТООЦООЛОХ&nbsp;</strong></h4>\r\n<p>Та өөрийн дугуйд хир хэмжээтэй хийж хэрэглэх талаар мэдэхийг хүсвэл дор байгаа тооцоолуур дээр өөрийн машины дугуйн хэмжээг оруулж тооцоолсноор мэдэх боломжтой. Хэрэв таны машины дугуй 2 хэмжээстэй байвал, <strong>ГАР ХЭМЖЭЭ</strong> гэсэн арын тооцоолуурын хэсэгт зааврын дагуу дугуйгаа хэмжиж хийснээр хэрэг болох Дугуйн хуягийн хэмжээг мэднэ.</p>\r\n<p><iframe src=\"//www.youtube.com/embed/WJZf-zMoTX8\" width=\"380\" height=\"214\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<hr />\r\n<p>Та Дугуйн хуяг худалдаж авахыг хүсвэл манай дэлгүүрт ирэн үйлчлүүлж болохоос гадна хүргэлтээр байгаа газраа хүргүүлэн авч болно. Дугуйн хуягийг мотоцикл болон автомашинуудад хийх хэмжээ харилцан адилгүй байдаг.</p>', 'https://www.youtube.com/watch?v=ml3iYbjcrVg', NULL, NULL, NULL, NULL, NULL, '2019-08-23 21:38:36', '2020-05-20 16:40:49', 'https://www.youtube.com/embed/OcFL3MdtRV8', '<div id=\"accordionExample\" class=\"accordion asuult_hariult\"><!--------------------------------- 1 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#a\" aria-expanded=\"true\" aria-controls=\"a\"> Дугуйн хуяг нь&nbsp;дугуйны&nbsp;ёроолд&nbsp;шингэн хэлбэртэй&nbsp;байх уу?&nbsp; </button></h2>\r\n</div>\r\n<div id=\"a\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Дугуйн хуяг нь наалдамхай шинж чанартай бөгөөд энэ нь дугуйг дотроос нь нөхдөг. Энэ нь дугуй эргэлдэх үед чичиргээ үүсэхээс сэргийлж, чигжээс нь дугуйг дахин урсгахад хүргэдэг. Дугуй нь хөдөлгөөнгүй үед чигжээс нь аажмаар дугуйны ёроолд хуримтлагдана. Дугуй ажиллаж байгаа үед дугуйны дотор талд жигд хуваарилах болно.</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 2 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#b\" aria-expanded=\"false\" aria-controls=\"b\"> Яагаад Дугуйн хуяг зөвхөн 1 жилийн хугацаанд дугуйнд хүчинтэй байна вэ?&nbsp; </button></h2>\r\n</div>\r\n<div id=\"b\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Дугуйн хуяг нь усан дээр суурилсан шингэн тул уурших шинж чанартай. Бид Дугуйн хуягийг 10 сар тутамд дахин суулгаж, 1 жил тутамд солихыг зөвлөж байна.</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 3 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#c\" aria-expanded=\"false\" aria-controls=\"c\"> Хагаралтыг засах үед гарсан чигжээс нь хатуурдаг уу? </button></h2>\r\n</div>\r\n<div id=\"c\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Үгүй. Дугуйн хуяг нь үнэндээ шилэн, резинэн тоосонцор болон бусад битүүмжлэх бодисуудаас бүрддэг. Шингэн нь цоорхойгоор гадагшлах тусам нүхийг дүүргэж агаар алдагдахаас сэргийлдэг.&nbsp;Дугуйныхаа гадна талд урссан илүүдэл шингэн нь хатуурахгүй бөгөөд ууршиж арилна.</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 4 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#d\" aria-expanded=\"false\" aria-controls=\"d\"> Дугуйн хуяг ба Дугуйн АЭРОЗОЛ нөхөх системийн хооронд ямар ялгаа байна вэ? </button></h2>\r\n</div>\r\n<div id=\"d\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Дугуйн хуяг нь хоргүй, цэвэрлэхэд хялбар бөгөөд галд шатахгүй, тэсэрч дэлбэрэхгүй, зэврэлтээс хамгаалах олон талын ач холбогдолтойгоос гадна. Бүтэн жилийн турш 50 гаран удаагийн цооролтыг нөхөх чадвартай байдгаараа Дугуйн ломбоны системээс ялгаатай.&nbsp;АЭРОЗОЛ нөхдөг систем нь хамгийн бага инфляцийг хангадаг бөгөөд зөвхөн обуды газар дээрээс нь дээш өргөхөд хангалттай хийг өөртөө агуулсан байдаг.Тиймээс онцгой байдлын үед ганц удаа ашиглах боломжтой.</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 5 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#e\" aria-expanded=\"false\" aria-controls=\"e\"> Дугуйн хуяг ямар хэмжээний хатгалт, цооролтыг нөхөх чадвартай вэ? </button></h2>\r\n</div>\r\n<div id=\"e\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Унадагдугуйн дугуй 6.8mm хүртэл&nbsp; Мотоциклын дугуй 10mm хүртэл&nbsp; Суудтын машины дугуй 20mm хүртэл Ачаанымашиныдугуй25mm хүртэл Хүнд даацын машин, механизмын дугуй 38mm хүртэл цооролтыг нөхөх чадвартай.</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 6 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#f\" aria-expanded=\"false\" aria-controls=\"f\"> Дугуйн хавалгаа буюу хий үл буцаагч, зальтник гэж юу вэ? </button></h2>\r\n</div>\r\n<div id=\"f\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Дугуйнд хийг нэг урсгалаар оруулж, буцаахгүйгээр хаадаг клап юм. Дугуйн хуягийг дугуйнд хийхдээ энэхүү хавхлагыг авч, хийг бүрэн гаргана. <img src=\"/laravel-filemanager/photos/shares/standard-bore-trc1.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 7 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#g\" aria-expanded=\"false\" aria-controls=\"g\"> Дугуйд 10 сар байсны дараа дуйгуйн хуяг яг юу болдог вэ? </button></h2>\r\n</div>\r\n<div id=\"g\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Дугуйн хуяг нь удаан хугацааны туршид хатаж болзошгүй шингэн юм. Дугуйн хуяг дахь зэв ба зэврэлтийг дарангуйлагч нь цаг хугацааны явцад задардаг. Иймд дугуйн хуягийг идэвхтэй байгалгахын тулд дугуйнд хийснээс хойш 10 сарын дараа нэмж хийж болно. Эсвэл 1 жил тутамд сольж хэрэглэхийг зөвлөж байна.</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 8 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#h\" aria-expanded=\"false\" aria-controls=\"h\"> Дугуйны даралтын тухайд PSI, BAR kPa гэж юу вэ? </button></h2>\r\n</div>\r\n<div id=\"h\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Тээврийн хэрэгслийн дугуйн хийн даралтыг Монголд BAR-аар хэмждэг.&nbsp;АНУ-д PSI (фунт)KPA Kilopascal - Даралтын нэгж.&nbsp;1 kPa нь ойролцоогоор 1 см2 талбайд 10 г масстай даралттай байдаг.&nbsp;101.3 kPa = 1 atm байна.&nbsp;kPa хэмжих нэгжийг Европын орнуудад ихэвчлэн ашигладаг.BAR нь 100 килопаскал гэж тодорхойлогддог даралтын нэгж юм.&nbsp;Квадрат сантиметр тутамд 1 бар = 100 kPa (килопаскал).&nbsp;1 бар = 14,50 PSI.&nbsp;Regarding</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 9 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#i\" aria-expanded=\"false\" aria-controls=\"i\"> Дугуйн хуягийг TPMS систем суурлгасан дугуйн ашиглаж болох уу? </button></h2>\r\n</div>\r\n<div id=\"i\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">TPMS суурилуулсан дугуйнд ашиглах боломжгүй.</div>\r\n</div>\r\n</div>\r\n<!---------------------------------- 10 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#j\" aria-expanded=\"false\" aria-controls=\"j\"> Дугуйн хуяг нь байгаль орчинд аюултай юу? </button></h2>\r\n</div>\r\n<div id=\"j\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Дугуйн хуяг нь CE буюу Европын холбооноос гаргасан хүн, амьтан, хүрээлэн буй орчинд аюулгүйг нотолсон сертификат, RоSH- Европын холбооны Аюултай бодис агуулаагүй сертификат, MSDS- Химийн аюулгүй байдлын мэдээллийн хуудас зэргээр баталгаажсан&nbsp; байгаль орчинд аюулгүй бүтээгдэхүүн бөгөөд хэрвээ их хэмжээгээр хаях гэж буй үед усаар сайтар шингэлэж зориулалтын газар асгахыг зөвлөдөг.</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 11 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#k\" aria-expanded=\"false\" aria-controls=\"k\"> Би танай бүтээгдэхүүнийг худалдаж авмаар байна. Орон нутагт зардаг уу? </button></h2>\r\n</div>\r\n<div id=\"k\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Бид одоогоор Улаанбаатар хотод борлуулалтын цэгээрээ дамжуулан худалдаалж байгаа бөгөөд та 7755-4499 дугаарт холбогдож хүргүүлэн авч болно. Мөн бид Улаанбаатар хотын хэрэглэгч нартаа хүргэхээс гадна дугуйнд суурилуулж өгөх үйлчилгээг нэвтрүүлээд байна.Орон нутгаас бидэнтэй холбоо барьж бөөнөөр эсвэл ширхэгээр захиалж авахболомжто</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 12 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#l\" aria-expanded=\"false\" aria-controls=\"l\">Дугуйн хуяг дугуйг гэмтээх үү?</button></h2>\r\n</div>\r\n<div id=\"l\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Үгүй, Дугуйн хуяг нь 1 жилийн турш хагаралтаас хамгаалдаг ба мөн обудыг зэв, зэврэлтээс хамгаалах шинж чанартай. &nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 13 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#m\" aria-expanded=\"false\" aria-controls=\"m\">Дугуйн хуяг тэнцвэр алдагдахад хүргэх үү?</button></h2>\r\n</div>\r\n<div id=\"m\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Автомашин хэт хурдтэй явах үед дугуй чичрэх тохолдол байдаг. Энэ нь дугуйн баланстай холбоотой . Энэ төрлийн бүх бүтээгдэхүүнүүд автомашины энэ чичирхийллийг тодохой хэмжээгээр дэмждэг. Иймд хурдаа тохируулан явахыг зөвлөж байна. Доорх хүснэгтэд Дугуйн хуяг хийсэн суудлын автомашинд чичирхийлэл хэрхэн мэдрэгдэж байгааг Монголд хийсэн туршилтын үр дүнг оруулав.</p>\r\n<table width=\"697\">\r\n<tbody>\r\n<tr>\r\n<td width=\"160\">\r\n<p><strong>Туршилтын</strong> <strong>автомашин</strong></p>\r\n</td>\r\n<td width=\"105\">\r\n<p><strong>Хийсэн хэмжээ</strong></p>\r\n</td>\r\n<td width=\"114\">\r\n<p><strong>Тэнхлэгийн дугуйнууд</strong></p>\r\n</td>\r\n<td width=\"102\">\r\n<p><strong>Хурд</strong></p>\r\n</td>\r\n<td width=\"216\">\r\n<p><strong>Үрнөлөө</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"160\">\r\n<p>Prius 41машин</p>\r\n</td>\r\n<td width=\"105\">\r\n<p>500мл</p>\r\n</td>\r\n<td width=\"114\">\r\n<p>Урд хоёр дугуй</p>\r\n</td>\r\n<td width=\"102\">\r\n<p>145км / цаг</p>\r\n</td>\r\n<td width=\"216\">\r\n<p>Бүх зүйл хэвийн</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"160\">\r\n<p>Prius 41машин</p>\r\n</td>\r\n<td width=\"105\">\r\n<p>500мл</p>\r\n</td>\r\n<td width=\"114\">\r\n<p>Арын хоёр дугуй</p>\r\n</td>\r\n<td width=\"102\">\r\n<p>140км / цаг</p>\r\n</td>\r\n<td width=\"216\">\r\n<p>Бага зэрэг чичирсэн</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"160\">\r\n<p>Prius 41машин</p>\r\n</td>\r\n<td width=\"105\">\r\n<p>500мл</p>\r\n</td>\r\n<td width=\"114\">\r\n<p>Дөрвөн дугуй</p>\r\n</td>\r\n<td width=\"102\">\r\n<p>130км / цаг</p>\r\n</td>\r\n<td width=\"216\">\r\n<p>Бага зэрэг чичирсэн</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 14 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#n\" aria-expanded=\"false\" aria-controls=\"n\">Миний дугуйн хуяг ажиллахгүй байна. Яагаад?</button></h2>\r\n</div>\r\n<div id=\"n\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Цооролтын хэмжээ нь манай бүтээгдэхүүний нөхөх хүчин чадлаас хэт том байвал ажиллахгүй гэдгийг анхаараарай. Тус бүтээгдэхүүн нь мотоциклийн дугуйнд дээд тал нь 10mm, автомашины дугуйнд ихдээ 20mm, ачааны авто машинд 25mm, том оврын хүнд машин механизмын дугуйнд хамгийн ихдээ 38mm, харин олгой хаймартай дугуйнд хамгийн ихдээ 6.8mm цоорхойг нөхөх чадвартай</p>\r\n<p>Энэхүү бүтээгдэхүүн нь зальтник буюу амаар хий алдалт, бөөрний хагаралт зэргийг засахгүй бөгөөд обуд дугуй хоёрын хооронд гарсан зайг нөхөхгүй.&nbsp;</p>\r\n<p>Дугуйн хуягийг дугуйндаа тохирох хэмжээнээс нь багаар хийсэн үед цоорхойг үр дүнтэй нөхөх боломжгүй байдаг.&nbsp; <br /><br />Та олгой хаймар дунгуйндаа хэрэглэдэг бол хэмжээ таарсан олгой хийсэн эсэхээ шалгаарай. Олгой хаймрыг хийхээсээ өмнө сайтар арчиж, шинэ олгой хаймрыгцоолж болох нөхөөсний үлдэгдэл, өргөс, булцуу эсвэл бусад зүйлс байгаа эсэхийг шалгаарай.</p>\r\n<p>Дугуйн хуяг нь дугуйн хий хэт багатай байх үед нөхөх явц удаан байдаг.</p>\r\n<p>Дугуйны хээ хэт багассан дугуйнд нөхөх чадвар алдах магадлалтай.&nbsp;</p>\r\n<p>Дугуй руу шахахаас өмнө дугуйн хуягийг сайтар сэгсрэхгүй байх нь шингэн ба битүүмжлэх бодисын харьцаа алдагдахад хүргэнэ.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 15 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#o\" aria-expanded=\"false\" aria-controls=\"o\"> Дугуйн хуягийг хийлдэг гудас, бөмбөг гэх мэт зүйлд ашиглаж болох уу? </button></h2>\r\n<div id=\"o\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Дугуйн хуягийг өөр зориулалтаар ашиглахыг бид санал болгодоггүй, баталгаа өгөхгүй.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 16 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#p\" aria-expanded=\"false\" aria-controls=\"p\">Дугуйн хуягийг дугуйндаа хэр хэмжээгээр хийдэг вэ?</button></h2>\r\n</div>\r\n<div id=\"p\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\"><img src=\"/laravel-filemanager/photos/shares/Хэмжээ.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 17 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#q\" aria-expanded=\"false\" aria-controls=\"p\">Хагарсан дугуйд хэрэглэж болох уу?</button></h2>\r\n</div>\r\n<div id=\"q\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Бид дугуйн хуягийг цоолохоос өмнө, нэг тэнхлэгийн дугуйнуудад ижил хэмжээтэйгээр хийхийг зөвлөдөг. Хэрэв таны дугуй цоорсон үед Дугуйн хуягийг хийх гэж байгаа бол цоорхойг 6 цагийн байрлалд байршуулан зааврын дагуу хийх хэрэгтэй. Мөн бид дугуй өргөгч ашиглахыг зөвлөдөг.&nbsp;</p>\r\n<p>Дугуйн хуяг нь дугуй эргэж байх явцад цоорсон хэсэгт хүрч, нүхийг бөглөн агаар нэвтрэхийг нэн дуруй зогсооно.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 18 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#r\" aria-expanded=\"false\" aria-controls=\"p\">Огой хаймартай дугуйнд ашиглаж болох уу?</button></h2>\r\n</div>\r\n<div id=\"r\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Дугуйн хуяг нь олгоогүй дугуйнд зориулагдсан.&nbsp;</p>\r\n<p><br />Олгойтой дугуйны хувьд битүүмжлэх нөлөө нь даац болон олгой хаймарын чанараас хамаарна.&nbsp;Хэрэв та олгойтой дугуйнд Дугуйн хуягийг хийх гэж байгаа бол олгой хаймар нь дугуйныхаа хэмжээтэй яг таарч байгааг шалгаарай. Зарим тохиолдолд дугуйны хэмжээнээс нэг размер жижиг олгой тавих тохиолдол байдаг. Энэ тохиолдолд Дугуйн хуягийг хэрэглэхийг зөвлөхгүй. <br /><br /></p>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 19 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#s\" aria-expanded=\"false\" aria-controls=\"p\"> Өөр төрлийн бүтээгдэхүүнтэй хольж хэрэглэж болох уу?</button></h2>\r\n</div>\r\n<div id=\"s\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Үгүй. Өөр бүтээгдэхүүн эсвэл шингэн агуулсан зүйл дугуйнд нэмвэл бид бүтээгдэхүүнийхээ баталгааг санал болгож чадахгүй</p>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 20 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#t\" aria-expanded=\"false\" aria-controls=\"p\">Дугуйн хуягийг санамсаргүйгээр уух, нүдэндээ оруулах, арьс, үсэндээ хүргэсэн бол яах вэ?</button></h2>\r\n</div>\r\n<div id=\"t\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Арьс, үсийг усаар угаана (боломжтой бол саван). Таны арьс дээр цочрол өгсөн, харшил хөдөлсөн тохиолдолд эмнэлгийн тусламж аваарай.</p>\r\n<p>Хэрэв нүдэнд хүрсэн бол тэр даруй усаар зайлж угаана уу. Хэрэв нүдэнд цочрол үүсч өвдөх мэдрэмж төрвөл өөрт хамгийн ойр байх эмнэлгийн тусламж шуурхай аваарай.</p>\r\n<p>Хэрэв санамсаргүй байдлаар залгисан бол тэр даруй эмнэлгийн тусламж аваарай. Илүү их арга хэмжээ авахыг хүсвэл MSDS хуудсыг үзнэ үү.</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<!------------------------------------ 20 -------------------------------------></div>\r\n</div>'),
(21, 1, 0, 120000, '36570.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'ДУГУЙ ХИЙЛЭГЧ', '<p>Details:<br />Rated voltage: DC 12V<br />Max. Current: &lt;15A<br />Max. Pressure: 150psi<br />Air Flow: 30L/min<br />Cable Length: 3.65m<br />Air Hose: 0.65M rubber pipe<br />Max duty cycle: 30mins<br />Working temperature: -40~+80<br />Pressure Gauge: With pressure gauge built in<br />Cylinder: 30mm cylinder<br />Accessories: 1pcs nozzle</p>', '<div id=\"ali-anchor-AliMagic-7inuqn\" class=\"magic-0\" data-section=\"AliMagic-7inuqn\" data-section-title=\"Product Description\" data-spm-anchor-id=\"a2700.wholesale.pronpeci14.i0.622d3f4bRX8jz1\">Product Description</div>\r\n<div class=\"icbu-pc-images magic-1\">\r\n<div>\r\n<div class=\"flex-layout-v\">\r\n<div class=\"flex-layout-h magic-1\">\r\n<div class=\"magic-2\"><img class=\"magic-3\" src=\"https://sc02.alicdn.com/kf/HTB1NPXgehiH3KVjSZPfq6xBiVXas/238204233/HTB1NPXgehiH3KVjSZPfq6xBiVXas.jpg\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"ife-detail-decorate-table\">\r\n<table class=\"has-title all magic-4\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<div class=\"magic-5\"><strong>Model</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\">KS605</div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\"><strong>Power Source</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-6\">DC 12V</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div class=\"magic-5\"><strong>Amperage</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\">10A</div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\"><strong>Rated Power</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-7\">140W</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div class=\"magic-5\"><strong>Cylinder</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\">Double 30 cylinder</div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\"><strong>Tire Pressure Meter</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-7\">Pointer Meter</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div class=\"magic-5\"><strong>Charging Time</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\">2-3 minutes</div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\"><strong>Continuous Working period</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-7\">&le;10min</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div class=\"magic-5\"><strong>Motor Type</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\">Permanent Magnetic</div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\"><strong>Power Cord</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-7\">3 Meters Cord with Battary Clamp</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div class=\"magic-5\"><strong>Working Duration</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\">20 Minutes</div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\"><strong>Air Flow</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-7\">50 Liters Per Minute</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div class=\"magic-5\"><strong>Power Supply Type</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\">Cigarette Lighter</div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\"><strong>Bulb Type</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-7\">LED</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div class=\"magic-5\"><strong>Rated Power</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\">300W</div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\"><strong>Warranty</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-7\">12 months</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div class=\"magic-5\"><strong>Required Values</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\">PSI, BAR, KPA, KG/CM&sup2;</div>\r\n</td>\r\n<td>\r\n<div class=\"magic-5\"><strong>Display Units</strong></div>\r\n</td>\r\n<td>\r\n<div class=\"magic-7\">KPA, PSI, BAR, KG/ CM&sup2;</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"4\">\r\n<div class=\"magic-8\"><strong>Package includes:&nbsp;</strong>1 x Air Compressor; 3 x Nozzle Adapters(1 x Adapter for PVC Boats; 1 x Adapter for Inflatables;1 x Ball Needle); 1 x User Manual; 1 x Extra Fuse; 1 x Warranty Card</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"4\">\r\n<div class=\"magic-8\"><strong>Shining points:&nbsp;</strong>Quick and accurate inflation; all metal; easy to operate</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"4\">\r\n<div class=\"magic-8\"><strong>Delivery time:</strong>&nbsp;according to the quantity(can be negotiable)</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"4\">\r\n<div class=\"magic-8\"><strong>Customized Service:</strong>&nbsp;customize gift card and other small items</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<div class=\"detail-decorate-json-renderer-container\">\r\n<div class=\"magic-11\">\r\n<h3 class=\"magic-12\">&nbsp;</h3>\r\n<h3 class=\"magic-13\">Application</h3>\r\n<div class=\"magic-14\">\r\n<div class=\"magic-15\">\r\n<div class=\"magic-16\">\r\n<p class=\"magic-17\">Car/Business car; SUV/MPV; Truck; Electromobile; Motorcycle; Bicycle; kayak; Ball; Airmattress</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"ali-anchor-AliMagic-i6ivk2\" class=\"magic-0\" data-section=\"AliMagic-i6ivk2\" data-section-title=\"Detailed Images\">Detailed Images</div>\r\n<div class=\"icbu-pc-images magic-1\">\r\n<div>\r\n<div class=\"flex-layout-v\">\r\n<div class=\"flex-layout-h magic-1\">\r\n<div class=\"magic-2\"><img class=\"magic-3\" src=\"https://sc01.alicdn.com/kf/HTB1Z2RbelCw3KVjSZR0q6zcUpXai/238204233/HTB1Z2RbelCw3KVjSZR0q6zcUpXai.jpg_.webp\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"ali-anchor-AliMagic-2u7ffv\" class=\"magic-0\" data-section=\"AliMagic-2u7ffv\" data-section-title=\"Hot-selling Products\">Hot-selling Products</div>\r\n<div class=\"icbu-pc-images magic-1\">\r\n<div class=\"flex-layout-v\">\r\n<div class=\"flex-layout-h magic-1\">\r\n<div class=\"magic-18\"><a href=\"https://www.alibaba.com/product-detail/High-pressure-multifunctional-12volt-tire-pump_62180007131.html?spm=a2747.manage.0.0.fd6b71d2JztAO1\" target=\"_blank\" rel=\"noopener noreferrer\"><img class=\"magic-19\" src=\"https://sc01.alicdn.com/kf/HTB1K.zgeEWF3KVjSZPhq6xclXXal/238204233/HTB1K.zgeEWF3KVjSZPhq6xclXXal.jpg_.webp\" /></a></div>\r\n<div class=\"magic-20\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"ali-anchor-AliMagic-umb8f8\" class=\"magic-0\" data-section=\"AliMagic-umb8f8\" data-section-title=\"Instruction Manual\">Instruction Manual</div>\r\n<div class=\"icbu-pc-images magic-1\">\r\n<div>\r\n<div class=\"flex-layout-v\">\r\n<div class=\"flex-layout-h magic-1\">\r\n<div class=\"magic-2\"><img class=\"magic-3\" src=\"https://sc01.alicdn.com/kf/HTB1U9.Ld3mH3KVjSZKzq6z2OXXaE/238204233/HTB1U9.Ld3mH3KVjSZKzq6z2OXXaE.jpg_.webp\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"icbu-pc-images magic-1\">\r\n<div>\r\n<div class=\"flex-layout-v\">\r\n<div class=\"flex-layout-h magic-1\">\r\n<div class=\"magic-21\"><img class=\"magic-22\" src=\"https://sc01.alicdn.com/kf/HTB1b3wOd.uF3KVjSZK9q6zVtXXao/238204233/HTB1b3wOd.uF3KVjSZK9q6zVtXXao.jpg_.webp\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-31 01:49:19', '2019-09-13 06:53:02', NULL, NULL),
(22, 1, 0, 10000, '35568.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'ЦЭВЭРЛЭГЧ ХӨӨС', '<p>Ямар ч толбо, тосны мөрийг хормын дотор цэвэрлэх хөөстэй цэвэрлэгч.&nbsp;</p>\r\n<p>Бусад энэ төрлийн бүтээгдэхүүн дотроос шалгарсан чанартай цэвэрлэгч юм.</p>', '<p><strong><span data-spm-anchor-id=\"a2700.details.pronpeci14.i0.10235f3bERV1sN\">Direction:</span></strong></p>\r\n<p>1. Shell well before spray;</p>\r\n<p>2. Keep 15cm away from the object while spray;</p>\r\n<p>3. Wait for 20-30s, then use brush or wet cloth to wipe the surface.</p>\r\n<p><strong>Cautions:</strong></p>\r\n<p>1. Keep away from Children;</p>\r\n<p>2.Operate in ventilated place;</p>\r\n<p>3. Store the product in the place under 40 centigrade;</p>\r\n<p>4. Don\'t put it in the car and keep away from heat and fire.</p>\r\n<p><img src=\"https://sc01.alicdn.com/kf/HTB1pa9dwSYTBKNjSZKbq6xJ8pXaX/234312016/HTB1pa9dwSYTBKNjSZKbq6xJ8pXaX.jpg_.webp\" alt=\"Best price Multi-purpose foam cleaner spray  650ml for car\" width=\"750\" height=\"600\" data-alt=\"Best price Multi-purpose foam cleaner spray  650ml for car\" data-width=\"750\" /></p>', NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-31 01:49:39', '2019-09-13 11:12:46', NULL, NULL),
(23, 1, 0, 120000, '71863.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'АЛБАДАН  АСААГЧ', '<table border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><span data-spm-anchor-id=\"a2700.details.pronpeci14.i3.5b9a366f8TpbDK\">Capacity</span></p>\r\n</td>\r\n<td>\r\n<p>16800mAh</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Input</p>\r\n</td>\r\n<td>\r\n<p>15V/1A</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Output&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>5V/2A;12V/15v/19v-3A</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Start current</p>\r\n</td>\r\n<td>\r\n<p>300A</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Peak current</p>\r\n</td>\r\n<td>\r\n<p>600A</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Cycle life</p>\r\n</td>\r\n<td>\r\n<p>&gt;3000 times</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Operate temperature</p>\r\n</td>\r\n<td>\r\n<p>-20℃-60℃</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Warranty</p>\r\n</td>\r\n<td>\r\n<p>12 months</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p data-spm-anchor-id=\"a2700.details.pronpeci14.i1.5b9a366f8TpbDK\">Suitable for</p>\r\n</td>\r\n<td>\r\n<p>jump Start 12V gasoline car, Mobile phone, PC and other electronic products</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<div id=\"ali-anchor-AliPostDhMb-25hsf\" data-section=\"AliPostDhMb-25hsf\" data-section-title=\"Product Description\">\r\n<div>\r\n<p><img src=\"https://sc01.alicdn.com/kf/HTB18u6.u1uSBuNjy1Xcq6AYjFXaj/228258256/HTB18u6.u1uSBuNjy1Xcq6AYjFXaj.jpg_.webp\" alt=\"Portable jump starter 12V car battery jumper powerbank for diesel gasoline car\" width=\"750\" height=\"873\" data-alt=\"Portable jump starter 12V car battery jumper powerbank for diesel gasoline car\" data-spm-anchor-id=\"a2700.details.pronpeci14.i0.5b9a366f8TpbDK\" /></p>\r\n<p><img src=\"https://sc01.alicdn.com/kf/HTB1wez3aK6sK1RjSsrbq6xbDXXav/228258256/HTB1wez3aK6sK1RjSsrbq6xbDXXav.jpg_.webp\" alt=\"Portable jump starter 12V car battery jumper powerbank for diesel gasoline car\" width=\"750\" height=\"1381.168831168831\" data-alt=\"Portable jump starter 12V car battery jumper powerbank for diesel gasoline car\" data-width=\"750\" /></p>\r\n<p><img src=\"https://sc02.alicdn.com/kf/HTB18rp6ejgy_uJjSZSyq6zqvVXaM/228258256/HTB18rp6ejgy_uJjSZSyq6zqvVXaM.jpg_.webp\" alt=\"Portable jump starter 12V car battery jumper powerbank for diesel gasoline car\" width=\"750\" height=\"765.9375\" data-alt=\"Portable jump starter 12V car battery jumper powerbank for diesel gasoline car\" data-width=\"751\" data-height=\"767\" /></p>\r\n</div>\r\n</div>\r\n<div id=\"ali-anchor-AliPostDhMb-jg0ya\" data-section=\"AliPostDhMb-jg0ya\" data-section-title=\"Packaging &amp; Shipping\">\r\n<div id=\"ali-title-AliPostDhMb-jg0ya\">Packaging &amp; Shipping</div>\r\n<div>\r\n<p>&nbsp;<img src=\"https://sc01.alicdn.com/kf/HTB1iucLu4WYBuNjy1zkq6xGGpXaI/228258256/HTB1iucLu4WYBuNjy1zkq6xGGpXaI.jpg_.webp\" alt=\"Portable jump starter 12V car battery jumper powerbank for diesel gasoline car\" width=\"750\" height=\"1009\" data-alt=\"Portable jump starter 12V car battery jumper powerbank for diesel gasoline car\" /></p>\r\n<p>1 X Wall charger<br />1 X Car charger<br />1 X USB data cable<br />1 X 8+1 computer adaptor<br />1 X Battery clamp<br />1 X User manual</p>\r\n</div>\r\n</div>', NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-31 01:50:18', '2019-09-13 10:57:56', NULL, NULL);
INSERT INTO `products` (`id`, `status`, `shingen`, `mainprice`, `image`, `cer1`, `cer2link`, `cer3link`, `cer4link`, `cer5link`, `cer6link`, `cer7link`, `cer8link`, `cer2`, `cer3`, `cer4`, `cer5`, `cer6`, `cer7`, `cer8`, `cer1link`, `title`, `content`, `description`, `video_scroll_a`, `video_scroll_b`, `video_scroll_c`, `une1`, `une2`, `une3`, `created_at`, `updated_at`, `f_video`, `faq`) VALUES
(25, 1, 1, 15000, '50654.jpg', '47058.png', 'http://bears.mn/laravel-filemanager/files/shares/Bears Trade Co.,Ltd 20181129.pdf', 'http://bears.mn/laravel-filemanager/files/shares/Safety data sheet.pdf', 'http://bears.mn/laravel-filemanager/files/shares/High Way Vibration Test of tire sealant impact on Vehicles balance.pdf', 'http://bears.mn/laravel-filemanager/files/shares/Tire Sealant Impact on Wheel Banlace.pdf', NULL, NULL, NULL, '82337.png', '29795.png', '74044.png', '74034.png', '', '', '', 'https://www.flipsnack.com/F58999E569B/-.html', 'ДУГУЙН ХУЯГ 350 ml', '<p>САВАЛГАА:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 350 ml</p>\r\n<p>БҮТЭЦ:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; Коктейль</p>\r\n<p>ХАДГАЛАХ ХУГАЦАА: Сэрүүн нөхцөлд 3 жил</p>\r\n<p>ХЭРЭГЛЭХ ХУГАЦАА: &nbsp;Дугуйнд хийснээс хойш 1 жил</p>\r\n<p>Дугуйн хуяг нь CE буюу Европын холбооноос гаргасан хүн, амьтан, хүрээлэн буй орчинд аюулгүйг нотолсон сертификат, RоSH- Европын холбооны Аюултай бодис агуулаагүй сертификат, MSDS- Химийн аюулгүй байдлын мэдээллийн хуудас зэргээр баталгаажсан -45/+90 хэмд зохицон ажиллах чадвартай техникийн дугуйн хагаралтыг засварлах өөрөө нөхөгдөх шингэн технологи юм.</p>\r\n<p>Дугуйн хуяг нь 1 жилийн турш&nbsp; 50 гаран цооролтыг нөхөх чадвартай.</p>', '<p><img style=\"float: right;\" src=\"/laravel-filemanager/photos/shares/босоо1.jpg\" alt=\"\" width=\"35%\" height=\"\" /></p>\r\n<h4 style=\"font-weight: 400;\"><strong>ТА ДУГУЙН ХУЯГ ДУГУЙНДАА ХИЙХ ГЭЖ БАЙГАА БОЛ&nbsp;</strong><br /><strong>ДАРААХ ЗААВРЫН ДАГУУ ХИЙНЭ ҮҮ.</strong></h4>\r\n<p>1. Машины дугуй хийлэгч амыг 2 эсвэл 10 цагийн зүүний байрлалд зогсооно</p>\r\n<p>2. Бүтээгдэхүүний хананд байрлах зальтник тайлагчийг ашиглан дугуйн хийг бүрэн гаргана.&nbsp;&nbsp;</p>\r\n<p>3. Бүтээгдэхүүнийг 30 секундийн турш сайтар сэгсэрнэ.</p>\r\n<p>4. Бүтээгдэхүүний тагийг тайлж, амсарт байрлах хамгаалалтын тугалган цаасыг бүрэн хуулж авна.</p>\r\n<p>5. &nbsp;Хагаралтыг үүсгэсэн зүйлийг авч хаяхаас гадна нүхийг 6 цагийн байрлалд байлгана.</p>\r\n<p>6. Бүтээгдэхүүнийг дугуйндаа дуустал шахаж хийнэ.</p>\r\n<p>7. Дугуй хийлэгч аманд Зальтникаа хийж сайтар чангална.</p>\r\n<p>8. Дугуйгаа хийлэгчээр тохирох түшин хүртэл хийлнэ.</p>\r\n<h4><strong>ТООЦООЛОХ&nbsp;</strong></h4>\r\n<p>Та өөрийн дугуйд хир хэмжээтэй хийж хэрэглэх талаар мэдэхийг хүсвэл дор байгаа тооцоолуур дээр өөрийн машины дугуйн хэмжээг оруулж тооцоолсноор мэдэх боломжтой. Хэрэв таны машины дугуй 2 хэмжээстэй байвал, <strong>ГАР ХЭМЖЭЭ</strong> гэсэн арын тооцоолуурын хэсэгт зааврын дагуу дугуйгаа хэмжиж хийснээр хэрэг болох Дугуйн хуягийн хэмжээг мэднэ.</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/laravel-filemanager/photos/shares/zaluu.jpg\" alt=\"\" width=\"100%\" /></p>\r\n<hr />\r\n<p>Та Дугуйн хуяг худалдаж авахыг хүсвэл манай дэлгүүрт ирэн үйлчлүүлж болохоос гадна хүргэлтээр байгаа газраа хүргүүлэн авч болно. Дугуйн хуягийг мотоцикл болон автомашинуудад хийх хэмжээ харилцан адилгүй байдаг.</p>', NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-12 09:12:28', '2020-05-20 16:44:04', 'https://youtu.be/OEwoth0noVs', '<div id=\"accordionExample\" class=\"accordion asuult_hariult\"><!--------------------------------- 1 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#a\" aria-expanded=\"true\" aria-controls=\"a\"> Дугуйн хуяг нь&nbsp;дугуйны&nbsp;ёроолд&nbsp;шингэн хэлбэртэй&nbsp;байх уу?&nbsp; </button></h2>\r\n</div>\r\n<div id=\"a\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Дугуйн хуяг нь наалдамхай шинж чанартай бөгөөд энэ нь дугуйг дотроос нь нөхдөг. Энэ нь дугуй эргэлдэх үед чичиргээ үүсэхээс сэргийлж, чигжээс нь дугуйг дахин урсгахад хүргэдэг. Дугуй нь хөдөлгөөнгүй үед чигжээс нь аажмаар дугуйны ёроолд хуримтлагдана. Дугуй ажиллаж байгаа үед дугуйны дотор талд жигд хуваарилах болно.</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 2 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#b\" aria-expanded=\"false\" aria-controls=\"b\"> Яагаад Дугуйн хуяг зөвхөн 1 жилийн хугацаанд дугуйнд хүчинтэй байна вэ?&nbsp; </button></h2>\r\n</div>\r\n<div id=\"b\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Дугуйн хуяг нь усан дээр суурилсан шингэн тул уурших шинж чанартай. Бид Дугуйн хуягийг 10 сар тутамд дахин суулгаж, 1 жил тутамд солихыг зөвлөж байна.</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 3 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#c\" aria-expanded=\"false\" aria-controls=\"c\"> Хагаралтыг засах үед гарсан чигжээс нь хатуурдаг уу? </button></h2>\r\n</div>\r\n<div id=\"c\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Үгүй. Дугуйн хуяг нь үнэндээ шилэн, резинэн тоосонцор болон бусад битүүмжлэх бодисуудаас бүрддэг. Шингэн нь цоорхойгоор гадагшлах тусам нүхийг дүүргэж агаар алдагдахаас сэргийлдэг.&nbsp;Дугуйныхаа гадна талд урссан илүүдэл шингэн нь хатуурахгүй бөгөөд ууршиж арилна.</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 4 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#d\" aria-expanded=\"false\" aria-controls=\"d\"> Дугуйн хуяг ба Дугуйн АЭРОЗОЛ нөхөх системийн хооронд ямар ялгаа байна вэ? </button></h2>\r\n</div>\r\n<div id=\"d\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Дугуйн хуяг нь хоргүй, цэвэрлэхэд хялбар бөгөөд галд шатахгүй, тэсэрч дэлбэрэхгүй, зэврэлтээс хамгаалах олон талын ач холбогдолтойгоос гадна. Бүтэн жилийн турш 50 гаран удаагийн цооролтыг нөхөх чадвартай байдгаараа Дугуйн ломбоны системээс ялгаатай.&nbsp;АЭРОЗОЛ нөхдөг систем нь хамгийн бага инфляцийг хангадаг бөгөөд зөвхөн обуды газар дээрээс нь дээш өргөхөд хангалттай хийг өөртөө агуулсан байдаг.Тиймээс онцгой байдлын үед ганц удаа ашиглах боломжтой.</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 5 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#e\" aria-expanded=\"false\" aria-controls=\"e\"> Дугуйн хуяг ямар хэмжээний хатгалт, цооролтыг нөхөх чадвартай вэ? </button></h2>\r\n</div>\r\n<div id=\"e\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Унадагдугуйн дугуй 6.8mm хүртэл&nbsp; Мотоциклын дугуй 10mm хүртэл&nbsp; Суудтын машины дугуй 20mm хүртэл Ачаанымашиныдугуй25mm хүртэл Хүнд даацын машин, механизмын дугуй 38mm хүртэл цооролтыг нөхөх чадвартай.</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 6 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#f\" aria-expanded=\"false\" aria-controls=\"f\"> Дугуйн хавалгаа буюу хий үл буцаагч, зальтник гэж юу вэ? </button></h2>\r\n</div>\r\n<div id=\"f\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Дугуйнд хийг нэг урсгалаар оруулж, буцаахгүйгээр хаадаг клап юм. Дугуйн хуягийг дугуйнд хийхдээ энэхүү хавхлагыг авч, хийг бүрэн гаргана. <img src=\"/laravel-filemanager/photos/shares/standard-bore-trc1.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 7 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#g\" aria-expanded=\"false\" aria-controls=\"g\"> Дугуйд 10 сар байсны дараа дуйгуйн хуяг яг юу болдог вэ? </button></h2>\r\n</div>\r\n<div id=\"g\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Дугуйн хуяг нь удаан хугацааны туршид хатаж болзошгүй шингэн юм. Дугуйн хуяг дахь зэв ба зэврэлтийг дарангуйлагч нь цаг хугацааны явцад задардаг. Иймд дугуйн хуягийг идэвхтэй байгалгахын тулд дугуйнд хийснээс хойш 10 сарын дараа нэмж хийж болно. Эсвэл 1 жил тутамд сольж хэрэглэхийг зөвлөж байна.</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 8 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#h\" aria-expanded=\"false\" aria-controls=\"h\"> Дугуйны даралтын тухайд PSI, BAR kPa гэж юу вэ? </button></h2>\r\n</div>\r\n<div id=\"h\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Тээврийн хэрэгслийн дугуйн хийн даралтыг Монголд BAR-аар хэмждэг.&nbsp;АНУ-д PSI (фунт)KPA Kilopascal - Даралтын нэгж.&nbsp;1 kPa нь ойролцоогоор 1 см2 талбайд 10 г масстай даралттай байдаг.&nbsp;101.3 kPa = 1 atm байна.&nbsp;kPa хэмжих нэгжийг Европын орнуудад ихэвчлэн ашигладаг.BAR нь 100 килопаскал гэж тодорхойлогддог даралтын нэгж юм.&nbsp;Квадрат сантиметр тутамд 1 бар = 100 kPa (килопаскал).&nbsp;1 бар = 14,50 PSI.&nbsp;Regarding</div>\r\n</div>\r\n</div>\r\n<!--------------------------------- 9 --------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#i\" aria-expanded=\"false\" aria-controls=\"i\"> Дугуйн хуягийг TPMS систем суурлгасан дугуйн ашиглаж болох уу? </button></h2>\r\n</div>\r\n<div id=\"i\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">TPMS суурилуулсан дугуйнд ашиглах боломжгүй.</div>\r\n</div>\r\n</div>\r\n<!---------------------------------- 10 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#j\" aria-expanded=\"false\" aria-controls=\"j\"> Дугуйн хуяг нь байгаль орчинд аюултай юу? </button></h2>\r\n</div>\r\n<div id=\"j\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Дугуйн хуяг нь CE буюу Европын холбооноос гаргасан хүн, амьтан, хүрээлэн буй орчинд аюулгүйг нотолсон сертификат, RоSH- Европын холбооны Аюултай бодис агуулаагүй сертификат, MSDS- Химийн аюулгүй байдлын мэдээллийн хуудас зэргээр баталгаажсан&nbsp; байгаль орчинд аюулгүй бүтээгдэхүүн бөгөөд хэрвээ их хэмжээгээр хаях гэж буй үед усаар сайтар шингэлэж зориулалтын газар асгахыг зөвлөдөг.</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 11 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#k\" aria-expanded=\"false\" aria-controls=\"k\"> Би танай бүтээгдэхүүнийг худалдаж авмаар байна. Орон нутагт зардаг уу? </button></h2>\r\n</div>\r\n<div id=\"k\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">Бид одоогоор Улаанбаатар хотод борлуулалтын цэгээрээ дамжуулан худалдаалж байгаа бөгөөд та 7755-4499 дугаарт холбогдож хүргүүлэн авч болно. Мөн бид Улаанбаатар хотын хэрэглэгч нартаа хүргэхээс гадна дугуйнд суурилуулж өгөх үйлчилгээг нэвтрүүлээд байна.Орон нутгаас бидэнтэй холбоо барьж бөөнөөр эсвэл ширхэгээр захиалж авахболомжто</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 12 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#l\" aria-expanded=\"false\" aria-controls=\"l\">Дугуйн хуяг дугуйг гэмтээх үү?</button></h2>\r\n</div>\r\n<div id=\"l\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Үгүй, Дугуйн хуяг нь 1 жилийн турш хагаралтаас хамгаалдаг ба мөн обудыг зэв, зэврэлтээс хамгаалах шинж чанартай. &nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 13 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#m\" aria-expanded=\"false\" aria-controls=\"m\">Дугуйн хуяг тэнцвэр алдагдахад хүргэх үү?</button></h2>\r\n</div>\r\n<div id=\"m\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Автомашин хэт хурдтэй явах үед дугуй чичрэх тохолдол байдаг. Энэ нь дугуйн баланстай холбоотой . Энэ төрлийн бүх бүтээгдэхүүнүүд автомашины энэ чичирхийллийг тодохой хэмжээгээр дэмждэг. Иймд хурдаа тохируулан явахыг зөвлөж байна. Доорх хүснэгтэд Дугуйн хуяг хийсэн суудлын автомашинд чичирхийлэл хэрхэн мэдрэгдэж байгааг Монголд хийсэн туршилтын үр дүнг оруулав.</p>\r\n<table width=\"697\">\r\n<tbody>\r\n<tr>\r\n<td width=\"160\">\r\n<p><strong>Туршилтын</strong> <strong>автомашин</strong></p>\r\n</td>\r\n<td width=\"105\">\r\n<p><strong>Хийсэн хэмжээ</strong></p>\r\n</td>\r\n<td width=\"114\">\r\n<p><strong>Тэнхлэгийн дугуйнууд</strong></p>\r\n</td>\r\n<td width=\"102\">\r\n<p><strong>Хурд</strong></p>\r\n</td>\r\n<td width=\"216\">\r\n<p><strong>Үрнөлөө</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"160\">\r\n<p>Prius 41машин</p>\r\n</td>\r\n<td width=\"105\">\r\n<p>500мл</p>\r\n</td>\r\n<td width=\"114\">\r\n<p>Урд хоёр дугуй</p>\r\n</td>\r\n<td width=\"102\">\r\n<p>145км / цаг</p>\r\n</td>\r\n<td width=\"216\">\r\n<p>Бүх зүйл хэвийн</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"160\">\r\n<p>Prius 41машин</p>\r\n</td>\r\n<td width=\"105\">\r\n<p>500мл</p>\r\n</td>\r\n<td width=\"114\">\r\n<p>Арын хоёр дугуй</p>\r\n</td>\r\n<td width=\"102\">\r\n<p>140км / цаг</p>\r\n</td>\r\n<td width=\"216\">\r\n<p>Бага зэрэг чичирсэн</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"160\">\r\n<p>Prius 41машин</p>\r\n</td>\r\n<td width=\"105\">\r\n<p>500мл</p>\r\n</td>\r\n<td width=\"114\">\r\n<p>Дөрвөн дугуй</p>\r\n</td>\r\n<td width=\"102\">\r\n<p>130км / цаг</p>\r\n</td>\r\n<td width=\"216\">\r\n<p>Бага зэрэг чичирсэн</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 14 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#n\" aria-expanded=\"false\" aria-controls=\"n\">Миний дугуйн хуяг ажиллахгүй байна. Яагаад?</button></h2>\r\n</div>\r\n<div id=\"n\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Цооролтын хэмжээ нь манай бүтээгдэхүүний нөхөх хүчин чадлаас хэт том байвал ажиллахгүй гэдгийг анхаараарай. Тус бүтээгдэхүүн нь мотоциклийн дугуйнд дээд тал нь 10mm, автомашины дугуйнд ихдээ 20mm, ачааны авто машинд 25mm, том оврын хүнд машин механизмын дугуйнд хамгийн ихдээ 38mm, харин олгой хаймартай дугуйнд хамгийн ихдээ 6.8mm цоорхойг нөхөх чадвартай</p>\r\n<p>Энэхүү бүтээгдэхүүн нь зальтник буюу амаар хий алдалт, бөөрний хагаралт зэргийг засахгүй бөгөөд обуд дугуй хоёрын хооронд гарсан зайг нөхөхгүй.&nbsp;</p>\r\n<p>Дугуйн хуягийг дугуйндаа тохирох хэмжээнээс нь багаар хийсэн үед цоорхойг үр дүнтэй нөхөх боломжгүй байдаг.&nbsp; <br /><br />Та олгой хаймар дунгуйндаа хэрэглэдэг бол хэмжээ таарсан олгой хийсэн эсэхээ шалгаарай. Олгой хаймрыг хийхээсээ өмнө сайтар арчиж, шинэ олгой хаймрыгцоолж болох нөхөөсний үлдэгдэл, өргөс, булцуу эсвэл бусад зүйлс байгаа эсэхийг шалгаарай.</p>\r\n<p>Дугуйн хуяг нь дугуйн хий хэт багатай байх үед нөхөх явц удаан байдаг.</p>\r\n<p>Дугуйны хээ хэт багассан дугуйнд нөхөх чадвар алдах магадлалтай.&nbsp;</p>\r\n<p>Дугуй руу шахахаас өмнө дугуйн хуягийг сайтар сэгсрэхгүй байх нь шингэн ба битүүмжлэх бодисын харьцаа алдагдахад хүргэнэ.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 15 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#o\" aria-expanded=\"false\" aria-controls=\"o\"> Дугуйн хуягийг хийлдэг гудас, бөмбөг гэх мэт зүйлд ашиглаж болох уу? </button></h2>\r\n<div id=\"o\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Дугуйн хуягийг өөр зориулалтаар ашиглахыг бид санал болгодоггүй, баталгаа өгөхгүй.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 16 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#p\" aria-expanded=\"false\" aria-controls=\"p\">Дугуйн хуягийг дугуйндаа хэр хэмжээгээр хийдэг вэ?</button></h2>\r\n</div>\r\n<div id=\"p\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\"><img src=\"/laravel-filemanager/photos/shares/Хэмжээ.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 17 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#q\" aria-expanded=\"false\" aria-controls=\"p\">Хагарсан дугуйд хэрэглэж болох уу?</button></h2>\r\n</div>\r\n<div id=\"q\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Бид дугуйн хуягийг цоолохоос өмнө, нэг тэнхлэгийн дугуйнуудад ижил хэмжээтэйгээр хийхийг зөвлөдөг. Хэрэв таны дугуй цоорсон үед Дугуйн хуягийг хийх гэж байгаа бол цоорхойг 6 цагийн байрлалд байршуулан зааврын дагуу хийх хэрэгтэй. Мөн бид дугуй өргөгч ашиглахыг зөвлөдөг.&nbsp;</p>\r\n<p>Дугуйн хуяг нь дугуй эргэж байх явцад цоорсон хэсэгт хүрч, нүхийг бөглөн агаар нэвтрэхийг нэн дуруй зогсооно.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 18 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#r\" aria-expanded=\"false\" aria-controls=\"p\">Огой хаймартай дугуйнд ашиглаж болох уу?</button></h2>\r\n</div>\r\n<div id=\"r\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Дугуйн хуяг нь олгоогүй дугуйнд зориулагдсан.&nbsp;</p>\r\n<p><br />Олгойтой дугуйны хувьд битүүмжлэх нөлөө нь даац болон олгой хаймарын чанараас хамаарна.&nbsp;Хэрэв та олгойтой дугуйнд Дугуйн хуягийг хийх гэж байгаа бол олгой хаймар нь дугуйныхаа хэмжээтэй яг таарч байгааг шалгаарай. Зарим тохиолдолд дугуйны хэмжээнээс нэг размер жижиг олгой тавих тохиолдол байдаг. Энэ тохиолдолд Дугуйн хуягийг хэрэглэхийг зөвлөхгүй. <br /><br /></p>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 19 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#s\" aria-expanded=\"false\" aria-controls=\"p\"> Өөр төрлийн бүтээгдэхүүнтэй хольж хэрэглэж болох уу?</button></h2>\r\n</div>\r\n<div id=\"s\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Үгүй. Өөр бүтээгдэхүүн эсвэл шингэн агуулсан зүйл дугуйнд нэмвэл бид бүтээгдэхүүнийхээ баталгааг санал болгож чадахгүй</p>\r\n</div>\r\n</div>\r\n</div>\r\n<!------------------------------------ 20 ------------------------------------->\r\n<div class=\"card\">\r\n<div id=\"headingOne\" class=\"card-header\">\r\n<h2 class=\"mb-0\"><button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#t\" aria-expanded=\"false\" aria-controls=\"p\">Дугуйн хуягийг санамсаргүйгээр уух, нүдэндээ оруулах, арьс, үсэндээ хүргэсэн бол яах вэ?</button></h2>\r\n</div>\r\n<div id=\"t\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">\r\n<div class=\"card-body\">\r\n<p>Арьс, үсийг усаар угаана (боломжтой бол саван). Таны арьс дээр цочрол өгсөн, харшил хөдөлсөн тохиолдолд эмнэлгийн тусламж аваарай.</p>\r\n<p>Хэрэв нүдэнд хүрсэн бол тэр даруй усаар зайлж угаана уу. Хэрэв нүдэнд цочрол үүсч өвдөх мэдрэмж төрвөл өөрт хамгийн ойр байх эмнэлгийн тусламж шуурхай аваарай.</p>\r\n<p>Хэрэв санамсаргүй байдлаар залгисан бол тэр даруй эмнэлгийн тусламж аваарай. Илүү их арга хэмжээ авахыг хүсвэл MSDS хуудсыг үзнэ үү.</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<!------------------------------------ 20 -------------------------------------></div>\r\n</div>'),
(26, 1, 0, 50000, '78434.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, 'МАШИН УГААГЧ', '<div class=\"scc-wrapper detail-module module-productPackagingAndQuickDetail\" data-spm=\"prilinga1e\">\r\n<div class=\"widget-detail-overview\">\r\n<div class=\"do-content\">\r\n<div class=\"do-overview\">\r\n<div class=\"do-entry do-entry-separate\">\r\n<div class=\"do-entry-title\"><span class=\"attr-name J-attr-name\" title=\"Model Number\">Model Number: </span>car washing</div>\r\n<div class=\"do-entry-list\">\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"Size\">Size: </span>Choose</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"Material\">Material: </span>Plastic</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"Product name\">Product name: </span>Outdoor car washing machine 12v Car washer with 25L Water Tank</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"Power\">Power: </span>80W</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"Voltage\">Voltage: </span>12v</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"Power Cord\">Power Cord: </span>3m,black</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\"></dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"></dt>\r\n</dl>\r\n</div>\r\n</div>\r\n<div class=\"do-entry do-entry-full\">\r\n<div class=\"do-entry-list\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"scc-wrapper detail-module module-productSpecification\" data-spm=\"pronpeci14\" data-spm-anchor-id=\"a2700.wholesale.deiletai6.pronpeci14.58673014V3uLTH\">\r\n<div id=\"J-rich-text-description\" class=\"richtext richtext-detail rich-text-description\">\r\n<div id=\"ali-anchor-AliPostDhMb-svlnr\" data-section=\"AliPostDhMb-svlnr\" data-section-title=\"Mulitipurpose\">\r\n<div>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<div class=\"scc-wrapper detail-module module-productPackagingAndQuickDetail\" data-spm=\"prilinga1e\">\r\n<div class=\"widget-detail-overview\">\r\n<div class=\"do-content\">\r\n<div class=\"do-overview\">\r\n<div class=\"do-entry do-entry-full\">\r\n<div class=\"do-entry-list\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"scc-wrapper detail-module module-productSpecification\" data-spm=\"pronpeci14\" data-spm-anchor-id=\"a2700.wholesale.deiletai6.pronpeci14.58673014V3uLTH\">\r\n<div id=\"J-rich-text-description\" class=\"richtext richtext-detail rich-text-description\">\r\n<p><img src=\"https://sc02.alicdn.com/kf/HTB1w2ZqwLiSBuNkSnhJq6zDcpXay/232153157/HTB1w2ZqwLiSBuNkSnhJq6zDcpXay.jpg\" width=\"750\" height=\"411.07594936708864\" data-width=\"790\" data-height=\"433\" /></p>\r\n<p><strong>Outdoor car washing machine 12v Car washer with 25L Water Tank</strong></p>\r\n<div id=\"ali-anchor-AliPostDhMb-jcf75\" data-section=\"AliPostDhMb-jcf75\" data-section-title=\"Product Description\">\r\n<div id=\"ali-title-AliPostDhMb-jcf75\">Product Description</div>\r\n<div>\r\n<p>The&nbsp;attribute of Outdoor car washing machine 12v Car washer with 25L Water Tank:</p>\r\n<table border=\"1\" cellspacing=\"0\">\r\n<tbody>\r\n<tr>\r\n<td valign=\"top\">\r\n<p>Product name</p>\r\n</td>\r\n<td valign=\"top\">\r\n<p>Outdoor car washing machine 12v Car washer with 25L Water Tank</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\">\r\n<p>Pressure&nbsp;</p>\r\n</td>\r\n<td valign=\"top\">\r\n<p>6Bar to 9Bar (43.5 to 130.5psi)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\">\r\n<p>Power</p>\r\n</td>\r\n<td valign=\"top\">\r\n<p>80W</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\">\r\n<p>Volt</p>\r\n</td>\r\n<td valign=\"top\">\r\n<p>12V</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\">\r\n<p>Flow rate</p>\r\n</td>\r\n<td valign=\"top\">\r\n<p>5L/min</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\">\r\n<p>Power Cord</p>\r\n</td>\r\n<td valign=\"top\">\r\n<p>3m cigarette lighter line</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\">\r\n<p>Outlet pipe length</p>\r\n</td>\r\n<td valign=\"top\">\r\n<p>10m outlet pipe contains two quick connections</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\">\r\n<p>Accessory (optional)</p>\r\n</td>\r\n<td valign=\"top\">\r\n<p>water tank with pump,10m outlet pipe,3m cigarette lighter line,metal&nbsp;nozzle,brush</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n<div id=\"ali-anchor-AliPostDhMb-obkf3\" data-section=\"AliPostDhMb-obkf3\" data-section-title=\"Detailed Images\">\r\n<div id=\"ali-title-AliPostDhMb-obkf3\">Detailed Images</div>\r\n<div>\r\n<p><img src=\"https://sc01.alicdn.com/kf/HTB11IuXFf5TBuNjSspmq6yDRVXaq/232153157/HTB11IuXFf5TBuNjSspmq6yDRVXaq.jpg_.webp\" alt=\"Outdoor car washing machine 12v Car washer with 25L Water Tank\" width=\"750\" height=\"1062.3417721518988\" data-alt=\"Outdoor car washing machine 12v Car washer with 25L Water Tank\" /></p>\r\n<p><img src=\"https://sc02.alicdn.com/kf/HTB1yZhtFeuSBuNjSsplq6ze8pXa7/232153157/HTB1yZhtFeuSBuNjSsplq6ze8pXa7.jpg_.webp\" alt=\"Outdoor car washing machine 12v Car washer with 25L Water Tank\" width=\"750\" height=\"499.3670886075949\" data-alt=\"Outdoor car washing machine 12v Car washer with 25L Water Tank\" /></p>\r\n<p><img src=\"https://sc01.alicdn.com/kf/HTB1FGvXFhWYBuNjy1zkq6xGGpXam/232153157/HTB1FGvXFhWYBuNjy1zkq6xGGpXam.jpg_.webp\" alt=\"Outdoor car washing machine 12v Car washer with 25L Water Tank\" width=\"750\" height=\"469.9367088607595\" data-alt=\"Outdoor car washing machine 12v Car washer with 25L Water Tank\" /></p>\r\n<p><img src=\"https://sc01.alicdn.com/kf/HTB17aSUwOCYBuNkHFCcq6AHtVXaf/232153157/HTB17aSUwOCYBuNkHFCcq6AHtVXaf.jpg_.webp\" alt=\"Outdoor car washing machine 12v Car washer with 25L Water Tank\" width=\"750\" height=\"829.746835443038\" data-alt=\"Outdoor car washing machine 12v Car washer with 25L Water Tank\" /></p>\r\n<p><img src=\"https://sc01.alicdn.com/kf/HTB15k9cFeuSBuNjSsziq6zq8pXaI/232153157/HTB15k9cFeuSBuNjSsziq6zq8pXaI.jpg_.webp\" alt=\"Outdoor car washing machine 12v Car washer with 25L Water Tank\" width=\"750\" height=\"799.367088607595\" data-alt=\"Outdoor car washing machine 12v Car washer with 25L Water Tank\" /></p>\r\n</div>\r\n</div>\r\n<div id=\"ali-anchor-AliPostDhMb-svlnr\" data-section=\"AliPostDhMb-svlnr\" data-section-title=\"Mulitipurpose\">\r\n<div id=\"ali-title-AliPostDhMb-svlnr\">Mulitipurpose</div>\r\n<div>\r\n<p><img src=\"https://sc01.alicdn.com/kf/HTB10aM6E7KWBuNjy1zjq6AOypXaa/232153157/HTB10aM6E7KWBuNjy1zjq6AOypXaa.jpg_.webp\" width=\"750\" height=\"805.0632911392406\" data-width=\"790\" data-height=\"848\" /></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, NULL, NULL, '0', '1', NULL, '2019-09-12 09:25:15', '2019-09-16 12:00:10', NULL, NULL),
(27, 1, 0, 40000, '17907.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'ТООС СОРОГЧ', '<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"Type\">Type: </span>Vacuum Cleaner</dt>\r\n<dt class=\"do-entry-item\"></dt>\r\n<dt class=\"do-entry-item\"></dt>\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"Size\">Size: </span>28*23cm</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"Material\">Material: </span>ABS</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"Product Name\">Product Name: </span>12V Wet And Dry Car Vacuum Cleaner</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"weight\">weight: </span>1.1kg</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"power cable length\">power cable length: </span>3M</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"A handy flexible hose length\">A handy flexible hose length: </span>1M</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"Capacity\">Capacity: </span>12V</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"power\">power: </span>93W-120W</dt>\r\n</dl>\r\n<dl class=\"do-entry-item\">\r\n<dt class=\"do-entry-item\"><span class=\"attr-name J-attr-name\" title=\"Color\">Color: </span>Yellow</dt>\r\n</dl>', '<p data-spm-anchor-id=\"a2700.details.pronpeci14.i0.60bf4ce7AYLEcc\">ortable DC 12V Car vacuum cleaner &nbsp;with handy flexible hose efficiently pick up wet and dry spills in hard to reach areas</p>\r\n<p>&nbsp;</p>\r\n<table class=\"aliDataTable\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td>Iterm No.:</td>\r\n<td>car019</td>\r\n</tr>\r\n<tr>\r\n<td>Item name</td>\r\n<td>\r\n<h2>12V Wet And Dry Car Vacuum Cleaner</h2>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Color</td>\r\n<td>yellow&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Package</p>\r\n</td>\r\n<td>color box&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Feature</td>\r\n<td>&nbsp;car cleaner&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>weight</td>\r\n<td>&nbsp;1.1kg</td>\r\n</tr>\r\n<tr>\r\n<td>size</td>\r\n<td>23*28CM</td>\r\n</tr>\r\n<tr>\r\n<td>MOQ</td>\r\n<td>500 sets</td>\r\n</tr>\r\n<tr>\r\n<td>OEM</td>\r\n<td>Accpet</td>\r\n</tr>\r\n<tr>\r\n<td>Delivery</td>\r\n<td>By express (DHL, Federal ,ups an so on ) or by sea&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Sample time(if customs)&nbsp;</td>\r\n<td>\r\n<p>about 3-5day</p>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>Product Description<br />Package Weight: 1.1 kg (2.43lb.)<br />Package Size:23cm x 23cm x 28cm (7.87in x 7.87in x 9.06in)<br />12V Wet And Dry Car Vacuum Cleaner<br />Condition: 100% Brand New<br />Color: Yellow<br />Volt: 12V<br />Hose Length: 943 mmpic<br />Cable Length: 2680 mm<br />Feature:<br />- It Comes With A Handy Flexible Hose Which Will Efficiently Pick Up Wet Or Dry Spills In Hard To Reach Areas.<br />- Large Plastic Catch Tray<br />- Integrated Carry Handle For Easy Portability.<br />- 2 Hose Inlets<br />- The Side For Suction And The Top For Inflating Items Such As Pool Toys - Air Mattresses Etc.<br />- It Also Comes With A Crevice Tool - Nozzle And Upholstery Brush.<br />- It Will Provide Powerful Vacuuming With Its 60 Watt Motor.<br />- And Simply Plugs Into Any 12 Volt Socket Or Adapter For Portable Power.<br />Fits for car,camping and even a boat.<br />Package includes: 1 x Car Vacuum Cleaner</p>\r\n<p><img src=\"https://sc01.alicdn.com/kf/HTB1ZSjzMpXXXXbkXFXXq6xXFXXXn/202094855/HTB1ZSjzMpXXXXbkXFXXq6xXFXXXn.jpg_.webp\" alt=\"Portable DC 12V Car vacuum cleaner with handy flexible hose efficiently pick up wet and dry spills in hard to reach areas\" width=\"750\" height=\"750\" data-alt=\"Portable DC 12V Car vacuum cleaner with handy flexible hose efficiently pick up wet and dry spills in hard to reach areas\" data-width=\"800\" /><img src=\"https://sc01.alicdn.com/kf/HTB1_zHBMpXXXXawXFXXq6xXFXXXT/202094855/HTB1_zHBMpXXXXawXFXXq6xXFXXXT.jpg_.webp\" alt=\"Portable DC 12V Car vacuum cleaner with handy flexible hose efficiently pick up wet and dry spills in hard to reach areas\" width=\"750\" height=\"563.1818181818182\" data-alt=\"Portable DC 12V Car vacuum cleaner with handy flexible hose efficiently pick up wet and dry spills in hard to reach areas\" data-width=\"800\" /><img src=\"https://sc01.alicdn.com/kf/HTB1J2vwMpXXXXcIXFXXq6xXFXXX9/202094855/HTB1J2vwMpXXXXcIXFXXq6xXFXXX9.jpg_.webp\" alt=\"Portable DC 12V Car vacuum cleaner with handy flexible hose efficiently pick up wet and dry spills in hard to reach areas\" width=\"750\" height=\"563.1818181818182\" data-alt=\"Portable DC 12V Car vacuum cleaner with handy flexible hose efficiently pick up wet and dry spills in hard to reach areas\" data-width=\"800\" /><img src=\"https://sc01.alicdn.com/kf/HTB1AATqMpXXXXbpXVXXq6xXFXXXW/202094855/HTB1AATqMpXXXXbpXVXXq6xXFXXXW.jpg_.webp\" alt=\"Portable DC 12V Car vacuum cleaner with handy flexible hose efficiently pick up wet and dry spills in hard to reach areas\" width=\"750\" height=\"563.1818181818182\" data-alt=\"Portable DC 12V Car vacuum cleaner with handy flexible hose efficiently pick up wet and dry spills in hard to reach areas\" data-width=\"800\" /><img src=\"https://sc01.alicdn.com/kf/HTB1BYjzMpXXXXbyXFXXq6xXFXXXz/202094855/HTB1BYjzMpXXXXbyXFXXq6xXFXXXz.jpg_.webp\" alt=\"Portable DC 12V Car vacuum cleaner with handy flexible hose efficiently pick up wet and dry spills in hard to reach areas\" width=\"750\" height=\"563.1818181818182\" data-alt=\"Portable DC 12V Car vacuum cleaner with handy flexible hose efficiently pick up wet and dry spills in hard to reach areas\" data-width=\"800\" /></p>', NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-12 09:30:26', '2019-09-13 02:11:59', NULL, NULL),
(28, 1, 0, 45000, '97460.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, 'Wireless Charger', '<table class=\"aliDataTable\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td>&nbsp;Transmission Distance</td>\r\n<td>&nbsp;5mm</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;Charging Efficiency</td>\r\n<td>&nbsp;&gt;75%</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;Product Color</td>\r\n<td>&nbsp;White, Red</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;Input</td>\r\n<td>&nbsp;5V/2A</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;Output</td>\r\n<td>&nbsp;5V/1A</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;Quality</td>\r\n<td>&nbsp;A Grade</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;Product Size</td>\r\n<td>&nbsp;Diameter 100mm</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;Net Weight</td>\r\n<td>&nbsp;130g</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;Material</td>\r\n<td>&nbsp;Plastic Surface</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;Packing</td>\r\n<td>&nbsp;Neutral Packing</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>&nbsp;</p>\r\n<div>\r\n<div id=\"l5efy\">\r\n<div><img src=\"https://sc01.alicdn.com/kf/HTB1hhpGax2rK1RkSnhJq6ykdpXaz/232404089/HTB1hhpGax2rK1RkSnhJq6ykdpXaz.jpg_.webp\" width=\"750\" height=\"750\" data-spm-anchor-id=\"a2700.details.pronpeci14.i0.53082da6aEtESD\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"jrzq5\">\r\n<div><img src=\"https://sc01.alicdn.com/kf/HTB1dhVGatfvK1RjSspfq6zzXFXa1/232404089/HTB1dhVGatfvK1RjSspfq6zzXFXa1.jpg_.webp\" width=\"750\" height=\"750\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"5to3l\">\r\n<div><img src=\"https://sc01.alicdn.com/kf/HTB14AXAasfrK1RkSmLyq6xGApXav/232404089/HTB14AXAasfrK1RkSmLyq6xGApXav.jpg_.webp\" width=\"750\" height=\"750\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"xi34b\">\r\n<div><img src=\"https://sc01.alicdn.com/kf/HTB15rtyatfvK1RjSspoq6zfNpXaO/232404089/HTB15rtyatfvK1RjSspoq6zfNpXaO.jpg_.webp\" width=\"750\" height=\"750\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"3bhrf\">\r\n<div><img src=\"https://sc01.alicdn.com/kf/HTB1vPXDaELrK1Rjy1zbq6AenFXaI/232404089/HTB1vPXDaELrK1Rjy1zbq6AenFXaI.jpg_.webp\" width=\"750\" height=\"630\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"i8opy\">\r\n<div><img src=\"https://sc02.alicdn.com/kf/HTB1HXFBavfsK1RjSszbq6AqBXXaN/232404089/HTB1HXFBavfsK1RjSszbq6AqBXXaN.jpg_.webp\" width=\"750\" height=\"693\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"suglr\">\r\n<div><img src=\"https://sc02.alicdn.com/kf/HTB1MjdQaODxK1Rjy1zcq6yGeXXae/232404089/HTB1MjdQaODxK1Rjy1zcq6yGeXXae.jpg_.webp\" width=\"750\" height=\"750\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"11nax\">\r\n<div><img src=\"https://sc01.alicdn.com/kf/HTB1cSJMaIfrK1RkSmLyq6xGApXaM/232404089/HTB1cSJMaIfrK1RkSmLyq6xGApXaM.jpg_.webp\" width=\"750\" height=\"729\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"rkwq9\">\r\n<div><img src=\"https://sc01.alicdn.com/kf/HTB1dBpDayLxK1Rjy0Ffq6zYdVXaF/232404089/HTB1dBpDayLxK1Rjy0Ffq6zYdVXaF.jpg_.webp\" width=\"750\" height=\"691\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"b00g1\">\r\n<div><img src=\"https://sc01.alicdn.com/kf/HTB1DpJDaynrK1RjSsziq6xptpXam/232404089/HTB1DpJDaynrK1RjSsziq6xptpXam.jpg_.webp\" width=\"750\" height=\"750\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"eos32\">\r\n<div><img src=\"https://sc01.alicdn.com/kf/HTB1DpJDaynrK1RjSsziq6xptpXam/232404089/HTB1DpJDaynrK1RjSsziq6xptpXam.jpg_.webp\" width=\"750\" height=\"750\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"er8od\">\r\n<div><img src=\"https://sc02.alicdn.com/kf/HTB1VRlOyrPpK1RjSZFFq6y5PpXaA/232404089/HTB1VRlOyrPpK1RjSZFFq6y5PpXaA.jpg_.webp\" width=\"750\" height=\"750\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"jvzva\">\r\n<div><img src=\"https://sc02.alicdn.com/kf/HTB1dQVEaxrvK1RjSszeq6yObFXad/232404089/HTB1dQVEaxrvK1RjSszeq6yObFXad.jpg_.webp\" width=\"750\" height=\"685\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"ym1rb\">\r\n<div><img src=\"https://sc01.alicdn.com/kf/HTB1vhJRaN_rK1RkHFqDq6yJAFXaN/232404089/HTB1vhJRaN_rK1RkHFqDq6yJAFXaN.jpg_.webp\" width=\"750\" height=\"750\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"zzaqg\">\r\n<div><img src=\"https://sc02.alicdn.com/kf/HTB1lQNBasvrK1Rjy0Feq6ATmVXaA/232404089/HTB1lQNBasvrK1Rjy0Feq6ATmVXaA.jpg_.webp\" width=\"750\" height=\"319\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"eqeck\">\r\n<div><img src=\"https://sc01.alicdn.com/kf/HTB13IpCaEvrK1RjSszfq6xJNVXaY/232404089/HTB13IpCaEvrK1RjSszfq6xJNVXaY.jpg_.webp\" width=\"750\" height=\"663\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"fd5yt\">\r\n<div><img src=\"https://sc02.alicdn.com/kf/HTB1dQVEaxrvK1RjSszeq6yObFXad/232404089/HTB1dQVEaxrvK1RjSszeq6yObFXad.jpg_.webp\" width=\"750\" height=\"685\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"lkxjz\">\r\n<div><img src=\"https://sc01.alicdn.com/kf/HTB1ORlCas_vK1Rjy0Foq6xIxVXab/232404089/HTB1ORlCas_vK1Rjy0Foq6xIxVXab.jpg_.webp\" width=\"750\" height=\"750\" /></div>\r\n</div>\r\n</div>\r\n<div>\r\n<div id=\"7ixdk\">\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>', NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-12 09:34:46', '2019-09-13 10:54:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(10, 1, '51837.png', '2019-01-29 06:54:26', '2019-01-28 22:54:26'),
(11, 1, '25071.png', '2019-01-29 06:54:36', '2019-01-28 22:54:36'),
(13, 1, '72681.png', '2019-01-29 06:59:24', '2019-01-28 22:59:24'),
(14, 1, '75610.jpg', '2019-01-29 06:59:43', '2019-01-28 22:59:43'),
(15, 6, '43514.png', '2019-02-23 02:10:45', '2019-02-22 18:10:45'),
(16, 6, '22082.png', '2019-02-23 02:10:51', '2019-02-22 18:10:51'),
(17, 6, '65538.jpg', '2019-02-23 02:10:55', '2019-02-22 18:10:55'),
(18, 5, '32614.png', '2019-02-23 02:34:02', '2019-02-22 18:34:02'),
(19, 5, '86035.jpg', '2019-02-23 02:34:15', '2019-02-22 18:34:15'),
(32, 8, '58462.jpg', '2019-07-06 10:20:21', '2019-07-06 10:20:21'),
(33, 9, '38219.jpg', '2019-07-06 10:20:27', '2019-07-06 10:20:27'),
(34, 10, '2735.jpg', '2019-07-06 10:20:31', '2019-07-06 10:20:31'),
(35, 11, '6249.jpg', '2019-07-06 10:20:35', '2019-07-06 10:20:35'),
(36, 8, '98205.jpg', '2019-07-06 10:20:40', '2019-07-06 10:20:40'),
(37, 9, '4230.jpg', '2019-07-06 10:20:44', '2019-07-06 10:20:44'),
(38, 10, '25733.jpg', '2019-07-06 10:20:49', '2019-07-06 10:20:49'),
(39, 11, '56161.jpg', '2019-07-06 10:20:54', '2019-07-06 10:20:54'),
(40, 12, '56984.jpg', '2019-07-06 10:21:00', '2019-07-06 10:21:00'),
(41, 7, '37019.jpg', '2019-07-06 10:21:39', '2019-07-06 10:21:39'),
(42, 7, '59070.jpg', '2019-07-06 10:22:17', '2019-07-06 10:22:17'),
(43, 7, '75914.jpg', '2019-07-06 10:22:26', '2019-07-06 10:22:26'),
(44, 10, '95776.jpg', '2019-07-06 10:23:39', '2019-07-06 10:23:39'),
(45, 11, '43494.jpg', '2019-07-06 10:24:05', '2019-07-06 10:24:05'),
(46, 12, '72188.jpg', '2019-07-06 10:24:46', '2019-07-06 10:24:46'),
(50, 20, '93717.png', '2019-09-09 07:34:05', '2019-09-09 07:34:05'),
(51, 20, '88347.jpg', '2019-09-11 08:40:11', '2019-09-11 08:40:11'),
(52, 20, '33334.jpg', '2019-09-11 08:40:22', '2019-09-11 08:40:22'),
(53, 26, '39730.jpg', '2019-09-12 09:25:34', '2019-09-12 09:25:34'),
(54, 28, '26592.jpg', '2019-09-12 09:35:20', '2019-09-12 09:35:20'),
(55, 28, '57971.jpg', '2019-09-12 09:35:20', '2019-09-12 09:35:20'),
(56, 28, '75660.jpg', '2019-09-12 09:35:28', '2019-09-12 09:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `setups`
--

CREATE TABLE `setups` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_embed` text COLLATE utf8mb4_unicode_ci,
  `leftimage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_description` text COLLATE utf8mb4_unicode_ci,
  `product_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` text COLLATE utf8mb4_unicode_ci,
  `facebook_page` text COLLATE utf8mb4_unicode_ci,
  `banner_sidebar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_description` text COLLATE utf8mb4_unicode_ci,
  `order_promo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_promo_btn_text` text COLLATE utf8mb4_unicode_ci,
  `order_promo_btn_link` text COLLATE utf8mb4_unicode_ci,
  `order_promo_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `twitter` text COLLATE utf8mb4_unicode_ci,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `googleplus` text COLLATE utf8mb4_unicode_ci,
  `instagram` text COLLATE utf8mb4_unicode_ci,
  `footer_address` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setups`
--

INSERT INTO `setups` (`id`, `logo`, `favicon`, `video_embed`, `leftimage`, `video_description`, `product_title`, `blog_title`, `site_title`, `facebook_page`, `banner_sidebar`, `partner_title`, `partner_description`, `order_promo_title`, `order_promo_btn_text`, `order_promo_btn_link`, `order_promo_bg`, `facebook`, `twitter`, `youtube`, `googleplus`, `instagram`, `footer_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '85379.png', '11349.png', 'http://bears.mn/images/backend_images/products/large/71228.png', '58572.png', '<p>Дугуйн хуягийг үйлдвэрлэгч нь дугуйн аюулгүй ажиллагааны салбарт тэргүүлэгч бөгөөд БНХАУын технологийн мужийн урдаа барьдаг ууган үйлдвэрүүдийн нэг юм. Энэхүү үйлдвэр нь 20 гаран жилийн турш дэлхийн олон орны хэрэглэгчдийн таашаалд нийцсэн бүтээгдэхүүн нийлүүлж бүтээгдэхүүнийхээ чанар, технологийг тогтмол сайжруулж, хөгжүүлсээр ирсэн арвин туршлагай.&nbsp;&nbsp;</p>\r\n<p>Дугуйн хуяг нь CE буюу Европын холбооноос гаргасан хүн, амьтан, хүрээлэн буй орчинд аюулгүйг нотолсон сертификат, RоSH- Европын холбооны Аюултай бодис агуулаагүй сертификат, MSDS- Химийн аюулгүй байдлын мэдээллийн хуудас зэргээр баталгаажсан -45/+90 хэмд зохицон ажиллах чадвартай техникийн дугуйн хагаралтыг засварлах өөрөө нөхөгдөх шингэн технологи юм.</p>\r\n<p>Дугуйн хуягийн хадгалах хугацаа 3 жил ба дугуйнд хийснээс хойш 1 жилийн турш нөхөх чадвараа алдахгүй бөгөөд 50 гаран цооролтыг нөхөж чадна.</p>\r\n<hr />\r\n<p><a class=\"order_b btn btn-dark px-4 float-left rounded-0\" href=\"/product/20\">ДЭЛГЭРЭНГҮЙ</a></p>\r\n<p>&nbsp;</p>', 'БҮТЭЭГДЭХҮҮН', 'МЭДЭЭЛЭЛ', 'BEARS', 'https://www.facebook.com/DuguinHuyag/?ref=br_rs', NULL, 'ХАМТРАГЧ БАЙГУУЛЛАГУУД', '<p>Хамтран ажиллах хүсэлтэй байгууллага, хувь хүмүүст манай үүд хаалга нээлттэй бөгөөд танд туслахад хэзээд бэлэн байх болно.</p>', 'ДУГУЙ ХАГАРАХААС ХАМГААЛАГЧ', 'ДУГУЙНЫ ХЭМЖЭЭГЭЭР ЗАХИАЛАХ', '/products', '57398.jpg', 'https://www.facebook.com/', 'http://twitter.com', NULL, NULL, NULL, '<p><strong>Хаяг: &nbsp;&nbsp;</strong>Улаанбаатар хот, Баянзүрх дүүрэг, <br />1-р хороо, 12-р хороолол,<br />Залуучуудын өргөн чөлөө-21, <br />105 тоот</p>\r\n<p><strong>Холбоо барих: &nbsp;</strong>7755-4499</p>', NULL, NULL, '2019-11-08 04:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'bears', 'info@bears.mn', NULL, '$2y$10$JarQFbxSKcacz2hokmzlW.FewX/PRc3KvLXrMu0iM.x92LHrHz6e.', 1, NULL, '2018-11-15 02:24:22', '2019-09-09 05:56:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hamts`
--
ALTER TABLE `hamts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setups`
--
ALTER TABLE `setups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hamts`
--
ALTER TABLE `hamts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `setups`
--
ALTER TABLE `setups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
