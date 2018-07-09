-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2018 at 04:20 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work_todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Laravel Articles', '2018-04-26 03:34:01', '2018-04-26 03:34:01'),
(2, 'Wordpress', '2018-04-26 08:24:08', '2018-04-26 08:24:08'),
(3, 'Ruby on Rails', '2018-04-26 08:24:26', '2018-04-26 08:24:26'),
(4, 'JavaScripts', '2018-04-26 08:24:59', '2018-04-26 08:24:59');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `category_id`, `featured`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'Wordpress', 'wordpress-advance', '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: "Open Sans", Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum vulputate enim id elementum. Nullam et pellentesque massa. Cras dapibus placerat ex id convallis. Aliquam erat volutpat. Fusce ac egestas est. Donec aliquet quam in sapien tincidunt elementum. Ut pellentesque lacus quam, sed lobortis lorem ullamcorper vitae. Mauris pretium ex sed tellus ultricies, vel sodales erat commodo. Donec non ante dui. Maecenas eu blandit tortor. Donec vestibulum, sem congue scelerisque imperdiet, mi arcu feugiat enim, non ultricies sem nisi in libero. Curabitur mattis, ante et euismod vestibulum, ante sapien rutrum magna, ac rutrum urna elit maximus dolor.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: "Open Sans", Arial, sans-serif;">Maecenas finibus neque in erat semper, non suscipit turpis finibus. Pellentesque varius tortor id leo fermentum, sed luctus enim sagittis. Maecenas egestas ipsum vel ullamcorper cursus. Etiam eget diam non est varius pellentesque. Duis eu mattis eros. Praesent id convallis orci. Morbi vulputate enim vel velit accumsan consequat vel a sem. Ut malesuada porta risus, vel elementum velit consectetur in. Etiam ut feugiat urna. Cras sed dignissim enim, in vestibulum sapien. Sed luctus, tortor vel pulvinar rhoncus, elit justo rhoncus magna, ac congue arcu enim id diam. Maecenas efficitur facilisis magna, ut porttitor tortor sodales ut. Donec elit metus, faucibus non justo eget, elementum gravida metus. Nam elementum et lorem non sodales. Nullam non augue quam. Nullam ut sollicitudin massa.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: "Open Sans", Arial, sans-serif;">Cras quis tellus efficitur, interdum diam quis, feugiat ante. Ut quis egestas lacus, id feugiat nulla. Fusce egestas tempus condimentum. Curabitur ut tortor lorem. Cras nec pharetra eros, at lobortis metus. Nam ac eros nisi. Quisque fermentum tincidunt lacus vel maximus. Cras gravida risus felis, vitae congue lectus facilisis imperdiet. Mauris pretium sollicitudin risus eu suscipit. Proin nec urna risus. In rhoncus urna eu condimentum ultricies. Sed et urna nibh.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: "Open Sans", Arial, sans-serif;">Cras luctus fermentum vestibulum. Quisque interdum eu enim quis malesuada. Ut commodo congue purus a fermentum. Donec a odio id est lobortis pellentesque non eu mi. Cras tempus nunc felis, sed condimentum justo rhoncus ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sit amet euismod elit. Nunc volutpat massa lacus, quis condimentum urna tempus quis. Proin laoreet congue ornare. Aliquam lorem elit, cursus ac rhoncus sit amet, mattis sed magna.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: "Open Sans", Arial, sans-serif;">Nulla sit amet sem volutpat velit suscipit volutpat. Nunc accumsan, nulla sed ornare aliquam, odio ipsum lobortis massa, sed pharetra lacus nisi at arcu. Sed non ex vel ante facilisis aliquet et id ex. Donec in sapien nec sem rutrum fringilla eu eu tellus. Fusce congue tincidunt tortor, at hendrerit urna volutpat sit amet. Aliquam erat volutpat. Vestibulum pretium lacus id luctus placerat. Aliquam neque mi, porta et diam convallis, finibus finibus orci. Proin sollicitudin tellus viverra volutpat ultrices. Nunc scelerisque blandit nulla ut condimentum.</p>', 2, 'uploads/posts/15247691254.png', NULL, '2018-04-26 11:49:45', '2018-06-24 05:29:53'),
(4, 'Java for all in all', 'java-for-all-in-all', '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum vulputate enim id elementum. Nullam et pellentesque massa. Cras dapibus placerat ex id convallis. Aliquam erat volutpat. Fusce ac egestas est. Donec aliquet quam in sapien tincidunt elementum. Ut pellentesque lacus quam, sed lobortis lorem ullamcorper vitae. Mauris pretium ex sed tellus ultricies, vel sodales erat commodo. Donec non ante dui. Maecenas eu blandit tortor. Donec vestibulum, sem congue scelerisque imperdiet, mi arcu feugiat enim, non ultricies sem nisi in libero. Curabitur mattis, ante et euismod vestibulum, ante sapien rutrum magna, ac rutrum urna elit maximus dolor.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Maecenas finibus neque in erat semper, non suscipit turpis finibus. Pellentesque varius tortor id leo fermentum, sed luctus enim sagittis. Maecenas egestas ipsum vel ullamcorper cursus. Etiam eget diam non est varius pellentesque. Duis eu mattis eros. Praesent id convallis orci. Morbi vulputate enim vel velit accumsan consequat vel a sem. Ut malesuada porta risus, vel elementum velit consectetur in. Etiam ut feugiat urna. Cras sed dignissim enim, in vestibulum sapien. Sed luctus, tortor vel pulvinar rhoncus, elit justo rhoncus magna, ac congue arcu enim id diam. Maecenas efficitur facilisis magna, ut porttitor tortor sodales ut. Donec elit metus, faucibus non justo eget, elementum gravida metus. Nam elementum et lorem non sodales. Nullam non augue quam. Nullam ut sollicitudin massa.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Cras quis tellus efficitur, interdum diam quis, feugiat ante. Ut quis egestas lacus, id feugiat nulla. Fusce egestas tempus condimentum. Curabitur ut tortor lorem. Cras nec pharetra eros, at lobortis metus. Nam ac eros nisi. Quisque fermentum tincidunt lacus vel maximus. Cras gravida risus felis, vitae congue lectus facilisis imperdiet. Mauris pretium sollicitudin risus eu suscipit. Proin nec urna risus. In rhoncus urna eu condimentum ultricies. Sed et urna nibh.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Cras luctus fermentum vestibulum. Quisque interdum eu enim quis malesuada. Ut commodo congue purus a fermentum. Donec a odio id est lobortis pellentesque non eu mi. Cras tempus nunc felis, sed condimentum justo rhoncus ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sit amet euismod elit. Nunc volutpat massa lacus, quis condimentum urna tempus quis. Proin laoreet congue ornare. Aliquam lorem elit, cursus ac rhoncus sit amet, mattis sed magna.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Nulla sit amet sem volutpat velit suscipit volutpat. Nunc accumsan, nulla sed ornare aliquam, odio ipsum lobortis massa, sed pharetra lacus nisi at arcu. Sed non ex vel ante facilisis aliquet et id ex. Donec in sapien nec sem rutrum fringilla eu eu tellus. Fusce congue tincidunt tortor, at hendrerit urna volutpat sit amet. Aliquam erat volutpat. Vestibulum pretium lacus id luctus placerat. Aliquam neque mi, porta et diam convallis, finibus finibus orci. Proin sollicitudin tellus viverra volutpat ultrices. Nunc scelerisque blandit nulla ut condimentum.</p>', 1, 'uploads/posts/15247676743.png', NULL, '2018-04-26 12:34:34', '2018-04-26 12:34:34'),
(5, 'Laravel just awesome', 'laravel-just-awesome', '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum vulputate enim id elementum. Nullam et pellentesque massa. Cras dapibus placerat ex id convallis. Aliquam erat volutpat. Fusce ac egestas est. Donec aliquet quam in sapien tincidunt elementum. Ut pellentesque lacus quam, sed lobortis lorem ullamcorper vitae. Mauris pretium ex sed tellus ultricies, vel sodales erat commodo. Donec non ante dui. Maecenas eu blandit tortor. Donec vestibulum, sem congue scelerisque imperdiet, mi arcu feugiat enim, non ultricies sem nisi in libero. Curabitur mattis, ante et euismod vestibulum, ante sapien rutrum magna, ac rutrum urna elit maximus dolor.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Maecenas finibus neque in erat semper, non suscipit turpis finibus. Pellentesque varius tortor id leo fermentum, sed luctus enim sagittis. Maecenas egestas ipsum vel ullamcorper cursus. Etiam eget diam non est varius pellentesque. Duis eu mattis eros. Praesent id convallis orci. Morbi vulputate enim vel velit accumsan consequat vel a sem. Ut malesuada porta risus, vel elementum velit consectetur in. Etiam ut feugiat urna. Cras sed dignissim enim, in vestibulum sapien. Sed luctus, tortor vel pulvinar rhoncus, elit justo rhoncus magna, ac congue arcu enim id diam. Maecenas efficitur facilisis magna, ut porttitor tortor sodales ut. Donec elit metus, faucibus non justo eget, elementum gravida metus. Nam elementum et lorem non sodales. Nullam non augue quam. Nullam ut sollicitudin massa.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Cras quis tellus efficitur, interdum diam quis, feugiat ante. Ut quis egestas lacus, id feugiat nulla. Fusce egestas tempus condimentum. Curabitur ut tortor lorem. Cras nec pharetra eros, at lobortis metus. Nam ac eros nisi. Quisque fermentum tincidunt lacus vel maximus. Cras gravida risus felis, vitae congue lectus facilisis imperdiet. Mauris pretium sollicitudin risus eu suscipit. Proin nec urna risus. In rhoncus urna eu condimentum ultricies. Sed et urna nibh.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Cras luctus fermentum vestibulum. Quisque interdum eu enim quis malesuada. Ut commodo congue purus a fermentum. Donec a odio id est lobortis pellentesque non eu mi. Cras tempus nunc felis, sed condimentum justo rhoncus ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sit amet euismod elit. Nunc volutpat massa lacus, quis condimentum urna tempus quis. Proin laoreet congue ornare. Aliquam lorem elit, cursus ac rhoncus sit amet, mattis sed magna.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Nulla sit amet sem volutpat velit suscipit volutpat. Nunc accumsan, nulla sed ornare aliquam, odio ipsum lobortis massa, sed pharetra lacus nisi at arcu. Sed non ex vel ante facilisis aliquet et id ex. Donec in sapien nec sem rutrum fringilla eu eu tellus. Fusce congue tincidunt tortor, at hendrerit urna volutpat sit amet. Aliquam erat volutpat. Vestibulum pretium lacus id luctus placerat. Aliquam neque mi, porta et diam convallis, finibus finibus orci. Proin sollicitudin tellus viverra volutpat ultrices. Nunc scelerisque blandit nulla ut condimentum.</p>', 1, 'uploads/posts/15247684421.png', NULL, '2018-04-26 12:47:22', '2018-04-26 12:47:22'),
(6, 'Laravel Advanced', 'laravel-advanced', '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus risus metus, eget ultrices urna molestie sit amet. Aliquam rutrum arcu enim, eget dignissim metus consectetur vitae. Nullam molestie ultricies risus, quis euismod nisi condimentum a. Donec mi lectus, commodo non est eu, fermentum dictum felis. Nam ornare dictum tortor quis hendrerit. Vivamus tristique molestie ipsum et gravida. Pellentesque dictum pellentesque bibendum. Pellentesque convallis tincidunt ipsum, at interdum turpis sagittis a. Sed vel porta tortor, sit amet mollis tellus. In convallis diam nec libero dictum aliquam.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Vestibulum gravida blandit enim sed tempor. Vivamus facilisis molestie ante, non rutrum lectus tincidunt eget. Integer erat lectus, lacinia quis urna sed, eleifend aliquam nulla. Quisque bibendum ante sit amet dolor condimentum sodales. Integer feugiat ipsum a est bibendum, sed pulvinar dui suscipit. Duis aliquet porttitor velit, a malesuada massa consequat tempus. Sed sagittis maximus pulvinar. Cras neque neque, mollis sit amet leo non, facilisis congue massa. Nunc aliquam, odio porttitor tempus tristique, purus leo placerat tellus, non pulvinar ligula diam in enim. Morbi et nisi sed nisi iaculis molestie ut ut sapien. Nulla sed ligula sed orci posuere fringilla.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Nullam tempor id ex sed pretium. Pellentesque quis tortor scelerisque ipsum malesuada sagittis. Pellentesque ut convallis turpis. Curabitur ullamcorper scelerisque massa, accumsan ultricies lectus cursus quis. Cras venenatis elementum tellus, a posuere ligula tempor vitae. Vivamus ultricies, arcu nec consequat facilisis, ligula justo luctus tortor, vel efficitur lacus lacus id eros. Nulla mollis ac massa in tempor.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Quisque eget varius ligula. Nulla sodales gravida justo, eget vehicula sem gravida ac. Sed ac dictum felis. Nam luctus luctus purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices euismod purus a imperdiet. Proin imperdiet mauris vel ante luctus luctus.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Ut leo tortor, laoreet sed diam eget, tincidunt aliquet leo. Sed gravida commodo lacus quis rhoncus. Pellentesque vel aliquet nulla, nec viverra tellus. Vestibulum ut felis id diam pellentesque feugiat. Cras efficitur odio eu nibh blandit dictum. In hac habitasse platea dictumst. In mauris velit, hendrerit ac sollicitudin eu, tristique in nibh.</p>', 1, 'uploads/posts/1525013184post2.jpg', NULL, '2018-04-29 08:46:24', '2018-04-29 08:46:24'),
(7, 'Laravel Made Easy', 'laravel-made-easy', '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus risus metus, eget ultrices urna molestie sit amet. Aliquam rutrum arcu enim, eget dignissim metus consectetur vitae. Nullam molestie ultricies risus, quis euismod nisi condimentum a. Donec mi lectus, commodo non est eu, fermentum dictum felis. Nam ornare dictum tortor quis hendrerit. Vivamus tristique molestie ipsum et gravida. Pellentesque dictum pellentesque bibendum. Pellentesque convallis tincidunt ipsum, at interdum turpis sagittis a. Sed vel porta tortor, sit amet mollis tellus. In convallis diam nec libero dictum aliquam.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Vestibulum gravida blandit enim sed tempor. Vivamus facilisis molestie ante, non rutrum lectus tincidunt eget. Integer erat lectus, lacinia quis urna sed, eleifend aliquam nulla. Quisque bibendum ante sit amet dolor condimentum sodales. Integer feugiat ipsum a est bibendum, sed pulvinar dui suscipit. Duis aliquet porttitor velit, a malesuada massa consequat tempus. Sed sagittis maximus pulvinar. Cras neque neque, mollis sit amet leo non, facilisis congue massa. Nunc aliquam, odio porttitor tempus tristique, purus leo placerat tellus, non pulvinar ligula diam in enim. Morbi et nisi sed nisi iaculis molestie ut ut sapien. Nulla sed ligula sed orci posuere fringilla.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Nullam tempor id ex sed pretium. Pellentesque quis tortor scelerisque ipsum malesuada sagittis. Pellentesque ut convallis turpis. Curabitur ullamcorper scelerisque massa, accumsan ultricies lectus cursus quis. Cras venenatis elementum tellus, a posuere ligula tempor vitae. Vivamus ultricies, arcu nec consequat facilisis, ligula justo luctus tortor, vel efficitur lacus lacus id eros. Nulla mollis ac massa in tempor.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Quisque eget varius ligula. Nulla sodales gravida justo, eget vehicula sem gravida ac. Sed ac dictum felis. Nam luctus luctus purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices euismod purus a imperdiet. Proin imperdiet mauris vel ante luctus luctus.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Ut leo tortor, laoreet sed diam eget, tincidunt aliquet leo. Sed gravida commodo lacus quis rhoncus. Pellentesque vel aliquet nulla, nec viverra tellus. Vestibulum ut felis id diam pellentesque feugiat. Cras efficitur odio eu nibh blandit dictum. In hac habitasse platea dictumst. In mauris velit, hendrerit ac sollicitudin eu, tristique in nibh.</p>', 1, 'uploads/posts/15250132556.jpg', NULL, '2018-04-29 08:47:35', '2018-04-29 08:47:35'),
(8, 'Website with Wordpress', 'website-with-wordpress', '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus risus metus, eget ultrices urna molestie sit amet. Aliquam rutrum arcu enim, eget dignissim metus consectetur vitae. Nullam molestie ultricies risus, quis euismod nisi condimentum a. Donec mi lectus, commodo non est eu, fermentum dictum felis. Nam ornare dictum tortor quis hendrerit. Vivamus tristique molestie ipsum et gravida. Pellentesque dictum pellentesque bibendum. Pellentesque convallis tincidunt ipsum, at interdum turpis sagittis a. Sed vel porta tortor, sit amet mollis tellus. In convallis diam nec libero dictum aliquam.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Vestibulum gravida blandit enim sed tempor. Vivamus facilisis molestie ante, non rutrum lectus tincidunt eget. Integer erat lectus, lacinia quis urna sed, eleifend aliquam nulla. Quisque bibendum ante sit amet dolor condimentum sodales. Integer feugiat ipsum a est bibendum, sed pulvinar dui suscipit. Duis aliquet porttitor velit, a malesuada massa consequat tempus. Sed sagittis maximus pulvinar. Cras neque neque, mollis sit amet leo non, facilisis congue massa. Nunc aliquam, odio porttitor tempus tristique, purus leo placerat tellus, non pulvinar ligula diam in enim. Morbi et nisi sed nisi iaculis molestie ut ut sapien. Nulla sed ligula sed orci posuere fringilla.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Nullam tempor id ex sed pretium. Pellentesque quis tortor scelerisque ipsum malesuada sagittis. Pellentesque ut convallis turpis. Curabitur ullamcorper scelerisque massa, accumsan ultricies lectus cursus quis. Cras venenatis elementum tellus, a posuere ligula tempor vitae. Vivamus ultricies, arcu nec consequat facilisis, ligula justo luctus tortor, vel efficitur lacus lacus id eros. Nulla mollis ac massa in tempor.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Quisque eget varius ligula. Nulla sodales gravida justo, eget vehicula sem gravida ac. Sed ac dictum felis. Nam luctus luctus purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices euismod purus a imperdiet. Proin imperdiet mauris vel ante luctus luctus.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Ut leo tortor, laoreet sed diam eget, tincidunt aliquet leo. Sed gravida commodo lacus quis rhoncus. Pellentesque vel aliquet nulla, nec viverra tellus. Vestibulum ut felis id diam pellentesque feugiat. Cras efficitur odio eu nibh blandit dictum. In hac habitasse platea dictumst. In mauris velit, hendrerit ac sollicitudin eu, tristique in nibh.</p>', 2, 'uploads/posts/15250133614.jpg', NULL, '2018-04-29 08:49:21', '2018-04-29 08:49:21'),
(9, 'Wordpress Blog', 'wordpress-blog', '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus risus metus, eget ultrices urna molestie sit amet. Aliquam rutrum arcu enim, eget dignissim metus consectetur vitae. Nullam molestie ultricies risus, quis euismod nisi condimentum a. Donec mi lectus, commodo non est eu, fermentum dictum felis. Nam ornare dictum tortor quis hendrerit. Vivamus tristique molestie ipsum et gravida. Pellentesque dictum pellentesque bibendum. Pellentesque convallis tincidunt ipsum, at interdum turpis sagittis a. Sed vel porta tortor, sit amet mollis tellus. In convallis diam nec libero dictum aliquam.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Vestibulum gravida blandit enim sed tempor. Vivamus facilisis molestie ante, non rutrum lectus tincidunt eget. Integer erat lectus, lacinia quis urna sed, eleifend aliquam nulla. Quisque bibendum ante sit amet dolor condimentum sodales. Integer feugiat ipsum a est bibendum, sed pulvinar dui suscipit. Duis aliquet porttitor velit, a malesuada massa consequat tempus. Sed sagittis maximus pulvinar. Cras neque neque, mollis sit amet leo non, facilisis congue massa. Nunc aliquam, odio porttitor tempus tristique, purus leo placerat tellus, non pulvinar ligula diam in enim. Morbi et nisi sed nisi iaculis molestie ut ut sapien. Nulla sed ligula sed orci posuere fringilla.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Nullam tempor id ex sed pretium. Pellentesque quis tortor scelerisque ipsum malesuada sagittis. Pellentesque ut convallis turpis. Curabitur ullamcorper scelerisque massa, accumsan ultricies lectus cursus quis. Cras venenatis elementum tellus, a posuere ligula tempor vitae. Vivamus ultricies, arcu nec consequat facilisis, ligula justo luctus tortor, vel efficitur lacus lacus id eros. Nulla mollis ac massa in tempor.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Quisque eget varius ligula. Nulla sodales gravida justo, eget vehicula sem gravida ac. Sed ac dictum felis. Nam luctus luctus purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices euismod purus a imperdiet. Proin imperdiet mauris vel ante luctus luctus.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Ut leo tortor, laoreet sed diam eget, tincidunt aliquet leo. Sed gravida commodo lacus quis rhoncus. Pellentesque vel aliquet nulla, nec viverra tellus. Vestibulum ut felis id diam pellentesque feugiat. Cras efficitur odio eu nibh blandit dictum. In hac habitasse platea dictumst. In mauris velit, hendrerit ac sollicitudin eu, tristique in nibh.</p>', 2, 'uploads/posts/15250133933.jpg', NULL, '2018-04-29 08:49:53', '2018-04-29 08:49:53'),
(10, 'Wordpress Articles', 'wordpress-articles', '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus risus metus, eget ultrices urna molestie sit amet. Aliquam rutrum arcu enim, eget dignissim metus consectetur vitae. Nullam molestie ultricies risus, quis euismod nisi condimentum a. Donec mi lectus, commodo non est eu, fermentum dictum felis. Nam ornare dictum tortor quis hendrerit. Vivamus tristique molestie ipsum et gravida. Pellentesque dictum pellentesque bibendum. Pellentesque convallis tincidunt ipsum, at interdum turpis sagittis a. Sed vel porta tortor, sit amet mollis tellus. In convallis diam nec libero dictum aliquam.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Vestibulum gravida blandit enim sed tempor. Vivamus facilisis molestie ante, non rutrum lectus tincidunt eget. Integer erat lectus, lacinia quis urna sed, eleifend aliquam nulla. Quisque bibendum ante sit amet dolor condimentum sodales. Integer feugiat ipsum a est bibendum, sed pulvinar dui suscipit. Duis aliquet porttitor velit, a malesuada massa consequat tempus. Sed sagittis maximus pulvinar. Cras neque neque, mollis sit amet leo non, facilisis congue massa. Nunc aliquam, odio porttitor tempus tristique, purus leo placerat tellus, non pulvinar ligula diam in enim. Morbi et nisi sed nisi iaculis molestie ut ut sapien. Nulla sed ligula sed orci posuere fringilla.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Nullam tempor id ex sed pretium. Pellentesque quis tortor scelerisque ipsum malesuada sagittis. Pellentesque ut convallis turpis. Curabitur ullamcorper scelerisque massa, accumsan ultricies lectus cursus quis. Cras venenatis elementum tellus, a posuere ligula tempor vitae. Vivamus ultricies, arcu nec consequat facilisis, ligula justo luctus tortor, vel efficitur lacus lacus id eros. Nulla mollis ac massa in tempor.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Quisque eget varius ligula. Nulla sodales gravida justo, eget vehicula sem gravida ac. Sed ac dictum felis. Nam luctus luctus purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices euismod purus a imperdiet. Proin imperdiet mauris vel ante luctus luctus.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Ut leo tortor, laoreet sed diam eget, tincidunt aliquet leo. Sed gravida commodo lacus quis rhoncus. Pellentesque vel aliquet nulla, nec viverra tellus. Vestibulum ut felis id diam pellentesque feugiat. Cras efficitur odio eu nibh blandit dictum. In hac habitasse platea dictumst. In mauris velit, hendrerit ac sollicitudin eu, tristique in nibh.</p>', 2, 'uploads/posts/15250134431.png', NULL, '2018-04-29 08:50:43', '2018-04-29 08:50:43'),
(11, 'JavaScript for All', 'javascript-for-all', '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus risus metus, eget ultrices urna molestie sit amet. Aliquam rutrum arcu enim, eget dignissim metus consectetur vitae. Nullam molestie ultricies risus, quis euismod nisi condimentum a. Donec mi lectus, commodo non est eu, fermentum dictum felis. Nam ornare dictum tortor quis hendrerit. Vivamus tristique molestie ipsum et gravida. Pellentesque dictum pellentesque bibendum. Pellentesque convallis tincidunt ipsum, at interdum turpis sagittis a. Sed vel porta tortor, sit amet mollis tellus. In convallis diam nec libero dictum aliquam.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Vestibulum gravida blandit enim sed tempor. Vivamus facilisis molestie ante, non rutrum lectus tincidunt eget. Integer erat lectus, lacinia quis urna sed, eleifend aliquam nulla. Quisque bibendum ante sit amet dolor condimentum sodales. Integer feugiat ipsum a est bibendum, sed pulvinar dui suscipit. Duis aliquet porttitor velit, a malesuada massa consequat tempus. Sed sagittis maximus pulvinar. Cras neque neque, mollis sit amet leo non, facilisis congue massa. Nunc aliquam, odio porttitor tempus tristique, purus leo placerat tellus, non pulvinar ligula diam in enim. Morbi et nisi sed nisi iaculis molestie ut ut sapien. Nulla sed ligula sed orci posuere fringilla.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Nullam tempor id ex sed pretium. Pellentesque quis tortor scelerisque ipsum malesuada sagittis. Pellentesque ut convallis turpis. Curabitur ullamcorper scelerisque massa, accumsan ultricies lectus cursus quis. Cras venenatis elementum tellus, a posuere ligula tempor vitae. Vivamus ultricies, arcu nec consequat facilisis, ligula justo luctus tortor, vel efficitur lacus lacus id eros. Nulla mollis ac massa in tempor.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Quisque eget varius ligula. Nulla sodales gravida justo, eget vehicula sem gravida ac. Sed ac dictum felis. Nam luctus luctus purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices euismod purus a imperdiet. Proin imperdiet mauris vel ante luctus luctus.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Ut leo tortor, laoreet sed diam eget, tincidunt aliquet leo. Sed gravida commodo lacus quis rhoncus. Pellentesque vel aliquet nulla, nec viverra tellus. Vestibulum ut felis id diam pellentesque feugiat. Cras efficitur odio eu nibh blandit dictum. In hac habitasse platea dictumst. In mauris velit, hendrerit ac sollicitudin eu, tristique in nibh.</p>', 4, 'uploads/posts/1525014540photo-elements2.jpg', NULL, '2018-04-29 09:09:00', '2018-04-29 09:09:00'),
(12, 'Must JavaScript', 'must-javascript', '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus risus metus, eget ultrices urna molestie sit amet. Aliquam rutrum arcu enim, eget dignissim metus consectetur vitae. Nullam molestie ultricies risus, quis euismod nisi condimentum a. Donec mi lectus, commodo non est eu, fermentum dictum felis. Nam ornare dictum tortor quis hendrerit. Vivamus tristique molestie ipsum et gravida. Pellentesque dictum pellentesque bibendum. Pellentesque convallis tincidunt ipsum, at interdum turpis sagittis a. Sed vel porta tortor, sit amet mollis tellus. In convallis diam nec libero dictum aliquam.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Vestibulum gravida blandit enim sed tempor. Vivamus facilisis molestie ante, non rutrum lectus tincidunt eget. Integer erat lectus, lacinia quis urna sed, eleifend aliquam nulla. Quisque bibendum ante sit amet dolor condimentum sodales. Integer feugiat ipsum a est bibendum, sed pulvinar dui suscipit. Duis aliquet porttitor velit, a malesuada massa consequat tempus. Sed sagittis maximus pulvinar. Cras neque neque, mollis sit amet leo non, facilisis congue massa. Nunc aliquam, odio porttitor tempus tristique, purus leo placerat tellus, non pulvinar ligula diam in enim. Morbi et nisi sed nisi iaculis molestie ut ut sapien. Nulla sed ligula sed orci posuere fringilla.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Nullam tempor id ex sed pretium. Pellentesque quis tortor scelerisque ipsum malesuada sagittis. Pellentesque ut convallis turpis. Curabitur ullamcorper scelerisque massa, accumsan ultricies lectus cursus quis. Cras venenatis elementum tellus, a posuere ligula tempor vitae. Vivamus ultricies, arcu nec consequat facilisis, ligula justo luctus tortor, vel efficitur lacus lacus id eros. Nulla mollis ac massa in tempor.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Quisque eget varius ligula. Nulla sodales gravida justo, eget vehicula sem gravida ac. Sed ac dictum felis. Nam luctus luctus purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices euismod purus a imperdiet. Proin imperdiet mauris vel ante luctus luctus.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Ut leo tortor, laoreet sed diam eget, tincidunt aliquet leo. Sed gravida commodo lacus quis rhoncus. Pellentesque vel aliquet nulla, nec viverra tellus. Vestibulum ut felis id diam pellentesque feugiat. Cras efficitur odio eu nibh blandit dictum. In hac habitasse platea dictumst. In mauris velit, hendrerit ac sollicitudin eu, tristique in nibh.</p>', 4, 'uploads/posts/15250145792.png', NULL, '2018-04-29 09:09:39', '2018-04-29 09:09:39'),
(13, 'Hard Way JavaScript', 'hard-way-javascript', '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus risus metus, eget ultrices urna molestie sit amet. Aliquam rutrum arcu enim, eget dignissim metus consectetur vitae. Nullam molestie ultricies risus, quis euismod nisi condimentum a. Donec mi lectus, commodo non est eu, fermentum dictum felis. Nam ornare dictum tortor quis hendrerit. Vivamus tristique molestie ipsum et gravida. Pellentesque dictum pellentesque bibendum. Pellentesque convallis tincidunt ipsum, at interdum turpis sagittis a. Sed vel porta tortor, sit amet mollis tellus. In convallis diam nec libero dictum aliquam.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Vestibulum gravida blandit enim sed tempor. Vivamus facilisis molestie ante, non rutrum lectus tincidunt eget. Integer erat lectus, lacinia quis urna sed, eleifend aliquam nulla. Quisque bibendum ante sit amet dolor condimentum sodales. Integer feugiat ipsum a est bibendum, sed pulvinar dui suscipit. Duis aliquet porttitor velit, a malesuada massa consequat tempus. Sed sagittis maximus pulvinar. Cras neque neque, mollis sit amet leo non, facilisis congue massa. Nunc aliquam, odio porttitor tempus tristique, purus leo placerat tellus, non pulvinar ligula diam in enim. Morbi et nisi sed nisi iaculis molestie ut ut sapien. Nulla sed ligula sed orci posuere fringilla.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Nullam tempor id ex sed pretium. Pellentesque quis tortor scelerisque ipsum malesuada sagittis. Pellentesque ut convallis turpis. Curabitur ullamcorper scelerisque massa, accumsan ultricies lectus cursus quis. Cras venenatis elementum tellus, a posuere ligula tempor vitae. Vivamus ultricies, arcu nec consequat facilisis, ligula justo luctus tortor, vel efficitur lacus lacus id eros. Nulla mollis ac massa in tempor.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Quisque eget varius ligula. Nulla sodales gravida justo, eget vehicula sem gravida ac. Sed ac dictum felis. Nam luctus luctus purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices euismod purus a imperdiet. Proin imperdiet mauris vel ante luctus luctus.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Ut leo tortor, laoreet sed diam eget, tincidunt aliquet leo. Sed gravida commodo lacus quis rhoncus. Pellentesque vel aliquet nulla, nec viverra tellus. Vestibulum ut felis id diam pellentesque feugiat. Cras efficitur odio eu nibh blandit dictum. In hac habitasse platea dictumst. In mauris velit, hendrerit ac sollicitudin eu, tristique in nibh.</p>', 4, 'uploads/posts/15250146201.png', NULL, '2018-04-29 09:10:20', '2018-04-29 09:10:20'),
(14, 'Wordpress Advance', 'wordpress-advance', 'dfsdfdfsdfsdfsdfx', 2, 'uploads/posts/15298397234.png', NULL, '2018-06-24 05:28:43', '2018-06-24 05:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 3, 1, NULL, NULL),
(5, 4, 1, NULL, NULL),
(6, 5, 1, NULL, NULL),
(7, 5, 2, NULL, NULL),
(8, 6, 1, NULL, NULL),
(9, 6, 2, NULL, NULL),
(10, 7, 1, NULL, NULL),
(11, 7, 2, NULL, NULL),
(12, 8, 1, NULL, NULL),
(13, 9, 1, NULL, NULL),
(14, 10, 1, NULL, NULL),
(15, 11, 1, NULL, NULL),
(16, 12, 1, NULL, NULL),
(17, 13, 1, NULL, NULL),
(18, 14, 1, NULL, NULL);

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `contact_number`, `contact_email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Article\'s Blog', '+88 0191 433 7606', 'murad.infos@gmail.com', 'Dhaka-1361,Bangladesh', '2018-04-26 04:57:48', '2018-04-26 05:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', '2018-04-26 03:34:21', '2018-04-26 03:34:21'),
(2, 'Laravel', '2018-04-26 11:29:03', '2018-04-26 11:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(10) UNSIGNED NOT NULL,
  `todo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `todo`, `completed`, `created_at`, `updated_at`) VALUES
(1, 'Nihil non et quod beatae hic nesciunt sed consequatur.', 0, '2018-04-24 10:45:29', '2018-04-24 10:45:29'),
(2, 'Amet delectus atque illo aut voluptas ex consequatur nobis aut recusandae facere.', 0, '2018-04-24 10:45:29', '2018-04-24 10:45:29'),
(3, 'Tempore pariatur illo sint voluptatem itaque animi aliquid amet a.', 0, '2018-04-24 10:45:29', '2018-04-24 10:45:29'),
(4, 'Non eveniet et occaecati id modi id cupiditate debitis dicta id omnis nemo consequatur.', 0, '2018-04-24 10:45:29', '2018-04-24 10:45:29'),
(5, 'Voluptas quo sequi autem sapiente et dolorem.', 0, '2018-04-24 10:45:29', '2018-04-24 10:45:29'),
(6, 'Sit itaque alias sit error autem incidunt blanditiis voluptas cum beatae qui ad ea recusandae.', 0, '2018-04-24 10:45:29', '2018-04-24 10:45:29'),
(7, 'Animi ad rerum cum cumque sunt voluptas qui id perspiciatis asperiores ad vero dolor architecto.', 0, '2018-04-24 10:45:29', '2018-04-24 10:45:29'),
(8, 'Vitae quam saepe aperiam quia esse quasi nostrum ut.', 0, '2018-04-24 10:45:29', '2018-04-24 10:45:29'),
(9, 'Qui sit ratione consequatur perspiciatis voluptatem facere accusamus blanditiis in assumenda voluptatem nihil.', 0, '2018-04-24 10:45:29', '2018-04-24 10:45:29'),
(10, 'Odio quae quia qui sit veniam nobis.', 0, '2018-04-24 10:45:29', '2018-04-24 10:45:29');

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
(1, 'Murad Hasan', 'mhkhan.me@gmail.com', 1, '$2y$10$hY.ZBA.CKNs1UQ3W0TmJ0u3cwwcK5UnWotv/hts3yLrZ4xU.Mqude', 'hLdwbpI0IyEu0RANjEc523JsHysFTOrDqTnacht8H7NxLbgdIRcQtxLkoybr', '2018-04-24 10:45:28', '2018-04-24 10:45:28'),
(2, 'Mamun', 'mamun@gmail.com', 0, '$2y$10$F8B8MbqUQ84i7rULN10hJ.AUqyuEBWU8lVoI5ACgoRZYVWKUr5Zvq', 'dj3Zp3rvfnzw4aBHc32G260UiOjSEj9dEqQLWAgdt1ZsjX0QM40e44Xs9K2z', '2018-04-24 10:46:37', '2018-04-24 10:46:37'),
(3, 'Jisan Haydar', 'jisan@gmail.com', 0, '$2y$10$Wp26PNBSjmgOJOg2hmCGueipoTn4UzKvK8UcRU6dwlKxYH8P.wze6', 'sHOPWbfWhaizE3nttl54sVlLbJTnwXERsIguZmHspjN9uTGUGYFcl0uaDGRK', '2018-04-24 11:25:11', '2018-04-25 09:50:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
