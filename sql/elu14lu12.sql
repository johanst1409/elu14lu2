-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 18 jun 2018 om 17:31
-- Serverversie: 5.7.21-1ubuntu1
-- PHP-versie: 7.2.4-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elu14lu12`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_developer` tinyint(1) NOT NULL,
  `is_publisher` tinyint(1) NOT NULL,
  `is_manufacturer` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `companies`
--

INSERT INTO `companies` (`id`, `name`, `url_name`, `is_developer`, `is_publisher`, `is_manufacturer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nintendo', 'nintendo', 1, 1, 1, NULL, NULL, NULL),
(2, 'Rare', 'rare', 1, 0, 0, NULL, NULL, NULL),
(3, 'HAL Laboratory', 'hal-laboratory', 1, 0, 0, NULL, NULL, NULL),
(4, 'Bethesda', 'bethesda', 1, 1, 0, NULL, NULL, NULL),
(5, 'Microsoft', 'microsoft', 1, 1, 1, NULL, NULL, NULL),
(6, 'Sony Entertainment', 'sony-entertainment', 0, 1, 1, '2018-06-18 17:11:44', '2018-06-18 17:11:44', NULL),
(7, 'From Software', 'from-software', 1, 0, 0, '2018-06-18 17:11:57', '2018-06-18 17:11:57', NULL),
(8, 'Bandai Namco', 'bandai-namco', 1, 1, 0, '2018-06-18 17:12:07', '2018-06-18 17:21:06', NULL),
(9, 'ID Software', 'id-software', 1, 1, 0, '2018-06-18 17:12:19', '2018-06-18 17:21:11', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE `games` (
  `id` int(10) UNSIGNED NOT NULL,
  `developer_id` int(10) UNSIGNED NOT NULL,
  `publisher_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `released_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`id`, `developer_id`, `publisher_id`, `name`, `url_name`, `description`, `rating`, `released_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Super Mario Bros.', 'super-mario-bros', 'lorem ipsum', 100, '1987-05-15', NULL, NULL, NULL),
(2, 1, 1, 'Super Mario Bros. 2', 'super-mario-bros-2', 'lorem ipsum', 65, '1989-04-28', NULL, NULL, NULL),
(3, 1, 1, 'Super Mario Bros. 3', 'super-mario-bros-3', 'lorem ipsum', 95, '1991-08-23', NULL, NULL, NULL),
(4, 1, 1, 'Super Mario World', 'super-mario-world', 'lorem ipsum', 100, '1992-04-11', NULL, NULL, NULL),
(5, 9, 4, 'Doom (2016)', 'doom-2016', 'There is no taking cover or stopping to regenerate health in campaign mode as you beat back Hell’s raging demon hordes. Combine your arsenal of futuristic and iconic guns, upgrades, movement and an advanced melee system to knock-down, slash, stomp, crush, and blow apart demons in creative and violent ways. In multiplayer, dominate your opponents in DOOM’s signature, fast-paced arena-style combat. In both classic and all-new game modes, annihilate your enemies utilizing your personal blend of skill, powerful weapons, vertical movement, and unique power-ups that allow you to play as a demon. DOOM SnapMap is an easy-to-use game and level editor that allows for limitless gameplay experiences on every platform. Anyone can snap together and customize maps, add pre-defined or custom gameplay, and edit game logic to create new modes. Instantly play your creation or make it available to players around the world.', 85, '2016-04-13', '2018-06-18 17:22:34', '2018-06-18 17:22:34', NULL),
(6, 7, 6, 'Bloodborne', 'bloodborne', 'Bloodborne is an action RPG in which you hunt for answers in the ancient city of Yharnam, now cursed with a strange endemic illness spreading through the streets like a disease. Peril, death and madness infest this dark world, and you\'re tasked with uncovering its darkest secrets which will be necessary for you to survive. Armed with a singular arsenal of weaponry, including guns and saw cleavers, you\'ll require wits, strategy and reflexes to dispatch the agile and intelligent enemies that guard the city\'s underbelly. You will utility holy chalices to access an array of vast underground ruins, chock full of traps, beasts, and rewards, to explore and conquer on your own or with other people.', 92, '2015-04-24', '2018-06-18 17:24:34', '2018-06-18 17:24:34', NULL),
(7, 7, 8, 'Dark Souls', 'dark-souls', 'Project Dark (Working Title) is a brand new dark fantasy RPG designed to completely embrace the concepts of tension in dungeon exploration, fear in encountering enemies, the joy of new discoveries, and a high sense of achievement in progressing. The game is set in a dark fantasy world filled with decadent atmosphere, with a heavy emphasis on player freedom in discovering various tactics and strategies to use in weapon based combat.', 89, '2011-10-04', '2018-06-18 17:25:37', '2018-06-18 17:25:37', NULL),
(8, 7, 8, 'Dark Souls II', 'dark-souls-ii', 'Dark Souls II: Scholar of the First Sin includes the 3 previously released DLC packs - Crown of the Sunken King, Crown of the Old Iron King, and Crown of the ivory King - along with additional features. All versions of the game include the following features (Existing Dark Souls II owners will receive a patch to implement these elements): Additional NPCs added for an enhanced story experience. Parameter adjustments for improved game balance. Augmented item descriptions. Improved online matchmaking functionality.', 87, '2015-05-07', '2018-06-18 17:26:23', '2018-06-18 17:28:07', NULL),
(9, 7, 8, 'Dark Souls III', 'dark-souls-iii', 'Developed by Japanese developer FromSoftware, DARK SOULS III is the latest chapter in the DARK SOULS series with its trademark sword and sorcery combat and rewarding action RPG gameplay. Players travel across a wide variety of locations in an interconnected world of unrelenting challenge and deep RPG gameplay as they search for a way to survive the coming apocalypse.', 89, '2016-04-12', '2018-06-18 17:27:13', '2018-06-18 17:27:13', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `game_genres`
--

CREATE TABLE `game_genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `game_id` int(10) UNSIGNED NOT NULL,
  `genre_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `game_genres`
--

INSERT INTO `game_genres` (`id`, `game_id`, `genre_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 9),
(6, 5, 12),
(7, 5, 21),
(8, 5, 3),
(9, 6, 9),
(10, 6, 10),
(11, 6, 11),
(12, 6, 13),
(13, 7, 9),
(14, 7, 10),
(15, 7, 22),
(16, 7, 11),
(17, 7, 13),
(18, 8, 9),
(19, 8, 10),
(20, 8, 22),
(21, 8, 11),
(22, 8, 13),
(23, 9, 9),
(24, 9, 10),
(25, 9, 11),
(26, 9, 13);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `game_platforms`
--

CREATE TABLE `game_platforms` (
  `id` int(10) UNSIGNED NOT NULL,
  `game_id` int(10) UNSIGNED NOT NULL,
  `platform_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `game_platforms`
--

INSERT INTO `game_platforms` (`id`, `game_id`, `platform_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 2),
(5, 5, 3),
(6, 5, 11),
(7, 5, 10),
(8, 5, 13),
(9, 6, 10),
(10, 7, 3),
(11, 7, 8),
(12, 7, 7),
(13, 8, 8),
(14, 8, 7),
(15, 9, 3),
(16, 9, 11),
(17, 9, 10);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `genres`
--

INSERT INTO `genres` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '(2D) Platformer', NULL, NULL),
(2, '(3D) Platformer', NULL, NULL),
(3, 'Shooter', NULL, NULL),
(4, 'Fighting', NULL, NULL),
(5, 'Beat \'em up', NULL, NULL),
(6, 'Stealth', NULL, NULL),
(7, 'Survival', NULL, NULL),
(8, 'Rhythm', NULL, NULL),
(9, 'Action', NULL, NULL),
(10, 'Adventure', NULL, NULL),
(11, 'Role Playing Game', NULL, NULL),
(12, 'First Person', NULL, NULL),
(13, 'Third Person', NULL, NULL),
(14, 'Roguelike', NULL, NULL),
(15, 'Sandbox', NULL, NULL),
(16, 'Real-time strategy', NULL, NULL),
(17, 'Multiplayer Online Battle Arena', NULL, NULL),
(18, 'Turn Based Strategy', NULL, NULL),
(19, 'Sports', NULL, NULL),
(20, 'Racing', NULL, NULL),
(21, 'Multiplayer', NULL, NULL),
(22, 'Open world', '2018-06-18 17:19:07', '2018-06-18 17:19:07');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_05_31_125253_create_games_table', 1),
(2, '2018_05_31_125327_create_platforms_table', 1),
(3, '2018_05_31_125435_create_genres_table', 1),
(4, '2018_05_31_130513_create_companies_table', 1),
(5, '2018_05_31_131211_create_pivot_tables', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `platforms`
--

CREATE TABLE `platforms` (
  `id` int(10) UNSIGNED NOT NULL,
  `manufacturer_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `released_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `platforms`
--

INSERT INTO `platforms` (`id`, `manufacturer_id`, `name`, `url_name`, `released_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Nintendo Entertainment System', 'nintendo-entertainment-system', '1987-09-01', NULL, NULL, NULL),
(2, 1, 'Super-Nintendo Entertainment System', 'super-nintendo-entertainment-system', '1992-04-11', NULL, NULL, NULL),
(3, 5, 'Personel Computer', 'personel-computer', '1987-08-12', NULL, NULL, NULL),
(4, 6, 'Playstation', 'playstation', '1995-09-29', '2018-06-18 17:14:24', '2018-06-18 17:14:24', NULL),
(5, 6, 'Playstation 2', 'playstation-2', '2000-11-04', '2018-06-18 17:14:50', '2018-06-18 17:14:50', NULL),
(6, 1, 'GameCube', 'gamecube', '2002-03-03', '2018-06-18 17:15:15', '2018-06-18 17:15:15', NULL),
(7, 6, 'Playstation 3', 'playstation-3', '2007-03-23', '2018-06-18 17:15:47', '2018-06-18 17:15:47', NULL),
(8, 5, 'Xbox 360', 'xbox-360', '2005-11-22', '2018-06-18 17:16:29', '2018-06-18 17:16:29', NULL),
(9, 1, 'Nintendo Wii', 'nintendo-wii', '2011-11-26', '2018-06-18 17:17:21', '2018-06-18 17:17:21', NULL),
(10, 6, 'Playstation 4', 'playstation-4', '2013-11-29', '2018-06-18 17:17:48', '2018-06-18 17:17:48', NULL),
(11, 5, 'Xbox One', 'xbox-one', '2013-11-22', '2018-06-18 17:18:20', '2018-06-18 17:18:20', NULL),
(12, 1, 'Wii U', 'wii-u', '2012-11-30', '2018-06-18 17:18:40', '2018-06-18 17:18:40', NULL),
(13, 1, 'Nintendo Switch', 'nintendo-switch', '2017-03-03', '2018-06-18 17:18:57', '2018-06-18 17:18:57', NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_url_name_unique` (`url_name`);

--
-- Indexen voor tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `games_url_name_unique` (`url_name`),
  ADD KEY `games_developer_id_foreign` (`developer_id`),
  ADD KEY `games_publisher_id_foreign` (`publisher_id`);

--
-- Indexen voor tabel `game_genres`
--
ALTER TABLE `game_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_genres_game_id_foreign` (`game_id`),
  ADD KEY `game_genres_genre_id_foreign` (`genre_id`);

--
-- Indexen voor tabel `game_platforms`
--
ALTER TABLE `game_platforms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_platforms_game_id_foreign` (`game_id`),
  ADD KEY `game_platforms_platform_id_foreign` (`platform_id`);

--
-- Indexen voor tabel `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `platforms_url_name_unique` (`url_name`),
  ADD KEY `platforms_manufacturer_id_foreign` (`manufacturer_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `games`
--
ALTER TABLE `games`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `game_genres`
--
ALTER TABLE `game_genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT voor een tabel `game_platforms`
--
ALTER TABLE `game_platforms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT voor een tabel `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_developer_id_foreign` FOREIGN KEY (`developer_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `games_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `companies` (`id`);

--
-- Beperkingen voor tabel `game_genres`
--
ALTER TABLE `game_genres`
  ADD CONSTRAINT `game_genres_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_genres_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Beperkingen voor tabel `game_platforms`
--
ALTER TABLE `game_platforms`
  ADD CONSTRAINT `game_platforms_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_platforms_platform_id_foreign` FOREIGN KEY (`platform_id`) REFERENCES `platforms` (`id`);

--
-- Beperkingen voor tabel `platforms`
--
ALTER TABLE `platforms`
  ADD CONSTRAINT `platforms_manufacturer_id_foreign` FOREIGN KEY (`manufacturer_id`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
