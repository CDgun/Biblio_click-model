-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 09 Juin 2016 à 23:48
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `animelist`
--

-- --------------------------------------------------------

--
-- Structure de la table `animes`
--

CREATE TABLE IF NOT EXISTS `animes` (
  `id_animes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom_anime` varchar(250) NOT NULL,
  `nombre_episode` int(11) DEFAULT NULL,
  `dernier_episode_vu` int(11) DEFAULT NULL,
  `dernier_episode_sorti` int(11) DEFAULT NULL,
  `synopsis` text NOT NULL,
  `vu` tinyint(1) NOT NULL,
  `favoris` tinyint(1) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `total_favoris` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_animes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `animes`
--

INSERT INTO `animes` (`id_animes`, `nom_anime`, `nombre_episode`, `dernier_episode_vu`, `dernier_episode_sorti`, `synopsis`, `vu`, `favoris`, `cover`, `total_favoris`) VALUES
(1, 'kiznaiver', 6, 6, 6, 'The anime''s setting is a fictional Japanese city named Sugomori City. One day, Noriko Sonosaki tells her classmate Katsuhira Agata, "You have been selected to be a Kiznaiver." The Kizuna System, which allows Katsuhira to share his wounds, connects him to the classmates whose lives and personalities completely differ from his. The Kizuna System is an incomplete system for the implementation of world peace that connects people through wounds. All those who are connected to this system are called Kiznaivers. When one Kiznaiver is wounded, the system divides and transmits the wound among the other Kiznaivers. Sugomori City is built on reclaimed land, but as the years go by, the city''s population is decreasing. The story is set in this town where Katsuhira and the others live.', 0, 0, './assets/img/cover/kiznaiver.jpg', NULL),
(2, 'Kill la Kill', 25, 25, 25, 'Nous découvrons une jeune fille de 17 ans , Ryuko Matoi, qui arrive dans une ville japonaise. Elle se balade avec une étrange mallette dans le dos. Arrivant par les bidon-villes, elle est la cible de quelques pickpockets. Après les avoir corrigé, elle se renseigne sur la ville, qui est apparemment sous le joug d''une dictature. C''est au sein de L''Académie Honnōji que l''on retrouve la présidente du conseil des élèves, et meneuse du mouvement totalitaire, Satsuki Kiryūin. Matoi décide de s''inscrire à l''académie et de défier la présidente afin qu''elle lui en dise plus sur la mort de son père.\r\n\r\nN''étant pas de taille, elle se sauve dans son ancienne maison calcinée et retrouve dans les décombres un uniforme. Celui-ci est spécial car il parle mais lui permet également de gagner en force. C''est alors que Matoi décide de tout faire pour battre la présidente.', 1, 1, 'assets/img/cover/killlakill.jpg', NULL),
(3, 'Bleach', 366, 366, 366, 'Le récit commence en 2001 au Japon dans la ville fictive de Karakura. Ichigo Kurosaki, lycéen de 15 ans, arrive à voir, entendre et toucher les âmes des morts depuis qu''il est tout petit. Un soir, sa routine quotidienne vient à être bouleversée à la suite de sa rencontre avec une shinigami (死神?, littéralement « dieu de la mort »), Rukia Kuchiki, et la venue d''un monstre appelé hollow. Ce dernier étant venu dévorer les âmes de sa famille et la shinigami venue le protéger ayant été blessée par sa faute, Ichigo accepte de devenir lui-même un shinigami afin de les sauver.\r\n\r\nCependant, le transfert de pouvoir, censé être temporaire et partiel, est complet et ne s''achève pas. Ichigo est forcé de prendre la responsabilité de la tâche incombant à Rukia Kuchiki. Il commence donc la chasse aux hollows tout en protégeant les âmes humaines.\r\n\r\nLe début est centré sur une chasse aux mauvais esprits relativement peu puissants, avec un simple sabre. L''histoire va peu à peu se diriger vers un vaste complot mystico-politique après l''apparition des premiers autres shinigami. Les batailles au sabre du commencement vont alors se métamorphoser en combats dantesques avec des armes aux pouvoirs surprenants et variés, et parfois aux proportions gigantesques.', 1, 0, 'assets/img/cover/bleach.jpg', NULL),
(4, 'Rokka no yūsha', 12, 12, 12, 'Quand le Dieu du mal (Maijin) se réveille de nouveau, la déesse du Destin, déesse protectrice choisit six héros qu''elle marque d''un sceau à six branches. La mission de ces héros est de vaincre le Dieu du mal. L''histoire de Rokka no yūsha se déroule en grande partie dans le temple juste devant la frontière du Royaume des Calamités. Les héros sont arrivés dans ce temple où une barrière a été créé afin de bloquer le chemin vers le royaume du Dieu du mal et assurer les arrières des héros une fois qu''ils sont passés de l''autre côté. Pour des raisons inconnues, ils sont sept au lieu de six héros à porter le sceau. La barrière ayant été activée à leur arrivée, ils se retrouvent coincés dans le temple et la forêt avoisinante et incapables de remplir leur mission : vaincre le Dieu du mal.\r\n\r\nLeur but est donc d''identifier le 7e qui est l''imposteur et de le tuer afin de désactiver la barrière car ils sont persuadés que c''est le seul et unique moyen de remplir leur mission. S''ensuivent des intrigues, des batailles et des courses-poursuites car justement l''imposteur est malin et refuse de se rendre facilement.', 1, 1, 'assets/img/cover/rokkanoyuusha.jpg', 1),
(5, 'overlord', 13, 13, 13, 'L''histoire débute dans Yggdrasil, un jeu de rôle virtuel en ligne connaissant un véritable succès mais sur le point de se fermer après dix ans d''existence. Le protagoniste principal dénommé Momonga a néanmoins du mal à l''accepter, il n''a aucune famille ni amis, ni de petite amie, et ne trouve plus de sens à vivre dans la "réalité". Il est le chef de l''une des dix meilleurs guildes du jeu, la guilde Ainz Ooal Gown, composée exclusivement de "non humains" dont le quartier général est la "Grande Tombe de Nazarick". Sur les 41 membres de la guilde, seuls subsistent désormais le chef de la guilde et les PNJ, des personnages créés par les membres afin d''assurer la protection de la guilde. Momonga décide de rester immergé dans le jeu jusqu''à la déconnexion forcée. À sa grande stupeur, à l''heure annoncée de l''arrêt des serveurs, au lieu de revenir dans le monde réel il est envoyé avec sa guilde dans un nouveau monde. Il s''aperçoit très vite que les PNJ semblent acquérir leur propre volonté et surtout qu''ils sont devenus réellement vivants, dotés d''odeurs corporelles ou d''un pouls et surtout de sentiments. Il tente de découvrir ce monde et s''efforcera de se faire connaître sous le nom de Ainz Ooal Gown, nom porté auparavant par un sceptre orné, symbole de la guilde et l''un des plus puissants items créés dans Yggdrasil. Dans ce monde nouveau et inconnu, ou la magie qu''il employait à Yggdrasil fonctionne toujours et où la plupart des monstres de l''ancien jeu sont devenus réels, il a choisi son nouveau nom dans l''espoir de trouver d''autres joueurs qui comme lui se seraient retrouvés envoyés dans ce nouveau monde.', 1, 1, 'assets/img/cover/overlord.jpg', 1),
(6, 'Guilty Crown', 22, 22, 22, 'Tokyo, 2039. Ayant profondément souffert de l''épidémie du virus Apocalypse survenue le jour du Lost Christmas, qui a fragilisé les bases de sa puissance dix ans auparavant, le Japon ne tient plus à présent que par le soutien extérieur de plusieurs pays, maintenu par le régime militaire du GHQ où la valeur de chaque vie est devenue insignifiante. C''est dans ce contexte que Shū Ouma, jeune étudiant mal dans sa peau, trouve dans son repaire Inori, chanteuse du groupe EGOIST : la jeune fille, blessée, vient de dérober à Sephirah Genomics un précieux cylindre destiné à Gai, chef du groupe terroriste Croque-Morts. Débusquée par les Anti-Bodies, groupe d''intervention sous la direction du GHQ, Inori est enlevée et Shū, impuissant, décide néanmoins de terminer sa mission. Interrompu par une explosion alors qu''il rencontre Gai, Shū part à la recherche d''Inori, qu''il découvre ciblée par deux Endlaves (armures mobiles) alors qu''elle tentait de s''enfuir. En s''interposant pour la protéger de leurs tirs, le cylindre contenant le Void Genome se brise alors et confère à Shū un étrange pouvoir…', 1, 1, 'assets/img/cover/guiltycrown.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `anime_genre`
--

CREATE TABLE IF NOT EXISTS `anime_genre` (
  `genre_id` int(10) unsigned NOT NULL,
  `anime_id` int(10) unsigned NOT NULL,
  KEY `genre_id` (`genre_id`),
  KEY `anime_id` (`anime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `anime_genre`
--

INSERT INTO `anime_genre` (`genre_id`, `anime_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_genre` varchar(250) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `type_genre`) VALUES
(1, 'Sci-Fi'),
(2, 'Action'),
(3, 'Adventure');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE IF NOT EXISTS `statut` (
  `id_statut` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_statut` varchar(250) NOT NULL,
  PRIMARY KEY (`id_statut`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `statut`
--

INSERT INTO `statut` (`id_statut`, `type_statut`) VALUES
(1, 'complet'),
(2, 'en cours'),
(3, 'à sortir');

-- --------------------------------------------------------

--
-- Structure de la table `statut_anime`
--

CREATE TABLE IF NOT EXISTS `statut_anime` (
  `statut_id` int(11) unsigned NOT NULL,
  `anime_id` int(10) unsigned NOT NULL,
  KEY `statut_id` (`statut_id`,`anime_id`),
  KEY `anime_id` (`anime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `statut_anime`
--

INSERT INTO `statut_anime` (`statut_id`, `anime_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 4),
(1, 5),
(1, 6),
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `studios`
--

CREATE TABLE IF NOT EXISTS `studios` (
  `id_studios` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nom_studio` varchar(250) NOT NULL,
  PRIMARY KEY (`id_studios`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `studios`
--

INSERT INTO `studios` (`id_studios`, `nom_studio`) VALUES
(1, 'Trigger'),
(2, 'Pierrot Co'),
(3, 'Madhouse'),
(4, 'Passione');

-- --------------------------------------------------------

--
-- Structure de la table `studio_anime`
--

CREATE TABLE IF NOT EXISTS `studio_anime` (
  `studio_id` int(10) unsigned NOT NULL,
  `anime_id` int(10) unsigned NOT NULL,
  KEY `studio_id` (`studio_id`),
  KEY `anime_id` (`anime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `studio_anime`
--

INSERT INTO `studio_anime` (`studio_id`, `anime_id`) VALUES
(1, 1),
(1, 2),
(2, 3),
(3, 5),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `password`, `created_at`, `pseudo`, `email`) VALUES
(2, '17958fadaeadc8fa2c56cd6fa679b7ad9c6718d7', '2016-05-12 12:46:50', 'CD', 'cd@link.be'),
(3, 'abefd525335d55cf4b259ec0112668535149fe37', '2016-06-09 15:59:08', '', ''),
(4, '16012a3de98fc51f6a115e0b83a669c89631ec29', '2016-06-09 21:11:27', '', 'corentindelarbre@gmail.com');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `anime_genre`
--
ALTER TABLE `anime_genre`
  ADD CONSTRAINT `anime_genre_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id_genre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anime_genre_ibfk_2` FOREIGN KEY (`anime_id`) REFERENCES `animes` (`id_animes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `statut_anime`
--
ALTER TABLE `statut_anime`
  ADD CONSTRAINT `statut_anime_ibfk_1` FOREIGN KEY (`statut_id`) REFERENCES `statut` (`id_statut`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `statut_anime_ibfk_2` FOREIGN KEY (`anime_id`) REFERENCES `animes` (`id_animes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `studio_anime`
--
ALTER TABLE `studio_anime`
  ADD CONSTRAINT `studio_anime_ibfk_1` FOREIGN KEY (`anime_id`) REFERENCES `animes` (`id_animes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studio_anime_ibfk_2` FOREIGN KEY (`studio_id`) REFERENCES `studios` (`id_studios`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
