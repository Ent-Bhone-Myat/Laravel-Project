-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 08:06 AM
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
-- Database: `moon`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
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
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Nintendo', 'Nintendo was founded in 1889 as Nintendo Koppai[c] by craftsman Fusajiro Yamauchi and originally produced handmade hanafuda playing cards.', '2024-06-04 22:52:43', '2024-06-05 22:14:03'),
(2, 'Xbox', 'Xbox is a video gaming brand that consists of five home video game consoles, as well as applications (games), streaming service Xbox Cloud Gaming, and online services such as the Xbox network and Xbox Game Pass.', '2024-06-04 22:53:50', '2024-06-04 22:53:50'),
(3, 'PS4', 'The PlayStation 4 (PS4) is a home video game console developed by Sony Computer Entertainment.', '2024-06-04 22:57:53', '2024-06-04 22:59:52'),
(4, 'PS5', 'The PlayStation 5 (PS5) is a home video game console developed by Sony Interactive Entertainment.', '2024-06-04 22:58:23', '2024-06-04 22:59:59'),
(5, 'Steam Deck', 'The Steam Deck is a handheld gaming computer developed by Valve and released on February 25, 2022.', '2024-06-04 22:58:51', '2024-06-04 22:58:51'),
(6, 'ROG Ally', 'The Asus ROG Ally is a handheld gaming computer developed and manufactured by Asus as part of their Republic of Gamers (ROG) brand.', '2024-06-04 22:59:21', '2024-06-04 22:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ent', 'ent@gmail.com', '0987654322', 'Hello I am ent', '2024-06-26 00:39:02', '2024-06-26 00:39:02'),
(5, 'Ko Ent', 'koent@gmail.com', '0912384567', 'Our commitment to quality and customer satisfaction sets us apart. Each product featured on our site undergoes rigorous selection criteria to ensure it meets our standards of excellence. From the moment you browse our intuitive categories to the swift delivery of your order, every step is designed with your convenience in mind. Become part of our growing community of satisfied customers who trust us for their online shopping needs. We value your feedback and continuously strive to exceed your expectations.\r\nExplore our latest arrivals, take advantage of exclusive offers, and discover why shopping at [Your Ecommerce Website Name] is an experience like no other.\r\nThank you for choosing [Your Ecommerce Website Name]. Happy shopping!', '2024-06-26 01:23:28', '2024-06-26 01:23:28');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '0001_01_01_000000_create_users_table', 1),
(7, '0001_01_01_000001_create_cache_table', 1),
(8, '0001_01_01_000002_create_jobs_table', 1),
(9, '2024_05_15_050248_add_two_factor_columns_to_users_table', 1),
(10, '2024_05_15_050327_create_personal_access_tokens_table', 1),
(16, '2024_05_20_053129_create_contacts_table', 1),
(18, '2024_05_20_052828_create_categories_table', 2),
(21, '2024_05_20_052947_create_products_table', 3),
(27, '2024_05_20_053110_create_orders_table', 6),
(28, '2024_05_20_053018_create_carts_table', 7),
(29, '2024_05_20_053053_create_order_details_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `order_delivered` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `total_amount`, `order_delivered`, `created_at`, `updated_at`) VALUES
(1, 'moon4855328744', 3, 894, '0', '2024-06-21 23:47:13', '2024-06-21 23:47:13'),
(2, 'moon4975034152', 4, 1068, '0', '2024-06-21 23:48:10', '2024-06-21 23:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `user_id`, `product_id`, `order_number`, `qty`, `total`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'moon4855328744', 1, 300, '2024-06-21 23:47:13', '2024-06-21 23:47:13'),
(2, 3, 2, 'moon4855328744', 1, 300, '2024-06-21 23:47:13', '2024-06-21 23:47:13'),
(3, 3, 3, 'moon4855328744', 1, 244, '2024-06-21 23:47:13', '2024-06-21 23:47:13'),
(4, 4, 4, 'moon4975034152', 1, 270, '2024-06-21 23:48:10', '2024-06-21 23:48:10'),
(5, 4, 5, 'moon4975034152', 1, 318, '2024-06-21 23:48:10', '2024-06-21 23:48:10'),
(6, 4, 7, 'moon4975034152', 1, 430, '2024-06-21 23:48:10', '2024-06-21 23:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `series` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `series`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nintendo Switch (FORTNITE)', 'V1', '- Includes a uniquely designed Nintendo Switch system with special art on the system and Nintendo Switch dock, a yellow Joy-Con (L) and blue Joy-Con (R), the Fortnite game pre-installed, 2,000 V-Bucks, and a download code for The Wildcat Bundle\r\n- The Wildcat Bundle is an in-game pack that includes cosmetic items like the Sleek Strike Back Bling and the Wildcat Outfit\r\n- 3 Play Styles: TV Mode, Tabletop Mode, Handheld Mode\r\n- 6.2-inch, multi-touch capacitive touch screen\r\n- Connects over Wi-Fi for multiplayer gaming', 300, '6665411a238denin1.png', '2024-06-08 23:13:54', '2024-06-08 23:13:54'),
(2, 1, 'Nintendo Switch (MARIO)', 'V1', '- This Nintendo Switch system takes inspiration from Mario, with a bold red design on the Nintendo Switch Console, Joy-Con controllers, and the Nintendo Switch dock.\r\n- A solid blue design is featured on both the Joy-Con grip and Joy-Con wrist straps.\r\n- As a bonus, this Nintendo Switch bundle includes a Mario red & blue Edition carrying case adorned with Super Mario iconography.', 300, '666541433148cnin2.png', '2024-06-08 23:14:35', '2024-06-08 23:14:35'),
(3, 1, 'Nintendo Switch', 'V2', '- Play your way with the Nintendo Switch gaming system. Whether you’re at home or on the go, solo or with friends, the Nintendo Switch system is designed to fit your life. Dock your Nintendo Switch to enjoy HD gaming on your TV. - Heading out? Just undock your console and keep playing in handheld mode\r\n- This model includes battery life of approximately 4.5 - 9 hours.\r\n- The battery life will depend on the games you play. For instance, the battery will last approximately 5.5 hours for The Legend of Zelda: Breath of the Wild (games sold separately)\r\n- Model number HAC 001( 01)', 244, '666541680ea3fnin3.png', '2024-06-08 23:15:12', '2024-06-08 23:15:12'),
(4, 1, 'Nintendo Switch', 'Oled', '- Vivid 7” OLED screen\r\n- Local co-op, online, and local wireless multiplayer\r\n- 64 GB internal storage (a portion of which is reserved for use by the system)\r\n- Enhanced audio in handheld and tabletop modes\r\n- Wide adjustable stand', 270, '666549f691dfenin4.png', '2024-06-08 23:18:05', '2024-06-08 23:51:42'),
(5, 1, 'Nintendo Switch (Scarlet & Violet)', 'Oled', '- On the surface of the glossy white dock, the Legendary Pokémon Koraidon and Miraidon are displayed in their respective version colors. The bottom-left side of the back of the dock has a Poké Ball motif.\r\n- A special illustration featuring the three Pokémon that you can choose as your first partner in the games, Sprigatito, Fuecoco, and Quaxly, adorns the back of the system alongside symbols that appear throughout the games.\r\n- The included Joy-Con controllers have the main colors of Pokémon Scarlet and Pokémon Violet and are decorated with the respective crests of the schools from the games, Naranja Academy and Uva Academy.\r\n- Pokémon Scarlet and Pokémon Violet games sold separately.', 318, '6665425a3d203nin5.png', '2024-06-08 23:19:14', '2024-06-08 23:19:14'),
(6, 2, 'Xbox', '360', '- Sleek New Design\r\n- 4GB internal memory.Built-in Wi-Fi\r\n- Whisper Quiet\r\n- Part Number: XBX4GBCNTRBUN\r\n- This item is non returnable.', 160, '666548b5684fdx3.png', '2024-06-08 23:46:21', '2024-06-08 23:46:21'),
(7, 2, 'Xbox', 'X', '- XBOX SERIES X: The fastest, most powerful Xbox ever. Explore rich new worlds with 12 teraflops of raw graphic processing power, DirectX ray tracing, a custom SSD, and 4K gaming.\r\n- FASTER LOAD TIMES: Make the most of every gaming minute with Quick Resume, lightning-fast load times, and gameplay of up to 120 FPS – all powered by Xbox Velocity Architecture.\r\n- IN THE BOX: Xbox Series X console, one Xbox Wireless Controller, an ultra high-speed HDMI cable, power cable, and 2 AA batteries.\r\n- SURROUND SOUND: Enhance gameplay with both full-spectrum visuals and immersive audio with Dolby Vision and Dolby Atmos', 430, '666548f7448c7x1.png', '2024-06-08 23:47:27', '2024-06-08 23:47:27'),
(8, 2, 'Xbox', 'S', '- Go all digital with Xbox Series S and experience next-gen speed and performance at a great price.\r\n- Bundle includes: Xbox Series S console, one Xbox Wireless Controller, a high-speed HDMI cable, power cable, and 2 AA batteries.\r\n- Make the most of every gaming minute with Quick Resume, lightning-fast load times, and gameplay of up to 120 FPS—all powered by Xbox Velocity Architecture.\r\n- Access and stream your favorite entertainment in 4K through apps like, Netflix, Disney+, Amazon and more.\r\n- Add Xbox Game Pass Ultimate (membership sold separately) to play new games on day one. Plus, enjoy hundreds of high-quality games like Minecraft, Forza Horizon 5, and Halo Infinite with friends on console, PC, and cloud.', 300, '666549115eae6x2.png', '2024-06-08 23:47:53', '2024-06-08 23:47:53'),
(9, 3, 'PlayStation 4', 'Original', '- \"Suspend mode\" eliminates the load time on your saved game and allows you to immediately return to where you left off by pressing the power button.\r\n- Enables the greatest game developers in the world to unlock their creativity and push the boundaries of play through a platform that is tuned specifically to their needs.\r\n- Engage in endless personal challenges between you and your community, and share your epic moments for the world to see.\r\n- Gamers can share their epic triumphs by hitting the \"SHARE button\" on the controller, scan through the last few minutes of gameplay, tag it and return to the game.\r\n- With PS Vita, gamers will be able to seamlessly play PS4 games on the beautiful 5-inch display over Wi-Fi in a local environment', 143, '666551f4f0bc6p1.png', '2024-06-09 00:12:47', '2024-06-09 00:25:48'),
(10, 3, 'PlayStation 4', 'Slim', '- Incredible games; Endless entertainment\r\n- All new lighter slimmer PS4\r\n- 1TB hard drive\r\n- All the greatest, games, TV, music and more', 330, '66654f1d9d57bp2.png', '2024-06-09 00:13:41', '2024-06-09 00:13:41'),
(11, 3, 'PlayStation 4', 'Pro', '- Heighten your experiences. Enrich your adventures. Let the super charged PS4 Pro lead the way\r\n- 4K TV Gaming : PS4 Pro outputs gameplay to your 4K TV\r\n- More HD Power: Turn on Boost Mode to give PS4 games access to the increased power of PS4 Pro\r\n- HDR Technology : With an HDR TV, compatible PS4 games display an unbelievably vibrant and life like range of colors', 230, '66654f33cfca5p3.png', '2024-06-09 00:14:03', '2024-06-09 00:14:03'),
(12, 4, 'PlayStation 5', 'Original', '- Stunning Games - Marvel at incredible graphics and experience new PS5 features.\r\n- Breathtaking Immersion - Discover a deeper gaming experience with support for haptic feedback, adaptive triggers, and 3D Audio technology.\r\n- Lightning Speed - Harness the power of a custom CPU, GPU, and SSD with Integrated I/O that rewrite the rules of what a PlayStation console can do.\r\n- Model Number CFI-1102A', 539, '66654f53f3bcas1.png', '2024-06-09 00:14:36', '2024-06-09 00:14:36'),
(13, 4, 'PlayStation 5', 'Degital', '- Model Number CFI-1215B01X\r\n- Stunning Games - Marvel at incredible graphics and experience new PS5 features.\r\n- Breathtaking Immersion - Discover a deeper gaming experience with support for haptic feedback, adaptive triggers, and 3D Audio technology.\r\n- Lightning Speed - Harness the power of a custom CPU, GPU, and SSD with Integrated I/O that rewrite the rules of what a PlayStation console can do.', 480, '66654f75a7a0fs2.png', '2024-06-09 00:15:09', '2024-06-09 00:15:09'),
(14, 6, 'ROG Ally', '-', '- Amazing graphics: AMD Radeon RDNA3 graphics (4GB VRAM, 12 compute units)\r\n- Ample storage: A 512GB NVMe PCIe 4 M.2 SSD gives you room to store your favorite games and keep load times snappy. Easily upgrade and replace with another M.2 2230 SSD with a single pop-open screw. Insert a UHS-II MicroSD card into the built-in slot for even more storage and playing options\r\n- Stunningly beautiful visuals: No tearing, no stuttering, and games are crisp and clear on the ROG Ally\'s 7-inch 1080p, full HD touchscreen display with a smooth 120hz refresh rate and AMD FreeSync premium.\r\n- Blazing fast memory: Swap through your applications and have multiple tabs running with 16GB LPDDR5 6400 RAM.', 650, '66654f9b7c4c2rog1.png', '2024-06-09 00:15:47', '2024-06-09 00:15:47'),
(15, 5, 'STEAM DECK', '-', '- 256GB NVMe SSD\r\n- 1280 x 800 LCD display\r\n- 7\" Diagonal display size\r\n- up to 60Hz refresh rate\r\n- 40Whr battery; 2-8 hours of gameplay (content-dependent)\r\n- 45W Power supply with 1.5m cable\r\n- Carrying case', 420, '66654fc0d0b81sd1.png', '2024-06-09 00:16:24', '2024-06-09 00:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9frjwZYvEnggG06aSin51WioSZqFe0Fgg7HiFi5x', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia00wYzlDbnlNMEt3eFFZNXlLSk1OaXRlUlkyR05VNFRsWkdhTENvQSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG9wLzEiO319', 1719471781),
('ISFvImjegpOVSuzywHS05Cdxbrn0MnxG6HbzQ7cq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiR0FqQjJzM0FwUDNORlVvdWhGQ25IeTM5VFhRd1dENkxWa1lwem1WayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9jb250YWN0L2RldGFpbC81Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiQ4RzRsS1dpRzJQOFRPUXNDQVZubFNPSjVrNU9MSFZkZHVGaTlsWGo5c09QejhnUXptT2JidSI7fQ==', 1719388648);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `age`, `gender`, `image`, `email`, `email_verified_at`, `phone`, `address`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Ent Bhone Myat', 'admin', 21, 'male', '665565b720334admin1.jpg', 'ent@gmail.com', NULL, '09555666888', 'Mawlamyine', '$2y$12$8G4lKWiG2P8TOQsCAVnlSOJ5k5OLHVdduFi9lXj9sOPz8gQzmObbu', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-21 23:47:38', '2024-05-27 23:39:16'),
(3, 'Ko Ent', 'user', 18, 'male', '66790712eab6amale1.jpg', 'koent@gmail.com', NULL, '09876543211', 'Yangon', '$2y$12$7I6/mbv9wr5TGDNH92wLOuy43Pge8/RXU8ZhHbFHfHI9BOWy.jO2i', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-22 00:15:37', '2024-06-23 23:32:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
