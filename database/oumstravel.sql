-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 juil. 2022 à 17:27
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `oumstravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_03_103854_create_vols_table', 2),
(6, '2022_07_03_140055_create_reservations_table', 3);

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
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_passager` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_passager` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe_passager` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_pieces` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_reservation` date NOT NULL,
  `categorie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_vol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_vol` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_vol` (`id_vol`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `nom_passager`, `prenom_passager`, `sexe_passager`, `num_pieces`, `date_reservation`, `categorie`, `destination`, `code_vol`, `id_vol`, `prix`, `created_at`, `updated_at`) VALUES
(1, 'dagnogo', 'Ibrahima', 'homme', '220', '2022-08-07', 'classA', 'Dakar', '700', 1, 300000, '2022-07-03 12:32:43', '2022-07-04 13:54:30'),
(2, 'Traore', 'Fanta', 'femme', 'ZZ66', '2022-08-07', 'classB', 'ISTANBUL', '700', 2, 3000000, '2022-07-04 08:31:02', '2022-07-04 08:31:02'),
(3, 'Coumare', 'Adja', 'femme', 'AA45', '2022-09-10', 'ClassA', 'France', '789', 1, 380000, '2022-07-04 08:32:19', '2022-07-04 08:32:19'),
(4, 'Djikine', 'Mamadou', 'homme', 'BB234', '2022-09-30', 'classB', 'ITALI', '780', 2, 1000000, '2022-07-04 08:33:33', '2022-07-04 08:33:33'),
(5, 'Doumbia', 'Aissata', 'femme', 'AA36', '2022-08-07', 'ClassA', 'ISTANBUL', '789', 7, 1000000, '2022-07-04 09:25:46', '2022-07-04 09:25:46'),
(7, 'daou', 'moncv', 'femme', 'AA3467', '2022-07-04', 'classB', 'Mali', 'AA60089', 4, 1000000, '2022-07-04 11:37:25', '2022-07-04 11:37:25');

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

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

DROP TABLE IF EXISTS `vols`;
CREATE TABLE IF NOT EXISTS `vols` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code_vol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_depart` date NOT NULL,
  `heure_depart` time NOT NULL,
  `destination` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_classA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_classB` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_classA` int(11) NOT NULL,
  `prix_classB` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vols`
--

INSERT INTO `vols` (`id`, `code_vol`, `date_depart`, `heure_depart`, `destination`, `nb_classA`, `nb_classB`, `prix_classA`, `prix_classB`, `created_at`, `updated_at`) VALUES
(1, '780', '2022-07-06', '08:14:24', 'Paris', '100', '80', 200000, 100000, NULL, '2022-07-03 11:16:16'),
(2, '700', '2022-08-05', '01:35:00', 'Dakar', '60', '58', 230000, 200000, '2022-07-03 11:35:44', '2022-07-03 11:35:44'),
(3, 'AA900', '2022-07-30', '18:56:00', 'DUBAI', '60', '58', 10000000, 1500000, '2022-07-04 08:57:20', '2022-07-04 08:57:20'),
(4, 'AA600', '2022-07-23', '16:57:00', 'Mali', '123', '80', 1800000, 1500000, '2022-07-04 08:58:27', '2022-07-04 08:58:27'),
(5, 'AA222', '2022-08-06', '03:59:00', 'Abidjan', '65', '40', 200000, 176000, '2022-07-04 09:00:31', '2022-07-04 09:00:31'),
(6, '700', '2022-07-29', '03:14:00', 'France', '65', '40', 380000, 325000, '2022-07-04 09:14:54', '2022-07-04 09:14:54'),
(7, '600', '2022-08-06', '08:16:00', 'DAKAR', '60', '40', 230000, 300000, '2022-07-04 09:16:27', '2022-07-04 09:16:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
