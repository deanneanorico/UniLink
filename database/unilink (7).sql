-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 04:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unilink`
--

-- --------------------------------------------------------

--
-- Table structure for table `activityform`
--

CREATE TABLE `activityform` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `facultyID` int(100) NOT NULL,
  `activity_title` varchar(255) DEFAULT NULL,
  `campus` varchar(255) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `program` varchar(100) DEFAULT NULL,
  `partner_type` varchar(100) DEFAULT NULL,
  `partner` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `rationale` mediumtext DEFAULT NULL,
  `objective` mediumtext DEFAULT NULL,
  `budget` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activityform`
--

INSERT INTO `activityform` (`id`, `facultyID`, `activity_title`, `campus`, `college`, `program`, `partner_type`, `partner`, `start_date`, `end_date`, `rationale`, `objective`, `budget`) VALUES
('10af254d-5e02-11ee-89ef-f80dac465db8', 0, 'hhsahs', '', 'CABEIHM', 'Bachelor of Science in Accountancy', 'International', 'Philippine National IT Standards Foundation', '2023-09-28', '2023-09-30', '<p>eeeee</p>', '<p>eewerw</p>', ''),
('31459599-633c-11ee-ab68-f80dac465db8', 0, 'Seminar of Waste Disposal', 'ARASOF', 'CAS', 'Bachelor of Science in Criminology', 'International', 'Global University Network for Innovation', '2023-10-07', '2023-10-08', '<p>eew</p>', '<ul><li>eww</li></ul>', 'Fund Partner Agency'),
('48cf0b07-5e8a-11ee-a83b-f80dac465db8', 0, 'Guest Speaker', '', 'CICS', 'Bachelor of Science in Information Technology', 'International', 'Philippine National IT Standards Foundation', '2023-09-29', '2023-09-30', '<ul><li>helpfjd &nbsp; &nbsp;</li></ul>', '<ul><li><i><u>dvfev</u></i></li></ul>', ''),
('79fe51de-5dcc-11ee-8ab0-f80dac465db8', 0, 'Graduation Party-Speaker', '', 'CE', 'Bachelor of Science in Computer Engineering', 'International', 'Philippine National IT Standards Foundation', '2023-09-28', '2023-09-30', '', '', ''),
('7cb08ba0-619b-11ee-a2e7-f80dac465db8', 0, 'Graduation Party-Speaker fdsfsfsdfsdfsdfsgfsgfgggfsgvfgtdhdh', '', 'CABEIHM', 'Bachelor of Science in Accountancy', 'Local', 'Municipal Agriculture Office/Fishery Unit-Nasugbu', '2023-10-03', '2023-10-03', '<ul><li>ssswewe &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; erewrwer</li></ul>', '<p>eqweqwefdswe</p>', ''),
('9c50be8e-619b-11ee-a2e7-f80dac465db8', 0, 'eqrwerer', '', 'CONAHS', 'Bachelor of Science in Nursing', 'Local', 'Jabez Medical Center', '2023-10-07', '2023-10-22', '<p>ewewe</p>', '<p>eccc</p>', ''),
('baf96709-619b-11ee-a2e7-f80dac465db8', 0, 'VADD: Vehicle Accident Detection Device', '', 'CONAHS', 'Bachelor of Science in Nursing', 'Local', 'Municipal Disaster Risk Reduction and Management Office(MDRRMO)-Nasugbu', '2023-11-06', '2023-11-11', '', '', ''),
('bc258286-6046-11ee-958d-f80dac465db8', 0, 'Seminar of Waste Disposal', '', 'CTE', 'Bachelor of Secondary Education major in English', 'Local', 'Municipal Agriculture Office/Fishery Unit-Nasugbu', '2023-10-01', '2023-10-22', '<h4>mhjjjjjolkl</h4>', '', ''),
('c2b95e19-6338-11ee-ab68-f80dac465db8', 0, 'tree planting', 'ARASOF', 'CTE', 'Bachelor of Secondary Education major in English', 'Local', 'Municipal Disaster Risk Reduction and Management Office(MDRRMO)-Nasugbu', '2023-11-04', '2023-11-08', '<p>ghjghgjghk</p>', '<p>iyihijj</p>', ''),
('f43acec5-619b-11ee-a2e7-f80dac465db8', 0, 'Seminar of IT', '', 'CONAHS', 'Bachelor of Science in Nursing', 'International', 'Global University Network for Innovation', '2023-10-29', '2023-10-28', '<p>qwqwq</p>', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `activity_representatives`
--

CREATE TABLE `activity_representatives` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `activityform_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_representatives`
--

INSERT INTO `activity_representatives` (`id`, `activityform_id`) VALUES
('10af37be-5e02-11ee-89ef-f80dac465db8', '10af254d-5e02-11ee-89ef-f80dac465db8'),
('10af4751-5e02-11ee-89ef-f80dac465db8', '10af254d-5e02-11ee-89ef-f80dac465db8'),
('10af5724-5e02-11ee-89ef-f80dac465db8', '10af254d-5e02-11ee-89ef-f80dac465db8'),
('48cf16fd-5e8a-11ee-a83b-f80dac465db8', '48cf0b07-5e8a-11ee-a83b-f80dac465db8'),
('48cf1fc2-5e8a-11ee-a83b-f80dac465db8', '48cf0b07-5e8a-11ee-a83b-f80dac465db8'),
('79fe89d1-5dcc-11ee-8ab0-f80dac465db8', '79fe51de-5dcc-11ee-8ab0-f80dac465db8'),
('79fe9d37-5dcc-11ee-8ab0-f80dac465db8', '79fe51de-5dcc-11ee-8ab0-f80dac465db8'),
('79feb04c-5dcc-11ee-8ab0-f80dac465db8', '79fe51de-5dcc-11ee-8ab0-f80dac465db8'),
('7cb09642-619b-11ee-a2e7-f80dac465db8', '7cb08ba0-619b-11ee-a2e7-f80dac465db8'),
('7cb0a083-619b-11ee-a2e7-f80dac465db8', '7cb08ba0-619b-11ee-a2e7-f80dac465db8'),
('7cb0a9c2-619b-11ee-a2e7-f80dac465db8', '7cb08ba0-619b-11ee-a2e7-f80dac465db8'),
('9c50c76d-619b-11ee-a2e7-f80dac465db8', '9c50be8e-619b-11ee-a2e7-f80dac465db8'),
('9c50cf92-619b-11ee-a2e7-f80dac465db8', '9c50be8e-619b-11ee-a2e7-f80dac465db8'),
('9c50d517-619b-11ee-a2e7-f80dac465db8', '9c50be8e-619b-11ee-a2e7-f80dac465db8'),
('baf987bd-619b-11ee-a2e7-f80dac465db8', 'baf96709-619b-11ee-a2e7-f80dac465db8'),
('baf99575-619b-11ee-a2e7-f80dac465db8', 'baf96709-619b-11ee-a2e7-f80dac465db8'),
('baf9aaa4-619b-11ee-a2e7-f80dac465db8', 'baf96709-619b-11ee-a2e7-f80dac465db8'),
('bc25b61c-6046-11ee-958d-f80dac465db8', 'bc258286-6046-11ee-958d-f80dac465db8'),
('bc25c6a1-6046-11ee-958d-f80dac465db8', 'bc258286-6046-11ee-958d-f80dac465db8'),
('bc25d37e-6046-11ee-958d-f80dac465db8', 'bc258286-6046-11ee-958d-f80dac465db8'),
('f43ad90c-619b-11ee-a2e7-f80dac465db8', 'f43acec5-619b-11ee-a2e7-f80dac465db8'),
('f43ae287-619b-11ee-a2e7-f80dac465db8', 'f43acec5-619b-11ee-a2e7-f80dac465db8'),
('f43aeefa-619b-11ee-a2e7-f80dac465db8', 'f43acec5-619b-11ee-a2e7-f80dac465db8');

-- --------------------------------------------------------

--
-- Table structure for table `activity_representatives_responsibilities`
--

CREATE TABLE `activity_representatives_responsibilities` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `activity_representatives_id` varchar(255) DEFAULT NULL,
  `responsibility` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_representatives_responsibilities`
--

INSERT INTO `activity_representatives_responsibilities` (`id`, `activity_representatives_id`, `responsibility`) VALUES
('10b7380e-5e02-11ee-89ef-f80dac465db8', '10af37be-5e02-11ee-89ef-f80dac465db8', 'Identify the projects overall goal, outcome and objectives'),
('10b79766-5e02-11ee-89ef-f80dac465db8', '10af4751-5e02-11ee-89ef-f80dac465db8', 'Act as technical team in the online platforms'),
('48d59628-5e8a-11ee-a83b-f80dac465db8', '48cf16fd-5e8a-11ee-a83b-f80dac465db8', ' Assist in the preparation and implementing of the extension program');

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `id` int(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `activityform_id` varchar(255) DEFAULT NULL,
  `item_description` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_cost` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id`, `activityform_id`, `item_description`, `quantity`, `unit_cost`) VALUES
('10b7fc9d-5e02-11ee-89ef-f80dac465db8', '10af254d-5e02-11ee-89ef-f80dac465db8', 'juice', 50, 20),
('10b86826-5e02-11ee-89ef-f80dac465db8', '10af254d-5e02-11ee-89ef-f80dac465db8', 'sandwich', 50, 25),
('48d6342e-5e8a-11ee-a83b-f80dac465db8', '48cf0b07-5e8a-11ee-a83b-f80dac465db8', 'sandwich ', 50, 25),
('48d6b838-5e8a-11ee-a83b-f80dac465db8', '48cf0b07-5e8a-11ee-a83b-f80dac465db8', 'juice', 50, 30),
('7a0be088-5dcc-11ee-8ab0-f80dac465db8', '79fe51de-5dcc-11ee-8ab0-f80dac465db8', 'Item 1', 3, 3000),
('7cba9dde-619b-11ee-a2e7-f80dac465db8', '7cb08ba0-619b-11ee-a2e7-f80dac465db8', '', 0, 0),
('9c53ec07-619b-11ee-a2e7-f80dac465db8', '9c50be8e-619b-11ee-a2e7-f80dac465db8', 'Item 1', 23, 46),
('bafcbd6b-619b-11ee-a2e7-f80dac465db8', 'baf96709-619b-11ee-a2e7-f80dac465db8', '', 0, 0),
('bc2e2363-6046-11ee-958d-f80dac465db8', 'bc258286-6046-11ee-958d-f80dac465db8', '', 0, 0),
('f43ea03f-619b-11ee-a2e7-f80dac465db8', 'f43acec5-619b-11ee-a2e7-f80dac465db8', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `id` int(50) NOT NULL,
  `campus_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`id`, `campus_name`, `address`) VALUES
(5, 'ARASOF-Nasugbu', 'Nasugbu, Batangas'),
(8, 'Alangilan Campus', 'Alangilan, Batangas'),
(9, 'Balayan Campus', 'Balayan, Batangas'),
(10, 'JPLPC-Malvar Campus', 'Malvar, Batangas'),
(15, 'Pablo Borbon Campus', 'Rizal Avenue, Batangas '),
(17, 'Lemery Campus', 'Lemery, Batangas'),
(20, 'Mabini Campus', 'Mabini, Batangas'),
(21, 'Lipa Campus', 'Lipa, Batangas'),
(22, 'Rosario Campus', 'Rosario, Batangas'),
(23, 'San Juan Campus', 'San Juan, Batangas'),
(24, 'Lobo Campus', 'Lobo, Batangas');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `collegeID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `abbreviation` varchar(50) DEFAULT NULL,
  `campusID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`collegeID`, `name`, `abbreviation`, `campusID`) VALUES
(1, 'College of Informatic and Sciences', 'CICS', 5),
(2, 'College of Arts and Sciences', 'CAS', 8);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `facultyID` int(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `mid_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `category`, `name`) VALUES
(1, 'Local', 'Jabez Medical Center'),
(2, 'International', 'Philippine National IT Standards Foundation'),
(3, 'International', 'Global University Network for Innovation'),
(4, 'International', 'Hospitality Institute of America-Philippines Inc.'),
(5, 'Local', 'Department of Information and Communications Technology'),
(6, 'Local', 'Municipal Disaster Risk Reduction and Management Office(MDRRMO)-Nasugbu'),
(7, 'Local', 'Municipal Agriculture Office/Fishery Unit-Nasugbu');

-- --------------------------------------------------------

--
-- Table structure for table `representatives`
--

CREATE TABLE `representatives` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `activity_representatives_id` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `representatives`
--

INSERT INTO `representatives` (`id`, `activity_representatives_id`, `name`, `designation`) VALUES
('10b587c5-5e02-11ee-89ef-f80dac465db8', '10af37be-5e02-11ee-89ef-f80dac465db8', 'Assoc. Prof. Albertson D. Amante', 'Vice for Research Development and Extension Services'),
('10b63b98-5e02-11ee-89ef-f80dac465db8', '10af37be-5e02-11ee-89ef-f80dac465db8', 'sdsd', 'edd'),
('10b6821c-5e02-11ee-89ef-f80dac465db8', '10af4751-5e02-11ee-89ef-f80dac465db8', 'Atty. Noel Alberto S. Omandap', 'Vice President for Development and External Affairs'),
('48d2d694-5e8a-11ee-a83b-f80dac465db8', '48cf16fd-5e8a-11ee-a83b-f80dac465db8', 'Dr. Expedito V. Acorda', 'Chancellor'),
('48d363b8-5e8a-11ee-a83b-f80dac465db8', '48cf16fd-5e8a-11ee-a83b-f80dac465db8', 'Dr. Rosalinda M. Comia', 'Campus Director'),
('48d41516-5e8a-11ee-a83b-f80dac465db8', '48cf16fd-5e8a-11ee-a83b-f80dac465db8', 'Assoc. Prof. Sandy M. Gonzales', 'Campus Director'),
('48d51204-5e8a-11ee-a83b-f80dac465db8', '48cf16fd-5e8a-11ee-a83b-f80dac465db8', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `representative_roles`
--

CREATE TABLE `representative_roles` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `name` varchar(100) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `representative_roles`
--

INSERT INTO `representative_roles` (`id`, `name`, `designation`) VALUES
('5633de9a-5318-11ee-aea5-0a0027000002', 'Dr. Tirso A. Ronquillo', 'University President'),
('56347be7-5318-11ee-aea5-0a0027000002', 'Dr. Charmaine Rose I. Trivino', 'Vice President for Academic Affairs'),
('56347ce6-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Albertson D. Amante', 'Vice for Research Development and Extension Services'),
('56347d12-5318-11ee-aea5-0a0027000002', 'Atty. Luzviminda V. Rosales', 'Vice President for Administrator and Financer'),
('56347d3b-5318-11ee-aea5-0a0027000002', 'Atty. Noel Alberto S. Omandap', 'Vice President for Development and External Affairs'),
('56347d5f-5318-11ee-aea5-0a0027000002', 'Dr. Expedito V. Acorda', 'Chancellor'),
('56347d89-5318-11ee-aea5-0a0027000002', 'Dr. Rosalinda M. Comia', 'Campus Director'),
('56347da9-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Sandy M. Gonzales', 'Campus Director'),
('56347dce-5318-11ee-aea5-0a0027000002', 'Dr. Joy M. Reyes', 'Campus Director'),
('56347ebc-5318-11ee-aea5-0a0027000002', 'Dr. Jessie A. Montalbo', 'Chancellor'),
('56347ede-5318-11ee-aea5-0a0027000002', 'Dr. Rhobert E. Alvarez', 'Capus Director'),
('56347f03-5318-11ee-aea5-0a0027000002', 'Dr. Romel U. Briones', 'Campus Director'),
('56347f23-5318-11ee-aea5-0a0027000002', 'Dr. Jodi Belina A. Bejer', 'Campus Director'),
('56347f43-5318-11ee-aea5-0a0027000002', 'Atty. Alvin R. De Silva', 'Chancellor'),
('56347f63-5318-11ee-aea5-0a0027000002', 'Dr. Philip Y. Del Rosario', 'Chancellor'),
('56347f84-5318-11ee-aea5-0a0027000002', 'Dr. Enrico M. Dalangin', 'Chancellor'),
('56347fa3-5318-11ee-aea5-0a0027000002', 'Dr. Vaberlie P. Mandane Garcia', 'Director for Extension Servies'),
('56347fcb-5318-11ee-aea5-0a0027000002', 'Dr. Benedict O. Medina', 'Asst. Director for Extension Monitoring and Impace Assessment'),
('56347fea-5318-11ee-aea5-0a0027000002', 'Ms. Kristia Lei A. Reyes', 'Asst. Director for Community Development Services'),
('5634800b-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Maria Theresa A. Hernandez', 'Asst. Director for Gender and Development Advocacies'),
('5634806d-5318-11ee-aea5-0a0027000002', 'Dr. Vaberlie P. Mandane-Garcia', 'Vice Chancellor for Research, Development and Extension Services'),
('56348096-5318-11ee-aea5-0a0027000002', 'Dr. Elisa D. Gutierrez', 'Vice Chancellor for Research, Development and Extension Services'),
('563480b5-5318-11ee-aea5-0a0027000002', 'Dr. Eufronia Magundayao', 'Vice Chancellor for Research, Development and Extension Services'),
('563480d6-5318-11ee-aea5-0a0027000002', 'Asst. Prof. Rosana C. Lat', 'Vice Chancellor for Research, Development and Extension Services'),
('563480f8-5318-11ee-aea5-0a0027000002', 'Assoc. Prof. Maria Theresa A. Hernandez', 'Vice Chancellor for Research, Development and Extension Services');

-- --------------------------------------------------------

--
-- Table structure for table `responsibilities`
--

CREATE TABLE `responsibilities` (
  `id` varchar(255) NOT NULL DEFAULT uuid(),
  `role` varchar(100) NOT NULL,
  `responsibility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `responsibilities`
--

INSERT INTO `responsibilities` (`id`, `role`, `responsibility`) VALUES
('cbc3acfb-5318-11ee-aea5-0a0027000002', 'Project Leader/s', 'Spearhead the extension project'),
('cbc44b18-5318-11ee-aea5-0a0027000002', 'Project Leader/s', 'Identify the projects overall goal, outcome and objectives'),
('cbc44ded-5318-11ee-aea5-0a0027000002', 'Project Leader/s', 'Monitor the flow of the training'),
('cbc44e89-5318-11ee-aea5-0a0027000002', 'Project Leader/s', 'Prepare project/activity proposal'),
('cbc44eca-5318-11ee-aea5-0a0027000002', 'Project Leader/s', 'Coordinate with the coorperating agency/resource persons'),
('cbc44f0f-5318-11ee-aea5-0a0027000002', 'Asst. Project Leader/s', 'Assist the project leader in the planning, implementation, monitoring and evaluation of the project'),
('cbc44f54-5318-11ee-aea5-0a0027000002', 'Asst. Project Leader/s', 'Delegate work to the project, staff'),
('cbc44f96-5318-11ee-aea5-0a0027000002', 'Asst. Project Leader/s', 'Assist in coordination with the coorperating agency'),
('cbc44fd1-5318-11ee-aea5-0a0027000002', 'Asst. Project Leader/s', 'Assign resource persons from the University with specialization in the topics'),
('cbc4500f-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Act as technical team in the online platforms'),
('cbc45041-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Coordinate with the rest of the project management team'),
('cbc45079-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Assist in communication with the coorperating agencies'),
('cbc450ac-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Assist in organization of the beneficiaries'),
('cbc450e4-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', ' Assist in the preparation and implementing of the extension program'),
('cbc4511a-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Prepare training materials and presentations'),
('cbc45151-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Prepare required reports/documentation'),
('cbc452c7-5318-11ee-aea5-0a0027000002', 'Project Coordinator/s or Staff', 'Assist in the morning and evaluation of the extension program');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activityform`
--
ALTER TABLE `activityform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_representatives`
--
ALTER TABLE `activity_representatives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activityform_id` (`activityform_id`);

--
-- Indexes for table `activity_representatives_responsibilities`
--
ALTER TABLE `activity_representatives_responsibilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_representatives_id` (`activity_representatives_id`);

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activityform_id` (`activityform_id`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`collegeID`),
  ADD KEY `campusID` (`campusID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`facultyID`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `representatives`
--
ALTER TABLE `representatives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_representatives_id` (`activity_representatives_id`);

--
-- Indexes for table `representative_roles`
--
ALTER TABLE `representative_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responsibilities`
--
ALTER TABLE `responsibilities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `collegeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `facultyID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_representatives`
--
ALTER TABLE `activity_representatives`
  ADD CONSTRAINT `activity_representatives_ibfk_1` FOREIGN KEY (`activityform_id`) REFERENCES `activityform` (`id`);

--
-- Constraints for table `activity_representatives_responsibilities`
--
ALTER TABLE `activity_representatives_responsibilities`
  ADD CONSTRAINT `activity_representatives_responsibilities_ibfk_1` FOREIGN KEY (`activity_representatives_id`) REFERENCES `activity_representatives` (`id`);

--
-- Constraints for table `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `budget_ibfk_1` FOREIGN KEY (`activityform_id`) REFERENCES `activityform` (`id`);

--
-- Constraints for table `college`
--
ALTER TABLE `college`
  ADD CONSTRAINT `college_ibfk_1` FOREIGN KEY (`campusID`) REFERENCES `campus` (`id`);

--
-- Constraints for table `representatives`
--
ALTER TABLE `representatives`
  ADD CONSTRAINT `representatives_ibfk_1` FOREIGN KEY (`activity_representatives_id`) REFERENCES `activity_representatives` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
