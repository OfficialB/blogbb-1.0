SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `bans` (
  `id` int(11) NOT NULL,
  `ip` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `email` varchar(65) NOT NULL,
  `title` varchar(15) NOT NULL,
  `body` text NOT NULL,
  `ip` varchar(30) NOT NULL,
  `post_date` varchar(60) NOT NULL,
  `views` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `info` (
  `maintenance` int(1) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(150) NOT NULL,
  `announcement` varchar(150) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/* DO NOT REMOVE THE INFO TABLE.*/

INSERT INTO `info` (`maintenance`, `name`, `description`, `announcement`, `url`, `img`) VALUES
(0, 'BlogBB Site', 'Hello! Thank you for choosing BlogBB.', 'Please read the <a href=\"README.md\">README</a> for help with setting up BlogBB.', 'http://example.com', 'https://cdn.wallpapersafari.com/18/80/pY8JP7.jpg');


ALTER TABLE `bans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ip` (`ip`);

ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `info`
  ADD UNIQUE KEY `maintenance` (`maintenance`);


ALTER TABLE `bans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
