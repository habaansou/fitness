-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2020 at 01:21 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `idCategories` int(11) NOT NULL,
  `nameCategories` varchar(50) NOT NULL,
  `dateCategories` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idCategories`, `nameCategories`, `dateCategories`) VALUES
(1, 'Electriques', '2020-03-30 17:09:58'),
(2, 'Etromenages', '2020-03-30 17:09:58'),
(3, 'Numerique', '2020-03-30 17:10:13'),
(4, 'Portable', '2020-03-30 17:10:13'),
(10, 'Mecanique', '2020-03-31 00:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `idClients` int(11) NOT NULL,
  `matriculeClients` varchar(50) NOT NULL,
  `nomClients` varchar(50) NOT NULL,
  `prenomClients` varchar(50) NOT NULL,
  `dateNaissClients` date NOT NULL,
  `telephoneClients` varchar(50) NOT NULL,
  `cinClients` varchar(50) NOT NULL,
  `lieuClients` varchar(50) NOT NULL,
  `emailClients` varchar(50) NOT NULL,
  `sportClients` varchar(50) NOT NULL,
  `fraisClients` varchar(50) NOT NULL,
  `dateIncrisClients` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`idClients`, `matriculeClients`, `nomClients`, `prenomClients`, `dateNaissClients`, `telephoneClients`, `cinClients`, `lieuClients`, `emailClients`, `sportClients`, `fraisClients`, `dateIncrisClients`) VALUES
(15, 'FITNESS-15::28032020', 'Camara', 'Fatoumanta', '2020-03-28', '622489345', '788777/18', 'Mamou', 'fatoumatac@gmail.com', 'Yoga', '12334', '2020-03-28 12:42:59'),
(16, 'FITNESS-16::28032020', 'Diallo', 'Mariatou', '2020-03-19', '344444555', '23444/12', 'Lola', 'mariatou@gmail.com', 'Aerobie', '23455', '2020-03-28 14:31:55'),
(17, 'FITNESS-17::28032020', 'Kolie', 'Odette', '2020-04-02', '44444', '212311/12', 'Zaly', 'odette@gmail.com', 'Zumba', '400000', '2020-03-28 14:37:47'),
(18, 'FITNESS-18::28032020', 'DIALLO', 'Mariame', '2020-03-10', '7777', '22233/12', 'Mamou', 'ha@gmail.com', 'Aerobie', '23333', '2020-03-28 17:52:43'),
(19, 'FITNESS-28::31032020', 'Camara', 'Florance', '2020-03-19', '655345645', '212334/12', 'Labé', 'flo@gmail.com', 'Aerobie', '500000', '2020-03-31 02:59:32'),
(20, 'FITNESS-29::31032020', 'Sylla', 'Mariame', '2020-03-13', '655345676', '234343/12', 'Mamou', 'mariame@gmail.com', 'Yoga', '400000', '2020-03-31 03:10:48'),
(21, 'FITNESS-30::31032020', 'Camara', 'Mohamed', '2020-03-11', '65536666', '234663/12', 'Kankan', 'camara@gmail.com', 'Aerobie', '300000', '2020-03-31 03:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `fonctions`
--

CREATE TABLE `fonctions` (
  `idFonctions` int(11) NOT NULL,
  `nameFonctions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fonctions`
--

INSERT INTO `fonctions` (`idFonctions`, `nameFonctions`) VALUES
(14, 'Proprietaire'),
(29, 'Gerant');

-- --------------------------------------------------------

--
-- Table structure for table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `idFournisseurs` int(11) NOT NULL,
  `intituleFournisseurs` varchar(50) NOT NULL,
  `matriculeFournisseurs` varchar(50) DEFAULT NULL,
  `typeFournisseurs` varchar(50) DEFAULT NULL,
  `telephoneFournisseurs` varchar(50) DEFAULT NULL,
  `adresseFournisseurs` varchar(50) DEFAULT NULL,
  `emailFournisseurs` varchar(50) DEFAULT NULL,
  `dateEnregistrement` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fournisseurs`
--

INSERT INTO `fournisseurs` (`idFournisseurs`, `intituleFournisseurs`, `matriculeFournisseurs`, `typeFournisseurs`, `telephoneFournisseurs`, `adresseFournisseurs`, `emailFournisseurs`, `dateEnregistrement`) VALUES
(3, 'Orange GN', 'FITNESS-23::30032020', 'Partenaire', '622345676', 'Conakry', 'info@gmail.com', '2020-03-30 23:04:50'),
(4, 'CEDIG', 'FITNESS-24::30032020', 'Partenaire', '657347823', 'Mamou', 'info@cedig.com', '2020-03-30 23:05:27'),
(5, 'CEDIG-SARL', 'FITNESS-25::30032020', 'Partenaire', '622347827', 'Conakry', 'info@cedig.com', '2020-03-30 23:05:54'),
(6, 'SODIA-PLASTIQUE', 'FITNESS-26::30032020', 'Fournisseur', '654456545', 'Guinée', 'info@sodia.com', '2020-03-30 23:06:29'),
(7, 'ss', 'ss', 'ss', 'ss', 'ss', 'sss', '2020-04-01 09:42:28'),
(8, 'ff', 'ff', 'ff', 'ff', 'ff', 'ff', '2020-04-01 10:53:53'),
(9, 'dd', 'FITNESS-31::01042020', 'Fournisseur', '22', 'ddd', 'd@gmail.cm', '2020-04-01 10:59:49'),
(10, 'Orange Guinée', 'FITNESS-32::01042020', 'Fournisseur', '622223456', 'Kaloum', 'info@orange.com', '2020-04-01 11:00:45'),
(11, 'Orange Guinée', 'FITNESS-33::01042020', 'Partenaire', '622223456', 'Kaloum', 'info@orange.com', '2020-04-01 11:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `historiques`
--

CREATE TABLE `historiques` (
  `idInscriptions` int(11) NOT NULL,
  `matriculeClients` varchar(50) DEFAULT NULL,
  `dateInscriptions` date DEFAULT NULL,
  `dateExpirations` date DEFAULT NULL,
  `mois` varchar(55) DEFAULT NULL,
  `stat` varchar(1) DEFAULT NULL,
  `frais` varchar(50) DEFAULT NULL,
  `sports` varchar(50) DEFAULT NULL,
  `users` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `historiques`
--

INSERT INTO `historiques` (`idInscriptions`, `matriculeClients`, `dateInscriptions`, `dateExpirations`, `mois`, `stat`, `frais`, `sports`, `users`) VALUES
(12, 'FITNESS-29::31032020', '2020-03-31', '2020-04-30', '1', '1', '400000', 'Yoga', 'souleymane@fitness.com'),
(13, 'FITNESS-30::31032020', '2020-03-31', '2020-04-30', '1', '1', '300000', 'Aerobie', 'souleymane@fitness.com'),
(14, 'FITNESS-15::28032020', '2020-03-31', '2020-04-30', '1', '2', '220000', 'Yoga', 'souleymane@fitness.com');

-- --------------------------------------------------------

--
-- Table structure for table `inscriptions`
--

CREATE TABLE `inscriptions` (
  `idInscriptions` int(11) NOT NULL,
  `matriculeClients` varchar(50) DEFAULT NULL,
  `dateInscriptions` date DEFAULT NULL,
  `dateExpirations` date DEFAULT NULL,
  `mois` varchar(55) DEFAULT NULL,
  `stat` varchar(1) NOT NULL,
  `frais` varchar(50) DEFAULT NULL,
  `sports` varchar(50) DEFAULT NULL,
  `users` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inscriptions`
--

INSERT INTO `inscriptions` (`idInscriptions`, `matriculeClients`, `dateInscriptions`, `dateExpirations`, `mois`, `stat`, `frais`, `sports`, `users`) VALUES
(16, 'FITNESS-29::31032020', '2020-03-31', '2020-04-30', '1', '1', '400000', 'Yoga', 'souleymane@fitness.com'),
(17, 'FITNESS-30::31032020', '2020-03-31', '2020-04-30', '1', '1', '300000', 'Aerobie', 'souleymane@fitness.com');

-- --------------------------------------------------------

--
-- Table structure for table `matricule`
--

CREATE TABLE `matricule` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matricule`
--

INSERT INTO `matricule` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34);

-- --------------------------------------------------------

--
-- Table structure for table `paiements`
--

CREATE TABLE `paiements` (
  `idPaiements` int(11) NOT NULL,
  `idPersonnels` int(11) NOT NULL,
  `montantPaiements` varchar(50) NOT NULL,
  `datePaiements` date NOT NULL,
  `moisPaiements` varchar(50) NOT NULL,
  `anneePaiements` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paiements`
--

INSERT INTO `paiements` (`idPaiements`, `idPersonnels`, `montantPaiements`, `datePaiements`, `moisPaiements`, `anneePaiements`) VALUES
(2, 31, '30000 GNF', '2020-03-04', 'mars', '2020'),
(5, 31, '30000 GNF', '2020-03-04', 'mars', '2020'),
(7, 31, '30000 GNF', '2020-03-04', 'mars', '2020'),
(8, 31, '30000 GNF', '2020-03-04', 'mars', '2020'),
(11, 31, '30000', '2020-03-04', 'mars', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `personnels`
--

CREATE TABLE `personnels` (
  `idPersonnels` int(11) NOT NULL,
  `nomPersonnels` varchar(50) NOT NULL,
  `prenomPersonnels` varchar(50) NOT NULL,
  `sexePersonnels` varchar(50) NOT NULL,
  `identifientPersonnels` varchar(50) NOT NULL,
  `photoPersonnels` varchar(255) NOT NULL,
  `adressePersonnels` varchar(50) NOT NULL,
  `idFonctions` int(11) NOT NULL,
  `idProfessions` int(11) NOT NULL,
  `contratPersonnels` varchar(50) NOT NULL,
  `dateDembausePersonnels` date NOT NULL,
  `salairePersonnels` bigint(20) NOT NULL,
  `emailPersonnels` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personnels`
--

INSERT INTO `personnels` (`idPersonnels`, `nomPersonnels`, `prenomPersonnels`, `sexePersonnels`, `identifientPersonnels`, `photoPersonnels`, `adressePersonnels`, `idFonctions`, `idProfessions`, `contratPersonnels`, `dateDembausePersonnels`, `salairePersonnels`, `emailPersonnels`) VALUES
(31, 'Sow', 'Souleymane', 'Homme', 'souleymane', 'favicon.png', 'Conakry', 14, 2, 'PROPRIETAIRE', '2020-03-04', 30000, 'souleymane@fitness.com'),
(32, 'HABA', 'David Ansoumane', 'Homme', 'habaansou', '5e85236ea0724alseny.jpeg', 'T7, Sonfonia', 14, 2, 'CDI', '2020-04-01', 1500000, 'habaansou@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `idProduits` int(11) NOT NULL,
  `referenceProduits` varchar(50) DEFAULT NULL,
  `nomProduits` varchar(50) DEFAULT NULL,
  `etatProduits` varchar(50) DEFAULT NULL,
  `photo1Produits` varchar(255) DEFAULT NULL,
  `photo2Produits` varchar(255) DEFAULT NULL,
  `photo3Produits` varchar(255) DEFAULT NULL,
  `idCategories` int(11) DEFAULT NULL,
  `dateProduits` date DEFAULT NULL,
  `prixProduits` varchar(50) DEFAULT NULL,
  `descriptionsProduits` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `professions`
--

CREATE TABLE `professions` (
  `idProfessions` int(11) NOT NULL,
  `nameProfessions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professions`
--

INSERT INTO `professions` (`idProfessions`, `nameProfessions`) VALUES
(2, 'Acteur'),
(3, 'Scientifique');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `identifientUsers` varchar(50) NOT NULL,
  `emailUsers` varchar(50) NOT NULL,
  `passwordUsers` varchar(255) NOT NULL,
  `roleUsers` varchar(50) NOT NULL,
  `etatUsers` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `identifientUsers`, `emailUsers`, `passwordUsers`, `roleUsers`, `etatUsers`) VALUES
(9, 'souleymane', 'souleymane@fitness.com', 'ce03b44e744432d8a65f37eb2dfea5a2f2bdf74d79d8052af1e8caa2a5526c6f', 'Administrateur', 'Active'),
(10, 'habaansou', 'habaansou@gmail.com', 'ce03b44e744432d8a65f37eb2dfea5a2f2bdf74d79d8052af1e8caa2a5526c6f', 'Administrateur', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCategories`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`idClients`),
  ADD UNIQUE KEY `matriculeClients` (`matriculeClients`);

--
-- Indexes for table `fonctions`
--
ALTER TABLE `fonctions`
  ADD PRIMARY KEY (`idFonctions`);

--
-- Indexes for table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`idFournisseurs`),
  ADD UNIQUE KEY `matriculeFournisseurs` (`matriculeFournisseurs`);

--
-- Indexes for table `historiques`
--
ALTER TABLE `historiques`
  ADD PRIMARY KEY (`idInscriptions`);

--
-- Indexes for table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`idInscriptions`),
  ADD UNIQUE KEY `matriculeClients_2` (`matriculeClients`),
  ADD KEY `matriculeClients` (`matriculeClients`);

--
-- Indexes for table `matricule`
--
ALTER TABLE `matricule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paiements`
--
ALTER TABLE `paiements`
  ADD PRIMARY KEY (`idPaiements`),
  ADD KEY `idPersonnels` (`idPersonnels`);

--
-- Indexes for table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`idPersonnels`),
  ADD UNIQUE KEY `identifientPersonnels` (`identifientPersonnels`),
  ADD KEY `idProfessions` (`idProfessions`),
  ADD KEY `idFonctions` (`idFonctions`),
  ADD KEY `emailPersonnels` (`emailPersonnels`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`idProduits`),
  ADD KEY `idCategories` (`idCategories`);

--
-- Indexes for table `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`idProfessions`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`),
  ADD KEY `emailUsers` (`emailUsers`),
  ADD KEY `identifientUsers` (`identifientUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCategories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `idClients` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `fonctions`
--
ALTER TABLE `fonctions`
  MODIFY `idFonctions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `idFournisseurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `historiques`
--
ALTER TABLE `historiques`
  MODIFY `idInscriptions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `idInscriptions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `matricule`
--
ALTER TABLE `matricule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `paiements`
--
ALTER TABLE `paiements`
  MODIFY `idPaiements` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `idPersonnels` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `idProduits` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professions`
--
ALTER TABLE `professions`
  MODIFY `idProfessions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD CONSTRAINT `inscriptions_matricule_fk` FOREIGN KEY (`matriculeClients`) REFERENCES `clients` (`matriculeClients`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paiements`
--
ALTER TABLE `paiements`
  ADD CONSTRAINT `paiement_id_fk` FOREIGN KEY (`idPersonnels`) REFERENCES `personnels` (`idPersonnels`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personnels`
--
ALTER TABLE `personnels`
  ADD CONSTRAINT `personnels_idfonction_fk` FOREIGN KEY (`idFonctions`) REFERENCES `fonctions` (`idFonctions`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personnels_idprofessions_fk` FOREIGN KEY (`idProfessions`) REFERENCES `professions` (`idProfessions`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produit_idcategorie_fk` FOREIGN KEY (`idCategories`) REFERENCES `categories` (`idCategories`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `personnels_emailPersonnels_fk` FOREIGN KEY (`emailUsers`) REFERENCES `personnels` (`emailPersonnels`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personnels_identifient_fk` FOREIGN KEY (`identifientUsers`) REFERENCES `personnels` (`identifientPersonnels`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
