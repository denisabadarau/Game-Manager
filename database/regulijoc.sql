-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: localhost
-- Timp de generare: mai 27, 2020 la 02:27 AM
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

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `regulijoc`
--
ALTER TABLE `regulijoc`
  ADD PRIMARY KEY (`id_joc`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `regulijoc`
--
ALTER TABLE `regulijoc`
  MODIFY `id_joc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
