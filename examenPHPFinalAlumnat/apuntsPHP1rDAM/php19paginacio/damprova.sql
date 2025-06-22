SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `dawprova`
--
CREATE DATABASE IF NOT EXISTS `damprova` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `damprova`;

-- --------------------------------------------------------

--
-- Estructura de la taula `usuaris`
--
DROP TABLE IF EXISTS usuaris;
CREATE TABLE IF NOT EXISTS `usuaris` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `cognoms` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `data` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Bolcant dades de la taula `usuaris`
--

INSERT INTO `usuaris` (`id`, `nom`, `cognoms`, `email`, `data`) VALUES
(1, 'Nom1', 'Cognoms1', 'correu1@simarro.com', '2025-05-19 07:39:40'),
(2, 'Nom2', 'Cognoms2', 'correu2@simarro.com', '2025-05-19 07:41:25'),
(3, 'Nom3', 'Cognoms3', 'correu3@simarro.com', '2025-05-19 07:41:37'),
(4, 'Nom4', 'Cognoms4', 'correu4@simarro.com', '2025-05-19 07:41:48'),
(5, 'Nom5', 'Cognoms5', 'correu5@simarro.com', '2025-05-19 07:42:07'),
(6, 'Nom6', 'Cognoms6', 'correu6@simarro.com', '2025-05-19 07:42:17'),
(7, 'Nom7', 'Cognoms7', 'correu7@simarro.com', '2025-05-19 07:42:25'),
(8, 'Nom8', 'Cognoms8', 'correu8@simarro.com', '2025-05-19 07:42:40'),
(9, 'Nom9', 'Cognoms9', 'correu9@simarro.com', '2025-05-19 07:42:49'),
(10, 'Nom10', 'Cognoms10', 'correu10@simarro.com', '2025-05-19 07:43:01'),
(11, 'Nom11', 'Cognoms11', 'correu11@simarro.com', '2025-05-19 07:43:09'),
(12, 'Nom12', 'Cognoms12', 'correu12@simarro.com', '2025-05-19 07:43:18'),
(13, 'Nom13', 'Cognoms13', 'correu13@simarro.com', '2025-05-19 07:43:29'),
(14, 'Nom14', 'Cognoms14', 'correu14@simarro.com', '2025-05-19 07:43:37'),
(15, 'Nom15', 'Cognoms15', 'correu15@simarro.com', '2025-05-19 07:43:56'),
(16, 'Nom16', 'Cognoms16', 'correu16@simarro.com', '2025-05-19 07:44:11'),
(17, 'Nom17', 'Cognoms17', 'correu17@simarro.com', '2025-05-19 07:44:33'),
(18, 'Nom18', 'Cognoms18', 'correu18@simarro.com', '2025-05-19 07:44:49'),
(19, 'Nom19', 'Cognoms19', 'correu19@simarro.com', '2025-05-19 07:44:59'),
(20, 'Nom20', 'Cognoms20', 'correu20@simarro.com', '2025-05-19 07:45:09'),
(21, 'Nom21', 'Cognoms21', 'correu21@simarro.com', '2025-05-19 07:45:17'),
(22, 'Nom22', 'Cognoms22', 'correu22@simarro.com', '2025-05-19 07:45:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
