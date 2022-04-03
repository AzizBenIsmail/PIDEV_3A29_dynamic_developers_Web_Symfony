-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 12:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pidev_travel_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `objet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posts_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`id`, `client_id`, `objet`, `commentaire`, `posts_id`) VALUES
(4, 10, NULL, 'Ili yesthak ay haja hany mawjouda', 1),
(5, 2, NULL, 'excelente', 1),
(7, 2, '0', 'hhhhhhhh', 1),
(8, 2, '0', 'kkkk', 1),
(9, 2, '0', 'hhhhhhh', 1),
(10, 2, '0', 'gggggggggggggggggg', 1),
(11, 2, '0', 'oui je confirme', 8),
(12, NULL, '0', 'Very god', 9);

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220305122916', '2022-03-05 13:29:20', 126),
('DoctrineMigrations\\Version20220305123231', '2022-03-05 13:32:37', 136),
('DoctrineMigrations\\Version20220305124611', '2022-03-05 13:46:15', 393),
('DoctrineMigrations\\Version20220305125258', '2022-03-05 13:53:01', 649),
('DoctrineMigrations\\Version20220305131526', '2022-03-05 14:15:29', 133),
('DoctrineMigrations\\Version20220305164601', '2022-03-05 17:46:04', 129),
('DoctrineMigrations\\Version20220305171023', '2022-03-05 18:10:27', 55),
('DoctrineMigrations\\Version20220305171851', '2022-03-05 18:18:53', 84),
('DoctrineMigrations\\Version20220305172019', '2022-03-05 18:20:21', 55),
('DoctrineMigrations\\Version20220306132906', '2022-03-06 14:29:08', 56),
('DoctrineMigrations\\Version20220308210918', '2022-03-08 22:10:02', 256),
('DoctrineMigrations\\Version20220308231237', '2022-03-09 00:12:39', 113),
('DoctrineMigrations\\Version20220308233916', '2022-03-09 00:39:18', 38),
('DoctrineMigrations\\Version20220309102854', '2022-03-09 11:31:50', 2063),
('DoctrineMigrations\\Version20220309120621', '2022-03-09 13:06:30', 415),
('DoctrineMigrations\\Version20220309142111', '2022-03-09 15:21:16', 463),
('DoctrineMigrations\\Version20220315120949', '2022-03-15 13:09:54', 88),
('DoctrineMigrations\\Version20220315123042', '2022-03-15 13:30:46', 152);

-- --------------------------------------------------------

--
-- Table structure for table `excursion`
--

CREATE TABLE `excursion` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `nom_excursion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_excursion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type_excursion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valabilite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `excursion`
--

INSERT INTO `excursion` (`id`, `client_id`, `nom_excursion`, `description_excursion`, `date`, `type_excursion`, `lieu`, `valabilite`, `image`, `prix`) VALUES
(2, 1, 'Rondone', '5487985623', '2022-03-09', 'Culturelle', 'Ariana', 'Proposition', 'Randonnees-622898eb386fd.jpeg', 1452),
(4, 11, 'cycliste', 'fyhzrbts', '2022-03-09', 'Culturelle', 'Ariana', 'Proposition', 'Velo-6228c1ed8c932.jpeg', 65),
(5, 2, 'salem', 'fhgkhsdjkhsudhkfkdhjfhjdhfjd', '2022-03-05', 'Historique', 'Sfax', 'Proposition', 'Ski-6229baea11689.jpeg', 2),
(6, 2, 'hhhhhhhhh', 'hhhhhhhhhhhh', '2022-09-27', 'Historique', 'hhhhhhhh', 'Propositon', 'Canada-6224d03bd7678.jpeg', 2.3),
(7, 2, 'Fathalah', 'het hryrj nejelyt nhew tyhtrgt heytrft greftd t bagtylk lkjhfb hgdtgitrli ', '2022-09-27', 'Culturelle', 'Tunis', 'Propositon', 'null', 15),
(8, NULL, 'eeeee', 'eeee', '2022-09-27', 'Historique', 'eee', 'Propositon', 'Velo-6228c1ed8c932.jpeg', 15);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `description_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashtag_p` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_p` datetime NOT NULL,
  `visibilite` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `client_id`, `description_p`, `hashtag_p`, `date_p`, `visibilite`, `image_p`) VALUES
(1, 10, 'Antaliya Turkiya raho yeser thfoun berasmi nanshkom byh', 'Voyage', '2022-03-09 15:24:49', 'Public', 'Turquie-6228b8b1ce2c1.jpeg'),
(2, 2, 'Best prise', 'Restaurant', '2022-03-09 22:48:19', 'Public', 'images (1)-622920a41a1b3.jpeg'),
(4, 3, 'fffffffffffff', 'ffffffffff', '2022-04-01 16:57:25', 'hhhhhhhh', '0'),
(5, 3, 'ehfiehbfuieuifeiu', 'efiehfuieufu', '2022-04-01 17:07:00', 'public', 'Damascus-6229e2a44f4e2.jpeg'),
(6, 3, 'ehdhebhbehfbe', 'eduheuhfu', '2022-04-01 17:08:22', 'public', 'hero-bg-62280517ba154.jpeg'),
(7, 3, 'vhdbhbhebfhbejfbebfjbejfbjk', 'hello', '2022-04-01 17:19:17', 'Anonyme', 'France-6223d7c86b103.jpeg'),
(8, 3, 'c\'est un pays tres beaux ', 'Algeria Balad Malyoun CHahid', '2022-04-01 22:11:05', 'Public', 'Algeria-6223db39802e8.jpeg'),
(9, NULL, 'aytzdvez jhcbec zev;vjz vrzeb rgeb ef', 'Voyage', '2022-04-02 13:28:17', 'Anonyme', 'Assystem-au-maroc-scaled.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`id`, `post_id`, `client_id`) VALUES
(3, 1, 11),
(4, 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `reclamation`
--

CREATE TABLE `reclamation` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `objet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_de_reclamation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_reclamation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reclamation`
--

INSERT INTO `reclamation` (`id`, `client_id`, `objet`, `type_de_reclamation`, `description_reclamation`, `date`) VALUES
(4, 1, 'setdryhhhhhhhhhhhhhhhh', 'Technique', 'jjjjjjjazer ftht gt ffgh rojd hhhhhhhhhhhhhhhhhhh', '2017-01-01'),
(9, NULL, 'aaa', 'aaaaa', 'aaa', '2022-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_excursion`
--

CREATE TABLE `reservation_excursion` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `date_reservation_excursion` date DEFAULT NULL,
  `id_excursion_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_excursion`
--

INSERT INTO `reservation_excursion` (`id`, `client_id`, `date_reservation_excursion`, `id_excursion_id`, `email`, `nb`) VALUES
(11, 2, '2022-04-01', 6, 'jnjnjnjnjn', 8),
(12, NULL, '2022-04-02', 2, 'aaaaa', 7);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_restaurant`
--

CREATE TABLE `reservation_restaurant` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `date_reservation` date NOT NULL,
  `nbr_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_restaurant`
--

INSERT INTO `reservation_restaurant` (`id`, `client_id`, `restaurant_id`, `date_reservation`, `nbr_personne`) VALUES
(2, 14, 4, '2017-01-01', 4),
(3, 1, 1, '2017-01-01', 5),
(4, 1, 1, '2017-01-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_voyage`
--

CREATE TABLE `reservation_voyage` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `voyage_id` int(11) DEFAULT NULL,
  `date_reservation` date DEFAULT NULL,
  `travel_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_voyage`
--

INSERT INTO `reservation_voyage` (`id`, `client_id`, `voyage_id`, `date_reservation`, `travel_class`, `age`) VALUES
(3, 1, 3, NULL, 'Business', 12),
(5, 1, 2, NULL, 'Economy class', 12),
(7, 1, 2, NULL, 'FIRST CLASS', 15),
(8, 1, 2, NULL, 'Economy class', 15),
(9, 1, 2, NULL, 'FIRST CLASS', 15),
(10, 1, 2, NULL, 'Economy class', 15),
(12, 1, 2, NULL, 'Business', 15),
(39, 15, 6, '2022-04-02', 'Economy class', 44),
(40, 15, 6, '2022-04-02', 'FIRST CLASS', 44),
(41, 15, 6, '2022-04-02', 'Economy class', 44),
(45, 19, 2, NULL, 'Business', 15),
(46, 19, 2, NULL, 'Business', 15),
(47, 19, 28, NULL, 'FIRST CLASS', 45);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `nom_restaurant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_restaurant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_tel_restaurant` int(11) NOT NULL,
  `description_restaurant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `nom_restaurant`, `adresse_restaurant`, `num_tel_restaurant`, `description_restaurant`, `image`) VALUES
(1, 'AAAAAAAA', 'AAAA', 5698547, 'AAA', 'aymen-622951bc35ae0.jpeg'),
(2, 'Marsa Restau', 'Marsa', 65847512, 'Menu riche et servise parfait', 'notre-salle-de-restaurant-6224c973418a9.jpeg'),
(4, 'lableby', 'ghazela', 45879632, 'Menu riche et servise parfait', 'blog_2-6228772c6cb13.jpeg'),
(5, 'spa food', 'Marsa', 54789632, 'Menu riche et servise parfait', 'images (1)-6229106091abf.jpeg'),
(6, 'Jarak restau', 'lac', 14523698, 'Menu riche et servise parfait', 'images (1)-6229110312d85.jpeg'),
(8, 'hafood', 'lac', 12345678, 'tres bon', 'notre-salle-de-restaurant-6224c973418a9-62365c067f91b.jpeg'),
(9, 'spa Food', 'lac', 5698547, 'tres bon', 'null'),
(12, 'Lac 1 Restau', 'Ariana', 5698547, 'Darl njte gtrftb nhjkil njhel ndhqb naz cwdxfst tegrkil mopli kjuhnbg gtrfte ', 'images-6229e07837344.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `cin` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `activation_token` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_token` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `cin`, `user_name`, `numero`, `email`, `adresse`, `password`, `roles`, `activation_token`, `reset_token`, `image`) VALUES
(1, 13, 'Med Aziz', 21438447, 'AzizBenIsmail@esprit.tn', 'Tunisia', '$2y$13$PS61lKtJCIfgaq/9ROqoXunxDCJP.DolO3vLPzCZuyAj7fzwS0O6m', '', NULL, NULL, '123'),
(2, 0, 'Admin', 0, 'Admin@esprit.tn', 'Tunisia', '$2y$13$kFw0.X6M3xxc7r1PJXx7heVQLM5FudWMTGDCU6B4zA2WtWAch.gfO', '', NULL, NULL, '123'),
(3, 125698578, 'Fawzi', 21547896, 'Fawzi@esprit.tn', 'Tunisia', '$2y$13$g3DXDBMlgHdSeKI3bypQ5u7FKwfRu5ydvOlpMrgv.dICVcc.ZL.AO', '', NULL, NULL, '123'),
(4, 123456789, 'Med Aziz', 12365478, 'a', 'Tunisia', '$2y$13$M.L9dX6K8Jm6J940IxU1Pe6fav.Avnf1ug84eTI/OUoaA4RMAcijC', '', NULL, NULL, '123'),
(10, 98765432, 'amir', 14523687, 'travel.me.pridev@gmail.tn', 'Tunisia', '$2y$13$nuW7.YsraChZv/MmnLhuyO4vky8ocDVr9YoWLNy/E4dJtpsQUPSJG', '[]', NULL, NULL, 'about-6227f8a6af454.jpeg'),
(11, 55555555, 'Admin', 11111111, 'aziz.2707@gmail.com', 'Tunisia', '$2y$13$MW1DQHF8KiGDexpi6rRyxOmdafB0loLWFBnVsbNePnUE5KZL0ntDa', '[\"ROLE_ADMIN\"]', NULL, NULL, 'hero-bg-62280517ba154.jpeg'),
(14, 12345678, 'Shahine', 12547863, 'mohamedaziz.bail@esprit.tn', 'Tunisia', '$2y$13$A2kz6HtQOAag4tuwJasto.CCBWFlx0IGqDnP/OHHdRoGfuCsIAeeG', '[]', NULL, NULL, 'Aziz1-6228d163971ef.png'),
(15, 123456963, 'ADMIN', 99999999, 'travel.me.pridev@gmail.com', 'ChezTravelME', '$2y$13$CdlhoR7E5XhNaej18yGWVOTTZtnevPs6fNegTN8FbZgD34s4ogsaS', '[\"ROLE_ADMIN\"]', NULL, NULL, 'Admin-6229b29932dfd.jpeg'),
(19, 13020205, 'Benismail', 21438447, 'aziz.270700@gmail.com', 'Tunisia', '$2y$13$.utH1IbCQWNRsTnDQAEg6eQD7KfJ1/NmfsLh6SCA0.DPEsacMpTnS', '[]', NULL, NULL, '2-6246c29fb27dd.png');

-- --------------------------------------------------------

--
-- Table structure for table `voyage`
--

CREATE TABLE `voyage` (
  `id` int(11) NOT NULL,
  `clien_id` int(11) DEFAULT NULL,
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_voyage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree_voyage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `valabilite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `voyage`
--

INSERT INTO `voyage` (`id`, `clien_id`, `destination`, `nom_voyage`, `duree_voyage`, `date`, `valabilite`, `image`, `prix`) VALUES
(2, 1, 'CA', 'Canada', '6 Jour 7 Nuit', '2000-09-09', 'Non', 'Canada-6224d03bd7678.jpeg', 123),
(3, 1, 'JP', 'tokyo', '30 jour 31 nuit', '2000-09-09', 'Oui', 'tokyo-6223a4e0cc8e9.jpeg', 123),
(4, 2, 'QA', 'Qatar', '30 jour 31 nuit', '2000-09-09', 'Bientot disponible', 'qatar.jpeg', 4520),
(5, 2, 'TN', 'tunisie', '15 jour', '2000-09-09', 'Oui', 'tunisie-6223c4718227b.jpeg', 540),
(6, 2, 'FR', 'France', '20 jour 21 nuit', '2027-11-20', 'Oui', 'France-6223d7c86b103.jpeg', 2350),
(7, 2, 'US', 'New-york', '20 jour 21 nuit', '2000-09-09', 'Oui', '123', 15200),
(14, 3, 'QA', 'Qatar_world_Cup', '6 Jour 7 Nuit', '2000-09-09', 'Oui', 'Qatar_world_cup-6224dc610bb0a.jpeg', 3000),
(25, 2, 'UK', 'UKRANIYA', '12 jour et 15 nuit', '2000-09-09', 'non', '5EI2NTGD5BF2JHECYM2LT6L54Q.jpeg', 6520),
(27, 2, 'Marocco', 'Marroco_torisme', '12 jour', '2000-09-09', 'on', 'Assystem-au-maroc-scaled.jpeg', 2453),
(28, 2, 'Syria', 'Siriya', '15 jour', '2000-09-09', 'Non', 'Damascus-6229e2a44f4e2.jpeg', 123),
(29, 3, 'AG', 'algeria Qsantina', '12 jour', '2000-09-09', 'Non', 'bg-6224c64f68b3d.jpeg', 250),
(30, NULL, 'Turki', 'Ankara', '15 jour 16nuit', '2000-09-09', 'Non', 'Turquie-6228b8b1ce2c1.jpeg', 5600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_67F068BC19EB6921` (`client_id`),
  ADD KEY `IDX_67F068BCD5E258C5` (`posts_id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `excursion`
--
ALTER TABLE `excursion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9B08E72F19EB6921` (`client_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5A8A6C8D19EB6921` (`client_id`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_653627B84B89032C` (`post_id`),
  ADD KEY `IDX_653627B819EB6921` (`client_id`);

--
-- Indexes for table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CE60640419EB6921` (`client_id`);

--
-- Indexes for table `reservation_excursion`
--
ALTER TABLE `reservation_excursion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_814F86B019EB6921` (`client_id`),
  ADD KEY `IDX_814F86B069755C1D` (`id_excursion_id`);

--
-- Indexes for table `reservation_restaurant`
--
ALTER TABLE `reservation_restaurant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8B3FDB8B19EB6921` (`client_id`),
  ADD KEY `IDX_8B3FDB8BB1E7706E` (`restaurant_id`);

--
-- Indexes for table `reservation_voyage`
--
ALTER TABLE `reservation_voyage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_776CC0CE19EB6921` (`client_id`),
  ADD KEY `IDX_776CC0CE68C9E5AF` (`voyage_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3F9D89554B80641D` (`clien_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `excursion`
--
ALTER TABLE `excursion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservation_excursion`
--
ALTER TABLE `reservation_excursion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reservation_restaurant`
--
ALTER TABLE `reservation_restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation_voyage`
--
ALTER TABLE `reservation_voyage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `voyage`
--
ALTER TABLE `voyage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_67F068BC19EB6921` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_67F068BCD5E258C5` FOREIGN KEY (`posts_id`) REFERENCES `post` (`id`);

--
-- Constraints for table `excursion`
--
ALTER TABLE `excursion`
  ADD CONSTRAINT `FK_9B08E72F19EB6921` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_5A8A6C8D19EB6921` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `post_like`
--
ALTER TABLE `post_like`
  ADD CONSTRAINT `FK_653627B819EB6921` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_653627B84B89032C` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

--
-- Constraints for table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `FK_CE60640419EB6921` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `reservation_excursion`
--
ALTER TABLE `reservation_excursion`
  ADD CONSTRAINT `FK_814F86B019EB6921` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_814F86B069755C1D` FOREIGN KEY (`id_excursion_id`) REFERENCES `excursion` (`id`);

--
-- Constraints for table `reservation_restaurant`
--
ALTER TABLE `reservation_restaurant`
  ADD CONSTRAINT `FK_8B3FDB8B19EB6921` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_8B3FDB8BB1E7706E` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`);

--
-- Constraints for table `reservation_voyage`
--
ALTER TABLE `reservation_voyage`
  ADD CONSTRAINT `FK_776CC0CE19EB6921` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_776CC0CE68C9E5AF` FOREIGN KEY (`voyage_id`) REFERENCES `voyage` (`id`);

--
-- Constraints for table `voyage`
--
ALTER TABLE `voyage`
  ADD CONSTRAINT `FK_3F9D89554B80641D` FOREIGN KEY (`clien_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
