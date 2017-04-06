-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 06, 2017 alle 07:41
-- Versione del server: 10.1.21-MariaDB
-- Versione PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cri`
--
CREATE DATABASE IF NOT EXISTS `cri` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cri`;

-- --------------------------------------------------------

--
-- Struttura della tabella `chiamate`
--

CREATE TABLE `chiamate` (
  `codice` varchar(11) NOT NULL,
  `localita` varchar(20) NOT NULL,
  `indirizzo` varchar(50) NOT NULL,
  `numero` varchar(6) NOT NULL,
  `piano` int(3) DEFAULT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `allarme` time NOT NULL,
  `isClosed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `chiamate`
--

INSERT INTO `chiamate` (`codice`, `localita`, `indirizzo`, `numero`, `piano`, `nome`, `cognome`, `allarme`, `isClosed`) VALUES
('01ab7984/01', 'moncalieri', 'corso trieste', '142', NULL, 'Misael', 'Micciche\'', '15:00:00', 0),
('01ab8081/02', 'nichelino', 'via torricelli', '231', 3, 'Veronic', 'De Santis', '16:10:00', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `volontari`
--

CREATE TABLE `volontari` (
  `matricola` int(4) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` int(1) NOT NULL,
  `mail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `volontari`
--

INSERT INTO `volontari` (`matricola`, `nome`, `cognome`, `username`, `password`, `level`, `mail`) VALUES
(1, 'Misael', 'Miccichè', 'misael.micciche', 'misael', 3, 'micciche.misael@gmail.com'),
(2, 'Veronica', 'De Santis', 'veronica.desantis', 'veronica', 3, 'veronica.desantis@jcmaxwell.it'),
(3, 'Davide', 'Trucco', 'davide.trucco', 'davide', 3, 'davide.trucco@gmail.com'),
(4, 'Fabio', 'Giannetti', 'fabio.giannetti', 'fabio', 2, 'fabio.giannetti@gmail.com'),
(5, 'Loris', 'Beltramo', 'loris.beltramo', 'loris', 1, 'loris.beltramo@gmail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `chiamate`
--
ALTER TABLE `chiamate`
  ADD PRIMARY KEY (`codice`);

--
-- Indici per le tabelle `volontari`
--
ALTER TABLE `volontari`
  ADD PRIMARY KEY (`matricola`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
