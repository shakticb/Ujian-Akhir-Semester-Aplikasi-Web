

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `material` (
  `id` int(255) NOT NULL,
  `barcode` text NOT NULL,
  `artikel` text NOT NULL,
  `lager_schrank` text NOT NULL,
  `lagerplatz` text NOT NULL,
  `einheit` text NOT NULL,
  `lagerbestand` text NOT NULL,
  `kategorie` text NOT NULL,
  `bereich` text NOT NULL,
  `material` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `upassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `material`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;


