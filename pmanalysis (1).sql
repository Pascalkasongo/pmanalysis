-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 août 2024 à 18:38
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pmanalysis`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom_client` varchar(255) NOT NULL,
  `prenom_client` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom_client`, `prenom_client`, `adresse`, `telephone`) VALUES
(2, 'Joel kasongo', 'joel', 'la vallee', '0987654321'),
(4, 'nkulu', 'paul', 'bel air', '0987654323'),
(6, 'ilunga', 'dammy', 'la vallee', '0987654323'),
(7, 'Ilunga', 'pascal', 'ruashi,lubumbashi ville', '0987654321'),
(8, 'kayembe', 'danny', 'ruashi,lubumbashi ville', '0987654321'),
(9, 'kalonda', 'geatry', 'ruashi,lubumbashi ville', '098765432'),
(10, 'kayembe', 'dammy', 'ruashi,lubumbashi ville', '0987654321'),
(14, 'KABONGO', 'Carl', '2243, AV Teimba', '0998765432');

-- --------------------------------------------------------

--
-- Structure de la table `competance`
--

CREATE TABLE `competance` (
  `id` int(11) NOT NULL,
  `nom_competance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240810025102', '2024-08-13 06:28:04', 5170),
('DoctrineMigrations\\Version20240810025919', '2024-08-13 06:28:10', 11),
('DoctrineMigrations\\Version20240810030129', '2024-08-13 06:28:10', 62),
('DoctrineMigrations\\Version20240810063951', '2024-08-13 06:28:10', 110),
('DoctrineMigrations\\Version20240811195107', '2024-08-13 06:28:10', 68),
('DoctrineMigrations\\Version20240811201053', '2024-08-13 06:28:10', 144),
('DoctrineMigrations\\Version20240813044901', '2024-08-13 06:49:09', 209),
('DoctrineMigrations\\Version20240813051645', '2024-08-13 07:16:54', 222),
('DoctrineMigrations\\Version20240815104834', '2024-08-15 12:48:47', 4406),
('DoctrineMigrations\\Version20240815194004', '2024-08-15 21:40:19', 3729),
('DoctrineMigrations\\Version20240815194604', '2024-08-15 22:01:59', 159),
('DoctrineMigrations\\Version20240815201903', '2024-08-15 22:19:08', 152),
('DoctrineMigrations\\Version20240815202606', '2024-08-15 22:26:14', 72),
('DoctrineMigrations\\Version20240816081539', '2024-08-16 10:15:53', 3894),
('DoctrineMigrations\\Version20240816082547', '2024-08-16 10:25:56', 183),
('DoctrineMigrations\\Version20240816093633', '2024-08-16 11:36:42', 45),
('DoctrineMigrations\\Version20240816135223', '2024-08-16 15:52:31', 385),
('DoctrineMigrations\\Version20240820052610', '2024-08-20 07:27:01', 136);

-- --------------------------------------------------------

--
-- Structure de la table `domaine`
--

CREATE TABLE `domaine` (
  `id` int(11) NOT NULL,
  `nom_domaine` varchar(255) NOT NULL,
  `type_domaine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `domaine`
--

INSERT INTO `domaine` (`id`, `nom_domaine`, `type_domaine`) VALUES
(1, 'INFOGRAPHIE', 'INFORMATIQUE'),
(2, 'Reseaux', 'Reseaux'),
(3, 'Construction', 'Construction'),
(4, 'Peinture', 'Construction');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `fonction_id` int(11) DEFAULT NULL,
  `nom_employe` varchar(255) NOT NULL,
  `prenom_employe` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `fonction_id`, `nom_employe`, `prenom_employe`, `adresse`, `telephone`) VALUES
(5, 1, 'mbayo', 'kabulo', 'kimpe', '0987654345'),
(11, 1, 'kabamba Kabamba', 'william', 'ruashi lubumbashi ville', '0987654321'),
(12, 2, 'ilunga', 'Ngoie', 'bel air', '0987654321'),
(13, 4, 'KASONGO', 'Donald', '2242; AV MUMBA', '0995643452');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id` int(11) NOT NULL,
  `chef_id` int(11) DEFAULT NULL,
  `nom_equipe` varchar(255) NOT NULL,
  `nombre` int(11) NOT NULL,
  `membre` longtext DEFAULT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `chef_id`, `nom_equipe`, `nombre`, `membre`) VALUES
(1, 5, 'Design RX', 5, 'N;'),
(2, 5, 'Construction team', 6, 'N;'),
(3, 12, 'Construction team', 4, 'N;'),
(4, 13, 'Peintres', 6, 'N;');

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `id` int(11) NOT NULL,
  `nom_etat` varchar(255) NOT NULL,
  `type_etat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etat`
--

INSERT INTO `etat` (`id`, `nom_etat`, `type_etat`) VALUES
(1, 'Programmer', 'Programmer'),
(2, 'Encours', 'Encours'),
(3, 'Bloquer', 'Bloquer'),
(4, 'Terminer', 'Terminer');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id` int(11) NOT NULL,
  `projet_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `montant` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`id`, `projet_id`, `date`, `montant`) VALUES
(1, 4, '2024-08-16 00:00:00', 60),
(2, 5, '2024-08-16 00:00:00', 6000),
(3, 7, '2024-08-29 00:00:00', 4800);

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`id`, `name`) VALUES
(1, 'Directeur'),
(2, 'HR Manager'),
(3, 'Directeur'),
(4, 'Chef d\'équipe');

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `titre` varchar(255) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id`, `description`, `titre`, `client_id`, `is_read`) VALUES
(1, 'developpement d\'un systeme de gestion Automobile', '', NULL, 0),
(2, 'construction d\'une maison en etage', 'Construction maison', 2, 0),
(3, 'mise en place d\'un systeme de gestion de projet', 'projet application mobile', 2, 0),
(4, 'mise en place d\'un systeme de gestion de projet', 'projet application mobile', 2, 0),
(5, 'construcion d\'un pond:reabilitation', 'Construction d\'un pond', 2, 0),
(6, 'construction d\'un batiment dde 140 pieces  à lubumbashi', 'Constuction immeuble', 2, 0),
(7, 'Construction de toutes les fenêtres du bâtiment INPP', 'CONSTRUCTION DES FENETRES', 14, 0),
(8, 'Construction d\'une fondation d\'un batiment', 'Construction d\'une fondation', 14, 0);

-- --------------------------------------------------------

--
-- Structure de la table `priorite`
--

CREATE TABLE `priorite` (
  `id` int(11) NOT NULL,
  `nom_priorite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `priorite`
--

INSERT INTO `priorite` (`id`, `nom_priorite`) VALUES
(1, 'Haute'),
(2, 'Basse'),
(3, 'Moyenne');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `domaine_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_from` datetime NOT NULL,
  `date_up` datetime NOT NULL,
  `cout` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `domaine_id`, `client_id`, `nom`, `description`, `date_from`, `date_up`, `cout`) VALUES
(1, 1, 2, 'Developpement application web', 'mettre en place une maison d\'habillement', '2024-08-16 00:00:00', '2024-08-10 00:00:00', 900),
(2, 1, 4, 'developpemment mobile', 'mettre en place une maison d\'habillement', '2024-08-16 00:00:00', '2024-08-30 00:00:00', 850),
(4, 2, 10, 'implementation d\'un reseaux local', 'mise en place d\'un reseaux local pour la communication dans une ecole', '2024-08-16 00:00:00', '2024-08-23 00:00:00', 200),
(5, 3, 2, 'Construction', 'reabilitation du pond 1500T', '2024-08-17 00:00:00', '2024-09-20 00:00:00', 9000),
(6, 3, 2, 'Construction d\'une maison de 3 chambres à coucher', 'Construction en matériaux durable avec douche et toilette interne', '2024-08-29 00:00:00', '2024-09-13 00:00:00', 15000),
(7, 3, 14, 'Construction des fenetres', 'construction des fenetres du batiment INPP', '2024-08-29 00:00:00', '2024-09-29 00:00:00', 150000),
(8, 3, 14, 'Construction d\'une fondation', 'Construction d\'une fondation de batiment', '2024-08-29 00:00:00', '2024-08-31 00:00:00', 9000);

-- --------------------------------------------------------

--
-- Structure de la table `projet_client`
--

CREATE TABLE `projet_client` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

CREATE TABLE `ressource` (
  `id` int(11) NOT NULL,
  `nom_ressource` varchar(255) NOT NULL,
  `qty_ressource` int(11) NOT NULL,
  `cout_ressource` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ressource`
--

INSERT INTO `ressource` (`id`, `nom_ressource`, `qty_ressource`, `cout_ressource`) VALUES
(1, 'Briques', 500, 2500),
(2, 'moellons', 3, 3000),
(3, 'Cornière', 1500, 50),
(4, 'Boites de peinture jaune', 6, 50),
(5, 'Boite de peinture noire', 10, 50);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `secure`
--

CREATE TABLE `secure` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE `tache` (
  `id` int(11) NOT NULL,
  `projet_id` int(11) DEFAULT NULL,
  `priorite_id` int(11) DEFAULT NULL,
  `etat_id` int(11) DEFAULT NULL,
  `equipe_id` int(11) DEFAULT NULL,
  `nom_tache` varchar(255) NOT NULL,
  `date_from` datetime NOT NULL,
  `date_up` datetime NOT NULL,
  `nombre_heure` int(11) NOT NULL,
  `cout_horaire` int(11) NOT NULL,
  `ressource_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`id`, `projet_id`, `priorite_id`, `etat_id`, `equipe_id`, `nom_tache`, `date_from`, `date_up`, `nombre_heure`, `cout_horaire`, `ressource_id`) VALUES
(1, NULL, NULL, NULL, NULL, 'Modelisation', '2024-08-15 00:00:00', '2024-08-10 00:00:00', 4, 5, NULL),
(2, 4, NULL, NULL, 1, 'sertir cable', '2024-08-16 00:00:00', '2024-08-16 00:00:00', 6, 10, NULL),
(3, 5, 1, 3, 2, 'fondation', '2024-08-17 00:00:00', '2024-08-21 00:00:00', 32, 150, 2),
(4, 5, 1, 3, 2, 'elevation mur', '2024-08-21 00:00:00', '2024-08-27 00:00:00', 40, 30, 1),
(5, 6, 1, 2, 2, 'Construction de la fondation', '2024-08-29 00:00:00', '2024-08-29 00:00:00', 6, 20, 2),
(6, 7, 1, 1, 2, 'Soudure des fenetres', '2024-08-29 00:00:00', '2024-09-28 00:00:00', 240, 20, 3),
(7, 8, 1, 1, 2, 'CONSTRUCTION DE LA FONDATION', '2024-08-29 00:00:00', '2024-08-31 00:00:00', 16, 20, 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `roles`, `password`, `disc`) VALUES
(2, 'pascalkasongo@gmail.com', '[]', '$2y$13$ftnujd/d0hK1K02rUmqDDuuyCHzogWxdLD3HkMWXGt9NHmedx9v1O', 'client'),
(4, 'pascalkasongo720@gmail.com', '[]', '$2y$13$TQ2OKuVYycfcrITYInFdwuYUC9YCfdv/hhk/aSI8bG6BOpwnqdsxa', 'client'),
(5, 'christian@company.org', '[\"ROLE_ADMIN\"]', '$2y$13$f01esuFMQdoNytqK90HVyOMirGDOdSo1XvaHFFnH2AD./CmszczKa', 'employe'),
(6, 'pascal@company.com', '[]', '$2y$13$5bvbGK7gaNAEePgKug0r6OE90cCiARsaG6pVfqjTquuPE.NCwJVp2', 'client'),
(7, 'kasongo@gmail.com', '[]', '$2y$13$WU.VK45gufi3KjCj6TOcZO0JZ.smdbxQUZJSQVsiCMnc9svNw94s6', 'client'),
(8, 'danny@company.com', '[]', '$2y$13$R5u9EqogvbALpUe0Z4Z70.YjZ.gAAvHa0nUZp1oTim.tB9IdcggP.', 'client'),
(9, 'geatry@company.com', '[]', '$2y$13$CP8lL2T1TGAXM4EvQvmGxeKRMjffjHpCJAy/TPfaQHeeS/K1yFdq6', 'client'),
(10, 'danny@gmail.com', '[]', '$2y$13$SfUDA6vX5O7ig1vNrppdZO4eUpo/5r79j0lA.s4I0QdEFfWN7KKWa', 'client'),
(11, 'william@company.org', '[\"ROLE_DIRECTEUR\"]', '$2y$13$vhNxilmAAZDWw7ebBwUBOunBcbq1Fvfr.Vvp3bobkbJ51bSgjoR4i', 'employe'),
(12, 'ngoie@pmanalysis.org', '[\"ROLE_CHEF_PROJET\"]', '$2y$13$8lD17sP1bdrriyqNJ/X5Z.U1W7Sum.LpFeiP.O.YnY5yU9C8poHXu', 'employe'),
(13, 'donald@pmanalysis.org', '[\"ROLE_CHEF\"]', '$2y$13$Na03NBa3M7.gdLlfGLB2Q.rUsSeErVzTnT5WghhxfaCkYADDlTIEe', 'employe'),
(14, 'kabongo@gmail.com', '[]', '$2y$13$ViQcMkNuHMJfgLdDCQG65O4.1aNbm1dJOjeYDs7MwC9PKfhk13OuW', 'client');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competance`
--
ALTER TABLE `competance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `domaine`
--
ALTER TABLE `domaine`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F804D3B957889920` (`fonction_id`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2449BA15150A48F1` (`chef_id`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FE866410C18272` (`projet_id`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BF5476CA19EB6921` (`client_id`);

--
-- Index pour la table `priorite`
--
ALTER TABLE `priorite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_50159CA94272FC9F` (`domaine_id`),
  ADD KEY `IDX_50159CA919EB6921` (`client_id`);

--
-- Index pour la table `projet_client`
--
ALTER TABLE `projet_client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `secure`
--
ALTER TABLE `secure`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_36DE5A04E7927C74` (`email`);

--
-- Index pour la table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_93872075C18272` (`projet_id`),
  ADD KEY `IDX_9387207553B4F1DE` (`priorite_id`),
  ADD KEY `IDX_93872075D5E86FF` (`etat_id`),
  ADD KEY `IDX_938720756D861B89` (`equipe_id`),
  ADD KEY `IDX_93872075FC6CD52A` (`ressource_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competance`
--
ALTER TABLE `competance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `domaine`
--
ALTER TABLE `domaine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `etat`
--
ALTER TABLE `etat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `priorite`
--
ALTER TABLE `priorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `projet_client`
--
ALTER TABLE `projet_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ressource`
--
ALTER TABLE `ressource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `secure`
--
ALTER TABLE `secure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tache`
--
ALTER TABLE `tache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_C7440455BF396750` FOREIGN KEY (`id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `FK_F804D3B957889920` FOREIGN KEY (`fonction_id`) REFERENCES `fonction` (`id`),
  ADD CONSTRAINT `FK_F804D3B9BF396750` FOREIGN KEY (`id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `FK_2449BA15150A48F1` FOREIGN KEY (`chef_id`) REFERENCES `employe` (`id`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `FK_FE866410C18272` FOREIGN KEY (`projet_id`) REFERENCES `projet` (`id`);

--
-- Contraintes pour la table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `FK_BF5476CA19EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_50159CA919EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_50159CA94272FC9F` FOREIGN KEY (`domaine_id`) REFERENCES `domaine` (`id`);

--
-- Contraintes pour la table `tache`
--
ALTER TABLE `tache`
  ADD CONSTRAINT `FK_9387207553B4F1DE` FOREIGN KEY (`priorite_id`) REFERENCES `priorite` (`id`),
  ADD CONSTRAINT `FK_938720756D861B89` FOREIGN KEY (`equipe_id`) REFERENCES `equipe` (`id`),
  ADD CONSTRAINT `FK_93872075C18272` FOREIGN KEY (`projet_id`) REFERENCES `projet` (`id`),
  ADD CONSTRAINT `FK_93872075D5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`),
  ADD CONSTRAINT `FK_93872075FC6CD52A` FOREIGN KEY (`ressource_id`) REFERENCES `ressource` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
