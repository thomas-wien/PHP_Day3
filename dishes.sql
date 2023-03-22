-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Mrz 2023 um 14:00
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `restaurant_db`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `dishes`
--

DROP TABLE IF EXISTS `dishes`;
CREATE TABLE `dishes` (
  `dishID` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `dishes`
--

INSERT INTO `dishes` (`dishID`, `image`, `name`, `price`, `description`) VALUES
(1, 'gazpacho.webp', 'Healthy gazpacho with fermented vegetables', '11.00', 'This vibrant vegetarian chilled soup  is packed with nutrients and colour, with the smoked celeriac purée and fermented vegetables bringing an unusual depth of flavour to the dish.'),
(2, 'gnocchi.webp', 'Gnocchi with herbs, garlic sauce and black truffl', '18.00', 'gnocchi with decadent shavings of black truffle and a subtle herb crust. It is the perfect starter for vegetarians if you swap the Parmesan for a similar cheese made from non-animal rennet.'),
(3, 'cannelloni.webp', 'Cannelloni with couscous, mango and alfafa sprouts', '12.00', 'These simple rice paper rolls make an interesting and unusual vegetarian starter dish. The couscous filling is lightly flavoured with chilli and herbs, and is matched perfectly by the fresh and vibrant mango purée and some lightly pickled onions.'),
(4, 'risotto.webp', 'Risotto with ginger, shiitake mushroom, daikon and miso sauce', '25.00', 'This vegan mushroom risotto recipe from Fabrizio Marino is a melting pot of flavours, incorporating miso, tamari and ginger with creamy risotto and celeriac.'),
(5, 'tuna.webp', 'Roast tomato and spring onion risotto with seared tuna', '45.00', 'Serves up a delicious Mediterranean-style dish, with a vibrant cherry tomato and spring onion risotto as the base for a lightly seared tuna steak. The tuna is a lovely meaty addition, but the risotto also makes a fantastic recipe on its own, which could be useful if also serving to vegetarian guests.'),
(6, 'orangerisotto.webp', 'Orange and pink risotto', '19.00', 'The striking colours and presentation of this vegetarian dish, sure to make it a new go-to favourite. With layers of carrot and beetroot barley risottos, tender roasted butternut squash cubes and crunchy almonds, these flavours are sure to match style with flavour.');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dishID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dishID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
