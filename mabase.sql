-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 oct. 2022 à 14:54
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spcom_nguessan`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_com` int(11) NOT NULL,
  `avis` varchar(100) NOT NULL,
  `idpub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_com`, `avis`, `idpub`) VALUES
(2, 'jolie', 22),
(3, 'miamiam', 22),
(4, 'tout cuit', 22),
(5, 'bonne pizza', 55),
(6, 'vilain', 106);

-- --------------------------------------------------------

--
-- Structure de la table `nime`
--

CREATE TABLE `nime` (
  `idpub` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `type_plat` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  `date` timestamp(4) NOT NULL DEFAULT current_timestamp(4) ON UPDATE current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `nime`
--

INSERT INTO `nime` (`idpub`, `title`, `type_plat`, `picture`, `comment`, `likes`, `dislikes`, `date`) VALUES
(16, 'ok', 'Recette', ' desk/images (4).jpg', 'bon pour l\'homme.', 1, 2, '2022-10-04 08:00:29.0390'),
(17, 'fritte', 'Restaurant', ' desk/images (1).jpg', 'bon', 1, 2, '2022-10-11 15:02:18.8384'),
(18, 'champignon', 'Recette', ' desk/197989864_1897192870437435_7626181249888862368_n.jpg', 'good', 5, 1, '2022-10-04 09:53:24.7763'),
(22, 'champigon', 'Recette', ' desk/197989864_1897192870437435_7626181249888862368_n.jpg', 'Les champignons sont des eucaryotes pluricellulaires ou unicellulaires. ', 1, 2, '2022-10-06 04:15:46.0109'),
(23, 'tamaro', 'Conseil', ' desk/Nourriture déshydratée  Quels avantages - Devenir survialiste.jpg', 'le tamaro est bon', 1, 1, '2022-09-23 06:41:14.6136'),
(24, 'hamberger', 'Fastfood', ' desk/Quelques astuces de publicitaires pour tricher avec la nourriture.jpg', 'made in usa.', 4, 1, '2022-10-11 21:23:02.9961'),
(25, 'croissant', 'Recette', ' desk/Wallpapers Nourriture Francaise - MaximumWall.jpg', 'bon à manger.', 1, 1, '2022-09-23 06:40:12.5410'),
(26, 'champignon', 'Recette', ' desk/217818303_1924952384328150_5449553867666489076_n.jpg', 'champignon', 2, 2, '2022-09-29 09:31:13.7395'),
(27, 'SALADE', 'Restaurant', ' desk/157145217_1820015194821870_7000969657538869637_n.jpg', ' BONNE  SALADE ', 2, 2, '2022-09-29 09:31:42.3792'),
(28, 'poissons', 'Fastfood', ' desk/Le poisson surfe sur les tendances de la nourriture saine.jpg', 'bon hein', 1, 2, '2022-10-07 13:12:38.6127'),
(29, 'crevette', 'Conseil', ' desk/Bon appétit _Nourriture - Crevettes - Citrons - Wallpaper - Free - Le.jpg', 'crevette rouge dans une assiette.', 1, 2, '2022-09-29 00:43:29.8978'),
(30, 'poissons', 'Conseil', ' desk/J’ai mangé de la nourriture pour animaux - URBANIA.jpg', 'cool', 3, 3, '2022-10-05 09:14:25.3867'),
(31, 'foutou', 'Conseil', ' desk/télécharger (3).jpg', 'du bon foutou avec de la sauce graine.', 1, 1, '2022-09-23 06:39:20.3828'),
(32, 'po', 'Conseil', ' desk/OIP (1).jpg', 'cool', 1, 1, '2022-09-23 06:39:12.5733'),
(33, 'nourriture', 'Conseil', ' desk/J’ai mangé de la nourriture pour animaux - URBANIA_.jpg', 'bonne pour la santé de tout un chacun.', 1, 1, '2022-09-23 06:39:06.4620'),
(34, 'nourriture', 'Conseil', ' desk/J’ai mangé de la nourriture pour animaux - URBANIA.jpg', 'salade de fruit de mer.', 9, 3, '2022-09-23 06:16:53.3459'),
(35, 'jo', 'Conseil', ' desk/OIP.jpg', 'manger est bon pour la santé.\r\n', 7, 8, '2022-09-23 06:38:04.3518'),
(36, 'ok', 'Recette', ' desk/Bon appétit - Nourriture - Crevettes - Citrons - Wallpaper - Free.jpg', 'bon cool tranquille ', 18, 9, '2022-10-04 16:34:22.7135'),
(38, 'pizza', 'Retour d\'experience', ' desk/images.jpg', 'pizza italienne bonne et cool', 1, 1, '2022-09-29 18:32:51.5690'),
(39, 'nourriture', 'Restaurant', ' desk/images (2).jpg', 'nourriture très bonne, qui abon gout te qui est plein de vitamine .', 1, 2, '2022-09-28 22:09:09.0201'),
(40, 'plat', 'Fastfood', ' desk/télécharger.jpg', 'plusieurs ^plats dans notre restaurant de qualité, saint.\r\n\r\n', 0, 1, '2022-09-28 09:00:34.1969'),
(41, 'croissant', 'Restaurant', ' desk/Wallpapers Nourriture Francaise - MaximumWall.jpg', 'vitamine bon en saveur .', 5, 6, '2022-10-04 07:40:27.6938'),
(45, 'riz', 'Retour d\'experience', ' desk/images (4).jpg', 'le riz au gras est une spécialité de nos mère africaine .', 0, 2, '2022-10-04 12:47:36.7389'),
(46, 'fruits et légume', 'Retour d\'experience', ' desk/Nourriture - Page 29.jpg', 'manger 5 fruits et légume par jours.', 1, 1, '2022-10-12 09:33:57.1803'),
(55, 'pizza', 'Conseils', ' desk/images.jpg', 'la pizza est d\'origine italienne', 1, 1, '2022-10-11 14:02:14.6416'),
(91, 'bon plat', 'Conseil', ' desk/télécharger (4).jpg', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 08:55:53.3460'),
(92, 'bon plat', 'Conseil', ' desk/images (2).jpg', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 08:56:03.2943'),
(93, 'bon plat', 'Conseil', ' desk/images (2).jpg', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 08:56:17.0323'),
(94, 'bon plat', 'Conseil', ' desk/OIP (1).jpg', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 08:56:26.6071'),
(95, 'bon plat', 'Conseil', ' desk/OIP (3).jpg', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 08:56:38.9845'),
(96, 'choucouya', 'Conseil', ' desk/Le-choukouya-de-tripes-boeuf-ou-mouton.jpg', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 08:57:04.6902'),
(97, 'tomate', 'Conseil', ' desk/Nourriture épicée avantages et inconvénients.jpg', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 08:57:48.2966'),
(98, 'copè', 'Retour d\'experience', ' desk/images (6).jpg', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 08:58:15.4521'),
(99, 'riz au gras', 'Retour d\'experience', ' desk/images (5).jpg', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 08:58:45.4416'),
(100, 'pain', 'Retour d\'experience', ' desk/Bon appétit - Nourriture - Pain - Viennoiseries - Wallpaper - Free.jpg', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 08:59:32.3656'),
(101, 'pain', 'Retour d\'experience', ' desk/images (3).jpg', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 08:59:48.7454'),
(102, 'pain', 'Retour d\'experience', ' desk/Capture d’écran 2022-07-17 125504.png', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 09:01:01.1480'),
(103, 'soupe', 'Retour d\'experience', ' desk/images (7).jpg', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 09:01:20.9843'),
(104, 'reves', 'Retour d\'experience', ' desk/Rêve de Nourriture - La Voix des Rêves.jpg', 'les délices d\'Abidjan. ', 0, 0, '2022-10-14 09:01:40.0426'),
(105, 'nourriture', 'Conseil', ' desk/Bon appétit - Nourriture - Crevettes - Citrons - Wallpaper - Free.jpg', 'bon', 0, 0, '2022-10-14 10:11:24.7371'),
(106, 'nourriture', 'Conseil', ' desk/Bon appétit - Nourriture - Crevettes - Citrons - Wallpaper - Free.jpg', 'bon', 0, 0, '2022-10-14 10:11:29.6461'),
(107, 'nourriture', 'Conseil', ' desk/Bon appétit - Nourriture - Crevettes - Citrons - Wallpaper - Free.jpg', 'bon', 0, 0, '2022-10-14 10:11:31.8084'),
(108, 'nourriture', 'Conseil', ' desk/Bon appétit - Nourriture - Crevettes - Citrons - Wallpaper - Free.jpg', 'bon', 0, 0, '2022-10-14 10:11:35.7056'),
(109, 'nourriture', 'Conseil', ' desk/Bon appétit - Nourriture - Crevettes - Citrons - Wallpaper - Free.jpg', 'bon', 0, 0, '2022-10-14 10:11:38.3573');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `nime` (`idpub`);

--
-- Index pour la table `nime`
--
ALTER TABLE `nime`
  ADD PRIMARY KEY (`idpub`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `nime`
--
ALTER TABLE `nime`
  MODIFY `idpub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `nime` FOREIGN KEY (`idpub`) REFERENCES `nime` (`idpub`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
