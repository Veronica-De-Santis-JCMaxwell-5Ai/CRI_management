-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 01, 2017 alle 10:22
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
  `codice` varchar(12) NOT NULL,
  `localita` varchar(20) NOT NULL,
  `indirizzo` varchar(20) NOT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `piano` int(2) DEFAULT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `allarme` time NOT NULL,
  `data` date NOT NULL,
  `isClosed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `chiamate`
--

INSERT INTO `chiamate` (`codice`, `localita`, `indirizzo`, `numero`, `piano`, `nome`, `cognome`, `allarme`, `data`, `isClosed`) VALUES
('01ab2326/01', 'Moncalieri', 'Corso Trieste', '23', 2, 'Mario', 'Rossi', '23:21:00', '2017-04-29', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `dialisi`
--

CREATE TABLE `dialisi` (
  `cod_d` varchar(4) NOT NULL,
  `data` date NOT NULL,
  `sigla` varchar(4) NOT NULL,
  `ora` time NOT NULL,
  `da` varchar(30) NOT NULL,
  `a` varchar(30) NOT NULL,
  `durata` varchar(5) NOT NULL,
  `cf` varchar(16) DEFAULT NULL,
  `autista` varchar(4) DEFAULT NULL,
  `barrelliere` varchar(4) DEFAULT NULL,
  `affiancato` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `emergenze`
--

CREATE TABLE `emergenze` (
  `codice` varchar(11) NOT NULL,
  `sigla` varchar(4) NOT NULL,
  `allarme` time NOT NULL,
  `partenza_sede` time NOT NULL,
  `arrivo_target` time NOT NULL,
  `partenza_target` time NOT NULL,
  `arrivo_ospedale` time NOT NULL,
  `operativo` time NOT NULL,
  `cf` varchar(16) DEFAULT NULL,
  `autista` varchar(4) DEFAULT NULL,
  `barrelliere` varchar(4) DEFAULT NULL,
  `affiancato` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `pazienti`
--

CREATE TABLE `pazienti` (
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `data_nascita` date NOT NULL,
  `cf` varchar(16) NOT NULL,
  `indirizzo` varchar(100) NOT NULL,
  `comune` varchar(50) NOT NULL,
  `nazionalità` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `trasporti`
--

CREATE TABLE `trasporti` (
  `cod_t` varchar(5) NOT NULL,
  `data` date NOT NULL,
  `sigla` varchar(4) NOT NULL,
  `ora` time NOT NULL,
  `da` varchar(30) NOT NULL,
  `a` varchar(30) NOT NULL,
  `cf` varchar(16) DEFAULT NULL,
  `autista` varchar(4) DEFAULT NULL,
  `barrelliere` varchar(4) DEFAULT NULL,
  `affiancato` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `trasporti`
--

INSERT INTO `trasporti` (`cod_t`, `data`, `sigla`, `ora`, `da`, `a`, `cf`, `autista`, `barrelliere`, `affiancato`) VALUES
('1', '2017-04-27', '1326', '15:00:00', 'Casa', 'Ospedale', 'DSNVNC98E65L219B', '3', '2', '1'),
('2', '2017-04-28', '1324', '12:12:00', 'Casa', 'Ospedale', 'FRRBRN74R64L259M', '3', '2', '4');

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
  `mail` varchar(40) NOT NULL,
  `livello` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `volontari`
--

INSERT INTO `volontari` (`matricola`, `nome`, `cognome`, `username`, `password`, `mail`, `livello`) VALUES
(1, 'Misael', 'Micciche', 'misael.micciche', 'misael', 'micciche.misael@gmail.com', 0),
(2, 'Veronica', 'De Santis', 'veronica.desantis', 'veronica', 'veronica.desantis@jcmaxwell.it', 0),
(3, 'Davide', 'Trucco', 'davide.trucco', 'davide', 'davide.trucco@gmail.com', 0),
(4, 'Fabio', 'Giannetti', 'fabio.giannetti', 'fabio', 'fabio.giannetti@gmail.com', 0),
(5, 'Loris', 'Beltramo', 'loris.beltramo', 'loris', 'loris.beltramo@gmail.com', 0);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `chiamate`
--
ALTER TABLE `chiamate`
  ADD PRIMARY KEY (`codice`);

--
-- Indici per le tabelle `dialisi`
--
ALTER TABLE `dialisi`
  ADD PRIMARY KEY (`cod_d`);

--
-- Indici per le tabelle `emergenze`
--
ALTER TABLE `emergenze`
  ADD PRIMARY KEY (`codice`);

--
-- Indici per le tabelle `pazienti`
--
ALTER TABLE `pazienti`
  ADD PRIMARY KEY (`cf`);

--
-- Indici per le tabelle `trasporti`
--
ALTER TABLE `trasporti`
  ADD PRIMARY KEY (`cod_t`);

--
-- Indici per le tabelle `volontari`
--
ALTER TABLE `volontari`
  ADD PRIMARY KEY (`matricola`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
