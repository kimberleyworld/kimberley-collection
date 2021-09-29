# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.35)
# Database: kimberley-collection
# Generation Time: 2021-09-29 13:18:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table kimberley-collection
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kimberley-collection`;

CREATE TABLE `kimberley-collection` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `main-colour` varchar(255) DEFAULT NULL,
  `category` enum('Trippy','Boring','Fun','Silly') DEFAULT NULL,
  `material` enum('Glass','Metal','Plastic','Unknown') DEFAULT NULL,
  `size` enum('Small','Medium','Large') DEFAULT NULL,
  `heavyness` enum('Light','Weighty','Heavy') DEFAULT NULL,
  `img-url` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `kimberley-collection` WRITE;
/*!40000 ALTER TABLE `kimberley-collection` DISABLE KEYS */;

INSERT INTO `kimberley-collection` (`id`, `name`, `main-colour`, `category`, `material`, `size`, `heavyness`, `img-url`)
VALUES
	(1,'Swirl','Pink','Boring','Glass','Medium','Heavy','https://images.squarespace-cdn.com/content/v1/5a54c218f9a61e90a855b972/1523104695712-TAVWK3JG5BIJ7I8N4TW7/paperweight-ruby.png?format=2500w'),
	(2,'Fish','Blue','Silly','Glass','Medium','Weighty','https://icon2.cleanpng.com/20180716/fyy/kisspng-paperweight-fish-ball-glass-marine-biology-5b4d455cea2ad5.2493774815317906849592.jpg'),
	(3,'Fairy','Opal','Trippy','Unknown','Large','Light','https://www.pikpng.com/pngl/m/353-3535774_opal-free-png-image-opal-gemstone-transparent-background.png'),
	(4,'Lightning','Blue','Fun','Glass','Medium','Weighty','https://www.pngkey.com/png/full/350-3501029_opal-png-free-download-opal.png'),
	(5,'Wooosh','Clear','Trippy','Glass','Small','Heavy','https://i.pinimg.com/originals/57/06/f3/5706f3cdee832a1b0960757bcc9a9b77.png'),
	(6,'Busy','Pink','Silly','Glass','Medium','Weighty','https://mymuseumshop.com/1551-product_840w/dome-paperweight-hokusai.jpg'),
	(7,'Map','Blue','Boring','Glass','Small','Heavy','https://www.pikpng.com/pngl/m/163-1631933_paperweight-clipart.png');

/*!40000 ALTER TABLE `kimberley-collection` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
