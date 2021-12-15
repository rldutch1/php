--
-- Table structure for table `onselect`
--

DROP TABLE IF EXISTS `onselect`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `onselect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `birthdate` date NOT NULL DEFAULT '0001-01-01',
  `hometown` varchar(100) DEFAULT NULL,
  `job` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `onselect`
--

LOCK TABLES `onselect` WRITE;
/*!40000 ALTER TABLE `onselect` DISABLE KEYS */;
INSERT INTO `onselect` (`id`, `firstname`, `lastname`, `birthdate`, `hometown`, `job`) VALUES (1,'Robert','Holland','1968-07-08','Scottsdale','Clinical Systems Analyst, RN'),(2,'Stanley','Holland','1968-07-08','Washakie','Police Officer'),(3,'Jeanette','Holland','1968-12-27','Scottsdale','Nurse'),(4,'Leah','Holland','2004-12-03','Scottsdale','Student'),(5,'Jason','Holland','2008-04-03','Scottsdale','Student'),(6,'Keira','Holland','2008-12-01','Scottsdale','Student'),(7,'Aiko','Holland','2015-03-01','Scottsdale','Family Pet'),(8,'Vernon','Holland III','1964-09-09','Columbus','Coordinator'),(9,'Marguerite','Devereux','1937-02-21','Scottsdale','Grandma');
/*!40000 ALTER TABLE `onselect` ENABLE KEYS */;
UNLOCK TABLES;
