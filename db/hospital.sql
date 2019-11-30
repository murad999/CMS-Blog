-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 08:26 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `featured` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `content`, `featured`, `created_at`, `updated_at`) VALUES
(1, 'Premedi Hospital', '<p><span style=\"\" source=\"\" sans=\"\" pro\",=\"\" sans-serif;\"=\"\">Lorem ipsum dolor sit amet consectetur adipiscing elit porta erat dictum, aptent nascetur metus ut sociis egestas neque lacus duis taciti penatibus, himenaeos justo facilisis mi consequat viverra praesent ultrices hac. Elit condimentum convallis leo euismod suspendisse quam enim pretium senectus phasellus varius habitasse justo nostra, platea vel porttitor hendrerit accumsan vehicula tortor gravida morbi imperdiet lectus facilisis neque. Ullamcorper tellus ut ligula nostra ad tristique mollis arcu amet scelerisque urna, elit magnis vivamus turpis natoque at donec lectus sed dignissim.</span><br></p>', 'uploads/about/1574609369appoinment1.png', '2019-11-28 12:38:09', '2019-11-28 06:38:09'),
(2, 'Premedi Hospital', '<p>sdjflksjfksjdkfljskldfjslkjf</p>', 'uploads/about/1574658725appoinment1.png', '2019-11-24 23:12:05', '2019-11-24 23:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doctor_id`, `department_id`, `name`, `phone`, `date`, `created_at`, `updated_at`, `status`) VALUES
(1, 2, 5, 'ABDULLAH-AL-MAMUN', '01914337606', '11/29/2019', '2019-11-28 11:25:10', '2019-11-28 11:25:10', 1),
(2, 3, 6, 'Ross', '01914337606', '11/30/2019', '2019-11-29 11:01:06', '2019-11-29 05:01:06', 0),
(3, 3, 2, 'ABDULLAH-AL-NOMAN', '01914337606', '12/07/2019', '2019-11-29 09:56:53', '2019-11-29 03:36:46', 1),
(4, 2, 3, 'Murad Hasan', '01914337606', '12/06/2019', '2019-11-29 11:26:48', '2019-11-29 11:26:48', 1),
(5, 3, 5, 'Dr.Anjelina Rossy', '01914337606', '12/06/2019', '2019-11-29 11:28:16', '2019-11-29 11:28:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `featured` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `department_id`, `title`, `slug`, `content`, `featured`, `created_at`, `updated_at`) VALUES
(1, 2, 'Why primary treatment is important?', 'why-primary-treatment-is-important', '<p style=\"margin-bottom: 0px; font-size: 15px; font-family: \"Source Sans Pro\", sans-serif; line-height: 24px; color: rgb(96, 96, 96);\">There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral.There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral</p><p><br style=\"color: rgb(51, 51, 51);\"></p><p class=\"single-blog-para\" style=\"margin-bottom: 70px; font-size: 15px; font-family: \"Source Sans Pro\", sans-serif; line-height: 24px; color: rgb(96, 96, 96);\">There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral</p>', 'uploads/blogs/1574789258recent-post-2.png', '2019-11-26 17:49:34', '2019-11-26 11:49:34'),
(2, 5, 'What primary treatment do & it\'s importance?', 'what-primary-treatment-do-its-importance', '<p style=\"margin-bottom: 0px; font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif; line-height: 24px; color: rgb(96, 96, 96);\">There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral.There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral</p><p><br style=\"color: rgb(51, 51, 51);\"></p><p class=\"single-blog-para\" style=\"margin-bottom: 70px; font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif; line-height: 24px; color: rgb(96, 96, 96);\">There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral</p>', 'uploads/blogs/1574789495recent-post-1.png', '2019-11-26 11:31:35', '2019-11-26 11:31:35'),
(3, 3, 'Why primary treatment is important?', 'why-primary-treatment-is-important', '<p style=\"margin-bottom: 0px; font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif; line-height: 24px; color: rgb(96, 96, 96);\">There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral.There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral</p><p><br style=\"color: rgb(51, 51, 51);\"></p><p class=\"single-blog-para\" style=\"margin-bottom: 70px; font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif; line-height: 24px; color: rgb(96, 96, 96);\">There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral</p>', 'uploads/blogs/1574789529recent-post-2.png', '2019-11-26 11:32:09', '2019-11-26 11:32:09'),
(4, 1, 'What primary treatment do & it\'s importance?', 'what-primary-treatment-do-its-importance', '<p style=\"margin-bottom: 0px; font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif; line-height: 24px; color: rgb(96, 96, 96);\">There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral.There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral</p><p><br style=\"color: rgb(51, 51, 51);\"></p><p class=\"single-blog-para\" style=\"margin-bottom: 70px; font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif; line-height: 24px; color: rgb(96, 96, 96);\">There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral</p>', 'uploads/blogs/1574789545recent-post-1.png', '2019-11-26 11:32:25', '2019-11-26 11:32:25'),
(5, 5, 'What primary treatment do & it\'s importance?', 'what-primary-treatment-do-its-importance', '<p style=\"margin-bottom: 0px; font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif; line-height: 24px; color: rgb(96, 96, 96);\">There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral.There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral</p><p><br style=\"color: rgb(51, 51, 51);\"></p><p class=\"single-blog-para\" style=\"margin-bottom: 70px; font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif; line-height: 24px; color: rgb(96, 96, 96);\">There was some preliminary evidence that treatments by specialist staff working in primary.There was some preliminary evidence that treatments by specialist staff working in primary.Your childs primary and permanent treatment is important to help your child establish good oral</p>', 'uploads/blogs/1574939947recent-post-3.png', '2019-11-28 11:53:18', '2019-11-28 05:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `text_message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_name`, `user_email`, `text_message`, `created_at`, `updated_at`, `status`) VALUES
(1, 'hasan', 'hasan@gmail.com', 'hi, this is me', '2019-11-29 07:37:02', '2019-11-29 07:37:02', 1),
(2, 'hasan', 'hasan@gmail.com', 'say...hello', '2019-11-29 07:38:35', '2019-11-29 07:38:35', 1),
(3, 'hasan', 'hasan@gmail.com', 'hello...again', '2019-11-29 13:54:08', '2019-11-29 07:54:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Cardilogy', '2019-11-24 12:51:42', '2019-11-24 06:51:42'),
(2, 'Neurology', '2019-11-24 06:16:29', '2019-11-24 06:16:29'),
(3, 'Diagnostics', '2019-11-24 06:16:53', '2019-11-24 06:16:53'),
(4, 'Detal', '2019-11-24 06:17:16', '2019-11-24 06:17:16'),
(5, 'Eye Care', '2019-11-24 06:17:39', '2019-11-24 06:17:39'),
(6, 'Emergency', '2019-11-24 06:18:00', '2019-11-24 06:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `dep_services`
--

CREATE TABLE `dep_services` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `featured` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dep_services`
--

INSERT INTO `dep_services` (`id`, `department_id`, `title`, `content`, `featured`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cardilogy', '<p><span style=\"color: rgb(96, 96, 96); font-family: \"Source Sans Pro\", sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing elit blandit faucibus et, volutpat scelerisque ante molestie praesent felis auctor vivamus.</span><br style=\"color: rgb(96, 96, 96); font-family: \"Source Sans Pro\", sans-serif;\"><br style=\"color: rgb(96, 96, 96); font-family: \"Source Sans Pro\", sans-serif;\"><span style=\"color: rgb(96, 96, 96); font-family: \"Source Sans Pro\", sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing, elit sem nulla sed lobortis dui, senectus fermentum vivamus scelerisque pretium.</span><br style=\"color: rgb(96, 96, 96); font-family: \"Source Sans Pro\", sans-serif;\"><br style=\"color: rgb(96, 96, 96); font-family: \"Source Sans Pro\", sans-serif;\"><span style=\"color: rgb(96, 96, 96); font-family: \"Source Sans Pro\", sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing elit in nec et, rutrum nunc convallis facilisis ridiculus tincidunt ullamcorper nostra porta, est dictumst potenti libero augue suscipit risus ante semper.</span><br></p>', 'uploads/depServices/1574675040department-tab-1.png', '2019-11-25 11:17:45', '2019-11-25 05:17:45'),
(2, 2, 'Neurology', '<p><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing elit libero ut praesent, ridiculus inceptos accumsan habitant penatibus dapibus quis augue ac orci, hac magna cum vulputate potenti maecenas mus himenaeos porta.</span><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing elit nostra, posuere porttitor habitant id a sapien sollicitudin ultrices, vel nunc malesuada lectus augue mattis faucibus.</span><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing elit conubia sociis, nibh vestibulum consequat bibendum malesuada laoreet netus ante accumsan, sem ultrices class senectus at mus libero faucibus.</span><br></p>', 'uploads/depServices/1574675131department-tab-2.jpg', '2019-11-25 03:45:31', '2019-11-25 03:45:31'),
(3, 3, 'Diagnostics', '<p><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing elit nibh mauris lacinia ac tellus, odio metus orci rhoncus laoreet proin a maecenas mus nostra aenean semper ante, penatibus sem gravida facilisis tempus libero condimentum augue cubilia parturient nascetur.</span><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing elit morbi volutpat, mauris tortor ridiculus orci rhoncus fames eros mattis, justo bibendum dictumst eu euismod ad tempor mi.</span><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing, elit fusce pharetra turpis quam eget tellus, parturient rutrum per duis faucibus.</span><br></p>', 'uploads/depServices/1574675180department-tab-3.jpg', '2019-11-25 03:46:20', '2019-11-25 03:46:20'),
(4, 4, 'Dental', '<p><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing elit nibh mauris lacinia ac tellus, odio metus orci rhoncus laoreet proin a maecenas mus nostra aenean semper ante, penatibus sem gravida facilisis tempus libero condimentum augue cubilia parturient nascetur.</span><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing elit morbi volutpat, mauris tortor ridiculus orci rhoncus fames eros mattis, justo bibendum dictumst eu euismod ad tempor mi.</span><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing, elit fusce pharetra turpis quam eget tellus, parturient rutrum per duis faucibus.</span><br></p>', 'uploads/depServices/1574675239department-tab-4.jpg', '2019-11-27 19:06:53', '2019-11-25 03:47:19'),
(5, 5, 'EyeCare', '<p><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing elit nibh mauris lacinia ac tellus, odio metus orci rhoncus laoreet proin a maecenas mus nostra aenean semper ante, penatibus sem gravida facilisis tempus libero condimentum augue cubilia parturient nascetur.</span><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing elit morbi volutpat, mauris tortor ridiculus orci rhoncus fames eros mattis, justo bibendum dictumst eu euismod ad tempor mi.</span><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing, elit fusce pharetra turpis quam eget tellus, parturient rutrum per duis faucibus.</span><br></p>', 'uploads/depServices/1574675292department-tab-5.jpg', '2019-11-27 19:08:08', '2019-11-25 03:48:12'),
(6, 6, 'Emergency', '<p><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing elit nibh mauris lacinia ac tellus, odio metus orci rhoncus laoreet proin a maecenas mus nostra aenean semper ante, penatibus sem gravida facilisis tempus libero condimentum augue cubilia parturient nascetur.</span><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing elit morbi volutpat, mauris tortor ridiculus orci rhoncus fames eros mattis, justo bibendum dictumst eu euismod ad tempor mi.</span><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><br style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif;\">Lorem ipsum dolor sit amet consectetur adipiscing, elit fusce pharetra turpis quam eget tellus, parturient rutrum per duis faucibus.</span><br></p>', 'uploads/depServices/1574675339department-tab-6.jpg', '2019-11-25 03:48:59', '2019-11-25 03:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `featured` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `department_id`, `name`, `designation`, `featured`, `created_at`, `updated_at`) VALUES
(1, 2, 'Dr.Anjelina Rossy', 'MBBS MS', 'uploads/doctors/1574776336team-1.png', '2019-11-26 15:57:26', '2019-11-26 09:57:26'),
(2, 1, 'Dr.Anjelina Rossy', 'MBBS MS', 'uploads/doctors/1574777790team-4.png', '2019-11-26 08:16:30', '2019-11-26 08:16:30'),
(3, 5, 'Dr.Anjelina Rossy', 'MBBS MS', 'uploads/doctors/1574777816team-5.png', '2019-11-26 08:16:56', '2019-11-26 08:16:56'),
(4, 4, 'Dr.Anjelina Rossy', 'MBBS MS', 'uploads/doctors/1574935293team-4.png', '2019-11-28 04:01:33', '2019-11-28 04:01:33');

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
(10, '2018_04_14_051647_create_posts_table', 2),
(33, '2014_10_12_000000_create_users_table', 3),
(34, '2014_10_12_100000_create_password_resets_table', 3),
(35, '2018_04_08_205859_create_todos_table', 3),
(36, '2018_04_15_171641_create_posts_table', 3),
(37, '2018_04_15_171837_create_categories_table', 3),
(38, '2018_04_23_141800_create_tags_table', 3),
(39, '2018_04_23_142946_create_post_tag_table', 3),
(40, '2018_04_24_134721_create_profiles_table', 3),
(41, '2018_04_26_100219_create_settings_table', 4);

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `avatar`, `user_id`, `about`, `facebook`, `youtube`, `github`, `created_at`, `updated_at`) VALUES
(1, 'uploads/avatars/p.jpg', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, soluta dolorum. Aliquam, quasi, quod! Quis voluptates sapiente hic, accusamus nostrum! Reprehenderit fugiat, vel quam dolorem alias commodi ratione eveniet placeat!', 'facebook.com', 'youtube.com', 'github.com', '2018-04-24 10:45:29', '2018-04-24 10:45:29'),
(2, 'uploads/avatars/1524672356user_p.png', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, soluta dolorum. Aliquam, quasi, quod! Quis voluptates sapiente hic, accusamus nostrum! Reprehenderit fugiat, vel quam dolorem alias commodi ratione eveniet placeat!', 'https://www.facebook.com/', 'https://www.youtube.com/', NULL, '2018-04-24 10:46:37', '2018-04-25 10:05:56'),
(3, 'uploads/avatars/user_p.png', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, soluta dolorum. Aliquam, quasi, quod! Quis voluptates sapiente hic, accusamus nostrum! Reprehenderit fugiat, vel quam dolorem alias commodi ratione eveniet placeat!', 'https://www.facebook.com/', 'https://www.youtube.com/', NULL, '2018-04-24 11:25:11', '2018-04-25 09:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Heart Surgery', '<p><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif; text-align: center;\">Open-heart surgery is any type of surgery where the chest is cut open and surgery</span><br></p>', '<i class=\"icofont icofont-heartbeat\"></i>', '2019-11-25 01:22:31', '2019-11-25 01:22:31'),
(2, 'Dental Care', '<p><span style=\"color: rgb(96, 96, 96); font-family: \"Source Sans Pro\", sans-serif; text-align: center;\">HealthCheck also provides FREE dental services to children up to age21</span><br></p>', '<i class=\"icofont icofont-tooth\"></i>', '2019-11-25 07:41:43', '2019-11-25 01:41:43'),
(3, 'Emergency Services', '<p><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif; text-align: center;\">Emergency medical services, also known as ambulance services or paramedic services</span><br></p>', '<i class=\"icofont icofont-icu\"></i>', '2019-11-25 01:24:31', '2019-11-25 01:24:31'),
(4, 'DNA Testing', '<p><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif; text-align: center;\">DNA paternity testing is the use of DNA to determine two individuals are biologically</span><br></p>', '<i class=\"icofont icofont-dna-alt-1\"></i>', '2019-11-25 01:25:12', '2019-11-25 01:25:12'),
(5, 'Blood Testing', '<p><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif; text-align: center;\">A blood test is a laboratory analysis is usually extracted from a vein</span><br></p>', '<i class=\"icofont icofont-blood\"></i>', '2019-11-25 01:26:00', '2019-11-25 01:26:00'),
(6, '24/7 Support', '<p><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif; text-align: center;\">Free 24/7 support for patients in emergency time addition to free checkups every six months</span><br></p>', '<i class=\"icofont icofont-ambulance\"></i>', '2019-11-25 01:26:33', '2019-11-25 01:26:33'),
(7, 'General Treatment', '<p><span style=\"color: rgb(96, 96, 96); font-family: &quot;Source Sans Pro&quot;, sans-serif; text-align: center;\">General Treatment Guidelines are systematically developed statemets that assist prescriber</span><br></p>', '<i class=\"icofont icofont-bed-patient\"></i>', '2019-11-25 01:27:13', '2019-11-25 01:27:13'),
(8, 'Free Checkup', '<p>Protect your child by having them get a complete physical at the ages<br></p>', '<i class=\"icofont icofont-prescription\"></i>', '2019-11-25 01:27:58', '2019-11-25 01:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `site_title` varchar(255) NOT NULL,
  `site_contact` varchar(255) NOT NULL,
  `site_email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_title`, `site_contact`, `site_email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'PREMEDI', '+880 0123 456 789', 'zerocaps@gmail.com', 'Mohammodput, Townhall, dhaka', '2019-11-27 08:16:20', '2019-11-27 08:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title_slider` varchar(100) NOT NULL,
  `featured_slider` varchar(255) NOT NULL,
  `title_banner` varchar(100) NOT NULL,
  `featured_banner` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_slider`, `featured_slider`, `title_banner`, `featured_banner`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Front-page Slider', 'uploads/sliders/1574870237home-v2.png', 'Banner image', 'uploads/sliders/1574870237subpage-banner.png', 1, '2019-11-27 16:15:46', '2019-11-27 10:15:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Murad Hasan', 'mhkhan.me@gmail.com', 1, '$2y$10$hY.ZBA.CKNs1UQ3W0TmJ0u3cwwcK5UnWotv/hts3yLrZ4xU.Mqude', 'vb335DF1y1PFfFSgybQanaQTvuMc03io7GUcF9sazFE9YIb3VAOpAFZHAomM', '2018-04-24 10:45:28', '2018-04-24 10:45:28'),
(2, 'Mamun', 'mamun@gmail.com', 0, '$2y$10$F8B8MbqUQ84i7rULN10hJ.AUqyuEBWU8lVoI5ACgoRZYVWKUr5Zvq', 'dj3Zp3rvfnzw4aBHc32G260UiOjSEj9dEqQLWAgdt1ZsjX0QM40e44Xs9K2z', '2018-04-24 10:46:37', '2019-11-24 02:47:07'),
(3, 'Jisan Haydar', 'jisan@gmail.com', 0, '$2y$10$Wp26PNBSjmgOJOg2hmCGueipoTn4UzKvK8UcRU6dwlKxYH8P.wze6', 'sHOPWbfWhaizE3nttl54sVlLbJTnwXERsIguZmHspjN9uTGUGYFcl0uaDGRK', '2018-04-24 11:25:11', '2018-04-25 09:50:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dep_services`
--
ALTER TABLE `dep_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dep_services`
--
ALTER TABLE `dep_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
