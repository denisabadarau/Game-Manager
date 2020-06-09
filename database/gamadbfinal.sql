-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: localhost
-- Timp de generare: iun. 09, 2020 la 09:51 PM
-- Versiune server: 10.4.11-MariaDB
-- Versiune PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `gamadb`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_utizobis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `id_utizobis`) VALUES
(1, 'denisa', 'denisa', 'denisa_ionela28@yahoo.com', 1),
(2, 'adelina', 'adelina', 'adelina_alicia_2007@yahoo.com', 2),
(3, 'vlad', 'vlad', 'vlad_afrasinei@yahoo.com', 3),
(8, 'denisabadarau', '$2y$10$SMWJluGNuoVL30bPT1BL8udzJjfR7DaMba1Tjbzd9wm858MpwQ8P2', 'denisadenisa@gmail.com', 8),
(9, 'denisa1999', '$2y$10$cUvGl7Ha3BFgvDo60O2kGOjITVxnw.mZqJYDN8BVUsT4R33OnCkn2', 'denisa@yahoo.com', 9),
(18, 'costinaioanaandrici', '$2y$10$gykJ9H.SUxUSC39YBQW1p.2ahwWWaY65ZBik850aBJXELFgbuEkpy', 'costina@gmail.com', 18),
(19, 'denisaionelabadarau', '$2y$10$3geTH7v/DdrgsaDEkzUMYey2fwMCPe.T0jgAOU46eXVi2N6VG69hm', 'denisa.ionela.badarau@gmail.com', 19),
(21, 'afrasinei.vlad.marian', '$2y$10$UxdFcG/EBzwP99M01.52V.d1eaNInJdcDT0gOJ4bDW1KEmDlQUv1y', 'a.vlad_10@yahoo.com', 21);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `battles`
--

CREATE TABLE `battles` (
  `id_turneu` int(11) NOT NULL,
  `id_jucator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `battles`
--

INSERT INTO `battles` (`id_turneu`, `id_jucator`) VALUES
(2, 3),
(3, 2),
(4, 2),
(1, 0),
(1, 1),
(4, 10),
(7, 2),
(7, 3),
(7, 4),
(4, 1),
(4, 1),
(8, 9),
(9, 25),
(10, 25),
(11, 25),
(10, 9),
(12, 9);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `commentsbattle`
--

CREATE TABLE `commentsbattle` (
  `id` int(11) NOT NULL,
  `id_jucator` int(11) NOT NULL,
  `numeutiz` varchar(100) NOT NULL,
  `comentariu` varchar(1000) NOT NULL,
  `datacomentariu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `commentsbattle`
--

INSERT INTO `commentsbattle` (`id`, `id_jucator`, `numeutiz`, `comentariu`, `datacomentariu`) VALUES
(10, 9, 'denisa1999', 'am participat la un turneu de mario si am castigat premiul cel mare', '2020-06-09 20:31:15'),
(11, 25, 'aida.afrasinei', 'imi place foarte mult organizarea jocurilor pe categorii', '2020-06-09 21:41:48'),
(12, 25, 'aida.afrasinei', 'maine voi participa la primul meu turneu', '2020-06-09 21:42:03'),
(13, 25, 'aida.afrasinei', 'denisa, ai castigat vreun turneu?', '2020-06-09 21:42:19'),
(14, 9, 'denisa1999', 'acum 2 saptamani am participat la 2 turnee online', '2020-06-09 21:44:28'),
(15, 9, 'denisa1999', 'turneul meu preferat este turneul online', '2020-06-09 21:45:40');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `views` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `tournaments` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `minidescriere` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `games`
--

INSERT INTO `games` (`id`, `name`, `category`, `views`, `likes`, `tournaments`, `type`, `minidescriere`) VALUES
(1, 'wingspan', 'board', 27, 12, 0, 'biology', 'Wingspan is a card-driven, medium-weight, engine-building board game in which players compete to attract birds to their wildlife reserves.'),
(2, 'blinded', 'board', 18, 8, 0, 'biology', 'Blinded by Science is for people who understand the meaning of deoxyribonucleic acid. If you\'re a trivia buff and science is your thing, then this game is probably in your DNA.'),
(3, 'cytosis', 'board', 18, 6, 0, 'biology', 'Cytosis: A Cell Building Game is a worker placement game that takes place inside a human cell.'),
(4, 'evo', 'board', 18, 21, 0, 'biology', 'In Evo you travel the wild open spaces of Kumgath with your mounts, you will use your knowledge of biology to help them adapt and succeed against both the hostile and changing climate and other competing species.'),
(5, 'mad science', 'board', 17, 12, 0, 'biology', 'Throughout the centuries, mad scientists have always encountered the same problem of very limited access to the dangerous resources they require. To solve this problem, the Mad Science Foundation was created.'),
(6, 'wonders of science', 'board', 17, 7, 0, 'biology', 'In Wonders of Science, the players take turns rolling the die and asking each other scientific questions from the cards. If a question is answered correctly, the card is won; if answered incorrectly, the card is returned to the bottom of the pile.'),
(7, 'keep cool', 'board', 9, 20, 1, 'educational', 'Keep Cool can be classified as both a serious game and a global warming game. In Keep Cool, up to six players representing the world\'s countries compete to balance their own economic interests and the world\'s climate in a game of negotiation'),
(8, 'ungame', 'board', 4, 17, 1, 'educational', 'The Ungame is a non-competitive learning/communication board game . It is a game of conversation which \"fosters listening skills as well as self-expression\".'),
(9, 'kolejka', 'board', 8, 30, 0, 'educational', 'Kolejka was designed to teach young generations about the hardships under communism (1945–1989), particularly the difficulty of acquiring consumer goods in the shortage economy.The game has been described as inspired by Monopoly.'),
(10, 'equate', 'board', 4, 27, 0, 'educational', 'Equate is a board game where players score points by forming equations on a 19x19 game board. Equations appear across and down in a crossword fashion and must be mathematically correct. It is similar to Scrabble except players use digits and mathematical operators instead of letters.'),
(11, 'battle masters', 'board', 10, 13, 0, 'fantasy', 'Battle Masters is a game that simulates the type of battles as seen in Warhammer Fantasy Battle, but with much simpler game mechanics not based on its parent game. It is focuses on a battle between the forces of good, or The Empire, against the forces of evil, or Chaos, which is a combined army including forces from the Chaos and Orcs and Goblins armies of the Warhammer Fantasy setting including creatures such as Ogres.'),
(12, 'blood bowl', 'board', 7, 14, 0, 'fantasy', 'Blood Bowl is a fantasy football game populated by traditional fantasy elements such as human warriors, goblins, dwarves, elves, orcs and trolls.Blood Bowl is a two-player, turn-based board game that typically uses 28 mm miniatures to represent a contest between two teams on a playing field.'),
(13, 'survive', 'board', 7, 7, 0, 'fantasy', 'Escape from Atlantis is a board game that portrays the sinking of Atlantis and the attempts by the population to escape the sinking island.Escape from Atlantis includes four Atlantean tribes, each with twelve villagers. These are represented as small wooden figures, coloured red, blue, green and yellow. Each player picks one tribe.'),
(14, 'chaos marauders', 'board', 7, 14, 0, 'fantasy', 'Chaos Marauders is a card-based board game for 2-4 players .The object of the game is to create \"battle lines\" of orcs and a motley assortment of creatures from the Warhammer universe, including skaven (with their formidable Horned Rat Standard, and \"Clan Skyrre Blowback\" flamethrower), goblins, dwarf captives, hobgoblins, \"crummy snotling slaves\", an Orc War Wyvern and the eponymous Chaos Marauders.'),
(15, 'dark tower', 'board', 7, 13, 0, 'fantasy', 'Dark Tower is a 1981 electronic board game by Milton Bradley Company, for one to four players. The object of the game is to amass an army, collect the three keys to the Tower, and defeat the evil within'),
(16, 'seven days', 'board', 3, 8, 0, 'historical', '7 days of Westerplatte is a cooperative game, the players incorporate the roles of Polish commanders who work together to confront the German army and win the game.'),
(17, 'axis and allies', 'board', 3, 19, 0, 'historical', 'Axis& Allies depicts WWII on a grand scale, a full global level. Up to five players can play on two different teams.The game comes with masses of plastic miniatures that represent various military units during WWII.'),
(18, 'lancaster', 'board', 3, 20, 0, 'historical', 'In 1413, the new king of England, Henry V of Lancaster, has ambitious plans: The unification of England and the conquest of the French crown! In Lancaster, each player takes the role of an ambitious aristocratic family. Who will be the best supporter of this young king, and the most powerful Lord of his time?'),
(19, 'carcassonne', 'board', 3, 21, 0, 'historical', 'Carcassonne is considered to be an excellent \"gateway game\" by many board game players as it is a game that can be used to introduce new players to board games. The rules are simple, no one is ever eliminated, and the play is fast. A typical game, without any expansions, takes about 45 minutes to play. There is a substantial luck component to the game; however, good tactics greatly improve one\'s chances of winning'),
(20, '1960 president', 'board', 3, 11, 0, 'historical', '1960: The making of a president achieves perfect pitch between accessibility of game play and empowering the players by allowing them to indulge in making and changing established history in an engaging way.This fast-playing strategy game for two players challenges you to run for the most powerful elective office in the world, at one of its most unique crossroads. Will you recreate history, or rewrite it? 1960: The Making of the President provides you the opportunity to do both.'),
(21, 'stone age', 'board', 6, 8, 0, 'historical', 'Stone Age is a development game with a Stone Age theme that involves taking control of a tribe to collect resources and build a village that has the most powerful chief.Players collect wood, break stone and wash their gold from the river. They trade freely, expand their village and so achieve new levels of civilization. With a balance of luck and planning, the players compete for food in this prehistoric time.'),
(22, 'nyctophobia', 'board', 4, 13, 0, 'horror', 'One of the most unique games , Nyctophobia is a 1vMany game that will have a group of players trying to survive as a maniacal predator chases them in a pitch Black Forest. The catch is that the survivors must play the game wearing blackout sunglasses.'),
(23, 'betrayl', 'board', 4, 5, 0, 'horror', 'Betrayal at House on the Hill starts out as a fully cooperative game with players exploring an old mansion. At some point during the game, one of the players becomes a traitor (who or when is unknown at the start) and will turn on their former teammates. The haunts, as they are called, are all fairly unique with each having its own story and goals for both teams.'),
(24, 'zombicide', 'board', 4, 2, 0, 'horror', 'If you want to experience hordes of raging undead, then Zombicide is your drink of choice. It’s not higher on the list because I don’t get a huge horror vibe from it. Characters are fairly powerful and it’s really not until late in the game, when rounds are spawning undead in large masses, that the tension finally starts to appear.'),
(25, 'ghost', 'board', 4, 7, 0, 'horror', 'Ghost takes place on a 6×6 square grid representing a haunted castle. Both players are given eight ghosts, of which four are good (represented by a blue dot) and four are evil (represented by a red dot). The ghosts are assembled in two rows of four ghosts at the player\'s own edge of the board. At each of the four corners is an exit from the castle.'),
(26, 'dead of winter', 'board', 4, 11, 0, 'horror', 'Dead of winter puts players in a small colony of survivors who must work together towards group victory, but at the same time, players must also complete a personal objective to win as individuals. Players often have to decide what’s best for the colony and best for themselves, which creates high-stakes gameplay.'),
(27, 'mansions of madness', 'board', 4, 14, 0, 'horror', 'In Mansions of Madness, players take on the role of investigators trying to get the bottom of strange happenings in the towns of Innsmouth and Arkham. This edition of the game is now fully cooperative, with the Cthulhu Mythos monsters being controlled by an integrated app.\r\nMORE INFO'),
(28, 'o day attak on earth', 'online', 8, 2, 0, 'action', '0 DAY ATTACK ON EARTH is an action shooter video game developed by Japanese studio Gulti and published by Square Enix for the Xbox 360. The game was released on December 23, 2009,[1] and revolves around players defending Paris, New York, and Tokyo from an'),
(29, 'bomberman', 'online', 7, 1, 0, 'action', 'Bomberman is a video game for the Xbox Live Arcade, developed by Backbone Entertainment. Bomberman Live is an original version of the classic game Bomberman, an arcade-style maze-based video game originally developed by Hudson Soft.'),
(30, 'bulets', 'online', 7, 2, 0, 'action', '10,000 Bullets, known in Japan as Tsukiyo ni Saraba, is an action/third-person shooter video game developed by Blue Moon Studio and published by Taito Corporation for the Sony PlayStation 2 video game console.'),
(31, 'batman', 'online', 7, 1, 0, 'action', 'Batman Forever is a beat \'em up video game based on the movie of the same name. Though released by the same publisher at roughly the same time, it is an entirely different game from Batman Forever'),
(32, 'mario', 'online', 10, 2, 0, 'action', 'Mario is a fictional character in the Mario video game franchise, owned by Nintendo and created by Japanese video game designer Shigeru Miyamoto.'),
(33, 'air raiders', 'online', 7, 2, 0, 'action', 'Air Raiders is an action game released for the Atari 2600 by Mattel in 1982. It received mixed reviews from critics.'),
(34, 'apex legends', 'online', 2, 8, 0, 'adventure', 'Apex Legends is a free-to-play battle royale game developed by Respawn Entertainment and published by Electronic Arts.'),
(35, 'amazing eternals', 'online', 1, 11, 1, 'adventure', 'The Amazing Eternals is an adventure video game, this game was an upcoming team-based multiplayer online first-person shooter video game developed and published by Digital Extremes.'),
(36, 'quaqe campions', 'online', 1, 9, 1, 'adventure', 'Quake Champions is a first-person shooter developed by id Software and published by Bethesda Softworks, as part of the Quake series of multiplayer shooters\r\nMORE INFO'),
(37, 'overwatch', 'online', 1, 14, 0, 'adventure', 'Overwatch is a team-based multiplayer first-person shooter developed and published by Blizzard Entertainment.'),
(38, 'valorant', 'online', 1, 13, 0, 'adventure', 'Valorant is an upcoming free-to-play multiplayer first-person shooter developed and published by Riot Games.'),
(39, 'evolve', 'online', 1, 8, 0, 'adventure', 'Evolve is a first-person shooter video game developed by Turtle Rock Studios, published by 2K Games.'),
(40, 'soccer', 'online', 2, 5, 0, 'sport', 'In Soccer game, players assume the role of the titular main protagonist who travels across several countries around the world in order to repair the World Cup'),
(41, 'nba', 'online', 2, 11, 1, 'sport', 'NBA 2K20 is a basketball simulation video game developed by Visual Concepts and published by 2K Sports, based on the National Basketball Association'),
(42, 'tenniskids', 'online', 2, 12, 0, 'sport', 'The TennisKids game is a realistic simulation of the sport table tennis, with the main objective to make the opponent fail to hit the ball.'),
(43, 'finalblow', 'online', 2, 14, 0, 'sport', 'The FinalBlow game features a single season boxing championship run. You can select from a group of fictional fighters: Dynamite Joe - The Miracle Man, Fernando Gomez - The South American Eagle.'),
(44, 'internationalkarate', 'online', 2, 16, 0, 'sport', 'International Karate is a fighting game developed and published by System 3 for various home computers'),
(45, 'bowling', 'online', 2, 11, 0, 'sport', 'In all six variations, games last for 10 frames, or turns. At the start of each frame, the current player is given two chances to roll a bowling ball down an alley in an attempt to knock down as many of the ten bowling pins as possible.'),
(46, 'forge of empiers', 'online', 2, 13, 0, 'strategy', 'Forge of Empires is a browser-based strategy game developed by InnoGames.'),
(47, 'grepolis', 'online', 2, 8, 0, 'strategy', 'Grepolis can be considered a 4X browser game. It requires a player to Exploit resources, Expand their cities, Explore the oceans, and to Exterminate opposition.'),
(48, 'tribal wars', 'online', 2, 9, 0, 'strategy', 'Tribal Wars is a browser-based game set in the Middle Ages. Every player controls a small village, striving for power and glory.'),
(49, 'the west', 'online', 2, 5, 0, 'strategy', 'Are you ready to help in the colonisation of the Wild West? Follow in the footsteps of Jesse James, Wyatt Earp, Doc Holliday, and other Western legends? Then join us in a unique adventure into the world of the Old West.'),
(50, 'elvenar', 'online', 2, 23, 0, 'strategy', 'At the beginning, you start with a limited area to build your city. The City Map is an area divided into tiles that looks like a square grid and where you can place your first buildings, in order to start your city\'s development.'),
(51, 'triviador', 'online', 2, 7, 0, 'strategy', 'Players take on the role of European countries sending expeditions to find gold and establish colonies. Although the design uses the trappings of board wargames such as a hex map, combat is not a major part of the game'),
(52, 'nascar', 'online', 1, 3, 0, 'vehicles', 'NASCAR Highlights is a game mode which takes the player through real-life situations from the preceding Sprint Cup Series season. The mode is a successor to the Lightning Challenges (later the Dodge Challenges) from the EA Sports NASCAR series. Like the A.I., the scenarios are constructed using in-race telemetry.'),
(53, 'car3', 'online', 1, 4, 0, 'vehicles', 'Train and advance your abilities in 6 game modes and challenge your family and friends in the Battle Race to become the Ultimate Champion. On the road to becoming a Hall of Fame Driver, training and skill will give you an edge in a race that anyone can win. Only in Car3.'),
(54, 'the word of cars', 'online', 1, 1, 0, 'vehicles', 'The World of Cars Online was a virtual world based on the Cars film series. The game was under development with Open Beta, which launched on March 1, 2010.'),
(55, 'racing', 'online', 1, 2, 0, 'vehicles', 'The racing video game genre is the genre of video games, either in the first-person or third-person perspective'),
(56, 'survive', 'online', 1, 3, 0, 'vehicles', 'Embark on an epic sci-fi, free-to-play adventure. Spacelords is a brand-new take on the shooter genre. Through its 4 vs 1 campaign, you experience both sides of the story: Join the Raiders in their fight to free the legendary Broken Planet, or switch sides and fight as the Antagonist alongside the invading hordes!'),
(120, 'JOC DE STERS', 'board', 0, 2, 0, 'fantasy', 'JOC DE STERS');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `images`
--

INSERT INTO `images` (`id`, `id_game`, `img1`, `img2`, `img3`) VALUES
(1, 1, 'img1', 'img2', 'img3'),
(2, 2, 'img4', 'img5', 'img6'),
(3, 3, 'img7', 'img8', 'img9'),
(4, 4, 'img10', 'img11', 'img12'),
(5, 5, 'img13', 'img14', 'img15'),
(6, 6, 'img16', 'img17', 'img18'),
(7, 7, 'img19', 'img20', 'img21'),
(8, 8, 'img22', 'img23', 'img24'),
(9, 9, 'img25', 'img26', 'img27'),
(10, 10, 'img28', 'img29', 'img30'),
(11, 11, 'img31', 'img32', 'img33'),
(12, 12, 'img34', 'img35', 'img36'),
(13, 13, 'img37', 'img38', 'img39'),
(14, 14, 'img40', 'img41', 'img42'),
(15, 15, 'img43', 'img44', 'img45'),
(16, 16, 'img46', 'img47', 'img48'),
(17, 17, 'img49', 'img50', 'img51'),
(18, 18, 'img52', 'img53', 'img54'),
(19, 19, 'img55', 'img56', 'img57'),
(20, 20, 'img58', 'img59', 'img60'),
(21, 21, 'img61', 'img62', 'img63'),
(22, 22, 'img64', 'img65', 'img66'),
(23, 23, 'img67', 'img68', 'img69'),
(24, 24, 'img70', 'img71', 'img72'),
(25, 25, 'img73', 'img74', 'img75'),
(26, 26, 'img76', 'img77', 'img78'),
(27, 27, 'img79', 'img80', 'img81'),
(28, 28, 'img82', 'img83', 'img84'),
(29, 29, 'img85', 'img86', 'img87'),
(30, 30, 'img88', 'img89', 'img90'),
(31, 31, 'img91', 'img92', 'img93'),
(32, 32, 'img94', 'img95', 'img96'),
(33, 33, 'img97', 'img98', 'img99'),
(34, 34, 'img100', 'img101', 'img102'),
(35, 35, 'img103', 'img104', 'img105'),
(36, 36, 'img106', 'img107', 'img108'),
(37, 37, 'img109', 'img110', 'img111'),
(38, 38, 'img112', 'img113', 'img114'),
(39, 39, 'img115', 'img116', 'img117'),
(40, 40, 'img118', 'img119', 'img120'),
(41, 41, 'img121', 'img122', 'img123'),
(42, 42, 'img124', 'img125', 'img126'),
(43, 43, 'img127', 'img128', 'img129'),
(44, 44, 'img130', 'img131', 'img132'),
(45, 45, 'img133', 'img134', 'img135'),
(46, 46, 'img136', 'img137', 'img138'),
(47, 47, 'img139', 'img140', 'img141'),
(48, 48, 'img142', 'img143', 'img144'),
(49, 49, 'img145', 'img146', 'img147'),
(50, 50, 'img148', 'img149', 'img150'),
(51, 51, 'img151', 'img152', 'img153'),
(52, 52, 'img154', 'img155', 'img156'),
(53, 53, 'img157', 'img158', 'img159'),
(54, 54, 'img160', 'img161', 'img162'),
(55, 55, 'img163', 'img164', 'img165'),
(56, 56, 'img166', 'img167', 'img168'),
(58, 120, 'poza1', 'poza1', 'poza1'),
(59, 121, 'poza1', 'poza1', 'poza1');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `infogames`
--

CREATE TABLE `infogames` (
  `id_joc` int(11) NOT NULL,
  `nr_jucatori` varchar(100) NOT NULL,
  `dificultate` varchar(100) NOT NULL,
  `varsta` varchar(100) NOT NULL,
  `timp_de_joc` varchar(1000) NOT NULL,
  `descriere` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `infogames`
--

INSERT INTO `infogames` (`id_joc`, `nr_jucatori`, `dificultate`, `varsta`, `timp_de_joc`, `descriere`) VALUES
(1, '1-5', ' medium', '8+', '40-70 min', 'Wingspan is a competitive, medium-weight, card-driven, engine-building board game from Stonemaier Games. You are bird enthusiasts—researchers, bird watchers, ornithologists, and collectors—seeking to discover and attract the best birds to your network of wildlife preserves. Each bird extends a chain of powerful combinations in one of your habitats (actions).'),
(2, '2+', 'medium', '14+', '30-50 min', 'Blinded by Science is for people who understand the meaning of deoxyribonucleic acid. Curie, Darwin, Galileo, Tesla, Turing...if these are some of your heroes, then this game is for you! Each card covers a different scientific subject, and includes three questions with increasing degrees of difficulty. If you\'re a trivia buff and science is your thing, then this game is probably in your DNA.'),
(3, '2-5', '2.50/5', '10+', '60-90 min', 'Cytosis: A Cell Building Game is a worker placement game that takes place inside a human cell. Players start out with a number of workers and on a player’s turn, they will place one of their workers in any available location within that cell. Some of the locations provide players with resources (e.g., mRNA, ATP); some with actions (e.g., convert resources, collect cards). Resources are used to build enzymes, hormones and/or receptors, which score Health Points. The player with the most Health Points at the end of the game wins!'),
(4, '2-5', '2.50/5', '10+', '60-90 min', 'The simple strategy game at the core of Evo is made more interesting by the constantly changing climate. Positions which can be advantageous in one turn are often deadly a few turns later, so unlike many games where a winning player can come to dominate the game, the balance of power shifts frequently.'),
(5, '2-4', '2/5', '15+', '30-45 min', 'Throughout the centuries, mad scientists have always encountered the same problem of very limited access to the dangerous resources they require. To solve this problem, the Mad Science Foundation was created. Now these \"misunderstood geniuses\" can finally get the access they need to the four vital building blocks of mad science: Lasers, Dark Matter, Cryptomium, and Sharks.'),
(6, '2-8', '2/5', '7+', '30 min', 'Professor Noggin takes Science out of the classroom and into this entertaining trivia game. See what you know, and learn surprising new facts as you go. Wonders of Science will create science wonderment for all who play.Players take turns rolling the die and asking each other questions from the cards. If a question is answered correctly, the card is won; if answered incorrectly, the card is returned to the bottom of the pile. The player with the most cards at the end of the game is the winner. Players have a few chances throughout the game to get a Noggin\'s Choice card. This means they can choose a card from any other player, and get ahead. Remember the correct answers. If a question is not answered correctly the first time, that question will come up again.'),
(7, '3-6', '2/5', '9+', '40-50 min', 'Keep Cool is a board game created by Klaus Eisenack and Gerhard Petschel-Held of the Potsdam Institute for Climate Impact Research and published by the German company Spieltrieb in November 2004. The game can be classified as both a serious game and a global warming game. In Keep Cool, up to six players representing the world\'s countries compete to balance their own economic interests and the world\'s climate in a game of negotiation. The goal of the game as stated by the authors is to \"promote the general knowledge on climate change and the understanding of difficulties and obstacles, and \"to make it available for a board game and still retain the major elements and processes.\" Empirical studies have shown that Keep Cool can facilitate experiential learning about the difficulties of international climate politics.'),
(8, '2-6', '1/5', '5+', '60 min', 'The UNGAME was designed for YOU to experience the fun of learning how to communicate more effectively. As you share thoughts, ideas and feelings, you will develop a deeper understanding of others and of yourself. Each person\'s ability to respond and become involved will improve as he continues to TELL IT LIKE IT IS. You\'ll find the UNGAME both entertaining AND educational.'),
(9, ' 2-5', '2/5', '12+', '60 min', 'The board game Kolejka (a.k.a. Queue) tells a story of everyday life in Poland at the tail-end of the Communist era. The players\' task appears to be simple: They have to send their family members out to various stores on the game board to buy all the items on their shopping list. The problem is, however, that the shelves in the five neighborhood stores are empty.'),
(10, ' 2-4', '2/5', '8+', '120 min', '\"Scrabble with math\" is how this game is generally described, and the description is apt. The board is much like a Scrabble board, including spaces equivalent to \"double-word score\" and \"triple-letter score\". The difference is that, instead of placing words formed of letters, players of Equate place equations formed of numbers and symbols on the board. The beginners game (consisting mostly of addition and subtraction of integers) is pretty simple, but the standard game, bringing in multiplication, division, and fractions, can be something of a brain-burner.'),
(11, '2', '1.5/5', '9+', '60 min', 'Battle Masters is a fantasy miniatures battle game by Milton Bradley, presumably licensed from Games Workshop. The sizeable game box comes stuffed with tons of plastic miniatures, a deck of combat cards and some dice. Players move and fight their armies based upon what card is turned over from the deck. Combat is held on a large vinyl mat 4.5 ft square'),
(12, '2-4', '4.5/5', '11+', '90 min', 'Blood Bowl: Team Manager - The Card Game is a bone-breaking, breathtaking standalone card game of violence and outright cheating for two to four players. Chaos, Dwarf, Wood Elf, Human, Orc, and Skaven teams compete against each other over the course of a brutal season. Customize your team by drafting Star Players, hiring staff, upgrading facilities, and cheating like mad. Lead your gang of misfits and miscreants to glory over your rivals all to become Spike! Magazine s Manager of the Year!'),
(13, '2', '1.5/5', '11+', '80 min', 'Escape from Atlantis is similar to the Parker Brothers game Survive! but with some key differences (e.g., people pawns are not worth a variable number of points). In 2010, a reworked version of Escape from Atlantis which combines the rules of the game along with the rules to Survive! was printed by Stronghold Games titled \"Survive: Escape from Atlantis!\"'),
(14, '4', '1.5/5', '9+', '45 min', 'A game created by Games Workshop in the mid 80s that puts each player in the position of being an orcish general who must muster his troops into three battle lines in preparation of attacking the dwarves. Each player begins with a blank card mat which is slowly filled with cards that represent different units of orcs, goblins, war machines, and treasure. Each card has its own rules which affect play.'),
(15, '5-6', '3/5', '9+', '50-60 min', 'Dark Tower was technologically impressive when it was released in 1981. Gameplay was facilitated by a small computer inside the black plastic shell of the tower itself. Players input their moves on a small membrane keypad each turn and the computer took over from there, doing everything from conducting the progress of battles to keeping track of how much (or little) food was left to feed the players always hungry warriors. The computer would play brief musical serenades at significant points of the game.'),
(16, '3-4', '2.5/5', '7+', '45 min', '7 Days of Westerplatte is a cooperative war game. The players incorporate the roles of Polish commanders who work together to confront the German army and win the game. Stukas s raids, land troop attacks, and battleship and howitzer bombardments are the biggest threat for Polish forces, and to hold back the attacking German troops, players must use land mines, mortars and rifles, while also remembering to rebuild the defensive structures and keep their morale high. Will you manage to defend the Depot for seven days, or will you succumb to the enemy s crushing power?'),
(17, '8-9', '1.5/5', '8+', '45-60 min', 'It depicts WWII on a grand scale, full global level. Up to five players can play on two different teams. The Axis which has Germany and Japan, and the Allies which has the USA, the United Kingdom, and the USSR. A full map of the world is provided, broken up in various chunks similar to Risk. The game comes with gobs of plastic miniatures that represent various military units during WWII.'),
(18, '4-6', '1.5/5', '10+', '60-80 min', 'In 1413, the new king of England, Henry V of Lancaster, has ambitious plans: The unification of England and the conquest of the French crown! Each player takes the role of an ambitious aristocratic family. Who will be the best supporter of this young king, and the most powerful Lord of his time?'),
(20, '7-8', '5/5', '9+', '120-150 min', 'Carcassonne is a tile-placement game in which the players draw and place a tile with a piece of southern French landscape on it. The tile might feature a city, a road, a cloister, grassland or some combination thereof, and it must be placed adjacent to tiles that have already been played, in such a way that cities are connected to cities, roads to roads, etcetera.'),
(21, '8-9', '4.5/5', '10+', '60-70 min', 'In 1960: The Making of the President, you take on the role of one of these great protagonists vying for the right to lead his country into the heart of the Cold War. However, it is not just foreign policy that poses a challenge to American leadership; this is also an era of great social turmoil and progress.'),
(22, '7-8', '3.5/5', '10+', '50-60 min', 'The \"Stone Age\" times were hard indeed. In their roles as hunters, collectors, farmers, and tool makers, our ancestors worked with their legs and backs straining against wooden plows in the stony earth. Of course, progress did not stop with the wooden plow. People always searched for better tools and more productive plants to make their work more effective. In Stone Age, the players live in this time, just as our ancestors did.'),
(23, '4-5', '1.5/5', '9+', '45 min', 'Welcome to the experiential table top game that is going to redefine what it means to play a game. Nyctophobia, which means \"fear of the dark\", is a cooperative game of survival in which up to four players must work together to escape a maniacal predator chasing them in a pitch-black forest. But there s a wrinkle: Would-be survivors play the game with blackout glasses. Players cannot see the board and have to rely on touch to navigate their way to safety. So, are you afraid of the dark?'),
(24, '6-7', '3.5/5', '11+', '50-60 min', 'Betrayal at House on the Hill quickly builds suspense and excitement as players explore a haunted mansion of their own design, encountering spirits and frightening omens that foretell their fate. With an estimated one hour playing time, Betrayal at House on the Hill is ideal for parties, family gatherings or casual fun with friends.'),
(25, '4', '1.5/5', '11+', '45-65 min', 'Zombicide is a collaborative game in which players take the role of a survivor – each with unique abilities – and harness both their skills and the power of teamwork against the hordes of unthinking undead! Zombies are predictable, stupid but deadly, controlled by simple rules and a deck of cards. Unfortunately for you, there are a LOT more zombies than you have bullet'),
(26, '4-7', '4/5', '9+', '45 min', 'The lightning fast shape and color recognition game that is sure to test the reflexes of kids, families and gamers alike. In Ghost Blitz, five wooden items sit on the table waiting to be caught: a white ghost, a green bottle, a cute grey mouse, a blue book, and a comfortable red chair. Each card in the deck shows pictures of two objects, with one or both objects colored the wrong way. With all players playing at the same time, someone reveals a card, then players grab for the \"right\" object – but which object is right?'),
(27, '6-7', '1.5/5', '10+', '60-90 min', 'Dead of winter puts players in a small colony of survivors who must work together towards group victory, but at the same time, players must also complete a personal objective to win as individuals. Players often have to decide what’s best for the colony and best for themselves, which creates high-stakes gameplay.'),
(28, '4-5', '3.5/5', '9+', '80 min', 'Mansions of Madness: Second Edition is a fully cooperative, app-driven board game of horror and mystery for one to five players that takes place in the same universe as Eldritch Horror and Elder Sign. Let the immersive app guide you through the veiled streets of Innsmouth and the haunted corridors of Arkham s cursed mansions as you search for answers and respite.'),
(29, '2', '2.5/5', '10+', '20 min', '0 DAY ATTACK ON EARTH is designed as a twin-stick shooter in its core, where the movement is done with the left stick and shooting with the right.There is a main goal in each level, which is to take down a certain number of boss aliens before a timer goes down to zero. However, the skies are also filled with smaller ships, and there are pods and snakes that burst from the ground. Aiding the fight against the enemies are power-ups like spray gun and flame throwers, as well as special abilities like nitro boost that helps moving the ship out of any harm.0 Day Attack on Earth consists of 28 levels that are split in groups of seven that take place in four cities.Each city is accurately depicted through satellite imagery,containing landmarks like Champs-Élysées, Tokyo Tower, and Arc de Triomphe. One of the features included is co-op play for up to four players (when playing offline, AI-controlled ships will support the player instead). Besides co-op, there are Capture the Flag and Capture Point multiplayer modes.'),
(30, '4', '1.5/5', '9+', '45 min', 'Most games in the Bomberman franchise largely revolve around two modes of play; single player campaigns where the player must defeat enemies and reach an exit to progress through levels, and multiplayer modes where players must attempt to eliminate each other and be the last one standing. Gameplay involves strategically placing down bombs, which explode in multiple directions after a certain amount of time, in order to destroy obstacles and kill enemies and other players. The player can pick up various power-ups, giving them benefits such as larger explosions or the ability to place more bombs down at a time. The player is killed if they touch an enemy or get caught up in a bomb s explosion, including their own, requiring players to be cautious of their own bomb placement. In addition to the main maze-based Bomberman games, some spin-off titles involve adventure, platformer, puzzle, and kart racing gameplay.'),
(31, '2-3', '1.5/5', '12+', '10-15 min', '10.000Bulets: is a worker placement game that takes place inside a human cell. Players start out with a number of workers and on a player’s turn, they will place one of their workers in any available location within that cell. Some of the locations provide players with resources (e.g., mRNA, ATP); some with actions (e.g., convert resources, collect cards). Resources are used to build enzymes, hormones and/or receptors, which score Health Points. The player with the most Health Points at the end of the game wins!'),
(32, '2', '3.5/5', '10+', '10 min', 'is an action-adventure game set within an open world Gotham City, which can be explored freely by the player from the beginning of the game, allowing them to travel seamlessly anywhere within its boundaries. Many of the gadgets and the gameplay elements from the previous Arkham games return, including the grapnel gun, line launcher, batarangs, the countering system, Detective Vision, and the Remote Hacking Device'),
(33, '1', '5/5', '6+', '10-15 min', 'In Mario , the player takes on the role of Mario, the protagonist of the series. Mario s younger brother, Luigi, is controlled by the second player in the game s multiplayer mode and assumes the same plot role and functionality as Mario. The objective is to race through the Mushroom Kingdom, survive the main antagonist Bowser s forces, and save Princess Toadstool.'),
(34, '2', '3.5/5', '9+', '25 min', 'The player has the view of an airstrip as seen from the cockpit of a jet fighter. In order to start the launch, it is required that the player presses the fire button. When the player pulls back on the joystick, the jet fighter becomes airborne. A feature of the game includes a horizontal tilt that happens when the jet fighter turns to the left or the right for realistic simulation. The goal is to fire at enemy aircraft. The player also has to worry about not making a quick dive after an enemy craft that would lead to a crash landing. There is also a bar that is located on the width of the screen that allows the player to keep track of the horizontal position. It is important to stay out of heavy unfire zones because it can lead to a nosedive crash. It is possible to pull out of a nosedive, but it would be a better idea for the player to avoid flak.'),
(35, '2-4', '2.5/5', '7+', '45 min', 'Apex Legends is an online multiplayer battle royale game featuring squads of three players using pre-made characters , similar to those of hero shooters. Alternate modes have been introduced allowing for single and for two-player squads since the game s release'),
(36, '4', '1.5/5', '9+', '45 min', 'Most games in the AMAZING ETERNALS franchise largely revolve around two modes of play; single player campaigns where the player must defeat enemies and reach an exit to progress through levels, and multiplayer modes where players must attempt to eliminate each other and be the last one standing. '),
(37, '2-4', '3.5/5', '10+', '25 min', 'In Quake s single-player mode, players explore and navigate to the exit of each Gothic and dark level, facing monsters and finding secret areas along the way. Usually there are switches to activate or keys to collect in order to open doors before the exit can be reached. Reaching the exit takes the player to the next level. Before accessing an episode, there is a set of three pathways with easy, medium, and hard skill levels. The fourth skill level, \"Nightmare\", was \"so bad that it was hidden, so people won t wander in by accident\"; the player must drop through water before the episode four entrance and go into a secret passage to access it.'),
(38, '2', '1.5/5', '9+', '10-15 min', 'Overwatch is an online team-based game generally played as a first-person shooter. The game features several different game modes, principally designed around squad-based combat with two opposing teams of six players each. Players select one of over two dozen pre-made hero characters from one of three class types: Damage heroes that deal most of the damage to attack or defend control points, Tank heroes that can absorb a large amount of damage, and Support heroes that provide healing or other buffs for their teammates.'),
(39, '4', '1.5/5', '9+', '45 min', 'Valorant is an upcoming free-to-play multiplayer first-person shooter developed and published by Riot Games.'),
(40, '1', '1.5/5', '7+', '45-60 min', 'Evolve is an action video game with a focus on both co-operative, and competitive, multiplayer gameplay. The game adapts a 4v1 asymmetrical structure where four players take control of the Hunters, while the fifth player controls the Monster. The Hunters  main objective is to track and hunt the Monster in a limited amount of time, while the Monster s goal is to evolve and make themselves more powerful.'),
(41, '1', '2.5/5', '9+', '30 min', 'Soccer Kid is a platform game where players take control of the titular character travelling across the world in order to retrieve and restore the world cup from the clutches of the alien pirate Scab, who plans to add it to his ever-growing collection. By pressing different buttons at the title screen, the player can change the colours of their character s clothes in order to represent their favorite team.'),
(42, '4', '1.5/5', '9+', '45 min', 'NBA 2K20 is a basketball simulation game which, like the previous games in the series, strives to realistically depict the National Basketball Association (NBA), as well as present improvements over the previous installments. The player mainly plays NBA games with real-life or customized players and teams; games follow the rules and objectives of NBA games. Several game modes are present and many settings can be customized. Up to six expansion teams can be created and used in both MyLeague and MyGM Modes, with the possibility of a 36-team league, and any team can be relocated and rebranded.'),
(43, '2', '2.5/5', '8+', '30 min', 'Rockstar Games Presents Table Tennis is a realistic simulation of the sport of table tennis. In the game, two players hit a ball back and forth from one another. The goal of the game is to make the opponent fail to return the ball. Players have the ability to challenge a multiplayer partner, either offline or online, or can select to challenge the game s artificial intelligence.Players can select from a roster of eleven characters, which are unlocked as they progress through the game; each character has particular skills in different areas.'),
(44, '1', '2/5', '9+', '35 min', 'The game is a side-scrolling boxing game where the player moves left and right to control a screen sized boxer. When the timing is right, the player can unleash a final blow punch which can sometimes KO the opponent in a single strike. The home versions contain a spectator mode where the player can watch their favorite boxers compete.'),
(45, '1', '1.5/5', '7+', '30 min', 'The core game is a two-dimensional, one-on-one, versus fighting game. Players take on the roles of martial artists competing in a kumite tournament. Rather than wearing down an opponent s health, the goal is instead to score single solid hits. After each hit, combat stops and both combatants are returned to their starting positions. Depending on how well players hit their opponent, they score either a half-point or a full point. Matches can be quite brief, as only two full points are required to win, and a point can be quickly scored just seconds after a round begins.'),
(46, '1', '1.5/5', '8+', '45 min', 'The bowler (on the left side of the screen) may move up and down his end of the alley to aim before releasing the ball. In four of the game s six variations, the ball can be steered before it hits the pins. Knocking down every pin on the first shot is a strike, while knocking every pin down in both shots is a spare. The player s score is determined by the number of pins knocked down in all 10 frames, as well as the number of strikes and spares acquired.'),
(47, '1', '2.5/5', '6+', '40-60 min', 'The main goal of the game is to expand and develop a city, evolving from the Stone Age to the Colonization of Mars. The city has houses that provide coins and population, production buildings that provide tools, buildings that produce goods, and decorations that provide happiness. Forge points, with a meter that refills in time, allow to research technologies, which unlock new buildings, more building space and other bonuses.'),
(48, '1-2', '1.5/5', '9+', '45 min', 'All of your buildings, units, spells, and research will need some or all of these resources. Once you build the basic level for the timber camp, quarry, and silver mine you will begin to receive those resources automatically. The rate at which you generate those resource will depend on your island type. Divine Favor will only begin to accumulate once you select a god to worship in your city. The higher the level of your Timber Camp, Quarry, Silver Mine, and Temple the more quickly you will gain resources.'),
(49, '2-3', '1.5/5', '9+', '50-60 min', 'Tribal Wars has to be played with the supported browsers over the official web versions or the official and updated mobile apps. Any kind of action in the game has to be done by hand or by a selection of permitted scripts and tools only.'),
(50, '1', '2.5/5', '6+', '25 min', 'Discover new lands and experience exciting adventures and duels! The West awaits!'),
(51, '2-3', '3/5', '10+', '45 min', 'The gameplay of both races will be pretty similar but your choice will influence some main traits: The look of your city will depend upon the race you’ve picked. Elves are magical beings, and live in close harmony with nature. Their building design will be very sophisticated. Humans are very ambitious and determined meaning they have a more medieval and industrialized style. The military units that you have at your disposal will also differ. For example, Elves will rely, amongst others, on Treants and Humans on Axe Barbarians.'),
(52, '2-4', '3.5/5', '9+', '20 min', 'The basic game can be played by two to four players, representing the activities of Spain, England, France or Portugal. The game also includes a solitaire scenario where Spain is played by a single player, and the original SPI edition included optional rules for an additional player to take a purely financial role as the German bankers.'),
(53, '2', '1/5', '7+', '20 min', 'NASCAR Heat 4 is the official video game of NASCAR. Looking and sounding better than ever with updated user interface, graphics and engine audio, race across 38 tracks in all three NASCAR National Series plus the fan-favorite Xtreme Dirt Tour.'),
(54, '1', '1.5/5', '9+', '10 min', 'Race thru the city, desert & snow! Dodge obstacles and other cars to grab power-ups & coins. Use your coins to add upgrades and unlock more races & cars. Earn extra coins on HotWheels.com to use in the game! Go for it!'),
(55, '2', '2.5/5', '9+', '20 min', 'The World of Cars Online allowed users to customize their own car, chat with other players, decorate their own yard, race against friends, and complete different quests with all of their favorite movie characters. There were also different mini games to earn coins such as Mater s Tractor Tipping.'),
(56, '2', '1/5', '6+', '20 min', ' Race down the road to the finish line as a Team Hot Wheels driver! You can compete as Gage, Brandon, Wyatt or Rhett and race in their signature vehicle, too! Avoid obstacles and collect power-ups to win each level to take the next course! Go for it!'),
(57, '4', '1.5/5', '9+', '45 min', 'To play, a player starts the game as the Pilot of the ship, controlling the direction and speed at which the ship travels, and shooting the lasers and nukes directly ahead at whatever was in the center of the screen. Incoming nukes can be avoided using the \"Hyperspace\" control.');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `likes`
--

CREATE TABLE `likes` (
  `id_user` int(11) NOT NULL,
  `id_game` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `likes`
--

INSERT INTO `likes` (`id_user`, `id_game`) VALUES
(8, 1),
(8, 2),
(8, 3),
(8, 4),
(8, 5),
(8, 6),
(8, 28),
(8, 30),
(8, 31),
(8, 32),
(8, 33),
(9, 1),
(9, 2),
(9, 3),
(9, 5),
(9, 28),
(9, 29),
(9, 30),
(9, 32),
(9, 33),
(25, 1);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `regulijoc`
--

CREATE TABLE `regulijoc` (
  `id_joc` int(11) NOT NULL,
  `regula1` varchar(1000) DEFAULT NULL,
  `regula2` varchar(1000) DEFAULT NULL,
  `regula3` varchar(1000) DEFAULT NULL,
  `regula4` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `regulijoc`
--

INSERT INTO `regulijoc` (`id_joc`, `regula1`, `regula2`, `regula3`, `regula4`) VALUES
(1, 'Players can take a limited number of four types of action each round: drawing new birds, placing birds from their hand into their habitat, collecting food, and laying eggs, which have to be spent in order to play the birds', 'The strength of each action depends on how many cards are already in that habitat, and additional bonus actions are activated by the birds which are already in the habitat which represents that action.', 'In addition to putting birds into their habitats, players score points for objectives achieved during each round and throughout the whole game, eggs accumulated, and food and cards stored on other cards, which represent food collection and predation by a player s birds', 'The winner is the player with the most points after 4 rounds.'),
(2, 'Players answer science-based trivia questions for points.', 'Each card covers a different scientific subject and has three questions with increasing degrees of difficulty.', 'Once a predetermined number of cards have been read, highest score wins.', NULL),
(3, 'Players must build up their antibodies for each viral strain to help them defend against the attacking viruses!', 'At the beginning of the game, each character will select a color and take the pieces of the color that they have selected.', 'The game board is laid out and the players will place one of their marker tokens onto the 0 space of the scoring track.', 'The Cell Component and Event cards are separated by type, shuffled, and placed face down closeby to form draw piles.'),
(4, 'Initiative : the order players will act in is determined by the number of \"tail\" mutations they have. Ties are resolved by roll-offs on a six-sided die.', 'Climate:a six-sided die is rolled to determine how the climate changes. Normally it proceeds in a cycle from hot to cold and back again, but on a 5 it stays the same, and on a 6 it moves in the opposite direction to the expected one.', 'Movement and Combat: players can move their dinos. The more \"leg\" mutations they have, the further they can move their dinos. If they attempt to move into a space occupied by another dino, they must fight.', 'Birth: players can add one new dino to the board for each \"egg\" mutation they possess, next to their existing dinos.'),
(5, ' In the quest for infamy, directors will be bribed, resources will be reallocated, spies will be dispatched, inventions will be sabotaged, and big, ominous buttons will be pressed with catastrophic results.', 'Each round, one player controls the Crooked Director for that round. They then separate the available commodities into piles to be drafted.', 'It s up to the scientist controlling the Director to determine the value of whatever resources are available and separate them into piles.', 'Players then take turns selecting which pile of goodies to grab, with the Director s controller choosing last.'),
(6, NULL, NULL, NULL, NULL),
(7, 'Each of the countries has a distinct starting position in the game and some have special abilities/bargaining chips which can greatly affect negotiation.', 'The United States begins the game with the most factories on the board (five black and one green) and always goes first.', 'Europe begins with three black factories and one green, and the Tiger Countries begin with two black.', 'The Former Soviet Union begins the game with one of each kind of factory, but has the special prerogative to demand one carbonchip from any player at the beginning of their turn.'),
(8, ' When your piece lands on a space, you do what that space says, usually draw a card or answer the question on the board.', 'The goal of the game is to connect to the other players on a deeper level.', 'Only the individual players can determine to what extent they have won.', ' Themes for the game and depth of questions shift with varying decks of cards and expansions.'),
(9, 'The players line up their pawns in front of the shops without knowing which shop will have a delivery.', ' To get ahead, the people in the queue use a range of queuing cards, such as \"Mother carrying small child\", \"This is not your place, sir\", or \"Under-the-counter goods\". But they have to watch out for \"Closed for stocktaking\", \"Delivery error\", and for the black pawns – the speculators – standing in the queue.', 'Only those players who make the best use of the queuing cards in their hand will come home with full shopping bags.', NULL),
(10, NULL, NULL, NULL, NULL),
(11, 'You and your opponent must strategically guide 25 army units, featuring over 100 finely-detailed figures, across the gigantic 4 1/2 X 5 Battle Mat', 'The battle unfolds as each turn of a Battle card tells which army units can move and which can attack.', 'When a card is drawn the unit or units whose picture(s) is on the card is allowed to first move and then attack (with the exception of archers, crossbowmen and the mighty cannon, who may move or attack).', 'In some instances the card may show multiple units in which case all of those units may move and attack.'),
(12, 'Once a manager has chosen one of the six teams, he has five weeks to groom them into the best in the league, culminating with the Blood Bowl tournament.', 'Managers begin the season with a starting team deck full of basic scrub players.', ' These players are none too bright and have limited talents, but a clever manager can play to their strengths by carefully positioning them to excel on the pitch.', 'The more highlights a team wins, the more it improves and the more fans it accumulates.'),
(13, ' Each player controls 12 Atlantean Tribesmen that they try and move towards the safety of the surrounding islands before the main island sinks', 'Players can either swim, latch onto a dolphin, or use boats to travel but must avoid sea monsters, octopuses, and sharks on their way to safety.', NULL, NULL),
(14, 'Once a battle line is completed with a standard at the front, a musician at the rear, and all the spaces filled in between, it can be used to disrupt another player s unfinished battle line.', 'The games ends when a player has all three lines completed.', 'Each card has a point value which is then tallied and added to a bonus score for any completed battle lines.', 'Also, many of the cards used to relate to old Citadel ork and goblin miniatures, in theory.'),
(15, 'To vanquish the usurper, players search the four realms of the circular game board for three keys to unlock the tower s gate.', 'On this journey, there are battles to be fought against roving bands of brigands, dragons, plague and hunger.', 'There are bazaars to visit to purchase supplies and assistants for the quest. There are uncharted territories to get lost in and tombs and ruins to plunder.', 'And there is a mighty army to be raised before the player can lay siege to the tower and fight either to glorious victory or crushing defeat.'),
(16, NULL, NULL, NULL, NULL),
(17, 'Players have at their disposal infantry, armor, fighters, bombers, battleships, aircraft carriers, submarines, troop transports, anti-air guns, and factories', 'All of the units perform differently and many have special functions.', 'Players have to work together with their teammates in order to coordinate offenses and decide how best to utilize their production points.', ' Players also have the option of risking production resources on the possibility of developing a super technology that might turn the tide of war.'),
(18, 'In Lancaster, the players want to proceed from simply being a Lord to being the most powerful ally of the king.', 'They may achieve this by developing their own knighthood, as well as by clever deployment of individual knights in the counties of England, at their own castle, and to conflicts with France.', ' In parliament, they try to push laws from which they will benefit themselves most.', 'The player with the most power points at the end of the game is the winner.'),
(19, ' Having placed a tile, the player can then decide to place one of their meeples on one of the areas on it: on the city as a knight, on the road as a robber, on a cloister as a monk, or on the grass as a farmer.', 'When that area is complete, that meeple scores points for its owner.', ' Since players place only one tile and have the option to place one meeple on it, turns proceed quickly even if it is a game full of options and possibilities.', NULL),
(20, 'As with any election campaign, the challenge is to adapt your game plan as the ground shifts out from under you.', 'There are never enough resources or time to do everything, but you need to make the tough calls to propel yourself into the White House.', 'This fast-playing strategy game for two players challenges you to run for the most powerful elective office in the world, at one of its most unique crossroads.', 'Candidates vie to capture each state’s electoral votes using campaign points in the four different regions of the country. At the same time, they must build momentum by dominating the issues of the day and attempt to gain control of the airwaves.'),
(21, ' Players use up to ten tribe members each in three phases.', ' In the first phase, players place their men in regions of the board that they think will benefit them, including the hunt, the trading center, or the quarry.', 'In the second phase, the starting player activates each of his staffed areas in whatever sequence he chooses, followed in turn by the other players.', 'In the third phase, players must have enough food available to feed their populations, or they face losing resources or points.'),
(22, 'All but one of the players play the game completely unable to see the board.', ' The blinded players make up the Hunted team.', 'They are tasked with finding the car space on the board and surviving until the police arrive to rescue them.', 'The sighted player is the Hunter, who is tasked with chasing down the Hunted and reducing one of the Hunted to zero health before the police arrive.'),
(23, 'The game is designed for three to six people, each of whom plays one of six possible characters.', ' Secretly, one of the characters betrays the rest of the party, and the innocent members of the party must defeat the traitor in their midst before it’s too late!', 'Betrayal at House on the Hill will appeal to any game player who enjoys a fun, suspenseful, and strategic game.', ' Betrayal at House on the Hill includes detailed game pieces, including character cards, pre-painted plastic figures, and special tokens, all of which help create a spooky atmosphere and streamline game play.'),
(24, 'Find weapons, kill zombies.', ' The more zombies you kill, the more skilled you get; the more skilled you get, the more zombies appear.', ' The only way out is zombicide!', ' Play ten scenarios on different maps made from the included modular map tiles, download new scenarios from the designer s website, or create your own!'),
(25, 'f one object is colored correctly – say, a green bottle and a red mouse – then players need to grab that correctly colored object.', 'If both objects are colored incorrectly – say, a green ghost and a red mouse – then you look for the object and color not represented among the four details shown.', ' In this case you see green, red, ghost and mouse, so players need to grab the blue book.', ' The first player to grab the correct object keeps the card, then reveals the next card from the deck. If a player grabs the wrong object, she must discard one card previously collected.'),
(26, NULL, NULL, NULL, NULL),
(27, 'Each game takes place within a pre-designed story that provides players with a unique map and several combinations of plot threads.', ' These threads affect the monsters that investigators may encounter, the clues they need to find, and which climactic story ending they will ultimately experience.', ' One player takes on the role of the keeper, controlling the monsters and other malicious powers within the story.', 'The other players take on the roles of investigators, searching for answers while struggling to survive with their minds intact.'),
(28, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL),
(30, '10,000 Bullets is an action/third-person shooter in which the gun-wielding player character battles numerous enemies and bosses in different environments.', ' Styled similar to cinematography found in The Wachowskis The Matrix film franchise and gameplay mechanics in games such as Dead to Rights and Max Payne, the player is given an ability to slow down time and thus dodge multitudes of flying bullets and other obstacles.', '', ''),
(31, NULL, NULL, NULL, NULL),
(32, 'In Mario , the player takes on the role of Mario, the protagonist of the series.', ' Mario s younger brother, Luigi, is controlled by the second player in the game s multiplayer mode and assumes the same plot role and functionality as Mario.', ' The objective is to race through the Mushroom Kingdom, survive the main antagonist Bowser s forces, and save Princess Toadstool.', ''),
(33, NULL, NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL),
(35, NULL, NULL, NULL, NULL),
(36, NULL, NULL, NULL, NULL),
(37, NULL, NULL, NULL, NULL),
(38, NULL, NULL, NULL, NULL),
(39, NULL, NULL, NULL, NULL),
(40, NULL, NULL, NULL, NULL),
(41, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL),
(43, NULL, NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL),
(49, 'it is allowed for two players to use the same means of connection, provided each player only controls the actions of his/her assigned account', 'every player sharing a means of connection must abide by rule', '', ''),
(50, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL),
(54, 'Each car was given 2,010 coins, an Open Beta Participant Badge, and a Founder Badge.', ' The game was closed down by Disney on February 8, 2012, after failing to attract enough players.', '', ''),
(55, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `tournament`
--

CREATE TABLE `tournament` (
  `id_turneu` int(11) NOT NULL,
  `id_joc` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nume_joc` varchar(100) NOT NULL,
  `nume_creator` varchar(100) NOT NULL,
  `data_creare` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `data_turneu` date NOT NULL,
  `nr_jucatori` int(11) NOT NULL,
  `premiu` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `locatie` varchar(100) NOT NULL,
  `titlu_turneu` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `tournament`
--

INSERT INTO `tournament` (`id_turneu`, `id_joc`, `id_user`, `nume_joc`, `nume_creator`, `data_creare`, `data_turneu`, `nr_jucatori`, `premiu`, `category`, `type`, `locatie`, `titlu_turneu`) VALUES
(1, 29, 1, 'bomberman', 'denisa', '2020-05-21 19:00:00', '2020-05-22', 4, 100, 'online', 'action', 'online', 'turneu1'),
(2, 51, 3, 'triviador', 'vlad', '2020-05-21 20:00:00', '2020-05-23', 3, 200, 'online', 'strategy', 'online', 'turneu2'),
(3, 3, 2, 'cytosis', 'adelina', '2020-05-20 09:20:00', '2020-05-24', 5, 50, 'board', 'biology', 'copou', 'turneu3'),
(4, 1, 2, 'wingspan', 'denisa', '2020-05-30 09:05:00', '2020-06-10', 4, 100, 'board', 'biology', 'home', 'turneu4'),
(7, 1, 1, 'wingspan', 'denisa', '2020-06-03 05:30:00', '2020-07-01', 4, 100, 'board', 'biology', 'home', 'myTurneu'),
(8, 8, 8, 'ungame', 'denisabadarau', '2020-06-09 19:50:25', '2020-06-17', 4, 150, 'educational', 'board', 'secu', 'turneu tare'),
(9, 7, 25, 'keep cool', 'aida.afrasinei', '2020-06-09 19:39:56', '2020-06-11', 3, 100, 'educational', 'board', 'iasi', 'turneusuper'),
(10, 36, 25, 'quaqe campions', 'aida.afrasinei', '2020-06-09 19:40:34', '2020-06-18', 2, 200, 'adventure', 'online', 'online', 'turneuonline'),
(11, 41, 25, 'nba', 'aida.afrasinei', '2020-06-09 19:41:11', '2020-06-11', 2, 100, 'sport', 'online', 'online', 'battle'),
(12, 35, 9, 'amazing eternals', 'denisa1999', '2020-06-09 19:45:01', '2020-06-11', 2, 50, 'adventure', 'online', 'online', 'turneul meu');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profile_img_path` varchar(1000) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `tournaments` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `profile_img_path`, `bio`, `tournaments`) VALUES
(1, 'denisa', 'denisa', 'denisa_ionela28@yahoo.com', '../images/denisa.jpg', '', 2),
(2, 'adelina', 'adelina', 'adelina_alicia_2007@yahoo.com', '../images/adelina.jpg', '', 3),
(3, 'vlad', 'vlad', 'vlad_afrasinei@yahoo.com', '../images/vlad.jpg', '', 2),
(4, 'denisa99', '$2y$10$RGEy9VWdQCVvIfKZgWgZ7eadjdnPcjGS96uD8O.bOVMfJKhxEVn7q', 'denisa@gmail.com', '../images/user2.jpg', '', 1),
(5, 'denideni', '$2y$10$zBLhXZiCq0DpUwlOaC5udeAibp8wzorGnHDHovL5R02d1m2fYSMhK', 'deni99@gmail.com', '../images/user1.jpg', '', 0),
(8, 'denisabadarau', '$2y$10$SMWJluGNuoVL30bPT1BL8udzJjfR7DaMba1Tjbzd9wm858MpwQ8P2', 'denisadenisa@gmail.com', '', '', 0),
(9, 'denisa1999', '$2y$10$cUvGl7Ha3BFgvDo60O2kGOjITVxnw.mZqJYDN8BVUsT4R33OnCkn2', 'denisa@yahoo.com', 'upload/5edfcbe02614e8.37487936.jpg', 'imi plac jocurile', 2),
(11, 'popescuion', '$2y$10$aydvXh1P.N153vo19qd1NOIyVPpDo46Wm1Tc/patuwqcKXOii8.5m', 'popescu@yahoo.com', '', '', 0),
(12, 'vladmarian', '$2y$10$T.IDECYCGvz4gE/25m.6Xed73FM96zuoUDeuQ5TC.S42fFbc47h/i', 'vladmarian@yahoo.com', '', '', 0),
(13, 'codrin.epure', '$2y$10$c45NiVUQur8F2Yml/qNTWuTk6h1kDPVI0Ws6j7heGQNJzHYPKXxZi', 'codrin.epure@yahoo.com', '', '', 0),
(14, 'vlad.dexamir98', '$2y$10$sVXF8.Ed91okNB5bDBdKoedElSVfwtbCl54ypgpyr9wEvNsPHyK7K', 'vlad.dexamir@yahoo.com', '', '', 0),
(15, 'stefandanila', '$2y$10$mGrdZs6oFd0yyLPDtWTrSeOkB1kZ8didkcFhzmCnV2bLri6YCAZve', 'stefan_danila@yahoo.com', '', '', 0),
(16, 'branzatuberiu', '$2y$10$kcsq96GdQkbBc4tjqRarXuk1YkbdTGrL8n.YepHsXHbF5SYgOLYg2', 'tibi@yahoo.com', '', '', 0),
(17, 'popaeliza', '$2y$10$jWjM8sj12Ll1VkPSSkw1UOZCcP1Quk5.4TkD08HpimMts4Urvrvl.', 'popaeliza@yahoo.com', '', '', 0),
(18, 'costinaioanaandrici', '$2y$10$gykJ9H.SUxUSC39YBQW1p.2ahwWWaY65ZBik850aBJXELFgbuEkpy', 'costina@gmail.com', '', '', 0),
(19, 'denisaionelabadarau', '$2y$10$3geTH7v/DdrgsaDEkzUMYey2fwMCPe.T0jgAOU46eXVi2N6VG69hm', 'denisa.ionela.badarau@gmail.com', '', '', 0),
(21, 'afrasinei.vlad.marian', '$2y$10$UxdFcG/EBzwP99M01.52V.d1eaNInJdcDT0gOJ4bDW1KEmDlQUv1y', 'a.vlad_10@yahoo.com', '', '', 0),
(23, 'mirela_adamache', '$2y$10$NylRnrJGf.z9qmSqrua8TemhtrZir28I33c79t7DQlpbQ8gx5g4oK', 'mirela_adamache@yahoo.com', '', '', 0),
(25, 'aida.afrasinei', '$2y$10$yWXtGYoaVLxa5z28IX0oF.0TJWAK8bEq07aU/TuOsHpHNHwVwfqrq', 'aida@yahoo.com', 'upload/5edfe496018103.04253643.jpg', 'imi plac jocurile', 0);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- Indexuri pentru tabele `commentsbattle`
--
ALTER TABLE `commentsbattle`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `infogames`
--
ALTER TABLE `infogames`
  ADD PRIMARY KEY (`id_joc`);

--
-- Indexuri pentru tabele `likes`
--
ALTER TABLE `likes`
  ADD UNIQUE KEY `id_user` (`id_user`,`id_game`),
  ADD KEY `id_game` (`id_game`);

--
-- Indexuri pentru tabele `regulijoc`
--
ALTER TABLE `regulijoc`
  ADD PRIMARY KEY (`id_joc`);

--
-- Indexuri pentru tabele `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id_turneu`);

--
-- Indexuri pentru tabele `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pentru tabele `commentsbattle`
--
ALTER TABLE `commentsbattle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pentru tabele `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT pentru tabele `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pentru tabele `infogames`
--
ALTER TABLE `infogames`
  MODIFY `id_joc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT pentru tabele `regulijoc`
--
ALTER TABLE `regulijoc`
  MODIFY `id_joc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT pentru tabele `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id_turneu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pentru tabele `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
