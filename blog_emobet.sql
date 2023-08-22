-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 11:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_emobet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Uncategorized', 'recusandae-qui-corrupti-eaque', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(2, 'soluta', 'fugiat-odio-molestias-aspernatur-eum', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(3, 'qui', 'cumque-delectus-enim-eius-eum', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(4, 'sit', 'exercitationem-omnis-ipsa-quidem', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(5, 'odio', 'consequatur-totam-dolorem-quia-dicta-aperiam', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(6, 'occaecati', 'ex-praesentium-et-exercitationem-ut-aperiam-consequatur-id-sequi', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(7, 'molestias', 'quas-corrupti-nostrum-aut-totam-magnam-dolore', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(8, 'fugit', 'cum-excepturi-sint-numquam-eveniet-tempora-itaque', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(9, 'voluptate', 'id-neque-officiis-repudiandae-odit-veniam', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(10, 'aliquam', 'a-deserunt-quos-aperiam-reprehenderit', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(11, 'rerum', 'neque-provident-et-quia', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(12, 'accusamus', 'et-porro-ullam-quam-modi-vel', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(13, 'non', 'tempora-alias-nesciunt-at-expedita-aut', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(14, 'adipisci', 'laudantium-sed-animi-molestias-debitis-dolore-recusandae-qui', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(15, 'neque', 'non-omnis-est-et-aut-temporibus-quia-reprehenderit', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(16, 'minus', 'facere-amet-totam-quod-autem-aut-sint-itaque', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(17, 'quibusdam', 'similique-quia-est-deleniti-iste-sequi-aut', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(18, 'quasi', 'iure-qui-ratione-quod-non-voluptatem-accusantium-aut', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(19, 'totam', 'quia-voluptatem-ut-dolorum-minus-fugit-sed-ut', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(20, 'quo', 'qui-in-nulla-quisquam-non-non-quae-voluptate', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(21, 'earum', 'officia-sed-et-eveniet', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(22, 'quo', 'ut-sit-velit-harum-non-qui-vitae-iste', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(23, 'consequuntur', 'quod-molestias-quae-reiciendis-et-distinctio-maiores-et', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(24, 'sunt', 'quasi-autem-et-ad-et-rem', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(25, 'est', 'deserunt-voluptatum-aut-et-omnis-itaque-distinctio', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(26, 'facere', 'qui-id-velit-rerum-fugiat-in-similique', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(27, 'velit', 'esse-id-nostrum-sint-itaque', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(28, 'quos', 'hic-rem-provident-similique-id-totam-vitae-error', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(29, 'autem', 'voluptatem-qui-ut-adipisci-voluptas-quia-facere-porro-doloremque', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(30, 'odio', 'officiis-et-labore-tempora-occaecati-maiores-velit-reprehenderit', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(31, 'et', 'aut-laudantium-aut-consequatur-quo', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(32, 'vitae', 'recusandae-a-labore-quo', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(33, 'ipsa', 'soluta-cumque-itaque-sed', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(34, 'aut', 'libero-sed-consequatur-et-vero-minus-quidem', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(35, 'ea', 'expedita-rerum-ducimus-reiciendis-quo', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(36, 'adipisci', 'quaerat-laboriosam-cumque-vitae-beatae-ut-ut-magnam', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(37, 'iusto', 'qui-sit-culpa-corrupti-rerum-quasi-doloremque-ea', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(38, 'expedita', 'consequatur-delectus-fugiat-modi-quaerat-rerum-et', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(39, 'molestiae', 'sed-non-minus-quaerat-est-vel-dicta', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(40, 'quo', 'ut-dignissimos-natus-voluptate-qui', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(41, 'error', 'aut-cupiditate-repellat-sunt-molestiae-incidunt-itaque-consequatur', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(42, 'provident', 'autem-quia-sapiente-eaque-atque', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(43, 'et', 'vitae-aliquid-ducimus-eos-consequatur-accusantium-repellendus', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(44, 'incidunt', 'eum-quo-sit-deserunt-qui-ad-placeat-consequatur', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(45, 'asperiores', 'maiores-ut-distinctio-optio', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(46, 'ut', 'reprehenderit-nemo-est-id-ea-maxime', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(47, 'voluptatem', 'rem-autem-consequatur-nisi-aliquid', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(48, 'doloremque', 'cupiditate-architecto-nulla-et-rerum-et-aspernatur-dicta-reiciendis', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(49, 'cum', 'ut-accusamus-id-exercitationem-nemo', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(50, 'et', 'est-rerum-molestiae-odit-quasi-reiciendis-rem-ratione', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(51, 'consequatur', 'explicabo-enim-atque-et-distinctio-et-recusandae-quos-sint', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(52, 'sit', 'omnis-pariatur-ut-nemo-dignissimos-aperiam-quaerat-corrupti-et', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(53, 'dolor', 'reiciendis-pariatur-ipsum-laudantium-dolorem-vero-perferendis', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(54, 'hic', 'magni-voluptatem-ut-sapiente-nostrum-iusto-ut', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(55, 'est', 'dolore-perferendis-voluptates-vero-dolores-sit-aut', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(56, 'deserunt', 'corporis-enim-aut-atque-quia-nam-unde-et', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(57, 'et', 'illum-recusandae-qui-quia-magnam-quis-sed', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(58, 'eum', 'ea-quos-ut-sunt-sit-ut-laudantium', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(59, 'beatae', 'iusto-maxime-tempora-omnis-cum-perspiciatis', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(60, 'dolores', 'harum-quod-non-aut-a', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(61, 'vero', 'sunt-error-nostrum-qui-tempora-deserunt-qui-dolor', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(62, 'quod', 'qui-atque-hic-sit-fugit-eius-et', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(63, 'quia', 'possimus-ut-cupiditate-voluptate-illo-consequatur', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(64, 'reiciendis', 'nam-eligendi-porro-asperiores-ipsa-eligendi-quis-cumque-iusto', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(65, 'dolores', 'veniam-error-sapiente-necessitatibus-officia-quae', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(66, 'qui', 'voluptate-qui-impedit-consequatur-quia-possimus', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(67, 'iure', 'tempore-quam-voluptatibus-nihil-ad', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(68, 'dolore', 'quibusdam-iure-rerum-ea-iusto-commodi-incidunt', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(69, 'dolorem', 'et-quaerat-odit-aut', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(70, 'deleniti', 'sunt-natus-voluptatibus-quisquam-eveniet-labore-ipsam', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(71, 'incidunt', 'voluptatibus-unde-dolor-vitae-sint-dolores-aut-quo', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(72, 'libero', 'quia-reiciendis-excepturi-consequuntur', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(73, 'sint', 'doloribus-harum-doloribus-sunt-et-ducimus-aut-ut', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(74, 'sunt', 'aut-maxime-dolore-earum-tempora', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(75, 'facilis', 'ipsam-dolor-error-ducimus-et-dolor-expedita-perferendis-ex', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(76, 'est', 'corrupti-officia-maiores-qui-esse', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(77, 'atque', 'facere-consequatur-reprehenderit-ad-iste', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(78, 'rem', 'qui-cumque-et-officia-dicta-et-modi-aspernatur', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(79, 'dolore', 'ratione-qui-ea-eos', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(80, 'blanditiis', 'accusamus-ut-quasi-quia-consectetur', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(81, 'facilis', 'quos-omnis-optio-et-illum', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(82, 'fugit', 'magni-dicta-sed-voluptatem-necessitatibus-esse-et-vel', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(83, 'sit', 'repudiandae-ad-voluptatem-enim-totam-aut-quae-deleniti-quam', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(84, 'repellendus', 'ab-nulla-animi-ad-similique-exercitationem-necessitatibus-quibusdam', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(85, 'earum', 'facilis-atque-hic-deleniti-error-hic-sint-nostrum-odio', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(86, 'in', 'quisquam-tenetur-et-eveniet-eum-ducimus-accusantium-enim', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(87, 'beatae', 'quo-esse-nemo-vero-nemo', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(88, 'sint', 'atque-praesentium-nam-dicta-culpa-similique-consectetur', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(89, 'occaecati', 'sed-autem-consectetur-quis-repellendus-voluptatum-a-vitae', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(90, 'tenetur', 'deserunt-qui-et-enim-est', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(91, 'labore', 'ullam-magni-numquam-aut-eius-vel-eligendi-dolores', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(92, 'dolorem', 'distinctio-ipsa-hic-rerum-culpa', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(93, 'ad', 'corrupti-ratione-ad-velit-qui-cumque-et', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(94, 'iure', 'corporis-velit-exercitationem-aperiam-sunt-neque-et-eius', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(95, 'consectetur', 'repellendus-soluta-sed-qui-beatae-quia-consectetur', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(96, 'illo', 'eius-dolore-commodi-rerum-ut-molestiae-sapiente-voluptatem', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(97, 'esse', 'autem-corrupti-corrupti-a-mollitia-distinctio-repudiandae-molestiae', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(98, 'hic', 'non-necessitatibus-doloribus-sed-sunt', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(99, 'illum', 'quia-commodi-et-deleniti-vitae-quas-temporibus-voluptates-consequatur', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(100, 'quo', 'eum-odit-totam-a-minima', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(101, 'ut', 'rerum-consequuntur-ut-placeat-neque-culpa-expedita', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(102, 'et', 'molestias-rerum-earum-minima-fuga-in-perferendis-quia', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(103, 'odio', 'eveniet-ipsam-doloremque-aspernatur', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(104, 'aspernatur', 'distinctio-accusamus-veritatis-eaque-odio', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(105, 'sint', 'sapiente-deserunt-quia-ipsa-eaque-ipsa', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(106, 'voluptatum', 'eos-fuga-nihil-nulla-assumenda', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(107, 'quasi', 'qui-fugiat-voluptatem-sequi-alias-sed-quaerat-corporis', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(108, 'expedita', 'placeat-commodi-nihil-et-ut-et-cumque', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(109, 'nemo', 'quo-deserunt-aperiam-autem-consequuntur-impedit-eum-sit', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(110, 'asperiores', 'cumque-quia-natus-eum-nam-iusto-labore-aut', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(111, 'est', 'eius-consequatur-quis-aut-reprehenderit-voluptatum', '2023-08-20 02:55:49', '2023-08-20 02:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `the_comment` text NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `the_comment`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Similique qui fuga dolorum eligendi voluptatem consequatur totam.', 39, 70, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(2, 'Omnis iusto id cum soluta.', 46, 72, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(3, 'Consequatur ut omnis perspiciatis.', 44, 16, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(4, 'Quas sint aut rerum dolor vitae.', 55, 25, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(5, 'Dolor et quia beatae ipsum aliquam fugiat ut doloribus.', 24, 11, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(6, 'Aperiam tempora molestiae consequatur soluta sint.', 37, 83, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(7, 'Est doloremque at excepturi nisi impedit.', 15, 15, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(8, 'Minima culpa similique sed sunt magni magnam.', 48, 92, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(9, 'Quaerat enim et ut ut dolorem quod aliquam.', 49, 2, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(10, 'Quam inventore sapiente consequatur harum voluptas est.', 84, 7, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(11, 'Voluptatem id veritatis velit qui voluptatum sapiente repellendus.', 51, 68, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(12, 'Labore expedita provident sed dicta sed ducimus rerum.', 1, 111, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(13, 'In repellat architecto amet quod sint nam veniam.', 85, 53, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(14, 'Magni qui qui fugiat voluptas commodi culpa repudiandae.', 34, 54, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(15, 'Sapiente eos cumque dolor non ullam quia.', 38, 12, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(16, 'Iusto consequatur exercitationem autem beatae facere.', 36, 32, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(17, 'Sit sed aut tempore voluptas voluptatibus enim qui.', 74, 31, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(18, 'Voluptatem neque earum explicabo.', 29, 79, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(19, 'Qui repellendus sed vel quis.', 98, 3, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(20, 'Aut sunt non iusto.', 36, 45, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(21, 'Sapiente est similique ut veritatis.', 49, 97, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(22, 'Consequatur ut quam odit.', 55, 28, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(23, 'Eos dignissimos voluptatem nostrum labore.', 53, 3, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(24, 'Quia inventore aperiam fugiat.', 28, 65, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(25, 'Occaecati et est tenetur facere velit at.', 84, 65, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(26, 'Cumque dolorem qui cumque sapiente.', 96, 39, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(27, 'Et qui sint ipsum eveniet et et.', 59, 51, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(28, 'Soluta odit ipsum qui maiores.', 60, 67, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(29, 'Qui similique et voluptas blanditiis animi occaecati tempore ut.', 30, 30, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(30, 'Nihil neque repudiandae recusandae nisi quaerat laborum.', 6, 65, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(31, 'Atque rem necessitatibus delectus sunt nihil et alias.', 66, 96, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(32, 'Mollitia debitis error quis deserunt perferendis aperiam aut.', 66, 3, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(33, 'Alias architecto ratione sunt tempore corporis repellendus quasi.', 95, 50, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(34, 'Repellat ut minus quia est consequatur repellat vitae.', 98, 101, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(35, 'Recusandae voluptatibus dolores explicabo deserunt ut.', 29, 10, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(36, 'Saepe consectetur nobis ipsam et tempore doloribus voluptate.', 57, 57, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(37, 'Mollitia nobis quaerat et optio et et.', 20, 109, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(38, 'Cupiditate qui aspernatur consectetur eius.', 49, 15, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(39, 'Nemo qui nemo quis nostrum.', 71, 22, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(40, 'Debitis eum ut porro molestiae.', 90, 34, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(41, 'Cum et explicabo sed laborum aut.', 77, 12, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(42, 'Ipsum laboriosam non expedita debitis.', 75, 7, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(43, 'Quam aut voluptatum cupiditate molestiae non.', 33, 14, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(44, 'Officiis quis esse optio nam est qui.', 25, 73, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(45, 'Quibusdam et et aliquam exercitationem omnis ut velit.', 65, 90, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(46, 'Hic facilis aut adipisci unde harum.', 50, 100, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(47, 'Odit explicabo voluptatum dolorem sed laboriosam assumenda doloremque eos.', 81, 11, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(48, 'Illo ex dolores eius et.', 40, 60, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(49, 'Optio labore molestiae magni consequatur molestiae omnis consectetur.', 53, 76, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(50, 'Est similique quis at laboriosam iure.', 34, 41, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(51, 'Et necessitatibus totam soluta ut et velit et.', 77, 90, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(52, 'Enim libero deserunt accusamus aut dolores.', 49, 72, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(53, 'Porro vitae provident dolores in consequuntur exercitationem aut.', 73, 105, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(54, 'Quia aut quaerat voluptatem quasi quod.', 96, 98, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(55, 'Omnis non qui vero perferendis.', 44, 97, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(56, 'Minima ut temporibus vel molestiae voluptatem enim.', 99, 80, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(57, 'Sapiente optio et voluptatem.', 98, 46, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(58, 'Voluptas repellat tenetur nisi soluta iusto quisquam.', 25, 86, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(59, 'Tenetur provident ipsa deleniti nam provident ut ab.', 7, 33, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(60, 'Voluptatem laboriosam est omnis.', 33, 14, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(61, 'Unde accusamus tenetur at occaecati non.', 22, 19, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(62, 'Magnam quidem suscipit quisquam assumenda voluptas dolore.', 44, 82, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(63, 'Quas aliquid est qui vero ut accusamus similique.', 40, 2, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(64, 'Nostrum quasi magnam consequatur nesciunt.', 55, 11, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(65, 'Consequatur error laudantium iure sunt enim sed impedit.', 30, 50, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(66, 'Ipsam praesentium et id.', 33, 89, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(67, 'Sit et dolore molestiae corrupti qui et illo.', 29, 29, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(68, 'Ea esse natus nam.', 83, 47, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(69, 'Eos ratione explicabo aperiam nulla quidem sequi.', 100, 84, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(70, 'Rem molestiae magnam porro aut.', 63, 99, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(71, 'Impedit ut ea eaque ut reiciendis quidem est.', 25, 25, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(72, 'Reiciendis neque sapiente numquam.', 2, 59, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(73, 'Quia vitae porro aspernatur accusantium a animi qui.', 88, 33, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(74, 'Qui voluptas aliquam quia recusandae.', 94, 2, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(75, 'Et laboriosam ab dolorem sapiente.', 8, 3, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(76, 'Non ad nemo vitae asperiores in neque.', 38, 111, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(77, 'Ipsum deleniti et illum ut eveniet.', 66, 50, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(78, 'Eveniet nam nostrum odit delectus.', 66, 10, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(79, 'Ut architecto quia unde aspernatur.', 55, 9, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(80, 'Ex id eligendi qui debitis quibusdam soluta accusamus.', 14, 98, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(81, 'Omnis necessitatibus est aliquam.', 49, 63, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(82, 'In iste aut harum et rerum.', 61, 35, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(83, 'Quos id sunt quia.', 28, 88, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(84, 'Ea sed reiciendis incidunt facilis.', 87, 89, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(85, 'Esse quia placeat aut et velit.', 31, 27, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(86, 'Porro aut consequatur modi.', 55, 104, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(87, 'Ea harum sint quidem accusantium necessitatibus eaque.', 9, 2, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(88, 'Dolorem natus rerum dolores ab dicta.', 53, 71, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(89, 'Sint modi pariatur itaque doloremque.', 43, 100, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(90, 'Porro reiciendis fugit temporibus.', 53, 45, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(91, 'Eos nam rerum accusantium.', 19, 78, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(92, 'Culpa rem consequatur amet ipsam deleniti facere quibusdam ullam.', 74, 12, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(93, 'Aut aut ex culpa quam reiciendis labore libero.', 24, 8, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(94, 'Est velit et reprehenderit autem.', 46, 100, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(95, 'Reprehenderit provident ab quia ut.', 98, 15, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(96, 'Et consequatur veritatis et quia.', 93, 91, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(97, 'Sint unde veritatis amet aspernatur quis quia.', 7, 46, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(98, 'Adipisci accusantium non enim nihil libero exercitationem mollitia.', 90, 47, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(99, 'Nemo neque fugiat corporis modi mollitia dicta hic.', 7, 69, '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(100, 'Sit explicabo ut provident.', 45, 5, '2023-08-20 02:55:51', '2023-08-20 02:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `imageable_id` bigint(20) UNSIGNED NOT NULL,
  `imageable_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `extension`, `path`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(1, 'voluptas', 'jpg', '/uploads/images/2.jpg', 1, 'App\\Models\\User', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(2, 'eius', 'jpg', '/uploads/images/4.jpg', 2, 'App\\Models\\User', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(3, 'saepe', 'jpg', '/uploads/images/8.jpg', 3, 'App\\Models\\User', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(4, 'inventore', 'jpg', '/uploads/images/10.jpg', 4, 'App\\Models\\User', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(5, 'facere', 'jpg', '/uploads/images/7.jpg', 5, 'App\\Models\\User', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(6, 'dignissimos', 'jpg', '/uploads/images/7.jpg', 6, 'App\\Models\\User', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(7, 'ipsam', 'jpg', '/uploads/images/1.jpg', 7, 'App\\Models\\User', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(8, 'quo', 'jpg', '/uploads/images/1.jpg', 8, 'App\\Models\\User', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(9, 'impedit', 'jpg', '/uploads/images/2.jpg', 9, 'App\\Models\\User', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(10, 'soluta', 'jpg', '/uploads/images/6.jpg', 10, 'App\\Models\\User', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(11, 'ut', 'jpg', '/uploads/images/1.jpg', 1, 'App\\Models\\Post', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(12, 'iure', 'jpg', '/uploads/images/1.jpg', 2, 'App\\Models\\Post', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(13, 'eligendi', 'jpg', '/uploads/images/6.jpg', 3, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(14, 'excepturi', 'jpg', '/uploads/images/5.jpg', 4, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(15, 'cumque', 'jpg', '/uploads/images/8.jpg', 5, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(16, 'cumque', 'jpg', '/uploads/images/6.jpg', 6, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(17, 'deserunt', 'jpg', '/uploads/images/6.jpg', 7, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(18, 'tempora', 'jpg', '/uploads/images/8.jpg', 8, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(19, 'autem', 'jpg', '/uploads/images/1.jpg', 9, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(20, 'eos', 'jpg', '/uploads/images/2.jpg', 10, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(21, 'culpa', 'jpg', '/uploads/images/1.jpg', 11, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(22, 'vero', 'jpg', '/uploads/images/10.jpg', 12, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(23, 'ut', 'jpg', '/uploads/images/3.jpg', 13, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(24, 'cumque', 'jpg', '/uploads/images/6.jpg', 14, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(25, 'eius', 'jpg', '/uploads/images/9.jpg', 15, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(26, 'fugiat', 'jpg', '/uploads/images/6.jpg', 16, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(27, 'qui', 'jpg', '/uploads/images/4.jpg', 17, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(28, 'nostrum', 'jpg', '/uploads/images/10.jpg', 18, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(29, 'consequuntur', 'jpg', '/uploads/images/8.jpg', 19, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(30, 'voluptatem', 'jpg', '/uploads/images/3.jpg', 20, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(31, 'quis', 'jpg', '/uploads/images/6.jpg', 21, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(32, 'est', 'jpg', '/uploads/images/2.jpg', 22, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(33, 'omnis', 'jpg', '/uploads/images/10.jpg', 23, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(34, 'dolores', 'jpg', '/uploads/images/2.jpg', 24, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(35, 'sint', 'jpg', '/uploads/images/1.jpg', 25, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(36, 'dolor', 'jpg', '/uploads/images/7.jpg', 26, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(37, 'nisi', 'jpg', '/uploads/images/8.jpg', 27, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(38, 'tempore', 'jpg', '/uploads/images/4.jpg', 28, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(39, 'illum', 'jpg', '/uploads/images/3.jpg', 29, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(40, 'rerum', 'jpg', '/uploads/images/4.jpg', 30, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(41, 'omnis', 'jpg', '/uploads/images/9.jpg', 31, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(42, 'et', 'jpg', '/uploads/images/8.jpg', 32, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(43, 'hic', 'jpg', '/uploads/images/2.jpg', 33, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(44, 'assumenda', 'jpg', '/uploads/images/7.jpg', 34, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(45, 'reiciendis', 'jpg', '/uploads/images/3.jpg', 35, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(46, 'fugit', 'jpg', '/uploads/images/1.jpg', 36, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(47, 'facilis', 'jpg', '/uploads/images/5.jpg', 37, 'App\\Models\\Post', '2023-08-20 02:55:52', '2023-08-20 02:55:52'),
(48, 'ut', 'jpg', '/uploads/images/8.jpg', 38, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(49, 'saepe', 'jpg', '/uploads/images/9.jpg', 39, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(50, 'fugit', 'jpg', '/uploads/images/2.jpg', 40, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(51, 'inventore', 'jpg', '/uploads/images/6.jpg', 41, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(52, 'provident', 'jpg', '/uploads/images/10.jpg', 42, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(53, 'neque', 'jpg', '/uploads/images/7.jpg', 43, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(54, 'aut', 'jpg', '/uploads/images/2.jpg', 44, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(55, 'placeat', 'jpg', '/uploads/images/10.jpg', 45, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(56, 'fugiat', 'jpg', '/uploads/images/9.jpg', 46, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(57, 'natus', 'jpg', '/uploads/images/2.jpg', 47, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(58, 'et', 'jpg', '/uploads/images/8.jpg', 48, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(59, 'eum', 'jpg', '/uploads/images/6.jpg', 49, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(60, 'sed', 'jpg', '/uploads/images/8.jpg', 50, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(61, 'nulla', 'jpg', '/uploads/images/1.jpg', 51, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(62, 'aut', 'jpg', '/uploads/images/3.jpg', 52, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(63, 'impedit', 'jpg', '/uploads/images/1.jpg', 53, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(64, 'similique', 'jpg', '/uploads/images/8.jpg', 54, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(65, 'debitis', 'jpg', '/uploads/images/4.jpg', 55, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(66, 'sunt', 'jpg', '/uploads/images/2.jpg', 56, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(67, 'iste', 'jpg', '/uploads/images/10.jpg', 57, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(68, 'sit', 'jpg', '/uploads/images/1.jpg', 58, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(69, 'amet', 'jpg', '/uploads/images/8.jpg', 59, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(70, 'dolorem', 'jpg', '/uploads/images/5.jpg', 60, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(71, 'fugiat', 'jpg', '/uploads/images/8.jpg', 61, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(72, 'sit', 'jpg', '/uploads/images/2.jpg', 62, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(73, 'culpa', 'jpg', '/uploads/images/4.jpg', 63, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(74, 'voluptatem', 'jpg', '/uploads/images/7.jpg', 64, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(75, 'et', 'jpg', '/uploads/images/8.jpg', 65, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(76, 'totam', 'jpg', '/uploads/images/5.jpg', 66, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(77, 'omnis', 'jpg', '/uploads/images/7.jpg', 67, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(78, 'blanditiis', 'jpg', '/uploads/images/8.jpg', 68, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(79, 'fugit', 'jpg', '/uploads/images/1.jpg', 69, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(80, 'laborum', 'jpg', '/uploads/images/7.jpg', 70, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(81, 'sit', 'jpg', '/uploads/images/5.jpg', 71, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(82, 'non', 'jpg', '/uploads/images/10.jpg', 72, 'App\\Models\\Post', '2023-08-20 02:55:53', '2023-08-20 02:55:53'),
(83, 'qui', 'jpg', '/uploads/images/4.jpg', 73, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(84, 'suscipit', 'jpg', '/uploads/images/7.jpg', 74, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(85, 'itaque', 'jpg', '/uploads/images/7.jpg', 75, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(86, 'numquam', 'jpg', '/uploads/images/10.jpg', 76, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(87, 'et', 'jpg', '/uploads/images/3.jpg', 77, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(88, 'modi', 'jpg', '/uploads/images/3.jpg', 78, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(89, 'et', 'jpg', '/uploads/images/1.jpg', 79, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(90, 'omnis', 'jpg', '/uploads/images/1.jpg', 80, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(91, 'recusandae', 'jpg', '/uploads/images/4.jpg', 81, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(92, 'aut', 'jpg', '/uploads/images/9.jpg', 82, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(93, 'qui', 'jpg', '/uploads/images/4.jpg', 83, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(94, 'ipsa', 'jpg', '/uploads/images/2.jpg', 84, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(95, 'eos', 'jpg', '/uploads/images/9.jpg', 85, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(96, 'harum', 'jpg', '/uploads/images/3.jpg', 86, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(97, 'cumque', 'jpg', '/uploads/images/1.jpg', 87, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(98, 'cum', 'jpg', '/uploads/images/9.jpg', 88, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(99, 'facilis', 'jpg', '/uploads/images/6.jpg', 89, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(100, 'perspiciatis', 'jpg', '/uploads/images/10.jpg', 90, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(101, 'atque', 'jpg', '/uploads/images/2.jpg', 91, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(102, 'quia', 'jpg', '/uploads/images/6.jpg', 92, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(103, 'amet', 'jpg', '/uploads/images/3.jpg', 93, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(104, 'suscipit', 'jpg', '/uploads/images/4.jpg', 94, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(105, 'nam', 'jpg', '/uploads/images/7.jpg', 95, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(106, 'perferendis', 'jpg', '/uploads/images/1.jpg', 96, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(107, 'eos', 'jpg', '/uploads/images/2.jpg', 97, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(108, 'est', 'jpg', '/uploads/images/7.jpg', 98, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(109, 'vero', 'jpg', '/uploads/images/1.jpg', 99, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(110, 'dolorum', 'jpg', '/uploads/images/5.jpg', 100, 'App\\Models\\Post', '2023-08-20 02:55:54', '2023-08-20 02:55:54'),
(111, '1692679868.jpg', 'jpg', 'uploads/images\\1692679868.jpg', 101, 'App\\Models\\Post', '2023-08-21 22:51:08', '2023-08-21 22:51:08'),
(112, '1692694333.jpg', 'jpg', 'uploads/images\\1692694333.jpg', 102, 'App\\Models\\Post', '2023-08-22 02:52:13', '2023-08-22 02:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_02_05_104640_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_04_120928_create_categories_table', 1),
(7, '2023_02_05_111418_create_posts_table', 1),
(8, '2023_02_05_135716_create_tags_table', 1),
(9, '2023_02_05_140304_create_post_tag_table', 1),
(10, '2023_02_05_140821_create_comments_table', 1),
(11, '2023_02_05_151948_create_images_table', 1),
(12, '2023_02_14_152830_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `post_status` varchar(255) DEFAULT NULL,
  `post_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `excerpt`, `body`, `user_id`, `category_id`, `post_status`, `post_type`, `created_at`, `updated_at`) VALUES
(1, 'Qui maiores qui ea numquam quisquam et.', 'qui-et-similique-sit-harum', 'Nobis error dolor et qui aut.', 'Autem aliquid quia inventore facilis. Aliquam tenetur earum et aut eos consequatur. Aut laborum exercitationem reiciendis consequuntur cum et. At pariatur non non error.', 12, 12, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(2, 'Est voluptas quaerat sed beatae doloremque libero corporis.', 'non-ut-possimus-architecto-labore-qui-vel', 'Perferendis a animi quia ut.', 'Molestiae minima eos in amet. At minima dolores vero aut ratione. Modi sunt laudantium quia maxime nobis.', 13, 13, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(3, 'Fugiat quis incidunt rerum dignissimos nesciunt doloribus modi distinctio.', 'quis-distinctio-expedita-velit-cupiditate-sit-aperiam-est-ea', 'Nemo beatae enim sed.', 'Doloribus explicabo debitis nesciunt minus id ex. Alias corporis deleniti soluta vitae corporis omnis. Quaerat dolore repellendus molestiae illo. Dolor et consectetur voluptatibus perferendis et minus quam.', 14, 14, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(4, 'Fuga inventore sequi quisquam officiis dolor.', 'nam-consequatur-quo-maiores-vitae-voluptatem-harum', 'In nesciunt est ut sunt.', 'Voluptatem harum dicta repudiandae necessitatibus aut sed laborum. Unde voluptas id quos id quidem. Autem quia quis itaque fuga et molestias amet.', 15, 15, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(5, 'Et dolorem nam id ad perspiciatis et.', 'culpa-molestiae-error-magni-deleniti', 'Blanditiis corrupti inventore quisquam possimus.', 'Et minima consequatur velit sit est quam. Unde sed quisquam hic velit ipsum omnis dolorem voluptas. Omnis voluptatum quos in non. Harum minus exercitationem non dolorem.', 16, 16, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(6, 'Sunt rerum perferendis sint non.', 'dolorem-ut-ut-et-voluptas-quia-dolore', 'Eos aut aut numquam voluptatibus voluptate ut.', 'Veniam dolor nobis aperiam qui corrupti. Quod delectus aut incidunt sit est. Ut rem rem ad ullam.', 17, 17, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(7, 'Ratione porro tenetur aut suscipit deserunt sequi.', 'voluptates-enim-dolorem-sapiente-aut-vero', 'Provident laborum est est.', 'Excepturi corporis eveniet dignissimos qui vel. Perspiciatis in voluptatum amet facilis laudantium. Est sed nisi eos ipsum cupiditate ullam porro. Laboriosam omnis porro omnis ea aliquid dolorem praesentium.', 18, 18, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(8, 'Placeat nemo in qui nisi ullam soluta.', 'quisquam-nisi-nobis-mollitia-id-sit', 'Animi aut nesciunt eos animi autem nemo at.', 'Aut soluta sed eaque est. Qui quidem sunt consequuntur tenetur fuga eum. Vero qui eius in velit est hic. Doloremque ex dolorem sed velit et recusandae.', 19, 19, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(9, 'Recusandae eum est earum rerum occaecati.', 'omnis-non-illum-enim-soluta-doloribus-cupiditate-alias-odit', 'Tempora sequi commodi repudiandae est id et.', 'Aperiam fugit qui excepturi sed unde. Ipsam voluptas consectetur amet fuga laboriosam non odit. Culpa quam quaerat autem aut dolorem nobis quos architecto.', 20, 20, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(10, 'Qui voluptatem iste ipsa est explicabo eveniet.', 'qui-delectus-pariatur-magni-atque-ut-et-sit', 'Voluptatibus et repudiandae voluptatem et ut rerum voluptatibus.', 'Sequi voluptate et quis explicabo qui aut aut natus. Doloremque minima inventore et occaecati ipsa quam. Voluptas est quibusdam sint tempore quia.', 21, 21, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(11, 'Expedita quas ipsam et dolorem laboriosam aut quo.', 'ut-illum-quaerat-dolore-voluptate-magni-mollitia', 'Molestiae et eum aut iusto.', 'Dicta autem ab ab consequuntur sunt ut numquam laudantium. Sunt in et unde omnis qui ratione. Molestias ratione amet numquam et ratione sed.', 22, 22, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(12, 'Ut unde aspernatur inventore eligendi exercitationem laudantium.', 'omnis-dolorum-sunt-voluptatum-voluptatem-quo-labore', 'Iusto similique quidem quos et rerum voluptatem corrupti quasi.', 'Error aliquid magnam distinctio magni tempore eos. Rerum sed delectus sit. Nesciunt accusamus sed dolorem nihil qui repudiandae atque.', 23, 23, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(13, 'Libero praesentium sequi sint.', 'et-quibusdam-aut-dolor-sit-odit-exercitationem-expedita', 'Distinctio alias veritatis maiores incidunt fugit necessitatibus.', 'Culpa porro alias quibusdam non commodi. Accusantium vel dicta modi architecto omnis nostrum officia. Vero minima eligendi illo in omnis. Ex impedit cumque perspiciatis exercitationem ad voluptas ut.', 24, 24, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(14, 'Voluptatem sint id cum commodi illum quo sequi.', 'voluptatem-officia-dolore-et-id-fugiat', 'A consequatur sapiente saepe alias quo ut et.', 'Ut provident id blanditiis quia. Consequatur omnis voluptatem beatae. Molestiae quod et repellendus qui qui optio eos et.', 25, 25, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(15, 'Qui blanditiis possimus culpa tempora hic ullam.', 'veritatis-laudantium-corrupti-nostrum-minima-totam', 'Et totam voluptatem ut voluptate enim ab et.', 'Et voluptatibus nihil a fugit quae in aliquid. Placeat quod nemo doloribus dolor est. Et sapiente et fuga sunt maiores.', 26, 26, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(16, 'Eius dolorem dolorem optio eligendi.', 'dolor-facilis-nobis-commodi-minima', 'Nam pariatur aperiam velit numquam quis doloribus.', 'Amet fuga ut autem architecto. Non natus ullam aliquid possimus natus mollitia eum adipisci. Id ab reiciendis molestias.', 27, 27, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(17, 'Maiores suscipit consequuntur dignissimos aut ut commodi.', 'rerum-repellat-autem-voluptatem-reprehenderit-aut-at', 'Et itaque fuga distinctio quisquam quae.', 'Necessitatibus quia eum quis vel. Minima dicta consequatur rerum in non molestias et tempora. Et laboriosam at autem ipsum unde eum. Voluptas aut officia dolorum vitae.', 28, 28, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(18, 'Voluptate tempore eveniet omnis nobis a.', 'unde-laboriosam-ratione-voluptas-qui-exercitationem', 'Molestiae quibusdam illo beatae laboriosam distinctio perspiciatis.', 'Dolores sequi accusantium quae consequuntur facere fugit aut. Et occaecati et veniam sint.', 29, 29, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(19, 'Est aspernatur numquam fuga eaque totam sunt qui enim.', 'doloribus-delectus-nesciunt-et-quia-ducimus', 'Eveniet eum aut distinctio accusamus quidem repudiandae et alias.', 'Delectus occaecati quia ut eveniet tempora. Omnis nam velit distinctio est. Quos adipisci sint maiores consequatur impedit.', 30, 30, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(20, 'Corporis a est dignissimos occaecati.', 'ea-minus-sit-velit-accusantium', 'Maxime aut sed unde veniam quis tempora laboriosam.', 'Sit quod aut voluptates eaque. Et repellat numquam ut qui. Velit perspiciatis et est veniam molestiae enim in.', 31, 31, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(21, 'Perspiciatis impedit nostrum totam consequuntur laboriosam asperiores.', 'delectus-neque-vitae-magnam-libero-dolorem-fugit-veniam-corporis', 'Non maxime odit nihil eius quia eaque.', 'Doloremque voluptatum fugiat aliquam reiciendis voluptas non amet consequuntur. Autem autem ex quaerat sapiente ducimus. Dolorem aut expedita sint voluptatem ut animi deleniti. Aut ut aut voluptatem eum voluptatum veniam et et.', 32, 32, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(22, 'Ut inventore est velit velit temporibus et doloremque.', 'eius-modi-dicta-placeat-animi', 'Voluptatem eveniet vero nobis tempore molestias.', 'Expedita similique suscipit minima maxime corrupti sunt eum. Dolore iusto rerum ut ut corporis architecto officiis.', 33, 33, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(23, 'Quam pariatur officiis id quia.', 'ipsa-iusto-quae-maiores-ullam-veritatis-distinctio', 'In non rem voluptas dignissimos aut optio vel.', 'Inventore quisquam quasi saepe. Doloribus explicabo et dolorum rerum veniam dolores eos. Est laboriosam laudantium labore aut.', 34, 34, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(24, 'Quas ipsum molestiae sequi consequuntur labore ipsa.', 'sit-ea-sequi-enim-delectus-architecto-ut-consectetur-ducimus', 'Voluptatem voluptatem laudantium nemo laboriosam.', 'Qui quam molestiae distinctio velit aut. Officiis optio est qui cum. Et vero ea aut quaerat.', 35, 35, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(25, 'Aperiam error quaerat aspernatur inventore aut.', 'aut-recusandae-architecto-laboriosam-consectetur-aut-et-soluta-magnam', 'Non doloremque ipsa dolorem placeat numquam ut ducimus ratione.', 'Esse consequatur aperiam magni nihil. Et repellat autem in beatae expedita natus et qui. Nesciunt cumque occaecati et enim maxime. Beatae id magnam voluptatem expedita ratione consectetur.', 36, 36, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(26, 'Sint quae sequi et ipsa fugiat nihil qui.', 'omnis-consectetur-qui-quas-neque-maiores-eveniet', 'Et ad sunt reprehenderit nemo et.', 'Laudantium omnis debitis voluptas fugit. Rerum maiores nihil ad cumque ipsum voluptatem quisquam. Et est provident qui similique quod.', 37, 37, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(27, 'Odit sit expedita ea in.', 'similique-maxime-enim-et-nostrum-sed-qui', 'Vel error eligendi nostrum eveniet.', 'Eligendi nostrum ut et voluptatem esse. Qui aut et dolorem sit quisquam. Accusamus et fugit fugit fugiat sint.', 38, 38, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(28, 'Possimus sunt ut amet at rem aut rerum.', 'aspernatur-odio-architecto-explicabo-neque', 'Commodi illo dolores corrupti voluptatum exercitationem.', 'Et sequi commodi sint optio molestiae. Atque asperiores ut eligendi facere.', 39, 39, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(29, 'A officia cumque exercitationem doloribus iure tempora cumque.', 'aut-aperiam-esse-dolores-ut', 'Quia sunt corporis tempore ut.', 'Corrupti quasi exercitationem ipsa. Et a dolores aut delectus natus ut maxime. Numquam officiis in quibusdam aperiam et. Repellendus omnis fuga aut delectus impedit laboriosam quis assumenda.', 40, 40, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(30, 'Cum provident consequatur qui ut maiores eum.', 'et-beatae-quidem-asperiores-sed', 'Et quia quaerat deleniti id omnis qui.', 'Velit assumenda adipisci a qui. Facilis illo nihil voluptates praesentium neque impedit. Minima saepe sunt accusantium enim. Sunt id quis natus praesentium excepturi ut quia.', 41, 41, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(31, 'Veritatis voluptas ex commodi eum odio animi.', 'perspiciatis-totam-repellendus-architecto-neque-vel-nesciunt-et', 'Sapiente magni temporibus est sint et quia.', 'Inventore voluptatem perferendis voluptatem omnis quisquam. Nostrum dicta laudantium fugit error similique quia. In a sit quisquam deserunt est officiis. Veniam voluptatem officiis voluptatem impedit aut.', 42, 42, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(32, 'Eum odio ea et omnis aperiam.', 'optio-qui-et-perspiciatis-velit-natus-itaque-aut', 'Qui facilis accusantium hic nisi rem necessitatibus.', 'Aut inventore consequatur est quaerat laboriosam reiciendis. Ut dolore aliquam mollitia rem ducimus est sapiente. Consequatur numquam sunt velit necessitatibus consectetur sit unde est. Vero ipsum rem aliquid dolor.', 43, 43, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(33, 'Rerum consequatur sit aut ipsam.', 'iure-ratione-nam-velit-ex-et-eos', 'Id impedit iure eligendi perspiciatis.', 'Adipisci ut accusantium consectetur aut. Nulla repellendus mollitia ut quia. Velit aut deserunt et quaerat nostrum vel.', 44, 44, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(34, 'Deserunt perferendis dolores dicta modi officiis excepturi.', 'et-id-eaque-modi-totam-veniam-aspernatur', 'Sit recusandae eaque totam quia ea.', 'Dolores quo ipsum aut voluptate quo. Libero in ut voluptates rerum. Aperiam exercitationem illo aspernatur deleniti velit non.', 45, 45, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(35, 'Quia autem non eligendi eaque rem aliquid.', 'sed-tempore-tempore-incidunt-sint-ut-occaecati', 'Error est ut ducimus quo dolorum.', 'Et quas et vel aspernatur nulla. Eos error est vel dolor quod molestias expedita odio. Eveniet officiis eveniet neque praesentium voluptatem.', 46, 46, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(36, 'Qui qui veritatis ex.', 'ipsam-perferendis-perspiciatis-ut-ipsa-sint-reiciendis-ut-nemo', 'Facere iure repudiandae ut maxime possimus vitae.', 'Ipsam impedit quia vel id in. Sequi modi id beatae labore. Sint fugit excepturi quasi cupiditate et id magnam.', 47, 47, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(37, 'Tenetur aut aut et et eaque sint.', 'et-rerum-nobis-est-sapiente-facere', 'Fugiat dolores et sunt eos et.', 'Soluta sunt omnis explicabo. Illo provident qui ipsa ut voluptas. Non cumque nihil sed aut rerum.', 48, 48, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(38, 'Et autem sunt vitae sint.', 'quos-vitae-explicabo-occaecati-error-molestias-nemo', 'Provident sit aut blanditiis nobis sit eos.', 'Et consequatur est dolorum aut omnis. Non unde ut doloremque et ut. Minima cum sint voluptate aut minus qui eos. Vero occaecati enim culpa reiciendis autem.', 49, 49, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(39, 'Voluptatibus perspiciatis optio repellat debitis molestiae voluptatem.', 'aperiam-necessitatibus-quia-explicabo-et-magni', 'Exercitationem mollitia temporibus quo mollitia dolorum.', 'Ut consequatur sed fuga labore ut. Ad porro laudantium quo incidunt itaque aut. Illo sed quaerat asperiores dolorum odit quisquam ipsum.', 50, 50, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(40, 'Veritatis animi sit omnis aut assumenda dolor.', 'rerum-quo-impedit-rerum-corporis', 'Nam hic ut corrupti et consequatur at.', 'Sed consequatur omnis cum commodi sed perferendis. Ipsum blanditiis vero voluptatem aspernatur recusandae accusamus minus et. Qui cupiditate nesciunt optio mollitia consequatur ut et.', 51, 51, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(41, 'Quo et quisquam unde et animi dolores.', 'totam-dicta-iusto-quia-et-commodi', 'Dolores et illo consequatur nihil fuga.', 'Quia dicta tempore architecto voluptas repellat. Voluptas ut consequatur eveniet. Labore fugiat illo nostrum id sed. Adipisci voluptas quia et fugiat velit quaerat.', 52, 52, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(42, 'Maxime assumenda rerum pariatur harum id.', 'et-eveniet-minus-optio-in', 'Consequuntur dolor excepturi repellat in doloribus.', 'Ea sit corporis dolor est vel eligendi aliquam fugit. Accusantium facere culpa omnis consequatur. Sed ut sed sed quod quam.', 53, 53, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(43, 'Omnis recusandae quam rerum.', 'ea-qui-et-assumenda-dolores-sunt-occaecati-deserunt', 'Voluptatem et et ex ut.', 'Voluptatem velit deleniti perferendis quia. Mollitia molestiae quam nihil fugit laudantium voluptatem. Voluptatem reprehenderit quo sunt fuga voluptatem qui quam. Sint magni odit maxime numquam et unde omnis.', 54, 54, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(44, 'Dolorum corporis commodi quidem sed velit.', 'ipsa-voluptatum-voluptatum-consequatur-ratione-impedit-perspiciatis', 'In nesciunt quibusdam non.', 'Velit quam illum nostrum necessitatibus atque tenetur enim. Voluptatem dolorem corporis fuga. Tenetur id inventore impedit minima tempore rerum accusantium. Saepe commodi necessitatibus voluptates repellendus veniam voluptas necessitatibus.', 55, 55, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(45, 'Ducimus esse adipisci nisi fugiat quia.', 'blanditiis-aliquam-ut-est-quidem-culpa', 'Quas illo veritatis ut sit dicta.', 'Ut veniam placeat dolorum. Ipsa praesentium sint id inventore asperiores. Ratione omnis rerum ipsam rerum aut inventore adipisci.', 56, 56, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(46, 'Neque dolore iusto ullam ut.', 'asperiores-dolorem-dolorem-ipsam-fugiat', 'Blanditiis doloremque sunt culpa consectetur tenetur deleniti placeat.', 'Sit dolor aperiam qui enim possimus voluptatem. Enim qui repellendus eius est omnis explicabo. Aut deleniti aspernatur quos nisi. Eos praesentium aliquid est quaerat eos officiis ut.', 57, 57, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(47, 'Repellat ipsa et eum temporibus est quia.', 'ipsam-aliquam-officia-dolor-asperiores-totam-modi', 'Animi cumque quia voluptatibus mollitia.', 'Maiores occaecati blanditiis non perferendis eum repellendus et. Et quam quia beatae rerum. Culpa iusto laudantium dignissimos recusandae cupiditate. Facere autem occaecati quis illum non accusantium sunt.', 58, 58, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(48, 'Consequatur sint ad alias ea quasi aut dolorum.', 'earum-sunt-ducimus-consectetur-recusandae-enim-illo', 'Id eum aut dolorum nisi.', 'Et corporis possimus delectus velit. Et laboriosam ipsam at temporibus veritatis est itaque. Voluptatem rerum distinctio sunt error. Illo vel corporis consequatur.', 59, 59, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(49, 'Impedit sed voluptates corporis error maxime.', 'qui-quos-modi-et-ut-inventore', 'Repudiandae quas natus quo amet soluta accusamus labore.', 'Et provident hic ex. Numquam nostrum ad ut quia a quidem quia. Sit odit quia consequatur animi dolor. Esse distinctio expedita sed soluta voluptatum fuga.', 60, 60, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(50, 'Repellendus omnis quae aspernatur excepturi odio facere aut corrupti.', 'quas-quidem-exercitationem-iste-consequatur-dolor-velit-reiciendis', 'Velit incidunt perferendis provident magnam fuga sit.', 'Dolorum minima provident ratione voluptates. Nesciunt magni sit ex veritatis vel. Alias laboriosam autem dolorum qui. Possimus modi dolor nostrum quisquam.', 61, 61, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(51, 'Est ea nesciunt aut.', 'ipsum-architecto-voluptatum-tempore-aliquid-qui-eos-quia', 'Culpa voluptatem accusantium aut nesciunt illo blanditiis et.', 'Et perferendis fuga ratione commodi natus. Ut magnam quia rerum nostrum dolores impedit adipisci. Laboriosam suscipit quod quia necessitatibus animi ex. Provident atque aut quisquam similique commodi non.', 62, 62, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(52, 'Numquam architecto placeat sequi tempore.', 'nihil-sapiente-totam-est-id-vel-sapiente-ea-id', 'Blanditiis animi sed exercitationem sit officia qui fugit.', 'In aut dolores repellat reprehenderit. Quisquam eius pariatur voluptatem sapiente. Consequatur vel autem alias voluptatem quia aut sapiente incidunt.', 63, 63, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(53, 'Molestiae autem rerum suscipit consequatur fuga.', 'ab-in-minima-molestiae-laborum-quis-id-qui-facilis', 'Et molestiae enim unde.', 'Vero corrupti explicabo voluptate consequuntur eaque. Iste culpa placeat laboriosam perspiciatis a. Qui quaerat cupiditate soluta modi aut ullam.', 64, 64, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(54, 'Quos et voluptates ut et.', 'provident-eos-incidunt-earum-voluptatem-veritatis-error-accusantium', 'Qui distinctio recusandae ut dolorem nihil eveniet.', 'Magnam quia aut itaque sapiente. Accusamus et iste itaque libero amet esse dignissimos. Dolore illo dolorem qui voluptas aut. Consequatur odit magni quasi minus impedit ut laboriosam.', 65, 65, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(55, 'Quaerat sed debitis officiis quia illum ut vitae.', 'animi-explicabo-error-facere-et-enim-qui-saepe-minima', 'Eos et repudiandae possimus officiis labore perspiciatis quas ducimus.', 'Numquam culpa velit facere. Rerum aut totam aliquid consequatur officiis. Illo aliquam et temporibus voluptas. Cupiditate et voluptate incidunt aliquam. Similique recusandae quisquam aut saepe voluptatum.', 66, 66, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(56, 'Culpa ut doloribus et pariatur aliquam nam atque.', 'cupiditate-modi-laudantium-voluptate-consectetur-ut-et-sint', 'Aspernatur eaque provident ducimus id aperiam veniam itaque.', 'Nam fugiat necessitatibus esse pariatur alias excepturi. Reiciendis ea non autem saepe soluta officiis consequatur reprehenderit.', 67, 67, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(57, 'Quas adipisci ipsa odit voluptas veritatis illum repudiandae.', 'qui-et-veritatis-ut-in-nobis-natus-commodi-quo', 'Officiis voluptas excepturi voluptates accusantium rerum repudiandae enim.', 'Voluptas itaque nisi commodi. Qui qui ex quibusdam quia et. Odit deleniti sit nihil omnis.', 68, 68, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(58, 'Voluptates labore pariatur aperiam.', 'totam-voluptas-nisi-enim-cupiditate-culpa-ab', 'Voluptatem ratione quis rerum distinctio veniam quisquam non.', 'Atque amet nostrum quae reprehenderit. Voluptates ipsam totam perferendis qui facere et. Quo neque quis aperiam corrupti. Eveniet quasi modi aut magni.', 69, 69, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(59, 'Deleniti enim voluptatibus dolores.', 'aperiam-repudiandae-a-libero-dicta', 'Est consequatur perspiciatis aliquam temporibus.', 'Adipisci dolorem est qui rerum vitae. Officiis commodi impedit quis iusto. Autem soluta et eligendi ut est quaerat. Quam molestias corporis omnis sunt necessitatibus vel.', 70, 70, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(60, 'Fuga placeat autem laboriosam perspiciatis eum.', 'qui-deserunt-doloribus-nobis-ea-optio-eligendi-accusantium', 'Sapiente non vel necessitatibus illo.', 'Sit dolores excepturi dolor sed. Minus quo est voluptatem consequatur omnis et. Fuga quisquam perferendis quidem laborum in error impedit.', 71, 71, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(61, 'Incidunt eius voluptatibus voluptas repellat voluptas minus.', 'qui-accusamus-dignissimos-doloribus-repudiandae-corporis-ut', 'Quo corrupti aut eveniet rem.', 'Debitis a atque tenetur nam ipsam. Illum consequatur ipsam et voluptatum tempora ut. Quia velit sint rem velit. Culpa nemo ab nulla.', 72, 72, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(62, 'Fugiat rerum mollitia alias reprehenderit.', 'libero-quis-ea-qui-vero', 'Pariatur omnis voluptas sint omnis iusto.', 'Est maxime inventore sint quisquam debitis autem. Ut illo quas sed. Tenetur reiciendis minus blanditiis dolores corrupti assumenda quos.', 73, 73, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(63, 'Et id accusamus provident distinctio omnis est nesciunt.', 'provident-saepe-necessitatibus-rem-nesciunt-ea', 'Corrupti rerum beatae vitae ipsa tenetur perferendis qui.', 'Alias et nesciunt aliquid itaque eum. Ipsum est esse in similique facere. Vitae tempora nulla qui sequi ullam aut.', 74, 74, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(64, 'Est facilis maxime eligendi et.', 'magnam-itaque-accusantium-blanditiis-neque-exercitationem-corrupti-illo', 'Enim ea beatae et voluptas dicta dolor.', 'Facilis minima quia rerum officiis voluptatem est. Quis quis rerum assumenda sint aut. Ab voluptate similique est dicta. Aliquid dolores in perferendis ipsam perspiciatis necessitatibus.', 75, 75, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(65, 'Aspernatur voluptatem nobis voluptas totam.', 'magnam-itaque-nisi-cum-commodi-voluptatem', 'Sapiente quod nostrum rem explicabo.', 'Suscipit necessitatibus sapiente adipisci voluptatem. Ab provident amet minus et eum itaque dolorum. Dolorem amet recusandae corrupti velit.', 76, 76, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(66, 'Similique voluptates sit optio error voluptas quo ut in.', 'deserunt-nesciunt-quam-porro-rerum-nihil', 'Ratione ducimus animi sequi.', 'Voluptate explicabo voluptas ut saepe consequatur. Ipsum molestiae iste facilis ut ipsum odio. Placeat maiores inventore aperiam quam fugit.', 77, 77, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(67, 'Saepe et ut et molestiae veritatis dolor explicabo aliquid.', 'eos-voluptatum-repudiandae-voluptatem-itaque-quo-sint-eos', 'Rerum nesciunt maxime laudantium deleniti.', 'Alias voluptates qui expedita aut. Error explicabo dolores atque tempore molestiae incidunt et. Quo dolores sint praesentium id et.', 78, 78, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(68, 'Fuga blanditiis vel eos autem et autem aliquam.', 'officia-sit-ea-eligendi-quas-voluptatibus-ullam', 'Dolorum distinctio deserunt est distinctio eum id maxime.', 'Perferendis autem dolorem id eius sed eius. Voluptatem ducimus rerum odit natus magnam similique. Et quos labore repudiandae porro ea qui id. Ex quo distinctio enim adipisci id ea.', 79, 79, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(69, 'Inventore cupiditate fugit iste omnis delectus voluptas praesentium.', 'dolore-impedit-voluptatem-magni-non-sint-sint', 'Non molestiae tenetur omnis culpa odit assumenda minus.', 'Reiciendis excepturi adipisci voluptatem animi dolorum est quam. Rerum quae autem voluptates rerum. Delectus unde ut quis rerum.', 80, 80, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(70, 'Aut dolorem officiis saepe quidem est.', 'aut-ex-dignissimos-veniam-et-molestiae-illum-quis', 'Consequatur minus enim natus dolor ea voluptate quidem excepturi.', 'Quaerat quas perferendis ut amet similique quam. Autem atque rem dolorem vel voluptatem praesentium eum consequatur. Vero porro consequatur sunt unde. Voluptas delectus harum ut eligendi cupiditate sunt optio.', 81, 81, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(71, 'Dolores esse nam a.', 'quo-voluptate-occaecati-dolorem-itaque-quasi-dolores', 'Animi aut deserunt eveniet possimus.', 'Aliquam saepe corrupti omnis facere. Nobis eligendi omnis ut cum quibusdam ducimus consequatur magni.', 82, 82, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(72, 'Et enim hic dolores dolor aspernatur est.', 'aut-labore-aut-animi-voluptatibus-corrupti-nisi-inventore', 'Nulla aut dolor suscipit enim dicta.', 'Officiis facere omnis qui inventore est labore quam. Ratione amet in commodi atque sed. Iusto aut iure pariatur exercitationem. Dicta ullam et cumque pariatur blanditiis totam.', 83, 83, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(73, 'Labore aut distinctio maxime sed ratione laborum magni.', 'ut-est-commodi-nisi-et-nobis-vel', 'Consectetur in labore odit rem ut ut.', 'Eligendi delectus voluptatibus quia suscipit ad architecto. Aut aut molestiae illo laudantium distinctio itaque ducimus. Est rem aut ut rerum quos velit nemo.', 84, 84, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(74, 'Excepturi adipisci nulla ut est error voluptas modi.', 'commodi-aperiam-sed-omnis-quam-eius-nulla-et', 'Aliquid ad veritatis cumque maiores.', 'Soluta iure qui delectus. Sunt ipsum aliquam eos et. Autem maiores rerum corrupti possimus quae nemo dolorum. Beatae voluptatem assumenda perferendis consequatur.', 85, 85, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(75, 'Praesentium nihil fugiat ut recusandae veritatis.', 'ipsa-occaecati-temporibus-modi-consequatur-quibusdam', 'Aut ut earum id veniam impedit cum aut.', 'Soluta quod maiores consectetur et praesentium rem. Deserunt veniam molestiae aut nobis facere ratione provident. Officiis natus dolores tempora vel nihil. Aperiam eius necessitatibus in similique aperiam.', 86, 86, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(76, 'Vel aut inventore expedita quibusdam.', 'eos-quo-unde-sequi', 'Nam sit sit culpa accusantium.', 'Dicta necessitatibus molestias inventore voluptatem autem. Sit labore nam nostrum autem eius unde. Sequi voluptatibus consectetur nihil exercitationem. Non nam cum sunt.', 87, 87, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(77, 'Exercitationem quia voluptatem rerum eos.', 'dicta-accusamus-odio-quod-qui', 'Neque molestias totam voluptas dolore fugit culpa dolor dolor.', 'Neque qui quae molestiae sequi deserunt sit. Aut nesciunt distinctio labore maiores non. Esse in ut facilis necessitatibus sequi veniam illo. Optio dolore similique sint veritatis.', 88, 88, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(78, 'Commodi vel laudantium provident magni quam est totam.', 'eum-est-qui-qui-id-consequatur-adipisci-et', 'Quia dolorum nesciunt et soluta sapiente veniam magnam.', 'Iusto aut sit reiciendis ad et labore. Et pariatur magni sunt aspernatur laudantium facere possimus. Debitis natus voluptatem vitae consequatur ut.', 89, 89, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(79, 'Rerum deserunt ducimus dolorem magnam.', 'eum-quaerat-et-facilis-aspernatur-at-nihil', 'Eaque praesentium molestias explicabo qui quae incidunt in quaerat.', 'Sapiente est sed natus voluptates iusto ullam dolor. Nihil eos magni facere quidem doloribus molestiae est aliquid. Hic consequatur ipsa quas necessitatibus.', 90, 90, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(80, 'Quos praesentium architecto consequatur sunt inventore rerum.', 'excepturi-ut-perferendis-ut', 'Quo sed sunt quam voluptatem.', 'Est dolor ipsa ut commodi exercitationem. Et et in quia dicta quidem consectetur. Quidem alias aperiam id doloremque.', 91, 91, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(81, 'Est vel nisi id iure et molestiae voluptatem.', 'suscipit-aliquam-et-ipsum-odio-eos-omnis-id', 'Doloribus vel blanditiis qui tempora accusamus sequi.', 'Dolor laborum nam ut dolor. Dicta odio quia dolor harum. Libero a quod et error omnis magnam.', 92, 92, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(82, 'Reprehenderit aut dolores reprehenderit eligendi dolor et.', 'doloremque-doloremque-ab-consequatur-doloremque-in-et', 'Qui velit eius laudantium est veniam.', 'Ut ut fugiat itaque atque sunt voluptatem. Excepturi quidem sit dolorem amet quod nihil ut. Voluptas assumenda maiores est et modi doloribus.', 93, 93, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(83, 'Est voluptate earum distinctio eos.', 'et-quia-perferendis-qui-impedit-et-molestiae-est', 'Tempora quod rerum voluptatibus corrupti velit exercitationem tempora.', 'Porro quis sed et ut aperiam deserunt eaque. Non magnam sed id consequatur eveniet. Aut aperiam aut ab id. Tempore et pariatur omnis. Sed voluptatem nihil est voluptates aut repellat recusandae.', 94, 94, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(84, 'Consectetur esse dolorem sapiente.', 'dignissimos-molestiae-voluptas-esse-id-reprehenderit-sit-necessitatibus', 'Ut impedit in autem quisquam sunt voluptas.', 'Dignissimos perferendis ut sint deleniti. Nemo quidem qui ut aliquam voluptates aut omnis facilis. Tenetur qui dolorem quibusdam sunt quos vero error. Aut labore error eius quasi amet labore non.', 95, 95, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(85, 'Autem voluptates quas assumenda ipsum cum voluptatem et.', 'nihil-sed-est-quos-amet-eos-repudiandae', 'Dolore aut nostrum eius molestiae.', 'Cupiditate voluptate repellendus eos rerum laborum voluptate dicta adipisci. Doloribus quo quisquam qui ducimus. Earum voluptatum accusantium dicta itaque. Autem libero ut pariatur soluta.', 96, 96, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(86, 'In nesciunt quas praesentium molestias.', 'in-non-sed-sunt-aut-ab-enim-nostrum', 'Optio explicabo dolor velit mollitia.', 'Maxime ipsum veniam et. Vitae natus quos excepturi iusto nostrum. Aut alias eos voluptatem delectus ut natus quas. Optio natus eum fuga corporis dolorem.', 97, 97, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(87, 'Deserunt perferendis sunt hic quos officia occaecati.', 'nesciunt-pariatur-accusantium-at-dolores-aliquid-ducimus-fugit-quo', 'Exercitationem quis inventore voluptatem quaerat atque harum.', 'Dolor totam exercitationem mollitia reiciendis eos voluptas qui. Ullam tempora rerum sunt atque vitae. Et cumque enim porro voluptatem et voluptatum suscipit.', 98, 98, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(88, 'Cumque veniam et temporibus ea enim cupiditate.', 'sed-et-nam-enim-tempora-quo', 'Accusantium est quia nam deserunt at voluptatem est.', 'Reprehenderit saepe itaque consequatur eos consectetur consequatur. Eveniet architecto qui accusantium perferendis quidem inventore. Iusto omnis quia possimus nulla ut fugit ipsa.', 99, 99, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(89, 'Iure in doloremque ipsam aut ratione.', 'reiciendis-cum-quia-ut-maxime', 'Ea eum commodi illum unde id fugiat officia.', 'Aut eligendi non asperiores debitis sequi. Amet repudiandae in vel quam. Necessitatibus quisquam veniam qui debitis suscipit qui. Molestiae est voluptas sunt deleniti asperiores fugiat provident.', 100, 100, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(90, 'Quia amet aut sit deleniti.', 'amet-voluptatem-sint-consequatur-architecto-est-consequatur-iusto', 'Reprehenderit occaecati aut velit iusto.', 'Sunt fugiat sit rerum ut quisquam dignissimos earum. Officia sunt nesciunt adipisci ut eligendi qui et. Tempora culpa ad maiores est est id rerum eaque. Vero accusamus et quo sequi doloribus ut aut.', 101, 101, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(91, 'Voluptatum nemo natus minus non.', 'voluptate-quia-ut-voluptas-sed-ut', 'Harum dicta quia ut dolores quas.', 'Culpa modi ut id officiis pariatur blanditiis velit. Velit ad odit fuga eveniet. Ut veniam aut pariatur totam consequatur. Qui rerum rem unde officiis omnis provident.', 102, 102, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(92, 'Nihil praesentium nemo earum laborum.', 'adipisci-hic-et-maxime-eos-nesciunt', 'Et aut nisi qui voluptatum rerum saepe enim.', 'Qui ratione voluptas maxime fugit animi unde sit. Quisquam voluptate voluptas ducimus sint autem commodi eum.', 103, 103, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(93, 'Sit unde delectus dolorem eius et nam assumenda commodi.', 'corrupti-libero-quia-magnam-cumque', 'Omnis deserunt dolores eum atque a nihil odit.', 'Nam aliquid reiciendis itaque blanditiis. Quo ullam dolores magni ullam repellat. Repellat autem eum labore nihil. Ut tenetur deleniti aut dolorem cum aut. Non qui velit iusto ipsam incidunt.', 104, 104, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(94, 'Minus et magnam laudantium voluptatem et commodi expedita.', 'rem-facilis-et-ea-dolor-deleniti', 'Natus accusamus tenetur laboriosam quo rerum sed adipisci.', 'Recusandae corrupti molestias molestiae facilis voluptas repellendus exercitationem. Modi necessitatibus reprehenderit quae porro. Quisquam et et maiores.', 105, 105, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(95, 'Sint voluptas iusto dolore maxime recusandae neque expedita.', 'recusandae-et-laboriosam-optio-aspernatur-aliquid-doloribus-ut', 'Nisi vel itaque ex.', 'Asperiores autem voluptates esse quidem illo eius. Delectus sed qui voluptates repellendus. Dolor ipsa sunt at atque facilis mollitia. Odit tempore ullam temporibus.', 106, 106, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(96, 'Ut quia dolor rerum similique.', 'maxime-nulla-eos-voluptatum-aut-excepturi-corrupti-soluta', 'Nulla recusandae modi velit consequuntur sit vel ratione.', 'Ipsam exercitationem neque beatae voluptatibus officiis. Harum labore et expedita assumenda. Fugiat mollitia qui ducimus qui necessitatibus eum.', 107, 107, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(97, 'Velit enim et enim aperiam voluptas ipsum molestiae.', 'asperiores-et-alias-ea', 'Illo veniam tempora consequatur velit voluptates.', 'Ut aperiam nisi tempora sit et vitae adipisci. Rem distinctio aut voluptas enim. Nobis voluptas accusantium optio soluta magnam. Qui dolor aliquam maiores omnis.', 108, 108, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(98, 'Incidunt ut rerum neque aperiam ipsa rerum tenetur.', 'officiis-qui-quae-est-reprehenderit-ipsa', 'Doloribus ex esse ut et.', 'Assumenda laudantium nobis alias iste voluptatibus enim. Rerum minus inventore et deleniti corporis. Quas eaque sequi et et laudantium vel.', 109, 109, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(99, 'Voluptate dolorem ratione provident dignissimos officiis excepturi sit.', 'voluptatem-dolores-dolorum-temporibus-officia-repudiandae-ea', 'Repellat culpa sed quod occaecati.', 'Molestias placeat qui deserunt in. Omnis corrupti ut repellendus.', 110, 110, NULL, NULL, '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(100, 'Enim rerum dolore excepturi quos.', 'maxime-eligendi-molestias-in-natus-ratione-dolor', 'Et nihil voluptatem magni harum nobis.', 'Quia hic beatae neque ipsa. Quis aspernatur reprehenderit placeat accusamus temporibus qui. Autem libero et iste at illo et maxime.', 111, 111, NULL, NULL, '2023-08-20 02:55:50', '2023-08-20 02:55:50'),
(101, 'Corporis laboriosam', 'corporis-laboriosam', 'Sit hic nobis rerum', '<p>awesfasdtg sdfd fdsfd fdf dfdfd fd</p>', 11, 75, NULL, NULL, '2023-08-21 22:51:08', '2023-08-21 22:51:08'),
(102, 'Assumenda ut quae is', 'assumenda-ut-quae-is', 'Error ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et f', '<p>Error ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea op<span style=\"font-weight: bold;\">tio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et</span> fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea optio et fError ea opt<span style=\"color: red;\">io et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Error ea optio et f</span><span style=\"color: red;\">Erro</span>r ea optio et fError ea optio et fError ea optio et fError ea optio et f<br /></p>', 11, 5, '1', '1', '2023-08-22 02:52:13', '2023-08-22 02:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 46, NULL, NULL),
(2, 1, 20, NULL, NULL),
(3, 1, 39, NULL, NULL),
(4, 2, 60, NULL, NULL),
(5, 2, 58, NULL, NULL),
(6, 2, 67, NULL, NULL),
(7, 3, 100, NULL, NULL),
(8, 3, 73, NULL, NULL),
(9, 3, 37, NULL, NULL),
(10, 4, 8, NULL, NULL),
(11, 4, 65, NULL, NULL),
(12, 4, 74, NULL, NULL),
(13, 5, 69, NULL, NULL),
(14, 5, 58, NULL, NULL),
(15, 5, 68, NULL, NULL),
(16, 6, 63, NULL, NULL),
(17, 6, 32, NULL, NULL),
(18, 6, 35, NULL, NULL),
(19, 7, 14, NULL, NULL),
(20, 7, 26, NULL, NULL),
(21, 7, 10, NULL, NULL),
(22, 8, 54, NULL, NULL),
(23, 8, 31, NULL, NULL),
(24, 8, 21, NULL, NULL),
(25, 9, 91, NULL, NULL),
(26, 9, 53, NULL, NULL),
(27, 9, 88, NULL, NULL),
(28, 10, 100, NULL, NULL),
(29, 10, 46, NULL, NULL),
(30, 10, 8, NULL, NULL),
(31, 11, 45, NULL, NULL),
(32, 11, 42, NULL, NULL),
(33, 11, 91, NULL, NULL),
(34, 12, 18, NULL, NULL),
(35, 12, 99, NULL, NULL),
(36, 12, 37, NULL, NULL),
(37, 13, 8, NULL, NULL),
(38, 13, 69, NULL, NULL),
(39, 13, 6, NULL, NULL),
(40, 14, 83, NULL, NULL),
(41, 14, 59, NULL, NULL),
(42, 14, 96, NULL, NULL),
(43, 15, 79, NULL, NULL),
(44, 15, 59, NULL, NULL),
(45, 15, 16, NULL, NULL),
(46, 16, 47, NULL, NULL),
(47, 16, 52, NULL, NULL),
(48, 16, 35, NULL, NULL),
(49, 17, 62, NULL, NULL),
(50, 17, 67, NULL, NULL),
(51, 17, 26, NULL, NULL),
(52, 18, 88, NULL, NULL),
(53, 18, 8, NULL, NULL),
(54, 18, 76, NULL, NULL),
(55, 19, 41, NULL, NULL),
(56, 19, 3, NULL, NULL),
(57, 19, 52, NULL, NULL),
(58, 20, 3, NULL, NULL),
(59, 20, 92, NULL, NULL),
(60, 20, 36, NULL, NULL),
(61, 21, 34, NULL, NULL),
(62, 21, 43, NULL, NULL),
(63, 21, 12, NULL, NULL),
(64, 22, 11, NULL, NULL),
(65, 22, 78, NULL, NULL),
(66, 22, 76, NULL, NULL),
(67, 23, 23, NULL, NULL),
(68, 23, 45, NULL, NULL),
(69, 23, 85, NULL, NULL),
(70, 24, 68, NULL, NULL),
(71, 24, 100, NULL, NULL),
(72, 24, 40, NULL, NULL),
(73, 25, 3, NULL, NULL),
(74, 25, 93, NULL, NULL),
(75, 25, 86, NULL, NULL),
(76, 26, 60, NULL, NULL),
(77, 26, 29, NULL, NULL),
(78, 26, 22, NULL, NULL),
(79, 27, 57, NULL, NULL),
(80, 27, 43, NULL, NULL),
(81, 27, 68, NULL, NULL),
(82, 28, 84, NULL, NULL),
(83, 28, 90, NULL, NULL),
(84, 28, 41, NULL, NULL),
(85, 29, 49, NULL, NULL),
(86, 29, 72, NULL, NULL),
(87, 29, 86, NULL, NULL),
(88, 30, 30, NULL, NULL),
(89, 30, 16, NULL, NULL),
(90, 30, 13, NULL, NULL),
(91, 31, 19, NULL, NULL),
(92, 31, 40, NULL, NULL),
(93, 31, 97, NULL, NULL),
(94, 32, 87, NULL, NULL),
(95, 32, 55, NULL, NULL),
(96, 32, 91, NULL, NULL),
(97, 33, 98, NULL, NULL),
(98, 33, 37, NULL, NULL),
(99, 33, 84, NULL, NULL),
(100, 34, 56, NULL, NULL),
(101, 34, 82, NULL, NULL),
(102, 34, 22, NULL, NULL),
(103, 35, 44, NULL, NULL),
(104, 35, 66, NULL, NULL),
(105, 35, 50, NULL, NULL),
(106, 36, 39, NULL, NULL),
(107, 36, 78, NULL, NULL),
(108, 36, 48, NULL, NULL),
(109, 37, 37, NULL, NULL),
(110, 37, 48, NULL, NULL),
(111, 37, 88, NULL, NULL),
(112, 38, 82, NULL, NULL),
(113, 38, 64, NULL, NULL),
(114, 38, 69, NULL, NULL),
(115, 39, 3, NULL, NULL),
(116, 39, 64, NULL, NULL),
(117, 39, 76, NULL, NULL),
(118, 40, 90, NULL, NULL),
(119, 40, 40, NULL, NULL),
(120, 40, 62, NULL, NULL),
(121, 41, 11, NULL, NULL),
(122, 41, 79, NULL, NULL),
(123, 41, 81, NULL, NULL),
(124, 42, 73, NULL, NULL),
(125, 42, 49, NULL, NULL),
(126, 42, 59, NULL, NULL),
(127, 43, 77, NULL, NULL),
(128, 43, 73, NULL, NULL),
(129, 43, 41, NULL, NULL),
(130, 44, 43, NULL, NULL),
(131, 44, 57, NULL, NULL),
(132, 44, 20, NULL, NULL),
(133, 45, 22, NULL, NULL),
(134, 45, 26, NULL, NULL),
(135, 45, 66, NULL, NULL),
(136, 46, 63, NULL, NULL),
(137, 46, 56, NULL, NULL),
(138, 46, 27, NULL, NULL),
(139, 47, 44, NULL, NULL),
(140, 47, 54, NULL, NULL),
(141, 47, 98, NULL, NULL),
(142, 48, 38, NULL, NULL),
(143, 48, 73, NULL, NULL),
(144, 48, 80, NULL, NULL),
(145, 49, 91, NULL, NULL),
(146, 49, 4, NULL, NULL),
(147, 49, 24, NULL, NULL),
(148, 50, 13, NULL, NULL),
(149, 50, 59, NULL, NULL),
(150, 50, 86, NULL, NULL),
(151, 51, 25, NULL, NULL),
(152, 51, 74, NULL, NULL),
(153, 51, 67, NULL, NULL),
(154, 52, 80, NULL, NULL),
(155, 52, 51, NULL, NULL),
(156, 52, 56, NULL, NULL),
(157, 53, 20, NULL, NULL),
(158, 53, 28, NULL, NULL),
(159, 53, 13, NULL, NULL),
(160, 54, 23, NULL, NULL),
(161, 54, 91, NULL, NULL),
(162, 54, 2, NULL, NULL),
(163, 55, 80, NULL, NULL),
(164, 55, 37, NULL, NULL),
(165, 55, 40, NULL, NULL),
(166, 56, 51, NULL, NULL),
(167, 56, 86, NULL, NULL),
(168, 56, 11, NULL, NULL),
(169, 57, 41, NULL, NULL),
(170, 57, 39, NULL, NULL),
(171, 57, 5, NULL, NULL),
(172, 58, 21, NULL, NULL),
(173, 58, 48, NULL, NULL),
(174, 58, 100, NULL, NULL),
(175, 59, 64, NULL, NULL),
(176, 59, 80, NULL, NULL),
(177, 59, 16, NULL, NULL),
(178, 60, 98, NULL, NULL),
(179, 60, 87, NULL, NULL),
(180, 60, 80, NULL, NULL),
(181, 61, 49, NULL, NULL),
(182, 61, 2, NULL, NULL),
(183, 61, 85, NULL, NULL),
(184, 62, 77, NULL, NULL),
(185, 62, 11, NULL, NULL),
(186, 62, 83, NULL, NULL),
(187, 63, 25, NULL, NULL),
(188, 63, 56, NULL, NULL),
(189, 63, 81, NULL, NULL),
(190, 64, 30, NULL, NULL),
(191, 64, 76, NULL, NULL),
(192, 64, 85, NULL, NULL),
(193, 65, 2, NULL, NULL),
(194, 65, 68, NULL, NULL),
(195, 65, 21, NULL, NULL),
(196, 66, 95, NULL, NULL),
(197, 66, 62, NULL, NULL),
(198, 66, 66, NULL, NULL),
(199, 67, 20, NULL, NULL),
(200, 67, 32, NULL, NULL),
(201, 67, 44, NULL, NULL),
(202, 68, 39, NULL, NULL),
(203, 68, 46, NULL, NULL),
(204, 68, 68, NULL, NULL),
(205, 69, 24, NULL, NULL),
(206, 69, 27, NULL, NULL),
(207, 69, 75, NULL, NULL),
(208, 70, 49, NULL, NULL),
(209, 70, 68, NULL, NULL),
(210, 70, 51, NULL, NULL),
(211, 71, 60, NULL, NULL),
(212, 71, 69, NULL, NULL),
(213, 71, 92, NULL, NULL),
(214, 72, 13, NULL, NULL),
(215, 72, 10, NULL, NULL),
(216, 72, 84, NULL, NULL),
(217, 73, 64, NULL, NULL),
(218, 73, 24, NULL, NULL),
(219, 73, 36, NULL, NULL),
(220, 74, 41, NULL, NULL),
(221, 74, 15, NULL, NULL),
(222, 74, 42, NULL, NULL),
(223, 75, 26, NULL, NULL),
(224, 75, 52, NULL, NULL),
(225, 76, 4, NULL, NULL),
(226, 76, 53, NULL, NULL),
(227, 76, 34, NULL, NULL),
(228, 77, 37, NULL, NULL),
(229, 77, 47, NULL, NULL),
(230, 77, 21, NULL, NULL),
(231, 78, 76, NULL, NULL),
(232, 78, 51, NULL, NULL),
(233, 78, 21, NULL, NULL),
(234, 79, 59, NULL, NULL),
(235, 79, 64, NULL, NULL),
(236, 79, 48, NULL, NULL),
(237, 80, 50, NULL, NULL),
(238, 80, 69, NULL, NULL),
(239, 80, 54, NULL, NULL),
(240, 81, 84, NULL, NULL),
(241, 81, 25, NULL, NULL),
(242, 81, 52, NULL, NULL),
(243, 82, 18, NULL, NULL),
(244, 82, 34, NULL, NULL),
(245, 82, 68, NULL, NULL),
(246, 83, 63, NULL, NULL),
(247, 83, 69, NULL, NULL),
(248, 83, 49, NULL, NULL),
(249, 84, 15, NULL, NULL),
(250, 84, 72, NULL, NULL),
(251, 84, 22, NULL, NULL),
(252, 85, 84, NULL, NULL),
(253, 85, 44, NULL, NULL),
(254, 85, 17, NULL, NULL),
(255, 86, 28, NULL, NULL),
(256, 86, 64, NULL, NULL),
(257, 86, 25, NULL, NULL),
(258, 87, 60, NULL, NULL),
(259, 87, 58, NULL, NULL),
(260, 88, 16, NULL, NULL),
(261, 88, 31, NULL, NULL),
(262, 88, 25, NULL, NULL),
(263, 89, 18, NULL, NULL),
(264, 89, 2, NULL, NULL),
(265, 89, 68, NULL, NULL),
(266, 90, 44, NULL, NULL),
(267, 90, 60, NULL, NULL),
(268, 90, 19, NULL, NULL),
(269, 91, 88, NULL, NULL),
(270, 91, 93, NULL, NULL),
(271, 91, 43, NULL, NULL),
(272, 92, 39, NULL, NULL),
(273, 92, 32, NULL, NULL),
(274, 92, 54, NULL, NULL),
(275, 93, 55, NULL, NULL),
(276, 93, 79, NULL, NULL),
(277, 93, 18, NULL, NULL),
(278, 94, 84, NULL, NULL),
(279, 94, 30, NULL, NULL),
(280, 94, 21, NULL, NULL),
(281, 95, 25, NULL, NULL),
(282, 95, 44, NULL, NULL),
(283, 95, 13, NULL, NULL),
(284, 96, 91, NULL, NULL),
(285, 96, 36, NULL, NULL),
(286, 96, 88, NULL, NULL),
(287, 97, 90, NULL, NULL),
(288, 97, 77, NULL, NULL),
(289, 97, 29, NULL, NULL),
(290, 98, 86, NULL, NULL),
(291, 98, 44, NULL, NULL),
(292, 98, 79, NULL, NULL),
(293, 99, 17, NULL, NULL),
(294, 99, 89, NULL, NULL),
(295, 99, 47, NULL, NULL),
(296, 100, 39, NULL, NULL),
(297, 100, 38, NULL, NULL),
(298, 100, 45, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', '2023-08-20 02:55:39', '2023-08-20 02:55:39'),
(2, 'admin', '2023-08-20 02:55:39', '2023-08-20 02:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'unde', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(2, 'non', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(3, 'quia', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(4, 'repellat', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(5, 'at', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(6, 'architecto', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(7, 'omnis', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(8, 'hic', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(9, 'dicta', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(10, 'odit', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(11, 'dolorem', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(12, 'sint', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(13, 'et', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(14, 'impedit', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(15, 'quia', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(16, 'repellendus', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(17, 'molestiae', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(18, 'occaecati', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(19, 'libero', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(20, 'sit', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(21, 'ipsa', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(22, 'repudiandae', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(23, 'qui', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(24, 'molestias', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(25, 'libero', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(26, 'corporis', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(27, 'magnam', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(28, 'odit', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(29, 'earum', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(30, 'pariatur', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(31, 'est', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(32, 'voluptates', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(33, 'occaecati', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(34, 'in', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(35, 'explicabo', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(36, 'repellendus', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(37, 'voluptatem', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(38, 'non', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(39, 'laborum', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(40, 'consequuntur', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(41, 'quasi', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(42, 'laudantium', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(43, 'libero', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(44, 'delectus', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(45, 'maxime', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(46, 'nisi', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(47, 'qui', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(48, 'sequi', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(49, 'voluptas', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(50, 'natus', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(51, 'itaque', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(52, 'et', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(53, 'qui', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(54, 'accusamus', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(55, 'occaecati', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(56, 'pariatur', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(57, 'nesciunt', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(58, 'ab', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(59, 'magni', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(60, 'excepturi', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(61, 'cupiditate', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(62, 'laboriosam', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(63, 'quisquam', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(64, 'veniam', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(65, 'quam', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(66, 'ut', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(67, 'dolores', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(68, 'voluptatem', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(69, 'nemo', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(70, 'iure', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(71, 'eos', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(72, 'odio', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(73, 'eum', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(74, 'quam', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(75, 'non', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(76, 'quasi', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(77, 'aliquam', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(78, 'distinctio', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(79, 'non', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(80, 'ut', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(81, 'natus', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(82, 'pariatur', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(83, 'ratione', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(84, 'et', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(85, 'cumque', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(86, 'aut', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(87, 'vitae', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(88, 'dolores', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(89, 'aliquam', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(90, 'dolores', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(91, 'dolorem', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(92, 'in', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(93, 'laborum', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(94, 'itaque', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(95, 'molestiae', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(96, 'et', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(97, 'atque', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(98, 'commodi', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(99, 'omnis', '2023-08-20 02:55:51', '2023-08-20 02:55:51'),
(100, 'pariatur', '2023-08-20 02:55:51', '2023-08-20 02:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Asa Harvey', 'boyle.gerardo@example.org', '2023-08-20 02:55:39', '$2y$10$16ct/HqZFH7Djx6kX4FEZu7k9M/RCLU6pYXChfCICLn4gv8MCF.bq', 1, 1, '36ERPMCSUV', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(2, 'Ardith Stehr', 'zhomenick@example.com', '2023-08-20 02:55:39', '$2y$10$koC.GMYwv9IJtup14hKAKuwu/WvxuR.s60IaOKw7Ac2wq/LcTzzbC', 1, 1, 'rjvFPmbtmO', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(3, 'Ramona Treutel', 'ulehner@example.org', '2023-08-20 02:55:39', '$2y$10$9I.McOPeruASZE6OVtB0XOvIYmY2D82aKXypXeNVHSG3dABh/zMkC', 1, 1, 'zeqf9WvW2y', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(4, 'Ayana Kunde', 'oberbrunner.troy@example.com', '2023-08-20 02:55:39', '$2y$10$4Lr8HEYKbwr0yPO6KDAEEuFjuUkhlT3kTosjLl6WD9wtzt6VXSeKy', 1, 1, 'GPC5dLHeYn', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(5, 'Claudia Leannon III', 'shanie.lemke@example.org', '2023-08-20 02:55:39', '$2y$10$X19hUGJNeSGIVDfmIU8XQetStFcTJdf0gxNMaCQlXGlgV11GwJxAq', 1, 1, 'pamsowH0aH', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(6, 'Devyn Kunze', 'kristy48@example.org', '2023-08-20 02:55:40', '$2y$10$E76Mn.BXYJjKBQv3pU/v4Ofv0CiEuY3krtr/diZgjeZ/0vPC1F6h6', 1, 1, 'ABSGPB1LBT', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(7, 'Randy Abernathy', 'pollich.lue@example.org', '2023-08-20 02:55:40', '$2y$10$CDwkz27YNTpQj41h/VA6e.VamSYE8iNqsmZUAbmsXBTHAnGKE3xua', 1, 1, 'qM7Gv0ZHkA', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(8, 'Roxanne Ledner', 'jacinto83@example.com', '2023-08-20 02:55:40', '$2y$10$dapAJAZ0HClAwhlZyYx4LeV3n9CN2kJacv.gI7nhL/I3CDcsFJtrC', 1, 1, 'ajjmpFL0Zf', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(9, 'Carey Mraz', 'stark.emmalee@example.org', '2023-08-20 02:55:40', '$2y$10$0sGgogdM2qAFRjdB/sQtK.8mj1I.HVFBgUrBXiH/dMVmI912YPf4W', 1, 1, 'MwO3Lrt4lP', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(10, 'Chelsey Renner', 'kareem47@example.org', '2023-08-20 02:55:40', '$2y$10$teWOir92XOzuUaaDH6D8N.ecaMfbygGYV1OIwBu5Gn4FxVVFJgMDi', 1, 1, 'EVAuccE2Ww', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(11, 'admin dashboard', 'admin@gmail.com', '2023-08-20 02:55:40', '$2y$10$flF0PsjkPgJtdIM7Bg45uu/DsRJbQn7Y6llybVeE2gqPjKb3g3ymS', 1, 2, '2LQMMgAf1n', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(12, 'Blaise Bayer', 'cstrosin@example.net', '2023-08-20 02:55:40', '$2y$10$dHQslgfVpFRgm7cfcdARpuUls16yYfzNs7yLD0E4DOqVzOzRcnIy2', 1, 1, 'dKomYydAIv', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(13, 'Shannon Batz', 'myron87@example.net', '2023-08-20 02:55:40', '$2y$10$ZeGDn9FzxYh9/qbXGRuYsudxDyLYs3IZagfIDycBqZQmixtR/GLA6', 1, 1, 'dq8tNEi3M2', '2023-08-20 02:55:40', '2023-08-20 02:55:40'),
(14, 'Arno Strosin', 'qhowell@example.com', '2023-08-20 02:55:40', '$2y$10$dWeTNiIIDHumCTG/qXzDsOYIaYDsfMCO7zow3O3SC4sUjJZ1yTu1K', 1, 1, 'jzCM1IMHzN', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(15, 'Brant Lockman I', 'kamron85@example.org', '2023-08-20 02:55:41', '$2y$10$GyUaOQ8TO6YXtZCIVQDCMOSP.rcFKRRwJe/EsbJbtTl5lDTL9xHV6', 1, 1, 'UO08pVXWyp', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(16, 'Prof. Melissa Jakubowski', 'xjones@example.com', '2023-08-20 02:55:41', '$2y$10$T2hTgLyEDp382VTGNndaC.KqVk292KVPsA/3rVSlMwJBrM8JcWa0K', 1, 1, 't5IpUTIItL', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(17, 'Pedro Hammes', 'janick.konopelski@example.com', '2023-08-20 02:55:41', '$2y$10$.2RV65kDFz12XYr58KQwnejReTnSX8nhnV1fSgb0jpNO8MZcqAznS', 1, 1, 'Ekv9075kTa', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(18, 'Beverly Goyette', 'lillie.bednar@example.com', '2023-08-20 02:55:41', '$2y$10$3qBPW.49RrYBqM/4kd6.6OIvM1ae3.xYkJ8N8xLV7lA3FDvHCcFuG', 1, 1, '8xyAM3V0nB', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(19, 'Yvette Ratke', 'lucio.jacobs@example.org', '2023-08-20 02:55:41', '$2y$10$STpnq44VtZjn9MFQ59HZ0Omo9dECD/m7InU1QRwQcqyIEt55q7JUG', 1, 1, 'my3i8CV3mn', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(20, 'Mr. Noel Altenwerth V', 'chauncey.langworth@example.com', '2023-08-20 02:55:41', '$2y$10$08sQhu.2/0tyHa58xAGJl.YLrbGE.8EhS4n/f1ULpCAbDsyizHEQS', 1, 1, 'BkwX9JMzKE', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(21, 'Mrs. Agnes Corwin III', 'jcorwin@example.org', '2023-08-20 02:55:41', '$2y$10$3ulD5vOD7l/R9SKx2nVjN.bZtxGb2Z3./ovLG/jefZ9irSkTgLc6G', 1, 1, 'sItxkTCsv0', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(22, 'Mr. Louvenia Pfeffer', 'lizzie67@example.com', '2023-08-20 02:55:41', '$2y$10$G2d2C374KOGKcD/ZRbESaOuMdRxGlbb5AOhaEhKiWo3kHANek85wG', 1, 1, 'UuQObpmzYJ', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(23, 'Mrs. Leann Hodkiewicz PhD', 'darron.gutkowski@example.net', '2023-08-20 02:55:41', '$2y$10$fRTl9VawuLow2PsplzHt9esVJQOw/NpRtVw5yBQTQFxny.iOYO2ZW', 1, 1, 'y0AuVTyMNx', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(24, 'Vicky Strosin', 'eloisa02@example.com', '2023-08-20 02:55:41', '$2y$10$Q.eYArDdTElqDSOktgODfe9fyIB/l9C/Iem53mp5zENmh/dfIhzRy', 1, 1, '0lBCZIbqw0', '2023-08-20 02:55:41', '2023-08-20 02:55:41'),
(25, 'Mrs. Lessie Kulas', 'huel.javonte@example.org', '2023-08-20 02:55:41', '$2y$10$dFtz1sScKVMQxAkdzllg8e.oQ4rnqzHdzKpiAMYkzOQjdVOZFjFi6', 1, 1, '1UDiSt5zf8', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(26, 'Ms. Lulu Morar V', 'jaclyn.reynolds@example.com', '2023-08-20 02:55:42', '$2y$10$se7OTHlzsPEsF1F8hT/Jtu5QIPISHfaY2.tqmB74wX7M4mMUSTw5.', 1, 1, 'CSX6pqHBT6', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(27, 'Marlin Jakubowski', 'lockman.seamus@example.net', '2023-08-20 02:55:42', '$2y$10$KkCtPNmuv3f9aVbbpMp/z.6uuz6YLKtO0tUbG.x6Kl7Sms9FEXBRm', 1, 1, 'K0O53EiG8C', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(28, 'Dr. Marie Mills', 'missouri.buckridge@example.com', '2023-08-20 02:55:42', '$2y$10$F9vBOy8lwGlDEGgerwkXvOjS9j.BJycHRbWWW/mfaMPWz6FhoJN9.', 1, 1, 'iRkBLr6fkc', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(29, 'Mr. Emil Williamson', 'josue16@example.com', '2023-08-20 02:55:42', '$2y$10$BmrWVOx1ibiF/2tme67QXuqt8OSdVlhs0hm8DCe175u4Nk.c.WXrC', 1, 1, '4JjdE8sHah', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(30, 'Stanton Cartwright', 'hamill.fae@example.org', '2023-08-20 02:55:42', '$2y$10$e2Ljcyt0.JbKbunf2zfNPeAJOUjpGHGz44.xuz2o5Oy6a32AOUZXm', 1, 1, 'YPZBokRnkN', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(31, 'Mrs. Fabiola O\'Conner', 'ndicki@example.com', '2023-08-20 02:55:42', '$2y$10$vi567Nrb1gSDHFw.iZcgbuJsG5.tGpBtEpSfYqeGQp8wtqjnyrAg6', 1, 1, 'mJSmsCwOdN', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(32, 'Violet Gerlach', 'griffin71@example.net', '2023-08-20 02:55:42', '$2y$10$XS7MgrT1FiaExiAiTI7nSOxPxldOF8E9WTvEM1p8OhmI3Ln57iEM.', 1, 1, 'gJ9lUxN5IX', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(33, 'Alysha Schultz', 'okuneva.nolan@example.org', '2023-08-20 02:55:42', '$2y$10$Z3wdEyFqxUs9B/ivCER8c..kHRJT/QqtmvEW5xBmr3H5KOdZMeVVC', 1, 1, 'yDArcbNipG', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(34, 'Melyssa Mayer', 'sarai.dicki@example.net', '2023-08-20 02:55:42', '$2y$10$zE.gCa4DCq4fXL6IzBdzpOCvMOrtdV2hUhYBC2Y9AcJCSsXoW0TgK', 1, 1, 'U6k0YkFc4d', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(35, 'Randy Homenick', 'hill.myrtie@example.org', '2023-08-20 02:55:42', '$2y$10$5TyYAhQOWnme7izMGU0nh.KausIRYKSVOkmnrHb48tpoqT6SwwseG', 1, 1, 'MskhsUCiFe', '2023-08-20 02:55:42', '2023-08-20 02:55:42'),
(36, 'Crawford Ondricka', 'xmayert@example.org', '2023-08-20 02:55:42', '$2y$10$eRWkZlwXAatpuIsts4cg4OuvINPrKzvEiPM2t3YyIwyTYDORKHtaO', 1, 1, 'wwQaxg5pwj', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(37, 'Dr. Brock O\'Kon', 'joanne.medhurst@example.net', '2023-08-20 02:55:43', '$2y$10$n4TQELEmzXtIhJ1FW/JuA.vF2PxT6MAeqr2iNXZktZgl.UQ3wumtW', 1, 1, '6zVH01hq09', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(38, 'Darius Kub', 'stehr.litzy@example.org', '2023-08-20 02:55:43', '$2y$10$DbiF/pSmMcrIwF.O9mHA.OzDBw8DJknlUZk5bxWVy7FALFc98KEn2', 1, 1, 'miRQYkI3qp', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(39, 'Luisa Abbott', 'fay.caesar@example.com', '2023-08-20 02:55:43', '$2y$10$3en0HQK4bkLDcV7mCPgM7.CUfLxhI7cc7p5fSJmZNCE/qIaG/YkNu', 1, 1, '38z9XmUJPn', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(40, 'Ethyl Hyatt', 'estella.paucek@example.com', '2023-08-20 02:55:43', '$2y$10$kuFY6KIP4Oj7WZnrXgnLfupnqEsASNNgFzEVfYyBzbPXTsTOt/Bia', 1, 1, 'z8EiGfEQ5s', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(41, 'Dean Blanda', 'jerad26@example.org', '2023-08-20 02:55:43', '$2y$10$pT8iQ4MhrWPyrbAVDEtySuyLdXEOneMZWaa977nKIYkYnw0uEeUxK', 1, 1, 'I6ufjuVIki', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(42, 'Prof. Julie Fisher', 'bianka.homenick@example.com', '2023-08-20 02:55:43', '$2y$10$O05coUPMS0O972F7kqqSh.BEtGDgPu5pLLuhi0DX9CJe3BOrxfUOO', 1, 1, 'YjUOpmSum2', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(43, 'Joel Grant III', 'scot.sawayn@example.net', '2023-08-20 02:55:43', '$2y$10$4aWV7cVGsiHzorUWskjuz.pbVTRnHKH2g7NsbFY4Vl5Wj5nzijDFG', 1, 1, '2GWGPO8Ibn', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(44, 'Baron Will', 'kshlerin.althea@example.com', '2023-08-20 02:55:43', '$2y$10$G8CxlcG8SzHcqKX4sgJdFef1fC.VlTiW6evGQRTkP71oiZbRlbcsK', 1, 1, 'q1ftPYVB9m', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(45, 'Henriette Heidenreich III', 'wunsch.gretchen@example.net', '2023-08-20 02:55:43', '$2y$10$4OLrRbTn3CXI3X3BlrV6RO9F6gyzPKNeTWYWJlBfYqtp53WIqzznu', 1, 1, 'Nde8Oma2hq', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(46, 'Lori Nader', 'darius.tromp@example.net', '2023-08-20 02:55:43', '$2y$10$uuprjiZ4jBaIfZ2hMRD/KuVFzWA../sPEN.9vVV1xdQCPpYnM07/K', 1, 1, 'nELoQRxBNI', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(47, 'Emmett Labadie', 'keven.prosacco@example.net', '2023-08-20 02:55:43', '$2y$10$Lui1c1g91tHtO1G.i0KtZ.depdd.czB1pmrfRoFnLRK.Che4LfMRa', 1, 1, '3n0gWkg6JQ', '2023-08-20 02:55:43', '2023-08-20 02:55:43'),
(48, 'Vinnie Bernhard I', 'catharine.damore@example.net', '2023-08-20 02:55:44', '$2y$10$O5MyodKILA.VdWBMFnifg.LqAu/AAKBNkKWrtHlRnqd32boI.vTaW', 1, 1, 'WNHSEfOKNV', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(49, 'Larissa Purdy Sr.', 'faufderhar@example.org', '2023-08-20 02:55:44', '$2y$10$/6/AOnpNJXXcX9IXybB0w.mFFKBGCeXShAXWI0xRBNpoiwYZnPjUS', 1, 1, 'NvK3SSBnWk', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(50, 'Billie Weimann', 'dion.hodkiewicz@example.com', '2023-08-20 02:55:44', '$2y$10$hbe1LgBpSuvK49NPci/e4u6mM2GePZSXgzYwSiMySXTSuho1d2YmW', 1, 1, 'XuACfOyoyG', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(51, 'Esta Olson', 'carroll.verna@example.org', '2023-08-20 02:55:44', '$2y$10$DxH2Rfgf3NSrx7.dvsbg/OrN8ZBYbugJzxJjUYf2XzPLlhJhLeXPW', 1, 1, 'yyTugo8ZgS', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(52, 'Dandre Dare', 'cormier.lemuel@example.com', '2023-08-20 02:55:44', '$2y$10$4lAeTSH.8AWM05V2s/fBQecTuj4OJPeNbwIR12gmcEuFSEusTaJom', 1, 1, 'kUQf1GSTlc', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(53, 'Brandon Howell', 'jesse05@example.org', '2023-08-20 02:55:44', '$2y$10$R6Q7FOxWnaW7BttohENAme0DDZj/27/trM2EIQohmd6hh3wJ2JqU2', 1, 1, 'oCtVORhUx5', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(54, 'Danial Schmeler', 'agislason@example.net', '2023-08-20 02:55:44', '$2y$10$TycFMlCkn7u4RVq0y.BuIO7RtwMvvexoRl2n0bLkyaUbQxI00e5au', 1, 1, '8Dy6S6JnYL', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(55, 'Mr. Arnulfo Brown DVM', 'terrance19@example.net', '2023-08-20 02:55:44', '$2y$10$yvRJMIbqAR8q2v68H7fapOORufIDccLaRmjZXP2pTjhgI1S07Liuq', 1, 1, 'iym7bKe2ce', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(56, 'Otho Smith', 'jasmin81@example.org', '2023-08-20 02:55:44', '$2y$10$4X1M6o7W2i6SdBYRzgwXm.SCMfmSVtwb0Y3wu2fvBTuEjtUCtRR3m', 1, 1, '80T29yDeIF', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(57, 'Laurel Kassulke', 'lessie10@example.org', '2023-08-20 02:55:44', '$2y$10$cz50l3RRH/c2bH12apIooujNIzpBth1yHBSRSuihASq6kngLurJdy', 1, 1, 'qgIqGNMC37', '2023-08-20 02:55:44', '2023-08-20 02:55:44'),
(58, 'Miss Myriam Bechtelar V', 'mmante@example.org', '2023-08-20 02:55:44', '$2y$10$RINw4z6anWnIW3IyVhCvtODc18o00qSUm5B23jg1tzgD/LEKfaU0q', 1, 1, '8m3IS8Fq6m', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(59, 'Dr. Shanon Kassulke Jr.', 'ophelia08@example.net', '2023-08-20 02:55:45', '$2y$10$dwmqcHvt4S5NSCzjk.x93enrToMa95C/Jts6nR7phsfVfNl8lqluq', 1, 1, '7yT2HUBXLa', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(60, 'Claudia Price', 'lukas68@example.com', '2023-08-20 02:55:45', '$2y$10$78QqomFQHmWc4Ks/aS.cnew/zHoN5Spn.VBM.9khJn3jUwP/c/Mhi', 1, 1, 'Wslohq4pqO', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(61, 'Vergie Balistreri', 'heidenreich.arthur@example.com', '2023-08-20 02:55:45', '$2y$10$XmF2qodIOQYtedzsXskYB.dp2lhWsfT5ZZUa2br3uJPoDs2EIMi/i', 1, 1, 'Dtmf4Yq2YP', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(62, 'Dr. Cristopher Fisher', 'devante58@example.com', '2023-08-20 02:55:45', '$2y$10$HtxHqGCnrbeA06rZsvjdhuBRJFHT9isDYomJiMV12U86Q2MzXhZu2', 1, 1, 'gIGeEZM9FO', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(63, 'Rylan Walter', 'nader.hardy@example.org', '2023-08-20 02:55:45', '$2y$10$VqLuOK3OSTEu3N3bUytareuFMDN1D04Zzu4wQOMfFrTRwhR6CSeIe', 1, 1, 'TabYNeDbMQ', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(64, 'Kay Kuhlman III', 'mavis.larkin@example.com', '2023-08-20 02:55:45', '$2y$10$O5tzAbFsbAoJ64.Ik3/xd..TdADqywZWt.CwDRbm2XRgVtX2Skpse', 1, 1, 'GYNik8SNDt', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(65, 'Karelle Jenkins', 'allene46@example.org', '2023-08-20 02:55:45', '$2y$10$MTQ/9JuOSIZlicGWbh8jE.iJOEmJqG3b8Z8L799FgNNCHugENn0l6', 1, 1, 'xAd0JzcrIL', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(66, 'Precious Treutel', 'wvandervort@example.com', '2023-08-20 02:55:45', '$2y$10$tXQ5uH97P7dYNE3vI4yqQODSUaiZAjvK1v2Ic4tIoW0x0FLXtCGIq', 1, 1, '7mHbDSgcUX', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(67, 'Jaiden Lesch', 'edison.hahn@example.org', '2023-08-20 02:55:45', '$2y$10$rpqVYiOBgpr3tG4n3PqZn.vIOFJV5c4OtyCNJ9aBhSFJy6z44w/R2', 1, 1, 'KTKUytlxhq', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(68, 'Prof. Nico Roob DVM', 'stan.marquardt@example.org', '2023-08-20 02:55:45', '$2y$10$K6JAGLCZT4yTbfjtg1zi6OTjuajxSNKH0P5eUM/FWmzl/o4V61hhu', 1, 1, 'Jy07ptTtkI', '2023-08-20 02:55:45', '2023-08-20 02:55:45'),
(69, 'Dr. Jarrell Abbott DVM', 'dee31@example.com', '2023-08-20 02:55:45', '$2y$10$Bmn5LWN5GeKHLagWyVY/TuniyXC7kyan6qgeUFwkTkWScJvCz6sCG', 1, 1, 'pufLVpESSz', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(70, 'Carmen Bauch', 'alisa37@example.org', '2023-08-20 02:55:46', '$2y$10$XKyfAOmrly5/tgJDHzmAIejeoPhq1J5vm4/DZ/n5FHhTKyO.pzA1C', 1, 1, 'RpOLz5YIvn', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(71, 'Jackie O\'Reilly', 'haleigh.kling@example.net', '2023-08-20 02:55:46', '$2y$10$WysghaGMOvepMO6vuN1Bhu5WBRgY4xZvhOlQyGxMVha4C7lnAGcXe', 1, 1, '9CdRQacQfn', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(72, 'Hulda Bauch', 'jackeline66@example.net', '2023-08-20 02:55:46', '$2y$10$PWcDFZboAlFiO70CrA9z7OAkK/0jTnFNwXMfyUhJgsV8p4aTwR4bq', 1, 1, 'zSdZyz8Vma', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(73, 'Candice Lowe IV', 'alvah79@example.net', '2023-08-20 02:55:46', '$2y$10$oEgG8fPDxH.GSsknlNKzA.grpiox5VXBuHeicsvkPFEp0Br1mUGd2', 1, 1, 'o2slPLSHDC', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(74, 'Ms. Kelsie Langosh Sr.', 'eula37@example.org', '2023-08-20 02:55:46', '$2y$10$OMxZJoItC4k4A1rRubkapOVmBcVny8HT3RhK2zTgvkD0mHqsApDzq', 1, 1, '0oUvx5fLY4', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(75, 'Leann Frami', 'gleannon@example.net', '2023-08-20 02:55:46', '$2y$10$cFkkoeyWjbQQCJhkKJyh0u7fYerzsDXPuL3T9D6pTE2ZYmkVCiHPS', 1, 1, 'G0wybNPOkX', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(76, 'Lupe Labadie', 'hhills@example.org', '2023-08-20 02:55:46', '$2y$10$JETU542us85RIqFTh9svWubvPvrAJqR2dqlkclJi/tCURI9ntuKKK', 1, 1, '7RrMpgAvEe', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(77, 'Dr. Bulah Streich', 'fritsch.ryley@example.org', '2023-08-20 02:55:46', '$2y$10$ExEcYNyRg0V1rJ/5699Nbuduf2FXwVA0LjqPTPW809S9LNV8wRUme', 1, 1, '8TCoQyfiDm', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(78, 'Mrs. Ruby Brekke', 'rstreich@example.net', '2023-08-20 02:55:46', '$2y$10$H86Jb.Cp2dwqB.TmadefSuS.ecnjDF10XmuJ66NeYMiBD/GB29M1y', 1, 1, 'txxq1EjmSc', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(79, 'Dr. Skylar Gottlieb', 'lucious.mayer@example.net', '2023-08-20 02:55:46', '$2y$10$1.ApsV/tHWFWE3T9PsAbQeE3cn0YKzWtuTofsTvRYHK3IoBmOPJQW', 1, 1, 'dVy7zSKh8o', '2023-08-20 02:55:46', '2023-08-20 02:55:46'),
(80, 'Jay Fahey', 'christelle87@example.org', '2023-08-20 02:55:46', '$2y$10$c/qiHyJ3Q0ISDBoZPxBoH.MVErUT430W4rzvcexTEYJ2X3hR8iK16', 1, 1, 'cv0dyJ1R1H', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(81, 'Toney Feest', 'abigale24@example.org', '2023-08-20 02:55:47', '$2y$10$emTcueLiAfBfKBS8j.8qtu08g.Q3ZnOfE9lmohsX0qklbcKwATl5m', 1, 1, '9j2w9OXv2G', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(82, 'Ryley Spinka', 'fred62@example.org', '2023-08-20 02:55:47', '$2y$10$6Unm.j2xgLz5uCR1jzgcW.IXItVJqUZRN4HXLn/hj4mGCafyYq34a', 1, 1, 'uaIFjiti0B', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(83, 'Valentina Nikolaus', 'rharvey@example.net', '2023-08-20 02:55:47', '$2y$10$qqPB4YMs4ORz.hbP7.m1Ney2V8EIb4PoQUuHEEREW2jaMrHTzAr6y', 1, 1, 'HbFcq5gEHd', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(84, 'Germaine Klein', 'cameron.sauer@example.org', '2023-08-20 02:55:47', '$2y$10$xy5zWHKi9D2eeB4uspP2Beex8Wm7VcR3rRL6XpPpW5h3vOlE5LU9C', 1, 1, 'HRPytUWLdS', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(85, 'Shanon Stiedemann DDS', 'funk.rogers@example.com', '2023-08-20 02:55:47', '$2y$10$ZvLOZkwCex/WF8aeVYS5qONw5cHqMUpLSxBtn.szo7laTMpsb9i2G', 1, 1, 'CfGItqoSiX', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(86, 'Kathryne Hane', 'krystal.osinski@example.com', '2023-08-20 02:55:47', '$2y$10$5nP2xZTFyOGlH5dBqyYsxu42fVgFbBhakE/mr7mwyS3Z2IOdr4bBa', 1, 1, '4WWjAVkfL2', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(87, 'Prof. Werner Kozey Sr.', 'rsmith@example.com', '2023-08-20 02:55:47', '$2y$10$vXHZcjyxnZe9Z7ZumIjmHurwvBi79X8K9vxilIAPE92l5kuvgsKMW', 1, 1, 'E9Y4XrL5uc', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(88, 'Miss Karelle Harris V', 'pbode@example.com', '2023-08-20 02:55:47', '$2y$10$0PVyfDmz/ziNTKyBYKyn0.mO7IDiHl3jlukUdMUlVYPUhTvwSGnAe', 1, 1, 'mBLaKKu8dv', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(89, 'Tamara Pacocha', 'gboyer@example.org', '2023-08-20 02:55:47', '$2y$10$4pDqYRkIDphlNuauatoFiegfd9PxtpHHAr2lP43sq7jcU514IdCcy', 1, 1, 'iKtF70YzJw', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(90, 'Kristian Stokes Sr.', 'edietrich@example.com', '2023-08-20 02:55:47', '$2y$10$uGqG3cFUvl7qiOai8S6Y6udYBisHJuDbsRFIptCkv1klMTBiTWzdC', 1, 1, 'F9rJlQrY7N', '2023-08-20 02:55:47', '2023-08-20 02:55:47'),
(91, 'Sage Muller', 'ansel68@example.net', '2023-08-20 02:55:47', '$2y$10$Rrr0EdzsthmNk10/KhzeJujUS2/dTkLvKick1lKBUr6Z9EZVKFInu', 1, 1, '4nUPwjraJu', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(92, 'Deion Erdman', 'myundt@example.net', '2023-08-20 02:55:48', '$2y$10$q4dZVY1wetJ4FoxwbxOjLuNWYoVyAh9KwpH6TG2sn8.Haa0mqJNNm', 1, 1, 'tCyuxplui2', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(93, 'Tessie Maggio', 'tkessler@example.com', '2023-08-20 02:55:48', '$2y$10$JkfmETBXQOqBzHbUfdF.VeqK1hEhzebnrcFwvqF.TjUbHhEWNIVeO', 1, 1, 'EeSLVyZw47', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(94, 'Kristin Berge II', 'burley20@example.net', '2023-08-20 02:55:48', '$2y$10$I0LTez1VEu1oSeTSj/YXOeQbcgY2G5t6x1QnllvLgr2d9iKnTDcPm', 1, 1, 'AzKjwDRGa1', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(95, 'Mrs. Veronica Leuschke', 'finn.bogisich@example.com', '2023-08-20 02:55:48', '$2y$10$gTUuM.mjM1kFw7LTxNA1..0q5CrmqXOnivAmISzQl./BOCi.0thKa', 1, 1, 'SGxJlViyvs', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(96, 'Clara Carter', 'morar.coby@example.org', '2023-08-20 02:55:48', '$2y$10$x1vOqJ/hobnjTYfO0QfLOeAJP/PBcI7tsamIgYQZEa24ufegsu4PS', 1, 1, 'OQdFieSil3', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(97, 'Margarete Reichel', 'deckow.haleigh@example.net', '2023-08-20 02:55:48', '$2y$10$Mgd9TBGf1hgJ.Bk.wI4p6OvpR/O6u16YPg1r3xOUWtkgLfvypA3aG', 1, 1, 'aViLhipRHo', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(98, 'Mrs. Angelina Emmerich III', 'nienow.emely@example.com', '2023-08-20 02:55:48', '$2y$10$9ZcKmv67mGBm7eTG7mqFpuMT4QnLGWeIlDDkU7JIR2cLwwOQ6n/vK', 1, 1, 'oG0UwFwFgV', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(99, 'Lafayette Crooks', 'olaf.daugherty@example.net', '2023-08-20 02:55:48', '$2y$10$xN1S9O63043JK9WbQgvpc.tGOOIJKZ/yPEyX7Im7HnhfkUa5vtrJC', 1, 1, 'fv0D91M5HM', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(100, 'Pierre Koelpin', 'cole.rosalind@example.net', '2023-08-20 02:55:48', '$2y$10$t9pgD/Y1GlIDoF.RSnyuTOYUBHSGvrprhunUBMmwzERkpdTgR.2te', 1, 1, 'SiFaOdWBvx', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(101, 'Lysanne Heaney', 'maurine.bahringer@example.org', '2023-08-20 02:55:48', '$2y$10$MtJObnbQJ6ENl9rfVRK.bOKgvITc3H9JON36D1RAIIFWnlw5AeALq', 1, 1, 'ppyiOnHdGg', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(102, 'Fannie Wisoky', 'javonte28@example.com', '2023-08-20 02:55:48', '$2y$10$pHIjP0l7eyIRs1eMNdB.Q.35zSULzuKR6jYMa9GDAg0E9HkmuDkeq', 1, 1, 'ZpE1fmVtGh', '2023-08-20 02:55:48', '2023-08-20 02:55:48'),
(103, 'Norval Metz', 'alisha63@example.net', '2023-08-20 02:55:48', '$2y$10$U./y6BSJ2YEFdvovYrRV..uhyQgnahzzTI1Jlqu.BqSks3vO43Xb6', 1, 1, 'QFrVQ3Z5yU', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(104, 'Horacio Schuster', 'derrick42@example.org', '2023-08-20 02:55:49', '$2y$10$OBriL/v0ru.503GjpecdruIfrPhOkHQvSwzuIcCe7AZtF6wJ2p8km', 1, 1, 'WzMn6PjdWl', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(105, 'Margret Lubowitz', 'tod.wiza@example.com', '2023-08-20 02:55:49', '$2y$10$fZiDvOX17PCThmQ2SF8aBOtgjP.59bs79FwTnYix8MauxZy2Rdypa', 1, 1, 'czs2QBAKRb', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(106, 'Fritz Walker II', 'ottilie03@example.com', '2023-08-20 02:55:49', '$2y$10$mqmfM.crzjW0b0EQ1Ro0ye.jPp1oOMI10tA7o6J07lJl36k4fCq5O', 1, 1, 'StAIlMQzFv', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(107, 'Otto Nader', 'margie33@example.com', '2023-08-20 02:55:49', '$2y$10$FSBkjrBalljTqbxo.424XuN5iYH9ZbX/e9DSHBvqkBBKCtTQD/qJO', 1, 1, 'uhEdcSCM3Q', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(108, 'Prof. Glenda Bosco III', 'natasha.schulist@example.net', '2023-08-20 02:55:49', '$2y$10$J93JaSqv8YUxQ9U5FzRiSuiAhALSd2mXd3WFwpphwCgVEUWz7GSJ.', 1, 1, 'rPqQZrjAz8', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(109, 'Ursula Gutmann', 'rocky.bogan@example.com', '2023-08-20 02:55:49', '$2y$10$eLDgvgaxn8Fx3yD3GKwm4Ov1bFkmbUBekOJ4ClMXdYrlbjbTFngP.', 1, 1, 'YPCJwsVmXG', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(110, 'Ibrahim Brekke', 'liana94@example.org', '2023-08-20 02:55:49', '$2y$10$WYjI5YR4g86No.aP5DLXB.4.5b/S7ueMu/jVNfAtfZfQHxoUcKPV6', 1, 1, 'edZhDBpCs2', '2023-08-20 02:55:49', '2023-08-20 02:55:49'),
(111, 'Prof. Olin Parker IV', 'hazle55@example.com', '2023-08-20 02:55:49', '$2y$10$gc.7eSaPdGLPNvqH7mVYlO7XSIs8ESngQ2vzIT1.U6hISZ6r70GlO', 1, 1, 'Jzbf4lt3r0', '2023-08-20 02:55:49', '2023-08-20 02:55:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
