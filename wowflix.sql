-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 31 Octobre 2018 à 09:22
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `wowflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `Acronyme` varchar(45) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`, `Acronyme`, `background`) VALUES
(1, 'Vanilla', 'Vanilla', 'http://s1.picswalls.com/wallpapers/2014/09/22/world-of-warcraft-picture_044603569_250.jpg'),
(2, 'Burning Crusade', 'BC', 'http://dualmonitorswallpaper.com/wp-content/uploads/2018/03/worgen-draenei-wallpaper-3840x1080-7.jpg'),
(3, 'Wrath of the Lich King', 'WotLK', 'http://cuteweblinks.info/images/Wow-Lich-King-Wallpaper/Wow-Lich-King-Wallpaper-19.jpg'),
(4, 'Cataclysm', 'Cata', 'https://wallpapercave.com/wp/pxsduz2.jpg'),
(5, 'Mists of Pandaria', 'MoP', 'https://i.ytimg.com/vi/zFxE632fw8Q/maxresdefault.jpg'),
(6, 'Warlords of Draenor', 'WoD', 'https://www.gamewallpapers.com/wallpapers_slechte_compressie/01wallpapers/wallpaper_world_of_warcraft_warlords_of_draenor_01_1920x1080.jpg'),
(7, 'Legion', 'Legion', 'https://images2.alphacoders.com/644/thumb-1920-644529.jpg'),
(8, 'Battle for Azeroth', 'BfA', 'https://bnetcmsus-a.akamaihd.net/cms/gallery/LO0AO02BH7931533575177140.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `released_at` date DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `video_link`, `cover`, `released_at`, `category_id`) VALUES
(1, 'World of Warcraft', 'Le jeu reprend place dans le monde imaginaire d’Azeroth, et dont le cadre historique se situe quatre ans après les évènements concluant Warcraft III. Le joueur choisit son personnage parmi huit, dix ou douzeNote 4 treize puis vingt-et-une races disponible', 'https://www.youtube.com/watch?v=aL12LwFDrxw&list=PLKpn91o2eXjhLe_elJA3OOHu5OiHpvYHG&index=1', 'img/vanilla.jpg', '2007-01-01', 1),
(2, 'Wrath of the Lich King', 'Wrath of the Lich King est la seconde extension de World of Warcraft sortie le 13 novembre 2008. Son annonce a été faite à la session d’ouverture du BlizzCon 2007. L’extension se déroule après « The Burning Crusade ».', 'https://www.youtube.com/watch?v=ZUPjV6yiMB4', 'img/wotlk-cover.jpg', '2008-11-13', 3),
(3, 'Burning Crusade', 'L’extension introduit des améliorations, ou des nouveautés au jeu, dont les plus citées sont1 :\r\n\r\nLa possibilité d’explorer un nouveau continent composé de sept zones, l’Outreterre ;\r\nDeux nouvelles races de personnages : les Elfes de Sang pour la Horde ', 'https://www.youtube.com/watch?v=v2hs9nSHT0M', 'img/bc_cover.jpg', '2007-01-16', 2),
(4, 'Mists of Pandaria', 'World of Warcraft: Mists of Pandaria est la quatrième extension du MMORPG World of Warcraft de Blizzard Entertainment, faisant suite à Cataclysm. Elle fut annoncée le 21 octobre 2011 durant la BlizzCon par Chris Metzen et mise en ligne le 25 septembre 201', 'https://www.youtube.com/watch?v=zFxE632fw8Q', 'img/pandaria_cover.jpg', '2012-09-25', 5),
(5, 'Cataclysm', 'World of Warcraft: Cataclysm est la troisième extension du jeu en réseau de type MMORPG, World of Warcraft. Son annonce a été faite le 21 août 2009 lors de la session d’ouverture de la BlizzCon 2009. Cette extension est sortie le 7 décembre 2010. L''extens', 'https://www.youtube.com/watch?v=Wq4Q5HsX3Ms', 'img/cataclysm_cover.jpg', '2010-12-07', 4),
(6, 'Warlords of Draenor', 'World of Warcraft: Warlords of Draenor est la cinquième extension du jeu de rôle en ligne massivement multijoueurs World of Warcraft. Elle a été annoncée le 8 novembre 2013 et est sortie le 13 novembre 2014. L''extension est la suite directe de Mists of Pa', 'https://www.youtube.com/watch?v=AyYCMxF4pmk', 'img/wod_cover.jpg', '2014-11-13', 6),
(7, 'Legion', 'World of Warcraft: Legion est la sixième extension de jeu vidéo du jeu de rôle en ligne massivement multijoueur World of Warcraft. Elle a été annoncée le 6 août 2015 à la Gamescom et est axée sur le retour de la légion ardente en Azeroth. Elle est sortie ', 'https://www.youtube.com/watch?v=8k3aZqsZcHI', 'img/legion_cover.jpg', '2016-08-30', 7),
(8, 'Battle for Azeroth', 'World of Warcraft: Battle for Azeroth est la septième extension de jeu vidéo du jeu de rôle en ligne massivement multijoueur World of Warcraft. Elle a été annoncée le 3 novembre 2017 à la Blizzcon et a pour thème le conflit renouvelé entre la Horde et l''A', 'https://www.youtube.com/watch?v=4ust2kgtvD8', 'img/Battle_for_Azeroth_background.jpg', '2018-08-14', 8),
(9, 'World of Warcraft : le vétéran', 'La guerre finit par venir à bout des combattants les plus valeureux. Ce combat pourrait bien être le dernier pour le légendaire guerrier de la Horde Varok Saurcroc. ', 'https://www.youtube.com/watch?v=d388Z_UwRUY', 'img/veteran-cover.jpg', '2018-08-02', 8),
(10, 'Prémices : Azshara', 'Que feriez-vous pour sauver tout un peuple ? C’est au fond de l’océan que la grande reine Azshara trouvera ce dont elle a désespérément besoin : une chance à saisir.', 'https://www.youtube.com/watch?v=wMrwvos39Y8', 'img/azshara_cover.jpg', '2018-08-24', 8),
(11, 'Prémices : Jaina', 'Au cours de sa vie, Jaina Portvaillant a déjà eu son lot de décisions difficiles à prendre. Dans ce court-métrage d’animation, les choix effectués dans son passé continuent à influer sur son avenir. ', 'https://www.youtube.com/watch?v=iJxEizG740w', 'img/jaina-cover.jpg', '2018-07-28', 8),
(12, 'Antorus - Cinématique de fin', 'Voici la cinématique de fin du raid Le Trône Ardent - Antorus qui sort aujourd''hui mercredi 29 novembre 2017 !!! Ce raid sera incroyable et j''ai hâte d''y être pour le finir. ', 'https://www.youtube.com/watch?v=Aplz4ZqohYg', 'img/antorius-cover.jpg', '2017-11-28', 7),
(13, 'Chasseur de Démons', 'Voila toutes les cinématiques de la progression des Chasseurs de Démons (ici Alliance, mais je pense que se sont les mêmes pour la Horde)... Avec à la fin la cinématiques publiée par Blizzard il y a quelques semaines avec Illidan.', 'https://www.youtube.com/watch?v=EMHSdgEc9NQ&index=4&list=PLhFoC7djqSeHIwgBNLrUszWuNkK5sf3b3', 'img/demons-cover.jpg', '2016-08-12', 7),
(14, 'Return to Karazhan', 'Blizzard vient d’annoncer au Legion Café que Karazhan fera son grand retour au Patch 7.1 en tant que donjon à cinq joueurs ! Le contenu sera intitulé « Return to Karazhan »', 'https://www.youtube.com/watch?v=MujsmICk0bY&index=5&list=PLhFoC7djqSeHIwgBNLrUszWuNkK5sf3b3', 'img/karazhan_cover.jpg', '2016-08-17', 7);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(45) DEFAULT NULL,
  `token_expiration` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
