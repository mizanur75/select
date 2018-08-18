-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.28-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema ajax
--

CREATE DATABASE IF NOT EXISTS ajax;
USE ajax;

--
-- Definition of table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE `district` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

/*!40000 ALTER TABLE `district` DISABLE KEYS */;
INSERT INTO `district` (`id`,`name`) VALUES 
 (1,'Dhaka'),
 (2,'Narayangonj'),
 (3,'Gazipur'),
 (4,'Gopalgonj'),
 (5,'Rangpur'),
 (6,'Kurigram'),
 (7,'Barisal'),
 (8,'Khulna'),
 (9,'Jessore'),
 (10,'Bagura'),
 (11,'Munsigonj'),
 (12,'Chittagong'),
 (13,'Vola'),
 (14,'Pirojpur');
/*!40000 ALTER TABLE `district` ENABLE KEYS */;


--
-- Definition of table `up`
--

DROP TABLE IF EXISTS `up`;
CREATE TABLE `up` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `upozila_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up`
--

/*!40000 ALTER TABLE `up` DISABLE KEYS */;
INSERT INTO `up` (`id`,`name`,`upozila_id`) VALUES 
 (1,'Hatia',2),
 (2,'Dhoanibari',2),
 (3,'Mondoler Hat',2),
 (4,'Buraburi',2),
 (5,'Bajra',2),
 (6,'Thetrai',2),
 (7,'Daldalia',2),
 (8,'Nijaikhamar',2),
 (9,'Shaheber Alga',2),
 (10,'Begumgonj',2),
 (11,'Mithapukur',10);
/*!40000 ALTER TABLE `up` ENABLE KEYS */;


--
-- Definition of table `upozila`
--

DROP TABLE IF EXISTS `upozila`;
CREATE TABLE `upozila` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `district_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upozila`
--

/*!40000 ALTER TABLE `upozila` DISABLE KEYS */;
INSERT INTO `upozila` (`id`,`name`,`district_id`) VALUES 
 (1,'Kurigram Sadar',6),
 (2,'Ulipur',6),
 (3,'Chilmari',6),
 (4,'Roumari',6),
 (5,'Rajibpur',6),
 (6,'Nageswari',6),
 (7,'Vurungamari',6),
 (8,'Rajarhat',6),
 (9,'Kochakata',6),
 (10,'Pirgonj',5),
 (11,'Mahammadpur',1),
 (12,'Dhanmondi',1),
 (13,'Kalabagan',1),
 (14,'Sher-e-Bangla Nagar',1),
 (15,'Tejgaon',1);
/*!40000 ALTER TABLE `upozila` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
