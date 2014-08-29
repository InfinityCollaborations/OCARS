-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2014 at 08:22 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--
CREATE DATABASE `cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `Admin_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Admin_Name` varchar(20) NOT NULL,
  `Admin_Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Admin_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`Admin_Id`, `Admin_Name`, `Admin_Password`) VALUES
(3, 'admin', 'admin'),
(4, 'Judy', 'judy');

-- --------------------------------------------------------

--
-- Table structure for table `case_tbl`
--

CREATE TABLE IF NOT EXISTS `case_tbl` (
  `caseNo` int(10) NOT NULL AUTO_INCREMENT,
  `incidentLocation` varchar(30) NOT NULL,
  `crimeDesc` varchar(200) NOT NULL,
  `Station_Name` varchar(20) NOT NULL,
  `victimID` int(10) NOT NULL,
  `suspectID` int(10) NOT NULL,
  `status` varchar(7) NOT NULL,
  PRIMARY KEY (`caseNo`),
  KEY `victimID` (`victimID`),
  KEY `suspectID` (`suspectID`),
  KEY `Station_Name` (`Station_Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- RELATIONS FOR TABLE `case_tbl`:
--   `suspectID`
--       `suspect_tbl` -> `suspectID`
--   `victimID`
--       `victim_tbl` -> `victimID`
--

--
-- Dumping data for table `case_tbl`
--

INSERT INTO `case_tbl` (`caseNo`, `incidentLocation`, `crimeDesc`, `Station_Name`, `victimID`, `suspectID`, `status`) VALUES
(1, 'Kaloleni Area', 'Victim was killed in a domestic dispute involving land struggle', 'Central Police HQ', 2, 3, 'Open'),
(2, 'Nairobi CBD', 'Theft of personal property belonging to the victim at a local supermarket', 'Central Police HQ', 3, 4, 'Closed'),
(3, 'Dandora Area', 'Road Accident along Uhuru Highway involving a personal car and public bus.', 'Central Police HQ', 5, 7, 'Open'),
(4, 'Makadara Area', 'Hit and Run. Suspect escaped but was caught by traffic police after alert was issued on the car registration.', 'Central Police HQ', 4, 5, 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_tbl`
--

CREATE TABLE IF NOT EXISTS `complaint_tbl` (
  `Complaint_Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Id` int(11) NOT NULL,
  `Station_Name` varchar(50) NOT NULL,
  `Complaint_Type` varchar(30) NOT NULL,
  `Complaint_Desc` varchar(100) NOT NULL,
  `Complaint_Date` date NOT NULL,
  `Anonymity` varchar(3) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`Complaint_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `complaint_tbl`
--

INSERT INTO `complaint_tbl` (`Complaint_Id`, `User_Id`, `Station_Name`, `Complaint_Type`, `Complaint_Desc`, `Complaint_Date`, `Anonymity`, `Location`, `Status`) VALUES
(4, 3, 'Central Police HQ', 'Murder', 'Murder at Central Business District', '2014-05-28', 'No', 'Nairobi', 'Processed'),
(5, 3, 'Central Police HQ', 'Drug Possesion', 'The man I work with I suspect he is peddling drugs.', '2014-06-09', 'No', 'Nairobi', 'Processed'),
(12, 3, 'Central Police HQ', 'Hate Crime victimization', 'I am being discriminated against ', '2014-06-09', 'Yes', 'Kayole', 'Processed'),
(18, 3, 'Central Police HQ', 'Domestic Violence', 'My husband has threatened  to kill me', '2014-07-01', 'Yes', 'Kayole', 'Processed'),
(19, 5, 'Roysambu Police Station', 'Aggravated Assault', 'help					', '2014-07-13', 'Yes', 'Roysambu', 'Submited');

-- --------------------------------------------------------

--
-- Table structure for table `evidence_tbl`
--

CREATE TABLE IF NOT EXISTS `evidence_tbl` (
  `evidenceNo` int(10) NOT NULL AUTO_INCREMENT,
  `evidenceDesc` varchar(200) NOT NULL,
  `dateReceived` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `caseNo` int(10) NOT NULL,
  `Station_Name` varchar(40) NOT NULL,
  `policeRec` varchar(7) NOT NULL,
  PRIMARY KEY (`evidenceNo`),
  KEY `caseNo` (`caseNo`),
  KEY `caseNo_2` (`caseNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- RELATIONS FOR TABLE `evidence_tbl`:
--   `caseNo`
--       `case_tbl` -> `caseNo`
--

--
-- Dumping data for table `evidence_tbl`
--

INSERT INTO `evidence_tbl` (`evidenceNo`, `evidenceDesc`, `dateReceived`, `image`, `caseNo`, `Station_Name`, `policeRec`) VALUES
(1, 'Driver had a pen knife and two empty beer bottles', '1991-08-09', 'u.jpeg', 4, 'Central Police HQ', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE IF NOT EXISTS `feedback_tbl` (
  `Feedback_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  PRIMARY KEY (`Feedback_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`Feedback_Id`, `Name`, `Email`, `Mobile`, `Feedback`) VALUES
(1, 'Sam', 'samjob@gmail.com', '0786457349', 'i want to ');

-- --------------------------------------------------------

--
-- Table structure for table `missingperson_tbl`
--

CREATE TABLE IF NOT EXISTS `missingperson_tbl` (
  `Person_Id` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(20) NOT NULL,
  `Middle_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Weight` varchar(11) NOT NULL,
  `Height` varchar(10) NOT NULL,
  `Contact_Person` varchar(20) NOT NULL,
  `Contact_Address` varchar(100) NOT NULL,
  `Contact_City` varchar(20) NOT NULL,
  `Contact_Mobile` int(11) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Station_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`Person_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `missingperson_tbl`
--

INSERT INTO `missingperson_tbl` (`Person_Id`, `First_Name`, `Middle_Name`, `Last_Name`, `Gender`, `Birth_Date`, `Weight`, `Height`, `Contact_Person`, `Contact_Address`, `Contact_City`, `Contact_Mobile`, `Photo`, `Station_Name`) VALUES
(3, '  Malika     ', 'Odom  ', 'Kisaa ', 'Female', '1991-12-09', '169kg', '5 feet', 'Lemar Odom', '4567-00600 Nairobi', 'Nairobi', 710998765, 'grid-img-13.jpg', 'Central Police HQ'),
(4, 'Anna', 'H', 'Wintour', 'Female', '1987-12-09', '64kg', '5 feet 7', 'James Wintour', ' 6575 -00200 Loya Strret Eldoret', 'Eldoret', 78756586, 'images (1).jpg', 'Central Police HQ');

-- --------------------------------------------------------

--
-- Table structure for table `mostwanted_tbl`
--

CREATE TABLE IF NOT EXISTS `mostwanted_tbl` (
  `Wanted_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Wanted_Name` varchar(20) NOT NULL,
  `Wanted_Location` varchar(20) NOT NULL,
  `Wanted_Image` varchar(100) NOT NULL,
  `Wanted_Crime` varchar(100) NOT NULL,
  `Wanted_Desc` varchar(200) NOT NULL,
  `Station_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`Wanted_Id`),
  KEY `Station_Name` (`Station_Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mostwanted_tbl`
--

INSERT INTO `mostwanted_tbl` (`Wanted_Id`, `Wanted_Name`, `Wanted_Location`, `Wanted_Image`, `Wanted_Crime`, `Wanted_Desc`, `Station_Name`) VALUES
(2, 'Muller James Ahmed', 'Nairobi', 'photo1.jpg', 'Terrorism', 'Light skinned an tall with scar on left cheek.', 'Central Police HQ'),
(3, 'Nick Soma  Numa', 'Nairobi', 'images (2).jpg', 'Embezzlement of public CDF Funds', 'Tall, dark skinned, skull tattoo on left arm. No scars', 'Central Police HQ'),
(4, 'Hamisi Hula', 'Garrissa', 'sus1.jpeg', 'Terrorism', 'Tall and lanky of Somali Origin; Linked with Al-Shabab', 'Roysambu Police Station');

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE IF NOT EXISTS `news_tbl` (
  `News_Id` int(11) NOT NULL AUTO_INCREMENT,
  `News_Title` varchar(200) NOT NULL,
  `News_Date` date NOT NULL,
  PRIMARY KEY (`News_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`News_Id`, `News_Title`, `News_Date`) VALUES
(6, 'Ban of Tinted Windows Lifted.', '2006-08-14'),
(7, 'Police to provide security for the Saba Saba Rally to avoid any drama.\r\nthe police have decided to call for peace and report any incidents.', '2014-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `policeinfo_tbl`
--

CREATE TABLE IF NOT EXISTS `policeinfo_tbl` (
  `badgeNo` varchar(7) NOT NULL,
  `PoliceStation` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `surName` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `yearEmployed` date NOT NULL,
  `address` varchar(20) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  PRIMARY KEY (`badgeNo`),
  KEY `PoliceStation` (`PoliceStation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policeinfo_tbl`
--

INSERT INTO `policeinfo_tbl` (`badgeNo`, `PoliceStation`, `firstName`, `surName`, `gender`, `yearEmployed`, `address`, `phoneNumber`) VALUES
('A112267', 'Central Police HQ', 'Eliud', 'Mathu', 'Male', '1997-03-16', '2222-00300 Nairobi', '0789456789'),
('A123467', 'Central Police HQ', 'Gordon', 'Ochieng''', 'Male', '2009-07-27', '6789-00200 Nairobi', '0714634567'),
('A234456', 'Roysambu Police Station', 'Muta', 'Makena', 'Female', '2014-06-01', '6745-00300 Nairobi', '0789345678'),
('A456788', 'Roysambu Police Station', 'James', 'Muthee', 'Male', '2010-04-26', '7560-00200 Nairobi', '0789456789'),
('A764321', 'Central Police HQ', 'Dorcas', 'Kamau', 'Female', '2006-12-06', '1111-00100 Nairobi', '0724139000');

-- --------------------------------------------------------

--
-- Table structure for table `policestation_tbl`
--

CREATE TABLE IF NOT EXISTS `policestation_tbl` (
  `Station_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Station_Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Station_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `policestation_tbl`
--

INSERT INTO `policestation_tbl` (`Station_Id`, `Station_Name`, `Address`, `City`, `Email`, `Mobile`, `UserName`, `Password`) VALUES
(7, 'Central Police HQ', 'University Way', 'Nairobi', 'info@central-police.com', 710778654, 'central', 'hqcentral'),
(8, 'Roysambu Police Station', 'P.O Box 4567 00200 Roysambu', 'Nairobi', 'info@roysambu.com', 710889765, 'roysambu', 'roysambu');

-- --------------------------------------------------------

--
-- Table structure for table `suspect_tbl`
--

CREATE TABLE IF NOT EXISTS `suspect_tbl` (
  `suspectID` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `surName` varchar(50) NOT NULL,
  `alias` varchar(40) NOT NULL,
  `race` varchar(20) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `IDNumber` varchar(10) NOT NULL,
  `mugShot` varchar(100) NOT NULL,
  `arrestDate` date NOT NULL,
  `arrestedBy` varchar(50) NOT NULL,
  `Station_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`suspectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `suspect_tbl`
--

INSERT INTO `suspect_tbl` (`suspectID`, `firstName`, `surName`, `alias`, `race`, `dateOfBirth`, `sex`, `height`, `nationality`, `IDNumber`, `mugShot`, `arrestDate`, `arrestedBy`, `Station_Name`) VALUES
(3, 'Ola', 'Nubia', 'No Alias', 'Hispanian', '1992-09-13', 'Female', '5 feet 8', 'Spaniard', 'E23456', 'b.jpg', '2014-06-02', 'A45678', 'Central Police HQ'),
(4, 'Jacob', 'Zuma', 'Top Man', 'Black', '1978-03-27', 'Male', '5 feet 9', 'South African', 'S66749', 'sus6.jpeg', '2014-06-16', 'A456788', 'Central Police HQ'),
(5, 'Mercy ', 'Mula', 'No Alias', 'White', '1992-11-16', 'Female', '5 feet 6', 'Kenyan', '28491604', 'grid-img-11.jpg', '2014-06-16', 'A123467', 'Central Police HQ'),
(6, 'Kamau', 'Mwendwa', 'Fimbo', 'Black', '1986-05-11', 'Male', '5 feet 9', 'Kenyan', '2867136', 'sus3.jpeg', '2014-06-16', 'A234456', 'Central Police HQ'),
(7, 'Otieno ', 'Obura', 'No Alias', 'Black', '1989-11-13', 'Male', '6 feet', 'Kenyan', '2898140', 'sus4.jpeg', '2014-06-16', 'A764321', 'Central Police HQ');

-- --------------------------------------------------------

--
-- Table structure for table `tipoff_tbl`
--

CREATE TABLE IF NOT EXISTS `tipoff_tbl` (
  `tipOffID` int(11) NOT NULL AUTO_INCREMENT,
  `Station_Name` varchar(50) NOT NULL,
  `tipType` varchar(40) NOT NULL,
  `tipDesc` varchar(100) NOT NULL,
  `tipDate` date NOT NULL,
  `Location` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`tipOffID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tipoff_tbl`
--

INSERT INTO `tipoff_tbl` (`tipOffID`, `Station_Name`, `tipType`, `tipDesc`, `tipDate`, `Location`, `Status`) VALUES
(9, 'Central Police HQ', 'Hate Crime victimization', 'bcibi uiwfbwie,fiwfw', '2014-06-16', 'Nairobi', 'Submited'),
(10, 'Central Police HQ', 'Kidnapping', 'A child has been kidnapped', '2014-07-02', 'Nairobi', 'Submited'),
(12, 'Roysambu Police Station', 'Identity Theft', 'Martin Njuguna is stealing IDs', '2014-07-18', 'Roysambu', 'Submited'),
(13, 'Roysambu Police Station', 'Riot', 'Rowdy youth are being very violent and threatening', '2014-07-19', 'Githurai 44', 'Submited'),
(14, 'Roysambu Police Station', 'Drug Possesion', 'There are two students who are trafficking cocaine', '2014-07-26', 'USIU University', 'Submited');

-- --------------------------------------------------------

--
-- Table structure for table `tips_tbl`
--

CREATE TABLE IF NOT EXISTS `tips_tbl` (
  `Tips_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Tips_Detail` varchar(200) NOT NULL,
  PRIMARY KEY (`Tips_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tips_tbl`
--

INSERT INTO `tips_tbl` (`Tips_Id`, `Tips_Detail`) VALUES
(3, 'Call on 100 in case of Emergency.'),
(4, 'Fill Free to contact Police.'),
(5, 'Avoid crowded places and report any suspicious activities.\r\nWatch the football games at the safety of your home.');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Station_Name` varchar(20) NOT NULL,
  PRIMARY KEY (`User_Id`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`User_Id`, `Name`, `Address`, `City`, `Mobile`, `Email`, `Gender`, `BirthDate`, `UserName`, `Password`, `Station_Name`) VALUES
(3, 'user', 'Nairobi', 'Nairobi', 710998765, 'user@gmail.com', 'Female', '1994-02-08', 'user', 'user', 'Central Police HQ'),
(4, 'Juma Felix', '7570-00200 Mombasa', 'Mombasa', 710779834, 'jumafelix@gmail.com', 'Male', '1991-01-01', 'Felix', 'felix', 'Central Police HQ'),
(5, 'Mary Otieno', 'P.O Box 3456 00200', 'Nairobi', 710997654, 'maryotieno@gmail.com', 'Female', '1998-12-03', 'mary', 'mary', 'Roysambu Police Stat');

-- --------------------------------------------------------

--
-- Table structure for table `victim_tbl`
--

CREATE TABLE IF NOT EXISTS `victim_tbl` (
  `victimID` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `surName` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `race` varchar(40) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `sex` varchar(7) NOT NULL,
  `height` varchar(10) NOT NULL,
  `nationality` varchar(40) NOT NULL,
  `IDNumber` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `Station_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`victimID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `victim_tbl`
--

INSERT INTO `victim_tbl` (`victimID`, `firstName`, `surName`, `alias`, `race`, `dateOfBirth`, `sex`, `height`, `nationality`, `IDNumber`, `photo`, `Station_Name`) VALUES
(1, 'Lisa', 'Bukeko', 'No Alias', 'Mixed Race', '1987-12-08', 'Female', '5 feet 7', 'Kenyan-German', 'E987456', '8c3f2a.jpg', 'Central Police HQ'),
(2, 'Andrew', 'Mageto', 'No alias', 'Black', '1991-06-07', 'Male', '6 feet', 'Kenyan', '28491687', 'sus1.jpeg', 'Central Police HQ'),
(3, 'Millicent', 'Obaga', 'No alias', 'Black', '1985-05-31', 'Female', '5 feet 4', 'Kenyan', '26481777', 'grid-img-12.jpg', 'Central Police HQ'),
(4, 'Jason', 'Kiwili', 'No alias', 'White', '1991-07-23', 'Male', '5 feet 8', 'Ugandan', '25461888', 'sus7.jpeg', 'Central Police HQ'),
(5, 'Larry', 'Odowa', 'No alias', 'Black', '1982-01-01', 'Male', '5 feet 9', 'Kenyan', '26481784', 'sus5.jpeg', 'Central Police HQ');

-- --------------------------------------------------------

--
-- Table structure for table `witness_tbl`
--

CREATE TABLE IF NOT EXISTS `witness_tbl` (
  `witnessID` int(10) NOT NULL AUTO_INCREMENT,
  `caseNo` int(10) NOT NULL,
  `witnessName` varchar(90) NOT NULL,
  `nationalID` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `protection` varchar(10) NOT NULL,
  `statement` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `Station_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`witnessID`),
  KEY `caseNo` (`caseNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- RELATIONS FOR TABLE `witness_tbl`:
--   `caseNo`
--       `case_tbl` -> `caseNo`
--

--
-- Dumping data for table `witness_tbl`
--

INSERT INTO `witness_tbl` (`witnessID`, `caseNo`, `witnessName`, `nationalID`, `address`, `phoneNumber`, `protection`, `statement`, `photo`, `Station_Name`) VALUES
(1, 4, 'Carol Musa', '28196789', '7670-00200 Nairobi', '0710777888', 'No', 'the driver of the bus was over-speeding, hit the victim and ran away.', '', ''),
(2, 1, 'Carol Musa', '28196789', '7670-00200 Nairobi', '0710777889', 'No', 'Driver was over-speeding, hit the victim and sped off.', 'grid-img-10.jpg', 'Central Police HQ'),
(3, 3, 'Natasha Awino', '2996174', '0779-00300 Umoja', '0711766177', 'Yes', 'A bus driver was drunk and the bus had excess passengers hence hitting a personal car.', 'Natasha.jpg', 'Central Police HQ');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `case_tbl`
--
ALTER TABLE `case_tbl`
  ADD CONSTRAINT `case_tbl_ibfk_2` FOREIGN KEY (`suspectID`) REFERENCES `suspect_tbl` (`suspectID`),
  ADD CONSTRAINT `case_tbl_ibfk_1` FOREIGN KEY (`victimID`) REFERENCES `victim_tbl` (`victimID`);

--
-- Constraints for table `evidence_tbl`
--
ALTER TABLE `evidence_tbl`
  ADD CONSTRAINT `evidence_tbl_ibfk_1` FOREIGN KEY (`caseNo`) REFERENCES `case_tbl` (`caseNo`);

--
-- Constraints for table `witness_tbl`
--
ALTER TABLE `witness_tbl`
  ADD CONSTRAINT `witness_tbl_ibfk_1` FOREIGN KEY (`caseNo`) REFERENCES `case_tbl` (`caseNo`);
--
-- Database: `dmyreports`
--
CREATE DATABASE `dmyreports` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dmyreports`;

-- --------------------------------------------------------

--
-- Table structure for table `tblreports`
--

CREATE TABLE IF NOT EXISTS `tblreports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appliedConditions` longtext,
  `txtReportName` text,
  `lstSortName` text,
  `lstSortOrder` text,
  `txtRecPerPage` text,
  `selectedFields` text,
  `selectedTables` text,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblreports`
--

INSERT INTO `tblreports` (`id`, `appliedConditions`, `txtReportName`, `lstSortName`, `lstSortOrder`, `txtRecPerPage`, `selectedFields`, `selectedTables`, `status`) VALUES
(1, '`missingperson_tbl`.`Last_Name` LIKE `missingperson_tbl`.`Last_Name` ~', 'Missing Persons', '`missingperson_tbl`.`Last_Name`', 'ASC', '3', '`missingperson_tbl`.`First_Name`~`missingperson_tbl`.`Last_Name`~`missingperson_tbl`.`Contact_Person`~`missingperson_tbl`.`Contact_Mobile`~', '`missingperson_tbl`~', 0),
(2, '`missingperson_tbl`.`Last_Name` LIKE `missingperson_tbl`.`Last_Name` ~', 'Missing Persons', '`missingperson_tbl`.`Last_Name`', 'ASC', '3', '`missingperson_tbl`.`First_Name`~`missingperson_tbl`.`Last_Name`~`missingperson_tbl`.`Contact_Person`~`missingperson_tbl`.`Contact_Mobile`~', '`missingperson_tbl`~', 1),
(3, '`missingperson_tbl`.`Last_Name` LIKE `missingperson_tbl`.`Last_Name` ~', 'Missing Persons', '`missingperson_tbl`.`Last_Name`', 'ASC', '3', '`missingperson_tbl`.`First_Name`~`missingperson_tbl`.`Last_Name`~`missingperson_tbl`.`Contact_Person`~`missingperson_tbl`.`Contact_Mobile`~', '`missingperson_tbl`~', 1),
(4, '`case_tbl`.`status` LIKE ''%open%'' ~', 'Open Cases', '`case_tbl`.`caseNo`', 'ASC', '3', '`case_tbl`.`caseNo`~`case_tbl`.`incidentLocation`~`case_tbl`.`crimeDesc`~`case_tbl`.`victimID`~`case_tbl`.`suspectID`~`case_tbl`.`status`~', '`case_tbl`~', 0),
(5, '`case_tbl`.`status` LIKE ''%open%'' ~', 'Open Cases', '`case_tbl`.`caseNo`', 'ASC', '3', '`case_tbl`.`caseNo`~`case_tbl`.`incidentLocation`~`case_tbl`.`crimeDesc`~`case_tbl`.`victimID`~`case_tbl`.`suspectID`~`case_tbl`.`status`~', '`case_tbl`~', 1),
(6, '`case_tbl`.`status` LIKE ''%open%'' ~', 'Open Cases', '`case_tbl`.`caseNo`', 'ASC', '3', '`case_tbl`.`caseNo`~`case_tbl`.`incidentLocation`~`case_tbl`.`crimeDesc`~`case_tbl`.`victimID`~`case_tbl`.`suspectID`~`case_tbl`.`status`~', '`case_tbl`~', 1),
(7, '`case_tbl`.`status` LIKE ''%open%'' ~', 'Open Cases', '`case_tbl`.`caseNo`', 'ASC', '3', '`case_tbl`.`caseNo`~`case_tbl`.`incidentLocation`~`case_tbl`.`crimeDesc`~`case_tbl`.`victimID`~`case_tbl`.`suspectID`~`case_tbl`.`status`~', '`case_tbl`~', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
