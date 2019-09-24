-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 24 sep. 2019 à 15:28
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sondage`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'nick dev', 'nickdev@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_09_16_211548_create_sondages_table', 1),
(9, '2019_09_17_142933_create_admins_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sondages`
--

DROP TABLE IF EXISTS `sondages`;
CREATE TABLE IF NOT EXISTS `sondages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enfant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flux` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `protection` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `change` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tache` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `change_complement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serviette_complement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tache_complement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `efficace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `simple` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confortable` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `securite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `achat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recommandation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `derangement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sondages`
--

INSERT INTO `sondages` (`id`, `age`, `statut`, `enfant`, `telephone`, `dure`, `flux`, `protection`, `change`, `tache`, `budget`, `change_complement`, `serviette_complement`, `tache_complement`, `efficace`, `simple`, `confortable`, `securite`, `achat`, `recommandation`, `preference`, `derangement`, `modifier`, `created_at`, `updated_at`) VALUES
(1, 'Moins de 18 ans', 'autre', '2', '344556677', '3 jours', 'leger', 'azerty', '2 fois', 'journee-jamais', 'Plus de 1000 FCFA', 'nuit- 2 fois', 'journee - 2 fois', 'journee-souvent', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'epais', 'aerztyzuzh', 'hzhhhhhh', '2019-09-17 15:13:05', '2019-09-17 15:13:05'),
(2, 'Moins de 18 ans', 'Mere au foyer', '3', '23456', '2 jours', 'leger', 'AZEERT', '4 fois', 'journee-parfois', 'Plus de 1000 FCFA', 'journee - 4 fois et plus', 'nuit- 2 fois et plus', 'journee-souvent', 'oui', 'non', 'oui', 'oui', 'non', 'oui', 'epais', 'AZERTYUIOP', 'AZERTYUIO', '2019-09-17 15:16:49', '2019-09-17 15:16:49'),
(3, 'Entre 18 et 25 ans', 'cadre', '2', '56787634', '5 jous ou plus', 'tres important', 'papier', '3 fois', 'nuit-souvent', '2000 FCFA et plus', 'journee - 3 fois', 'nuit- 2 fois et plus', 'nuit-souvent', 'oui', 'non', 'oui', 'oui', 'oui', 'oui', 'mince', 'azerty', 'azerty', '2019-09-23 17:03:13', '2019-09-23 17:03:13'),
(4, 'Plus de 25 ans', 'autre', '1', '67870433', '5 jous ou plus', 'tres important', 'Couche', '4 fois', 'nuit-souvent', 'Plus de 1000 FCFA', 'nuit- 1 fois', 'journee - 2 fois', 'nuit-parfois', 'oui', 'non', 'oui', 'non', 'oui', 'oui', 'mince', 'the best', 'do more', '2019-09-24 11:11:18', '2019-09-24 11:11:18');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
