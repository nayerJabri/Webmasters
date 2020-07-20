-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  sam. 30 mai 2020 à 13:05
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `email` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `photop` varchar(255) NOT NULL,
  `motdepasse` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`email`, `telephone`, `nom`, `photop`, `motdepasse`) VALUES
('ayoub@gmail.com', 2147483647, 'ayobo', '', '444444444444444444'),
('ahmad.kridis@gmail.com', 2147483647, 'ahmed', '', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `adresse` varchar(20) NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`adresse`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`adresse`, `prix`) VALUES
('Ariena', 6),
('Ben arous', 5),
('Bizert', 7),
('Kram', 4),
('Marsa', 2),
('Nasser', 1),
('Nebel', 9),
('Rades', 5),
('Soussa', 10),
('Tunis', 3),
('Zghouen', 9);

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduit` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `datea` date NOT NULL,
  `note` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idproduit` (`idproduit`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `idproduit`, `nom`, `email`, `review`, `datea`, `note`) VALUES
(20, 114, 'Bague xxx', 'ahmed.kridiss@esprit.tn', 'hhhhhh', '2020-05-04', 0),
(21, 112, 'Ahmed Kridiss', 'ahmad.kridis@gmail.com', 'Produit de très bonne qualité !\r\n\r\n', '2020-05-03', 0),
(24, 111111566, 'Ahmed Kridiss', 'ahmed.kridiss@esprit.tn', 'c\'est trop beau !! woooow', '2020-05-25', 5);

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `titre` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `postdate` date NOT NULL,
  `picture` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`titre`, `author`, `category`, `postdate`, `picture`, `text`, `id`) VALUES
('Tunisia Handicrafts: The National Day of Tradition', 'MR.Faouzi', 'Category 1', '2008-12-23', '1588677496_1588304603_unnamed.jpg', '<p style=\"text-align: center;\"><strong>Tunisian handicrafts production give an idea about the country&rsquo;s cultural identity. </strong></p>\r\n<p style=\"text-align: center;\"><strong>These products reflect the influences of empires through time and this constitutes an integral part of the Tunisian cultural wealth.</strong></p>\r\n<p dir=\"ltr\">On the 16th of March of every year, Tunisia celebrates the National day of the traditional dress and crafts.Most frequently, an important march or &nbsp;festival would be organized in &ldquo;Avenue Habib Bourgiba&rdquo;, Tunis; in which hundreds of people expose their prettiest traditional outfits in a festive atmosphere.</p>\r\n<p style=\"text-align: center;\"><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">During this day, men wear the Tunisian Jebba which is a traditional suit ; resulting of Turkish and Andalusian influences, the Jebba has preserved its original Arab roots, in terms of general appearance.It is made of flax, silk or wool .It covers all the body, except forearms and calves. It can be worn with a Farmla which is a vest as well as what we call Badia. The outfit is finished off with baggy trousers named Sirwel and the Balgha which are pointed or rounded leather shoes. Without forgetting the chechia, a traditional round hat.</p>\r\n<p style=\"text-align: center;\"><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">On the other hand, women wear the Fouta and Blouza which are two pieces of the same outfit and they are made of cotton and silk. This outfit was subject to many changes and was mainly inspired by traditional wedding dresses of the past.</p>\r\n<p style=\"text-align: center;\"><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">Not to forget to mention that these suits are commonly worn during wedding ceremonies and they differ from one region to another, from the north to the south. Southerners tend to be more conservative than notherners.</p>\r\n<p dir=\"ltr\">The 16th of March remains a distinguishable day in which Tunisians celebrate their cultural roots, honor the traditional outfit and emphasize the fact that the signiﬁcant unique cultural heritage is retained through the handicrafts production.</p>', 29),
('Food in Tunisia', 'Mre.chanabou', 'Category 1', '2009-03-01', '1588677511_1588305012_DSC02528.jpg', '<h2 style=\"text-align: center;\">WHAT TO EAT?</h2>\r\n<p>I think one of my favorite parts of traveling through the Middle East was the abundance of delicious and flavorful food. Tunisia was the start of it all. It&rsquo;s a blend between Mediterranean and desert-dweller cuisines. Couscous with various meats, vegetables, and spices are&nbsp;the main fare here. Add some spicy harissa sauce to it, which the Tunisians are known for, and I was set for my entire time in Tunisia.</p>\r\n<p>Street food culture is big throughout Tunisia, with shawarma shops EVERYWHERE.&nbsp;As soon as I landed, I roamed the streets looking for chow, and immediately found some by walking into&nbsp;a place serving shawarma.&nbsp;Thin slices of beef or chicken in a wrap with veggies, spices, and harissa would make up most of my diet for the next week.</p>\r\n<p>The Tunisians are also obsessed with eating Tuna. They will either eat it straight up with cheese in a wrap, or add it to their shawarma sandwiches which is something I&rsquo;ve never even considered before. Nevertheless, Tunisia is right on the sea and I was already there so I decided to chow copious amounts of tuna as well.</p>\r\n<p>&nbsp;</p>', 30),
('Places to visite in Tunisia', 'Mr.adventure', 'Category 4', '2025-12-20', '1588305678_2.jpg', '&lt;h2 style=&quot;text-align: center;&quot;&gt;WHERE TO GO OUTSIDE OF TUNIS&lt;/h2&gt;\r\n&lt;h3&gt;&lt;em&gt;Carthage Ruins&lt;/em&gt;&lt;/h3&gt;\r\n&lt;p&gt;For those that remember their Roman history, there was a time in their history when&amp;nbsp;they were attacked by a General Hannibal from North Africa who used&amp;nbsp;elephants and nearly&amp;nbsp;conquered Rome. That same General hailed from Tunisia in ancient times. How they lived in a desert and got their hands on elephants is beyond me, but he was from these parts. After Hannibal&amp;rsquo;s armies were defeated by the Romans, the Romans settled in modern day Tunisia and many ruins were left behind. In fact, Tunisia has some of the most well-kept Roman ruins I&amp;rsquo;ve ever seen.&lt;/p&gt;\r\n&lt;p&gt;Visit the Carthage ruins by simply catching the TGM lightrail from downtown Tunis and get off at the&amp;nbsp;Carthage-Hannibal&amp;nbsp;station The train costs about 1 dinar (~50 cents), and the entrance fee to the ruins are 10 dinar which will give you access to all the sights in and around Carthage.&lt;/p&gt;\r\n&lt;h3&gt;&lt;em&gt;Sidi Bou Said&lt;/em&gt;&lt;/h3&gt;\r\n&lt;p&gt;With its white walls and blue accented windows and rooftops, this place may appear oddly similar to Santorini. It&amp;rsquo;s hard not to fall in love with this quaint sea-side town outside of Tunis. Sidi Bou Said is a few stops further than Carthage on the TGM lightrail. We ended up catching a taxi from Carthage to Sidi Bou Said and paid about 3 dinars. That&amp;rsquo;s $1.50! Cabs are insanely cheap here.&lt;/p&gt;\r\n&lt;p&gt;There isn&amp;rsquo;t a whole lot to do in Sidi Bou Said except enjoy the views of the Mediterranean, take some pictures of the unique architecture.&amp;nbsp;Au Bon Vieux Temps, a restaurant in Sidi Bou Said serving average food is a great place to have a drink and soak in the views. I wouldn&amp;rsquo;t recommend it for much more than that however.&lt;/p&gt;\r\n&lt;p&gt;The bambaloni, &amp;nbsp;a fried donut of sorts sprinkled with sugar is a&amp;nbsp;MUST&amp;nbsp;have for any visitors. This delicious piece of dough is crack. Absolutely delicious and for less than 1 dinar a piece, I had five. Apparently it is only served in Sidi Bou Said. Not sure why they wouldn&amp;rsquo;t bring this to Tunis as it would sell big time but I could not find it anywhere in Tunis.&lt;/p&gt;\r\n&lt;h2 style=&quot;text-align: center;&quot;&gt;DAY TRIPS OUTSIDE OF TUNIS&lt;/h2&gt;\r\n&lt;p&gt;There isn&amp;rsquo;t too&amp;nbsp;much to do in Tunis itself. It&amp;rsquo;s not going to be Paris or Rome with endless history. Worry not, there are many things to do outside of Tunis. The train system is very efficient&amp;nbsp;thanks to the small size of the country. The public bus system is easy to navigate and local taxi vans, louages&amp;nbsp;as the locals refer to them, are cheap and frequent.&lt;/p&gt;\r\n&lt;p&gt;I had no idea what this place was until I arrived and started talking with the locals. That&amp;rsquo;s how hard it is to research Tunisian travel! Nevertheless, if time allows for it, visiting Dougga should be high on your list as it is some of the more stunning Roman ruins I&amp;rsquo;ve seen in my travels. They are in great condition, and best of all, there are VERY FEW visitors unlike the mass hordes of tourists in Italy.&lt;/p&gt;\r\n&lt;p&gt;There are only three ways to get here: Private Taxi, Guided Tour, and public taxi van (Louage). The private options are pricey as Dougga is almost 2 hours outside of Tunis. I opted for the Louage option, and riding it out with the locals!&lt;/p&gt;\r\n&lt;p&gt;There are a few Louage stations in Tunis, located on different sides of the city depending on which direction your destination is. Dougga is to the west so my louage left from&amp;nbsp;Bab Saadoun.&amp;nbsp;The louage stations can be a bit overwhelming at first as you&amp;rsquo;ll be bombarded with people yelling &amp;ldquo;Hammamet&amp;rdquo;, &amp;ldquo;Bizerte&amp;rdquo;, &amp;ldquo;Sousse! Sousse!&amp;rdquo;, all trying to figure out where you want to go.&lt;/p&gt;\r\n&lt;p&gt;Don&amp;rsquo;t worry, no one is trying to scam you here. People here are all very helpful and like my experiences traveling with taxi brousses in Madagascar and Chappas in Mozambique,&lt;a title=&quot;Mozambique 2014: The Quirimbas Archipelago&quot; href=&quot;https://johnnyafrica.com/2015/01/25/mozambique-quirimbas-archipelago/&quot; target=&quot;_blank&quot; rel=&quot;noopener noreferrer&quot;&gt;&amp;nbsp;&lt;/a&gt;they don&amp;rsquo;t take advantage of you because you&amp;rsquo;re a foreigner. Everyone pays the same price.&lt;/p&gt;\r\n&lt;p&gt;I told someone &amp;ldquo;je veux aller au Dougga&amp;rdquo; or &amp;ldquo;I want to go to Dougga&amp;rdquo;, and they immediately directed me to a van where like public taxis everywhere else in the world, wouldn&amp;rsquo;t leave until it was full. I was the only person in it, and the wait was long. Half hour goes by and it is only half full and I&amp;rsquo;m ready to to just subsidize the other non existing half so I can go. 50 minutes go by, and we&amp;rsquo;re finally full and ready to go. The louage is not the most comfortable of vans but they are in much better shape than similar vans I&amp;rsquo;ve taken in other countries. I had some interesting conversations with some of the locals on the ride and the Tunisian countryside is so beautiful.&lt;/p&gt;\r\n&lt;p&gt;The louage takes 2 hours to reach Dougga but does not take you to the ruins themselves. Being the obvious tourist that I was, the louage drive actually called in ahead of time and there was a taxi waiting for me to take me the rest of the way to the ruins. Entrance fees are 8 dinars and I was finally inside the ruins after a 3 hour journey.&lt;/p&gt;\r\n&lt;p&gt;The ruins are truly impressive. There is a large theatre, altars, temples, and pillars. Everything you need for an impressive ruins. Best thing about it? The only people I saw during my 2 hour visit were a group of Tunisian tourists, and two korean exchange students living in Tunis. I had the entire place to myself. I could scream, I could jump, I could spend as much time and do whatever I wanted. I do however wish there would have been a tour guide to help me understand what the hell I was staring at but nevertheless, these ruins were on par with the ruins I saw at&amp;nbsp;Ephesus in Turkey&lt;/p&gt;\r\n&lt;h3&gt;&lt;em&gt;El-Jem Amphitheatre&lt;/em&gt;&lt;/h3&gt;\r\n&lt;p&gt;Located an hour outside of Tunis, this little town is home to the world&amp;rsquo;s third largest Roman Amphitheatre (The&amp;nbsp;Colosseum in Rome is the largest). If you only have enough time to do one day trip out of Tunis, I&amp;rsquo;d highly recommend this one.&lt;/p&gt;\r\n&lt;p&gt;El Jem is an easy train ride from the Tunis train station near the place de Barcelone in the center of the town. I tried booking tickets online but their&amp;nbsp;website&amp;nbsp;is a bit of a joke&amp;nbsp;with&amp;nbsp;no English option, and a barely functioning&amp;nbsp;French option.&amp;nbsp;The train is 10 dinars and leaves in the morning from Tunis at 8 or 9:30, and returns from El Jem in the afternoon.&lt;/p&gt;\r\n&lt;p&gt;When the train arrives to El Jem, the amphitheatre is easily visible from the train and it&amp;rsquo;s just a short 10 minute walk. This amphitheatre is the largest in Africa and once held over 35000 spectators. Gladiators regularly fought here, along with chariot races and other Roman entertainment. In addition, it was also used for&amp;hellip;*drumroll*&amp;hellip;the Gladiator movie.&lt;/p&gt;\r\n&lt;p&gt;The best part of this place? No one else is here. You get the whole place to yourself and you can take some amazing pictures. You can also wander pretty much anywhere in and around the amphitheatre. Forget about the Coliseum in Rome, this place is a far superior sight in my opinion. It&amp;rsquo;s in much better condition and while smaller than the amphitheatre in Rome, it gives you a better feel of what it would have been like thousands of years ago to do battle.&lt;/p&gt;\r\n&lt;h2 style=&quot;text-align: center;&quot;&gt;OTHER DAY TRIPS TO CONSIDER&lt;/h2&gt;\r\n&lt;p&gt;There&amp;rsquo;s plenty to see around Tunis so here are some other ideas for day trips.&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;The Great Mosque of Kairouan &amp;ndash;&amp;nbsp;One of the largest and most important mosques in the Islamic world&lt;/li&gt;\r\n&lt;li&gt;Hammamet &amp;ndash;&amp;nbsp;Beach town getaway on the Mediterranean&lt;/li&gt;\r\n&lt;li&gt;Bizerte &amp;ndash;&amp;nbsp;Another scenic coastal town to the north of Tunis&lt;/li&gt;\r\n&lt;li&gt;Djerba &amp;ndash;&amp;nbsp;Not a day trip by any means, but everyone agrees the nicest beaches in Tunisia are in Djerba&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;.&lt;/p&gt;', 31);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `referencee` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nomcat` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`referencee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`referencee`, `nomcat`) VALUES
('accessoire', 'oh yeah'),
('bijoux', 'mimi'),
('habit traditionnels', 'x'),
('poterie', 'x'),
('tapis', '');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` varchar(8) NOT NULL,
  `Adresse_Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID`, `Nom`, `prenom`, `telephone`, `Adresse_Email`, `Password`, `sexe`) VALUES
('ak47', 'kridiss', 'ahmed', '55555555', 'ahmed.kridiss@esprit.tn', '123456789', ''),
('maryem', 'bessrour', 'maryem', '0', 'maryem.bessrour@esprit.tn ', '0', '');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `reference` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `total` float NOT NULL,
  `etat` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reference`)
) ENGINE=InnoDB AUTO_INCREMENT=234 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`reference`, `userid`, `total`, `etat`, `date`) VALUES
(226, 'ak47', 164, 'payée', '2020-05-25 03:36:09'),
(227, 'ak47', 104, 'non payée', '2019-01-26 02:53:31'),
(228, 'ak47', 66, 'non payée', '2019-09-26 02:56:17'),
(230, 'ak47', 138, 'non payée', '2020-05-28 02:18:51'),
(232, 'ak47', 456, 'non payée', '2020-05-28 02:21:51'),
(233, 'ak47', 456, 'non payée', '2020-05-28 02:23:51');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL,
  `postid` int(11) NOT NULL,
  `editdate` datetime NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  KEY `postid` (`postid`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `date`, `message`, `postid`, `editdate`, `state`) VALUES
(34, 'Anonymous', '2020-05-03 06:57:50', 'Nice Article thank you!!', 31, '0000-00-00 00:00:00', 0),
(35, 'Anonymous', '2020-05-03 06:57:50', 'I love it', 31, '0000-00-00 00:00:00', 0),
(42, '1', '2020-05-10 02:55:32', 'yoo', 29, '0000-00-00 00:00:00', 0),
(43, '33', '2020-05-15 05:13:25', 'Good day to you ', 29, '0000-00-00 00:00:00', 0),
(47, 'ahmed', '2020-05-15 05:41:20', 'helllllllll yeahh', 29, '0000-00-00 00:00:00', 0),
(48, '4444', '2020-06-10 02:55:32', 'ppppp', 31, '0000-00-00 00:00:00', 0),
(51, '1', '2020-07-17 09:50:10', 'stattt', 29, '0000-00-00 00:00:00', 0),
(52, 'Motaz', '2020-05-22 07:43:48', 'comment with badd wordss ewwww', 29, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

DROP TABLE IF EXISTS `ligne_commande`;
CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `reference` int(11) NOT NULL AUTO_INCREMENT,
  `IDproduit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `IDcommande` int(11) NOT NULL,
  PRIMARY KEY (`reference`),
  KEY `IDproduit` (`IDproduit`),
  KEY `IDcommande` (`IDcommande`),
  KEY `IDproduit_2` (`IDproduit`),
  KEY `IDproduit_3` (`IDproduit`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`reference`, `IDproduit`, `quantite`, `IDcommande`) VALUES
(22, 13, 11, 29),
(24, 14, 1, 29),
(25, 13, 1, 30),
(26, 13, 3, 31),
(27, 13, 3, 32),
(28, 13, 3, 33),
(29, 13, 3, 34),
(30, 14, 6, 39),
(31, 13, 6, 40),
(32, 111111556, 3, 50),
(33, 111111557, 4, 50),
(34, 111111559, 4, 50),
(35, 111111562, 2, 51),
(36, 111111558, 1, 52),
(38, 111111556, 2, 226),
(39, 111111557, 2, 226),
(40, 111111556, 2, 227),
(41, 111111574, 2, 230),
(44, 111111570, 1, 233);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `referance` int(11) NOT NULL,
  `client` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `livreur` int(11) NOT NULL,
  `date` date NOT NULL,
  `adresselivraison` varchar(100) NOT NULL,
  PRIMARY KEY (`referance`),
  KEY `livreur` (`livreur`),
  KEY `livreur_2` (`livreur`),
  KEY `referance` (`referance`),
  KEY `referance_2` (`referance`),
  KEY `client` (`client`),
  KEY `client_2` (`client`),
  KEY `client_3` (`client`),
  KEY `client_4` (`client`),
  KEY `client_5` (`client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`referance`, `client`, `livreur`, `date`, `adresselivraison`) VALUES
(27, '33', 1212121, '2020-05-12', 'AA'),
(29, '1', 123, '2020-05-20', 'A'),
(32, '33', 1212121, '2020-05-16', 'd'),
(39, 'ak47', 123, '2020-05-20', 'A'),
(45, 'ak47', 870004, '2020-05-17', 'jjjjj');

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `identifiant` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `telephone` int(11) NOT NULL,
  `datenaissance` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `adressemail` varchar(50) NOT NULL,
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`identifiant`, `nom`, `prenom`, `telephone`, `datenaissance`, `adresse`, `adressemail`) VALUES
(123, 'ABCDxxx', 'ERFH', 4567, '2020-05-23', 'abd', 'GH@esprit.com'),
(870004, 'testtt', 'tessstt', 11111, '2020-05-14', 'abcd', 'ammaei@mail.com'),
(1212121, '212121', '2212121', 121212121, '2020-04-04', '21212121', 'ahmed@esnxxxxxo'),
(2147483647, 'bcde', 'hayjs', 4555, '2020-05-10', 'aerar', 'GH@esprit.com');

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

DROP TABLE IF EXISTS `localisation`;
CREATE TABLE IF NOT EXISTS `localisation` (
  `reference` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `lat` decimal(11,7) NOT NULL,
  `lng` decimal(11,7) NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `localisation`
--

INSERT INTO `localisation` (`reference`, `description`, `lat`, `lng`) VALUES
(3, 'Notre adresse principale', '33.8686446', '10.1133939'),
(4, 'notre 2eme point de vente ', '36.9030595', '10.1882134'),
(6, 'dar ayoub', '36.7213934', '10.2154075');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `reference` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `prix` float NOT NULL,
  `categorie` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reference`),
  KEY `fk` (`categorie`),
  KEY `categorie` (`categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=111111577 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `nom`, `prix`, `categorie`, `description`, `image`, `date`) VALUES
(13, 'boucle d\'oreille', 200, 'bijoux', 'bijoux en or', 'assets/images/produit/boucle d\'oreilles3.png', '2020-04-30 01:19:36'),
(14, 'bague', 250, 'bijoux', 'bague n or', 'assets/images/produit/bague.png', '2020-04-30 01:20:32'),
(114, 'Tapis', 599, 'tapis', 'tapis de la tunisie', 'assets/images/produit/tapis.png', '2020-05-03 01:35:58'),
(51483, 'bracelet', 120, 'bijoux', 'bijoux ', 'assets/images/produit/bracelet.png', '2020-05-14 23:07:03'),
(111111555, 'Bague  ', 250, 'bijoux', 'bague en or et argent fabriqué en tunisie', 'assets/images/produit/bague2.png', '2020-05-03 02:51:54'),
(111111556, 'Balgha À Motifs Floraux Bleu', 49, 'habit traditionnels', 'rien de rien', 'assets/images/produit/chaussure.png', '2020-05-05 05:05:54'),
(111111557, 'Foulard Bleu', 30, 'habit traditionnels', 'Foulard Bleu', 'assets/images/produit/foulard.png', '2020-05-05 05:14:41'),
(111111558, 'couffin', 15, 'habit traditionnels', 'couffin', 'assets/images/produit/couffin.png', '2020-05-05 05:23:48'),
(111111559, 'chapeau de paille', 45, 'habit traditionnels', 'chapeau de paille', 'assets/images/produit/chapeau.png', '2020-05-05 05:26:40'),
(111111560, 'Sac à main', 500, 'accessoire', 'Sac à main', 'assets/images/produit/sac.png', '2020-05-05 05:28:09'),
(111111562, 'vrai bijoux', 1523, 'bijoux', 'mouah', 'assets/images/produit/bague geante.png', '2020-05-05 05:58:43'),
(111111563, 'abaya', 20, 'habit traditionnels', 'abaya', 'assets/images/produit/Abeya brodé à la main1.png', '2020-05-12 02:00:39'),
(111111566, 'Boucles d\'oreilles ', 150, 'bijoux', 'Boucles d\'oreilles argent 925 ambre', 'assets/images/produit/boucles-d-oreilles-argent-925-ambre.jpeg', '2020-05-25 23:15:59'),
(111111567, 'bague argent', 100, 'bijoux', 'bague en argent 925 zirconias verre et blanc', 'assets/images/produit/bague-argent-925-zirconias-vert-et-blancs.jpeg', '2020-05-25 23:25:12'),
(111111568, 'vase', 90, 'poterie', 'vase : couleur blanc et bleu ', 'assets/images/produit/e7441f9908a9878518b0f26c61b9650d.jpg', '2020-05-25 23:29:42'),
(111111569, 'vase', 80, 'poterie', 'vase ', 'assets/images/produit/784511b565c1680333c878f9d35fbff6.jpg', '2020-05-25 23:31:23'),
(111111570, 'colier', 450, 'bijoux', 'necklace', 'assets/images/produit/jewelry-transparent-background-4.png', '2020-05-25 23:32:08'),
(111111571, 'Motif', 60, 'bijoux', 'motif en bleu', 'assets/images/produit/LS-5341.png', '2020-05-25 23:36:15'),
(111111572, 'tapis', 625, 'tapis', 'tapis traditionnel rouge', 'assets/images/produit/tabriz1.png', '2020-05-25 23:37:01'),
(111111573, 'colier fait a la main', 125, 'bijoux', 'colier fait a la main couleur: bleu matiere: argent', 'assets/images/produit/P20.png', '2020-05-25 23:38:02'),
(111111574, 'vase bleu', 66, 'poterie', 'vase bleu', 'assets/images/produit/in-vino-veritas.png', '2020-05-25 23:39:13'),
(111111575, 'chachia rouge', 20, 'habit traditionnels', 'chachia rouge fait a la main', 'assets/images/produit/chachiarouge.png', '2020-05-25 23:53:31');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `telephone` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `nom`, `telephone`, `email`, `objet`, `message`, `date`, `type`) VALUES
(27, 'Ben Amor', 50190165, 'dhia_ben_amor@live.fr', 'Livraison', 'La livraison est en retard', '2020-05-25 00:00:00', '');

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `wish` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `productid` int(11) NOT NULL,
  PRIMARY KEY (`wish`),
  KEY `userid` (`userid`),
  KEY `productid` (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `wishlist`
--

INSERT INTO `wishlist` (`wish`, `userid`, `productid`) VALUES
(82, 'ak47', 111111557),
(83, 'ak47', 51483);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`postid`) REFERENCES `blog` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_1` FOREIGN KEY (`IDproduit`) REFERENCES `produit` (`reference`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`referencee`);

--
-- Contraintes pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `client` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `produit` (`reference`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
