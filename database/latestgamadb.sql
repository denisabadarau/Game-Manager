-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 26, 2020 la 10:49 PM
-- Versiune server: 10.4.11-MariaDB
-- Versiune PHP: 7.4.5

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
(1, 'wingspan', 'board', 17, 1, 0, 'biology', 'Wingspan is a card-driven, medium-weight, engine-building board game in which players compete to attract birds to their wildlife reserves.'),
(2, 'blinded', 'board', 17, 1, 0, 'biology', 'Blinded by Science is for people who understand the meaning of deoxyribonucleic acid. If you\'re a trivia buff and science is your thing, then this game is probably in your DNA.'),
(3, 'cytosis', 'board', 17, 0, 0, 'biology', 'Cytosis: A Cell Building Game is a worker placement game that takes place inside a human cell.'),
(4, 'evo', 'board', 17, 1, 0, 'biology', 'In Evo you travel the wild open spaces of Kumgath with your mounts, you will use your knowledge of biology to help them adapt and succeed against both the hostile and changing climate and other competing species.'),
(5, 'mad science', 'board', 17, 1, 0, 'biology', 'Throughout the centuries, mad scientists have always encountered the same problem of very limited access to the dangerous resources they require. To solve this problem, the Mad Science Foundation was created.'),
(6, 'wonders of science', 'board', 17, 0, 0, 'biology', 'In Wonders of Science, the players take turns rolling the die and asking each other scientific questions from the cards. If a question is answered correctly, the card is won; if answered incorrectly, the card is returned to the bottom of the pile.'),
(7, 'keep cool', 'board', 4, 1, 0, 'educational', 'Keep Cool can be classified as both a serious game and a global warming game. In Keep Cool, up to six players representing the world\'s countries compete to balance their own economic interests and the world\'s climate in a game of negotiation'),
(8, 'ungame', 'board', 4, 0, 0, 'educational', 'The Ungame is a non-competitive learning/communication board game . It is a game of conversation which \"fosters listening skills as well as self-expression\".'),
(9, 'kolejka', 'board', 4, 0, 0, 'educational', 'Kolejka was designed to teach young generations about the hardships under communism (1945–1989), particularly the difficulty of acquiring consumer goods in the shortage economy.The game has been described as inspired by Monopoly.'),
(10, 'equate', 'board', 4, 0, 0, 'educational', 'Equate is a board game where players score points by forming equations on a 19x19 game board. Equations appear across and down in a crossword fashion and must be mathematically correct. It is similar to Scrabble except players use digits and mathematical operators instead of letters.'),
(11, 'battle masters', 'board', 7, 1, 0, 'fantasy', 'Battle Masters is a game that simulates the type of battles as seen in Warhammer Fantasy Battle, but with much simpler game mechanics not based on its parent game. It is focuses on a battle between the forces of good, or The Empire, against the forces of evil, or Chaos, which is a combined army including forces from the Chaos and Orcs and Goblins armies of the Warhammer Fantasy setting including creatures such as Ogres.'),
(12, 'blood bowl', 'board', 7, 1, 0, 'fantasy', 'Blood Bowl is a fantasy football game populated by traditional fantasy elements such as human warriors, goblins, dwarves, elves, orcs and trolls.Blood Bowl is a two-player, turn-based board game that typically uses 28 mm miniatures to represent a contest between two teams on a playing field.'),
(13, 'survive', 'board', 7, 1, 0, 'fantasy', 'Escape from Atlantis is a board game that portrays the sinking of Atlantis and the attempts by the population to escape the sinking island.Escape from Atlantis includes four Atlantean tribes, each with twelve villagers. These are represented as small wooden figures, coloured red, blue, green and yellow. Each player picks one tribe.'),
(14, 'chaos marauders', 'board', 7, 0, 0, 'fantasy', 'Chaos Marauders is a card-based board game for 2-4 players .The object of the game is to create \"battle lines\" of orcs and a motley assortment of creatures from the Warhammer universe, including skaven (with their formidable Horned Rat Standard, and \"Clan Skyrre Blowback\" flamethrower), goblins, dwarf captives, hobgoblins, \"crummy snotling slaves\", an Orc War Wyvern and the eponymous Chaos Marauders.'),
(15, 'dark tower', 'board', 7, 1, 0, 'fantasy', 'Dark Tower is a 1981 electronic board game by Milton Bradley Company, for one to four players. The object of the game is to amass an army, collect the three keys to the Tower, and defeat the evil within'),
(16, 'seven days', 'board', 3, 0, 0, 'historical', '7 days of Westerplatte is a cooperative game, the players incorporate the roles of Polish commanders who work together to confront the German army and win the game.'),
(17, 'axis and allies', 'board', 3, 1, 0, 'historical', 'Axis& Allies depicts WWII on a grand scale, a full global level. Up to five players can play on two different teams.The game comes with masses of plastic miniatures that represent various military units during WWII.'),
(18, 'lancaster', 'board', 3, 0, 0, 'historical', 'In 1413, the new king of England, Henry V of Lancaster, has ambitious plans: The unification of England and the conquest of the French crown! In Lancaster, each player takes the role of an ambitious aristocratic family. Who will be the best supporter of this young king, and the most powerful Lord of his time?'),
(19, 'carcassonne', 'board', 3, 0, 0, 'historical', 'Carcassonne is considered to be an excellent \"gateway game\" by many board game players as it is a game that can be used to introduce new players to board games. The rules are simple, no one is ever eliminated, and the play is fast. A typical game, without any expansions, takes about 45 minutes to play. There is a substantial luck component to the game; however, good tactics greatly improve one\'s chances of winning'),
(20, '1960 president', 'board', 3, 0, 0, 'historical', '1960: The making of a president achieves perfect pitch between accessibility of game play and empowering the players by allowing them to indulge in making and changing established history in an engaging way.This fast-playing strategy game for two players challenges you to run for the most powerful elective office in the world, at one of its most unique crossroads. Will you recreate history, or rewrite it? 1960: The Making of the President provides you the opportunity to do both.'),
(21, 'stone age', 'board', 3, 0, 0, 'historical', 'Stone Age is a development game with a Stone Age theme that involves taking control of a tribe to collect resources and build a village that has the most powerful chief.Players collect wood, break stone and wash their gold from the river. They trade freely, expand their village and so achieve new levels of civilization. With a balance of luck and planning, the players compete for food in this prehistoric time.'),
(22, 'nyctophobia', 'board', 4, 0, 0, 'horror', 'One of the most unique games , Nyctophobia is a 1vMany game that will have a group of players trying to survive as a maniacal predator chases them in a pitch Black Forest. The catch is that the survivors must play the game wearing blackout sunglasses.'),
(23, 'betrayl', 'board', 4, 0, 0, 'horror', 'Betrayal at House on the Hill starts out as a fully cooperative game with players exploring an old mansion. At some point during the game, one of the players becomes a traitor (who or when is unknown at the start) and will turn on their former teammates. The haunts, as they are called, are all fairly unique with each having its own story and goals for both teams.'),
(24, 'zombicide', 'board', 4, 1, 0, 'horror', 'If you want to experience hordes of raging undead, then Zombicide is your drink of choice. It’s not higher on the list because I don’t get a huge horror vibe from it. Characters are fairly powerful and it’s really not until late in the game, when rounds are spawning undead in large masses, that the tension finally starts to appear.'),
(25, 'ghost', 'board', 4, 0, 0, 'horror', 'Ghost takes place on a 6×6 square grid representing a haunted castle. Both players are given eight ghosts, of which four are good (represented by a blue dot) and four are evil (represented by a red dot). The ghosts are assembled in two rows of four ghosts at the player\'s own edge of the board. At each of the four corners is an exit from the castle.'),
(26, 'dead of winter', 'board', 4, 0, 0, 'horror', 'Dead of winter puts players in a small colony of survivors who must work together towards group victory, but at the same time, players must also complete a personal objective to win as individuals. Players often have to decide what’s best for the colony and best for themselves, which creates high-stakes gameplay.'),
(27, 'mansions of madness', 'board', 4, 0, 0, 'horror', 'In Mansions of Madness, players take on the role of investigators trying to get the bottom of strange happenings in the towns of Innsmouth and Arkham. This edition of the game is now fully cooperative, with the Cthulhu Mythos monsters being controlled by an integrated app.\r\nMORE INFO'),
(28, 'o day attak on earth', 'online', 7, 1, 0, 'action', '0 DAY ATTACK ON EARTH is an action shooter video game developed by Japanese studio Gulti and published by Square Enix for the Xbox 360. The game was released on December 23, 2009,[1] and revolves around players defending Paris, New York, and Tokyo from an'),
(29, 'bomberman', 'online', 7, 0, 0, 'action', 'Bomberman is a video game for the Xbox Live Arcade, developed by Backbone Entertainment. Bomberman Live is an original version of the classic game Bomberman, an arcade-style maze-based video game originally developed by Hudson Soft.'),
(30, 'bulets', 'online', 7, 0, 0, 'action', '10,000 Bullets, known in Japan as Tsukiyo ni Saraba, is an action/third-person shooter video game developed by Blue Moon Studio and published by Taito Corporation for the Sony PlayStation 2 video game console.'),
(31, 'batman', 'online', 7, 0, 0, 'action', 'Batman Forever is a beat \'em up video game based on the movie of the same name. Though released by the same publisher at roughly the same time, it is an entirely different game from Batman Forever'),
(32, 'mario', 'online', 7, 0, 0, 'action', 'Mario is a fictional character in the Mario video game franchise, owned by Nintendo and created by Japanese video game designer Shigeru Miyamoto.'),
(33, 'air raiders', 'online', 7, 0, 0, 'action', 'Air Raiders is an action game released for the Atari 2600 by Mattel in 1982. It received mixed reviews from critics.'),
(34, 'apex legends', 'online', 1, 0, 0, 'adventure', 'Apex Legends is a free-to-play battle royale game developed by Respawn Entertainment and published by Electronic Arts.'),
(35, 'amazing eternals', 'online', 1, 0, 0, 'adventure', 'The Amazing Eternals is an adventure video game, this game was an upcoming team-based multiplayer online first-person shooter video game developed and published by Digital Extremes.'),
(36, 'quaqe campions', 'online', 1, 0, 0, 'adventure', 'Quake Champions is a first-person shooter developed by id Software and published by Bethesda Softworks, as part of the Quake series of multiplayer shooters\r\nMORE INFO'),
(37, 'overwatch', 'online', 1, 0, 0, 'adventure', 'Overwatch is a team-based multiplayer first-person shooter developed and published by Blizzard Entertainment.'),
(38, 'valorant', 'online', 1, 0, 0, 'adventure', 'Valorant is an upcoming free-to-play multiplayer first-person shooter developed and published by Riot Games.'),
(39, 'evolve', 'online', 1, 0, 0, 'adventure', 'Evolve is a first-person shooter video game developed by Turtle Rock Studios, published by 2K Games.'),
(40, 'soccer', 'online', 2, 0, 0, 'sport', 'In Soccer game, players assume the role of the titular main protagonist who travels across several countries around the world in order to repair the World Cup'),
(41, 'nba', 'online', 2, 0, 0, 'sport', 'NBA 2K20 is a basketball simulation video game developed by Visual Concepts and published by 2K Sports, based on the National Basketball Association'),
(42, 'tenniskids', 'online', 2, 0, 0, 'sport', 'The TennisKids game is a realistic simulation of the sport table tennis, with the main objective to make the opponent fail to hit the ball.'),
(43, 'finalblow', 'online', 2, 0, 0, 'sport', 'The FinalBlow game features a single season boxing championship run. You can select from a group of fictional fighters: Dynamite Joe - The Miracle Man, Fernando Gomez - The South American Eagle.'),
(44, 'internationalkarate', 'online', 2, 0, 0, 'sport', 'International Karate is a fighting game developed and published by System 3 for various home computers'),
(45, 'bowling', 'online', 2, 0, 0, 'sport', 'In all six variations, games last for 10 frames, or turns. At the start of each frame, the current player is given two chances to roll a bowling ball down an alley in an attempt to knock down as many of the ten bowling pins as possible.'),
(46, 'forge of empiers', 'online', 2, 0, 0, 'strategy', 'Forge of Empires is a browser-based strategy game developed by InnoGames.'),
(47, 'grepolis', 'online', 2, 0, 0, 'strategy', 'Grepolis can be considered a 4X browser game. It requires a player to Exploit resources, Expand their cities, Explore the oceans, and to Exterminate opposition.'),
(48, 'tribal wars', 'online', 2, 0, 0, 'strategy', 'Tribal Wars is a browser-based game set in the Middle Ages. Every player controls a small village, striving for power and glory.'),
(49, 'the west', 'online', 2, 0, 0, 'strategy', 'Are you ready to help in the colonisation of the Wild West? Follow in the footsteps of Jesse James, Wyatt Earp, Doc Holliday, and other Western legends? Then join us in a unique adventure into the world of the Old West.'),
(50, 'elvenar', 'online', 2, 0, 0, 'strategy', 'At the beginning, you start with a limited area to build your city. The City Map is an area divided into tiles that looks like a square grid and where you can place your first buildings, in order to start your city\'s development.'),
(51, 'triviador', 'online', 2, 0, 0, 'strategy', 'Players take on the role of European countries sending expeditions to find gold and establish colonies. Although the design uses the trappings of board wargames such as a hex map, combat is not a major part of the game'),
(52, 'nascar', 'online', 1, 0, 0, 'vehicles', 'NASCAR Highlights is a game mode which takes the player through real-life situations from the preceding Sprint Cup Series season. The mode is a successor to the Lightning Challenges (later the Dodge Challenges) from the EA Sports NASCAR series. Like the A.I., the scenarios are constructed using in-race telemetry.'),
(53, 'car3', 'online', 1, 0, 0, 'vehicles', 'Train and advance your abilities in 6 game modes and challenge your family and friends in the Battle Race to become the Ultimate Champion. On the road to becoming a Hall of Fame Driver, training and skill will give you an edge in a race that anyone can win. Only in Car3.'),
(54, 'the word of cars', 'online', 1, 0, 0, 'vehicles', 'The World of Cars Online was a virtual world based on the Cars film series. The game was under development with Open Beta, which launched on March 1, 2010.'),
(55, 'racing', 'online', 1, 0, 0, 'vehicles', 'The racing video game genre is the genre of video games, either in the first-person or third-person perspective'),
(56, 'survive', 'online', 1, 0, 0, 'vehicles', 'Embark on an epic sci-fi, free-to-play adventure. Spacelords is a brand-new take on the shooter genre. Through its 4 vs 1 campaign, you experience both sides of the story: Join the Raiders in their fight to free the legendary Broken Planet, or switch sides and fight as the Antagonist alongside the invading hordes!');

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
(56, 56, 'img166', 'img167', 'img168');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `likes`
--



-- --------------------------------------------------------


--
-- Indexuri pentru tabele eliminate
--

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
-
--
--

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `admin`
--

--
-- AUTO_INCREMENT pentru tabele `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pentru tabele `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--

-- Constrângeri pentru tabele eliminate
--

--
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
