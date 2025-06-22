 CREATE TABLE `mytable` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` enum('male','female') NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

