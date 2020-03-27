-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 07:30 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php2-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id_act` int(11) NOT NULL,
  `activity_content` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `usermail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id_act`, `activity_content`, `usermail`, `time`) VALUES
(1, 'Admin added user', 'maya.laravel@gmail.com', '2020-03-27 12:21:12'),
(2, 'Admin deleted user', 'maya.laravel@gmail.com', '2020-03-27 12:22:15'),
(3, 'User logged in', 'laza@gmail.com', '2020-03-27 12:25:26'),
(4, 'User added comment', 'laza@gmail.com', '2020-03-27 12:26:10'),
(5, 'User added comment', 'laza@gmail.com', '2020-03-27 12:26:45'),
(6, 'User deleted comment', 'laza@gmail.com', '2020-03-27 12:26:52'),
(7, 'User logged in', 'maya.laravel@gmail.com', '2020-03-27 10:05:28'),
(8, 'Admin added post', 'maya.laravel@gmail.com', '2020-03-27 10:06:51'),
(9, 'Admin updated post', 'maya.laravel@gmail.com', '2020-03-27 10:08:37'),
(10, 'Admin deleted post', 'maya.laravel@gmail.com', '2020-03-27 10:08:53'),
(11, 'User added comment', 'mika@gmail.com', '2020-03-26 13:45:30'),
(12, 'User added comment', 'pericinmail@mail.com', '2020-03-26 13:44:06'),
(13, 'User logged in', 'laza@gmail.com', '2020-03-27 12:43:06'),
(14, 'User added comment', 'laza@gmail.com', '2020-03-27 12:43:53'),
(15, 'User added comment', 'laza@gmail.com', '2020-03-27 12:44:09'),
(16, 'User logged out', '::1', '2020-03-27 12:44:31'),
(17, 'User logged in', 'laza@gmail.com', '2020-03-27 15:12:58'),
(18, 'You have new message', 'laza@gmail.com', '2020-03-27 15:50:22'),
(19, 'User added comment', 'laza@gmail.com', '2020-03-27 15:52:29'),
(20, 'User edited comment', 'laza@gmail.com', '2020-03-27 16:23:58'),
(21, 'User logged out', '::1', '2020-03-27 16:55:47'),
(22, 'User logged in', 'laza@gmail.com', '2020-03-27 16:56:49'),
(23, 'User added comment', 'laza@gmail.com', '2020-03-27 16:58:53'),
(24, 'User logged out', '::1', '2020-03-27 17:00:19'),
(25, 'User logged in', 'maya.laravel@gmail.com', '2020-03-27 17:00:39'),
(26, 'Admin added post', 'maya.laravel@gmail.com', '2020-03-27 17:02:42'),
(27, 'Admin updated post', 'maya.laravel@gmail.com', '2020-03-27 17:03:23'),
(28, 'Admin deleted post', 'maya.laravel@gmail.com', '2020-03-27 17:03:29'),
(29, 'User logged out', '::1', '2020-03-27 17:09:50'),
(30, 'User logged in', 'maya.laravel@gmail.com', '2020-03-27 17:44:50');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `catName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `catName`) VALUES
(1, 'Webdesign'),
(2, 'Marketing'),
(3, 'Illustration');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `reply` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `created_at`, `updated_at`, `user_id`, `post_id`, `reply`) VALUES
(1, 'Wow! This is great, thank you!', '2020-03-18 10:23:20', '2020-03-18 11:22:52', 5, 2, 'Thank you!'),
(2, 'Ovo je tekst komentara', '2020-03-18 06:37:00', '2020-03-18 17:22:00', 4, 3, 'Ovo je tekst odgovora na komentar'),
(3, 'tekst komentara tekst komentara tekst komentaratekst komentara tekst komentara', '2020-03-24 16:42:33', '2020-03-24 16:42:33', 4, 6, 'Tekst odgovora Tekst odgovora Tekst odgovora Tekst odgovora Tekst odgovora Tekst odgovora Tekst odgovora Tekst odgovora Tekst odgovora v'),
(4, 'Ostavljam komentar', '2020-03-24 21:57:56', '2020-03-24 21:57:56', 5, 8, 'Odgovaram korisniku'),
(6, 'Great post', '2020-03-26 13:43:21', '2020-03-26 13:43:21', 6, 13, NULL),
(7, 'Like it', '2020-03-26 13:43:41', '2020-03-26 13:43:41', 6, 11, NULL),
(8, 'Love it', '2020-03-26 13:44:06', '2020-03-26 13:44:06', 6, 15, NULL),
(9, 'Helpful', '2020-03-26 13:45:30', '2020-03-26 13:45:30', 8, 9, NULL),
(10, 'Tekst tekst lalalalallalalala', '2020-03-26 13:46:09', '2020-03-26 13:46:09', 8, 4, NULL),
(11, 'Leaving new comment', '2020-03-27 00:26:10', '2020-03-27 00:26:10', 4, 14, 'Leaving a reply'),
(13, 'Enjoyed reading this ....', '2020-03-27 12:43:53', '2020-03-27 12:43:53', 4, 1, NULL),
(14, 'Opet alalalal', '2020-03-27 12:44:09', '2020-03-27 12:44:09', 4, 1, NULL),
(15, 'IZMENJEN', '2020-03-27 15:52:29', '2020-03-27 16:23:58', 4, 11, NULL),
(16, 'Komentar', '2020-03-27 16:58:53', '2020-03-27 16:58:53', 4, 13, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `ip_address`, `post_id`, `time`) VALUES
(1, '::1', 3, '2020-03-18 16:43:41'),
(2, '::1', 3, '2020-03-18 16:44:02'),
(3, '::1', 3, '2020-03-18 17:19:19'),
(4, '::1', 3, '2020-03-18 17:19:45'),
(5, '::1', 3, '2020-03-18 17:20:03'),
(6, '::1', 3, '2020-03-18 17:22:40'),
(7, '::1', 2, '2020-03-18 17:23:29'),
(8, '::1', 2, '2020-03-18 18:55:35'),
(9, '::1', 2, '2020-03-18 18:56:26'),
(10, '::1', 3, '2020-03-18 19:19:53'),
(11, '::1', 4, '2020-03-18 19:20:16'),
(12, '::1', 4, '2020-03-18 19:20:48'),
(13, '::1', 4, '2020-03-18 19:22:21'),
(14, '::1', 4, '2020-03-18 19:25:22'),
(15, '::1', 4, '2020-03-18 19:25:45'),
(16, '::1', 4, '2020-03-18 19:29:02'),
(17, '::1', 4, '2020-03-18 19:29:22'),
(18, '::1', 4, '2020-03-18 19:35:35'),
(19, '::1', 4, '2020-03-18 19:35:52'),
(20, '::1', 4, '2020-03-18 19:39:50'),
(21, '::1', 4, '2020-03-18 19:40:02'),
(22, '::1', 4, '2020-03-18 19:45:44'),
(23, '::1', 4, '2020-03-18 19:45:54'),
(24, '::1', 4, '2020-03-18 19:51:00'),
(25, '::1', 4, '2020-03-18 19:51:15'),
(26, '::1', 2, '2020-03-18 19:54:20'),
(27, '::1', 2, '2020-03-18 19:54:52'),
(28, '::1', 4, '2020-03-18 20:27:14'),
(29, '::1', 5, '2020-03-18 20:28:01'),
(30, '::1', 5, '2020-03-18 20:28:19'),
(31, '::1', 12, '2020-03-24 15:06:23'),
(32, '::1', 12, '2020-03-24 15:07:51'),
(33, '::1', 6, '2020-03-24 15:17:08'),
(34, '::1', 6, '2020-03-24 15:18:27'),
(35, '::1', 6, '2020-03-24 15:24:28'),
(36, '::1', 6, '2020-03-24 15:24:54'),
(37, '::1', 6, '2020-03-24 15:38:43'),
(38, '::1', 6, '2020-03-24 15:43:47'),
(39, '::1', 6, '2020-03-24 16:42:35'),
(40, '::1', 6, '2020-03-24 19:26:22'),
(41, '::1', 6, '2020-03-24 19:31:25'),
(42, '::1', 6, '2020-03-24 19:33:11'),
(43, '::1', 8, '2020-03-24 21:56:21'),
(44, '::1', 8, '2020-03-24 21:56:40'),
(45, '::1', 8, '2020-03-24 21:57:57'),
(46, '::1', 8, '2020-03-24 22:06:04'),
(47, '::1', 8, '2020-03-24 22:06:13'),
(48, '::1', 8, '2020-03-24 22:13:24'),
(49, '::1', 8, '2020-03-24 23:37:52'),
(50, '::1', 8, '2020-03-24 23:39:02'),
(51, '::1', 8, '2020-03-24 23:39:34'),
(52, '::1', 8, '2020-03-24 23:47:34'),
(53, '::1', 8, '2020-03-24 23:48:18'),
(54, '::1', 8, '2020-03-24 23:52:53'),
(55, '::1', 8, '2020-03-24 23:55:01'),
(56, '::1', 8, '2020-03-24 23:55:28'),
(57, '::1', 8, '2020-03-25 00:05:58'),
(58, '::1', 8, '2020-03-25 00:06:21'),
(59, '::1', 8, '2020-03-25 00:06:51'),
(60, '::1', 8, '2020-03-25 00:08:37'),
(61, '::1', 8, '2020-03-25 00:08:49'),
(62, '::1', 8, '2020-03-25 00:11:08'),
(63, '::1', 8, '2020-03-25 00:11:14'),
(64, '::1', 8, '2020-03-25 00:13:01'),
(65, '::1', 8, '2020-03-25 00:15:53'),
(66, '::1', 8, '2020-03-25 00:16:02'),
(67, '::1', 8, '2020-03-25 12:50:30'),
(68, '::1', 6, '2020-03-25 12:51:38'),
(69, '::1', 6, '2020-03-25 12:52:28'),
(70, '::1', 6, '2020-03-25 13:10:16'),
(71, '::1', 6, '2020-03-25 13:10:17'),
(72, '::1', 2, '2020-03-25 13:45:51'),
(73, '::1', 2, '2020-03-25 13:48:35'),
(74, '::1', 2, '2020-03-25 13:49:57'),
(75, '::1', 2, '2020-03-25 13:50:27'),
(76, '::1', 2, '2020-03-25 13:50:49'),
(77, '::1', 11, '2020-03-25 13:51:31'),
(78, '::1', 11, '2020-03-25 13:51:46'),
(79, '::1', 11, '2020-03-25 13:52:11'),
(80, '::1', 8, '2020-03-25 13:59:26'),
(81, '::1', 8, '2020-03-25 13:59:34'),
(82, '::1', 8, '2020-03-25 14:00:42'),
(83, '::1', 8, '2020-03-25 14:01:52'),
(84, '::1', 8, '2020-03-25 14:02:00'),
(85, '::1', 8, '2020-03-25 14:02:20'),
(86, '::1', 8, '2020-03-25 14:02:27'),
(87, '::1', 8, '2020-03-25 14:02:58'),
(88, '::1', 8, '2020-03-25 14:05:52'),
(89, '::1', 8, '2020-03-25 14:15:40'),
(90, '::1', 8, '2020-03-25 14:22:19'),
(91, '::1', 8, '2020-03-25 14:25:04'),
(92, '::1', 8, '2020-03-25 14:26:57'),
(93, '::1', 11, '2020-03-25 14:33:34'),
(94, '::1', 15, '2020-03-25 14:33:50'),
(95, '::1', 2, '2020-03-25 14:34:52'),
(96, '::1', 2, '2020-03-25 14:35:26'),
(97, '::1', 2, '2020-03-25 14:37:22'),
(98, '::1', 2, '2020-03-25 14:38:23'),
(99, '::1', 2, '2020-03-25 14:38:45'),
(100, '::1', 2, '2020-03-25 14:41:36'),
(101, '::1', 2, '2020-03-25 14:42:50'),
(102, '::1', 2, '2020-03-25 14:44:00'),
(103, '::1', 2, '2020-03-25 14:45:25'),
(104, '::1', 2, '2020-03-25 14:47:10'),
(105, '::1', 2, '2020-03-25 14:47:48'),
(106, '::1', 2, '2020-03-25 14:52:09'),
(107, '::1', 2, '2020-03-25 14:53:07'),
(108, '::1', 2, '2020-03-25 14:53:27'),
(109, '::1', 6, '2020-03-25 15:04:15'),
(110, '::1', 6, '2020-03-25 15:04:57'),
(111, '::1', 6, '2020-03-25 15:17:57'),
(112, '::1', 6, '2020-03-25 15:18:54'),
(113, '::1', 11, '2020-03-25 18:22:22'),
(114, '::1', 6, '2020-03-26 13:05:44'),
(115, '::1', 12, '2020-03-26 13:06:29'),
(116, '::1', 8, '2020-03-26 13:22:52'),
(117, '::1', 14, '2020-03-26 13:25:10'),
(118, '::1', 8, '2020-03-26 13:25:41'),
(119, '::1', 8, '2020-03-26 13:33:31'),
(120, '::1', 8, '2020-03-26 13:37:48'),
(121, '::1', 3, '2020-03-26 13:38:43'),
(122, '::1', 13, '2020-03-26 13:43:08'),
(123, '::1', 13, '2020-03-26 13:43:22'),
(124, '::1', 11, '2020-03-26 13:43:34'),
(125, '::1', 11, '2020-03-26 13:43:41'),
(126, '::1', 15, '2020-03-26 13:43:57'),
(127, '::1', 15, '2020-03-26 13:44:07'),
(128, '::1', 9, '2020-03-26 13:44:51'),
(129, '::1', 9, '2020-03-26 13:45:31'),
(130, '::1', 4, '2020-03-26 13:45:43'),
(131, '::1', 4, '2020-03-26 13:46:09'),
(132, '::1', 12, '2020-03-26 16:15:09'),
(133, '::1', 13, '2020-03-27 00:25:42'),
(134, '::1', 14, '2020-03-27 00:25:59'),
(135, '::1', 14, '2020-03-27 00:26:11'),
(136, '::1', 14, '2020-03-27 00:26:45'),
(137, '::1', 14, '2020-03-27 00:26:53'),
(138, '::1', 14, '2020-03-27 10:05:48'),
(139, '::1', 1, '2020-03-27 12:43:28'),
(140, '::1', 1, '2020-03-27 12:43:54'),
(141, '::1', 1, '2020-03-27 12:44:10'),
(142, '::1', 8, '2020-03-27 15:52:02'),
(143, '::1', 11, '2020-03-27 15:52:15'),
(144, '::1', 11, '2020-03-27 15:52:30'),
(145, '::1', 11, '2020-03-27 16:22:48'),
(146, '::1', 11, '2020-03-27 16:23:35'),
(147, '::1', 11, '2020-03-27 16:23:59'),
(148, '::1', 11, '2020-03-27 16:24:15'),
(149, '::1', 8, '2020-03-27 16:53:44'),
(150, '::1', 13, '2020-03-27 16:57:34'),
(151, '::1', 13, '2020-03-27 16:58:53'),
(152, '::1', 6, '2020-03-27 17:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `route`, `position`) VALUES
(1, 'Home', '/', 1),
(2, 'Articles', '/posts', 2),
(3, 'Author', '/author', 3);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id_photo` int(11) NOT NULL,
  `path_original` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `path_new` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id_photo`, `path_original`, `path_new`) VALUES
(1, 'assets/images/user.jpeg', 'assets/images/user.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `post_pic_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `text`, `post_pic_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Build a website in minutes with Templates', 'Creating a website may seem like a daunting task if you’ve never done it before. You may want to start a blog to express your political views, or perhaps you’re looking to grow a business by expanding with an online presence. But where would you begin building a website? How do you make your website accessible on the internet? What features should you use to make a site look aesthetic and appealing?\r\nFear not! All of these questions and concerns can be answers by an easy to use website builder with awesome templates. This article will walk you through the process and set you on your way to creating a great looking website.\r\n\r\nA website template can be thought of as a mold in which you can easily form your website. Templates are pre-made websites that can be fully customized to look unique and fresh, yet familiar. Templates are created specially to make your website building experience easy and fast. Where once building a website required expensive designers and coders, templates allow for high-end quality at minimal to no cost. \r\n\r\nThe process of creating a website using a template is quite simple. Although the setup varies depending on the service you decide to use, most website builders are designed to assist clients every step of the way. Although we will guide you using the Wix platform, the experience is generally similar for those using website builders other than Wix.\r\n\r\nAfter signing up for an account, you will be guided to the Wix Editor. You can begin by choosing a template and working from there. Once a template is chosen, it is time to customize.\r\n\r\nThe first thing you must do is contemplate how you want your visitors to to be greeted onto your site. Wix makes it easy to add a video background that will grab visitor attention.\r\n\r\nWix makes use of strip layouts which can be used to add anything from blocks of text, images, or interactive site elements. The seamless editing format allows for all of the boxes to be moved around.  \r\n\r\nYour images can be edited directly on the Wix platform. You can crop, adjust, and resize your images and even keep your pictures secure from theft using built in image protection.\r\n\r\nNow it’s time to boost your website with apps. Simply choose which apps you want to add via the Wix App Market button on your editor site. Once you click on the “add to site” button, each app will guide you through any further refinements you might be required to make.\r\n\r\nThis may sound tricky at first glance, but once you begin it really is as simple as making style and design choices with a few clicks.', 2, 1, '2020-02-10 00:00:00', '2020-03-05 02:13:07'),
(2, 'Website Builders and Platforms', 'Wix\r\nWix is a popular website builder, most notable for its user-friendly interface. Clients can literally drag and drop items such as text and pictures to any spot on a page. They have a range of free quality website templates which provide value to anyone from a small-time blogger to someone expanding a successful online business. Although the designer might seem basic, it is quite a powerful and capable tool.Wix Website Screenshot\r\n\r\nWix puts a lot of effort into graphic design, despite the fact that they offer their website templates free of charge. This results in customer websites that look professional and unique. Beautiful visuals in website templates are also supported by the speed and stability of the site itself. \r\n\r\nOne downside is that users do not have the option of switching from one website template to another. If the look of your business changes, you won’t be able to adjust the theme without transferring it to another template manually. Additionally, if your website is hosted on Wix, you won’t be able to move it to another web hosting site.\r\n\r\nWordPress\r\nWordPress is the most popular website platform on the internet. It offers users an abundance of controls and high level of customization for free. With a catalog of hundreds of website templates, there is truly something for everyone and every site. While many attractive templates are available for free, there is also a marketplace that features layouts designed by third party producers. \r\n\r\nThis website platform can be activated on your website host and from there you can use it to build your website. WordPress website templates offer themes that are applicable to a range of uses and industries. While many WordPress sites are used as blogging platforms, it is also quite popular as a platform for online businesses, informational sites, and essentially every other category imaginable. Themes are also very easy to change and WordPress allows users to completely change their site design without having to do a manual transfer.\r\n\r\nWebsite themes can then be improved upon by activating plugins. Plugins are additional functions, such as online payments or SEO assistants.\r\n\r\nWe recommend WordPress to more advanced users who don’t require step-by-step and automated assistance. It might be worth learning the platform as it is, without a doubt, the most customizable one available.\r\n\r\nWeebly site templatesWeebly\r\nWhen Weebly first began, their template options made them a fairly weak option for users looking to build a great website. Times have changed, however, and the folks at Weebly seem to have prioritized design with a fresh and abundant selection of templates. Now offering layouts designed by third parties, Weebly is a good option for those looking for templates beyond what is offered directly by the site.\r\n\r\nWeebly has a selection of over 40 professionally designed templates. Each template arrives with blank pages that allow the user to choose one of six different layouts. These options include a simple Home page, an About page, a Services page, a Contact page, a Menu page, and a Portfolio page. These layouts categories represent, for the most part, the standard variety of page design seen on the internet today.\r\n\r\nIt seems that the focus of the designers behind Weebly is paying off. With templates that please, Weebly is fast becoming a serious contender for even the most discerning website builders.\r\n\r\nShopify\r\nWe would be remiss if we did not also include an eCommerce platform as part of our rundown of dynamic web builder template options. A hard truth about online shopping is that appearance matters. No matter how good your products and service are, customers will turn away from your site if it doesn’t offer a high level of professionalism and, frankly, a nice look. Think about it. How many times have you refused to use a website because of bad design? It may not seem rational, but it makes sense that online buying – a highly visual experience – requires a great overall visual feel.\r\n\r\nThere is also a great deal of psychology that goes along with consumer behavior. An online presence has the power to make or break a sale. A professional site is more likely to inspire buyer confidence. Even if you are simply operating a company out of a garage, what you are and what a website presents don’t have to align to achieve credibility.\r\n\r\nShopify is an excellent eCommerce site that features templates created especially for producing beautiful online web stores. The templates are designed with shopper psychology in mind. They are eye-catching, smart, and inspire confidence. Themes are conveniently divided by industry, including art, fashion, electronics, and more.\r\n\r\nBasic templates are free, but they can go for as much as $180. For a one-time investment, it’s not a bad idea if you really want to set yourself apart.', 1, 1, '2020-02-10 00:00:00', '2020-03-05 05:07:11'),
(3, 'The 3 Best Logo Design Software Programs of 2020', 'The success of any business depends on a lot of factors, such as quality of products/services it provides, and customer service. That said, a brand also needs a unique visual identity, one that can make it recognizable anywhere. That identity is a logo. From McDonald\'s Golden Arches to Target\'s Bullseye, there are many logos that have become as iconic as the brands they represent.\r\n\r\nIf you want to design a logo for your upcoming business, there are many graphics editing packages that you can use. For designing logos, vector graphics editors are preferred. That\'s because they allow a logo (or any other graphic created in them) to be scaled up/down to any size, without any loss of quality. With the right program, you can create a logo that\'ll look equally great on a business card and a billboard.\r\n\r\nHere are some of the best logo design software applications that are available today. Read all about the features that they offer, and take your pick.\r\n\r\nBest Overall: Adobe Illustrator\r\n\r\nAdobe\'s products are widely accepted as the gold standard of image manipulation programs, and rightfully so. If you\'re on the hunt for the absolute best logo design software, look no further than Adobe Illustrator.\r\n\r\nPacked with many advanced features, Adobe Illustrator lets you not only create stunning logos, but also icons, drawings and more. Since it\'s a vector graphics editor, all logos (and other artwork) created in Illustrator perfectly scales based on your requirements. Its type tools can be used to add textual elements in logos. You can add effects, manage styles and even edit individual characters for more control. Illustrator lets you increase the size of anchor points and handles for easier editing, and you can merge data using CSV files. The Puppet Warp feature can be used to quickly create/modify graphics without having to adjust individual anchor points.\r\n\r\nAdobe Illustrator supports SVG OpenType fonts that include multiple colors, gradients and transparencies. You can create up to a thousand artboards and select multiple of them at a time to edit.\r\n\r\n\r\nRunner-Up, Best Overall: CorelDRAW\r\n\r\nCorelDRAW has indeed come a long way since its first release. As it stands, it\'s among the best logo design software on the market. CorelDRAW\'s powerful vector editing tools let you design incredibly rich and detailed logos, but that\'s just the tip of the iceberg. The program has numerous features for working on graphics, illustrations, layouts, tracings and more. Its Symmetry drawing mode can be used to create a range of symmetrical designs, ranging from simple shapes to kaleidoscopic effects. The Block Shadow tool lets you add vector shadows to objects and text. You can align and distribute nodes using the bounding box of a selection or a specified point. Using CorelDRAW\'s pointillizer, you can create high-quality vector mosaics in no time. Then there\'s PhotoCocktail, which makes creating photo collages a breeze.\r\n\r\nSome other features of CorelDRAW include complementary color palettes, advanced OpenType support, a built-in collection of royalty-free content and a touch-friendly user interface.\r\n\r\nBest Online: Canva\r\n\r\nWeb standards and technologies are getting better by the day and there are now Web applications available for just about any software you can think of. One of them is Canva, and it happens to be the best online logo design software (or Web app).\r\n\r\nHaving hundreds of logo templates and powerful design tools, Canva makes creating your own unique logo a walk in the park. All of these templates and design tools are free to use, and there are also lots of free images and graphics. For premium images, you have to pay $1/image for one-time use. Canva consists of numerous professionally-created font pairings that you can choose from. You can also create your own font combinations and customize them further. Canva also has apps for iOS and Android, so you can design logos even when you\'re on the move.\r\n\r\nOne of Canva\'s interesting features is that it lets you collaborate with others on logo design. Once invited, your teammates can seamlessly share and edit logos.', 3, 3, '2020-02-11 00:00:00', '2020-03-04 15:14:00'),
(4, 'The 5 Best Marketing Strategies to Try in 2020', 'Well, 2020 is here. And, so far, it doesn’t look much different than December 2019. That’s why we asked dozens of digital marketers for their best marketing strategies of last year—and, boy, did they deliver.\r\n\r\nHere’s a look at what tops the list for marketing experts 2019—and what we think are the 16 best marketing strategies you can take into 2020. \r\n\r\n1. Educate with your content\r\nContent has long been king and 2019 was no different.\r\n\r\nCiting figures from the Content Marketing Institute’s 2019 trends report, Robin Barendsen, head of digital marketing at office space rental company WehaveAnyspace, noted 77% of B2B marketers use content marketing.\r\n\r\n“In fact, the majority of B2B content marketers use educational assets to nurture leads and build audience trust, which is absolutely essential for inbound marketing,” he said. “Think about informational blogs, white papers or quizzes.”\r\n\r\n2. Personalize your marketing messages\r\nPeter Wilfahrt, managing director of digital agency Versandgigant, said marketers should personalize every single message in 2020 by digging into analytics and understanding demographics, affinity categories and in-market segments. More on that in a moment.\r\n\r\n“Only very few brands execute a personalized messaging strategy,” he said. “And we’re not talking about adding the first name to your email greeting … really dig into your prospect’s mind and discover what they fear, wish and want.”\r\n\r\nWhile Brock Murray, COO of digital marketing agency seoplus+, agrees consumers should be made to feel special, he argues automation is the way to go because it allows advertisers to create ads that dynamically change based on whoever is searching. And, Murray said, results show consumers want this type of customization.\r\n\r\n3. Let data drive your creative\r\nAccording to Natalia Wulfe, CMO of digital marketing agency Effective Spend, platforms like Google and Facebook are taking control more control of audience targeting as they simultaneously move away from manual bidding capabilities. Meanwhile, their algorithms have become adept at understanding which ad images and copy will drive the best click-through and conversion rates.\r\n\r\n“With these shifts, we’ve seen creative emerging as a serious performance driver, carrying equal weight to other key drivers like placement selection and audience targeting,” she said.\r\n\r\nAs a result, Effective Spend overhauled its creative design process to incorporate a data-first approach.\r\n\r\n“We analyze the performance metrics of existing creative, identify where the gaps are, and then design new creative that directly impacts those poor performing metrics,” she added.\r\n\r\n4. Invest in original research\r\nOne of the best marketing strategies of 2010 was investing in original research.\r\n\r\nTamas Torok, head of online marketing at Javascript development company Coding Sans, said Coding Sans has been publishing its own research on software development trends since 2017, and these reports have generated links from reputable websites and yielded thousands of subscribers.\r\n\r\n“This strategy worked because we came up with something new,” he said. “New data attracted links and it was beautifully presented, which made people share it on social media.”\r\n\r\nCoding Sans plans to publish at least three new reports with original research in 2020.\r\n\r\nMatthew Zajechowski, outreach team lead at digital marketing agency Digital Third Coast, agreed using proprietary data to create long-form content with graphics has been an effective 2019 strategy, resulting in backlinks from thousands of high-authority publications.\r\n\r\n“Publishers want new story angles to cover on a subject even if they’ve covered it a billion times before,” he added. “Having proprietary data allows us to have that unique angle and presenting it with graphics makes it easy for them to share. We look for writers and publications who cover that subject and present it to them as new research or a study.”\r\n\r\n5. Update your content\r\nAnd don’t forget the content you’ve already published.\r\n\r\nIn fact, Cyrus Yung, co-founder of SEO company Ascelade, said updating old content is a strategy that has served Ascelade well as Google has a freshness ranking factor and most sites eventually see content decay.\r\n\r\n“They have old articles that have ranked well previously and have attracted backlinks, but the search traffic for that particular article is on a downward trend,” he said.\r\n\r\nMark Webster, co-founder of online marketing education company Authority Hacker, said 2019 was the year Authority Hacker focused on this tactic of refreshing older content instead of just pumping out new, high quality content.\r\n\r\n “After some testing, we found that making simple updates and tweaks and, most importantly, changing the date of the article to represent the newest revision [made] our rankings instantly [jump] up,” he said. “It\'s no secret Google prefers fresh content but we had not anticipated this to be such an easy win.”\r\n\r\n', 4, 2, '2020-02-11 00:00:00', '2020-03-04 08:20:22'),
(5, '3 digital marketing trends in 2020.', '1) Artificial Intelligence\r\nIf you haven’t already realized it, 2020 may be the year that a lot of people wake up to the dominance of artificial intelligence (AI). It’s sure to be at the heart of global business and industry in the future – and it’s already taking over many simple jobs.\r\n\r\nFor example, Microsoft and Uber use Knightscope K5 robots to “patrol parking lots and large outdoor areas to predict and prevent crime. The robots can read license plates, report suspicious activity, and collect data to report to their owners.” You can rent these R2-D2-like robots for $7 an hour – which is less expensive than a human security guard\'s wage:\r\n\r\n\r\nAI can analyze consumer behavior and search patterns, and use data from social media platforms and blog posts to help businesses understand how customers find their products and services.\r\n\r\nOne exciting example of AI in practice is chatbots (more on that later). Mastercard created a Facebook messenger bot – which uses natural language processing software to decipher what the customer wants and respond as if it were a real person – to automate handling payments:\r\n\r\nArtificial intelligence will soon be the driving force behind many services and, currently, we already see it implemented in such areas as:\r\n\r\nBasic communication\r\nProduct recommendations\r\nContent creation\r\nEmail personalization\r\nE-commerce transactions\r\n\r\n\r\n\r\n2) Programmatic Advertising\r\nProgrammatic advertising means using AI to automate ad buying so you can target more specific audiences. Real-time bidding, for example, is a type of programmatic ad buying. This automation is much more efficient and fast, which means higher conversions and lower customer acquisition costs.\r\n\r\nIt’s changing the face of digital advertising so swiftly that, according to eMarketer, 86.2% of digital display ads in the U.S. will be programmatic by 2020.\r\n\r\nAccording to Irina Kovalenko of SmartyAds:\r\n\r\n“Most search-driven manual advertising campaigns (even those performed with professional tools) take into account three or four targets: the keyword, time of day, and location. Such tools like programmatic demand-side platforms can use hundreds of targeting signals to individualize the advertisement and even target according to lifestyle or behavior habits when integrated with customer data platforms.”\r\n\r\nHere’s a quick look at how programmatic advertising works:\r\n\r\n\r\n\r\n3) Chatbots\r\nChatbots will continue to be an important part of digital marketing in 2020. This AI-based technology uses instant messaging to chat in real-time, day or night, with your customers or site visitors.\r\n\r\nSurveys show that:\r\n\r\nChatbots will power 85% of customer service by 2020\r\nTop benefits of chatbots are 24-hour service (64%), instant responses to inquiries (55%), and answers to simple questions (55%)\r\n63% of respondents prefer messaging an online chatbot to communicate with a business or brand\r\nBy 2022, chatbots will help businesses save over $8 billion per annum\r\n80% of businesses want chatbots by 2020:\r\n', 5, 2, '2020-02-15 00:00:00', '2020-03-04 04:29:00'),
(6, 'Digital sales - 2020 digital marketing trends', 'Digital sales trends\r\n\r\n1. Assignment selling\r\nDoes your sales team use any of the content being produced by the marketing team? Do you, as marketers, work with your sales team to create content that could help the sales team close deals?\r\n\r\nIf so, assignment selling is for you.\r\n\r\nAssignment selling is simply the process of intentionally using educational content you have created about your products and services to resolve the major concerns and answer the burning questions of prospects during the sales process so they are much more prepared for a sales appointment.\r\n\r\nRelated: 5 real-life examples of assignment selling in action\r\n\r\nThe direct result of your sales team using created content in the sales process is a more well-informed prospect who is more likely to close — and close faster.\r\n\r\nAs an added benefit, your sales team will also spend less time answering the same questions over and over again through assignment selling. Sales conversations become more efficient and exist only with prospects that understand your offering.\r\n\r\n2. Predictive lead scoring\r\nHow are you currently prioritizing the leads to focus on those that will most likely result in a sale? If you have a manual process built around lifecycle stages and traffic source, you’re wasting time when technology has created the solution.\r\n\r\nAI and machine learning has improved so much in the past couple of years and one use of this functionality is predictive lead scoring.\r\n\r\nHubSpot and other CRM software options now usually have the ability to help you filter through your contacts and understand trends and behaviors.', 6, 2, '2020-03-24 13:18:00', '2020-03-24 13:18:00'),
(7, 'Video marketing trends', 'Product-focused videos\r\nFifty-two percent of consumers say that watching product videos makes them more confident in online purchase decisions.\r\n\r\nYou cannot assume that your buyers understand the products that you’re selling online. Product videos can further explain what written specifications details and pricing cannot. Videos for products should explain:\r\n\r\nWhat is it?\r\nWho\'s it a good/not good fit for?\r\nWhy do I need it?\r\nHow much does it cost?\r\nWhen should I buy it?\r\nHow do I buy it?\r\n5. Long-form videos\r\nIn 2017, a vast majority of videos (80%) were under five minutes or shorter. These short videos tend to make up less than a third of total engagement of all video content.\r\n\r\nConversely, videos that were 15 minutes or longer resulted in 50% of audience engagement.\r\n\r\nWith the rise in video as a content medium, focusing on engagement needs to be at the core of your video strategy. Vanity metrics such as likes and views aren’t going to move the needle.', 7, 2, '2020-03-24 07:23:14', '2020-03-24 07:23:14'),
(8, 'Search and seo digital marketing trends', ' The continued importance of local SEO\r\nAn increasing number of searchers are looking for businesses close to them, which have been deemed “near me” searches.\r\n\r\nFrom 2013 to 2017 there was a 900% increase in \"near me\" searches. In the past two years, there has also been a 200% growth for phrases like \"now\" + \"near me.\"\r\nFor businesses that operate on a local level, there is a massive opportunity to capture buyers at a moment where there is an immediate need.\r\n\r\nOptimizing for local SEO starts with creating and optimizing your listing on Google My Business. These local listings from Google My Business will show up before the organic listing.\r\n\r\nThink of your Google My Business listing as the local extension to your website. If your business operates on a local level, optimizing your website and Google My Business for local SEO is paramount.\r\n', 8, 2, '2020-03-24 09:12:05', '2020-03-24 09:12:05'),
(9, 'Dark mode is new webdesign trend', 'Dark mode web designs not only look ultra modern, but they’re easy on the eyes and make colors and design elements pop.\r\n\r\nSometimes the most visually stunning web design trends have practical beginnings. Dark themes are better for OLED screens—saving power and extending screen lifespans—but that utility doesn’t stop them from looking good. Dark backgrounds improve the visibility of other accent colors for truly dynamic design.\r\n\r\nDark mode is so hot right now. \r\n- Sam Chang, Product Designer at 99designs\r\nCoincidentally, the dark mode design aesthetic also fits in perfectly with other prevalent 2020 design trends that include dark and moody color schemes combined with glowing neons as well as futuristic yet dark cyberpunk and dystopian styles.', 9, 1, '2020-03-23 06:00:00', '2020-03-23 06:00:00'),
(10, 'Imperfection in webdesign', 'Imperfect, hand-drawn design elements inject emotion and humanity into websites, which users seem to be craving after seeing perfected yet impersonal graphics dominate web designs for years. In 2020, adding some hand-drawn realness gives web designs the heart and soul visitors find appealing.\r\n\r\nA big trend next year will be hand-drawn icons. They’re more emotional, but on a positive note. This trend is connected to the fact that we need more positive stuff around, something that can brighten up the day. \r\n- Elisabetta Calabritto\r\nExample of 2020 web design trend hand-drawn icons and elements\r\nvia Chelsea Carlson\r\nExample of 2020 web design trend hand-drawn icons and elements\r\nby Elisabetta Calabritto\r\nIndeed, who couldn’t use a little extra positivity these days. Unique and stylized, hand-drawn icons and other elements show off your brand personality and stand out from your competitors. In fact, this rebellious trend is almost a countermovement to the trend of pixel-perfect flat designs—so flaunt your scratchy edges and open shapes to show how human and lifelike your brand is.\r\n\r\nWhether it’s hand-drawn icons or hand-made illustrations, in 2020 we’ll see more designers adding purposefully messy-looking elements to their web designs.', 10, 1, '2020-03-23 16:00:00', '2020-03-23 16:00:00'),
(11, 'Soft shadows in webdesign', 'Soft shadows and floating elements create a pseudo-3D effect and make the design more layered and more interesting. \r\n- Alex Ivanov\r\nThis trend is all about creating depth. Like the 3D effect from above but want to tone it down? Soft shadows and floating elements add interest and depth and give your web page a “3D Lite” look. It’s not just graphics either: you can use this effect with text and photos, too.\r\n\r\nTaking the principles of material design a step further, designers can add a little extra pizzazz to 2D layouts with soft drop shadows and layering elements on top of each other for extended depth. These effects give the design a lightweight feel, as if the elements are floating over each other—a sharp contrast from classic, impenetrable flat design where the layers seem, well, flat.', 11, 1, '2020-03-24 10:00:00', '2020-03-24 10:00:00'),
(12, 'Ultra minimalist navigation in webdesign', 'In 2020, website content will be more video with voice script and less text, heading towards precision over description. Overall, web design is going to be more simplistic to facilitate easier navigation. \r\n- Ananya Roy\r\nWith the rise of wearable devices like smartwatches, web design in general is thinking smaller. The area most affected by this is navigation, the glue that holds a website together. Over the last few years, navigation has been getting simpler and simpler to accommodate extremely small devices and even smaller attention spans.\r\n\r\nExtremely minimalist navigation takes away much of the difficulty in usability. The less a user has to think about moving around, the more time they spend immersed in the site, actually moving around instead of wondering how.\r\n\r\nAt the same time, imagery is becoming more important.  Large-scale photos and videos are your chance to impress users—while only using the bare minimum of text.', 12, 1, '2020-03-24 05:11:00', '2020-03-24 05:11:00'),
(13, 'Broken proportions Illustrations', 'As for digital illustration, the year 2019 let the trend of broken proportions get even more solid positions. It started getting established last year, yet this year it achieved the amazing diversity of styles, plots, exaggeration or tinification, and visual metaphors. Such an approach is definitely effective in setting visual originality, wished so much by brands. Still, to be done harmonically and beautifully, it requires real artistic talent from the illustrator: to break the rules, you need to know them perfectly!', 13, 3, '2020-03-24 09:07:00', '2020-03-24 09:07:00'),
(14, 'Illustrations with surrealism', 'Surrealism\r\nThis year digital art appears to step much closer to high arts than ever before. One of the ways to do it has been integrating the elements of surrealism into illustrations and branding. It definitely gives the outcome that is quite specific and out-of-the-box, so both artists and brands should be ready for all kinds of feedback. The comments and emotions on it can be either positive or super negative, yet there’s one thing for sure: nobody will stay indifferent. Isn’t that what people and brands strive to get?', 14, 3, '2020-03-23 09:25:00', '2020-03-23 09:25:00'),
(15, 'Flat lay art illustrations', 'Although we can hear that flat lay has lost its positions in photography, graphic design and digital illustration seem to not care about that. It may be inspired by the best food-photographers that still make special art of flat lay evolution, elaborate and high-quality pictures of workspaces, and many other factors. Anyway, due to a variety of tools, brushes, and textures, flat lay has got a new breath in illustrators’ artworks this year.', 15, 3, '2020-03-23 11:09:00', '2020-03-23 11:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `post_photo`
--

CREATE TABLE `post_photo` (
  `id_postphoto` int(11) NOT NULL,
  `path_new` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_photo`
--

INSERT INTO `post_photo` (`id_postphoto`, `path_new`, `alt`) VALUES
(1, 'image_4.jpg', ''),
(2, 'image_3.jpg', ''),
(3, 'image_1.jpg', ''),
(4, 'image_6.jpg', ''),
(5, 'image_11.jpg', ''),
(6, 'image_2.jpg', ''),
(7, 'image_7.jpg', ''),
(8, 'image_12.png', ''),
(9, 'image_13.jpg', ''),
(10, 'image_15.jpg', ''),
(11, 'image_14.png', ''),
(12, 'image_16.png', ''),
(13, 'image_17.jpg', ''),
(14, 'image_8.jpg', ''),
(15, 'image_18.jpg', ''),
(16, 'image_1.jpg', ''),
(17, '1585247153_about.jpg', 'Blog photo'),
(18, '1585257597_bg_1.jpg', 'Blog post'),
(19, '1585303610_image_2.jpg', 'Blog photo'),
(20, '1585303717_bg_1.jpg', 'Blog post'),
(21, '1585328562_1585303610_image_2.jpg', 'Blog photo'),
(22, '1585328603_1585303717_bg_1.jpg', 'Blog post');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Marijana', 'Mitrovic', 'adminphp2sajt1@gmail.com', '4bbee0455998a2a2c34c8ac506af6626', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Pera', 'Peric', 'pera@gmail.com', '5a45abb955bdc5c7290b20a99acd25f5', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Marijana', 'Mitrovic', 'mayaphp2@gmail.com', '1d980178d7fc1069b7193b03730f2497', 1, '2020-03-17 12:15:00', '2020-03-17 12:16:00'),
(4, 'Laza', 'Lazic', 'laza@gmail.com', '0038d351df1c66c4c3d5587b73e38c3a', 2, '2020-03-17 11:41:45', '2020-03-17 11:41:45'),
(5, 'Nekoizmenjen', 'Imeizmenjen', 'nekoizm@gmail.com', '8aa87050051efe26091a13dbfdf901c6', 2, '2020-03-17 11:52:57', '2020-03-26 10:27:29'),
(6, 'Perica', 'Peric', 'pericinmail@mail.com', '6e767a46a67b298fb38911105f1fd418', 2, '2020-03-25 10:05:43', '2020-03-25 10:05:43'),
(7, 'Korisnik', 'Korisnik', 'korisnik@gmail.com', '76d77b52462fb753658e4e72f9e3136b', 2, '2020-03-25 10:06:19', '2020-03-25 10:06:19'),
(8, 'Mika', 'Mikic', 'mika@gmail.com', 'accef79bb8eb109e95c8cdfce9fc43a3', 2, '2020-03-25 10:06:41', '2020-03-25 10:06:41'),
(9, 'Neko', 'Prezimeee', 'neki@mail.com', '75d32b3aa6f034695e950f1edbc88c74', 2, '2020-03-25 10:07:02', '2020-03-25 10:07:02'),
(10, 'Bla', 'Blabla', 'bla@bla.com', '1a36591bceec49c832079e270d7e8b73', 2, '2020-03-25 10:07:54', '2020-03-25 10:07:54'),
(11, 'Jova', 'Jovanovic', 'jova@mail.com', 'd2bbc8cd6a234b4eb21c34ecc354e61e', 2, '2020-03-25 10:08:34', '2020-03-25 10:08:34'),
(12, 'Maya', 'Mitrovic', 'maya.laravel@gmail.com', '8c31633eb71936c8d867c4398aa550e4', 1, '2020-03-25 23:15:00', '2020-03-25 23:17:00'),
(16, 'Ime', 'Nekoga', 'bzbzbzb@gmail.com', '5104eef17ce796b5193aab79b5b39d2d', 2, '2020-03-26 07:01:30', '2020-03-26 07:01:30'),
(17, 'Izmenjen', 'Korisnik', 'nekoizmenjen@gmail.com', '8aa87050051efe26091a13dbfdf901c6', 2, '2020-03-26 09:49:16', '2020-03-26 09:49:16'),
(19, 'Trying', 'Register', 'blaaa@sasd.com', '8aa87050051efe26091a13dbfdf901c6', 2, '2020-03-27 12:40:02', '2020-03-27 12:40:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id_act`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_photo`
--
ALTER TABLE `post_photo`
  ADD PRIMARY KEY (`id_postphoto`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `post_photo`
--
ALTER TABLE `post_photo`
  MODIFY `id_postphoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
